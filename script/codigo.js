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

    function justificaFalta(form) {
        let jf = confirm(`Justifique falta do(a) ${form.nomealuno.value} ?`);

            if (jf == true) {
                let textojf = prompt ("Digite a justificativa");
            } else {
                alert (`Falta não justificado!`); 
            }
    
    }


let n1 = document.getElementById("n1").value;
let n2 = document.getElementById("n2").value;

let sel = document.getElementById("select");

function fan() {
    if (n1 < n2, n1++) {
        sel.innerHTML = "Aqui"
    }
}

    