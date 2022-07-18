<?PHP

$isPost=false;

$username="";


if(isset($_POST["btnClick"]))

{

$isPost=true;

if($_POST["uname"]!="")

$username=$_POST["uname"];

}

?>
<br><br><br><br><br><br>
<center>
<form action="#" method="post">
<form id="regf" name="myForm" action=""  method="post">
 
 <p id="username"></p>
 <p id="email"></p>

 <p id="epass"></p>

 <p id="fname"></p>

 <p id="ephone"></p>

 <table>

  
  Full Name:<br><input type="text" id="fname" name="fname" placeholder="Enteryour full name">  <br>
   Username:<br><input type="text" id="username" name="username" placeholder="Enter username">  <br>
   Password:<br><input type="password" onkeyup="passv()" id="pass" name="pass" placeholder="Enter your password" ><br>
   E-mail:<br><input type="text" id="email" name="email" placeholder="Enter e-mail address" ><br>
   Phone No:<br><input type="text" id="phone" name="phone" onkeydown="phonev()" placeholder="Enter your phone"><br><br>

 </table>

   <input name="submit" type="submit" value="Register"><br><br>

   <a id="regl" href="login.php">Login</a><br><br>
</form>
</center>
<br>
<br>