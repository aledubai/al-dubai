 <!DOCTYPE html>
<html dir="ltr" lang="en-US">
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="author" content="zytheme" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta name="description" content="Multi-purpose Business html5 landing page">
    <link rel="shortcut icon" type="image/x-icon" href="<?php echo base_url();?>assets/images/favicon.png">
    <link href='https://fonts.googleapis.com/css?family=Roboto:300,300i,400,400i,700' rel='stylesheet' type='text/css'>
    <link href="<?php echo base_url()?>assets/landing/css/external.css" rel="stylesheet">
    <link href="<?php echo base_url()?>assets/landing/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo base_url()?>assets/landing/css/style.css" rel="stylesheet">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
    <title>
        <?php echo (isset($title))?$title:'Ale-izba.com'; ?>
    </title>
</head>
<style type="text/css">
    #slider{
position: absolute;
    top: 0;
    width: 100%;

}
.bg-section {
    position: inherit;
    background: rgb(37,83,74,0.4);
}
video
{
position: relative;
}
</style>
<body class="body-scroll">
    <div id="wrapper" class="wrapper clearfix">
        <header id="navbar-spy" class="header header-1 header-transparent header-fixed">
            <nav id="primary-menu" class="navbar navbar-fixed-top">
                <div class="container">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse-1" aria-expanded="false"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button> <a class="logo" href="<?php echo base_url()."offers/apartments/book-with-two-percent";?>">
                        <img class="logo-dark" src="<?php echo base_url()?>assets/landing/images/logo/logo.png" alt="Vero Logo">
                        <img class="logo-light" src="<?php echo base_url()?>assets/landing/images/logo/logo.png" alt="Vero Logo">
                        </a> </div>
                    <div class="collapse navbar-collapse pull-right" id="navbar-collapse-1">
                        <ul class="nav navbar-nav nav-pos-right navbar-left nav-split">
                            <li class="active"><a data-scroll="scrollTo" href="#offer">OFFERS</a> </li>
                            <li><a data-scroll="scrollTo" href="#dubai">Why dubai</a> </li>
                            <li><a data-scroll="scrollTo" href="#sobha">why Al-Eizba</a> </li>
                        </ul>
                    </div>
                </div>
            </nav>
        </header>
        <section id="slider" class="section slider slider-form" style="position: relative;">
            <video autoplay muted loop id="myVideo">
              <source src="<?php echo base_url()?>assets/landing/images/background/video-1.mp4" type="video/mp4">
            </video>
            <div class="slide--item bg-overlay bg-overlay-dark" style="position: absolute;top: 0;width: 100%">
                <div class="bg-section"> 
                    <!-- <img src="<?php echo base_url()?>assets/landing/images/background/bg-5.jpg" alt="bg"> --> </div>
                <div class="container">
                    <div class="row row-content">
                        <div class="col-xs-12 col-sm-6 col-md-5 pt-100">
                            <div class="slide--headline"><i class="fas fa-arrow-circle-right"></i> Save Money <br> <i class="fas fa-arrow-circle-right"></i> Trust For Investment <br><i class="fas fa-arrow-circle-right"></i> Lifetime Property Maintenance <br><i class="fas fa-arrow-circle-right"></i> Best Deals with Best Price Guarantee</div>
                            <div class="slide--bio">We not only help you get the idea property but we care for your investment. Lifetime guidance and care for your property.</div>
                            <div class="slide--video"> </div>
                        </div>
                        <div class="col-xs-12 col-sm-6 col-md-5 col-md-offset-2">
                            <div class="slide--action">
                                <h6>REGISTER YOUR INTEREST</h6>
                                <form class="mb-0 padding-form" data-id='1' name="form_save1" id="form_save1" method="post" action="<?php echo base_url('landingpageppc/save_data')?>">
                                    <div class="form-group">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <?php echo validation_errors('<div class="alert alert-danger alert-dismissable">', ' <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button></div>'); ?>
                                                    <?php
                                    $this->load->helper('form');
                                    $error = $this->session->flashdata('error');
                                    if($error)
                                    {
                                        ?>
                                                        <div class="alert alert-danger alert-dismissable">
                                                            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                                                            <?php echo $error; ?>
                                                        </div>
                                                        <?php }
                                    $success = $this->session->flashdata('success');
                                    if($success)
                                    {
                                        ?>
                                                            <div class="alert alert-success alert-dismissable">
                                                                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                                                                <?php echo $success; ?>
                                                            </div>
                                                            <?php } ?>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="forms">
                                        <input type="text" name="name" id="name" placeholder="Name" class="form-control">
                                        <div class=" messages text-left"></div>
                                    </div>
                                    <div class="forms">
                                        <select class="form-control" name="country" id="country">
                                            <option value="">---Select---</option>
                                            <?php
                                                if(!empty($country_list))
                                                {
                                                    foreach ($country_list as $key => $value) 
                                                    {

                                                        ?>
                                                <option value="<?php echo $value->id;?>" <?php if($value->name =='India'){echo "selected";}?>>
                                                    <?php echo $value->name;?>
                                                </option>
                                                <?php
                                                    }
                                                }
                                            ?>
                                        </select>
                                        <div class=" messages text-left"></div>
                                    </div>
                                    <div class="forms">
                                        <div class="input-group">
                                            <div class="input-group-addon" id="mobile_code_div">+91</div>
                                            <input type="hidden" id="mobile_code" value="91" name="mobile_code" id="mobile_code">
                                            <input type="text" class="form-control" id="mobile" name="mobile" placeholder=" Mobile OR Phone Number" maxlength="20"> </div>
                                        <div class=" messages  text-left"></div>
                                    </div>
                                    <div class="forms">
                                        <input type="email" name="email" id="email" placeholder="Email" class="form-control" onkeyup="this.value=removeSpaces(this.value);">
                                        <div class=" messages  text-left"></div>
                                    </div>
                                    <div class="forms">
                                        <textarea name="description" id="description" placeholder="Description" class="form-control"></textarea>
                                        <div class=" messages  text-left"></div>
                                    </div>
                                    <div>
                                        <input type="submit" class="btn btn--primary btn--block mt-10" value="Enquire Now"> </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        
        <section id="offer">
            <div class="container">
                <div class="row">
                    <div class="heading">
                        <h1>Luxury Studio Apartments in Jumeirah Lake Towers</h1> </div>
                    <div class="content-p">
                        <p>We offer luxury studio apartments in your desirable locations near by dinning, workplace and Shopping complexes. Design your dream home with Aleizba. We always believe to offer verified within price range apartments which is furnished ready to move short/long term easy payment studio apartments for rent in Jumeirah Lake Towers. We are not only help you to get the idea property but we take care for your investment. Lifetime guidance and care for your property.</p>
                    </div>
                </div>
            </div>
        </section>
        <section class="sec-1">
            <div class="row">
                <div class="col-md-6">
                    <div class="content-sec">
                        <h3>Why Should You Buy Property in Dubai?? </h3>
                        <ul class="list-style">
                            <li>Dubai is the richest city in the UAE. Why?</li>
                            <li>Trading Oil??? NOOO  just contributes 1 %</li>
                            <li>Tourism Economy</li>
                            <li>Multicultural Community</li>
                            <li>One of the safest city in the World</li>
                            <li>Easy Connectivity from everywhere</li>
                            
                        </ul>
                    </div>
                </div>
                <div class="col-md-6 right-side-img">
                    <div class="images-showcase">
                        
                    </div>
                </div>
            </div>
        </section>
        <section class="botoonmt">
            <div class="mid-cont">
                <p>
                    Thanks to Visionary Leader of Dubai Sheikh Mohammad bin Rashid Al Maktoum Converted oil based economy to tourism based economy. Attractions of Dubai are the Tallest Buildings, Luxury Homes, Largest man made Harbor, beautiful beaches and King size Lifestyle.
                </p>
            </div>
        </section>
        <section id="feature2" class="section feature feature-2">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 col-sm-6 col-md-6 wow fadeInUp"> <img class="img-responsive feature-image" src="<?php echo base_url()?>assets/landing/images/background/bg-2.jpg" alt="device" /> </div>
                    <div class="col-xs-12 col-sm-6 col-md-6">
                        <div class="wow fadeInUp" data-wow-duration="1s">
                            <h3 class="">Book your Dream Home with Just 2%</h3>
                            <ul class="home-list">
                                <li><i class="fa fa-hand-o-right" aria-hidden="true"></i> Starting INR 1.6 CR</li>
                                <li><i class="fa fa-hand-o-right" aria-hidden="true"></i> Choice of Off-Plan and Ready to Move-In Homes</li>
                                <li><i class="fa fa-hand-o-right" aria-hidden="true"></i> 2 International Schools in Community</li>
                                <li><i class="fa fa-hand-o-right" aria-hidden="true"></i> 12 mins from The Burj Khalifa</li>
                                <li><i class="fa fa-hand-o-right" aria-hidden="true"></i> Flexible Payment Plans</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>
         <section class="sec-1">
            <div class="row">
                <div class="col-md-6 left-side-img">
                    <div class="images-showcase">
                        
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="content-sec-right">
                        <h3>Real estate Investor in Dubai </h3>
                        <p>
                            Dubai hit records in post pandemic, in the field of Dubai real estate property segment.  These places of Dubai were in the main focus after post pandemic effect. Villas and town houses in Dubai Hills Estate, Arabian Ranches, The Palm Jumeirah, and Mohammed bin Rashid City and Damac Hills were the popular areas for transactions, according to data. The most popular areas of incorporation for apartments included Downtown Dubai, Dubai Marina, Jumeirah Village Circle and The Palm, Business. Dubai records the biggest numbers of real estate transaction in 2021 despite of covid Pandemic. When whole world's economy is fight with pandemics Dubai Real estate affected by the least downfall.

                        </p>
                    </div>
                </div>
                
            </div>
        </section>
        <section class="three-section">
            <div class="container">
                <div class="row">
                    <div class="sr-heading">
                        <h3>Why now Investment in Dubai??</h3>
                        <p>During pandemic the population of Dubai decrease by 10 % which led the vacant properties and the new properties construction got panic. The lowest price ever in the history of Dubai leads to great transaction in 2020 and 2021. It’s Now or Never!</p>
                    </div>
                    <div class="col-md-4 box-padding">
                        <div class="sr-box">
                            <div class="sr-img">
                                <img src="<?php echo base_url()?>assets/landing/images/expo.jpg" alt="services Images" class="img-responsive" >
                            </div>
                            <div class="sr-content">
                                <h4>Expo 2020</h4>
                                <p>World Expo 2020 scheduled extended due to covid. Bring entire world to Dubai. Generates a lot number of jobs and increase in the business and attracts foreign direct investments.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 box-padding">
                        <div class="sr-box">
                            <div class="sr-img">
                                <img src="<?php echo base_url()?>assets/landing/images/tax.jpg" alt="services Images" class="img-responsive" >
                            </div>
                            <div class="sr-content">
                                <h4>Tax Free Nation</h4>
                                <p>Dubai is a tax free nation. Free from income tax and sales tax on few goods and services. No stamp Duty and property tax exempted. Properties owned in Dubai can earn good amount of rental which is higher for ROI as compared to India.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 box-padding">
                        <div class="sr-box">
                            <div class="sr-img">
                                <img src="<?php echo base_url()?>assets/landing/images/Investor-visas.jpg" alt="services Images" class="img-responsive" >
                            </div>
                            <div class="sr-content">
                                <h4>Visa for investor</h4>
                                <p>If you buy property in Dubai you will get 2 years of investor visa if your property value is up to 1 million AED. If you buy above 5 million AED visa will be provided for 5 years. If you buy above 10 million AED it will be for 10 years.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        
        <section class="pt-0 pb-0">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <hr class="feature-divider"> </div>
                </div>
            </div>
        </section>
        <!-- <section id="dubai" class="section reviews pb-70 bg-white">
            <div class="container">
                <div class="row clearfix">
                    <div class="col-xs-12 col-sm-12 col-md-6 col-md-offset-3">
                        <div class="heading heading-1 mb-80 text--center wow fadeInUp" data-wow-duration="1s">
                            <h2 class="heading--title">Why Invest in Dubai ?</h2> </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xs-6 col-sm-6 col-md-3">
                        <div class="testimonial-panel wow fadeInUp" data-wow-duration="1s">
                            <div class="testimonial--img"> <img src="<?php echo base_url()?>assets/landing/images/services/icon_1.png" alt="author"> </div>
                            <div class="testimonial--body">
                                <div class="testimonial--author">
                                    <h5>Multi-Cultural Community</h5> </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-6 col-sm-6 col-md-3">
                        <div class="testimonial-panel wow fadeInUp" data-wow-duration="1s">
                            <div class="testimonial--img"> <img src="<?php echo base_url()?>assets/landing/images/services/icon_2.png" alt="author"> </div>
                            <div class="testimonial--body">
                                <div class="testimonial--author">
                                    <h5>One of the Safest Cities in the Worlds</h5> </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-6 col-sm-6 col-md-3">
                        <div class="testimonial-panel wow fadeInUp" data-wow-duration="1s">
                            <div class="testimonial--img"> <img src="<?php echo base_url()?>assets/landing/images/services/icon_3.png" alt="author"> </div>
                            <div class="testimonial--body">
                                <div class="testimonial--author">
                                    <h5>Tax Free Rental Returns</h5> </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-6 col-sm-6 col-md-3">
                        <div class="testimonial-panel wow fadeInUp" data-wow-duration="1s">
                            <div class="testimonial--img"> <img src="<?php echo base_url()?>assets/landing/images/services/icon_4.png" alt="author"> </div>
                            <div class="testimonial--body">
                                <div class="testimonial--author">
                                    <h5>Easy <br>Connectivity</h5> </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xs-6 col-sm-6 col-md-3">
                        <div class="testimonial-panel wow fadeInUp" data-wow-duration="1s">
                            <div class="testimonial--img"> <img src="<?php echo base_url()?>assets/landing/images/services/icon_5.png" alt="author"> </div>
                            <div class="testimonial--body">
                                <div class="testimonial--author">
                                    <h5>Long Term Residency Visa</h5> </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-6 col-sm-6 col-md-3">
                        <div class="testimonial-panel wow fadeInUp" data-wow-duration="1s">
                            <div class="testimonial--img"> <img src="<?php echo base_url()?>assets/landing/images/services/icon_6.png" alt="author"> </div>
                            <div class="testimonial--body">
                                <div class="testimonial--author">
                                    <h5>Stable <br>Currency</h5> </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-6 col-sm-6 col-md-3">
                        <div class="testimonial-panel wow fadeInUp" data-wow-duration="1s">
                            <div class="testimonial--img"> <img src="<?php echo base_url()?>assets/landing/images/services/icon_7.png" alt="author"> </div>
                            <div class="testimonial--body">
                                <div class="testimonial--author">
                                    <h5>Host of <br>Expo 2020</h5> </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-6 col-sm-6 col-md-3">
                        <div class="testimonial-panel wow fadeInUp" data-wow-duration="1s">
                            <div class="testimonial--img"> <img src="<?php echo base_url()?>assets/landing/images/services/icon_8.png" alt="author"> </div>
                            <div class="testimonial--body">
                                <div class="testimonial--author">
                                    <h5>World-Class Healthcare</h5> </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section> -->
        <section id="sobha" class="section cta text-center bg-white">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 bottom-form">
                        <div class="bottom-box-style">
                            <div class="bottom-title">
                                <h4>Why Choose Al-Eizba</h4> </div>
                            <div class="row" style="padding: 0px 15px;">
                                <div class="col-md-3">
                                    <div class="s-box">
                                        <div class="s-icons"> <img src="<?php echo base_url()?>assets/landing/images/services/i1.png" alt="author"> </div>
                                        <div class="s-text">
                                            <h4>best property counselling</h4> </div>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="s-box">
                                        <div class="s-icons"> <img src="<?php echo base_url()?>assets/landing/images/services/i2.png" alt="author"> </div>
                                        <div class="s-text">
                                            <h4>Best team of realtors</h4> </div>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="s-box">
                                        <div class="s-icons"> <img src="<?php echo base_url()?>assets/landing/images/services/i3.png" alt="author"> </div>
                                        <div class="s-text">
                                            <h4>Monthly events</h4> </div>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="s-box">
                                        <div class="s-icons"> <img src="<?php echo base_url()?>assets/landing/images/services/i41.png" alt="author"> </div>
                                        <div class="s-text">
                                            <h4>Property shows in India</h4> </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row" style="padding: 15px 15px;">
                                
                                <div class="col-md-3">
                                    <div class="s-box">
                                        <div class="s-icons"> <img src="<?php echo base_url()?>assets/landing/images/services/i51.png" alt="author"> </div>
                                        <div class="s-text">
                                            <h4>no brokerage from buyers</h4> </div>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="s-box">
                                        <div class="s-icons"> <img src="<?php echo base_url()?>assets/landing/images/services/i61.png" alt="author"> </div>
                                        <div class="s-text">
                                            <h4>Lifetime Maintenance</h4> </div>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="s-box">
                                        <div class="s-icons"> <img src="<?php echo base_url()?>assets/landing/images/services/exp.png" alt="author"> </div>
                                        <div class="s-text">
                                            <h4>10+ years of experience</h4> </div>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="s-box">
                                        <div class="s-icons"> <img src="<?php echo base_url()?>assets/landing/images/services/delhi.png" alt="author"> </div>
                                        <div class="s-text">
                                            <h4>based in Delhi</h4> </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-12 col-md-4" hidden>
                        <div class="slide--action">
                            <div class="form-title">
                                <h6>REGISTER YOUR INTEREST</h6> </div>
                            <form class="mb-0 padding-form">
                                <div>
                                    <input type="text" name="first-name" placeholder="Name" class="form-control"> </div>
                                <div>
                                    <select class="form-control">
                                        <option value="101">India</option>
                                        <option value="229">United Arab Emirates</option>
                                        <option value="191">Saudi Arabia</option>
                                        <option value="1">Afghanistan</option>
                                        <option value="2">Albania</option>
                                        <option value="3">Algeria</option>
                                        <option value="4">American Samoa</option>
                                        <option value="5">Andorra</option>
                                        <option value="6">Angola</option>
                                        <option value="7">Anguilla</option>
                                        <option value="8">Antarctica</option>
                                        <option value="9">Antigua And Barbuda</option>
                                        <option value="10">Argentina</option>
                                        <option value="11">Armenia</option>
                                        <option value="12">Aruba</option>
                                        <option value="13">Australia</option>
                                        <option value="14">Austria</option>
                                        <option value="15">Azerbaijan</option>
                                        <option value="17">Bahrain</option>
                                        <option value="18">Bangladesh</option>
                                        <option value="19">Barbados</option>
                                        <option value="20">Belarus</option>
                                        <option value="21">Belgium</option>
                                        <option value="22">Belize</option>
                                        <option value="23">Benin</option>
                                        <option value="24">Bermuda</option>
                                        <option value="25">Bhutan</option>
                                        <option value="26">Bolivia</option>
                                        <option value="27">Bosnia and Herzegovina</option>
                                        <option value="28">Botswana</option>
                                        <option value="29">Bouvet Island</option>
                                        <option value="30">Brazil</option>
                                        <option value="31">British Indian Ocean Territory</option>
                                        <option value="32">Brunei</option>
                                        <option value="33">Bulgaria</option>
                                        <option value="34">Burkina Faso</option>
                                        <option value="35">Burundi</option>
                                        <option value="36">Cambodia</option>
                                        <option value="37">Cameroon</option>
                                        <option value="38">Canada</option>
                                        <option value="39">Cape Verde</option>
                                        <option value="40">Cayman Islands</option>
                                        <option value="41">Central African Republic</option>
                                        <option value="42">Chad</option>
                                        <option value="43">Chile</option>
                                        <option value="44">China</option>
                                        <option value="45">Christmas Island</option>
                                        <option value="46">Cocos (Keeling) Islands</option>
                                        <option value="47">Colombia</option>
                                        <option value="48">Comoros</option>
                                        <option value="49">Congo</option>
                                        <option value="50">Congo The Democratic Republic Of The</option>
                                        <option value="51">Cook Islands</option>
                                        <option value="52">Costa Rica</option>
                                        <option value="53">Cote D'Ivoire (Ivory Coast)</option>
                                        <option value="54">Croatia (Hrvatska)</option>
                                        <option value="55">Cuba</option>
                                        <option value="56">Cyprus</option>
                                        <option value="57">Czech Republic</option>
                                        <option value="58">Denmark</option>
                                        <option value="59">Djibouti</option>
                                        <option value="60">Dominica</option>
                                        <option value="61">Dominican Republic</option>
                                        <option value="62">East Timor</option>
                                        <option value="63">Ecuador</option>
                                        <option value="64">Egypt</option>
                                        <option value="65">El Salvador</option>
                                        <option value="66">Equatorial Guinea</option>
                                        <option value="67">Eritrea</option>
                                        <option value="68">Estonia</option>
                                        <option value="69">Ethiopia</option>
                                        <option value="70">External Territories of Australia</option>
                                        <option value="71">Falkland Islands</option>
                                        <option value="72">Faroe Islands</option>
                                        <option value="73">Fiji Islands</option>
                                        <option value="74">Finland</option>
                                        <option value="75">France</option>
                                        <option value="76">French Guiana</option>
                                        <option value="77">French Polynesia</option>
                                        <option value="78">French Southern Territories</option>
                                        <option value="79">Gabon</option>
                                        <option value="80">Gambia The</option>
                                        <option value="81">Georgia</option>
                                        <option value="82">Germany</option>
                                        <option value="83">Ghana</option>
                                        <option value="84">Gibraltar</option>
                                        <option value="85">Greece</option>
                                        <option value="86">Greenland</option>
                                        <option value="87">Grenada</option>
                                        <option value="88">Guadeloupe</option>
                                        <option value="89">Guam</option>
                                        <option value="90">Guatemala</option>
                                        <option value="91">Guernsey and Alderney</option>
                                        <option value="92">Guinea</option>
                                        <option value="93">Guinea-Bissau</option>
                                        <option value="94">Guyana</option>
                                        <option value="95">Haiti</option>
                                        <option value="96">Heard and McDonald Islands</option>
                                        <option value="97">Honduras</option>
                                        <option value="98">Hong Kong S.A.R.</option>
                                        <option value="99">Hungary</option>
                                        <option value="100">Iceland</option>
                                        <option value="102">Indonesia</option>
                                        <option value="103">Iran</option>
                                        <option value="104">Iraq</option>
                                        <option value="105">Ireland</option>
                                        <option value="106">Israel</option>
                                        <option value="107">Italy</option>
                                        <option value="108">Jamaica</option>
                                        <option value="109">Japan</option>
                                        <option value="110">Jersey</option>
                                        <option value="111">Jordan</option>
                                        <option value="112">Kazakhstan</option>
                                        <option value="113">Kenya</option>
                                        <option value="114">Kiribati</option>
                                        <option value="115">Korea North</option>
                                        <option value="116">Korea South</option>
                                        <option value="117">Kuwait</option>
                                        <option value="118">Kyrgyzstan</option>
                                        <option value="119">Laos</option>
                                        <option value="120">Latvia</option>
                                        <option value="121">Lebanon</option>
                                        <option value="122">Lesotho</option>
                                        <option value="123">Liberia</option>
                                        <option value="124">Libya</option>
                                        <option value="125">Liechtenstein</option>
                                        <option value="126">Lithuania</option>
                                        <option value="127">Luxembourg</option>
                                        <option value="128">Macau S.A.R.</option>
                                        <option value="129">Macedonia</option>
                                        <option value="130">Madagascar</option>
                                        <option value="131">Malawi</option>
                                        <option value="132">Malaysia</option>
                                        <option value="133">Maldives</option>
                                        <option value="134">Mali</option>
                                        <option value="135">Malta</option>
                                        <option value="136">Man (Isle of)</option>
                                        <option value="137">Marshall Islands</option>
                                        <option value="138">Martinique</option>
                                        <option value="139">Mauritania</option>
                                        <option value="140">Mauritius</option>
                                        <option value="141">Mayotte</option>
                                        <option value="142">Mexico</option>
                                        <option value="143">Micronesia</option>
                                        <option value="144">Moldova</option>
                                        <option value="145">Monaco</option>
                                        <option value="146">Mongolia</option>
                                        <option value="147">Montserrat</option>
                                        <option value="148">Morocco</option>
                                        <option value="149">Mozambique</option>
                                        <option value="150">Myanmar</option>
                                        <option value="151">Namibia</option>
                                        <option value="152">Nauru</option>
                                        <option value="153">Nepal</option>
                                        <option value="154">Netherlands Antilles</option>
                                        <option value="155">Netherlands The</option>
                                        <option value="156">New Caledonia</option>
                                        <option value="157">New Zealand</option>
                                        <option value="158">Nicaragua</option>
                                        <option value="159">Niger</option>
                                        <option value="160">Nigeria</option>
                                        <option value="161">Niue</option>
                                        <option value="162">Norfolk Island</option>
                                        <option value="163">Northern Mariana Islands</option>
                                        <option value="164">Norway</option>
                                        <option value="165">Oman</option>
                                        <option value="166">Pakistan</option>
                                        <option value="167">Palau</option>
                                        <option value="168">Palestinian Territory Occupied</option>
                                        <option value="169">Panama</option>
                                        <option value="170">Papua new Guinea</option>
                                        <option value="171">Paraguay</option>
                                        <option value="172">Peru</option>
                                        <option value="173">Philippines</option>
                                        <option value="174">Pitcairn Island</option>
                                        <option value="175">Poland</option>
                                        <option value="176">Portugal</option>
                                        <option value="177">Puerto Rico</option>
                                        <option value="178">Qatar</option>
                                        <option value="179">Reunion</option>
                                        <option value="180">Romania</option>
                                        <option value="181">Russia</option>
                                        <option value="182">Rwanda</option>
                                        <option value="183">Saint Helena</option>
                                        <option value="184">Saint Kitts And Nevis</option>
                                        <option value="185">Saint Lucia</option>
                                        <option value="186">Saint Pierre and Miquelon</option>
                                        <option value="187">Saint Vincent And The Grenadines</option>
                                        <option value="188">Samoa</option>
                                        <option value="189">San Marino</option>
                                        <option value="190">Sao Tome and Principe</option>
                                        <option value="192">Senegal</option>
                                        <option value="193">Serbia</option>
                                        <option value="194">Seychelles</option>
                                        <option value="195">Sierra Leone</option>
                                        <option value="196">Singapore</option>
                                        <option value="197">Slovakia</option>
                                        <option value="198">Slovenia</option>
                                        <option value="199">Smaller Territories of the UK</option>
                                        <option value="200">Solomon Islands</option>
                                        <option value="201">Somalia</option>
                                        <option value="202">South Africa</option>
                                        <option value="203">South Georgia</option>
                                        <option value="204">South Sudan</option>
                                        <option value="205">Spain</option>
                                        <option value="206">Sri Lanka</option>
                                        <option value="207">Sudan</option>
                                        <option value="208">Suriname</option>
                                        <option value="209">Svalbard And Jan Mayen Islands</option>
                                        <option value="210">Swaziland</option>
                                        <option value="211">Sweden</option>
                                        <option value="212">Switzerland</option>
                                        <option value="213">Syria</option>
                                        <option value="214">Taiwan</option>
                                        <option value="215">Tajikistan</option>
                                        <option value="216">Tanzania</option>
                                        <option value="217">Thailand</option>
                                        <option value="16">The Bahamas</option>
                                        <option value="218">Togo</option>
                                        <option value="219">Tokelau</option>
                                        <option value="220">Tonga</option>
                                        <option value="221">Trinidad And Tobago</option>
                                        <option value="222">Tunisia</option>
                                        <option value="223">Turkey</option>
                                        <option value="224">Turkmenistan</option>
                                        <option value="225">Turks And Caicos Islands</option>
                                        <option value="226">Tuvalu</option>
                                        <option value="227">Uganda</option>
                                        <option value="228">Ukraine</option>
                                        <option value="230">United Kingdom</option>
                                        <option value="231">United States</option>
                                        <option value="232">United States Minor Outlying Islands</option>
                                        <option value="233">Uruguay</option>
                                        <option value="234">Uzbekistan</option>
                                        <option value="235">Vanuatu</option>
                                        <option value="236">Vatican City State (Holy See)</option>
                                        <option value="237">Venezuela</option>
                                        <option value="238">Vietnam</option>
                                        <option value="239">Virgin Islands (British)</option>
                                        <option value="240">Virgin Islands (US)</option>
                                        <option value="241">Wallis And Futuna Islands</option>
                                        <option value="242">Western Sahara</option>
                                        <option value="243">Yemen</option>
                                        <option value="244">Yugoslavia</option>
                                        <option value="245">Zambia</option>
                                        <option value="246">Zimbabwe</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <div class="input-group">
                                        <div class="input-group-addon">+91</div>
                                        <input type="text" class="form-control" id="exampleInputAmount" placeholder="Number"> </div>
                                </div>
                                <div class="form-group">
                                    <input type="text" name="email" placeholder="Email" class="form-control"> </div>
                                <div>
                                    <input type="submit" class="btn btn--primary btn--block mt-10" value="Enquire Now"> </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <footer id="footer" class="footer footer-5">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 col-sm-6 col-md-6">
                        <div class="footer--copyright text-center"> <span>&copy; 2008 - 2021, <a href="<?php echo base_url()?>"> aleizba.com</a>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-6 col-md-6">
                        <div class="footer--copyright text-center"><a href="<?php echo base_url()?>offers/apartments/book-with-two-percent/privacy-policy">Privacy Policy</a> | <a href="<?php echo base_url()?>offers/apartments/book-with-two-percent/terms-and-conditions">Terms and Conditions</a> </div>
                    </div>

                </div>

            </div>

        </footer>
    </div>
    <script src="<?php echo base_url()?>assets/landing/js/jquery-2.2.4.min.js"></script>
    <script src="<?php echo base_url()?>assets/landing/js/plugins.js"></script>
    <script src="<?php echo base_url()?>assets/landing/js/functions.js"></script>
    <script src="<?php echo base_url()?>assets/landing/js/underscore-min.js"></script>
    <script src="<?php echo base_url()?>assets/landing/js/moment.min.js"></script>
    <script src="<?php echo base_url()?>assets/landing/js/validate.min.js"></script>

    <script>

       function removeSpaces(string)
       {
            return string.split(' ').join('');
        }

 
   (function() {
     // Before using it we must add the parse and format functions
     // Here is a sample implementation using moment.js
     validate.extend(validate.validators.datetime, {
       // The value is guaranteed not to be null or undefined but otherwise it
       // could be anything.
       parse: function(value, options) {
         return +moment.utc(value);
       },
       // Input is a unix timestamp
       format: function(value, options) {
         var format = options.dateOnly ? "YYYY-MM-DD" : "YYYY-MM-DD hh:mm:ss";
         return moment.utc(value).format(format);
       }
     });
   
     // These are the constraints used to validate the form
     var constraints = {
       email: {
         // Email is required
         presence: true,
         // and must be an email (duh)
         email: true
       },
       country: {
         // Email is required
         presence: true,
          
       },
       
       name: {
         // You need to pick a username too
         presence: true,
         // And it must be between 3 and 20 characters long
         length: {
           minimum: 3,
           maximum: 20
         },
         format: {
           // We don't allow anything that a-z and 0-9
           pattern: "[a-z 0-9]+",
           // but we don't care if the username is uppercase or lowercase
           flags: "i",
           message: "can only contain a-z and 0-9"
         }
       },   
       mobile: {
         
         presence: true,
          
         length: {
           minimum: 10,
            },
         format: {
            pattern: "[0-9]+",
            message: "can only contain  0-9"
         }
       } 
        
        
     };

      
   
     // Hook up the form so we can prevent it from being posted
     
     var form = document.querySelector("#form_save1");
     
     form.addEventListener("submit", function(ev) {

       ev.preventDefault();
       handleFormSubmit(form);
     });
   
     // Hook up the inputs to validate on the fly
     var inputs = document.querySelectorAll("input, textarea, select")
     for (var i = 0; i < inputs.length; ++i) {
       inputs.item(i).addEventListener("change", function(ev) {
         var errors = validate(form, constraints) || {};
         showErrorsForInput(this, errors[this.name])
       });
     }
   
     function handleFormSubmit(form, input) {
       // validate the form against the constraints
       var errors = validate(form, constraints);
      console.log(errors);
       // then we update the form to reflect the results
       showErrors(form, errors || {});
       if (!errors) {
         showSuccess();
       }
     }
   
     // Updates the inputs with the validation errors
     function showErrors(form, errors) {
       // We loop through all the inputs and show the errors for that input
       _.each(form.querySelectorAll("input[name], select[name]"), function(input) {
         // Since the errors can be null if no errors were found we need to handle
         // that
         showErrorsForInput(input, errors && errors[input.name]);
       });
     }
   
     // Shows the errors for a specific input
     function showErrorsForInput(input, errors) {
       // This is the root of the input
       var formGroup = closestParent(input.parentNode, "forms")
         // Find where the error messages will be insert into
         , messages = formGroup.querySelector(".messages");
       // First we remove any old messages and resets the classes
       resetFormGroup(formGroup);
       // If we have errors
       if (errors) {
         // we first mark the group has having errors
         formGroup.classList.add("has-error");
         // then we append all the errors
         _.each(errors, function(error) {
           addError(messages, error);
         });
       } else {
         // otherwise we simply mark it as success
         formGroup.classList.add("has-success");
       }
     }
   
     // Recusively finds the closest parent that has the specified class
     function closestParent(child, className) {
       if (!child || child == document) {
         return null;
       }
       if (child.classList.contains(className)) {
         return child;
       } else {
         return closestParent(child.parentNode, className);
       }
     }
   
     function resetFormGroup(formGroup) {
       // Remove the success and error classes
       formGroup.classList.remove("has-error");
       formGroup.classList.remove("has-success");
       // and remove any old messages
       _.each(formGroup.querySelectorAll(".help-block.error"), function(el) {
         el.parentNode.removeChild(el);
       });
     }
   
     // Adds the specified error with the following markup
     // <p class="help-block error">[message]</p>
     function addError(messages, error) {
       var block = document.createElement("span");
       block.classList.add("help-block");
       block.classList.add("mb-0");
       block.classList.add("error");
       block.innerText = error;
       messages.appendChild(block);
     }
   
     function showSuccess() {
       
           $( "#form_save1" ).submit();
   
     }

  
   })();
</script>
<script>
    $(function(){

        $("#country").on('change', function(e) {
          
            var country_id = $("#country").val();
            
            if(country_id.length >0)
            {
                 $.ajax({
                url: "<?php echo base_url('landingpageppc/get_country_code')?>",
                type: 'post',
                data: "country="+country_id,
                success: function(response){
                    
                     $("#mobile_code_div").text("+"+response);
                         
                }
            });
            }
           
        });
    });  
</script>

 
</html>