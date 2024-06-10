function Validar(){
    let email = document.getElementById('email').value;
    let name  = document.getElementById('name').value;
    let datenasc  = document.getElementById('dateNasc').value;
    let telefone = document.getElementById('tel').value;
    let senha = document.getElementById('password').value;
    let confirmsenha = document.getElementById('password').value;
    
// || !cpf || !rua || !numero || !cep || cidade || !bairro || !estado || !complemento

    if(!email || !name || !datenasc || !telefone || !senha || !confirmsenha){
        alert("Campos de preenchimento obrigatório. Favor preecher");
    }else{
        alert("Campos preechidos com sucesso!");
    }
}