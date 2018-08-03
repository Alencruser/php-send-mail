<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Send Email</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
</head>
<body class="container">
	<form method="POST" action="/">
		<div class="form-group">
			<input type="email" class="form-control" id="emai1" placeholder="Votre email" name="email" pattern="[A-Za-z0-9](([_\.\-]?[a-zA-Z0-9]+)*)@([A-Za-z0-9]+)(([_\.\-]?[a-zA-Z0-9]+)*)\.([A-Za-z]{2,})">
		</div>
		<div class="form-group">
			<input type="text" class="form-control" id="object" placeholder="Objet du mail" name="object">
		</div>
		<div class="form-group">
			<textarea max="500" class="form-control" id="message" placeholder="Votre message" name="message"></textarea>
		</div>
		<div class="form-group form-check">
			<input type="checkbox" class="form-check-input" id="exampleCheck1">
			<label class="form-check-label" for="exampleCheck1">Cochez-moi pour valider</label>
		</div>
		<button type="submit" class="btn btn-primary">Submit</button>
	</form>
	<?php 
	try {
		if(strlen($_POST["email"])>1 && strlen($_POST["message"])>1 && strlen($_POST["object"])>1){
			mail($_POST["email"],$_POST["object"],$_POST["message"]);
		}else{
			throw new Exception("Formulaire incomplet");
		}	
	}catch(Exception $e) {
		echo "Erreur : ".$e->getMessage(),"\n";
	}
	?>
	
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>
</html>