import React,{useState} from 'react';
import MainDiv1 from './homeModule/MainDiv1';
import 'bootstrap/dist/css/bootstrap.min.css';
import './css/boxstyle.css';
const Home = (props) => {
  const[data,setData] =useState("");
  setData = ()=>{
    let pass = prompt("Enter Your Password: ");
    if(pass =="admin@estc"){
      
    }
  }
  return (
    <div>
      <MainDiv1 nameAdmin="ADMIN PANEL" nameAdmin2="STUDENT PANEL" umethod={data}/>
    </div>
  );
}

export default Home;
