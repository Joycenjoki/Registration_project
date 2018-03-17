<html>
<head>
<title>User Registration Using Php and Mysql</title>
</head>
<body>
     <div class="content">
         <h2>Home Page</h2>
          <?php if(isset($_SESSION['success'])): ?>
            <div class="error success">
              <h3>
              <?php
               echo $_SESSION['success'];
               unset ($_SESSION['success']);
               ?>
               </h3>
            </div>
             <?php endif ?>
   
         <?php if(isset($_SESSION['success'])): ?>
         <p>You Just Logged In <strong><?php echo $_SESSION['username'];?></strong></p>
         <p><a href="index.php" style="color:red;">Log Out</a></p>
         <?php endif ?>
     </div>
</body>
</html>