import { createContext, useState, useContext, useEffect } from "react";
import axios from "axios";

const CartContext = createContext();

export function CartProvider({ children }) {
  const [cartItemsCount, setCartItemsCount] = useState(0);

  const updateCartCount = async () => {
    try {
      const token = localStorage.getItem("token");
      const response = await axios.get("http://localhost:8000/api/cart", {
        headers: {
          Authorization: `Bearer ${token}`,
          Accept: "application/json",
          "Content-Type": "application/json",
        },
      });
      const totalItems = response.data.reduce(
        (sum, item) => sum + item.quantity,
        0
      );
      setCartItemsCount(totalItems);
    } catch (error) {
      console.error("Error fetching cart count:", error);
    }
  };

  return (
    <CartContext.Provider value={{ cartItemsCount, updateCartCount }}>
      {children}
    </CartContext.Provider>
  );
}

export function useCart() {
  return useContext(CartContext);
}
