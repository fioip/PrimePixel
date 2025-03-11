import React, { useState, useEffect } from "react";
import { useParams, useNavigate } from "react-router-dom";
import axios from "axios";
import AddToCartButton from "../components/AddToCartButton";
import { FaArrowLeft, FaSdCard, FaTimes } from "react-icons/fa";

function MemoryCardsDetails() {
  const { id } = useParams();
  const navigate = useNavigate();
  const [memoryCard, setMemoryCard] = useState(null);
  const [showImageModal, setShowImageModal] = useState(false);

  useEffect(() => {
    axios
      .get(`http://localhost:8000/api/MemoryCards/${id}`)
      .then((response) => {
        setMemoryCard(response.data);
      })
      .catch((error) => {
        console.log("Error:", error);
      });
  }, [id]);

  if (!memoryCard) {
    return (
      <div className="min-h-screen flex items-center justify-center">
        <div className="text-center">
          <FaSdCard className="animate-bounce text-4xl text-orange-500 mx-auto mb-4" />
          <p className="text-xl text-gray-600">Loading...</p>
        </div>
      </div>
    );
  }

  const getImagePath = (memoryCard) => {
    const brand = memoryCard.model.split(" ")[0].toLowerCase();
    const folder = `${brand}MemoryCard`;
    const fileName = memoryCard.photo;
    return `http://localhost:8000/photos/${folder}/${fileName}`;
  };

  const specifications = JSON.parse(memoryCard.specifications);

  // Image Modal Component
  const ImageModal = () => (
    <div
      className="fixed inset-0 bg-black bg-opacity-80 z-50 flex items-center justify-center p-4"
      onClick={() => setShowImageModal(false)}
    >
      <div className="relative max-w-7xl max-h-[90vh] w-full flex items-center justify-center">
        <button
          onClick={() => setShowImageModal(false)}
          className="absolute top-4 right-4 text-white hover:text-orange-500 transition-colors duration-300"
        >
          <FaTimes className="text-2xl" />
        </button>
        <img
          src={getImagePath(memoryCard)}
          alt={memoryCard.model}
          className="max-w-full max-h-[90vh] object-contain"
          onClick={(e) => e.stopPropagation()}
        />
      </div>
    </div>
  );

  return (
    <>
      {showImageModal && <ImageModal />}

      <div className="min-h-screen bg-gradient-to-b from-gray-50 to-white py-12 px-4 sm:px-6 lg:px-8">
        <div className="max-w-7xl mx-auto">
          <button
            onClick={() => navigate("/MemoryCards")}
            className="group px-6 py-3 rounded-full flex items-center gap-2 font-bold text-gray-600 hover:text-orange-500 transition-all duration-300 mb-8"
          >
            <FaArrowLeft className="group-hover:-translate-x-1 transition-transform duration-300" />
            Back to Memory Cards
          </button>

          <div className="bg-white rounded-3xl shadow-xl overflow-hidden border border-gray-100">
            <div className="grid grid-cols-1 md:grid-cols-2 gap-12 p-8 lg:p-12">
              {/* Image Section */}
              <div className="space-y-8">
                <div
                  className="aspect-w-1 aspect-h-1 w-full bg-gray-50 rounded-2xl p-8 cursor-pointer group"
                  onClick={() => setShowImageModal(true)}
                >
                  <img
                    src={getImagePath(memoryCard)}
                    alt={memoryCard.model}
                    className="w-full h-full object-center object-contain transition-all duration-300 group-hover:scale-105"
                  />
                  <div className="absolute inset-0 bg-black opacity-0 group-hover:opacity-10 transition-opacity duration-300 rounded-2xl" />
                </div>
              </div>

              {/* Content Section */}
              <div className="flex flex-col justify-between space-y-8">
                <div className="space-y-6">
                  {/* Title and Type */}
                  <div className="space-y-2">
                    <h1 className="text-4xl font-bold text-gray-800">
                      {memoryCard.model}
                    </h1>
                    <p className="text-xl text-orange-500 font-medium">
                      {memoryCard.type}
                    </p>
                  </div>

                  {/* Description */}
                  <div className="prose prose-lg text-gray-600">
                    {memoryCard.description}
                  </div>

                  {/* Specifications */}
                  <div className="space-y-4">
                    <h2 className="text-2xl font-bold text-gray-800 flex items-center gap-2">
                      <span>Specifications</span>
                      <div className="h-px flex-1 bg-gray-200 ml-4"></div>
                    </h2>
                    <div className="grid grid-cols-1 sm:grid-cols-2 gap-4">
                      {Object.entries(specifications).map(([key, value]) => (
                        <div
                          key={key}
                          className="p-4 rounded-xl bg-gray-50 hover:bg-orange-50 transition-colors duration-300"
                        >
                          <span className="block text-orange-500 font-medium mb-1">
                            {key}
                          </span>
                          <span className="text-gray-700">{value}</span>
                        </div>
                      ))}
                    </div>
                  </div>
                </div>

                {/* Price and Add to Cart */}
                <div className="space-y-6 pt-6 border-t border-gray-100">
                  <div className="flex items-center justify-between">
                    <span className="text-gray-600 font-medium">Price</span>
                    <span className="text-4xl font-bold text-orange-500">
                      {memoryCard.price} €
                    </span>
                  </div>

                  <AddToCartButton
                    productType="memoryCard"
                    productId={memoryCard.id}
                    className="w-full px-8 py-4 rounded-full flex justify-center items-center font-bold text-lg transition-all duration-300 transform hover:scale-102 hover:shadow-lg text-white bg-orange-500 hover:bg-orange-600"
                  />
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </>
  );
}

export default MemoryCardsDetails;
