export function sendFormToPHP(src_PHP) {
  // Crear un objeto FormData a partir del formulario
  const formData = new FormData(this);
  const xhr = new XMLHttpRequest();

  xhr.open("POST", src_PHP, true);

  // Manejador para la respuesta del servidor
  xhr.onload = function () {
    if (xhr.status === 200) {
      document.getElementById("respuesta").innerHTML = xhr.responseText;
    } else {
      document.getElementById("respuesta").innerHTML = "Error en la petición";
    }
  };

  // Enviar los datos del formulario
  xhr.send(formData);
}
