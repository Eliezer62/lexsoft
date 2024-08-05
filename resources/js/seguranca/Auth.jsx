import React, {useEffect, useState} from 'react';
import Cookies from 'universal-cookie';
import axios from "axios";
import {Navigate, Outlet, useNavigate} from 'react-router-dom';

/**
 * API para verificar o login a cada troca de página
 * @returns {Element}
 * @constructor
 */
export default function Auth()
{
    const [valido, setValido] = useState(true);
    const navigate = useNavigate();

    if(!localStorage.getItem('user')) navigate('/login');

    useEffect( () => {
        const validarToken = async () => {
            await axios.get('/api/auth/check').then((resp)=>{
                if(resp.data.valido)
                    setValido(true);
                else setValido(false);
            }).catch((resp)=>{
                if(resp.response.status === 401){
                    setValido(false);
                }
            });
        };
        validarToken();

    }, []);

    if (valido) return (<Outlet/>)
    else return (<Navigate to={'/login'} state={{anterior: location.pathname }}/>
    )
}
