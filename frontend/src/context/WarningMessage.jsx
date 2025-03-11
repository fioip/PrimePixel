import { FaExclamationCircle } from "react-icons/fa";

function WarningMessage() {
  return (
    <div className="fixed inset-0 flex items-center justify-center bg-black bg-opacity-50">
      <div className="bg-white p-8 rounded-lg shadow-lg text-center max-w-md mx-4">
        <FaExclamationCircle
          className="mx-auto mb-4 text-4xl"
          style={{ color: "#FF8500" }}
        />
        <h2 className="text-2xl font-bold mb-2" style={{ color: "#FF8500" }}>
          Authentication Required
        </h2>
        <p className="text-gray-600 mb-4">
          Please log in to your account to add items to the cart.
        </p>
      </div>
    </div>
  );
}

export default WarningMessage;
