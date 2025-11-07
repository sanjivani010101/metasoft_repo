<?php
include_once('layouts/header.php');
?>
<!DOCTYPE html>
<html>
<head>
  <title>Trading Page</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

  <style>
    .carousel-inner img {
      height: 300px;
      object-fit: cover;
    }

    .carousel-inner {
      margin-top: 120px;
    }

    h4 {
      font-size: 30px;
      font-weight: 600;
      padding-top: 120px;
    }

    p.subtext {
      font-size: 18px;
      font-weight: 500;
    }

    button.tab-button {
      margin-left: 70px;
      background-color: blue;
      color: white;
      padding: 10px 20px;
      border: none;
      border-radius: 8px;
    }

    .card-container {
      display: flex;
      gap: 20px;
      justify-content: space-between;
      padding: 40px 20px;
      flex-wrap: wrap;
    }

    .feature-card {
      
      border-radius: 16px; 
      border: 1px solid #5dade2; 
      padding: 20px;
      width: 250px;
      box-shadow: 0 4px 20px rgba(0, 0, 0, 0.3);
      text-align: center;
      flex: 1 1 calc(25% - 40px);
    }

    .icon-circle {
      background: linear-gradient(135deg, #00c6ff, #0072ff);
      border-radius: 50%;
      width: 56px;
      height: 56px;
      display: flex;
      align-items: center;
      justify-content: center;
      margin: 0 auto 16px;
    }

    .icon-circle img {
      width: 28px;
      height: 28px;

    }

    .feature-card h3 {
      font-size: 22px;
      font-weight: 600px;
      font-weight: bold;
      margin-bottom: 10px;
    }

    .feature-card p {
      
      font-size: 18px;
      font-weight: 500px;
      margin: 0;
    }
     @media (max-width: 768px) {
    .problem-card {
      flex-direction: column;
      align-items: center;
    }
    
.problem-cards {
  display: flex;
  flex-wrap: nowrap; /* Prevent wrapping for single line */
  gap: 30px;
  overflow-x: auto;  /* Allows horizontal scrolling if needed */
  padding: 20px;
}

  @media (max-width: 768px) {
    .problem-card {
      flex-direction: column;
      align-items: center;
    }

.problem-card {
  flex: 0 0 320px; /* Fixed width per card */
  display: flex;
  flex-direction: column; /* Stack image + content vertically */
  border-radius: 16px;
  box-shadow: 0 0 10px rgba(0,0,0,0.5);
  text-align: center;
  overflow: hidden;
}

.problem-image {
  width: 100%;
  height: 330px;
  object-fit: cover;
  display: block;
  margin: 0;
  padding: 0;
}

.problem-content {
  padding: 16px;
}

.features-section {
  padding: 40px 20px;
}


.card-container {
  display: flex;
  flex-wrap: wrap;
  gap: 20px;
  justify-content: space-between;
}

.feature-card {
  flex: 0 1 calc(33.33% - 20px);
  border-radius: 16px;
  padding: 20px;
  box-shadow: 0 4px 20px rgba(0, 0, 0, 0.3);
  text-align: center;
}

 @media (max-width: 768px) {
    .card-container {
      flex-direction: column;
      align-items: center;
    }
  }


.icon-circle {
  width: 48px;
  height: 48px;
  background-color: #0d6efd;
  color: #fff;
  border-radius: 50%;
  display: flex;
  align-items: center;
  justify-content: center;
  margin-bottom: 15px;
  font-size: 20px;
}






  </style>
</head>

<body>
<div class="main-wrapper">
  <div class="page-content">
<div class="container py-5">
  <div class="row align-items-center">
    <!-- Text Section -->
    <div class="col-md-6">
      <h4 style="font-size: 30px; font-weight:600px; margin-top:5px">Stop Losing Money.<br>Start Winning Trades.</h4>
      <p class="subtext" style="font-size: 18px; font-weight:500px">
        Trademaxx combines advanced technical algorithms to identify high-probability trading opportunities with precise entry/exit points, trend analysis, and risk management – all in one powerful, easy-to-use indicator.
      </p>
    </div>

    <!-- Carousel Section -->
    <div class="col-md-6">
      <div id="myCarousel" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="images/dynamic1.png" class="d-block w-100" alt="Slide 1">
          </div>
          <div class="carousel-item">
            <img src="images/dynamic trading.png" class="d-block w-100" alt="Slide 2">
          </div>
          <div class="carousel-item">
            <img src="images/dynamic3.png" class="d-block w-100" alt="Slide 3">
          </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#myCarousel" data-bs-slide="prev">
          <span class="carousel-control-prev-icon"></span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#myCarousel" data-bs-slide="next">
          <span class="carousel-control-next-icon"></span>
        </button>
      </div>
    </div>
  </div>

<button 
  onclick="window.open('https://trademaxx.metasoft10.com/', '_blank')" 
  style="
      margin-left: 83px;
      background-color: #007BFF; 
      color: white; 
      border: none; 
      padding: 12px 24px; 
      font-size: 16px; 
      border-radius: 5px; 
      cursor: pointer;
      transition: background-color 0.3s ease;
    "
  onmouseover="this.style.backgroundColor='#0056b3'"
  onmouseout="this.style.backgroundColor='#007BFF'"
>
  Discover Feature
</button>



<!-- Discover Feature Cards Section -->
<div class="card-container" id="discover">
  <div class="feature-card">
    <div class="icon-circle">
      <i class="fas fa-robot" style="font-size: 24px; color: white;"></i>
    </div>
    <h3 style="font-size: 22px; font-weight:600px">Smart Signals</h3>
    <p style="font-size: 18px; font-weight:500px">Get precise buy/sell signals with built-in stop-loss and take-profit levels for optimal risk management.</p>
  </div>

  <div class="feature-card">
    <div class="icon-circle">
      <i class="fas fa-layer-group" style="font-size: 24px; color: white;"></i>
    </div>
    <h3>Supply/Demand Zones</h3>
    <p>Identify key market levels where institutional money is likely to act and react.</p>
  </div>

  <div class="feature-card">
    <div class="icon-circle">
      <i class="fas fa-chart-line" style="font-size: 24px; color: white;"></i>
    </div>
    <h3>Multi-Timeframe Analysis</h3>
    <p>View trend alignment across 5 timeframes to find the strongest trade setups.</p>
  </div>
  
</div>


<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
<link
  href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
  rel="stylesheet"
/>

<div class="container py-5">
  <h4 class="fw-semibold fs-2 text-center mb-3" style="font-size: 22px; font-weight:600px">Stop Making These Costly Mistakes</h4>
  <p class="fs-5 fw-medium text-center mb-5" style="font-size: 18px; font-weight:500px">
    Our AI-powered system helps you avoid the most common trading pitfalls
  </p>

  <div class="row g-4 justify-content-center">
    <!-- Card 1: Missed Setups -->
    <div class="col-12 col-md-6 col-lg-4 d-flex">
      <div class="card shadow-sm flex-fill">
        <img
          src="images/problem1.png"
          class="card-img-top"
          alt="Missed Setup"
          style=" object-fit: cover;"
        />
        <div class="card-body">
          <h5 class="card-title fw-semibold text-danger">
            <i class="fas fa-exclamation-triangle me-2"></i>Missed Setups
          </h5>
          <p class="card-text fs-6 fw-medium">
            Traders miss up to 70% of profitable opportunities due to manual
            analysis limitations and information overload.
          </p>
          <h6 class="text-info fw-semibold mt-3">
            <i class="fas fa-check-circle me-2"></i>The Trademaxx Solution
          </h6>
          <ul class="list-unstyled fs-6 fw-medium">
            <li>→ Constant market monitoring</li>
            <li>→ Real-time trade alerts</li>
          </ul>
        </div>
      </div>
    </div>

    <!-- Card 2: Emotional Trading -->
    <div class="col-12 col-md-6 col-lg-4 d-flex">
      <div class="card shadow-sm flex-fill">
        <img
          src="images/problem2.png"
          class="card-img-top"
          alt="Emotional Trading"
          style=" object-fit: cover;"
        />
        <div class="card-body">
          <h5 class="card-title fw-semibold text-danger">
            <i class="fas fa-exclamation-triangle me-2"></i>Emotional Trading
          </h5>
          <p class="card-text fs-6 fw-medium">
            Traders often make impulsive decisions based on fear or greed,
            hurting long-term performance.
          </p>
          <h6 class="text-info fw-semibold mt-3">
            <i class="fas fa-check-circle me-2"></i>The Trademaxx Solution
          </h6>
          <ul class="list-unstyled fs-6 fw-medium">
            <li>→ Objective, algorithm-driven signals</li>
            <li>→ Predefined risk management rules</li>
          </ul>
        </div>
      </div>
    </div>

    <!-- Card 3: Inconsistent Strategies -->
    <div class="col-12 col-md-6 col-lg-4 d-flex">
      <div class="card shadow-sm flex-fill">
        <img
          src="images/problem3.png"
          class="card-img-top"
          alt="Inconsistent Strategy"
          style=" object-fit: cover;"
        />
        <div class="card-body">
          <h5 class="card-title fw-semibold text-danger">
            <i class="fas fa-exclamation-triangle me-2"></i>Inconsistent Strategies
          </h5>
          <p class="card-text fs-6 fw-medium">
            Many traders lack a consistent and tested strategy, resulting in
            unpredictable outcomes.
          </p>
          <h6 class="text-info fw-semibold mt-3">
            <i class="fas fa-check-circle me-2"></i>The Trademaxx Solution
          </h6>
          <ul class="list-unstyled fs-6 fw-medium">
            <li>→ Proven, back-tested systems</li>
            <li>→ Easy-to-follow trading plans</li>
          </ul>
        </div>
      </div>
    </div>
  </div>
</div>


<div id="features">
<div style="text-align: center; padding: 20px;">
  <h4 style="font-size: 28px; font-weight: 600;">Powerful Features</h4>
  <p style="font-size: 18px; font-weight: 500;">Everything you need to succeed in today's volatile markets</p>
</div>


 <section class="features-section">
  <div class="card-container">
    <div class="feature-card">
      <div class="icon-circle">
        <i class="fas fa-signal" style="color:white"></i>
      </div>
      <h3 style="font-size: 22px; font-weight:600px">Precision Trading Signals</h3>
      <p style="font-size: 18px; font-weight:500px">Get clear buy and sell signals with automated stop-loss and triple take-profit levels calculated with advanced ATR-based algorithms.</p>
    </div>

    <div class="feature-card">
      <div class="icon-circle">
        <i class="fas fa-chart-line" style="color:white"></i>
      </div>
      <h3 style="font-size: 22px; font-weight:600px">Dynamic Market Structure</h3>
      <p style="font-size: 18px; font-weight:500px">Identify key supply and demand zones, trendlines, and Fibonacci levels to understand where the market is likely to react.</p>
    </div>

    <div class="feature-card">
      <div class="icon-circle">
        <i class="fas fa-clock"style="color:white"></i>
      </div>
      <h3 style="font-size: 22px; font-weight:600px">Multi-Timeframe Analysis</h3>
      <p style="font-size: 18px; font-weight:500px">Analyze trends across 5 timeframes to confirm signals and identify the strongest setups.</p>
    </div>
  </div>

       <div class="card-container" style="margin-top: -50px;">
     <div class="feature-card">
      <div class="icon-circle">
<i class="fas fa-arrow-trend-up" style="color:white"></i>
      </div>
      <h3 style="font-size: 22px; font-weight:600px">Automated Fibonacci Levels</h3>
      <p style="font-size: 18px; font-weight:500px">Automatically calculates and displays key Fibonacci retracement levels based on recent market swings to identify potential support and resistance areas.</p>
    </div>

     <div class="feature-card">
      <div class="icon-circle">
<i class="fas fa-square-poll-vertical"style="color:white"></i>
      </div>
      <h3 style="font-size: 22px; font-weight:600px">Dynamic Trendlines</h3>
      <p style="font-size: 18px; font-weight:500px">Smart algorithm automatically draws and updates trendlines based on significant pivot points, helping you visualize the market structure and anticipate reversals.</p>
    </div>

     <div class="feature-card">
      <div class="icon-circle">
<i class="fas fa-money-bill-trend-up" style="color:white"></i>
      </div>
      <h3 style="font-size: 22px; font-weight:600px">Swing High/Low Detection</h3>
      <p style="font-size: 18px; font-weight:500px"> Track the relative strength of major currencies to find the strongest trends and best trading opportunities in the forex market.</p>
    </div>
  </div>
 <div class="card-container" style="margin-top: -50px;">
     <div class="feature-card">
      <div class="icon-circle">
<i class="fas fa-wave-square" style="color:white"></i>      </div>
      <h3 style="font-size: 22px; font-weight:600px">Automated Fibonacci Levels</h3>
      <p style="font-size: 18px; font-weight:500px"> Automatically calculates and displays key Fibonacci retracement levels based on recent market swings to identify potential support and resistance areas.</p>
    </div>

 <div class="feature-card">
      <div class="icon-circle">
<i class="fas fa-bezier-curve" style="color:white"></i>      </div>
      <h3 style="font-size: 22px; font-weight:600px">Dynamic Trendlines</h3>
      <p style="font-size: 18px; font-weight:500px"> Smart algorithm automatically draws and updates trendlines based on significant pivot points, helping you visualize the market structure and anticipate reversals</p>
    </div>

 <div class="feature-card">
      <div class="icon-circle">
<i class="fas fa-expand" style="color:white"></i>      </div>
      <h3 style="font-size: 22px; font-weight:600px">Swing High/Low Detection</h3>
      <p style="font-size: 18px; font-weight:500px"> Automatically identifies key swing points in the market with "HH", "HL", "LH", and "LL" labels for advanced price action analysis and market structure identification.</p>
    </div>
</div>
 <div class="card-container" style="margin-top: -50px;">
 <div class="feature-card">
      <div class="icon-circle">
<i class="fas fa-gauge-high" style="color:white"></i>      </div>
      <h3 style="font-size: 22px; font-weight:600px">RSI Oversold/Overbought Detection</h3>
      <p style="font-size: 18px; font-weight:500px"> Identifies potential reversal points with automatic RSI analysis, highlighting overbought and oversold conditions with visual markers and optional alerts.</p>
    </div>

 <div class="feature-card">
      <div class="icon-circle">
<i class="fas fa-cloud" style="color:white"></i>    </div>
      <h3 style="font-size: 22px; font-weight:600px">EMA Cloud System</h3>
      <p style="font-size: 18px; font-weight:500px"> Proprietary EMA cloud visualization that offers clear trend direction confirmation with color-coded zones indicating bullish and bearish market conditions</p>
    </div>

 <div class="feature-card">
      <div class="icon-circle">
<i class="fas fa-bell" style="color:white"></i>    </div>
      <h3 style="font-size: 22px; font-weight:600px">Comprehensive Alerts
</h3>
      <p style="font-size: 18px; font-weight:500px"> Receive customizable alerts for trade entries, exits, trendline breaks, range breakouts, and more to never miss a trading opportunity across any market.</p>
    </div>
</div>
 <div class="card-container" style="margin-top: -50px;">
    <div class="feature-card">
      <div class="icon-circle">
<i class="fas fa-table-cells" style="color:white"></i>    </div>
      <h3 style="font-size: 22px; font-weight:600px">Information Dashboard
</h3>
      <p style="font-size: 18px; font-weight:500px"> View all critical information in a clean, customizable dashboard including SLTP levels, multi-timeframe trends, and key price levels for quick decision making.</p>
    </div>
    <div class="feature-card">
      <div class="icon-circle">
      <i class="fas fa-desktop" style="color:white"></i>   </div>
      <h3 style="font-size: 22px; font-weight:600px">Cross-Platform Compatibility
</h3>
      <p style="font-size: 18px; font-weight:500px"> Works seamlessly within TradingView, accessible on any device that supports TradingView including desktop, tablet, and mobile.</p>
    </div>

    <div class="feature-card">
      <div class="icon-circle">
<i class="fas fa-chart-area" style="color:white"></i>   </div>
      <h3 style="font-size: 22px; font-weight:600px">Supply & Demand Zones
</h3>
      <p style="font-size: 18px; font-weight:500px"> Automatically identifies and highlights key supply and demand zones where institutional trading activity is likely to impact price movement.</p>
    </div>


</div>


    <!-- Repeat more feature-card blocks as needed -->
  </div>
</section>
<div style="text-align: center; padding: 20px;">
  <h4 style="font-size: 28px; font-weight: 600;">Detailed Feature Breakdown</h4>
  <p style="font-size: 18px; font-weight: 500;">Deep dive into Algomaxx's powerful capabilities</p>
</div>

<div class="container">
  <section style="padding: 40px 0;">
    <div style="display: flex; align-items: center; justify-content: space-between; flex-wrap: wrap; gap: 40px;">
      
      <!-- Text Content -->
      <div style="flex: 1; min-width: 300px;">
        <h1 style="color: #007bff; font-size: 22px; font-weight: 600;">Smart Trading Signals & Risk Management</h1>
        <p style="font-size: 18px; font-weight: 500; color: #000;">
          Trademaxx generates high-probability buy and sell signals based on a sophisticated multi-factor algorithm. Each signal comes with precise entry points and automated risk management levels.
        </p>
        <ul style="list-style: none; padding-left: 0; font-size: 15px; font-weight: 500; color: #000;">
          <li><span style="color: #26a4a6;">✔️</span> Customizable ATR-based stop-loss calculation</li>
          <li><span style="color: #26a4a6;">✔️</span> Triple take-profit targets (TP1, TP2, TP3) for strategic profit-taking</li>
          <li><span style="color: #26a4a6;">✔️</span> Adjustable Risk:Reward ratio (default 1:3)</li>
          <li><span style="color: #26a4a6;">✔️</span> Signal strength filter (Fast, Medium, Slow) for different trading styles</li>
          <li><span style="color: #26a4a6;">✔️</span> Visual entry/exit markers on chart with price labels</li>
          <li><span style="color: #26a4a6;">✔️</span> Non-repainting signals based on confirmed price action</li>
        </ul>
      </div>

      <!-- Image Content -->
      <div style="flex: 1; min-width: 300px;">
        <img src="images/smart Signal.png" alt="Trading Chart" style="width: 100%; height: auto; border-radius: 10px;" />
      </div>
    </div>
  </section>
</div>

<div class="container">
  <section style="padding: 40px 0;">
    <div style="display: flex; align-items: center; justify-content: space-between; flex-wrap: wrap; gap: 40px;">
      
      <!-- Image Left -->
      <div style="flex: 1; min-width: 300px;">
        <img src="images/multi timeframe.png" alt="Multi-Timeframe Trend Screener" style="width: 100%; height: auto; border-radius: 10px;" />
      </div>

      <!-- Text Right -->
      <div style="flex: 1; min-width: 300px;">
        <h1 style="color: #007bff; font-size: 22px; font-weight: 600;">Multi-Timeframe Trend Screener</h1>
        <p style="font-size: 18px; font-weight: 500; color: #000;">
          Analyze trends across multiple timeframes simultaneously with Algomaxx's advanced trend detection system, ensuring you're always aligned with the dominant market direction.
        </p>
        <ul style="list-style: none; padding-left: 0; font-size: 15px; font-weight: 500; color: #000;">
          <li><span style="color: #26a4a6;">✔️</span> 5-timeframe analysis (1m, 5m, 15m, 1h, 4h) in a single view</li>
          <li><span style="color: #26a4a6;">✔️</span> Color-coded bullish/bearish indicators for each timeframe</li>
          <li><span style="color: #26a4a6;">✔️</span> Instant visual confirmation of trend alignment</li>
          <li><span style="color: #26a4a6;">✔️</span> Trend strength indicator showing momentum force</li>
          <li><span style="color: #26a4a6;">✔️</span> Custom alerts when trends align across timeframes</li>
          <li><span style="color: #26a4a6;">✔️</span> Ideal for finding high-probability entries with trend confluence</li>
        </ul>
      </div>
    </div>
  </section>
</div>


<div class="container">
  <section style="padding: 40px 0;">
    <div style="display: flex; align-items: center; justify-content: space-between; flex-wrap: wrap; gap: 40px;">
      
      <!-- Text Left -->
      <div style="flex: 1; min-width: 300px;">
        <h1 style="color: #007bff; font-size: 22px; font-weight: 600;">EMA Cloud System & Multiple EMAs</h1>
        <p style="font-size: 18px; font-weight: 500; color: #000;">
          Our proprietary EMA Cloud system provides clear trend direction and potential reversal zones, while multiple EMA lines help identify dynamic support/resistance levels.
        </p>
        <ul style="list-style: none; padding-left: 0; font-size: 15px; font-weight: 500; color: #000;">
          <li><span style="color: #26a4a6;">✔️</span> Visual “EMA Cloud” for instant trend direction confirmation</li>
          <li><span style="color: #26a4a6;">✔️</span> Multiple customizable EMA periods (6, 21, 50, 100, 200)</li>
          <li><span style="color: #26a4a6;">✔️</span> Color-coded EMAs for easy trend identification</li>
          <li><span style="color: #26a4a6;">✔️</span> EMA crossover signals for trend change confirmation</li>
          <li><span style="color: #26a4a6;">✔️</span> Trend ribbon visualization with customizable colors</li>
          <li><span style="color: #26a4a6;">✔️</span> EMA confluences highlight key trading zones</li>
        </ul>
      </div>

      <!-- Image Right -->
      <div style="flex: 1; min-width: 300px;">
        <img src="images/EMA cloud.png" alt="EMA Cloud Chart" style="width: 100%; height: auto; border-radius: 10px;" />
      </div>
    </div>
  </section>
</div>


<div class="container">
  <section style="padding: 40px 0;">
    <div style="display: flex; align-items: center; justify-content: space-between; flex-wrap: wrap; gap: 40px;">

      <!-- Image Left -->
      <div style="flex: 1; min-width: 300px;">
        <img src="images/supply and demand.png" alt="Supply Demand Chart" style="width: 100%; height: auto; border-radius: 10px;" />
      </div>

      <!-- Text Right -->
      <div style="flex: 1; min-width: 300px;">
        <h1 style="color: #007bff; font-size: 22px; font-weight: 600;">Supply & Demand Zone Detection</h1>
        <p style="font-size: 18px; font-weight: 500; color: #000;">
          The indicator automatically identifies and highlights key supply and demand zones where institutional buying or selling pressure is likely to impact price action.
        </p>
        <ul style="list-style: none; padding-left: 0; font-size: 15px; font-weight: 500; color: #000;">
          <li><span style="color: #26a4a6;">✔️</span> Automatic detection of swing high and low zones</li>
          <li><span style="color: #26a4a6;">✔️</span> Visual color-coding of supply (selling) and demand (buying) areas</li>
          <li><span style="color: #26a4a6;">✔️</span> Adjustable zone parameters for different timeframes</li>
          <li><span style="color: #26a4a6;">✔️</span> Visual breakout alerts when price enters key zones</li>
          <li><span style="color: #26a4a6;">✔️</span> Historical zone tracking for pattern analysis</li>
          <li><span style="color: #26a4a6;">✔️</span> Overlap detection to prevent conflicting zones</li>
        </ul>
      </div>

    </div>
  </section>
</div>

<div class="container">
  <section style="padding: 40px 0;">
    <div style="display: flex; align-items: center; justify-content: space-between; flex-wrap: wrap; gap: 40px;">

      <!-- Text Left -->
      <div style="flex: 1; min-width: 300px;">
        <h1 style="color: #007bff; font-size: 22px; font-weight: 600;">Automated Fibonacci Retracement Levels</h1>
        <p style="font-size: 18px; font-weight: 500; color: #000;">
          The indicator automatically calculates and displays Fibonacci retracement levels based on recent market swings, helping you identify potential support and resistance areas.
        </p>
        <ul style="list-style: none; padding-left: 0; font-size: 15px; font-weight: 500; color: #000;">
          <li><span style="color: #26a4a6;">✔️</span> Automatic detection of significant high and low points</li>
          <li><span style="color: #26a4a6;">✔️</span> Key Fibonacci levels (0%, 23.6%, 38.2%, 50%, 61.8%, 78.6%, 100%)</li>
          <li><span style="color: #26a4a6;">✔️</span> Visual markers for “Fib Top” and “Fib Bottom”</li>
          <li><span style="color: #26a4a6;">✔️</span> Optional table display with price values for each level</li>
          <li><span style="color: #26a4a6;">✔️</span> Color-coded visualization based on market direction</li>
          <li><span style="color: #26a4a6;">✔️</span> Customizable period for Fibonacci calculations</li>
        </ul>
      </div>

      <!-- Image Right -->
      <div style="flex: 1; min-width: 300px;">
        <img src="images/automated fibonacci.png" alt="Fibonacci Chart" style="width: 100%; height: auto; border-radius: 10px;" />
      </div>

    </div>
  </section>
</div>

<div class="container">
  <section style="padding: 40px 0;">
    <div style="display: flex; align-items: center; justify-content: space-between; flex-wrap: wrap; gap: 40px;">

      <!-- Image Left -->
      <div style="flex: 1; min-width: 300px;">
        <img src="images/automated dynamic.png" alt="Dynamic Trendlines Chart" style="width: 100%; height: auto; border-radius: 10px;" />
      </div>

      <!-- Text Right -->
      <div style="flex: 1; min-width: 300px;">
        <h1 style="color: #007bff; font-size: 22px; font-weight: 600;">Automated Dynamic Trendlines</h1>
        <p style="font-size: 18px; font-weight: 500; color: #000;">
          Trademaxx automatically draws and updates dynamic trendlines to visualize the market structure and identify potential reversal points. The intelligent algorithm uses advanced pivot recognition to plot the most relevant trendlines that institutional traders follow.
        </p>
        <ul style="list-style: none; padding-left: 0; font-size: 15px; font-weight: 500; color: #000;">
          <li><span style="color: #26a4a6;">✔️</span> Auto-detection of significant pivot points for accurate trendline placement</li>
          <li><span style="color: #26a4a6;">✔️</span> Dynamic upper and lower channel lines that update with new price action</li>
          <li><span style="color: #26a4a6;">✔️</span> Customizable line style, color, thickness, and extension settings</li>
          <li><span style="color: #26a4a6;">✔️</span> Trendline breakout alerts for early trend reversal signals</li>
          <li><span style="color: #26a4a6;">✔️</span> Price projection based on channel patterns and trendline extensions</li>
          <li><span style="color: #26a4a6;">✔️</span> Internal and external trendlines to identify both immediate and longer-term trends</li>
        </ul>
      </div>

    </div>
  </section>
</div>


<div class="container">
  <section style="padding: 40px 0;">
    <div style="display: flex; align-items: center; justify-content: space-between; flex-wrap: wrap; gap: 40px;">

      <!-- Text Left -->
      <div style="flex: 1; min-width: 300px;">
        <h1 style="color: #007bff; font-size: 22px; font-weight: 600;">Auto Swing High/Low Detection</h1>
        <p style="font-size: 18px; font-weight: 500; color: #000;">
          Automatically identify key market structure points with clear labeling of Higher Highs (HH), Higher Lows (HL), Lower Highs (LH), and Lower Lows (LL) for advanced price action analysis.
        </p>
        <ul style="list-style: none; padding-left: 0; font-size: 15px; font-weight: 500; color: #000;">
          <li><span style="color: #26a4a6;">✔️</span> Automated detection of significant swing points</li>
          <li><span style="color: #26a4a6;">✔️</span> Clear visual labeling (HH, HL, LH, LL) on chart</li>
          <li><span style="color: #26a4a6;">✔️</span> Market structure shift alerts for trend changes</li>
          <li><span style="color: #26a4a6;">✔️</span> Customizable swing point detection sensitivity</li>
          <li><span style="color: #26a4a6;">✔️</span> Pattern recognition based on consecutive swing formations</li>
          <li><span style="color: #26a4a6;">✔️</span> Confluence with support/resistance and Fibonacci levels</li>
        </ul>
      </div>

      <!-- Image Right -->
      <div style="flex: 1; min-width: 300px;">
        <img src="images/auto saving.png" alt="Swing High Low Detection" style="width: 100%; height: auto; border-radius: 10px;" />
      </div>

    </div>
  </section>
</div>


<div class="container">
  <section style="padding: 40px 0;">
    <div style="display: flex; align-items: center; justify-content: space-between; flex-wrap: wrap; gap: 40px;">

      <!-- Image Left -->
      <div style="flex: 1; min-width: 300px;">
        <img src="images/Range Consolidation.png" alt="Range Consolidation Detection" style="width: 100%; height: auto; border-radius: 10px;" />
      </div>

      <!-- Text Right -->
      <div style="flex: 1; min-width: 300px;">
        <h1 style="color: #007bff; font-size: 22px; font-weight: 600;">Range/Consolidation Detection</h1>
        <p style="font-size: 18px; font-weight: 500; color: #000;">
          Automatically identify when markets are in consolidation and generate alerts when price breaks out, allowing you to capitalize on high-momentum moves at the earliest stage.
        </p>
        <ul style="list-style: none; padding-left: 0; font-size: 15px; font-weight: 500; color: #000;">
          <li><span style="color: #26a4a6;">✔️</span> Automatic range detection based on volatility patterns</li>
          <li><span style="color: #26a4a6;">✔️</span> Visual highlighting of range boundaries</li>
          <li><span style="color: #26a4a6;">✔️</span> Color-coded breakout and breakdown signals</li>
          <li><span style="color: #26a4a6;">✔️</span> Real-time alerts when price breaks range limits</li>
          <li><span style="color: #26a4a6;">✔️</span> Measures range height for potential move projection</li>
          <li><span style="color: #26a4a6;">✔️</span> Works in all market conditions and timeframes</li>
        </ul>
      </div>

    </div>
  </section>
</div>

<div class="container">
  <section style="padding: 40px 0;">
    <div style="display: flex; align-items: center; justify-content: space-between; flex-wrap: wrap; gap: 40px;">

      <!-- Text Content -->
      <div style="flex: 1; min-width: 300px;">
        <h1 style="color: #007bff; font-size: 22px; font-weight: 600;">Forex Currency Strength Meter</h1>
        <p style="font-size: 18px; font-weight: 500; color: #000;">
          Gain a comprehensive view of major currency strengths to identify the best forex pairs to trade, with real-time relative performance visualization of up to 5 currencies.
        </p>
        <ul style="list-style: none; padding-left: 0; font-size: 15px; font-weight: 500; color: #000;">
          <li><span style="color: #26a4a6;">✔️</span> Real-time analysis of 5 major currencies (USD, EUR, GBP, JPY, AUD)</li>
          <li><span style="color: #26a4a6;">✔️</span> Visual strength meter with color-coded indicators</li>
          <li><span style="color: #26a4a6;">✔️</span> Customizable timeframe for strength calculation</li>
          <li><span style="color: #26a4a6;">✔️</span> Cross-pair correlation analysis</li>
          <li><span style="color: #26a4a6;">✔️</span> Helps identify strongest trending pairs</li>
          <li><span style="color: #26a4a6;">✔️</span> Adjustable dashboard position and appearance</li>
        </ul>
      </div>

      <!-- Image Content -->
      <div style="flex: 1; min-width: 300px;">
        <img src="images/forex currency.png" alt="Currency Strength Meter" style="width: 100%; height: auto; border-radius: 10px;" />
      </div>

    </div>
  </section>
</div>

<div class="container">
  <section style="padding: 40px 0;">
    <div style="display: flex; align-items: center; justify-content: space-between; flex-wrap: wrap; gap: 40px;">

      <!-- Image Left -->
      <div style="flex: 1; min-width: 300px;">
        <img src="images/RSI oversold.png" alt="RSI Detection" style="width: 100%; height: auto; border-radius: 10px;" />
      </div>

      <!-- Text Right -->
      <div style="flex: 1; min-width: 300px;">
        <h1 style="color: #007bff; font-size: 22px; font-weight: 600;">RSI Oversold/Overbought Detection</h1>
        <p style="font-size: 18px; font-weight: 500; color: #000;">
          Trademaxx automatically identifies potentially profitable entry and exit points using an advanced RSI (Relative Strength Index) detection system. The indicator highlights overbought and oversold conditions across multiple timeframes.
        </p>
        <ul style="list-style: none; padding-left: 0; font-size: 15px; font-weight: 500; color: #000;">
          <li><span style="color: #26a4a6;">✔️</span> Automatic detection of overbought (above 70) and oversold (below 30) RSI conditions</li>
          <li><span style="color: #26a4a6;">✔️</span> Visual color-coded highlights on chart when RSI reaches extreme levels</li>
          <li><span style="color: #26a4a6;">✔️</span> Multi-timeframe RSI analysis to confirm signals across different timeframes</li>
          <li><span style="color: #26a4a6;">✔️</span> RSI divergence detection for powerful reversal signals</li>
          <li><span style="color: #26a4a6;">✔️</span> Customizable RSI period and threshold levels for personalized analysis</li>
          <li><span style="color: #26a4a6;">✔️</span> Integration with trend analysis to filter out false signals</li>
        </ul>
      </div>

    </div>
  </section>
</div>


<div class="container">
  <section style="padding: 40px 0;">
    <div style="display: flex; align-items: center; justify-content: space-between; flex-wrap: wrap; gap: 40px;">

      <!-- Text Content -->
      <div style="flex: 1; min-width: 300px;">
        <h1 style="color: #007bff; font-size: 22px; font-weight: 600;">Comprehensive Alert System</h1>
        <p style="font-size: 18px; font-weight: 500; color: #000;">
          Never miss a trading opportunity with our robust alerting system that notifies you of key events across all features of the indicator.
        </p>
        <ul style="list-style: none; padding-left: 0; font-size: 15px; font-weight: 500; color: #000;">
          <li><span style="color: #26a4a6;">✔️</span> Customizable alerts for trade entries and exits</li>
          <li><span style="color: #26a4a6;">✔️</span> Signal confirmation alerts when multiple factors align</li>
          <li><span style="color: #26a4a6;">✔️</span> Breakout notifications for ranges and key levels</li>
          <li><span style="color: #26a4a6;">✔️</span> Market structure change warnings</li>
          <li><span style="color: #26a4a6;">✔️</span> Support for platform-specific alerts (TradingView)</li>
          <li><span style="color: #26a4a6;">✔️</span> Optional email and mobile push notifications</li>
        </ul>
      </div>

      <!-- Image Content -->
      <div style="flex: 1; min-width: 300px;">
        <img src="images/comprensive alert.png" alt="Alert System" style="width: 100%; height: auto; border-radius: 10px;" />
      </div>

    </div>
  </section>
</div>


<div class="container">
  <section style="padding: 40px 0;">
    <div style="display: flex; align-items: center; justify-content: space-between; flex-wrap: wrap; gap: 40px;">

      <!-- Image Left -->
      <div style="flex: 1; min-width: 300px;">
        <img src="images/information dashboard.png" alt="Information Dashboard" style="width: 100%; height: auto; border-radius: 10px;" />
      </div>

      <!-- Text Right -->
      <div style="flex: 1; min-width: 300px;">
        <h1 style="color: #007bff; font-size: 22px; font-weight: 600;">Information Dashboard</h1>
        <p style="font-size: 18px; font-weight: 500; color: #000;">
          View all critical information in a clean, customizable dashboard that gives you the complete market picture at a glance.
        </p>
        <ul style="list-style: none; padding-left: 0; font-size: 15px; font-weight: 500; color: #000;">
          <li><span style="color: #26a4a6;">✔️</span> Comprehensive market overview in one place</li>
          <li><span style="color: #26a4a6;">✔️</span> Current signal status with SLTP levels</li>
          <li><span style="color: #26a4a6;">✔️</span> Multi-timeframe trend summary</li>
          <li><span style="color: #26a4a6;">✔️</span> Key price levels and Fibonacci values</li>
          <li><span style="color: #26a4a6;">✔️</span> Market volatility and range measurements</li>
          <li><span style="color: #26a4a6;">✔️</span> Customizable dashboard position and transparency</li>
        </ul>
      </div>

    </div>
  </section>
</div>


<div style="text-align: center; padding: 20px;">
  <h4 style="font-size: 28px; font-weight: 600;">Smart Trading Algorithm</h4>
  <p style="font-size: 18px; font-weight: 500;">Powered by advanced technical analysis techniques</p>
</div>


      <div class="container" style="padding: 30px 50px; background-color: #f4f9ff; font-family: Arial, sans-serif;">
  <h1 style="color: #007bff; font-size: 24px; font-weight: 600; margin-bottom: 20px;">How Trademaxx Generates Signals</h1>
  <p style="font-size: 18px; font-weight: 500; color: #333; max-width: 700px; margin-bottom: 40px;">
    The Trademaxx Smart Pro indicator combines multiple technical analysis methodologies to generate high-probability trading signals with precise entry and exit points.
  </p>

  <div style="display: flex; flex-direction: column; gap: 20px;">
    <div style="background: #fff; border-radius: 12px; box-shadow: 0 4px 12px rgba(0,0,0,0.08); padding: 20px; display: flex; align-items: flex-start; gap: 15px;">
      <div style="font-size: 20px; color: #007bff;">📊</div>
      <div>
        <div style="font-size: 18px; font-weight: 600; color: #007bff;">Market Structure Analysis</div>
        <div style="font-size: 15px; font-weight: 500px; color: #333;">Identifies key supply/demand zones and trend channels to understand the overall market structure and potential reversal points.</div>
      </div>
    </div>

    <div style="background: #fff; border-radius: 12px; box-shadow: 0 4px 12px rgba(0,0,0,0.08); padding: 20px; display: flex; align-items: flex-start; gap: 15px;">
      <div style="font-size: 20px; color: #007bff;">📈</div>
      <div>
        <div style="font-size: 18px; font-weight: 600; color: #007bff;">Trend & Momentum Confirmation</div>
        <div style="font-size: 15px; font-weight: 500px; color: #333;">Confirms trend direction using multi-timeframe analysis and custom trend strength indicators to ensure trades align with dominant forces.</div>
      </div>
    </div>

    <div style="background: #fff; border-radius: 12px; box-shadow: 0 4px 12px rgba(0,0,0,0.08); padding: 20px; display: flex; align-items: flex-start; gap: 15px;">
      <div style="font-size: 20px; color: #007bff;">🔁</div>
      <div>
        <div style="font-size: 18px; font-weight: 600; color: #007bff;">Range Assessment</div>
        <div style="font-size: 15px; font-weight: 500px; color: #333;">Determines if the market is trending or ranging, and adapts strategy accordingly to optimize for breakouts or continuation patterns.</div>
      </div>
    </div>

    <div style="background: #fff; border-radius: 12px; box-shadow: 0 4px 12px rgba(0,0,0,0.08); padding: 20px; display: flex; align-items: flex-start; gap: 15px;">
      <div style="font-size: 20px; color: #007bff;">🎯</div>
      <div>
        <div style="font-size: 18px; font-weight: 600; color: #007bff;">Entry Signal Generation</div>
        <div style="font-size: 15px; font-weight: 500px; color: #333;">Triggers buy/sell signals at optimal entry points where multiple indicators align, increasing probability of successful trades.</div>
      </div>
    </div>

    <div style="background: #fff; border-radius: 12px; box-shadow: 0 4px 12px rgba(0,0,0,0.08); padding: 20px; display: flex; align-items: flex-start; gap: 15px;">
      <div style="font-size: 20px; color: #007bff;">📏</div>
      <div>
        <div style="font-size: 18px; font-weight: 600; color: #007bff;">Risk Management Calculation</div>
        <div style="font-size: 15px; font-weight: 500px; color: #333;">Uses ATR-based calculations to set precise stop-loss and take-profit levels for optimal risk/reward ratios tailored to current market volatility.</div>
      </div>
    </div>

    <div style="background: #fff; border-radius: 12px; box-shadow: 0 4px 12px rgba(0,0,0,0.08); padding: 20px; display: flex; align-items: flex-start; gap: 15px;">
      <div style="font-size: 20px; color: #007bff;">🔔</div>
      <div>
        <div style="font-size: 18px; font-weight: 600; color: #007bff;">Alert Generation</div>
        <div style="font-size: 15px; font-weight: 500px; color: #333;">Delivers customizable alerts when new signals occur or when price reaches important levels, ensuring you never miss a trading opportunity.</div>
      </div>
    </div>
  </div>
</div>


<div id="targetSection" style="padding: 60px 20px;font-family: Arial, sans-serif; text-align: center;">

  <h4 style="font-size: 28px; font-weight: 600;">Affordable Pricing Plans</h4>
  <p style="font-size: 18px; font-weight: 500px; margin-top: 8px;">Choose the plan that fits your trading needs</p>

  <div style="display: flex; justify-content: center; flex-wrap: wrap; gap: 32px; margin-top: 40px; border: blue;">

    <!-- Pricing Card Template -->
    <div style="background: #ffffff; border-radius: 16px; box-shadow: 0 4px 12px rgba(0,0,0,0.1); padding: 30px 20px; width: 280px; transition: transform 0.3s ease; border: 1px solid lightblue;">
      <h3 style="font-size: 22px; font-weight: 600;">Monthly Plan</h3>
      <h2 style="font-size: 28px; margin: 12px 0;">$49</h2>
      <p style="color: #555;">Flexible month-to-month access</p>
      <ul style="list-style: none; padding: 0; margin: 20px 0; text-align: left; color: #333; font-size: 15px; font-weight: 500px;">
        <li><span style="color: green;">✔</span> Full Access to TradeMaxx Pro</li>
        <li><span style="color: green;">✔</span> 30 Days Usage</li>
        <li><span style="color: green;">✔</span> Free Updates</li>
        <li><span style="color: green;">✔</span> 24/7 Support</li>
        <li style="color: red;">✘ No Long-term Savings</li>
      </ul><a href="https://trademaxx.metasoft10.com/pay-with-upi/" target="_blank" rel="noopener noreferrer">
  <button style="margin-top: 10px; padding: 12px 20px; background-color: #00cc33; color: #fff; border: none; border-radius: 8px; cursor: pointer;">
    Get Monthly Access
  </button>
</a>

    </div>

<div style="position: relative; background: #ffffff; border-radius: 16px; box-shadow: 0 4px 12px rgba(0,0,0,0.1); padding: 30px 20px; width: 280px; transition: transform 0.3s ease; border: 1px solid lightblue;">

  <!-- Popular Badge -->
  <div style="position: absolute; top: 10px; right: 10px; background-color: #28a745; color: white; padding: 4px 10px; font-size: 12px; font-weight: 600; padding-top: -30px;     margin-top: -10px;
    margin-right: -11px;">
    Popular
  </div>

  <h3 style="font-size: 22px; font-weight: 600;">Half-Yearly Plan</h3>
  <h2 style="font-size: 28px; margin: 12px 0;">$99</h2>
  <p style="color: #555;">Save with 6-month access</p>
  <ul style="list-style: none; padding: 0; margin: 20px 0; text-align: left; color: #333; font-size: 15px; font-weight:500px">
    <li><span style="color: green;">✔</span> Full Access to TradeMaxx Pro</li>
    <li><span style="color: green;">✔</span> 180 Days Usage</li>
    <li><span style="color: green;">✔</span> Free Updates</li>
    <li><span style="color: green;">✔</span> 24/7 Support</li>
    <li><span style="color: green;">✔</span> 33% Savings vs Monthly</li>
  </ul>

  <a href="https://trademaxx.metasoft10.com/pay-with-upi/" target="_blank" rel="noopener noreferrer">
    <button style="margin-top: 10px; padding: 12px 20px; background-color: #00cc33; color: #fff; border: none; border-radius: 8px; cursor: pointer;">
      Get 6-Month Access
    </button>
  </a>

</div>
<div style="position: relative; background: #ffffff; border-radius: 16px; box-shadow: 0 4px 12px rgba(0,0,0,0.1); padding: 30px 20px; width: 280px; transition: transform 0.3s ease; border: 1px solid lightblue;">

  <!-- Best Value badge in top-right -->
  <div style="position: absolute; top: 10px; right: 10px; background-color: #dc3545; color: white; padding: 4px 10px; font-size: 12px; font-weight: 600; margin-top: -10px;
    margin-right: -11px;">
    Best Value
  </div>

  <h3 style="font-size: 22px; font-weight: 600;">Yearly Plan</h3>
  <h2 style="font-size: 28px; margin: 12px 0;">$149</h2>
  <p style="color: #555;">Maximum savings for serious traders</p>
  <ul style="list-style: none; padding: 0; margin: 20px 0; text-align: left; color: #333; font-size: 15px; font-weight:500px">
    <li><span style="color: green;">✔</span> Full Access to TradeMaxx Pro</li>
    <li><span style="color: green;">✔</span> 365 Days Usage</li>
    <li><span style="color: green;">✔</span> Free Priority Updates</li>
    <li><span style="color: green;">✔</span> 24/7 Priority Support</li>
  </ul>

  <a href="https://trademaxx.metasoft10.com/pay-with-upi/" target="_blank" rel="noopener noreferrer">
    <button style="margin-top: 10px; padding: 12px 20px; background-color: #00cc33; color: #fff; border: none; border-radius: 8px; cursor: pointer;">
      Get Yearly Access
    </button>
  </a>
</div>



  </div>
</div>



<div style="font-family: Arial, sans-serif; padding: 20px; background-color: #f7fbff;">
  <div style="display: flex; flex-wrap: wrap; align-items: center; gap: 20px; padding: 24px; background-color: #eaf6ff; border: 1px solid #b5dcf9; border-radius: 14px; max-width: 100%; box-sizing: border-box; margin: 0 auto;">
    
    <!-- Shield Icon -->
    <div style="font-size: 34px; color: #007acc; flex-shrink: 0;">🛡️</div>

    <!-- Text and Payment Info -->
    <div style="flex: 1 1 250px; min-width: 250px;">
      <h2 style="margin: 0 0 10px; font-size: 22px; font-weight: 600; color: #003f5c;">
        Secure Payment Processing
      </h2>
      <p style="margin: 0 0 14px; font-size: 18px; font-weight: 500; color: #333;">
        All payments are processed securely through trusted payment providers.
        Your financial information is never stored on our servers.
      </p>
      <!-- Payment Logos -->
      <div style="display: flex; flex-wrap: wrap; gap: 20px; align-items: center;">
        <img src="https://upload.wikimedia.org/wikipedia/commons/4/41/Visa_Logo.png" alt="Visa" style="height: 18px;">
        <img src="https://upload.wikimedia.org/wikipedia/commons/2/2a/Mastercard-logo.svg" alt="Mastercard" style="height: 18px;">
        <img src="https://upload.wikimedia.org/wikipedia/commons/b/b5/PayPal.svg" alt="PayPal" style="height: 18px;">
      </div>
    </div>
  </div>
</div>




<div style="padding: 70px 20px; font-family: Arial, sans-serif;">
  <h1 style="font-size: 28px; font-weight: 600; text-align: center; margin-bottom: 10px;">Device Compatibility</h1>
  <p style="font-size: 18px; font-weight: 500; text-align: center; margin-bottom: 40px;">
    Trade confidently on any device of your choice
  </p>

  <div style="display: flex; flex-wrap: wrap; justify-content: center; gap: 32px;">
    <!-- Desktop Card -->
    <div style="flex: 1 1 280px; max-width: 300px; background: #ffffff; border-radius: 12px; box-shadow: 0 4px 16px rgba(0,0,0,0.1); overflow: hidden; text-align: center;">
      <img src="images/desktop.png" alt="Desktop" style="object-fit: cover;">
      <div style="padding: 16px;">
        <h3 style="margin: 0 0 8px; font-size: 18px; font-weight: 600; color: #000;">Desktop</h3>
        <p style="font-size: 15px; font-weight: 500; color: #444; margin-bottom: 16px;">
          Full compatibility with desktop computers for professional trading.
        </p>
        <button style="padding: 10px 16px; border: none; border-radius: 8px; background-color: #d0ebff; color: #0056b3; font-size: 16px; cursor: pointer; display: flex; align-items: center; gap: 8px;">
  <i class="fas fa-expand" style="color:blue"></i> Maximize screen space
</button>

      </div>
    </div>

    <!-- Mobile Card -->
    <div style="flex: 1 1 280px; max-width: 300px; background: #ffffff; border-radius: 12px; box-shadow: 0 4px 16px rgba(0,0,0,0.1); overflow: hidden; text-align: center;">
      <img src="images/mobile.png" alt="Mobile" style=" object-fit: cover;">
      <div style="padding: 16px;">
        <h3 style="margin: 0 0 8px; font-size: 18px; font-weight: 600; color: #000;">Mobile</h3>
        <p style="font-size: 15px; font-weight: 500; color: #444; margin-bottom: 16px;">
          Trade on the go with our fully optimized mobile interface.
        </p>
        <button style="padding: 10px 16px; border: none; border-radius: 8px; background-color: #d0ebff; color: #0056b3; font-size: 16px; cursor: pointer;">
  <i class="fas fa-bell" style="margin-right: 8px; "></i> Real-time notifications
</button>
      </div>
    </div>

    <!-- Tabs Card -->
    <div style="flex: 1 1 280px; max-width: 300px; background: #ffffff; border-radius: 12px; box-shadow: 0 4px 16px rgba(0,0,0,0.1); overflow: hidden; text-align: center;">
      <img src="images/tab.png" alt="Tabs" style="width: 100%; height: 150px; object-fit: cover;">
      <div style="padding: 16px;">
        <h3 style="margin: 0 0 8px; font-size: 18px; font-weight: 600; color: #000;">Tabs</h3>
        <p style="font-size: 15px; font-weight: 500; color: #444; margin-bottom: 16px;">
          Perfect balance of screen space and portability for traders.
        </p>
        <button style="padding: 10px 25px; border: none; border-radius: 8px; background-color: #d0ebff; color: #0056b3; font-size: 16px; cursor: pointer; margin-top: 7px">
  <i class="fas fa-chart-line" style="margin-right: 8px;"></i> Advanced charting
</button>
      </div>
    </div>
  </div>
</div>



<div class="cta-section">
  <h4 style="font-size: 28px; font-weight:600px; margin-top: -167px;">Ready to Transform Your Trading?</h4>
  <p style="font-size: 18px; font-weight:500px">
    Join thousands of successful traders who have boosted their profits and reduced risk with Trademaxx.
  </p>
  <a href="https://trademaxx.metasoft10.com/pay-with-upi/" target="_blank" rel="noopener noreferrer">
    <button class="cta-button">Get Started Today</button>
  </a>
</div>

<style>
  .cta-section {
    background-color: #f4f9ff;
    padding: 100px 20px 60px;
    text-align: center;
  }

  .cta-section h1 {
    font-size: 28px;
    font-weight: 600;
    margin-bottom: 20px;
  }

  .cta-section p {
    font-size: 18px;
    font-weight: 500;
    max-width: 600px;
    margin: 0 auto 30px;
  }

  .cta-button {
    padding: 12px 20px;
    background-color: #007bff;
    color: #fff;
    border: none;
    border-radius: 8px;
    cursor: pointer;
    font-size: 16px;
    font-weight: 600;
    transition: background-color 0.3s ease;
  }

  .cta-button:hover {
    background-color: #0056b3;
  }

  @media (max-width: 600px) {
    .cta-section h1 {
      font-size: 22px;
    }

    .cta-section p {
      font-size: 16px;
    }

    .cta-button {
      width: 90%;
    }
  }
</style>

 
</div>
</body>
<?php
include_once('layouts/footer.php');
?>
</html>



