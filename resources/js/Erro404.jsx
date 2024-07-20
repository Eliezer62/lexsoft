import React from 'react';
import LayoutBasico from "@/componentes/LayoutBasico.jsx";
import {Button, Result} from 'antd';

 const Error404 = () => {

     return (
         <LayoutBasico>
             <Result
                 status="404"
                 title="404"
                 subTitle="Desculpe, essa página não existe no site."
                 extra={<Button type="primary" onClick={()=>window.location = '/'}>Voltar</Button>}
             />
        </LayoutBasico>
     );
}
export default Error404;
