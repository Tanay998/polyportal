import React from 'react'
import Header from './Header'
import Home from './Home'
import UserLogin1 from './userLogin/UserLogin1';
import { BrowserRouter as Router,Routes, Route, Link, Navigate } from 'react-router-dom';

const App = () => {
  return (
    <div>
      <Router>
      <Header />
      <div className="container mt-4">
        <div className="row">
            <div className="col-md-12">
            <Link to='/UserLogin1'><button type="button" className="btn btn-danger" style={{float:"right",boxShadow:"2px 4px 6px grey"}}>USER LOGIN</button></Link>
            <Link to='/Home'><button type="button" className="btn btn-danger" style={{float:"right",boxShadow:"2px 4px 6px grey"}}>Home</button></Link>
            <Routes>
              <Route exact path='/Home' element={<Home />}></Route>
              <Route exact path='/UserLogin1' element={<UserLogin1 />}></Route>
            </Routes>
        </div>
        </div>
        </div>    
      </Router>
    </div>
  )
}

export default App


