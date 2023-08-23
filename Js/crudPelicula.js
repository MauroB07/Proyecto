// script.js
function verificarTextArea() {
    var textarea = document.getElementById("miTextArea");
    var boton = document.getElementById("miBoton");

    if (textarea.value.trim() !== "") {
        boton.style.display = "none"; // Oculta el botón
    } else {
        boton.style.display = "block"; // Muestra el botón
    }
}

// Asegurarse de ejecutar verificarTextArea() al cargar la página
window.onload = verificarTextArea;
