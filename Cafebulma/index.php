<?php // Example 26-4: index.php
  session_start();
  require_once 'header.php';

  echo "<div class='texto'>Bienvenido a mi pagina de negocio,";

  if ($loggedin) echo " $user,  Has iniciado sesion correctamente uwu";
  else           echo ' favor de registrarte o iniciar sesion';

  echo <<<_END
    <br>
    <footer class="footer" id="TextoFoot">
      <div class="content has-text-centered">
        <h1>Información sobre mi:</h1>
        <p>Nombre: Pedro Adrián Caamal Martínez</p>
        <p>Número de télefono: 9831586146</p>
        <p>Correo electronico: am0166653@gmail.com</p>
      </div>
    </footer>

    <script src="bootstrap/jquery-3.4.1.slim.min.js"></script>
    <script src="bootstrap/popper.min.js"></script>
    <script src="bootstrap/bootstrap.min.js"></script>

  </body>
 </html>
_END;
?>
