<?php include("inc/header.php"); ?>
<?php
    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\SMTP;
    use PHPMailer\PHPMailer\Exception;

    require 'vendor/autoload.php';

    if(isset($_POST['submits']))
    {
        $name = $_POST['Name'];
        $email = $_POST['Email'];
        $message = $_POST['Message'];

        $mail = new PHPMailer(true);

        try {
            // $mail->SMTPDebug = SMTP::DEBUG_SERVER;                      
            $mail->isSMTP();                                            
            $mail->Host       = 'premium84.web-hosting.com';                     
            $mail->SMTPAuth   = true;                                   
            $mail->Username   = 'contact@unscrap.media';                     
            $mail->Password   = 'g7I[CuP*VQ,S';                              
            $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            
            $mail->Port       = 465;                                    

            $mail->setFrom('contact@unscrap.media', 'UNSCRAP Media');
            $mail->addAddress('rabshasiddiqui@gmail.com', 'Rabsah');

            //Content
            $mail->isHTML(true);                                 
            $mail->Subject = 'Contact Information';
            $mail->Body    = 'Name ' . $name . '<br> Email ' . $email . '<br> Message' . $message;

            $mail->send();
            $success = true;
        } catch (Exception $e) {
            echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
        }
    }
?>
    <div class="mainbanner">
      <div class="c-container">
        <h2 class="c-title-2" style="color: #fff;text-align:center;color: #fff;text-align: center;font-size: 55px;display: inherit;">Contact Us</h2>
      </div>
    </div>
    <main class="c-main cc-overflow_hidden mytopspace">
      <section class="c-section why-designity home-alt">
        <div class="c-container">
          <div class="why-designity-wrapper w-container">
            <div class="main-header design-system" style="text-align: center;">
                <h2 class="c-title-2">Hi! We're here to help!</h2>
                <p class="paragraph-8" style="font-size:18px;padding-top:10px">If you have a question about UNSCRAP MEDIA, a request, or anything else, our team is happy to help!</p>
            </div>
          </div>
        </div>
        <div class="contc">
            <div class="c-container">
                <div class="threbox">
                    <div class="one-icons">
                        <a href="mailto:cary@unscrap.media" class="myflex">
                            <i class="fa-solid fa-envelope"></i>
                            <h2 class="heading-5">Email</h2>
                        </a>
                    </div>
                    <div class="one-icons">
                        <a href="https://api.whatsapp.com/send?phone=+18582524653" class="myflex">
                            <i class="fa-brands fa-whatsapp"></i>
                            <h2 class="heading-5">Whatsapp</h2>
                        </a>
                    </div>
                    <div class="one-icons">
                        <a href="tel:+18582524653" class="myflex">
                            <i class="fa-solid fa-phone"></i>
                            <h2 class="heading-5">Call</h2>
                        </a>
                    </div>
                </div>
                <div class="threbox mytioss">
                    <div class="one-icons">
                        <a href="#" class="myflex">
                            <i class="fa-solid fa-location-dot"></i>
                            <p class="paragraph-8">2764 Pleasant Road Suite A PMB 838 Fort Mill, SC 29708</p>
                        </a>
                    </div>
                    <div class="one-icons">
                        <a href="#" class="myflex">
                            <i class="fa-solid fa-location-dot"></i>
                            <p class="paragraph-8">Sector 2, Vashi, Navi Mumbai, Maharashtra 400703, India</p>
                        </a>
                    </div>
                </div>
                <div class="conform">
                    <?php
                        if(isset($success)):
                    ?>
                    <div class="alert alert-success">Thanks for contacting us</div>
                    <?php
                        endif;
                    ?>
                    <form method="post">
                        <div class="form-group">
                            <label>Name</label>
                            <input type="text" name="Name" class="form-control">
                        </div>
                        <div class="form-group">
                            <label>Email</label>
                            <input type="email" name="Email" class="form-control">
                        </div>
                        <div class="form-group">
                            <label>Message</label>
                            <textarea name="Message" class="form-control"></textarea>
                        </div>
                        <div class="form-group" style="text-align:center;padding-top:20px">
                            <button type="submit" name="submits" class="c-button cc-primary cc-menu w-inline-block">Send</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="c-section cc-home_freelance home-alt">
            <div class="c-container">
                <div class="c-home_careers-cta home-alt">
                    <div class="cc-home_freelance-wrapper">
                        <h2 class="heading-39" style="color:#fff">Ready To Start Growing Your Business Organically On Social Media?</h2>
                        <h4 class="role-subtext" style="color:#fff">0 Risk. 100% Growth Guarantee​.​.</h4>
                    </div>
                    <div class="c-cta-wrapper cc-mt-40 cc-center">
                        <a onclick="Calendly.initPopupWidget({url: 'https://calendly.com/unscrapmedia/30min'});return false;" class="c-button cc-blue w-inline-block">
                            <div>GET STARTED</div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>
<?php include("inc/footer.php"); ?>