const images = [
    { src: "/images/data1.jpg", name: "Innate experience" },
    { src: "/images/data2.jpg", name: "Statistical Prowess" },
];

const JasonIndex = () => (
    <section className="py-20 bg-white ml-40">
        <div className="max-w-5xl mx-auto px-4">
            <div className="grid grid-cols-1 md:grid-cols-2 gap-8 items-center">
                {/* Left: Text */}
                <div>
                    <div className="flex items-center space-x-4 mb-8">
                        <h2 className="text-gray-400 uppercase whitespace-nowrap">
                            Data driven decision
                        </h2>
                        <div className="flex-grow h-px bg-gray-300"></div>
                    </div>
                    <h3 className="mb-5 text-4xl font-semibold text-black">
                        THE JASON INDEX
                    </h3>
                    <p className="text-black mb-10 font-thin">
                        Jason Real Estate is committed to the quarterly
                        publication of The Hass Property Index. This has proven
                        over the last decade to be a real estate tool for
                        investors, homeowners, the financial industry and
                        consumers with current and historical information about
                        house price inflation, allowing them to make informed
                        investment decisions about real estate in Kenya, so that
                        they enjoy the best possible returns.
                    </p>
                    <button className="mt-4 bg-gray-800 text-white px-6 py-2 font-semibold hover:bg-transparent hover:text-gray-900 border-black border-2 transition">
                        TAKE ME THERE
                    </button>
                </div>
                {/* Right: 2 images stacked */}
                <div className="flex flex-col  h-full justify-center">
                    {images.map((img) => (
                        <div
                            key={img.src}
                            className="bg-white overflow-hidden flex flex-col items-center"
                        >
                            <img
                                src={img.src}
                                alt={img.name}
                                className="object-cover w-full h-3/4 filter grayscale"
                            />
                            <div className="font-thin text-black uppercase ">
                                {img.name}
                            </div>
                        </div>
                    ))}
                </div>
            </div>
        </div>
    </section>
);

export default JasonIndex;
