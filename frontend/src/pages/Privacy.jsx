import React from "react";

function Privacy() {
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
          <Section title="Introduction">
            <p>
              Welcome to PrimePixel's Privacy Policy. We respect your privacy
              and are committed to protecting your personal data. This privacy
              policy will inform you about how we look after your personal data
              when you visit our website and tell you about your privacy rights.
            </p>
          </Section>

          <Section title="Information We Collect">
            <p>
              We collect several different types of information for various
              purposes:
            </p>
            <ul className="list-disc pl-6 mt-2 space-y-2">
              <li>
                Personal identification information (Name, email address, phone
                number)
              </li>
              <li>Delivery address</li>
              <li>Payment information</li>
              <li>Shopping preferences and history</li>
              <li>
                Technical data (IP address, browser type, device information)
              </li>
            </ul>
          </Section>

          <Section title="How We Use Your Information">
            <p>We use your personal information to:</p>
            <ul className="list-disc pl-6 mt-2 space-y-2">
              <li>Process and deliver your orders</li>
              <li>Manage your account and provide customer support</li>
              <li>Send you important updates about your orders</li>
              <li>Improve our website and services</li>
              <li>Send you marketing communications (with your consent)</li>
              <li>Comply with legal obligations</li>
            </ul>
          </Section>

          <Section title="Data Security">
            <p>
              We have implemented appropriate security measures to prevent your
              personal data from being accidentally lost, used, or accessed in
              an unauthorized way. We limit access to your personal data to
              those employees, agents, contractors, and other third parties who
              have a business need to know.
            </p>
          </Section>

          <Section title="Your Rights">
            <p>
              Under certain circumstances, you have rights under data protection
              laws in relation to your personal data, including the right to:
            </p>
            <ul className="list-disc pl-6 mt-2 space-y-2">
              <li>Request access to your personal data</li>
              <li>Request correction of your personal data</li>
              <li>Request erasure of your personal data</li>
              <li>Object to processing of your personal data</li>
              <li>Request restriction of processing your personal data</li>
              <li>Request transfer of your personal data</li>
              <li>Right to withdraw consent</li>
            </ul>
          </Section>

          <Section title="Cookies">
            <p>
              We use cookies and similar tracking technologies to track the
              activity on our website and hold certain information. Cookies are
              files with small amount of data which may include an anonymous
              unique identifier.
            </p>
            <p className="mt-2">
              You can instruct your browser to refuse all cookies or to indicate
              when a cookie is being sent. However, if you do not accept
              cookies, you may not be able to use some portions of our website.
            </p>
          </Section>

          {/* Footer Section */}
          <div className="mt-12 pt-8 border-t border-gray-200">
            <p className="text-sm text-gray-600 text-center">
              This privacy policy was last updated on November 17, 2024 and
              applies to all information collected by PrimePixel through our
              website and related services.
            </p>
          </div>
        </div>
      </div>
    </div>
  );
}

export default Privacy;
