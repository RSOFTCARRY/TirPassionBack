import React from "react";
import { BrowserRouter as Router, Route, Routes } from "react-router-dom";
import Navbar from "./components/Navbar";
import Footer from "./components/Footer";
import "./Assets/navBar.css";
import "./Assets/footer.css";
import "./Assets/produits.css";


// Importer les autres pages
import Home from "./pages/Home";
import Apropos from "./pages/Apropos";
import Connexion from "./pages/Connexion";
import Panier from "./pages/panier"; // Importation de la page Panier
import Produits from "./pages/produits";

function App() {
  return (
    <Router>
      <div>
        {/* Barre de navigation */}
        <Navbar />
        
        {/* Définir les routes ici */}
        <Routes>
          <Route path="/" element={<Home />} />
          <Route path="/apropos" element={<Apropos />} />
          <Route path="/connexion" element={<Connexion />} />
          <Route path="/panier" element={<Panier />} /> {/* Nouvelle route */}
          <Route path="/produits" element={<Produits />} />
        </Routes>
        
        {/* Pied de page */}
        <Footer />
      </div>
    </Router>
  );
}

export default App;
