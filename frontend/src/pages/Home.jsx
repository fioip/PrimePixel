import CamereFoto from "../photos/camere_foto.jpg";
import Obiective from "../photos/lenses.jpeg";
import Lumini from "../photos/lights.jpg";
import CarduriMemorie from "../photos/memory_cards.jpg";
import { Link } from "react-router-dom";

function Home() {
  return (
    <div className="py-12 px-4 md:px-16 w-full h">
      <h2 className="text-3xl font-bold text-center mb-8">
        Our Polaroid Gallery
      </h2>

      <div className="grid grid-cols-1 sm:grid-cols-2 gap-8">
        {/* Card 1 */}
        <div className="flex flex-col items-center justify-center bg-white shadow-xl rounded-lg p-4 transform transition-all hover:scale-105 hover:-rotate-1">
          <img
            src={CamereFoto}
            alt="Camere foto"
            className="w-1/2 h-80 object-cover rounded-lg mb-4"
          />
          <div className="text-center">
            <h3 className="font-bold text-2xl text-gray-800">Cameras</h3>
            <p className="text-gray-600 text-lg mt-2 ml-5 mr-5 text-justify">
              Discover a wide range of cameras, from DSLRs to mirrorless
              options, perfect for all experience levels. Capture sharp,
              detailed images tailored to your photography needs.
            </p>
            <Link to="/Cameras">
              <button className="px-4 py-2 bg-[#FF6A00] rounded-full mt-5 text-white font-bold transition-transform transform hover:scale-105 hover:shadow-lg hover:bg-[#FF8500]">
                Discover more →
              </button>
            </Link>
          </div>
        </div>

        {/* Card 2 */}
        <div className="flex flex-col items-center justify-center bg-white shadow-xl rounded-lg p-4 transform transition-all hover:scale-105 hover:rotate-1">
          <img
            src={Obiective}
            alt="Obiective"
            className="w-1/2 h-80 object-cover rounded-lg mb-4"
          />
          <div className="text-center">
            <h3 className="font-bold text-2xl text-gray-800">Lenses</h3>
            <p className="text-gray-600 text-lg mt-2 ml-5 mr-5 text-justify">
              Enhance your photography with specialized lenses. From wide-angle
              to telephoto and macro, find the perfect lenses to capture every
              detail with precision.
            </p>
            <Link to="/Lenses">
              <button className="px-4 py-2 bg-[#FF6A00] rounded-full mt-5 text-white font-bold transition-transform transform hover:scale-105 hover:shadow-lg hover:bg-[#FF8500]">
                Discover more →
              </button>
            </Link>
          </div>
        </div>

        {/* Card 3 */}
        <div className="flex flex-col items-center justify-center bg-white shadow-xl rounded-lg p-4 transform transition-all hover:scale-105 hover:-rotate-1">
          <img
            src={Lumini}
            alt="Lumini"
            className="w-1/2 h-80 object-cover rounded-lg mb-4"
          />
          <div className="text-center">
            <h3 className="font-bold text-2xl text-gray-800">Lights</h3>
            <p className="text-gray-600 text-lg mt-2 ml-5 mr-5 text-justify">
              Create the perfect atmosphere in your photos with professional
              lighting equipment. Choose from lamps, softboxes, and reflectors
              to achieve optimized lighting for any situation.
            </p>
            <Link to="/Lights">
              <button className="px-4 py-2 bg-[#FF6A00] rounded-full mt-5 text-white font-bold transition-transform transform hover:scale-105 hover:shadow-lg hover:bg-[#FF8500]">
                Discover more →
              </button>
            </Link>
          </div>
        </div>

        {/* Card 4 */}
        <div className="flex flex-col items-center justify-center bg-white shadow-xl rounded-lg p-4 transform transition-all hover:scale-105 hover:rotate-1">
          <img
            src={CarduriMemorie}
            alt="Carduri de memorie"
            className="w-1/2 h-80 object-cover rounded-lg mb-4"
          />
          <div className="text-center">
            <h3 className="font-bold text-2xl text-gray-800">Memory Cards</h3>
            <p className="text-gray-600 text-lg mt-2 ml-5 mr-5 text-justify">
              Store all your important moments with fast, reliable memory cards.
              Choose from a variety of capacities and speeds to keep your photos
              and videos safe, without compromise.
            </p>
            <Link to="/MemoryCards">
              <button className="px-4 py-2 bg-[#FF6A00] rounded-full mt-5 text-white font-bold transition-transform transform hover:scale-105 hover:shadow-lg hover:bg-[#FF8500]">
                Discover more →
              </button>
            </Link>
          </div>
        </div>
      </div>
    </div>
  );
}

export default Home;
