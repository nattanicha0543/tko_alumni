<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
    <!-- Bootstrap core CSS -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet">
    <!-- Material Design Bootstrap -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.8.9/css/mdb.min.css" rel="stylesheet">
    <!-- JQuery -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <!-- Bootstrap tooltips -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.4/umd/popper.min.js"></script>
    <!-- Bootstrap core JavaScript -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <!-- MDB core JavaScript -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.8.9/js/mdb.min.js"></script>

    <style>
        .box {
            margin-right: auto;
            margin-left: auto;
            margin-top: 20%;
            width: 50%;
        }
    </style>
    <title>Document</title>
</head>

<body>

    <div class="container">
        <div class="box">
            <div class="card">

                <div class="card-body">
                    <ul>
                        <h2 class="card-title">การติดต่อของข้อมูลส่วนตัว</h2>

                        <h5 class="card-title"> E-mail : <?php echo $contect['email'] ?></h5>
                        <h5 class="card-title"> Telephone : <?php echo $contect['phone'] ?></h5>
                        <h5 class="card-title"> Facebook : <?php echo $contect['facebook'] ?></h5>
                        <h5 class="card-title"> ID Line : <?php echo $contect['line'] ?> </h5>

                    </ul>

                </div>
            </div>
        </div>
    </div>
</body>

</html>