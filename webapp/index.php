<?php
session_start();
if(!empty($_SESSION['user_name']))
{echo $_SESSION['user_name'];
header('Location: application.php');
}
?>

<!DOCTYPE html>
<html>
<head>
<link type="text/css" rel=stylesheet href="css/materialize.css" media="screen,projection">

    <link type="text/css" rel="stylesheet" href="css/animate.css">
    <link type="text/css" rel="stylesheet" href="css/style.css">
        <script src="js/jquery.min.js"></script>
<script src="js/jquery.ui.shake.js"></script>
    <script src="js/jquery.md5.js"></script>

   
    <title>Stealth Gaming Lounge : Login</title>
</head>
    <body class="blue">  
<script>
$(document).ready(function() 
{

$('#loginBtn').click(function() { 
var username=$("#user_name").val();
var password=$.md5($("#password").val());


$.ajax({
type: "POST",
url: "login.php",
data: "number="+username+"&pwd="+password+"&system=PC",

success: function(html){
if(html==1)
{
window.location.href = "application.php";
}
else
{
//Shake animation effect.
$("#loginCard").shake();
$("#error").html("<span style='color:#cc0000'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Error:</span> Invalid username or password. ");
}
}
});


return false;
});

});
</script>	<div class="container">
        <div class="row">&nbsp;</div>
        <div class="row">&nbsp;</div>
        <div class="row">&nbsp;</div>
        <div class="row">&nbsp;</div>
        
          <div class="row" id="loginrow">
    <div >
      <div id="loginCard" class="col s4 offset-s4 card animated fadeInDown">
          
        <div class="card-content">
            
                <span class="card-title black-text">Log In</span>
            <form id="loginForm" class="col s12" method="post" action="#">
          <div class="row">
        <div class="input-field col s12">
          <input id="user_name" type="text" name="user_name" required>
          <label for="username">Contact Number</label>
        </div>
      </div>
      <div class="row">
        <div class="input-field col s12">
          <input id="password" type="password" name="password" required>
          <label for="password">Password</label>
        </div>
      </div>
            </div>
            <div class="row">
			<div id="error">
</div>	
        <div class="card-action">       
            <button class="btn waves-effect waves-light" id="loginBtn" type="button">Submit
    <i class="mdi-content-send right"></i>
            </button>
                </div></div>
            </form></div></div></div>
       <!-- <script type="text/javascript" src="js/prism.js"></script>-->
        <script type="text/javascript" src="js/materialize.js"></script>
    </body>
    
    

</html>