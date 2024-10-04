<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="dashboard.css">
    <style>
        .sidebar {
            height: 100vh;
            position: fixed;
            top: 0;
            left: 0;
            z-index: 1000;
            padding: 20px;
            overflow-x: hidden;
            overflow-y: auto;
        }

        .sidebar .nav-link {
            font-weight: 500;
            color: #333;
        }

        .sidebar .nav-link.active {
            color: #007bff;
        }

        .sidebar .nav-link:hover {
            color: #0056b3;
        }

        .sidebar .nav-link svg {
            margin-right: 4px;
            color: #999;
        }

        .sidebar .nav-link.active svg {
            color: #007bff;
        }

        @media (max-width: 991.98px) {
            .sidebar {
                width: 100%;
                height: 100vh;
                position: fixed;
                top: 0;
                left: -100%;
                transition: all 0.3s;
            }

            .sidebar.active {
                left: 0;
            }

            .close-sidebar {
                display: block;
            }
        }

        @media (min-width: 992px) {
            .close-sidebar {
                display: none;
            }
        }

        .sidebar .logo {
            text-align: center;
            padding: 30px 0;
            font-size: 24px;
            font-weight: bold;
        }

        body,
        html {
            height: 100%;
            margin: 0;
            padding: 0;
        }

        .btn-custom {
            background-color: #68c8ee;
            border-color: #68c8ee;
        }

        .btn-custom:hover {
            background-color: #57b0d4;
            border-color: #57b0d4;
        }

        .form-label {
            color: #68c8ee;
        }
    </style>
</head>

<body>
    <div class="container-fluid" style="min-height: 100%">
        <div class="row">
            <!-- Sidebar -->
            <?php include 'nav.php'; ?>




            <!-- Main content -->
            <main class="col-md-12 ms-sm-auto col-lg-10 px-md-4" style="background-color: #f5f4f2;min-height: 100vh;">
                <!-- Header -->
                <?php include 'header.php'; ?>
                <div class="container mt-5">
                    <h3>Create Users</h3>
                    <div class="d-flex align-items-center justify-content-between">
                        <!-- Paragraph with medium font-weight -->
                        <p class="fw-medium d-inline-block">Create Users</p>
                        <!-- Button with icon to the right of the text -->
                        <button type="button" class="btn btn-custom text-white ms-3 mb-3 p-2" data-bs-toggle="modal"
                            data-bs-target="#userModal">
                            Add New
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 48 48">
                                <g fill="none" stroke="white" stroke-linejoin="round" stroke-width="4">
                                    <rect width="36" height="36" x="6" y="6" rx="3" />
                                    <path stroke-linecap="round" d="M24 16v16m-8-8h16" />
                                </g>
                            </svg>
                        </button>
                    </div>
                    <div class="table-responsive">
                        <table class="table table-striped table-hover custom-table ">
                            <thead class="custom-table-header">
                                <tr class="text-center">
                                    <th scope="col">SL. No</th>
                                    <th scope="col">Name</th>
                                    <th scope="col">Designation</th>
                                    <th scope="col">Email</th>
                                    <th scope="col">Status</th>
                                </tr>
                            </thead>
                            <tbody class="bg-white text-center">
                                <tr>
                                    <th scope="row ">1</th>
                                    <td>John Doe</td>
                                    <td>john@example.com</td>
                                    <td>+1234567890</td>
                                    <td class="action-icons d-flex justify-content-center">
                                        <div class="icon-container">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 16 16">
                                                <path fill="#68c8ee"
                                                    d="M12.707 1L15 3.292a1 1 0 0 1-.002 1.416l-1.441 1.434l-3.702-3.703L11.293 1a1 1 0 0 1 1.414 0M8.44 3.854L1.5 10.793v3.652h3.706l6.932-6.893z" />
                                            </svg>
                                        </div>

                                        <div class="icon-container">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                                                <path fill="red"
                                                    d="M17 6h5v2h-2v13a1 1 0 0 1-1 1H5a1 1 0 0 1-1-1V8H2V6h5V3a1 1 0 0 1 1-1h8a1 1 0 0 1 1 1zm1 2H6v12h12zm-9 3h2v6H9zm4 0h2v6h-2zM9 4v2h6V4z" />
                                            </svg>
                                        </div>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>



            </main>
        </div>
    </div>
    <div class="modal fade" id="userModal" tabindex="-1" aria-labelledby="userModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header" style="border-bottom:0px;">
                    <h5 class="modal-title" id="userModalLabel">Add New User</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form>
                        <div class="row">
                            <!-- Name Field -->
                            <div class="col-12 col-md-6 mb-3">
                                <label for="userName" class="form-label">User Name</label>
                                <input type="text" class="form-control" id="userName" placeholder="Enter user name">
                            </div>
                            <!-- Designation Field -->
                            <div class="col-12 col-md-6 mb-3">
                                <label for="designation" class="form-label">Designation</label>
                                <input type="text" class="form-control" id="designation"
                                    placeholder="Enter designation">
                            </div>
                        </div>
                        <div class="row">
                            <!-- Email Field -->
                            <div class="col-12 col-md-6 mb-3">
                                <label for="email" class="form-label">Email</label>
                                <input type="email" class="form-control" id="email" placeholder="Enter email">
                            </div>
                            <!-- Password Field -->
                            <div class="col-12 col-md-6 mb-3">
                                <label for="password" class="form-label">Password</label>
                                <input type="password" class="form-control" id="password"
                                    placeholder="Enter password">
                            </div>
                        </div>
                    </form>
                </div>
                <div class="modal-footer" style="border-top:0px;">
                    <button type="button" class="btn btn-success btn-sm rounded-5">Submit</button>
                    <button type="button" class="btn btn-danger btn-sm rounded-5" data-bs-dismiss="modal">Cancel</button>
                </div>
            </div>
        </div>
    </div>
    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const sidebarToggle = document.getElementById('sidebarToggle');
            const closeSidebar = document.getElementById('closeSidebar');
            const sidebar = document.querySelector('.sidebar');

            function toggleSidebar() {
                sidebar.classList.toggle('active');
            }

            sidebarToggle.addEventListener('click', toggleSidebar);
            closeSidebar.addEventListener('click', toggleSidebar);

            // Close sidebar when clicking outside of it
            document.addEventListener('click', function(event) {
                const isClickInsideSidebar = sidebar.contains(event.target);
                const isClickOnToggleButton = sidebarToggle.contains(event.target);

                if (!isClickInsideSidebar && !isClickOnToggleButton && sidebar.classList.contains('active')) {
                    toggleSidebar();
                }
            });
        });
        document.addEventListener('DOMContentLoaded', function() {
            const notificationBtn = document.getElementById('notificationBtn');
            const notificationBadge = document.getElementById('notificationBadge');

            notificationBtn.addEventListener('click', function() {
                // Toggle the 'show' class on the dropdown menu
                this.nextElementSibling.classList.toggle('show');

                // Update the badge number (for demonstration purposes)
                let currentNumber = parseInt(notificationBadge.textContent);
                notificationBadge.textContent = currentNumber > 0 ? 0 : 3;
            });

            // Close the dropdown when clicking outside
            document.addEventListener('click', function(event) {
                if (!notificationBtn.contains(event.target)) {
                    notificationBtn.nextElementSibling.classList.remove('show');
                }
            });
        });
    </script>


</body>

</html>