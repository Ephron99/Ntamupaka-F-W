import React, { useState } from "react";
import { FaBars, FaTimes } from "react-icons/fa";

function Navbar() {
  const [isOpen, setIsOpen] = useState(false);

  // Toggle function to open/close the mobile menu
  const toggleMenu = () => {
    setIsOpen(!isOpen);
  };

  return (
    <nav className="bg-white shadow-md w-full">
      <div className="flex items-center justify-between px-6 py-4 md:px-16">
        {/* Logo */}
        <div className="text-2xl font-semibold text-[#093A3E]">LOGO</div>

        {/* Menu Icon for Mobile */}
        <div className="md:hidden" onClick={toggleMenu}>
          {isOpen ? (
            <FaTimes className="text-2xl text-[#093A3E] cursor-pointer" />
          ) : (
            <FaBars className="text-2xl text-[#093A3E] cursor-pointer" />
          )}
        </div>

        {/* Menu Links */}
        <ul
          className={`fixed md:static top-0 left-0 w-full md:w-auto h-screen md:h-auto bg-white md:bg-transparent flex flex-col md:flex-row md:space-x-6 items-center justify-center transition-transform duration-300 ease-in-out ${
            isOpen ? "translate-y-0" : "-translate-y-full md:translate-y-0"
          }`}
        >
          {/* Close Button for Mobile Menu */}
          {isOpen && (
            <button
              onClick={toggleMenu}
              className="absolute top-4 right-4 text-[#093A3E] text-2xl md:hidden"
            >
              <FaTimes />
            </button>
          )}

          <li className="text-xl text-gray-700 py-2 md:py-0 cursor-pointer">
            Home
          </li>
          <li className="text-xl text-gray-700 py-2 md:py-0 cursor-pointer">
            About Us
          </li>
          <li className="text-xl text-gray-700  py-2 md:py-0 cursor-pointer">
            Services
          </li>
          <li className="text-xl text-gray-700 py-2 md:py-0 cursor-pointer">
            Markets
          </li>
          <li className="text-xl text-gray-700 py-2 md:py-0 cursor-pointer">
            Projects
          </li>

          {/* Mobile Login Button */}
          {isOpen && (
            <li className="md:hidden mt-4">
              <button className="bg-[#093A3E] text-white px-6 py-2 rounded hover:bg-[#ea7b30]">
                Login
              </button>
            </li>
          )}
        </ul>

        {/* Desktop Login Button */}
        <div className="hidden md:flex">
          <button className="bg-[#093A3E] text-white px-4 py-2 rounded hover:bg-[#ea7b30]">
            Login
          </button>
        </div>
      </div>
    </nav>
  );
}

export default Navbar;
