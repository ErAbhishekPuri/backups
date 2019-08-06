  <!--footer-->
   <footer class="myfooter">
       <div class="container">
           <div class="row">
               <div class="col-md-4 col-sm-6 col-xs-12">
				   <div class="footer-content-p">
  <h2>DO YOU NEED HELP?</h2>
               	 <?php if ( is_active_sidebar( 'sidebar-11' ) ) : ?>
    <?php dynamic_sidebar( 'sidebar-11' ); ?>
<?php endif; ?>
                 
                   
                   <a href="<?php the_permalink(115);?>" class="btn form-control">
                       Advice now 
                   </a>
			   </div>
               </div>
               <div class="col-md-2 col-sm-6">
				   <div class="footer-content-p">
                   <h2>QUICK LINKS</h2>
                   <ul class="listing">
                   

            	 <?php if ( is_active_sidebar( 'sidebar-2' ) ) : ?>
    <?php dynamic_sidebar( 'sidebar-2' ); ?>
<?php endif; ?>


                   </ul>
			   </div>
               </div>
               <div class="col-md-3 col-sm-6">
				   <div class="footer-content-p">
                   <h2>Problem at Work?</h2>
                   <ul class="listing">

        	 <?php if ( is_active_sidebar( 'sidebar-3' ) ) : ?>
    <?php dynamic_sidebar( 'sidebar-3' ); ?>
<?php endif; ?>

                
                   </ul>
			   </div>
               </div>
               <div class="col-md-3 col-sm-6">
				   <div class="footer-content-p">
                   <h2>Head Office</h2>
                   <address>
                    <ul>


 <?php if ( is_active_sidebar( 'sidebar-4' ) ) : ?>
    <?php dynamic_sidebar( 'sidebar-4' ); ?>
<?php endif; ?>

                  
                    </ul>
                   </address>
			   </div>
               </div>
           </div>
       </div>
        <section class="footer-bar">
       <div class="container">
           <div class="col-sm-4 text-left">
                <ul>

<?php if ( is_active_sidebar( 'sidebar-6' ) ) : ?>
    <?php dynamic_sidebar( 'sidebar-6' ); ?>
<?php endif; ?>



        </ul>
           </div>
           <div class="col-sm-8 text-right">
            <ul class="copyright">


<?php if ( is_active_sidebar( 'sidebar-5' ) ) : ?>
    <?php dynamic_sidebar( 'sidebar-5' ); ?>
<?php endif; ?>
            	
            	              <li class="copyright-class-content">
                Copyright © 2019 Employee Rescue
            </li>
               
            </ul>
           </div>
       </div>
   </section>
   <?php wp_footer();?>
   </footer>

   <!--footer-->

<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
<script type='text/javascript' src='<?php bloginfo('template_url')?>/js/my.js'></script>
 <script src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.11.1/jquery.validate.min.js"></script>
<script src="<?php bloginfo('template_url');?>/assets/js/bootstrap.min.js"></script>
<script src="<?php bloginfo('template_url');?>/assets/js/owl.carousel.js"></script>
<script type="text/javascript" src="<?php bloginfo('template_url');?>/assets/js/bootstrap-tabcollapse.js"></script>
<script src="<?php bloginfo('template_url');?>/assets/js/custom.js"></script>

<!-- <script type='text/javascript' src='<?php bloginfo('template_url')?>/js/my1.js'></script> -->




<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-datetimepicker/2.5.20/jquery.datetimepicker.full.js"></script>




<script type="text/javascript">



jQuery("body").find('.es_subscription_form es_shortcode_form').validate({

    rules: {

        name: {
            required: true,
            minlength:6,
        }
    },
    messages: {

        name: {
            minlength: "Please provide valid name",
            
        }
    }
   });



$('.cat_slider').owlCarousel({
loop:true,
autoplay:false,
margin:30,
 nav:true,
navText: ["<i class='fa fa-chevron-left'></i>","<i class='fa fa-chevron-right'></i>"],
    responsive:{
        0:{
            items:1
        },
        600:{
            items:3
        },
        1000:{
            items:3
        }
    }
});
		</script>
    <script>  
  jQuery(document).ready(function() { 
    jQuery('#dtpick').datetimepicker();
  });
</script>
<script type="text/javascript">
    $('.employe-slider-p').owlCarousel({
    loop:false,
    margin:10,
    nav:true,
    items:4,
         navText: ["<i class='fa fa-chevron-left'></i>","<i class='fa fa-chevron-right'></i>"],

    responsive:{
        0:{
            items:1
        },
        600:{
            items:3
        },
        1000:{
            items:4
        }
    }
})
</script>

  <script type="text/javascript">
    var acc = document.getElementsByClassName("accordion-cat");
    var i;

    for (i = 0; i < acc.length; i++) {
      acc[i].addEventListener("click", function() {
        this.classList.toggle("active-p");
        var panel = this.nextElementSibling;
        if (panel.style.display === "block") {
          panel.style.display = "none";
        } else {
          panel.style.display = "block";
        }
      });
    }
  </script>



<!--
<script type="text/javascript">
          var bunnyVideo = document.getElementById("bVideo");

          function playPause() {
              var el = document.getElementById("playButton");
              if (bunnyVideo.paused) {
                  bunnyVideo.play();
                  el.className = "new";
              } else {
                  bunnyVideo.pause();
                  el.className = "playButton";
              }
          }

          bunnyVideo.addEventListener("click", playPause, false);

      </script>
-->
<script>
$('.video').parent().click(function () {
    if($(this).children(".video").get(0).paused){
        $(this).children(".video").get(0).play();
        $(this).children(".playButton").fadeOut();
    }else{
       $(this).children(".video").get(0).pause();
        $(this).children(".playButton").fadeIn();
    }
});

</script>
      <script type="text/javascript">
$(document).ready(function(){
  // Add smooth scrolling to all links
  $(".scroll-section").on('click', function(event) {

    // Make sure this.hash has a value before overriding default behavior
    if (this.hash !== "") {
      // Prevent default anchor click behavior
      event.preventDefault();

      // Store hash
      var hash = this.hash;

      // Using jQuery's animate() method to add smooth page scroll
      // The optional number (800) specifies the number of milliseconds it takes to scroll to the specified area
      $('html, body').animate({
        scrollTop: $(hash).offset().top
      }, 800, function(){
   
        // Add hash (#) to URL when done scrolling (default click behavior)
        window.location.hash = hash;
      });
    } // End if
  });
});
      </script>
<script>
	$(document).ready(function() {
     
		    $(".fa-search").click(function() {
		       $(".search-box").toggle();
		       $("input[type='text']").focus();
		     });
 
 		});
</script>


<!--Start of Tawk.to Script-->
<script type="text/javascript">
var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
(function(){
var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
s1.async=true;
s1.src='https://embed.tawk.to/5d15c53036eab9721119a85d/default';
s1.charset='UTF-8';
s1.setAttribute('crossorigin','*');
s0.parentNode.insertBefore(s1,s0);
})();
</script>
<!--End of Tawk.to Script-->


<!-- Time Limit Calculator -->
<script src= "//cdnjs.cloudflare.com/ajax/libs/moment.js/2.10.3/moment.js"></script>



<script type="text/javascript">
    
    
   jQuery(document).ready(function(){

//calculation Time limits form
    jQuery("#input_5_4").change(function(){
    if (jQuery(this).val()=="") {
    jQuery("#field_5_13").html("");
    return;
    }
    var deadline = getDeadlineBase(jQuery(this).val());
    populateDeadline(deadline);
    });

    jQuery("#input_5_9, #input_5_10, #input_5_11").change(function(){
    if (jQuery("#input_5_9").val()=="" || jQuery("#input_5_10").val()=="" || jQuery("#input_5_11").val()=="") {
    jQuery("#field_5_13").html("");
    return;
    }


    var deadlinebase = getDeadlineBase(jQuery("#input_5_9").val()); // end of employment +3 months -1 day
    var startDate = jQuery("#input_5_10").val();
    var endDate = jQuery("#input_5_11").val();

      //alert(jQuery("#input_5_9").val());

  //alert(endDate);


    var tmp = startDate.split("-");
    startDate = new Date(tmp[1]+"/"+tmp[2]+"/"+tmp[0]);
    tmp = endDate.split("-");
    endDate = new Date(tmp[1]+"/"+tmp[2]+"/"+tmp[0]);
    var diff = Math.abs(endDate.getTime()-startDate.getTime());
    var days = Math.ceil(diff/(1000 * 3600 * 24));
    var deadline1 = deadlinebase;
    deadline1.setDate(deadline1.getDate()+days);
    var deadline2 = endDate;
    deadline2.setDate(deadline2.getDate()+30);
    var deadline = Math.max(deadline1.getTime(),deadline2.getTime());
    //alert(deadline);
    populateDeadline(new Date(deadline));
    //alert(populateDeadline);
    });


function getDeadlineBase(startDate) {
var tmp = startDate.split("-");

//console.log(tmp);

var deadline = new Date(tmp[1]+"/"+tmp[2]+"/"+tmp[0]);
deadline.setMonth(deadline.getMonth()+3);
deadline.setDate(deadline.getDate()-1);
//alert(deadline);


return deadline;
}

function populateDeadline(deadline) {
var day = deadline.getDate();
day = day<10?"0"+day:day;
var month = deadline.getMonth()+1;
month = month<10?"0"+month:month;
var year = deadline.getFullYear();
var full_date = day + '/' + month + '/' + year;
//alert(full_date);
jQuery('#bomb').show();
jQuery("#field_5_13").html(full_date);
}


});
</script>

<!-- Time Limit Calculator Ends -->

<script type="text/javascript">

jQuery(document).ready(function($) {
        
/**
 * WooCommerce Product Category Accordion jQuery Menu
 * @link https://wpbeaches.com/woocommerce-accordion-style-expand-collapse-product-category-menu/
 */
        
    if ($('ul.product-categories').length > 0) {
        
        // Set variables
        // pC = Parent Category 
        // fpC = First Parent Category
        // cC = Current Category
        // cCp = Currents Category's Parent

        var 
        pC = $('.product-categories li.cat-parent'),
        fpC = $('.product-categories li.cat-parent:first-child'), // Start this one open
        cC = $('.product-categories li.current-cat'),
        cCp = $('.product-categories li.current-cat-parent');

        pC.prepend('<span class="toggle"><i class="fa fa-angle-down  fa-angle-right"></i></span>');
        pC.parent('ul').addClass('has-toggle'); pC.children('ul').hide(); 

        if (pC.hasClass("current-cat-parent")) {
            cCp.addClass('open'); cCp.children('ul').show(); cCp.children().children('i.fa').removeClass('fa-angle-right');
        } 
        else if (pC.hasClass("current-cat")) {
            cC.addClass('open'); cC.children('ul').show(); cC.children().children('i.fa').removeClass('fa-angle-right');
        } 
        else {
            fpC.addClass('open'); fpC.children('ul').show(); fpC.children().children('i.fa').removeClass('fa-angle-right');
        }

        $('.has-toggle span.toggle').on('click', function() {
            $t = $(this);
            if ($t.parent().hasClass("open")){
                $t.parent().removeClass('open'); $t.parent().children('ul').slideUp(); $t.children('i.fa').addClass('fa-angle-right');
            } 
            else {
                $t.parent().parent().find('ul.children').slideUp();
                $t.parent().parent().find('li.cat-parent').removeClass('open');
                $t.parent().parent().find('li.cat-parent').children().children('i.fa').addClass('fa-angle-right');
                
                $t.parent().addClass('open');
                $t.parent().children('ul').slideDown();
                $t.children('i.fa').removeClass('fa-angle-right');
            } 
            
        });


        // Link the count number
        $('.count').css('cursor', 'pointer');
        $('.count').on('click', function(event) {
            $(this).prev('a')[0].click();
        });

    }

    
});





</script>


<script>
// just for the demos, avoids form submit
jQuery.validator.setDefaults({
  debug: true,
  success: "valid"
});
$( ".search-field" ).validate({
  rules: {
    field5: {
      required: true,
      minlength: 3
    }
  }
});
</script>
<script>
    $(document).on("keyup", ".a1", function() {
    var sum = 0;
    $(".a1").each(function(){
        sum += +$(this).val();
    });
    
    $("#sol1").html(sum);

    
});

    $(document).on("keyup", ".a1, .a2, .a3, .a5, .a6", function() {
    var sum = 0;
    $(".a1").each(function(){
        sum += +$(this).val();
    });

    var sum1 = 0;
    $(".a2").each(function(){
        sum1 += +$(this).val();
    });

    var sum2 = 0;
    $(".a3").each(function(){
        sum2+= +$(this).val();
    });

    var sum3 = 0;
    $(".a5").each(function(){
        sum3 += +$(this).val();
    });

    var sum4 = 0;
    $(".a6").each(function(){
        sum4 += +$(this).val();
    });
    
    $("#sol6").html(sum+(sum1-sum2)+(sum3-sum4));
    
});

    $(document).on("keyup", ".a2", function() {
    var sum = 0;
    $(".a2").each(function(){
        sum += +$(this).val();
    });
    
    $("#sol2").html(sum);
    
}); 

 $(document).on("keyup", ".a5", function() {
    var sum = 0;
    $(".a5").each(function(){
        sum += +$(this).val();
    });
    
    $("#sol4").html(sum);
    
});

 $(document).on("keyup", ".a7", function() {
    var sum = 0;
    $(".a7").each(function(){
        sum += +$(this).val();
    });
    
    $("#sol7").html(sum);
    
}); 

    $(document).on("keyup", ".a2, .a3", function() {
    var sum = 0;
    $(".a2").each(function(){
        sum += +$(this).val();
    });

    var summ=0;
    $(".a3").each(function(){
      summ+= +$(this).val();
    });
    
    $("#sol3").html(sum-summ);
    
});

    $(document).on("keyup", ".a5, .a6", function() {
    var sum = 0;
    $(".a5").each(function(){
        sum += +$(this).val();
    });

    var summ=0;
    $(".a6").each(function(){
      summ+= +$(this).val();
    });
    
    $("#sol5").html(sum-summ);
    
});
   


</script>
     <script>
    $(document).on("keyup", ".a, .b", function() {
    var sum = 0;
    $(".a").each(function(){
        sum += +$(this).val();
    });
    var sum2=0;
    $(".b").each(function(){
        sum2 += +$(this).val();
    });
    $("#asn1").html(sum-sum2);
    
});


  $(document).on("keyup", ".c", function() {
    var sum3 = 0;
    $(".c").each(function(){
        sum3 += +$(this).val();
    });
   
    $("#asn2").html(sum3);
   
    });

    $(document).on("keyup", ".c, .d", function() {
    var sum4 = 0;
    $(".d").each(function(){
        sum4 += +$(this).val();
    });
		

    var sum5 = 0;
    $(".c").each(function(){
        sum5 += +$(this).val();
    });
   
    $("#ans3").html(sum5-sum4);
    
    });


   $(document).on("keyup", ".e", function() {
    var sum6 = 0;
    $(".e").each(function(){
        sum6 += +$(this).val();
    });

    
    $("#ans4").html(sum6);
    
    });
		 $(document).on("keyup", ".a", function() {
    var asum = 0;
    $(".a").each(function(){
        asum += +$(this).val();
    });

    
    $("#asum").html(asum);
    
    });

   $(document).on("keyup", ".g", function() {
    var sum9 = 0;
    $(".g").each(function(){
        sum9 += +$(this).val();
    });

    
    $("#asn7").html(sum9);
    
    });


$(document).on("keyup", ".i", function() {
    var sum12 = 0;
    $(".i").each(function(){
        sum12 += +$(this).val();
    });

    
    $("#ans10").html(sum12);
    
    });

$(document).on("keyup", ".k", function() {
    var sum15 = 0;
    $(".k").each(function(){
        sum15 += +$(this).val();
    });

    
    $("#ans12").html(sum15);
    
    });


   $(document).on("keyup", ".f, .e", function() {
    var sum7 = 0;
    $(".f").each(function(){
        sum7 += +$(this).val();
    });

    var sum8 = 0;
    $(".e").each(function(){
        sum8 += +$(this).val();
    });

    
    $("#ans6").html(sum8-sum7);
    
    });


    $(document).on("keyup", ".h, .g", function() {
    var sum10 = 0;
    $(".h").each(function(){
        sum10 += +$(this).val();
    });

    var sum11 = 0;
    $(".g").each(function(){
        sum11 += +$(this).val();
    });

    
    $("#ans8").html(sum11-sum10);
    
    }); 

    $(document).on("keyup", ".i, .j", function() {
    var sum13 = 0;
    $(".i").each(function(){
        sum13 += +$(this).val();
    });

    var sum14 = 0;
    $(".j").each(function(){
        sum14 += +$(this).val();
    });

    
    $("#ans11").html(sum13-sum14);
    
    });


    $(document).on("keyup", ".k, .l", function() {
    var sum16 = 0;
    $(".k").each(function(){
        sum16 += +$(this).val();
    });

    var sum17 = 0;
    $(".l").each(function(){
        sum17 += +$(this).val();
    });

    
    $("#ans13").html(sum16-sum17);
    
    });


$(document).on("keyup", ".k, .m, .i, .j, .g, .h, .e, .f, .c, .d, .a, .b, .l", function() {
    var s1 = 0;
    $(".k").each(function(){
        s1 += +$(this).val();
    });
    var s2 = 0;
    $(".l").each(function(){
        s2 += +$(this).val();
    }); 
    var s3 = 0;
    $(".i").each(function(){
        s3 += +$(this).val();
    }); 
    var s4 = 0;
    $(".j").each(function(){
        s4 += +$(this).val();
    }); 
    var s5 = 0;
    $(".g").each(function(){
        s5 += +$(this).val();
    }); 
    var s6 = 0;
    $(".h").each(function(){
        s6 += +$(this).val();
    }); 
    var s7 = 0;
    $(".e").each(function(){
        s7 += +$(this).val();
    }); 
    var s8 = 0;
    $(".f").each(function(){
        s8 += +$(this).val();
    }); 
    var s9 = 0;
    $(".c").each(function(){
        s9 += +$(this).val();
    }); 
    var s10 = 0;
    $(".d").each(function(){
        s10 += +$(this).val();
    }); 
    var s11 = 0;
    $(".a").each(function(){
        s11 += +$(this).val();
    }); 
    var s12 = 0;
    $(".b").each(function(){
        s12 += +$(this).val();
    }); 


    var s13 = 0;
    $(".m").each(function(){
        s13 += +$(this).val();
    }); 




    

    $("#ans14").html((s1-s2)+(s3-s4)+(s5-s6)+(s7-s8)+(s9-s10)+(s11-s12)+s13);

    $("#ans15").html(((s1-s2)+(s3-s4)+(s5-s6)+(s7-s8)+(s9-s10)+(s11-s12)+s13)*0.25);

    });
$(document).ready(function () {
        $(".formToValidate").validate();
        $(".a, .b, .c, .d, .e, .f, .g, .h, .i, .j, .k, .l, .m , .a1, .a2, .a3, .a4, .a5, .a6, .a7").each(function (item) {
            $(this).rules("add", {
                //required: true,
                number:true
            });
        });
    });
$(document).on("click", ".addmore", function(){
  $(".r2").show();
  $(".addmore").hide();
  $(".rem").show();
});

$(document).on("click", ".delThis", function(){
 
  $(".hide1").hide();
  $("#showThis").show();
  $(".delThis").hide();
  
});

$(document).on("click", ".delThis2", function(){
 
  $(".hide2").hide();
  $("#delThis3").show();
  $(".delThis2").hide();
  
});

$(document).on("click", "#showThis", function(){
  $(".hide1").show();
  $("#showThis").hide();
  $(".delThis").show();
});



$(document).on("click", "#delThis3", function(){
  $(".hide2").show();
  $("#delThis3").hide();
  $(".delThis2").show();
});
// $('.addmore').click(function(){
//         var newDiv = $('<input type="text" name="Respondent" placeholder="Respondent" class="r2"> <button class="rem">Remove</button>');
//       //newDiv.style.background = "#000";
//        $('.newone').append(newDiv);
//     });
$(document).on("click", ".rem", function(){
  $(".r2").hide();
  $(".addmore").show();
  $(".rem").hide();
});

</script>
<script>
    $(document).on("keyup", ".a1", function() {
    var sum = 0;
    $(".a1").each(function(){
        sum += +$(this).val();
    });
    
    $(".sol1").html(sum);
    
});

    $(document).on("keyup", ".a1, .a2, .a3, .a5, .a6", function() {
    var sum = 0;
    $(".a1").each(function(){
        sum += +$(this).val();
    });

    var sum1 = 0;
    $(".a2").each(function(){
        sum1 += +$(this).val();
    });

    var sum2 = 0;
    $(".a3").each(function(){
        sum2+= +$(this).val();
    });

    var sum3 = 0;
    $(".a5").each(function(){
        sum3 += +$(this).val();
    });

    var sum4 = 0;
    $(".a6").each(function(){
        sum4 += +$(this).val();
    });
    
    $(".sol6").html(sum+(sum1-sum2)+(sum3-sum4));
    
});

    $(document).on("keyup", ".a2", function() {
    var sum = 0;
    $(".a2").each(function(){
        sum += +$(this).val();
    });
    
    $(".sol2").html(sum);
    
}); 

 $(document).on("keyup", ".a5", function() {
    var sum = 0;
    $(".a5").each(function(){
        sum += +$(this).val();
    });
    
    $(".sol4").html(sum);
    
});

 $(document).on("keyup", ".a7", function() {
    var sum = 0;
    $(".a7").each(function(){
        sum += +$(this).val();
    });
    
    $(".sol7").html(sum);
    
}); 

    $(document).on("keyup", ".a2, .a3", function() {
    var sum = 0;
    $(".a2").each(function(){
        sum += +$(this).val();
    });

    var summ=0;
    $(".a3").each(function(){
      summ+= +$(this).val();
    });
    
    $(".sol3").html(sum-summ);
    
});

    $(document).on("keyup", ".a5, .a6", function() {
    var sum = 0;
    $(".a5").each(function(){
        sum += +$(this).val();
    });

    var summ=0;
    $(".a6").each(function(){
      summ+= +$(this).val();
    });
    
    $(".sol5").html(sum-summ);
    
});

/*Function to download Doc File*/

    function downloadDoc(){
       var header = "<html xmlns:o='urn:schemas-microsoft-com:office:office' "+
            "xmlns:w='urn:schemas-microsoft-com:office:word' "+
            "xmlns='http://www.w3.org/TR/REC-html40'>"+
            "<head><meta charset='utf-8'></head><body>";
       var footer = "</body></html>";
       var sourceHTML = header+document.getElementById("source-html").innerHTML+footer;
       var source = 'data:application/vnd.ms-word;charset=utf-8,' + encodeURIComponent(sourceHTML);
       var fileDownload = document.createElement("a");
       document.body.appendChild(fileDownload);
       fileDownload.href = source;
       fileDownload.download = 'document.doc';
       fileDownload.click();
       document.body.removeChild(fileDownload);
    }

/*End of exportHtml function*/

</script>
<script type="text/javascript">



     // $('#submit').click(function() {
     // $('#fname').html($('#Contractualnoticse').val());
     // $('#lname').html($('#mnth1').val());
     // });



  </script>



</body>
</html>
