function somar() {
    let valor_1 = Number(document.getElementById('valor_1').value);
    let valor_2 = Number(document.getElementById('valor_2').value);

    let soma = valor_1 + valor_2;

    document.getElementById('resultado').innerHTML = "Resultado da Soma: " + soma;
    alert(soma);
}

function subtrair() {
    let valor_1 = Number(document.getElementById('valor_1').value);
    let valor_2 = Number(document.getElementById('valor_2').value);

    let resultado = valor_1 - valor_2;

    document.getElementById('resultado').innerHTML = "Resultado da Subtração: " + resultado;
    alert(resultado);
}

function multiplicar() {
    let valor_1 = Number(document.getElementById('valor_1').value);
    let valor_2 = Number(document.getElementById('valor_2').value);

    let resultado = valor_1 * valor_2;

    document.getElementById('resultado').innerHTML = "Resultado da Multiplicação: " + resultado;
    alert(resultado);
}

function dividir() {
    let valor_1 = Number(document.getElementById('valor_1').value);
    let valor_2 = Number(document.getElementById('valor_2').value);

    if (valor_2 === 0) {
        alert("Não é possível dividir por zero.");
        document.getElementById('resultado').innerHTML = "Erro: Divisão por zero";
        return;
    }

    let resultado = valor_1 / valor_2;

    document.getElementById('resultado').innerHTML = "Resultado da Divisão: " + resultado;
    alert(resultado);
}