

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
</head>

<style>
    *{
        padding: 0;
        margin: 0;
        box-sizing: border-box;
    }

    body{
        background: rgb(218, 226, 226);
    }
    .row{
        background: white;
        border-radius: 30px;
        box-shadow: 12px 12px 22px grey;
    }
    img{
        border-top-left-radius: 30px;
        border-bottom-left-radius: 30px;
    }
    .btn1{
        border: none;
        outline: none;
        height: 50px;
        width: 100%;
        background-color: black;
        color: white;
        border-radius: 4px;
        font-weight: bold;
    }
    .btn1:hover{
        background: white;
        border: 1px solid;
        color: black;
    }

    p, a{
        font-weight: bold;
        font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
    }
</style>
<body>
    <section class="Form my-4">
        <div class="container">
            <div class="row no-gutters">
                <div class="col-lg-5">
                    <img src="atu.png" alt="ATU" class="img-fluid">
                </div>
                <div class="col-lg-7 px-5 pt-5 ">
                    <h1 class="font-weight-bold py-3">ATU TIMETABLE GENERATOR</h1>
                    <form method="POST" action="login process.php">
                        <div class="form-row">
                            <div class="col-lg-7">
                                <input type="text" id="user" name="username" class="form-control my-3 p-4" placeholder="Email">
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col-lg-7">
                                <input type="text" id="pass" name="password" class="form-control my-3 p-4" placeholder="********">
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col-lg-7">
                                <button type="submit" id="btn" name="login" class="btn1 mt-3 mb-5">Login </button>
                            </div>
                        </div>
                        <a href="#"> Forgot Password?</a>
                        <p>Don't have an account? <a href="#">Register Here</a></p>
                    </form>
                </div>
            </div>
        </div>
    </section>







    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
</body>
</html>