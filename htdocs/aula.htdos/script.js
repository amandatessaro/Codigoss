function cadastrar() {
    const nome = document.getElementById('nome').value
    const senha = document.getElementById('senha').value
    const confirmarSenha = document.getElementById('confirmarSenha').value

    if (nome && senha === confirmarSenha) {
    localStorage.setItem(nome,senha)
    return alert(`Usuario ${nome} cadastro com sucesso!!`)
}

    else {
    return alert("Usuario e/ou senha incorreto")
}

}

function login() {
    const nome = document.getElementById('nome').value
    const senha = document.getElementById('senha').value

    let usuarioExistente = localStorage.getItem(nome)

    if (!usuarioExistente) {
        return alert("Usuário não existe!!!")
    }

    if (nome && senha === usuarioExistente) {
        localStorage.setItem(nome,senha)
        alert(`Usuário ${nome} logado com sucesso!`)
        window.location.href = "./home.html"
    }

    else {
        return alert("Usuario incorreto!!")
    }

}