const faker = require('faker-br');

cy.selectDropdown = function (testId, optionText) {
    cy.get(testId).click();
    return cy
        .get('.ant-select-dropdown :not(.ant-select-dropdown-hidden)')
        .find('.ant-select-item-option')
        .each(el => {
            if (el.text() === optionText) {
                cy.wrap(el).click();
            }
        });
};

describe('Teste funcional atendimentos', ()=>{
   it('Testar criação', ()=>{
       cy.visit('http://127.0.0.1');
       cy.get('[data-menu-id$=-atendimentos]').click();
       cy.get('.ant-btn-primary').click();
       cy.get('#assunto').type(faker.lorem.sentence(5));
       cy.selectDropdown('#cliente', 'ELIEZER DE ALMEIDA 11312199962');
       cy.get('#descricao').type((faker.lorem.paragraphs(3)));
       cy.get('.ant-modal-footer .ant-btn-primary span').click();
       cy.wait(2000);
       cy.get('.ant-message-success');
   });

   it('Testar visualização', ()=>{
        cy.visit('http://127.0.0.1/atendimentos');
       cy.get('.ant-btn-default').eq(1).click();
       cy.wait(2000);
       cy.get('.ant-drawer-close').click();
   });

    it('Testar edição', ()=>{
        cy.visit('http://127.0.0.1/atendimentos');
        cy.get('.ant-btn-default').eq(2).click();
        cy.get('#assunto').clear().type(faker.lorem.sentence(5));
        cy.get('#descricao').clear().type((faker.lorem.paragraphs(3)));
        cy.get('.ant-modal-footer .ant-btn-primary span').click();
        cy.wait(2000);
        cy.get('.ant-message-success');
    });
    it('Testar remoção', ()=>{
        cy.visit('http://127.0.0.1/atendimentos');
        cy.get('.ant-btn-dangerous').eq(0).click();
        cy.wait(2000);
        cy.get('.ant-message-success');
    });
});
