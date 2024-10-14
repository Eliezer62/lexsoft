import {useDraggable} from "@dnd-kit/core";
import {CSS} from "@dnd-kit/utilities";
import {Card} from "antd";

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
                    <p style={{color: '#0091ae', fontWeight: '500'}}>{props.descricao}</p>
                    <p><span style={{fontWeight:'500', color: '#595959'}}>Data e Hora: </span>{props.data}</p>
                    <p><span style={{fontWeight:'500', color: '#595959'}}>Responsável: </span>{props.responsavel}</p>
                    <p><span style={{fontWeight:'500', color: '#595959'}}>Prioridade: </span>{props.prioridade}</p>
                </>
                }
            />
        </Card>
    );
}
