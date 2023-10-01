import {BrowserRouter, Routes, Route, Link} from 'react-router-dom';
import './App.css';
import AddServices from './components/AddServices';
import HomePage from './components/HomePage';
import ViewServices from './components/ViewServices';

function App() {
  return (
    <div className="App section container flex-center">

      <h1 className="title-01">Selling Services Website</h1>
      <h2 className="title-02">Selling Services Website</h2>

      <BrowserRouter>
        <nav>
          <ul>
            <li className="btn-li">
              <Link className="line" to="index.php">🌎 Web Page</Link>
            </li>
            <li className="btn-li">
              <Link className="line" to="addService.php">➕ Add Service</Link>
            </li>
            <li className="btn-li">
              <Link className="line" to="view.php">💻 View Services</Link>
            </li>
          </ul>
        </nav>
        <Routes>
          <Route path='index.php' element={<HomePage />} />
          <Route path='addService.php' element={<AddServices />} />
          <Route path='view.php' element={<ViewServices />} />
        </Routes>
      </BrowserRouter>
    </div>
  );
}

export default App;
