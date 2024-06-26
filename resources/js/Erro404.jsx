import React from 'react';
import LayoutBasico from "@/componentes/LayoutBasico.jsx";
import { Flex } from 'antd';

 const Error404 = () => {

     return (
         <LayoutBasico>
            <Flex
                align={'center'}
                justify={'center'}
                vertical={1}
                style={{color:'#71717A', height:'99%'}}
            >
                <h1
                    style={{
                        fontSize: '72pt',
                    }}
                >ERRO 404 :(</h1>
                <h4 style={{fontSize: '28pt'}}>Página não encontrada</h4>
            </Flex>
        </LayoutBasico>
     );
}
export default Error404;
