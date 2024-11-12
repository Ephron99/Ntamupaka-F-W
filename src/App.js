
import './App.css';
import { BrowserRouter, Route, Routes } from 'react-router-dom';
import Layout from './components/pages/Layout';
import Landing from './components/pages/Landing';

function App() {
  return (
    <BrowserRouter>
      <Routes>
        <Route path="/Ntamupaka-F-W" element={<Layout />}>
          <Route index element={<Landing />} />
        </Route>
      </Routes>
    </BrowserRouter>
  );
}

export default App;
