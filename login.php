<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <!-- Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #f2f3f5;
        }

        .login-container {
            min-height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .login-box {
            background-color: white;
            padding: 40px;
            border-radius: 10px;
            /* box-shadow: 0px 10px 30px rgba(0, 0, 0, 0.1); */
            width: 100%;
            max-width: 600px;
            /* Limiting the width of the box */
        }

        .login-image {
            max-width: 100%;
            height: auto;
            margin-right: 20px;
        }

        .login-options button {
            margin-right: 5px;
        }

        .form-control {
            border-radius: 5px;
            padding-left: 15px;
        }

        .btn-primary {
            border-radius: 5px;
        }

        .text-muted {
            font-size: 14px;
        }

        /* Mobile responsiveness */
        @media (max-width: 768px) {
            .login-image {
                margin-right: 0;
                margin-bottom: 20px;
            }

            .login-container {
                flex-direction: column;
            }

            .login-box {
                width: 90%;
                /* Reducing width for smaller screens */
            }
        }
    </style>
</head>

<body>

    <div class="container-fluid login-container">
        <div class="container col-lg-9 col-md-12 text-center bg-white rounded-3">
            <div class="row align-items-center justify-content-center">
                <div class="col-lg-6 col-md-6 d-none d-md-block">
                    <img src="assets/images/6333040.jpg" alt="Login Image" class="login-image">
                </div>
                <div class="col-lg-6 col-md-6">
                    <div class="login-box">
                        <h4 class="text-center d-flex justify-content-center">Login to your account</h4>
                        <div class="login-options text-center d-flex mt-5 col-12" style="justify-content: center;">
                            <button class="btn btn-outline-primary " id="userLoginBtn">Login as User</button>
                            <button class="btn btn-primary " id="adminLoginBtn">Login as Admin</button>
                        </div>
                        <form class="mt-4" id="loginForm">
                            <div id="userFields">
                                <div class="mb-3">
                                    <label for="userEmail" class="form-label d-flex fw-medium""> Enter Your User Email</label>
                                    <input type=" email" class="form-control" id="userEmail" placeholder="Enter your email" required>
                                </div>
                                <div class="mb-3">
                                    <label for="userPassword" class="form-label d-flex fw-medium"">Enter Your User Password</label>
                                    <input type=" password" class="form-control" id="userPassword" placeholder="Enter your password" required>
                                </div>
                            </div>
                            <div id="adminFields" style="display: none;">
                                <div class="mb-3">
                                    <label for="adminUsername" class="form-label d-flex fw-medium"">Enter Your Admin Email</label>
                                    <input type=" email" class="form-control" id="adminUsername" placeholder="Enter admin email" required>
                                </div>
                                <div class="mb-3">
                                    <label for="adminPassword" class="form-label d-flex fw-medium"> Enter Your Admin Password</label>
                                    <input type="password" class="form-control" id="adminPassword" placeholder="Enter admin password" required>
                                </div>
                            </div>
                            <div class="d-grid">
                                <button type="submit" class="btn btn-primary">Log In</button>
                            </div>
                            <div class="text-center mt-3">
                                <span class="text-muted">Don't have an account? <a href="#">Register</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <!-- Bootstrap 5 JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const userLoginBtn = document.getElementById('userLoginBtn');
            const adminLoginBtn = document.getElementById('adminLoginBtn');
            const userFields = document.getElementById('userFields');
            const adminFields = document.getElementById('adminFields');
            const loginForm = document.getElementById('loginForm');

            function setActiveButton(activeBtn, inactiveBtn) {
                activeBtn.classList.remove('btn-outline-primary');
                activeBtn.classList.add('btn-primary');
                inactiveBtn.classList.remove('btn-primary');
                inactiveBtn.classList.add('btn-outline-primary');
            }

            userLoginBtn.addEventListener('click', function() {
                userFields.style.display = 'block';
                adminFields.style.display = 'none';
                setActiveButton(userLoginBtn, adminLoginBtn);
            });

            adminLoginBtn.addEventListener('click', function() {
                userFields.style.display = 'none';
                adminFields.style.display = 'block';
                setActiveButton(adminLoginBtn, userLoginBtn);
            });

            loginForm.addEventListener('submit', function(e) {
                e.preventDefault();
                // Handle form submission based on which fields are visible
                if (userFields.style.display !== 'none') {
                    console.log('User login submitted');
                    // Add your user login logic here
                } else {
                    console.log('Admin login submitted');
                    // Add your admin login logic here
                }
            });
        });
    </script>
</body>

</html>