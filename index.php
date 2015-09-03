<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">

  <title></title>
  <meta name="description" content="">

  <!-- Mobile -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Chrome / Android -->
  <meta name="mobile-web-app-capable" content="yes">
  <meta name="theme-color" content="black">
  <link rel="icon" href="icon.png">

  <!-- Safari / iOS -->
  <meta name="apple-mobile-web-app-capable" content="yes">
  <meta name="apple-mobile-web-app-status-bar-style" content="black">
  <link rel="apple-touch-icon-precomposed" href="apple-touch-icon.png">

  <!-- Google Components -->
   <link rel="import" href="./bower_components/google-chart/google-chart.html">
   <link rel="import" href="./chart-widget.html">

<!-- Polymer Components -->
  <link rel="import" href="./bower_components/polymer/polymer.html">
  <link rel="import" href="./bower_components/paper-menu/paper-menu.html">
   <link rel="import" href="./bower_components/iron-ajax/iron-ajax.html">
  <link rel="import" href="./bower_components/paper-ripple/paper-ripple.html">
  <link rel="import" href="./bower_components/paper-item/paper-item.html">
  <link rel="import" href="./bower_components/paper-input/paper-input.html">
  <link rel="import" href="./bower_components/paper-tabs/paper-tabs.html">
  <link rel="import" href="./bower_components/font-roboto/roboto.html">
  <link rel="import"href="./bower_components/paper-tabs/paper-tabs.html">
  <link rel="import"href="./bower_components/paper-icon-button/paper-icon-button.html">
  <link rel="import" href="./bower_components/iron-icons/iron-icons.html">
  <link rel="import" href="./bower_components/paper-button/paper-button.html">
  <link rel="import" href="./bower_components/paper-progress/paper-progress.html">
  <link rel="import" href="./bower_components/paper-header-panel/paper-header-panel.html">
  <link rel="import" href="./bower_components/paper-toolbar/paper-toolbar.html">
  <link rel="import" href="./bower_components/paper-drawer-panel/paper-drawer-panel.html">
<!-- script import -->
  <script src="//code.jquery.com/jquery-1.11.3.min.js"></script>
  <script src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
  <script src="./bower_components/webcomponentsjs/webcomponents-lite.js"></script>

<!-- CSS style sheet -->
  <link rel="stylesheet" type="text/css" href="./css/style.css">
  <link rel="stylesheet" href="./css/animate.css">

</head>
<body class="vertical layout">    <!--  Munu bar -->
  <paper-drawer-panel id="drawerPanel">
    <paper-header-panel drawer>
      <paper-toolbar id="menuheader">
        
        <div class=" title horizontal layout center-justified"  >
        <span><b>APIbase widget</b></span>
        </div>
        
      </paper-toolbar>
    <div class="horizontal-section">
      <paper-menu selected="0">
       <paper-button  tabindex="0" raised>button</paper-button>
        <paper-button tabindex="0" raised class="colorful center">colorful</paper-button>
        <paper-button tabindex="0" raised disabled>disabled</paper-button>
        <paper-button tabindex="0" raised noink>noink</paper-button>
        <paper-button tabindex="0" raised class="colorful custom"><iron-icon icon="check"></iron-icon>ok</paper-button>
      </paper-menu>
    </div>
    </paper-header-panel>
  
    <!-- Main Nav bar-->
      <paper-header-panel main>
        <paper-toolbar id="mainheader">
            <paper-icon-button id="navicon" icon="menu"></paper-icon-button>
            <paper-tabs id="tabs" selected="all" self-end>
            <paper-tab name="Watershed" id="watershed-tab" >Charts</paper-tab>
            <paper-tab name="KMeans" id="kmean-tab" >Human</paper-tab>
            <paper-tab name="Graphcut"id="graphcut-tab" > Other Widget</paper-tab>
            </paper-tabs>

       </paper-toolbar>
      <div class="horizontal layout around-justified wrap">

        <chart-widget id = "2c898aaa-932c-4cfa-b9f1-5b6a364b420b"></chart-widget>
        <chart-widget></chart-widget>
        <chart-widget></chart-widget>
        <chart-widget></chart-widget>
        <chart-widget></chart-widget>
        <chart-widget></chart-widget>

      </div>
     </paper-header-panel>
    
  </paper-drawer-panel>

    <!-- end main header -->
    <script> 
  document.addEventListener('WebComponentsReady', function() {
    var navicon = document.getElementById('navicon');
    var drawerPanel = document.getElementById('drawerPanel');
    navicon.addEventListener('click', function() {
      drawerPanel.togglePanel();
    });
  });




  </script>
</body> 
</html>