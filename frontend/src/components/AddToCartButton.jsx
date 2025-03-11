import React, { useState, useContext } from "react";
import axios from "axios";
import { useCart } from "../context/CartContext";
import { UserContext } from "../context/UserContext";
import { FaMinus, FaPlus, FaShoppingCart } from "react-icons/fa";
import { CgSpinner } from "react-icons/cg";
import WarningMessage from "../context/WarningMessage";

const AddToCartButton = ({ productType, productId, className }) => {
  const [loading, setLoading] = useState(false);
  const [quantity, setQuantity] = useState(1);
  const [showWarning, setShowWarning] = useState(false);
  const { updateCartCount } = useCart();
  const { isAuthenticated } = useContext(UserContext);

  const addToCart = async () => {
    if (!isAuthenticated) {
      setShowWarning(true);
      setTimeout(() => {
        setShowWarning(false);
      }, 3000);
      return;
    }

    try {
      setLoading(true);
      const token = localStorage.getItem("token");

      await axios.post(
        "http://localhost:8000/api/cart/add",
        {
          product_id: productId,
          product_type: productType,
          quantity: quantity,
        },
        {
          headers: {
            Authorization: `Bearer ${token}`,
            Accept: "application/json",
            "Content-Type": "application/json",
          },
        }
      );

      updateCartCount();
    } catch (error) {
      console.error("Error adding to cart:", error);
    } finally {
      setLoading(false);
      setQuantity(1);
    }
  };

  return (
    <>
      {showWarning && <WarningMessage />}
      <div className="flex items-center gap-3">
        <div className="flex items-center bg-gray-50 rounded-full border border-gray-200 p-1">
          <button
            onClick={() => quantity > 1 && setQuantity((q) => q - 1)}
            className={`w-8 h-8 flex items-center justify-center text-gray-600 rounded-full transition-all duration-300
              ${
                isAuthenticated
                  ? "hover:text-orange-500 hover:bg-gray-100"
                  : "opacity-50 cursor-not-allowed"
              }`}
            disabled={!isAuthenticated}
          >
            <FaMinus className="text-sm" />
          </button>
          <span className="w-10 text-center font-medium text-gray-700">
            {quantity}
          </span>
          <button
            onClick={() => setQuantity((q) => q + 1)}
            className={`w-8 h-8 flex items-center justify-center text-gray-600 rounded-full transition-all duration-300
              ${
                isAuthenticated
                  ? "hover:text-orange-500 hover:bg-gray-100"
                  : "opacity-50 cursor-not-allowed"
              }`}
            disabled={!isAuthenticated}
          >
            <FaPlus className="text-sm" />
          </button>
        </div>
        <button
          onClick={addToCart}
          disabled={loading}
          className={
            className ||
            `flex-1 px-6 py-3 rounded-full flex justify-center items-center gap-2 font-semibold transition-all duration-300 transform hover:scale-102 hover:shadow-lg text-white 
            ${
              isAuthenticated
                ? "bg-orange-500 hover:bg-orange-600"
                : "bg-gray-400 cursor-not-allowed"
            }
            disabled:bg-opacity-50 disabled:cursor-not-allowed disabled:transform-none disabled:shadow-none`
          }
        >
          {loading ? (
            <>
              <CgSpinner className="animate-spin text-xl" />
              Adding...
            </>
          ) : (
            <>
              <FaShoppingCart className="text-lg" />
              {isAuthenticated ? "Add to cart" : "Login required"}
            </>
          )}
        </button>
      </div>
    </>
  );
};

export default AddToCartButton;
