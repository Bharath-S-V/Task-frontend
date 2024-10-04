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




                <!-- Dashboard Widgets -->
                <div class="row g-3 mt-3">
                    <div class="col-lg-4 col-md-6 col-sm-12">
                        <div class="card shadow-sm">
                            <div class="card-body d-flex align-items-center justify-content-between">
                                <!-- Icon on the Left -->

                                <!-- Content on the Right -->
                                <div class="text-end">
                                    <h3 class="mb-1">Total User</h3>
                                    <p class="display-4 mb-0">02</p>
                                </div>

                                <div class="icon-container me-3">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="60" height="60" viewBox="0 0 24 24">
                                        <path fill="#68c062"
                                            d="M2 22a8 8 0 1 1 16 0zm8-9c-3.315 0-6-2.685-6-6s2.685-6 6-6s6 2.685 6 6s-2.685 6-6 6m7.363 2.233A7.505 7.505 0 0 1 22.983 22H20c0-2.61-1-4.986-2.637-6.767m-2.023-2.276A7.98 7.98 0 0 0 18 7a7.96 7.96 0 0 0-1.015-3.903A5 5 0 0 1 21 8a5 5 0 0 1-5.66 4.957" />
                                    </svg>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 col-sm-12">
                        <div class="card shadow-sm">
                            <div class="card-body d-flex align-items-center justify-content-between">
                                <!-- Icon on the Left -->

                                <!-- Content on the Right -->
                                <div class="text-end">
                                    <h3 class="mb-1">Total Target</h3>
                                    <p class="display-4 mb-0">06</p>
                                </div>

                                <div class="icon-container me-3">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="60" height="60" viewBox="0 0 24 24">
                                        <path fill="#d33636"
                                            d="M20.172 6.75h-1.861l-4.566 4.564a1.874 1.874 0 1 1-1.06-1.06l4.565-4.565V3.828a.94.94 0 0 1 .275-.664l1.73-1.73a.25.25 0 0 1 .25-.063c.089.026.155.1.173.191l.46 2.301l2.3.46c.09.018.164.084.19.173a.25.25 0 0 1-.062.249l-1.731 1.73a.94.94 0 0 1-.663.275" />
                                        <path fill="#d33636"
                                            d="M2.625 12A9.375 9.375 0 0 0 12 21.375A9.375 9.375 0 0 0 21.375 12c0-.898-.126-1.766-.361-2.587A.75.75 0 0 1 22.455 9c.274.954.42 1.96.42 3c0 6.006-4.869 10.875-10.875 10.875S1.125 18.006 1.125 12S5.994 1.125 12 1.125c1.015-.001 2.024.14 3 .419a.75.75 0 1 1-.413 1.442A9.4 9.4 0 0 0 12 2.625A9.375 9.375 0 0 0 2.625 12" />
                                        <path fill="#d33636"
                                            d="M7.125 12a4.874 4.874 0 1 0 9.717-.569a.748.748 0 0 1 1.047-.798c.251.112.42.351.442.625a6.373 6.373 0 0 1-10.836 5.253a6.376 6.376 0 0 1 5.236-10.844a.75.75 0 1 1-.17 1.49A4.876 4.876 0 0 0 7.125 12" />
                                    </svg>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 col-sm-12">
                        <div class="card shadow-sm">
                            <div class="card-body d-flex align-items-center justify-content-between">
                                <!-- Icon on the Left -->

                                <!-- Content on the Right -->
                                <div class="text-end">
                                    <h3 class="mb-1">Completed</h3>
                                    <p class="display-4 mb-0">06</p>
                                </div>

                                <div class="icon-container me-3">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="60" height="60" viewBox="0 0 24 24">
                                        <path fill="#d33636"
                                            d="M11.875 20q.1 0 .2-.05t.15-.1l8.2-8.2q.3-.3.438-.675t.137-.75q0-.4-.137-.763t-.438-.637l-4.25-4.25q-.275-.3-.638-.437T14.776 4q-.375 0-.75.138t-.675.437l-.275.275l1.85 1.875q.375.35.55.8t.175.95q0 1.05-.712 1.763t-1.763.712q-.5 0-.962-.175t-.813-.525L9.525 8.4L5.15 12.775q-.075.075-.112.163T5 13.125q0 .2.15.363t.35.162q.1 0 .2-.05t.15-.1l3.4-3.4l1.4 1.4l-3.375 3.4q-.075.075-.112.163t-.038.187q0 .2.15.35t.35.15q.1 0 .2-.05t.15-.1l3.4-3.375l1.4 1.4l-3.375 3.4q-.075.05-.112.15t-.038.2q0 .2.15.35t.35.15q.1 0 .188-.038t.162-.112l3.4-3.375l1.4 1.4l-3.4 3.4q-.075.075-.112.162t-.038.188q0 .2.163.35t.362.15m-.025 2q-.925 0-1.637-.612t-.838-1.538q-.85-.125-1.425-.7t-.7-1.425q-.85-.125-1.412-.712T5.15 15.6q-.95-.125-1.55-.825t-.6-1.65q0-.5.188-.962t.537-.813l5.8-5.775L12.8 8.85q.05.075.15.113t.2.037q.225 0 .375-.137t.15-.363q0-.1-.038-.2t-.112-.15L9.95 4.575q-.275-.3-.637-.437T8.55 4q-.375 0-.75.138t-.675.437L3.6 8.125q-.225.225-.375.525t-.2.6t0 .613t.2.587l-1.45 1.45q-.425-.575-.625-1.262T1 9.25t.35-1.362t.825-1.188L5.7 3.175Q6.3 2.6 7.038 2.3T8.55 2t1.513.3t1.312.875l.275.275l.275-.275q.6-.575 1.338-.875t1.512-.3t1.513.3t1.312.875L21.825 7.4q.575.575.875 1.325t.3 1.525t-.3 1.513t-.875 1.312l-8.2 8.175q-.35.35-.812.55t-.963.2M9.375 8" />
                                    </svg>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </main>
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