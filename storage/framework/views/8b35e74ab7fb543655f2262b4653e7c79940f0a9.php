<?php $__env->startSection('include'); ?>

<link rel="stylesheet" type="text/css" href="<?php echo e(URL::asset('css/home.css?'.time().'')); ?>">

<?php $__env->stopSection(); ?>

<?php $__env->startSection('main'); ?>
<div class="error-container">
    <div class="error-msg">Oops. This Page Cannot Be Found! 404</div>
    <hr>
    <div class="helpful-container">
        <div>Helpful Links</div>
        <ul>
            <li><a href="<?php echo e(url('/')); ?>">Home</a></li>
            <li><a href="<?php echo e(url('/engagement-ring')); ?>">Engagement Rings</a></li>
            <li><a href="<?php echo e(url('/wedding-band')); ?>">Wedding Bands</a></li>
            <li><a href="<?php echo e(url('/fine-jewellery')); ?>">Fine Jewellery</a></li>
            <li><a href="<?php echo e(url('/diamonds')); ?>">Diamonds</a></li>
        </ul>
    </div>
</div>

<style type="text/css">
    
    .error-container{
        max-width: 1000px;
        margin: auto;
        padding: 10px;
    }

    .error-msg{
        font-weight: bold;
        color:#d60d8c;
        font-size: 40px;
        text-align: center;
    }

    .helpful-container{
        text-align: center;
        padding: 30px;
    }

    .helpful-container div{
        color: #d60d8c;
        font-size: 20px;
    }

    .error-container ul{
        list-style: none;
        padding: 0px;
    }

    .error-container ul li{
        padding: 5px 0px;
        transition: .3s;
    }

    .error-container ul li:hover{
        color: #d60d8c;
    }

</style>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.web', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/trimuerisandes/PhpstormProjects/devel_exceljewellers/resources/views/error.blade.php ENDPATH**/ ?>