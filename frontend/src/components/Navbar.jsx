import { useState, useEffect } from "react";
import CATEGORII from "../../constants/Categorii";
import { FaShoppingBag } from "react-icons/fa";
import Logo from "../photos/logo.png";

function Navbar() {
  const [isScrolled, setIsScrolled] = useState(false);

  useEffect(() => {
    const handleScroll = () => {
      if (window.scrollY > window.innerHeight) {
        setIsScrolled(true);
      } else {
        setIsScrolled(false);
      }
    };

    window.addEventListener("scroll", handleScroll);
    return () => window.removeEventListener("scroll", handleScroll);
  }, []);

  return (
    <div
      className={`sticky top-0 z-50 flex justify-between items-center px-4 md:px-16 md:py-4 transition-colors duration-300 ${
        isScrolled
          ? "bg-white text-white shadow-md"
          : "bg-transparent text-white"
      }`}
    >
      {/* Logo */}
      <img src={Logo} className="w-36 h-auto" alt="Logo" />

      {/* Category Links */}
      <ul
        className={`hidden sm:flex flex-row gap-4 md:gap-10 px-4 py-2 md:px-6 md:py-3 rounded-full ${
          isScrolled
            ? "text-white bg-[#FF6A00]"
            : "text-white bg-[#FF6A00] bg-opacity-75"
        }`}
      >
        {CATEGORII.map((categorie, index) => (
          <li key={index} className="text-sm md:text-lg font-bold">
            <a
              href=""
              className="transition-transform transform hover:scale-105 hover:bg-[#FF8500] hover:text-opacity-90 px-4 py-2 rounded-full"
            >
              {categorie.nume}
            </a>
          </li>
        ))}
      </ul>

      {/* Buttons */}
      <div className="flex flex-row gap-2 md:gap-4">
        <button
          className={`px-3 py-2 md:px-4 md:py-2 rounded-full flex justify-center items-center font-bold transition-transform transform hover:scale-105 hover:shadow-lg ${
            isScrolled
              ? "text-white bg-[#FF6A00] hover:bg-[#FF8500]"
              : "text-white bg-[#FF6A00] bg-opacity-75 hover:bg-opacity-90 hover:bg-[#FF8500]"
          }`}
        >
          Log in
        </button>
        <button
          className={`px-3 py-2 md:px-4 md:py-2 rounded-full flex justify-center items-center font-bold transition-transform transform hover:scale-105 hover:shadow-lg ${
            isScrolled
              ? "text-white bg-[#FF6A00] hover:bg-[#FF8500]"
              : "text-white bg-[#FF6A00] bg-opacity-75 hover:bg-opacity-90 hover:bg-[#FF8500]"
          }`}
        >
          Register
        </button>
        <button
          className={`px-3 py-2 md:px-4 md:py-2 rounded-full flex justify-center items-center font-bold transition-transform transform hover:scale-105 hover:shadow-lg ${
            isScrolled
              ? "text-white bg-[#FF6A00] hover:bg-[#FF8500]"
              : "text-white bg-[#FF6A00] bg-opacity-75 hover:bg-opacity-90 hover:bg-[#FF8500]"
          }`}
        >
          <FaShoppingBag className="w-4 h-4 md:w-5 md:h-5" />
        </button>
      </div>
    </div>
  );
}

export default Navbar;
