<?php $__env->startSection('include'); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('page-title'); ?>
Contact Us - Excel Jewellers
<?php $__env->stopSection(); ?>

<?php $__env->startSection('page-description'); ?>
Contact us or call us & book your consultation/appointment today at Excel Jewellers Surrey Langley Lower Mainland Burnaby Abbotsford Richmond Coquitlam Canada. 
<?php $__env->stopSection(); ?>


<?php $__env->startSection('canonical'); ?>
<link rel="canonical" href="https://www.exceljewellers.com/contact">
<?php $__env->stopSection(); ?>

<?php $__env->startSection('title'); ?>
  Contact Us
<?php $__env->stopSection(); ?>
<?php $__env->startSection('sub-title'); ?>

<?php $__env->stopSection(); ?>
<?php $__env->startSection('main'); ?>

<?php if($message = Session::get('success')): ?>
<div class="thank-you">Thank You For Contacting Us. We Will Shortly Respond Back</div>
<?php endif; ?>

<?php if($message = Session::get('error')): ?>
<div class="thank-you-error"><?php echo e(Session::get('error')); ?></div>
<?php endif; ?>
<div class="phone-container">
	<div class="phone-container-inner">
		<h4>Guildford</h4>
		<div>604 588 0085</div>
		<div><a href="tel:604-588-0085">Call Now</a></div>
		<div><a href="<?php echo e(url('/location')); ?>">Location</a></div>
	</div>
	<div class="phone-container-inner">
		<h4>Langley</h4>
		<div>604-539-7720</div>
		<div><a href="tel:604-539-7720">Call Now</a></div>
		<div><a href="<?php echo e(url('/location')); ?>">Location</a></div>
	</div>
</div>


<div class="email-us-title">Email Us</div>

<div class="email-container">
	<form action="send-mail" method="POST">
		<?php echo e(csrf_field()); ?>

		<div>
			<input required type="text" name="first" placeholder="First Name">
		</div>
		<div>
			<input required type="text" name="last" placeholder="Last Name">
		</div>
		<div>
			<input required type="email" name="email" placeholder="Email Address">
		</div>
		<div>
			<input required type="number" name="phone" placeholder="Phone Number">
		</div>
		<div>
			<textarea required name="message" placeholder="Message"></textarea>
		</div>
		<div>
			<label>Guildford
			<input type="radio" required value="guilford" name="store">
			</label>
			<label>Langley
			<input type="radio" required value="langley" name="store">
			</label>
		</div>

		<div class="g-recaptcha" data-callback="recaptchaCallback" data-sitekey="<?php echo e(env('GOOGLE_RECAPTCHA_SITE_KEY')); ?>"></div>
	    
	    <div><input class="submit-email" type="submit" value="Submit"></div>

	</form>
</div>

<script src="https://www.google.com/recaptcha/api.js" async defer></script>

<style type="text/css">

	form div{
		padding: 5px;
	}

	form input,form textarea{
		padding:4px;
		resize: none;
	}

	.phone-container{
		display: grid;
		grid-template-columns: 1fr 1fr;
		grid-column-gap:5px;
	}

	label{
		padding: 10px;
	}

	.phone-container-inner a{
		text-decoration: none;
		color: #d60d8c;
	}

	.phone-container-inner{
		border:solid 1px #ededed;
		padding: 15px;
	}

	.email-us-title{
		color: #d60d8c;
	    font-size: 30px;
	    padding: 25px 0px 5px 0px;
	}

	.email-container{
		border:solid 1px #ededed;
		padding: 15px;
		width:100%;
	}

	.email-container input, .email-container textarea{
		width: 100%;
		border:solid 1px #ededed;
	}

	.thank-you{
		background: #d60d8c;
		color: white;
		padding:10px;
		border-radius: 3px;
		margin-bottom: 5px;
		text-align: center;
	}

	.thank-you-error{
		background:#dc3545!important;
		color: white;
		padding:10px;
		border-radius: 3px;
		margin-bottom: 5px;
		text-align: center;
	}

	.submit-email{
		margin-top: 5px;
		background: #d60d8c;
    	color: #fff;
    	padding: 10px 0px;
	}

	.service-title{
		margin-bottom: 0px !important;
	}

</style>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.service', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/trimuerisandes/PhpstormProjects/devel_exceljewellers/resources/views/service/contact-us.blade.php ENDPATH**/ ?>