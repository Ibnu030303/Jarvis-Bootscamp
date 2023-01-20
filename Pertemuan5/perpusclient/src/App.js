import logo from './logo.svg';
import './App.css';
import Navbar from './components/Navbar';
import Books from './components/books';


function App() {

  const books = [
    {
      title: "you do you",
      desc: "his is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer",
      date: "23 Oct 2022",
    },
    {
      title: "smile id",
      desc: "his is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer",
      date: "21 Oct 2022",
    },
  ]


  return (
    <div>
      <Navbar/>
      <Books books={books} />
    </div>
  );
}

export default App;
