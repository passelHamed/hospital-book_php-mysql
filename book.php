
<?php



    if ($_SERVER['REQUEST_METHOD'] == "POST"){
        require_once("connectdata.php");
            $data   = new database2();
            $data->setName($_POST['name']);
            $data->setEmail($_POST['email']);
            $data->setDate($_POST['date']);
            $data->insert();
            header("location:allbooks.php");
            echo "<script>alert('data saved successfully');document.location='allbooks.php'</script>";
    }

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>All shifa Hospital</title>
    <link rel="stylesheet" href="../../../library/Bootstrap/bootstrap.min.css">
    <link rel="stylesheet" href="main.css">
</head>
<body>
    

    <div class="home shadow-lg mt-5">
        <div class="container p-3">
            <row>
                <div class="col-md-12">
                    <center><img src="images/download.png"></center>
                </div>
            </row>
            <row>
                <div class="col-md-12">
                    <h1 class="text-center mb-5 mt-4">Al Shifa Hospital</h1>
                    <h5 class="text-center mb-4">Welcome to Al-Shifa Hospital. For reservations, write this information</h5>
                </div>
            </row>
            <row>
                <div class="col-md-12">
                    <form action="" method="POST">
                        <div class="form-group">
                            <input type="text" placeholder="Enter your name" name="name" class="form-control p-2">
                        </div>
                        <div class="form-group">
                            <input type="email" placeholder="Enter your email" name="email" class="form-control mt-2 mb-2">
                        </div>
                        <div class="form-group">
                            <input type="date" name="date" class="form-control">
                        </div>
                        <div class="form-group mt-3">
                            <button type="submit" class="btn btn-dark w-100 p-2 fs-4 button">Book now</button>
                        </div>
                    </form>
                </div>
            </row>
            <row>
                <div class="col-md-12">
                    <center><a href="allbooks.php" class="btn btn-dark mt-2 w-100 p-2 fs-4">show all books</a></center>
                </div>
            </row>
        </div>
    </div>





    <script src="../../../library/Bootstrap/bootstrap.bundle.min.js"></script>
</body>
</html>