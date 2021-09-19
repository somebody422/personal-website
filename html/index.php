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


    <div class="l-body">
      <h1 class="centered">Hello there.</h1>
      <p class="centered">I'm sam.</p>
      <p class="centered">I am a programmer interested in many different styles and languages of developement. I also play with electronics and make music. Check out my Github and resume below:</p>

      <div class="icon-container">
        <a href="https://github.com/somebody422">
          <div class="icon-32x32">
            <img src="res/github-icons/GitHub-Mark-32px.png">
          </div>
        </a>
        <a href="/resume.php">
          <div class="icon-32x32">
            <img src="res/page.png">
          </div>
        </a>
      </div>

    </div>


    <div class="l-footer">
      <?php require('snippets/footer-snippet.html'); ?>
    </div>
  </div> <!-- l-page -->
</body>
