const Navbar: React.FC = () => (
  <nav className="bg-[#012935] shadow sticky top-0 z-50">
    <div className="container mx-auto flex justify-between items-center py-4 px-6">
      <div className="font-bold text-xl text-white">JASON REAL ESTATE</div>
      <ul className="flex space-x-6 text-white">
        <li><a href="#" className="hover:text-red-700">Developments</a></li>
        <li><a href="#" className="hover:text-red-700">Buy</a></li>
        <li><a href="#" className="hover:text-red-700">Rent</a></li>
        <li><a href="#" className="hover:text-red-900">Jason Index</a></li>
        <li><a href="#" className="hover:text-red-700">Insights</a></li>
        <li><a href="#" className="hover:text-red-700">Contacts</a></li>
      </ul>
    </div>
  </nav>
);

export default Navbar;
