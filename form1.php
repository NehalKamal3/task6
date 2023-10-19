<?php    require "func.php";
if($_SERVER['REQUEST_METHOD'] == 'POST'){
$error =0;
    if(isset($_POST['submit'])){
        $name=$_POST['name'];
        $pass=$_POST['pass'];
        $city =$_POST['city'];
        $role=$_POST['role'];
        $server =$_POST['server'];
        $sign =$_POST['on'];

         if(strlen($pass) < 9){
            $error ="too short password";
         }
        
         if(!preg_match("/^[a-zA-Z]+$/",$name) || strlen($name) > 33){
            $error= "please enter avalid username ";
         }

      if(!empty( $name && $pass  &&   $city && $server &&  $role && $sign ) ){
        echo  "<div class='alert alert-success' role='alert'>
       your full data is : [   $name  , $pass , $city , $server , $role ,$sign]
      </div>";

     echo "<div class='card' style='width: 18rem;'>
  <ul class='list-group list-group-flush'>
    <li class='list-group-item'>$name</li>
    <li class='list-group-item'>$pass</li>
    <li class='list-group-item'>$city</li>  <li class='list-group-item'>$server</li> 
     <li class='list-group-item'>$sign</li>
  </ul>
</div>";

}else{
  $error ="please fill all the data ";
 
}
    }
}

?>


<!DOCTYPE html>
<html>
<body>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>form 1</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  </head>
  <body>
 
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body>
</html>
<style>
*{
    justify-content:center;
    text-align :center;
}
.form{
    justify-content:center;
    text-align :center;
    width: 1333px;
}
p{
    width: 189px;
    background-color:lightblue;
    margin-left:566px;
}

</style>
<h2> fill your data</h2>

<form class="form-control" method="post">

<?php if(isset($error) && $error != 0 ):
   echo "<div class='alert alert-danger' role='alert'>
  $error</div>";
   endif;
  ?>

  <label for="fname">user name:</label><br>
  <input type="text"  name="name" value=""><br>
  <label for="lname">password:</label><br>
  <input type="text"  name="pass" value=""><br>
  <label for="lname">city:</label><br>
  <input type="text"  name="city" value=""><br>

  <p >web server:</p>
  <select name="server" >

    <option value="http">http</option>
    <option value="apache">apache</option>
    <option value="nginx">NGINX</option>

  </select>
  <br><br>

<p>specify your role : </p>

<input type="radio" id="html" name="role" value="admin">
<label for="">admin</label><br>

  <input type="radio" id="css" name="role" value="engineer">
<label for="">engineer</label><br>

  <input type="radio" id="javascript" name="role" value="manager">
<label for="javascript">manager</label><br>

<input type="radio" id="javascript" name="role" value="guest ">
<label for="javascript">guest</label>


<p>sign-on for to  following :</p>
<input type="radio" id="html" name="on" value="mail">
  <label for="html">mail</label><br>
  <input type="radio" id="css" name="on" value="payroll">
  <label for="css">payroll</label><br>
  <input type="radio" id="javascript" name="on" value="self-service">
  <label for="javascript">self-service</label>
<br>
<button type="submit" name="submit" class="btn btn-primary"  >submit</button>
<a href="form1.php"><button type="refresh"  class="btn btn-warning"  >refresh</button></a>
</form>
<a href="index.php"><button   class="btn btn-info"  type="" >return</button></a>


</body>
</html>
