import React from 'react'
import 'bootstrap/dist/css/bootstrap.min.css';
import headerpoly16 from './images/headerpoly16.png';

const Header = () => {
  return (
    <div>
      <div className="container-fluid" style={{backgroundColor:"#4682B4"}}>
        <div className="row">
            <img src={headerpoly16} alt="pic not shown" className="mx-auto d-block img-fluid" />
        </div>
      </div>
    </div>
  )
}

export default Header
