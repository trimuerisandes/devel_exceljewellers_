$(document).ready(function(){$(".remove-btn").click(function(){$.ajax({url:"remove-fav",headers:{"X-CSRF-TOKEN":$('meta[name="csrf-token"]').attr("content")},method:"POST",data:{sku:$(this).attr("id")},success:function(e){popup("red","Removed From Wishlist"),location.reload()},error:function(e,t,s){popup("error")}})}),$(".style-img").click(function(e){$(this).css({border:"solid 1px #7df048"}).addClass("selected_style"),$(".style-img").not(this).css({border:"solid 1px #e6e6e6"}).removeClass("selected_style"),$(".main-image").attr("src",$(this).attr("src")),$(this).parent().parent().prev().children(".style-text").text($(this).attr("id"))})});