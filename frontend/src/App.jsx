import React from "react";
import Navbar from "./components/Navbar";
import Banner from "./components/Banner";
import Home from "./components/Home";

function App() {
  return (
    <div>
      {/* Navbar is rendered here so it sticks to the top across all sections */}
      <Navbar />

      {/* Main content section */}
      <header>
        <Banner />
      </header>

      <main>
        <Home />
      </main>
    </div>
  );
}

export default App;
