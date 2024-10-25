import LayoutBasico  from './componentes/LayoutBasico'
import {DndContext, useDraggable, useDroppable} from '@dnd-kit/core';
import {CSS} from '@dnd-kit/utilities';
import {useEffect, useReducer, useState} from "react";
import Board from './componentes/negocios/Board';
import {Button, Flex, message, Modal, Segmented, Table} from "antd";
import {AppstoreOutlined, BarsOutlined} from "@ant-design/icons";
import NovoNegocio from "./componentes/negocios/NovoNegocio";
import TabelaNegocio from './componentes/negocios/TabelaNegocio';
import axios from "axios";
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
    const [openNovo, setOpenNovo] = useState(false);
    const [messageApi, context] = message.useMessage();
    const [inter, setInter] = useState(0);
    //Por itens
    const [inicial, setInicial] = useState([]);
    const [qualificacao, setQualificacao] = useState([]);
    const [avaliacao, setAvaliacao] = useState([]);
    const [proposta, setProposta] = useState([]);
    const [negociacao, setNegociacao] = useState([]);
    const [fechado, setFechado] = useState([]);
    const [perdido, setPerdido] = useState([]);
    const [loading, setLoading] = useState(true);

    useEffect(() => {
        const negocios = async () => {
            await axios.get('/api/negocios')
                .then((response) => {
                    setInicial([]);setQualificacao([]);setAvaliacao([]);
                    setProposta([]);setNegociacao([]);setFechado([]);setPerdido([]);
                    response.data.forEach(async item => {
                        switch (item.fase)
                        {
                            case 'inicial':
                                await setInicial(item.negocios)
                                break;

                            case 'qualificacao':
                                await setQualificacao(item.negocios)
                                break;

                            case 'avaliacao':
                                await setAvaliacao(item.negocios)
                                break;

                            case 'proposta':
                                await setProposta(item.negocios);
                                break;

                            case 'negociacao':
                                await setNegociacao(item.negocios);
                                break;

                            case 'fechado':
                                await setFechado(item.negocios);
                                break;

                            case 'perdido':
                                await setPerdido(item.negocios);
                                break;
                        }
                        setLoading(false);
                    });
                })
        }

        const invervalo = setInterval(async () => {
            await negocios();
        }, inter);

        return () => {
            setInter(3000);
            clearInterval(invervalo);
        }
    })

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
                    <Board inicial={inicial} loading={loading}
                           totalInicial={inicial.reduce((acumulador, negocio) => acumulador + negocio.valor, 0)}

                           qualificacao={qualificacao}
                           totalQualificacao={qualificacao.reduce((acumulador, negocio) => acumulador + negocio.valor, 0)}

                           avaliacao={avaliacao}
                           totalAvaliacao={avaliacao.reduce((acum, negocio) => acum+negocio.valor, 0)}

                           proposta={proposta}
                           totalProposta={proposta.reduce((acum, negocio) => acum+negocio.valor, 0)}

                           negociacao={negociacao}
                           totalNegociacao={negociacao.reduce((acum, negocio) => acum + negocio.valor, 0)}

                           fechado={fechado}
                           totalFechado={fechado.reduce((acum, negocio) => acum + negocio.valor, 0)}

                           perdido={perdido}
                           totalPerdido={perdido.reduce((acum, negocio) => acum + negocio.valor,0)}
                    />
                </div>):
                (<>
                    <TabelaNegocio

                    />

                </>)}
        </LayoutBasico>
    );
}
