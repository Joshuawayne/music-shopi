@extends('layouts.app')

@section('content')
<!-- Hero Section with Carousel -->
<div class="hero-section">
    <div id="carouselExampleCaptions" class="carousel slide mt-n4" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
            <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="{{ asset('storage/uploads/home-1.jpg') }}" class="d-block w-100 carousel-img" alt="Guitars">
                <div class="carousel-overlay"></div>
                <div class="carousel-caption d-none d-md-block">
                    <h2 class="animate__animated animate__fadeInDown">Premium Guitars</h2>
                    <p class="animate__animated animate__fadeInUp">Discover our collection of world-class guitars</p>
                    <a href="{{ route('product.indexByCategory', 1) }}" class="btn btn-hero animate__animated animate__fadeInUp">Explore Now</a>
                </div>
            </div>
            <div class="carousel-item">
                <img src="{{ asset('storage/uploads/home-2.jpg') }}" class="d-block w-100 carousel-img" alt="Drums">
                <div class="carousel-overlay"></div>
                <div class="carousel-caption d-none d-md-block">
                    <h2 class="animate__animated animate__fadeInDown">Professional Drums</h2>
                    <p class="animate__animated animate__fadeInUp">Feel the rhythm with our premium drum sets</p>
                    <a href="{{ route('product.indexByCategory', 2) }}" class="btn btn-hero animate__animated animate__fadeInUp">Shop Drums</a>
                </div>
            </div>
            <div class="carousel-item">
                <img src="{{ asset('storage/uploads/home-3.jpg') }}" class="d-block w-100 carousel-img" alt="Pianos">
                <div class="carousel-overlay"></div>
                <div class="carousel-caption d-none d-md-block">
                    <h2 class="animate__animated animate__fadeInDown">Digital Pianos & Keyboards</h2>
                    <p class="animate__animated animate__fadeInUp">Experience the perfect harmony of tradition and technology</p>
                    <a href="{{ route('product.indexByCategory', 3) }}" class="btn btn-hero animate__animated animate__fadeInUp">View Collection</a>
                </div>
            </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
</div>

<!-- Features Section -->
<div class="features-section">
    <div class="container">
        <div class="row">
            <div class="col-md-3">
                <div class="feature-box">
                    <i class="fas fa-truck"></i>
                    <h4>Free Delivery</h4>
                    <p>On orders above KES 50,000</p>
                </div>
            </div>
            <div class="col-md-3">
                <div class="feature-box">
                    <i class="fas fa-shield-alt"></i>
                    <h4>Secure Payment</h4>
                    <p>100% secure payment</p>
                </div>
            </div>
            <div class="col-md-3">
                <div class="feature-box">
                    <i class="fas fa-exchange-alt"></i>
                    <h4>Easy Returns</h4>
                    <p>30 days return policy</p>
                </div>
            </div>
            <div class="col-md-3">
                <div class="feature-box">
                    <i class="fas fa-headset"></i>
                    <h4>24/7 Support</h4>
                    <p>Dedicated support</p>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Popular Products Section -->
<div class="products-section">
    <div class="container">
        <div class="section-header">
            <h2>Popular Products</h2>
            <p>Discover our most loved instruments</p>
        </div>
        <div class="row">
            @foreach($products as $product)
            <div class="col-12 col-sm-6 col-lg-3 mb-4">
                <div class="product-card">
                    <div class="product-image">
                        <img src="{{ asset('storage/'.$product->image) }}" alt="{{ $product->title }}">
                        <div class="product-overlay">
                            <a href="{{ route('product.show', $product->id) }}" class="btn-overlay">View Details</a>
                        </div>
                    </div>
                    <div class="product-info">
                        <h3>{{ $product->title }}</h3>
                        <div class="product-price">KES {{ number_format($product->price, 2) }}</div>
                        <a href="{{ route('product.addToCart', $product->id) }}" class="btn-add-cart">
                            <i class="fas fa-shopping-cart"></i> Add to Cart
                        </a>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>

<!-- Categories Section -->
<div class="categories-section">
    <div class="container">
        <div class="section-header">
            <h2>Shop by Category</h2>
            <p>Find your perfect instrument</p>
        </div>
        <div class="row">
            @foreach($categories as $category)
            <div class="col-md-4 mb-4">
                <a href="{{ route('product.indexByCategory', $category->id) }}" class="category-card">
                    <div class="category-overlay"></div>
                    <img src="{{ asset('storage/uploads/home-' . (($loop->iteration - 1) % 3 + 1) . '.jpg') }}" alt="{{ $category->name }}">
                    <div class="category-content">
                        <h3>{{ $category->name }}</h3>
                        <p>Explore Collection</p>
                    </div>
                </a>
            </div>
            @endforeach
        </div>
    </div>
</div>

<!-- Social Media Section -->
<div class="social-section">
    <div class="container">
        <div class="section-header">
            <h2>Follow Us</h2>
            <p>Stay connected with us on social media</p>
        </div>
        <div class="social-grid">
            <a href="https://www.facebook.com" target="_blank" class="social-item facebook">
                <i class="fab fa-facebook-f"></i>
                <span>Facebook</span>
            </a>
            <a href="https://www.instagram.com" target="_blank" class="social-item instagram">
                <i class="fab fa-instagram"></i>
                <span>Instagram</span>
            </a>
            <a href="https://www.twitter.com" target="_blank" class="social-item twitter">
                <i class="fab fa-twitter"></i>
                <span>Twitter</span>
            </a>
            <a href="https://www.youtube.com" target="_blank" class="social-item youtube">
                <i class="fab fa-youtube"></i>
                <span>YouTube</span>
            </a>
        </div>
    </div>
</div>
@endsection

@section('script')
@if(session('success'))
<script>
    toastr.success("{{ session('success') }}");
</script>
@endif
@endsection