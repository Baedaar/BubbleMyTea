<?php $__env->startSection('main'); ?>

<form method="POST" action="#" class="form-connexion">
	<fieldset>
		<div class="form-group">
			<label class="control-label col-sm-2" for="email">Email</label>
			<br>
			<div class="col-sm-10">
				<input type="email" class="form-control" id="email" placeholder="Entrer Email" name="email">
			</div>
		</div>
		
		<div class="form-group">
			<label class="control-label col-sm-2" for="password">Mot de Passe</label>
			<br>
			<div class="col-sm-10">          
				<input type="password" class="form-control" id="password" placeholder="Entrer Mot de Passe" name="password">
			</div>
		</div>
	
		<div class="form-group">        
			<div class="col-sm-offset-2 col-sm-10">
			</div>
		</div>
	
		<div class="form-group">        
			<div class="button-container">
				<button type="submit">Se Connecter</button>
				<br>
				<a href="inscription"><button type="button" class="sign">S'Inscrire</button></a>
			</div>
		</div>
	</fieldset>
</form>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.default', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/bedoscalibros/mybubble/group-970968/bubbleMyTea/resources/views/connexion.blade.php ENDPATH**/ ?>