import React, {useState} from "react";
import LayoutBasico from "@/componentes/LayoutBasico.jsx";
import TabelaBase from "@/componentes/TabelaBase.jsx";

const Clientes = () => {
    const [pesquisa, setPesquisa] = useState('');
    const [clientes, setClientes] = useState([]);
    const [loadingTable, setLoadingTable] = useState(false);

    const colunas = [
        {
            title:'Nome',
            key:'nome',
            dataIndex:'nome',
            sorter: (a,b) => a.nome.localeCompare(b.nome),
            sortDirections: ['descend', 'ascend'],
        },
        {
            title:'CPF/CNPJ',
            key:'documento',
            dataIndex: 'documento',
            sorter: (a,b) => a.documento.localeCompare(b.documento),
            sortDirections: ['descend', 'ascend'],
        },
        {
            title:'email',
            key:'email',
            dataIndex: 'email',
            sorter: (a,b) => a.email.localeCompare(b.email),
            sortDirections: ['descend', 'ascend'],
            filteredValue:[pesquisa],
            onFilter: (value, record) => record.email.startsWith(value) ||  record.nome.toLowerCase().includes(value.toLowerCase()) || record.documento === value,
        }
    ];

    return (
      <LayoutBasico titulo={'Clientes'} menu={'clientes'}>
        <TabelaBase
            coluna={colunas}
            dados={clientes}
            loading={loadingTable}
            pesquisa={pesquisa}
        />
      </LayoutBasico>
    );
}

export default Clientes;
