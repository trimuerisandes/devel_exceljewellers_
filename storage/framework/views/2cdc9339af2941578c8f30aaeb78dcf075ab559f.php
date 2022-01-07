<!DOCTYPE html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">
<head>

	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"    >
    <title><?php echo $__env->yieldContent('page-title'); ?></title>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="canonical" href="https://www.exceljewellers.com/">
    <meta name="description" content="Special Moments Start with Excel Jewellers, and here’s why…
    Not only are we known throughout the lower mainland for our unique custom jewellery designs by Thom Huynh, but we have now added some of the finest international">
    <meta name="keywords" content="HTML,CSS,XML,JavaScript">
    <meta name="robots" content="index, follow">
    <meta name="author" content="Brandon Huynh">
    <link rel="stylesheet" type="text/css" href="<?php echo e(URL::asset('css/welcome.css?='.time().'')); ?>">
    <link rel="stylesheet" type="text/css" href="<?php echo e(URL::asset('css/carousel.css?='.time().'')); ?>">



    <!-- CSRF Token -->
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">
	<!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
	<!-- Styles -->

    <link href="<?php echo e(asset('css/rating.css')); ?>" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-2.2.0.min.js" type="text/javascript"></script>
    <link href="<?php echo e(asset('css/slick-theme.css')); ?>" rel="stylesheet">
    <link href="<?php echo e(asset('css/slick.css')); ?>" rel="stylesheet">
    <link href="<?php echo e(asset('css/general.css?'.time().'')); ?>" rel="stylesheet">
    <script src="<?php echo e(asset('js/slick.js')); ?>" type="text/javascript"></script>
    <link rel="stylesheet" href="https://unpkg.com/flickity@2/dist/flickity.min.css">
    <script src="https://unpkg.com/flickity@2/dist/flickity.pkgd.min.js"></script>
    <script src="https://cdn.polyfill.io/v2/polyfill.min.js"></script>
    <link rel='shortcut icon' type='image/x-icon' href="<?php echo e(asset('storage/image/page_img/icon.png')); ?>" />


    <link rel="stylesheet" type="text/css" href="<?php echo e(URL::asset('css/bootstrap.min.css?='.time().'')); ?>">

<?php echo $__env->yieldContent('include'); ?>
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-123725715-3"></script>
    <script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());
    
    gtag('config', 'UA-123725715-3');
    </script>
    <script defer src="https://connect.podium.com/widget.js#API_TOKEN=a8f93567-4a3e-4b10-b7f1-4002da972e4b" id="podium-widget" data-api-token="a8f93567-4a3e-4b10-b7f1-4002da972e4b"></script>
    <!-- Pinterest Tag -->
    <script>
    !function(e){if(!window.pintrk){window.pintrk = function () {
    window.pintrk.queue.push(Array.prototype.slice.call(arguments))};var
      n=window.pintrk;n.queue=[],n.version="3.0";var
      t=document.createElement("script");t.async=!0,t.src=e;var
      r=document.getElementsByTagName("script")[0];
      r.parentNode.insertBefore(t,r)}}("https://s.pinimg.com/ct/core.js");
    pintrk('load', '2614076105532', {em: '<user_email_address>'});
    pintrk('page');
    </script>
    <noscript>
    <img height="1" width="1" style="display:none;" alt=""
      src="https://ct.pinterest.com/v3/?event=init&tid=2614076105532&pd[em]=<hashed_email_address>&noscript=1" />
    </noscript>
    <!-- end Pinterest Tag -->
</head>
<body>
    <?php echo $__env->make('include.loading', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
	<header>
		<?php echo $__env->make('include.nav', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
	</header>
	<main>
		<?php echo $__env->yieldContent('main'); ?>
	</main>
	<footer>
		<?php echo $__env->make('include.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
	</footer>
	<?php echo $__env->make('include.alert', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <?php echo $__env->make('include.popup', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
</body>
</html>
<script type="text/javascript" src="<?php echo e(asset('js/general.js?'.time().'')); ?>"></script>
<script type="text/javascript" src="<?php echo e(asset('js/bootstrap.bundle.min.js?'.time().'')); ?>"></script>
<script>
pintrk('track', 'pagevisit');
</script>
<!-- <script type="text/javascript" src="<?php echo e(asset('js/loading.js?'.time().'')); ?>"></script> --><?php /**PATH /Users/trimuerisandes/PhpstormProjects/devel_exceljewellers/resources/views/layouts/welcome.blade.php ENDPATH**/ ?>