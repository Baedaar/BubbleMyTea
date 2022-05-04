<?php $__env->startSection('mainsec'); ?>

<?php

/* $bdd = new PDO ('mysql:host=localhost;dbname=bubble','root','');
$requete = $bdd->query('SELECT * FROM users WHERE id="1"');

while ($data=$requete->fetch()){

    echo $data['nom'];
    echo $data['prenom'];
    echo $data['email'];

}{{ route('users.show') }}
$requete->closeCursor(); */

?>

<form method="GET" action="#" class="form-connexion">
	<fieldset>
		<div class="form-group">
			<label class="control-label col-sm-2" for="prenom">Prenom</label>
			<br>
			<div class="col-sm-10">
				<input type="text" class="form-control" id="prenom" name="prenom">
			</div>
		</div>
		
		<div class="form-group">
			<label class="control-label col-sm-2" for="nom">Nom</label>
			<br>
			<div class="col-sm-10">          
				<input type="text" class="form-control" id="nom" name="nom">
			</div>
		</div>
		
		<div class="form-group">
			<label class="control-label col-sm-2" for="mail">email</label>
			<br>
			<div class="col-sm-10">          
				<input type="email" class="form-control" id="mail" placeholder="example@xyz.com" name="mail">
			</div>
		</div>
		
		<div class="form-group">
			<label class="control-label col-sm-2" for="password">Mot de Passe</label>
			<br>
			<div class="col-sm-10">          
				<input type="password" class="form-control" id="password" name="password">
			</div>
		</div>
		
		<div class="form-group">
			<label class="control-label col-sm-2" for="password">Confirmation du mot de Passe</label>
			<br>
			<div class="col-sm-10">          
				<input type="password" class="form-control" id="password" placeholder="Oui oui, encore le mot de passe..." name="password">
			</div>
		</div>
	
		<div class="form-group">        
			<div class="col-sm-offset-2 col-sm-10">
			</div>
		</div>
	
		<div class="form-group">        
			<div class="button-container">
				<button type="submit">Modifier</button>
			</div>
		</div>
	</fieldset>
</form>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/bedoscalibros/mybubble/group-970968/bubbleMyTea/resources/views/profile.blade.php ENDPATH**/ ?>