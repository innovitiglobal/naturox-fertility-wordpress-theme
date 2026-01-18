<footer class="footer">
    <div class="container">
        <div class="footer-content">
            <div class="footer-col">
                <?php if ( has_custom_logo() ) : ?>
                    <img src="<?php echo wp_get_attachment_image_src( get_theme_mod( 'custom_logo' ), 'full' )[0]; ?>" alt="<?php bloginfo( 'name' ); ?>" class="footer-logo-img">
                <?php else : ?>
                    <img src="https://nyc3.digitaloceanspaces.com/bhindi-drive/files/4a725b62-e212-4edd-9ac2-8617438abe9a/2026-01-18T19-25-40-922Z-94d4c424-chat-image-1768764340892-0.jpg" alt="<?php bloginfo( 'name' ); ?>" class="footer-logo-img">
                <?php endif; ?>
                <p>Empowering your journey to parenthood through natural, holistic fertility solutions. Where Nature Supports New Life.</p>
                <div class="footer-social">
                    <a href="#"><i class="fab fa-facebook-f"></i></a>
                    <a href="#"><i class="fab fa-instagram"></i></a>
                    <a href="#"><i class="fab fa-twitter"></i></a>
                    <a href="#"><i class="fab fa-linkedin-in"></i></a>
                </div>
            </div>
            <div class="footer-col">
                <h4>Quick Links</h4>
                <ul>
                    <li><a href="#about">About Us</a></li>
                    <li><a href="#services">Services</a></li>
                    <li><a href="#founder">Our Founder</a></li>
                    <li><a href="#branches">Branches</a></li>
                    <li><a href="#testimonials">Success Stories</a></li>
                </ul>
            </div>
            <div class="footer-col">
                <h4>Services</h4>
                <ul>
                    <li><a href="#services">Fertility Support</a></li>
                    <li><a href="#services">Hormonal Balance</a></li>
                    <li><a href="#services">Male Fertility</a></li>
                    <li><a href="#services">Psychological Care</a></li>
                </ul>
            </div>
            <div class="footer-col">
                <h4>Contact</h4>
                <ul>
                    <li><i class="fas fa-phone"></i> <?php echo naturox_get_option( 'phone_number', '9930327002' ); ?></li>
                    <li><i class="fab fa-whatsapp"></i> <?php echo naturox_get_option( 'whatsapp_number', '7304600730' ); ?></li>
                    <li><i class="fas fa-envelope"></i> <?php echo naturox_get_option( 'email_address', 'info@naturoxfertility.com' ); ?></li>
                    <li><i class="fas fa-globe"></i> www.naturoxfertility.com</li>
                </ul>
            </div>
        </div>
        <div class="footer-bottom">
            <p>&copy; <?php echo date('Y'); ?> NaturoX Fertility & Wellness Centre. All rights reserved.</p>
            <div class="footer-links">
                <a href="#">Privacy Policy</a>
                <a href="#">Terms & Conditions</a>
                <a href="#">Disclaimer</a>
            </div>
        </div>
        <div style="text-align: center; margin-top: 20px; padding-top: 20px; border-top: 1px solid rgba(255,255,255,0.1); opacity: 0.7; font-size: 14px;">
            <p>Disclaimer: Treatment effectiveness varies based on individual health. Always consult qualified health professionals for medical decisions.</p>
        </div>
    </div>
</footer>

<button class="scroll-top" id="scrollTop"><i class="fas fa-arrow-up"></i></button>

<?php wp_footer(); ?>
</body>
</html>