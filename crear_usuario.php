<?php session_start();?>


<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--bootstrap-->
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
    <!--custom css-->
    <link rel="stylesheet" type="text/css" href="css2/estilos.css">
    <title>Crear Usuario</title>
  </head>
  <body>
    <div class="container w-75 bg-secondary mt-5 mb-5 rounded shadow">
      <div class="row align-items-stretch">
        <div class="col bg d-none d-lg-block col-md-5 col-lg-5 col-xl-6 rounded">
        </div>
        <div class="col bg-white p-5 rounded-end">
          <div class="text-end">
            <img src="img/logo.png" width="48" alt="logo">
          </div>
          <h2 class="fw-bold text-center py-5 box-shadow">Crear Usuario</h2>
          <form action="controlador/create_user.php" method="POST">
            <div class="mb-4">
              <label for="username" class="form-label">Usuario</label>
              <input type="text" class="form-control" name="username" aria-describedby="emailHelp" required>
            </div>
            <div class="mb-4">
              <label for="name" class="form-label">Nombre de usuario</label>
              <input type="text" class="form-control" name="name" aria-describedby="emailHelp" required>
            </div>
            <div class="mb-4">
              <label for="email" class="form-label">Email</label>
              <input type="email" class="form-control" name="email" required>
            </div>      
              <div class="mb-4">
                  <label for="password" class="form-label">Contraseña</label>
                  <div class="input-group">
                      <input type="password" class="form-control" id="password" name="password" required minlength="8">
                      <button class="btn btn-outline-secondary" type="button" id="togglePassword">Mostrar</button>
                  </div>
                  <div id="passwordHelp" class="form-text"></div>
              </div>
              <div class="mb-4">
                  <label for="password_confirmmar" class="form-label">Confirmar Contraseña</label>
                  <div class="input-group">
                      <input type="password" class="form-control" id="password_confirmmar" name="password_confirmmar" required minlength="8">
                      <button class="btn btn-outline-secondary" type="button" id="togglePasswordConfirm">Mostrar</button>
                  </div>
              </div>
            <div class="mb-4">
                <label for="question" class="form-label">Pregunta de seguridad</label>
                <select class="form-select" name="question">
                    <option value="¿Cuál es el nombre de tu mascota?">¿Cuál es el nombre de tu mascota?</option>
                    <option value="¿Cuál es tu comida favorita?">¿Cuál es tu comida favorita?</option>
                    <option value="¿En qué ciudad naciste?">¿En qué ciudad naciste?</option>
                    <option value="¿Cuál es el nombre de soltera de tu madre?">¿Cuál es el nombre de soltera de tu madre?</option>
                    <option value="¿color favorito?">¿color favorito?</option>
                </select>
            </div>
            <div class="mb-4">
              <label for="answer" class="form-label">Respuesta</label>
              <input type="text" class="form-control" name="answer" required>
            </div>

            <?php if (isset($mensaje)): ?>
              <div class="alert alert-danger" role="alert">
                <?php echo $mensaje; ?>
              </div>
            <?php endif; ?>
            <div class="d-grid">
              <button type="submit" class="btn btn-dark"><h5>Crear Usuario</h5></button>
            </div>
          </form>
          <br>
          <div class="d-grid">
            <button class="btn btn-dark" onclick="window.location.href = 'login.php';"><h5>Atrás</h5></button>
          </div>
        </div>
      </div>
    </div>
    <div class="">
      <footer class="sticky-bottom mt-2 pb-1">
        <h1 class="text-center text-light "><img src="img/logo.png" width="30" alt="">SGCPSP</h1>
        <p class="text-center text-light fw-bold"><font style="vertical-align: inherit;">© 2023 Sistema de Gestión y Control de los Proyectos Socio Productivos</font></p><hr><br>
      </footer>
    </div>

    <script>
    const togglePassword = document.querySelector('#togglePassword');
    const togglePasswordConfirm = document.querySelector('#togglePasswordConfirm');
    const password = document.querySelector('#password');
    const passwordConfirm = document.querySelector('#password_confirmmar');

    togglePassword.addEventListener('click', function() {
        const type = password.getAttribute('type') === 'password' ? 'text' : 'password';
        password.setAttribute('type', type);
        this.textContent = type === 'password' ? 'Mostrar' : 'Ocultar';
    });

    togglePasswordConfirm.addEventListener('click', function() {
        const type = passwordConfirm.getAttribute('type') === 'password' ? 'text' : 'password';
        passwordConfirm.setAttribute('type', type);
        this.textContent = type === 'password' ? 'Mostrar' : 'Ocultar';
    });
</script>

    
  </body>

</html>