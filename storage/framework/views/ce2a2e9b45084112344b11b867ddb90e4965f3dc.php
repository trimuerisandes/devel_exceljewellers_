<?php
  if (session('cart.shopping_cart')) {
    $count = count(session('cart.shopping_cart'));
  }else{
    $count = 0;
  }
?>

<span class="cart-num">CART (<span class="cart-num"><?php echo e($count); ?></span>)</span><?php /**PATH /Users/trimuerisandes/PhpstormProjects/devel_exceljewellers/resources/views/include/cart-number.blade.php ENDPATH**/ ?>