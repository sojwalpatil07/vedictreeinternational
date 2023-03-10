<!DOCTYPE html>
<html lang="zxx">
<!-- Web Header starts -->
<?php $this->load->view('web_header'); ?>
<!-- Web Header starts -->
<style>
    @media (min-width: 576px) {
        .modal-dialog {
            max-width: 700px !important;
        }
    }
</style>

<body>
    <!-- Google Tag Manager (noscript) -->
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-T3FX7LW" height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->
    <!-- Promo code Desktop start -->
    <div class="promo-code">
        <div class="wave"></div>
        <!-- <a href="<?php echo base_url('register?prcode=freeeducation') ?>" target="_blank">
            <img class="sticky" src="<?php echo base_url() ?>assets/website/img/free-learn.png" alt="Conceptual Education">
        </a>-->
        <a style="display:none" href="<?php echo base_url('register?prcode=freeintro') ?>" target="_blank">
            <img class="sticky" src="<?php echo base_url() ?>assets/website/img/early_bird.png" alt="Early Bird Offer">
        </a>
    </div>
    <!-- Promo code Desktop end -->
    <section class="" id="">
        <div class="single_banner_part">
            <div class="container custom_container">
                <div class="row">
                    
                        <div class="col-md-12" style="height:500px">
                            <div class="" style="margin-left: 18%;height: 82px;font-size:30px">
                               <span><?php  if(isset($errorsweet)){ echo $errorsweet['error']; }else{ echo $errorsweet['error']; }; ?></span>
                            </div>
                        </div>
                    <div class="empty-block"></div>
                </div>
            </div>
            
        </div>
    </section>
 
    <!-- footer part here -->
    <?php $this->load->view('web_footer'); ?>
</body>

</html>
<script src="https://player.vimeo.com/api/player.js"></script>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script>
$(document).ready(function(){
    jQuery.noConflict(); 
    $('#exampleModal').modal('show'); 

});


  </script>
  
  
  
<script>
    $(document).ready(function() {


        $('video').parent().click(function() {
            if ($(this).children("video").get(0).paused) {
                $(this).children("video").get(0).play();
                $(this).children(".playpause").fadeOut();
            } else {
                $(this).children("video").get(0).pause();
                $(this).children(".playpause").fadeIn();
            }
        });




        // Gets the video src from the data-src on each button
        var $videoSrc;
        var $reviewSrc;
        $(".video-btn").click(function() {
            $videoSrc = $(this).attr("data-src");
            console.log("button clicked" + $videoSrc);
        });
        // when the modal is opened autoplay it
        $("#myModal").on("shown.bs.modal", function(e) {
            console.log("modal opened" + $videoSrc);
            $("#video").attr("src", $videoSrc + "?autoplay=1&showinfo=0&modestbranding=1&rel=0&mute=1");
        });
        // stop playing the youtube video when I close the modal
        $("#myModal").on("hide.bs.modal", function(e) {
            // a poor man's stop video
            $("#video").attr("src", $videoSrc);
        });
    });


    $(function() {
        var stickyHeaderTop = $('#stickytypeheader').offset().top;
        $(window).scroll(function() {
            if ($(this).scrollTop() >= stickyHeaderTop && $(this).scrollTop() < (stickyHeaderTop + 1050)) {
                $('#stickytypeheader, .fixedFeatures, .fixedPhysical, .fixedKit, .fixedGames, .fixedVedic2').addClass("stickyFeatures");
                $(".fixedFeatures").css({
                    top: '230px',
                    zIndex: '6',
                    padding: '10px 62px',
                    height: '100px'
                });
                $(".fixedPhysical").css({
                    top: '230px',
                    zIndex: '6',
                    padding: '10px 50px',
                    height: '100px'
                });
                $(".fixedKit").css({
                    top: '230px',
                    zIndex: '6',
                    padding: '10px 54px',
                    height: '100px'
                });
                $(".fixedGames").css({
                    top: '230px',
                    zIndex: '6',
                    padding: '10px 38px',
                    height: '100px'
                });
                $(".fixedVedic1").hide();
                $(".fixedVedic2").css({
                    display: 'block',
                    top: '230px',
                    zIndex: '6',
                    padding: '10px 7px',
                    height: '100px',
                    color: '#fff',
                    fontsize: '18px'
                });
            } else {
                $('#stickytypeheader, .fixedFeatures, .fixedPhysical, .fixedKit, .fixedGames').removeClass("stickyFeatures");
                $(".fixedVedic1").show();
                $(".fixedVedic2").hide();
            }
        });
    });
    $(".field-wrapper .field-placeholder").on("click", function() {
        $(this).closest(".field-wrapper").find("input").focus();
    });
    $(".field-wrapper input").on("keyup", function() {
        var value = $.trim($(this).val());
        if (value) {
            $(this).closest(".field-wrapper").addClass("hasValue");
        } else {
            $(this).closest(".field-wrapper").removeClass("hasValue");
        }
    });
    $(".field-wrapper .field-placeholder1").on("click", function() {
        $(this).closest(".field-wrapper").find("input").focus();
    });
    $(".field-wrapper input").on("keyup", function() {
        var value = $.trim($(this).val());
        if (value) {
            $(this).closest(".field-wrapper").addClass("hasValue");
        } else {
            $(this).closest(".field-wrapper").removeClass("hasValue");
        }
    });

    function book_demo() {
        $('html, body').animate({
            scrollTop: $("#demo_section").offset().top
        }, 1500);
    }

    function off50_fees() {
        $('html, body').animate({
            scrollTop: $("#50off_fees_section").offset().top - 110
        }, 1500);
    }

    function off50_fees_mobile() {
        $('html, body').animate({
            scrollTop: $("#50off_fees_section").offset().top - 110
        }, 1500);
    }
    $("#registerDemoDesktop").on("click", function() {
        if ($('#studentName').val() != '' && $('#studentEmail').val() != '' && $('#studentMobile').val() != '' && $('#selectClassDesktop option:selected').val() != '') {
            var classNameDesktop = $('#selectClassDesktop option:selected').text();
            if (classNameDesktop != "") {
                fbq('track', 'Lead', {
                    content_name: classNameDesktop,
                });
            }
        }
    });
    $("#registerDemoMobile").on("click", function() {
        if ($('#studentNameMobile').val() != '' && $('#studentEmailMobile').val() != '' && $('#studentMobileMobile').val() != '' && $('#selectClassMobile option:selected').val() != '') {
            var classNameMobile = $('#selectClassMobile option:selected').text();
            if (classNameMobile != "") {
                fbq('track', 'Lead', {
                    content_name: classNameMobile,
                });
            }
        }
    });
    // FAQ Accordion start
    const items = document.querySelectorAll(".faq-accordion button");

    function toggleAccordion() {
        const itemToggle = this.getAttribute('aria-expanded');
        for (i = 0; i < items.length; i++) {
            items[i].setAttribute('aria-expanded', 'false');
        }
        if (itemToggle == 'false') {
            this.setAttribute('aria-expanded', 'true');
        }
    }
    items.forEach(item => item.addEventListener('click', toggleAccordion));
    // FAQ Accordion end
</script>




<!--End of Tawk.to Script-->