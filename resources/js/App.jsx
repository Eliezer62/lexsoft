import React from "react";
import ReactDOM from 'react-dom/client';
import { BrowserRouter, Route, Routes } from "react-router-dom";
import LayoutBasico from "@/componentes/LayoutBasico.jsx";
import Erro404 from "@/Erro404.jsx";
import Advogados from '@/Advogados.jsx';
import Tarefas from '@/Tarefas.jsx';
import '../css/app.css';
import 'bootstrap';
import Clientes from "@/Clientes.jsx";
import Atendimentos from "@/Atendimentos.jsx";

ReactDOM.createRoot(document.getElementById('root')).render(
    <React.StrictMode>
        <BrowserRouter>
            <Routes>
                <Route path='*' element={<Erro404 />} />
                <Route path='/' Component={LayoutBasico}/>
                <Route path='/advogados' Component={Advogados}/>
                <Route path={'/clientes'} Component={Clientes}/>
                <Route path='/tarefas' Component={Tarefas}/>
                <Route path={'/atendimentos'} Component={Atendimentos}/>
            </Routes>
        </BrowserRouter>
    </React.StrictMode>
);
