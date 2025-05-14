import Navbar from '../components/Navbar';
import Hero from '../components/Hero';
import Developments from '../components/Developments';
import Insights from '../components/Insights';
import JasonIndex from '../components/JasonIndex';
import Footer from '../components/Footer';

export default function Home() {
  return (
    <>
      <Navbar />
      <Hero />
      <Developments />
      <Insights />
      <JasonIndex />
      <Footer />
    </>
  );
}