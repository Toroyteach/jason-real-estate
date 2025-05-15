import { FaFacebookF, FaTwitter, FaInstagram, FaLinkedinIn } from 'react-icons/fa';

const Footer: React.FC = () => (
  <footer className="bg-gray-200 text-black py-8">
    <div className="container mx-auto px-6 flex flex-col md:flex-row justify-between items-start md:items-center space-y-6 md:space-y-0">
      
      {/* Company Info */}
      <div className="flex-1 text-center md:text-left">
        <div className="font-bold text-xl mb-2">Jason Real Estate</div>
        <div>NAIROBI, KENYA</div>
        <div className="mt-1">+254 709 479 000 | hello@jasonreal.com</div>
        {/* Social Media */}
        <div className="flex justify-center md:justify-start mt-4 space-x-4 text-black">
           <a href="https://facebook.com" target="_blank" rel="noopener noreferrer" aria-label="Facebook" className="hover:text-white">
            <FaFacebookF />
          </a>
          <a href="https://twitter.com" target="_blank" rel="noopener noreferrer" aria-label="Twitter" className="hover:text-white">
            <FaTwitter />
          </a>
          <a href="https://instagram.com" target="_blank" rel="noopener noreferrer" aria-label="Instagram" className="hover:text-white">
            <FaInstagram />
          </a>
          <a href="https://linkedin.com" target="_blank" rel="noopener noreferrer" aria-label="LinkedIn" className="hover:text-white">
            <FaLinkedinIn />
          </a>
        </div>
      </div>

      {/* Company Shortcuts */}
      <div className="flex-1 text-center md:text-left">
        <h3 className="font-semibold text-lg mb-2">Company</h3>
        <ul className="space-y-1 text-gray-900">
          <li><a href="/about" className="hover:text-white">About Us</a></li>
          <li><a href="/services" className="hover:text-white">Services</a></li>
          <li><a href="/contact" className="hover:text-white">Contact</a></li>
          <li><a href="/careers" className="hover:text-white">Careers</a></li>
        </ul>
      </div>

      {/* Privacy & Copyright */}
      <div className="flex-1 text-center md:text-right text-sm text-black">
        <a href="/privacy" className="hover:underline block mb-2">Privacy Policy</a>
        <span>© {new Date().getFullYear()} Leirbag</span>
      </div>
    </div>
  </footer>
);

export default Footer;

