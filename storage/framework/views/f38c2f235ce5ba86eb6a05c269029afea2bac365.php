<?php $__env->startSection('main'); ?>

<section class="sidebar">
    <!-- <link href="profil"> -->
    <div class="sidebar-section">
    <a href="inscription"><button class="button1">profil</button></a>
    </div><br>
    
    <!-- <link href="commande"> -->
    <div class="sidebar-section">
    <a href="inscription"><button class="button1">Historique</button></a>
    </div><br>
    
    <!-- <link href="deconnexion"> -->
    <div class="sidebar-section">
    <a href="inscription"><button class="button1">Deconnexion</button></a>
    </div><br>
</section>

<section>
    <?php echo $__env->yieldContent('mainsec'); ?>
</section>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.default', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/bedoscalibros/mybubble/group-970968/bubbleMyTea/resources/views/layout/sidebar.blade.php ENDPATH**/ ?>