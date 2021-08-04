function validar(){
    var nome = document.getElementById('nome').value;
    var email = document.getElementById('email').value;
    var senha = document.getElementById('senha').value;
    var repetirsenha = document.getElementById('repetirsenha').value;

    if(nome==""){
        document.getElementById('erro-nome').innerHTML ="Informe o Nome!";
    }
}