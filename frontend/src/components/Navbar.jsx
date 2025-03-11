import { useState, useEffect, useContext, useRef } from "react";
import { Link, useNavigate, useLocation } from "react-router-dom";
import { FaShoppingBag, FaUserCircle } from "react-icons/fa";
import { FiUser } from "react-icons/fi";
import { IoIosArrowDown } from "react-icons/io";
import { UserContext } from "../context/UserContext";
import { useCart } from "../context/CartContext";
import Logo from "../photos/logo.png";

function Navbar() {
  const navigate = useNavigate();
  const location = useLocation();
  const { user, isAuthenticated, setUser, setIsAuthenticated } =
    useContext(UserContext);
  const { cartItemsCount, updateCartCount } = useCart();
  const [isScrolled, setIsScrolled] = useState(false);
  const [showProfileMenu, setShowProfileMenu] = useState(false);
  const [showGearMenu, setShowGearMenu] = useState(false);
  const [dropDown, setDropDown] = useState(false);
  const dropdownRef = useRef(null);

  useEffect(() => {
    if (isAuthenticated) {
      updateCartCount();
    }
  }, [isAuthenticated]);

  useEffect(() => {
    const handleScroll = () => {
      setIsScrolled(window.scrollY > 100);
    };

    window.addEventListener("scroll", handleScroll);
    return () => window.removeEventListener("scroll", handleScroll);
  }, []);

  const handleLogout = () => {
    localStorage.removeItem("token");
    localStorage.removeItem("user");
    setUser(null);
    setIsAuthenticated(false);
    updateCartCount();
    navigate("/");
    setShowProfileMenu(false);
  };

  const scrollToTop = () => {
    window.scrollTo({
      top: 0,
      behavior: "smooth",
    });
  };

  useEffect(() => {
    scrollToTop();
  }, [location.pathname]);

  const handleNavClick = () => {
    setDropDown(false);
    scrollToTop();
  };

  const toggleDropdown = () => {
    setDropDown((prevState) => !prevState);
  };

  useEffect(() => {
    const handleClickOutside = (event) => {
      if (dropdownRef.current && !dropdownRef.current.contains(event.target)) {
        setDropDown(false);
      }
    };

    document.addEventListener("mousedown", handleClickOutside);
    return () => {
      document.removeEventListener("mousedown", handleClickOutside);
    };
  }, []);

  const navItemStyle = `px-3 text-lg py-2 md:px-4 md:py-2 rounded-full flex justify-center items-center font-bold transition-transform transform hover:scale-105 hover:shadow-lg ${
    isScrolled
      ? "text-white bg-[#FF8500] hover:bg-[#FF8500]"
      : "text-white bg-[#FF8500] hover:bg-opacity-90 hover:bg-[#FF8500]"
  }`;

  return (
    <div
      className={`sticky top-0 z-50 flex justify-between items-center px-4 md:px-16 md:py-4 transition-colors duration-300 ${
        isScrolled
          ? "bg-white text-white shadow-md"
          : "bg-transparent text-white"
      }`}
    >
      <Link to="/">
        <img src={Logo} className="w-36 h-auto" alt="Logo" />
      </Link>

      <ul className="hidden bg-[#FF8500] sm:flex flex-row items-center gap-4 md:gap-10 px-4 py-2 md:px-6 md:py-3 rounded-full">
        <li className="relative">
          <Link to="/" className={navItemStyle} onClick={scrollToTop}>
            🏠︎
          </Link>
        </li>

        <li
          className="relative"
          onMouseEnter={() => setShowGearMenu(true)}
          onMouseLeave={() => setShowGearMenu(false)}
        >
          <button className={navItemStyle}>
            Gear{" "}
            <IoIosArrowDown className="ml-1 w-5 h-5 text-white transition-all duration-300" />
          </button>
          {showGearMenu && (
            <div className="absolute left-0 w-48 bg-white rounded-xl shadow-lg py-2 z-50">
              <Link
                to="/Cameras"
                className="block px-4 py-3 text-gray-600 hover:bg-orange-50 hover:text-[#FF8500] font-medium transition-all duration-200"
                onClick={() => setShowGearMenu(false)}
              >
                Cameras
              </Link>
              <Link
                to="/Lenses"
                className="block px-4 py-3 text-gray-600 hover:bg-orange-50 hover:text-[#FF8500] font-medium transition-all duration-200"
                onClick={() => setShowGearMenu(false)}
              >
                Lenses
              </Link>
              <Link
                to="/Lights"
                className="block px-4 py-3 text-gray-600 hover:bg-orange-50 hover:text-[#FF8500] font-medium transition-all duration-200"
                onClick={() => setShowGearMenu(false)}
              >
                Lights
              </Link>
              <Link
                to="/MemoryCards"
                className="block px-4 py-3 text-gray-600 hover:bg-orange-50 hover:text-[#FF8500] font-medium transition-all duration-200"
                onClick={() => setShowGearMenu(false)}
              >
                Memory Cards
              </Link>
            </div>
          )}
        </li>

        <li className="relative">
          <Link to="/About" className={navItemStyle}>
            About us
          </Link>
        </li>
        <li className="relative">
          <Link to="/Contact" className={navItemStyle}>
            Contact us
          </Link>
        </li>
      </ul>

      <div className="flex flex-row items-center gap-2 md:gap-4">
        <Link to="/Cart">
          <button className={`${navItemStyle} relative`}>
            <FaShoppingBag className="w-4 h-4 md:w-5 md:h-5" />
            {isAuthenticated && cartItemsCount > 0 && (
              <span className="absolute -top-2 -right-2 bg-red-500 text-white text-xs rounded-full h-5 w-5 flex items-center justify-center">
                {cartItemsCount}
              </span>
            )}
          </button>
        </Link>

        <div className="relative">
          <button
            className={navItemStyle}
            onClick={() => setShowProfileMenu(!showProfileMenu)}
          >
            <FiUser className="w-4 h-4 md:w-5 md:h-5" />
          </button>

          {showProfileMenu && (
            <div className="absolute right-0 mt-3 w-72 bg-white rounded-2xl shadow-xl py-2 z-50 transform transition-all duration-200 border border-gray-100">
              {isAuthenticated && user ? (
                <>
                  <div className="px-6 py-4 border-b border-gray-100">
                    <div className="flex items-center gap-4">
                      <div className="bg-[#FF8500] rounded-full p-3">
                        <FaUserCircle className="text-white text-2xl" />
                      </div>
                      <div>
                        <div className="font-bold text-gray-800">
                          {user.first_name} {user.last_name}
                        </div>
                        <div className="text-sm text-gray-500">
                          Customer Account
                        </div>
                      </div>
                    </div>
                  </div>
                  <div className="px-2 py-2">
                    <button
                      onClick={() => {
                        handleLogout();
                        setShowProfileMenu(false);
                      }}
                      className="w-full px-4 py-3 text-left text-red-600 hover:bg-red-50 rounded-xl font-medium flex items-center gap-3 transition-all duration-200"
                    >
                      <svg
                        xmlns="http://www.w3.org/2000/svg"
                        className="h-5 w-5"
                        fill="none"
                        viewBox="0 0 24 24"
                        stroke="currentColor"
                      >
                        <path
                          strokeLinecap="round"
                          strokeLinejoin="round"
                          strokeWidth={2}
                          d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1"
                        />
                      </svg>
                      Logout
                    </button>
                  </div>
                </>
              ) : (
                <div className="p-2">
                  <div className="px-4 py-3 text-gray-600 text-sm">
                    Access your account
                  </div>
                  <Link
                    to="/Login"
                    className="flex items-center gap-3 px-4 py-3 text-[#FF8500] hover:bg-orange-50 rounded-xl font-medium transition-all duration-200"
                    onClick={() => setShowProfileMenu(false)}
                  >
                    <svg
                      xmlns="http://www.w3.org/2000/svg"
                      className="h-5 w-5"
                      fill="none"
                      viewBox="0 0 24 24"
                      stroke="currentColor"
                    >
                      <path
                        strokeLinecap="round"
                        strokeLinejoin="round"
                        strokeWidth={2}
                        d="M11 16l-4-4m0 0l4-4m-4 4h14m-5 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h7a3 3 0 013 3v1"
                      />
                    </svg>
                    Login
                  </Link>
                  <Link
                    to="/Register"
                    className="flex items-center gap-3 px-4 py-3 text-gray-600 hover:bg-gray-50 rounded-xl font-medium transition-all duration-200"
                    onClick={() => setShowProfileMenu(false)}
                  >
                    <svg
                      xmlns="http://www.w3.org/2000/svg"
                      className="h-5 w-5"
                      fill="none"
                      viewBox="0 0 24 24"
                      stroke="currentColor"
                    >
                      <path
                        strokeLinecap="round"
                        strokeLinejoin="round"
                        strokeWidth={2}
                        d="M18 9v3m0 0v3m0-3h3m-3 0h-3m-2-5a4 4 0 11-8 0 4 4 0 018 0zM3 20a6 6 0 0112 0v1H3v-1z"
                      />
                    </svg>
                    Register
                  </Link>
                  <div className="px-4 py-3 mt-2 text-xs text-gray-500 border-t border-gray-100">
                    Create an account for a better shopping experience
                  </div>
                </div>
              )}
            </div>
          )}
        </div>
      </div>
    </div>
  );
}

export default Navbar;
