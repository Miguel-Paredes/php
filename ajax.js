const formulariosAjax = document.querySelectorAll('.FormularioAjax');

function enviarFormularioAjax(e) {
    e.preventDefault();

    let enviar = confirm("¿Quieres enviar el formulario?");

    if (enviar) {
        let data = new FormData(this);
        let method = this.getAttribute("method");
        let action = this.getAttribute("action");
        
        
        let encabezados = new Headers;
        let config = {
            method : method,
            headers : encabezados,
            mode : 'cors',
            cache : 'no-cache',
            body : data
        };
        fetch(action,config)
        .then(respuesta => respuesta.text())
        .then(respuesta => {
            alert(respuesta)
        });
    }
}

formulariosAjax.forEach(formulario => {
    formulario.addEventListener("submit", enviarFormularioAjax);
});

console.log("HOLA");