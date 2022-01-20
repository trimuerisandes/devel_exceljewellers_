<!DOCTYPE html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">
<head>
  <title><?php echo $__env->yieldContent('page-title'); ?></title>
  <?php echo $__env->yieldContent('canonical'); ?>
  <meta name="description" content="<?php echo $__env->yieldContent('page-description'); ?>">

<meta name="keywords" content="HTML,CSS,XML,JavaScript">
<meta name="robots" content="index, follow">
<meta name="author" content="Brandon Huynh">

	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">

	<!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
	<!-- Styles -->
    <link href="<?php echo e(asset('css/app.css')); ?>" rel="stylesheet">

    <script src="https://code.jquery.com/jquery-2.2.0.min.js" type="text/javascript"></script>
    <link rel="stylesheet" type="text/css" href="<?php echo e(URL::asset('css/carousel.css?='.time().'')); ?>">
    <link href="<?php echo e(asset('css/slick-theme.css')); ?>" rel="stylesheet">
    <link href="<?php echo e(asset('css/slick.css')); ?>" rel="stylesheet">
    <link href="<?php echo e(URL::asset('css/general.css?'.time().'')); ?>" rel="stylesheet">
    <script src="<?php echo e(asset('js/slick.js')); ?>" type="text/javascript"></script>
    <link rel="stylesheet" href="https://unpkg.com/flickity@2/dist/flickity.min.css">
    <script src="https://unpkg.com/flickity@2/dist/flickity.pkgd.min.js"></script>
    <script src="https://cdn.polyfill.io/v2/polyfill.min.js"></script>
    <link rel="stylesheet" type="text/css" href="<?php echo e(URL::asset('css/engagement-ring.css?'.time().'')); ?>">
    <script type="text/javascript" src="<?php echo e(URL::asset('js/engagement-ring.js?'.time().'')); ?>"></script>
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
	<header>
		<?php echo $__env->make('include.nav', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
	</header>

	<main>
    <div id="engagement-ring-setting-container">
        
      <h1><?php echo $__env->yieldContent('title'); ?></h1>
      <?php echo $__env->make('include.stage', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
      <?php echo $__env->make('include.eng-filter', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <?php echo csrf_field(); ?>
      <div id="engagement-ring">

        <?php if(count($engagement_rings) > 0): ?>
          <div id="engagement-ring-container">
          <?php
          $i = 0;
          ?>
          <?php $__currentLoopData = $engagement_rings; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $eng): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
          <?php
          $i++
          ?>
          <?php if($i == 1): ?>
            <div class="engagement-ring-inner" data-count="<?php echo e($count); ?>">
          <?php else: ?>
            <div class="engagement-ring-inner">
          <?php endif; ?>
              <a href="<?php echo e(url('/engagement-ring/'.$eng['product']->item_sku)); ?>">
                <div class="ajax-ctn">
                  <?php if($eng['product']->brand == 'Verragio'): ?>
                  <img class="logo-corner" src="<?php echo e(url('storage/image/logo/verragio.png')); ?>">
                  <?php elseif($eng['product']->brand == 'GabrielCo'): ?>
                  <img class="logo-corner" src="<?php echo e(url('storage/image/logo/gabriel.svg')); ?>">
                  <?php elseif($eng['product']->brand == 'Valina'): ?>
                  <img class="logo-corner" src="<?php echo e(url('storage/image/logo/valina.png')); ?>">
                  <?php elseif($eng['product']->brand == 'Romance'): ?>
                  <img class="logo-corner" src="<?php echo e(url('storage/image/logo/romance.png')); ?>">
                  <?php elseif($eng['product']->brand == 'SimonG'): ?>
                  <img class="logo-corner" src="<?php echo e(url('storage/image/logo/simong.png')); ?>">
                  <?php endif; ?>
                  <div class="preloader-ctn">
                    <img class="preloader-img" src="<?php echo e(asset('storage/image/page_img/loader.svg')); ?>">
                  </div>
                  <img class="ajax-img" alt='<?php if($eng["product"]->color == "Platinum"): ?>Platinum <?php else: ?> <?php echo e($eng["product"]->metal); ?> <?php echo e($eng["product"]->color); ?> Gold <?php endif; ?> <?php echo e($eng["product"]->style); ?> <?php echo e($eng["product"]->name); ?>  <?php echo e($eng["product"]->brand); ?> Surrey Vancouver Canada Langley Burnaby Richmond' src="<?php echo e(asset('storage/image/engagement-ring-list/'.$eng['product']->image.'-1.jpg')); ?>">
                </div>

                <div class="colors">

                    <div class="<?php echo e($eng['product']->color); ?>-code alt-m" data-img="<?php echo e(asset('storage/image/engagement-ring-list/'.$eng['product']->image.'-1.jpg')); ?>" data-link="<?php echo e(url('/engagement-ring/'.$eng['product']->item_sku)); ?>" data-name="<?php echo e($eng['product']->name); ?>" data-price="<?php echo e(number_format(\App\Helper\AppHelper::conversion($eng['product']->currency,$eng['product']->price,session('currency')),2)); ?>"></div>


                    <?php $__currentLoopData = $eng['other_color']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $other => $o): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                      <div class="<?php echo e($o->color); ?>-code alt-m" data-img="<?php echo e(asset('storage/image/engagement-ring-list/'.$o->image.'-1.jpg')); ?>" data-link="<?php echo e(url('/engagement-ring/'.$o->item_sku)); ?>" data-name="<?php echo e($o->name); ?>" data-price="<?php echo e(number_format(\App\Helper\AppHelper::conversion($o->currency,$o->price,session('currency')),2)); ?>"></div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>


                </div>


                <?php if($eng['product']->sale_price): ?>
                <div class="sale_label">LIMITED TIME OFFER</div>
                <?php endif; ?>
                <div class="engagement-ring-text">

                  <p class="engagement-ring-text-title"><?php echo e($eng['product']->name); ?></p>
                  <?php if($eng['product']->sale_price): ?>
                  <p><span class="text-sale-price">$<?php echo e(number_format(\App\Helper\AppHelper::conversion($eng['product']->currency,$eng['product']->sale_price,session('currency')),2)); ?></span> <span class="cross-text-price">$<?php echo e(number_format(\App\Helper\AppHelper::conversion($eng['product']->currency,$eng['product']->price,session('currency')),2)); ?></span></p>
                  <?php else: ?>
                  <p class="engagement-ring-text-price">$<?php echo e(number_format(\App\Helper\AppHelper::conversion($eng['product']->currency,$eng['product']->price,session('currency')),2)); ?></p>
                  <?php endif; ?>

                </div>
              </a>
            </div>
          <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
          </div>
        <?php else: ?>
          <div class="no-results">No Results Were Found</div>
        <?php endif; ?>

      </div>
    </div>


	</main>

	<footer>
		<?php echo $__env->make('include.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
	</footer>
	<?php echo $__env->make('include.alert', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
</body>
</html>
<script type="text/javascript" src="<?php echo e(asset('js/general.js?'.time().'')); ?>"></script>
<script>
pintrk('track', 'pagevisit');
</script>
<?php /**PATH /Users/trimuerisandes/PhpstormProjects/devel_exceljewellers/resources/views/layouts/engagement.blade.php ENDPATH**/ ?>