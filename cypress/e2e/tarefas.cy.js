const faker = require('faker-br');
const dayjs = require("dayjs");

cy.selectDropdown = function (testId, optionText) {
    cy.get(testId).eq(0).click();
    return cy
        .get('.ant-select-dropdown :not(.ant-select-dropdown-hidden)')
        .find('.ant-select-item-option')
        .each(el => {
            if (el.text() === optionText) {
                cy.wrap(el).click();
            }
        });
};

describe('Teste funcional tarefas', ()=>{
   it('Testar criação', ()=>{
       cy.visit('http://127.0.0.1');
       cy.get('[data-menu-id$=-tarefas]').click();
       cy.get('.phpdebugbar-close-btn').click();
       cy.get('.ant-btn-primary').click();
       //preenchendo forms
       cy.get('#assunto').type(faker.lorem.sentence(5));
       cy.get('#descricao').type(faker.lorem.paragraphs(3));
       let ini = dayjs(faker.date.past()).format('DD/MM/YYYY HH:mm');
       cy.get('#inicio').type(ini);
       let fim = dayjs(faker.date.future()).format('DD/MM/YYYY HH:mm');
       cy.get('#fim').type(fim);
       cy.get('.ant-modal-footer .ant-btn-primary').click();
       cy.wait(3000);
       cy.get('.ant-message-success');
   });
   it('Testar atualizar status', ()=>{
       cy.visit('http://127.0.0.1/tarefas');
       cy.selectDropdown('.ant-select', 'Confirmar');
       cy.wait(3000);
       cy.get('.ant-message-success');
   });
    it('Testar edição', ()=>{
        cy.visit('http://127.0.0.1/tarefas');
        cy.get('.phpdebugbar-close-btn').click();
        cy.get('.ant-btn-default').eq(1).click();
        //preenchendo forms
        cy.get('#assunto').clear().type(faker.lorem.sentence(5));
        cy.get('#descricao').clear().type(faker.lorem.paragraphs(1));
        let ini = dayjs(faker.date.past()).format('DD/MM/YYYY HH:mm');
        cy.get('#inicio').clear().type(ini);
        let fim = dayjs(faker.date.future()).format('DD/MM/YYYY HH:mm');
        cy.get('#fim').clear().type(fim);
        cy.get('.ant-modal-footer .ant-btn-primary').click();
        cy.wait(3000);
        cy.get('.ant-message-success');
    });
    it('Testar remoção', ()=>{
        cy.visit('http://127.0.0.1/tarefas');
        cy.get('.phpdebugbar-close-btn').click();
        cy.get('.ant-btn-default').eq(2).click();
        cy.wait(3000);
        cy.get('.ant-message-success');
    });
});
