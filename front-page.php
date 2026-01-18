<?php
/**
 * Front Page Template
 */
get_header(); ?>

<!-- Inline Styles for Complete Design -->
<style>
.about {background: var(--light-color);}
.about-content {display: grid; grid-template-columns: 1fr 1fr; gap: 60px; align-items: center;}
.about-image {position: relative;}
.about-image img {width: 100%; border-radius: 20px; box-shadow: var(--shadow-lg);}
.about-badge {position: absolute; bottom: 20px; right: 20px; background: var(--white); padding: 20px 30px; border-radius: 15px; box-shadow: var(--shadow); display: flex; align-items: center; gap: 10px;}
.about-badge i {font-size: 24px; color: var(--accent-color);}
.about-text h3 {font-size: 32px; margin-bottom: 20px; color: var(--dark-color);}
.about-text p {margin-bottom: 20px; color: var(--text-light); line-height: 1.8;}
.about-features {margin-top: 30px;}
.feature-item {display: flex; gap: 15px; margin-bottom: 20px;}
.feature-item i {color: var(--secondary-color); font-size: 24px; flex-shrink: 0; margin-top: 3px;}
.feature-item h4 {font-size: 18px; margin-bottom: 5px; color: var(--dark-color);}
.feature-item p {color: var(--text-light); margin: 0;}

.services-grid {display: grid; grid-template-columns: repeat(auto-fit, minmax(350px, 1fr)); gap: 30px;}
.service-card {background: var(--white); padding: 40px; border-radius: 20px; box-shadow: var(--shadow); transition: transform 0.3s ease, box-shadow 0.3s ease; position: relative;}
.service-card:hover {transform: translateY(-10px); box-shadow: var(--shadow-lg);}
.service-card.featured {background: var(--gradient); color: var(--white);}
.service-card.featured h3, .service-card.featured p, .service-card.featured li {color: var(--white);}
.service-card.featured .service-icon {background: rgba(255, 255, 255, 0.2);}
.service-badge {position: absolute; top: 20px; right: 20px; background: var(--accent-color); color: var(--white); padding: 5px 15px; border-radius: 20px; font-size: 12px; font-weight: 600;}
.service-icon {width: 70px; height: 70px; background: var(--light-color); border-radius: 15px; display: flex; align-items: center; justify-content: center; margin-bottom: 20px;}
.service-icon i {font-size: 32px; color: var(--primary-color);}
.service-card.featured .service-icon i {color: var(--white);}
.service-card h3 {font-size: 24px; margin-bottom: 15px; color: var(--dark-color);}
.service-card p {color: var(--text-light); margin-bottom: 20px; line-height: 1.8;}
.service-list {list-style: none; padding: 0; margin: 0;}
.service-list li {display: flex; align-items: center; gap: 10px; margin-bottom: 10px; color: var(--text-light);}
.service-list i {color: var(--secondary-color); font-size: 14px;}
.service-card.featured .service-list i {color: var(--white);}

.leader {background: var(--light-color);}
.leader-content {display: grid; grid-template-columns: 1fr 1.8fr; gap: 60px; align-items: center;}
.leader-image {position: relative;}
.leader-image img {width: 100%; border-radius: 20px; box-shadow: var(--shadow-lg);}
.leader-badge {position: absolute; top: 20px; left: 20px; background: var(--white); padding: 15px 25px; border-radius: 15px; box-shadow: var(--shadow); display: flex; align-items: center; gap: 10px;}
.leader-badge i {font-size: 20px; color: var(--accent-color);}
.leader-text h2 {font-size: 36px; margin-bottom: 10px; color: var(--dark-color);}
.leader-title {color: var(--secondary-color); font-weight: 600; font-size: 18px; margin-bottom: 20px;}
.leader-text p {color: var(--text-light); margin-bottom: 20px; line-height: 1.8;}
.leader-credentials {display: flex; gap: 30px; margin-top: 30px; flex-wrap: wrap;}
.credential {display: flex; align-items: center; gap: 10px;}
.credential i {font-size: 24px; color: var(--secondary-color);}
.credential span {font-weight: 600; color: var(--dark-color);}

.branches {background: var(--white);}
.branches-grid {display: grid; grid-template-columns: repeat(auto-fit, minmax(280px, 1fr)); gap: 25px; margin-top: 40px;}
.branch-card {background: var(--light-color); padding: 30px; border-radius: 15px; box-shadow: var(--shadow); transition: transform 0.3s ease;}
.branch-card:hover {transform: translateY(-5px);}
.branch-card h3 {font-size: 22px; color: var(--primary-color); margin-bottom: 10px;}
.branch-card p {color: var(--text-light); font-size: 15px; margin: 5px 0;}
.branch-card i {color: var(--secondary-color); margin-right: 8px;}

.testimonials {background: var(--light-color);}
.testimonials-slider {position: relative; max-width: 800px; margin: 0 auto;}
.testimonial-card {background: var(--white); padding: 50px; border-radius: 20px; box-shadow: var(--shadow); display: none;}
.testimonial-card.active {display: block; animation: fadeIn 0.5s ease;}
@keyframes fadeIn {from {opacity: 0;} to {opacity: 1;}}
.testimonial-rating {display: flex; gap: 5px; margin-bottom: 20px;}
.testimonial-rating i {color: #ffd700; font-size: 20px;}
.testimonial-text {font-size: 20px; line-height: 1.8; color: var(--text-dark); margin-bottom: 30px; font-style: italic;}
.testimonial-author {display: flex; align-items: center; gap: 20px;}
.testimonial-author img {width: 60px; height: 60px; border-radius: 50%; object-fit: cover;}
.testimonial-author h4 {font-size: 18px; margin-bottom: 5px; color: var(--dark-color);}
.testimonial-author p {color: var(--text-light); font-size: 14px; margin: 0;}
.testimonial-controls {display: flex; justify-content: center; align-items: center; gap: 30px; margin-top: 40px;}
.testimonial-btn {width: 50px; height: 50px; border-radius: 50%; border: 2px solid var(--primary-color); background: var(--white); color: var(--primary-color); cursor: pointer; transition: all 0.3s ease;}
.testimonial-btn:hover {background: var(--primary-color); color: var(--white);}
.testimonial-dots {display: flex; gap: 10px;}
.dot {width: 12px; height: 12px; border-radius: 50%; background: var(--text-light); cursor: pointer; transition: all 0.3s ease;}
.dot.active {background: var(--primary-color); width: 30px; border-radius: 6px;}

.contact-wrapper {display: grid; grid-template-columns: 1fr 1.5fr; gap: 60px;}
.contact-info {background: var(--gradient); color: var(--white); padding: 50px; border-radius: 20px;}
.contact-info h3 {font-size: 32px; margin-bottom: 15px;}
.contact-info > p {margin-bottom: 40px; opacity: 0.9;}
.contact-details {margin-bottom: 40px;}
.contact-item {display: flex; gap: 20px; margin-bottom: 30px;}
.contact-item i {font-size: 24px; flex-shrink: 0; margin-top: 5px;}
.contact-item h4 {font-size: 18px; margin-bottom: 5px;}
.contact-item p {opacity: 0.9; line-height: 1.6; margin: 0;}
.contact-item a {color: var(--white); text-decoration: none; opacity: 0.9;}
.contact-item a:hover {opacity: 1; text-decoration: underline;}
.social-links h4 {font-size: 18px; margin-bottom: 15px;}
.social-icons {display: flex; gap: 15px;}
.social-icon {width: 45px; height: 45px; background: rgba(255, 255, 255, 0.2); border-radius: 50%; display: flex; align-items: center; justify-content: center; color: var(--white); transition: all 0.3s ease; text-decoration: none;}
.social-icon:hover {background: var(--white); color: var(--primary-color); transform: translateY(-5px);}

.contact-form-wrapper {position: relative;}
.contact-form {background: var(--white); padding: 50px; border-radius: 20px; box-shadow: var(--shadow);}
.form-row {display: grid; grid-template-columns: 1fr 1fr; gap: 20px;}
.form-group {margin-bottom: 25px;}
.form-group label {display: block; margin-bottom: 8px; font-weight: 600; color: var(--dark-color);}
.form-group input, .form-group select, .form-group textarea {width: 100%; padding: 15px; border: 2px solid #e0e0e0; border-radius: 10px; font-family: 'Inter', sans-serif; font-size: 16px; transition: border-color 0.3s ease;}
.form-group input:focus, .form-group select:focus, .form-group textarea:focus {outline: none; border-color: var(--primary-color);}
.btn-full {width: 100%;}

.faq {background: var(--white);}
.faq-list {max-width: 900px; margin: 0 auto;}
.faq-item {background: var(--light-color); padding: 25px; border-radius: 15px; margin-bottom: 20px; cursor: pointer; transition: all 0.3s ease;}
.faq-item:hover {box-shadow: var(--shadow);}
.faq-question {display: flex; justify-content: space-between; align-items: center; font-weight: 600; color: var(--dark-color); font-size: 18px;}
.faq-question i {color: var(--secondary-color); transition: transform 0.3s ease;}
.faq-item.active .faq-question i {transform: rotate(180deg);}
.faq-answer {max-height: 0; overflow: hidden; transition: max-height 0.3s ease; color: var(--text-light); padding-top: 0;}
.faq-item.active .faq-answer {max-height: 500px; padding-top: 15px;}
.faq-answer p {margin: 0;}

@media (max-width: 1024px) {
    .about-content, .leader-content, .contact-wrapper {grid-template-columns: 1fr;}
}

@media (max-width: 768px) {
    .services-grid {grid-template-columns: 1fr;}
    .form-row {grid-template-columns: 1fr;}
    .branches-grid {grid-template-columns: 1fr;}
}
</style>

<!-- Hero Section -->
<section class="hero" id="home">
    <div class="hero-content">
        <h1 class="hero-title">Discover the Natural Path to Parenthood</h1>
        <p class="hero-subtitle">NaturoX Fertility & Wellness — Empowering Your Parenthood Journey</p>
        <p class="hero-tagline">Supporting couples and individuals with compassionate, holistic, and evidence-inspired fertility care — naturally, safely, and effectively.</p>
        <div class="hero-buttons">
            <button class="btn btn-primary" onclick="window.open('https://wa.me/91<?php echo naturox_get_option('whatsapp_number', '7304600730'); ?>', '_blank')">
                <i class="fab fa-whatsapp"></i> WhatsApp: <?php echo naturox_get_option('whatsapp_number', '7304600730'); ?>
            </button>
            <button class="btn btn-secondary" onclick="window.open('tel:<?php echo naturox_get_option('phone_number', '9930327002'); ?>')">
                <i class="fas fa-phone"></i> Call: <?php echo naturox_get_option('phone_number', '9930327002'); ?>
            </button>
        </div>
        <div class="hero-stats">
            <div class="stat-item"><h3>22+</h3><p>Years Experience</p></div>
            <div class="stat-item"><h3>10,000+</h3><p>Families Helped</p></div>
            <div class="stat-item"><h3>6</h3><p>Centers in Maharashtra</p></div>
        </div>
    </div>
    <div class="scroll-indicator"><i class="fas fa-chevron-down"></i></div>
</section>

<!-- About Section -->
<section class="about" id="about">
    <div class="container">
        <div class="section-header">
            <span class="section-tag">About NaturoX Fertility</span>
            <h2 class="section-title">Your Unique Journey Deserves Personalized Care</h2>
            <p class="section-subtitle">At NaturoX Fertility & Wellness, we believe that every fertility journey is unique — and deserves a personalized, empathetic approach. Our centre blends the best of natural medicine, homoeopathy, naturopathy, and wellness therapies to support reproductive health and help couples achieve the dream of parenthood.</p>
        </div>
        <div class="about-content">
            <div class="about-image">
                <img src="https://images.unsplash.com/photo-1576091160399-112ba8d25d1d?w=800&q=80" alt="NaturoX Fertility Center">
                <div class="about-badge"><i class="fas fa-award"></i><span>22+ Years Excellence</span></div>
            </div>
            <div class="about-text">
                <h3>Why Choose NaturoX?</h3>
                <p>We focus on understanding you — not just treating symptoms — by optimizing hormonal balance, improving reproductive health, and enhancing overall well-being.</p>
                <div class="about-features">
                    <div class="feature-item">
                        <i class="fas fa-check-circle"></i>
                        <div>
                            <h4>Holistic and Integrative Approach</h4>
                            <p>We combine naturopathy, homoeopathy, nutritional guidance, lifestyle counseling, and stress management to support fertility naturally.</p>
                        </div>
                    </div>
                    <div class="feature-item">
                        <i class="fas fa-check-circle"></i>
                        <div>
                            <h4>Root-Cause Focus</h4>
                            <p>Our therapies aim to address underlying factors affecting fertility — from hormonal imbalances to lifestyle triggers.</p>
                        </div>
                    </div>
                    <div class="feature-item">
                        <i class="fas fa-check-circle"></i>
                        <div>
                            <h4>Supportive & Confidential Care</h4>
                            <p>We maintain a compassionate, judgment-free environment to empower you through every step of your fertility journey.</p>
                        </div>
                    </div>
                    <div class="feature-item">
                        <i class="fas fa-check-circle"></i>
                        <div>
                            <h4>Tailored to You</h4>
                            <p>Every treatment plan is thoughtfully designed to match your health profile, goals, and personal preferences.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Services Section -->
<section class="services" id="services">
    <div class="container">
        <div class="section-header">
            <span class="section-tag">Our Services</span>
            <h2 class="section-title">Comprehensive Fertility & Wellness Solutions</h2>
            <p class="section-subtitle">Evidence-inspired natural therapies tailored to your unique journey</p>
        </div>
        <div class="services-grid">
            <div class="service-card featured">
                <div class="service-badge">Most Popular</div>
                <div class="service-icon"><i class="fas fa-heartbeat"></i></div>
                <h3>Fertility Support & Consultation</h3>
                <p>Comprehensive fertility evaluation for men and women with personalized naturopathic and homeopathic fertility plans.</p>
                <ul class="service-list">
                    <li><i class="fas fa-check"></i> Complete fertility assessment</li>
                    <li><i class="fas fa-check"></i> Personalized treatment plans</li>
                    <li><i class="fas fa-check"></i> Ongoing support & monitoring</li>
                </ul>
            </div>
            <div class="service-card">
                <div class="service-icon"><i class="fas fa-balance-scale"></i></div>
                <h3>Hormonal Balance & Reproductive Wellness</h3>
                <p>Specialized support for PCOS, hormonal regulation, and reproductive health optimization.</p>
                <ul class="service-list">
                    <li><i class="fas fa-check"></i> Herbal support & dietary guidance</li>
                    <li><i class="fas fa-check"></i> Hormone optimization plans</li>
                    <li><i class="fas fa-check"></i> Natural cycle regulation</li>
                </ul>
            </div>
            <div class="service-card">
                <div class="service-icon"><i class="fas fa-spa"></i></div>
                <h3>Preconception Preparation</h3>
                <p>Prepare your body naturally for conception with comprehensive nutritional counseling and detox guidance.</p>
                <ul class="service-list">
                    <li><i class="fas fa-check"></i> Nutritional counseling</li>
                    <li><i class="fas fa-check"></i> Detox & lifestyle guidance</li>
                    <li><i class="fas fa-check"></i> Body preparation protocols</li>
                </ul>
            </div>
            <div class="service-card">
                <div class="service-icon"><i class="fas fa-male"></i></div>
                <h3>Male Fertility Support</h3>
                <p>Targeted therapies for improving sperm count, motility, and overall reproductive vitality.</p>
                <ul class="service-list">
                    <li><i class="fas fa-check"></i> Sperm quality improvement</li>
                    <li><i class="fas fa-check"></i> Nutritional protocols</li>
                    <li><i class="fas fa-check"></i> Lifestyle optimization</li>
                </ul>
            </div>
            <div class="service-card">
                <div class="service-icon"><i class="fas fa-brain"></i></div>
                <h3>Stress Management & Wellness</h3>
                <p>Mind–body therapies to improve fertility outcomes through relaxation techniques and counseling.</p>
                <ul class="service-list">
                    <li><i class="fas fa-check"></i> Anxiety & stress management</li>
                    <li><i class="fas fa-check"></i> Mind-body therapies</li>
                    <li><i class="fas fa-check"></i> Emotional support</li>
                </ul>
            </div>
            <div class="service-card">
                <div class="service-icon"><i class="fas fa-user-md"></i></div>
                <h3>Psychological & Sex Therapy</h3>
                <p>Professional, confidential care for performance issues, OCD, anxiety, and relationship counseling.</p>
                <ul class="service-list">
                    <li><i class="fas fa-check"></i> Clinical sex therapy</li>
                    <li><i class="fas fa-check"></i> Anxiety & panic disorder care</li>
                    <li><i class="fas fa-check"></i> Marital counseling</li>
                </ul>
            </div>
        </div>
    </div>
</section>

<!-- Founder Section -->
<section class="leader" id="founder">
    <div class="container">
        <div class="leader-content">
            <div class="leader-image">
                <img src="https://nyc3.digitaloceanspaces.com/bhindi-drive/files/4a725b62-e212-4edd-9ac2-8617438abe9a/2026-01-18T19-25-41-044Z-09c92ca3-chat-image-1768764341024-1.jpg" alt="Dr. Sanjay Shetye">
                <div class="leader-badge"><i class="fas fa-certificate"></i><span>PhD, BNYS</span></div>
            </div>
            <div class="leader-text">
                <span class="section-tag">Meet Our Founder</span>
                <h2>Dr. Sanjay Shetye (PhD, BNYS)</h2>
                <p class="leader-title">Leading the Path to Natural Parenthood and Mental Wellness</p>
                <p>Dr. Sanjay Shetye is a distinguished expert in Integrated Medicine with over 22 years of clinical experience. As the founder of NaturoX Fertility & Wellness Centre, he has pioneered a holistic treatment model that bridges the gap between traditional wisdom and modern clinical science.</p>
                <p>Dr. Shetye believes in treating the "whole person" rather than just the symptoms, focusing on the root cause of infertility and mental health challenges. He has successfully guided over 10,000 families toward the joy of parenthood through non-invasive, scientifically-backed therapies.</p>
                <div class="leader-credentials">
                    <div class="credential"><i class="fas fa-graduation-cap"></i><span>PhD in Integrated Medicine</span></div>
                    <div class="credential"><i class="fas fa-certificate"></i><span>BNYS Degree</span></div>
                    <div class="credential"><i class="fas fa-award"></i><span>22+ Years Experience</span></div>
                    <div class="credential"><i class="fas fa-users"></i><span>10,000+ Families Helped</span></div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Branches Section -->
<section class="branches" id="branches">
    <div class="container">
        <div class="section-header">
            <span class="section-tag">Our Locations</span>
            <h2 class="section-title">6 Centers Across Maharashtra</h2>
            <p class="section-subtitle">Expert care accessible to you across multiple locations</p>
        </div>
        <div class="branches-grid">
            <div class="branch-card">
                <h3><i class="fas fa-map-marker-alt"></i> Thane (HQ)</h3>
                <p>V.S. Nature Cure & Psychotherapy Center</p>
                <p style="margin-top: 10px;"><strong>Headquarters & Main Center</strong></p>
            </div>
            <div class="branch-card">
                <h3><i class="fas fa-map-marker-alt"></i> Mumbai</h3>
                <p>Specialized Integrated Care Center</p>
            </div>
            <div class="branch-card">
                <h3><i class="fas fa-map-marker-alt"></i> Pune</h3>
                <p>Fertility and Wellness Hub</p>
            </div>
            <div class="branch-card">
                <h3><i class="fas fa-map-marker-alt"></i> Nashik</h3>
                <p>Clinical Counseling & Naturopathy Center</p>
            </div>
            <div class="branch-card">
                <h3><i class="fas fa-map-marker-alt"></i> Dhule</h3>
                <p>Regional Wellness Center</p>
            </div>
            <div class="branch-card">
                <h3><i class="fas fa-map-marker-alt"></i> Aurangabad</h3>
                <p>Integrated Medicine & Therapy Center</p>
            </div>
        </div>
        <div style="text-align: center; margin-top: 40px; padding: 30px; background: var(--light-color); border-radius: 15px;">
            <h3 style="color: var(--primary-color); margin-bottom: 15px;"><i class="fas fa-globe"></i> Global Outreach: Dubai & International</h3>
            <p style="color: var(--text-light); font-size: 16px; margin: 0;">For our international patients, including those in Dubai, we offer high-definition Video Consultations. This ensures you receive Dr. Shetye's expert guidance and personalized treatment plans regardless of your geographical location.</p>
        </div>
    </div>
</section>

<!-- Testimonials Section -->
<section class="testimonials" id="testimonials">
    <div class="container">
        <div class="section-header">
            <span class="section-tag">Success Stories</span>
            <h2 class="section-title">What Our Patients Say</h2>
            <p class="section-subtitle">Real stories from real families who found hope with NaturoX</p>
        </div>
        <div class="testimonials-slider">
            <div class="testimonial-card active">
                <div class="testimonial-rating">
                    <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i>
                </div>
                <p class="testimonial-text">"After years of struggling with PCOS and irregular cycles, Dr. Shetye's holistic approach transformed our fertility journey. His personalized naturopathic treatment helped regulate my hormones naturally. We're now proud parents!"</p>
                <div class="testimonial-author">
                    <img src="https://images.unsplash.com/photo-1438761681033-6461ffad8d80?w=100&q=80" alt="Patient">
                    <div><h4>Priya & Rahul M.</h4><p>Mumbai</p></div>
                </div>
            </div>
            <div class="testimonial-card">
                <div class="testimonial-rating">
                    <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i>
                </div>
                <p class="testimonial-text">"The team at NaturoX provided not just medical support but emotional guidance throughout our journey. Dr. Shetye's integrated approach combining homeopathy and lifestyle changes made all the difference. Highly recommended!"</p>
                <div class="testimonial-author">
                    <img src="https://images.unsplash.com/photo-1507003211169-0a1dd7228f2d?w=100&q=80" alt="Patient">
                    <div><h4>Amit & Sneha K.</h4><p>Pune</p></div>
                </div>
            </div>
            <div class="testimonial-card">
                <div class="testimonial-rating">
                    <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i>
                </div>
                <p class="testimonial-text">"Dr. Shetye's expertise in male fertility helped improve my sperm count naturally through targeted nutrition and herbal support. His compassionate approach made us feel comfortable discussing sensitive issues. Forever grateful!"</p>
                <div class="testimonial-author">
                    <img src="https://images.unsplash.com/photo-1500648767791-00dcc994a43e?w=100&q=80" alt="Patient">
                    <div><h4>Vikram & Anjali S.</h4><p>Thane</p></div>
                </div>
            </div>
        </div>
        <div class="testimonial-controls">
            <button class="testimonial-btn prev" onclick="changeTestimonial(-1)"><i class="fas fa-chevron-left"></i></button>
            <div class="testimonial-dots">
                <span class="dot active" onclick="currentTestimonial(0)"></span>
                <span class="dot" onclick="currentTestimonial(1)"></span>
                <span class="dot" onclick="currentTestimonial(2)"></span>
            </div>
            <button class="testimonial-btn next" onclick="changeTestimonial(1)"><i class="fas fa-chevron-right"></i></button>
        </div>
    </div>
</section>

<!-- FAQ Section -->
<section class="faq" id="faq">
    <div class="container">
        <div class="section-header">
            <span class="section-tag">FAQ</span>
            <h2 class="section-title">Frequently Asked Questions</h2>
            <p class="section-subtitle">Common questions about our fertility treatments and approach</p>
        </div>
        <div class="faq-list">
            <div class="faq-item" onclick="toggleFaq(this)">
                <div class="faq-question">
                    <span>Do I need medical tests before consultation?</span>
                    <i class="fas fa-chevron-down"></i>
                </div>
                <div class="faq-answer">
                    <p>We recommend a basic fertility assessment including hormonal tests, semen analysis, and relevant health screenings for personalized planning. However, you can book an initial consultation without tests, and Dr. Shetye will guide you on what's needed.</p>
                </div>
            </div>
            <div class="faq-item" onclick="toggleFaq(this)">
                <div class="faq-question">
                    <span>Can natural therapies be used alongside conventional fertility treatments?</span>
                    <i class="fas fa-chevron-down"></i>
                </div>
                <div class="faq-answer">
                    <p>Yes — when guided by experts, naturopathy and complementary therapies can support overall health and may enhance outcomes. Dr. Shetye works collaboratively with your existing medical team when needed.</p>
                </div>
            </div>
            <div class="faq-item" onclick="toggleFaq(this)">
                <div class="faq-question">
                    <span>How long before I can expect results?</span>
                    <i class="fas fa-chevron-down"></i>
                </div>
                <div class="faq-answer">
                    <p>Every journey is different. Most plans span several weeks to months for optimal hormonal and reproductive health improvements. Dr. Shetye provides realistic timelines during your consultation based on your specific condition.</p>
                </div>
            </div>
            <div class="faq-item" onclick="toggleFaq(this)">
                <div class="faq-question">
                    <span>Do you offer video consultations for international patients?</span>
                    <i class="fas fa-chevron-down"></i>
                </div>
                <div class="faq-answer">
                    <p>Yes! We offer high-definition video consultations for patients in Dubai and other international locations. You'll receive the same personalized care and treatment plans regardless of your location.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Contact Section -->
<section class="contact" id="contact">
    <div class="container">
        <div class="section-header">
            <span class="section-tag">Get In Touch</span>
            <h2 class="section-title">Take the First Step Toward Parenthood</h2>
            <p class="section-subtitle">Your fertility goals matter, and NaturoX is here to support you with care, respect, and expertise</p>
        </div>
        <div class="contact-wrapper">
            <div class="contact-info">
                <h3>Contact Information</h3>
                <p>We maintain strict confidentiality for all inquiries, especially regarding psychological and sexual health.</p>
                <div class="contact-details">
                    <div class="contact-item">
                        <i class="fas fa-phone"></i>
                        <div>
                            <h4>Primary Appointment Line</h4>
                            <p><a href="tel:<?php echo naturox_get_option('phone_number', '9930327002'); ?>"><?php echo naturox_get_option('phone_number', '9930327002'); ?></a></p>
                        </div>
                    </div>
                    <div class="contact-item">
                        <i class="fab fa-whatsapp"></i>
                        <div>
                            <h4>WhatsApp Support</h4>
                            <p><a href="https://wa.me/91<?php echo naturox_get_option('whatsapp_number', '7304600730'); ?>" target="_blank"><?php echo naturox_get_option('whatsapp_number', '7304600730'); ?></a></p>
                        </div>
                    </div>
                    <div class="contact-item">
                        <i class="fas fa-envelope"></i>
                        <div>
                            <h4>Email Support</h4>
                            <p><a href="mailto:<?php echo naturox_get_option('email_address', 'info@naturoxfertility.com'); ?>"><?php echo naturox_get_option('email_address', 'info@naturoxfertility.com'); ?></a></p>
                        </div>
                    </div>
                    <div class="contact-item">
                        <i class="fas fa-globe"></i>
                        <div>
                            <h4>Website</h4>
                            <p><a href="https://www.naturoxfertility.com" target="_blank">www.naturoxfertility.com</a></p>
                        </div>
                    </div>
                </div>
                <div class="social-links">
                    <h4>Follow Us</h4>
                    <div class="social-icons">
                        <a href="#" class="social-icon"><i class="fab fa-facebook-f"></i></a>
                        <a href="#" class="social-icon"><i class="fab fa-instagram"></i></a>
                        <a href="#" class="social-icon"><i class="fab fa-youtube"></i></a>
                        <a href="#" class="social-icon"><i class="fab fa-linkedin-in"></i></a>
                    </div>
                </div>
            </div>
            <div class="contact-form-wrapper">
                <form class="contact-form" id="contactForm">
                    <div class="form-row">
                        <div class="form-group">
                            <label for="firstName">First Name *</label>
                            <input type="text" id="firstName" name="firstName" required>
                        </div>
                        <div class="form-group">
                            <label for="lastName">Last Name *</label>
                            <input type="text" id="lastName" name="lastName" required>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group">
                            <label for="email">Email *</label>
                            <input type="email" id="email" name="email" required>
                        </div>
                        <div class="form-group">
                            <label for="phone">Phone *</label>
                            <input type="tel" id="phone" name="phone" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="service">Service Interested In</label>
                        <select id="service" name="service">
                            <option value="">Select a service</option>
                            <option value="fertility">Fertility Support & Consultation</option>
                            <option value="hormonal">Hormonal Balance & Reproductive Wellness</option>
                            <option value="preconception">Preconception Preparation</option>
                            <option value="male">Male Fertility Support</option>
                            <option value="stress">Stress Management & Wellness</option>
                            <option value="psychology">Psychological & Sex Therapy</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="message">Message *</label>
                        <textarea id="message" name="message" rows="5" required></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary btn-full">Send Message</button>
                </form>
                <div class="form-success" id="formSuccess" style="display: none; text-align: center; padding: 50px; background: var(--white); border-radius: 20px; box-shadow: var(--shadow);">
                    <i class="fas fa-check-circle" style="font-size: 64px; color: var(--secondary-color); margin-bottom: 20px;"></i>
                    <h3 style="font-size: 32px; margin-bottom: 10px; color: var(--dark-color);">Thank You!</h3>
                    <p style="color: var(--text-light); margin: 0;">Your message has been sent successfully. We'll get back to you within 24 hours.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<?php get_footer(); ?>