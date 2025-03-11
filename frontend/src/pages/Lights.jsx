import React, { useState, useEffect } from "react";
import axios from "axios";
import { Link } from "react-router-dom";
import { FaFilter, FaSearchPlus } from "react-icons/fa";

import { IoFlashlightSharp } from "react-icons/io5";
import { PiHeadlightsFill } from "react-icons/pi";

import AddToCartButton from "../components/AddToCartButton";

function Lights() {
  const [lights, setLights] = useState([]);
  const [priceRange, setPriceRange] = useState([0, 10000]);
  const [selectedCategory, setSelectedCategory] = useState("all");
  const [selectedBrand, setSelectedBrand] = useState("all");

  const categories = [
    { id: "all", name: "All Categories", icon: <IoFlashlightSharp /> },
    { id: "led", name: "LED", icon: <IoFlashlightSharp /> },
    { id: "reflector", name: "Reflector", icon: <IoFlashlightSharp /> },
  ];

  const brands = [
    { id: "all", name: "All Brands", icon: <PiHeadlightsFill /> },
    { id: "godox", name: "Godox", icon: <PiHeadlightsFill /> },
    { id: "nanlite", name: "Nanlite", icon: <PiHeadlightsFill /> },
  ];

  useEffect(() => {
    axios
      .get("http://localhost:8000/api/Lights")
      .then((response) => {
        setLights(response.data);
      })
      .catch((error) => {
        console.log("Error:", error);
      });
  }, []);

  const getImagePath = (light) => {
    const brand = light.model.split(" ")[0].toLowerCase();
    const folder = `${brand}Lights`;
    const fileName = light.photo.split("\\").pop();
    return `http://localhost:8000/photos/${folder}/${fileName}`;
  };

  const filteredLights = lights.filter((light) => {
    const isInCategory =
      selectedCategory === "all" ||
      light.type.toLowerCase() === selectedCategory;
    const isInPriceRange =
      light.price >= priceRange[0] && light.price <= priceRange[1];
    const isInBrand =
      selectedBrand === "all" ||
      light.model.toLowerCase().includes(selectedBrand.toLowerCase());

    return isInCategory && isInPriceRange && isInBrand;
  });

  const ProductCard = ({ light }) => (
    <div className="group bg-white rounded-2xl shadow-md hover:shadow-2xl transition-all duration-500 overflow-hidden transform hover:-translate-y-1">
      <div className="relative p-4 bg-gradient-to-b from-gray-50 to-white">
        <img
          src={getImagePath(light)}
          alt={light.model}
          className="w-72 h-72 object-contain mx-auto transform transition-transform duration-500 group-hover:scale-105"
        />
      </div>

      <div className="p-6 flex flex-col justify-between border-t border-gray-100">
        <div>
          <h3 className="text-xl font-bold text-gray-800 mb-2 line-clamp-2 group-hover:text-orange-500 transition-colors duration-300">
            {light.model}
          </h3>

          <div className="inline-block px-3 py-1 rounded-full text-sm font-medium bg-orange-100 text-orange-600 mb-3">
            {light.type}
          </div>
        </div>

        <div className="flex-grow mb-4">
          <p className="text-gray-600 text-base leading-relaxed line-clamp-3">
            {light.description}
          </p>
        </div>

        <div className="space-y-3">
          <div className="flex items-center justify-between mb-3">
            <span className="text-3xl font-bold text-orange-500">
              {light.price} <span className="text-xl">€</span>
            </span>
          </div>

          <AddToCartButton
            productId={light.id}
            productType="light"
            className="w-full h-11 px-4 rounded-full bg-orange-500 text-white font-medium hover:bg-orange-600 transition-all duration-300 flex items-center justify-center gap-2"
          />

          <Link
            to={`/Lights/${light.id}`}
            className="w-full h-11 rounded-full bg-gray-100 hover:bg-gray-200 flex items-center justify-center gap-2 font-medium text-gray-700 transition-all duration-300"
          >
            <FaSearchPlus className="text-lg" />
            Details
          </Link>
        </div>
      </div>
    </div>
  );

  return (
    <div className="min-h-screen bg-gray-50">
      <div className="container mx-auto px-4 py-8">
        <div className="flex flex-col md:flex-row gap-8">
          <div className="hidden md:block w-72 space-y-6">
            <div className="bg-white p-6 rounded-2xl shadow-md">
              <h2 className="text-xl font-bold mb-4 text-gray-800 flex items-center gap-2">
                <FaFilter className="text-orange-500" />
                Categories
              </h2>
              <div className="space-y-2">
                {categories.map((category) => (
                  <button
                    key={category.id}
                    onClick={() => setSelectedCategory(category.id)}
                    className={`flex items-center gap-2 w-full px-4 py-2 rounded-lg transition-all duration-300 ${
                      selectedCategory === category.id
                        ? "bg-orange-500 text-white shadow-md"
                        : "text-gray-700 hover:bg-orange-50 hover:text-orange-500"
                    }`}
                  >
                    {category.icon}
                    {category.name}
                  </button>
                ))}
              </div>
            </div>

            <div className="bg-white p-6 rounded-2xl shadow-md">
              <h2 className="text-xl font-bold mb-4 text-gray-800 flex items-center gap-2">
                <IoFlashlightSharp className="text-orange-500" />
                Brands
              </h2>
              <div className="space-y-2">
                {brands.map((brand) => (
                  <button
                    key={brand.id}
                    onClick={() => setSelectedBrand(brand.id)}
                    className={`w-full px-4 py-2 rounded-lg transition-all duration-300 flex items-center gap-2 ${
                      selectedBrand === brand.id
                        ? "bg-orange-500 text-white shadow-md"
                        : "text-gray-700 hover:bg-orange-50 hover:text-orange-500"
                    }`}
                  >
                    <span className="text-lg">{brand.icon}</span>
                    {brand.name}
                  </button>
                ))}
              </div>
            </div>

            <div className="bg-white p-6 rounded-2xl shadow-md">
              <h2 className="text-xl font-bold mb-4 text-gray-800">
                Price Range
              </h2>
              <div className="space-y-6">
                <div className="flex justify-between items-center gap-4">
                  <input
                    type="number"
                    value={priceRange[0]}
                    min="0"
                    max="10000"
                    onChange={(e) =>
                      setPriceRange([
                        parseInt(e.target.value) || 0,
                        priceRange[1],
                      ])
                    }
                    className="w-28 p-2 border rounded-lg text-center focus:outline-none focus:ring-2 focus:ring-orange-500"
                    placeholder="Min"
                  />
                  <span className="text-gray-500">to</span>
                  <input
                    type="number"
                    value={priceRange[1]}
                    min={priceRange[0]}
                    max="10000"
                    onChange={(e) =>
                      setPriceRange([
                        priceRange[0],
                        parseInt(e.target.value) || 10000,
                      ])
                    }
                    className="w-28 p-2 border rounded-lg text-center focus:outline-none focus:ring-2 focus:ring-orange-500"
                    placeholder="Max"
                  />
                </div>

                <div className="space-y-2">
                  <div className="flex justify-between text-sm text-gray-600">
                    <span>{priceRange[0]} €</span>
                    <span>{priceRange[1]} €</span>
                  </div>
                  <input
                    type="range"
                    min="0"
                    max="10000"
                    value={priceRange[1]}
                    onChange={(e) =>
                      setPriceRange([priceRange[0], parseInt(e.target.value)])
                    }
                    className="w-full accent-orange-500"
                  />
                </div>
              </div>
            </div>
          </div>

          <div className="flex-1">
            <div className="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
              {filteredLights.length > 0 ? (
                filteredLights.map((light) => (
                  <ProductCard key={light.id} light={light} />
                ))
              ) : (
                <div className="col-span-full text-center py-12">
                  <div className="text-gray-400 text-6xl mb-4">
                    <IoFlashlightSharp className="inline-block" />
                  </div>
                  <h3 className="text-2xl text-gray-800 font-semibold">
                    No lights found
                  </h3>
                </div>
              )}
            </div>
          </div>
        </div>
      </div>
    </div>
  );
}

export default Lights;
