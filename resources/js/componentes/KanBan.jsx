import React, {useEffect} from 'react';
import {Card, Col, List, Row} from "antd";
import '../../css/app.css';
import axios from "axios";
import { GrEdit } from "react-icons/gr";
import { DeleteOutlined } from '@ant-design/icons';

const KanBan = () => {
    const [tarefas, setTarefas] = React.useState([]);
    const [loading, setLoading] = React.useState(true);

    useEffect(() => {
        const getTarefas = async () => {
            const response = await axios.get('/api/tarefas/cq0c33u65k27610tibeg');
            setTarefas(response.data);
        }

        const interval = setInterval(() => {
            getTarefas();
            setLoading(false);

        }, 3000);

        return () => {
            clearInterval(interval);
        }
    });


    const status = ['nova', 'em progresso', 'confirmar', 'resolvido', 'sem solução']


    return (
        <Row justify={'center'} style={{width:'100%'}}>
            <Col span={5}>
                <Card title={status[0]} className={'.card-kanban'} loading={loading}>
                    <List dataSource={tarefas} className={'drag-parent'} renderItem={(item)=>{
                        if(item.status==='nova'){
                            return (
                            <List.Item>
                                <Card
                                    style={{ width: 300, marginTop: 16 }}
                                    actions={[
                                        <GrEdit />,
                                        <DeleteOutlined  />
                                    ]}
                                >
                                    {item.descricao}
                                </Card>
                            </List.Item>
                            );
                        }
                    }}>
                    </List>
                </Card>
            </Col>
            <Col span={5}>
                <Card title={status[1]} className={'.card-kanban'} loading={loading}>
                    <List dataSource={tarefas} renderItem={(item)=>{
                        if(item.status==='em progresso'){
                            return (
                                <List.Item>
                                    <Card
                                        style={{ width: 300, marginTop: 16 }}
                                        actions={[
                                            <GrEdit />,
                                            <DeleteOutlined  />
                                        ]}
                                    >
                                        {item.descricao}
                                    </Card>
                                </List.Item>
                            );
                        }
                    }}>
                    </List>
                </Card>
            </Col>
            <Col span={5}>
                <Card title={status[2]} className={'.card-kanban'} loading={loading}>
                    <List dataSource={tarefas} renderItem={(item)=>{
                        if(item.status==='confirmar'){
                            return (
                                <List.Item>
                                    <Card
                                        style={{ width: 300, marginTop: 16 }}
                                        actions={[
                                            <GrEdit />,
                                            <DeleteOutlined  />
                                        ]}
                                    >
                                        {item.descricao}
                                    </Card>
                                </List.Item>
                            );
                        }
                    }}>
                    </List>
                </Card>
            </Col>
            <Col span={5}>
                <Card title={status[3]} className={'.card-kanban'} loading={loading}>
                    <List dataSource={tarefas} renderItem={(item)=>{
                        if(item.status==='resolvido'){
                            return (
                                <List.Item>
                                    <Card
                                        style={{ width: 300, marginTop: 16 }}
                                        actions={[
                                            <GrEdit />,
                                            <DeleteOutlined  />
                                        ]}
                                    >
                                        {item.descricao}
                                    </Card>
                                </List.Item>
                            );
                        }
                    }}>
                    </List>
                </Card>
            </Col>
            <Col span={4}>
                <Card title={status[4]} className={'.card-kanban'} loading={loading} style={{padding:0}}>
                    <List dataSource={tarefas} renderItem={(item)=>{
                        if(item.status==='sem solução'){
                            return (
                                <List.Item>
                                    <Card
                                        style={{ width: 300, marginTop: 16 }}
                                        actions={[
                                            <GrEdit />,
                                            <DeleteOutlined  />
                                        ]}
                                    >
                                        {item.descricao}
                                    </Card>
                                </List.Item>
                            );
                        }
                    }}>
                    </List>
                </Card>
            </Col>
        </Row>
    );

}

export default KanBan;
