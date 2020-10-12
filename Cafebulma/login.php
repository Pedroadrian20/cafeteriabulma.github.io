<?php // Example 26-7: Login.php
  require_once 'header.php';
  $error = $user = $pass = "";

  if (isset($_POST['user']))
  {
    $user = sanitizeString($_POST['user']);
    $pass = sanitizeString($_POST['pass']);

    if ($user == "" || $pass == "")
      $error = 'Not all fields were entered';
    else
    {
      $result = queryMySQL("SELECT user,pass FROM members WHERE user='$user' AND pass='$pass'");

      if ($result->num_rows == 0)
      {
        $error = "Invalid login attempt";
      }
      else
      {
        $_SESSION['user'] = $user;
        $_SESSION['pass'] = $pass;
        die("<div class='center'>Has iniciado sesion correctamente, ahora <a data-transition='slide' href='members.php?view=$user'>has click aqui para continuar.</div></div></body></html>");
      }
    }
  }

 echo <<<_END
      <br>
      <br>
      <form method ='post' action ='login.php'>
        <div data-role='fieldcontain'>
          <label></label>
          <span class='error'>$error</span>
        </div>
        <div data-role='fieldcontain' id="title2">
          <label></label>
          Favor de ingresar los siguientes datos para poder iniciar sesion
        </div>
        <br>
        <div data-role='fieldcontain'>
          <label id="usuario2">Nombre de Usuario:</label>
          <div class="field">
            <p class="control has-icons-left has-icons-right">
              <input class="input" type="email" placeholder="Email" name='user' value='$user'>
              <span class="icon is-small is-left">
                <i class="fas fa-envelope"></i>
              </span>
              <span class="icon is-small is-right">
                <i class="fas fa-check"></i>
              </span>
            </p>
          </div>
        </div>
        <br>
        <div data-role='fieldcontain'>
          <label id="contraseña2">Contraseña:</label>
          <div class="field">
           <p class="control has-icons-left">
             <input class="input" type="password" placeholder="Password" name='pass' value='$pass'>
             <span class="icon is-small is-left">
               <i class="fas fa-lock"></i>
             </span>
           </p>
         </div>
        </div>
        <br>
        <div data-role='fieldcontain'>
          <label></label>
          <button data-transition='slide' type='submit' class="button is-dark">Iniciar Sesión</button>
        </div>
      </form>
    </div>
    <br>
    <br>
  </body>
 </html>
_END;
?>
      