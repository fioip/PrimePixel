import React from "react";
import {
  FaLightbulb,
  FaHandshake,
  FaRocket,
  FaUserCircle,
  FaGlobe,
  FaCode,
  FaBalanceScale,
  FaBrain,
  FaCameraRetro,
} from "react-icons/fa";
import { IoPeople } from "react-icons/io5";
import { BiSupport } from "react-icons/bi";

function About() {
  return (
    <div className="bg-white text-gray-800 font-inter">
      <main className="max-w-6xl mx-auto py-16 px-4 sm:px-6 lg:px-8">
        <section className="mb-16">
          <h2 className="text-3xl font-bold mb-6 text-orange-500">
            Who We Are
          </h2>
          <div className="grid grid-cols-1 sm:grid-cols-2 gap-8">
            <div className="bg-orange-100 p-8 rounded-lg">
              <div className="flex items-center mb-4">
                <FaUserCircle className="text-4xl text-orange-500 mr-4" />
                <h3 className="text-2xl font-bold ">Our Team</h3>
              </div>
              <p>
                We are a talented and dedicated group of professionals united by
                a shared passion for photography and a commitment to excellence.
                With expertise across the fields of photography, videography,
                and customer service, our team works tirelessly to deliver
                exceptional products and personalized solutions to our clients.
                At PrimePixel, we believe in empowering creativity through
                access to the best equipment and support available.
              </p>
            </div>
            <div className="bg-orange-100 p-8 rounded-lg">
              <div className="flex items-center mb-4">
                <FaGlobe className="text-4xl text-orange-500 mr-4" />
                <h3 className="text-2xl font-bold">Global Reach</h3>
              </div>
              <p>
                PrimePixel proudly serves photographers and videographers
                worldwide. Our global presence, bolstered by partnerships with
                top brands and distributors, ensures that we can meet the
                diverse needs of creators in various markets. Whether you’re in
                a bustling city or a remote location, PrimePixel is here to help
                you achieve your creative goals.
              </p>
            </div>
          </div>
        </section>

        <section className="mb-16">
          <h2 className="text-3xl font-bold mb-6 text-orange-500">
            Our Mission
          </h2>
          <p className="text-lg">
            Our mission is to consistently exceed our customers’ expectations by
            providing innovative, high-quality equipment and exceptional
            customer service. We aim to inspire and support creators in their
            journey, helping them capture moments that matter and create content
            that leaves a lasting impression.
          </p>
        </section>

        <section className="mb-16">
          <h2 className="text-3xl font-bold mb-6 text-orange-500">
            Our Values
          </h2>
          <div className="grid grid-cols-1 sm:grid-cols-3 gap-8">
            <div className="bg-orange-100 p-8 rounded-lg">
              <div className="flex items-center mb-4">
                <FaLightbulb className="text-4xl text-orange-500 mr-4" />
                <h3 className="text-2xl font-bold">Innovation</h3>
              </div>
              <p>
                We embrace the ever-evolving world of photography and are
                committed to offering the latest and most advanced gear to our
                clients.
              </p>
            </div>
            <div className="bg-orange-100 p-8 rounded-lg">
              <div className="flex items-center mb-4">
                <FaHandshake className="text-4xl text-orange-500 mr-4" />
                <h3 className="text-2xl font-bold">Collaboration</h3>
              </div>
              <p>
                We work hand-in-hand with our customers, brands, and partners,
                fostering relationships built on trust, communication, and
                shared success.
              </p>
            </div>
            <div className="bg-orange-100 p-8 rounded-lg">
              <div className="flex items-center mb-4">
                <FaRocket className="text-4xl text-orange-500 mr-4" />
                <h3 className="text-2xl font-bold">Excellence</h3>
              </div>
              <p>
                Striving for excellence is at the core of everything we do, from
                selecting the best products to delivering outstanding customer
                experiences.
              </p>
            </div>

            <div className="bg-orange-100 p-8 rounded-lg">
              <div className="flex items-center mb-4">
                <FaBalanceScale className="text-4xl text-orange-500 mr-4" />
                <h3 className="text-2xl font-bold">Integrity</h3>
              </div>
              <p>
                Honesty, transparency, and ethical practices guide every
                interaction and decision we make.
              </p>
            </div>

            <div className="bg-orange-100 p-8 rounded-lg">
              <div className="flex items-center mb-4">
                <IoPeople className="text-4xl text-orange-500 mr-4" />
                <h3 className="text-2xl font-bold">Customer-Centricity</h3>
              </div>
              <p>
                Our clients are at the heart of our business. We are dedicated
                to understanding their needs and providing solutions tailored to
                their unique requirements.
              </p>
            </div>

            <div className="bg-orange-100 p-8 rounded-lg">
              <div className="flex items-center mb-4">
                <FaBrain className="text-4xl text-orange-500 mr-4" />
                <h3 className="text-2xl font-bold">Creativity</h3>
              </div>
              <p>
                We celebrate the creative spirit and the stories our customers
                bring to life, continually inspiring and supporting their
                artistic pursuits.
              </p>
            </div>
          </div>
        </section>

        <section className="mb-16">
          <h2 className="text-3xl font-bold mb-6 text-orange-500">
            Our Expertise
          </h2>
          <div className="grid grid-cols-1 sm:grid-cols-2 gap-8">
            <div className="bg-orange-100 p-8 rounded-lg">
              <div className="flex items-center mb-4">
                <FaCameraRetro className="text-4xl text-orange-500 mr-4" />
                <h3 className="text-2xl font-bold">Product Excellence</h3>
              </div>
              <p>
                At PrimePixel, we carefully curate a selection of the finest
                camera bodies, lenses, lighting equipment, and memory cards,
                ensuring every product meets the highest standards of quality
                and performance. Our offerings cater to all levels of expertise,
                from amateur enthusiasts to seasoned professionals.
              </p>
            </div>
            <div className="bg-orange-100 p-8 rounded-lg">
              <div className="flex items-center mb-4">
                <BiSupport className="text-4xl text-orange-500 mr-4" />
                <h3 className="text-2xl font-bold">Exceptional Support</h3>
              </div>
              <p>
                From pre-purchase consultations to after-sales assistance, we
                are committed to delivering an exceptional customer experience.
                Our team is always ready to assist with any questions, ensuring
                our clients feel confident and supported every step of the way.
              </p>
            </div>
          </div>
        </section>
        <section className="mb-16 bg-orange-100 p-8 rounded-lg">
          <div className="max-w-3xl mx-auto text-center">
            <h2 className="text-3xl font-bold mb-4 text-orange-500">
              Thank You for Your Interest
            </h2>
            <p className="text-lg mb-6">
              We appreciate you taking the time to learn more about our company.
              Our team is dedicated to delivering exceptional value and
              exceeding our clients' expectations.
            </p>
            <p className="text-lg font-bold">
              Let's connect and discuss how we can collaborate to achieve your
              goals.
            </p>
          </div>
        </section>
      </main>
    </div>
  );
}

export default About;
