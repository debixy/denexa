@extends('layouts.app')

@section('content')
    <div class="hero-section">
        <div class="container hero-content">
            <div class="hero-text">
                <span class="sub-heading">Welcome to Denexa</span>
                <h1 class="hero-title">Build Future-Proof Solutions</h1>
                <p class="hero-description">
                    We provide innovative web development services that cater to your business needs.
                </p>
                <a href="{{ route('register') }}" class="btn btn-primary">Get Started</a>
            </div>
            <div class="hero-image">
                <img src="{{ asset('images/hero-image.png') }}" alt="Hero Image" class="glowing-image">
            </div>
        </div>
    </div>

    <section id="features" class="features-section">
        <div class="container">
            <!-- Features Content -->
            <div class="features-content-wrapper">
                <!-- Service Process Section -->
                <div class="denexa-services-content">
                    <p class="subtitle">Streamlined and Efficient</p>
                    <h2 class="section-title">Get Started with Denexa in 3 Simple Steps</h2>
                    <div class="service-steps">
                        <div class="service-step">
                            <div class="icon">
                                <img src="{{ asset('images/step1.png') }}" alt="Select Your Service" />
                            </div>
                            <div class="text">
                                <h3 class="step-title">Select Your Service</h3>
                                <p>Browse through our wide range of web development services tailored for your business
                                    needs.
                                </p>
                            </div>
                        </div>
                        <div class="service-step">
                            <div class="icon">
                                <img src="{{ asset('images/step2.png') }}" alt="Confirm Project Details" />
                            </div>
                            <div class="text">
                                <h3 class="step-title">Confirm Project Details</h3>
                                <p>Collaborate with our experts to finalize all the project requirements and milestones.</p>
                            </div>
                        </div>
                        <div class="service-step">
                            <div class="icon">
                                <img src="{{ asset('images/step3.png') }}" alt="Launch Your Project" />
                            </div>
                            <div class="text">
                                <h3 class="step-title">Launch Your Project</h3>
                                <p>Our team will begin working on your project, ensuring quality and timely delivery.</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="featured-service">
                    <img src="{{ asset('images/featured-service.png') }}" alt="Featured Service Image" />
                    <h3 class="featured-title">Custom Web Development</h3>
                    <p class="featured-subtitle">On-Demand | by Denexa Team</p>
                    <div class="service-icons">
                        <div class="icon">
                            <i class="fas fa-code"></i>
                        </div>
                        <div class="icon">
                            <i class="fas fa-laptop-code"></i>
                        </div>
                        <div class="icon">
                            <i class="fas fa-server"></i>
                        </div>
                    </div>
                    <div class="service-likes">
                        <div class="count">
                            <i class="fas fa-users"></i>
                            <span>50+ clients served</span>
                        </div>
                        <i class="far fa-heart"></i>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="showcase" class="features-showcase-section">
        <div class="container">
            <div class="row">
                <!-- Features Showcase Cards -->
                <div class="feature-item" data-scroll="fade-up">
                    <div class="feature-card">
                        <div class="feature-icon">
                            <i class="fas fa-laptop-code"></i>
                        </div>
                        <h3 class="feature-item-title">Responsive Design</h3>
                        <p class="feature-item-description">Our design adapts to all screen sizes, ensuring a seamless
                            experience on mobile, tablet, and desktop devices.</p>
                    </div>
                </div>

                <div class="feature-item" data-scroll="fade-up">
                    <div class="feature-card">
                        <div class="feature-icon">
                            <i class="fas fa-shield-alt"></i>
                        </div>
                        <h3 class="feature-item-title">Advanced Security</h3>
                        <p class="feature-item-description">Our platform incorporates state-of-the-art security features to
                            safeguard your data and ensure safe transactions.</p>
                    </div>
                </div>

                <div class="feature-item" data-scroll="fade-up">
                    <div class="feature-card">
                        <div class="feature-icon">
                            <i class="fas fa-cogs"></i>
                        </div>
                        <h3 class="feature-item-title">Custom Integrations</h3>
                        <p class="feature-item-description">Easily integrate with third-party applications to extend your
                            system’s capabilities and improve workflow efficiency.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="clients" class="clients-section">
        <div class="container">
            <h2 class="clients-header">Trusted by Leading Brands</h2>
            <div class="clients-logos">
                <div class="logo-item">
                    <img src="{{ asset('images/branding/client1.png') }}" alt="Client 1">
                </div>
                <div class="logo-item">
                    <img src="{{ asset('images/branding/client2.png') }}" alt="Client 2">
                </div>
                <div class="logo-item">
                    <img src="{{ asset('images/branding/client3.png') }}" alt="Client 3">
                </div>
                <div class="logo-item">
                    <img src="{{ asset('images/branding/client4.png') }}" alt="Client 4">
                </div>
                <div class="logo-item">
                    <img src="{{ asset('images/branding/client5.png') }}" alt="Client 5">
                </div>
            </div>
        </div>
    </section>

    <section id="testimonials" class="testimonials-section">
        <div class="container">
            <h2 class="testimonials-header">What Our Clients Say</h2>
            <div class="testimonials-carousel">
                <div class="testimonial-item">
                    <p class="testimonial-quote">"Denexa has transformed our business! Their innovative solutions are
                        unmatched."</p>
                    <p class="testimonial-author">— Jane Doe, CEO of Company A</p>
                </div>
                <div class="testimonial-item">
                    <p class="testimonial-quote">"Incredible support and amazing results. Highly recommend!"</p>
                    <p class="testimonial-author">— John Smith, CTO of Company B</p>
                </div>
                <div class="testimonial-item">
                    <p class="testimonial-quote">"A game-changer in our industry. We're so grateful for their expertise."
                    </p>
                    <p class="testimonial-author">— Emily Johnson, Marketing Director of Company C</p>
                </div>
            </div>
            <button class="carousel-button prev" onclick="prevTestimonial()">❮</button>
            <button class="carousel-button next" onclick="nextTestimonial()">❯</button>
        </div>
    </section>
@endsection
