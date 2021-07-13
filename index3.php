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

        footer {
            background-color: silver;
            position: relative;
            bottom: 0;
        }

        footer,
        a,
        p {
            color: black;
            text-decoration: none;
            font-weight: bold;
        }
    </style>
</head>

<body>
    <?php include "./dbconnect.php"; ?>


    <nav class="navbar navbar-expand-lg">
        <div class="container-fluid">
            <a class="navbar-brand" style="padding-left: 5px; font-weight: bold;" href="#">Additional Detail</a>
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
        <form method="POST" action="./store3.php">
            <div class="mb-3">
                <textarea class="form-control" type="text" name="text" placeholder="Types of products not allowed to store" id="text1"></textarea>
            </div>
            <!-- <span>Firefighting Arrangements</span> -->
            <div class="form-check mb-3">
                <label>Government Approval</label> <br>
                <input class="form-check-input" type="radio" value="yes" name="type1" id="flexRadioDefault1"> Yes
                <br>
                <input class="form-check-input" type="radio" value="no" name="type1" id="flexRadioDefault2"> No
            </div>
            <div class="form-check mb-3">
                <label>Firefighting Arrangements</label> <br>
                <input class="form-check-input" type="radio" value="yes" name="type2" id="flexRadioDefault1"> Yes
                <br>
                <input class="form-check-input" type="radio" value="no" name="type2" id="flexRadioDefault2"> No
            </div>
            <div class="form-check mb-3">
                <label>Weighbridge Facilities</label> <br>
                <input class="form-check-input" type="radio" value="yes" name="type3" id="flexRadioDefault1"> Yes
                <br>
                <input class="form-check-input" type="radio" value="no" name="type3" id="flexRadioDefault2"> No
            </div>
            <div class="form-check mb-3">
                <label>Power Backup</label> <br>
                <input class="form-check-input" type="radio" value="yes" name="type4" id="flexRadioDefault1"> Yes
                <br>
                <input class="form-check-input" type="radio" value="no" name="type4" id="flexRadioDefault2"> No
            </div>
            <div class="form-check mb-3">
                <label>Labour Availability</label> <br>
                <input class="form-check-input" type="radio" value="yes" name="type5" id="flexRadioDefault1"> Yes
                <br>
                <input class="form-check-input" type="radio" value="no" name="type5" id="flexRadioDefault2"> No
            </div>
            <div class="form-check mb-3">
                <label>Grading Sorting Platform</label> <br>
                <input class="form-check-input" type="radio" value="yes" name="type6" id="flexRadioDefault1"> Yes
                <br>
                <input class="form-check-input" type="radio" value="no" name="type6" id="flexRadioDefault2"> No
            </div>
            <div class="form-check mb-3">
                <label>Unloading Platform</label> <br>
                <input class="form-check-input" type="radio" value="yes" name="type7" id="flexRadioDefault1"> Yes
                <br>
                <input class="form-check-input" type="radio" value="no" name="type7" id="flexRadioDefault2"> No
            </div>
            <button type="submit" name="submit" class="btn btn-primary">Submit</button>
            <a type="submit" class="btn btn-primary" href="../Task/index2.php">Go Back</a>
        </form>

    </div>
    <?php include "./footer.php"; ?>

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