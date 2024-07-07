import React, {useState} from 'react';
import LayoutBasico from "@/componentes/LayoutBasico.jsx";
import TabelaTarefas from "@/componentes/tarefas/TabelaTarefas.jsx";


const Tarefas = () => {

    const teste = [
        {'assunto':'teste', 'status':'nova', 'descricao':'descricao dado ate mais',
        'prazo':{inicio:'inicio', fim:'fim'}}]

    return (
        <LayoutBasico titulo={'Tarefas'} menu={'tarefas'}>
            <div>
                <h3>Minhas atividades</h3>
            </div>
            <TabelaTarefas
                dados={teste}
            />
        </LayoutBasico>
    );
}

export default Tarefas;
