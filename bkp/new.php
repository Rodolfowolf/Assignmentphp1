<!DOCTYPE html>
<html lang="en">
    <head>
    <title>Assignment 2</title>
		<meta charset="utf-8" />
    <link rel="stylesheet" href="Css/style.css">
    </head>
      <body>
        <header>
          <img id=banner src='img/header2.jpeg' alt='Banner'>
          <?php
          require_once('common/menu.php');
          ?>
          <img id=logo src='img/logo.png' alt='Logo'>
        </header>
        <main>
                <form method="post" action='add.php'>
                     <h2>Create User</h2>
                    <label for="input1">First Name</label>
                    <input type="text" name="fname" id="input1">
                    <label for="input1">Last Name</label>
                    <input type="text" name="lname" id="input2">
                    <label for="input1">Email</label>
                    <input type="email" name="email" id="input3">
                    <label for="input1">Homepage URL</label>
                    <input type="text" name="homepage" id="input4">
                    <label for="input1">Record password</label>
                    <input type="password" name="password" id="input5">
                    <label for="input1">Security password</label>
                    <input type="password" name="spassword" id="input6">
                    <label for="input1">Description</label>
                    <textarea name="description" id="input7" cols="50" rows="5"></textarea>
                    <input type='reset' value='Reset'><input type="submit" name="Submit" value="Include">
                </form>
                <?php
                    require_once('common/database.php');
                        if(isset($_POST) & !empty($_POST)){
                            $fname = $_POST['fname'];
                            $lname = $_POST['lname'];
                            $email = $_POST['email'];
                            $homepage = $_POST['password'];
                            $spassword = $_POST['spassword'];
                            $description = $_POST['description'];
                            $res   = $database->create($fname, $lname, $email, $homepage, $password, $description);
                            if($res){
                                echo "<p>Successfully inserted data</p>";
                            }else{
                                echo "<p>Failed to insert data</p>";
                            }
                        }
                ?>
          </main>
      </body>
      <footer>
        here
        <?php
          require_once('common/footer.php');
        ?>
      </footer>    
</html>