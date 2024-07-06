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
describe('Teste funcional documentos', ()=>{
    const desc = faker.lorem.sentence(5);
   it('Testar envio', ()=>{
       cy.visit('http://127.0.0.1');
       cy.get('[data-menu-id$=-documentos]').click();
       cy.get('#descricao').type(desc);
       cy.selectDropdown('#cliente', 'ELIEZER DE ALMEIDA 11312199962');
       cy.get('#descricao').type('{enter}',{force: true});
       cy.wait(1000);
       cy.get('input[type=file]').selectFile('C:\\Users\\eliez\\Desktop\\apresentacao slide.pptx', {force: true});
   });
});
