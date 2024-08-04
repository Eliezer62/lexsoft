import React from 'react';
import {Result, Button, Layout} from 'antd';
import LayoutBasico from '../componentes/LayoutBasico';

export default function Erro403()
{

    return (
        <LayoutBasico>
            <Result
                status="403"
                title="Acesso não autorizado"
                subTitle="Desculpa, você não está autorizado a acessar esta página, solicite a um administrador as permissões necessárias."
                extra={<Button type="primary" onClick={()=>location.href='/'}>Voltar</Button>}
            />
        </LayoutBasico>       
    )
}