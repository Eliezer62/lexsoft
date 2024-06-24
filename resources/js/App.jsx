import React from "react";
import ReactDOM from 'react-dom/client';
import { BrowserRouter, Route, Routes } from "react-router-dom";
import LayoutBasico from "@/componentes/LayoutBasico.jsx";
import '../css/app.css';
import 'bootstrap';

ReactDOM.createRoot(document.getElementById('root')).render(
    <React.StrictMode>
        <BrowserRouter>
            <Routes>
                <Route path='/' Component={LayoutBasico}/>
            </Routes>
        </BrowserRouter>
    </React.StrictMode>
);
