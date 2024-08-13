import React, {useEffect, useState} from "react";
import LayoutBasico from "@/componentes/LayoutBasico.jsx";
import {Flex, Card, Timeline, Button, Calendar, Statistic, Popover, Skeleton} from "antd";
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
    const [loading, setLoading] = useState(true);
    const [loadAgenda, setLoadAgenda] = useState(true);

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
               setLoadAgenda(false);
            }).catch((e)=>{
                if(e.response.status===401) navigate('/login', {state:{anterior:location.pathname}});
            })
            .finally(()=>{
                setLoadAgenda(false);
            });
    }


    useEffect(() => {
        const getData = () => {
            axios.get('/api/dashboard').then((resp)=>{
                setDados(resp.data);
            }).catch((e)=>{
                if(e.response.status===401) navigate('/login', {state:{anterior:location.pathname}});
            }).finally(()=>{
                setLoading(false);
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

    useEffect(() => {
        setLoadAgenda(true);
        getEventos();
    }, [data]);

    const change = async (e, y=null) => {
        setData([e.month()+1, e.year()]);
    }

    return (
        <LayoutBasico titulo={'Dashboard'} menu={'dashboard'}>
            <Skeleton loading={loading} active={true}>
                <h2>Últimas movimentações</h2>
                <Flex
                    justify={'space-around'}
                    style={{width:'100%', marginBottom:30}}
                >
                    <Card title={'Processo '+(dados?.processos?.[0]?.numero ?? '')}  actions={[
                        (dados?.processos?.[0])?(<Button type={'link'} onClick={()=>location.href=`/processos/${dados?.processos?.[0]?.xid}/movimentar`}>Acessar processo</Button>):(null)
                    ]}>
                        <Timeline style={{height:'50px'}} items={[
                            (dados?.processos?.[0])?{children:dados?.processos?.[0]?.descricao}:null,
                        ]}/>
                    </Card>

                    <Card title={'Processo '+(dados?.processos?.[1]?.numero ?? '')}  actions={[
                        (dados?.processos?.[1])?(<Button type={'link'} onClick={()=>location.href=`/processos/${dados?.processos?.[1]?.xid}/movimentar`}>Acessar processo</Button>):(null)
                    ]}>
                        <Timeline style={{height:'50px'}} items={[
                            (dados?.processos?.[1])?{children:dados?.processos?.[1]?.descricao}:null,
                        ]}/>
                    </Card>

                    <Card title={'Processo '+(dados?.processos?.[2]?.numero ?? '')}  actions={[
                        (dados?.processos?.[2])?(<Button type={'link'} onClick={()=>location.href=`/processos/${dados?.processos?.[2]?.xid}/movimentar`}>Acessar processo</Button>):(null)
                    ]}>
                        <Timeline style={{height:'50px'}} items={[
                            (dados?.processos?.[2])?{children:dados?.processos?.[2]?.descricao}:null,
                        ]}/>
                    </Card>

                    <Card title={'Processo '+(dados?.processos?.[3]?.numero ?? '')}  actions={[
                        (dados?.processos?.[3])?(<Button type={'link'} onClick={()=>location.href=`/processos/${dados?.processos?.[3]?.xid}/movimentar`}>Acessar processo</Button>):(null),
                    ]}>
                        <Timeline style={{height:'50px'}} items={[
                            (dados?.processos?.[3])?{children:dados?.processos?.[3]?.descricao}:null,
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
                    <Skeleton loading={loadAgenda} style={{width:'300px'}} active={true}>
                        <Calendar
                            fullscreen={false}
                            locale={ptBR}
                            style={{width:'300px'}}
                            className={'calendario'}
                            onChange={change}
                            defaultValue={dayjs(`01/${data[0]?.toString().padStart(2, '0')}/${data[1]}`, 'DD/MM/YYYY')}
                            cellRender={(data)=>{
                                let data_saida = data.format('DD/MM/YYYY');
                                let e = eventos.filter(e=>e.data === data_saida);
                                if(e.length > 0)
                                return (
                                    <>
                                        <Popover title={'Prazos '+data.toDate().toLocaleDateString('pt-BR', {
                                            weekday: "long",
                                            year: "numeric",
                                            month: "long",
                                            day: "numeric",
                                        })}
                                            content={()=>(
                                                e.map((e) => (
                                                    <p style={{textAlign:'center'}}>{e.descricao}</p>
                                                ))
                                            )}
                                        >{ponto()}</Popover>
                                    </>
                                );
                            }}
                        />
                    </Skeleton>
                </Flex>
            </Skeleton>
        </LayoutBasico>
    );
}
