<?php
   session_start();
echo <<<_INIT
<!DOCTYPE html>
<html>
   <head>
      <meta charset='utf-8'>
      <meta name='viewport' content='width=device-width, initial-scale=1'>
      <link rel="stylesheet" href="node_modules/bulma/css/bulma.min.css">
      <link rel='stylesheet' href='cafebulma.css'>
      <script src='javascript.js'></script>
      <script src='node_modules/jquery/dist/jquery.min.js'></script>
      <script src='node_modules/jquery-mobile/js/jquery.mobile.js'></script>
_INIT;
      require_once 'functions.php';
      $userstr = 'Cafeteria';
      if (isset($_SESSION['user']))
      {
         $user      = $_SESSION['user'];
         $loggedin = TRUE;
         $userstr   = "Logged in as: $user";
      }
      else $loggedin = FALSE;

 echo <<<_MAIN
      <title>$userstr</title>
   </head>
   <body>
      <div data-role='page' class="FondoCafeteria">
      <header class="encabezado1">
         <h1 class="title1">~ NEGOCIO DE CAFETERIA ~</h1>
      </header>
      <div data-role='content'>
_MAIN;
   if ($loggedin){
 echo <<<_LOGGEDIN
         <div class='center'>
            <a data-role='button' data-inline='true' data-icon='home' data-transition="slide" href='members.php?view=$user'>Inicio</a>
            <a data-role='button' data-inline='true' data-icon='user' data-transition="slise"  href='members.php'>Miembros</a>
            <a data-role='button' data-inline='true' data-icon='heart' data-transition="slide" href='friends.php'>Amixes</a><br>
            <a data-role='button' data-inline='true' data-icon='mail' data-transition="slide" href='messages.php'>Mensajes</a>
            <a data-role='button' data-inline='true' data-icon='edit' data-transition="slide" href='profile.php'>Editar Perfil</a>
            <a data-role='button' data-inline='true' data-icon='action' data-transition="slide" href='logout.php'>Iniciar Sesion</a>
         </div>
         
 _LOGGEDIN;
   }
   else {
 echo <<<_GUEST
   <nav class="navbar" role="navigation" aria-label="main navigation">
     <div class="navbar-brand">
       <a class="navbar-item" href="https://bulma.io">
         <img src="https://bulma.io/images/bulma-logo.png" width="112" height="28">
       </a>

       <a role="button" class="navbar-burger burger" aria-label="menu" aria-expanded="false" data-target="navbarBasicExample">
         <span aria-hidden="true"></span>
         <span aria-hidden="true"></span>
         <span aria-hidden="true"></span>
       </a>
     </div>

     <div id="navbarBasicExample" class="navbar-menu">
       <div class="navbar-start">
         <a class="navbar-item" href="index.php">
           Inicio
         </a>
       </div>

       <div class="navbar-end">
         <div class="navbar-item">
           <div class="buttons">
             <a class="button is-primary" href="signup.php">
               <strong>Registrarse</strong>
             </a>
             <a class="button is-light" href="login.php">
               Iniciar sesión
             </a>
           </div>
         </div>
       </div>
     </div>
   </nav>

   <br>
   <div class="columns">
     <div class="column">
       <figure class="image is-200x200">
         <img src="images/cafetipo.png">
       </figure>
       <h5 class="subtitulo" >Tipos de cafe</h5>
     </div>
     <div class="column">
       <figure class="image is-200x200">
         <img src="images/frappe.png">
       </figure>
       <h5 class="subtitulo" >Frappes</h5>
     </div>
     <div class="column">
       <figure class="image is-200x200">
         <img src="images/cappuchino.png">
       </figure>
       <h5 class="subtitulo" >Cappuchino</h5>
     </div>
     <div class="column">
       <figure class="image is-200x200">
         <img src="images/cafecaliente.png">
       </figure>
       <h5 class="subtitulo" >Cafe caliente</h5>
     </div>
   </div>
   <br>

   <br>
   <div class="card" id="centrarcard">
     <header class="card-header">
       <p class="card-header-title">
         Informacióon sobre las Bebidas Frias
       </p>
     </header>
     <div class="card-content">
       <div class="content">
         <p class="cardstext">En nuestra cafeteria de: Coffes Martinez, vendemos de todo tipo de bebidas, les voy a hablar sobre las bebidas frias que vendemos.</p>
         <p class="cardstext">Aqui en la cafeteria, vendemos Frappes ya sea de chocolate, fresa, vainilla, etc. Tambien vendemos malteadas, frappuchinos, frappes con hielo, cappuchinos, entre otras bebidas frias.</p>
       </div>
     </div>
   </div>

   <br>
   <div class="card" id="centrarcard">
     <header class="card-header">
       <p class="card-header-title">
         Información sobre las Bebidas Calientes
       </p>
     </header>
     <div class="card-content">
       <div class="content">
         <p class="cardstext">En nuestra cafeteria aparte de vender bebidas frias, tambien vendemos bebidas calientes, aqui les voy a dar un poco de informacion.</p>
         <p class="cardstext">En nuestra cafeteria vendemos bebidas como por ejemplo, te, cafes, cappuchino, cafe americano, latte y cafe moka, entre algunas otras bebidas.</p>
       </div>
     </div>
   </div>

   <br>
   <div class="card" id="centrarcard">
     <header class="card-header">
       <p class="card-header-title">
         Información sobre los postres
       </p>
     </header>
     <div class="card-content">
       <div class="content">
         <p class="cardstext">En la cafeteria no solo vendemos bebidas, sino que tambien vendemos postres, para que nuestros clientes puedan acompañar su bebida con algun rico postre.</p>
         <p class="cardstext">De postres vendemos pasteles ya sea de chocolate, de tres leches, pastel imposible, etc. Los pasteles los vendemos en rebanadas, aparte de los pasteles, tambien vendemos pays, donas y panes.</p>
       </div>
     </div>
   </div>

   <br>
   <div class="card" id="centrarcard">
     <header class="card-header">
       <p class="card-header-title">
         Información sobre los panes
       </p>
     </header>
     <div class="card-content">
       <div class="content">
         <p class="cardstext">En la cafeteria nuestros clientes no solo pueden acompañar sus cafes y otras bebidas con pasteles sino que tambien las pueden acompañar con panes</p>
         <p class="cardstext">Estos son algunos de los panes que vendemos:</p>
         <ol class="cardstext">
           <li>Conchas: Chocolate, fresa y Vainilla.</li>
           <li>Hojaldras: con jamon y queso y sin nada.</li>
           <li>Panquesitos.</li>
           <li>Donas: Chocolate, Con azucar, etc.</li>
         </ol>
       </div>
     </div>
   </div>

   <br>
   <div class="card" id="centrarcard">
     <header class="card-header">
       <p class="card-header-title">
         Información sobre los desayunos
       </p>
     </header>
     <div class="card-content">
       <div class="content">
         <p class="cardstext">En la cafeteria aparte de vender pasteles y panes para acompañar las bebidas, tambien vendemos desayunos para que los clientas puedan disfrutar un rico deayuno</p>
         <p class="cardstext">Estos son algunos de los desayunos que vendemos:</p>
         <ol class="cardstext">
            <li>Huevos con jamon</li>
            <li>Club Sandwich</li>
            <li>Coctel de frutas</li>
            <li>Hot Cakes acompañados con huevo y tocino</li>
         </ol>
       </div>
     </div>
   </div>

   <br>
   <div class="columns">
     <div class="column">
       <div class="card" id="centrarcard">
         <div class="card-image">
           <figure class="image is-4by3">
             <img src="images/logoCafeteria.png.png" alt="Placeholder image">
           </figure>
         </div>
         <div class="content">
           <p class="cardstext">Este es el logo de mi negocio, mi negocio es sobre una cafeteria, la cual tiene como nombre: Coffes Martinez.</p>
         </div>
       </div>
     </div>
     <div class="column">
       <div class="card" id="centrarcard">
         <div class="card-image">
           <figure class="image is-4by3">
             <img src="images/frappe.png" alt="Placeholder image">
           </figure>
         </div>
         <div class="content">
           <p class="cardstext">En la cafeteria de Coffes Martinez, vendemos bebidas frias como los frappes.</p>
         </div>
       </div>
     </div>
     <div class="column">
       <div class="card" id="centrarcard">
         <div class="card-image">
           <figure class="image is-4by3">
             <img src="images/cafecaliente.png" alt="Placeholder image">
           </figure>
         </div>
         <div class="content">
           <p class="cardstext">En la cafeteria de Coffes Martinez, aparte de preparar bebidas frias, tambien preparamos bebidas calientes.</p>
         </div>
       </div>
     </div>
   </div>
   <br>
   <div class="columns">
     <div class="column">
       <div class="card" id="centrarcard">
         <div class="card-image">
           <figure class="image is-4by3">
             <img src="images/cafetipo.png" alt="Placeholder image">
           </figure>
         </div>
         <div class="content">
           <p class="cardstext">Estos son algunos de los cafes que tenemos por el momento.</p>
         </div>
       </div>
     </div>
     <div class="column">
       <div class="card" id="centrarcard">
         <div class="card-image">
           <figure class="image is-4by3">
             <img src="images/pastel.png" alt="Placeholder image">
           </figure>
         </div>
         <div class="content">
           <p class="cardstext">En la cafeteria de Coffes Martinez, aparte de las bebidas, tambien vendemos postres.</p>
         </div>
       </div>
     </div>
     <div class="column">
       <div class="card" id="centrarcard">
         <div class="card-image">
           <figure class="image is-4by3">
             <img src="images/fondo4.png" alt="Placeholder image">
           </figure>
         </div>
         <div class="content">
           <p class="cardstext">Estos son algunos ejemplos de los postres que vendemos en nuestra cafeteria.</p>
         </div>
       </div>
     </div>
   </div>
   <br>
   <div class="columns">
     <div class="column">
       <div class="card" id="centrarcard">
         <div class="card-image">
           <figure class="image is-4by3">
             <img src="images/panes.png" alt="Placeholder image">
           </figure>
         </div>
         <div class="content">
           <p class="cardstext">En nuestra cafeteria aparte de vender postres, tambien vendemos panes, como conchas, hojaldras, entre otros.</p>
         </div>
       </div>
     </div>
     <div class="column">
       <div class="card" id="centrarcard">
         <div class="card-image">
           <figure class="image is-4by3">
             <img src="images/huevosconjamon.png" alt="Placeholder image">
           </figure>
         </div>
         <div class="content">
           <p class="cardstext">En la cafeteria vendemos desayunos por si algun cliente quiere disfrutar de un rico desayuno.</p>
         </div>
       </div>
     </div>
     <div class="column">
       <div class="card" id="centrarcard">
         <div class="card-image">
           <figure class="image is-4by3">
             <img src="images/cereal.png" alt="Placeholder image">
           </figure>
         </div>
         <div class="content">
           <p class="cardstext">En la cafeteria vendemos desayunos saludables por si algun cliente quiere ordenar algo nutritivo.</p>
         </div>
       </div>
     </div>
   </div>

_GUEST;
   }
?>


