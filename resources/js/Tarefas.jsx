import React from 'react';
import LayoutBasico from "@/componentes/LayoutBasico.jsx";
import {Flex} from "antd";
import KanBan from "@/componentes/KanBan.jsx";


const Tarefas = () => {
    return (
        <LayoutBasico titulo={'Tarefas'} menu={'tarefas'}>
            <div>
                <h3>Minhas atividades</h3>
            </div>
            <Flex align={'center'} justify={'center'} style={{padding:15, minWidth:'800px'}}>
                <KanBan/>
            </Flex>
        </LayoutBasico>
    );
}

export default Tarefas;
