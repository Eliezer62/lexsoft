import React from 'react';

const DescricaoItem = (props) => {
    return (
        <div className="site-description-item-profile-wrapper">
            <p className="site-description-item-profile-p-label">{props.titulo}:</p>
            {props.conteudo}
        </div>
    );
}

export default DescricaoItem;
