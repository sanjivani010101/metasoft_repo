<?php
include_once('layouts/header.php');
?>
<br><br>
<style>
     p{
        font-size: 18px;
font-style: normal;
    font-weight: 600;
    
    color: #272a37;
    margin-bottom: 12px;
        
     }
</style>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
       <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
<br><br><br><br>

<section>
  <div class="container">
  <h4 class="text-left" style="font-size: 30px;    font-weight: 600;">About Payment Gateway Solutions<h4>
    <p class="text-left" style="font-size: 18px; font-weight:500px">
        At  MetaSoft10 Technologies , we recognize the pivotal role of smooth payment processing in Forex brokerage businesses' success. Our state-of-the-art Payment Solutions empower brokers with secure, reliable, and efficient transaction capabilities. By seamlessly integrating these gateways into our , we enable brokers to focus on their core operations and drive remarkable growth. Experience unmatched ease and speed in financial transactions with our dedicated Forex Payment Gateway Solutions
    </p>
  </div>
</section>
<br>

<style>
.payment-options-logos {
  overflow: hidden;
/*    padding: 20px;*/
    
}

.marquee-container {
    display: flex;
    margin-bottom: 10px;
}

.marquee {
    display: flex;
}

.marquee-left {
    animation: marquee-left 30s linear infinite;
}

.marquee-right {
    animation: marquee-right 30s linear infinite;
}

.info-box {
    display: flex;
    flex-direction: column;
    align-items: center;
    background: #fff;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    border-radius: 8px;
    padding: 10px;
    margin: 0 10px;
    text-align: center;
    flex: 0 0 auto;
    min-width: 250px;
}

.logo-wrp img {
    max-width: 60px;
    height: auto;
    margin-bottom: 8px;
}

.content-wrp h4 {
    font-size: 0.9rem;
    color: #333;
}

/* Common styling for both marquees */
.marquee-container {
    overflow: hidden;
    white-space: nowrap;
    display: flex;
}

.marquee-left, .marquee-right {
    display: inline-flex;
    gap: 20px; /* Adjust spacing between cards */
    animation: scroll 30s linear infinite;
}

/* Reverse direction for marquee-right */
.marquee-right {
    animation-direction: reverse;
}

/* Keyframes for continuous scrolling */
@keyframes scroll {
    0% { transform: translateX(0); }
    100% { transform: translateX(-50%); }
}



/* Responsive adjustments */
@media (max-width: 768px) {
    .logo-wrp img {
        max-width: 45px;
    }
    .info-box {
        min-width: 100px;
    }
    .content-wrp h4 {
        font-size: 0.8rem;
    }
}

.text-content {
  color: white;
  font-size: 28px;
  font-weight: 400;
  margin: 0;
  padding-left: 210px; /* Adjust left padding as needed */
}

.text-content .highlight {
  color: #ff4a4a; /* Adjust this color to match the red in the image */
}

.btn-demo {
  background-color: #ff4a4a;
  color: white;
  padding: 12px 24px;
  border-radius: 25px;
  font-weight: bold;
  text-decoration: none;
  transition: background-color 0.3s ease;
}

.btn-demo:hover {
  background-color: #e04343; /* Slightly darker shade for hover effect */
}

@media (max-width: 991px) {
  .text-content {
    text-align: center;
    padding-left: 0;
  }
  .text-content br {
    display: none;
  }
}

        .countries-grid {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            gap: 15px;
        }
        .country-item {
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 10px;
            border: 1px solid #ddd;
            border-radius: 5px;
            min-width: 150px;
            text-align: center;
        }

        .country-item:hover {
    background-color: #f0f0f0;
    box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.0);
    transform: translateY(-3px);
}
        .country-item img {
            margin-right: 10px;
            width: 25px;
            height: 25px;
        }
               

</style>

<div class="container custom-container">
    <div class="container">
        <p class="text-left" style="font-size: 28px; font-weight:600px; padding-left:70px">Our Trusted Payment Gateway Partners</p>
    </div>

    <!-- First Row - Left Scrolling -->
    <div class="marquee-container">
        <div class="marquee marquee-left">
            <div class="info-box">
                <div class="logo-wrp">
                    <img src="assets/img/agent_transfer.png" alt="Agent Transfer">
                </div>
                <div class="content-wrp">
                    <h4>Agent Transfer</h4>
                </div>
            </div>
            <div class="info-box">
                <div class="logo-wrp">
                    <img src="assets/img/wire_transfer.png" alt="Wire Transfer">
                </div>
                <div class="content-wrp">
                    <h4>Wire Transfer</h4>
                </div>
            </div>
            <div class="info-box">
                <div class="logo-wrp">
                    <img src="assets/img/teather.png" alt="Crypto USDT Wallet">
                </div>
                <div class="content-wrp">
                    <h4>Crypto USDT Wallet</h4>
                </div>
            </div>
            <div class="info-box">
                <div class="logo-wrp">
                    <img src="assets/img/virtual-mob-pay.png" alt="Virtual Mob Pay">
                </div>
                <div class="content-wrp">
                    <h4>Virtual Mob Pay</h4>
                </div>
            </div>
        </div>
    </div>

    <!-- Second Row - Right Scrolling -->
    <div class="marquee-container">
        <div class="marquee marquee-right">
            <div class="info-box">
                <div class="logo-wrp">
                    <img src="assets/img/praxis.png" alt="Praxis">
                </div>
                <div class="content-wrp">
                    <h4>Praxis</h4>
                </div>
            </div>
            <div class="info-box">
                <div class="logo-wrp">
                    <img src="assets/img/rapyd.png" alt="Rapyd">
                </div>
                <div class="content-wrp">
                    <h4>Rapyd</h4>
                </div>
            </div>
            <div class="info-box">
                <div class="logo-wrp">
                    <img src="assets/img/b2binpay.png" alt="B2BInPay">
                </div>
                <div class="content-wrp">
                    <h4>B2BInPay</h4>
                </div>
            </div>
        </div>
    </div>
</div>

<style>
    /* Container Styling */
    .custom-container {
        background-color: #71b4ff3b;
        max-width: 1226px;
        width: 100%;
        margin: 0 auto;
        padding: 15px;
    }

    /* Marquee Scroll Effect */
    .marquee-container {
        overflow: hidden;
        white-space: nowrap;
        width: 100%;
        position: relative;
    }

    .marquee {
        display: flex;
        gap: 20px;
        animation: marquee-scroll-left 10s linear infinite;
    }

    .marquee-right {
        animation: marquee-scroll-right 10s linear infinite;
    }

    @keyframes marquee-scroll-left {
        from { transform: translateX(0); }
        to { transform: translateX(-100%); }
    }

    @keyframes marquee-scroll-right {
        from { transform: translateX(-100%); }
        to { transform: translateX(0); }
    }

    /* Logo Boxes */
    .info-box {
        display: inline-block;
        width: 180px;
        text-align: center;
    }

    .logo-wrp img {
        max-width: 100%;
        height: auto;
    }

    /* Responsive Styles */
    @media (max-width: 1024px) {
        .custom-container {
            padding: 10px;
        }

        .marquee {
            animation-duration: 8s;
        }

        .info-box {
            width: 140px;
        }
    }

    @media (max-width: 768px) {
        .custom-container {
            padding: 5px;
        }

        .marquee {
            animation-duration: 6s;
        }

        .info-box {
            width: 120px;
        }

        h2 {
            font-size: 20px;
        }
    }

    @media (max-width: 480px) {
        .info-box {
            width: 100px;
        }

        h2 {
            font-size: 18px;
        }
    }
</style>

</div>
<br><br>
<section>
  <div class="container" style="background-color: black; padding: 40px 0;">
    <div class="row align-items-center">
      <div class="col-12 col-lg-8">
        <h4 class="text-content" style="font-size: 22px; font-weight:600px">
          Propel Your Forex Brokerage<br>
          Business To New Heights With Our<br>
          Cutting-Edge <span class="highlight">Payment Gateway Integrations</span>
        </h4>
      </div>
      <div class="col-12 col-lg-4 text-center text-lg-right">
        <a href="../contact/index.php" class="btn-demo" style="margin-right: 265px;">Request Demo</a>
      </div>
    </div>
  </div>
</section>
<br><br>
<div class="container">
    <h4 style="font-size: 28px; font-weight:600px"><center>Countries We Serve</center></h4><br>
    <div class="countries-grid">
        <div class="country-item">
            <img src="https://flagcdn.com/au.svg" alt="Australia Flag"> Australia
        </div>
        <div class="country-item">
            <img src="https://flagcdn.com/ca.svg" alt="Canada Flag"> Canada
        </div>
        <div class="country-item">
            <img src="https://flagcdn.com/de.svg" alt="Germany Flag"> Germany
        </div>
        <div class="country-item">
            <img src="https://flagcdn.com/gb.svg" alt="UK Flag"> United Kingdom
        </div>
        <div class="country-item">
            <img src="https://flagcdn.com/ae.svg" alt="UAE Flag"> United Arab Emirates
        </div>
        <div class="country-item">
            <img src="https://flagcdn.com/za.svg" alt="South Africa Flag"> South Africa
        </div>
        <div class="country-item">
            <img src="https://flagcdn.com/se.svg" alt="Sweden Flag"> Sweden
        </div>
        <div class="country-item">
            <img src="https://flagcdn.com/nl.svg" alt="Netherlands Flag"> Netherlands
        </div>
        <div class="country-item">
            <img src="https://flagcdn.com/jp.svg" alt="Japan Flag"> Japan
        </div>
        <div class="country-item">
            <img src="https://flagcdn.com/no.svg" alt="Norway Flag"> Norway
        </div>
        <div class="country-item">
            <img src="https://flagcdn.com/fi.svg" alt="Finland Flag"> Finland
        </div>
        <div class="country-item">
            <img src="https://flagcdn.com/fr.svg" alt="France Flag"> France
        </div>
        <div class="country-item">
            <img src="https://flagcdn.com/ie.svg" alt="Ireland Flag"> Ireland
        </div>
        <div class="country-item">
            <img src="https://flagcdn.com/us.svg" alt="USA Flag"> USA
        </div>
        <div class="country-item">
            <img src="https://flagcdn.com/pl.svg" alt="Poland Flag"> Poland
        </div>
        <div class="country-item">
            <img src="https://flagcdn.com/my.svg" alt="Malaysia Flag"> Malaysia
        </div>
        <div class="country-item">
            <img src="https://flagcdn.com/sg.svg" alt="Singapore Flag"> Singapore
        </div>
        <div class="country-item">
            <img src="https://flagcdn.com/cy.svg" alt="Cyprus Flag"> Cyprus
        </div>
        <div class="country-item">
            <img src="https://flagcdn.com/id.svg" alt="Indonesia Flag"> Indonesia
        </div>
        <div class="country-item">
            <img src="https://flagcdn.com/tr.svg" alt="Turkey Flag"> Turkey
        </div>
        <div class="country-item">
            <img src="https://flagcdn.com/ng.svg" alt="Nigeria Flag"> Nigeria
        </div>
        <div class="country-item">
            <img src="https://flagcdn.com/bd.svg" alt="Bangladesh Flag"> Bangladesh
        </div>
        <div class="country-item">
            <img src="https://flagcdn.com/th.svg" alt="Thailand Flag"> Thailand
        </div>
        <div class="country-item">
            <img src="https://flagcdn.com/ph.svg" alt="Philippines Flag"> Philippines
        </div>
        <div class="country-item">
            <img src="https://flagcdn.com/lk.svg" alt="Sri Lanka Flag"> Sri Lanka
        </div>
        <div class="country-item">
            <img src="https://flagcdn.com/ch.svg" alt="Switzerland Flag"> Switzerland
        </div>
        <div class="country-item">
            <img src="https://flagcdn.com/vn.svg" alt="Vietnam Flag"> Vietnam
        </div>
    </div>
</div>


<style>
            .hero-banner::after {
                content: "";
                display: block;
                position: absolute;
                top: 0;
                left: 0;
                width: 100%;
                height: 60%;
                color: black;
                background: white;
                z-index: -1;
            }
            @media (max-width: 767px) {
                .hero-banner {
                    padding:15px 0 0px 0 !important;
                }
                .hero-banner__img
                {
                    margin-bottom: 25px !important;
                }
              .card-feature
              {
                height: 300px;
              }
            }
            

            .button {
                display: inline-block;
                width: max-content;
                padding: 8px 15px;
                -webkit-margin-end: 6px;
                margin: 8px 15px !important;
                font-weight: 500;
                font-size: 14px;
                line-height: 11px !important;
                text-align: center;
                color: #005dbd;
                /* margin-top: 10px; */
                height: max-content;
                background: #ffffff;
                border: 1px solid #005dbd;
                border-radius: 1px;
                -webkit-transition: all .5s;
            }

            .button:hover {
                background-color: #0480ff14;
                border-color: #005dbd !important;
                color: #005dbd !important;
            }

            .hero-banner {
                position: relative;
                background: #fff;
                background-size: cover;
                padding: 110px 0 110px 0;
                z-index: 1;
            }

            .hero-banner__content h1 {
                color: #424242;
                ;
                margin-bottom: 22px;
                font-weight: 600;
                line-height: 1.3;
                font-size: 30px !important;
            }

            .button-light {
                background-color: #005bbe;
                border-color: #21146a;
            }

            
            .hero-banner__content p {
                color: #000;
                font-size: 15px !important;
                /* margin-bottom: 45px; */
            }

            
            tr {
                text-align: left;
                border: 1px solid black;
                padding: 12px;
            }

            td {
                padding: 11px;
            }

            .card-pricing__list li i,
            .card-pricing__list li span {
                font-size: 16px;
                margin-right: 10px;
                font-weight: bold;
                color: green;
            }

            .clients_logo_area .clients_slider .item img {
                width: auto;
                text-align: center;
                display: block;
                margin: auto;
                line-height: 70px;
                -moz-filter: grayscale(100%);
                -o-filter: grayscale(100%);
                -ms-filter: grayscale(100%);
                filter: none;
                opacity: 1;
                -webkit-transition: all 0.3s ease 0s;
                -moz-transition: all 0.3s ease 0s;
                -o-transition: all 0.3s ease 0s;
                transition: all 0.3s ease 0s;
            }

            span.mostpopular {
                padding: 12px;
                transform: rotateZ(45deg);
                right: -11px;
                top: -1px;
                float: right;
                margin-bottom: 15px;
                display: block;
                background: gold;
                padding: 5px;
                font-size: 15px;
                position: relative;
            }
        </style><br><br><br>
         <?php
include_once('layouts/footer.php');
?>

