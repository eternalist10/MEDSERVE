<!DOCTYPE html>
<html>
<head>
    <title>MedServe - Registration</title>
    <?php require "assets/autoloader.php"; ?>
    <style type="text/css">
        <?php include "css/customStyle.css"; ?>
        body {
            background: linear-gradient(80deg, #00bbf0, #f70776);
            background-size: cover;
            font-family: 'Poppins', sans-serif;
            margin: 0;
            padding: 0;
            min-height: 100vh;
            transition: background-color 0.3s, color 0.3s;
        }

        body.dark-mode {
            background: linear-gradient(135deg, #333, #111); /* Change background color for dark mode */
            color: #fff; /* Change text color for dark mode */
        }

        .container {
          display: flex;
          flex-direction: column;
          align-items: center;
        }

        .header{
            text-align: center;
            padding: 5px; /* Reduce padding */
            width: 200px; /* Adjust width */
            margin: 5px auto; /* Center the header */
        }

        .header h1 {
            color: #ffffff;
            font-size: 36px;
            text-shadow: 2px 2px 2px rgba(0, 0, 0, 0.3);
        }

        .register-container {
            position: absolute;
            height: 78vh;
            top: 55%;
            left: 50%;
            transform: translate(-50%, -50%);
            width: 400px;
            padding: 10px 20px 20px;
            border-radius: 30px;
            background: #ffffff;
            box-shadow: 5px 5px 10px rgb(255, 255, 255), -5px -5px 10px rgb(255, 255, 255);
        }

        .register-container h2{
            text-align: center;
            padding: 10px;
            width: 200px;
            margin: 10px auto;
            color: #333;
        }

        .form-group {
            margin-bottom: 15px;
        }

        .form-group input{
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5rem;
            color: #333;
        }

        .form-group label{
            color: #333;
        }

        .btn-primary {
            width: 100%;
            padding: 10px;
            border: none;
            border-radius: 5px;
            background-color: #007bff;
            color: #fff;
            cursor: pointer;
            transition: background-color 0.3s;
        }
        .btn-primary:hover {
            background-color: #0056b3;
        }
        .register-link, .login-link {
            text-align: center;
            margin-top: 15px;
            color: #333;
        }
        .register-link a, .login-link a{
            color: #007bff;
            text-decoration: none;
            font-weight: bold;
        }
    

        /* Dark Mode */

        body.dark-mode {
            background: linear-gradient(135deg, #333, #111); /* Change background color for dark mode */
            color: #fff; /* Change text color for dark mode */
        }

        #darkModeText {
          font-weight: 500;
          margin-left: 10px;
        }

        .toggle-container {
            position: fixed;
            top: 20px;
            right: 20px;
            z-index: 1000;
            display: flex;
            align-items: center;
        }

        .switch {
            position: relative;
            display: inline-block;
            width: 60px;
            height: 34px;
        }

        .switch input {
            opacity: 0;
            width: 0;
            height: 0;
        }

        .slider {
            position: absolute;
            cursor: pointer;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background-color: #ccc;
            -webkit-transition: .4s;
            transition: .4s;
            border-radius: 34px;
        }

        .slider:before {
            position: absolute;
            content: "";
            height: 26px;
            width: 26px;
            left: 4px;
            bottom: 4px;
            background-color: white;
            -webkit-transition: .4s;
            transition: .4s;
            border-radius: 50%;
        }

        input:checked + .slider {
            background-color: #2196F3;
        }

        input:focus + .slider {
            box-shadow: 0 0 1px #2196F3;
        }

        input:checked + .slider:before {
            -webkit-transform: translateX(26px);
            -ms-transform: translateX(26px);
            transform: translateX(26px);
        }

        .slider.round {
            border-radius: 34px;
        }

        .slider.round:before {
            border-radius: 50%;
        }
        
        .pwd{
            display:flex;
            align-items:center;
            gap: 10px;
            margin-bottom: 10px;
            margin-left: 3px;
        }

        .pwd #showPassword{
            margin-top:0px;
        }

    </style>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap">
</head>
<body>
    <div class="container">

        <div class="header">
            <h1>Medserve</h1>
        </div>

        <div class="register-container">
            <h2>Registration</h2>
            <form action="register_process.php" method="post">
                <div class="form-group">
                    <input type="text" name="fullname" class="form-control" placeholder="Full Name" required>
                </div>
                <div class="form-group">
                    <input type="email" name="email" class="form-control" placeholder="Email" required>
                </div>
                <div class="form-group">
                    <input type="password" name="password" id="password" class="form-control" placeholder="Password" required>
                </div>
                <span class="pwd">
                    <input type="checkbox" id="showPassword"><h5 style="display:inline-block">Show Password</h4>
                </span>
                <div class="form-group">
                    <input type="tel" name="phone" class="form-control" placeholder="Phone Number" required>
                </div>
                <div class="form-group">
                    <label for="picture">Profile Picture</label>
                    <input type="file" name="picture" id="picture" class="form-control-file" accept="image/*" required>
                </div>
                <button type="submit" name="register" class="btn btn-primary btn-block btn-flat">Register</button>
                
                <div class="login-link">
                    <p>Already have an account? <a href="login.php">Log in</a>.</p>
                </div>
            </form>
        </div>

        <div class="toggle-container">
          <label class="switch">
              <input type="checkbox" id="darkModeToggle">
              <span class="slider round"></span>
          </label>
          <span id="darkModeText">Dark Mode</span>
      </div>

    </div>

    <script>
    const darkModeToggle = document.getElementById('darkModeToggle');
    const body = document.body;

    darkModeToggle.addEventListener('change', () => {
        if (darkModeToggle.checked) {
            body.classList.add('dark-mode');
        } else {
            body.classList.remove('dark-mode');
        }
    });

    const showPasswordCheckbox = document.getElementById('showPassword');
    const passwordInput = document.getElementById('password');
    showPasswordCheckbox.addEventListener('change', function() {
        if (this.checked) {
            passwordInput.type = 'text';
        } else {
            passwordInput.type = 'password';
        }
    });

    </script>

</body>

</html>
