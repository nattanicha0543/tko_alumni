<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>

<style>
    .card{
    margin-right:auto;
    margin-left: auto;
    margin-top: auto;
    width: 100%;
    }
    </style>
<body>
<div class="container">
    <div class="card" style="width: 18rem;">
    <div class="card-body">
        <ul>
            <h1 class="card-text">ข้อมูลส่วนตัว</h1>
            <p class="card-text"> <b>คำนำหน้า</b> <?php echo $info['title1'] ?> </p>
            <p class="card-text"> <b>ชื่อจริง</b> <?php echo $info['fname'] ?> </p>
            <p class="card-text"> <b>นามสกุล</b> <?php echo $info['lname'] ?> </p>
            <p class="card-text"> <b>เลขบัตรประชาชน</b> <?php echo $info['idcard'] ?> </p>
            <p class="card-text"> <b>เพศ</b> <?php echo $info['sex'] ?> </p>
            <p class="card-text"> <b>วัน/เดือน/ปี เกิด</b> <?php echo $info['date'] ?> </p>
            <p class="card-text"> <b>อาชีพ/ตำแหน่งงาน</b> <?php echo $info['job'] ?> </p>
            <p class="card-text"> <b>เบอร์โทรศัพท์</b> <?php echo $info['Tel'] ?> </p>
            <p class="card-text"> <b>Facebook</b> <?php echo $info['Facebook'] ?> </p>
        </ul>
    </div>

    </div>
</div>
</body>
</html>