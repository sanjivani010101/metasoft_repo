<?php
include_once('layouts/header.php');
?>
<br><br>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
       <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">

  <style>
    .tab-content .card {
      border-radius: 12px;
      padding: 20px;
      margin: 15px 0;
      box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
      height: 290px;
    }

    .tab-content .card .btn-custom {
      border: 1px solid #000;
      border-radius: 20px;
      padding: 8px 20px;
      background-color: transparent;
      font-weight: bold;
      text-decoration: none;
      color: #000;
      transition: background-color 0.3s;
    }

    .tab-content .card .btn-custom:hover {
      background-color: #000;
      color: #fff;
    }

    .grid-container {
      display: grid;
      grid-template-columns: repeat(2, 1fr); /* Two columns */
      gap: 20px; /* Spacing between grid items */
    }

    .card {
      padding: 20px;
      border-radius: 10px;
      box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    }

    .btn-custom {
      display: inline-block;
      padding: 10px 20px;
      background-color: #007bff;
      color: #fff;
      text-decoration: none;
      border-radius: 5px;
    }

    /* Responsive for smaller screens */
    @media (max-width: 768px) {
      .grid-container {
        grid-template-columns: 1fr; /* Single column for smaller screens */
      }
    }
  </style>
<style>
     .card-custom {
      border-radius: 12px;
      padding: 20px;
    }
    .card-icon {
      width: 50px;
      height: 50px;
      background-color: white;
      border-radius: 50%;
      display: flex;
      align-items: center;
      justify-content: center;
      margin-bottom: 15px;
    }
    .btn-custom {
      border: 1px solid black;
      border-radius: 20px;
      padding: 5px 15px;
      color: black;
      text-decoration: none;
    }
    .btn-custom:hover {
      background-color: black;
      color: white;

    }
    .text-content h1 {
            font-size: 3rem;
            color: #000;
            font-weight: bold;
            margin-bottom: 15px;
        }
        .text-content {
        flex: 1;
        max-width: 50%;
        padding-right: 20px;
    }

    .image-content {
        flex: 1;
        max-width: 50%;
    }

    .image-content img {
        width: 68%;
        height: auto;
        border-radius: 10px;
            margin-right: -351px;
    }

    /* Responsive Design */
    /*@media (max-width: 992px) {
        .container {
            flex-direction: column; /* Stack elements vertically */
            text-align: center;
        }*/
        
        .text-content,
        .image-content {
            max-width: 100%;
            padding: 0;
        }

        .image-content img {
            margin: 0; /* Remove fixed margins for mobile */
           /* margin-left: 268px;
    margin-top: -116px;
        }*/
    }

  </style>
<br><br><br><br><br>

<div class="container">
        <div class="text-content" style="margin-left: 37px;">

            <h1 style="font-size: 30px; font-weight:600px; padding-top:10px">CRM Features</h1>
            <p style="margin-left: -34px; font-size:22px; font-weight:600px">Welcome to the most <br>
            feature-rich CRM on the market</p>
            
        </div>
       <div class="image-content" style="margin-left: 307px;
    margin-top: -117px;">
    <img src="assets/img/images/meta_1.jpg" alt="img" class="responsive-img">
</div>


<style>
  .image-content {
    position: relative;
    display: flex;
    justify-content: flex-end; /* Aligns image to the right */
}

.responsive-img {
    max-width: 100%; 
    height: auto;
    margin-right: -248px;
    margin-top: -153px;
}

/* Responsive for mobile screens */
@media (max-width: 768px) {
    .image-content {
        justify-content: center; /* Centers image on mobile */
    }

    .responsive-img {
        margin-right: 0; /* Removes negative margin on mobile */
        margin-top: -80px; /* Adjust based on your design */
        width: 90%; /* Makes image fit smaller screens */
    }
}

</style>

        </div>
    </div><br><br>
      <style >
         .content {
            max-width: 800px;
            margin: 0 auto;
            color: #333;
        }
        .nav-tabs .nav-link {
    color: #005cbe !important; /* Blue color for unselected tabs */
    font-weight: bold;
}

.nav-tabs .nav-link.active {
    color: black !important; /* Black color for the active tab */
    font-weight: bold;
    border-bottom: 2px solid black; /* Optional: Adds an underline effect */
}

.nav-tabs .nav-link:hover {
    color: #005cbe !important; /* Darker blue on hover */
    
    
}


.nav-tabs .nav-link {
    color:#005cbe !important; /* Blue color for unselected tabs */
    font-weight: bold;
    background-color: transparent !important; /* Remove background */
    border: none !important; /* Remove default border */
}

.nav-tabs .nav-link.active {
    color: black !important; /* Black color for the active tab */
    font-weight: bold;
    background-color: transparent !important; /* Remove background */
    border-bottom: 2px solid black !important; /* Optional: Adds an underline effect */
}

.nav-tabs .nav-link:hover {
    color: #0056b3 !important; /* Darker blue on hover */
}
p{
    color: black;
    
}
h5{
   color: black; 
    
}

      </style>
<div class="container mt-5">
  <!-- Tabs Navigation -->
  <ul class="nav nav-tabs" id="cardTabs" role="tablist" style="font-size: 20px;">
    <li class="nav-item" style="text-color:#212529;    margin-left: 156px; ">
      <button class="nav-link active" id="tab1-tab" data-bs-toggle="tab" data-bs-target="#tab1" type="button" role="tab">
       Modules
      </button>
    </li>
    <li class="nav-item">
      <button class="nav-link" id="tab2-tab" data-bs-toggle="tab" data-bs-target="#tab2" type="button" role="tab">
        IB
      </button>
    </li>
    <li class="nav-item">
      <button class="nav-link" id="tab3-tab" data-bs-toggle="tab" data-bs-target="#tab3" type="button" role="tab">
       Marketing
      </button>
    </li>
    <li class="nav-item">
      <button class="nav-link" id="tab4-tab" data-bs-toggle="tab" data-bs-target="#tab4" type="button" role="tab">
       Rewards
      </button>
    </li>
    <li class="nav-item">
      <button class="nav-link" id="tab5-tab" data-bs-toggle="tab" data-bs-target="#tab5" type="button" role="tab">
       Reporting
      </button>
    </li>
    <li class="nav-item">
      <button class="nav-link" id="tab6-tab" data-bs-toggle="tab" data-bs-target="#tab6" type="button" role="tab">
       Client
      </button>
    </li>
   <!--  <li class="nav-item">
      <button class="nav-link" id="tab7-tab" data-bs-toggle="tab" data-bs-target="#tab7" type="button" role="tab">
       Additional
      </button>
    </li> -->
    <!--<li class="nav-item">-->
    <!--  <button class="nav-link" id="tab8-tab" data-bs-toggle="tab" data-bs-target="#tab8" type="button" role="tab">-->
    <!--   Brokeree-->
    <!--  </button>-->
    <!--</li>-->
  </ul><br><br>

  <!-- Tab Content -->
  <div class="tab-content mt-3" id="cardTabsContent">
    <!-- Tab 1 Content -->
    <div class="tab-pane fade show active" id="tab1" role="tabpanel">
      <div class="grid-container">
        <div class="card-custom" style="background-color:#5ba4d6
        ">
          <div class="card-icon">
           <svg width="40" height="40" viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M33 26C35.2091 26 37 24.2091 37 22V11C37 8.79086 35.2091 7 33 7H13C10.7909 7 9 8.79086 9 11" stroke="#005cbe" stroke-width="2"></path>
                    <path d="M4 16C4 13.7909 5.79086 12 8 12H28C30.2091 12 32 13.7909 32 16V27.5918C32 29.801 30.2091 31.5918 28 31.5918H22.4429C22.1609 31.5918 21.8919 31.711 21.7024 31.9198L18.7406 35.1839C18.3437 35.6212 17.6563 35.6212 17.2594 35.1839L14.2976 31.9198C14.1081 31.711 13.8391 31.5918 13.5571 31.5918H8C5.79086 31.5918 4 29.801 4 27.5918V16Z" stroke="#192527" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                    <circle cx="12" cy="22" r="1.5" fill="#005cbe"></circle>
                    <circle cx="18" cy="22" r="1.5" fill="#005cbe"></circle>
                    <circle cx="24" cy="22" r="1.5" fill="#005cbe"></circle>
                </svg>
          </div>
          <h4 style="font-size:22px; font-weight:600px">Instant Message Module</h4>
          <p style="font-size: 18px; font-weight:500px;">
            Enhance your client interactions with our innovative Instant Message Module! Enjoy the convenience of integrated messaging platforms. Streamline communication, improve engagement, and seamlessly integrate with your CRM.
          </p>
        </div>
       <div class="card-custom" style="background-color:#5ba4d6">
          <div class="card-icon">
           <svg width="40" height="40" viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M5 11C5 8.79086 6.79086 7 9 7H31C33.2091 7 35 8.79086 35 11V25C35 27.2091 33.2091 29 31 29H9C6.79086 29 5 27.2091 5 25V11Z" stroke="#192527" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                    <path d="M14 33H26" stroke="#192527" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                    <path d="M11 14H20" stroke="#192527" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                    <path d="M20 22H29" stroke="#192527" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                    <path d="M29 14H24M24 14V12M24 14V16" stroke="#177fc6;" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                    <path d="M11 22H16M16 22V20M16 22V24" stroke="#005cbe" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                </svg>
          </div>
          <h4 style="font-size:22px; font-weight:600px">IB Pages Module</h5>
         <p style="font-size:18px; font-weight: 500px;">
          Unleash the potential of the IB Pages Module! Create dynamic and unique pages in your client area to boost client engagement. Personalize experiences, build trust, and enhance client satisfaction. Tailor your client area effortlessly with full customization today!
         </p>
        </div>
        <div class="card-custom" style="background-color:#5ba4d6">
          <div class="card-icon">
           <svg width="40" height="40" viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M5 15.9667V27.3333C5 29.3584 6.79086 31 9 31H31C33.2091 31 35 29.2091 35 27V24M5 15.9667V12.6667C5 10.6416 6.79086 9 9 9L27 9M5 15.9667H22" stroke="#192527" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                    <path d="M27 16.1875L32 21M32 21L37 16.1875M32 21V5" stroke="#0a58ca" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                    <path d="M10 26H14" stroke="#0a58ca" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                </svg>
          </div>
          <h4 style="font-size: 22px; font-weight:600px">Local Depositor Module</h4>
          <p style="font-size: 18px; font-weight:500px">
            Enhance client satisfaction with the Local Depositor Module. Assign local depositors to manage transactions efficiently with precision. They can seamlessly approve or decline client requests using internal wallets. Streamline your CRM’s financial operations with ease!
          </p>
        </div>
        <div class="card-custom" style="background-color:#5ba4d6">
          <div class="card-icon">
            <svg width="40" height="40" viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M12.9999 13.25C12.9999 12.1454 13.8953 11.25 14.9999 11.25H24.9999C26.1044 11.25 26.9999 12.1454 26.9999 13.25C26.9999 14.3546 26.1044 15.25 24.9999 15.25H14.9999C13.8953 15.25 12.9999 14.3546 12.9999 13.25Z" stroke="#192527" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                    <path d="M7.00012 9.25C7.00012 7.04086 8.79098 5.25 11.0001 5.25H29.0001C31.2093 5.25 33.0001 7.04086 33.0001 9.25V30.75C33.0001 32.9591 31.2093 34.75 29.0001 34.75H11.0001C8.79098 34.75 7.00012 32.9591 7.00012 30.75V9.25Z" stroke="#192527" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                    <circle cx="13.5001" cy="22" r="1.5" fill="#005cbe"></circle>
                    <circle cx="19.9998" cy="22" r="1.5" fill="#005cbe"></circle>
                    <circle cx="26.5" cy="22" r="1.5" fill="#005cbe"></circle>
                    <circle cx="13.5001" cy="28.25" r="1.5" fill="#005cbe"></circle>
                    <circle cx="19.9998" cy="28.25" r="1.5" fill="#005cbe"></circle>
                    <circle cx="26.5" cy="28.25" r="1.5" fill="#005cbe"></circle>
                </svg>
          </div>
          <h4  style="font-size: 22px; font-weight:600px">Trading Calculator Module</h4>
          <p style="font-size: 18px; font-weight:500px">
           Transform client trading routines with our advanced Trading Calculator Module! Seamlessly integrated into client areas, it offers dynamic calculations for pip price, margin amount, and instrument spread. Tailor instrument lists to meet brokerage needs and enjoy full MT5 compatibility. Enhance trading efficiency with our calculator module!
          </p>
        </div>
        <div class="card-custom" style="background-color:#5ba4d6">
          <div class="card-icon">
             <svg width="40" height="40" viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M5 15.9667V27.3333C5 29.3584 6.79086 31 9 31H31C33.2091 31 35 29.2091 35 27V24.5M5 15.9667V12.6667C5 10.6416 6.79086 9 9 9H22M5 15.9667H26" stroke="#192527" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                    <path d="M27 9.8125L32 5M32 5L37 9.8125M32 5V21" stroke="#005cbe" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                    <path d="M10 26H14" stroke="#192527" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                </svg>    
          </div>
          <h4 style="font-size: 22px; font-weight:600px">Instant Withdrawals Module</h5>
          <p style="font-size: 18px; font-weight:500px">
           Offer fast and seamless withdrawals with the Instant Withdrawals Module. Set custom limits, automate processes, and ensure smooth financial management. Revolutionize client satisfaction with instant withdrawals!
          </p>
        </div>
        <div class="card-custom" style="background-color:#5ba4d6">
          <div class="card-icon">
               <svg width="40" height="40" viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M30 20.417V17.0837C30 13.4018 27.0153 10.417 23.3334 10.417H10C6.31814 10.417 3.33337 13.4018 3.33337 17.0837V23.7503C3.33337 27.4322 6.31814 30.417 10 30.417H18.75" stroke="#192527" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                    <path d="M34.1666 17.5002V12.9166C34.1666 9.23468 31.1819 6.24991 27.5 6.24991H14.1666C11.8665 6.24991 9.83848 7.41475 8.64021 9.18669C8.33302 9.71881 8.21093 10.0234 8.125 10.625" stroke="#192527" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                    <path d="M22.75 34.75L34.75 22.75" stroke="#005cbe" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                    <path d="M33.25 35.75C34.6307 35.75 35.75 34.6307 35.75 33.25C35.75 31.8693 34.6307 30.75 33.25 30.75C31.8693 30.75 30.75 31.8693 30.75 33.25C30.75 34.6307 31.8693 35.75 33.25 35.75Z" stroke="#005cbe" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                    <path d="M24.25 26.75C25.6307 26.75 26.75 25.6307 26.75 24.25C26.75 22.8693 25.6307 21.75 24.25 21.75C22.8693 21.75 21.75 22.8693 21.75 24.25C21.75 25.6307 22.8693 26.75 24.25 26.75Z" stroke="#005cbe" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                </svg>
          </div>
          <h4 style="font-size:22px; font-weight:600px">Account Fees Rules</h5>
          <p style="font-size: 18px; font-weight:500px">
            The Account Fees Rules feature automates commission deductions within the CRM system upon application approval. Brokers can configure rules to define how and when fees are deducted from different client accounts. It also automates the creation of new trading accounts, making the system efficient and tailored to various client needs.
          </p>
        </div>
      </div>
    </div>

    <!-- Tab 2 Content -->
    <div class="tab-pane fade" id="tab2" role="tabpanel">
      <div class="grid-container">
        <div class="card" style="background-color: #5ba4d6;height: 356px;">
           <div class="card-icon">
               <svg width="40" height="40" viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M3.75 14.75V26.75C3.75 28.9591 5.54086 30.75 7.75 30.75H17.25M3.75 14.75V12.75C3.75 10.5409 5.54086 8.75 7.75 8.75H13.75M3.75 14.75L16.25 18.0833M33.75 14.75V12.75C33.75 10.5409 31.9591 8.75 29.75 8.75H23.75M33.75 14.75V18.75M33.75 14.75L21.25 18.0833M13.75 8.75V5.75C13.75 4.64543 14.6454 3.75 15.75 3.75H21.75C22.8546 3.75 23.75 4.64543 23.75 5.75V8.75M13.75 8.75H23.75" stroke="#192527" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                    <path d="M16.7499 17.7501C16.7499 16.6456 17.6453 15.7501 18.7499 15.7501C19.8544 15.7501 20.7499 16.6456 20.7499 17.7501V18.7501C20.7499 19.8547 19.8544 20.7501 18.7499 20.7501C17.6453 20.7501 16.7499 19.8547 16.7499 18.7501V17.7501Z" stroke="#192527" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                    <path d="M35.7499 28.7499C35.7499 32.6159 32.6159 35.7499 28.7499 35.7499M35.7499 28.7499C35.7499 24.8839 32.6159 21.7499 28.7499 21.7499M35.7499 28.7499H21.7499M28.7499 35.7499C24.8839 35.7499 21.7499 32.6159 21.7499 28.7499M28.7499 35.7499C30.1306 35.7499 31.2499 32.6159 31.2499 28.7499C31.2499 24.8839 30.1306 21.7499 28.7499 21.7499M28.7499 35.7499C27.3692 35.7499 26.2499 32.6159 26.2499 28.7499C26.2499 24.8839 27.3692 21.7499 28.7499 21.7499M21.7499 28.7499C21.7499 24.8839 24.8839 21.7499 28.7499 21.7499" stroke="#005cbe" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                </svg>
          </div>
          <h4 style="font-size: 22px; font-weight:18px">Open Network IB</h5>
          <p style="font-size: 18px; font-weight:500px">
          Pay your IBs commissions directly from the Client’s IB tree. Our Open Network IB Module allows flexible configurations, either by account or by manager, covering a wide range of parameters. Clients can select their preferred IB when opening a new trading account. Upgrade your forex CRM with Open Network IB today!
          </p>
        </div>
        <div class="card" style="background-color:#5ba4d6;height:  356px;px;">
           <div class="card-icon">
              <svg width="40" height="40" viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M3.75 14.75V26.75C3.75 28.9591 5.54086 30.75 7.75 30.75H17.25M3.75 14.75V12.75C3.75 10.5409 5.54086 8.75 7.75 8.75H13.75M3.75 14.75L16.25 18.0833M33.75 14.75V12.75C33.75 10.5409 31.9591 8.75 29.75 8.75H23.75M33.75 14.75V18.75M33.75 14.75L21.25 18.0833M13.75 8.75V5.75C13.75 4.64543 14.6454 3.75 15.75 3.75H21.75C22.8546 3.75 23.75 4.64543 23.75 5.75V8.75M13.75 8.75H23.75" stroke="#192527" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                    <path d="M16.7499 17.7501C16.7499 16.6456 17.6453 15.7501 18.7499 15.7501C19.8544 15.7501 20.7499 16.6456 20.7499 17.7501V18.7501C20.7499 19.8547 19.8544 20.7501 18.7499 20.7501C17.6453 20.7501 16.7499 19.8547 16.7499 18.7501V17.7501Z" stroke="#192527" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                    <path d="M21.25 27.4206L25 23.75M25 23.75L28.75 27.4206M25 23.75V35" stroke="#005cbe" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                    <path d="M30 31.3294L33.75 35M33.75 35L37.5 31.3294M33.75 35V23.75" stroke="#005cbe" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                </svg>
          </div>
          <h4 style="font-size: 22px; font-weight:600px">Automatic IB campaign allocation</h4>
          <p style="font-weight: 500px; font-size:18px">
            Optimize your IB campaigns with the Automatic IB Campaign Allocation feature! This advanced tool uses a dynamic tier system based on key performance metrics like referrals, deposits, trades, and traded lots. 
          </p>
        </div>
      </div>
    </div>

    <!-- Tab 3 Content -->
    <div class="tab-pane fade" id="tab3" role="tabpanel">
      <div class="grid-container">
        <div class="card" style="background-color: #5ba4d6;height: 404px;">
            <div class="card-icon">
             <svg width="40" height="40" viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M32 12L19.5757 17.3247C18.5695 17.7559 17.4305 17.7559 16.4243 17.3247L4 12M32 12C32 9.79086 30.2091 8 28 8H8C5.79086 8 4 9.79086 4 12M32 12V18.5M4 12V26C4 28.2091 5.79086 30 8 30H20.5" stroke="#192527" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                    <mask id="path-2-outside-1_1935_12537" maskUnits="userSpaceOnUse" x="23" y="21" width="16" height="16" fill="black">
                        <rect fill="white" x="23" y="21" width="16" height="16"></rect>
                        <path d="M31 36C30.0433 36 29.1392 35.8161 28.2875 35.4484C27.4358 35.0807 26.692 34.579 26.0559 33.9434C25.4203 33.3078 24.9186 32.5642 24.5509 31.7125C24.1832 30.8608 23.9995 29.9567 24 29C24 28.0317 24.1839 27.1245 24.5516 26.2784C24.9193 25.4323 25.421 24.6917 26.0566 24.0566C26.6922 23.4205 27.4356 22.9189 28.2868 22.5516C29.138 22.1843 30.0424 22.0005 31 22C31.9683 22 32.8755 22.1839 33.7216 22.5516C34.5677 22.9193 35.3083 23.421 35.9434 24.0566C36.5795 24.6922 37.0811 25.433 37.4484 26.2791C37.8157 27.1252 37.9995 28.0321 38 29V30.015C38 30.7033 37.7639 31.2897 37.2916 31.7741C36.8193 32.2585 36.2388 32.5005 35.55 32.5C35.13 32.5 34.7392 32.4067 34.3775 32.22C34.0158 32.0333 33.7183 31.7883 33.485 31.485C33.17 31.8 32.7995 32.048 32.3734 32.2291C31.9473 32.4102 31.4895 32.5005 31 32.5C30.0317 32.5 29.2061 32.1586 28.5234 31.4759C27.8407 30.7932 27.4995 29.9679 27.5 29C27.5 28.0317 27.8414 27.2061 28.5241 26.5234C29.2068 25.8407 30.0321 25.4995 31 25.5C31.9683 25.5 32.7939 25.8414 33.4766 26.5241C34.1593 27.2068 34.5005 28.0321 34.5 29V30.015C34.5 30.3533 34.605 30.6186 34.815 30.8109C35.025 31.0032 35.27 31.0995 35.55 31.1C35.83 31.1 36.075 31.0036 36.285 30.8109C36.495 30.6182 36.6 30.3529 36.6 30.015V29C36.6 27.4717 36.0486 26.1561 34.9459 25.0534C33.8432 23.9507 32.5279 23.3995 31 23.4C29.4717 23.4 28.1561 23.9514 27.0534 25.0541C25.9507 26.1568 25.3995 27.4721 25.4 29C25.4 30.5283 25.9514 31.8439 27.0541 32.9466C28.1568 34.0493 29.4721 34.6005 31 34.6H33.8C33.9983 34.6 34.1647 34.6672 34.2991 34.8016C34.4335 34.936 34.5005 35.1021 34.5 35.3C34.5 35.4983 34.4328 35.6647 34.2984 35.7991C34.164 35.9335 33.9979 36.0005 33.8 36H31ZM31 31.1C31.5833 31.1 32.0792 30.8958 32.4875 30.4875C32.8958 30.0792 33.1 29.5833 33.1 29C33.1 28.4167 32.8958 27.9208 32.4875 27.5125C32.0792 27.1042 31.5833 26.9 31 26.9C30.4167 26.9 29.9208 27.1042 29.5125 27.5125C29.1042 27.9208 28.9 28.4167 28.9 29C28.9 29.5833 29.1042 30.0792 29.5125 30.4875C29.9208 30.8958 30.4167 31.1 31 31.1Z"></path>
                    </mask>
                    <path d="M31 36C30.0433 36 29.1392 35.8161 28.2875 35.4484C27.4358 35.0807 26.692 34.579 26.0559 33.9434C25.4203 33.3078 24.9186 32.5642 24.5509 31.7125C24.1832 30.8608 23.9995 29.9567 24 29C24 28.0317 24.1839 27.1245 24.5516 26.2784C24.9193 25.4323 25.421 24.6917 26.0566 24.0566C26.6922 23.4205 27.4356 22.9189 28.2868 22.5516C29.138 22.1843 30.0424 22.0005 31 22C31.9683 22 32.8755 22.1839 33.7216 22.5516C34.5677 22.9193 35.3083 23.421 35.9434 24.0566C36.5795 24.6922 37.0811 25.433 37.4484 26.2791C37.8157 27.1252 37.9995 28.0321 38 29V30.015C38 30.7033 37.7639 31.2897 37.2916 31.7741C36.8193 32.2585 36.2388 32.5005 35.55 32.5C35.13 32.5 34.7392 32.4067 34.3775 32.22C34.0158 32.0333 33.7183 31.7883 33.485 31.485C33.17 31.8 32.7995 32.048 32.3734 32.2291C31.9473 32.4102 31.4895 32.5005 31 32.5C30.0317 32.5 29.2061 32.1586 28.5234 31.4759C27.8407 30.7932 27.4995 29.9679 27.5 29C27.5 28.0317 27.8414 27.2061 28.5241 26.5234C29.2068 25.8407 30.0321 25.4995 31 25.5C31.9683 25.5 32.7939 25.8414 33.4766 26.5241C34.1593 27.2068 34.5005 28.0321 34.5 29V30.015C34.5 30.3533 34.605 30.6186 34.815 30.8109C35.025 31.0032 35.27 31.0995 35.55 31.1C35.83 31.1 36.075 31.0036 36.285 30.8109C36.495 30.6182 36.6 30.3529 36.6 30.015V29C36.6 27.4717 36.0486 26.1561 34.9459 25.0534C33.8432 23.9507 32.5279 23.3995 31 23.4C29.4717 23.4 28.1561 23.9514 27.0534 25.0541C25.9507 26.1568 25.3995 27.4721 25.4 29C25.4 30.5283 25.9514 31.8439 27.0541 32.9466C28.1568 34.0493 29.4721 34.6005 31 34.6H33.8C33.9983 34.6 34.1647 34.6672 34.2991 34.8016C34.4335 34.936 34.5005 35.1021 34.5 35.3C34.5 35.4983 34.4328 35.6647 34.2984 35.7991C34.164 35.9335 33.9979 36.0005 33.8 36H31ZM31 31.1C31.5833 31.1 32.0792 30.8958 32.4875 30.4875C32.8958 30.0792 33.1 29.5833 33.1 29C33.1 28.4167 32.8958 27.9208 32.4875 27.5125C32.0792 27.1042 31.5833 26.9 31 26.9C30.4167 26.9 29.9208 27.1042 29.5125 27.5125C29.1042 27.9208 28.9 28.4167 28.9 29C28.9 29.5833 29.1042 30.0792 29.5125 30.4875C29.9208 30.8958 30.4167 31.1 31 31.1Z" fill="#005cbe"></path>
                    <path d="M31 36C30.0433 36 29.1392 35.8161 28.2875 35.4484C27.4358 35.0807 26.692 34.579 26.0559 33.9434C25.4203 33.3078 24.9186 32.5642 24.5509 31.7125C24.1832 30.8608 23.9995 29.9567 24 29C24 28.0317 24.1839 27.1245 24.5516 26.2784C24.9193 25.4323 25.421 24.6917 26.0566 24.0566C26.6922 23.4205 27.4356 22.9189 28.2868 22.5516C29.138 22.1843 30.0424 22.0005 31 22C31.9683 22 32.8755 22.1839 33.7216 22.5516C34.5677 22.9193 35.3083 23.421 35.9434 24.0566C36.5795 24.6922 37.0811 25.433 37.4484 26.2791C37.8157 27.1252 37.9995 28.0321 38 29V30.015C38 30.7033 37.7639 31.2897 37.2916 31.7741C36.8193 32.2585 36.2388 32.5005 35.55 32.5C35.13 32.5 34.7392 32.4067 34.3775 32.22C34.0158 32.0333 33.7183 31.7883 33.485 31.485C33.17 31.8 32.7995 32.048 32.3734 32.2291C31.9473 32.4102 31.4895 32.5005 31 32.5C30.0317 32.5 29.2061 32.1586 28.5234 31.4759C27.8407 30.7932 27.4995 29.9679 27.5 29C27.5 28.0317 27.8414 27.2061 28.5241 26.5234C29.2068 25.8407 30.0321 25.4995 31 25.5C31.9683 25.5 32.7939 25.8414 33.4766 26.5241C34.1593 27.2068 34.5005 28.0321 34.5 29V30.015C34.5 30.3533 34.605 30.6186 34.815 30.8109C35.025 31.0032 35.27 31.0995 35.55 31.1C35.83 31.1 36.075 31.0036 36.285 30.8109C36.495 30.6182 36.6 30.3529 36.6 30.015V29C36.6 27.4717 36.0486 26.1561 34.9459 25.0534C33.8432 23.9507 32.5279 23.3995 31 23.4C29.4717 23.4 28.1561 23.9514 27.0534 25.0541C25.9507 26.1568 25.3995 27.4721 25.4 29C25.4 30.5283 25.9514 31.8439 27.0541 32.9466C28.1568 34.0493 29.4721 34.6005 31 34.6H33.8C33.9983 34.6 34.1647 34.6672 34.2991 34.8016C34.4335 34.936 34.5005 35.1021 34.5 35.3C34.5 35.4983 34.4328 35.6647 34.2984 35.7991C34.164 35.9335 33.9979 36.0005 33.8 36H31ZM31 31.1C31.5833 31.1 32.0792 30.8958 32.4875 30.4875C32.8958 30.0792 33.1 29.5833 33.1 29C33.1 28.4167 32.8958 27.9208 32.4875 27.5125C32.0792 27.1042 31.5833 26.9 31 26.9C30.4167 26.9 29.9208 27.1042 29.5125 27.5125C29.1042 27.9208 28.9 28.4167 28.9 29C28.9 29.5833 29.1042 30.0792 29.5125 30.4875C29.9208 30.8958 30.4167 31.1 31 31.1Z" stroke="#005cbe" stroke-width="0.4" mask="url(#path-2-outside-1_1935_12537)"></path>
                </svg>
          </div>
          <h4  style="font-size: 22px; font-weight:600px">Mail Module</h4>
          <p style="font-size: 18px; font-weight:500px">
         Revamp your email experience with our feature-rich Mail Module! Easily link corporate mailboxes to your CRM for facilitated communications. Boost efficiency, save time, and enhance collaboration with flexible controls and customizable templates. Centralize your emails, maintain professional messaging, and watch your productivity soar.
          </p>
         
        </div>
        <div class="card" style="background-color: #5ba4d6;height: 404px;">
         <div class="card-icon">
             <svg width="40" height="40" viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M20.1111 26.5L26.5556 20M26.5556 20L20.1111 13.5M26.5556 20H4" stroke="#005cbe" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                    <path d="M11 27V30C11 32.2091 12.7909 34 15 34H29C31.2091 34 33 32.2091 33 30V10C33 7.79086 31.2091 6 29 6H15C12.7909 6 11 7.79086 11 10V13" stroke="#192527" stroke-width="2" stroke-linecap="round"></path>
                </svg>
          </div>
          <h4 style="font-size: 22px; font-weight:600px">Automatic IB campaign allocation</h4>
          <p style="font-size: 18px; font-weight:500px">
            Optimize your IB campaigns with the Automatic IB Campaign Allocation feature! This advanced tool uses a dynamic tier system based on key performance metrics like referrals, deposits, trades, and traded lots. Make data-driven decisions to ensure accuracy and boost engagement in your referral program. Streamline campaign management with our efficient solution!
          </p>
        </div>
      </div>
    </div>
    <div class="tab-pane fade" id="tab4" role="tabpanel">
      <div class="grid-container">
        <div class="card" style="background-color:#5ba4d6;height: 404px;">
         <div class="card-icon">
              <svg width="40" height="40" viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M5.03965 20.004C5.03965 28.2197 11.6998 34.8799 19.9156 34.8799C26.2595 34.8799 31.6759 30.9088 33.8147 25.3168M5.03965 20.004L1.85163 24.2542M5.03965 20.004L9.28958 23.1917" stroke="#192527" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                    <path d="M34.8761 20.0038C34.8761 11.7881 28.216 5.12793 20.0002 5.12793C13.6563 5.12793 8.23985 9.09901 6.10107 14.691M34.8761 20.0038L38.0641 15.7536M34.8761 20.0038L30.6262 16.8161" stroke="#192527" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                    <path d="M19.6016 14.0097C19.7646 13.6638 20.2354 13.6638 20.3984 14.0097L21.9856 17.3789C22.0503 17.5162 22.1754 17.6114 22.3201 17.6335L25.8692 18.1737C26.2335 18.2292 26.379 18.6983 26.1154 18.9676L23.5472 21.5901C23.4425 21.697 23.3947 21.8511 23.4194 22.002L24.0257 25.7051C24.0879 26.0853 23.707 26.3752 23.3811 26.1958L20.2067 24.4474C20.0773 24.3761 19.9227 24.3761 19.7933 24.4474L16.6189 26.1958C16.293 26.3753 15.9121 26.0853 15.9743 25.7051L16.5806 22.002C16.6053 21.8511 16.5575 21.697 16.4528 21.5901L13.8846 18.9676C13.621 18.6983 13.7665 18.2292 14.1308 18.1737L17.6799 17.6335C17.8246 17.6114 17.9497 17.5162 18.0144 17.3789L19.6016 14.0097Z" stroke="#005cbe" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                </svg>
          </div>
          <h4 style="font-size: 22px; font-weight:600px">Automatic Bonus Module</h4>
          <p style="font-size:18px; font-weight:500px">
            Revolutionize bonus management with our Automatic Bonus Module! Automate tasks, ensure precision, and enhance efficiency. Tailor conditions, simplify deductions, and boost operational excellence. Elevate your brokerage with this game-changer now!
          </p>
        </div>
        <div class="card" style="background-color: #5ba4d6;height: 404px;">
          <div class="card-icon">
              <svg width="40" height="40" viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M11 10H7C5.89543 10 5 10.8954 5 12C5 15.7277 7.54955 18.8599 11 19.748" stroke="#005cbe" stroke-width="2"></path>
                    <path d="M29 10H33C34.1046 10 35 10.8954 35 12C35 15.7277 32.4505 18.8599 29 19.748" stroke="#005cbe" stroke-width="2"></path>
                    <path d="M12 36L28 36" stroke="#005cbe" stroke-width="2" stroke-linecap="round"></path>
                    <path d="M15 32L25 32" stroke="#192527" stroke-width="2" stroke-linecap="round"></path>
                    <path d="M20 26.3478C15.0294 26.3478 11 22.2989 11 17.3043V8.26087C11 7.01223 12.0074 6 13.25 6H26.75C27.9926 6 29 7.01223 29 8.26087V17.3043C29 22.2989 24.9706 26.3478 20 26.3478ZM20 26.3478V32" stroke="#192527" stroke-width="2"></path>
                </svg>
          </div>
          <h4 style="font-size: 22px; font-weight:600px">Contest Module</h4>
          <p style="font-size: 18px; font-weight:500px">
           Boost engagement and client interaction with our Contest Module! Launch custom campaigns, track real-time performance, and automate winner selection. Gain actionable insights, enhance audience interaction, and drive client loyalty. Integrate the Contest Module into your forex CRM today!
          </p>
      </div>
       <div class="card" style="background-color: #5ba4d6;height: 404px;">
          <div class="card-icon">
             <svg width="40" height="40" viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M18.9165 4.66413C19.3597 3.77862 20.6403 3.77862 21.0836 4.66413L25.4008 13.2893C25.5768 13.6409 25.917 13.8846 26.3105 13.941L35.9641 15.3241C36.9552 15.4661 37.3509 16.667 36.6338 17.3563L29.6484 24.07C29.3636 24.3438 29.2337 24.7381 29.3009 25.1246L30.9499 34.6045C31.1192 35.5778 30.0832 36.32 29.1967 35.8605L20.5623 31.3847C20.2103 31.2022 19.7897 31.2022 19.4377 31.3847L10.8033 35.8605C9.91685 36.32 8.88079 35.5778 9.05009 34.6045L10.6991 25.1246C10.7663 24.7381 10.6364 24.3438 10.3516 24.07L3.36622 17.3563C2.64906 16.667 3.0448 15.4661 4.03589 15.3241L13.6895 13.941C14.083 13.8846 14.4232 13.6409 14.5992 13.2893L18.9165 4.66413Z" stroke="#192527" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                    <path d="M23.8108 25.0388C23.9823 24.6526 24.0785 24.2647 24.098 23.8754C24.1094 23.7563 24.0718 23.6508 23.9858 23.5686C23.9112 23.4884 23.8154 23.4472 23.7053 23.4472H22.938C22.8323 23.4472 22.7376 23.4801 22.6613 23.5497C22.5845 23.6199 22.5317 23.7338 22.493 23.8716L22.4929 23.8715L22.492 23.875C22.3382 24.5094 22.0522 24.9469 21.6431 25.2042L21.6423 25.2048C21.2346 25.4669 20.7153 25.6014 20.0781 25.6014C19.3286 25.6014 18.7532 25.37 18.3387 24.9163C18.0234 24.5633 17.822 24.0319 17.7445 23.3111H20.385C20.5022 23.3111 20.6049 23.2714 20.6821 23.1869C20.765 23.0961 20.8059 22.985 20.8059 22.8597V22.325C20.8059 22.2025 20.7665 22.095 20.6822 22.0129C20.6073 21.9206 20.5052 21.8736 20.385 21.8736H17.7088V21.1417H20.385C20.5022 21.1417 20.6049 21.102 20.6821 21.0174C20.765 20.9266 20.8059 20.8156 20.8059 20.6903V20.1556C20.8059 20.033 20.7665 19.9256 20.6822 19.8435C20.6073 19.7512 20.5052 19.7042 20.385 19.7042H17.7429C17.8191 18.9756 18.0212 18.4392 18.3387 18.0837C18.7532 17.63 19.3286 17.3986 20.0781 17.3986C20.7153 17.3986 21.2346 17.5331 21.6423 17.7952L21.6423 17.7952L21.6431 17.7958C22.0522 18.0531 22.3382 18.4906 22.492 19.125L22.492 19.125L22.493 19.1284C22.5317 19.2662 22.5845 19.3801 22.6613 19.4503C22.7376 19.5199 22.8323 19.5528 22.938 19.5528H23.7053C23.8154 19.5528 23.9112 19.5116 23.9858 19.4314C24.0718 19.3491 24.1094 19.2437 24.098 19.1246C24.0785 18.7355 23.9824 18.3527 23.8108 17.9765C23.6468 17.5863 23.3967 17.2391 23.0622 16.9353C22.7345 16.6191 22.3179 16.3684 21.8152 16.1814C21.3178 15.9929 20.7381 15.9 20.0781 15.9C19.1997 15.9 18.4638 16.081 17.8765 16.4501C17.2916 16.8176 16.851 17.3322 16.555 17.991L16.5547 17.9915C16.3321 18.4953 16.1915 19.0665 16.1314 19.7042H15.3209C15.1986 19.7042 15.0931 19.7525 15.0099 19.8437C14.9336 19.9272 14.9 20.0348 14.9 20.1556V20.6903C14.9 20.8115 14.9337 20.9206 15.005 21.0116L15.0097 21.0177L15.0153 21.0229C15.0997 21.1022 15.2036 21.1417 15.3209 21.1417H16.0998V21.8736H15.3209C15.1986 21.8736 15.0931 21.922 15.0099 22.0131C14.9336 22.0967 14.9 22.2042 14.9 22.325V22.8597C14.9 22.981 14.9337 23.09 15.005 23.1811L15.0097 23.1871L15.0153 23.1924C15.0997 23.2717 15.2036 23.3111 15.3209 23.3111H16.1334C16.1946 23.9362 16.3345 24.5021 16.5545 25.0079C16.8412 25.6672 17.2773 26.1823 17.8625 26.55L17.8631 26.5503L21.7801 26.725L21.8149 26.8187C21.815 26.8187 21.8151 26.8187 21.8153 26.8186C22.3178 26.6317 22.7344 26.3861 23.0621 26.08L23.0622 26.0799C23.3964 25.7662 23.6467 25.4192 23.8108 25.0388ZM23.8108 25.0388C23.8108 25.0389 23.8107 25.0391 23.8106 25.0392L23.7192 24.9986L23.8111 25.0382C23.811 25.0384 23.8109 25.0386 23.8108 25.0388Z" fill="#0274c1" stroke="#0274c1;" stroke-width="0.2"></path>
                </svg>
          </div>
          <h4 style="font-size:22px; font-weight:600px">Loyalty Program Module</h4>
          <p style="font-size: 18px; font-weight:500px">
           Boost client retention with our customizable Loyalty Program Module! Reward traders for their activities, offer flexible payment options, and drive engagement. Designed for all brokerage sizes, this scalable module attracts new traders and maximizes profits. Elevate your platform by integrating this module to empower traders and drive profits.
          </p>
      </div>
       <div class="card" style="background-color:#5ba4d6;height: 404px;">
          <div class="card-icon">
              <svg width="40" height="40" viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M5.91926 20C5.91926 27.732 12.1873 34 19.9193 34C25.8896 34 30.9872 30.2627 33 25M5.91926 20L2.91895 24M5.91926 20L9.91895 23" stroke="#192527" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                    <path d="M33.9997 20C33.9997 12.268 27.7317 6 19.9997 6C14.0293 6 8.93179 9.73726 6.91895 15M33.9997 20L37 16M33.9997 20L30 17" stroke="#192527" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                    <mask id="path-3-outside-1_2360_837" maskUnits="userSpaceOnUse" x="13.5" y="13" width="12" height="14" fill="black">
                        <rect fill="white" x="13.5" y="13" width="12" height="14"></rect>
                        <path d="M20.1423 26C19.1813 26 18.3804 25.8056 17.7397 25.4167C17.1093 25.0278 16.6391 24.4833 16.3291 23.7833C16.0191 23.0833 15.8537 22.2722 15.8331 21.35V18.65C15.8537 17.7167 16.0191 16.9056 16.3291 16.2167C16.6495 15.5167 17.1248 14.9722 17.7552 14.5833C18.3856 14.1944 19.1813 14 20.1423 14C20.8657 14 21.4961 14.1 22.0334 14.3C22.5811 14.5 23.0306 14.7667 23.382 15.1C23.7437 15.4222 24.0124 15.7889 24.188 16.2C24.3741 16.6 24.4774 17.0056 24.4981 17.4167C24.5084 17.5167 24.4774 17.6 24.4051 17.6667C24.3431 17.7333 24.2656 17.7667 24.1725 17.7667H23.32C23.227 17.7667 23.1495 17.7389 23.0875 17.6833C23.0255 17.6278 22.9738 17.5278 22.9325 17.3833C22.7568 16.6722 22.4261 16.1667 21.9404 15.8667C21.4651 15.5667 20.8657 15.4167 20.1423 15.4167C19.2846 15.4167 18.6129 15.6778 18.1272 16.2C17.6518 16.7222 17.409 17.5667 17.3987 18.7333V21.2667C17.409 22.4333 17.6518 23.2778 18.1272 23.8C18.6129 24.3222 19.2846 24.5833 20.1423 24.5833C20.8657 24.5833 21.4651 24.4333 21.9404 24.1333C22.4261 23.8333 22.7568 23.3278 22.9325 22.6167C22.9738 22.4722 23.0255 22.3722 23.0875 22.3167C23.1495 22.2611 23.227 22.2333 23.32 22.2333H24.1725C24.2656 22.2333 24.3431 22.2667 24.4051 22.3333C24.4774 22.4 24.5084 22.4833 24.4981 22.5833C24.4774 22.9944 24.3741 23.4056 24.188 23.8167C24.0124 24.2167 23.7437 24.5833 23.382 24.9167C23.0306 25.2389 22.5811 25.5 22.0334 25.7C21.4961 25.9 20.8657 26 20.1423 26ZM14.8565 21.8667C14.7532 21.8667 14.6653 21.8333 14.593 21.7667C14.531 21.6889 14.5 21.5944 14.5 21.4833V20.9C14.5 20.7889 14.531 20.7 14.593 20.6333C14.6653 20.5556 14.7532 20.5167 14.8565 20.5167H20.4833C20.5867 20.5167 20.6693 20.5556 20.7314 20.6333C20.8037 20.7 20.8399 20.7889 20.8399 20.9V21.4833C20.8399 21.5944 20.8037 21.6889 20.7314 21.7667C20.6693 21.8333 20.5867 21.8667 20.4833 21.8667H14.8565ZM14.8565 19.5C14.7532 19.5 14.6653 19.4667 14.593 19.4C14.531 19.3222 14.5 19.2278 14.5 19.1167V18.5333C14.5 18.4222 14.531 18.3333 14.593 18.2667C14.6653 18.1889 14.7532 18.15 14.8565 18.15H20.4833C20.5867 18.15 20.6693 18.1889 20.7314 18.2667C20.8037 18.3333 20.8399 18.4222 20.8399 18.5333V19.1167C20.8399 19.2278 20.8037 19.3222 20.7314 19.4C20.6693 19.4667 20.5867 19.5 20.4833 19.5H14.8565Z"></path>
                    </mask>
                    <path d="M20.1423 26C19.1813 26 18.3804 25.8056 17.7397 25.4167C17.1093 25.0278 16.6391 24.4833 16.3291 23.7833C16.0191 23.0833 15.8537 22.2722 15.8331 21.35V18.65C15.8537 17.7167 16.0191 16.9056 16.3291 16.2167C16.6495 15.5167 17.1248 14.9722 17.7552 14.5833C18.3856 14.1944 19.1813 14 20.1423 14C20.8657 14 21.4961 14.1 22.0334 14.3C22.5811 14.5 23.0306 14.7667 23.382 15.1C23.7437 15.4222 24.0124 15.7889 24.188 16.2C24.3741 16.6 24.4774 17.0056 24.4981 17.4167C24.5084 17.5167 24.4774 17.6 24.4051 17.6667C24.3431 17.7333 24.2656 17.7667 24.1725 17.7667H23.32C23.227 17.7667 23.1495 17.7389 23.0875 17.6833C23.0255 17.6278 22.9738 17.5278 22.9325 17.3833C22.7568 16.6722 22.4261 16.1667 21.9404 15.8667C21.4651 15.5667 20.8657 15.4167 20.1423 15.4167C19.2846 15.4167 18.6129 15.6778 18.1272 16.2C17.6518 16.7222 17.409 17.5667 17.3987 18.7333V21.2667C17.409 22.4333 17.6518 23.2778 18.1272 23.8C18.6129 24.3222 19.2846 24.5833 20.1423 24.5833C20.8657 24.5833 21.4651 24.4333 21.9404 24.1333C22.4261 23.8333 22.7568 23.3278 22.9325 22.6167C22.9738 22.4722 23.0255 22.3722 23.0875 22.3167C23.1495 22.2611 23.227 22.2333 23.32 22.2333H24.1725C24.2656 22.2333 24.3431 22.2667 24.4051 22.3333C24.4774 22.4 24.5084 22.4833 24.4981 22.5833C24.4774 22.9944 24.3741 23.4056 24.188 23.8167C24.0124 24.2167 23.7437 24.5833 23.382 24.9167C23.0306 25.2389 22.5811 25.5 22.0334 25.7C21.4961 25.9 20.8657 26 20.1423 26ZM14.8565 21.8667C14.7532 21.8667 14.6653 21.8333 14.593 21.7667C14.531 21.6889 14.5 21.5944 14.5 21.4833V20.9C14.5 20.7889 14.531 20.7 14.593 20.6333C14.6653 20.5556 14.7532 20.5167 14.8565 20.5167H20.4833C20.5867 20.5167 20.6693 20.5556 20.7314 20.6333C20.8037 20.7 20.8399 20.7889 20.8399 20.9V21.4833C20.8399 21.5944 20.8037 21.6889 20.7314 21.7667C20.6693 21.8333 20.5867 21.8667 20.4833 21.8667H14.8565ZM14.8565 19.5C14.7532 19.5 14.6653 19.4667 14.593 19.4C14.531 19.3222 14.5 19.2278 14.5 19.1167V18.5333C14.5 18.4222 14.531 18.3333 14.593 18.2667C14.6653 18.1889 14.7532 18.15 14.8565 18.15H20.4833C20.5867 18.15 20.6693 18.1889 20.7314 18.2667C20.8037 18.3333 20.8399 18.4222 20.8399 18.5333V19.1167C20.8399 19.2278 20.8037 19.3222 20.7314 19.4C20.6693 19.4667 20.5867 19.5 20.4833 19.5H14.8565Z" fill="#005cbe"></path>
                    <path d="M20.1423 26C19.1813 26 18.3804 25.8056 17.7397 25.4167C17.1093 25.0278 16.6391 24.4833 16.3291 23.7833C16.0191 23.0833 15.8537 22.2722 15.8331 21.35V18.65C15.8537 17.7167 16.0191 16.9056 16.3291 16.2167C16.6495 15.5167 17.1248 14.9722 17.7552 14.5833C18.3856 14.1944 19.1813 14 20.1423 14C20.8657 14 21.4961 14.1 22.0334 14.3C22.5811 14.5 23.0306 14.7667 23.382 15.1C23.7437 15.4222 24.0124 15.7889 24.188 16.2C24.3741 16.6 24.4774 17.0056 24.4981 17.4167C24.5084 17.5167 24.4774 17.6 24.4051 17.6667C24.3431 17.7333 24.2656 17.7667 24.1725 17.7667H23.32C23.227 17.7667 23.1495 17.7389 23.0875 17.6833C23.0255 17.6278 22.9738 17.5278 22.9325 17.3833C22.7568 16.6722 22.4261 16.1667 21.9404 15.8667C21.4651 15.5667 20.8657 15.4167 20.1423 15.4167C19.2846 15.4167 18.6129 15.6778 18.1272 16.2C17.6518 16.7222 17.409 17.5667 17.3987 18.7333V21.2667C17.409 22.4333 17.6518 23.2778 18.1272 23.8C18.6129 24.3222 19.2846 24.5833 20.1423 24.5833C20.8657 24.5833 21.4651 24.4333 21.9404 24.1333C22.4261 23.8333 22.7568 23.3278 22.9325 22.6167C22.9738 22.4722 23.0255 22.3722 23.0875 22.3167C23.1495 22.2611 23.227 22.2333 23.32 22.2333H24.1725C24.2656 22.2333 24.3431 22.2667 24.4051 22.3333C24.4774 22.4 24.5084 22.4833 24.4981 22.5833C24.4774 22.9944 24.3741 23.4056 24.188 23.8167C24.0124 24.2167 23.7437 24.5833 23.382 24.9167C23.0306 25.2389 22.5811 25.5 22.0334 25.7C21.4961 25.9 20.8657 26 20.1423 26ZM14.8565 21.8667C14.7532 21.8667 14.6653 21.8333 14.593 21.7667C14.531 21.6889 14.5 21.5944 14.5 21.4833V20.9C14.5 20.7889 14.531 20.7 14.593 20.6333C14.6653 20.5556 14.7532 20.5167 14.8565 20.5167H20.4833C20.5867 20.5167 20.6693 20.5556 20.7314 20.6333C20.8037 20.7 20.8399 20.7889 20.8399 20.9V21.4833C20.8399 21.5944 20.8037 21.6889 20.7314 21.7667C20.6693 21.8333 20.5867 21.8667 20.4833 21.8667H14.8565ZM14.8565 19.5C14.7532 19.5 14.6653 19.4667 14.593 19.4C14.531 19.3222 14.5 19.2278 14.5 19.1167V18.5333C14.5 18.4222 14.531 18.3333 14.593 18.2667C14.6653 18.1889 14.7532 18.15 14.8565 18.15H20.4833C20.5867 18.15 20.6693 18.1889 20.7314 18.2667C20.8037 18.3333 20.8399 18.4222 20.8399 18.5333V19.1167C20.8399 19.2278 20.8037 19.3222 20.7314 19.4C20.6693 19.4667 20.5867 19.5 20.4833 19.5H14.8565Z" stroke="#005cbe" stroke-width="0.4" mask="url(#path-3-outside-1_2360_837)"></path>
                </svg>
          </div>
          <h4 style="font-size: 22px; font-weight:600px">Cashback Module
</h5>
          <p style="font-size: 18px; font-weight:500px">
          Drive client loyalty with customizable cashback rewards! Its automated calculations, flexible settings, and real-time tracking make it easy to integrate. Increase trading volumes and boost engagement with the Cashback Module. Give your business the competitive edge it deserves and drive growth like never before with the Cashback Module.
          </p>
      </div>
      
    </div>
  </div>
  <div class="tab-pane fade" id="tab5" role="tabpanel">
      <div class="grid-container">
        <div class="card" style="background-color: #5ba4d6;height: 404px;">
         <div class="card-icon">
             <svg width="40" height="40" viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M5 14V30C5 32.2091 6.79086 34 9 34H10M5 14V11C5 8.79086 6.79086 7 9 7H31C33.2091 7 35 8.79086 35 11V14M5 14H35M35 14V19" stroke="#192527" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                    <path d="M11 7L11 6C11 4.89543 11.8954 4 13 4C14.1046 4 15 4.89543 15 6L15 7M25 7V6C25 4.89543 25.8954 4 27 4C28.1046 4 29 4.89543 29 6V7" stroke="#192527" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                    <path d="M23 22C23 20.8954 23.8954 20 25 20C26.1046 20 27 20.8954 27 22V32C27 33.1046 26.1046 34 25 34C23.8954 34 23 33.1046 23 32V22Z" stroke="#192527" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                    <path d="M15 29C15 27.8954 15.8954 27 17 27C18.1046 27 19 27.8954 19 29V32C19 33.1046 18.1046 34 17 34C15.8954 34 15 33.1046 15 32V29Z" stroke="#192527" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                    <path d="M31 25C31 23.8954 31.8954 23 33 23C34.1046 23 35 23.8954 35 25V32C35 33.1046 34.1046 34 33 34C31.8954 34 31 33.1046 31 32V25Z" stroke="#005cbe" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                </svg>
          </div>
          <h4 style="font-size:22px; font-weight:600px">Scheduled Reports Module</h4>
          <p style="font-size: 18px; font-weight:500px">
            Revolutionize data reporting in your brokerage with our Scheduled Reports Module! Automate report generation and access insightful analytics, delivered straight to your inbox. Save time, ensure accuracy, and optimize your business operations. Upgrade now and unlock business success!
          </p>
        </div>
        <div class="card" style="background-color: #5ba4d6;height: 404px;">
          <div class="card-icon">
              <svg width="40" height="40" viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M27 13V11C27 8.79086 25.2091 7 23 7H11C8.79086 7 7 8.79086 7 11V28C7 30.2091 8.79086 32 11 32H16M12 13H22M12 18H18" stroke="#192527" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                    <path d="M24 30C25.5 29 25.5 26 25 24.4649C23.8044 23.7733 23 22.4806 23 21C23 18.7909 24.7909 17 27 17C29.2091 17 31 18.7909 31 21C31 22.4806 30.1956 23.7733 29 24.4649C28.5 26 28.5 29 30 30" stroke="#005cbe" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                    <rect x="20" y="30" width="14" height="6" rx="2" stroke="#005cbe" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></rect>
                </svg>
              </div>
                <h4 style="font-size:22px; font-weight:600px">Transaction Module</h4>
          <p style="font-size: 18px; font-weight:500px">
           Ensure compliance with the Transaction Module, designed specifically for EU-regulated companies. Key features include CySEC report generation, ECB rate use, detailed test scoring, and risk categorization. Boost compliance and streamline operations with tailored scoring logic. Transform your compliance with the Transaction Module for efficient client data management.
          </p>
        </div>
          </div>
</div>
<div class="tab-pane fade" id="tab6" role="tabpanel">
      <div class="grid-container">
        <div class="card" style="background-color: #5ba4d6;height: 404px;">
         <div class="card-icon">
            <svg width="40" height="40" viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M5 11C5 8.79086 6.79086 7 9 7H31C33.2091 7 35 8.79086 35 11V25C35 27.2091 33.2091 29 31 29H9C6.79086 29 5 27.2091 5 25V11Z" stroke="#192527" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                    <path d="M9.75663 22.5C9.69145 22.5 9.63035 22.4743 9.57332 22.4229C9.52444 22.3629 9.5 22.2986 9.5 22.23C9.5 22.1871 9.50407 22.1486 9.51222 22.1143L12.384 13.86C12.4085 13.7657 12.4573 13.6843 12.5307 13.6157C12.6121 13.5386 12.7221 13.5 12.8606 13.5H14.6692C14.8077 13.5 14.9137 13.5386 14.987 13.6157C15.0684 13.6843 15.1214 13.7657 15.1458 13.86L18.0054 22.1143C18.0217 22.1486 18.0299 22.1871 18.0299 22.23C18.0299 22.2986 18.0014 22.3629 17.9443 22.4229C17.8954 22.4743 17.8343 22.5 17.761 22.5H16.2579C16.1357 22.5 16.042 22.47 15.9768 22.41C15.9198 22.3414 15.8831 22.2814 15.8669 22.23L15.3903 20.9186H12.1274L11.663 22.23C11.6467 22.2814 11.6101 22.3414 11.553 22.41C11.496 22.47 11.3982 22.5 11.2597 22.5H9.75663ZM12.6284 19.0671H14.9014L13.7527 15.6729L12.6284 19.0671Z" fill="#005cbe"></path>
                    <path d="M19.2986 22.5C19.209 22.5 19.1357 22.47 19.0786 22.41C19.0216 22.35 18.9931 22.2729 18.9931 22.1786V13.8214C18.9931 13.7271 19.0216 13.65 19.0786 13.59C19.1357 13.53 19.209 13.5 19.2986 13.5H22.7203C23.3965 13.5 23.9831 13.6114 24.4801 13.8343C24.9852 14.0486 25.3762 14.3743 25.6532 14.8114C25.9384 15.2486 26.0809 15.8014 26.0809 16.47C26.0809 17.13 25.9384 17.6743 25.6532 18.1029C25.3762 18.5314 24.9852 18.8486 24.4801 19.0543C23.9831 19.26 23.3965 19.3629 22.7203 19.3629H21.2661V22.1786C21.2661 22.2729 21.2335 22.35 21.1683 22.41C21.1113 22.47 21.038 22.5 20.9484 22.5H19.2986ZM21.2294 17.5886H22.6592C23.0095 17.5886 23.2865 17.4943 23.4902 17.3057C23.702 17.1171 23.8079 16.83 23.8079 16.4443C23.8079 16.1186 23.7183 15.8443 23.5391 15.6214C23.3599 15.3986 23.0666 15.2871 22.6592 15.2871H21.2294V17.5886Z" fill="#005cbe"></path>
                    <path d="M27.5569 22.5C27.4673 22.5 27.394 22.47 27.337 22.41C27.28 22.35 27.2514 22.2729 27.2514 22.1786V13.8214C27.2514 13.7271 27.28 13.65 27.337 13.59C27.394 13.53 27.4673 13.5 27.5569 13.5H29.1945C29.2841 13.5 29.3574 13.53 29.4145 13.59C29.4715 13.65 29.5 13.7271 29.5 13.8214V22.1786C29.5 22.2729 29.4715 22.35 29.4145 22.41C29.3574 22.47 29.2841 22.5 29.1945 22.5H27.5569Z" fill="#005cbe"></path>
                    <path d="M14 33H26" stroke="#192527" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                </svg>
          </div>
          <h4 style="font-size:22px; font-weight:600px">Client Management</h4>
          <p style="font-size: 18px; font-weight:500px">
Unlock the full potential of your client area with our Cabinet/Client Management! Seamlessly integrate and customize the UI/UX to boost user satisfaction and amplify your brand identity. Enhance user experiences, ensure brand consistency, and scale effortlessly with our secure and customizable Client Management. Choose the best solution for optimized client areas today!          </p>
        </div>
        <div class="card" style="background-color: #5ba4d6;height: 404px;">
          <div class="card-icon">
              <svg width="40" height="40" viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M20.366 4H19.634C18.7517 4 17.9055 4.33714 17.2816 4.93726C16.6577 5.53737 16.3072 6.35131 16.3072 7.2V7.488C16.3066 8.04916 16.1526 8.6003 15.8607 9.08614C15.5687 9.57198 15.149 9.97542 14.6438 10.256L13.9285 10.656C13.4228 10.9369 12.8491 11.0847 12.2651 11.0847C11.6811 11.0847 11.1074 10.9369 10.6017 10.656L10.3522 10.528C9.58878 10.1044 8.68184 9.98951 7.83044 10.2085C6.97905 10.4275 6.25277 10.9625 5.81105 11.696L5.4451 12.304C5.00473 13.0383 4.88526 13.9107 5.11293 14.7296C5.34059 15.5485 5.89677 16.2471 6.65939 16.672L6.9089 16.832C7.41172 17.1112 7.8298 17.5121 8.12162 17.9949C8.41344 18.4777 8.56882 19.0256 8.57232 19.584V20.4C8.57465 20.9639 8.42203 21.5183 8.12993 22.0072C7.83782 22.4961 7.41659 22.9021 6.9089 23.184L6.65939 23.328C5.89677 23.7529 5.34059 24.4515 5.11293 25.2704C4.88526 26.0893 5.00473 26.9617 5.4451 27.696L5.81105 28.304C6.25277 29.0375 6.97905 29.5725 7.83044 29.7915C8.68184 30.0105 9.58878 29.8956 10.3522 29.472L10.6017 29.344C11.1074 29.0631 11.6811 28.9153 12.2651 28.9153C12.8491 28.9153 13.4228 29.0631 13.9285 29.344L14.6438 29.744C15.149 30.0246 15.5687 30.428 15.8607 30.9139C16.1526 31.3997 16.3066 31.9508 16.3072 32.512V32.8C16.3072 33.6487 16.6577 34.4626 17.2816 35.0627C17.9055 35.6629 18.7517 36 19.634 36H20.366C21.2483 36 22.0945 35.6629 22.7184 35.0627C23.3423 34.4626 23.6928 33.6487 23.6928 32.8V32.512C23.6934 31.9508 23.8474 31.3997 24.1394 30.9139C24.4313 30.428 24.851 30.0246 25.3562 29.744L26.0715 29.344C26.5772 29.0631 27.1509 28.9153 27.7349 28.9153C28.3189 28.9153 28.8926 29.0631 29.3983 29.344L29.6478 29.472C30.4112 29.8956 31.3182 30.0105 32.1696 29.7915C33.021 29.5725 33.7472 29.0375 34.189 28.304L34.5549 27.68C34.9953 26.9457 35.1147 26.0733 34.8871 25.2544C34.6594 24.4355 34.1032 23.7369 33.3406 23.312L33.0911 23.184C32.5834 22.9021 32.1622 22.4961 31.8701 22.0072C31.578 21.5183 31.4254 20.9639 31.4277 20.4V19.6C31.4254 19.0361 31.578 18.4817 31.8701 17.9928C32.1622 17.5039 32.5834 17.0979 33.0911 16.816L33.3406 16.672C34.1032 16.2471 34.6594 15.5485 34.8871 14.7296C35.1147 13.9107 34.9953 13.0383 34.5549 12.304L34.189 11.696C33.7472 10.9625 33.021 10.4275 32.1696 10.2085C31.3182 9.98951 30.4112 10.1044 29.6478 10.528L29.3983 10.656C28.8926 10.9369 28.3189 11.0847 27.7349 11.0847C27.1509 11.0847 26.5772 10.9369 26.0715 10.656L25.3562 10.256C24.851 9.97542 24.4313 9.57198 24.1394 9.08614C23.8474 8.6003 23.6934 8.04916 23.6928 7.488V7.2C23.6928 6.35131 23.3423 5.53737 22.7184 4.93726C22.0945 4.33714 21.2483 4 20.366 4Z" stroke="#192527" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                    <path d="M11.2181 23C11.1627 23 11.1108 22.98 11.0623 22.94C11.0208 22.8933 11 22.8433 11 22.79C11 22.7567 11.0035 22.7267 11.0104 22.7L13.4514 16.28C13.4722 16.2067 13.5137 16.1433 13.5761 16.09C13.6453 16.03 13.7388 16 13.8565 16H15.3939C15.5116 16 15.6016 16.03 15.6639 16.09C15.7332 16.1433 15.7782 16.2067 15.799 16.28L18.2296 22.7C18.2435 22.7267 18.2504 22.7567 18.2504 22.79C18.2504 22.8433 18.2262 22.8933 18.1777 22.94C18.1361 22.98 18.0842 23 18.0219 23H16.7442C16.6403 23 16.5607 22.9767 16.5053 22.93C16.4568 22.8767 16.4257 22.83 16.4118 22.79L16.0067 21.77H13.2333L12.8386 22.79C12.8247 22.83 12.7936 22.8767 12.7451 22.93C12.6966 22.9767 12.6135 23 12.4958 23H11.2181ZM13.6592 20.33H15.5912L14.6148 17.69L13.6592 20.33Z" fill="#005cbe"></path>
                    <path d="M19.3288 23C19.2526 23 19.1903 22.9767 19.1418 22.93C19.0934 22.8833 19.0691 22.8233 19.0691 22.75V16.25C19.0691 16.1767 19.0934 16.1167 19.1418 16.07C19.1903 16.0233 19.2526 16 19.3288 16H22.2373C22.812 16 23.3106 16.0867 23.7331 16.26C24.1624 16.4267 24.4948 16.68 24.7302 17.02C24.9726 17.36 25.0938 17.79 25.0938 18.31C25.0938 18.8233 24.9726 19.2467 24.7302 19.58C24.4948 19.9133 24.1624 20.16 23.7331 20.32C23.3106 20.48 22.812 20.56 22.2373 20.56H21.0012V22.75C21.0012 22.8233 20.9735 22.8833 20.9181 22.93C20.8696 22.9767 20.8073 23 20.7311 23H19.3288ZM20.97 19.18H22.1853C22.4831 19.18 22.7186 19.1067 22.8917 18.96C23.0717 18.8133 23.1618 18.59 23.1618 18.29C23.1618 18.0367 23.0856 17.8233 22.9332 17.65C22.7809 17.4767 22.5316 17.39 22.1853 17.39H20.97V19.18Z" fill="#005cbe"></path>
                    <path d="M26.3484 23C26.2722 23 26.2099 22.9767 26.1614 22.93C26.113 22.8833 26.0887 22.8233 26.0887 22.75V16.25C26.0887 16.1767 26.113 16.1167 26.1614 16.07C26.2099 16.0233 26.2722 16 26.3484 16H27.7403C27.8165 16 27.8788 16.0233 27.9273 16.07C27.9758 16.1167 28 16.1767 28 16.25V22.75C28 22.8233 27.9758 22.8833 27.9273 22.93C27.8788 22.9767 27.8165 23 27.7403 23H26.3484Z" fill="#005cbe"></path>
                </svg>
              </div>
                <h4 style="font-size:22px; font-weight:600px">KYC Module</h5>
          <p style="font-size: 18px; font-weight:500px">
Experience unmatched efficiency and control with our KYC Module for CRM management. Key features include customizable user onboarding, precise transaction management, comprehensive user operations, and seamless integration with existing systems. Benefits encompass enhanced flexibility, improved efficiency, robust security, and scalability.          </p>
        </div>
        </div>
      </div>
     <!--  <div class="tab-pane fade" id="tab7" role="tabpanel"> -->
     <!--  <div class="grid-container">
        <div class="card" style="background-color: #5ba4d6">
         <div class="card-icon">
            <svg width="40" height="40" viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M23.5008 21.5784C21.7095 19.9751 19.344 19.0002 16.7508 19.0002C11.9259 19.0002 7.88934 22.375 6.87269 26.8928C6.59988 28.1051 7.63312 29.1252 8.87577 29.1252H16.25M22.3758 12.2502C22.3758 15.3568 19.8574 17.8752 16.7508 17.8752C13.6442 17.8752 11.1258 15.3568 11.1258 12.2502C11.1258 9.14364 13.6442 6.62524 16.7508 6.62524C19.8574 6.62524 22.3758 9.14364 22.3758 12.2502Z" stroke="#192527" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                    <g clip-path="url(#clip0_8020_14364)">
                        <path d="M29.0005 35.6877V22.5627" stroke="#005cbe" stroke-width="2" stroke-linecap="round"></path>
                        <path d="M35.563 29.1252H22.438" stroke="#005cbe" stroke-width="2" stroke-linecap="round"></path>
                    </g>
                    <defs>
                        <clipPath id="clip0_8020_14364">
                            <rect width="15.75" height="15.75" fill="white" transform="translate(21.1255 21.25)"></rect>
                        </clipPath>
                    </defs>
                </svg>
          </div>
          <h5>Additional Managers</h5>
          <p>
            Effortlessly expand your CRM’s user base with the Additional Managers feature. Increase collaboration, distribute workloads, and scale your team seamlessly. Simplify team management and enhance productivity with this flexible solution. Boost CRM efficiency by adding more managers easily.
          </p>
        </div>
        <div class="card" style="background-color: #5ba4d6">
          <div class="card-icon">
             <svg width="40" height="40" viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M19.5 36H34.5M19.5 36V27C19.5 25.8954 20.3954 25 21.5 25H32.5C33.6046 25 34.5 25.8954 34.5 27V36M19.5 36H17M34.5 36H37" stroke="#005cbe" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                    <path fill-rule="evenodd" clip-rule="evenodd" d="M25.3887 30.4998C25.3887 29.61 26.11 28.8887 26.9998 28.8887C27.8896 28.8887 28.611 29.61 28.611 30.4998C28.611 31.3896 27.8897 32.1109 26.9999 32.1109C26.1101 32.1109 25.3887 31.3896 25.3887 30.4998Z" fill="#005cbe"></path>
                    <path d="M29 18L5 18" stroke="#192527" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                    <path d="M21.8429 20.5C21.9738 19.7149 22.0472 18.9247 22.0576 18.1391C21.9599 13.638 20.1625 9.32411 16.9997 6C13.8368 9.32411 12.0394 13.638 11.9417 18.1391C11.9753 20.651 12.6531 23.209 13.7951 25.5" stroke="#192527" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                    <path d="M28.7392 20.5C28.9101 19.6936 29 18.8573 29 18C29 11.3726 23.6274 6 17 6C10.3726 6 5 11.3726 5 18C5 23.5915 8.82432 28.2898 14 29.6219" stroke="#192527" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                </svg>
              </div>
                <h5>Additional MT Live Server</h5>
          <p>
          Expand your brokerage’s capacity with the Additional MT Live Server! Increase server capabilities, reduce trade execution times, and improve user experience. Adapt to market demands with a scalable solution designed for forex brokers, fully compatible with  MT5. Get more from your brokerage with servers backed by top-tier technology and support!
          </p>
        </div>
      </div>
    </div> -->
    <div class="tab-pane fade" id="tab8" role="tabpanel">
      <div class="grid-container">
        <div class="card" style="background-color: #5ba4d6;height: 404px;">
         <div class="card-icon">
             <svg width="40" height="40" viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M28 12V14M28 20.9999V19" stroke="#192527" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                    <path d="M12 12V14M12 22.9999V21" stroke="#192527" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                    <path d="M20 14V16M20 26.9999V25" stroke="#192527" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                    <path d="M10 16C10 14.8954 10.8954 14 12 14C13.1046 14 14 14.8954 14 16V19C14 20.1046 13.1046 21 12 21C10.8954 21 10 20.1046 10 19V16Z" stroke="#005cbe" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                    <path d="M26 16C26 14.8954 26.8954 14 28 14C29.1046 14 30 14.8954 30 16V17C30 18.1046 29.1046 19 28 19C26.8954 19 26 18.1046 26 17V16Z" stroke="#005cbe" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                    <path d="M18 18C18 16.8954 18.8954 16 20 16C21.1046 16 22 16.8954 22 18V23C22 24.1046 21.1046 25 20 25C18.8954 25 18 24.1046 18 23V18Z" stroke="#005cbe" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                    <path d="M4 11C4 8.79087 5.79086 7 8 7H32C34.2091 7 36 8.79086 36 11V25.8571C36 28.0663 34.2091 29.8571 32 29.8571H25.0205C24.7349 29.8571 24.4629 29.9793 24.2731 30.1928L20.7474 34.1592C20.3496 34.6067 19.6504 34.6067 19.2526 34.1592L15.7269 30.1928C15.5371 29.9793 15.2651 29.8571 14.9795 29.8571H8C5.79086 29.8571 4 28.0663 4 25.8571V11Z" stroke="#192527" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                </svg>
          </div>
          <h4 style="font-size:22px; font-weight:600px">Brokeree Social Trading</h4>
          <p style="font-size: 18px; font-weight:500px">
           Launch social trading with ease using Brokeree Social Trading! Leverage a turnkey technology and mobile app to enable brokers to introduce copy trading on their servers. Support for 14+ languages and cross-server capabilities ensure clients are united worldwide in one investment pool.
          </p>
        </div>
        <div class="card" style="background-color: #5ba4d6;height: 404px;">
          <div class="card-icon">
              <svg width="40" height="40" viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M17 18C18.5913 18 20.1174 17.3679 21.2426 16.2426C22.3679 15.1174 23 13.5913 23 12C23 10.4087 22.3679 8.88258 21.2426 7.75736C20.1174 6.63214 18.5913 6 17 6C15.4087 6 13.8826 6.63214 12.7574 7.75736C11.6321 8.88258 11 10.4087 11 12C11 13.5913 11.6321 15.1174 12.7574 16.2426C13.8826 17.3679 15.4087 18 17 18Z" stroke="#192527" stroke-width="2" stroke-linejoin="round"></path>
                    <path d="M11.5 35H9C7.89543 35 7 34.1046 7 33V29.5C7 23.701 11.701 19 17.5 19C19.1017 19 20.6197 19.3586 21.9779 20" stroke="#192527" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                    <path d="M18.5 35H33.5M18.5 35V26C18.5 24.8954 19.3954 24 20.5 24H31.5C32.6046 24 33.5 24.8954 33.5 26V35M18.5 35H16M33.5 35H36" stroke="#005cbe" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                    <path fill-rule="evenodd" clip-rule="evenodd" d="M24.3887 29.4998C24.3887 28.61 25.11 27.8887 25.9998 27.8887C26.8896 27.8887 27.611 28.61 27.611 29.4998C27.611 30.3896 26.8897 31.1109 25.9999 31.1109C25.1101 31.1109 24.3887 30.3896 24.3887 29.4998Z" fill="#005cbe"></path>
                </svg>
              </div>
                <h4 style="font-size: 22px; font-weight:600px">Brokeree PAMM</h5>
          <p style="font-size: 18px; font-weight:500px">
         Introduce money management services with Brokeree PAMM! Provide clients with new investment options through shared accounts managed by expert traders. Offer traders the chance to invest in successful accounts or manage PAMM accounts themselves. Empower your clients with diverse trading opportunities now!
          </p>

<!-- Bootstrap JS (needed for tab functionality) -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>







</main>
</ul>
</li>
</ul>
</div>
</div>
</nav>
</div>
</header>
</body><br><br>

  </div>
</div>
<style >
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
                                    
                                }
                              
</style>


                            

<style>
      .swiper-pagination-bullet {
        border: 1px solid #1da1f2;
      }

      .swiper-pagination-bullet-active {
        background: #1da1f2;
      }

      img:not([draggable]),
      embed,
      object,
      video {
        max-width: 100%;
        height: auto;
      }

      .swiper-container {
        margin-left: auto;
        margin-right: auto;
        position: relative;
        overflow: hidden;
        z-index: 1;
      }

      .swiper-container-no-flexbox .swiper-slide {
        float: left;
      }

      .swiper-container-vertical>.swiper-wrapper {
        -webkit-box-orient: vertical;
        -ms-flex-direction: column;
        flex-direction: column;
      }

      .swiper-wrapper {
        position: relative;
        width: 100%;
        height: 100%;
        z-index: 1;
        display: -webkit-box;
        display: -ms-flexbox;
        display: flex;
        -webkit-transition-property: -webkit-transform;
        transition-property: -webkit-transform;
        transition-property: transform;
        transition-property: transform, -webkit-transform;
        box-sizing: content-box;
      }

      .swiper-container-android .swiper-slide,
      .swiper-wrapper {
        -webkit-transform: translate3d(0, 0, 0);
        transform: translate3d(0, 0, 0);
      }

      .swiper-container-multirow>.swiper-wrapper {
        -webkit-box-lines: multiple;
        -moz-box-lines: multiple;
        -ms-flex-wrap: wrap;
        flex-wrap: wrap;
      }

      .swiper-container-free-mode>.swiper-wrapper {
        -webkit-transition-timing-function: ease-out;
        transition-timing-function: ease-out;
        margin: 0 auto;
      }

      .swiper-slide {
        -webkit-flex-shrink: 0;
        -ms-flex: 0 0 auto;
        -ms-flex-negative: 0;
        flex-shrink: 0;
        width: 100%;
        height: 100%;
        position: relative;
      }

      .swiper-container-autoheight,
      .swiper-container-autoheight .swiper-slide {
        height: auto;
      }

      .swiper-container-autoheight .swiper-wrapper {
        -webkit-box-align: start;
        -ms-flex-align: start;
        align-items: flex-start;
        -webkit-transition-property: -webkit-transform, height;
        -webkit-transition-property: height, -webkit-transform;
        transition-property: height, -webkit-transform;
        transition-property: transform, height;
        transition-property: transform, height, -webkit-transform;
      }

      .swiper-container .swiper-notification {
        position: absolute;
        left: 0;
        top: 0;
        pointer-events: none;
        opacity: 0;
        z-index: -1000;
      }

      .swiper-wp8-horizontal {
        -ms-touch-action: pan-y;
        touch-action: pan-y;
      }

      .swiper-wp8-vertical {
        -ms-touch-action: pan-x;
        touch-action: pan-x;
      }

      .swiper-button-next,
      .swiper-button-prev {
        position: absolute;
        top: 50%;
        width: 27px;
        height: 44px;
        margin-top: -22px;
        z-index: 10;
        cursor: pointer;
        background-size: 27px 44px;
        background-position: center;
        background-repeat: no-repeat;
      }

      .swiper-button-next.swiper-button-disabled,
      .swiper-button-prev.swiper-button-disabled {
        opacity: 0.35;
        cursor: auto;
        pointer-events: none;
      }

      .swiper-button-prev,
      .swiper-container-rtl .swiper-button-next {
        background-image: url("data:image/svg+xml;charset=utf-8,%3Csvg%20xmlns%3D'http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg'%20viewBox%3D'0%200%2027%2044'%3E%3Cpath%20d%3D'M0%2C22L22%2C0l2.1%2C2.1L4.2%2C22l19.9%2C19.9L22%2C44L0%2C22L0%2C22L0%2C22z'%20fill%3D'%23007aff'%2F%3E%3C%2Fsvg%3E");
        left: 10px;
        right: auto;
      }

      .swiper-button-prev.swiper-button-black,
      .swiper-container-rtl .swiper-button-next.swiper-button-black {
        background-image: url("data:image/svg+xml;charset=utf-8,%3Csvg%20xmlns%3D'http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg'%20viewBox%3D'0%200%2027%2044'%3E%3Cpath%20d%3D'M0%2C22L22%2C0l2.1%2C2.1L4.2%2C22l19.9%2C19.9L22%2C44L0%2C22L0%2C22L0%2C22z'%20fill%3D'%23000000'%2F%3E%3C%2Fsvg%3E");
      }

      .swiper-button-prev.swiper-button-white,
      .swiper-container-rtl .swiper-button-next.swiper-button-white {
        background-image: url("data:image/svg+xml;charset=utf-8,%3Csvg%20xmlns%3D'http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg'%20viewBox%3D'0%200%2027%2044'%3E%3Cpath%20d%3D'M0%2C22L22%2C0l2.1%2C2.1L4.2%2C22l19.9%2C19.9L22%2C44L0%2C22L0%2C22L0%2C22z'%20fill%3D'%23ffffff'%2F%3E%3C%2Fsvg%3E");
      }

      .swiper-button-next,
      .swiper-container-rtl .swiper-button-prev {
        background-image: url("data:image/svg+xml;charset=utf-8,%3Csvg%20xmlns%3D'http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg'%20viewBox%3D'0%200%2027%2044'%3E%3Cpath%20d%3D'M27%2C22L27%2C22L5%2C44l-2.1-2.1L22.8%2C22L2.9%2C2.1L5%2C0L27%2C22L27%2C22z'%20fill%3D'%23007aff'%2F%3E%3C%2Fsvg%3E");
        right: 10px;
        left: auto;
      }

      .swiper-button-next.swiper-button-black,
      .swiper-container-rtl .swiper-button-prev.swiper-button-black {
        background-image: url("data:image/svg+xml;charset=utf-8,%3Csvg%20xmlns%3D'http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg'%20viewBox%3D'0%200%2027%2044'%3E%3Cpath%20d%3D'M27%2C22L27%2C22L5%2C44l-2.1-2.1L22.8%2C22L2.9%2C2.1L5%2C0L27%2C22L27%2C22z'%20fill%3D'%23000000'%2F%3E%3C%2Fsvg%3E");
      }

      .swiper-button-next.swiper-button-white,
      .swiper-container-rtl .swiper-button-prev.swiper-button-white {
        background-image: url("data:image/svg+xml;charset=utf-8,%3Csvg%20xmlns%3D'http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg'%20viewBox%3D'0%200%2027%2044'%3E%3Cpath%20d%3D'M27%2C22L27%2C22L5%2C44l-2.1-2.1L22.8%2C22L2.9%2C2.1L5%2C0L27%2C22L27%2C22z'%20fill%3D'%23ffffff'%2F%3E%3C%2Fsvg%3E");
      }

      .swiper-pagination {
        position: absolute;
        text-align: center;
        -webkit-transition: 0.3s;
        transition: 0.3s;
        -webkit-transform: translate3d(0, 0, 0);
        transform: translate3d(0, 0, 0);
        z-index: 10;
      }

      .swiper-pagination.swiper-pagination-hidden {
        opacity: 0;
      }

      .swiper-container-horizontal>.swiper-pagination-bullets,
      .swiper-pagination-custom,
      .swiper-pagination-fraction {
        bottom: 10px;
        left: 0;
        width: 100%;
      }

      .swiper-pagination-bullet {
        width: 8px;
        height: 8px;
        display: inline-block;
        border-radius: 100%;
        background: #000;
        opacity: 0.2;
      }

      button.swiper-pagination-bullet {
        border: none;
        margin: 0;
        padding: 0;
        box-shadow: none;
        -moz-appearance: none;
        -ms-appearance: none;
        -webkit-appearance: none;
        appearance: none;
      }

      .swiper-pagination-clickable .swiper-pagination-bullet {
        cursor: pointer;
      }

      .swiper-pagination-white .swiper-pagination-bullet {
        background: #fff;
      }

      .swiper-pagination-bullet-active {
        opacity: 1;
        background: #007aff;
      }

      .swiper-pagination-white .swiper-pagination-bullet-active {
        background: #fff;
      }

      .swiper-pagination-black .swiper-pagination-bullet-active {
        background: #000;
      }

      .swiper-container-vertical>.swiper-pagination-bullets {
        right: 10px;
        top: 50%;
        -webkit-transform: translate3d(0, -50%, 0);
        transform: translate3d(0, -50%, 0);
      }

      .swiper-container-vertical>.swiper-pagination-bullets .swiper-pagination-bullet {
        margin: 5px 0;
        display: block;
      }

      .swiper-container-horizontal>.swiper-pagination-bullets .swiper-pagination-bullet {
        margin: 0 5px;
      }

      .swiper-pagination-progress {
        background: rgba(0, 0, 0, 0.25);
        position: absolute;
      }

      .swiper-pagination-progress .swiper-pagination-progressbar {
        background: #007aff;
        position: absolute;
        left: 0;
        top: 0;
        width: 100%;
        height: 100%;
        -webkit-transform: scale(0);
        transform: scale(0);
        -webkit-transform-origin: left top;
        transform-origin: left top;
      }

      .swiper-container-rtl .swiper-pagination-progress .swiper-pagination-progressbar {
        -webkit-transform-origin: right top;
        transform-origin: right top;
      }

      .swiper-container-horizontal>.swiper-pagination-progress {
        width: 100%;
        height: 4px;
        left: 0;
        top: 0;
      }

      .swiper-container-vertical>.swiper-pagination-progress {
        width: 4px;
        height: 100%;
        left: 0;
        top: 0;
      }

      .swiper-pagination-progress.swiper-pagination-white {
        background: rgba(255, 255, 255, 0.5);
      }

      .swiper-pagination-progress.swiper-pagination-white .swiper-pagination-progressbar {
        background: #fff;
      }

      .swiper-pagination-progress.swiper-pagination-black .swiper-pagination-progressbar {
        background: #000;
      }

      .swiper-container-3d {
        -webkit-perspective: 1200px;
        -o-perspective: 1200px;
        perspective: 1200px;
      }

      .swiper-container-3d .swiper-cube-shadow,
      .swiper-container-3d .swiper-slide,
      .swiper-container-3d .swiper-slide-shadow-bottom,
      .swiper-container-3d .swiper-slide-shadow-left,
      .swiper-container-3d .swiper-slide-shadow-right,
      .swiper-container-3d .swiper-slide-shadow-top,
      .swiper-container-3d .swiper-wrapper {
        -webkit-transform-style: preserve-3d;
        transform-style: preserve-3d;
      }

      .swiper-container-3d .swiper-slide-shadow-bottom,
      .swiper-container-3d .swiper-slide-shadow-left,
      .swiper-container-3d .swiper-slide-shadow-right,
      .swiper-container-3d .swiper-slide-shadow-top {
        position: absolute;
        left: 0;
        top: 0;
        width: 100%;
        height: 100%;
        pointer-events: none;
        z-index: 10;
      }

      .swiper-container-3d .swiper-slide-shadow-left {
        background-image: -webkit-gradient(linear,
            left top,
            right top,
            from(rgba(0, 0, 0, 0.5)),
            to(rgba(0, 0, 0, 0)));
        background-image: -webkit-linear-gradient(right,
            rgba(0, 0, 0, 0.5),
            rgba(0, 0, 0, 0));
        background-image: linear-gradient(to left,
            rgba(0, 0, 0, 0.5),
            rgba(0, 0, 0, 0));
      }

      .swiper-container-3d .swiper-slide-shadow-right {
        background-image: -webkit-gradient(linear,
            right top,
            left top,
            from(rgba(0, 0, 0, 0.5)),
            to(rgba(0, 0, 0, 0)));
        background-image: -webkit-linear-gradient(left,
            rgba(0, 0, 0, 0.5),
            rgba(0, 0, 0, 0));
        background-image: linear-gradient(to right,
            rgba(0, 0, 0, 0.5),
            rgba(0, 0, 0, 0));
      }

      .swiper-container-3d .swiper-slide-shadow-top {
        background-image: -webkit-gradient(linear,
            left top,
            left bottom,
            from(rgba(0, 0, 0, 0.5)),
            to(rgba(0, 0, 0, 0)));
        background-image: -webkit-linear-gradient(bottom,
            rgba(0, 0, 0, 0.5),
            rgba(0, 0, 0, 0));
        background-image: linear-gradient(to top,
            rgba(0, 0, 0, 0.5),
            rgba(0, 0, 0, 0));
      }

      .swiper-container-3d .swiper-slide-shadow-bottom {
        background-image: -webkit-gradient(linear,
            left bottom,
            left top,
            from(rgba(0, 0, 0, 0.5)),
            to(rgba(0, 0, 0, 0)));
        background-image: -webkit-linear-gradient(top,
            rgba(0, 0, 0, 0.5),
            rgba(0, 0, 0, 0));
        background-image: linear-gradient(to bottom,
            rgba(0, 0, 0, 0.5),
            rgba(0, 0, 0, 0));
      }

      .swiper-container-coverflow .swiper-wrapper,
      .swiper-container-flip .swiper-wrapper {
        -ms-perspective: 1200px;
      }

      .swiper-container-cube,
      .swiper-container-flip {
        overflow: visible;
      }

      .swiper-container-cube .swiper-slide,
      .swiper-container-flip .swiper-slide {
        pointer-events: none;
        -webkit-backface-visibility: hidden;
        backface-visibility: hidden;
        z-index: 1;
      }

      .swiper-container-cube .swiper-slide .swiper-slide,
      .swiper-container-flip .swiper-slide .swiper-slide {
        pointer-events: none;
      }

      .swiper-container-cube .swiper-slide-active,
      .swiper-container-cube .swiper-slide-active .swiper-slide-active,
      .swiper-container-flip .swiper-slide-active,
      .swiper-container-flip .swiper-slide-active .swiper-slide-active {
        pointer-events: auto;
      }

      .swiper-container-cube .swiper-slide-shadow-bottom,
      .swiper-container-cube .swiper-slide-shadow-left,
      .swiper-container-cube .swiper-slide-shadow-right,
      .swiper-container-cube .swiper-slide-shadow-top,
      .swiper-container-flip .swiper-slide-shadow-bottom,
      .swiper-container-flip .swiper-slide-shadow-left,
      .swiper-container-flip .swiper-slide-shadow-right,
      .swiper-container-flip .swiper-slide-shadow-top {
        z-index: 0;
        -webkit-backface-visibility: hidden;
        backface-visibility: hidden;
      }

      .swiper-container-cube .swiper-slide {
        visibility: hidden;
        -webkit-transform-origin: 0 0;
        transform-origin: 0 0;
        width: 100%;
        height: 100%;
      }

      .swiper-container-cube.swiper-container-rtl .swiper-slide {
        -webkit-transform-origin: 100% 0;
        transform-origin: 100% 0;
      }

      .swiper-container-cube .swiper-slide-active,
      .swiper-container-cube .swiper-slide-next,
      .swiper-container-cube .swiper-slide-next+.swiper-slide,
      .swiper-container-cube .swiper-slide-prev {
        pointer-events: auto;
        visibility: visible;
      }

      .swiper-container-cube .swiper-cube-shadow {
        position: absolute;
        left: 0;
        bottom: 0;
        width: 100%;
        height: 100%;
        background: #000;
        opacity: 0.6;
        -webkit-filter: blur(50px);
        filter: blur(50px);
        z-index: 0;
      }

      .swiper-container-fade.swiper-container-free-mode .swiper-slide {
        -webkit-transition-timing-function: ease-out;
        transition-timing-function: ease-out;
      }

      .swiper-container-fade .swiper-slide {
        pointer-events: none;
        -webkit-transition-property: opacity;
        transition-property: opacity;
      }

      .swiper-container-fade .swiper-slide .swiper-slide {
        pointer-events: none;
      }

      .swiper-container-fade .swiper-slide-active,
      .swiper-container-fade .swiper-slide-active .swiper-slide-active {
        pointer-events: auto;
      }

      .swiper-zoom-container {
        width: 100%;
        height: 100%;
        display: -webkit-box;
        display: -ms-flexbox;
        display: flex;
        -webkit-box-pack: center;
        -ms-flex-pack: center;
        justify-content: center;
        -webkit-box-align: center;
        -ms-flex-align: center;
        align-items: center;
        text-align: center;
      }

      .swiper-zoom-container>canvas,
      .swiper-zoom-container>img,
      .swiper-zoom-container>svg {
        max-width: 100%;
        max-height: 100%;
        -o-object-fit: contain;
        object-fit: contain;
      }

      .swiper-scrollbar {
        border-radius: 10px;
        position: relative;
        -ms-touch-action: none;
        background: rgba(0, 0, 0, 0.1);
      }

      .swiper-container-horizontal>.swiper-scrollbar {
        position: absolute;
        left: 1%;
        bottom: 3px;
        z-index: 50;
        height: 5px;
        width: 98%;
      }

      .swiper-container-vertical>.swiper-scrollbar {
        position: absolute;
        right: 3px;
        top: 1%;
        z-index: 50;
        width: 5px;
        height: 98%;
      }

      .swiper-scrollbar-drag {
        height: 100%;
        width: 100%;
        position: relative;
        background: rgba(0, 0, 0, 0.5);
        border-radius: 10px;
        left: 0;
        top: 0;
      }

      .swiper-scrollbar-cursor-drag {
        cursor: move;
      }

      .swiper-lazy-preloader {
        width: 42px;
        height: 42px;
        position: absolute;
        left: 50%;
        top: 50%;
        margin-left: -21px;
        margin-top: -21px;
        z-index: 10;
        -webkit-transform-origin: 50%;
        transform-origin: 50%;
        -webkit-animation: swiper-preloader-spin 1s steps(12, end) infinite;
        animation: swiper-preloader-spin 1s steps(12, end) infinite;
      }


 <style>
    .tab-content .card {
      border-radius: 12px;
      padding: 20px;
      margin: 15px 0;
      box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
      height: 290px;
    }

    .tab-content .card .btn-custom {
      border: 1px solid #000;
      border-radius: 20px;
      padding: 8px 20px;
      background-color: transparent;
      font-weight: bold;
      text-decoration: none;
      color: #000;
      transition: background-color 0.3s;
    }

    .tab-content .card .btn-custom:hover {
      background-color: #000;
      color: #fff;
    }

    .grid-container {
      display: grid;
      grid-template-columns: repeat(2, 1fr); /* Two columns */
      gap: 20px; /* Spacing between grid items */
    }

    .card {
      padding: 20px;
      border-radius: 10px;
      box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    }

    .btn-custom {
      display: inline-block;
      padding: 10px 20px;
      background-color: #007bff;
      color: #fff;
      text-decoration: none;
      border-radius: 5px;
    }

    /* Responsive for smaller screens */
    @media (max-width: 768px) {
      .grid-container {
        grid-template-columns: 1fr; /* Single column for smaller screens */
      }
    }
  </style>
  <style>
     .card-custom {
      border-radius: 12px;
      padding: 20px;
    }
    .card-icon {
      width: 50px;
      height: 50px;
      background-color: white;
      border-radius: 50%;
      display: flex;
      align-items: center;
      justify-content: center;
      margin-bottom: 15px;
    }
    .btn-custom {
      border: 1px solid black;
      border-radius: 20px;
      padding: 5px 15px;
      color: black;
      text-decoration: none;
    }
    .btn-custom:hover {
      background-color: black;
      color: white;

    }
    .text-content h1 {
            font-size: 3rem;
            color: #000;
            font-weight: bold;
            margin-bottom: 15px;
        }
        .text-content {
        flex: 1;
        max-width: 50%;
        padding-right: 20px;
    }

    .image-content {
        flex: 1;
        max-width: 50%;
    }

    .image-content img {
        width: 68%;
        height: auto;
        border-radius: 10px;
            margin-right: -351px;
    }

    /* Responsive Design */
/*    @media (max-width: 992px) {
        .container {
            flex-direction: column; /* Stack elements vertically */
            text-align: center;
        }*/
        
        .text-content,
        .image-content {
            max-width: 100%;
            padding: 0;
        }

        .image-content img {
            margin: 0; /* Remove fixed margins for mobile */
        }
    }
</style>



<?php
include_once('layouts/footer.php');
?>