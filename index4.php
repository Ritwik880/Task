
<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/dropzone.min.css" />
    <script type="text/javascript" src="js/dropzone.min.js"></script>

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
            position: fixed;
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
    <?php include "./dbconnect.php"; ?>


    <nav class="navbar navbar-expand-lg">
        <div class="container-fluid">
            <a class="navbar-brand" style="padding-left: 5px; font-weight: bold;" href="#">Special Remarks</a>
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
        <form method="POST" action="./store4.php" enctype="multipart/form-data">
            <div class="mb-3">
                <textarea class="form-control" type="text" name="text" placeholder="Comments" id="text1"></textarea>
            </div>
            <h4>Upload outside image of warehouse</h4>
            <p><input type="file" name="outside"></p>
            <h4>Upload inside image of warehouse</h4>
            <p><input type="file" name="inside"></p>
            <button type="submit" name="submit" class="btn btn-primary">Submit</button>
            <a type="submit"class="btn btn-primary" href="../Task/index3.php">Go Back</a>
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