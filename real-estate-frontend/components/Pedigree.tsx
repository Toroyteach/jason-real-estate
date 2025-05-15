const Pedigree = () => {
    return (
        <section className="py-20 bg-white">
            <div className="container mx-auto px-6">
                <div className="grid md:grid-cols-2 gap-10 items-center">
                    {/* Left column: text */}
                    <div>
                    <h2 className="uppercase mb-15 text-gray-500">Our pedigree-------- </h2>
                        <h3 className="text-2xl md:text-3xl  uppercase font-thin text-black mb-10">
                            Our legacy
                            </h3>
                        
                        <p className="text-gray-600 leading-relaxed">
                            HassConsult Limited was formed in 1992 with a vision
                            to establish a comprehensive Real Estate firm that
                            reinvented the market patterns by introducing
                            transparency, integrity and professionalism in a
                            market calling for more global standards.<br></br>
                            HassConsult with its wealth of experience
                            continuously reaps new benefits from opportunities
                            presented by changing market dynamics as well as
                            evolving business and property cycles.<br></br> As a policy,
                            HassConsult works towards new innovations and
                            continually brings dynamism to the industry in
                            Kenya-be it launch of off-plan developments or
                            introduction of versatile financial structures for
                            property developments, which have propelled the
                            industry into new directions.
                        </p>
                    </div>

                    {/* Right column: image */}
                    <div>
                        <img
                            src="/images/office2.jpg"
                            alt="Pedigree"
                            className="w-full h-auto  object-cover"
                        />
                    </div>
                </div>
            </div>
        </section>
    );
};

export default Pedigree;
