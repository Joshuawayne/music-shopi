<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- CSRF Token -->
  <meta name="csrf-token" content="{{ csrf_token() }}">

  <title>{{ config('app.name', 'Laravel') }}</title>

  <!-- Scripts -->
  <script src="{{ asset('js/app.js') }}" defer></script>
  <script src="{{ asset('js/jquery.min.js') }}"></script>
  <script src="{{ asset('js/bootstrap.min.js') }}"></script>
  <script src="{{ asset('js/jquery.dataTables.min.js') }}"></script>
  <script src="{{ asset('js/dataTables.bootstrap4.min.js') }}"></script>
  <script src="{{ asset('js/toastr.js') }}"></script>
  <script src="{{ asset('js/custom.js') }}"></script>

  <!-- Fonts -->
  <link rel="dns-prefetch" href="//fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">

  <!-- Styles -->
  <link href="{{ asset('css/app.css') }}" rel="stylesheet">
  <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
  <link href="{{ asset('css/dataTables.bootstrap4.min.css') }}" rel="stylesheet">
  <link href="{{ asset('css/toastr.min.css') }}" rel="stylesheet">
  <link href="{{ asset('css/custom.css') }}" rel="stylesheet">
  <style>
    .social-icon {
      width: 80px;
      height: 80px;
      display: flex;
      justify-content: center;
      align-items: center;
      border-radius: 50%;
      margin: 10px;
      font-size: 35px;
      text-decoration: none;
      transition: all 0.3s ease;
      position: relative;
      overflow: hidden;
    }

    .social-icon i {
      transition: all 0.3s ease;
      z-index: 1;
    }

    .social-icon:after {
      content: '';
      width: 100%;
      height: 100%;
      position: absolute;
      top: 0;
      left: 0;
      transform: scale(0);
      transition: all 0.3s ease;
      border-radius: 50%;
    }

    .social-icon:hover:after {
      transform: scale(1);
    }

    .social-icon:hover i {
      transform: scale(1.2);
    }

    .facebook {
      background: #E4E6EB;
      color: #0866FF;
    }

    .facebook:hover {
      color: white;
    }

    .facebook:after {
      background: #0866FF;
    }

    .instagram {
      background: #E4E6EB;
      color: #E4405F;
    }

    .instagram:hover {
      color: white;
    }

    .instagram:after {
      background: radial-gradient(circle at 30% 107%, #fdf497 0%, #fdf497 5%, #fd5949 45%,#d6249f 60%,#285AEB 90%);
    }

    .twitter {
      background: #E4E6EB;
      color: #1DA1F2;
    }

    .twitter:hover {
      color: white;
    }

    .twitter:after {
      background: #1DA1F2;
    }

    .youtube {
      background: #E4E6EB;
      color: #FF0000;
    }

    .youtube:hover {
      color: white;
    }

    .youtube:after {
      background: #FF0000;
    }

    .social-icon-container {
      display: flex;
      justify-content: center;
      align-items: center;
      flex-wrap: wrap;
      padding: 20px 0;
    }

    @keyframes float {
      0% {
        transform: translateY(0px);
      }
      50% {
        transform: translateY(-10px);
      }
      100% {
        transform: translateY(0px);
      }
    }

    .social-icon:hover {
      animation: float 2s ease-in-out infinite;
    }

    .hover-link:hover {
      color: #ffc107 !important;
      text-decoration: none;
      transition: color 0.3s ease;
    }

    footer .social-icon {
      width: 40px;
      height: 40px;
      font-size: 18px;
      margin: 5px;
    }

    footer .social-icon-container {
      margin-top: 20px;
    }

    footer hr {
      opacity: 0.2;
    }

    footer h5 {
      position: relative;
      padding-bottom: 12px;
    }

    footer h5:after {
      content: '';
      position: absolute;
      left: 0;
      bottom: 0;
      width: 50px;
      height: 2px;
      background: #ffc107;
    }

    footer ul li {
      transition: transform 0.3s ease;
    }

    footer ul li:hover {
      transform: translateX(5px);
    }

    footer .fas {
      color: #ffc107;
    }

    /* Header Styles */
    .navbar {
      padding: 1rem 0;
      box-shadow: 0 2px 10px rgba(0,0,0,0.1);
      background: linear-gradient(135deg, #1a1a1a 0%, #333333 100%);
    }

    .navbar-brand {
      font-size: 1.8rem;
      font-weight: 700;
      color: #ffc107 !important;
      text-transform: uppercase;
      letter-spacing: 1px;
      transition: all 0.3s ease;
    }

    .navbar-brand:hover {
      transform: translateY(-2px);
    }

    .nav-link {
      font-weight: 500;
      text-transform: uppercase;
      font-size: 0.9rem;
      letter-spacing: 0.5px;
      color: #fff !important;
      padding: 0.5rem 1rem !important;
      margin: 0 0.2rem;
      transition: all 0.3s ease;
      position: relative;
    }

    .nav-link:after {
      content: '';
      position: absolute;
      width: 0;
      height: 2px;
      bottom: 0;
      left: 50%;
      background-color: #ffc107;
      transition: all 0.3s ease;
      transform: translateX(-50%);
    }

    .nav-link:hover:after {
      width: 100%;
    }

    .nav-link.active:after {
      width: 100%;
    }

    .nav-item.dropdown:hover .dropdown-menu {
      display: block;
      animation: fadeIn 0.3s ease;
    }

    .dropdown-menu {
      border: none;
      border-radius: 8px;
      box-shadow: 0 4px 12px rgba(0,0,0,0.1);
      padding: 0.5rem 0;
      margin-top: 0;
      background: #fff;
    }

    .dropdown-item {
      font-size: 0.9rem;
      padding: 0.7rem 1.5rem;
      transition: all 0.3s ease;
      color: #333;
    }

    .dropdown-item:hover {
      background-color: #ffc107;
      color: #fff;
      transform: translateX(5px);
    }

    .cart-count {
      position: relative;
      background: #ffc107;
      color: #000;
      border-radius: 50%;
      padding: 0.2rem 0.5rem;
      font-size: 0.8rem;
      margin-left: 0.3rem;
      font-weight: bold;
    }

    .navbar-toggler {
      border: none;
      padding: 0.5rem;
    }

    .navbar-toggler:focus {
      box-shadow: none;
      outline: none;
    }

    .navbar-toggler-icon {
      background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 30 30'%3e%3cpath stroke='rgba(255, 255, 255, 1)' stroke-linecap='round' stroke-miterlimit='10' stroke-width='2' d='M4 7h22M4 15h22M4 23h22'/%3e%3c/svg%3e");
    }

    .search-form {
      position: relative;
      margin: 0 1rem;
    }

    .search-form .form-control {
      border-radius: 20px;
      padding-left: 1rem;
      padding-right: 2.5rem;
      background: rgba(255,255,255,0.1);
      border: 1px solid rgba(255,255,255,0.2);
      color: #fff;
    }

    .search-form .form-control:focus {
      background: rgba(255,255,255,0.15);
      box-shadow: none;
      border-color: #ffc107;
    }

    .search-form .form-control::placeholder {
      color: rgba(255,255,255,0.6);
    }

    .search-btn {
      position: absolute;
      right: 10px;
      top: 50%;
      transform: translateY(-50%);
      background: none;
      border: none;
      color: #ffc107;
      padding: 0;
    }

    @keyframes fadeIn {
      from {
        opacity: 0;
        transform: translateY(-10px);
      }
      to {
        opacity: 1;
        transform: translateY(0);
      }
    }

    /* Cart button styling */
    .cart-btn {
      background: #ffc107;
      color: #000 !important;
      border-radius: 20px;
      padding: 0.5rem 1.2rem !important;
      transition: all 0.3s ease;
      font-weight: 600;
    }

    .cart-btn:hover {
      background: #ffcd39;
      transform: translateY(-2px);
    }

    .cart-btn:after {
      display: none;
    }

    /* Auth Pages Styling */
    .auth-container {
      min-height: calc(100vh - 150px);
      display: flex;
      align-items: center;
      justify-content: center;
      padding: 2rem;
      background: linear-gradient(135deg, #f5f7fa 0%, #c3cfe2 100%);
    }

    .auth-box {
      background: white;
      border-radius: 15px;
      box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
      padding: 2.5rem;
      width: 100%;
      max-width: 500px;
      position: relative;
      overflow: hidden;
    }

    .auth-box.register {
      max-width: 600px;
    }

    .auth-header {
      text-align: center;
      margin-bottom: 2rem;
    }

    .auth-icon {
      font-size: 2.5rem;
      color: #ffc107;
      margin-bottom: 1rem;
      animation: bounce 2s infinite;
    }

    .auth-header h3 {
      font-size: 1.75rem;
      color: #2d3748;
      margin-bottom: 0.5rem;
    }

    .auth-subtitle {
      color: #718096;
      font-size: 0.95rem;
    }

    .auth-form .form-floating {
      position: relative;
    }

    .auth-form .form-control {
      height: 3.5rem;
      padding: 1rem 0.75rem;
      font-size: 1rem;
      border-radius: 10px;
      border: 2px solid #e2e8f0;
      transition: all 0.3s ease;
    }

    .auth-form .form-control:focus {
      border-color: #ffc107;
      box-shadow: 0 0 0 0.2rem rgba(255, 193, 7, 0.25);
    }

    .auth-form .form-floating label {
      padding: 1rem 0.75rem;
    }

    .auth-submit {
      height: 3.5rem;
      background: #ffc107;
      border: none;
      font-weight: 600;
      font-size: 1.1rem;
      transition: all 0.3s ease;
    }

    .auth-submit:hover {
      background: #e0a800;
      transform: translateY(-2px);
      box-shadow: 0 5px 15px rgba(224, 168, 0, 0.3);
    }

    .auth-forgot-link {
      color: #ffc107;
      text-decoration: none;
      font-size: 0.9rem;
      transition: all 0.3s ease;
    }

    .auth-forgot-link:hover {
      color: #e0a800;
      text-decoration: underline;
    }

    .auth-separator {
      text-align: center;
      margin: 2rem 0;
      position: relative;
    }

    .auth-separator::before,
    .auth-separator::after {
      content: '';
      position: absolute;
      top: 50%;
      width: calc(50% - 70px);
      height: 1px;
      background: #e2e8f0;
    }

    .auth-separator::before {
      left: 0;
    }

    .auth-separator::after {
      right: 0;
    }

    .auth-separator span {
      background: white;
      padding: 0 1rem;
      color: #718096;
      font-size: 0.9rem;
    }

    .auth-social {
      display: flex;
      justify-content: center;
      gap: 1rem;
      margin-bottom: 2rem;
    }

    .auth-social-btn {
      width: 45px;
      height: 45px;
      border-radius: 50%;
      display: flex;
      align-items: center;
      justify-content: center;
      text-decoration: none;
      color: white;
      transition: all 0.3s ease;
    }

    .auth-social-btn:hover {
      transform: translateY(-3px);
      box-shadow: 0 5px 15px rgba(0, 0, 0, 0.2);
    }

    .auth-social-btn.facebook {
      background: #1877f2;
    }

    .auth-social-btn.google {
      background: #ea4335;
    }

    .auth-social-btn.twitter {
      background: #1da1f2;
    }

    .auth-footer {
      text-align: center;
      color: #718096;
      font-size: 0.95rem;
    }

    .auth-link {
      color: #ffc107;
      text-decoration: none;
      font-weight: 600;
      transition: all 0.3s ease;
    }

    .auth-link:hover {
      color: #e0a800;
      text-decoration: underline;
    }

    @keyframes bounce {
      0%, 20%, 50%, 80%, 100% {
        transform: translateY(0);
      }
      40% {
        transform: translateY(-20px);
      }
      60% {
        transform: translateY(-10px);
      }
    }

    /* Form Validation Styling */
    .invalid-feedback {
      font-size: 0.85rem;
      margin-top: 0.25rem;
    }

    .form-control.is-invalid {
      border-color: #dc3545;
      background-image: none;
    }

    .form-control.is-invalid:focus {
      border-color: #dc3545;
      box-shadow: 0 0 0 0.2rem rgba(220, 53, 69, 0.25);
    }

    /* Responsive Design */
    @media (max-width: 576px) {
      .auth-box {
        padding: 2rem 1.5rem;
      }

      .auth-header h3 {
        font-size: 1.5rem;
      }

      .auth-icon {
        font-size: 2rem;
      }

      .auth-social-btn {
        width: 40px;
        height: 40px;
      }
    }

    /* Hero Section */
    .hero-section {
      position: relative;
      margin-top: -1.5rem;
    }

    .hero-section .carousel-item {
      height: 600px;
    }

    .hero-section .carousel-item img {
      object-fit: cover;
      height: 100%;
    }

    .carousel-overlay {
      position: absolute;
      top: 0;
      left: 0;
      right: 0;
      bottom: 0;
      background: linear-gradient(rgba(0,0,0,0.3), rgba(0,0,0,0.6));
    }

    .carousel-caption {
      bottom: 50%;
      transform: translateY(50%);
      padding: 0;
    }

    .carousel-caption h2 {
      font-size: 3.5rem;
      font-weight: 700;
      margin-bottom: 1rem;
      text-shadow: 2px 2px 4px rgba(0,0,0,0.3);
    }

    .carousel-caption p {
      font-size: 1.25rem;
      margin-bottom: 2rem;
      text-shadow: 1px 1px 2px rgba(0,0,0,0.3);
    }

    .btn-hero {
      background: #ffc107;
      color: #000;
      padding: 0.8rem 2rem;
      font-size: 1.1rem;
      font-weight: 600;
      border-radius: 50px;
      transition: all 0.3s ease;
    }

    .btn-hero:hover {
      background: #fff;
      color: #000;
      transform: translateY(-3px);
      box-shadow: 0 10px 20px rgba(0,0,0,0.2);
    }

    /* Features Section */
    .features-section {
      padding: 4rem 0;
      background: #f8f9fa;
    }

    .feature-box {
      text-align: center;
      padding: 2rem;
      transition: all 0.3s ease;
    }

    .feature-box:hover {
      transform: translateY(-10px);
    }

    .feature-box i {
      font-size: 2.5rem;
      color: #ffc107;
      margin-bottom: 1rem;
    }

    .feature-box h4 {
      font-size: 1.2rem;
      margin-bottom: 0.5rem;
      color: #2d3748;
    }

    .feature-box p {
      color: #718096;
      margin: 0;
    }

    /* Products Section */
    .products-section {
      padding: 4rem 0;
    }

    .section-header {
      text-align: center;
      margin-bottom: 3rem;
    }

    .section-header h2 {
      font-size: 2.5rem;
      color: #2d3748;
      margin-bottom: 0.5rem;
    }

    .section-header p {
      color: #718096;
      font-size: 1.1rem;
    }

    .product-card {
      background: #fff;
      border-radius: 15px;
      overflow: hidden;
      box-shadow: 0 5px 15px rgba(0,0,0,0.1);
      transition: all 0.3s ease;
    }

    .product-card:hover {
      transform: translateY(-10px);
      box-shadow: 0 10px 30px rgba(0,0,0,0.2);
    }

    .product-image {
      position: relative;
      height: 250px;
      overflow: hidden;
    }

    .product-image img {
      width: 100%;
      height: 100%;
      object-fit: cover;
      transition: all 0.3s ease;
    }

    .product-overlay {
      position: absolute;
      top: 0;
      left: 0;
      right: 0;
      bottom: 0;
      background: rgba(0,0,0,0.7);
      display: flex;
      align-items: center;
      justify-content: center;
      opacity: 0;
      transition: all 0.3s ease;
    }

    .product-card:hover .product-overlay {
      opacity: 1;
    }

    .btn-overlay {
      background: #ffc107;
      color: #000;
      padding: 0.8rem 1.5rem;
      border-radius: 50px;
      font-weight: 600;
      transform: translateY(20px);
      transition: all 0.3s ease;
    }

    .product-card:hover .btn-overlay {
      transform: translateY(0);
    }

    .product-info {
      padding: 1.5rem;
    }

    .product-info h3 {
      font-size: 1.1rem;
      margin-bottom: 0.5rem;
      color: #2d3748;
    }

    .product-price {
      color: #ffc107;
      font-size: 1.2rem;
      font-weight: 600;
      margin-bottom: 1rem;
    }

    .btn-add-cart {
      display: block;
      background: #2d3748;
      color: #fff;
      padding: 0.8rem;
      text-align: center;
      border-radius: 8px;
      transition: all 0.3s ease;
    }

    .btn-add-cart:hover {
      background: #ffc107;
      color: #000;
      text-decoration: none;
    }

    /* Categories Section */
    .categories-section {
      padding: 4rem 0;
      background: #f8f9fa;
    }

    .category-card {
      position: relative;
      display: block;
      border-radius: 15px;
      overflow: hidden;
      height: 300px;
    }

    .category-card img {
      width: 100%;
      height: 100%;
      object-fit: cover;
      transition: all 0.3s ease;
    }

    .category-overlay {
      position: absolute;
      top: 0;
      left: 0;
      right: 0;
      bottom: 0;
      background: linear-gradient(rgba(0,0,0,0.3), rgba(0,0,0,0.6));
      transition: all 0.3s ease;
    }

    .category-content {
      position: absolute;
      bottom: 0;
      left: 0;
      right: 0;
      padding: 2rem;
      color: #fff;
      transform: translateY(20px);
      transition: all 0.3s ease;
    }

    .category-card:hover img {
      transform: scale(1.1);
    }

    .category-card:hover .category-content {
      transform: translateY(0);
    }

    .category-content h3 {
      font-size: 1.5rem;
      margin-bottom: 0.5rem;
      text-shadow: 1px 1px 2px rgba(0,0,0,0.3);
    }

    .category-content p {
      margin: 0;
      opacity: 0.8;
    }

    /* Newsletter Section */
    .newsletter-section {
      padding: 4rem 0;
      background: linear-gradient(135deg, #2d3748 0%, #1a202c 100%);
      color: #fff;
    }

    .newsletter-section h3 {
      font-size: 2rem;
      margin-bottom: 0.5rem;
    }

    .newsletter-section p {
      opacity: 0.8;
      margin: 0;
    }

    .newsletter-form .form-control {
      height: 3.5rem;
      border-radius: 50px 0 0 50px;
      padding: 0 1.5rem;
      font-size: 1rem;
      border: none;
    }

    .newsletter-form .btn {
      border-radius: 0 50px 50px 0;
      padding: 0 2rem;
      background: #ffc107;
      border: none;
      color: #000;
      font-weight: 600;
    }

    /* Social Section */
    .social-section {
      padding: 4rem 0;
    }

    .social-grid {
      display: grid;
      grid-template-columns: repeat(4, 1fr);
      gap: 1.5rem;
      margin-top: 2rem;
    }

    .social-item {
      display: flex;
      flex-direction: column;
      align-items: center;
      justify-content: center;
      padding: 2rem;
      border-radius: 15px;
      color: #fff;
      transition: all 0.3s ease;
    }

    .social-item:hover {
      transform: translateY(-10px);
      text-decoration: none;
      color: #fff;
    }

    .social-item i {
      font-size: 2rem;
      margin-bottom: 1rem;
    }

    .social-item.facebook {
      background: #1877f2;
    }

    .social-item.instagram {
      background: linear-gradient(45deg, #f09433 0%, #e6683c 25%, #dc2743 50%, #cc2366 75%, #bc1888 100%);
    }

    .social-item.twitter {
      background: #1da1f2;
    }

    .social-item.youtube {
      background: #ff0000;
    }

    /* Responsive Design */
    @media (max-width: 768px) {
      .hero-section .carousel-item {
        height: 400px;
      }

      .carousel-caption h2 {
        font-size: 2.5rem;
      }

      .carousel-caption p {
        font-size: 1rem;
      }

      .social-grid {
        grid-template-columns: repeat(2, 1fr);
      }

      .newsletter-form {
        margin-top: 2rem;
      }
    }

    @media (max-width: 576px) {
      .hero-section .carousel-item {
        height: 300px;
      }

      .carousel-caption h2 {
        font-size: 2rem;
      }

      .feature-box {
        margin-bottom: 2rem;
      }

      .social-grid {
        grid-template-columns: 1fr;
      }
    }
  </style>
  <!-- Animate.css -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">
</head>

<body style="background-color: #ececec">
  <div id="app">
    <nav class="navbar navbar-expand-lg navbar-dark">
      <div class="container">
        <a class="navbar-brand" href="{{ route('home.index') }}">
          <i class="fas fa-music me-2"></i>MUZIO
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
          aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
              <a class="nav-link {{ request()->routeIs('home.index') ? 'active' : '' }}" href="{{ route('home.index') }}">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link {{ request()->routeIs('product.index') ? 'active' : '' }}" href="{{ route('product.index') }}">Products</a>
            </li>
            <li class="nav-item">
              <a class="nav-link {{ request()->routeIs('home.contact') ? 'active' : '' }}" href="{{ route('home.contact') }}">Contact</a>
            </li>
            @can('admin', App\User::class)
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="adminDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Admin
              </a>
              <ul class="dropdown-menu" aria-labelledby="adminDropdown">
                <li><a class="dropdown-item" href="{{ route('product.list') }}">Products</a></li>
                <li><a class="dropdown-item" href="{{ route('order.list') }}">Orders</a></li>
                <li><a class="dropdown-item" href="{{ route('tag.list') }}">Tags</a></li>
              </ul>
            </li>
            @endcan
          </ul>

          <form class="search-form d-flex" method="GET" action="{{ route('product.index') }}">
            <input class="form-control" type="search" placeholder="Search products..." name="search" aria-label="Search">
            <button class="search-btn" type="submit">
              <i class="fas fa-search"></i>
            </button>
          </form>

          <ul class="navbar-nav">
            @guest
            <li class="nav-item">
              <a class="nav-link" href="{{ route('login') }}">Login</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{ route('register') }}">Register</a>
            </li>
            @else
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                <i class="fas fa-user me-1"></i>{{ Auth::user()->name }}
              </a>
              <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="userDropdown">
                <li><a class="dropdown-item" href="{{ route('user.orders') }}">My Orders</a></li>
                <li><a class="dropdown-item" href="{{ route('user.edit') }}">Edit Profile</a></li>
                <li><hr class="dropdown-divider"></li>
                <li>
                  <a class="dropdown-item" href="{{ route('logout') }}"
                    onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                    Logout
                  </a>
                  <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                    @csrf
                  </form>
                </li>
              </ul>
            </li>
            @endguest
            <li class="nav-item">
              <a class="nav-link cart-btn" href="{{ route('product.cart') }}">
                <i class="fas fa-shopping-cart me-1"></i>Cart
                @if(session()->has('products'))
                <span class="cart-count">{{ count(session()->get('products')) }}</span>
                @endif
              </a>
            </li>
          </ul>
        </div>
      </div>
    </nav>

    <main class="pt-4 container">
      @yield('content')
    </main>
    <footer class="bg-dark text-white py-5">
      <div class="container">
        <div class="row">
          <div class="col-12 col-lg-4 mb-4 mb-lg-0">
            <h5 class="text-uppercase mb-4">About Muzio</h5>
            <p class="mb-4">Your premier destination for musical instruments in Kenya. We provide high-quality instruments, accessories, and exceptional customer service.</p>
            <div class="social-icon-container justify-content-start">
              <a href="https://www.facebook.com" target="_blank" class="social-icon facebook" title="Follow us on Facebook">
                <i class="fab fa-facebook-f"></i>
              </a>
              <a href="https://www.instagram.com" target="_blank" class="social-icon instagram" title="Follow us on Instagram">
                <i class="fab fa-instagram"></i>
              </a>
              <a href="https://www.twitter.com" target="_blank" class="social-icon twitter" title="Follow us on Twitter">
                <i class="fab fa-x-twitter"></i>
              </a>
              <a href="https://www.youtube.com" target="_blank" class="social-icon youtube" title="Subscribe to our YouTube">
                <i class="fab fa-youtube"></i>
              </a>
            </div>
          </div>
          
          <div class="col-12 col-lg-4 mb-4 mb-lg-0">
            <h5 class="text-uppercase mb-4">Quick Links</h5>
            <ul class="list-unstyled">
              <li class="mb-3"><a href="{{ route('home.index') }}" class="text-white text-decoration-none hover-link">Home</a></li>
              <li class="mb-3"><a href="{{ route('product.index') }}" class="text-white text-decoration-none hover-link">Products</a></li>
              <li class="mb-3"><a href="{{ route('home.contact') }}" class="text-white text-decoration-none hover-link">Contact</a></li>
              @auth
              <li class="mb-3"><a href="{{ route('user.orders') }}" class="text-white text-decoration-none hover-link">My Orders</a></li>
              @endauth
            </ul>
          </div>

          <div class="col-12 col-lg-4">
            <h5 class="text-uppercase mb-4">Contact Info</h5>
            <ul class="list-unstyled">
              <li class="mb-3">
                <i class="fas fa-phone me-2"></i>
                <a href="tel:+254720123456" class="text-white text-decoration-none hover-link">+254 720 123 456</a>
              </li>
              <li class="mb-3">
                <i class="fas fa-phone me-2"></i>
                <a href="tel:+254202123456" class="text-white text-decoration-none hover-link">+254 20 212 3456</a>
              </li>
              <li class="mb-3">
                <i class="fas fa-envelope me-2"></i>
                <a href="mailto:info@muzio.co.ke" class="text-white text-decoration-none hover-link">info@muzio.co.ke</a>
              </li>
              <li class="mb-3">
                <i class="fas fa-map-marker-alt me-2"></i>
                Kimathi Street, Nairobi CBD
              </li>
            </ul>
          </div>
        </div>

        <div class="row mt-4">
          <div class="col-12">
            <hr class="bg-light">
            <p class="text-center mb-0">
              {{ date('Y') }} Muzio Music Shop. All rights reserved.
            </p>
          </div>
        </div>
      </div>
    </footer>
  </div>
  @yield('script')
</body>

</html>