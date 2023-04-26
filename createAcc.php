<!DOCTYPE html>
<html>
  <head>
    <title>My Login Page</title>
  </head>
  <body>
    <h1>CREATE</h1>
    <form action="createAcc_db.php" method="post">
            <div class="mb-1">
              <label for="name" class="col-sm-2 col-form-label"> ชื่อ :  </label>
                <div class="col-sm-10">
                <input type="text" name="username" class="form-control" required minlength="3" placeholder="ชื่อ">
              </div>
              </div>
              <div class="mb-1">
                <label for="name" class="col-sm-2 col-form-label"> นามสกุล :  </label>
                <div class="col-sm-10">
                  <input type="text" name="password" class="form-control" required minlength="3" placeholder="นามสกุล">
                </div>
                </div>
                <button type="submit" class="btn btn-primary">เพิ่มข้อมูล</button>
              </form>

  </body>
</html>
