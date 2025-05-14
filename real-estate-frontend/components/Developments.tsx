const Developments = () => (
    <>
        <section className="py-16 bg-white">
            <div className="max-w-7xl mx-auto px-4">
                <h1 className=" text-sm text-gray-500">
                    {" "}
                    NEW FEATURES___________
                </h1>
                <div className="mt-10 grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-6">
                    <div className="">
                        <img
                            src="/images/real2.jpg"
                            alt="Whispering Oaks"
                            className=" object-cover h-90  "
                        />
                        <div className="p-4 mt-5">
                            <h3 className="text-3xl font-semibold text-black">
                                DISCOVER A NEW AGE OF LIVING
                            </h3>
                            <p className="text-black mt-5">
                                Unlock the splendor of Enaki Resort
                                Residences,now ready to let.
                            </p>
                            <button className="mt-4 bg-gray-800 text-white px-6 py-2  font-semibold hover:bg-transparent hover:text-gray-900 border-black border-2 transition">
                                KNOW MORE
                            </button>
                        </div>
                    </div>
                    <div>
                        <div className="max-w-3xl mx-auto px-4">
                            <div className="grid grid-cols-2 grid-rows-2 w-full h-90 gap-1 overflow-hidden ">
                                {/* Top left: Large */}
                                <img
                                    src="/images/real10.jpg"
                                    alt="Large Left Top"
                                    className="object-cover w-full h-full row-span-2"
                                />
                                {/* Top right: Small */}
                                <img
                                    src="/images/real5.jpg"
                                    alt="Small Right Top"
                                    className="object-cover w-full h-full"
                                />
                                {/* Bottom right: Large */}
                                <img
                                    src="/images/real7.jpg"
                                    alt="Large Right Bottom"
                                    className="object-cover w-full h-full row-span-2"
                                />
                                {/* Bottom left: Small */}
                                <img
                                    src="/images/real9.jpg"
                                    alt="Small Left Bottom"
                                    className="object-cover w-full h-full"
                                />
                            </div>
                        </div>

                        <div className="p-4 mt-5">
                            <h3 className="text-3xl font-semibold text-black">
                                BREATHTAKING DEVELOPMENTS
                            </h3>
                            <p className="mt-5 text-black">
                                Explore our properties for sale inspired by
                                innovation and design
                            </p>
                            <button className="mt-4 bg-gray-800 text-white px-6 py-2  font-semibold hover:bg-transparent hover:text-gray-900 border-black border-2 transition">
                                EXPLORE
                            </button>
                        </div>
                    </div>

                    <div className="">
                        <img
                            src="/images/real6.jpg"
                            alt="Aura Peponi"
                            className="w-full h-90 object-cover"
                        />
                        <div className="p-4 mt-5">
                            <h3 className="text-3xl font-semibold text-black">
                                EXPLORE PROPERTY INSIGHTS
                            </h3>
                            <p className="text-black mt-5">
                                Peruse a carefully curated blog for lifestyle,
                                buying and property investment in Kenya.
                            </p>
                            <button className="mt-4 bg-gray-800 text-white px-6 py-2  font-semibold hover:bg-transparent hover:text-gray-900 border-black border-2 transition">
                                START READING
                            </button>
                        </div>
                    </div>
                </div>
            </div>

            {/* development section */}
            <div className="mt-40 grid grid-cols-1 sm:grid-cols-2 md:grid-cols-2 gap-6">
              
                    <div className="p-4 mt-5 ">
                    <h2 className="text-gray-400 text-sm mt-20 mb-10 ">DEVELOPMENTS-------------</h2>
                        <h3 className=" mt-5 mb-5 text-4xl font-semibold text-black">
                        LATEST LAUNCHES
                        </h3>
                        <p className="text-black mt-10 mb-10">
                        Jason Real-Estate offers high-end homes for sale all over Nairobi. The developments we offer have been conceptualized by our development team to be high quality assets using a data-driven approach in planning and design, that gears property for high rental returns and an escalated rate of capital growth.
                        </p>
                        <button className="mt-4 bg-gray-800 text-white px-6 py-2  font-semibold hover:bg-transparent hover:text-gray-900 border-black border-2 transition">
                            VIEW ALL DEVELOPMENTS
                        </button>
                    </div>               
                
                    <div className="max-w-3xl mx-auto px-0">
                        <div className="grid grid-cols-2 grid-rows-2 w-full h-150 gap-1 overflow-hidden ">
                            {/* Top left: Large */}
                            <img
                                src="/images/real10.jpg"
                                alt="Large Left Top"
                                className="object-cover w-full h-full row-span-2"
                            />
                            {/* Top right: Small */}
                            <img
                                src="/images/real5.jpg"
                                alt="Small Right Top"
                                className="object-cover w-full h-full"
                            />
                            
                            {/* Bottom right: Large */}
                            <img
                                src="/images/real7.jpg"
                                alt="Large Right Bottom"
                                className="object-cover w-full h-full row-span-2"
                            />
                        </div>
                       
                    
                    </div>

                  
                </div>
            
            
        </section>
        
    </>
);

export default Developments;
