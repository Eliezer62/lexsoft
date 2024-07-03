import React, {useEffect, useState} from 'react';
import {Card, Col, List, Row} from "antd";
import '../../css/app.css';
import axios from "axios";
import { GrEdit } from "react-icons/gr";
import { DeleteOutlined } from '@ant-design/icons';
import {DragDropContext, Draggable, Droppable} from "react-beautiful-dnd";


const KanBan = () => {
    const [tarefas, setTarefas] = React.useState([]);
    const [loading, setLoading] = React.useState(true);
    const [items, setItems] = useState([]);
    const [time, setTime] = useState(0);
    const [nova, setNova] = useState([]);

    useEffect(() => {
        const getTarefas = async () => {
            const response = await axios.get('/api/tarefas/cq0c33u65k27610tibeg');
            let xid = [];
            await  response.data.forEach(tarefa => xid.push(tarefa.xid));
            setItems(xid);
            setTarefas(response.data);
        }

        const interval = setInterval(() => {
            getTarefas();
            setLoading(false);
            setTime(30000);

        }, time);

        return () => {
            clearInterval(interval);
        }
    });

    const getListStyle = isDraggingOver => ({
        background: isDraggingOver ? "lightblue" : "lightgrey",
        padding: 8,
        width: 250
    });

    const getItemStyle = (isDragging, draggableStyle) => ({
        // some basic styles to make the items look a bit nicer
        userSelect: "none",
        padding: 8 * 2,
        margin: `0 0 ${8}px 0`,

        // change background colour if dragging
        background: isDragging ? "lightgreen" : "grey",

        // styles we need to apply on draggables
        ...draggableStyle
    });


    const status = ['nova', 'em progresso', 'confirmar', 'resolvido', 'sem solução']

    return (
        <DragDropContext>
            <Droppable droppableId={status[0]}>
                {(provided, snapshot) => (
                    <div
                        {...provided.droppableProps}
                        ref={provided.innerRef}
                        style={getListStyle(snapshot.isDraggingOver)}
                    >
                        {tarefas?.map((item, index) => (
                            <Draggable key={item.xid} draggableId={item.xid} index={index}>
                                {(provided, snapshot) => (
                                    <Card
                                        style={{ width: 300, marginTop: 16 }}
                                        actions={[
                                            <GrEdit/>,
                                            <DeleteOutlined/>,
                                        ]}
                                        ref={provided.innerRef}
                                        {...provided.draggableProps}
                                        {...provided.dragHandleProps}
                                    >
                                        {item.descricao}
                                    </Card>
                                )}
                            </Draggable>
                        ))}
                        {provided.placeholder}
                    </div>
                    )}
            </Droppable>
            <Droppable droppableId={status[1]}>
                {(provided, snapshot) => (
                    <div
                        {...provided.droppableProps}
                        ref={provided.innerRef}
                        style={getListStyle(snapshot.isDraggingOver)}
                    >
                        {tarefas?.map((item, index) => (
                            <Draggable key={item.xid} draggableId={item.xid} index={index}>
                                {(provided, snapshot) => (
                                    <Card
                                        style={{ width: 300, marginTop: 16 }}
                                        actions={[
                                            <GrEdit/>,
                                            <DeleteOutlined/>,
                                        ]}
                                        ref={provided.innerRef}
                                        {...provided.draggableProps}
                                        {...provided.dragHandleProps}
                                    >
                                        {item.descricao}
                                    </Card>
                                )}
                            </Draggable>
                        ))}
                        {provided.placeholder}
                    </div>
                )}
            </Droppable>
        </DragDropContext>
    );

    function handleDragEnd(event) {
        const {active, over} = event;

        if (active.id !== over.id) {
            setItems((items) => {
                const oldIndex = items.indexOf(active.id);
                const newIndex = items.indexOf(over.id);
                console.log(newIndex);

                return arrayMove(items, oldIndex, newIndex);
            });
        }
    }

}

export default KanBan;
