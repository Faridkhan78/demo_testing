<!DOCTYPE html>
<html>
<head>
    <title>Create Account</title>
    <!-- Include jQuery -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>
<body>

<div class="container">
    <h2>Create Account</h2>
    <div id="message"></div> <!-- Div to display success or error messages -->

    <form id="registerForm" method="POST">
        @csrf
        <div class="form-group">
            <input type="text" id="username" name="username" placeholder=" ">
            <label for="username">User Name</label>
            <span style="color: red;" class="error-username"></span>
        </div>

        <div class="form-group">
            <input type="email" id="email" name="email" placeholder=" ">
            <label for="email">Email Address</label>
            <span style="color: red;" class="error-email"></span>
        </div>

        <div class="form-group">
            <input type="password" id="password" name="password" placeholder=" ">
            <label for="password">Password</label>
            <span style="color: red;" class="error-password"></span>
        </div>

        <div class="form-group">
            <input type="text" id="mobile" name="mobile" onkeypress="return isNumberKey(event)" placeholder=" " maxlength="10">
            <label for="mobile">Mobile</label>
            <span style="color: red;" class="error-mobile"></span>
        </div>

        <button type="submit" class="submit-btn">Register</button>
    </form>

    <div class="form-footer">
        Already have an account? <a href="{{ route('loginpage') }}">Login here</a>
    </div>
</div>

<script>
    function isNumberKey(evt) {
        var charCode = (evt.which) ? evt.which : evt.keyCode;
        return !(charCode > 31 && (charCode < 48 || charCode > 57));
    }

    $(document).ready(function () {
        $('#registerForm').on('submit', function (event) {
            event.preventDefault(); // Prevent default form submission to avoid page reload

            // Clear previous error messages
            $('.error-username, .error-email, .error-password, .error-mobile').text('');
            $('#message').html(''); // Clear previous messages

            // $.ajax({
            //     url: "{{ route('registerSave') }}", // Laravel route to handle registration
            //     method: "POST",
            //     data: $(this).serialize(), // Serialize form data
            //     success: function (response) {
            //         $('#message').html('<p style="color: green;">' + response.message + '</p>');
            //         $('#registerForm')[0].reset(); // Clear form fields after successful submission
            //     },
            //     error: function (xhr) {
            //         let errors = xhr.responseJSON.errors;
            //         if (errors) {
            //             // Display individual error messages
            //             if (errors.username) $('.error-username').text(errors.username[0]);
            //             if (errors.email) $('.error-email').text(errors.email[0]);
            //             if (errors.password) $('.error-password').text(errors.password[0]);
            //             if (errors.mobile) $('.error-mobile').text(errors.mobile[0]);
            //         }
            //     }
            // });
        });
    });
</script>

</body>
</html>
