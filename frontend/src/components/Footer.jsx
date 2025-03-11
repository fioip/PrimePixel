import { FaFacebookF } from "react-icons/fa";
import { FaDiscord } from "react-icons/fa";
import { FaTwitter } from "react-icons/fa";
import { FaInstagram } from "react-icons/fa";
import { Link } from "react-router-dom";

function Footer() {
  return (
    <footer className="bg-[#FF8500]">
      <div className="mx-auto w-full max-w-screen-xl p-4 py-6 lg:py-8">
        <div className="md:flex md:justify-between">
          <div className="mb-6 md:mb-0">
            <a href="#" className="flex items-center">
              <span className="self-center text-2xl font-semibold whitespace-nowrap text-white hover:underline">
                PrimePixel
              </span>
            </a>
          </div>
          <div className="grid grid-cols-2 gap-8 sm:gap-6 sm:grid-cols-3">
            <div>
              <h2 className="mb-6 text-lg font-bold text-white uppercase">
                Follow us
              </h2>
              <ul className="text-white font-medium">
                <li className="mb-4">
                  <a
                    href="https://www.instagram.com/frame.look/"
                    target="_blank"
                    className="hover:underline"
                    rel="noopener noreferrer"
                  >
                    Instagram
                  </a>
                </li>
                <li>
                  <a
                    href="https://www.facebook.com/framelook20"
                    target="_blank"
                    className="hover:underline"
                    rel="noopener noreferrer"
                  >
                    Facebook
                  </a>
                </li>
              </ul>
            </div>
            <div>
              <h2 className="mb-6 text-lg font-bold text-white uppercase">
                Legal
              </h2>
              <ul className="text-white font-medium">
                <li className="mb-4">
                  <Link to="/Privacy" className="hover:underline">
                    Privacy Policy
                  </Link>
                </li>
                <li>
                  <Link to="/Terms" className="hover:underline">
                    Terms & Conditions
                  </Link>
                </li>
              </ul>
            </div>
          </div>
        </div>
        <hr className="my-6 border-white sm:mx-auto lg:my-8" />
        <div className="sm:flex sm:items-center sm:justify-between">
          <span className="text-sm text-white sm:text-center">
            © 2024{" "}
            <a href="#" className="hover:underline">
              PrimePixel
            </a>
            . All Rights Reserved.
          </span>
          <div className="flex mt-4 sm:justify-center sm:mt-0">
            <a
              href="https://www.facebook.com/framelook20"
              target="_blank"
              className="px-3 text-lg py-2 md:px-4 md:py-2 rounded-full flex justify-center items-center font-bold transition-transform transform hover:scale-105 hover:shadow-lg text-white bg-[#FF8500] hover:bg-white hover:text-[#FF8500] ms-5"
              rel="noopener noreferrer"
            >
              <FaFacebookF />
              <span className="sr-only">Facebook page</span>
            </a>
            <a
              href="https://discord.com/"
              target="_blank"
              className="px-3 text-lg py-2 md:px-4 md:py-2 rounded-full flex justify-center items-center font-bold transition-transform transform hover:scale-105 hover:shadow-lg text-white bg-[#FF8500] hover:bg-white hover:text-[#FF8500] ms-5"
              rel="noopener noreferrer"
            >
              <FaDiscord />
              <span className="sr-only">Discord community</span>
            </a>
            <a
              href="https://x.com/"
              target="_blank"
              className="px-3 text-lg py-2 md:px-4 md:py-2 rounded-full flex justify-center items-center font-bold transition-transform transform hover:scale-105 hover:shadow-lg text-white bg-[#FF8500] hover:bg-white hover:text-[#FF8500] ms-5"
              rel="noopener noreferrer"
            >
              <FaTwitter />
              <span className="sr-only">Twitter page</span>
            </a>

            <a
              href="https://www.instagram.com/frame.look/"
              target="_blank"
              className="px-3 text-lg py-2 md:px-4 md:py-2 rounded-full flex justify-center items-center font-bold transition-transform transform hover:scale-105 hover:shadow-lg text-white bg-[#FF8500] hover:bg-white hover:text-[#FF8500] ms-5"
              rel="noopener noreferrer"
            >
              <FaInstagram />
              <span className="sr-only">Instagram page</span>
            </a>
          </div>
        </div>
      </div>
    </footer>
  );
}

export default Footer;
