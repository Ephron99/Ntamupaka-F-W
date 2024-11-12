import React from "react";

// Services and Projects data with imported images
import product1 from "../asset/product1.jpg";
import product2 from "../asset/product2.jpg";
import bg from "../asset/final1.jpg";
import p from "../asset/price.jpg";
import d from "../asset/disti.jpg";
import q from "../asset/quality.jpeg";
import { FaSeedling, FaHandsHelping, FaCogs } from "react-icons/fa";
import { FaBullhorn, FaGlobeAmericas } from "react-icons/fa";
import Writer from "./Writer";

// Service and Project arrays
const services = [
  {
    image: p, // Use imported image
    title: "Price Stabilization",
    content:
      "We work to stabilize prices of essential goods in the market, helping both consumers and producers manage fluctuations. By fostering strategic partnerships and utilizing data-driven insights, we ensure fair pricing, making nutritious food accessible to everyone while supporting local businesses.",
  },
  {
    image: q, // Use imported image
    title: "Quality Assurance",
    content:
      "Our commitment to quality ensures that every product meets strict safety and quality standards. From farm to table, we oversee every step of the process, performing rigorous checks to ensure that our products are fresh, safe, and of the highest quality, offering customers peace of mind with every purchase",
  },
  {
    image: d, // Use imported image
    title: "Efficient Distribution",
    content:
      "We provide efficient and reliable distribution networks that ensure food products reach their destinations on time and in optimal condition. By leveraging advanced logistics and real-time tracking, we reduce delays, minimize waste, and ensure consistent delivery to meet customer demands and expectations",
  },
];

const projects = [
  {
    image: product1, // Use imported image
    title: "Community Food Support",
    content:
      "Our Community Food Support initiative focuses on providing consistent, nutritious food access to communities in need. We work closely with local food banks, farms, and community centers to ensure that essential food resources are available to those facing food insecurity. This project aims to improve the well-being of individuals and families by supplying healthy, locally sourced food",
  },
  {
    image: product2, // Use imported image
    title: "Sustainable Agriculture",
    content:
      "Our project promotes sustainable agriculture by encouraging eco-friendly farming practices. We provide tools and resources to help farmers adopt crop rotation, reduce pesticide use, and manage water efficiently, aiming to improve yields while protecting the environment for long-term sustainability. We also offer training to help farmers implement these practices effectively",
  },
  {
    image: product1, // Use imported image
    title: "Market Expansion",
    content:
      "Our Market Expansion project aims to help local farmers access broader markets by leveraging innovative distribution channels. We provide support through digital platforms, partnerships, and logistics solutions, helping farmers reach new customers, increase sales, and grow their businesses. This initiative fosters economic growth, creates job opportunities, and enhances the availability of fresh, locally-produced food in diverse markets",
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
          <div className="text-2xl md:text-2xl font-bold mb-4">
            <Writer />
          </div>
          <p className="text-lg md:text-xl">
            Providing quality and stability in food services
          </p>
        </div>
      </div>

      {/* About Us Section */}
      <div className="bg-white py-16 px-6 md:px-16">
        <h2 className="text-3xl font-semibold text-center mb-8 text-gray-800">
          About Us
        </h2>
        <div className="max-w-4xl mx-auto text-center">
          <p className="text-lg md:text-xl text-gray-700 mb-6">
            NTAMUPAKA FOOD WEB is committed to ensuring that food services are
            of the highest quality, with a focus on stability and
            sustainability. Our mission is to enhance food access and improve
            well-being by supporting sustainable agricultural practices and
            efficient food distribution.
          </p>
          <p className="text-lg md:text-xl text-gray-700 mb-6">
            Through our network of farmers, local producers, and logistics
            partners, we aim to reduce food insecurity, stabilize food prices,
            and foster economic growth in communities across Rwanda. Our goal is
            to build a resilient, eco-friendly food ecosystem that guarantees
            access to nutritious food for everyone.
          </p>
        </div>

        {/* Mission and Vision Section */}
        <div className="grid gap-8 md:grid-cols-2 mt-16">
          {/* Mission Section */}
          <div className="bg-gray-50 rounded-lg p-8 shadow-md">
            <div className="flex items-center justify-center mb-4">
              <FaBullhorn className="text-4xl text-[#093A3E] mr-4" />{" "}
              {/* Mission Icon */}
              <h3 className="text-2xl font-semibold text-center text-gray-800">
                Mission
              </h3>
            </div>
            <p className="text-lg text-gray-700">
              To empower communities by promoting sustainable agricultural
              practices, enhancing local food production, and ensuring equitable
              access to nutritious food, thereby stabilizing food costs and
              fostering economic growth in Rwanda and beyond.
            </p>
          </div>

          {/* Vision Section */}
          <div className="bg-gray-50 rounded-lg p-8 shadow-md">
            <div className="flex items-center justify-center mb-4">
              <FaGlobeAmericas className="text-4xl text-[#093A3E] mr-4" />{" "}
              {/* Vision Icon */}
              <h3 className="text-2xl font-semibold text-center text-gray-800">
                Vision
              </h3>
            </div>
            <p className="text-lg text-gray-700">
              Develop a world where all individuals have access to affordable,
              nutritious food through a resilient and sustainable food
              ecosystem, driving economic prosperity and food security for
              communities globally.
            </p>
          </div>
        </div>

        {/* Our Values Section */}
        <div className="mt-16">
          <h3 className="text-2xl font-semibold text-center mb-8 text-gray-800">
            Our Values
          </h3>
          <div className="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8 text-center">
            {/* Sustainability Value */}
            <div className="bg-gray-50 rounded-lg p-6 shadow-md">
              <FaSeedling className="text-4xl mb-4 text-[#093A3E]" />
              <h4 className="text-xl font-semibold text-gray-800 mb-4">
                Sustainability
              </h4>
              <p className="text-lg text-gray-700">
                We promote eco-friendly farming practices that protect the
                environment and ensure long-term food security.
              </p>
            </div>

            {/* Community Empowerment Value */}
            <div className="bg-gray-50 rounded-lg p-6 shadow-md">
              <FaHandsHelping className="text-4xl mb-4 text-[#093A3E]" />
              <h4 className="text-xl font-semibold text-gray-800 mb-4">
                Community Empowerment
              </h4>
              <p className="text-lg text-gray-700">
                We empower local farmers and producers, providing them with
                resources and support to thrive in the marketplace.
              </p>
            </div>

            {/* Innovation Value */}
            <div className="bg-gray-50 rounded-lg p-6 shadow-md">
              <FaCogs className="text-4xl mb-4 text-[#093A3E]" />
              <h4 className="text-xl font-semibold text-gray-800 mb-4">
                Innovation
              </h4>
              <p className="text-lg text-gray-700">
                We utilize innovative technology and solutions to streamline
                food distribution, improve efficiency, and reduce waste.
              </p>
            </div>
          </div>
        </div>
      </div>

      {/* Services Section */}
      <div className="bg-gray-100 py-16 px-6 md:px-16">
        <h2 className="text-center text-2xl md:text-3xl font-semibold mb-12">
          Our Services
        </h2>

        <div className="grid gap-8 md:grid-cols-2 lg:grid-cols-3 hover:cursor-pointer">
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
        <div className="grid gap-8 md:grid-cols-2 lg:grid-cols-3 hover:cursor-pointer">
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
