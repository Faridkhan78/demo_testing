<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Form</title>
    
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
            height: 100vh;
            background: linear-gradient(135deg, #6a11cb, #7084a7);
        }

        .container {
            background: #fff;
            padding: 40px;
            max-width: 400px;
            width: 100%;
            border-radius: 15px;
            box-shadow: 0 15px 25px rgba(0, 0, 0, 0.2);
            transition: transform 0.3s ease;
        }

        .container:hover {
            transform: scale(1.02);
        }

        .container h2 {
            text-align: center;
            color: #333;
            margin-bottom: 20px;
            font-size: 28px;
            font-weight: bold;
        }

        .form-group {
            margin-bottom: 20px;
            position: relative;
        }

        .form-group label {
            font-size: 14px;
            color: #666;
            position: absolute;
            top: 12px;
            left: 15px;
            transition: all 0.3s ease;
            pointer-events: none;
        }

        .form-group input {
            width: 100%;
            padding: 15px;
            font-size: 16px;
            border: 1px solid #ccc;
            border-radius: 10px;
            transition: border-color 0.3s;
            outline: none;
        }

        .form-group input:focus {
            border-color: #2575fc;
        }

        .form-group input:focus+label,
        .form-group input:not(:placeholder-shown)+label {
            top: -10px;
            left: 12px;
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
            transition: background-color 0.3s ease;
        }

        .submit-btn:hover {
            background: #6a11cb;
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
            transition: color 0.3s ease;
        }

        .form-footer a:hover {
            color: #6a11cb;
        }
    </style>
</head>

<body>
    <div class="container">
        {{-- {{$errors}} --}}
        <h2>Create Account</h2>
        <div id="message"></div> <!-- Div to display success or error messages -->
        <form id="registerForm">
            @csrf
            <div class="form-group">
                <input type="text" id="username" name="username" placeholder=" ">
                <label for="username">User Name</label>
                {{-- <span style="color: red;" class="error-username"></span> --}}
                <span style="color: red;">
                    @error('username')
                        {{ $message }}
                    @enderror
                </span>
            </div>

            <div class="form-group">
                <input type="email" id="email" name="email" placeholder=" ">
                <label for="email">Email Address</label>
                {{-- <span style="color: red;" class="error-email"></span> --}}
                <span style="color: red;">
                    @error('email')
                        {{ $message }}
                    @enderror
                </span>
            </div>
            <div class="form-group">
                <input type="password" id="password" name="password" placeholder=" ">
                <label for="password">Password</label>
                {{-- <span style="color: red;" class="error-password"></span> --}}
                <span style="color: red;">
                    @error('password')
                        {{ $message }}
                    @enderror
                </span>
            </div>
            <div class="form-group">
                <input type="mobile" id="mobile" name="mobile" onkeypress="return isNumberKey(event)"
                    placeholder=" " maxlength="10">
                <label for="mobile">Mobile</label>
                {{-- <span style="color: red;" class="error-mobile"></span> --}}
                <span style="color: red;">
                    @error('mobile')
                        {{ $message }}
                    @enderror
                </span>
            </div>
            <button type="submit" id="submitbtn" name="submit" class="submit-btn">Register</button>
        </form>
        <div class="form-footer">
            Already have an account? <a href="{{ route('loginpage') }}">Login here</a>
        </div>
    </div>

</body>

</html>
<script>
    function isNumberKey(evt) {
        var charCode = (evt.which) ? evt.which : evt.keyCode;
        // Allow only numbers (48-57 represent '0'-'9')
        if (charCode > 31 && (charCode < 48 || charCode > 57)) {
            return false;
        }
        return true;
    }
</script>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<script>
    function isNumberKey(evt) {
        var charCode = (evt.which) ? evt.which : evt.keyCode;
        return !(charCode > 31 && (charCode < 48 || charCode > 57));
    }

    // $(document).ready(function () {
    //     $('#submitbtn').on('click', function (event) {
           
    //         event.preventDefault(); // Prevent default form submission
    //           var data = $('#registerForm')[0];
    //           var form = new FormData(data);
    //           console.log(form);
    //         // Clear previous error messages
    //         // $('.error-username, .error-email, .error-password, .error-mobile').text('');

    //         $.ajax({
    //             url: "{{ route('registerSave') }}", // Your route to handle registration
    //             method: "POST",
    //             data:  // Serialize form data
    //             contentType: "application/x-www-form-urlencoded",
    //             dataType: "json", // Return data type
    //             success: function (response) {
    //                 $('#message').html('<p style="color: green;">' + response.message + '</p>');
    //                 $('#registerForm')[0].reset(); // Clear form fields
    //             },
    //             error: function (xhr) {
    //                 let errors = xhr.responseJSON.errors;
    //                 if (errors) {
    //                     // Display individual error messages
    //                     if (errors.username) $('.error-username').text(errors.username[0]);
    //                     if (errors.email) $('.error-email').text(errors.email[0]);
    //                     if (errors.password) $('.error-password').text(errors.password[0]);
    //                     if (errors.mobile) $('.error-mobile').text(errors.mobile[0]);
    //                 }
    //             }
    //         });
    //     });
    // });

    $(document).ready(function () {
    $('#submitbtn').on('click', function (event) {
        event.preventDefault(); // Prevent default form submission

        var data = $('#registerForm')[0]; // Get the form element
        var formData = new FormData(data); // Create a FormData object from the form

        $.ajax({
            url: "{{ route('registerSave') }}", // Laravel route to handle form data
            type: "POST",
            data: formData,
            processData: false, // Prevent jQuery from processing the data
            contentType: false, // Prevent jQuery from setting contentType
            success: function (response) {
                // Handle success response
                console.log("Form submitted successfully");
                console.log(response);
                $('#message').html('<p style="color: green;">' + response.message + '</p>');
                $('#registerForm')[0].reset(); // Clear form fields after successful submission
            },
            error: function (xhr) {
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

{{-- <script type="text/javascript"> 
    if ( window.history.replaceState ) {
      window.history.replaceState( null, null, window.location.href );
    }
  </script> --}}