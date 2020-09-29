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
        .container {
            margin-top: 10%;
        }
    </style>
    <title>Document</title>
</head>

<body>
    <div class="container">
        <form action="<?php echo site_url('page/contect') ?>" method="POST">
            <div class="card">
                <div class="card-body">
                    <h2 align="center">ข้อมูลส่วนตัว</h2><br>
                    <u>
                        <h4 align="left">ข้อมูลการติดต่อ</h4>
                    </u>
                    <br>
                    <div class="modal-body" align="left">
                        <div class="form-row mb-4">
                            <div class="col">
                                <!-- E-mail -->
                                <label> E-mail </label>
                                <input type="email" name="email" id="email" class="form-control" placeholder="xxxxxx@gmail.com" required>
                            </div>
                            <div class="col">
                                <!-- password -->
                                <label> เบอร์โทรศัพท์ </label>
                                <input type="text" name="phone" id="phone" class="form-control" placeholder="000-000-0000">
                            </div>
                        </div>
                        <p></p>
                        <div class="form-row mb-4">
                            <div class="col">
                                <!-- E-mail -->
                                <label> Facebook </label>
                                <input type="text" name="facebook" id="facebook" class="form-control" placeholder="xxxxxx xxxxx" required>
                            </div>
                            <div class="col">
                                <!-- password -->
                                <label> ID Line </label>
                                <input type="text" name="line" id="line" class="form-control" placeholder="xxxxx" required>
                            </div>
                        </div>
                        <p></p>


                    </div>
                </div>
                <button type="submit" name="submit" class="btn btn-primary btn-lg btn-block">ตกลง</button>


            </div>
        </form>
    </div>

</body>

</html>