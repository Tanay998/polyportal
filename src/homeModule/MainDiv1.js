import React from 'react';
import 'bootstrap/dist/css/bootstrap.min.css';
import '../css/boxstyle.css'

const MainDiv1 = (props) => {
  return (
    <div>
      <div className="container mt-5" style={{marginLeft:"13.5%"}}>
        <div className="row text-center">
            <div className="col-md-6">
                <div className="div1 bg-primary shdow">
                    <span style={{textDecoration:"none",fontSize:"x-large",color:"#ffffff"}} onClick={props.usermethod}>{props.nameAdmin}</span>
                </div>
            </div>
            <div className="col-md-6">
                <div className="div3 bg-success shdow">
                    <span style={{textDecoration:"none",fontSize:"x-large",color:"#ffffff"}}>{props.nameAdmin2}</span>
                </div>
            </div>
        </div>
      </div>
    </div>
  );
}

export default MainDiv1;
