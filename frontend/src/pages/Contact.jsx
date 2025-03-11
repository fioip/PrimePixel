import React, { useState } from "react";
import { FaPhone, FaEnvelope, FaMapMarkerAlt } from "react-icons/fa";

const ContactCard = ({ icon, title, content }) => {
  return (
    <div className="bg-orange-100 p-8 rounded-lg animate-fade-up">
      <div className="flex items-center mb-4">
        {icon}
        <h3 className="text-2xl font-bold ml-4">{title}</h3>
      </div>
      <p>{content}</p>
    </div>
  );
};

const ContactPage = () => {
  const [formData, setFormData] = useState({
    name: "",
    email: "",
    message: "",
  });
  const [showSuccessMessage, setShowSuccessMessage] = useState(false);

  const handleInputChange = (e) => {
    setFormData({ ...formData, [e.target.name]: e.target.value });
  };

  const handleSubmit = (e) => {
    e.preventDefault();
    // Handle form submission logic here
    console.log(formData);
    setShowSuccessMessage(true);
    setTimeout(() => setShowSuccessMessage(false), 3000);
  };

  return (
    <div className="bg-white text-gray-800 font-inter">
      <main className="max-w-6xl mx-auto py-12 px-4 sm:px-6 lg:px-8">
        <section className="mb-12">
          <h1 className="text-4xl font-bold mb-6 text-orange-500">
            Get in Touch
          </h1>
          <div className="grid grid-cols-1 sm:grid-cols-3 gap-8">
            <ContactCard
              icon={<FaPhone className="text-4xl text-orange-500" />}
              title="Phone"
              content="+1 (555) 555-5555"
            />
            <ContactCard
              icon={<FaEnvelope className="text-4xl text-orange-500" />}
              title="Email"
              content="info@primepixel.com"
            />
            <ContactCard
              icon={<FaMapMarkerAlt className="text-4xl text-orange-500" />}
              title="Office Location"
              content="123 Main St, Anytown USA"
            />
          </div>
        </section>

        <section className="mb-12 bg-orange-100 p-8 rounded-lg">
          <h2 className="text-3xl font-bold mb-6 text-orange-500">
            Send Us a Message
          </h2>
          <form onSubmit={handleSubmit}>
            <div className="mb-6">
              <label
                htmlFor="name"
                className="block text-gray-700 font-medium mb-2"
              >
                Name
              </label>
              <input
                type="text"
                id="name"
                name="name"
                value={formData.name}
                onChange={handleInputChange}
                className="border border-gray-300 rounded-lg px-4 py-2 w-full focus:border-orange-500 transition-colors duration-300"
                placeholder="Enter your name"
              />
            </div>
            <div className="mb-6">
              <label
                htmlFor="email"
                className="block text-gray-700 font-medium mb-2"
              >
                Email
              </label>
              <input
                type="email"
                id="email"
                name="email"
                value={formData.email}
                onChange={handleInputChange}
                className="border border-gray-300 rounded-lg px-4 py-2 w-full focus:border-orange-500 transition-colors duration-300"
                placeholder="Enter your email"
              />
            </div>
            <div className="mb-6">
              <label
                htmlFor="message"
                className="block text-gray-700 font-medium mb-2"
              >
                Message
              </label>
              <textarea
                id="message"
                name="message"
                rows="4"
                value={formData.message}
                onChange={handleInputChange}
                className="border border-gray-300 rounded-lg px-4 py-2 w-full focus:border-orange-500 transition-colors duration-300"
                placeholder="Enter your message"
              ></textarea>
            </div>
            <button
              type="submit"
              className="bg-orange-500 hover:bg-orange-600 text-white font-medium px-6 py-3 rounded-lg transition-colors duration-300"
            >
              Send Message
            </button>
          </form>
          {showSuccessMessage && (
            <div className="mt-4 bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded-lg">
              Your message has been sent successfully.
            </div>
          )}
        </section>
      </main>
    </div>
  );
};

export default ContactPage;
