<!DOCTYPE html>

<?php
  session_start();
  if (isset($_SESSION['page_loads']))
    $_SESSION['page_loads']++;
  else
    $_SESSION['page_loads'] = 1;
?>

<head>
<link href="./global.css", rel="stylesheet">
  <link href="./form.css", rel="stylesheet">
  <title>#<?php echo $_SESSION['page_loads'] ?></title>
</head>


<body data-theme="light-blocky">
  <?php require('snippets/navbar-snippet.html'); ?>

  <section id="body-section">
    <div id="body-container">
      <!-- Order of body divs is set using CSS -->
      <div id="body-left"></div>
      <div id="body-right"></div>
      <div id="body">
        <?php if ($_POST['input1']): ?>
          <h3 id="submit-message">Form submitted</h3>
        <?php else: ?>
          <div id="form-container">
            <form action="" method="POST">
              <h3>Send a message</h3>
              <label for="input1">Input 1</label>
              <input id="input1" name="input1" type="text">
              <br>
              <label for="input2">Input 2</label>
              <input id="input2" name="input2" type="text">
              <hr>
              <input id="submit" type="submit" value="submit time!">
            </form>
          </div>
        <?php endif; ?>
      </div>  <!-- body -->
    </div>  <!-- body-section -->
  </section>


</body>
</html>
