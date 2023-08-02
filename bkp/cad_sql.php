<!DOCTYPE html>
<html lang="en">
    <head>
    <title>Assignment 1</title>
		<meta charset="utf-8" />
    <link rel="stylesheet" href="Css/style.css">
    </head>
        <body>
                <div id='divheader'>
                <img id=banner src='img/header2.jpeg' alt='Banner'>
                <?php
                require_once('menu.php');
                ?>
                <img id=logo src='img/logo.png' alt='Logo'>
				        </div>

                <form method="post" action='add.php'>
                     <h2>Create User</h2>
                     <div>
					       </div><div><label for="input1">First Name</label>
            
					      </div><div><input type="text" name="fname" id="input1">
                         
                         </div><div><label for="input1">Last Name</label>
                         
						     </div><div><input type="text" name="lname" id="input2">
                         
                         </div><div><label for="input1">Email</label>
                         
						     </div><div><input type="email" name="email" id="input3">
                         
                         </div><div><label for="input1">Homepage URL</label>
                         
						     </div><div><input type="text" name="homepage" id="input4">
                         
                         </div><div><label for="input1">Record password</label>
                         
						      </div><div><input type="password" name="password" id="input5">
                         
                         </div><div><label for="input1">Security password</label>
                         
						     </div><div><input type="password" name="spassword" id="input6">

                         </div><div><label for="input1">Description</label>
                
                            <textarea name="description" id="input7" cols="50" rows="5"></textarea>
                        <input type='reset' value='Reset'><input type="submit" name="Submit" value="Include">
                    </div>
                  </form>
                 <?php
                    require_once('database.php');
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
                </div>
          <footer id='divfooter'>
            <?php
              require_once('footer.php');
            ?>
          </footer>    
        </body>
</html>