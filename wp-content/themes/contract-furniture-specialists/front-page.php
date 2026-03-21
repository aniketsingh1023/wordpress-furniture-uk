<?php
/**
 * Homepage Template
 *
 * @package CFS_Theme
 */

get_header();
?>

<!-- ============================================
     HERO SECTION
     ============================================ -->
<section class="hero-section" id="home">
    <div class="hero-slider">
        <div class="hero-slide active" style="background-image: url('<?php echo CFS_THEME_URI; ?>/assets/images/hero-1.jpg'); background-color: #1B2D4F;">
            <div style="position:absolute;inset:0;background:linear-gradient(135deg,rgba(15,29,51,0.88) 0%,rgba(27,45,79,0.6) 50%,rgba(27,45,79,0.35) 100%);"></div>
        </div>
        <div class="hero-slide" style="background-image: url('<?php echo CFS_THEME_URI; ?>/assets/images/hero-2.jpg'); background-color: #0F1D33;">
            <div style="position:absolute;inset:0;background:linear-gradient(135deg,rgba(15,29,51,0.88) 0%,rgba(27,45,79,0.6) 50%,rgba(27,45,79,0.35) 100%);"></div>
        </div>
        <div class="hero-slide" style="background-image: url('<?php echo CFS_THEME_URI; ?>/assets/images/hero-3.jpg'); background-color: #162440;">
            <div style="position:absolute;inset:0;background:linear-gradient(135deg,rgba(15,29,51,0.88) 0%,rgba(27,45,79,0.6) 50%,rgba(27,45,79,0.35) 100%);"></div>
        </div>
    </div>

    <div class="hero-content">
        <div class="hero-text">
            <div class="hero-label">Contract Furniture UK</div>
            <h1 class="hero-title">Crafting Premium <span>Furniture</span> for Commercial Spaces</h1>
            <p class="hero-description">The UK's trusted banquette seating specialists, delivering bespoke commercial furniture solutions for healthcare, hospitality, and corporate environments since 2005.</p>
            <div class="hero-buttons">
                <a href="#contact" class="btn btn-copper btn-arrow">Request a Quote</a>
                <a href="#services" class="btn btn-secondary btn-arrow">Explore Our Range</a>
            </div>
        </div>
    </div>

    <!-- Hero Stats Bar -->
    <div class="hero-stats">
        <div class="container">
            <div class="stat-item">
                <div class="stat-number">18+</div>
                <div class="stat-label">Years of Excellence</div>
            </div>
            <div class="stat-item">
                <div class="stat-number">2,500+</div>
                <div class="stat-label">Projects Delivered</div>
            </div>
            <div class="stat-item">
                <div class="stat-number">500+</div>
                <div class="stat-label">Happy Clients</div>
            </div>
            <div class="stat-item">
                <div class="stat-number">100%</div>
                <div class="stat-label">UK Manufactured</div>
            </div>
        </div>
    </div>

    <!-- Slider Navigation -->
    <div class="hero-nav">
        <button class="hero-prev" aria-label="Previous slide">&#8249;</button>
        <button class="hero-next" aria-label="Next slide">&#8250;</button>
    </div>
</section>

<!-- ============================================
     SERVICES / CORE OFFERINGS
     ============================================ -->
<section class="services-section" id="services">
    <div class="container">
        <div class="section-header reveal">
            <div class="section-label">Our Core Offerings</div>
            <h2 class="section-title">Premium Contract <span>Furniture</span> Solutions</h2>
            <p class="section-description">From initial concept to final installation, we deliver comprehensive furniture solutions tailored to the unique demands of commercial environments across the United Kingdom.</p>
        </div>

        <div class="services-grid">
            <!-- Service 1: Banquette Seating -->
            <div class="service-card reveal reveal-delay-1">
                <div class="service-icon">
                    <svg viewBox="0 0 48 48" fill="currentColor"><path d="M6 34V20c0-3.314 2.686-6 6-6h24c3.314 0 6 2.686 6 6v14M6 34h36M6 34v4M42 34v4M10 28h28v6H10z" stroke="currentColor" stroke-width="2.5" fill="none" stroke-linecap="round" stroke-linejoin="round"/></svg>
                </div>
                <h3>Banquette Seating</h3>
                <p>Bespoke banquette and booth seating crafted to your exact specifications. Perfect for restaurants, hotels, and commercial dining spaces.</p>
                <a href="#banquette" class="service-link">Learn More &#8594;</a>
            </div>

            <!-- Service 2: Tables & Dining -->
            <div class="service-card reveal reveal-delay-2">
                <div class="service-icon">
                    <svg viewBox="0 0 48 48" fill="currentColor"><path d="M8 18h32M8 18v16M40 18v16M14 18V8M34 18V8M8 34h32" stroke="currentColor" stroke-width="2.5" fill="none" stroke-linecap="round" stroke-linejoin="round"/></svg>
                </div>
                <h3>Tables & Dining</h3>
                <p>Commercial-grade dining tables, coffee tables, and conference tables. Durable construction meets elegant design for any commercial setting.</p>
                <a href="#" class="service-link">Learn More &#8594;</a>
            </div>

            <!-- Service 3: Chairs & Stools -->
            <div class="service-card reveal reveal-delay-3">
                <div class="service-icon">
                    <svg viewBox="0 0 48 48" fill="currentColor"><path d="M16 38V28M32 38V28M12 28h24M14 28V14c0-2.21 1.79-4 4-4h12c2.21 0 4 1.79 4 4v14" stroke="currentColor" stroke-width="2.5" fill="none" stroke-linecap="round" stroke-linejoin="round"/></svg>
                </div>
                <h3>Chairs & Stools</h3>
                <p>From stacking chairs to bar stools, our seating range combines comfort with commercial durability. Upholstered or wooden frames available.</p>
                <a href="#" class="service-link">Learn More &#8594;</a>
            </div>

            <!-- Service 4: Bespoke Solutions -->
            <div class="service-card reveal reveal-delay-4">
                <div class="service-icon">
                    <svg viewBox="0 0 48 48" fill="currentColor"><path d="M24 8l4 8h8l-6 6 2 8-8-4-8 4 2-8-6-6h8z" stroke="currentColor" stroke-width="2.5" fill="none" stroke-linecap="round" stroke-linejoin="round"/><path d="M12 32h24v8H12z" stroke="currentColor" stroke-width="2.5" fill="none" stroke-linecap="round" stroke-linejoin="round"/></svg>
                </div>
                <h3>Bespoke Solutions</h3>
                <p>Fully customised furniture designed to meet your unique requirements. Our in-house design team works closely with you from concept to delivery.</p>
                <a href="#contact" class="service-link">Enquire Now &#8594;</a>
            </div>
        </div>
    </div>
</section>

<!-- ============================================
     INDUSTRY SECTIONS
     ============================================ -->
<section class="industries-section" id="industries">
    <div class="container">
        <div class="section-header reveal">
            <div class="section-label">Industry Expertise</div>
            <h2 class="section-title">Seating Specialists Across <span>Every Sector</span></h2>
            <p class="section-description">We understand that each industry has unique requirements. Our specialist knowledge ensures furniture solutions that meet sector-specific standards and regulations.</p>
        </div>

        <!-- Healthcare -->
        <div class="industry-showcase reveal">
            <div class="industry-image">
                <div class="image-placeholder">
                    <svg width="80" height="80" viewBox="0 0 48 48" fill="rgba(255,255,255,0.2)"><path d="M24 4v40M4 24h40" stroke="rgba(255,255,255,0.2)" stroke-width="4" stroke-linecap="round"/><rect x="8" y="8" width="32" height="32" rx="4" stroke="rgba(255,255,255,0.15)" stroke-width="2" fill="none"/></svg>
                    <span>Healthcare Furniture</span>
                </div>
            </div>
            <div class="industry-content">
                <div class="industry-tag">Healthcare Sector</div>
                <h3>Seating Specialists for Healthcare</h3>
                <p>Our healthcare furniture range is designed to meet the stringent requirements of NHS facilities, private hospitals, clinics, and care homes. Every piece is built for infection control, ease of cleaning, and patient comfort.</p>
                <ul class="industry-features">
                    <li><svg viewBox="0 0 24 24"><path d="M9 16.17L4.83 12l-1.42 1.41L9 19 21 7l-1.41-1.41z" fill="currentColor"/></svg> Anti-microbial Fabrics</li>
                    <li><svg viewBox="0 0 24 24"><path d="M9 16.17L4.83 12l-1.42 1.41L9 19 21 7l-1.41-1.41z" fill="currentColor"/></svg> BS 7176 Compliant</li>
                    <li><svg viewBox="0 0 24 24"><path d="M9 16.17L4.83 12l-1.42 1.41L9 19 21 7l-1.41-1.41z" fill="currentColor"/></svg> Bariatric Options</li>
                    <li><svg viewBox="0 0 24 24"><path d="M9 16.17L4.83 12l-1.42 1.41L9 19 21 7l-1.41-1.41z" fill="currentColor"/></svg> Easy Clean Surfaces</li>
                </ul>
                <a href="#contact" class="btn btn-outline btn-arrow">Discuss Healthcare Projects</a>
            </div>
        </div>

        <!-- Hospitality -->
        <div class="industry-showcase reverse reveal">
            <div class="industry-image">
                <div class="image-placeholder">
                    <svg width="80" height="80" viewBox="0 0 48 48" fill="rgba(255,255,255,0.2)"><rect x="12" y="6" width="24" height="36" rx="2" stroke="rgba(255,255,255,0.2)" stroke-width="2.5" fill="none"/><circle cx="24" cy="16" r="4" stroke="rgba(255,255,255,0.15)" stroke-width="2" fill="none"/><path d="M16 28h16M16 34h16" stroke="rgba(255,255,255,0.15)" stroke-width="2" stroke-linecap="round"/></svg>
                    <span>Hospitality Furniture</span>
                </div>
            </div>
            <div class="industry-content">
                <div class="industry-tag">Hospitality Sector</div>
                <h3>Seating Specialists for Hospitality</h3>
                <p>From boutique hotels to restaurant chains, we provide furniture that creates memorable dining and lounge experiences. Our hospitality range balances aesthetic appeal with the durability demanded by high-traffic environments.</p>
                <ul class="industry-features">
                    <li><svg viewBox="0 0 24 24"><path d="M9 16.17L4.83 12l-1.42 1.41L9 19 21 7l-1.41-1.41z" fill="currentColor"/></svg> Fire Retardant</li>
                    <li><svg viewBox="0 0 24 24"><path d="M9 16.17L4.83 12l-1.42 1.41L9 19 21 7l-1.41-1.41z" fill="currentColor"/></svg> High-Traffic Durable</li>
                    <li><svg viewBox="0 0 24 24"><path d="M9 16.17L4.83 12l-1.42 1.41L9 19 21 7l-1.41-1.41z" fill="currentColor"/></svg> Custom Branding</li>
                    <li><svg viewBox="0 0 24 24"><path d="M9 16.17L4.83 12l-1.42 1.41L9 19 21 7l-1.41-1.41z" fill="currentColor"/></svg> 500+ Fabric Choices</li>
                </ul>
                <a href="#contact" class="btn btn-outline btn-arrow">Discuss Hospitality Projects</a>
            </div>
        </div>

        <!-- Corporate -->
        <div class="industry-showcase reveal">
            <div class="industry-image">
                <div class="image-placeholder">
                    <svg width="80" height="80" viewBox="0 0 48 48" fill="rgba(255,255,255,0.2)"><rect x="6" y="14" width="36" height="24" rx="2" stroke="rgba(255,255,255,0.2)" stroke-width="2.5" fill="none"/><path d="M6 22h36M18 14V8h12v6" stroke="rgba(255,255,255,0.15)" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>
                    <span>Corporate Furniture</span>
                </div>
            </div>
            <div class="industry-content">
                <div class="industry-tag">Corporate Sector</div>
                <h3>Premium Office & Boardroom Furniture</h3>
                <p>Create inspiring workspaces with our corporate furniture range. From executive boardrooms to collaborative breakout areas, we deliver furniture that reflects your brand's professionalism and supports employee wellbeing.</p>
                <ul class="industry-features">
                    <li><svg viewBox="0 0 24 24"><path d="M9 16.17L4.83 12l-1.42 1.41L9 19 21 7l-1.41-1.41z" fill="currentColor"/></svg> Ergonomic Design</li>
                    <li><svg viewBox="0 0 24 24"><path d="M9 16.17L4.83 12l-1.42 1.41L9 19 21 7l-1.41-1.41z" fill="currentColor"/></svg> Space Planning</li>
                    <li><svg viewBox="0 0 24 24"><path d="M9 16.17L4.83 12l-1.42 1.41L9 19 21 7l-1.41-1.41z" fill="currentColor"/></svg> Modular Systems</li>
                    <li><svg viewBox="0 0 24 24"><path d="M9 16.17L4.83 12l-1.42 1.41L9 19 21 7l-1.41-1.41z" fill="currentColor"/></svg> Brand Integration</li>
                </ul>
                <a href="#contact" class="btn btn-outline btn-arrow">Discuss Corporate Projects</a>
            </div>
        </div>
    </div>
</section>

<!-- ============================================
     BANQUETTE SEATING SPOTLIGHT
     ============================================ -->
<section class="banquette-section" id="banquette">
    <div class="container">
        <div class="banquette-inner">
            <div class="banquette-content reveal">
                <div class="section-label">Our Speciality</div>
                <h2 class="section-title">The UK's Leading <span>Banquette Seating</span> Specialists</h2>
                <p>For over 18 years, Contract Furniture Specialists has been the go-to partner for bespoke banquette and booth seating across the United Kingdom. We combine traditional craftsmanship with modern manufacturing to deliver seating solutions that transform commercial spaces.</p>
                <p>Every banquette is built to order in our UK workshop, allowing complete customisation of dimensions, fabrics, and finishes to perfectly complement your interior design vision.</p>

                <ul class="banquette-features-list">
                    <li>
                        <svg viewBox="0 0 24 24" fill="none" stroke="#D4A843" stroke-width="2"><path d="M9 16.17L4.83 12l-1.42 1.41L9 19 21 7l-1.41-1.41z"/></svg>
                        Made-to-Measure
                    </li>
                    <li>
                        <svg viewBox="0 0 24 24" fill="none" stroke="#D4A843" stroke-width="2"><path d="M9 16.17L4.83 12l-1.42 1.41L9 19 21 7l-1.41-1.41z"/></svg>
                        UK Manufactured
                    </li>
                    <li>
                        <svg viewBox="0 0 24 24" fill="none" stroke="#D4A843" stroke-width="2"><path d="M9 16.17L4.83 12l-1.42 1.41L9 19 21 7l-1.41-1.41z"/></svg>
                        Fire Certified
                    </li>
                    <li>
                        <svg viewBox="0 0 24 24" fill="none" stroke="#D4A843" stroke-width="2"><path d="M9 16.17L4.83 12l-1.42 1.41L9 19 21 7l-1.41-1.41z"/></svg>
                        5 Year Warranty
                    </li>
                    <li>
                        <svg viewBox="0 0 24 24" fill="none" stroke="#D4A843" stroke-width="2"><path d="M9 16.17L4.83 12l-1.42 1.41L9 19 21 7l-1.41-1.41z"/></svg>
                        500+ Fabrics
                    </li>
                    <li>
                        <svg viewBox="0 0 24 24" fill="none" stroke="#D4A843" stroke-width="2"><path d="M9 16.17L4.83 12l-1.42 1.41L9 19 21 7l-1.41-1.41z"/></svg>
                        Expert Installation
                    </li>
                </ul>

                <div style="display: flex; gap: 16px; flex-wrap: wrap;">
                    <a href="#contact" class="btn btn-copper btn-arrow">Request Banquette Quote</a>
                    <a href="#" class="btn btn-secondary btn-arrow">View Gallery</a>
                </div>
            </div>

            <div class="banquette-gallery reveal">
                <div class="gallery-item">
                    <div class="image-placeholder">
                        <svg width="60" height="60" viewBox="0 0 48 48" fill="rgba(255,255,255,0.15)"><path d="M6 34V20c0-3.314 2.686-6 6-6h24c3.314 0 6 2.686 6 6v14M6 34h36" stroke="rgba(255,255,255,0.15)" stroke-width="2" fill="none"/></svg>
                        <span>Restaurant Booth</span>
                    </div>
                </div>
                <div class="gallery-item">
                    <div class="image-placeholder">
                        <svg width="40" height="40" viewBox="0 0 48 48" fill="rgba(255,255,255,0.15)"><path d="M6 34V20c0-3.314 2.686-6 6-6h24c3.314 0 6 2.686 6 6v14M6 34h36" stroke="rgba(255,255,255,0.15)" stroke-width="2" fill="none"/></svg>
                        <span>Hotel Lounge</span>
                    </div>
                </div>
                <div class="gallery-item">
                    <div class="image-placeholder">
                        <svg width="40" height="40" viewBox="0 0 48 48" fill="rgba(255,255,255,0.15)"><path d="M6 34V20c0-3.314 2.686-6 6-6h24c3.314 0 6 2.686 6 6v14M6 34h36" stroke="rgba(255,255,255,0.15)" stroke-width="2" fill="none"/></svg>
                        <span>Bar Seating</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ============================================
     ABOUT SECTION
     ============================================ -->
<section class="about-section" id="about">
    <div class="container">
        <div class="about-grid">
            <div class="about-image reveal">
                <div class="main-image">
                    <svg width="80" height="80" viewBox="0 0 48 48" fill="none"><rect x="4" y="8" width="40" height="32" rx="2" stroke="#9A9A9A" stroke-width="2" fill="none"/><path d="M4 28l10-8 8 6 8-10 14 12" stroke="#9A9A9A" stroke-width="1.5" fill="none"/><circle cx="14" cy="18" r="3" stroke="#9A9A9A" stroke-width="1.5" fill="none"/></svg>
                    <span>Workshop &amp; Showroom</span>
                </div>
                <div class="experience-badge">
                    <span class="years">18</span>
                    <span class="label">Years of<br>Excellence</span>
                </div>
            </div>

            <div class="about-content reveal">
                <div class="section-label">About Our Company</div>
                <h2 class="section-title">Dedicated to Exceptional <span>Craftsmanship</span></h2>
                <p class="section-description">Since 2005, Contract Furniture Specialists has established itself as a leading provider of premium commercial furniture across the United Kingdom. Our dedication to quality craftsmanship, innovative design, and exceptional client service has earned us the trust of architects, interior designers, and facility managers nationwide.</p>
                <p class="section-description" style="margin-bottom: 30px;">We operate from our purpose-built manufacturing facility, where our skilled craftspeople combine time-honoured techniques with modern technology to produce furniture of outstanding quality and durability.</p>

                <div class="about-values">
                    <div class="about-value">
                        <div class="value-icon">
                            <svg viewBox="0 0 24 24"><path d="M12 2L2 7l10 5 10-5-10-5zM2 17l10 5 10-5M2 12l10 5 10-5" stroke="currentColor" stroke-width="1.5" fill="none" stroke-linecap="round" stroke-linejoin="round"/></svg>
                        </div>
                        <div>
                            <h4>Quality First</h4>
                            <p>Every piece undergoes rigorous quality checks</p>
                        </div>
                    </div>
                    <div class="about-value">
                        <div class="value-icon">
                            <svg viewBox="0 0 24 24"><path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2M9 11a4 4 0 1 0 0-8 4 4 0 0 0 0 8zM23 21v-2a4 4 0 0 0-3-3.87M16 3.13a4 4 0 0 1 0 7.75" stroke="currentColor" stroke-width="1.5" fill="none" stroke-linecap="round" stroke-linejoin="round"/></svg>
                        </div>
                        <div>
                            <h4>Expert Team</h4>
                            <p>Skilled artisans with decades of experience</p>
                        </div>
                    </div>
                    <div class="about-value">
                        <div class="value-icon">
                            <svg viewBox="0 0 24 24"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z" stroke="currentColor" stroke-width="1.5" fill="none" stroke-linecap="round" stroke-linejoin="round"/></svg>
                        </div>
                        <div>
                            <h4>UK Made</h4>
                            <p>Proudly manufactured in our UK workshop</p>
                        </div>
                    </div>
                    <div class="about-value">
                        <div class="value-icon">
                            <svg viewBox="0 0 24 24"><path d="M22 11.08V12a10 10 0 1 1-5.93-9.14" stroke="currentColor" stroke-width="1.5" fill="none" stroke-linecap="round" stroke-linejoin="round"/><polyline points="22 4 12 14.01 9 11.01" stroke="currentColor" stroke-width="1.5" fill="none" stroke-linecap="round" stroke-linejoin="round"/></svg>
                        </div>
                        <div>
                            <h4>Full Service</h4>
                            <p>Design, manufacture, deliver, and install</p>
                        </div>
                    </div>
                </div>

                <a href="#contact" class="btn btn-primary btn-arrow">Learn More About Us</a>
            </div>
        </div>
    </div>
</section>

<!-- ============================================
     WHY CHOOSE US
     ============================================ -->
<section class="why-section">
    <div class="container">
        <div class="section-header reveal">
            <div class="section-label">Why Choose Us</div>
            <h2 class="section-title">The Contract Furniture <span>Difference</span></h2>
            <p class="section-description">What sets us apart as the preferred contract furniture partner for businesses across the United Kingdom.</p>
        </div>

        <div class="why-grid">
            <div class="why-card reveal reveal-delay-1">
                <div class="why-icon">
                    <svg viewBox="0 0 48 48" fill="currentColor"><path d="M24 4C12.95 4 4 12.95 4 24s8.95 20 20 20 20-8.95 20-20S35.05 4 24 4zm-2 30l-10-10 2.83-2.83L22 28.34l13.17-13.17L38 18 22 34z" fill="none" stroke="currentColor" stroke-width="2.5"/></svg>
                </div>
                <h3>Bespoke Manufacturing</h3>
                <p>Every piece is built to your exact specifications in our UK workshop. No off-the-shelf compromises.</p>
            </div>

            <div class="why-card reveal reveal-delay-2">
                <div class="why-icon">
                    <svg viewBox="0 0 48 48" fill="currentColor"><path d="M24 4l6 12h14l-10 8 4 14-14-8-14 8 4-14L4 16h14z" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linejoin="round"/></svg>
                </div>
                <h3>Industry Compliance</h3>
                <p>Full fire certification, BS 7176 compliance, and anti-microbial options for regulated environments.</p>
            </div>

            <div class="why-card reveal reveal-delay-3">
                <div class="why-icon">
                    <svg viewBox="0 0 48 48" fill="currentColor"><path d="M8 8h32v32H8z" fill="none" stroke="currentColor" stroke-width="2.5"/><path d="M16 24h16M24 16v16" stroke="currentColor" stroke-width="2.5" stroke-linecap="round"/></svg>
                </div>
                <h3>End-to-End Service</h3>
                <p>From initial consultation and design through to manufacture, delivery, and professional installation.</p>
            </div>

            <div class="why-card reveal reveal-delay-4">
                <div class="why-icon">
                    <svg viewBox="0 0 48 48" fill="currentColor"><path d="M24 44c11.046 0 20-8.954 20-20S35.046 4 24 4 4 12.954 4 24s8.954 20 20 20z" fill="none" stroke="currentColor" stroke-width="2.5"/><path d="M24 14v10l8 4" stroke="currentColor" stroke-width="2.5" stroke-linecap="round"/></svg>
                </div>
                <h3>Rapid Turnaround</h3>
                <p>Industry-leading lead times with flexible scheduling to meet your project deadlines without compromising quality.</p>
            </div>
        </div>
    </div>
</section>

<!-- ============================================
     TESTIMONIALS
     ============================================ -->
<section class="testimonials-section">
    <div class="container">
        <div class="section-header reveal">
            <div class="section-label">Client Testimonials</div>
            <h2 class="section-title">Trusted by Leading <span>Businesses</span></h2>
        </div>

        <div class="testimonials-slider reveal">
            <div class="testimonial-item active">
                <p class="testimonial-quote">Contract Furniture Specialists delivered exceptional banquette seating for our hotel restaurant renovation. Their attention to detail and commitment to meeting our tight deadline was outstanding. The quality exceeded our expectations.</p>
                <p class="testimonial-author">Sarah Mitchell</p>
                <p class="testimonial-role">Interior Design Director, Meridian Hotels Group</p>
            </div>
            <div class="testimonial-item">
                <p class="testimonial-quote">We've worked with CFS on multiple NHS hospital projects. Their understanding of healthcare furniture requirements, from infection control to bariatric specifications, makes them our preferred supplier for every healthcare project.</p>
                <p class="testimonial-author">James Thornton</p>
                <p class="testimonial-role">Facilities Manager, NHS Midlands Trust</p>
            </div>
            <div class="testimonial-item">
                <p class="testimonial-quote">The bespoke corporate furniture CFS produced for our London headquarters perfectly reflects our brand identity. Professional service from start to finish, and the quality is second to none in the contract furniture industry.</p>
                <p class="testimonial-author">Rebecca Clarke</p>
                <p class="testimonial-role">Office Manager, Sterling Capital Partners</p>
            </div>

            <div class="testimonial-dots">
                <button class="active" data-index="0" aria-label="Testimonial 1"></button>
                <button data-index="1" aria-label="Testimonial 2"></button>
                <button data-index="2" aria-label="Testimonial 3"></button>
            </div>
        </div>
    </div>
</section>

<!-- ============================================
     CLIENTS TRUST BAR
     ============================================ -->
<section class="clients-section">
    <div class="container">
        <div class="clients-inner">
            <span class="clients-label">Trusted by</span>
            <!-- Placeholder client logos as text -->
            <div class="client-logo" style="display:flex;align-items:center;justify-content:center;width:120px;height:40px;background:rgba(0,0,0,0.05);font-size:0.65rem;color:#999;text-transform:uppercase;letter-spacing:1px;font-weight:600;">NHS Trust</div>
            <div class="client-logo" style="display:flex;align-items:center;justify-content:center;width:120px;height:40px;background:rgba(0,0,0,0.05);font-size:0.65rem;color:#999;text-transform:uppercase;letter-spacing:1px;font-weight:600;">Hilton Hotels</div>
            <div class="client-logo" style="display:flex;align-items:center;justify-content:center;width:120px;height:40px;background:rgba(0,0,0,0.05);font-size:0.65rem;color:#999;text-transform:uppercase;letter-spacing:1px;font-weight:600;">Marriott</div>
            <div class="client-logo" style="display:flex;align-items:center;justify-content:center;width:120px;height:40px;background:rgba(0,0,0,0.05);font-size:0.65rem;color:#999;text-transform:uppercase;letter-spacing:1px;font-weight:600;">Deloitte</div>
            <div class="client-logo" style="display:flex;align-items:center;justify-content:center;width:120px;height:40px;background:rgba(0,0,0,0.05);font-size:0.65rem;color:#999;text-transform:uppercase;letter-spacing:1px;font-weight:600;">BUPA</div>
        </div>
    </div>
</section>

<?php get_footer(); ?>
