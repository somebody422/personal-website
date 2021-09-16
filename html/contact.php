<!DOCTYPE html>


<script>
  /* TODO: Put this in an external script */
  function isFormValid() {
    console.log("isFormValid()")
    let succeeded = true;
    let showReturnMessage = false;
    let showContentMessage = false;

    let returnErr = document.getElementById("return-err")
    let contentErr = document.getElementById("content-err")
    let returnEmailInput = document.querySelector(".email-return");
    let returnEmail = returnEmailInput.value;
    let emailContent = document.querySelector(".email-textarea");

    /* Validate "from" address */
    if (returnEmail == "") {
      succeeded = confirm("Send without a return email?")
    /* Note: we need a double backslash to escape a single "." for the regex */
    } else if (returnEmail.search("@") < 0 || returnEmail.search("\\.") < 0) {
      returnErr.textContent = "Invalid email address";
      showReturnMessage= true;
      succeeded = false;
    }

    /* Validate email content */
    if (emailContent.value == "") {
      contentErr.textContent = "Message is empty";
      showContentMessage = true;
      succeeded = false;
    }

    /* Update error messages */
    if (showReturnMessage)
      returnErr.classList.remove('hidden');
    else
      returnErr.classList.add('hidden');
    if (showContentMessage)
      contentErr.classList.remove('hidden');
    else
      contentErr.classList.add('hidden');

    if (succeeded) {
      console.log("All good! send post");
      return true;
    }
    return false;
  }
</script>

<head>
  <link href="./global.css", rel="stylesheet">
  <link href="./contact.css", rel="stylesheet">
</head>


<body data-theme="light-blocky">
  <div class="l-page">
    <!-- TODO: Decide where to use HTML5 tags like header, nav, seciton, ect -->

    <div class="l-header">
      <?php require('snippets/navbar-snippet.html'); ?>
    </div>


    <div class="l-body">
      <p>Contact me at my email shedin422@gmail.com. Alternatively, use the form below to send me a message.</p>

    </div>
    <div class="l-form">
      <?php
        if ($_POST['message-text']):
          $message =
            "Message sent from website contact form:\n\n" .
            $_POST['message-text'] . "\n\n" .
            "end message\n";
          //$ret = mail("shedin422@gmail.com", "website email test", "test");
          //echo "mail ret: ", $ret;
      ?>
        <h3>Message sent!</h3>
      <?php endif; ?>

      <form action="" method="POST" onsubmit="return isFormValid()">
        <input class="email-return" placeholder="Your email here" name="email-return" value="">
        <em id="return-err" class="boldred hidden"></em>
        <br>
        <textarea class="email-textarea" placeholder="Message body" name="message-text"></textarea>
        <em id="content-err" class="boldred hidden"></em>
        <br>
        <input type="submit" value="Send message">
      </form>
    </div>


    <div class="l-footer">
      <?php require('snippets/footer-snippet.html'); ?>
    </div>  <!-- l-footer -->


  </div>
</body>
