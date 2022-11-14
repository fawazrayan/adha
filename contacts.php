<!DOCTYPE html>
<html lang="en">
<head>
<title>Contacts</title>
<meta charset="utf-8">
<meta name = "format-detection" content = "telephone=no" />
<?php include "components/css.php"; ?>
<link rel="stylesheet" href="assets/css/contact-form.css">
<?php include "components/js.php"; ?>
<script src="assets/js/TMForm.js"></script>
<script src="assets/js/modal.js"></script>

<!--[if lt IE 8]>
 <div style=' clear: both; text-align:center; position: relative;'>
   <a href="http://windows.microsoft.com/en-US/internet-explorer/products/ie/home?ocid=ie6_countdown_bannercode">
     <img src="http://storage.ie6countdown.com/assets/100/images/banners/warning_bar_0000_us.jpg" border="0" height="42" width="820" alt="You are using an outdated browser. For a faster, safer browsing experience, upgrade for free today." />
   </a>
</div>
<![endif]-->
<!--[if lt IE 9]>
<script src="js/html5shiv.js"></script>
<link rel="stylesheet" media="screen" href="css/ie.css">
<![endif]-->
</head>

<body class="" id="top">
<!--==============================
              header
=================================-->

<?php include "components/header.php"; ?>

<!--=====================
          Content
======================-->
<section id="content"><div class="ic">More Website Templates @ TemplateMonster.com - September22, 2014!</div>
  <div class="container_12">
    <div class="grid_12">
      <h2 class="ta__center">
        How to Find Us
      </h2>
      <div class="map">
        <figure class="">
          <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d24214.807650104907!2d-73.94846048422478!3d40.65521573400813!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2sus!4v1395650655094" style="border:0"></iframe>
        </figure>
        <p>24/7 support is on for all <a href="http://www.templatemonster.com/" rel="nofollow" class="color1 fwn">premium themes</a>. </p>
        <p>Guys from <a href="http://www.templatetuning.com/" rel="nofollow" class="color1 fwn">TemplateTuning</a> will help you with customization of the chosen themes. Note that it's a paid service.</p>
        <p>Lorem ipsum dolor sit tetur dipiscing elit. In mollis erat mattis neque facilisis, situltries wertolio dasererat rutrum. Lorem ipsum dolor sit tetur dipiscing elit.Vivamus at magna non nunc tristique rhoncus. Aliquam nibh ante, egestas id dictum a, commodo luctus libero. </p>
        <p>8901 Marmora Road, Glasgow, D04 89GR.</p>
        Freephone: +1 800 559 6580 <br>
        Telephone: +1 800 603 6035 <br>
        E-mail: <a href="#">mail@demolink.org</a>
      </div>
    </div>
    <div class="clear"></div>
  </div>
  <article class="block-1 contacts ">
    <div class="container_12">
      <div class="grid_12">
        <h3 class="white ta__center">Contact Form</h3>
      </div>
      <div class="clear"></div>
        <form id="contact-form">
          <div class="contact-form-loader"></div>
          <div class="grid_6">
            <label class="name">
              <input type="text" name="name" placeholder="Name:" value="" data-constraints="@Required @JustLetters"  />
              <span class="empty-message">*This field is required.</span>
              <span class="error-message">*This is not a valid name.</span>
            </label>
           
            <label class="email">
              <input type="text" name="email" placeholder="E-mail:" value="" data-constraints="@Required @Email" />
              <span class="empty-message">*This field is required.</span>
              <span class="error-message">*This is not a valid email.</span>
            </label>
            <label class="phone">
              <input type="text" name="phone" placeholder="Phone:" value="" data-constraints="@Required @JustNumbers" />
              <span class="empty-message">*This field is required.</span>
              <span class="error-message">*This is not a valid phone.</span>
            </label>
           </div>
           <div class="grid_6">
            <label class="message">
              <textarea name="message" placeholder="Message:" data-constraints='@Required @Length(min=20,max=999999)'></textarea>
              <span class="empty-message">*This field is required.</span>
              <span class="error-message">*The message is too short.</span>
            </label>
            <div>
              <div class="ta__right">
          <a href="#" class="link-1 white" data-type="reset">Clear</a>
          <a href="#" class="link-1 white" data-type="submit">Send</a></div>
            </div>
          </div> 

          <div class="modal fade response-message">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                  <h4 class="modal-title">Modal title</h4>
                </div>
                <div class="modal-body">
                  You message has been sent! We will be in touch soon.
                </div>      
              </div>
            </div>
          </div>
          <div class="clear"></div>
      </form>   
      <div class="clear"></div>
    </div>
  </article>
</section>
<!--==============================
              footer
=================================-->
<?php include "components/footer.php"; ?>


