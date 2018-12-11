<!DOCTYPE html>
<html>
<head>
	<meta charset "utf-8">
	 <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

<meta name="Joe Krensky Test">
<title>TerpChef</title>

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<link rel="stylesheet" type="text/css" href="css/styles.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="shortcut icon" type="image/x-icon" href="img/favicon.png">


<script type="text/javascript">
	$(document).ready(function() {
   
    /* cart code*/
  var itemCount = 0;
    /*Cart Add*/
  $('.add').click(function (){
    itemCount ++;
    $('#itemCount').html(itemCount).css('display', 'block');
  }); 
  /*cart clear*/
  $('.clear').click(function() {
    itemCount = 0;
    $('#itemCount').html('').css('display', 'none');
    $('#cartItems').html('');
  }); 
  /*carousel code*/
  $("#myCarousel").on("slide.bs.carousel", function(e) {
    var $e = $(e.relatedTarget);
    var idx = $e.index();
    var itemsPerSlide = 3;
    var totalItems = $(".carousel-item").length;

    if (idx >= totalItems - (itemsPerSlide - 1)) {
      var it = itemsPerSlide - (totalItems - idx);
      for (var i = 0; i < it; i++) {
        // append slides to end
        if (e.direction == "left") {
          $(".carousel-item")
            .eq(i)
            .appendTo(".carousel-inner");
        } else {
          $(".carousel-item")
            .eq(0)
            .appendTo($(this).find(".carousel-inner"));
        }
      }
    }
  });

   /*Validation code*/
     document.getElementById("firstName").focus();
        /* VALIDATION*/
        $('.form-control').blur(function(){
            var alertMessage = '<p class="alert m-0 text-danger">Please fill out this field.</p>';
            console.log('blurred element')
            $(this).parent().find('.alert').remove();
            $(this).css('border-color', '#ced4da');
            if( $(this).val().length === 0 ) {
                console.log('not valid')
                $(this).parent().append(alertMessage);
                $(this).css('border-color', 'orange');
            }
            if( $('#firstName' && '#lastName' && '#email' && '#city' && '#state' && '#zip').val().length > 0){
                $('#submitBtn').removeAttr('disabled');
            };
        });


});

</script>

