<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Animated Registration Form</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }
        body {
            display: flex;
            align-items: center;
            justify-content: center;
            min-height: 100vh;
            background: linear-gradient(135deg, #7b7383, #2575fc);
        }
        .container {
            background: #fff;
            padding: 40px;
            max-width: 400px;
            width: 100%;
            border-radius: 15px;
            box-shadow: 0 15px 25px rgba(0, 0, 0, 0.2);
            animation: fadeIn 1s ease-in-out;
        }
        .container h2 {
            text-align: center;
            color: #333;
            margin-bottom: 20px;
            font-size: 28px;
            font-weight: bold;
            animation: slideInDown 0.8s ease-out;
        }
        .form-group {
            margin-bottom: 25px;
            position: relative;
            overflow: hidden;
        }
        .form-group label {
            position: absolute;
            top: 12px;
            left: 15px;
            font-size: 14px;
            color: #666;
            transition: 0.3s ease;
            pointer-events: none;
        }
        .form-group input {
            width: 100%;
            padding: 15px;
            font-size: 16px;
            border: 1px solid #ccc;
            border-radius: 10px;
            background: transparent;
            transition: 0.3s border-color;
            outline: none;
        }
        .form-group input:focus {
            border-color: #2575fc;
        }
        .form-group input:focus + label,
        .form-group input:not(:placeholder-shown) + label {
            top: -10px;
            left: 10px;
            font-size: 12px;
            color: #2575fc;
            background: #fff;
            padding: 0 5px;
        }
        .submit-btn {
            width: 100%;
            padding: 15px;
            border: none;
            border-radius: 10px;
            background: #2575fc;
            color: #fff;
            font-size: 18px;
            font-weight: bold;
            cursor: pointer;
            transition: 0.3s;
            position: relative;
            overflow: hidden;
        }
        .submit-btn:hover {
            background: #6a11cb;
        }
        .submit-btn::before {
            content: "";
            position: absolute;
            top: 50%;
            left: 50%;
            width: 300%;
            height: 300%;
            background: rgba(255, 255, 255, 0.15);
            border-radius: 50%;
            transform: translate(-50%, -50%) scale(0);
            transition: transform 0.6s ease;
        }
        .submit-btn:hover::before {
            transform: translate(-50%, -50%) scale(1);
        }
        .form-footer {
            text-align: center;
            margin-top: 15px;
            color: #666;
            font-size: 14px;
        }
        .form-footer a {
            color: #2575fc;
            text-decoration: none;
            transition: color 0.3s;
        }
        .form-footer a:hover {
            color: #6a11cb;
        }
        /* Animations */
        @keyframes fadeIn {
            0% {
                opacity: 0;
                transform: translateY(20px);
            }
            100% {
                opacity: 1;
                transform: translateY(0);
            }
        }
        @keyframes slideInDown {
            0% {
                opacity: 0;
                transform: translateY(-30px);
            }
            100% {
                opacity: 1;
                transform: translateY(0);
            }
        }
    </style>
</head>
<body>

    <div class="container">
        <h2>Create Account</h2>
        <form action="/register" method="POST">
            <div class="form-group">
                <input type="text" id="name" name="name" required placeholder=" ">
                <label for="name">Full Name</label>
            </div>
            <div class="form-group">
                <input type="email" id="email" name="email" required placeholder=" ">
                <label for="email">Email Address</label>
            </div>
            <div class="form-group">
                <input type="password" id="password" name="password" required placeholder=" ">
                <label for="password">Password</label>
            </div>
            <div class="form-group">
                <input type="password" id="confirm-password" name="confirm_password" required placeholder=" ">
                <label for="confirm-password">Confirm Password</label>
            </div>
            <button type="submit" class="submit-btn">Register</button>
        </form>
        <div class="form-footer">
            Already have an account? <a href="/login">Login here</a>
        </div>
    </div>

</body>
</html>
