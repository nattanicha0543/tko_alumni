<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

<!-- JS, Popper.js, and jQuery -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>

</head>
<body>
    <form action="<?php echo site_url('Work/work') ?>" method="POST">
        <div class="container">
        <div class="container" style="color: blue;">
        <h3>ที่อยู่สถานที่ทำงาน</h3>
        </div><br>
        <div class="form-row">
          <div class="form-group col-md-4">
            <label for="Work-No">บ้านเลขที่</label>
            <input type="text" class="form-control" id="Work-No" name="Work-No">
          </div>

          <div class="form-group col-md-4">
            <label for="Work-Moo">หมู่บ้าน</label>
            <input type="text" class="form-control" id="Moo-work" name="Moo-work">
          </div>
          <div class="form-group col-md-4">
            <label for="Work-road">ถนน</label>
            <input type="text" class="form-control" id="road-work" name="road-work">
          </div>
        </div>
        <div class="form-row">
          <div class="form-group col-md-4">
            <label for="Work-Province">จังหวัด</label>
            <input type="text" class="form-control" id="Province-work" name="Province-work">
          </div>

          <div class="form-group col-md-4">
            <label for="Work-Area">เขต/อำเภอ</label>
            <input type="text" class="form-control" id="Area-work" name="Area-work">
          </div>
          <div class="form-group col-md-4">
            <label for="Work-Sub-area">แขวง/ตำบล</label>
            <input type="text" class="form-control" id="Sub-area-work" name="Sub-area-work">
          </div>
        </div>
        <div class="form-row">
          <div class="form-group col-md-6">
            <label for="Work-Postal Code">รหัสไปรษณีย์</label>
            <input type="text" class="form-control" id="Postal-Code-work" name="Postal-Code-work" maxlength="5">
          </div>
          <div class="form-group col-md-6">
            <label for="Work-Tel">เบอร์โทรศัพท์(ถ้ามี)</label>
            <input type="text" class="form-control" id="Tel-work" name="Tel-work" placeholder="xx-xxx-xxxx" maxlength="10">
          </div>
        </div><button class="btn btn-primary" type="submit">ยืนยัน</button>
        </div> 
        
    </form>
</body>
</html>