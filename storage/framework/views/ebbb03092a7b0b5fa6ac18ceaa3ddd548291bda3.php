<!DOCTYPE html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">
<head>
	<title><?php echo $__env->yieldContent('page-title'); ?></title>
  <?php echo $__env->yieldContent('canonical'); ?>
  <meta name="description" content="<?php echo $__env->yieldContent('page-description'); ?>">
  <meta name="keywords" content="HTML,CSS,XML,JavaScript">
  <meta name="robots" content="index, follow">
  <meta name="author" content="Brandon Huynh">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">



	<!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
	<!-- Styles -->
    <link href="<?php echo e(asset('css/app.css')); ?>" rel="stylesheet">

    <script src="https://code.jquery.com/jquery-2.2.0.min.js" type="text/javascript"></script>

    <link href="<?php echo e(asset('css/slick-theme.css')); ?>" rel="stylesheet">
    <link href="<?php echo e(asset('css/slick.css')); ?>" rel="stylesheet">
    <link href="<?php echo e(asset('css/general.css?'.time().'')); ?>" rel="stylesheet">
    <script src="<?php echo e(asset('js/slick.js')); ?>" type="text/javascript"></script>
    <link rel="stylesheet" href="https://unpkg.com/flickity@2/dist/flickity.min.css">
    <script src="https://unpkg.com/flickity@2/dist/flickity.pkgd.min.js"></script>
    <link rel='shortcut icon' type='image/x-icon' href="<?php echo e(asset('storage/image/page_img/icon.png')); ?>" />
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
    <div class="service-container">
      <h1 class="service-title"><?php echo $__env->yieldContent('title'); ?></h1>
      <h2 class="service-sub-title"><?php echo $__env->yieldContent('sub-title'); ?></h2>
		<?php echo $__env->yieldContent('main'); ?>
    </div>
	</main>
	<footer>
		<?php echo $__env->make('include.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
	</footer>
	<?php echo $__env->make('include.alert', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
</body>
</html>
<style type="text/css">
  
  .service-container{
    max-width: 1000px;
    margin: auto;
    padding: 10px;
  }

  .service-container h1{
    margin: 30px 0px;
    padding: 10px 0px;
    border-bottom: solid 1px #d60d8c;
  }

  .service-container h2{
    padding: 10px 0px;
  }


  .service-container h1,.service-container h2,.service-container h3,.service-container h4{
    color: #d60d8c;
  }

</style>
<script type="text/javascript" src="<?php echo e(asset('js/general.js?'.time().'')); ?>"></script>
<script type="text/javascript" src="<?php echo e(asset('js/loading.js?'.time().'')); ?>"></script>
<script>
pintrk('track', 'pagevisit');
</script><?php /**PATH /Users/trimuerisandes/PhpstormProjects/devel_exceljewellers/resources/views/layouts/service.blade.php ENDPATH**/ ?>