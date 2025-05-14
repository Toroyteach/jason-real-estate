interface Insight {
  title: string;
  excerpt: string;
  image: string;
}

const insights: Insight[] = [
  { title: "Property Investment in Kenya", excerpt: "Learn about the best investment strategies...", image: "images/real4.jpg" },
  { title: "Lifestyle Trends", excerpt: "Explore the latest in luxury living...", image: "/images/real5.jpg" },
];

const Insights: React.FC = () => (
  <section className="py-16">
    <div className="container mx-auto px-6">
      <h2 className="text-3xl font-bold mb-8 text-center">EXPLORE PROPERTY INSIGHTS</h2>
      <div className="grid md:grid-cols-2 gap-8">
        {insights.map((post, idx) => (
          <div key={idx} className="bg-white rounded shadow hover:shadow-lg transition flex">
            <img src={post.image} alt={post.title} className="w-1/3 h-40 object-cover rounded-l" />
            <div className="p-4 flex-1">
              <h3 className="text-xl font-semibold">{post.title}</h3>
              <p className="text-gray-600">{post.excerpt}</p>
              <a href="#" className="text-red-700 font-semibold mt-2 inline-block">Read More</a>
            </div>
          </div>
        ))}
      </div>
    </div>
  </section>
);

export default Insights; 