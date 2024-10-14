import React from 'react';
import {useDroppable} from "@dnd-kit/core";
import {SortableContext} from '@dnd-kit/sortable'

const Coluna = (props) =>
{
    const estilo = {
        width: '300px',
        marginRight: '30px',
        display: 'inline-block',
        backgroundColor: '#f0f0f0'
    }

    const contentCSS = {
        padding: '15px',
        backgroundColor: '#f0f0f0',
        minHeight:'60%'
    }

    const {isOver, setNodeRef} = useDroppable({
        id: props.id,
    });


    return (
        <li style={estilo}>
            <div style={{padding: '15px', backgroundColor: '#c0c0c0'}}>
                <h3>{props.titulo}</h3>
            </div>
            <div style={contentCSS} ref={setNodeRef}>
                {props.content?.map((item, index) => (item))}
            </div>
            <div style={{border: '1px solid #c0c0c0', padding: '15px', minHeight: '10%'}}>
                Total {new Intl.NumberFormat('pt-BR', { style: 'currency', currency: 'BRL' }).format(props.total??0)}
            </div>
        </li>
    )
}

export default Coluna;
