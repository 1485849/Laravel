<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link href="https://fonts.googleapis.com/css2?family=Brush+Script+MT&display=swap" rel="stylesheet">

<title>Registro - Multiservicios Sanny</title>
<style>
  body {
    font-family: Arial, sans-serif;
    margin: 0;
    padding: 50px 0; /* Agrega espacio arriba y abajo */
    background-color: #fafafa;
    display: flex;
    flex-direction: column; /* Organizar contenido verticalmente */
    align-items: center;
    min-height: 100vh;
  }

  .background-container {
    position: fixed; /* Para que el fondo ocupe toda la pantalla */
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    z-index: -1; /* Para que esté detrás de los demás elementos */
    background-image: url('https://static.vecteezy.com/system/resources/previews/009/732/979/non_2x/rainbow-fantasy-background-bright-multicolored-sky-with-stars-and-bokeh-holographic-illustration-in-pastel-violet-and-pink-colors-cute-cartoon-girly-wallpaper-vector.jpg');
    background-size: cover;
    background-position: center;
    filter: blur(5px) brightness(0.6);
}
  
.container {
  max-width: 300px;
  margin: 50px auto 0; /* Modificación: Ajusta el margen arriba y centra horizontalmente */
  padding: 15px;
  border: 1px solid #ccc;
  border-radius: 10px;
  background-color: #fff;
  box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
}
  
  .container h2 {
    font-family: 'Comic Sans MS', cursive; /* Aplica la fuente Comic Sans MS */
    font-size: 30px;
    font-style: italic; /* Estilo cursiva */
    text-align: center;
    margin-bottom: 30px;
    transform: skewX(-15deg); /* Inclina el texto */
  }
  
  input[type="text"],
  input[type="email"],
  input[type="tel"],
  input[type="password"],
  button {
    width: calc(100% - 20px);
    padding: 10px;
    margin: 0 auto 10px; /* Centrar horizontalmente */
    border: 1px solid #ccc;
    border-radius: 10px;
    box-sizing: border-box;
    margin-left: 8px; /* Agrega un pequeño margen izquierdo */
  }

  button[type="submit"] {
    padding: 10px 20px; /* Ajusta el padding horizontal */
    margin: 0 auto; /* Centra horizontalmente */
    border: none;
    border-radius: 8px;
    background-color: #48D1CC; 
    color: #fff;
    cursor: pointer;
    box-sizing: border-box;
    margin-left: 8px; /* Agrega un pequeño margen izquierdo */
  }
  
  footer {
    margin-top: 10px;
    background-color: transparent;
    padding: 20px;
    text-align: center;
  }

  footer ul {
    list-style-type: none;
    padding: 0;
  }

  footer ul li {
    display: inline;
    margin-right: 10px;
  }

  footer ul li a {
    color: #fff;
    text-decoration: none;
    font-size: 12px;
  }

  .language {
    display: block;
    margin-top: 10px;
  }

  .language a {
    color: #fff;
    text-decoration: none;
    font-size: 12px;
  }

  .copyright {
    margin-top: 10px;
  }

  .copyright p {
    color: #fff;
    font-size: 12px;
  }
</style>
</head>
<body>

<div class="background-container">
    <!-- Solo la imagen de fondo va aquí -->
</div>

<div class="container">
  <h2>Registro - Multiservicios Sanny</h2>
  <form id="registerForm">
    <input type="text" placeholder="Nombre" id="name" required>
    <input type="email" placeholder="Correo electrónico" id="email" required>
    <input type="tel" placeholder="Número de teléfono" id="phone" required>
    <input type="password" placeholder="Contraseña" id="password" required>
    <input type="password" placeholder="Confirmar contraseña" id="confirmPassword" required>
    <button type="submit">Registrarse</button>
  </form>
</div>



</body>
</html>
