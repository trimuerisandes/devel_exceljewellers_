$(document).ready(function(){$.urlParam=function(a){var t=new RegExp("[?&]"+a+"=([^&#]*)").exec(window.location.href);return null==t?null:decodeURI(t[1])||0};var a,t=1;$(window).scroll(function(){if($(window).scrollTop()+$(window).height()>=$("footer").offset().top){var e=$(".wedding-band-inner").attr("data-count");clearTimeout(a),a=setTimeout(function(){t++,!$(".loading-more").length&&24*t-24<e&&$('<div class="loading-more">Loading More...</div>').insertAfter("#wedding-band"),24*t-24<e&&$.ajax({url:"wedding-band",headers:{"X-CSRF-TOKEN":$('meta[name="csrf-token"]').attr("content")},method:"POST",data:{metal:$.urlParam("metal"),brand:$.urlParam("brand"),color:$.urlParam("color"),category:$.urlParam("category"),video:$.urlParam("video"),sort:$.urlParam("sort"),page:t},beforeSend:function(){},success:function(a){$("#wedding-band-container").append($(a)),$("#wedding-band .ajax-img").on("load",function(){$(this).prev().fadeOut(0)}),$(".loading-more").remove()},error:function(a,t,e){}})},50)}}),$(document).mouseup(function(a){$(event.target).hasClass("filter-name")||0===$(a.target).closest(".filter-dropdown-outer").length&&$(".filter-dropdown-outer").slideUp("fast")}),$(".filter-name").click(function(){$(this).next().slideToggle(),$(".filter-dropdown-outer").not($(this).next()).slideUp()}),$(".ajax-img").one("load",function(){$(this).prev().fadeOut(0)}).each(function(){this.complete&&($(this).load(),$(this).prev().fadeOut(0))}),$(document).on("click",".alt-m",function(a){a.preventDefault(),$(this).parent().prev().children(".ajax-img").attr("src",$(this).attr("data-img")),$(this).parent().next().children(".wedding-band-text-title").text($(this).attr("data-name")),$(this).parent().next().children(".wedding-band-text-price").text("$"+$(this).attr("data-price")),$(this).parents("a").attr("href",$(this).attr("data-link"))}),$("#"+$.urlParam("video")).css({background:"#d60d8c",color:"white"}),$("#"+$.urlParam("video")).parent("a").attr("param-value",""),$(".filter-dropdown > a[param-name], .filter-inner-dropdown > a[param-name]").each(function(){var a=new URL(window.location.href);if($(this).attr("param-value").includes("{}")){value=$(this).attr("param-value").split("{}"),names=$(this).attr("param-name").split("{}");for(var t=0;t<value.length;t++)a.searchParams.set(names[t],value[t])}else a.searchParams.set($(this).attr("param-name"),$(this).attr("param-value"));$(this).attr("href",a.toString())}),$('a[param-value="'+$.urlParam("sort")+'"] .sort-by-case').addClass("selected"),$('a[param-value="'+$.urlParam("metal")+"{}"+$.urlParam("color")+'"] .metal-case').addClass("selected")});