<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>MedCare - Hospital Home</title>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" />
    <style>
    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
        font-family: 'Roboto', sans-serif;
    }

    body {
        background: #eef3f8;
        color: #333;
    }

    header {
        background: linear-gradient(135deg, #0b5ed7, #0863b8);
        color: white;
        padding: 20px 40px;
        display: flex;
        justify-content: space-between;
        align-items: center;
        flex-wrap: wrap;
        box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
    }

    header h1 {
        font-size: 30px;
    }

    nav {
        display: flex;
        align-items: center;
        gap: 20px;
    }

    nav a {
        color: white;
        text-decoration: none;
        font-weight: 500;
        transition: 0.3s ease;
    }

    nav a:hover {
        color: #ffd700;
    }

    .auth-dropdown {
        position: relative;
        display: inline-block;
        color: white;
        font-weight: bold;
        cursor: pointer;
    }

    .auth-dropdown .user-name {
        padding: 8px;
        display: flex;
        align-items: center;
        gap: 5px;
    }

    .auth-dropdown .dropdown-content {
        display: none;
        position: absolute;
        background-color: white;
        min-width: 150px;
        box-shadow: 0 8px 16px rgba(0, 0, 0, 0.15);
        right: 0;
        z-index: 10;
        border-radius: 5px;
        overflow: hidden;
    }

    .auth-dropdown .dropdown-content a,
    .auth-dropdown .dropdown-content form button {
        color: #333;
        padding: 12px 16px;
        text-decoration: none;
        display: block;
        background: white;
        border: none;
        width: 100%;
        text-align: left;
        cursor: pointer;
    }

    .auth-dropdown .dropdown-content a:hover,
    .auth-dropdown .dropdown-content form button:hover {
        background-color: #f5f5f5;
    }

    .auth-dropdown:hover .dropdown-content {
        display: block;
    }

    .btn-auth {
        padding: 8px 16px;
        background-color: #fff;
        color: #0b5ed7;
        border-radius: 20px;
        font-weight: 600;
        text-decoration: none;
        transition: 0.3s;
    }

    .btn-auth:hover {
        background-color: #ffd700;
        color: #000;
    }

    .hero {
        display: flex;
        flex-wrap: wrap;
        align-items: center;
        justify-content: space-between;
        padding: 60px 40px;
        background: linear-gradient(to bottom right, #ffffff, #e9f1ff);
    }

    .hero-text {
        flex: 1;
        max-width: 600px;
    }

    .hero-text h2 {
        font-size: 44px;
        color: #0b5ed7;
        margin-bottom: 15px;
        text-shadow: 1px 1px 2px rgba(0, 0, 0, 0.1);
    }

    .hero-text p {
        font-size: 18px;
        color: #555;
        line-height: 1.6;
    }

    .hero-img {
        flex: 1;
        text-align: center;
    }

    .hero-img img {
        width: 100%;
        max-width: 480px;
        border-radius: 10px;
        box-shadow: 0 8px 20px rgba(0, 0, 0, 0.1);
    }

    .features {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(260px, 1fr));
        gap: 30px;
        padding: 60px 40px;
        background: #f2f7ff;
    }

    .feature-box {
        background: rgba(255, 255, 255, 0.9);
        backdrop-filter: blur(10px);
        border-radius: 12px;
        padding: 30px;
        text-align: center;
        transition: transform 0.3s;
        box-shadow: 0 4px 20px rgba(0, 0, 0, 0.05);
    }

    .feature-box:hover {
        transform: translateY(-8px);
    }

    .feature-box i {
        font-size: 42px;
        color: #0b5ed7;
        margin-bottom: 15px;
    }

    .feature-box h3 {
        font-size: 20px;
        margin-bottom: 10px;
        color: #222;
    }

    .feature-box p {
        color: #555;
        font-size: 15px;
    }

    footer {
        background: #0b5ed7;
        color: white;
        padding: 25px 40px;
        text-align: center;
    }

    @media(max-width: 768px) {
        header {
            flex-direction: column;
            text-align: center;
            gap: 10px;
        }

        nav {
            flex-wrap: wrap;
            justify-content: center;
        }

        .hero {
            flex-direction: column;
            text-align: center;
            padding: 40px 20px;
        }

        .hero-text h2 {
            font-size: 32px;
        }

        .hero-img img {
            width: 90%;
        }
    }
    </style>
</head>

<body>
    <!-- Header -->
    <header>
        <h1>MedCare Hospital</h1>
        <nav>
            <a href="#">Home</a>
            <a href="#">About</a>
            <a href="#">Services</a>
            <a href="#">Contact</a>

            @if(Route::has('login'))
            @auth
            <div class="auth-dropdown">
                <span class="user-name">{{ Auth::user()->name }} <i class="fa fa-caret-down"></i></span>
                <div class="dropdown-content">
                    <a href="{{ route('profile.show') }}">Profile</a>
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf
                        <button type="submit">Logout</button>
                    </form>
                </div>
            </div>
            @else
            <a href="{{ route('register') }}" class="btn-auth">Register</a>
            <a href="{{ route('login') }}" class="btn-auth">Login</a>
            @endauth
            @endif
        </nav>
    </header>

    <!-- Hero Section -->
    <section class="hero">
        <div class="hero-text">
            <h2>Your Health, Our Priority</h2>
            <p>Providing compassionate care and cutting-edge medical services to help you stay healthy and strong.</p>
        </div>
        <div class="hero-img">
            <img src="{{ asset('medi/assets/img/about.jpg') }}" alt="About Image">
        </div>
    </section>

    <!-- Features Section -->
    <section class="features">
        <div class="feature-box">
            <i class="fas fa-user-md"></i>
            <h3>Qualified Doctors</h3>
            <p>Our team consists of top specialists across all departments.</p>
        </div>
        <div class="feature-box">
            <i class="fas fa-hospital"></i>
            <h3>Modern Equipment</h3>
            <p>We use state-of-the-art technology for accurate diagnosis and treatment.</p>
        </div>
        <div class="feature-box">
            <i class="fas fa-ambulance"></i>
            <h3>24/7 Emergency</h3>
            <p>Ambulance and emergency care available round the clock.</p>
        </div>
        <div class="feature-box">
            <i class="fas fa-prescription-bottle-alt"></i>
            <h3>Pharmacy</h3>
            <p>In-house pharmacy providing essential medicines instantly.</p>
        </div>
    </section>

    <!-- Footer -->
    <footer>
        &copy; 2025 MedCare Hospital. All rights reserved.
    </footer>
</body>

</html>