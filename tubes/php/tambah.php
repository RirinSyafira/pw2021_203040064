<?php
// Ririn Syafira Kirana
// 203040064
// Jumat 10.00 - 11.00

session_start();

if (!isset($_SESSION["username"])) {
    header("Location: login.php");
    exit;
}

require 'functions.php';

if (isset($_POST['add'])) {
    if (add($_POST) > 0) {
        echo "<script>
                    alert('Data added successfully!');
                    document.location.href = 'admin.php';
                </script>";
    } else {
        echo "<script>
                    alert('Failed to add data.');
                    document.location.href = 'admin.php';
                </script>";
    }
}
?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--Import Google Icon Font-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!--Import materialize.css-->
    <link type="text/css" rel="stylesheet" href="css/materialize.min.css" media="screen,projection" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <link rel="stylesheet" href="../css/style.css">
    <title>Tubes PW</title>
    <style>
        button {
            margin-left: 10px;
        }

        button:hover {
            color: teal;
        }

        a:link {
            color: white;
        }

        a:hover {
            color: teal;
        }
    </style>
</head>

<body>
    <div class="container">
        <h4>Form Add Data</h4>
        <div class="row card">
            <form action="" method="post" class="col s12">
                <div class="row">
                    <div class="input-field col s12">
                        <input type="text" name="img" id="img" class="validate" required>
                        <label for="img">Image</label>
                    </div>
                    <div class="input-field col s12">
                        <input type="text" name="name" id="name" class="validate" required>
                        <label for="name">Name</label>
                    </div>
                    <div class="input-field col s12">
                        <input type="text" name="details" id="details" class="validate" required>
                        <label for="details">Details</label>
                    </div>
                    <div class="input-field col s12">
                        <input type="text" name="price" id="price" class="validate" required>
                        <label for="price">Price</label>
                    </div>
                    <div class="input-field col s12">
                        <input type="text" name="color" id="color" class="validate" required>
                        <label for="color">Color</label>
                    </div>
                    <div class="input-field col s12">
                        <input type="text" name="category" id="category" class="validate" required>
                        <label for="category">Category</label>
                    </div>


                    <br>
                    <button type="submit" name="add" class="waves-effect waves-light btn">Add Data</button>
                    <button type="submit" class="waves-effect waves-light btn" style="text-decoration: none; color: white;"><a href="index.php">Back</a></button>

                </div>
            </form>
        </div>
    </div>
    <script type="text/javascript" src="../js/materialize.min.js"></script>
</body>