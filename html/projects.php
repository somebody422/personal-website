<!DOCTYPE html>

<head>
  <link href="./global.css", rel="stylesheet">
  <link href="./projects.css", rel="stylesheet">
</head>


<body data-theme="light-blocky">
  <div class="l-page">
    <!-- TODO: Decide where to use HTML5 tags like header, nav, seciton, ect -->

    <div class="l-header">
      <?php require('snippets/navbar-snippet.html'); ?>
    </div>


    <div class="l-body">

      <!-- Industry Dive -->
      <div class="project-left-small">
        <div class="image-container"><img src="res/industry-dive.png"></div>
      </div>
      <div class="project-right-large">
        <h3 class="centered-block">Database management</h3>
        <p>3 Month internship modifying and maintaining MySQL databases. Serves multiple websites:</p>
        <p><a href="https://www.industrydive.com/industries/">industrydive.com</a></p>
      </div>

      <!-- Personal Projects -->
      <div class="project-left-large">
          <h3 class="centered-block">Passion and school projects</h3>
          <p><a href="https://github.com/somebody422/dnssec_client">DNS client:</a> A simple pythonDNSSEC-enabled client.</p>
          <p><a href="https://github.com/somebody422/mycurses">ncurses wrapper:</a> A C++ library that wraps ncurses, and adds functionality to build simple text-based layouts.</p>
          <p><a href="https://github.com/somebody422/twitter_bacon_bot">Twitter bot:</a> Crawls through twitter posts to try and establish a path from an arbitrary user to Kevin Bacon, following mentions.</p>
      </div>
      <div class="project-right-small">
        <div class="image-container"><img src="res/coding-icon-label.png"></div>
      </div>

      <!-- Sporian Microsystems -->
      <div class="project-left-small">
        <div class="image-container"><img src="res/sporian_logo.png"></div>
      </div>
      <div class="project-right-large">
        <h3 class="centered-block">Firmware development</h3>
        <p>Worked on several projects, including:
          <ul>
            <li>A <a href="http://www.sporian.com/hyperspectral.html">hyperspectral camera</a> with flexible form factor</li>
            <li>Leading firmware development for a chemical sensing prototype</li>
          </ul>
        </p>
      </div>

    </div> <!-- l-body -->


    <div class="l-footer">
      <?php require('snippets/footer-snippet.html'); ?>
    </div>
  </div> <!-- l-page -->
</body>
