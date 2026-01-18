<?php
/**
 * Template Name: Home Page
 */
get_header(); ?>

<section class="hero" id="home" style="position: relative; min-height: 100vh; display: flex; align-items: center; justify-content: center; background: linear-gradient(135deg, rgba(45, 106, 79, 0.92) 0%, rgba(82, 183, 136, 0.88) 100%), url('https://images.unsplash.com/photo-1505751172876-fa1923c5c528?w=1600&q=80') center/cover; color: #ffffff; text-align: center; padding: 120px 20px 50px;">
    <div class="hero-content" style="position: relative; z-index: 1; max-width: 900px;">
        <h1 class="hero-title" style="font-size: 58px; margin-bottom: 20px; animation: fadeInUp 1s ease;">Discover the Natural Path to Parenthood</h1>
        <p class="hero-subtitle" style="font-size: 22px; margin-bottom: 15px; opacity: 0.95; animation: fadeInUp 1s ease 0.2s both; font-weight: 500;">NaturoX Fertility & Wellness — Empowering Your Parenthood Journey</p>
        <p class="hero-tagline" style="font-size: 18px; margin-bottom: 40px; opacity: 0.9; animation: fadeInUp 1s ease 0.3s both; font-style: italic;">Supporting couples and individuals with compassionate, holistic, and evidence-inspired fertility care — naturally, safely, and effectively.</p>
        <div class="hero-buttons" style="display: flex; gap: 20px; justify-content: center; flex-wrap: wrap; animation: fadeInUp 1s ease 0.4s both;">
            <button class="btn btn-primary" onclick="window.open('https://wa.me/91<?php echo naturox_get_option('whatsapp_number', '7304600730'); ?>', '_blank')" style="padding: 16px 40px; border-radius: 30px; font-weight: 600; font-size: 16px; cursor: pointer; border: none; background: #ffffff; color: #2d6a4f;">
                <i class="fab fa-whatsapp"></i> WhatsApp: <?php echo naturox_get_option('whatsapp_number', '7304600730'); ?>
            </button>
            <button class="btn btn-secondary" onclick="window.open('tel:<?php echo naturox_get_option('phone_number', '9930327002'); ?>')" style="padding: 16px 40px; border-radius: 30px; font-weight: 600; font-size: 16px; cursor: pointer; background: transparent; color: #ffffff; border: 2px solid #ffffff;">
                <i class="fas fa-phone"></i> Call: <?php echo naturox_get_option('phone_number', '9930327002'); ?>
            </button>
        </div>
        <div class="hero-stats" style="display: flex; gap: 60px; justify-content: center; margin-top: 60px; flex-wrap: wrap;">
            <div class="stat-item"><h3 style="font-size: 48px; margin-bottom: 5px;">22+</h3><p style="font-size: 16px; opacity: 0.9;">Years Experience</p></div>
            <div class="stat-item"><h3 style="font-size: 48px; margin-bottom: 5px;">10,000+</h3><p style="font-size: 16px; opacity: 0.9;">Families Helped</p></div>
            <div class="stat-item"><h3 style="font-size: 48px; margin-bottom: 5px;">6</h3><p style="font-size: 16px; opacity: 0.9;">Centers in Maharashtra</p></div>
        </div>
    </div>
    <div class="scroll-indicator" style="position: absolute; bottom: 30px; left: 50%; transform: translateX(-50%);"><i class="fas fa-chevron-down" style="font-size: 24px; color: #ffffff;"></i></div>
</section>

<style>
@keyframes fadeInUp {
    from { opacity: 0; transform: translateY(30px); }
    to { opacity: 1; transform: translateY(0); }
}
@keyframes bounce {
    0%, 20%, 50%, 80%, 100% { transform: translateX(-50%) translateY(0); }
    40% { transform: translateX(-50%) translateY(-10px); }
    60% { transform: translateX(-50%) translateY(-5px); }
}
.scroll-indicator { animation: bounce 2s infinite; }
</style>

<?php
// Display page content if any
if (have_posts()) :
    while (have_posts()) : the_post();
        the_content();
    endwhile;
endif;
?>

<?php get_footer(); ?>