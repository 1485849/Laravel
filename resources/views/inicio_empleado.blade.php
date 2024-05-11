<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">

<title>Iniciar Sesión - iCommerce</title>
<style>
  body {
    font-family: 'Roboto', sans-serif;
    margin: 0;
    padding: 50px 0;
    background-color: #fafafa;
    display: flex;
    flex-direction: column;
    align-items: center;
    min-height: 100vh;
  }

  .background-container {
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    z-index: -1;
    background-image: url('https://static.vecteezy.com/system/resources/previews/009/732/979/non_2x/rainbow-fantasy-background-bright-multicolored-sky-with-stars-and-bokeh-holographic-illustration-in-pastel-violet-and-pink-colors-cute-cartoon-girly-wallpaper-vector.jpg');
    background-size: cover;
    background-position: center;
    filter: blur(5px) brightness(0.6);
}

.container {
  max-width: 300px;
  margin: 50px auto 0;
  padding: 20px;
  border: 1px solid #ccc;
  border-radius: 10px;
  background-color: #fff;
  box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
}

.container h2 {
  font-size: 24px;
  text-align: center;
  margin-bottom: 30px;
}

input[type="email"],
input[type="password"],
button {
  width: calc(100% - 20px);
  padding: 10px;
  margin: 0 auto 10px;
  border: 1px solid #ccc;
  border-radius: 5px;
  box-sizing: border-box;
}

button[type="submit"] {
  padding: 10px 20px;
  margin: 0 auto;
  border: none;
  border-radius: 8px;
  background-color: #48D1CC; 
  color: #fff;
  cursor: pointer;
  box-sizing: border-box;
}

.or {
  margin: 20px 0;
  font-weight: bold;
  color: #555;
  text-align: center;
}

.signup-link {
  text-align: center;
  margin-top: 15px;
}

.signup-link span {
  color: #999;
}

.signup-link a {
  color: #003569;
  text-decoration: none;
  font-weight: bold;
}

footer {
  margin-top: 20px;
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

</style>
</head>
<body>

<div class="background-container"></div>

<div class="container">
  <h2>Iniciar Sesión</h2>
  <form id="loginForm" action="{{ route('inicio_empleado') }}" method="POST">
    @csrf
    <input type="email" placeholder="Correo Electrónico" id="email" name="email" required>
    <input type="password" placeholder="Contraseña" id="password" name="password" required>
    <button type="submit">Entrar</button>
  </form>
  <div class="or">o</div>
  <div class="signup-link">
    <span>¿No tienes una cuenta?</span>
    <a href="#">Regístrate</a>
  </div>
</div>

<footer>
  <ul>
    <li><a href="#">Enlaces útiles</a></li>
    <li><a href="#">Términos y condiciones</a></li>
    <li><a href="#">Política de privacidad</a></li>
  </ul>
  <div class="language">
    <a href="#">Cambiar idioma</a>
  </div>
</footer>

</body>
</html>
