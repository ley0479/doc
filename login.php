<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Iniciar Sesión</title>
  <link rel="stylesheet" href="style.css">
  <style>
    /* Estilos básicos */
    body {
      font-family: 'Arial', sans-serif;
      background-color: #e0f7fa;
      margin: 0;
      display: flex;
      flex-direction: column;
      align-items: center;
      justify-content: center;
      height: 100vh;
      transition: background-color 0.5s ease;
    }

    body:hover {
      background-color: #b2ebf2;
    }

    nav {
      width: 100%;
      background-color: #007bff;
      padding: 10px;
    }

    nav .menu {
      list-style: none;
      padding: 0;
      display: flex;
      justify-content: center;
      margin: 0;
    }

    nav .menu li {
      margin: 0 10px;
    }

    nav .menu-button {
      color: white;
      text-decoration: none;
      font-size: 1.2em;
      transition: color 0.3s ease;
    }

    nav .menu-button:hover {
      color: #ffeb3b;
    }

    header {
      margin-bottom: 30px;
      text-align: center;
    }

    header h1 {
      font-size: 2.5em;
      color: #333;
      transition: transform 0.5s ease, color 0.5s ease;
    }

    header h1:hover {
      transform: scale(1.1);
      color: #007bff;
    }

    /* Formulario de inicio de sesión */
    #login-form {
      background-color: #fff;
      padding: 30px;
      border-radius: 15px;
      box-shadow: 0px 10px 20px rgba(0, 0, 0, 0.1);
      width: 100%;
      max-width: 400px;
      text-align: center;
      transition: transform 0.3s ease;
    }

    #login-form:hover {
      transform: translateY(-10px);
    }

    #login-form h2 {
      margin-bottom: 20px;
      color: #007bff;
    }

    .input-group {
      margin-bottom: 15px;
      text-align: left;
      position: relative;
    }

    .input-group label {
      font-size: 1.1em;
      color: #333;
      position: absolute;
      top: -18px;
      left: 10px;
      background-color: #fff;
      padding: 0 5px;
    }

    .input-group input {
      width: 100%;
      padding: 12px;
      border-radius: 10px;
      border: 1px solid #ccc;
      box-shadow: inset 2px 2px 5px rgba(0, 0, 0, 0.1);
      font-size: 1.1em;
      transition: all 0.3s ease;
    }

    .input-group input:focus {
      border-color: #007bff;
      box-shadow: inset 2px 2px 10px rgba(0, 123, 255, 0.2);
      outline: none;
    }

    .btn-submit {
      background: linear-gradient(145deg, #007bff, #0056b3);
      color: white;
      border: none;
      padding: 12px 25px;
      font-size: 1.2em;
      border-radius: 10px;
      cursor: pointer;
      box-shadow: 5px 5px 10px rgba(0, 0, 0, 0.2),
                  -5px -5px 10px rgba(255, 255, 255, 0.2);
      transition: all 0.3s ease;
    }

    .btn-submit:hover {
      background: linear-gradient(145deg, #0056b3, #007bff);
      transform: translateY(-2px);
    }

    .btn-submit:active {
      box-shadow: inset 3px 3px 5px rgba(0, 0, 0, 0.3),
                  inset -3px -3px 5px rgba(255, 255, 255, 0.2);
      transform: translateY(2px);
    }

    #loginError {
      color: red;
      display: none;
    }

    /* Efectos adicionales */
    .input-group input::placeholder {
      color: #ccc;
      font-style: italic;
      transition: color 0.3s ease;
    }

    .input-group input:focus::placeholder {
      color: #007bff;
    }

  </style>
</head>
<body>

<nav>
    <ul class="menu">
        <li><a href="index.html" class="menu-button">Inicio</a></li>
        <li><a href="login.html" class="menu-button">Iniciar Sesión</a></li>
    </ul>
</nav>

<header>
    <h1>Iniciar Sesión</h1>
</header>

<main>
    <section id="login-form">
        <h2>Por favor, completa los datos</h2>
        <form id="formLogin" action="day/registro_usuario_be.php" method="POST">
            <div class="input-group">
                <label for="nombre_completo">Nombre Completo:</label>
                <input type="text" id="nombre_completo" name="nombre_completo" placeholder="Ingresa tu nombre completo" required>
            </div>
            <div class="input-group">
                <label for="correo">Correo Electrónico:</label>
                <input type="email" id="correo" name="correo" placeholder="Ingresa tu correo electrónico" required>
            </div>
            <div class="input-group">
                <label for="username">Usuario:</label>
                <input type="text" id="username" name="username" placeholder="Ingresa tu usuario" required>
            </div>
            <div class="input-group">
                <label for="password">Contraseña:</label>
                <input type="password" id="password" name="password" placeholder="Ingresa tu contraseña" required>
            </div>
            <button type="submit" class="btn-submit">Iniciar Sesión</button>
        </form>
        <p id="loginError">Credenciales incorrectas, intente de nuevo.</p>
    </section>
</main>

<script src="script.js"></script>
</body>
</html>
