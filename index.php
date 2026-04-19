<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>QuickPOS - The Last POS System You'll Ever Need</title>
    <meta name="description" content="QuickPOS is the modern point of sale system. Powerful, beautiful, and easy to use.">
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap" rel="stylesheet">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="css/style.css">
</head>
<body>

    <!-- Epic 1: Navigation & Header -->
    <header class="navbar" id="navbar">
        <div class="container nav-container">
            <div class="logo">
                <i class="fa-solid fa-cash-register text-primary"></i> Quick<span>POS</span>
            </div>
            <nav>
                <ul class="nav-links">
                    <li><a href="#features">Features</a></li>
                    <li><a href="#pricing">Pricing</a></li>
                    <li><a href="#contact">Contact</a></li>
                </ul>
            </nav>
            <a href="#pricing" class="btn btn-outline">Sign Up</a>
        </div>
    </header>

    <!-- Epic 2: Hero Section -->
    <section class="hero" id="home">
        <div class="hero-bg-gradient"></div>
        <div class="container hero-container">
            <div class="hero-content">
                <div class="badge">🚀 v2.0 Now Available</div>
                <h1 class="headline">The Last POS System You'll Ever Need</h1>
                <p class="sub-headline">Manage your inventory, analyze sales, and grow your business with the most beautiful Point of Sale software built for modern retailers.</p>
                <div class="hero-cta">
                    <a href="#pricing" class="btn btn-primary btn-lg">Get Started for Free</a>
                    <a href="#features" class="btn btn-secondary btn-lg"><i class="fa-solid fa-play"></i> Watch Demo</a>
                </div>
            </div>
            <div class="hero-mockup">
                <div class="glass-panel">
                    <div class="mockup-header">
                        <div class="dots"><span></span><span></span><span></span></div>
                        <div class="search-bar">Search products...</div>
                    </div>
                    <div class="mockup-body">
                        <div class="mockup-sidebar">
                            <div class="nav-item active"><i class="fa-solid fa-house"></i> Home</div>
                            <div class="nav-item"><i class="fa-solid fa-tag"></i> Sales</div>
                            <div class="nav-item"><i class="fa-solid fa-box"></i> Inventory</div>
                            <div class="nav-item"><i class="fa-solid fa-chart-pie"></i> Analytics</div>
                        </div>
                        <div class="mockup-content">
                            <div class="stat-cards">
                                <div class="stat-card">
                                    <p>Today's Sales</p>
                                    <h3>$2,450.00</h3>
                                    <span class="text-success"><i class="fa-solid fa-arrow-trend-up"></i> +12.5%</span>
                                </div>
                                <div class="stat-card">
                                    <p>Active Orders</p>
                                    <h3>42</h3>
                                </div>
                            </div>
                            <div class="chart-placeholder">
                                <div class="bar" style="height: 60%"></div>
                                <div class="bar" style="height: 80%"></div>
                                <div class="bar" style="height: 40%"></div>
                                <div class="bar text-primary" style="height: 100%"></div>
                                <div class="bar" style="height: 70%"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Epic 3: Features Section -->
    <section class="features section" id="features">
        <div class="container">
            <div class="section-title text-center">
                <h2>Everything You Need to Succeed</h2>
                <p>Powerful tools designed to simplify your day-to-day operations.</p>
            </div>
            <div class="grid feature-grid">
                
                <div class="feature-card">
                    <div class="feature-icon icon-blue">
                        <i class="fa-solid fa-box-open"></i>
                    </div>
                    <h3>Inventory Management</h3>
                    <p>Track stock levels in real-time. Receive low inventory alerts, manage suppliers, and automate purchase orders effortlessly.</p>
                </div>

                <div class="feature-card">
                    <div class="feature-icon icon-purple">
                        <i class="fa-solid fa-chart-line"></i>
                    </div>
                    <h3>Sales Analytics</h3>
                    <p>Gain deep insights into your business performance with interactive dashboards, visual reports, and trend forecasting.</p>
                </div>

                <div class="feature-card">
                    <div class="feature-icon icon-orange">
                        <i class="fa-solid fa-plug"></i>
                    </div>
                    <h3>Easy Integration</h3>
                    <p>Connect seamlessly with your favorite accounting software, payment gateways, and e-commerce platforms.</p>
                </div>

            </div>
        </div>
    </section>

    <!-- Epic 4: Pricing Section -->
    <section class="pricing section bg-light" id="pricing">
        <div class="container">
            <div class="section-title text-center">
                <h2>Simple, Transparent Pricing</h2>
                <p>Choose the plan that fits your business size.</p>
            </div>
            <div class="grid pricing-grid">
                
                <!-- Basic Tier -->
                <div class="pricing-card">
                    <div class="pricing-header">
                        <h3>Basic</h3>
                        <div class="price"><span>$</span>0<span>/mo</span></div>
                        <p>Perfect for new businesses</p>
                    </div>
                    <ul class="pricing-features">
                        <li><i class="fa-solid fa-check text-primary"></i> 1 Register</li>
                        <li><i class="fa-solid fa-check text-primary"></i> Basic Inventory</li>
                        <li><i class="fa-solid fa-check text-primary"></i> Email Support</li>
                        <li class="disabled"><i class="fa-solid fa-xmark"></i> Advanced Analytics</li>
                    </ul>
                    <a href="#contact" class="btn btn-outline btn-full">Get Started</a>
                </div>

                <!-- Pro Tier -->
                <div class="pricing-card popular">
                    <div class="popular-badge">Most Popular</div>
                    <div class="pricing-header">
                        <h3>Pro</h3>
                        <div class="price"><span>$</span>49<span>/mo</span></div>
                        <p>For growing retail stores</p>
                    </div>
                    <ul class="pricing-features">
                        <li><i class="fa-solid fa-check text-primary"></i> 3 Registers</li>
                        <li><i class="fa-solid fa-check text-primary"></i> Advanced Inventory</li>
                        <li><i class="fa-solid fa-check text-primary"></i> Priority Support</li>
                        <li><i class="fa-solid fa-check text-primary"></i> Sales Analytics</li>
                    </ul>
                    <a href="#contact" class="btn btn-primary btn-full">Start 14-Day Free Trial</a>
                </div>

                <!-- Enterprise Tier -->
                <div class="pricing-card">
                    <div class="pricing-header">
                        <h3>Enterprise</h3>
                        <div class="price"><span>$</span>199<span>/mo</span></div>
                        <p>For large organizations</p>
                    </div>
                    <ul class="pricing-features">
                        <li><i class="fa-solid fa-check text-primary"></i> Unlimited Registers</li>
                        <li><i class="fa-solid fa-check text-primary"></i> Multi-store Management</li>
                        <li><i class="fa-solid fa-check text-primary"></i> 24/7 Phone Support</li>
                        <li><i class="fa-solid fa-check text-primary"></i> Custom Integrations</li>
                    </ul>
                    <a href="#contact" class="btn btn-outline btn-full">Contact Sales</a>
                </div>

            </div>
        </div>
    </section>

    <!-- Epic 5: Contact Us Form -->
    <section class="contact section" id="contact">
        <div class="container">
            <div class="contact-wrapper">
                <div class="contact-info">
                    <h2>Get in Touch</h2>
                    <p>Have questions about QuickPOS? Our team is here to help you get started.</p>
                    <div class="contact-details">
                        <div class="item">
                            <i class="fa-solid fa-location-dot"></i>
                            <div>
                                <h4>Office</h4>
                                <p>123 POS Avenue, Tech District, NY 10001</p>
                            </div>
                        </div>
                        <div class="item">
                            <i class="fa-solid fa-envelope"></i>
                            <div>
                                <h4>Email</h4>
                                <p>support@quickpos.com</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="contact-form-container">
                    <form action="backend/contact.php" method="POST" class="contact-form">
                        <div class="form-group">
                            <label for="name">Full Name</label>
                            <input type="text" id="name" name="name" placeholder="John Doe" required>
                        </div>
                        <div class="form-group">
                            <label for="email">Email Address</label>
                            <input type="email" id="email" name="email" placeholder="john@company.com" required>
                        </div>
                        <div class="form-group">
                            <label for="message">Message</label>
                            <textarea id="message" name="message" rows="4" placeholder="How can we help you?" required></textarea>
                        </div>
                        <button type="submit" class="btn btn-primary btn-full btn-lg">Send Message <i class="fa-solid fa-paper-plane"></i></button>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <!-- Epic 6: Footer -->
    <footer class="footer">
        <div class="container flex-footer">
            <div class="footer-brand">
                <div class="footer-logo">
                    <i class="fa-solid fa-cash-register"></i> Quick<span>POS</span>
                </div>
                <p>The modern point of sale system designed to help you run your business smoothly and efficiently.</p>
            </div>
            
            <div class="footer-links">
                <h4>Product</h4>
                <ul>
                    <li><a href="#features">Features</a></li>
                    <li><a href="#pricing">Pricing</a></li>
                    <li><a href="#">Updates</a></li>
                </ul>
            </div>
            
            <div class="footer-links">
                <h4>Company</h4>
                <ul>
                    <li><a href="#">About Us</a></li>
                    <li><a href="#">Careers</a></li>
                    <li><a href="#contact">Contact</a></li>
                </ul>
            </div>

            <div class="footer-links">
                <h4>Connect</h4>
                <div class="social-links">
                    <a href="#" aria-label="Twitter"><i class="fa-brands fa-twitter"></i></a>
                    <a href="#" aria-label="Facebook"><i class="fa-brands fa-facebook-f"></i></a>
                    <a href="#" aria-label="LinkedIn"><i class="fa-brands fa-linkedin-in"></i></a>
                    <a href="#" aria-label="Instagram"><i class="fa-brands fa-instagram"></i></a>
                </div>
            </div>
        </div>
        <div class="container text-center copyright">
            <p>&copy; 2026 QuickPOS Systems. All rights reserved. Built with ❤️ for modern retail.</p>
        </div>
    </footer>

    <!-- JS for Sticky Navbar -->
    <script>
        window.addEventListener('scroll', function() {
            const navbar = document.getElementById('navbar');
            if (window.scrollY > 50) {
                navbar.classList.add('scrolled');
            } else {
                navbar.classList.remove('scrolled');
            }
        });
    </script>
</body>
</html>