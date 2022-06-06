<section class="contact" id="contact_scroll_down">
    <div class="container contact-container">
        <div class="flex-container contact-heading">
            <i class="fa-solid fa-file-signature"></i>
            <h1>Contact</h1>
        </div>
        <div class="flex-container contact-message">
            <div class="contact-us contact-us-left">
                <div class="mail-phone">
                    <div>
                        <a href="mailto:gediminas.janeika@gmai.com"><i class="fa-solid fa-envelope"></i>gediminas.janeika@gmai.com</a>
                    </div>
                    <div>
                        <a href="tel:+37068729055"><i class="fa-solid fa-phone"></i>+37068729055</a>
                    </div>
                </div>
            </div>
            <div class="message contact-us contact-us-right">
                <form id="contact" action="index.php" method="post">
                    <h3>Contact me</h3>
                    <p><input type="text" name="name" placeholder="Your Name" required></p>
                    <p><input type="tel" name="tel" placeholder="Your Phone" required></p>
                    <p><input type="email" name="email" placeholder="Your Email" required></p>
                    <p><textarea placeholder="Your Message" name="message" required></textarea></p>
                    <p><button name="submit" type="submit" id="contact-submit">Send</button></p>
                </form>
            </div>
        </div>
    </div>
    <footer>
        <div class="container">
            <div class="footer flex-container">
                <div class="copyright footer-content">
                    <p>&copy; <?php echo date('Y'); ?> | All Rights Reserved</p>
                </div>
                <ul class="social-buttons flex-container footer-content">
                    <li><a href="https://github.com/Gedimin4s" target="blank"><i class="fa-brands fa-github-square"></i></a></li>
                    <li><a href="https://www.linkedin.com/in/gediminas-janeika-021939227/" target="blank"><i class="fa-brands fa-linkedin"></i></a></li>
                    <li><a href="https://www.facebook.com/gediminas.janeika" target="blank"><i class="fa-brands fa-facebook-square"></i></a></li>
                    <li><a href="https://www.instagram.com/gediminasjaneika/?hl=en" target="blank"><i class="fa-brands fa-instagram-square"></i></a></li>
                </ul>
            </div>
        </div>
    </footer>
    <div class="contact2">
        <img src="app/images/flower.png" alt="Flower">
    </div>
</section>