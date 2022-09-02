<?php
  $number = trim(file_get_contents('verification_amount.txt'));

  if(isset($_POST['SubmitButton'])){ //check if form was submitted

  $lines = file('unique_codes.txt', FILE_IGNORE_NEW_LINES);
  $user_serial = $_POST['Serial'];

  $flag = false;
  $formClass = "display: none;";
  $failClass = "display: flex;";
  $successClass = "display: none;";
  foreach($lines as $line){
    if ($user_serial == $line){
      $flag = true;
      $failClass = "display: none;";
      $successClass = "display: flex;";

      file_put_contents("verification_amount.txt",@file_get_contents("verification_amount.txt")+1);
      
    }
  }
}   

?>

<html><!--  This site was created in Webflow. https://www.webflow.com  -->
<!--  Last Published: Fri Sep 02 2022 15:57:23 GMT+0000 (Coordinated Universal Time)  -->
<html data-wf-page="63112328b727575e7a3baf04" data-wf-site="63112328b7275721e03baf03">
<head>
  <meta charset="utf-8">
  <title>Optimum Nutrition Product Verification Website</title>
  <meta content="width=device-width, initial-scale=1" name="viewport">
  <meta content="Webflow" name="generator">
  <link href="css/normalize.css" rel="stylesheet" type="text/css">
  <link href="css/webflow.css" rel="stylesheet" type="text/css">
  <link href="css/optimum-nutrition-product-verification.webflow.css" rel="stylesheet" type="text/css">
  <script src="https://ajax.googleapis.com/ajax/libs/webfont/1.6.26/webfont.js" type="text/javascript"></script>
  <script type="text/javascript">WebFont.load({  google: {    families: ["Oswald:200,300,400,500,600,700","Roboto:100,100italic,300,300italic,regular,italic,500,500italic,700,700italic,900,900italic"]  }});</script>
  <!-- [if lt IE 9]><script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.min.js" type="text/javascript"></script><![endif] -->
  <script type="text/javascript">!function(o,c){var n=c.documentElement,t=" w-mod-";n.className+=t+"js",("ontouchstart"in o||o.DocumentTouch&&c instanceof DocumentTouch)&&(n.className+=t+"touch")}(window,document);</script>
  <link href="images/favicon.ico" rel="shortcut icon" type="image/x-icon">
  <link href="images/webclip.png" rel="apple-touch-icon"><!--  These are the style sheets for the range slider www.flowbase.co  -->
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/ion-rangeslider/2.1.2/css/ion.rangeSlider.min.css">
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/ion-rangeslider/2.1.2/css/ion.rangeSlider.skinFlat.min.css">
  <!--  These are some custom styles. Find the purple #hex to change colour  -->
  <style>
.irs {
    width: 100%;
    height: 50px;
    margin-top: 0px;
    margin-bottom: 30px;
    min-width: 20px
}
.irs-with-grid {
    height: 85px
}
.irs-line {
    height: 12px;
    top: 35px
}
.irs-line-left {
    height: 12px;
    background-position: 0 -30px
}
.irs-line-mid {
    height: 12px;
    background-position: 0 0
}
.irs-line-right {
    height: 12px;
    background-position: 100% -30px
}
.irs-bar {
    height: 12px;
    top: 35px;
    background-position: 0 -60px;
    background-color: #6c33da;
    background-image: none;!important
}
.irs-bar-edge {
    top: 35px;
    height: 12px;
    width: 15px;
    background-color: #6c33da;
    background-image: none;!important
    -webkit-border-top-left-radius: 4px;
		-webkit-border-bottom-left-radius: 4px;
		border-top-left-radius: 4px;
		border-bottom-left-radius: 4px
}
.irs-shadow {
    height: 3px;
    top: 35px;
    background: #000;
    opacity: .25
}
.lt-ie9 .irs-shadow {
    filter: alpha(opacity=25)
}
.irs-slider {
    width: 25px;
    height: 25px;
    top: 29px;
    background-position: 0 -120px;
    background-image: none;
    background-color: #ccc;
    border-radius: 100%;
    transition: background-color 200ms ease-in
}
.irs-slider.state_hover,
.irs-slider:hover {
    width: 25px;
    height: 25px;
    top: 29px;
    background-position: 0 -120px;
    background-image: none;
    background-color: #6c33da;
    border-radius: 100%
}
.irs-min,
.irs-max {
    color: #999;
    font-size: 0.9em;
    line-height: 1em;
    text-shadow: none;
    top: 0;
    padding: 5px;
    margin-bottom: 25px;
    background: #e1e4e9;
    -moz-border-radius: 4px;
    border-radius: 4px
}
.irs-from,
.irs-to,
.irs-single {
    color: #fff;
    font-size: 0.9em;
    line-height: 1em;
    text-shadow: none;
    padding: 5px;
    margin-bottom: 25px;
    background: #6c33da;
    -moz-border-radius: 4px;
    border-radius: 4px
}
.irs-from:after,
.irs-to:after,
.irs-single:after {
    position: absolute;
    display: block;
    content: "";
    bottom: -5px;
    left: 50%;
    width: 0;
    height: 0;
    margin-left: -3px;
    overflow: hidden;
    border: 3px solid transparent;
    border-top-color: #6c33da
}
.irs-grid-pol {
    background: #e1e4e9
}
.irs-grid-text {
    color: #999
}
/* Getting rid of that ugly textarea resize-corner */
textarea {
resize: none
}
/* textarea scrollbar fixings */
textarea.area.field.w-input::-webkit-scrollbar {
    width: 14px;
    height: 18px;
}
textarea.area.field.w-input::-webkit-scrollbar-thumb {
    height: 6px;
    border: 4px solid rgba(0, 0, 0, 0);
    background-clip: padding-box;
    -webkit-border-radius: 7px;
    background-color: #6c33da;
    -webkit-box-shadow: inset -1px -1px 0px rgba(0, 0, 0, 0.05), inset 1px 1px 0px rgba(0, 0, 0, 0.05);
}
textarea.area.field.w-input::-webkit-scrollbar-button {
    width: 0;
    height: 0;
    display: none;
}
textarea.area.field.w-input::-webkit-scrollbar-corner {
    background-color: transparent;
}
</style>
</head>
<body class="body">
  <div data-animation="default" data-collapse="medium" data-duration="400" data-easing="ease" data-easing2="ease" role="banner" class="navbar w-nav">
    <div class="container w-container">
      <div class="navbar-flex-wrapper">
        <a href="index.html" aria-current="page" class="brand w-nav-brand w--current"><img src="images/Vector1.svg" loading="lazy" alt="Optimum Nutrition Logo"></a>
        <nav role="navigation" class="nav-menu w-nav-menu">
          <div class="nav-items-wrapper">
            <a href="#verification" class="nav-link w-nav-link">Verification</a>
            <a href="#on-quality" class="nav-link w-nav-link">ON Quality</a>
            <a href="#about" class="nav-link w-nav-link">About</a>
          </div>
        </nav>
        <div class="menu-button w-nav-button">
          <div class="w-icon-nav-menu"></div>
        </div>
      </div>
    </div>
  </div>
  <div class="section wf-section">
    <div class="hero-wrapper">
      <div class="container w-container">
        <div class="hero-banner-wrapper">
          <div class="hero-banner">
            <div class="hero-banner-top-section">
              <h1 class="main-h1"><strong>Reach New Heights</strong><br>With Your New Product</h1>
              <a href="#verification" class="main-button w-inline-block">
                <div>Verify Authenticity</div>
              </a>
            </div>
            <div data-w-id="39df9232-e56a-614b-acc5-7112f1e64c30" class="hero-banner-bottom-section">
              <div class="text-block">Can&#x27;t find your serial number? Click here to see where to find it.</div><img src="images/Vector2.svg" loading="lazy" alt="" class="image">
              <div class="find-serial-explanation-wrapper"><img src="images/on-serial-find.jpg" loading="lazy" alt="How to find product serial" class="serial-find-image"></div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <section id="verification" class="form-full">
    <div id="flowbaseSlider" class="form-wrapper w-form">
      <form id="wf-form-Serial-Form" name="wf-form-Serial-Form" data-name="Serial Form" method="post" action="#verification" redirect="/success" data-redirect="/success" style="<?php echo $formClass; ?>">
        <div data-delay="4000" data-animation="outin" class="slider w-slider" data-autoplay="false" data-easing="ease-out" data-hide-arrows="true" data-disable-swipe="true" data-autoplay-limit="0" data-nav-spacing="3" data-duration="600" data-infinite="false">
          <div class="mask w-slider-mask">
            <div class="slide w-slide">
              <div class="slide-wrapper">
                <div class="slide-banner">
                  <a href="#" class="banner-logo w-inline-block"><img src="images/Vector1.svg" alt="Optimum Nutrition Logo" class="image-2"></a>
                  <div class="banner-content">
                    <div class="quote-wrap">
                      <h1 class="banner-h3">Verification<br>Process</h1>
                      <p class="paragraph-intro">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nibh a duis neque sapien proin felis, mus ut viverra. Lectus nisi orci eu, semper eget. Dui eget curabitur velit vulputate tristique potenti sapien vitae elementum. Nunc, risus sodales lorem sed. Enim justo vitae a mattis.</p>
                    </div>
                  </div>
                  <div class="verifications-banner">
                    <h1 class="banner-h3">Verification<br>Process</h1>
                    <div class="counter-wrapper">
                      <div class="text-block-4"><?php echo $number ?></div>
                    </div>
                  </div>
                </div>
                <div class="slide-content">
                  <div class="absolute-wrapper">
                    <div class="container full-height w-container">
                      <div class="form-content-wrapper---absolute">
                        <div class="form-content relative"><img src="images/Vector3.svg" alt="Optimum Nutrition Logo black" class="logo">
                          <div class="form-title-wrap">
                            <div class="form-section-title">Begin by finding your serial code</div>
                            <p class="form-paragraph">Make sure to enter the serial <strong>exactly </strong>as shown on your box without any extra spacing.<br></p>
                          </div>
                          <div class="form-wrap extra-space"><label for="Serial" class="field-label">Enter your serial code</label><input type="text" class="text-field w-input" maxlength="256" name="Serial" data-name="Serial" placeholder="XX-XXXXXX" id="Serial"></div>
                          <div class="button-wrap">
                            <a href="#" class="slider-right w-button">next step</a>
                          </div>
                          <div class="slide-counter">
                            <div class="dot active-dot"></div>
                            <div class="dot"></div>
                            <div class="dot"></div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="slide w-slide">
              <div class="slide-wrapper">
                <div class="slide-banner">
                  <a href="#" class="banner-logo w-inline-block"><img src="images/Vector1.svg" alt="Optimum Nutrition Logo" class="image-2"></a>
                  <div class="banner-content">
                    <div class="quote-wrap">
                      <h1 class="banner-h3">Verification<br>Process</h1>
                      <p class="paragraph-intro">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nibh a duis neque sapien proin felis, mus ut viverra. Lectus nisi orci eu, semper eget. Dui eget curabitur velit vulputate tristique potenti sapien vitae elementum. Nunc, risus sodales lorem sed. Enim justo vitae a mattis.</p>
                    </div>
                  </div>
                  <div class="verifications-banner">
                    <h1 class="banner-h3">Verification<br>Process</h1>
                    <div class="counter-wrapper">
                      <div class="text-block-4"><?php echo $number ?></div>
                    </div>
                  </div>
                </div>
                <div class="slide-content">
                  <div class="absolute-wrapper">
                    <div class="container full-height w-container">
                      <div class="form-content-wrapper---absolute">
                        <div class="form-content relative"><img src="images/Vector3.svg" alt="Optimum Nutrition Logo black" class="logo">
                          <div class="form-title-wrap">
                            <div class="form-section-title"><strong>ENTER YOUR NAME FOR IDENTIFICATION</strong></div>
                            <p class="form-paragraph">Please enter your name below for identification.<br></p>
                          </div>
                          <div class="form-wrap extra-space"><label for="Name" class="field-label"><strong>Enter your name</strong></label><input type="text" class="text-field w-input" maxlength="256" name="Name" data-name="Name" placeholder="Enter your name here please.." id="Name"></div>
                          <div class="button-wrap">
                            <a href="#" class="slider-left w-inline-block"><img src="images/arrow.svg" alt="go back" class="arrow"></a>
                            <a href="#" class="slider-right w-button">next step</a>
                          </div>
                          <div class="slide-counter">
                            <div class="dot"></div>
                            <div class="dot active-dot"></div>
                            <div class="dot"></div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="slide w-slide">
              <div class="slide-wrapper">
                <div class="slide-banner">
                  <a href="#" class="banner-logo w-inline-block"><img src="images/Vector1.svg" alt="Optimum Nutrition Logo" class="image-2"></a>
                  <div class="banner-content">
                    <div class="quote-wrap">
                      <h1 class="banner-h3">Verification<br>Process</h1>
                      <p class="paragraph-intro">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nibh a duis neque sapien proin felis, mus ut viverra. Lectus nisi orci eu, semper eget. Dui eget curabitur velit vulputate tristique potenti sapien vitae elementum. Nunc, risus sodales lorem sed. Enim justo vitae a mattis.</p>
                    </div>
                  </div>
                  <div class="verifications-banner">
                    <h1 class="banner-h3">Verification<br>Process</h1>
                    <div class="counter-wrapper">
                      <div class="text-block-4"><?php echo $number ?></div>
                    </div>
                  </div>
                </div>
                <div class="slide-content">
                  <div class="form-content hidden"><img src="images/Vector3.svg" alt="Optimum Nutrition Logo black" class="logo">
                    <div class="form-title-wrap">
                      <div class="form-section-title">Begin by finding your serial code</div>
                      <p class="form-paragraph">Make sure to enter the serial <strong>exactly </strong>as shown on your box without any extra spacing.<br></p>
                    </div>
                    <div class="form-wrap extra-space"><label for="Serial-3" class="field-label">Enter your serial code</label><input type="text" class="text-field w-input" maxlength="256" name="Serial-3" data-name="Serial 3" placeholder="XX-XXXXXX" id="Serial-3"></div>
                    <div class="button-wrap">
                      <a href="#" class="slider-right w-button">next step</a>
                    </div>
                    <div class="slide-counter">
                      <div class="dot active-dot"></div>
                      <div class="dot"></div>
                      <div class="dot"></div>
                    </div>
                  </div>
                  <div class="absolute-wrapper">
                    <div class="container full-height w-container">
                      <div class="form-content-wrapper---absolute">
                        <div class="form-content relative"><img src="images/Vector3.svg" alt="Optimum Nutrition Logo black" class="logo">
                          <div class="form-title-wrap">
                            <div class="form-section-title"><strong>ENTER YOUR EMAIL ADDRESS</strong></div>
                            <p class="form-paragraph">Please enter your email address below.<br></p>
                          </div>
                          <div class="form-wrap extra-space"><label for="Email" class="field-label"><strong>Enter your email</strong></label><input type="text" class="text-field w-input" maxlength="256" name="Email" data-name="Email" placeholder="Example@mail.com" id="Email"></div>
                          <div class="button-wrap">
                            <a href="#" class="slider-left w-inline-block"><img src="images/arrow.svg" alt="go back" class="arrow"></a><input type="submit" data-ix="show-content-onslide" value="Complete Submission" data-wait="Working on that..." wait="Calculating Nash Equilibrium..." class="submit-button w-button" name="SubmitButton">
                          </div>
                          <div class="slide-counter">
                            <div class="dot"></div>
                            <div class="dot"></div>
                            <div class="dot active-dot"></div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="previous-placeholder w-slider-arrow-left"><img src="images/arrow.svg" alt="go back" class="arrow">
            <div class="previous-button">Previous</div>
          </div>
          <div class="next-placeholder w-slider-arrow-right">
            <div class="next-button">Next step</div>
          </div>
        </div>
      </form>
      <div class="success-message w-form-done" style="<?php echo $successClass; ?>">
        <div class="div-block">
          <div class="text-block-5">Your product is <span class="text-span-2">genuine.</span><br>Thanks for choosing <span>Optimum Nutrition</span>!</div>
          <a href="" aria-current="page" class="main-button gold w-inline-block w--current">
            <div>Verify another product</div>
          </a>
        </div>
      </div>
      <div class="error-message w-form-fail" style="<?php echo $failClass; ?>">
        <div class="div-block">
          <div class="text-block-5">This serial does <strong>not </strong>match one of our genuine products&#x27; serials.<br></div>
          <a href="" aria-current="page" class="main-button black w-inline-block w--current">
            <div class="text-block-7">Try again</div>
          </a>
        </div>
      </div>
    </div>
  </section>
  <div class="section wf-section">
    <div id="on-quality" class="transitioning-section-content-wrapper full-width">
      <h1 class="main-h1 centered"><strong>Optimum Quality</strong></h1>
      <div class="dynamic-transition-div">
        <a href="https://www.optimumnutrition.com/en-us/Products/Advanced-Fitness/Muscle-Building/" target="_blank" class="dynamic-div-left w-inline-block">
          <div class="filter-wrapper">
            <h1 class="main-h1 centered white"><strong>A Lineup of Only<br>the Best</strong></h1>
            <div class="main-button black">
              <div>Check out the Lineup</div>
            </div>
          </div>
        </a>
        <a href="https://www.optimumnutrition.com/en-us" target="_blank" class="dynamic-div-right w-inline-block">
          <div class="filter-wrapper">
            <h1 class="main-h1 centered white"><strong>A Lineup of Only<br>the Best</strong></h1>
            <div class="main-button black">
              <div>Check out the Lineup</div>
            </div>
          </div>
        </a>
      </div>
    </div>
  </div>
  <div class="section padded wf-section">
    <div class="container w-container">
      <div class="transitioning-section-content-wrapper">
        <div style="padding-top:56.17021276595745%" class="w-video w-embed"><iframe class="embedly-embed" src="https://cdn.embedly.com/widgets/media.html?src=https%3A%2F%2Fwww.youtube.com%2Fembed%2FaWQn5ZX62G0%3Ffeature%3Doembed&display_name=YouTube&url=https%3A%2F%2Fwww.youtube.com%2Fwatch%3Fv%3DaWQn5ZX62G0&image=https%3A%2F%2Fi.ytimg.com%2Fvi%2FaWQn5ZX62G0%2Fhqdefault.jpg&key=96f1f04c5f4143bcb0f2e68c87d65feb&type=text%2Fhtml&schema=youtube" scrolling="no" allowfullscreen="" title="Recover with the World's Best Selling Whey Protein Powder: Gold Standard 100% Whey"></iframe></div>
      </div>
    </div>
  </div>
  <section id="about" class="footer-dark wf-section">
    <div class="container-2">
      <div class="footer-wrapper">
        <a href="#" class="footer-brand w-inline-block"><img src="images/Vector1.svg" loading="lazy" alt="Optimum Nutrition Logo"></a>
        <div class="footer-content">
          <div id="w-node-_1b4f649a-894d-481b-b786-243848992835-7a3baf04" class="footer-block">
            <div class="title-small">Visit Our Social Channels</div>
            <div class="footer-social-block">
              <a href="https://www.facebook.com/optimumnutrition" target="_blank" class="footer-social-link w-inline-block"><img src="images/Vector4.svg" loading="lazy" alt="facebook logo" class="footer-img"></a>
              <a href="https://www.instagram.com/optimumnutrition/" target="_blank" class="footer-social-link w-inline-block"><img src="images/Vector5.svg" loading="lazy" alt="instagram logo" class="footer-img"></a>
              <a href="https://twitter.com/team_optimum" target="_blank" class="footer-social-link w-inline-block"><img src="images/Vector6.svg" loading="lazy" alt="twitter logo" class="footer-img"></a>
              <a href="https://www.youtube.com/user/optimumnutrition" target="_blank" class="footer-social-link w-inline-block"><img src="images/63114e1e553f412de5d64e63_Vector7.svg" loading="lazy" alt="youtube logo" class="footer-img"></a>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="footer-divider"></div>
    <div class="footer-copyright-center bottom-margin">Copyright © 2022 ON Authenticity Check - All Rights Reserved.</div>
    <div class="footer-copyright-center">
      <a href="http://inraft.com" target="_blank" class="link">Designed &amp; Developed by <span class="text-span">Inraft Digital Solutions</span></a>
    </div>
  </section>
  <script src="https://d3e54v103j8qbb.cloudfront.net/js/jquery-3.5.1.min.dc5e7f18c8.js?site=63112328b7275721e03baf03" type="text/javascript" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
  <script src="js/webflow.js" type="text/javascript"></script>
  <!-- [if lte IE 9]><script src="https://cdnjs.cloudflare.com/ajax/libs/placeholders/3.0.2/placeholders.min.js"></script><![endif] -->
  <!--  This script lets us use any component for our arrows. This way we can position freely  -->
  <script>
var Webflow = Webflow || [];
Webflow.push(function() {
 var l = $('#flowbaseSlider .w-slider-arrow-left');
 var r = $('#flowbaseSlider .w-slider-arrow-right');
 $('#flowbaseSlider')
   .on('click', '.slider-left', function() {
     l.trigger('tap');
   })
   .on('click', '.slider-right', function() {
     r.trigger('tap');
   });
});
</script>
  <!--  Here you can change to date slider and manage attributes about it  -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/ion-rangeslider/2.1.2/js/ion.rangeSlider.min.js"></script>
  <script>
$("#range_price").ionRangeSlider({
    grid: true,
    min: 5000,
    max: 35000,
    from: 2500,
    prefix: "$",
    postfix: "+",
    hide_min_max: true,
    decorate_both: true,
    force_edges: true,
    step: 50
});
$("#range_date").ionRangeSlider({
    grid: true,
    min: 0,
    max: 12,
    from_min: 0.5,
    from: 1,
    prefix: "M",
    postfix: " month(s)",
    hide_min_max: true,
    force_edges: true,
    step: 0.5
});
</script>
</body>
</html>