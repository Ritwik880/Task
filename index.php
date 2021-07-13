<?php
session_start();
?>
<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>warehouse</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            font-family: 'Comic Neue', cursive;
        }

        .navbar {
            background-color: silver;
        }

        .navbar a {
            color: black;
            font-size: 21px;
        }
        footer{
            background-color: silver;
            position: relative;
            bottom: 0;
        }
        footer,a,p{
            color: black;
            text-decoration: none;
            font-weight: bold;
        }
      
    </style>
</head>

<body>
    <?php include "./dbconnect.php";?>
  
    
    <nav class="navbar navbar-expand-lg">
        <div class="container-fluid">
            <a class="navbar-brand" style="padding-left: 5px; font-weight: bold;" href="#">Initial Details</a>
            <button style="color: black;" class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span style="background-color: black;" class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav pagination" style="margin-left: auto;">
                    <li class="nav-item" style="font-weight: bold;">
                        <a class="nav-link active" href="../home.html">Home</a>
                    </li>

                </ul>
            </div>
        </div>
    </nav>

    <div class="container my-3">
        <form method="POST" action="./store.php">
            <div class="mb-3">
                <input type="firstname" name="name1" placeholder="First Name" class="form-control" id="name1" aria-describedby="emailHelp">
            </div>
            <div class="mb-3">
                <input type="secondname" name="name2" placeholder="Last Name" class="form-control" id="name2" aria-describedby="emailHelp">
            </div>
            <div class="mb-3">
                <input type="email" name="email" placeholder="Email Id" class="form-control" id="email" aria-describedby="emailHelp">
            </div>
            <div class="mb-3">
                <input type="text" name="phone" placeholder="Phone Number" class="form-control" id="number" aria-describedby="emailHelp">
            </div>
            <div class="mb-3">
                <select class="form-select" name="type" aria-label="Default select example">
                    <option selected>Type</option>
                    <option value="Regular">Regular</option>
                    <option value="Airconditioned">Airconditioned</option>
                </select>
            </div>
            <div class="mb-3">
                <input type="text" name="city" placeholder="City" class="form-control" id="city" aria-describedby="emailHelp">
            </div>
            <div class="mb-3">
                <textarea class="form-control" name="text1" placeholder="Location Of Area" id="text1"></textarea>
            </div>
            <div class="mb-3">
                <textarea class="form-control" name="text2" placeholder="Detailed address of warehouse" id="text2"></textarea>
            </div>


            <button type="submit" name="submit" class="btn btn-primary">Next</button>
        </form>
    </div>
    <?php include "./footer.php";?>
    

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
</body>

</html>