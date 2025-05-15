import Navbar from '../components/Navbar';
import Hero from '../components/Hero';
import Developments from '../components/Developments';
import Featured from '../components/Featured';
import Pedigree from '../components/Pedigree';
import JasonIndex from '../components/JasonIndex';
import Footer from '../components/Footer';

export default function Home() {
  return (
    <>
      <Navbar />
      <Hero />
      <Developments />
      <Featured />     
      <JasonIndex />
      <Pedigree />      
      <Footer />
    </>
  );
}