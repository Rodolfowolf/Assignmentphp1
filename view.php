<?php
	require_once('database.php');
	$res = $database->read();
?>
<!DOCTYPE html>
<html>
	<head>
		<link rel="stylesheet" href="Css/style.css">
	</head>
		<body>
			<div id='divheader'>
				<img src='img/header2.jpeg'>
				<?php
	            require_once('menu.php');
                ?>
                <img id=logo src='img/logo.png'>
			</div>
			<main>
				<div id='divmain'>
		        		<table id='table'>
			     			<tr>
				  				<th>ID</th>
				  				<th>Full Name</th>
				  				<th>Email</th>
				  				<th>Homepage</th>
				 				<th>Description</th>
			     			</tr>
							<?php
								while($r = mysqli_fetch_assoc($res)){
							?>
							<tr>
								<td><?php echo $r['id']; ?></td>
								<td><?php echo $r['fname'] . " " . $r['lname']; ?></td>
								<td><?php echo $r['email'] ?></td>
								<td><?php echo $r['homepage'] ?></td>
								<td><?php echo $r['description'] ?></td>
							</tr>
							<?php
							}
							?>
						</table>
				</div>
     		</main>
			<footer>
				<div id='divfooter'>
       			<?php
	  			    require_once('footer.php');
       			?>
				</div>
      		</footer> 
   		</body>
</html>