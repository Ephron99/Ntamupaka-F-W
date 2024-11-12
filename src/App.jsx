import { useState } from 'react'
import Navbar from './components/pages/Navbar'
import { BrowserRouter, Route, Routes } from 'react-router-dom'
import Layout from './components/pages/Layout'
import Landing from './components/pages/Landing'


function App() {


  return (
    <BrowserRouter>
      <Routes>
        <Route path='/' element={<Layout />}>
          <Route index element={<Landing/>}/>
        </Route>
    </Routes>
    </BrowserRouter>
  )
}

export default App
