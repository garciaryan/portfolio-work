<html>
  <head>
    <meta charset="utf-8">
    <title>Thanks!</title>
  </head>
  <body>
    <?php
    //if "email" variable is filled out, send email
      if (isset($_REQUEST['email']))  {

      //Email information
      $admin_email = "garciaryan007@yahoo.com";
      $email = $_REQUEST['email'];
      $message = $_REQUEST['message'];

      //send email
      mail($admin_email, $message, "From:" . $email);

      //Email response
      echo "Thanks for reaching out. I'll get back to you as soon as I can!";
      }

      //if "email" variable is not filled out, display the form
      else  {
    ?>

    <form id="contact_form" action="php/email.php" method="POST" enctype="multipart/form-data">
      <div class="form-group">
      <label for="email" id="email">Email: <span>*</span></label>
      <input type="email" class="input" name="email" placeholder="Email" id="email">
      </div>
      <div class="form-group">
        <label for="message" id="message">Message: <span>*</span></label>
          <textarea class="input" id="message" name="message" placeholder="Tell me about yourself and the project you'd like to work on!" rows="5"></textarea>
      </div>
      <div class="checkbox">
      <label>
        <input type="checkbox"> I'm not a robot
      </label>
      </div>
      <input type="submit" class="submit-btn btn-default center-block"></input>
      <p class="center-text" id="contact-fine-print">All fields marked <span>*</span> are mandatory</p>
    </form>

    <?php
      header( 'Refresh: 5; url=http://rgarciadev.com'); /* Redirect browser */
      exit;
    }
    ?>
  </body>
</html>
