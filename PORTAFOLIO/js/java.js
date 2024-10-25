/*document.getElementById("btnMenu").addEventListener("click", function () {
  let elemento = document.getElementById("navbar");
  if (elemento.classList.contains("navbar")) {
    elemento.classList.remove("navbar");
    elemento.classList.add("no_navbar");
  } else {
    elemento.classList.remove("no_navbar");
    elemento.classList.add("navbar");
  }
});*/

alert ('hola');
const nombre = document.querySelector("#Nombre");
const Telefono = document.querySelector("#Telefono");
const correo = document.querySelector("#Email");
const mensaje = document.querySelector("#Mensaje");
const formulario = document.querySelector(".formulario");
formulario.addEventListener("submit", validarFormulario);

function validarFormulario(e) {
  e.preventDefault();
  if (
    nombre.value === "" ||
    Telefono.value === "" ||
    correo.value === "" ||
    mensaje.value === ""
  ) {
    mostrarError("Todos los campos son obligatorios");
    return;
  }

  alert("Hemos recibido sus datos, pronto nos pondremos en contacto");
 e.target.submit();

  console.log(
    `El nombre es: ${nombre.value}, su número de teléfono es: ${Telefono.value}, su correo electrónico es: ${correo.value}, y el mensaje es: ${mensaje.value}`
  );
}

function mostrarError(mensaje) {
  const alerta = document.createElement("p");
  alerta.textContent = mensaje;
  alerta.style.background = "blue";
  alerta.style.color = "white";
  formulario.appendChild(alerta);

  setTimeout(() => {
    alerta.remove();
},5000);
}