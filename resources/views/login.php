<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div class="container text-center">  
        <br><h3>LOGIN FORM<br>
        <form action="connectivity.php" method="POST">  
          <label>
          <input type="text" title="username" placeholder="Enter Username" name="username" required>   
          <input type="password" title="password" placeholder="Enter Password" name="password" required>  
          <button type="submit" class="btn btn-primary" name="submit">Login</button>   
        </form>
    </div> 
   
</body>
</html>