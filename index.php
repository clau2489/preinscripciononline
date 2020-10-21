<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<!-- Head --> 
<?php include("layout/head.php"); ?>

<?php include("layout/nav.php"); ?>

<body id="page-top">
	<section class="content-section" id="about">
		<div class="container">
			<div class="row text-center">
				<div class="offset-md-3 col-md-6">
					<img src="assets/img/marcospazdigital.png" class="text-center" width="250px;">
				</div>			
			</div>			
			<div class="row">
				<div class="offset-md-4 col-md-4">
					<div class="alert alert-success">
						<form role="form" name="login" action="php/login.php" method="post">
						  <div class="form-group">
						    <label>Nombre de usuario o email</label>
						    <input type="text" class="form-control" id="username" name="username" placeholder="Nombre de usuario">
						  </div>
						  <div class="form-group">
						    <label>Contrase&ntilde;a</label>
						    <input type="password" class="form-control" id="password" name="password" placeholder="Contrase&ntilde;a">
						  </div>

						  <button type="submit" class="btn btn-success btn-block">Acceder</button>
						</form>					
					</div>
				</div>			
			</div>
		</div>
	</section>
	<?php include("layout/footer.php"); ?>

	<?php include("layout/script.php"); ?>	
</body>

</html>