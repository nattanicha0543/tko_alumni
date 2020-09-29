<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
   <!-- CSS only -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

<!-- JS, Popper.js, and jQuery -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
<style>
    .card {
        margin-right: auto;
        margin-left: auto;
        margin-top: 15%;
        width: 50%;

    }
</style>
</head>
<body>
<div class="container">
<div class="card" >
  <div class="card-body">
    <ul>
    <h1 class="card-title">ที่อยู่สถานที่ทำงาน</h1>
    <p class="card-text"><b>เลขที่</b> <?php echo $work['Work-No'] ?> </p>
    <p class="card-text"><b> หมู่บ้าน</b><?php echo $work['Moo-work'] ?></p>
    <p class="card-text"><b> ถนน</b><?php echo $work['road-work'] ?></p>
    <p class="card-text"><b> จังหวัด</b><?php echo $work['Province-work'] ?></p>
    <p class="card-text"><b> เขต/อำเภอ</b><?php echo $work['Area-work'] ?></p>
    <p class="card-text"><b> แขวง/ตำบล</b><?php echo $work['Sub-area-work'] ?></p>
    <p class="card-text"><b> รหัสไปรษณีย์</b><?php echo $work['Postal-Code-work'] ?></p>
    <p class="card-text"><b> เบอร์โทรศัพท์</b><?php echo $work['Tel-work'] ?></p>
  </ul>


    
  </div>

</div>
    
</body>
</html>