

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <script src="https://kit.fontawesome.com/c8e4d183c2.js" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="contact/contact.css" type="text/css">
</head>
<body>
      <div class="container">
            <div>

              <form class="contactform" id="contact" action="" method="post">
              <h3>Send us a message</h3>
              <fieldset>
                <input placeholder="Your name" type="text" tabindex="1" name="name" id="name">
                <div class="error" id="nameError"></div>
              </fieldset>
              <fieldset>
                <input placeholder="Your Email Address" type="text" tabindex="2" id="email" name="email">
                <div class="error" id="emailError"></div>
              </fieldset>
              <fieldset>
                <input placeholder="Your Phone Number" type="text" tabindex="3" id="phone" name="phone">
                <div class="error" id="phoneError"></div>
              </fieldset>
              <!-- <fieldset>
                <input placeholder="Your Web Site starts with http://" type="text" tabindex="4" >
              </fieldset> -->
              <fieldset>
                <textarea placeholder="Type your Message Here...." type="text" tabindex="5" id="message" name="message"></textarea>
              </fieldset>
              <fieldset>
                <button type="submit" id="contact-submit" data-submit="...Sending">Submit</button>
              </fieldset>
              <div class="success" id="success"></div>
            </form>

            </div>

            <div id="contactInfoPlus" class="contactInfoPlus">

                       <ul style="list-style:none;" class="contact-list">

                             <li class="list-item">
                                 <i class="fa fa-map-marker-alt" aria-hidden="true">
                                    <span class="contact-text place">Jamaica</span>
                                 </i>

                             </li>

                             <li class="list-item">
                                 <i class="fa fa-phone-alt" aria-hidden="true">
                                    <span class="contact-text place">
                                      <a style="color: black;" href="tel:+ 1-876-470-4800"> 1-876-470-4800</a>
                                    </span>
                                 </i>

                             </li>

                             <li class="list-item">
                                 <i class="fa fa-envelope" aria-hidden="true">
                                    <span class="contact-text place">
                                      <a style="color: black;" href="mailto:customerservice@thephynix.com">customerservice@thephynix.com</a>
                                    </span>
                                 </i>

                             </li>

                             <li class="list-item">
                                 <i style="font-weight: 900;" class="fa fa-instagram" aria-hidden="true">
                                    <span class="contact-text place">
                                      <a style="color: black;" href="https://www.instagram.com/phynix876/">Instagram</a>
                                    </span>
                                 </i>

                             </li>


                        </ul>

            </div>
      </div>
</body>
</html>

<script src="contact/contact.js"></script>
