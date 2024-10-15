import LayoutBasico  from './componentes/LayoutBasico'
import {DndContext, useDraggable, useDroppable} from '@dnd-kit/core';
import {CSS} from '@dnd-kit/utilities';
import {useState} from "react";
import Board from './componentes/negocios/Board';
import {Button, Flex, message, Modal, Segmented} from "antd";
import {AppstoreOutlined, BarsOutlined} from "@ant-design/icons";
import NovoNegocio from "./componentes/negocios/NovoNegocio";
function Draggable(props) {
    const {attributes, listeners, setNodeRef, transform} = useDraggable({
        id: props.id,
    });
    const style = {
        // Outputs `translate3d(x, y, 0)`
        transform: CSS.Translate.toString(transform),
    };

    return (
        <button ref={setNodeRef} style={style} {...listeners} {...attributes}>
            {props.children}
        </button>
    );
}


function Droppable(props) {
    const {isOver, setNodeRef} = useDroppable({
        id: props.id,
    });
    const style = {
        opacity: isOver ? 1 : 0.5,
    };

    return (
        <div ref={setNodeRef} style={style}>
            {props.children}
        </div>
    );
}


export default function Negocios()
{
    const [parent, setParent] = useState(null);
    const [exibicao, setExibicao] = useState('Kanban');
    const [openNovo, setOpenNovo] = useState(true);
    const [messageApi, context] = message.useMessage();

    const draggable = (
        <Draggable id="draggable">
            Go ahead, drag me.
        </Draggable>
    );

    function handleDragEnd({over}) {
        setParent(over ? over.id : null);
    }
    return (
        <LayoutBasico titulo = "Negócios" menu={"negocios"}>
            {context}
            <NovoNegocio open={openNovo} onCancel={()=>setOpenNovo(false)} message={messageApi}/>
            <Flex justify={'right'} style={{marginBottom:'15px'}}><Button type={'primary'} onClick={()=>setOpenNovo(true)}>Novo Negócio</Button></Flex>
            <Flex justify={'right'} style={{marginBottom:'15px'}}>
                <Segmented
                    options={[
                        { value: 'Kanban', icon: <AppstoreOutlined />},
                        { value: 'Lista', icon: <BarsOutlined />},
                    ]}
                    onChange={(v)=>setExibicao(v)}
                />
            </Flex>
            {(exibicao=='Kanban')?
                (<div className={"board"}>
                    <Board/>
                </div>):
                (<></>)}
        </LayoutBasico>
    );
}
