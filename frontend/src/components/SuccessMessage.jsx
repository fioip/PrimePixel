import { FaCheckCircle } from "react-icons/fa";

function SuccessMessage() {
  return (
    <div className="fixed inset-0 flex items-center justify-center bg-black bg-opacity-50">
      <div className="bg-white p-8 rounded-lg shadow-lg text-center max-w-md mx-4">
        <FaCheckCircle
          className="mx-auto mb-4 text-4xl"
          style={{ color: "#FF8500" }}
        />
        <h2 className="text-2xl font-bold mb-2" style={{ color: "#FF8500" }}>
          Order successfully completed!
        </h2>
        <p className="text-gray-600 mb-4">
          You will soon receive an email with the order details.
        </p>
      </div>
    </div>
  );
}

export default SuccessMessage;
