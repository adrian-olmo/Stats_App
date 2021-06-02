import React, { Component, useEffect, useState } from "react";
import './Navbar.scss'
import { Link } from "react-router-dom";

export const Navbar = () => {



    return (
        <div className='container'>
            <div id="navigation-bar">
                <nav>
                    <ul>
                        <li><Link to='/'>Home</Link></li>
                        <li><Link to='/login'>Login</Link></li>
                        <li><Link to='/signup'>Registro</Link></li>
                        <li><Link to='/teams'>Teams</Link></li>
                    </ul>
                </nav>
            </div>
        </div>



    )


}