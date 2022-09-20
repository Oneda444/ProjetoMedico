document.getElementById("SvgSetaAbrirPerfil").onclick = function() { MenuDescer() };

function MenuDescer() {
    document.getElementById("PerfilOpcoes").classList.toggle("MenuDown");
    document.getElementById("SvgSetaAbrirPerfil").classList.toggle("Svg180deg");
}