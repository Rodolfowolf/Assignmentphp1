<!doctype html>
<html lang="en">
  <head>
    <title>CRUD in OOP PHP | Add Our Data</title>
    <link rel="stylesheet" href="./css/style.css">
  </head>
  <body>
    <main>
    <?php
    include_once ('crud.php');
    include_once ('validate.php');

    $crud = new crud();
    $validate = new validate();
    $fname = $_POST['submit'];
    if(isset($_POST['Submit'])){
      $fname = $_POST['fname'];
			$lname = $_POST['lname'];				
      $email = $_POST['email'];
      $homepage = $_POST['homepage'];
      $password = $_POST['password'];
      $description = $_POST['description'];

      $msg = $validate->checkEmpty($_POST, array('fname', 'lname', 'email', 'homepage', 'password'));
      $checkEmail = $validate->validEmail($_POST['email']);
      $checkHomepage = $validate->validHomepage($_POST['homepage']);
      echo "<div>";
      if($msg != null){
        echo '<p>'.$msg.'</p>';
        echo "<a id='button' href='javascript:self.history.back();'> Go Back</a>";
      }elseif(!$checkEmail){
        echo '<p> Please include a valid e-mail</p>';
        echo "<a id='button' href='javascript:self.history.back();'> Go Back</a>";
      }elseif(!$checkHomepage){
        echo '<p> Please include a valid Homepage</p>';
        echo "<a id='button' href='javascript:self.history.back();'> Go Back</a>";
      }else{
        $result = $crud->execute("INSERT INTO Student (fname, lname, email, homepage, password, description) VALUES ('$fname', '$lname', '$email', '$homepage', '$password', '$description')");
        echo "<p>Data added successfuly.</p>";
        echo "<a id='button' href='view.php'>View Result</a>";
      }
      echo "</div>";
    }
     ?>
    </main>
  </body>
</html>