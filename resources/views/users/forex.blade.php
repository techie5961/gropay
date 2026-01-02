<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title> {{ config('app.name') }} || Users || Forex Trading </title>
<link rel="icon" type="image/svg+xml" href="{{ asset('favicon/favicon.svg?v=1.2') }}" />
<link rel="shortcut icon" href="{{ asset('favicon/favicon.ico?v=1.2') }}" />
<link rel="apple-touch-icon" sizes="180x180" href="{{ asset('favicon/apple-touch-icon.png?v=1.2') }}" />
<link rel="manifest" href="{{ asset('favicon/site.webmanifest?v=1.2') }}" />
<link rel="stylesheet" href="{{ asset('vitecss/fonts/fonts.css?v='.config('versions.vite_version').'') }}">

<style>
  html, body {
    margin: 0;
    padding: 0;
    height: 100%;
    background: #0f172a;
    font-family: 'montserrat','Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    color: #e2e8f0;
  }

  .container {
    height: 100%;
    width: 100%;
    display: flex;
    flex-direction: column;
  }

  .header {
    padding: 1.5rem;
    background: linear-gradient(135deg, #1e293b 0%, #0f172a 100%);
    border-bottom: 1px solid #334155;
    box-shadow: 0 4px 12px rgba(0, 0, 0, 0.2);
    z-index: 10;
  }

  .header-content {
    max-width: 1200px;
    margin: 0 auto;
    display: flex;
    justify-content: space-between;
    align-items: center;
    flex-wrap: wrap;
    gap: 1.5rem;
  }

  .title-section {
    display: flex;
    flex-direction: column;
  }

  .main-title {
    font-size: 1.8rem;
    font-weight: 700;
    margin: 0;
    background: linear-gradient(90deg, #60a5fa, #3b82f6);
    -webkit-background-clip: text;
    background-clip: text;
    color: transparent;
  }

  .subtitle {
    font-size: 0.9rem;
    color: #94a3b8;
    margin-top: 0.25rem;
  }

  .dropdown-container {
    position: relative;
    min-width: 280px;
  }

  .dropdown-label {
    display: block;
    font-size: 0.9rem;
    margin-bottom: 0.5rem;
    color: #cbd5e1;
    font-weight: 500;
  }

  .custom-dropdown {
    position: relative;
    width: 100%;
  }

  .dropdown-select {
    width: 100%;
    padding: 0.85rem 1rem;
    background: #1e293b;
    border: 1px solid #334155;
    border-radius: 10px;
    color: #e2e8f0;
    font-size: 1rem;
    font-weight: 500;
    cursor: pointer;
    appearance: none;
    transition: all 0.3s ease;
    box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
  }

  .dropdown-select:hover {
    background: #27334a;
    border-color: #60a5fa;
  }

  .dropdown-select:focus {
    outline: none;
    border-color: #3b82f6;
    box-shadow: 0 0 0 3px rgba(59, 130, 246, 0.2);
  }

  .dropdown-arrow {
    position: absolute;
    right: 1rem;
    top: 50%;
    transform: translateY(-50%);
    pointer-events: none;
    color: #94a3b8;
    transition: transform 0.3s ease;
  }

  .custom-dropdown.active .dropdown-arrow {
    transform: translateY(-50%) rotate(180deg);
  }

  .currency-info {
    display: flex;
    align-items: center;
    gap: 0.75rem;
    margin-top: 1.5rem;
    padding: 1rem;
    background: rgba(30, 41, 59, 0.6);
    border-radius: 10px;
    border-left: 4px solid #3b82f6;
  }

  .currency-flag {
    font-size: 1.8rem;
  }

  .currency-details h3 {
    margin: 0;
    font-size: 1.1rem;
  }

  .currency-details p {
    margin: 0.25rem 0 0 0;
    font-size: 0.85rem;
    color: #94a3b8;
  }

  /* Button Styles */
  .button-container {
    display: flex;
    gap: 1rem;
    margin-left: auto;
  }

  .action-button {
    padding: 0.75rem 1.5rem;
    border: none;
    border-radius: 10px;
    font-size: 1rem;
    font-weight: 600;
    cursor: pointer;
    transition: all 0.3s ease;
    display: flex;
    align-items: center;
    justify-content: center;
    white-space: nowrap;
    min-width: 140px;
  }

  .start-trading-btn {
    background: linear-gradient(135deg, #3b82f6, #1d4ed8);
    color: white;
    box-shadow: 0 4px 12px rgba(59, 130, 246, 0.3);
  }

  .start-trading-btn:hover {
    background: linear-gradient(135deg, #2563eb, #1e40af);
    transform: translateY(-2px);
    box-shadow: 0 6px 16px rgba(59, 130, 246, 0.4);
  }

  .go-back-btn {
    background: transparent;
    color: #cbd5e1;
    border: 2px solid #475569;
  }

  .go-back-btn:hover {
    background: rgba(71, 85, 105, 0.2);
    border-color: #64748b;
    transform: translateY(-2px);
  }

  .chart-container {
    flex: 1;
    position: relative;
    min-height: 500px;
  }

  .tradingview-widget-container {
    height: 100%;
    width: 100%;
  }

  @media (max-width: 768px) {
    .header-content {
      flex-direction: column;
      align-items: flex-start;
    }
    
    .dropdown-container {
      width: 100%;
    }
    
    .main-title {
      font-size: 1.5rem;
    }
    
    .button-container {
      width: 100%;
      margin-left: 0;
      margin-top: 1rem;
      justify-content: flex-start;
    }
    
    .action-button {
      flex: 1;
      min-width: 0;
    }
  }
</style>
</head>

<body>
<div class="container">
  <header class="header">
    <div class="header-content">
      <div class="title-section">
        <h1 class="main-title">Forex Trading Chart</h1>
        <p class="subtitle">Real-time forex analysis powered by TradingView</p>
      </div>
      
     <div style="display:flex;flex-direction:column;width:100%;">
        <button onclick="window.open('https://chat.whatsapp.com/Lb6S8zO9wKl2wtzVLQ98Cx')" style="background:#4caf50;box-shadow:0 4px 12px rgba(76, 175, 80,0.3)" class="action-button start-trading-btn">
         Join the Forex Trading Group
        </button>
      <div class="button-container">
        
        <button class="action-button go-back-btn" id="goBackBtn">
          Go Back
        </button>
        <button class="action-button start-trading-btn" id="startTradingBtn">
          Start Trading
        </button>
      </div>
     </div>
      
      <div class="dropdown-container">
        <label class="dropdown-label">Select Currency Pair</label>
        <div class="custom-dropdown" id="currencyDropdown">
          <select class="dropdown-select" id="currencyPairSelect">
            <option value="FX:EURUSD">EUR/USD - Euro / US Dollar</option>
            <option value="FX:GBPUSD">GBP/USD - British Pound / US Dollar</option>
            <option value="FX:USDJPY">USD/JPY - US Dollar / Japanese Yen</option>
            <option value="FX:USDCAD">USD/CAD - US Dollar / Canadian Dollar</option>
            <option value="FX:AUDUSD">AUD/USD - Australian Dollar / US Dollar</option>
            <option value="FX:NZDUSD">NZD/USD - New Zealand Dollar / US Dollar</option>
            <option value="FX:USDCHF">USD/CHF - US Dollar / Swiss Franc</option>
            <option value="FX:EURGBP">EUR/GBP - Euro / British Pound</option>
            <option value="FX:EURJPY">EUR/JPY - Euro / Japanese Yen</option>
            <option value="FX:GBPJPY">GBP/JPY - British Pound / Japanese Yen</option>
          </select>
          <div class="dropdown-arrow">▼</div>
        </div>
        
        <div class="currency-info">
          <div class="currency-flag" id="currencyFlag">🇪🇺/🇺🇸</div>
          <div class="currency-details">
            <h3 id="currencyName">Euro / US Dollar</h3>
            <p id="currencyDescription">The most traded currency pair in the world</p>
          </div>
        </div>
      </div>
    </div>
  </header>
  
  <div class="chart-container">
    <div class="tradingview-widget-container">
      <div style='height:100%' id="tradingview_chart"></div>
    </div>
  </div>
</div>

<script src="https://s3.tradingview.com/tv.js"></script>
<script>
  // TradingView widget configuration
  let tvWidget = null;
  
  function initTradingView(symbol) {
    // Remove existing widget if it exists
    if (tvWidget !== null) {
      tvWidget.remove();
      tvWidget = null;
    }
    
    // Create new widget
    tvWidget = new TradingView.widget({
      autosize: true,
      symbol: symbol,
      interval: "15",
      timezone: "Etc/UTC",
      theme: "dark",
      style: "1",
      locale: "en",
      toolbar_bg: "#020617",
      enable_publishing: false,
      hide_top_toolbar: false,
      hide_legend: false,
      allow_symbol_change: false,
      container_id: "tradingview_chart"
    });
  }
  
  // Currency pair data
  const currencyData = {
    "FX:EURUSD": {
      name: "Euro / US Dollar",
      description: "The most traded currency pair in the world",
      flag: ""
    },
    "FX:GBPUSD": {
      name: "British Pound / US Dollar",
      description: "Also known as 'Cable' in forex trading",
      flag: ""
    },
    "FX:USDJPY": {
      name: "US Dollar / Japanese Yen",
      description: "Major currency pair representing US and Japanese economies",
      flag: ""
    },
    "FX:USDCAD": {
      name: "US Dollar / Canadian Dollar",
      description: "Known as the 'Loonie' pair",
      flag: ""
    },
    "FX:AUDUSD": {
      name: "Australian Dollar / US Dollar",
      description: "Known as the 'Aussie' pair",
      flag: ""
    },
    "FX:NZDUSD": {
      name: "New Zealand Dollar / US Dollar",
      description: "Known as the 'Kiwi' pair",
      flag: ""
    },
    "FX:USDCHF": {
      name: "US Dollar / Swiss Franc",
      description: "Known as the 'Swissie' pair",
      flag: ""
    },
    "FX:EURGBP": {
      name: "Euro / British Pound",
      description: "Major European cross currency pair",
      flag: ""
    },
    "FX:EURJPY": {
      name: "Euro / Japanese Yen",
      description: "Popular cross currency pair",
      flag: ""
    },
    "FX:GBPJPY": {
      name: "British Pound / Japanese Yen",
      description: "Known for its volatility",
      flag: ""
    }
  };
  
  // Initialize with default pair
  document.addEventListener('DOMContentLoaded', function() {
    const defaultPair = "FX:EURUSD";
    initTradingView(defaultPair);
    updateCurrencyInfo(defaultPair);
    
    // Setup dropdown interaction
    const dropdown = document.getElementById('currencyDropdown');
    const select = document.getElementById('currencyPairSelect');
    
    // Toggle dropdown active state
    select.addEventListener('focus', function() {
      dropdown.classList.add('active');
    });
    
    select.addEventListener('blur', function() {
      dropdown.classList.remove('active');
    });
    
    // Handle currency pair change
    select.addEventListener('change', function() {
      const selectedPair = this.value;
      initTradingView(selectedPair);
      updateCurrencyInfo(selectedPair);
    });
    
    // Keyboard navigation for dropdown
    select.addEventListener('keydown', function(e) {
      if (e.key === 'Enter') {
        const selectedPair = this.value;
        initTradingView(selectedPair);
        updateCurrencyInfo(selectedPair);
      }
    });
    
    // Button event handlers
    const startTradingBtn = document.getElementById('startTradingBtn');
    const goBackBtn = document.getElementById('goBackBtn');
    
    // Update these URLs with your actual links
    startTradingBtn.addEventListener('click', function() {
      window.open('https://ma.valetax.com/p/2122956', '_blank');
    });
    
    goBackBtn.addEventListener('click', function() {
      window.open('{{ url('users/dashboard') }}', '_self');
    });
    
    // Add keyboard shortcuts
    document.addEventListener('keydown', function(e) {
      // Alt + S for Start Trading
      if (e.altKey && e.key === 's') {
        startTradingBtn.click();
      }
      // Alt + B for Go Back
      if (e.altKey && e.key === 'b') {
        goBackBtn.click();
      }
    });
  });
  
  // Update currency information display
  function updateCurrencyInfo(symbol) {
    const data = currencyData[symbol];
    if (data) {
      document.getElementById('currencyName').textContent = data.name;
      document.getElementById('currencyDescription').textContent = data.description;
      document.getElementById('currencyFlag').textContent = data.flag;
    }
  }
</script>
</body>
</html>