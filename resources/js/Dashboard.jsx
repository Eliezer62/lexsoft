import React, {useEffect, useState} from "react";
import LayoutBasico from "@/componentes/LayoutBasico.jsx";
import {Flex, Card, Timeline, Button, Calendar, Statistic, Popover} from "antd";
import '../css/dashboard.css';
import ptBR from "antd/locale/pt_BR";
import { Area } from '@ant-design/plots';
import axios from "axios";
import dayjs from "dayjs";
import {useNavigate} from "react-router-dom";

const ponto = () => {
    return (
      <div style={{color:'#1890ff'}}>•</div>
    );
}

export default function Dashboard()
{
    const [dados, setDados] = useState();
    const [timeout, setTimeout] = useState(0);
    const navigate = useNavigate();
    const [data, setData] = useState([new Date().getMonth()+1, new Date().getFullYear()]);
    const [eventos, setEventos] = useState([]);

    const produtividade = {
        data: dados?.produtividade??[],
        title:'Quantidade de movimentações por dia',
        xField: (d) => dayjs(d?.data, 'YYYY-MM-DD').format('DD/MM/YYYY'),
        yField: 'quantidade',
        style: {
            fill: 'linear-gradient(-90deg, white 0%, #1890ff 100%)',
        },
        axis: {
            y: { labelFormatter: '~s' },
        },
        line: {
            style: {
                stroke: '#1890ff',
                strokeWidth: 3,
            },
        },
        height:300

    }

    const getEventos = async () => {
        await axios(`/api/dashboard/prazos/${data[0]}/${data[1]}`)
            .then((resp)=>{
                resp.data.forEach(e=>{
                   e.data = dayjs(e.data, 'YYYY-MM-DD').format('DD/MM/YYYY');
                });
               setEventos(resp.data);
               console.log(eventos);
            }).catch((e)=>{
                if(e.response.status===401) navigate('/login', {state:{anterior:location.pathname}});
            });
    }

    useEffect(() => {
        const getData = () => {
            axios.get('/api/dashboard').then((resp)=>{
                setDados(resp.data);
            }).catch((e)=>{
                if(e.response.status===401) navigate('/login', {state:{anterior:location.pathname}});
            });
        }

        const intervalo = setInterval(()=>{
            getData();
            getEventos();
            setTimeout(5000);
        }, timeout);

        return () => {
            clearInterval(intervalo);
        }
    });

    const change = async (e, y=null) => {
        setData([e.month()+1, e.year()]);
    }

    useEffect(() => {
        console.log(data);
    }, [data]);

    return (
        <LayoutBasico titulo={'Dashboard'} menu={'dashboard'}>
            <h2>Últimas movimentações</h2>
            <Flex
                justify={'space-around'}
                style={{width:'100%', marginBottom:30}}
            >
                <Card title={'Processo '+dados?.processos[0].numero}  actions={[
                    <Button type={'link'} onClick={()=>location.href=`/processos/${dados?.processos[0].xid}/movimentar`}>Acessar processo</Button>
                ]}>
                    <Timeline style={{height:'50px'}} items={[
                        {children:dados?.processos[0].descricao}
                    ]}/>
                </Card>

                <Card title={'Processo '+dados?.processos[1].numero}  actions={[
                    <Button type={'link'} onClick={()=>location.href=`/processos/${dados?.processos[1].xid}/movimentar`}>Acessar processo</Button>
                ]}>
                    <Timeline style={{height:'50px'}} items={[
                        {children:dados?.processos[1].descricao}
                    ]}/>
                </Card>

                <Card title={'Processo '+dados?.processos[2].numero}  actions={[
                    <Button type={'link'} onClick={()=>location.href=`/processos/${dados?.processos[2].xid}/movimentar`}>Acessar processo</Button>
                ]}>
                    <Timeline style={{height:'50px'}} items={[
                        {children:dados?.processos[2].descricao}
                    ]}/>
                </Card>

                <Card title={'Processo '+dados?.processos[2].numero}  actions={[
                    <Button type={'link'} onClick={()=>location.href=`/processos/${dados?.processos[3].xid}/movimentar`}>Acessar processo</Button>
                ]}>
                    <Timeline style={{height:'50px'}} items={[
                        {children:dados?.processos[3].descricao}
                    ]}/>
                </Card>
            </Flex>

            <Flex justify={"space-around"} style={{width:'100%'}}>
                <Card title={'Estatísticas'}>
                    <Statistic title="Quantidade de tarefas em andamento" value={dados?.estatistica?.qtd_tarefas??0} />
                    <Statistic title="Quantidade de processos vinculados" value={dados?.estatistica?.qtd_processos??0} />
                    <Statistic title="Quantidade de atendimentos no mês" value={dados?.estatistica?.qtd_atendimentos??0} />
                </Card>
                <Card title={'Produtividade do mês'} style={{width:500, height:200}}>
                    <Area {...produtividade} />
                </Card>
                <Calendar
                    fullscreen={false}
                    locale={ptBR}
                    style={{width:'300px'}}
                    className={'calendario'}
                    onChange={change}
                    cellRender={(data)=>{
                        data = data.format('DD/MM/YYYY');
                        let e = eventos.find(e=>e.data === data);
                        if(e)
                        return (
                            <>
                                <Popover title={'Prazos'}
                                    content={()=>(
                                        <p>{e.descricao}</p>
                                    )}
                                >{ponto()}</Popover>
                            </>
                        );
                    }}
                />
            </Flex>
        </LayoutBasico>
    );
}
