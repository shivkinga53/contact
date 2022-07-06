<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>PHP form validation</title>
  </head>
  <body>
    <form class="contactForm" action="contactForm.php" method="post">
      Enter Your Name: <input type="text" name="name" placeholder="Full-Name" />
      <br />
      Enter Your E-mail Address:
      <input type="email" name="email" placeholder="Your e-mail" />
      <br />
      Enter Your Subject:
      <input type="subject" name="subject" placeholder="Your Subject" />
      <br />
      Enter Your Phone no:
      <input type="tel" name="phone" placeholder="Your Phone no." />
      <br />
      Enter Your Message:
      <textarea name="message" placeholder="Message"></textarea>
      <br />
      <button type="submit" name="submit">Send Mail</button>
    </form>
  </body>
</html>
