<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Animated Login Form</title>
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
            background: linear-gradient(135deg, #3498db, #8e44ad);
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
            border-color: #3498db;
        }

        .form-group input:focus+label,
        .form-group input:not(:placeholder-shown)+label {
            top: -10px;
            left: 12px;
            font-size: 12px;
            color: #3498db;
            background: #fff;
            padding: 0 5px;
        }

        .submit-btn {
            width: 100%;
            padding: 15px;
            border: none;
            border-radius: 10px;
            background: #3498db;
            color: #fff;
            font-size: 18px;
            font-weight: bold;
            cursor: pointer;
            transition: 0.3s;
            position: relative;
            overflow: hidden;
        }

        .submit-btn:hover {
            background: #8e44ad;
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
            color: #3498db;
            text-decoration: none;
            transition: color 0.3s;
        }

        .form-footer a:hover {
            color: #8e44ad;
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
        
        .gmaillogin-btn {
            width: 100%;
            padding: 15px;
            border: none;
            border-radius: 10px;
            background: #ca8f94;
            color: #fff;
            font-size: 18px;
            font-weight: bold;
            cursor: pointer;
            transition: 0.3s;
            position: relative;
            overflow: hidden;
        }
        .gmaillogin-btn:hover {
            background: #675816;
        }

    </style>
</head>

<body>

    <div class="container">
        <h2>Login</h2>

        {{-- <form action="{{ route('loginMatch') }}" method="POST"> --}}
        <form id="loginForm">
            @csrf
            <div class="form-group">
                <input type="email" id="email" name="email" placeholder=" ">
                <label for="">Email Address</label>
                <span style="color: red;">
                    @error('email')
                        {{ $message }}
                    @enderror
                </span>
            </div>
            <div class="form-group">
                <input type="password" id="password" name="password" placeholder=" ">
                <label for="password">Password</label>
                <span style="color: red;">
                    @error('password')
                        {{ $message }}
                    @enderror
                </span>
            </div>
            <button type="submit" id="submitbtn" class="submit-btn">Login</button>
            or
            

        </form>
        {{-- <button type="submit"  id="" class="submit-btn">Login with Gmail</button> --}}
        <div>
            <a href="{{route('google-auth')}}" class="btn btn-primary gmaillogin-btn">
                Login with Gmail
            </a>
        </div>
        <div class="form-footer">
            Don’t have an account? <a href="{{ route('register') }}">Register here</a>
        </div>

        
    </div>
    

</body>

</html>

<script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4="
    crossorigin="anonymous"></script>

<script>
    $('#search').on('keyup', function() {
        $value = $(this).val();
        if ($value) {
            $('.alldata').hide();
            $('.searchdata').show();
        } else {
            $('.alldata').show();
            $('.searchdata').hide();
        }

        $.ajax({
            type: 'get',
            url: "{{ route('search') }}",
            data: {
                'search': $value
            },
            success: function(data) {
                console.log(data);
                $('#tbody').html(data);

            }
        })
    });
</script>

<script>
    $(document).ready(function() {
        $('#submitbtn').on('click', function(event) {
            event.preventDefault(); // Prevent default form submission

            var data = $('#loginForm')[0]; // Get the form element
            var formData = new FormData(data); // Create a FormData object from the form

            $.ajax({
                url: "{{ route('loginMatch') }}", // Laravel route to handle form data
                type: "POST",
                data: formData,
                processData: false, // Prevent jQuery from processing the data
                contentType: false, // Prevent jQuery from setting contentType
                success: function(response) {
                    // Handle success response
                    console.log("Form submitted successfully");
                    console.log(response);
                    // $('#message').html('<p style="color: green;">' + response.message + '</p>');
                    // $('#registerForm')[0].reset(); // Clear form fields after successful submission
                    setTimeout(function() {
                        window.location.href = "{{ route('loginpage') }}";
                    }, 2000);
                },
                error: function(xhr) {
                    // Handle error response
                    console.log("Error submitting form");
                    let errors = xhr.responseJSON.errors;
                    if (errors) {
                        if (errors.username) $('.error-username').text(errors.username[0]);
                        if (errors.email) $('.error-email').text(errors.email[0]);
                        if (errors.password) $('.error-password').text(errors.password[0]);
                        if (errors.mobile) $('.error-mobile').text(errors.mobile[0]);
                    }
                }
            });
        });
    });
</script>
