<!DOCTYPE html>

<head>
  <link href="./global.css", rel="stylesheet">
  <link href="./index.css", rel="stylesheet">
</head>


<body data-theme="light-blocky">
  <div class="l-page">
    <!-- TODO: Decide where to use HTML5 tags like header, nav, seciton, ect -->

    <div class="l-header">
      <?php require('snippets/navbar-snippet.html'); ?>
    </div>

    <div class="l-body-top">
      <h1 class="centered">Welcome!</h1>
    </div>

    <img class="l-pic" src="res/kittens.jpg">
    <div class="l-intro-text">
      <h3>About me</h3>
      <p>I am a programmer, musician, and tinkerer. I like to spend time learning new programming languages and tools, whether in embedded, web, or cloud. My passtion for both software and hardware leads to lots of tinkering with microcontrollers and small computers.</p>
      <p>You can often find me jamming out on the bass or keys</p>
      <p>Check out my <a href="/resume">resume</a> or ___</p>
    </div> <!-- l-intro-text -->



    <div class="l-body-bottom">
      <img src="res/kitten_cropped.jpg" class="rounded-img">
    </div>

    <div class="l-footer">
      <?php require('snippets/footer-snippet.html'); ?>
    </div>
  </div> <!-- l-page -->
</body>
