<?php



?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</head>

<style>
  html, body {
  height: 100%;
  width: 100%;
  margin: 0;
}
body {
  background-color: #0F2027; background: -webkit-linear-gradient(to top, #0F2027, #203A43, #2C5364); background: linear-gradient(to top, #0F2027, #203A43, #2C5364);
}
.container {
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
}
</style>

<body>

<div class="container col-xl-10 col-xxl-8 px-4 ">
    <h1 class="text-center " style="color: #949494">URL SHORTENING SYSTEM</h1>
    <div class="row align-items-center g-lg-5 ">
        <div class="col-md-10 mx-auto col-lg-5">
        <h2 class="text-center mb-4" style="color: white;">LOGIN</h2>
            <?php echo form_open('process/login', 'class="p-4 p-md-5 border rounded-3 bg-light"'); ?>
            <div class="form-floating mb-3">
                    <input type="text" class="form-control" id="floatingInput" name="username" placeholder="Username">
                    <label for="floatingInput">Username</label>
                </div>
                <div class="form-floating mb-3">
                    <input type="password" class="form-control" id="floatingPassword" name="pass" placeholder="Password">
                    <label for="floatingPassword">Password</label>
                </div>
                <div class="checkbox mb-3">
                    <label>
                        <input type="checkbox" enabled> Remember me
                    </label>
                </div>
                <button class="w-100 btn btn-lg btn-primary" type="submit">Log in</button>
                <?php echo form_close(); ?>
            </div>
        </div>
        

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>

</html>