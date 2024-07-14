import React, {useEffect, useState} from 'react';
import LayoutBasico from "@/componentes/LayoutBasico.jsx";
import TabelaBase from "@/componentes/TabelaBase.jsx";

export default function Processos() {
    const [pesquisa, setPesquisa] = useState('');

    const colunas = [
        {
            title:'Numeração',
            key:'numero',
            dataIndex:'numero',
            sorter: (a, b) => a.numero.localeCompare(b.numero),
            sortDirections: ['descend', 'ascend'],
            filteredValue:[pesquisa],
            onFilter: (value, record) => record.numero.includes(value) || record.numCNJ.includes(value)
        },
        {
            title:'Numeração CNJ',
            key:'numCNJ',
            dataIndex:'numCNJ',
            sorter: (a, b) => a.numCNJ.localeCompare(b.numCNJ),
            sortDirections: ['descend', 'ascend'],
        },
        {
            title:'Tribunal',
            key:'tribunal',
            dataIndex:'tribunal',
            sorter: (a, b) => a.tribunal.localeCompare(b.tribunal),
            sortDirections: ['descend', 'ascend'],
        },
        {
            title: 'Ações',
            key: 'acoes',
            render: (_, record) => {
                return (
                    <>
                    </>
                )
            }
        }
    ]

    return (
      <LayoutBasico titulo="Processos" menu='processos'>
            <TabelaBase
                pesquisa={setPesquisa}
                coluna={colunas}
                adicionar={()=>window.location.href='/processos/criar'}
            />
      </LayoutBasico>
    );
}
