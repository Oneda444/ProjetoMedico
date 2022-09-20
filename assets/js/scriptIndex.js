document.getElementById("BtnCriarConta").onclick = function() { FuncaoCriarConta() };

function FuncaoCriarConta() {
    document.getElementById("LoginBranco").classList.add("DisplayNone");
    document.getElementById("CadastroBranco").classList.remove("DisplayNone");
}

document.getElementById("BtnFazerLogin").onclick = function() { FuncaoFazerLogin() };

function FuncaoFazerLogin() {
    document.getElementById("LoginBranco").classList.remove("DisplayNone");
    document.getElementById("CadastroBranco").classList.add("DisplayNone");
}