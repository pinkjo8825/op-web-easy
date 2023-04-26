<!DOCTYPE html>
<html>
  <head>
    <title>My Login Page</title>
  </head>
  <body>
    <h1>Login</h1>
    <form action="login_db.php" method="post">

              <label for="name" class="col-sm-2 col-form-label"> username :  </label>
                <div class="col-sm-10">
                <input type="text" name="username" class="form-control" required minlength="3" placeholder="username">
              </div>
              </div>
              <div class="mb-1">
                <label for="name" class="col-sm-2 col-form-label"> password :  </label>
                <div class="col-sm-10">
                  <input type="password" name="password" class="form-control" required minlength="3" placeholder="password">
                </div>
                </div>
                <button type="submit" class="btn btn-primary">เพิ่มข้อมูล</button>
              </form>
                <a href="createAcc.php"> createAcc</a>

  </body>
</html>
