<?php session_start();

include('databaseconnection.php');

    if(isset($_POST['submit']));

    $user_unsafe = $_POST['username'];
    $pass_unsafe = $_POST['password'];

    $user = mysqli_real_escape_string($con, $user_unsafe);
    $pass = mysqli_real_escape_string($con, $pass_unsafe);

    $query = mysqli_query($con, "select * from login where username = '$user' and password = '$pass'") or die(mysqli_error($con));
    $row = mysqli_fetch_array($query);

        $name = $row['username'];

        $counter = mysqli_num_rows($query);
         $id = $row['id'];

    if ($counter == 0){
        echo "<script type = 'text/javascript'>alert('Invalid Username  or Password!');
        
         document.location</script>";  
    }
    else{
        $_SESSION['id'] = $id;
        $_SESSION['username'] = $name;
        
        echo "<script type = 'text/javascript'>document.location = 'generator.php'</script>";
    }
?>