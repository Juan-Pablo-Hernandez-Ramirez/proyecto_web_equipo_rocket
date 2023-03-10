function verificarEdad() {
    // Obtenemos la fecha de nacimiento introducida por el usuario
    var fechaNacimiento = new Date(document.getElementById("fecha-nacimiento").value);
    // Obtenemos la fecha actual
    var hoy = new Date();
    // Calculamos la edad restando el año actual menos el año de nacimiento
    var edad = hoy.getFullYear() - fechaNacimiento.getFullYear();
    // Verificamos si la edad está fuera del rango permitido (14 a 70 años)
    if (edad < 14 || edad > 70) {
      // Mostramos un mensaje de alerta indicando el rango de edad permitido
      alert("Debe tener entre 14 y 70 años para registrarse.");
      // Limpiamos el campo de fecha de nacimiento
      document.getElementById("fecha-nacimiento").value = "";
    }
  }
