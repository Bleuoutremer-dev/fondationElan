<section class="emploi big-section wow animate__fadeIn <?= $couleurdefondformemploi ?>">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-xl-10 col-md-12 text-center margin-six-bottom">
                <h3 class="alt-font text-black font-weight-500">Candidature spontanée </h3>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-12">
<!--                 <form id="project-contact-form" action="email-templates/contact-form.php" method="post" novalidate="">
                    <div class="row row-cols-1 row-cols-md-2">
                        <div class="col margin-4-rem-bottom sm-margin-25px-bottom">
                            <input class="medium-input bg-white margin-25px-bottom required" type="text" name="name" placeholder="Your name">
                            <input class="medium-input bg-white margin-25px-bottom required" type="email" name="email" placeholder="Your email address">
                            <input class="medium-input bg-white mb-0" type="tel" name="phone" placeholder="Your mobile">
                        </div>
                        <div class="col margin-4-rem-bottom sm-margin-20px-bottom">
                            <textarea class="medium-textarea bg-white h-200px" rows="6" name="comment" placeholder="Your message"></textarea>
                        </div>
                        <div class="col text-start sm-margin-20px-bottom">
                            <input type="checkbox" name="terms_condition" id="terms_condition" value="1" class="terms-condition d-inline-block align-top w-auto mb-0 margin-10px-right margin-5px-top required">
                            <label for="terms_condition" class="text-small d-inline-block align-top w-85 md-w-90 xs-w-85">I accept the terms & conditions and I understand that my data will be hold securely in accordance with the <a href="privacy.html" target="_blank" class="text-decoration-underline text-extra-dark-gray">privacy policy</a>.</label>
                        </div>
                        <div class="col text-center text-md-end">
                            <input type="hidden" name="redirect" value="">
                            <button id="project-contact-us-button" class="btn btn-medium btn-fancy btn-gradient-sky-blue-pink mb-0 submit" type="submit">Send Message</button>
                        </div>
                    </div>
                    <div class="form-results d-none"></div>
                </form> -->
                <?php echo do_shortcode('[contact-form-7 id="547" title="Formulaire emploi" html_id="project-contact-form"]') ?>
            </div>
        </div>
    </div>
</section>