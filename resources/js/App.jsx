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
import Documentos from "@/Documentos.jsx";
import Processos from "@/Processos.jsx";
import NovoProcesso from "@/processos/NovoProcesso.jsx";
import PartesProcesso from "@/processos/PartesProcesso.jsx";
import EditarProcesso from "@/processos/EditarProcesso.jsx";
import EditarPartesProcesso from "@/processos/EditarPartesProcesso.jsx";
import MovimentarProcesso from "@/processos/MovimentarProcesso.jsx";
import NovoDocumento from "@/componentes/documentos/NovoDocumento.jsx";
import EditarDocumento from "@/componentes/documentos/EditarDocumento.jsx";
import Dashboard from "@/Dashboard.jsx";
import Login from "@/Login.jsx";
import Erro403 from "./seguranca/Erro403";
import Perfil from "@/Perfil.jsx";
import EsqueciSenha from "@/EsqueciSenha.jsx";

const RotaProcessos = () => {
    return (
        <Routes>
            <Route path={'*'} element={<Erro404/>}/>
            <Route path="/" Component={Processos} />
            <Route path={'/criar'} Component={NovoProcesso}/>
            <Route path={'/criar/:xid/partes'} Component={PartesProcesso}/>
            <Route path={'/:xid/editar'} Component={EditarProcesso}/>
            <Route path={'/:xid/editar/partes'} Component={EditarPartesProcesso} />
            <Route path={'/:xid/movimentar'} Component={MovimentarProcesso} />
            <Route path={'/:xid/movimentar/:evento/novo-documento'} Component={NovoDocumento} />
            <Route path={'/:xid/movimentar/:evento/editar-documento/:documento'} Component={EditarDocumento}/>
        </Routes>
    );
}


ReactDOM.createRoot(document.getElementById('root')).render(
    <React.StrictMode>
        <BrowserRouter>
            <Routes>
                <Route path='*' element={<Erro404 />} />
                <Route path='/' Component={Dashboard}/>
                <Route path='/dashboard' Component={Dashboard}/>
                <Route path='/advogados' Component={Advogados}/>
                <Route path={'/clientes'} Component={Clientes}/>
                <Route path='/tarefas' Component={Tarefas}/>
                <Route path={'/atendimentos'} Component={Atendimentos}/>
                <Route path={'/documentos'} Component={Documentos}/>
                <Route path={'/processos/*'} element={<RotaProcessos/>}/>
                <Route path={'/login'} Component={Login}/>
                <Route path='/403' Component={Erro403}/>
                <Route path={'/perfil'} Component={Perfil}/>
                <Route path={'/esqueci-senha/:token'} Component={EsqueciSenha}/>
            </Routes>
        </BrowserRouter>
    </React.StrictMode>
);
