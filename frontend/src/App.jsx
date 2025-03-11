import { BrowserRouter, Routes, Route } from "react-router-dom";
import Layout from "./components/Layout";
import Home from "./pages/Home";
import Login from "./pages/Login";
import Register from "./pages/Register";
import { UserProvider } from "./context/UserContext";
import { CartProvider } from "./context/CartContext";
import About from "./pages/About";
import ContactPage from "./pages/Contact";
import Cameras from "./pages/Cameras";
import MemoryCards from "./pages/MemoryCards";
import MemoryCardsDetails from "./pages/MemoryCardsDetails";
import Lenses from "./pages/Lenses";
import Lights from "./pages/Lights";
import Privacy from "./pages/Privacy";
import Terms from "./pages/Terms";
import Cart from "./pages/Cart";
import CameraDetails from "./pages/CameraDetails";
import LensesDetails from "./pages/LensesDetails";
import LightsDetails from "./pages/LightsDetails";

function App() {
  return (
    <UserProvider>
      <CartProvider>
        <BrowserRouter>
          <Routes>
            <Route path="/" element={<Layout />}>
              <Route index element={<Home />} />
              <Route path="login" element={<Login />} />
              <Route path="register" element={<Register />} />
              <Route path="about" element={<About />} />
              <Route path="contact" element={<ContactPage />} />
              <Route path="cameras" element={<Cameras />} />
              <Route path="/cameras/:id" element={<CameraDetails />} />
              <Route path="MemoryCards" element={<MemoryCards />} />
              <Route path="MemoryCards/:id" element={<MemoryCardsDetails />} />
              <Route path="lenses" element={<Lenses />} />
              <Route path="lenses/:id" element={<LensesDetails />} />
              <Route path="lights" element={<Lights />} />
              <Route path="lights/:id" element={<LightsDetails />} />
              <Route path="privacy" element={<Privacy />} />
              <Route path="terms" element={<Terms />} />
              <Route path="cart" element={<Cart />} />
            </Route>
          </Routes>
        </BrowserRouter>
      </CartProvider>
    </UserProvider>
  );
}

export default App;
