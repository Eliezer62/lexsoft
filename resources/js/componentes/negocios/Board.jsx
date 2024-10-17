import React, {useState} from 'react';
import Coluna from './board/Coluna';
import {Button, Flex, Segmented} from "antd";
import { AppstoreOutlined, BarsOutlined } from '@ant-design/icons';
import {DndContext} from "@dnd-kit/core";
import Item from "@/componentes/negocios/board/Item";
import dayjs from "dayjs";


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

export default function Board(props)
{
    const [exibicao, setExibicao] = useState('Kanban');

    const dndEnd = (e) => {
        const { over, active } = e;
        console.log('entrou');
        console.log(over.id, active.id);
    }

    return (
        <>
            <ul className={"board"}
                style={{
                    overflow: 'auto',
                    overflowX: "scroll",
                    display: "block",
                    width: '100%',
                    whiteSpace: 'nowrap'
                }}>
                <DndContext onDragEnd={dndEnd}>
                    <Coluna titulo={'Contato Inicial'} total={props.totalInicial} id={'inicial'}
                            content={props.inicial.map(item => (<Item descricao={item.descricao}
                                                                      id={item.xid}
                                                                      data={dayjs(item.data).format('DD/MM/YYYY HH:mm')}
                                                                      responsavel={item.responsavel}
                                                                      prioridade={item.prioridade}
                                                                      valor={item.valor}
                            />))}
                    />
                    <Coluna titulo={'Qualificação'} id={'qualificacao'}/>
                    <Coluna titulo={'Avaliação'} id={'avaliacao'}/>
                    <Coluna titulo={'Proposta'} id={'proposta'}/>
                    <Coluna titulo={'Negociação'} id={'negociacao'}/>
                    <Coluna titulo={'Fechado'} id={'fechado'}/>
                    <Coluna titulo={'Perdido'} id={'perdido'}/>
                </DndContext>
            </ul>
        </>
    );
}
