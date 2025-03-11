import { useLocation } from "react-router-dom";
import { useState, useEffect, useRef } from "react";
import BackgroundDefault from "../photos/main-photo.jpg";
import BackgroundCamere from "../photos/camere_foto.jpg";
import BackgroundObiective from "../photos/lenses.jpeg";
import BackgroundLumini from "../photos/lights.jpg";
import BackgroundCarduri from "../photos/memory_cards.jpg";
import BackgroundAbout from "../photos/about.jpg";
import BackgroundContact from "../photos/contact.jpeg";
import BackgroundCart from "../photos/cart.jpg";
import BackgroundPrivacy from "../photos/privacy.jpg";
import BackgroundTerms from "../photos/terms.jpg";

function Banner() {
  const location = useLocation();
  const pathSegments = location.pathname
    .split("/")
    .filter((segment) => segment);

  const [productCategory, setProductCategory] = useState("");
  const prevCategoryRef = useRef(""); // Ref pentru a compara categoria anterioară

  useEffect(() => {
    // Obținem categoria principală (prima parte a URL-ului)
    const category = pathSegments[0] || ""; // Dacă nu există categorie, setăm ca "Home"

    // Actualizăm starea doar dacă categoria se schimbă efectiv
    if (category !== prevCategoryRef.current) {
      setProductCategory(category); // Setăm categoria
      prevCategoryRef.current = category; // Actualizăm categoria precedentă
    }
  }, [pathSegments]);

  const backgroundImages = {
    "": BackgroundDefault,
    Cameras: BackgroundCamere,
    Lenses: BackgroundObiective,
    Lights: BackgroundLumini,
    MemoryCards: BackgroundCarduri,
    About: BackgroundAbout,
    Contact: BackgroundContact,
    Cart: BackgroundCart,
    Privacy: BackgroundPrivacy,
    Terms: BackgroundTerms,
  };

  const categoryTitles = {
    "": "Home",
    Cameras: "Cameras",
    Lenses: "Lenses",
    Lights: "Lighting Equipment",
    MemoryCards: "Memory Cards",
    About: "About us",
    Contact: "Contact us",
    Cart: "Cart",
    Privacy: "Privacy Policy",
    Terms: "Terms & Conditions",
  };

  // Funcția pentru a obține titlul, în funcție de categoria curentă
  const getTitle = () => {
    return categoryTitles[productCategory] || categoryTitles[""];
  };

  // Funcția pentru a obține imaginea de fundal corespunzătoare
  const getBackgroundImage = () => {
    return backgroundImages[productCategory || ""] || BackgroundDefault;
  };

  return (
    <div
      style={{
        backgroundImage: `url(${getBackgroundImage()})`,
        backgroundPosition: "center",
        backgroundRepeat: "no-repeat",
        backgroundSize: "cover",
        height: "100vh",
        width: "100%",
        position: "relative",
      }}
    >
      <div className="absolute inset-0 bg-black bg-opacity-50"></div>
      <div className="relative h-full flex items-center justify-center">
        <div className="bg-black bg-opacity-25 backdrop-filter backdrop-blur-sm px-8 py-4 rounded">
          <h1 className="text-white text-4xl font-bold">{getTitle()}</h1>
        </div>
      </div>
    </div>
  );
}

export default Banner;
