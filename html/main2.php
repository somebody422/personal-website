<!DOCTYPE html>

<head>
  <link href="./global.css", rel="stylesheet">
  <link href="./main2.css", rel="stylesheet">
</head>


<body data-theme="light-blocky">
  <div class="l-page">
    <!-- TODO: Decide where to use HTML5 tags like header, nav, seciton, ect -->

    <div class="l-header">
      <?php require('snippets/navbar-snippet.html'); ?>
    </div>


    <div class="l-body">
      <div class="centered"><img src="res/kitten_cropped.jpg" class="rounded-img"></div>
      <h1 class="centered">Hello there.</h1>
      <p class="centered">Here is some information about myself. Not too much i want to seem interesting but MYSTERIOUS</p>
      <p class="centered">I am a programmer, musician, and tinkerer. I enjoy web, embedded, and systems dev, as well as electrical design. And I play a mean bassline!</p>
    </div>


    <div class="l-footer">
      <?php require('snippets/footer-snippet.html'); ?>
    </div>
  </div> <!-- l-page -->
</body>
