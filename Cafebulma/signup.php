<?php // Example 26-5: signup.php
   require_once 'header.php';

 echo <<<_END
   <script>
      function checkUser(user) {
         if (user.value == '') {
            $('#used').html('&nbsp;')
            return
         }
         $.post ( 'checkuser.php', { user : user.value }, 
            function(data) {
               $('#used').html(data)
            }
         )
      }
   </script>
 _END;

   $error = $user = $pass = "";
   if (isset($_SESSION['user'])) destroySession();

   if (isset($_POST['user'])) {
      $user = sanitizeString($_POST['user']);
      $pass = sanitizeString($_POST['pass']);

      if ($user == "" || $pass == "")
        $error = 'No todos los datos fueron ingresados<br><br>';
      else{
         $result = queryMysql("SELECT * FROM members WHERE user='$user'");

         if ($result->num_rows)
            $error = 'that username already exists<br><br>';
         else {
            queryMysql("INSERT INTO members VALUES('$user', '$pass')");
            die('<h4 id="cuenta">Tu cuenta ha sido creada</h4>Inicia sesion.</div></body></html>');
         }
      }
   }

 echo <<<_END
      <br>
      <br>
      <form method='post' action='signup.php'>$error
      <div data-role='fieldcontain' id="title">
         <label></label>
         Favor de ingresar los siguientes datos para poder iniciar sesion
      </div>
      <br>
      <div data-role='fieldcontain'>
         <label id="usuario">nombre de usuario:</label>
         <div class="field">
           <p class="control has-icons-left has-icons-right">
             <input class="input" type="email" placeholder="Email" name='user' value='$user' onBlur='checkUser(this)'>
             <span class="icon is-small is-left">
               <i class="fas fa-envelope"></i>
             </span>
             <span class="icon is-small is-right">
               <i class="fas fa-check"></i>
             </span>
           </p>
         </div>
         <label></label><div id='used'>&nbsp;</div>
      </div>
      <div data-role='fieldconain'>
         <label id="contraseña">contraseña:</label>
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
      <br>
      <div data-role='fieldcontain'>
         <label></label>
         <button data-transition='slide' type='submit' class="button is-dark">Registrarse</button>
      </div>
     </div>
     <br>
     <br>
   </body>
  </html>
_END;
?>
  
