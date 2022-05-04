<?php $__env->startSection('mainsec'); ?>

<div class="entete">
	<p class="entete-title">Liste des articles</p>
	<button type="sign-up" class="entete-button add">Ajouter</button> 
</div>

<fieldset class = "image">
	<div class="gallery">
	<label for="image_produit">Choississez une image:</label>
		<input type="file"
       	accept="image/png, image/jpeg">
           <div><button type="submit" method="get" action="#" class="form-connexion">Valider</button></div>
		
	<div class="desc">description of the image</div> 
		<a class = "plus" href="">+</a>
	
	<h5>Prix</h5>
		
		<h5 class = " edit">
			<a href="+">Modifier</a>
		</h5>
	</div>
</fieldset>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/bedoscalibros/mybubble/group-970968/bubbleMyTea/resources/views/admin.blade.php ENDPATH**/ ?>