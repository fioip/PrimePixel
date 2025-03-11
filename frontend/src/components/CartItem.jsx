import React from "react";
import { FaTrash, FaPlus, FaMinus } from "react-icons/fa";

function CartItem({
  id,
  name,
  price,
  image,
  quantity,
  onUpdateQuantity,
  onRemove,
}) {
  return (
    <div className="flex items-center justify-between p-4 border-b border-gray-200">
      <div className="flex items-center space-x-4">
        <img
          src={image}
          alt={name}
          className="w-16 h-16 object-cover rounded"
        />
        <div>
          <h3 className="font-medium">{name}</h3>
          <p className="text-gray-600">${price.toFixed(2)}</p>
        </div>
      </div>
      <div className="flex items-center space-x-4">
        <div className="flex items-center border rounded">
          <button
            onClick={() => onUpdateQuantity(id, quantity - 1)}
            className="p-2 hover:bg-gray-100"
            disabled={quantity <= 1}
          >
            <FaMinus size={16} />
          </button>
          <span className="px-4">{quantity}</span>
          <button
            onClick={() => onUpdateQuantity(id, quantity + 1)}
            className="p-2 hover:bg-gray-100"
          >
            <FaPlus size={16} />
          </button>
        </div>
        <button
          onClick={() => onRemove(id)}
          className="p-2 text-gray-500 hover:text-gray-700"
        >
          <FaTrash size={16} />
        </button>
      </div>
    </div>
  );
}

export default CartItem;
