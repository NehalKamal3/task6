<?php  require "func.php";
if($_SERVER['REQUEST_METHOD'] == 'POST'){
  $error=" " ;
    if(isset($_POST['submit'])){
        $fname=$_POST['fname'];
        $lname=$_POST['lname'];
        $email =$_POST['email'];
        $gender =$_POST['gender'];
        $birth=$_POST['birth'];
        $address =trim($_POST['address']);

      if(!preg_match("/^[a-zA-Z]+$/",$fname)  ||  !preg_match("/^[a-zA-Z]+$/",$lname) ){
         $error= "please enter avalid name ";
      }

      if(!preg_match("/^[\w\-]+@[\w\-]+.[\w\-]+$/" , $email)){
        $error ="please enter a valid email";
         }


if(!empty( $fname && $lname  &&   $email && $gender &&  $birth &&  $address ) ){
        echo  "<div class='alert alert-success' role='alert'>
        your full data is : 
       [ $fname,  $lname,   $email , $gender ,  $birth,    $address ]
      </div>";

}else{
  
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
    <title>form 2</title>
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
<h2>fill your data</h2>

<form class="form-control" method="post">
<?php if(isset($error) && $error != " " ):
   echo "<div class='alert alert-danger' role='alert'>
  $error</div>";
   endif;
  ?>


  <label for="fname">first name:</label><br>
  <input type="text"  name="fname" value=""><br>
  <label for="lname">last name:</label><br>
  <input type="text"  name="lname" value=""><br>
  <label for="lname">email:</label><br>
  <input type="text"  name="email" value=""><br>


  <br>

<p>gender : </p>

<input type="radio"  name="gender" value="male">
<label for="">male</label><br>

  <input type="radio"  name="gender" value="female">
<label for="">female</label><br>
<br>

  <label for="birthday">Birthday:</label>  <br>
<input type="date" id="birthday" name="birth"> 
<br>
<p>address :</p>

<textarea name="address" rows="2" cols="33"></textarea>
<br>


<button type="submit" class="btn btn-primary"   name="submit">submit</button>
<a href="form2.php"><button type="refresh" class="btn btn-warning" >refresh</button></a>
</form>
<a href="index.php"><button   class="btn btn-info"  type="" >return</button></a>


</body>
</html>
