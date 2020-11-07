<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Acessso ao Usuario</title>
    
    <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">

    <!-- Compiled and minified JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    
     <!-- biblioteca de icones -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
     
   	<!--jquery validação-->
    <script src="../jquery/jquery.js" type="text/javascript"></script>
        <script src="../jquery/validator.min.js"></script>
</head>

<body bgcolor="grey">
<div class="container">
	<div class="row">
	<div class="section"></div>
   <main>
    
     <div class="container center-align">
        <div  class="z-depth-3 y-depth-3 x-depth-3 grey green-text lighten-4 row" style="display: inline-block; padding: 32px 48px 0px 48px; border: 1px; margin-top: 100px;">
        <div class="section"></div>
<div class="section"></div>
    
      <div class="section"><i class="mdi-alert-error red-text"></i></div>
      
  
            <div class='row'>
            <form action="login.php" method="POST"  name="frmIndex" >
              <div class='input-field col s12'>
                <input class='validate' type="text" name='username' id='username' required />
                <label for='email'>Usuario</label>
              </div>
            </div>
            <div class='row'>
              <div class='input-field col m12'>
                <input class='validate' type='password' name='password' id='password' required />
                <label for='password'>Senha</label>
              </div>
              
             </div>
             <br/>
             <div class='row'>
                <button  type='submit' name='btn_login' class='btn btn-primary '>Login</button>
              </div>
              </form> 
              
            </div>
     
        
       
    
      </main>

	</div>
</div>
    
</body>
</html>