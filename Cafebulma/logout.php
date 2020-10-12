<?php // Example 26-12 Logout.php
  require_once 'header.php';

  if (isset($_SESSION['user']))
  {
    destroySession();
    echo "<br><div class='center'>Has sido desconectado. Por favor<a data-transition='slide' href='index.php'>haz click aquí</a>para actualizar la pantalla</div>";
  }
  else echo "<div class='center'>No puede cerrar sesión porque no ha iniciado sesión.</div>";

?>
    </div>
  </body>
</html>  