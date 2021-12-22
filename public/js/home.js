$(document).ready(function(){$(".adding").click(function(){$("#add_address").children("select[name=country]").find(":selected").text()}),$("select[name=country]").change(function(){$val=$(this).children("option:selected").attr("id"),$select=$(this).parent().next().children(),$.getJSON("../storage/json/country.json",function(e){var t;for($spr=e[$val].states,$select.empty().append('<select name="spr" class="spr-select"></select>'),t=0;t<$spr.length;++t)$(".spr-select").append('<option value="'+$spr[t]+'">'+$spr[t]+"</option>")})}),$(".add_address_btn").click(function(){$.ajax({url:"../add_address",headers:{"X-CSRF-TOKEN":$('meta[name="csrf-token"]').attr("content")},method:"POST",data:{contact_name:$("#adding_address input[name=contact_name]").val(),phone_number:$("#adding_address input[name=phone_number]").val(),address:$("#adding_address input[name=address]").val(),unit:$("#adding_address input[name=unit]").val(),country:$("#adding_address select[name=country]").val(),spr:$("#adding_address .spr-select").val(),city:$("#adding_address input[name=city]").val(),zipcode:$("#adding_address input[name=zipcode]").val()},success:function(e){popup("green","Address Added"),$(".modal").modal("hide"),location.reload()},error:function(e,t,n){popup("error")}})}),$(".address_delete").click(function(){$.ajax({url:"../delete_address",headers:{"X-CSRF-TOKEN":$('meta[name="csrf-token"]').attr("content")},method:"POST",data:{id:$(this).attr("id")},success:function(e){popup("red","Address Deleted"),location.reload()},error:function(e,t,n){popup("error")}})}),$(".address_edit").click(function(){var n=$(this).attr("id"),e=$("#"+n+".border-address").children("span:eq(6)").text();$("#"+n+".border-address").children("span:eq(3)").text();$('#editModalCenter input[name="contact_name"]').val($("#"+n+".border-address").children("span:eq(0)").text()),$('#editModalCenter input[name="phone_number"]').val($("#"+n+".border-address").children("span:eq(5)").text()),$('#editModalCenter input[name="address"]').val($("#"+n+".border-address").children("span:eq(1)").text()),$('#editModalCenter input[name="unit"]').val($("#"+n+".border-address").children("span:eq(0)").text()),$('#editModalCenter select[name="country"]').val($("#"+n+".border-address").children("span:eq(6)").text()),$('#editModalCenter input[name="city"]').val($("#"+n+".border-address").children("span:eq(2)").text()),$('#editModalCenter input[name="zipcode"]').val($("#"+n+".border-address").children("span:eq(4)").text()),$(".save_change").attr("id",n),$val=$('.edit_country option[value="'+e+'"]').attr("id"),$.getJSON("../storage/json/country.json",function(e){if($spr=e[$val].states,0==$spr.length)$("#editModalCenter .spr").empty().append('<input class="spr-select" type="text" name="spr" placeholder="State/Province/Region">'),$('#editModalCenter input[name="spr"]').val($("#"+n+".border-address").children("span:eq(3)").text());else{var t;for($("#editModalCenter .spr").empty().append('<select name="spr" class="spr-select"></select>'),t=0;t<$spr.length;++t)$(".spr-select").append('<option value="'+$spr[t]+'">'+$spr[t]+"</option>");$('#editModalCenter select[name="spr"]').val($("#"+n+".border-address").children("span:eq(3)").text())}})}),$(".save_change").click(function(){$.ajax({url:"../edit_address",headers:{"X-CSRF-TOKEN":$('meta[name="csrf-token"]').attr("content")},method:"POST",data:{id:$(this).attr("id"),contact_name:$("#editModalCenter input[name=contact_name]").val(),phone_number:$("#editModalCenter input[name=phone_number]").val(),address:$("#editModalCenter input[name=address]").val(),unit:$("#editModalCenter input[name=unit]").val(),country:$("#editModalCenter select[name=country]").val(),spr:$("#editModalCenter .spr-select").val(),city:$("#editModalCenter input[name=city]").val(),zipcode:$("#editModalCenter input[name=zipcode]").val()},success:function(e){popup("green","Address Updated"),$(".modal").modal("hide"),location.reload()},error:function(e,t,n){popup("error")}})})});