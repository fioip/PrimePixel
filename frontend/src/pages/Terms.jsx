import React from "react";

function Terms() {
  const Section = ({ title, children }) => (
    <div className="mb-8">
      <h2 className="text-2xl font-bold mb-4 text-[#FF8500]">{title}</h2>
      <div className="space-y-3 text-gray-700">{children}</div>
    </div>
  );

  return (
    <div className="min-h-screen bg-white">
      {/* Main Content */}
      <div className="container mx-auto px-4 py-12 max-w-4xl">
        <div className="bg-white rounded-lg shadow-lg p-8">
          <Section title="1. Agreement to Terms">
            <p>
              By accessing and using PrimePixel's website and services, you
              agree to be bound by these Terms and Conditions. If you disagree
              with any part of these terms, you may not access our website and
              services.
            </p>
          </Section>

          <Section title="2. Intellectual Property Rights">
            <p>
              All content present on this website, including but not limited to
              text, graphics, logos, images, product descriptions, and software,
              is the property of PrimePixel and is protected by intellectual
              property laws.
            </p>
            <ul className="list-disc pl-6 mt-2 space-y-2">
              <li>
                You may not use our materials without express written consent
              </li>
              <li>
                Product images and descriptions are for illustration purposes
                only
              </li>
              <li>
                All trademarks displayed belong to their respective owners
              </li>
            </ul>
          </Section>

          <Section title="3. Products and Services">
            <p>
              All products are subject to availability. We reserve the right to
              discontinue any product at any time. Prices are subject to change
              without notice.
            </p>
            <ul className="list-disc pl-6 mt-2 space-y-2">
              <li>Product specifications may vary</li>
              <li>Colors may differ slightly from images shown</li>
              <li>We reserve the right to limit quantities of any product</li>
              <li>Promotional offers may be subject to additional terms</li>
            </ul>
          </Section>

          <Section title="4. Orders and Payment">
            <p>
              By placing an order, you warrant that you are legally capable of
              entering into binding contracts. All orders are subject to
              acceptance and availability.
            </p>
            <ul className="list-disc pl-6 mt-2 space-y-2">
              <li>Payment must be received in full before order processing</li>
              <li>
                All prices are in the local currency unless otherwise stated
              </li>
              <li>
                We accept major credit cards and specified payment methods
              </li>
              <li>Orders may be subject to verification checks</li>
            </ul>
          </Section>

          <Section title="5. Shipping and Delivery">
            <p>
              Delivery times are estimates only and commence from the date of
              shipping, not the date of order. We are not responsible for delays
              outside our control.
            </p>
            <ul className="list-disc pl-6 mt-2 space-y-2">
              <li>Shipping costs are calculated at checkout</li>
              <li>Risk of loss transfers upon delivery</li>
              <li>International orders may be subject to customs duties</li>
            </ul>
          </Section>

          <Section title="6. Returns and Refunds">
            <p>
              Our return policy allows returns within 30 days of delivery for
              most items in their original condition and packaging.
            </p>
            <ul className="list-disc pl-6 mt-2 space-y-2">
              <li>Return shipping costs may be customer's responsibility</li>
              <li>Certain items are non-returnable for hygiene reasons</li>
              <li>Defective items will be replaced or refunded</li>
            </ul>
          </Section>

          <Section title="7. User Responsibilities">
            <p>When using our website, you agree not to:</p>
            <ul className="list-disc pl-6 mt-2 space-y-2">
              <li>Use the service for any unlawful purpose</li>
              <li>Attempt to gain unauthorized access to our systems</li>
              <li>Transmit any harmful code or malware</li>
              <li>Impersonate any person or entity</li>
              <li>Interfere with the proper working of the website</li>
            </ul>
          </Section>

          <Section title="8. Limitation of Liability">
            <p>
              To the maximum extent permitted by law, PrimePixel shall not be
              liable for any indirect, incidental, special, consequential, or
              punitive damages resulting from your use of our services.
            </p>
          </Section>

          <Section title="9. Warranty Disclaimer">
            <p>
              Products are covered by manufacturer's warranty where applicable.
              Our services are provided "as is" without any warranty of any
              kind, either express or implied.
            </p>
          </Section>

          <Section title="10. Changes to Terms">
            <p>
              We reserve the right to modify these terms at any time. Changes
              will be effective immediately upon posting to the website. Your
              continued use of our services constitutes acceptance of modified
              terms.
            </p>
          </Section>

          {/* Footer Section */}
          <div className="mt-12 pt-8 border-t border-gray-200">
            <p className="text-sm text-gray-600 text-center">
              By using PhotoGear Pro's services, you acknowledge that you have
              read, understood, and agree to be bound by these Terms and
              Conditions.
            </p>
          </div>
        </div>
      </div>
    </div>
  );
}

export default Terms;
