function mostrarSenha(){
    var senha = document.getElementById("senha");
    if (senha.type == "password"){
         senha.type = "text";
    } else {
     senha.type = "password";
    }
 } 

 function logar(){
    var email = document.getElementById('email').value;
    var senha = document.getElementById('senha').value;

    if(email == "teoriasnerd@dk.com" && senha == "123"){
        alert('Usuário logado com Sucesso!');
        location.href = "logado.html";
    }
    else{
        alert('Usuário ou senha incorretos!');
    }
 }