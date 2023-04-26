<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <title>Basic CRUD PHP PDO by devbanban.com 2021</title>
  </head>
  <body>
    <div class="container">
      <div class="row">
        <div class="col-md-4"> <br> 
          <h4>ฟอร์มแก้ไขข้อมูล</h4>
          <?php
            // Get the id parameter from URL

            $name = $_GET['name'];
            $surname = $_GET['surname'];
            $id = $_GET['id'];
            
          ?>
          <form action="formEdit_db.php" method="post">
            <input type="hidden" name="id" value="<?php echo $id; ?>">
            <div class="mb-1">
              <label for="name" class="col-sm-2 col-form-label"> ชื่อ :  </label>
                <div class="col-sm-10">
                <input type="text" name="name" class="form-control" required minlength="3" placeholder="ชื่อ" value="<?php echo $name; ?>">
              </div>
              </div>
              <div class="mb-1">
                <label for="surname" class="col-sm-2 col-form-label"> นามสกุล :  </label>
                <div class="col-sm-10">
                  <input type="text" name="surname" class="form-control" required minlength="3" placeholder="นามสกุล" value="<?php echo $surname; ?>">
                </div>
                </div>
                <button type="submit" class="btn btn-primary">แก้ไขข้อมูล</button>
              </form>
            </div>
          </div>
        </div>
      </body>
    </html>
