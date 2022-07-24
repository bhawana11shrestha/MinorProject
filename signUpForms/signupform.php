<!DOCTYPE html>
<html>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
   <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
   <link rel="stylesheet" type="text/css" href="sstyle.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css"/>
</head>
<body>
    <section>
    <div class="container">
      <div class="wrapper">
        <div class="title"><span>SIGN UP</span></div>
        <form  action="" method="post" >
           <div class="row">
            Full Name:<br>
            <input type="text" placeholder="Enter your name" name="name" required>
          </div>
          <br>s
          <br>
          <div class="row">
            Email:<br>
            <input type="Email" name="email" placeholder=" Enter your email" required >
          </div>
          <br>
          <br>
          <div class="row">
            Password:<br>
            <input type="Password" name="password"placeholder="Enter your password" required>
          </div>
          <br>
          <br>
          <div class="row">
            Confirm Password:<br>
            <input type="Password" name="confirm_password  " placeholder="confirm your password" required >
          </div>
          <br>
          <br>
          <div class="row1">
            Gender:<br>
            <input type="radio" name="gender" value="male" checked>Male
            <input type="radio" name="gender" value="female">Female
            <input type="radio" name="gender" value="others">Others
          </div>
          <br>
          <br>
          <div class="row button">
            <input type="submit" value="Submit">
          </div>
          <br>
          <div class="signup-link">
           Already have an account?  <a href="loginform.php">LOGIN NOW</a>
          </div>
        </form>
      </div>
    </div>
  </section>
  <?php
  
 /* function create_db(){
    $conn=mysqli_connect("localhost","root","root");
  if(!$conn){
    die("connection failed:".mysqli_connect_error());
  }else{
    echo"connection successfully";
  }
 $sql="CREATE DATABASE hostel_db";
 if(mysqli_query($conn,$sql)){
echo "database created successfully";
 }else{
  "error creating database;".mysqli_error($conn);
 }
 mysqli_close($conn);
}
 function create_table(){
  $database="hostel_db";
  $conn=mysqli_connect("localhost","root","root",$database);
  if(!$conn){
    die("connection failed:".mysqli_connect_error());
  }else{
    echo"connection successfully";
  }
 $sql="CREATE TABLE user_info(
  user_id int primary key AUTO_INCREMENT,
  user_name varchar(30) not null,
  user_pass varchar(30) not null,
  user_gender char(1) not null
  )";
 if(mysqli_query($conn,$sql)){
echo "table created successfully";
 }else{
  "error creating table;".mysqli_error($conn);
 }
 mysqli_close($conn);
}*/
function insert_op(){
  $database="hostel_db";
  $conn=mysqli_connect("localhost","root","root",$database);
  if(!$conn){
    die("connection failed:".mysqli_connect_error());
  }else{
    echo"connection successfully";
  }
  if(isset($_POST['submit'])){
      $name=$_POST['name'];
      $email=$_POST['email'];
      $password=$_POST['password'];
      $gender=$_POST['gender'];
 $sql=mysqli_query($conn,"INSERT INTO user_info values(1,$name,$email,$password,$gender)");
 if($sql){
  echo"success";
 }else{
  echo "failed";
 }
 mysqli_close($conn);
}
}

create_db();
create_table();
insert_op();
  ?>
</body>
</html>



