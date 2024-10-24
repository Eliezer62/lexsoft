import {useDraggable} from "@dnd-kit/core";
import {CSS} from "@dnd-kit/utilities";
import {Button, Card} from "antd";
import DOMPurify from 'dompurify';
export default function Item(props)
{
    const {attributes, listeners, setNodeRef, transform} = useDraggable({
        id: props.id,
    });

    const style = {
        // Outputs `translate3d(x, y, 0)`
        transform: CSS.Translate.toString(transform),
    };

    return (
        <Card ref={setNodeRef} style={style} {...listeners} {...attributes}>
            <Card.Meta
                title={props.titulo}
                description={
                <>
                    <p style={{color: '#0091ae', fontWeight: '500', boxSizing:'border-box', wordWrap:'anywhere', overflowWrap: 'break-word'}} dangerouslySetInnerHTML={{__html:DOMPurify.sanitize(props.descricao)}}></p>
                    <p><span style={{fontWeight:'500', color: '#595959'}}>Data e Hora: </span>{props.data}</p>
                    <p><span style={{fontWeight:'500', color: '#595959'}}>Responsável: </span>{props.responsavel}</p>
                    <p><span style={{fontWeight:'500', color: '#595959'}}>Prioridade: </span>{props.prioridade}</p>
                    <p><span style={{fontWeight: '500', color: '#595959'}}>Valor: </span>{new Intl.NumberFormat('pt-BR', { style: "currency", currency: "BRL" }).format(props.valor)}</p>
                </>
                }
            />
        </Card>
    );
}
