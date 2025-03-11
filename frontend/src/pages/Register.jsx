import { useState, useContext } from "react";
import { useNavigate, Link } from "react-router-dom";
import { UserContext } from "../context/UserContext";
import { FaUser, FaLock, FaEye, FaEyeSlash, FaSpinner } from "react-icons/fa"; // Import icons
import axios from "axios";

const Register = () => {
  const navigate = useNavigate();
  const { setUser, setIsAuthenticated } = useContext(UserContext);
  const [formData, setFormData] = useState({
    firstName: "",
    lastName: "",
    email: "",
    password: "",
    password_confirmation: "",
  });
  const [error, setError] = useState(""); // State to hold global error message
  const [isLoading, setIsLoading] = useState(false); // State for loading spinner

  // State for managing password visibility
  const [showPassword, setShowPassword] = useState(false);
  const [showConfirmPassword, setShowConfirmPassword] = useState(false);

  const handleChange = (e) => {
    setFormData({
      ...formData,
      [e.target.name]: e.target.value,
    });
  };

  const handleSubmit = async (e) => {
    e.preventDefault();

    setError(""); // Clear any previous errors
    let hasError = false;
    let errorMessages = [];

    if (!formData.firstName) {
      errorMessages.push("First name is required.");
      hasError = true;
    }

    if (!formData.lastName) {
      errorMessages.push("Last name is required.");
      hasError = true;
    }

    const emailPattern = /^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,6}$/;
    if (!formData.email || !emailPattern.test(formData.email)) {
      errorMessages.push("Please enter a valid email address.");
      hasError = true;
    }

    if (!formData.password) {
      errorMessages.push("Password is required.");
      hasError = true;
    }

    if (formData.password !== formData.password_confirmation) {
      errorMessages.push("Passwords do not match.");
      hasError = true;
    }

    if (hasError) {
      setError(errorMessages.join(" "));
      return;
    }

    setIsLoading(true); // Start loading
    try {
      const registerData = {
        firstName: formData.firstName,
        lastName: formData.lastName,
        email: formData.email,
        password: formData.password,
        password_confirmation: formData.password_confirmation,
      };

      await axios.get("http://localhost:8000/sanctum/csrf-cookie");
      const response = await axios.post(
        "http://localhost:8000/api/register",
        registerData,
        {
          headers: {
            "Content-Type": "application/json",
            Accept: "application/json",
          },
          withCredentials: true,
        }
      );

      if (response.data.user && response.data.token) {
        localStorage.setItem("token", response.data.token);
        localStorage.setItem("user", JSON.stringify(response.data.user));
        setUser(response.data.user);
        setIsAuthenticated(true);
        navigate("/");
      }
    } catch (error) {
      console.error("Registration error:", error.response?.data || error);
      if (error.response?.data?.errors?.email) {
        setError("This email is already taken. Please use a different one.");
      } else {
        setError("Something went wrong. Please try again later.");
      }
    } finally {
      setIsLoading(false); // End loading
    }
  };

  return (
    <div className="relative min-h-screen w-full overflow-hidden bg-gradient-to-br from-[#FF6F00] via-[#FF8500] to-[#FFC300] flex items-center justify-center">
      <div className="absolute inset-0 bg-gradient-to-r from-[#FF6F00] via-[#FF8500] to-[#FFC300] opacity-30 animate-pulse"></div>
      <div className="relative w-full max-w-2xl bg-white/20 backdrop-blur-none hover:backdrop-blur-none p-8 rounded-xl shadow-2xl transform transition-all duration-300 hover:scale-105 z-10">
        <h2 className="text-3xl font-bold text-center text-white mb-6">
          Register
        </h2>
        <form onSubmit={handleSubmit} className="space-y-6">
          {/* Name Fields */}
          <div className="flex space-x-4">
            <div className="flex-1">
              <label className="block text-lg font-semibold text-white">
                First Name
              </label>
              <div className="flex items-center border border-white bg-white/10 rounded-lg p-3">
                <FaUser className="text-white mr-3" />
                <input
                  type="text"
                  name="firstName"
                  value={formData.firstName}
                  onChange={handleChange}
                  className="w-full bg-transparent text-white focus:outline-none placeholder-white focus:placeholder-white/50"
                  placeholder="First Name"
                />
              </div>
            </div>
            <div className="flex-1">
              <label className="block text-lg font-semibold text-white">
                Last Name
              </label>
              <div className="flex items-center border border-white bg-white/10 rounded-lg p-3">
                <FaUser className="text-white mr-3" />
                <input
                  type="text"
                  name="lastName"
                  value={formData.lastName}
                  onChange={handleChange}
                  className="w-full bg-transparent text-white focus:outline-none placeholder-white focus:placeholder-white/50"
                  placeholder="Last Name"
                />
              </div>
            </div>
          </div>

          {/* Email Field */}
          <div>
            <label className="block text-lg font-semibold text-white">
              Email
            </label>
            <div className="flex items-center border border-white bg-white/10 rounded-lg p-3">
              <FaUser className="text-white mr-3" />
              <input
                type="email"
                name="email"
                value={formData.email}
                onChange={handleChange}
                className="w-full bg-transparent text-white focus:outline-none placeholder-white focus:placeholder-white/50"
                placeholder="Email"
              />
            </div>
          </div>

          {/* Password Fields */}
          <div className="flex space-x-4">
            <div className="flex-1">
              <label className="block text-lg font-semibold text-white">
                Password
              </label>
              <div className="flex items-center border border-white bg-white/10 rounded-lg p-3">
                <FaLock className="text-white mr-3" />
                <input
                  type={showPassword ? "text" : "password"}
                  name="password"
                  value={formData.password}
                  onChange={handleChange}
                  className="w-full bg-transparent text-white focus:outline-none placeholder-white focus:placeholder-white/50"
                  placeholder="Password"
                />
                <button
                  type="button"
                  onClick={() => setShowPassword(!showPassword)}
                  className="text-white"
                >
                  {showPassword ? <FaEyeSlash /> : <FaEye />}
                </button>
              </div>
            </div>
            <div className="flex-1">
              <label className="block text-lg font-semibold text-white">
                Confirm Password
              </label>
              <div className="flex items-center border border-white bg-white/10 rounded-lg p-3">
                <FaLock className="text-white mr-3" />
                <input
                  type={showConfirmPassword ? "text" : "password"}
                  name="password_confirmation"
                  value={formData.password_confirmation}
                  onChange={handleChange}
                  className="w-full bg-transparent text-white focus:outline-none placeholder-white focus:placeholder-white/50"
                  placeholder="Confirm Password"
                />
                <button
                  type="button"
                  onClick={() => setShowConfirmPassword(!showConfirmPassword)}
                  className="text-white"
                >
                  {showConfirmPassword ? <FaEyeSlash /> : <FaEye />}
                </button>
              </div>
            </div>
          </div>

          {/* Error Message */}
          {error && (
            <div className="text-white bg-red-500 p-3 rounded-md text-center mb-4">
              {error}
            </div>
          )}

          {/* Register Button */}
          <button
            type="submit"
            className={`w-full text-white font-semibold p-3 rounded-lg transition-all duration-300 ${
              isLoading
                ? "bg-green-600 cursor-not-allowed"
                : "bg-[#FF8500] hover:bg-[#FF6F00]"
            }`}
            disabled={isLoading}
          >
            {isLoading ? (
              <div className="flex items-center justify-center">
                <FaSpinner className="animate-spin text-white mr-2" />
                Registering...
              </div>
            ) : (
              "Register"
            )}
          </button>
        </form>
        <p className="text-center text-lg text-white mt-4">
          Already have an account?{" "}
          <Link to="/Login">
            <span className="text-white font-bold hover:underline">Login</span>
          </Link>
        </p>
      </div>
    </div>
  );
};

export default Register;
