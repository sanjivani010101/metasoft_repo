<?php
session_start();
include_once('layouts/header.php');
?>


<br><br>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
       <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">

<section id="contact" class="section">
<section class="pos-r" style="background: #1f7ae0; text-align: center; padding: 80px 0;">
<div class="container">
<div class="row">
<div class="col-lg-12 col-md-12">
<div class="section-title" style="margin-top: 50px;">
<h2 style="color: #fff;">MetaSoft10 Next - Contact US</h2>
<p style="color: #fff; font-size: 19px;">Join our growing community of 100+ clients in Global markets</p>
<p style="color: #fff; font-size: 19px;">Get started with us</p>
</div>
</div>
</div>
</div>
</section>
<section class="section-margin">
<div class="container">
<div class="d-none d-sm-block mb-5 pb-4 ">

<script>
                    function initMap() {
                        var uluru = {
                            lat: 11.0797,
                            lng: 76.9997
                        };
                        var grayStyles = [{
                                featureType: "all",
                                stylers: [{
                                        saturation: -90
                                    },
                                    {
                                        lightness: 50
                                    }
                                ]
                            },
                            {
                                elementType: 'labels.text.fill',
                                stylers: [{
                                    color: '#A3A3A3'
                                }]
                            }
                        ];
                        var map = new google.maps.Map(document.getElementById('map'), {
                            center: {
                                lat: 11.0797,
                                lng: 76.9997
                            },
                            zoom: 9,
                            styles: grayStyles,
                            scrollwheel: false
                        });
                    }
                </script>
<script src="#"></script>
</div><br><br><br>
<div class="row">
<?php

  if($_SESSION['data_add']==1){
      $_SESSION['data_add']=0;
  echo "<script>alert('data added succecfull')</script>";
  }
  
 
?>
<div class="container">
  <div class="row">
    <!-- Left Column: Request a Quote Form -->
    <div class="col-lg-6 col-md-10 col-sm-12">
      <div class="quote-form p-4 shadow-lg rounded">
        <h2 class="" style="font-size: 37px;">Have Any Queries?</h2>
        <p>Fill in this form or <a href="#">Please fill in the details below and we shall reach out to you within a business day.
</a></p>
<!-- <div class="col-md-6 col-lg-6">
<div class="form-part"> -->
 <form action="backend/conect.php" method="post" id="contactForm">

          <input class="form-control" name="url" type="hidden" value="#">
          <input class="form-control" name="platform" type="hidden" value="MetaSoft10">

          <div class="row">
            <div class="col-md-6">
              <input class="form-control mb-3" name="name" type="text" required placeholder="Name*">
            </div>
            <div class="col-md-6">
              <input class="form-control mb-3" name="company_name" type="text" required placeholder="Company Name*">
            </div>
            <div class="col-12">
              <input class="form-control mb-3" name="email" type="email" required placeholder="Email*">
            </div>
            <div class="col-md-4">
              <select name="countrycode" class="form-control mb-3">
                <option value="971" selected>(+971) United Arab Emirates</option>
               <option data-countryCode="91" value="91">(+91) India</option>
<option data-countryCode="CY" value="357">(+357) Cyprus</option>
<option data-countryCode="NO" value="47">(+47) Norway</option>
<option data-countryCode="GB" value="44">(+44) UK</option>
<option data-countryCode="DZ" value="213">(+213) Algeria</option>
<option data-countryCode="AD" value="376">(+376) Andorra</option>
<option data-countryCode="AO" value="244">(+244) Angola</option>
<option data-countryCode="AI" value="1264">(+1264) Anguilla</option>
<option data-countryCode="AG" value="1268">(+1268) Antigua & Barbuda</option>
<option data-countryCode="AR" value="54">(+54) Argentina</option>
<option data-countryCode="AM" value="374">(+374) Armenia</option>
<option data-countryCode="AW" value="297">(+297) Aruba</option>
<option data-countryCode="AU" value="61">(+61) Australia</option>
<option data-countryCode="AT" value="43">(+43) Austria</option>
<option data-countryCode="AZ" value="994">(+994) Azerbaijan</option>
<option data-countryCode="BS" value="1242">(+1242) Bahamas</option>
<option data-countryCode="BH" value="973">(+973) Bahrain</option>
<option data-countryCode="BD" value="880">(+880) Bangladesh</option>
<option data-countryCode="BB" value="1246">(+1246) Barbados</option>
<option data-countryCode="BY" value="375">(+375) Belarus</option>
<option data-countryCode="BE" value="32">(+32) Belgium</option>
<option data-countryCode="BZ" value="501">(+501) Belize</option>
<option data-countryCode="BJ" value="229">(+229) Benin</option>
<option data-countryCode="BM" value="1441">(+1441) Bermuda</option>
<option data-countryCode="BT" value="975">(+975) Bhutan</option>
<option data-countryCode="BO" value="591">(+591) Bolivia</option>
<option data-countryCode="BA" value="387">(+387) Bosnia Herzegovina</option>
<option data-countryCode="BW" value="267">(+267) Botswana</option>
<option data-countryCode="BR" value="55">(+55) Brazil</option>
<option data-countryCode="BN" value="673">(+673) Brunei</option>
<option data-countryCode="BG" value="359">(+359) Bulgaria</option>
<option data-countryCode="BF" value="226">(+226) Burkina Faso</option>
<option data-countryCode="BI" value="257">(+257) Burundi</option>
<option data-countryCode="KH" value="855">(+855) Cambodia</option>
<option data-countryCode="CM" value="237">(+237) Cameroon</option>
<option data-countryCode="CA" value="1">(+1) Canada</option>
<option data-countryCode="CV" value="238">(+238) Cape Verde Islands</option>
<option data-countryCode="KY" value="1345">(+1345) Cayman Islands</option>
<option data-countryCode="CF" value="236">(+236) Central African Republic</option>
<option data-countryCode="CL" value="56">(+56) Chile</option>
<option data-countryCode="CN" value="86">(+86) China</option>
<option data-countryCode="CO" value="57">(+57) Colombia</option>
<option data-countryCode="KM" value="269">(+269) Comoros</option>
<option data-countryCode="CG" value="242">(+242) Congo</option>
<option data-countryCode="CK" value="682">(+682) Cook Islands</option>
<option data-countryCode="CR" value="506">(+506) Costa Rica</option>
<option data-countryCode="HR" value="385">(+385) Croatia</option>
<option data-countryCode="CU" value="53">(+53) Cuba</option>
<option data-countryCode="CY" value="90392">(+90392) Cyprus North</option>
<option data-countryCode="CZ" value="42">(+42) Czech Republic</option>
<option data-countryCode="DK" value="45">(+45) Denmark</option>
<option data-countryCode="DJ" value="253">(+253) Djibouti</option>
<option data-countryCode="DM" value="1809">(+1809) Dominica</option>
<option data-countryCode="DO" value="1809">(+1809) Dominican Republic</option>
<option data-countryCode="EC" value="593">(+593) Ecuador</option>
<option data-countryCode="EG" value="20">(+20) Egypt</option>
<option data-countryCode="SV" value="503">(+503) El Salvador</option>
<option data-countryCode="GQ" value="240">(+240) Equatorial Guinea</option>
<option data-countryCode="ER" value="291">(+291) Eritrea</option>
<option data-countryCode="EE" value="372">(+372) Estonia</option>
<option data-countryCode="ET" value="251">(+251) Ethiopia</option>
<option data-countryCode="FK" value="500">(+500) Falkland Islands</option>
<option data-countryCode="FO" value="298">(+298) Faroe Islands</option>
<option data-countryCode="FJ" value="679">(+679) Fiji</option>
<option data-countryCode="FI" value="358">(+358) Finland</option>
<option data-countryCode="FR" value="33">(+33) France</option>
<option data-countryCode="GF" value="594">(+594) French Guiana</option>
<option data-countryCode="PF" value="689">(+689) French Polynesia</option>
<option data-countryCode="GA" value="241">(+241) Gabon</option>
<option data-countryCode="GM" value="220">(+220) Gambia</option>
<option data-countryCode="GE" value="7880">(+7880) Georgia</option>
<option data-countryCode="DE" value="49">(+49) Germany</option>
<option data-countryCode="GH" value="233">(+233) Ghana</option>
<option data-countryCode="GI" value="350">(+350) Gibraltar</option>
<option data-countryCode="GR" value="30">(+30) Greece</option>
<option data-countryCode="GL" value="299">(+299) Greenland</option>
<option data-countryCode="GD" value="1473">(+1473) Grenada</option>
<option data-countryCode="GP" value="590">(+590) Guadeloupe</option>
<option data-countryCode="GU" value="671">(+671) Guam</option>
<option data-countryCode="GT" value="502">(+502) Guatemala</option>
<option data-countryCode="224" value="224">(+224) Guinea</option>
<option data-countryCode="245" value="245">(+245) Guinea - Bissau</option>
<option data-countryCode="592" value="592">(+592) Guyana</option>
<option data-countryCode="509" value="509">(+509) Haiti</option>
<option data-countryCode="504" value="504">(+504) Honduras</option>
<option data-countryCode="852" value="852">(+852) Hong Kong</option>
<option data-countryCode="36" value="36">(+36) Hungary</option>
<option data-countryCode="354" value="354">(+354) Iceland</option>
<option data-countryCode="62" value="62">(+62) Indonesia</option>
<option data-countryCode="98" value="98">(+98) Iran</option>
<option data-countryCode="964" value="964">(+964) Iraq</option>
<option data-countryCode="353" value="353">(+353) Ireland</option>
<option data-countryCode="972" value="972">(+972) Israel</option>
<option data-countryCode="39" value="39">(+39) Italy</option>
<option data-countryCode="1876" value="1876">(+1876) Jamaica</option>
<option data-countryCode="81" value="81">(+81) Japan</option>
<option data-countryCode="962" value="962">(+962) Jordan</option>
<option data-countryCode="7" value="7">(+7) Kazakhstan</option>
<option data-countryCode="254" value="254">(+254) Kenya</option>
<option data-countryCode="686" value="686">(+686) Kiribati</option>
<option data-countryCode="850" value="850">(+850) Korea North</option>
<option data-countryCode="82" value="82">(+82) Korea South</option>
<option data-countryCode="965" value="965">(+965) Kuwait</option>
<option data-countryCode="996" value="996">(+996) Kyrgyzstan</option>
<option data-countryCode="856" value="856">(+856) Laos</option>
<option data-countryCode="371" value="371">(+371) Latvia</option>
<option data-countryCode="961" value="961">(+961) Lebanon</option>
<option data-countryCode="266" value="266">(+266) Lesotho</option>
<option data-countryCode="231" value="231">(+231) Liberia</option>
<option data-countryCode="218" value="218">(+218) Libya</option>
<option data-countryCode="417" value="417">(+417) Liechtenstein</option>
<option data-countryCode="370" value="370">(+370) Lithuania</option>
<option data-countryCode="352" value="352">(+352) Luxembourg</option>
<option data-countryCode="853" value="853">(+853) Macao</option>
<option data-countryCode="389" value="389">(+389) Macedonia</option>
<option data-countryCode="261" value="261">(+261) Madagascar</option>
<option data-countryCode="265" value="265">(+265) Malawi</option>
<option data-countryCode="60" value="60">(+60) Malaysia</option>
<option data-countryCode="960" value="960">(+960) Maldives</option>
<option data-countryCode="223" value="223">(+223) Mali</option>
<option data-countryCode="356" value="356">(+356) Malta</option>
<option data-countryCode="692" value="692">(+692) Marshall Islands</option>
<option data-countryCode="596" value="596">(+596) Martinique</option>
<option data-countryCode="222" value="222">(+222) Mauritania</option>
<option data-countryCode="269" value="269">(+269) Mayotte</option>
<option data-countryCode="52" value="52">(+52) Mexico</option>
<option data-countryCode="691" value="691">(+691) Micronesia</option>
<option data-countryCode="373" value="373">(+373) Moldova</option>
<option data-countryCode="377" value="377">(+377) Monaco</option>
<option data-countryCode="976" value="976">(+976) Mongolia</option>
<option data-countryCode="1664" value="1664">(+1664) Montserrat</option>
<option data-countryCode="212" value="212">(+212) Morocco</option>
<option data-countryCode="258" value="258">(+258) Mozambique</option>
<option data-countryCode="95" value="95">(+95) Myanmar</option>
<option data-countryCode="264" value="264">(+264) Namibia</option>
<option data-countryCode="674" value="674">(+674) Nauru</option>
<option data-countryCode="977" value="977">(+977) Nepal</option>
<option data-countryCode="31" value="31">(+31) Netherlands</option>
<option data-countryCode="687" value="687">(+687) New Caledonia</option>
<option data-countryCode="64" value="64">(+64) New Zealand</option>
<option data-countryCode="505" value="505">(+505) Nicaragua</option>
<option data-countryCode="227" value="227">(+227) Niger</option>
<option data-countryCode="234" value="234">(+234) Nigeria</option>
<option data-countryCode="683" value="683">(+683) Niue</option>
<option data-countryCode="672" value="672">(+672) Norfolk Islands</option>
<option data-countryCode="670" value="670">(+670) Northern Marianas</option>
<option data-countryCode="47" value="47">(+47) Norway</option>
<option data-countryCode="968" value="968">(+968) Oman</option>
<option data-countryCode="92" value="92">(+92) Pakistan</option>
<option data-countryCode="680" value="680">(+680) Palau</option>
<option data-countryCode="507" value="507">(+507) Panama</option>
<option data-countryCode="675" value="675">(+675) Papua New Guinea</option>
<option data-countryCode="595" value="595">(+595) Paraguay</option>
<option data-countryCode="51" value="51">(+51) Peru</option>
<option data-countryCode="63" value="63">(+63) Philippines</option>
<option data-countryCode="48" value="48">(+48) Poland</option>
<option data-countryCode="351" value="351">(+351) Portugal</option>
<option data-countryCode="1787" value="1787">(+1787) Puerto Rico</option>
<option data-countryCode="974" value="974">(+974) Qatar</option>
<option data-countryCode="262" value="262">(+262) Reunion</option>
<option data-countryCode="40" value="40">(+40) Romania</option>
<option data-countryCode="40" value="40">(+40) Romania</option>
<option data-countryCode="7" value="7">(+7) Russia</option>
<option data-countryCode="250" value="250">(+250) Rwanda</option>
<option data-countryCode="378" value="378">(+378) San Marino</option>
<option data-countryCode="239" value="239">(+239) Sao Tome &amp; Principe</option>
<option data-countryCode="966" value="966">(+966) Saudi Arabia</option>
<option data-countryCode="221" value="221">(+221) Senegal</option>
<option data-countryCode="381" value="381">(+381) Serbia</option>
<option data-countryCode="248" value="248">(+248) Seychelles</option>
<option data-countryCode="232" value="232">(+232) Sierra Leone</option>
<option data-countryCode="65" value="65">(+65) Singapore</option>
<option data-countryCode="421" value="421">(+421) Slovak Republic</option>
<option data-countryCode="386" value="386">(+386) Slovenia</option>
<option data-countryCode="677" value="677">(+677) Solomon Islands</option>
<option data-countryCode="252" value="252">(+252) Somalia</option>
<option data-countryCode="27" value="27">(+27) South Africa</option>
<option data-countryCode="34" value="34">(+34) Spain</option>
<option data-countryCode="94" value="94">(+94) Sri Lanka</option>
<option data-countryCode="290" value="290">(+290) St. Helena</option>
<option data-countryCode="1869" value="1869">(+1869) St. Kitts</option>
<option data-countryCode="1758" value="1758">(+1758) St. Lucia</option>
<option data-countryCode="249" value="249">(+249) Sudan</option>
<option data-countryCode="597" value="597">(+597) Suriname</option>
<option data-countryCode="268" value="268">(+268) Swaziland</option>
<option data-countryCode="46" value="46">(+46) Sweden</option>
<option data-countryCode="41" value="41">(+41) Switzerland</option>
<option data-countryCode="963" value="963">(+963) Syria</option>
<option data-countryCode="886" value="886">(+886) Taiwan</option>
<option data-countryCode="7" value="7">(+7) Tajikstan</option>
<option data-countryCode="66" value="66">(+66) Thailand</option>
<option data-countryCode="228" value="228">(+228) Togo</option>
<option data-countryCode="676" value="676">(+676) Tonga</option>
<option data-countryCode="1868" value="1868">(+1868) Trinidad &amp; Tobago</option>
<option data-countryCode="216" value="216">(+216) Tunisia</option>
<option data-countryCode="90" value="90">(+90) Turkey</option>
<option data-countryCode="7" value="7">(+7) Turkmenistan</option>
<option data-countryCode="993" value="993">(+993) Turkmenistan</option>
<option data-countryCode="1649" value="1649">(+1649) Turks &amp; Caicos Islands</option>
<option data-countryCode="688" value="688">(+688) Tuvalu</option>
<option data-countryCode="256" value="256">(+256) Uganda</option>
<option data-countryCode="380" value="380">(+380) Ukraine</option>
<option data-countryCode="598" value="598">(+598) Uruguay</option>
<option data-countryCode="7" value="7">(+7) Uzbekistan</option>
<option data-countryCode="678" value="678">(+678) Vanuatu</option>
<option data-countryCode="379" value="379">(+379) Vatican City</option>
<option data-countryCode="58" value="58">(+58) Venezuela</option>
<option data-countryCode="84" value="84">(+84) Vietnam</option>
<option data-countryCode="1284" value="1284">(+1284) Virgin Islands - British</option>
<option data-countryCode="1340" value="1340">(+1340) Virgin Islands - US</option>
<option data-countryCode="681" value="681">(+681) Wallis &amp; Futuna</option>
<option data-countryCode="969" value="969">(+969) Yemen (North)</option>
<option data-countryCode="967" value="967">(+967) Yemen (South)</option>
<option data-countryCode="260" value="260">(+260) Zambia</option>
<option data-countryCode="263" value="263">(+263) Zimbabwe</option>
              </select>
            </div>
            <div class="col-md-8">
              <input class="form-control mb-3" name="mobile" type="text" placeholder="Phone Number*">
            </div>
            <div class="col-12">
              <textarea class="form-control mb-3" name="message" rows="4" placeholder="Enter Message..."></textarea>
            </div>
            <div class="col-12 text-center">
              <center><div class="g-recaptcha brochure_form_captcha" data-sitekey="6LchXeIrAAAAAA9xKDceUGiW_FactfHwBBvYIKsj"></div></center>
            </div>
            <div class="col-12 text-center mt-3">
<button type="submit" name="submit" class="contact-btn bg button-contactForm" style="width:150px;">
  Send Message
</button>

</div>
          </div>
<script src="https://www.google.com/recaptcha/api.js" async defer></script>
        </form>
</div>
</div>
<div class="col-md-6 col-lg-6 ">
<div class="address-part">
<div class="media contact-info ">
<span class="contact-info__icon"><img src="assets/img/tab-icons/home-icon.svg" alt="img"></span>
<div class="media-body">
<h3>UK | Dubai | India <br> 
</h3>
<p>India</p>
</div>
</div>
<div class="media contact-info">
<span class="contact-info__icon"><img src="assets/img/tab-icons/phone-icon.svg" alt="img"></span>
<div class="media-body">
<h3><a href="tel:+917558528389">Phone: +447877195329</a></h3>
<p>Mon to Sun 9am to 8pm</p>
</div>
</div>
<div class="media contact-info">
<span class="contact-info__icon"><img src="assets/img/tab-icons/mail-icon.svg" alt="img"></span>
<div class="media-body">
<h3>Support@metasoft10.com</h3>
<p class="mb-0">Send us your query anytime!


</p>
</div>
</div>
</div>
</div>

</div>
</div>
</section>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
$(document).ready(function() {
    $("#contactForm").submit(function(e) {
        e.preventDefault(); // Prevent form from refreshing

        $.ajax({
            type: "POST",
            url: "backend/conect.php", // Update with correct path
            data: $(this).serialize(),
            success: function(response) {
                sessionStorage.setItem("formMessage", response); // Store message in session
                location.reload(); // Reload the page to show alert on the same page
            },
            error: function() {
                alert("Something went wrong. Please try again.");
            }
        });
    });

    // Show message alert after form submission
    let formMessage = sessionStorage.getItem("formMessage");
    if (formMessage) {
        alert(formMessage); // Show alert box with message
        sessionStorage.removeItem("formMessage"); // Remove message so it doesn't show again
    }
});
</script>


<style>
        .google-map {
            border: 1px solid #bdbdbd !important;
            border-radius: 7px;
            /* box-shadow: rgba(0, 0, 0, 0.24) 0px 3px 8px; */
        }

        .media.contact-info {
            margin-bottom: 28px;
        }

        .address-part {
            border: 1px solid #bdbdbd;
            margin: 10px;
            padding: 79px;
            border-radius: 7px;
            box-shadow: rgba(0, 0, 0, 0.24) 0px 3px 8px;
        }

        .form-part {
            border: 1px solid #bdbdbd;
            margin: 10px;
            padding: 33px;
            border-radius: 7px;
            box-shadow: rgba(0, 0, 0, 0.24) 0px 3px 8px;
        }

        .contact-info .media-body h3 {
            font-size: 16px;
            margin-bottom: 0;
            line-height: 1.9;
            color: #302f2f;
            font-weight: 500;
        }

        .form-control {
            height: 45px;
            border-radius: 9px !important;
            margin-bottom: 19px;
            border: 1px solid #BDBDBD;
        }

        textarea:focus,
        input[type=text]:focus,
        input[type="email"]:focus,
        input[type="number"]:focus {
            border: 1px solid #005CBE;
            border-color: #005CBE;
            box-shadow: none;
            outline: 0 none;
        }

        input,
        textarea {
            background-color: #f9f9f9 !important;
        }

        @media
    </style>
 
<br><br>



 

<style>
  .form-control {
    height: 45px;
    border-radius: 9px !important;
    margin-bottom: 19px;
    border: 1px solid #adb5bd;
}
contactForm {
    font-size: 15px;
    background-color: #137dc5;
    color: #fff;
    padding: 12px 36px;
</style>
 
<script src="assets/vendors/jquery/jquery-3.2.1.min.js"></script>
<script src="assets/vendors/bootstrap/bootstrap.bundle.min.js"></script>
<script src="assets/vendors/owl-carousel/owl.carousel.min.js"></script>
<script src="assets/js/jquery.ajaxchimp.min.js"></script>
<script src="assets/js/mail-script.js"></script>
<script src="assets/js/main.js"></script>
<script src="assets/js/swiper-element-bundle.min.js"></script>
<script src="assets/js/Swiper/3.4.1/js/swiper.min.js"></script>
<script>
   
    var swiper = new Swiper('.swiper-container.two', {
      pagination: '.swiper-pagination',
      paginationClickable: true,
      effect: 'coverflow',
      loop: true,
      centeredSlides: true,
      slidesPerView: 'auto',
      coverflow: {
        rotate: 0,
        stretch: 100,
        depth: 150,
        modifier: 1.5,
        slideShadows: false,
      }
    });
  </script>
  
<!--<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>-->
<script>
$(document).ready(function() {
    $("#contactForm").submit(function(e) {
        e.preventDefault(); // Prevent form from refreshing

        $.ajax({
            type: "POST",
            url: "backend/conect.php", // Update with correct path
            data: $(this).serialize(),
            success: function(response) {
                sessionStorage.setItem("formMessage", response); // Store message in session
                location.reload(); // Reload the page to show alert on the same page
            },
            error: function() {
                alert("Something went wrong. Please try again.");
            }
        });
    });

    // Show message alert after form submission
    let formMessage = sessionStorage.getItem("formMessage");
    if (formMessage) {
        alert(formMessage); // Show alert box with message
        sessionStorage.removeItem("formMessage"); // Remove message so it doesn't show again
    }
});
</script>



</body>


</div>
</footer>

<style>
   

  .footer-area {
    background: #eeeeee;
    padding: 40px 0;
  }
  .single-footer-widget h4 {
    font-size: 15px;
    color: #0a0303;
  }
  .single-footer-widget ul li a {
    color: #0a0303 !important;
    text-decoration: none !important;
  }
  .single-footer-widget p {
    color: #0a0303 !important;
  }
  @media (max-width: 767px) {
    .footer-area {
      text-align: center;
    }
    .single-footer-widget {
      margin-bottom: 20px;
    }
  }
  .form-part {
    border: 2px solid #adb5bd; /* Border color */
    border-radius: 10px; /* Rounded corners */
    padding: 20px; /* Space inside the border */
    /*background: #ffffff;*/ /* Background color */
    box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.1); /* Optional shadow */
}

   

</style>
<style>
       <style>
                                .default-btn {
                                    padding: 7px 29px;
                                    display: flex;
                                    width: max-content;
                                    align-items: center;
                                    justify-content: center;
                                    border-radius: 8px;
                                    color: #ffffff !important;
                                    background-color: #005dbd;
                                    font-size: 16px;
                                    font-weight: 500;
                                    /* margin-top: 20px; */
                                }
                             </style>
                  
  <style>
        .country-box {
            background-color: #f8f9fa;
            border-radius: 8px;
            padding: 10px 15px;
            text-align: center;
            box-shadow: 0px 2px 5px rgba(0, 0, 0, 0.1);
            margin-bottom: 15px;
        }
        .country-box img {
            width: 30px;
            height: auto;
            margin-right: 8px;
        }
        .country-name {
            font-size: 1rem;
            font-weight: bold;
        }
        .quote-form {
            background-color: #0c79c3;
            color: #fff;
            padding: 20px;
            border-radius: 8px;
        }
        .quote-form h2 {
            font-size: 24px;
            margin-bottom: 10px;
        }
        .quote-form a {
            color: #ffae00;
            text-decoration: none;
        }
        .quote-form a:hover {
            text-decoration: underline;
        }
        .quote-form input, .quote-form select {
            margin-bottom: 15px;
            padding: 10px;
            border: none;
            border-radius: 4px;
            font-size: 16px;
            width: 100%;
        }
        .quote-form button {
            background-color: #ffae00;
            color: #1c1032;
            border: none;
            padding: 12px;
            font-size: 16px;
            border-radius: 4px;
            cursor: pointer;
            width: 100%;
        }
        .quote-form button:hover {
            background-color: #e69500;
        }
        .testimonials {
            padding: 20px;
        }
        .testimonials h3 {
            font-size: 16px;
            color: #666;
            margin-bottom: 5px;
        }
       
        .testimonial-card {
            background-color: #ffffff;
            border-radius: 10px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
            padding: 20px;
            position: relative;
        }

        .testimonial-quote {
            color: #FF5722;
            font-size: 30px;
            font-weight: bold;
        }

        .testimonial-text {
            font-size: 1rem;
            color: #444;
            line-height: 1.6;
            margin-bottom: 15px;
        }

        .testimonial-client {
            display: flex;
            align-items: center;
            gap: 10px;
        }

        .client-avatar {
            border-radius: 50%;
            width: 50px;
            height: 50px;
            object-fit: cover;
        }

        .client-info {
            font-size: 1rem;
        }

        .client-info .client-name {
            font-weight: bold;
        }

        .testimonial-bg {
            position: absolute;
            bottom: 0;
            right: 0;
            width: 100px;
        }

        /* Responsive */
       /* @media (max-width: 768px) {
            .testimonial-bg {
                display: none;
            }*/
        }




        /* Cards */
        .card-title {
            font-size: 2rem;
            font-weight: bold;
        }
        .card {
            border: none;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            transition: transform 0.2s ease-in-out;
        }
        .icon-container {
            background: linear-gradient(135deg, #fff, #ffffff);
            width: 80px;
            height: 80px;
            border-radius: 50%;
            display: flex;
           /* justify-content: center;*/
            align-items: center;
            margin: auto;
        }
        .icon-container img {
            width: 50%;
        }
        .step-title {
            font-weight: bold;
            margin-top: 15px;
            font-size: 1.2rem;
        }
        .step-text {
            font-size: 0.9rem;
        }
        .cta-box {
            background-color: #16233a;
            padding: 20px;
            border-radius: 10px;
        }

        /* Carousel image responsiveness */
        .carousel-item img {
            width: 100%;
            max-height: 60vh;
            object-fit: cover;
        }

        /* Responsive styles */
        @media (max-width: 768px) {
            .quote-form, .testimonials, .card, .carousel-item img {
                margin-bottom: 20px;
            }
            .content-text {
                text-align: center;
            }
            .cta-box {
                margin-bottom: 15px;
            }
            .feature {
                flex-direction: column;
                align-items: center;
            }
            .card-body {
                padding: 1rem;
            }
            .carousel-item img {
                height: auto;
            }
         .feature-icon {
        width: 40px;
        margin-top: -41px; /* Adjust margin as needed */
    }

    @media (max-width: 768px) {
        .text-start {
            text-align: center !important; /* Center the image on mobile */
            margin-bottom: 10px; /* Add margin for spacing */
        }
    }
        }
    </style>
</style>


</php>

<footer class="footer-area section-gap">
  <div class="container" style="font-size: 17px;">
    <div class="footer-logo mb-4 text-center">
      <!-- <img src="../img/footer_logo.svg" alt="img"> -->
    </div>
    <div class="row gy-4 text-center text-md-start">

      <!-- Services & Features Column (Now divided into 2 columns) -->
      <div class="col-lg-6 col-md-6 col-12 single-footer-widget" style="text-align: left;">
        <h4 style="font-size: 22px; font-weight: 600; margin-bottom: 24px;">Services & Features</h4>
        <div class="row">
          <div class="col-6">
            <ul style="font-size: 17px; list-style: none; padding-left: 0; line-height: 2.2;">
              <li><a href="service_web_dev.php" class="no-hover-underline">Web Design & Development</a></li>
              <li><a href="service_digi_market.php" class="no-hover-underline">Digital Marketing</a></li>
              <li><a href="service_payment.php" class="no-hover-underline">Payment Gateway Integration</a></li>
            </ul>
          </div>
          <div class="col-6">
            <ul style="font-size: 17px; list-style: none; padding-left: 0; line-height: 2.2;">
              <li><a href="service_chatBOT.php" class="no-hover-underline">Customized ChatBOT</a></li>
              <li><a href="features.php" class="no-hover-underline">FX CRM Features</a></li>
              <li><a href="pricing.php" class="no-hover-underline">Pricing</a></li>
            </ul>
          </div>
        </div>
      </div>

      <!-- Get In Touch Column -->
      <div class="col-lg-6 col-md-6 col-12 single-footer-widget" style="text-align: left;">
        <h4 style="font-size: 22px; font-weight: 600; margin-bottom: 24px;">Get In Touch</h4>
        <p style="font-size: 17px; margin-bottom: 12px;">
          <i class="fa fa-phone" aria-hidden="true" style="transform: scaleX(-1);"></i> &nbsp;  +447877195329
        </p>
        <p style="font-size: 17px; margin-bottom: 12px;">
          <i class="fab fa-whatsapp"></i> &nbsp;  +447877195329
        </p>
        <p style="font-size: 17px; margin-bottom: 12px;">
          <i class="fa fa-envelope"></i> &nbsp; support@metasoft10.com
        </p>
        <p style="font-size: 17px;">
          <i class="fa fa-globe"></i> &nbsp;
          <a href="https://www.metasoft10.com" style="color: #1da1f2;">www.metasoft10.com</a>
        </p>
      </div>

    </div>

    <br><br>
    <h6 style="font-size: 17px; font-weight:500;">
      MetaSoft10 Technologies does not offers trading service and not hold clients fund, and this website serves as a common showcase for marketing services of different companies that work in the frames of their local legislations and have respective licenses and permissions for provided services. If you are interested in particular services please contact the sales team for more information about the servicing company.
      <br><br>
      MetaSoft10 Tech” is a trademark, that is registered in different countries according to the protocol.
      <br><br>
      MetaSoft10 Technologies does not provide any financial or other services advertised on this website and does not trade crypto currencies.
      <br><br>
      Please carefully study the documents posted on this website: Legal information and Disclaimers, Privacy Policy, Cookie Policy and AML&KYC Summary. These documents are available only in English. You acknowledge that you know the English language at a sufficient level to understand the text of these documents, and you fully understand the legal consequences of these documents. In case you do not understand, or understand the English language poorly, you acknowledge that you have used the services of a professional interpreter. If you don’t agree with this statement or the information provided within the documents, please leave this website immediately.
      <br><br>
      By continuing using the website, you confirm your agreement with the above-mentioned statements and documents.
    </h6>
    <br>

    <div class="footer-bottom row align-items-center text-center text-lg-left">
      <p class="footer-text m-0 col-lg-8 col-md-12">
        Copyright &copy;
        <script>document.write(new Date().getFullYear());</script>
        All rights reserved | <a href="../" target="_blank"> Metasoft10 Technologies</a>
      </p>
      <div class="col-lg-4 col-md-12 text-center text-lg-right footer-social">
        <a href="https://wa.me/7558528389" target="_blank"><i class="fab fa-whatsapp"></i></a>
        <a href="https://www.facebook.com/profile.php?id=61565505172315" target="_blank"><i class="fab fa-facebook-f"></i></a>
        <a href="#"><i class="fab fa-twitter"></i></a>
        <a href="#"><i class="fab fa-youtube"></i></a>
        <a href="https://www.linkedin.com/company/metasoft10-technologies" target="_blank"><i class='fab fa-linkedin' style="color:blue;"></i></a>
      </div>
    </div>
  </div>
</footer>

<style>
  .footer-area {
    background: #eeeeee;
    padding: 40px 0;
  }
  .single-footer-widget h4 {
    font-size: 15px;
    color: #0a0303;
  }
  .single-footer-widget ul li a {
    color: #0a0303 !important;
    text-decoration: none !important;
  }
  .single-footer-widget p {
    color: #0a0303 !important;
  }
  @media (max-width: 767px) {
    .footer-area {
      text-align: center;
    }
    .single-footer-widget {
      margin-bottom: 20px;
    }
  }
</style>

