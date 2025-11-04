function cadrastrar(){
    const nome = document.getElementById('nome').value
    const email = document.getElementById('email').value 
    const senha = document.getElementById('senha').value
    const confirmarSenha = document.getElementById('confirmarSenha').value
}

if(nome && email && senha === confirmarSenhaenha){
    alert(usuario + email + senha + confirmarSenha)
}

else{
    return alert("erro")
}

