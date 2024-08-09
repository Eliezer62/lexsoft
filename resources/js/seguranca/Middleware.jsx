import React from 'react';
import { useLocation } from 'react-router-dom';

export default function Middleware()
{
    const local= useLocation();
    const user = JSON.parse(localStorage.getItem('user'));
    
    if((local.pathname==='/atendimentos' && user.grupo==='estagiario') || (local.pathname==='/advogados' && user.grupo !== 'administrador')) 
        location.href = '/403';
}