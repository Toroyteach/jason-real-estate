const Footer: React.FC = () => (
  <footer className="bg-gray-900 text-white py-8">
    <div className="container mx-auto px-6 flex flex-col md:flex-row justify-between items-center">
      <div>
        <div className="font-bold text-xl mb-2">HassConsult</div>
        <div>ABC PLACE WAIYAKI WAY, NAIROBI, KENYA</div>
        <div>+254 709 479 000 | hello@hassconsult.com</div>
      </div>
      <div className="mt-4 md:mt-0 text-sm text-gray-400">
        <span className="mr-4">Privacy Policy</span>
        <span>© {new Date().getFullYear()} HassConsult</span>
      </div>
    </div>
  </footer>
);

export default Footer;
