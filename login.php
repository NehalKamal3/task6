<?php    require "data.php";

if($_SERVER['REQUEST_METHOD'] == 'POST'){
   $error = 0;
    if(isset($_POST['login'])){
        $name=$_POST['username'];
        $pass=$_POST['pass'];
     
      
      if(!empty( $name && $pass )){

        foreach($users_data as $user) {
   
          // var_dump($user);
          
          if($user['username'] == $name && $user['pass'] == $pass) {
            echo  "<div class='alert alert-success' role='alert'>
            data is correct welcome user : $name
           </div>";
          $error = 0;
          break;
         } else {
          
             $error ="user is not found ";
       }  }
        
} else{
 $error = 'please fill all the data!';

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
    <title>login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  </head>
  <body>
 
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
 <style>
.log{

width: 566px;
    margin-top: 88px;
}
.re{
    margin-top: 55px;
    text-align:center;
}
 </style>
<center><h2> log in  </h2></center>
<div  class="log" >
    <form method="post">
    <?php if(isset($error) && $error != 0 ):
   echo "<div class='alert alert-danger' role='alert'>
  $error</div>";
   endif;
  ?>
    <div  class="row g-3" style="width:844px ; margin-left:266px;">
  <div class="col">
    <input type="text" class="form-control" placeholder="name"     name="username">
  </div>
  <div class="col">
    <input type="text" class="form-control" placeholder="password"     name="pass">
  </div>


  <button type="submit" name="login" class="btn btn-info">login</button>

</div></div>
</form>
<div class="re">
<p>not signed in!</p>
<a href="index.php"><button   class="btn btn-secondary"  type="" >register</button></a>

<a href="login.php"><button   class="btn btn-warning"  type="" >refresh</button></a>
</div>


</body>
</html>