<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Login | Hospital</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">
    <style>
    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
        font-family: 'Poppins', sans-serif;
    }

    body {
        background: url("{{ asset('medi/assets/img/back.png') }}") no-repeat center center/cover;
        height: 100vh;
        display: flex;
        justify-content: center;
        align-items: center;
        position: relative;
    }

    body::before {
        content: "";
        position: absolute;
        width: 100%;
        height: 100%;
        background: rgba(0, 0, 0, 0.5);
        backdrop-filter: blur(4px);
        z-index: 1;
    }

    .container {
        position: relative;
        z-index: 2;
        width: 920px;
        display: flex;
        border-radius: 20px;
        overflow: hidden;
        box-shadow: 0 20px 60px rgba(0, 0, 0, 0.3);
        background: rgba(255, 255, 255, 0.1);
        backdrop-filter: blur(16px);
        border: 1px solid rgba(255, 255, 255, 0.2);
    }

    .left {
        flex: 1;
        padding: 40px;
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
        color: #fff;
        text-align: center;
        background: rgba(0, 0, 0, 0.3);
    }

    .left h1 {
        font-size: 36px;
        margin-bottom: 10px;
    }

    .left p {
        font-size: 16px;
    }

    .right {
        flex: 1;
        padding: 50px 40px;
        background: rgba(255, 255, 255, 0.95);
    }

    .right h2 {
        font-size: 28px;
        margin-bottom: 25px;
        color: #333;
        text-align: center;
    }

    .form-group {
        margin-bottom: 18px;
    }

    label {
        font-weight: 600;
        font-size: 14px;
        color: #444;
        display: block;
        margin-bottom: 6px;
    }

    input[type="email"],
    input[type="password"] {
        width: 100%;
        padding: 12px;
        border-radius: 8px;
        border: 1px solid #ccc;
        font-size: 15px;
        outline: none;
        transition: 0.3s;
    }

    input:focus {
        border-color: #4b70e2;
        box-shadow: 0 0 6px rgba(75, 112, 226, 0.4);
    }

    button {
        width: 100%;
        padding: 12px;
        background: #4b70e2;
        border: none;
        color: white;
        font-size: 16px;
        font-weight: 600;
        border-radius: 8px;
        margin-top: 20px;
        cursor: pointer;
        transition: all 0.3s ease-in-out;
    }

    button:hover {
        background: #3453c3;
        transform: translateY(-2px);
        box-shadow: 0 8px 20px rgba(75, 112, 226, 0.3);
    }

    .remember-forgot {
        display: flex;
        justify-content: space-between;
        align-items: center;
        margin-top: 10px;
        font-size: 13px;
    }

    .remember-forgot a {
        color: #4b70e2;
        text-decoration: none;
        font-weight: 500;
    }

    .register {
        text-align: center;
        margin-top: 20px;
        font-size: 14px;
    }

    .register a {
        color: #4b70e2;
        text-decoration: none;
        font-weight: 600;
    }

    @media (max-width: 768px) {
        .container {
            flex-direction: column;
            width: 95%;
            height: auto;
        }

        .left,
        .right {
            width: 100%;
            height: auto;
            padding: 30px;
        }

        .left h1 {
            font-size: 28px;
        }
    }
    </style>
</head>

<body>
    <div class="container">
        <div class="left">
            <h1>Welcome to MediCare</h1>
            <p>Your Health. Our Priority.</p>
        </div>
        <div class="right">
            <h2>Login</h2>
            <form method="POST" action="{{ route('login') }}">
                @csrf
                <div class="form-group">
                    <label for="email">Email Address</label>
                    <input type="email" id="email" name="email" required autofocus>
                </div>
                <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" id="password" name="password" required>
                </div>
                <div class="remember-forgot">
                    <label><input type="checkbox" name="remember"> Remember Me</label>
                    <a href="{{ route('password.request') }}">Forgot Password?</a>
                </div>
                <button type="submit">Login</button>
                <div class="register">
                    New User? <a href="{{ route('register') }}">Register Here</a>
                </div>
            </form>
        </div>
    </div>
</body>

</html>