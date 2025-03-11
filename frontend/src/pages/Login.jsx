import { useState, useContext } from "react";
import { useNavigate, Link } from "react-router-dom";
import { UserContext } from "../context/UserContext"; // Import context
import axios from "axios";
import { FaUser, FaLock, FaSpinner } from "react-icons/fa"; // Import FontAwesome icons
import { FiEye, FiEyeOff } from "react-icons/fi"; // Import eye icons

const Login = () => {
  const navigate = useNavigate();
  const { loginUser } = useContext(UserContext); // Access loginUser from context
  const [formData, setFormData] = useState({
    email: "",
    password: "",
  });
  const [error, setError] = useState(""); // State for error message
  const [showPassword, setShowPassword] = useState(false); // State for showing password
  const [isLoading, setIsLoading] = useState(false); // State for loading

  const handleChange = (e) => {
    setFormData({
      ...formData,
      [e.target.name]: e.target.value,
    });
  };

  const handleSubmit = async (e) => {
    e.preventDefault();
    setIsLoading(true); // Start loading
    try {
      // Get CSRF token
      await axios.get("http://localhost:8000/sanctum/csrf-cookie");

      // Submit login request
      const response = await axios.post(
        "http://localhost:8000/api/login",
        formData,
        {
          headers: {
            "Content-Type": "application/json",
            Accept: "application/json",
          },
          withCredentials: true,
        }
      );

      // Validate response
      if (response.data.user && response.data.token) {
        // Update context and localStorage
        loginUser(response.data.user, response.data.token);

        // Redirect user
        navigate("/");
      } else {
        console.error("Invalid response:", response.data);
      }
    } catch (error) {
      // If the response contains an error, show the error message in English
      if (error.response) {
        setError(error.response.data.message || "Invalid credentials");
      } else {
        setError("An error occurred");
      }
    } finally {
      setIsLoading(false); // End loading
    }
  };

  return (
    <div className="relative min-h-screen w-full overflow-hidden bg-gradient-to-br from-[#FF6F00] via-[#FF8500] to-[#FFC300] flex items-center justify-center">
      {/* Background Animation and Circles */}
      <div className="absolute inset-0 bg-gradient-to-r from-[#FF6F00] via-[#FF8500] to-[#FFC300] opacity-30 animate-pulse"></div>
      <div className="absolute w-72 h-72 rounded-full bg-[#FF8500] opacity-20 animate-pulse-slow top-10 left-5"></div>
      <div className="absolute w-64 h-64 rounded-full bg-[#FFC300] opacity-30 animate-pulse-slow top-1/4 left-16"></div>
      <div className="absolute w-80 h-80 rounded-full bg-[#FF6F00] opacity-15 animate-pulse-slow bottom-1/4 left-20"></div>
      <div className="absolute w-60 h-60 rounded-full bg-[#FF8500] opacity-25 animate-pulse-slow top-3/4 left-5"></div>
      <div className="absolute w-90 h-90 rounded-full bg-[#FFC300] opacity-20 animate-pulse-slow top-1/3 left-2/3"></div>

      <div className="relative w-full max-w-lg bg-white/20 backdrop-blur-none hover:backdrop-blur-none p-8 rounded-xl shadow-2xl transform transition-all duration-300 hover:scale-105 z-10">
        <h2 className="text-3xl font-bold text-center text-white mb-6">
          Login
        </h2>

        <form onSubmit={handleSubmit} className="space-y-6">
          {/* Email Field */}
          <div className="relative">
            <label className="block text-lg font-semibold text-white">
              Email
            </label>
            <div className="flex items-center border border-white bg-white/10 rounded-lg p-3 focus-within:bg-[#FF8500] focus-within:border-white transition-all duration-300">
              <FaUser className="text-white mr-3" />
              <input
                type="email"
                name="email"
                value={formData.email}
                onChange={handleChange}
                className="w-full bg-transparent text-white focus:outline-none focus:ring-0 placeholder-white focus:placeholder-white/50"
                placeholder="user@gmail.com"
                required
              />
            </div>
          </div>

          {/* Password Field */}
          <div className="relative">
            <label className="block text-lg font-semibold text-white">
              Password
            </label>
            <div className="flex items-center border border-white bg-white/10 rounded-lg p-3 focus-within:bg-[#FF8500] focus-within:border-white transition-all duration-300">
              <FaLock className="text-white mr-3" />
              <input
                type={showPassword ? "text" : "password"} // Toggle between password and text
                name="password"
                value={formData.password}
                onChange={handleChange}
                className="w-full bg-transparent text-white focus:outline-none focus:ring-0 placeholder-white focus:placeholder-white/50"
                placeholder="••••••••"
                required
              />
              {/* Toggle password visibility */}
              <button
                type="button"
                className="text-white ml-2"
                onClick={() => setShowPassword(!showPassword)} // Toggle the showPassword state
              >
                {showPassword ? (
                  <FiEyeOff className="w-5 h-5" />
                ) : (
                  <FiEye className="w-5 h-5" />
                )}
              </button>
            </div>
          </div>

          {/* Error Message */}
          {error && (
            <div className="text-white bg-red-500 p-3 rounded-md text-center mb-4">
              {error}
            </div>
          )}

          {/* Login Button */}
          <button
            type="submit"
            className={`w-full mt-4 flex items-center justify-center text-white font-semibold p-3 rounded-lg transition-all duration-300 ${
              isLoading
                ? "bg-green-600 cursor-not-allowed"
                : "bg-[#FF8500] hover:bg-[#FF6F00]"
            }`}
            disabled={isLoading} // Disable button during loading
          >
            {isLoading ? (
              <FaSpinner className="animate-spin w-5 h-5 mr-2" />
            ) : null}
            {isLoading ? "Logging in..." : "Login"}
          </button>
        </form>
        <p className="text-center text-lg text-white mt-4">
          Don't have an account?{" "}
          <Link to="/Register">
            <span className="text-white font-bold hover:underline">
              Register
            </span>
          </Link>
        </p>
      </div>
    </div>
  );
};

export default Login;
