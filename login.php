<!-- registration -> get/post php -> database  -->


    <?php include("includes/head.php"); ?>


<!-- <?php
//check if a user is logged in
 if(isset($_COOKIE['user']) && ($_COOKIE['user'] != '')){
   //thus means you are logged in!
   echo "<p>You are logged in!</p>";
 } else {
   echo "<p>You need to log in</p>";
 }
 var_dump($_COOKIE);
?> -->



    <div class="container">
      <div class="row">
        <div class="col-6">
          <form action="process/login.php" method="POST">



            <div class="form-group">
              <label for="email">Email address</label>
              <input type="email" class="form-control" id="email" name="email" aria-describedby="emailHelp" placeholder="Enter email">
              <small id="emailHelp" class="form-text text-muted"></small>
            </div>
            <div class="form-group">
              <label for="password">Password</label>
              <input type="password" class="form-control" id="password" name="password" placeholder="Password">
            </div>

            <button type="submit" class="btn btn-primary">Submit</button>
          </form>
        </div>
      </div>
    </div>
    <?php include("includes/scripts.php"); ?>
