<!DOCTYPE html>
<html lang="en">
<?php
include_once('layouts/header.php');
?>
<br><br><br><br><br><br><br>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
       <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">

 <style>
      

        .logo-grid {
    display: grid;
    grid-template-columns: repeat(4, 1fr);
    gap: 24px;
    max-width: 1172px;
    width: 100%;
    margin-left: 102px;
}

/* Tablet view (max-width: 1024px) */
@media (max-width: 1024px) {
    .logo-grid {
        grid-template-columns: repeat(3, 1fr);
        margin-left: 30px;
    }
}

/* Small tablet view (max-width: 768px) */
@media (max-width: 768px) {
    .logo-grid {
        grid-template-columns: repeat(2, 1fr);
        margin-left: 20px;
    }
}

/* Mobile view (max-width: 480px) */
@media (max-width: 480px) {
    .logo-grid {
        grid-template-columns: 1fr;
        margin-left: 0;
        gap: 16px;
    }
}

        .logo-box {
            display: flex;
            align-items: center;
            justify-content: center;
            border: 1px solid #ddd;
            border-radius: 10px;
            background-color: #fff;
            padding: 68px;
            transition: transform 0.3s ease-in-out;
        }

        .logo-box img {
            max-width: 150px;
            max-height: 80px;
            object-fit: contain;
        }

        .logo-box:hover {
            transform: scale(1.05);
        }

        @media (max-width: 1024px) {
            .logo-grid {
                grid-template-columns: repeat(3, 1fr);
            }
        }

        @media (max-width: 768px) {
            .logo-grid {
                grid-template-columns: repeat(2, 1fr);
            }
        }

        @media (max-width: 480px) {
            .logo-grid {
                grid-template-columns: 1fr;
            }
        }
    </style>


    <div class="logo-grid">
        <div class="logo-box">
             <img src = "assets/img/images/logo_1.jpg" alt="img">
        </div>
        <div class="logo-box">
            <img src = "assets/img/images/logo_2.jpg" alt="img">
        </div>
        <div class="logo-box">
             <img src = "assets/img/images/logo_3.jpg" alt="img">
        </div>
        <div class="logo-box">
            <img src = "assets/img/images/logo_4.jpg" alt="img">
        </div>
        <div class="logo-box">
            <img src = "assets/img/images/logo_5.png" alt="img">
        </div>
        <div class="logo-box">
             <img src = "assets/img/images/logo_6.png" alt="img">
        </div>
        <div class="logo-box">
            <img src = "assets/img/images/logo_7.jpg" alt="img">
        </div>
        <div class="logo-box">
            <img src = "assets/img/images/logo_8.jpg" alt="img">
        </div>
        <div class="logo-box">
            <img src = "assets/img/images/logo_9.jpg" alt="img">
        </div>
        <div class="logo-box">
             <img src = "assets/img/images/logo_10.jpg" alt="img">
        </div>
        <div class="logo-box">
            <img src = "assets/img/images/logo_11.png" alt="img">
        </div>
        <div class="logo-box">
            <img src = "assets/img/images/logo_12.jpg" alt="img">
        </div>
        <div class="logo-box">
            <img src = "assets/img/images/logo_13.jpg" alt="img">
        </div>
        <div class="logo-box">
             <img src = "assets/img/images/logo_14.jpg" alt="img">
        </div>
        <div class="logo-box">
            <img src = "assets/img/images/logo_15.png" alt="img">
        </div>
        <div class="logo-box">
            <img src = "assets/img/images/logo_16.jpg" alt="img">
        </div>
    </div><br><br>
   <style >
    /* .container {
            text-align: center;
            padding: 20px;
        }
        h2 {
            margin-bottom: 20px;
        }*/
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
               /* .services-dropdown .dropdown-menu.megamenu {
  position: absolute;
  top: 76%;
  right: -659px !important; /* Shift dropdown to the left by 659px */
  /*width: 21% !important;*/
  z-index: 1000; /* Ensure visibility */
}
*/

</style>
   </style>
    <div class="container">
    <h2><center>Countries We Serve</center></h2>
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
  </body>
  </html>


</section>


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
    </style>
 
<br><br>



</body>

</html>
<?php
include_once('layouts/footer.php');
?>