// document.write("Data Atual");
// document.write(Date());

    function funcao1() {
        alert ('Usando função');
    }

function calcmedia(n1, n2) {
    let m = (n1 + n2) / 2;
    return m;
}

function resultado (form) {
    let media = calcmedia (parseFloat(form.nota1.value), parseFloat(form.nota2.value));

    if (media >= 7) {
        alert(`Aprovado ${media}`);
    } else {
        alert("Reprovado "+ media);
    }
}