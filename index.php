<?php 
session_start();

$password_length = $_GET['password-length'] ?? 0;

$display_alert = false;

include __DIR__ . '/includes/functions.php';

$_SESSION['final-password'] = getPassword($password_length);

if($password_length){
    header('Location: finalPassword.php');
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <title>Password Generator di GC</title>
</head>
<body class="vh-100">
    <div class="bg-dark text-white text-center h-100 p-5">
        <h1 class="mb-5">Password Generator</h1>

        <div class="m-5">
            <form action="" class="input-group" method="GET">
                <input type="number" class="form-control" min="1" max="15" name="password-length" placeholder="Quanti caratteri deve essere lunga la password?">
                <button type="submit" class="btn btn-primary" type="button">Invia</button>
                <!-- si potrebbe creare un bottone RESET -->
            </form>
        </div>
        
    </div>
</body>
</html>