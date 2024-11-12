import React from "react";

// Services and Projects data with imported images
import product3 from "../asset/product3.png"; // Import images
import product1 from "../asset/product1.jpg";
import product2 from "../asset/product2.jpg";
import bg from "../asset/final1.jpg";

// Service and Project arrays
const services = [
  {
    image: product3, // Use imported image
    title: "Price Stabilization",
    content: "Helping maintain stable prices for essential goods.",
  },
  {
    image: product3, // Use imported image
    title: "Quality Assurance",
    content: "Ensuring high-quality standards in all products.",
  },
  {
    image: product3, // Use imported image
    title: "Efficient Distribution",
    content: "Timely and reliable distribution services.",
  },
];

const projects = [
  {
    image: product1, // Use imported image
    title: "Community Food Support",
    content: "Empowering communities with reliable food access.",
  },
  {
    image: product2, // Use imported image
    title: "Sustainable Agriculture",
    content: "Promoting sustainable farming practices for better yield.",
  },
  {
    image: product1, // Use imported image
    title: "Market Expansion",
    content: "Expanding market reach to support local farmers.",
  },
];

function Landing() {
  return (
    <div>
      {/* Hero Section */}
      <div
        className="h-screen w-full bg-cover flex items-center justify-center"
        style={{ backgroundImage: `url(${bg})` }} // Use imported background image
      >
        <div className="text-center text-white px-6 md:px-0">
          <h1 className="text-3xl md:text-5xl font-bold mb-4">
            Welcome to NTAMUPAKA FOOD WEB
          </h1>
          <p className="text-lg md:text-xl">
            Providing quality and stability in food services
          </p>
        </div>
      </div>

      {/* About Us Section */}
      <div className="bg-white py-16 px-6 text-center md:px-16">
        <h2 className="text-2xl md:text-3xl font-semibold mb-6">About Us</h2>
        <p className="text-gray-700 text-lg md:text-xl max-w-2xl mx-auto">
          NTAMUPAKA FOOD WEB is dedicated to ensuring high-quality, stable, and
          efficient food services that enhance customer satisfaction and promote
          sustainable practices. We are committed to supporting communities with
          reliable food solutions.
        </p>
      </div>

      {/* Services Section */}
      <div className="bg-gray-100 py-16 px-6 md:px-16">
        <h2 className="text-center text-2xl md:text-3xl font-semibold mb-12">
          Our Services
        </h2>

        <div className="grid gap-8 md:grid-cols-2 lg:grid-cols-3">
          {services.map((service, index) => (
            <div
              key={index}
              className="bg-white shadow-lg rounded-lg overflow-hidden"
            >
              <img
                src={service.image}
                alt={service.title}
                className="w-full h-48 object-cover"
              />
              <div className="p-6">
                <h3 className="text-xl font-semibold mb-2">{service.title}</h3>
                <p className="text-gray-600">{service.content}</p>
              </div>
            </div>
          ))}
        </div>
      </div>

      {/* Projects Section */}
      <div className="bg-white py-16 px-6 md:px-16">
        <h2 className="text-2xl md:text-3xl font-semibold text-center mb-6">
          Our Projects
        </h2>
        <p className="text-center text-gray-700 text-lg md:text-xl max-w-2xl mx-auto mb-12">
          Explore our projects aimed at improving food stability and quality
          across communities.
        </p>
        <div className="grid gap-8 md:grid-cols-2 lg:grid-cols-3">
          {projects.map((project, index) => (
            <div
              key={index}
              className="bg-gray-100 rounded-lg shadow-lg overflow-hidden"
            >
              <img
                src={project.image}
                alt={project.title}
                className="w-full h-48 object-cover"
              />
              <div className="p-6">
                <h3 className="text-xl font-semibold mb-2">{project.title}</h3>
                <p className="text-gray-600">{project.content}</p>
              </div>
            </div>
          ))}
        </div>
      </div>
    </div>
  );
}

export default Landing;
