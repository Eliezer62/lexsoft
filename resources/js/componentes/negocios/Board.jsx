import React, {useReducer, useState} from 'react';
import Coluna from './board/Coluna';
import {Button, Flex, message, Segmented, Skeleton} from "antd";
import { AppstoreOutlined, BarsOutlined } from '@ant-design/icons';
import {DndContext} from "@dnd-kit/core";
import Item from "@/componentes/negocios/board/Item";
import dayjs from "dayjs";
import axios from "axios";


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
    const [messageApi, context] = message.useMessage();

    const dndEnd = (e) => {
        const { over, active } = e;
        console.log(e);
        const msg = messageApi.loading('Atualizando a fase');
        axios.get(`/api/negocios/${active.id}/atualizar-fase/${over.id}`)
            .then((response) => {
                messageApi.destroy(msg.id);
                messageApi.success('Fase atualizada com sucesso');
            }).catch((e) => {
                messageApi.destroy(msg.id);
                messageApi.error('Erro em atualizar a fase.');
        });
    }

    const colisao = (event) => {
        const {droppableRects, pointerCoordinates, droppableContainers} = event;
        droppableRects.forEach((value, key, map)=>{
            if(value.left <= pointerCoordinates.y && value.right >= pointerCoordinates.y)
            {
                let coluna = droppableContainers.find(({id}) => id === key);
                const height = coluna?.node?.current?.clientHeight;
                coluna?.node?.current?.style.setProperty('height', height+'px');
            }
        });

    }

    return (
        <Skeleton loading={props.loading}>
            {context}
            <div className={"board"}
                style={{
                    overflow: 'auto',
                    overflowX: "scroll",
                    display: "flex",
                    width: '100%',
                    whiteSpace: 'nowrap',
                    alignItems: 'flex-start'
                }}>
                <DndContext onDragEnd={dndEnd}>
                    <Coluna titulo={'Contato Inicial'} total={props.totalInicial} id={'inicial'}
                            content={props.inicial.map(item => (<Item descricao={item.descricao}
                                                                      id={item.xid}
                                                                      item={item}
                            />))}
                    />
                    <Coluna titulo={'Qualificação'} id={'qualificacao'} total={props.totalQualificacao}
                            content={props.qualificacao.map(item => (<Item descricao={item.descricao}
                                                                            id={item.xid}
                                                                            item={item}
                            />))}
                    />
                    <Coluna titulo={'Avaliação'} id={'avaliacao'} total={props.totalAvaliacao}
                            content={props.avaliacao.map(item => (<Item descricao={item.descricao}
                                                                           id={item.xid}
                                                                           item={item}
                            />))}
                    />
                    <Coluna titulo={'Proposta'} id={'proposta'} total={props.totalProposta}
                            content={props.proposta.map(item => (<Item descricao={item.descricao}
                                                                           id={item.xid}
                                                                           item={item}
                            />))}
                    />
                    <Coluna titulo={'Negociação'} id={'negociacao'} total={props.totalNegociacao}
                            content={props.negociacao.map(item => (<Item descricao={item.descricao}
                                                                           id={item.xid}
                                                                           item={item}
                            />))}
                    />
                    <Coluna titulo={'Fechado'} id={'fechado'} total={props.totalFechado}
                            content={props.fechado.map(item => (<Item descricao={item.descricao}
                                                                           id={item.xid}
                                                                           item={item}
                            />))}
                    />
                    <Coluna titulo={'Perdido'} id={'perdido'} total={props.totalPerdido}
                            content={props.perdido.map(item => (<Item descricao={item.descricao}
                                                                           id={item.xid}
                                                                           item={item}
                            />))}
                    />
                </DndContext>
            </div>
        </Skeleton>
    );
}
