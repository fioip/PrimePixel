// Cart.jsx
import React, { useState, useEffect, useContext } from "react";
import axios from "axios";
import { useNavigate, Link } from "react-router-dom";
import SuccessMessage from "../components/SuccessMessage";
import { UserContext } from "../context/UserContext";
import { useCart } from "../context/CartContext";
import {
  MdDeleteForever,
  MdShoppingCart,
  MdRemoveShoppingCart,
} from "react-icons/md";
import { FaSignInAlt, FaUserPlus, FaMinus, FaPlus } from "react-icons/fa";

function Cart() {
  const [cartItems, setCartItems] = useState([]);
  const [loading, setLoading] = useState(true);
  const [showSuccess, setShowSuccess] = useState(false);
  const { isAuthenticated } = useContext(UserContext);
  const { updateCartCount } = useCart();
  const navigate = useNavigate();

  const getAuthHeaders = () => {
    const token = localStorage.getItem("token");
    return {
      Authorization: `Bearer ${token}`,
      Accept: "application/json",
      "Content-Type": "application/json",
    };
  };

  const fetchCart = async () => {
    try {
      const response = await axios.get("http://localhost:8000/api/cart", {
        headers: getAuthHeaders(),
      });
      setCartItems(response.data);
      updateCartCount();
    } catch (error) {
      console.error("Error fetching cart:", error);
    } finally {
      setLoading(false);
    }
  };

  useEffect(() => {
    if (isAuthenticated) {
      fetchCart();
    } else {
      setLoading(false);
      setCartItems([]);
    }
  }, [isAuthenticated]);

  const updateQuantity = async (itemId, newQuantity) => {
    if (newQuantity < 1) return;

    try {
      await axios.put(
        `http://localhost:8000/api/cart/update/${itemId}`,
        {
          quantity: newQuantity,
        },
        {
          headers: getAuthHeaders(),
        }
      );
      fetchCart();
    } catch (error) {
      console.error("Error updating quantity:", error);
    }
  };

  const removeItem = async (itemId) => {
    try {
      await axios.delete(`http://localhost:8000/api/cart/remove/${itemId}`, {
        headers: getAuthHeaders(),
      });
      fetchCart();
    } catch (error) {
      console.error("Error removing item:", error);
    }
  };

  const subtotal = cartItems.reduce(
    (sum, item) => sum + item.price * item.quantity,
    0
  );
  const shipping = subtotal > 0 ? 15 : 0;
  const total = subtotal + shipping;

  const handleCheckout = async () => {
    if (!isAuthenticated) {
      navigate("/login");
      return;
    }

    try {
      // Folosim promisurile pentru a șterge toate produsele din coș unul câte unul
      const deletePromises = cartItems.map((item) =>
        axios.delete(`http://localhost:8000/api/cart/remove/${item.id}`, {
          headers: getAuthHeaders(),
        })
      );

      await Promise.all(deletePromises);

      setCartItems([]); // Golim coșul în interfață
      updateCartCount(); // Actualizăm numărul de produse din coș
      setShowSuccess(true); // Arătăm mesajul de succes

      // Ascundem mesajul de succes după 3 secunde
      setTimeout(() => {
        setShowSuccess(false);
      }, 3000);
    } catch (error) {
      console.error("Error during checkout:", error);
    }
  };

  if (!isAuthenticated) {
    return (
      <div className="min-h-[70vh] flex items-center justify-center bg-gray-50 px-4">
        <div className="text-center p-8 bg-white rounded-2xl shadow-xl max-w-md w-full border border-gray-100">
          <div className="mb-6 text-orange-500">
            <MdShoppingCart className="mx-auto text-7xl animate-bounce" />
          </div>
          <h2 className="text-3xl font-bold text-gray-800 mb-4">
            Welcome to Your Cart
          </h2>
          <p className="text-gray-600 mb-8 leading-relaxed">
            Log in to your account or create a new one to start shopping and
            track your orders.
          </p>
          <div className="flex flex-col sm:flex-row gap-4 justify-center">
            <Link
              to="/Login"
              className="flex items-center justify-center gap-2 px-8 py-3 bg-orange-500 text-white rounded-full font-semibold hover:bg-orange-600 transition-all duration-300 transform hover:scale-105 hover:shadow-lg"
            >
              <FaSignInAlt className="text-lg" />
              <span>Log In</span>
            </Link>
            <Link
              to="/Register"
              className="flex items-center justify-center gap-2 px-8 py-3 bg-white text-gray-700 rounded-full font-semibold border-2 border-gray-200 hover:border-orange-500 hover:text-orange-500 transition-all duration-300 transform hover:scale-105 hover:shadow-lg"
            >
              <FaUserPlus className="text-lg" />
              <span>Register</span>
            </Link>
          </div>
        </div>
      </div>
    );
  }

  if (loading) {
    return (
      <div className="min-h-[60vh] flex items-center justify-center">
        <div className="text-center text-gray-500">
          <div className="animate-spin text-orange-500 text-4xl mb-4">⚙️</div>
          Loading...
        </div>
      </div>
    );
  }

  return (
    <div className="max-w-4xl mx-auto p-4 min-h-[60vh]">
      {showSuccess && <SuccessMessage />}

      <h1 className="text-3xl font-bold mb-8 text-gray-800 flex items-center gap-3">
        <MdShoppingCart className="text-orange-500" />
        My Cart
      </h1>

      <div className="bg-white rounded-xl shadow-lg overflow-hidden">
        {cartItems.length === 0 ? (
          <div className="p-12 text-center">
            <MdRemoveShoppingCart className="mx-auto text-6xl text-gray-300 mb-4" />
            <p className="text-gray-500 text-lg mb-8">Your cart is empty</p>
            <Link
              to="/"
              className="inline-flex items-center gap-2 px-8 py-3 bg-orange-500 text-white rounded-full font-semibold hover:bg-orange-600 transition-all duration-300 transform hover:scale-105 hover:shadow-lg"
            >
              <MdShoppingCart className="text-xl" />
              Start Shopping
            </Link>
          </div>
        ) : (
          <>
            <div className="divide-y divide-gray-100">
              {cartItems.map((item) => (
                <div
                  key={item.id}
                  className="p-6 flex items-center space-x-6 hover:bg-gray-50 transition-colors"
                >
                  <img
                    src={`http://localhost:8000/${item.image}`}
                    alt={item.name}
                    className="w-32 h-32 object-contain rounded-lg border border-gray-200 p-2"
                  />
                  <div className="flex-1">
                    <h3 className="text-lg font-semibold text-gray-800">
                      {item.name}
                    </h3>
                    <p className="text-orange-500 font-bold text-xl mt-1">
                      {item.price} €
                    </p>
                    <div className="flex items-center space-x-3 mt-4">
                      <button
                        onClick={() =>
                          updateQuantity(item.id, item.quantity - 1)
                        }
                        className="w-8 h-8 flex items-center justify-center text-gray-600 hover:text-orange-500 bg-gray-100 hover:bg-gray-200 rounded-full transition-all duration-300"
                      >
                        <FaMinus />
                      </button>
                      <span className="w-12 text-center font-medium text-gray-700">
                        {item.quantity}
                      </span>
                      <button
                        onClick={() =>
                          updateQuantity(item.id, item.quantity + 1)
                        }
                        className="w-8 h-8 flex items-center justify-center text-gray-600 hover:text-orange-500 bg-gray-100 hover:bg-gray-200 rounded-full transition-all duration-300"
                      >
                        <FaPlus />
                      </button>
                    </div>
                  </div>
                  <button
                    onClick={() => removeItem(item.id)}
                    className="text-gray-400 hover:text-red-500 text-3xl transition-colors duration-300"
                  >
                    <MdDeleteForever />
                  </button>
                </div>
              ))}
            </div>

            <div className="p-6 bg-gray-50 border-t border-gray-100">
              <div className="space-y-3 text-lg">
                <div className="flex justify-between text-gray-600">
                  <span>Subtotal</span>
                  <span className="font-medium">{subtotal.toFixed(2)} €</span>
                </div>
                <div className="flex justify-between text-gray-600">
                  <span>Shipping</span>
                  <span className="font-medium">{shipping.toFixed(2)} €</span>
                </div>
                <div className="flex justify-between pt-3 border-t border-gray-200 text-xl font-bold">
                  <span>Total</span>
                  <span className="text-orange-500">{total.toFixed(2)} €</span>
                </div>
              </div>

              <button
                onClick={handleCheckout}
                className="w-full mt-6 py-4 px-6 rounded-full font-bold text-white bg-orange-500 hover:bg-orange-600 transition-all duration-300 transform hover:scale-105 focus:outline-none focus:ring-2 focus:ring-orange-500 focus:ring-offset-2 flex items-center justify-center gap-2"
              >
                <MdShoppingCart className="text-xl" />
                Proceed to Checkout
              </button>
            </div>
          </>
        )}
      </div>
    </div>
  );
}

export default Cart;
