"use client";
import { useEffect, useState } from "react";

const images = [
  "/images/real1.jpg",
  "/images/real2.jpg",
  "/images/real3.jpg",
  "/images/real4.jpg",
  "/images/real5.jpg",
  "/images/real6.jpg",
  "/images/real7.jpg",
  "/images/real8.jpg",
  "/images/real9.jpg",
  "/images/real10.jpg",
  // Add more image paths as needed
];

const SLIDE_INTERVAL = 4000; // 4 seconds

const Hero: React.FC = () => {
  const [current, setCurrent] = useState(0);
  const total = images.length;

  // Auto-advance
  useEffect(() => {
    const timer = setInterval(() => {
      setCurrent((prev) => (prev + 1) % total);
    }, SLIDE_INTERVAL);
    return () => clearInterval(timer);
  }, [total]);

  // Manual navigation
  const goToPrev = () => setCurrent((prev) => (prev - 1 + total) % total);
  const goToNext = () => setCurrent((prev) => (prev + 1) % total);

  return (
    <section className="relative h-[100vh] flex items-center justify-center overflow-hidden">
      {/* Background Image */}
      <div
        className="absolute inset-0 bg-cover bg-center transition-all duration-700"
        style={{ backgroundImage: `url('${images[current]}')` }}
      />
      {/* Overlay */}
      <div className="absolute inset-0  bg-opacity-50" />
      {/* Text Content */}
      <div className="relative z-10 p-10 rounded text-center">
        <h1 className="text-4xl md:text-6xl font-bold text-white mb-4">
          DISCOVER A NEW AGE OF LIVING
        </h1>
        <p className="text-lg text-white mb-6">
          Unlock the splendor of Enaki Resort Residences, now ready to let.
        </p>
        <a
          href="#"
          className="bg-black text-white px-6 py-3 rounded font-semibold hover:bg-red-800 transition"
        >
          KNOW MORE
        </a>
      </div>
      {/* Slide Indicators */}
      <div className="absolute bottom-6 left-1/2 -translate-x-1/2 flex space-x-2 z-20">
        {images.map((_, idx) => (
          <span
            key={idx}
            className={`block w-3 h-3 rounded-full transition-colors duration-300 ${
              idx === current ? "bg-red-700" : "bg-white bg-opacity-50"
            }`}
          />
        ))}
      </div>
      {/* Navigation Arrows */}
      <button
        onClick={goToPrev}
        className="absolute left-4 top-1/2 -translate-y-1/2 z-20 bg-black bg-opacity-40 hover:bg-opacity-70 text-white rounded-full w-10 h-10 flex items-center justify-center focus:outline-none"
        aria-label="Previous Slide"
      >
        <svg width="24" height="24" fill="none" stroke="currentColor" strokeWidth="2" viewBox="0 0 24 24"><path d="M15 19l-7-7 7-7" /></svg>
      </button>
      <button
        onClick={goToNext}
        className="absolute right-4 top-1/2 -translate-y-1/2 z-20 bg-black bg-opacity-40 hover:bg-opacity-70 text-white rounded-full w-10 h-10 flex items-center justify-center focus:outline-none"
        aria-label="Next Slide"
      >
        <svg width="24" height="24" fill="none" stroke="currentColor" strokeWidth="2" viewBox="0 0 24 24"><path d="M9 5l7 7-7 7" /></svg>
      </button>
    </section>
  );
};

export default Hero;
