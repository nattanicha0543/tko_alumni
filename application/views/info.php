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

<body>

  <div class="container mt-3">
    <form action="<?php echo site_url('Profile/info') ?>" method="POST">
      <form class="needs-validation" novalidate>
        <div class="container" style="color: blue;">
          <center>
            <h3>ข้อมูลส่วนตัว</h3>
          </center>
        </div>
        <br>
        <div class="form-row">
          <div class="form-group col-md-2">
            <label for="title">คำนำหน้า</label>
            <select id="title1" class="form-control" name="title1" required>
              <option selected>นาย</option>
              <option>นาง</option>
              <option>นางสาว</option>
            </select>
          </div>
          <div class="form-group col-md-5">
            <label for="fname">ชื่อ</label>
            <input type="text" class="form-control" id="fname" placeholder="ชื่อ(ภาษาไทย)" name="fname" required>
          </div>
          <div class="form-group col-md-5">
            <label for="lname">นามสกุล</label>
            <input type="text" class="form-control" id="lname" placeholder="นามสกุล(ภาษาไทย)" name="lname" required>
          </div>
        </div>

        <div class="form-group">
          <label for="idcard">เลขบัตรประชาชน</label>
          <input type="text" class="form-control" id="idcard" placeholder="x-xxxx-xxx-xx-xx-x" name="idcard" maxlength="13" required>
        </div>
        <div class="form-row">

          <div class="form-group">
            <label for="select-sex">เพศ</label><br>
            <div class="custom-control custom-radio custom-control-inline">
              <input type="radio" id="customRadioInline1" name="sex" class="custom-control-input" value="ชาย" required>
              <label class="custom-control-label" for="customRadioInline1">ชาย</label>
            </div>
            <div class="custom-control custom-radio custom-control-inline">
              <input type="radio" id="customRadioInline2" name="sex" class="custom-control-input" value="หญิง" required>
              <label class="custom-control-label" for="customRadioInline2">หญิง</label>
            </div>
          </div>

          <div class="form-group col-md-4">
            <label for="date">วัน/เดือน/ปี เกิด</label>
            <input type="date" class="form-control" id="date" name="date" required>
          </div>
          <div class="form-group col-md-6">
            <label for="job">อาชีพ/ตำแหน่งงาน</label>
            <input type="text" class="form-control" id="job" name="job" placeholder="อาชีพ/ตำแหน่งงาน" required>
          </div>

        </div>

        <div class="form-group">
          <label for="Tel">เบอร์โทรศัพท์</label>
          <input type="text" class="form-control" id="Tel" name="tel" placeholder="xx-xxx-xxxx" maxlength="10" required>

        </div>
        <br>

        <button class="btn btn-primary" type="submit">ยืนยัน</button>
      </form>
    </form>
  </div>


  <script>
    // Example starter JavaScript for disabling form submissions if there are invalid fields
    (function() {
      'use strict';
      window.addEventListener('load', function() {
        // Fetch all the forms we want to apply custom Bootstrap validation styles to
        var forms = document.getElementsByClassName('needs-validation');
        // Loop over them and prevent submission
        var validation = Array.prototype.filter.call(forms, function(form) {
          form.addEventListener('submit', function(event) {
            if (form.checkValidity() === false) {
              event.preventDefault();
              event.stopPropagation();
            }
            form.classList.add('was-validated');
          }, false);
        });
      }, false);
    })();
  </script>

</body>

</html>