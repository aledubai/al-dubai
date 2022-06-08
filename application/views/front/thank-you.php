<!DOCTYPE html>
<html dir="ltr" lang="en-US">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="author" content="zytheme" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta name="description" content="Multi-purpose Business html5 landing page">
    <link rel="shortcut icon" type="image/x-icon" href="<?php echo base_url();?>assets/images/favicon.png">
      <link href="<?php echo base_url()?>assets/landing/css/external.css" rel="stylesheet">
    <link href="<?php echo base_url()?>assets/landing/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo base_url()?>assets/landing/css/style.css" rel="stylesheet">
    <title>
        <?php echo (isset($title))?$title:'Al-Eizba.com'; ?>
    </title>
    <style type="text/css">


    .bg-building {
        background-image: url(../../../assets/landing/images/bg-thank.jpg);
        background-size: cover;
        background-repeat: no-repeat;
        min-height: 640px;
    }
    
.thank-you-content {
    background: rgb(255,255,255,0.7);
    text-align: center;
    padding: 65px 30px;
    border-radius: 13px;
    /*width: 100%;*/
    /*margin: 0 auto;*/
    border: 4px solid #25534a;
}
    
    .content_section {
    position: absolute;
    top: 35%;
    left: 16%;
    padding: 0;
}

section.video_section {
    padding: 0;
}
    
    h1 {
        color: #25534a;
        font-size: 30px;
    }
    
    p {
        color: #25534a;
        font-size: 15px;
        font-weight: bold;
    }

    @media only screen and (min-width: 768px) and (max-width: 991px) {
        .thank-you-content {
    padding: 15px 15px;
}
.content_section {
    position: absolute;
    top: 15px;
    left: 0%;
    padding: 0 15px;
}






    }
    </style>
</head>

<body class="bg-building">
     <section class="content_section">
        <div class="box">
            <div class="container">
                <div class="row">
                    <div class="thank-you-content">
                        <div> <a href="<?php echo base_url()?>offers/apartments/book-with-two-percent"><img src="<?php echo base_url()?>assets/landing/images/logo/logo.png"></a> </div>
                        <div>
                            <h1>
                        Thank you for the feedback, we'll get back to you soon.
                    </h1>
                            <p>-Team Al-Eizba</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>  
</body>
<script src="<?php echo base_url()?>assets/landing/js/jquery-2.2.4.min.js"></script>
    <script src="<?php echo base_url()?>assets/landing/js/plugins.js"></script>
    <script src="<?php echo base_url()?>assets/landing/js/functions.js"></script>
    <script src="<?php echo base_url()?>assets/landing/js/underscore-min.js"></script>
    <script src="<?php echo base_url()?>assets/landing/js/moment.min.js"></script>
    <script src="<?php echo base_url()?>assets/landing/js/validate.min.js"></script>
</html>