const images = [
  { src: "/images/resort1.jpg", name: "Walk", location: "Shanzu Road" },
  { src: "/images/resort2.jpg", name: "park", location: "Brookside" },
  { src: "/images/resort3.jpg", name: "Jason Restraunt", location: "Jason Resort" },
  { src: "/images/resort4.jpg", name: "Jason forest", location: "Nyari" },
  { src: "/images/resort5.jpg", name: "Nature Trail", location: "Brookside" },
];

const Featured = () => (
  <section className="py-20 bg-white  ">
    <div className="max-w-5xl mx-auto px-2 justify-between">
      <h1 className="text-sm font-light text-gray-500 mb-10">FEATURED COMMUNITY</h1>
      <h2 className="text-3xl text-black mb-15">JASON RESORT TOWN</h2>
      <div className="grid grid-cols-3 gap-10 h-150 ">
        {/* Left column: 2 images */}
        <div className="flex flex-col gap-4 justify-between">
          {images.slice(0, 2).map((img) => (
            <div key={img.src} className="bg-white overflow-hidden flex flex-col items-center">
              <img src={img.src} alt={img.name} className="object-cover w-full h-64" />
              <div className="p-2 w-full text-center">
                <div className="font-thin text-black">{img.name} | {img.location}</div>
               
              </div>
            </div>
          ))}
        </div>
        {/* Center column: 1 image (centered vertically) */}
        <div className="flex flex-col justify-center h-150">
          <div className="bg-white overflow-hidden flex flex-col items-center">
            <img src={images[2].src} alt={images[2].name} className="object-cover w-full h-150" />
            <div className="p-2 w-full text-center">
              <div className="font-thin text-black">{images[2].name} | {images[2].location}</div>
             
            </div>
          </div>
        </div>
        {/* Right column: 2 images */}
        <div className="flex flex-col gap-4 justify-between">
          {images.slice(3, 5).map((img) => (
            <div key={img.src} className="bg-white  overflow-hidden flex flex-col items-center">
              <img src={img.src} alt={img.name} className="object-cover w-full h-64" />
              <div className="p-2 w-full text-center">
                <div className="font-thin text-black">{img.name} | {img.location}</div>
                
              </div>
            </div>
          ))}
        </div>
      </div>
    </div>
  </section>
);

export default Featured;
