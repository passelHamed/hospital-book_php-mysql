
<?php
    require_once ("connectdata.php");
    $data = new database2();
    $allData = $data->fetchAll();



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
    

    <div class="home mt-5">
        <div class="container p-3">
            <row>
                <div class="col-md-12">                    
                    <div>
                        <center><img src="images/download.png"></center>
                    </div>
                </div>
            </row>
            <row>
                <div class="col-md-12">
                    <div>
                        <h1 class="text-center mt-4">Al Shifa Hospital</h1>
                    </div>
                </div>
            </row>
            <row>
                <div class="col-md-12">
                    <div>
                        <center><a class="mt-4 btn btn-primary" href="book.php">back to book</a></center>
                    </div>
                </div>
            </row>
            <row>
                <div class="col-md-12 mt-5">
                    <table class="table table-striped table-dark">
                        <tr>
                            <th>ID</th>
                            <th>Patient name</th>
                            <th>E-mail</th>
                            <th>Date</th>
                            <th>Action</th>
                        </tr>
                        <?php
                            foreach ($allData as $key => $oneData ):
                        ?>
                        <tr>
                            <td><?=$oneData['id']; ?></td>
                            <td><?=$oneData['name']; ?></td>
                            <td><?=$oneData['email']; ?></td>
                            <td><?=$oneData['date'];?></td>
                            <th><a href="delete.php?id=<?=$oneData['id']?>&cmd=delete" class="btn btn-danger">Delete</a></th>
                        </tr>
                        <?php endforeach; ?>
                    </table>
                </div>
            </row>
        </div>
    </div>







    <script src="../../../library/Bootstrap/bootstrap.bundle.min.js"></script>
</body>
</html>