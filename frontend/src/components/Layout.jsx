import React from "react";
import { Outlet, useLocation } from "react-router-dom";
import Navbar from "./Navbar"; // Asigură-te că ai importat Navbar-ul corect
import Banner from "./Banner";
import Footer from "./Footer";

const Layout = () => {
  const location = useLocation();

  return (
    <div>
      {/* Ascundem Navbar-ul pentru Login și Register */}
      {location.pathname !== "/Login" && location.pathname !== "/Register" && (
        <Navbar />
      )}

      <main>
        {/* Ascundem Banner pentru Login și Register */}
        {location.pathname !== "/Login" &&
          location.pathname !== "/Register" && <Banner />}

        {/* Afisam continutul specific rutei */}
        <Outlet />
      </main>

      {/* Footer-ul se afisează întotdeauna după Outlet */}
      {location.pathname !== "/Login" && location.pathname !== "/Register" && (
        <Footer />
      )}
    </div>
  );
};

export default Layout;
