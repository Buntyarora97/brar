
    
    
    <?php
// eye-care-blog-bathinda.php

$pageTitle = "Cataract Surgery in Bathinda Latest Technology Complete Recovery Guide | Best Cataract Surgeon Near Bathinda Latest Technology Complete Recovery Guide – Brar Eye Hospital";
$pageDescription = "Get affordable cataract surgery near Bathinda Latest Technology Complete Recovery Guide at Brar Eye Hospital. Phacoemulsification, laser cataract and premium IOL implants by expert cataract surgeons serving Bathinda Latest Technology Complete Recovery Guide in Punjab.";
$pageKeywords = "cataract surgery Bathinda Latest Technology Complete Recovery Guide, cataract surgeon Bathinda Latest Technology Complete Recovery Guide, cataract operation Bathinda Latest Technology Complete Recovery Guide, eye surgeon near Bathinda Latest Technology Complete Recovery Guide, cataract hospital Bathinda Latest Technology Complete Recovery Guide";

include('header.php');
?>

<style>
/* Reset and Base Styles */
* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}

:root {
    --primary-color: #03c0b4;
    --secondary-color: #f17732;
    --dark-color: #333333;
    --light-color: #ffffff;
    --gray-light: #f8f9fa;
    --gray-medium: #6c757d;
    --gradient-primary: linear-gradient(135deg, #03c0b4 0%, #02a399 100%);
    --gradient-secondary: linear-gradient(135deg, #f17732 0%, #e6641a 100%);
    --shadow-light: 0 4px 6px rgba(0, 0, 0, 0.1);
    --shadow-medium: 0 8px 15px rgba(0, 0, 0, 0.1);
    --shadow-heavy: 0 15px 35px rgba(0, 0, 0, 0.15);
    --border-radius: 8px;
    --border-radius-lg: 16px;
    --transition: all 0.3s ease;
}

body {
    font-family: 'Inter', -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, sans-serif;
    line-height: 1.6;
    color: var(--dark-color);
    background-color: var(--light-color);
}

.container {
    max-width: 1200px;
    margin: 0 auto;
    padding: 0 20px;
}

/* Header */
.header {
    background: var(--light-color);
    box-shadow: var(--shadow-light);
    position: fixed;
    top: 0;
    left: 0;
    right: 0;
    z-index: 1000;
}

.nav {
    display: flex;
    justify-content: space-between;
    align-items: center;
    padding: 1rem 0;
}

.logo {
    display: flex;
    align-items: center;
    gap: 10px;
}

.logo-img {
    width: 40px;
    height: 40px;
    border-radius: 50%;
}

.logo-text {
    font-size: 1.5rem;
    font-weight: 700;
    color: var(--primary-color);
}

.nav-menu {
    display: flex;
    list-style: none;
    gap: 2rem;
}

.nav-menu a {
    text-decoration: none;
    color: var(--dark-color);
    font-weight: 500;
    transition: var(--transition);
    position: relative;
}

.nav-menu a:hover {
    color: var(--primary-color);
}

.nav-menu a::after {
    content: '';
    position: absolute;
    bottom: -5px;
    left: 0;
    width: 0;
    height: 2px;
    background: var(--primary-color);
    transition: var(--transition);
}

.nav-menu a:hover::after {
    width: 100%;
}

.hamburger {
    display: none;
    flex-direction: column;
    cursor: pointer;
    gap: 4px;
}

.hamburger span {
    width: 25px;
    height: 3px;
    background: var(--dark-color);
    transition: var(--transition);
}

/* Hero Section */
.hero {
    background: var(--gradient-primary);
    color: var(--light-color);
    padding: 120px 0 80px;
    min-height: 100vh;
    display: flex;
    align-items: center;
}

.hero-content {
    display: grid;
    grid-template-columns: 1fr 1fr;
    gap: 4rem;
    align-items: center;
}

.hero-title {
    font-size: 3.5rem;
    font-weight: 700;
    line-height: 1.2;
    margin-bottom: 1.5rem;
    background: linear-gradient(45deg, #ffffff, #e0f7fa);
    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;
    background-clip: text;
}

.hero-subtitle {
    font-size: 1.2rem;
    line-height: 1.7;
    margin-bottom: 2rem;
    opacity: 0.95;
}

.hero-buttons {
    display: flex;
    gap: 1rem;
    flex-wrap: wrap;
}

.btn {
    padding: 14px 28px;
    font-size: 1rem;
    font-weight: 600;
    border: none;
    border-radius: var(--border-radius);
    cursor: pointer;
    transition: var(--transition);
    text-decoration: none;
    display: inline-block;
    text-align: center;
}

.btn-primary {
    background: var(--secondary-color);
    color: var(--light-color);
    box-shadow: var(--shadow-medium);
}

.btn-primary:hover {
    background: #e6641a;
    transform: translateY(-2px);
    box-shadow: var(--shadow-heavy);
}

.btn-secondary {
    background: transparent;
    color: var(--light-color);
    border: 2px solid var(--light-color);
}

.btn-secondary:hover {
    background: var(--light-color);
    color: var(--primary-color);
}

.btn-large {
    padding: 18px 36px;
    font-size: 1.1rem;
}

.hero-img {
    width: 100%;
    height: auto;
    border-radius: var(--border-radius-lg);
    box-shadow: var(--shadow-heavy);
}

/* Introduction */
.intro {
    padding: 80px 0;
    background: var(--gray-light);
}

.intro-content {
    max-width: 800px;
    margin: 0 auto;
    text-align: center;
}

.intro-text {
    font-size: 1.2rem;
    line-height: 1.8;
    margin-bottom: 1.5rem;
    color: var(--gray-medium);
}

/* Section Styles */
.what-is-lasik,
.why-recovery,
.timeline-section,
.dos-donts,
.special-care,
.side-effects,
.recovery-tips,
.why-choose,
.final-thoughts {
    padding: 80px 0;
}

.what-is-lasik {
    background: var(--light-color);
}

.why-recovery {
    background: var(--gray-light);
}

.section-title {
    font-size: 2.5rem;
    font-weight: 700;
    text-align: center;
    margin-bottom: 3rem;
    color: var(--dark-color);
    position: relative;
}

.section-title::after {
    content: '';
    position: absolute;
    bottom: -10px;
    left: 50%;
    transform: translateX(-50%);
    width: 80px;
    height: 4px;
    background: var(--gradient-primary);
    border-radius: 2px;
}

.section-intro {
    font-size: 1.2rem;
    text-align: center;
    margin-bottom: 3rem;
    color: var(--gray-medium);
    max-width: 700px;
    margin-left: auto;
    margin-right: auto;
}

/* Content Grid */
.content-grid {
    display: grid;
    grid-template-columns: 1fr 1fr;
    gap: 4rem;
    align-items: center;
}

.content-text h3 {
    font-size: 1.5rem;
    font-weight: 600;
    color: var(--primary-color);
    margin: 2rem 0 1rem;
}

.feature-list,
.benefit-list {
    list-style: none;
    margin: 1.5rem 0;
}

.feature-list li,
.benefit-list li {
    padding: 0.5rem 0;
    font-size: 1.1rem;
}

.feature-list li strong {
    color: var(--secondary-color);
}

.section-img {
    width: 100%;
    height: auto;
    border-radius: var(--border-radius-lg);
    box-shadow: var(--shadow-medium);
}

/* Benefits Grid */
.benefits-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
    gap: 2rem;
    margin-top: 3rem;
}

.benefit-card {
    background: var(--light-color);
    padding: 2rem;
    border-radius: var(--border-radius-lg);
    text-align: center;
    box-shadow: var(--shadow-light);
    transition: var(--transition);
}

.benefit-card:hover {
    transform: translateY(-5px);
    box-shadow: var(--shadow-medium);
}

.benefit-icon {
    font-size: 3rem;
    margin-bottom: 1rem;
}

.benefit-card h4 {
    font-size: 1.3rem;
    font-weight: 600;
    color: var(--primary-color);
    margin-bottom: 1rem;
}

/* Timeline */
.timeline-section {
    background: var(--light-color);
}

.timeline {
    max-width: 800px;
    margin: 0 auto;
}

.timeline-item {
    display: flex;
    gap: 2rem;
    margin-bottom: 3rem;
    cursor: pointer;
    transition: var(--transition);
}

.timeline-item:hover {
    transform: translateX(10px);
}

.timeline-item.active .timeline-marker {
    background: var(--gradient-primary);
    color: var(--light-color);
    box-shadow: var(--shadow-medium);
}

.timeline-marker {
    flex-shrink: 0;
    width: 80px;
    height: 80px;
    border-radius: 50%;
    background: var(--gray-light);
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 1.5rem;
    transition: var(--transition);
}

.timeline-content {
    flex: 1;
    padding: 1rem 0;
}

.timeline-content h3 {
    font-size: 1.5rem;
    font-weight: 600;
    color: var(--primary-color);
    margin-bottom: 1rem;
}

.timeline-content ul {
    list-style: none;
}

.timeline-content li {
    padding: 0.5rem 0;
    position: relative;
    padding-left: 1.5rem;
}

.timeline-content li::before {
    content: '•';
    color: var(--secondary-color);
    font-weight: bold;
    position: absolute;
    left: 0;
}

/* Do's and Don'ts */
.dos-donts {
    background: var(--gray-light);
}

.dos-donts-grid {
    display: grid;
    grid-template-columns: 1fr 1fr;
    gap: 4rem;
}

.dos-title {
    font-size: 2rem;
    font-weight: 600;
    color: var(--primary-color);
    margin-bottom: 2rem;
    text-align: center;
}

.donts-title {
    font-size: 2rem;
    font-weight: 600;
    color: var(--secondary-color);
    margin-bottom: 2rem;
    text-align: center;
}

.do-item,
.dont-item {
    background: var(--light-color);
    padding: 1.5rem;
    border-radius: var(--border-radius);
    margin-bottom: 1.5rem;
    box-shadow: var(--shadow-light);
    transition: var(--transition);
}

.do-item {
    border-left: 4px solid var(--primary-color);
}

.dont-item {
    border-left: 4px solid var(--secondary-color);
}

.do-item:hover,
.dont-item:hover {
    transform: translateY(-2px);
    box-shadow: var(--shadow-medium);
}

.do-item h4,
.dont-item h4 {
    font-size: 1.2rem;
    font-weight: 600;
    margin-bottom: 0.5rem;
}

.do-item h4 {
    color: var(--primary-color);
}

.dont-item h4 {
    color: var(--secondary-color);
}

/* Special Care */
.special-care {
    background: var(--light-color);
}

.care-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(400px, 1fr));
    gap: 3rem;
}

.care-item {
    background: var(--gray-light);
    padding: 2.5rem;
    border-radius: var(--border-radius-lg);
    text-align: center;
}

.care-icon {
    font-size: 4rem;
    margin-bottom: 1.5rem;
}

.care-item h3 {
    font-size: 1.5rem;
    font-weight: 600;
    color: var(--primary-color);
    margin-bottom: 1.5rem;
}

.care-item ul {
    list-style: none;
    text-align: left;
    max-width: 400px;
    margin: 0 auto;
}

.care-item li {
    padding: 0.5rem 0;
    position: relative;
    padding-left: 1.5rem;
}

.care-item li::before {
    content: '✓';
    color: var(--secondary-color);
    font-weight: bold;
    position: absolute;
    left: 0;
}

/* Side Effects */
.side-effects {
    background: var(--gray-light);
}

.side-effects-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
    gap: 2rem;
    margin-bottom: 3rem;
}

.side-effect-item {
    background: var(--light-color);
    padding: 2rem;
    border-radius: var(--border-radius);
    text-align: center;
    box-shadow: var(--shadow-light);
}

.side-effect-icon {
    font-size: 2.5rem;
    margin-bottom: 1rem;
}

.side-effect-item h4 {
    font-size: 1.1rem;
    font-weight: 600;
    color: var(--dark-color);
}

.side-effects-note {
    text-align: center;
    font-size: 1.2rem;
    color: var(--primary-color);
    font-weight: 600;
}

/* Recovery Tips */
.recovery-tips {
    background: var(--light-color);
}

.tips-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
    gap: 2rem;
}

.tip-card {
    background: var(--gradient-secondary);
    color: var(--light-color);
    padding: 2rem;
    border-radius: var(--border-radius-lg);
    text-align: center;
    transition: var(--transition);
}

.tip-card:hover {
    transform: translateY(-5px);
    box-shadow: var(--shadow-heavy);
}

.tip-icon {
    font-size: 3rem;
    margin-bottom: 1rem;
}

.tip-card h4 {
    font-size: 1.3rem;
    font-weight: 600;
    margin-bottom: 1rem;
}

/* Why Choose */
.why-choose {
    background: var(--gray-light);
}

.choose-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
    gap: 2rem;
    margin-bottom: 3rem;
}

.choose-item {
    background: var(--light-color);
    padding: 2rem;
    border-radius: var(--border-radius-lg);
    text-align: center;
    box-shadow: var(--shadow-light);
    transition: var(--transition);
}

.choose-item:hover {
    transform: translateY(-5px);
    box-shadow: var(--shadow-medium);
}

.choose-icon {
    font-size: 3rem;
    margin-bottom: 1rem;
}

.choose-item h4 {
    font-size: 1.3rem;
    font-weight: 600;
    color: var(--primary-color);
    margin-bottom: 1rem;
}

.hospital-message {
    text-align: center;
    font-size: 1.3rem;
    color: var(--secondary-color);
    font-weight: 600;
    background: var(--light-color);
    padding: 2rem;
    border-radius: var(--border-radius-lg);
    box-shadow: var(--shadow-light);
}

/* Final Thoughts */
.final-thoughts {
    background: var(--gradient-primary);
    color: var(--light-color);
}

.final-content {
    text-align: center;
    max-width: 800px;
    margin: 0 auto;
}

.final-thoughts p {
    font-size: 1.2rem;
    line-height: 1.8;
    margin-bottom: 2rem;
    opacity: 0.95;
}

.cta-section {
    margin-top: 3rem;
    display: flex;
    gap: 1rem;
    justify-content: center;
    flex-wrap: wrap;
}

/* Footer */
.footer {
    background: var(--dark-color);
    color: var(--light-color);
    padding: 60px 0 20px;
}

.footer-content {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
    gap: 3rem;
    margin-bottom: 3rem;
}

.footer-section h4 {
    font-size: 1.3rem;
    font-weight: 600;
    margin-bottom: 1.5rem;
    color: var(--primary-color);
}

.footer-section ul {
    list-style: none;
}

.footer-section li {
    padding: 0.3rem 0;
    color: #cccccc;
}

.footer-section p {
    color: #cccccc;
    line-height: 1.6;
}

.footer-bottom {
    text-align: center;
    padding-top: 2rem;
    border-top: 1px solid #555;
    color: #999;
}

/* Responsive Design */
@media (max-width: 768px) {
    .hamburger {
        display: flex;
    }
    
    .nav-menu {
        display: none;
        position: absolute;
        top: 100%;
        left: 0;
        width: 100%;
        background: var(--light-color);
        flex-direction: column;
        padding: 1rem;
        box-shadow: var(--shadow-medium);
    }
    
    .nav-menu.active {
        display: flex;
    }
    
    .hero-content {
        grid-template-columns: 1fr;
        text-align: center;
    }
    
    .hero-title {
        font-size: 2.5rem;
    }
    
    .content-grid {
        grid-template-columns: 1fr;
        gap: 2rem;
    }
    
    .dos-donts-grid {
        grid-template-columns: 1fr;
        gap: 2rem;
    }
    
    .care-grid {
        grid-template-columns: 1fr;
    }
    
    .timeline-item {
        flex-direction: column;
        text-align: center;
    }
    
    .cta-section {
        flex-direction: column;
        align-items: center;
    }
    
    .btn {
        width: 100%;
        max-width: 300px;
    }
}

@media (max-width: 480px) {
    .container {
        padding: 0 15px;
    }
    
    .hero-title {
        font-size: 2rem;
    }
    
    .section-title {
        font-size: 2rem;
    }
    
    .hero {
        padding: 100px 0 60px;
    }
    
    .what-is-lasik,
    .why-recovery,
    .timeline-section,
    .dos-donts,
    .special-care,
    .side-effects,
    .recovery-tips,
    .why-choose,
    .final-thoughts {
        padding: 60px 0;
    }
}

/* Smooth Scrolling */
html {
    scroll-behavior: smooth;
}

/* Loading Animation */
@keyframes fadeInUp {
    from {
        opacity: 0;
        transform: translateY(30px);
    }
    to {
        opacity: 1;
        transform: translateY(0);
    }
}

.fade-in {
    animation: fadeInUp 0.6s ease-out;
}

/* Interactive Elements */
.interactive {
    cursor: pointer;
    transition: var(--transition);
}

.interactive:hover {
    transform: scale(1.05);
}

/* Custom Scrollbar */
::-webkit-scrollbar {
    width: 8px;
}

::-webkit-scrollbar-track {
    background: var(--gray-light);
}

::-webkit-scrollbar-thumb {
    background: var(--primary-color);
    border-radius: 4px;
}

::-webkit-scrollbar-thumb:hover {
    background: var(--secondary-color);
}

/* Cataract Page Specific Styles */

/* What is Cataract Section */
.what-is-cataract {
    background: var(--light-color);
    padding: 80px 0;
}

/* Technologies Section */
.technologies-section {
    background: var(--gray-light);
    padding: 80px 0;
}

.technology-grid {
    display: grid;
    gap: 3rem;
    margin-top: 3rem;
}

.tech-card {
    background: var(--light-color);
    padding: 2.5rem;
    border-radius: var(--border-radius-lg);
    box-shadow: var(--shadow-light);
    transition: var(--transition);
}

.tech-card:hover {
    transform: translateY(-5px);
    box-shadow: var(--shadow-medium);
}

.tech-icon {
    font-size: 3rem;
    margin-bottom: 1.5rem;
    text-align: center;
}

.tech-card h3 {
    font-size: 1.5rem;
    font-weight: 600;
    color: var(--primary-color);
    margin-bottom: 1.5rem;
}

.tech-features {
    list-style: none;
    margin-bottom: 2rem;
}

.tech-features li {
    padding: 0.5rem 0;
    position: relative;
    padding-left: 1.5rem;
}

.tech-features li::before {
    content: '•';
    color: var(--secondary-color);
    font-weight: bold;
    position: absolute;
    left: 0;
}

.tech-benefits h4 {
    font-size: 1.2rem;
    font-weight: 600;
    color: var(--dark-color);
    margin-bottom: 1rem;
}

.benefit-tags {
    display: flex;
    flex-wrap: wrap;
    gap: 0.5rem;
}

.benefit-tag {
    background: var(--gradient-primary);
    color: var(--light-color);
    padding: 0.5rem 1rem;
    border-radius: 20px;
    font-size: 0.9rem;
    font-weight: 500;
}

/* Lens Options Grid */
.lens-options {
    grid-column: 1 / -1;
}

.lens-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
    gap: 1.5rem;
    margin-top: 1.5rem;
}

.lens-item {
    background: var(--gradient-secondary);
    color: var(--light-color);
    padding: 1.5rem;
    border-radius: var(--border-radius);
    text-align: center;
}

.lens-item h4 {
    font-size: 1.2rem;
    font-weight: 600;
    margin-bottom: 0.5rem;
}

/* Benefits Showcase */
.benefits-section {
    background: var(--light-color);
    padding: 80px 0;
}

.benefits-showcase {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
    gap: 2rem;
    margin-top: 3rem;
}

.benefit-showcase-card {
    background: var(--gray-light);
    padding: 2rem;
    border-radius: var(--border-radius-lg);
    text-align: center;
    transition: var(--transition);
}

.benefit-showcase-card:hover {
    transform: translateY(-5px);
    box-shadow: var(--shadow-medium);
}

.benefit-showcase-icon {
    font-size: 3rem;
    margin-bottom: 1rem;
}

.benefit-showcase-card h4 {
    font-size: 1.2rem;
    font-weight: 600;
    color: var(--primary-color);
    margin-bottom: 0.5rem;
}

/* Recovery Timeline */
.recovery-timeline {
    background: var(--gray-light);
    padding: 80px 0;
}

.recovery-timeline-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
    gap: 2rem;
    margin-top: 3rem;
}

.recovery-phase {
    background: var(--light-color);
    padding: 2rem;
    border-radius: var(--border-radius-lg);
    box-shadow: var(--shadow-light);
    transition: var(--transition);
}

.recovery-phase:hover {
    transform: translateY(-3px);
    box-shadow: var(--shadow-medium);
}

.recovery-phase-header {
    display: flex;
    align-items: center;
    gap: 1rem;
    margin-bottom: 1.5rem;
}

.recovery-icon {
    font-size: 2.5rem;
    color: var(--primary-color);
}

.recovery-phase h3 {
    font-size: 1.3rem;
    font-weight: 600;
    color: var(--dark-color);
}

.recovery-list {
    list-style: none;
}

.recovery-list li {
    padding: 0.5rem 0;
    position: relative;
    padding-left: 1.5rem;
}

.recovery-list li::before {
    content: '✓';
    color: var(--secondary-color);
    font-weight: bold;
    position: absolute;
    left: 0;
}

/* Enhanced Do's and Don'ts */
.dos-donts-cataract {
    background: var(--light-color);
    padding: 80px 0;
}

.dos-donts-cataract .dos-donts-grid {
    display: grid;
    grid-template-columns: 1fr 1fr;
    gap: 4rem;
}

.dos-donts-cataract .do-item,
.dos-donts-cataract .dont-item {
    display: flex;
    align-items: flex-start;
    gap: 1rem;
    background: var(--gray-light);
    padding: 1.5rem;
    border-radius: var(--border-radius);
    margin-bottom: 1.5rem;
    transition: var(--transition);
}

.dos-donts-cataract .do-item:hover,
.dos-donts-cataract .dont-item:hover {
    transform: translateX(5px);
    box-shadow: var(--shadow-light);
}

.do-icon,
.dont-icon {
    font-size: 1.5rem;
    flex-shrink: 0;
    margin-top: 0.2rem;
}

.do-content h4,
.dont-content h4 {
    font-size: 1.1rem;
    font-weight: 600;
    margin-bottom: 0.5rem;
}

.do-content h4 {
    color: var(--primary-color);
}

.dont-content h4 {
    color: var(--secondary-color);
}

/* Why Choose Cataract */
.why-choose-cataract {
    background: var(--gray-light);
    padding: 80px 0;
}

/* Final Thoughts Cataract */
.final-thoughts-cataract {
    background: var(--gradient-primary);
    color: var(--light-color);
    padding: 80px 0;
}

.final-cta-message {
    margin-top: 2rem;
    text-align: center;
    font-size: 1.1rem;
}

/* Footer Navigation */
.footer-nav {
    margin-top: 1rem;
}

.footer-nav a {
    display: block;
    color: #cccccc;
    text-decoration: none;
    padding: 0.3rem 0;
    transition: var(--transition);
}

.footer-nav a:hover {
    color: var(--primary-color);
}

/* Responsive Design for Cataract Page */
@media (max-width: 768px) {
    .technology-grid {
        gap: 2rem;
    }
    
    .tech-card {
        padding: 2rem;
    }
    
    .lens-grid {
        grid-template-columns: 1fr;
    }
    
    .benefits-showcase {
        grid-template-columns: repeat(auto-fit, minmax(150px, 1fr));
        gap: 1.5rem;
    }
    
    .recovery-timeline-grid {
        grid-template-columns: 1fr;
    }
    
    .dos-donts-cataract .dos-donts-grid {
        grid-template-columns: 1fr;
        gap: 2rem;
    }
    
    .dos-donts-cataract .do-item,
    .dos-donts-cataract .dont-item {
        flex-direction: column;
        text-align: center;
    }
    
    .do-icon,
    .dont-icon {
        align-self: center;
        margin-top: 0;
    }
}

@media (max-width: 480px) {
    .tech-card {
        padding: 1.5rem;
    }
    
    .benefit-showcase-card {
        padding: 1.5rem;
    }
    
    .recovery-phase {
        padding: 1.5rem;
    }
    
    .recovery-phase-header {
        flex-direction: column;
        text-align: center;
        gap: 0.5rem;
    }
}

/* Additional Page Styles for Articles 3-6 */

/* Eye Check-ups After 40 Page */
.eye-health-decline {
    background: var(--gray-light);
    padding: 80px 0;
}

.conditions-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
    gap: 2rem;
    margin-top: 3rem;
}

.condition-card {
    background: var(--light-color);
    padding: 2rem;
    border-radius: var(--border-radius-lg);
    text-align: center;
    box-shadow: var(--shadow-light);
    transition: var(--transition);
}

.condition-card:hover {
    transform: translateY(-5px);
    box-shadow: var(--shadow-medium);
}

.condition-icon {
    font-size: 3rem;
    margin-bottom: 1rem;
}

.condition-card h3 {
    font-size: 1.3rem;
    font-weight: 600;
    color: var(--primary-color);
    margin-bottom: 1rem;
}

/* Importance Section */
.importance-section {
    background: var(--light-color);
    padding: 80px 0;
}

.importance-grid {
    display: grid;
    gap: 3rem;
    margin-top: 3rem;
}

.importance-item {
    display: flex;
    gap: 2rem;
    align-items: flex-start;
}

.importance-number {
    flex-shrink: 0;
    width: 60px;
    height: 60px;
    background: var(--gradient-primary);
    color: var(--light-color);
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 1.5rem;
    font-weight: bold;
}

.importance-content h3 {
    font-size: 1.4rem;
    font-weight: 600;
    color: var(--primary-color);
    margin-bottom: 1rem;
}

/* Warning Signs */
.warning-signs {
    background: var(--gray-light);
    padding: 80px 0;
}

.warning-signs-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
    gap: 1.5rem;
    margin-top: 3rem;
}

.warning-sign-item {
    background: var(--light-color);
    padding: 1.5rem;
    border-radius: var(--border-radius);
    text-align: center;
    border-left: 4px solid var(--secondary-color);
    transition: var(--transition);
}

.warning-sign-item:hover {
    transform: translateY(-3px);
    box-shadow: var(--shadow-light);
}

.warning-icon {
    font-size: 2rem;
    margin-bottom: 1rem;
}

.warning-cta {
    text-align: center;
    margin-top: 3rem;
    font-size: 1.2rem;
    color: var(--secondary-color);
}

/* Frequency Guidelines */
.frequency-guidelines {
    background: var(--light-color);
    padding: 80px 0;
}

.frequency-timeline {
    display: flex;
    justify-content: space-around;
    margin-top: 3rem;
    flex-wrap: wrap;
    gap: 2rem;
}

.frequency-item {
    text-align: center;
    flex: 1;
    min-width: 200px;
}

.frequency-age {
    background: var(--gradient-primary);
    color: var(--light-color);
    padding: 2rem;
    border-radius: var(--border-radius-lg);
    font-size: 1.5rem;
    font-weight: bold;
    margin-bottom: 1rem;
}

.frequency-schedule {
    background: var(--gradient-secondary);
    color: var(--light-color);
    padding: 1.5rem;
    border-radius: var(--border-radius);
    font-size: 1.2rem;
    font-weight: 600;
}

.frequency-note {
    text-align: center;
    margin-top: 3rem;
    font-size: 1.1rem;
    color: var(--primary-color);
}

/* Hospital Support */
.hospital-support {
    background: var(--gray-light);
    padding: 80px 0;
}

.support-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
    gap: 2rem;
    margin-top: 3rem;
}

.support-item {
    background: var(--light-color);
    padding: 2rem;
    border-radius: var(--border-radius-lg);
    text-align: center;
    transition: var(--transition);
}

.support-item:hover {
    transform: translateY(-5px);
    box-shadow: var(--shadow-medium);
}

.support-icon {
    font-size: 3rem;
    margin-bottom: 1rem;
}

.support-item h3 {
    font-size: 1.2rem;
    font-weight: 600;
    color: var(--primary-color);
    margin-bottom: 1rem;
}

/* Children's Eye Health Page Styles */
.why-matters {
    background: var(--gray-light);
    padding: 80px 0;
}

.matters-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
    gap: 2rem;
    margin-top: 3rem;
}

.matter-card {
    background: var(--light-color);
    padding: 2rem;
    border-radius: var(--border-radius-lg);
    text-align: center;
    box-shadow: var(--shadow-light);
    transition: var(--transition);
}

.matter-card:hover {
    transform: translateY(-5px);
    box-shadow: var(--shadow-medium);
}

.matter-icon {
    font-size: 3rem;
    margin-bottom: 1rem;
}

.matter-card h3 {
    font-size: 1.3rem;
    font-weight: 600;
    color: var(--primary-color);
    margin-bottom: 1rem;
}

/* Common Problems */
.common-problems {
    background: var(--light-color);
    padding: 80px 0;
}

.problems-list {
    margin-top: 3rem;
}

.problem-item {
    display: flex;
    gap: 2rem;
    align-items: flex-start;
    margin-bottom: 3rem;
    background: var(--gray-light);
    padding: 2rem;
    border-radius: var(--border-radius-lg);
}

.problem-number {
    flex-shrink: 0;
    width: 60px;
    height: 60px;
    background: var(--gradient-secondary);
    color: var(--light-color);
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 1.5rem;
    font-weight: bold;
}

.problem-content h3 {
    font-size: 1.4rem;
    font-weight: 600;
    color: var(--primary-color);
    margin-bottom: 1.5rem;
}

.problem-details {
    display: grid;
    gap: 1rem;
}

.problem-detail {
    background: var(--light-color);
    padding: 1rem;
    border-radius: var(--border-radius);
    border-left: 3px solid var(--primary-color);
}

/* Early Signs */
.early-signs {
    background: var(--gray-light);
    padding: 80px 0;
}

.signs-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
    gap: 1.5rem;
    margin-top: 3rem;
}

.sign-item {
    background: var(--light-color);
    padding: 1.5rem;
    border-radius: var(--border-radius);
    text-align: center;
    border-top: 4px solid var(--secondary-color);
    transition: var(--transition);
}

.sign-item:hover {
    transform: translateY(-3px);
    box-shadow: var(--shadow-light);
}

.sign-icon {
    font-size: 2.5rem;
    margin-bottom: 1rem;
}

.sign-item h4 {
    font-size: 1.1rem;
    font-weight: 600;
    color: var(--dark-color);
}

.signs-cta {
    text-align: center;
    margin-top: 3rem;
    font-size: 1.2rem;
    color: var(--secondary-color);
}

/* Early Screening */
.early-screening {
    background: var(--light-color);
    padding: 80px 0;
}

.screening-benefits {
    margin-top: 3rem;
}

.screening-benefit {
    display: flex;
    gap: 2rem;
    align-items: flex-start;
    margin-bottom: 2.5rem;
}

.screening-number {
    flex-shrink: 0;
    width: 50px;
    height: 50px;
    background: var(--gradient-primary);
    color: var(--light-color);
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 1.2rem;
    font-weight: bold;
}

.screening-content h3 {
    font-size: 1.3rem;
    font-weight: 600;
    color: var(--primary-color);
    margin-bottom: 0.5rem;
}

/* Parent Tips */
.parent-tips {
    background: var(--gray-light);
    padding: 80px 0;
}

.tips-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
    gap: 2rem;
    margin-top: 3rem;
}

.tip-card {
    background: var(--light-color);
    padding: 2rem;
    border-radius: var(--border-radius-lg);
    text-align: center;
    transition: var(--transition);
}

.tip-card:hover {
    transform: translateY(-5px);
    box-shadow: var(--shadow-medium);
}

.tip-icon {
    font-size: 3rem;
    margin-bottom: 1rem;
}

.tip-card h4 {
    font-size: 1.2rem;
    font-weight: 600;
    color: var(--primary-color);
    margin-bottom: 1rem;
}

/* Vision Correction Comparison Page */
.comparison-overview {
    background: var(--gray-light);
    padding: 80px 0;
}

.comparison-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(350px, 1fr));
    gap: 2rem;
    margin-top: 3rem;
}

.comparison-card {
    background: var(--light-color);
    border-radius: var(--border-radius-lg);
    box-shadow: var(--shadow-light);
    transition: var(--transition);
    overflow: hidden;
}

.comparison-card:hover {
    transform: translateY(-5px);
    box-shadow: var(--shadow-medium);
}

.comparison-card.featured {
    border: 3px solid var(--primary-color);
}

.comparison-card.premium {
    border: 3px solid var(--secondary-color);
}

.comparison-header {
    padding: 2rem;
    text-align: center;
    background: var(--gray-light);
}

.comparison-icon {
    font-size: 3rem;
    margin-bottom: 1rem;
}

.comparison-header h3 {
    font-size: 1.5rem;
    font-weight: 600;
    color: var(--primary-color);
    margin-bottom: 0.5rem;
}

.comparison-subtitle {
    color: var(--gray-medium);
    font-style: italic;
}

.comparison-content {
    padding: 2rem;
}

.pros-cons {
    margin: 2rem 0;
}

.pros, .cons {
    margin-bottom: 1.5rem;
}

.pros h4 {
    color: var(--primary-color);
    margin-bottom: 1rem;
}

.cons h4 {
    color: var(--secondary-color);
    margin-bottom: 1rem;
}

.pros ul, .cons ul {
    list-style: none;
    margin-left: 1rem;
}

.pros li, .cons li {
    position: relative;
    padding-left: 1rem;
    margin-bottom: 0.5rem;
}

.pros li::before {
    content: '•';
    color: var(--primary-color);
    font-weight: bold;
    position: absolute;
    left: 0;
}

.cons li::before {
    content: '•';
    color: var(--secondary-color);
    font-weight: bold;
    position: absolute;
    left: 0;
}

.best-for {
    background: var(--gradient-primary);
    color: var(--light-color);
    padding: 1.5rem;
    border-radius: var(--border-radius);
    margin-top: 1.5rem;
}

.best-for h4 {
    margin-bottom: 0.5rem;
}

/* Cost Comparison */
.cost-comparison {
    background: var(--light-color);
    padding: 80px 0;
}

.cost-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
    gap: 2rem;
    margin-top: 3rem;
}

.cost-item {
    background: var(--gray-light);
    padding: 2rem;
    border-radius: var(--border-radius-lg);
    text-align: center;
    transition: var(--transition);
}

.cost-item:hover {
    transform: translateY(-5px);
    box-shadow: var(--shadow-medium);
}

.cost-item.premium {
    background: var(--gradient-secondary);
    color: var(--light-color);
}

.cost-icon {
    font-size: 3rem;
    margin-bottom: 1rem;
}

.cost-item h3 {
    font-size: 1.3rem;
    font-weight: 600;
    margin-bottom: 1rem;
}

.cost-amount {
    font-size: 2rem;
    font-weight: bold;
    color: var(--primary-color);
    margin-bottom: 0.5rem;
}

.cost-item.premium .cost-amount {
    color: var(--light-color);
}

.cost-period {
    font-size: 1.1rem;
    font-weight: 600;
    margin-bottom: 1rem;
}

/* Lifestyle Impact */
.lifestyle-impact {
    background: var(--gray-light);
    padding: 80px 0;
}

.lifestyle-comparison {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
    gap: 2rem;
    margin-top: 3rem;
}

.lifestyle-item {
    background: var(--light-color);
    padding: 2rem;
    border-radius: var(--border-radius-lg);
    text-align: center;
}

.lifestyle-item h3 {
    font-size: 1.4rem;
    font-weight: 600;
    color: var(--primary-color);
    margin-bottom: 1rem;
}

/* Safety Grid */
.risks-safety {
    background: var(--light-color);
    padding: 80px 0;
}

.safety-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
    gap: 2rem;
    margin-top: 3rem;
}

.safety-item {
    background: var(--gray-light);
    padding: 2rem;
    border-radius: var(--border-radius-lg);
    text-align: center;
}

.safety-icon {
    font-size: 3rem;
    margin-bottom: 1rem;
}

.safety-item h3 {
    font-size: 1.3rem;
    font-weight: 600;
    color: var(--primary-color);
    margin-bottom: 1rem;
}

.safety-level {
    padding: 0.5rem 1rem;
    border-radius: 20px;
    color: var(--light-color);
    font-weight: 600;
    margin-top: 1rem;
}

.safety-level.low {
    background: var(--secondary-color);
}

.safety-level.medium {
    background: var(--primary-color);
}

.safety-level.high {
    background: #28a745;
}

/* Decision Guide */
.decision-guide {
    background: var(--gray-light);
    padding: 80px 0;
}

.decision-cards {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
    gap: 2rem;
    margin-top: 3rem;
}

.decision-card {
    background: var(--light-color);
    padding: 2rem;
    border-radius: var(--border-radius-lg);
    border-left: 5px solid var(--primary-color);
    transition: var(--transition);
}

.decision-card:hover {
    transform: translateX(5px);
    box-shadow: var(--shadow-light);
}

.decision-card h3 {
    font-size: 1.3rem;
    font-weight: 600;
    color: var(--primary-color);
    margin-bottom: 1rem;
}

.decision-note {
    text-align: center;
    margin-top: 3rem;
    font-size: 1.2rem;
    color: var(--secondary-color);
}

/* Hospital Services */
.hospital-services {
    background: var(--light-color);
    padding: 80px 0;
}

.services-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
    gap: 2rem;
    margin-top: 3rem;
}

.service-item {
    background: var(--gray-light);
    padding: 2rem;
    border-radius: var(--border-radius-lg);
    text-align: center;
    transition: var(--transition);
}

.service-item:hover {
    transform: translateY(-5px);
    box-shadow: var(--shadow-medium);
}

.service-icon {
    font-size: 3rem;
    margin-bottom: 1rem;
}

.service-item h3 {
    font-size: 1.2rem;
    font-weight: 600;
    color: var(--primary-color);
    margin-bottom: 1rem;
}

/* Digital Eye Strain Page Styles */
.understanding-strain {
    background: var(--gray-light);
    padding: 80px 0;
}

.strain-causes {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
    gap: 2rem;
    margin-top: 3rem;
}

.cause-item {
    background: var(--light-color);
    padding: 1.5rem;
    border-radius: var(--border-radius);
    text-align: center;
    border-top: 4px solid var(--primary-color);
}

.cause-icon {
    font-size: 2.5rem;
    margin-bottom: 1rem;
}

.cause-item h3 {
    font-size: 1.2rem;
    font-weight: 600;
    color: var(--primary-color);
    margin-bottom: 1rem;
}

.strain-warning {
    text-align: center;
    margin-top: 3rem;
    font-size: 1.2rem;
    color: var(--secondary-color);
}

/* Blue Light Section */
.blue-light-section {
    background: var(--light-color);
    padding: 80px 0;
}

.blue-light-content {
    display: grid;
    grid-template-columns: 1fr 1fr;
    gap: 3rem;
    margin-top: 3rem;
}

.effects-grid {
    display: grid;
    gap: 1.5rem;
}

.effect-item {
    display: flex;
    align-items: center;
    gap: 1rem;
    background: var(--gray-light);
    padding: 1rem;
    border-radius: var(--border-radius);
}

.effect-icon {
    font-size: 1.5rem;
}

.prevention-tips-box {
    background: var(--gradient-primary);
    color: var(--light-color);
    padding: 2rem;
    border-radius: var(--border-radius-lg);
}

.prevention-tips-box h3 {
    margin-bottom: 1.5rem;
}

.prevention-tips-box ul {
    list-style: none;
}

.prevention-tips-box li {
    position: relative;
    padding-left: 1.5rem;
    margin-bottom: 1rem;
}

.prevention-tips-box li::before {
    content: '✓';
    position: absolute;
    left: 0;
    color: var(--light-color);
    font-weight: bold;
}

/* 20-20-20 Rule */
.twenty-rule {
    background: var(--gray-light);
    padding: 80px 0;
}

.rule-explanation {
    max-width: 800px;
    margin: 3rem auto 0;
}

.rule-visual {
    display: flex;
    justify-content: center;
    align-items: center;
    gap: 2rem;
    margin-bottom: 3rem;
    flex-wrap: wrap;
}

.rule-step {
    text-align: center;
}

.rule-number {
    width: 80px;
    height: 80px;
    background: var(--gradient-primary);
    color: var(--light-color);
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 2rem;
    font-weight: bold;
    margin-bottom: 1rem;
}

.rule-arrow {
    font-size: 2rem;
    color: var(--primary-color);
}

.rule-description {
    text-align: center;
}

.rule-description p:first-child {
    font-size: 1.3rem;
    font-weight: 600;
    color: var(--primary-color);
    margin-bottom: 1rem;
}

/* Screen Breaks */
.screen-breaks {
    background: var(--light-color);
    padding: 80px 0;
}

.breaks-guidelines {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
    gap: 2rem;
    margin-top: 3rem;
}

.break-item {
    display: flex;
    align-items: center;
    gap: 1.5rem;
    background: var(--gray-light);
    padding: 2rem;
    border-radius: var(--border-radius-lg);
}

.break-icon {
    font-size: 3rem;
    color: var(--primary-color);
}

.break-item h3 {
    font-size: 1.2rem;
    font-weight: 600;
    color: var(--dark-color);
}

/* Ergonomics */
.ergonomics-section {
    background: var(--gray-light);
    padding: 80px 0;
}

.ergonomics-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
    gap: 2rem;
    margin-top: 3rem;
}

.ergonomic-tip {
    background: var(--light-color);
    padding: 2rem;
    border-radius: var(--border-radius-lg);
    text-align: center;
    transition: var(--transition);
}

.ergonomic-tip:hover {
    transform: translateY(-5px);
    box-shadow: var(--shadow-medium);
}

.ergonomic-icon {
    font-size: 3rem;
    margin-bottom: 1rem;
}

.ergonomic-tip h3 {
    font-size: 1.2rem;
    font-weight: 600;
    color: var(--primary-color);
    margin-bottom: 1rem;
}

/* Eye Exercises */
.eye-exercises {
    background: var(--light-color);
    padding: 80px 0;
}

.exercises-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
    gap: 2rem;
    margin-top: 3rem;
}

.exercise-card {
    background: var(--gradient-secondary);
    color: var(--light-color);
    padding: 2rem;
    border-radius: var(--border-radius-lg);
    text-align: center;
    transition: var(--transition);
}

.exercise-card:hover {
    transform: translateY(-5px);
    box-shadow: var(--shadow-heavy);
}

.exercise-icon {
    font-size: 3rem;
    margin-bottom: 1rem;
}

.exercise-card h3 {
    font-size: 1.3rem;
    font-weight: 600;
    margin-bottom: 1rem;
}

.exercises-note {
    text-align: center;
    margin-top: 3rem;
    font-size: 1.2rem;
    color: var(--primary-color);
}

/* Nutrition Section */
.nutrition-section {
    background: var(--gray-light);
    padding: 80px 0;
}

.nutrition-content {
    display: grid;
    grid-template-columns: 1fr 2fr;
    gap: 3rem;
    margin-top: 3rem;
}

.hydration-tip {
    background: var(--light-color);
    padding: 2rem;
    border-radius: var(--border-radius-lg);
    text-align: center;
}

.hydration-icon {
    font-size: 4rem;
    margin-bottom: 1rem;
}

.hydration-tip h3 {
    font-size: 1.3rem;
    font-weight: 600;
    color: var(--primary-color);
    margin-bottom: 1rem;
}

.nutrition-foods {
    background: var(--light-color);
    padding: 2rem;
    border-radius: var(--border-radius-lg);
}

.nutrition-foods h3 {
    font-size: 1.3rem;
    font-weight: 600;
    color: var(--primary-color);
    margin-bottom: 1.5rem;
}

.foods-grid {
    display: grid;
    gap: 1.5rem;
}

.food-category {
    background: var(--gray-light);
    padding: 1.5rem;
    border-radius: var(--border-radius);
    border-left: 4px solid var(--secondary-color);
}

.food-category h4 {
    font-size: 1.1rem;
    font-weight: 600;
    color: var(--dark-color);
    margin-bottom: 0.5rem;
}

/* Eye Drops Section */
.eye-drops-section {
    background: var(--light-color);
    padding: 80px 0;
}

.eye-drops-content {
    max-width: 800px;
    margin: 0 auto;
    text-align: center;
}

.warning-box {
    display: flex;
    align-items: center;
    gap: 1rem;
    background: #fff3cd;
    border: 1px solid #ffeaa7;
    color: #856404;
    padding: 1.5rem;
    border-radius: var(--border-radius);
    margin-top: 2rem;
}

.warning-icon {
    font-size: 1.5rem;
    color: #f39c12;
}

/* Doctor Consultation */
.doctor-consultation {
    background: var(--gray-light);
    padding: 80px 0;
}

.symptoms-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
    gap: 1.5rem;
    margin-top: 3rem;
}

.symptom-item {
    background: var(--light-color);
    padding: 1.5rem;
    border-radius: var(--border-radius);
    text-align: center;
    border-top: 4px solid var(--secondary-color);
}

.symptom-icon {
    font-size: 2rem;
    margin-bottom: 1rem;
}

.doctor-cta {
    text-align: center;
    margin-top: 3rem;
    font-size: 1.2rem;
    color: var(--primary-color);
}

/* Children Screens */
.children-screens {
    background: var(--light-color);
    padding: 80px 0;
}

.children-tips {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
    gap: 2rem;
    margin-top: 3rem;
}

.children-tip {
    background: var(--gradient-primary);
    color: var(--light-color);
    padding: 2rem;
    border-radius: var(--border-radius-lg);
    text-align: center;
    transition: var(--transition);
}

.children-tip:hover {
    transform: translateY(-5px);
    box-shadow: var(--shadow-heavy);
}

.children-tip h3 {
    font-size: 1.3rem;
    font-weight: 600;
    margin-bottom: 1rem;
}

/* Responsive Design for New Pages */
@media (max-width: 768px) {
    .conditions-grid,
    .matters-grid,
    .signs-grid,
    .comparison-grid,
    .cost-grid,
    .strain-causes,
    .ergonomics-grid,
    .exercises-grid {
        grid-template-columns: 1fr;
        gap: 1.5rem;
    }
    
    .importance-item,
    .problem-item,
    .screening-benefit {
        flex-direction: column;
        text-align: center;
    }
    
    .importance-number,
    .problem-number,
    .screening-number {
        align-self: center;
    }
    
    .blue-light-content,
    .nutrition-content {
        grid-template-columns: 1fr;
        gap: 2rem;
    }
    
    .rule-visual {
        flex-direction: column;
        gap: 1rem;
    }
    
    .rule-arrow {
        transform: rotate(90deg);
    }
    
    .frequency-timeline {
        flex-direction: column;
        align-items: center;
    }
    
    .lifestyle-comparison {
        grid-template-columns: 1fr;
    }
    
    .break-item {
        flex-direction: column;
        text-align: center;
    }
}

@media (max-width: 480px) {
    .comparison-card,
    .problem-item,
    .matter-card,
    .condition-card {
        padding: 1.5rem;
    }
    
    .rule-number {
        width: 60px;
        height: 60px;
        font-size: 1.5rem;
    }
    
    .frequency-age,
    .frequency-schedule {
        padding: 1.5rem;
    }
}
</style>
    
   <main>
    <!-- Hero Section -->
    <section class="hero" style="background:#03c0b4; padding:60px 0; color:#fff;">
        <div class="container">
            <div class="hero-content" style="display:flex; align-items:center; justify-content:space-between; flex-wrap:wrap;">
                
                <!-- Hero Text -->
                <div class="hero-text" style="max-width:600px;">
                    <h1 class="hero-title" style="font-size:36px; font-weight:700; margin-bottom:20px; color:#fff;">
                        Cataract Surgery in Bathinda
                    </h1>
                    <p class="hero-subtitle" style="font-size:18px; line-height:1.7; margin-bottom:30px; color:#f1f1f1;">
                        Latest Technology & Complete Recovery Guide. Cataract surgery is one of the most trusted and life-changing eye procedures performed worldwide. At Brar Eye Hospital, Bathinda, we specialize in modern cataract solutions using the latest technology, ensuring crystal-clear vision, quick healing, and maximum comfort.
                    </p>
                    
                    <!-- Hero Buttons -->
                    <div class="hero-buttons" style="display:flex; gap:15px; flex-wrap:wrap;">
                        
                        <!-- Scroll to Technology -->
                        <button class="btn btn-primary" 
                            style="background:#ff6b00; color:#fff; padding:14px 26px; border:none; border-radius:8px; font-size:16px; font-weight:bold; cursor:pointer;"
                            onclick="scrollToSection('technology')">
                            Latest Technology
                        </button>
                        
                        <!-- Book Consultation -->
                        <a href="contact-brar-eye-hospital-bathinda.php" 
                           style="background:#fff; color:#2a3f92; padding:14px 26px; border-radius:8px; font-size:16px; font-weight:bold; text-decoration:none;">
                           Book Consultation
                        </a>
                        
                        <!-- Call Now -->
                        <a href="tel:7218272182" 
                           style="background:#28a745; color:#fff; padding:14px 26px; border-radius:8px; font-size:16px; font-weight:bold; text-decoration:none;">
                           Call Now: 72182-72182
                        </a>
                    </div>
                </div>
                
                <!-- Hero Image -->
                <div class="hero-image" style="flex:1; text-align:center; margin-top:20px;">
                    <img src="blogs images/cataract-hero.webp" alt="Cataract Surgery" class="hero-img" 
                         style="max-width:100%; border-radius:10px;">
                </div>
            </div>
        </div>
    </section>

    <!-- Introduction -->
    <section class="intro" id="overview">
        <div class="container">
            <div class="intro-content">
                <p class="intro-text">Millions of people each year regain their vision through this simple yet advanced treatment. If you are considering cataract surgery or simply want to know more about the latest techniques and lens options, this guide will take you step by step through the procedure, recovery, and benefits.</p>
            </div>
        </div>
    </section>

    <!-- What is Cataract Surgery -->
    <section class="what-is-cataract">
        <div class="container">
            <div class="section-content">
                <h2 class="section-title">What is Cataract Surgery?</h2>
                <div class="content-grid">
                    <div class="content-text">
                        <p>A cataract is the clouding of the eye's natural lens, which blocks light from focusing properly on the retina. This leads to blurry or hazy vision, difficulty in driving at night, glare from lights, and sometimes even double vision.</p>
                        
                        <p><strong>Cataract surgery involves removing this cloudy lens and replacing it with a clear artificial intraocular lens (IOL).</strong> The procedure is safe, effective, and permanent—restoring not just sight but quality of life.</p>
                        
                        <h3>Common Cataract Symptoms:</h3>
                        <ul class="feature-list">
                            <li><strong>Blurry or hazy vision</strong></li>
                            <li><strong>Difficulty driving at night</strong></li>
                            <li><strong>Glare from lights</strong></li>
                            <li><strong>Double vision</strong></li>
                            <li><strong>Colors appearing faded</strong></li>
                        </ul>
                    </div>
                    <div class="content-image">
                        <img src="blogs images/cataract-procedure.webp" alt="Cataract Surgery Procedure" class="section-img">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Latest Technologies -->
    <section class="technologies-section" id="technology">
        <div class="container">
            <h2 class="section-title">Latest Technologies in Cataract Surgery</h2>
            <p class="section-intro">At Brar Eye Hospital, we use cutting-edge technology to ensure the best outcomes for our patients.</p>
            
            <div class="technology-grid">
                <!-- Phacoemulsification -->
                <div class="tech-card">
                    <h3>1. Phacoemulsification (Phaco Surgery)</h3>
                    <ul class="tech-features">
                        <li>Uses ultrasound energy to break the cataract into tiny fragments</li>
                        <li>Fragments are removed through a micro-incision</li>
                        <li>A foldable intraocular lens is inserted without stitches</li>
                    </ul>
                    <div class="tech-benefits">
                        <h4>Key Benefits:</h4>
                        <div class="benefit-tags">
                            <span class="benefit-tag">No stitches required</span>
                            <span class="benefit-tag">Faster recovery</span>
                            <span class="benefit-tag">Clear vision in few days</span>
                        </div>
                    </div>
                </div>

                <!-- Femto Laser -->
                <div class="tech-card">
                    <h3>2. Femto Laser-Assisted Cataract Surgery (FLACS)</h3>
                    <ul class="tech-features">
                        <li>Uses a femtosecond laser for bladeless and precise incisions</li>
                        <li>Ensures maximum accuracy in lens removal and replacement</li>
                        <li>Especially beneficial for patients with advanced or complex cataracts</li>
                    </ul>
                    <div class="tech-benefits">
                        <h4>Key Benefits:</h4>
                        <div class="benefit-tags">
                            <span class="benefit-tag">Bladeless & painless</span>
                            <span class="benefit-tag">Higher safety and precision</span>
                            <span class="benefit-tag">Better complex case results</span>
                        </div>
                    </div>
                </div>

                <!-- Advanced Lens Options -->
                <div class="tech-card lens-options">
                    <h3>3. Advanced Lens Options</h3>
                    <p>Every patient has different vision needs. We provide a range of premium intraocular lenses (IOLs):</p>
                    
                    <div class="lens-grid">
                        <div class="lens-item">
                            <h4 style="color:white;">Monofocal Lenses</h4>
                            <p style="color:white;">Best for clear distance vision</p>
                        </div>
                        <div class="lens-item">
                            <h4 style="color:white;">Multifocal Lenses</h4>
                            <p style="color:white;">Sharp vision at near, intermediate, and distance</p>
                        </div>
                        <div class="lens-item">
                            <h4 style="color:white;">Toric Lenses</h4>
                            <p style="color:white;">Corrects astigmatism along with cataract removal</p>
                        </div>
                        <div class="lens-item">
                            <h4 style="color:white;">EDOF Lenses</h4>
                            <p style="color:white;">Wider range of clear vision with fewer visual disturbances</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Benefits -->
    <section class="benefits-section">
        <div class="container">
            <h2 class="section-title">Benefits of Modern Cataract Surgery</h2>
            <div class="benefits-showcase">
                <div class="benefit-showcase-card">
                    <h4>Quick & Painless</h4>
                    <p>Highly effective procedure with minimal discomfort</p>
                </div>
                <div class="benefit-showcase-card">
                    <h4>Short Healing Time</h4>
                    <p>Return to daily activities within days</p>
                </div>
                <div class="benefit-showcase-card">
                    <h4>Reduced Glasses Dependence</h4>
                    <p>Significant reduction in need for glasses</p>
                </div>
                <div class="benefit-showcase-card">
                    <h4>Safer Methods</h4>
                    <p>Advanced technology ensures better safety</p>
                </div>
                <div class="benefit-showcase-card">
                    <h4>Better Quality of Life</h4>
                    <p>Improved independence and confidence</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Recovery Timeline -->
    <section class="recovery-timeline" id="recovery">
        <div class="container">
            <h2 class="section-title">Recovery After Cataract Surgery</h2>
            <p class="section-intro">Recovery is smooth and quick if post-surgery instructions are followed carefully.</p>
            
            <div class="recovery-timeline-grid">
                <div class="recovery-phase">
                    <div class="recovery-phase-header">
                        <h3>First 24–48 Hours</h3>
                    </div>
                    <ul class="recovery-list">
                        <li>Slight discomfort, mild watering, or itching may occur</li>
                        <li>Use prescribed eye drops regularly</li>
                        <li>Avoid touching or rubbing the eye</li>
                    </ul>
                </div>

                <div class="recovery-phase">
                    <div class="recovery-phase-header">
                        <h3>First Week</h3>
                    </div>
                    <ul class="recovery-list">
                        <li>Wear protective glasses while outdoors</li>
                        <li>Avoid bending, heavy lifting, or strenuous exercise</li>
                        <li>Keep eyes away from water, soap, and dust</li>
                    </ul>
                </div>

                <div class="recovery-phase">
                    <div class="recovery-phase-header">
                        <h3>First Month</h3>
                    </div>
                    <ul class="recovery-list">
                        <li>Vision becomes clearer and stable</li>
                        <li>Regular follow-up visits at Brar Eye Hospital help monitor healing</li>
                        <li>Most patients return to normal activities</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <!-- Do's and Don'ts -->
    <section class="dos-donts-cataract" id="dos-donts">
        <div class="container">
            <h2 class="section-title">Do's and Don'ts After Cataract Surgery</h2>
            <div class="dos-donts-grid">
                <!-- Do's Section -->
                <div class="dos-section">
                    <h3 class="dos-title">Do's</h3>
                    <div class="dos-list">
                        <div class="do-item">
                            <div class="do-content">
                                <h4>Use Prescribed Eye Drops</h4>
                                <p>Follow the schedule religiously for proper healing</p>
                            </div>
                        </div>
                        <div class="do-item">
                            <div class="do-content">
                                <h4>Rest Your Eyes</h4>
                                <p>Avoid strain and get adequate rest</p>
                            </div>
                        </div>
                        <div class="do-item">
                            <div class="do-content">
                                <h4>Wear Sunglasses</h4>
                                <p>Protect from bright light and dust outdoors</p>
                            </div>
                        </div>
                        <div class="do-item">
                            <div class="do-content">
                                <h4>Attend Follow-ups</h4>
                                <p>Keep all scheduled appointments</p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Don'ts Section -->
                <div class="donts-section">
                    <h3 class="donts-title">Don'ts</h3>
                    <div class="donts-list">
                        <div class="dont-item">
                            <div class="dont-content">
                                <h4>Don't Rub Your Eye</h4>
                                <p>Avoid touching or pressing the operated eye</p>
                            </div>
                        </div>
                        <div class="dont-item">
                            <div class="dont-content">
                                <h4>Don't Expose to Water</h4>
                                <p>Avoid swimming and direct shower spray</p>
                            </div>
                        </div>
                        <div class="dont-item">
                            <div class="dont-content">
                                <h4>Don't Skip Medications</h4>
                                <p>Complete the full course of prescribed medicines</p>
                            </div>
                        </div>
                        <div class="dont-item">
                            <div class="dont-content">
                                <h4>Don't Drive Immediately</h4>
                                <p>Wait for doctor's approval before driving</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Why Choose Brar Eye Hospital -->
    <section class="why-choose-cataract" id="contact">
        <div class="container">
            <h2 class="section-title">Why Choose Brar Eye Hospital for Cataract Surgery?</h2>
            <p class="section-intro">At Brar Eye Hospital, we believe cataract surgery is not just about removing a cloudy lens but about restoring life's clarity and confidence.</p>
            
            <div class="choose-grid">
                <div class="choose-item">
                    <h4>Cutting-Edge Technology</h4>
                    <p>Phacoemulsification & Femto Laser (FLACS)</p>
                </div>
                <div class="choose-item">
                    <h4>Customized Lens Options</h4>
                    <p>Monofocal, Multifocal, Toric & EDOF lenses</p>
                </div>
                <div class="choose-item">
                    <h4>Experienced Surgeons</h4>
                    <p>Specialists trained in advanced cataract techniques</p>
                </div>
                <div class="choose-item">
                    <h4>Personalized Care</h4>
                    <p>From diagnosis, surgery, to complete recovery</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Final Thoughts Cataract -->
    <section class="final-thoughts-cataract" style="background:#f9fbff; padding:50px 0;">
        <div class="container" style="text-align:center; max-width:850px; margin:auto;">
            <h2 class="section-title" style="color:#2a3f92; font-size:28px; margin-bottom:20px;">Final Thoughts</h2>
            <div class="final-content" style="font-size:18px; line-height:1.7; color:#333;">
                <p>Modern cataract surgery is safe, quick, and life-changing. With advanced technology and premium lens options, you don't just regain vision—you regain freedom, independence, and confidence.</p>
                
                <p>At <strong>Brar Eye Hospital, Bathinda</strong>, we combine expertise with innovation to ensure every patient receives world-class eye care.</p>
                
                <div class="cta-section" style="margin-top:25px; display:flex; justify-content:center; gap:15px; flex-wrap:wrap;">
                    <!-- Contact Form Button -->
                    <a href="contact-brar-eye-hospital-bathinda.php" class="btn btn-primary btn-large" 
                       style="background:#2a3f92; color:#fff; padding:14px 28px; border-radius:8px; text-decoration:none; font-size:18px; font-weight:bold;">
                       Book Consultation
                    </a>
                    
                    <!-- Call Now Button -->
                    <a href="tel:7218272182" class="btn btn-secondary btn-large" 
                       style="background:#ff6b00; color:#fff; padding:14px 28px; border-radius:8px; text-decoration:none; font-size:18px; font-weight:bold;">
                       Call Now: 72182-72182
                    </a>
                </div>
                
                <div class="final-cta-message" style="margin-top:25px; background:#fff; padding:20px; border-radius:8px; box-shadow:0 4px 12px rgba(0,0,0,0.08);">
                    <p style="font-size:17px; color:#222; margin:0;">
                        <strong>If you or your loved one is experiencing blurred or cloudy vision, book a consultation today and explore the best cataract treatment tailored for your eyes.</strong>
                    </p>
                </div>
            </div>
        </div>
    </section>
</main>

    
    

    <script>
        // LASIK Recovery Guide JavaScript
document.addEventListener('DOMContentLoaded', function() {
    // Mobile Navigation Toggle
    const hamburger = document.getElementById('hamburger');
    const navMenu = document.getElementById('navMenu');
    
    if (hamburger && navMenu) {
        hamburger.addEventListener('click', function() {
            navMenu.classList.toggle('active');
            hamburger.classList.toggle('active');
        });
        
        // Close mobile menu when clicking on nav links
        const navLinks = navMenu.querySelectorAll('a');
        navLinks.forEach(link => {
            link.addEventListener('click', () => {
                navMenu.classList.remove('active');
                hamburger.classList.remove('active');
            });
        });
    }
    
    // Smooth scrolling for navigation links
    const navLinks = document.querySelectorAll('a[href^="#"]');
    navLinks.forEach(link => {
        link.addEventListener('click', function(e) {
            e.preventDefault();
            const targetId = this.getAttribute('href').substring(1);
            const targetElement = document.getElementById(targetId);
            
            if (targetElement) {
                const offsetTop = targetElement.offsetTop - 80; // Account for fixed header
                window.scrollTo({
                    top: offsetTop,
                    behavior: 'smooth'
                });
            }
        });
    });
    
    // Header background change on scroll
    const header = document.querySelector('.header');
    window.addEventListener('scroll', function() {
        if (window.scrollY > 100) {
            header.style.background = 'rgba(255, 255, 255, 0.95)';
            header.style.backdropFilter = 'blur(10px)';
        } else {
            header.style.background = '#ffffff';
            header.style.backdropFilter = 'none';
        }
    });
    
    // Timeline interaction
    const timelineItems = document.querySelectorAll('.timeline-item');
    timelineItems.forEach((item, index) => {
        item.addEventListener('click', function() {
            // Remove active class from all items
            timelineItems.forEach(timelineItem => {
                timelineItem.classList.remove('active');
            });
            // Add active class to clicked item
            this.classList.add('active');
            
            // Add animation effect
            this.style.transform = 'translateX(15px)';
            setTimeout(() => {
                this.style.transform = 'translateX(10px)';
            }, 200);
        });
    });
    
    // Intersection Observer for animations
    const observerOptions = {
        threshold: 0.1,
        rootMargin: '0px 0px -50px 0px'
    };
    
    const observer = new IntersectionObserver(function(entries) {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.classList.add('fade-in');
                observer.unobserve(entry.target);
            }
        });
    }, observerOptions);
    
    // Observe elements for animation
    const animateElements = document.querySelectorAll('.benefit-card, .do-item, .dont-item, .tip-card, .choose-item, .care-item, .side-effect-item');
    animateElements.forEach(el => {
        observer.observe(el);
    });
    
    // Counter animation for stats
    function animateCounter(element, target, duration = 2000) {
        let start = 0;
        const increment = target / (duration / 16);
        
        const timer = setInterval(() => {
            start += increment;
            element.textContent = Math.floor(start);
            
            if (start >= target) {
                element.textContent = target;
                clearInterval(timer);
            }
        }, 16);
    }
    
    // Parallax effect for hero section
    window.addEventListener('scroll', function() {
        const scrolled = window.pageYOffset;
        const hero = document.querySelector('.hero');
        if (hero) {
            const rate = scrolled * -0.5;
            hero.style.transform = `translateY(${rate}px)`;
        }
    });
    
    // Form validation and interaction
    const forms = document.querySelectorAll('form');
    forms.forEach(form => {
        form.addEventListener('submit', function(e) {
            e.preventDefault();
            
            // Show success message
            const successMessage = document.createElement('div');
            successMessage.className = 'success-message';
            successMessage.innerHTML = `
                <div style="background: #03c0b4; color: white; padding: 1rem; border-radius: 8px; margin: 1rem 0; text-align: center;">
                    ✅ Thank you! We'll contact you soon to schedule your consultation.
                </div>
            `;
            
            form.appendChild(successMessage);
            form.reset();
            
            setTimeout(() => {
                successMessage.remove();
            }, 5000);
        });
    });
    
    // Interactive tooltips for recovery tips
    const tipCards = document.querySelectorAll('.tip-card');
    tipCards.forEach(card => {
        card.addEventListener('mouseenter', function() {
            this.style.transform = 'translateY(-8px) scale(1.02)';
            this.style.boxShadow = '0 20px 40px rgba(0, 0, 0, 0.2)';
        });
        
        card.addEventListener('mouseleave', function() {
            this.style.transform = 'translateY(-5px) scale(1)';
            this.style.boxShadow = '0 15px 35px rgba(0, 0, 0, 0.15)';
        });
    });
    
    // Progress indicator
    function updateProgressIndicator() {
        const winScroll = document.body.scrollTop || document.documentElement.scrollTop;
        const height = document.documentElement.scrollHeight - document.documentElement.clientHeight;
        const scrolled = (winScroll / height) * 100;
        
        let progressBar = document.getElementById('progressBar');
        if (!progressBar) {
            progressBar = document.createElement('div');
            progressBar.id = 'progressBar';
            progressBar.style.cssText = `
                position: fixed;
                top: 0;
                left: 0;
                width: 0%;
                height: 4px;
                background: linear-gradient(90deg, #03c0b4, #f17732);
                z-index: 9999;
                transition: width 0.3s ease;
            `;
            document.body.appendChild(progressBar);
        }
        
        progressBar.style.width = scrolled + '%';
    }
    
    window.addEventListener('scroll', updateProgressIndicator);
    
   
        
        toggleButton.addEventListener('click', function() {
            document.body.classList.toggle('dark-mode');
            this.innerHTML = document.body.classList.contains('dark-mode') ? '☀️' : '🌙';
        });
        
        toggleButton.addEventListener('mouseenter', function() {
            this.style.transform = 'scale(1.1)';
            this.style.boxShadow = '0 6px 16px rgba(0, 0, 0, 0.2)';
        });
        
        toggleButton.addEventListener('mouseleave', function() {
            this.style.transform = 'scale(1)';
            this.style.boxShadow = '0 4px 12px rgba(0, 0, 0, 0.15)';
        });
        
        document.body.appendChild(toggleButton);
    }
    
    createThemeToggle();
    
    // Add CSS for dark mode
    const darkModeStyles = `
        .dark-mode {
            --dark-color: #f8f9fa;
            --light-color: #1a1a1a;
            --gray-light: #2d2d2d;
            --gray-medium: #cccccc;
        }
        
        .dark-mode .header {
            background: rgba(26, 26, 26, 0.95) !important;
            color: #f8f9fa;
        }
        
        .dark-mode .nav-menu a {
            color: #f8f9fa;
        }
        
        .dark-mode .benefit-card,
        .dark-mode .do-item,
        .dark-mode .dont-item,
        .dark-mode .choose-item,
        .dark-mode .side-effect-item {
            background: #2d2d2d;
            color: #f8f9fa;
        }
    `;
    
    const styleSheet = document.createElement('style');
    styleSheet.textContent = darkModeStyles;
    document.head.appendChild(styleSheet);
});

// Utility functions
function scrollToSection(sectionId) {
    const element = document.getElementById(sectionId);
    if (element) {
        const offsetTop = element.offsetTop - 80;
        window.scrollTo({
            top: offsetTop,
            behavior: 'smooth'
        });
    }
}

function showTimelineContent(index) {
    const timelineItems = document.querySelectorAll('.timeline-item');
    timelineItems.forEach((item, i) => {
        if (i === index) {
            item.classList.add('active');
        } else {
            item.classList.remove('active');
        }
    });
}

function contactHospital() {
    // Simulate contact form modal or redirect
    const modal = document.createElement('div');
    modal.style.cssText = `
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background: rgba(0, 0, 0, 0.8);
        display: flex;
        justify-content: center;
        align-items: center;
        z-index: 10000;
    `;
    
    modal.innerHTML = `
        <div style="background: white; padding: 3rem; border-radius: 16px; max-width: 500px; width: 90%; text-align: center;">
            <h3 style="color: #03c0b4; margin-bottom: 1.5rem;">Schedule Your Consultation</h3>
            <form id="consultationForm">
                <div style="margin-bottom: 1rem; text-align: left;">
                    <label style="display: block; margin-bottom: 0.5rem; font-weight: 600;">Name:</label>
                    <input type="text" required style="width: 100%; padding: 0.75rem; border: 2px solid #ddd; border-radius: 8px; font-size: 1rem;">
                </div>
                <div style="margin-bottom: 1rem; text-align: left;">
                    <label style="display: block; margin-bottom: 0.5rem; font-weight: 600;">Phone:</label>
                    <input type="tel" required style="width: 100%; padding: 0.75rem; border: 2px solid #ddd; border-radius: 8px; font-size: 1rem;">
                </div>
                <div style="margin-bottom: 1rem; text-align: left;">
                    <label style="display: block; margin-bottom: 0.5rem; font-weight: 600;">Email:</label>
                    <input type="email" required style="width: 100%; padding: 0.75rem; border: 2px solid #ddd; border-radius: 8px; font-size: 1rem;">
                </div>
                <div style="margin-bottom: 2rem; text-align: left;">
                    <label style="display: block; margin-bottom: 0.5rem; font-weight: 600;">Message:</label>
                    <textarea rows="3" style="width: 100%; padding: 0.75rem; border: 2px solid #ddd; border-radius: 8px; font-size: 1rem; resize: vertical;"></textarea>
                </div>
                <div style="display: flex; gap: 1rem; justify-content: center;">
                    <button type="submit" style="background: #03c0b4; color: white; border: none; padding: 0.75rem 2rem; border-radius: 8px; cursor: pointer; font-weight: 600;">Send Message</button>
                    <button type="button" onclick="this.closest('.modal').remove()" style="background: #f17732; color: white; border: none; padding: 0.75rem 2rem; border-radius: 8px; cursor: pointer; font-weight: 600;">Close</button>
                </div>
            </form>
        </div>
    `;
    
    modal.className = 'modal';
    document.body.appendChild(modal);
    
    // Handle form submission
    const form = modal.querySelector('#consultationForm');
    form.addEventListener('submit', function(e) {
        e.preventDefault();
        alert('Thank you! We will contact you within 24 hours to schedule your consultation.');
        modal.remove();
    });
    
    // Close on backdrop click
    modal.addEventListener('click', function(e) {
        if (e.target === modal) {
            modal.remove();
        }
    });
}

function callHospital() {
    // Simulate phone call action
    const phoneNumber = '+91-72182-72182'; // Replace with actual number
    if (confirm(`Call Brar Eye Hospital at ${phoneNumber}?`)) {
        window.location.href = `tel:${phoneNumber}`;
    }
}
    </script>

<?php include 'footer.php'; ?>
