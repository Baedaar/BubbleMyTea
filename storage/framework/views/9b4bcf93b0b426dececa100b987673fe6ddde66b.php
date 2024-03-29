<?php $__env->startSection('main'); ?>

<form class="form-inscription" method="POST" action="<?php echo e(route('users.store')); ?>">
	<fieldset class="sign-form">
		<div class="sign-form-group">
			<label class="control-label col-sm-2" for="nom">Nom</label>
			<div class="col-sm-10">
				<input type="string" class="form-control" id="email" name="nom">
			</div>
		</div>
		
		<div class="sign-form-group">
			<label class="control-label col-sm-2" for="Prenom">Prenom</label>
			<div class="col-sm-10">
				<input type="string" class="form-control" id="prenom" name="prenom">
			</div>
		</div>
		
		<div class="sign-form-group">
			<label class="control-label col-sm-2" for="email">Email</label>
			<div class="col-sm-10">
				<input type="email" class="form-control" id="email" placeholder="example@xyz.com" name="email">
			</div>
		</div>
	
		<div class="sign-form-group">
			<label class="control-label col-sm-2" for="password">Mot de Passe</label>
			<div class="col-sm-10">
				<input type="password" class="form-control" id="pwd" name="password">
			</div>
		</div>
	
		<div class="sign-form-group">
			<label class="control-label col-sm-2" for="pwdd">Confirmation du mot de passe</label>
			<div class="col-sm-10">
				<input type="password" class="form-control" id="pwdd" placeholder="Oui, encore le Mot de Passe..." name="pwdd">
			</div>
		</div>
		
		<div class="sign-form-group">        
			<div class="col-sm-offset-2 col-sm-10">
				<button type="sign-up" class="btn btn-default">S'inscrire</button>
			</div>
		</div>
	</fieldset>
</form>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.default', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/bedoscalibros/mybubble/group-970968/bubbleMyTea/resources/views/inscription.blade.php ENDPATH**/ ?>