import React, { Component } from "react";
import './Navbar.scss'
import { Link } from "react-router-dom";

export class Navbar extends React.Component {


    render() {
        return (
            <div className='container'>
                <div id="navigation-bar">
                    <nav>
                        <ul>
                            <li><Link to='/'>Home</Link></li>
                            <li><Link to='/login'>Login</Link></li>
                            <li><Link to='/signup'>Registro</Link></li>
                        </ul>
                    </nav>
                </div>
            </div>



        )
    }

}