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
    <section class="banner_part banner_style_3 desktop-tablet-view" id="demo_section">
        <div class="single_banner_part">
            <div class="container custom_container">
                <div class="block-view">
                    <div class="register-block">
                        <div class="register-box">
                            <div class="form-wrapper-outer">
                                <div class="form-logo">
                                    <img src="<?php echo base_url() ?>assets/website/img/reglogo.png" alt="logo">
                                </div>
                                <h2 class="demo-class-text-1"><span class="font-size-text1">Register for</span><br>Conceptual Education</h2>
                                <!--<h2 class="demo-class-text-1"><span class="font-size-text1">Register for</span><span class="free-class-text" style="color: #f72860"> FREE </span>Demo Class</h2>-->
                                <!--<h2 class="demo-class-text"><span style="font-size: 26px;font-weight: 800;color: #004280;">Register For</span><br><span class="font-size-text">1 Month</span><span class="free-text"> FREE</span> Animated Sessions <span style="font-weight: 800;font-size: 24px;">&</span><br><span class="font-size-text">1 Week</span><span class="free-text"> FREE</span> Live School</h2>-->
                                <form id="log" method="POST" action="<?php echo base_url('website/temp_enquiry') ?>">
                                    <input type="hidden" name="promoCode" value="freeeducation">
                                    <div class="field-wrapper">
                                        <input type="text" name="studentName" id="studentName" required>
                                        <div class="field-placeholder"><span>Enter Name of your Child</span></div>
                                        <span class="error-red"><?php echo form_error('studentName'); ?></span>
                                    </div>
                                    <div class="field-wrapper">
                                        <input type="email" name="studentEmail" id="studentEmail" required>
                                        <div class="field-placeholder" required><span>Enter your Email</span></div>
                                        <span class="error-red"><?php echo form_error('studentEmail'); ?></span>
                                    </div>
                                    <div class="row">
                                        <div class="col-8">
                                            <div class="field-wrapper">
                                                <input type="text" maxlength="10" name="studentMobile" id="studentMobile" required>
                                                <div class="field-placeholder1"><span>Enter your Mobile Number</span></div>
                                                <span class="error-red"><?php echo form_error('studentMobile'); ?></span>
                                            </div>
                                        </div>
                                        <div class="col-4 pl-0">
                                            <div class="floating-label">
                                                <select class="floating-select" name="studentClass" onclick="this.setAttribute('value', this.value);" value="" id="selectClassDesktop" required>
                                                    <option value="" disabled selected></option>
                                                    
                                                    <option value="3" <?php echo set_select('studentClass', '4'); ?>>Grade 1</option>
                                                    <option value="3" <?php echo set_select('studentClass', '5'); ?>>Grade 2</option>
                                                    <option value="3" <?php echo set_select('studentClass', '6'); ?>>Grade 3</option>
                                                    <option value="3" <?php echo set_select('studentClass', '7'); ?>>Grade 4</option>
                                                    <option value="3" <?php echo set_select('studentClass', '8'); ?>>Grade 5</option>
                                                </select>
                                                <span class="highlight"></span>
                                                <span class="error-red"><?php echo form_error('studentClass'); ?></span>
                                                <label class="select-label">Select Class</label>
                                            </div>
                                        </div>
                                    </div>
                                   
                                    <div class="form-button d-flex justify-content-center">
                                        <button type="submit" name="submit" value="submit" id="registerDemoDesktop" class="register-now">Register Now</button>
                                    </div>
                                    
                                   
                                </form>
                            </div>
                        </div>
                        <h1 class="headline-tag">
                            <span></span>
                        </h1>
                    </div>
                    <div class="empty-block"></div>
                </div>
            </div>
            <!--<div class="banner_animation_1">-->
            <!--    <div data-parallax='{"x": 20, "y": 200, "rotateZ": 360}'>-->
            <!--        <img src="<?php echo base_url() ?>assets/website/img/icon/banner_icon/animated_banner_19.png" alt="#">-->
            <!--    </div>-->
            <!--</div>-->
            <!--<div class="banner_animation_3">-->
            <!--    <div data-parallax='{"x": 0, "y": 200, "rotateZ":0}'>-->
            <!--        <img src="<?php echo base_url() ?>assets/website/img/icon/banner_icon/animated_banner_3.png" alt="#">-->
            <!--    </div>-->
            <!--</div>-->
            <!--<div class="banner_animation_4">-->
            <!--    <div data-parallax='{"x": 30, "y": 250, "rotateZ":0}'>-->
            <!--        <img src="<?php echo base_url() ?>assets/website/img/icon/banner_icon/animated_banner_16.png" alt="#">-->
            <!--    </div>-->
            <!--</div>-->
            <!--<div class="banner_animation_5">-->
            <!--    <div data-parallax='{"x": 20, "y": 200, "rotateZ": 180}'>-->
            <!--        <img src="<?php echo base_url() ?>assets/website/img/icon/banner_icon/animated_banner_5.png" alt="#">-->
            <!--    </div>-->
            <!--</div>-->
            <!--<div class="banner_animation_7">-->
            <!--    <div data-parallax='{"x": 100, "y": 250, "rotateZ":0}'>-->
            <!--        <img src="<?php echo base_url() ?>assets/website/img/icon/banner_icon/animated_banner_15.png" alt="#">-->
            <!--    </div>-->
            <!--</div>-->
            <!--<div class="banner_animation_9">-->
            <!--    <div data-parallax='{"x": 20, "y": 200, "rotateZ":0}'>-->
            <!--        <img src="<?php echo base_url() ?>assets/website/img/icon/banner_icon/animated_banner_18.png" alt="#">-->
            <!--    </div>-->
            <!--</div>-->
            <!--<div class="banner_animation_10">-->
            <!--    <div data-parallax='{"x": 15, "y": 150, "rotateZ":0}'>-->
            <!--        <img src="<?php echo base_url() ?>assets/website/img/icon/banner_icon/animated_banner_10.png" alt="#">-->
            <!--    </div>-->
            <!--</div>-->
            <!--<div class="banner_animation_12">-->
            <!--    <div data-parallax='{"x": 20, "y": 150, "rotateZ":180}'>-->
            <!--        <img src="<?php echo base_url() ?>assets/website/img/icon/banner_icon/animated_banner_20.png" alt="#">-->
            <!--    </div>-->
            <!--</div>-->
            <!--<div class="banner_animation_13">-->
            <!--    <div data-parallax='{"x": 10, "y": 250, "rotateZ": 180}'>-->
            <!--        <img src="<?php echo base_url() ?>assets/website/img/icon/banner_icon/animated_banner_21.png" alt="#">-->
            <!--    </div>-->
            <!--</div>-->
            <!--<div class="banner_animation_15">-->
            <!--    <div data-parallax='{"x": 10, "y": 200, "rotateZ":0}'>-->
            <!--        <img src="<?php echo base_url() ?>assets/website/img/icon/banner_icon/animated_banner_17.png" alt="#">-->
            <!--    </div>-->
            <!--</div>-->
        </div>
    </section>
    <!-- banner part end -->
    <div class="register-box1 p-3">
        <div class="form-wrapper-outer">
            <h2 class="demo-class-text-1"><span class="font-size-text1">Register for</span><span class="free-class-text" style="color: #f72860"> 
Conceptual  </span>Education</h2>
            <!--<h2 class="demo-class-text-1"><span class="font-size-text1">Register For Preschool Education</span><br><span class="free-class-text" style="color: #f72860">Absolutely FREE</span></h2>-->
            <!--<h2 class="demo-class-text"><span style="font-size: 26px;font-weight: 800;color: #004280;">Register For</span><br><span class="font-size-text">1 Month</span><span class="free-text"> FREE</span> Animated Sessions <span style="font-weight: 800;font-size: 24px;">&</span><br><span class="font-size-text">1 Week</span><span class="free-text"> FREE</span> Live School</h2>-->
            <form id="log" method="POST" action="<?php echo base_url('website/temp_enquiry') ?>">
                <div class="field-wrapper">
                    <input type="text" name="studentName" id="studentNameMobile" autocomplete="off" required>
                    <div class="field-placeholder"><span>Enter Name of your Child</span></div>
                    <span class="error-red"><?php echo form_error('studentName'); ?></span>
                </div>
                <div class="field-wrapper">
                    <input type="email" name="studentEmail" id="studentEmailMobile" autocomplete="off" required>
                    <div class="field-placeholder"><span>Enter your Email</span></div>
                    <span class="error-red"><?php echo form_error('studentEmail'); ?></span>
                </div>
                <div class="row">
                    <div class="col-8">
                        <div class="field-wrapper">
                            <input type="text" maxlength="10" name="studentMobile" id="studentMobileMobile" autocomplete="off" required>
                            <div class="field-placeholder1"><span>Enter your Mobile Number</span></div>
                            <span style="color:red"><?php echo form_error('studentMobile'); ?></span>
                        </div>
                    </div>
                    <div class="col-4 pl-0">
                        <div class="floating-label">
                            <select class="floating-select" name="studentClass" onclick="this.setAttribute('value', this.value);" value="" id="selectClassMobile">
                                <option value="" selected disabled></option>
                                 <option value="3" <?php echo set_select('studentClass', '4'); ?>>Grade 1</option>
                                <option value="3" <?php echo set_select('studentClass', '5'); ?>>Grade 2</option>
                                <option value="3" <?php echo set_select('studentClass', '6'); ?>>Grade 3</option>
                                <option value="3" <?php echo set_select('studentClass', '7'); ?>>Grade 4</option>
                                <option value="3" <?php echo set_select('studentClass', '8'); ?>>Grade 5</option>
                            </select>
                            <span class="highlight"></span>
                            <span class="error-red"><?php echo form_error('studentClass'); ?></span>
                            <label class="select-label">Select Class</label>
                        </div>
                    </div>
                </div>
                <div class="form-button d-flex justify-content-center">
                    <button type="submit" name="submit" value="submit" id="registerDemoMobile" class="register-now">Register Now</button>
                </div>
            </form>
        </div>
        
    </div>
    
    <div class="promo-code-mobile">
        <!--<a href="<?php echo base_url('register?prcode=freeEducation') ?>">
            <img class="sticky" src="<?php echo base_url() ?>assets/website/img/free-learn.png" alt="Promo Code">
        </a>-->
        <a style="display:none" href="<?php echo base_url('register?prcode=freeintro') ?>" target="_blank">
            <img class="sticky" src="<?php echo base_url() ?>assets/website/img/early_bird.png" alt="Early Bird Offer"></a>
    </div>
    

    <!-- banner part here -->
    <section class="banner_part banner_style_3 mobile-view" id="demo_section">
        <!--<div class="single_banner_part">-->
        <!--    <div class="banner_animation_1">-->
        <!--        <div data-parallax='{"x": 20, "y": 200, "rotateZ": 360}'>-->
        <!--            <img src="<?php echo base_url() ?>assets/website/img/icon/banner_icon/animated_banner_19.png" alt="#">-->
        <!--        </div>-->
        <!--    </div>-->
        <!--    <div class="banner_animation_3">-->
        <!--        <div data-parallax='{"x": 0, "y": 200, "rotateZ":0}'>-->
        <!--            <img src="<?php echo base_url() ?>assets/website/img/icon/banner_icon/animated_banner_3.png" alt="#">-->
        <!--        </div>-->
        <!--    </div>-->
        <!--    <div class="banner_animation_4">-->
        <!--        <div data-parallax='{"x": 30, "y": 250, "rotateZ":0}'>-->
        <!--            <img src="<?php echo base_url() ?>assets/website/img/icon/banner_icon/animated_banner_16.png" alt="#">-->
        <!--        </div>-->
        <!--    </div>-->
        <!--    <div class="banner_animation_5">-->
        <!--        <div data-parallax='{"x": 20, "y": 200, "rotateZ": 180}'>-->
        <!--            <img src="<?php echo base_url() ?>assets/website/img/icon/banner_icon/animated_banner_5.png" alt="#">-->
        <!--        </div>-->
        <!--    </div>-->
        <!--    <div class="banner_animation_7">-->
        <!--        <div data-parallax='{"x": 100, "y": 250, "rotateZ":0}'>-->
        <!--            <img src="<?php echo base_url() ?>assets/website/img/icon/banner_icon/animated_banner_15.png" alt="#">-->
        <!--        </div>-->
        <!--    </div>-->
        <!--    <div class="banner_animation_9">-->
        <!--        <div data-parallax='{"x": 20, "y": 200, "rotateZ":0}'>-->
        <!--            <img src="<?php echo base_url() ?>assets/website/img/icon/banner_icon/animated_banner_18.png" alt="#">-->
        <!--        </div>-->
        <!--    </div>-->
        <!--    <div class="banner_animation_10">-->
        <!--        <div data-parallax='{"x": 15, "y": 150, "rotateZ":0}'>-->
        <!--            <img src="<?php echo base_url() ?>assets/website/img/icon/banner_icon/animated_banner_10.png" alt="#">-->
        <!--        </div>-->
        <!--    </div>-->
        <!--    <div class="banner_animation_12">-->
        <!--        <div data-parallax='{"x": 20, "y": 150, "rotateZ":180}'>-->
        <!--            <img src="<?php echo base_url() ?>assets/website/img/icon/banner_icon/animated_banner_20.png" alt="#">-->
        <!--        </div>-->
        <!--    </div>-->
        <!--    <div class="banner_animation_13">-->
        <!--        <div data-parallax='{"x": 10, "y": 250, "rotateZ": 180}'>-->
        <!--            <img src="<?php echo base_url() ?>assets/website/img/icon/banner_icon/animated_banner_21.png" alt="#">-->
        <!--        </div>-->
        <!--    </div>-->
        <!--    <div class="banner_animation_15">-->
        <!--        <div data-parallax='{"x": 10, "y": 200, "rotateZ":0}'>-->
        <!--            <img src="<?php echo base_url() ?>assets/website/img/icon/banner_icon/animated_banner_17.png" alt="#">-->
        <!--        </div>-->
        <!--    </div>-->
        <!--</div>-->
    </section>
    <!-- banner part end -->

    <!-- event section part here -->
    <section class="event_section section_padding">
        <div class="container custom_container">
            <div class="row justify-content-between">
                <div class="col-lg-6">
                    <div class="img_section">
                        <iframe class="responsive-iframe-welcome" src="https://www.youtube.com/embed/_qlmFcNZIpM?autoplay=1&mute=0&enablejsapi=1" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                    </div>
                </div>
                <div class="col-lg-6 pl-md-0">
                    <div class="event_section_content mt-3">
                        <h2 class="wow fadeInRight kid_title" data-wow-delay=".4s"> <span class="title_overlay_effect">Why Vedic Tree is the Best International School ?</span></h2>
                        <?php
                        $Topics  = array(
                            '1' => 'High level  Education with Animations',
                            '2' => 'Valuable  Classes',
                            '3' => 'e-books for overall development',
                            '4' => 'Daily preschool activities',
                            '5' => 'Extra-Curricular Activities Included',
                            '6' => 'Innovative Teaching Methods',
                            '7' => 'Best early learning app available in the market',
                        );
                        ?>
                        <ul class="points-text">
                            <?php if ($Topics) {
                                foreach ($Topics as $key => $value) {
                                    $color = '#013983';
                            ?>
                                    <li style="color:<?php echo $color; ?>"><?php echo $value; ?></li>
                            <?php }
                            } ?>
                        </ul>
                        <div class="register-mobile">
                            <div class="pc-button elementor-button button-link cu_btn button-content-wrapper" onclick="book_demo()">
                                <span class="elementor-button-text">Register Now</span>
                                <svg class="pc-dashes inner-dashed-border animated-dashes">
                                    <rect x="5px" y="5px" rx="22px" ry="22px" width="0" height="0"></rect>
                                </svg>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--<div class="about_page_animation_1">-->
        <!--    <div data-parallax='{"x": 2, "y": 70, "rotateZ":0}'><img src="<?php echo base_url() ?>assets/website/img/icon/icon_7.png" alt="icon"></div>-->
        <!--</div>-->
        <!--<div class="about_page_animation_2">-->
        <!--    <div data-parallax='{"x": 10, "y": 80, "rotateZ":0}'><img src="<?php echo base_url() ?>assets/website/img/icon/event_6.png" alt="icon"></div>-->
        <!--</div>-->
        <!--<div class="about_page_animation_3">-->
        <!--    <div data-parallax='{"x": 30, "y": 60, "rotateZ":0}'><img src="<?php echo base_url() ?>assets/website/img/icon/banner_two_2.png" alt="icon"></div>-->
        <!--</div>-->
        <!--<div class="about_page_animation_4">-->
        <!--    <div data-parallax='{"x": 30, "y": 50, "rotateZ":0}'><img src="<?php echo base_url() ?>assets/website/img/icon/team_animation.png" alt="icon" class="img-fluid"></div>-->
        <!--</div>-->
    </section>
    <!-- event section part end -->
    <!--<a href="https://play.google.com/store/apps/details?id=com.vedictree.preschool" target="_blank">-->
    <!--    <div class="download-apk"></div>-->
    <!--</a>-->
    <!-- Packages part here -->
    <section class="fetures_part padding_bottom" id="50off_fees_section" >
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-12">
                    <div class="section_tittle_style_02">
                        <h2 class="title wow fadeInDown" data-wow-delay=".3s"> <span class="title_overlay_effect">Enroll in Vedic Tree International School</span></h2>
                        <h2 class="title wow fadeInDown" data-wow-delay=".4s"> <span class="title_overlay_effect">Academic Year <?php echo date('Y'); ?> - <?php echo date('Y', strtotime('+1 year')); ?></span></h2>
                    </div>
                </div>
            </div>
            <div class="row justify-content-between">
                <div class="col-lg-4 col-sm-6 wow fadeInUp" data-wow-delay=".2s">
                    <div class="single_fetures_part " style="background-color:#3383d5" >
                        <h3 style="font-size: 32px;font-weight: 800;"> Awesome Teachers </h3>
                        
                        <div class="enroll-now">
                            <p style="font-size: large;text-align: left;">We have highly experienced and qualified teachers in our school who can handle
students in very good way and teaching them discipline.</p>
                        </div>
                    </div>
                </div>
                
                <div class="col-lg-4 col-sm-6 wow fadeInUp" data-wow-delay=".8s">
                    <div class="single_fetures_part" style="background-color:#3383d5" >
                        <h3 style="font-size: 32px;font-weight: 800;" > Affordable  </h3>
                        <h3 style="font-size: 32px;font-weight: 800;" >  Fees </h3>
                        
                        <div class="enroll-now">
                            <p style="font-size: large;text-align: left;">We have affordable fees so that parents can be assured of optimum quality of education and overall development at reasonable school fees 
.</p>
                        </div>
                    </div>
                </div>
                
                <div class="col-lg-4 col-sm-6 wow fadeInUp" data-wow-delay=".8s">
                    <div class="single_fetures_part" style="background-color:#3383d5" >
                        <h3 style="font-size: 32px;font-weight: 800;" > Holistic Development </h3>
                        
                        <div class="enroll-now">
                            <p style="font-size: large;text-align: left;" >Holistic development essentially means the development of intellectual, mental,
physical, emotional, and social abilities in a child.</p>
                        </div>
                    </div>
                </div>
                
                
                

            </div>
           
        </div>
        </div>
        <!--<div class="feature_animation_1">-->
        <!--    <div data-parallax='{"x": 2, "y": 120, "rotateZ":0}'><img src="<?php echo base_url() ?>assets/website/img/animation_shape/program_list_shape_01.png" alt="animation"></div>-->
        <!--</div>-->
        <!--<div class="feature_animation_2">-->
        <!--    <div data-parallax='{"x": 10, "y": 100, "rotateZ":0}'><img src="<?php echo base_url() ?>assets/website/img/animation_shape/program_list_shape_02.png" alt="animation"></div>-->
        <!--</div>-->
        <!--<div class="feature_animation_3">-->
        <!--    <div data-parallax='{"x": 30, "y": 110, "rotateZ":0}'><img src="<?php echo base_url() ?>assets/website/img/animation_shape/program_list_shape_03.png" alt="animation"></div>-->
        <!--</div>-->
        <!--<div class="feature_animation_4">-->
        <!--    <div data-parallax='{"x": 5, "y": 105, "rotateZ":0}'><img src="<?php echo base_url() ?>assets/website/img/animation_shape/program_list_shape_04.png" alt="animation"></div>-->
        <!--</div>-->
    </section>
    <!-- Packages part end -->
    
    <section class="comparison-table section_padding" >
        <div class="container">
            <div class="row justify-content-center" id="stickytypeheader" class="header-sticky">
                <div class="col-lg-12" style="background: #fff;">
                    <div class="comparison section_tittle_style_02">
                        <h1 class="title wow fadeInDown" data-wow-delay=".3s"> <span class="title_overlay_effect">Our Mission And Vision </span></h1>
                        <!-- <p class="description wow fadeInDown" data-wow-delay=".3s">Review From Happy Parents</p> -->
                    </div>
                </div>
            </div>
            <div class="row">
                    <div class="col-md-5" style="box-shadow: 10px 12px 10px 2px lightblue ;border: 1px solid #fff; padding: 75px;">
                        <h1 style="font-weight: 900;">Mission</h1>
                      <p style="text-align: justify;font-size: 19px;color: #000000;font-weight: 600;" > "We stand strong in our passion for equipping the youngest citizens of the country with self-confidence, compassion and a value system to be proud of. We are on a mission to foster a strong & everlasting passion for learning that can last a lifetime." </p>
                        
                    </div>
                    
                    <div class="col-md-5" style="box-shadow: 10px 12px 10px 2px lightblue ;border: 1px solid #fff; padding: 75px;margin-left:154px">
                        <h1 style="font-weight: 900;">Vision </h1>
                      <p style="text-align: justify;font-size: 19px;color: #000000;font-weight: 600;"> "We aim to provide our students with proper guidance so that they can grow into their own identities, in an open and nurturing environment. We believe that early education should be a harmonious process that combines academic, artistic and practical 
        learning.." </p>
                        
                    </div>
            </div>
            
            
        </div>
    </section>
    <!-- Product Comparison end -->
    

    <section class="comparison-table section_padding">
        <div class="container">
            <div class="row justify-content-center" id="stickytypeheader" class="header-sticky">
                <div class="col-lg-12" style="background: #fff;">
                    <div class="comparison section_tittle_style_02">
                        <h1 class="title wow fadeInDown" data-wow-delay=".3s"> <span class="title_overlay_effect">Why We Are <br> THE BEST INTERNATIONAL SCHOOL</span></h1>
                 
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Product Comparison end -->

    <!-- Features part here -->
    <section class="testimonial_part section_padding" style="display:none">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-7">
                    <div class="section_tittle_style_02">
                        <h1 class="title wow fadeInDown" data-wow-delay=".3s"> <span class="title_overlay_effect">Features</span></h1>
                        <!-- <p class="description wow fadeInDown" data-wow-delay=".3s">Review From Happy Parents</p> -->
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="our-features-section">
                        <div class="our-features-details border-orange"><img src="<?php echo base_url() ?>assets/website/img/features/High-Quality-Emmersive-Sessions.png" loading="lazy" alt="High-Quality-Emmersive-Sessions">
                            <p class="yellow-color">AWESOME TEACHERS</p>
                        </div>
                        <div class="our-features-details border-yellow"><img src="<?php echo base_url() ?>assets/website/img/features/Value-Based-Education.png" loading="lazy" alt="Value-Based-Education">
                            <p class="orange-color">HIGHLY  CLASSROOMS</p>
                        </div>
                        <div class="our-features-details border-blue"><img src="<?php echo base_url() ?>assets/website/img/features/Blending-Curriculum.png" loading="lazy" alt="Blending-Curriculum">
                            <p class="lightblue-color">AFFORDABLE FEES</p>
                        </div>
                    </div>
                    <div class="our-feature-wrp">
                        <div class="our-features-details border-green"><img class="responsive" src="<?php echo base_url() ?>assets/website/img/features/HD-Animated-Videos.png" loading="lazy" alt="HD-Animated-Videos">
                            <p class="greenlight">HOLISTIC DEVELOPMENT</p>
                        </div>
                        <div class="our-features-details border-darkgreen"><img src="<?php echo base_url() ?>assets/website/img/features/Life-Skill-Activities.png" loading="lazy" alt="Life-Skill-Activities">
                            <p class="green-color">LIFE SKILL ACTIVITIES</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="book-now">
                <!--<div onclick="book_demo()" class="book-button">Book Your Demo Session</div>-->
            </div>
        </div>
        <!--<div class="testimonial_animation_1">-->
        <!--    <div data-parallax='{"x": 2, "y": 120, "rotateZ":0}'><img src="<?php echo base_url() ?>assets/website/img/icon/feature_5.png" alt="icon"></div>-->
        <!--</div>-->
        <!--<div class="testimonial_animation_2">-->
        <!--    <div data-parallax='{"x": 10, "y": 100, "rotateZ":0}'><img src="<?php echo base_url() ?>assets/website/img/icon/event_4.png" alt="icon"></div>-->
        <!--</div>-->
        <!--<div class="testimonial_animation_3">-->
        <!--    <div data-parallax='{"x": 30, "y": 110, "rotateZ":0}'><img src="<?php echo base_url() ?>assets/website/img/icon/event_6.png" alt="icon"></div>-->
        <!--</div>-->
        <!--<div class="testimonial_animation_4">-->
        <!--    <div data-parallax='{"x": 30, "y": -110, "rotateZ":0}'><img src="<?php echo base_url() ?>assets/website/img/icon/event_7.png" alt="icon"></div>-->
        <!--</div>-->
    </section>
    <!-- Features part end -->
    
    

    <!--parent video review here -->
    <section class="event_list section_padding section_bg_1">
        <div class="container custom_container">
            <div class="row justify-content-center">
                <div class="col-lg-7">
                    <div class="section_tittle_style_02">
                        <h2 class="title wow fadeInDown" data-wow-delay=".3s"> <span class="title_overlay_effect">Activities</span></h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="review_slider owl-carousel">
                        <?php foreach ($events as $event) { ?>
                            <div class="wow fadeInUp review-item" style="position: relative;" data-wow-delay=".3s">
                                <div class="review_list_img video-btn" data-src="<?php echo $event['youtube_input_link']; ?>">
                                    <iframe width="100%" height="345" src="<?php echo $event['youtube_input_link']; ?>"></iframe>
                                </div>

                                <!-- <div class="review_list_img video-btn" data-src="<?php //echo $event['youtube_input_link']; 
                                                                                        ?>" data-target="#myModal" data-toggle="modal">
                                    <i class="fa fa-play-circle-o" style="position: absolute;top: 40%;left: 40%;font-size: 80px;z-index: 2;" aria-hidden="true"></i>
                                    <img src="<?php //echo $event['image_input_link']; 
                                                ?>" style="opacity: 0.9;" title="YouTube Video" alt="YouTube Video" />
                                </div> -->
                            </div>
                        <?php } ?>
                    </div>
                </div>
            </div>
        </div>
        <!--<div class="event_list_animation_1">-->
        <!--    <div data-parallax='{"x": 2, "y": 70, "rotateZ":0}'><img src="<?php echo base_url() ?>assets/website/img/icon/icon_5.png" alt="#"></div>-->
        <!--</div>-->
        <!--<div class="event_list_animation_3">-->
        <!--    <div data-parallax='{"x": 30, "y": 60, "rotateZ":0}'><img src="<?php echo base_url() ?>assets/website/img/icon/icon_7.png" alt="#"></div>-->
        <!--</div>-->
        <!--<div class="event_list_animation_4">-->
        <!--    <div data-parallax='{"x": 30, "y": -50, "rotateZ":0}'><img src="<?php echo base_url() ?>assets/website/img/icon/icon_8.png" alt="#" class="img-fluid"></div>-->
        <!--</div>-->
    </section>
    <!-- parent video review end -->
    
    
    

    <!-- cta part here -->
    <section class="cta_part section_padding">
        <div class="container">
            <div class="row align-items-center justify-content-start">
                <div class="col-lg-12">
                    <div class="cta_part_iner">
                        <p>Providing the Best Quality Education at the Most Affordable Fees.</p>
                        <h2 style="font-size: 50px;font-weight: 900;">Vedic Tree Stars</h2>
                        <h3>Admission Open</h3>
                        <div onclick="book_demo()" class="cu_btn white_bg font-weight-bold book-button">Book Now</div>
                    </div>
                </div>
            </div>
        </div>
        <!--<div class="breadcrumb_animation_1">-->
        <!--    <div data-parallax='{"x": -30, "y": -20}'>-->
        <!--        <img src="<?php echo base_url() ?>assets/website/img/cta_img_1.png" alt="cta-img">-->
        <!--    </div>-->
        <!--</div>-->
        <!--<div class="breadcrumb_animation_2">-->
        <!--    <div data-parallax='{"x": 40, "y": -20}'>-->
        <!--        <img src="<?php echo base_url() ?>assets/website/img/cta_img_2.png" alt="cta-img">-->
        <!--    </div>-->
        <!--</div>-->
    </section>
    <!-- cta part end -->


    

    <!-- parent's review part here -->
    <section class="testimonial_part section_padding">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-7">
                    <div class="section_tittle_style_02">
                        <h1 class="title wow fadeInDown" data-wow-delay=".3s"> <span class="title_overlay_effect">Parent's Review</span></h1>
                        <!-- <p class="description wow fadeInDown" data-wow-delay=".3s">Review From Happy Parents</p> -->
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="testimonial_slider owl-carousel">
                        <?php if ($parents_review_update_list) {
                            foreach ($parents_review_update_list as $key => $value) {
                        ?>
                                <div class="single_testimonial_slider">
                                    <div class="client_speech">
                                        <div class="date-right"><?php echo date("Y-m-d", strtotime($value['createreviewDT'])); ?></div>
                                        <img src="<?php echo base_url() ?>assets/website/img/quote.png" alt="#">
                                        <p><?php echo $value['reviewDec']; ?></p>
                                        <img src="<?php echo base_url() ?>assets/website/img/shape_1.png" alt="#" class="client_speech_shape">
                                    </div>
                                    <div class="client_info">
                                        <img src="<?php echo base_url('uploads/parents_review_image/' . $value['parents_review_image']) ?>" alt="#">
                                        <h4><?php echo $value['parentName']; ?><span class="color_1"><?php echo $value['className']; ?>.Kg</span></h4>
                                    </div>
                                </div>
                        <?php }
                        } ?>
                    </div>
                </div>
            </div>
            <!--<div class="testimonial_animation_1">-->
            <!--    <div data-parallax='{"x": 2, "y": 120, "rotateZ":0}'><img src="<?php echo base_url() ?>assets/website/img/icon/feature_5.png" alt="icon"></div>-->
            <!--</div>-->
            <!--<div class="testimonial_animation_2">-->
            <!--    <div data-parallax='{"x": 10, "y": 100, "rotateZ":0}'><img src="<?php echo base_url() ?>assets/website/img/icon/event_4.png" alt="icon"></div>-->
            <!--</div>-->
            <!--<div class="testimonial_animation_3">-->
            <!--    <div data-parallax='{"x": 30, "y": 110, "rotateZ":0}'><img src="<?php echo base_url() ?>assets/website/img/icon/event_6.png" alt="icon"></div>-->
            <!--</div>-->
            <!--<div class="testimonial_animation_4">-->
            <!--    <div data-parallax='{"x": 30, "y": -110, "rotateZ":0}'><img src="<?php echo base_url() ?>assets/website/img/icon/event_7.png" alt="icon"></div>-->
            <!--</div>-->
        </div>
    </section>
    <!-- parent's review part end -->

    <!-- events students here -->
    <section class="event_list section_padding section_bg_1">
        <div class="container custom_container">
            <div class="row justify-content-center">
                <div class="col-lg-7">
                    <div class="section_tittle_style_02">
                        <h2 class="title wow fadeInDown" data-wow-delay=".3s"><span class="title_overlay_effect">Parent's Video Review</span></h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <!-- <div class="col-lg-12"> -->
                   
                   <div class="review_slider owl-carousel">
                        <?php foreach ($get_tbl_paranet_review as $val) { 
                        
                        $shortUrlRegex = '/youtu.be\/([a-zA-Z0-9_-]+)\??/i';
                         $longUrlRegex = '/youtube.com\/((?:embed)|(?:shorts)|(?:watch))((?:\?v\=)|(?:\/))([a-zA-Z0-9_-]+)/i';
                    
                        if (preg_match($longUrlRegex, $val['vidlink'], $matches)) {
                            $youtube_id = $matches[count($matches) - 1];
                        }
                    
                        if (preg_match($shortUrlRegex, $val['vidlink'], $matches)) {
                            $youtube_id = $matches[count($matches) - 1];
                        }
    
                   $youtube_id =  'https://www.youtube.com/embed/' . $youtube_id ;
                        ?>
                            <div class="wow fadeInUp review-item" style="position: relative;" data-wow-delay=".3s">
                                <div class="review_list_img video-btn" data-src="<?php echo $youtube_id; ?>">
                                    <iframe width="100%" height="345" src="<?php echo $youtube_id; ?>"></iframe>
                                </div>
                            </div>
                        <?php } ?>
                    </div>
                    
                <!-- </div> -->
            </div>
        </div>
        <!--<div class="event_list_animation_1">-->
        <!--    <div data-parallax='{"x": 2, "y": 70, "rotateZ":0}'><img src="<?php echo base_url() ?>assets/website/img/icon/icon_5.png" alt="#"></div>-->
        <!--</div>-->
        <!--<div class="event_list_animation_3">-->
        <!--    <div data-parallax='{"x": 30, "y": 60, "rotateZ":0}'><img src="<?php echo base_url() ?>assets/website/img/icon/icon_7.png" alt="#"></div>-->
        <!--</div>-->
        <!--<div class="event_list_animation_4">-->
        <!--    <div data-parallax='{"x": 30, "y": -50, "rotateZ":0}'><img src="<?php echo base_url() ?>assets/website/img/icon/icon_8.png" alt="#" class="img-fluid"></div>-->
        <!--</div>-->
    </section>
    <!-- events students end -->

    <!-- out gallery part here -->
    <section class="our_gallery gallery_style_2 section_bg section_padding mb-5">
        <div class="container-fluid no-gutters">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="section_tittle_style_02">
                        <h1 class="title wow fadeInDown" data-wow-delay=".3s">
                            <div class="title_overlay_effect">Our Gallery</div>
                        </h1>
                        <p class="description2 wow fadeInDown" data-wow-delay=".3s">
                            <?php //echo ucwords("Vedic Tree little stars are enjoying online education at home. Parents and loved one's are experiencing excellent development of child day by day.");
                                echo ucwords("The Vedic Tree Little Stars are gaining online education at home. Parents and loved ones are experiencing the excellent development of their child every day.");
                            ?>
                            </p>
                    </div>
                </div>
            </div>
            <div class="row wow fadeInDown" data-wow-delay=".5s">
                <div class="col-lg-12 p-0">
                    <div class="gallery_slider owl-carousel gallery_popup_img">
                        <a href="<?php echo base_url() ?>assets/website/img/gallery/photo_9.jpg" class="grid-item bg_1">
                            <div class="grid_item_content">
                                <h3>Blended Curriculum</h3>
                                <p>Kids, Daycare, Kindergarten</p>
                            </div>
                        </a>
                        <a href="<?php echo base_url() ?>assets/website/img/gallery/photo_7.jpg" class="grid-item bg_2">
                            <div class="grid_item_content">
                                <h3>Holistic Development</h3>
                                <p>Kids, Daycare, Kindergarten</p>
                            </div>
                        </a>
                        <a href="<?php echo base_url() ?>assets/website/img/gallery/photo_3.jpg" class="grid-item bg_3">
                            <div class="grid_item_content">
                                <h3>Value Based Education</h3>
                                <p>Kids, Daycare, Kindergarten</p>
                            </div>
                        </a>
                        <a href="<?php echo base_url() ?>assets/website/img/gallery/photo_4.jpg" class="grid-item bg_4">
                            <div class="grid_item_content">
                                <h3>Animated Sessions</h3>
                                <p>Kids, Daycare, Kindergarten</p>
                            </div>
                        </a>
                        <a href="<?php echo base_url() ?>assets/website/img/gallery/photo_5.jpg" class="grid-item bg_5">
                            <div class="grid_item_content">
                                <h3>Interative Sessions</h3>
                                <p>Kids, Daycare, Kindergarten</p>
                            </div>
                        </a>
                        <a href="<?php echo base_url() ?>assets/website/img/gallery/photo_6.jpg" class="grid-item bg_6">
                            <div class="grid_item_content">
                                <h3>Flexible Learning Hours</h3>
                                <p>Kids, Daycare, Kindergarten</p>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- out gallery part end -->

    <!-- team part here -->
    <section class="team_section section_padding">
        <div class="container custom_container">
            <div class="row justify-content-center">
                <div class="col-lg-12">
                    <div class="section_tittle_style_02">
                        <h2 class="title wow fadeInDown" data-wow-delay=".3s"> <span class="title_overlay_effect">Our Team of Professionals</span></h2>
                        <p class="description2 wow fadeInDown" data-wow-delay=".3s">Vedic Tree's mission is to provide High-quality, Affordable
                            education for every child to ensure that the foundation remains Strong and Powerful which will help in creating a better tomorrow.</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 col-sm-6 wow fadeInUp" data-wow-delay=".5s">
                    <div class="single_team_section">
                        <div class="d-block teacher_profile_img">
                            <img src="<?php echo base_url() ?>assets/website/img/teacher/Kajal Thakkar.png" loading="lazy" alt="teacher" class="img-fluid">
                        </div>
                        <h4>Kajal Thakkar</h4>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6 wow fadeInUp" data-wow-delay=".5s">
                    <div class="single_team_section">
                        <div class="d-block teacher_profile_img">
                            <img src="<?php echo base_url() ?>assets/website/img/teacher/Raina Thakkar.png" loading="lazy" alt="teacher" class="img-fluid">
                        </div>
                        <h4>Raina Thakkar</h4>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6 wow fadeInUp" data-wow-delay=".5s">
                    <div class="single_team_section">
                        <div class="d-block teacher_profile_img">
                            <img src="<?php echo base_url() ?>assets/website/img/teacher/Anna Miranda.png" loading="lazy" alt="teacher" class="img-fluid">
                        </div>
                        <h4>Anna Miranda</h4>
                    </div>
                </div>
            </div>
        </div>
        <!--<div class="team_animation_1">-->
        <!--    <div data-parallax='{"x": 2, "y": 120, "rotateZ":0}'><img src="<?php echo base_url() ?>assets/website/img/icon/story_animation_1.png" alt="icon"></div>-->
        <!--</div>-->
        <!--<div class="team_animation_2">-->
        <!--    <div data-parallax='{"x": 10, "y": 100, "rotateZ":0}'><img src="<?php echo base_url() ?>assets/website/img/icon/story_animation_2.png" alt="icon">-->
        <!--    </div>-->
        <!--</div>-->
        <!--<div class="team_animation_3">-->
        <!--    <div data-parallax='{"x": 30, "y": 110, "rotateZ":0}'><img src="<?php echo base_url() ?>assets/website/img/icon/story_animation_3.png" alt="icon">-->
        <!--    </div>-->
        <!--</div>-->
        <!--<div class="team_animation_4">-->
        <!--    <div data-parallax='{"x": 5, "y": 105, "rotateZ":0}'><img src="<?php echo base_url() ?>assets/website/img/icon/team_animation.png" alt="icon"></div>-->
        <!--</div>-->
        <!--<div class="team_animation_5">-->
        <!--    <div data-parallax='{"x": 8, "y": 110, "rotateZ":0}'><img src="<?php echo base_url() ?>assets/website/img/icon/story_animation_5.png" alt="icon"></div>-->
        <!--</div>-->
    </section>
    <!-- team part end -->

    <!-- blog part start -->
    <section class="event_list section_padding section_bg_1">
        <div class="container custom_container">
            <div class="row justify-content-center">
                <div class="col-lg-7">
                    <div class="section_tittle_style_02">
                        <h1 class="title wow fadeInDown" data-wow-delay=".5s"><span class="title_overlay_effect">Our Blogs</span></h1>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="blog_slider owl-carousel">

                    <!--    <div class="wow fadeInDown" data-wow-delay=".3s">-->
                    <!--        <div class="page_blog_section_wrapper">-->
                    <!--            <a class="blog_thumbnail">-->
                    <!--                <img src="<?php echo base_url() ?>assets/website/img/blog/blog_7.png" loading="lazy" alt="blog" class="img-fluid">-->
                    <!--            </a>-->
                    <!--            <div class="blog_meta_list">-->
                    <!--                <a class="blog_data">07 October, 2021</a>-->
                    <!--            </div>-->
                    <!--            <h4><a>Best Online Preschool Classes for Children in Pune</a></h4>-->
                    <!--            <a href="<?php echo base_url('best-online-preschool-classes-for-children-in-pune'); ?>" class="read_more_btn">Read More <img src="<?php echo base_url() ?>assets/website/img/icon/arrow_left.svg" alt="read-more"></a>-->
                    <!--        </div>-->
                    <!--    </div>-->
                    <!--    <div class="wow fadeInDown" data-wow-delay=".5s">-->
                    <!--    <div class="page_blog_section_wrapper">-->
                    <!--        <a class="blog_thumbnail">-->
                    <!--            <img src="<?php echo base_url() ?>assets/website/img/blog/blog_4.png" loading="lazy" alt="blog" class="img-fluid">-->
                    <!--        </a>-->
                    <!--        <div class="blog_meta_list">-->
                    <!--            <a class="blog_data">21 May, 2021</a>-->
                    <!--        </div>-->
                    <!--        <h4> <a>Top 5 healthy fruits for your child-Vedictreeschool.com</a></h4>-->
                    <!--        <a href="<?php echo base_url('healthy-fruits-for-child'); ?>" class="read_more_btn">Read More <img src="<?php echo base_url() ?>assets/website/img/icon/arrow_left.svg" alt="read-more"> </a>-->
                    <!--    </div>-->
                    <!--</div>-->
                    <!--    <div class="wow fadeInDown" data-wow-delay=".7s">-->
                    <!--        <div class="page_blog_section_wrapper">-->
                    <!--            <a href="#" class="blog_thumbnail">-->
                    <!--                <img src="<?php echo base_url() ?>assets/website/img/blog/blog_3.png" loading="lazy" alt="blog" class="img-fluid">-->
                    <!--            </a>-->
                    <!--            <div class="blog_meta_list">-->
                    <!--                <a class="blog_data">10 June, 2021</a>-->
                    <!--            </div>-->
                    <!--            <h4> <a>How Technology is effecting Education</a></h4>-->
                    <!--            <a href="<?php echo base_url('how-technology-is-effecting-education'); ?>" class="read_more_btn">Read More <img src="<?php echo base_url() ?>assets/website/img/icon/arrow_left.svg" alt="read-more"> </a>-->
                    <!--        </div>-->
                    <!--    </div>-->
                    <!--    <div class="wow fadeInDown" data-wow-delay=".9s">-->
                    <!--        <div class="page_blog_section_wrapper">-->
                    <!--            <a href="" class="blog_thumbnail">-->
                    <!--                <img src="<?php echo base_url() ?>assets/website/img/blog/blog_1.png" loading="lazy" alt="blog" class="img-fluid">-->
                    <!--            </a>-->
                    <!--            <div class="blog_meta_list">-->
                    <!--                <a class="blog_data">07 April, 2021</a>-->
                    <!--            </div>-->
                    <!--            <h4> <a>Why preschool is important for 2021</a></h4>-->
                    <!--            <a href="<?php echo base_url('preschool-importance-2021'); ?>" class="read_more_btn">Read More <img src="<?php echo base_url() ?>assets/website/img/icon/arrow_left.svg" alt="read-more"> </a>-->
                    <!--        </div>-->
                    <!--    </div>-->

                     <?php foreach($get_blogs_all as $blogall){  ?>
                        <div class="single_page_blog_post">
                            <img src="<?php echo  base_url('uploads/blogs_images/'.$blogall['file_upload']);?>" alt="blog" class="img-fluid">
                            <div class="single_blog_content">
                                <div class="post_author">
                                    <!--<span>August 21, 2021</span>-->
                                    <span>
                                          <?php 
                                            $blog_date = $blogall['date'];
                                            echo date('F d Y', strtotime($blog_date));
                                           ?>
                                    </span>
                                </div>
                                <a href="<?php echo base_url('blogs/'.$blogall['linkheader']);?>"><h2><?php echo $blogall['title']; ?></h2></a>
                                <p><?php echo substr($blogall['blog_des1'], 0, 250) ; ?><span>....</span></p>
                                <div class="blog_btn">
                                    <a href="<?php echo base_url('blogs/'.$blogall['linkheader']);?>" class="read_more_btn">Read More </a>
                                    <p><i class="far fa-comment"></i>10 Comments</p>
                                </div>
                            </div>
                        </div>
                     <?php } ?>    
                </div>

            </div>
            <div class="book-now">
                <!--<div onclick="book_demo()" class="book-button">Book Your Demo Session</div>-->
            </div>
        </div>
        <!--<div class="event_list_animation_1">-->
        <!--    <div data-parallax='{"x": 2, "y": 70, "rotateZ":0}'>-->
        <!--        <img width="68" height="48" src="<?php echo base_url() ?>assets/website/img/icon/event_5.png" class="attachment-full size-full" alt="" />-->
        <!--    </div>-->
        <!--</div>-->
        <!--<div class="event_list_animation_3">-->
        <!--    <div data-parallax='{"x": 30, "y": 60, "rotateZ":0}'>-->
        <!--        <img width="58" height="62" src="<?php echo base_url() ?>assets/website/img/icon/event_6.png" class="attachment-full size-full" alt="" />-->
        <!--    </div>-->
        <!--</div>-->
        <!--<div class="event_list_animation_4">-->
        <!--    <div data-parallax='{"x": 30, "y": -50, "rotateZ":0}'>-->
        <!--        <img width="57" height="56" src="<?php echo base_url() ?>assets/website/img/icon/event_7.png" class="attachment-full size-full" alt="" />-->
        <!--    </div>-->
        <!--</div>-->
    </section>
    <!-- blog part end -->

    <!-- faq section part here -->
    <section class="event_list section_padding" >
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-12">
                    <div class="section_tittle_style_02">
                        <h1 class="title wow fadeInDown" data-wow-delay=".5s"><span class="title_overlay_effect">Frequently Asked Questions</span></h1>
                    </div>
                </div>
            </div>
            <div class="faq-accordion wow fadeInDown" data-wow-delay=".5s">
                <div class="accordion-item">
                    <button class="pl-0" id="accordion-button-1" aria-expanded="false">
                        <span class="accordion-title">Why Vedictree International Is The Best CBSE School In Panvel?</span>
                        <span class="icon" aria-hidden="true"></span>
                    </button>
                    <div class="accordion-content">
                        <p>Child-Centric Teaching Approach: Vedic Tree International adopts a child-centric teaching approach that focuses on the unique learning needs of each student. The school's experienced faculty members use innovative and engaging teaching techniques to help students develop a strong foundation in core subjects like Math, English, Science, and Social Studies.

Safe and Nurturing Environment: The school provides a safe and nurturing environment that fosters a student's holistic development. The campus is equipped with state-of-the-art facilities, including a well-stocked library, a playground, and a swimming pool, to provide students with a well-rounded educational experience.

Personalized Attention: Vedic Tree International offers personalized attention to each student to ensure that they receive the necessary support and guidance to achieve their academic and personal goals. The school maintains a low student-to-teacher ratio, which allows faculty members to provide individual attention to each student.</p>
                    </div>
                </div>
                <div class="accordion-item">
                    <button class="pl-0" id="accordion-button-2" aria-expanded="false">
                        <span class="accordion-title"> Which school is best for CBSE?</span>
                        <span class="icon" aria-hidden="true"></span>
                    </button>
                    <div class="accordion-content">
                        <p>Looking for the best CBSE school for your child? Look no further than Vedictree International School Panvel! Our world-class education system focuses on providing holistic learning experiences that prepare students for success in a rapidly changing world. With a dedicated team of highly qualified teachers and state-of-the-art facilities, we ensure that every child reaches their full potential. Enroll your child at Vedictree International School and give them the gift of a bright future.</p>
                    </div>
                </div>
                <div class="accordion-item">
                    <button class="pl-0" id="accordion-button-5" aria-expanded="false">
                        <span class="accordion-title">Why CBSE school is best today?</span>
                        <span class="icon" aria-hidden="true"></span>
                    </button>
                    <div class="accordion-content">
                        <p>Uniformity Throughout the Curriculum: Every CBSE school curriculum has been recognised by the National Council of Education Research and Training (NCERT). The board permits students from both affiliated and non-affiliated schools to take the exams, ensuring consistency across a varied student body.</p>
                    </div>
                </div>
                <div class="accordion-item">
                    <button class="pl-0" id="accordion-button-5" aria-expanded="false">
                        <span class="accordion-title">Which is No.1 CBSE school in panvel?</span>
                        <span class="icon" aria-hidden="true"></span>
                    </button>
                    <div class="accordion-content">
                        <p>Vedictree International School is the No.1 CBSE school in Panvel for grades 1 to 5. With a focus on holistic learning, experienced faculty, and state-of-the-art facilities, we provide an exceptional education that prepares students for success in a rapidly changing world. Enroll your child today!</p>
                    </div>
                </div>
                
            </div>
            <div class="d-flex justify-content-end mt-3">
                <a href="<?php echo base_url('frequently-asked-questions'); ?>" class="read_more_btn">Read More <img src="<?php echo base_url() ?>assets/website/img/icon/arrow_left.svg" alt="read-more"> </a>
            </div>
        </div>
    </section>
    <!-- faq section part end -->

    <!-- Modal -->
    <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-body">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close" style="position: relative;top: -10px;right: 0px;">
                        <span aria-hidden="true"><i class="fa fa-times-circle-o" aria-hidden="true"></i></span>
                    </button>
                    <!-- 16:9 aspect ratio -->
                    <div class="embed-responsive embed-responsive-16by9">
                        <iframe class="embed-responsive-item" src="" id="video" allowfullscreen></iframe>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- footer part here -->
    <?php $this->load->view('web_footer'); ?>
</body>

</html>
<script src="https://player.vimeo.com/api/player.js"></script>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>


<!-- Modal -->
  <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header" style="border:none;">
          <!-- <h5 class="modal-title" id="exampleModalLabel">Modal title</h5> -->
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <img src="<?php echo base_url() ?>assets/website/img/MID TERM ADMISSION OPEN.png" style="width:100%">
        </div>
        <div class="modal-footer">
            <a href="<?php echo base_url('register');?>" class="register-now" style="width:200px;float:left;">Register</a>
            <a href="<?php echo base_url('login');?>" class="register-now" style="width:200px;float:right;" >Login</a>
          </div>
      </div>
    </div>
  </div>


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
<script type="text/javascript">
    type = ['', 'info', 'success', 'warning', 'danger'];
</script>

<?php if (isset($error)) { ?>
    <script type="text/javascript">
        color = Math.floor((Math.random() * 4) + 1);
        $.notify({
            icon: "tim-icons icon-bell-55",
            message: "<?php if (isset($error)) {
                            echo $error['error'];
                        } ?>"
        }, {
            type: type[color],
            timer: 8000,
        });
    </script>
<?php } ?>



<!--Start of Tawk.to Script-->
<script type="text/javascript">
    var Tawk_API = Tawk_API || {},
        Tawk_LoadStart = new Date();
    (function() {
        var s1 = document.createElement("script"),
            s0 = document.getElementsByTagName("script")[0];
        s1.async = true;
        s1.src = 'https://embed.tawk.to/6109468ed6e7610a49ae5ea8/1fc63n7v4';
        s1.charset = 'UTF-8';
        s1.setAttribute('crossorigin', '*');
        s0.parentNode.insertBefore(s1, s0);
    })();
</script>
<!--End of Tawk.to Script-->