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
    <link rel="stylesheet" href="styles.css">
    <script src="https://cdn.ckeditor.com/ckeditor5/36.0.1/classic/ckeditor.js"></script>

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

        .task-header {
            background-color: #f8f9fa;
            padding: 20px;
            border-radius: 10px;
            margin-bottom: 20px;
        }

        .task-header h3 {
            font-weight: bold;
            font-size: 1.5rem;
            margin-bottom: 5px;
        }

        .task-header p {
            color: #6c757d;
            margin-bottom: 20px;
        }

        .task-content {
            display: flex;
            align-items: center;
            justify-content: space-between;
        }

        .add-new-btn {
            background-color: #007bff;
            color: white;
            border: none;
            padding: 10px 20px;
            border-radius: 5px;
            display: inline-flex;
            align-items: center;
        }

        .task-image {
            max-width: 250px;
            border-radius: 10px;
        }

        @media (max-width: 768px) {
            .task-content {
                flex-direction: column;
                text-align: center;
            }

            .task-image {
                margin-top: 20px;
            }
        }

        .card {
            margin: 15px;
        }

        .priority {
            padding: 5px;
            border-radius: 5px;
            color: white;
        }

        .priority-high {
            background-color: red;
        }

        .priority-medium {
            background-color: orange;
        }

        .priority-low {
            background-color: green;
        }


        .modal-title {
            font-size: 20px;
            font-weight: bold;
        }

        .modal-footer .btn {
            padding: 10px 20px;
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

                <div class="container mt-2">
                    <h3>Manage Task</h3>
                    <p>Check Your daily Tasks and Schedule</p>
                    <div class="task-header rounded-5">

                        <div class="task-content">
                            <!-- Text Section -->
                            <div>


                                <h5>Today's Task</h5>
                                <p>Check Your daily Tasks and Schedule</p>

                                <!-- Add New Button -->
                                <!-- Button to trigger modal -->
                                <button type="button" class="btn btn-custom text-white ms-3 mb-3 p-2" data-bs-toggle="modal" data-bs-target="#taskModal">
                                    Add New
                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 48 48">
                                        <g fill="none" stroke="white" stroke-linejoin="round" stroke-width="4">
                                            <rect width="36" height="36" x="6" y="6" rx="3" />
                                            <path stroke-linecap="round" d="M24 16v16m-8-8h16" />
                                        </g>
                                    </svg>
                                </button>

                                <!-- Modal Structure -->
                                <div class="modal fade" id="taskModal" tabindex="-1" aria-labelledby="taskModalLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-lg">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="taskModalLabel">Add New Task</h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                                <form>
                                                    <!-- Task Name Input -->
                                                    <div class="row">
                                                        <div class="col-12 mb-3">
                                                            <label for="taskName" class="form-label">Task Name</label>
                                                            <input type="text" class="form-control" id="taskName" placeholder="Enter task name">
                                                        </div>
                                                    </div>

                                                    <!-- Task Detail (Text Editor) -->
                                                    <div class="row">
                                                        <div class="col-12 mb-3">
                                                            <label for="taskDetail" class="form-label">Task Details</label>
                                                            <textarea class="form-control" id="taskDetail" placeholder="Enter task details"></textarea>
                                                        </div>
                                                    </div>

                                                    <!-- Date and Priority Dropdown -->
                                                    <div class="row">
                                                        <div class="col-md-6 col-12 mb-3">
                                                            <label for="taskDate" class="form-label">Date</label>
                                                            <input type="date" class="form-control" id="taskDate">
                                                        </div>
                                                        <div class="col-md-6 col-12 mb-3">
                                                            <label for="taskPriority" class="form-label">Priority</label>
                                                            <select class="form-select" id="taskPriority">
                                                                <option value="Low">Low</option>
                                                                <option value="Medium">Medium</option>
                                                                <option value="High">High</option>
                                                            </select>
                                                        </div>
                                                    </div>

                                                    <!-- Assign Task and Progress Dropdown -->
                                                    <div class="row">
                                                        <div class="col-md-6 col-12 mb-3">
                                                            <label for="taskAssign" class="form-label">Assign Task To</label>
                                                            <select class="form-select" id="taskAssign">
                                                                <option value="Admin">Admin</option>
                                                                <option value="User1">User 1</option>
                                                                <option value="User2">User 2</option>
                                                            </select>
                                                        </div>
                                                        <div class="col-md-6 col-12 mb-3">
                                                            <label for="taskProgress" class="form-label">Progress</label>
                                                            <select class="form-select" id="taskProgress">
                                                                <option value="Not Started">Not Started</option>
                                                                <option value="In Progress">In Progress</option>
                                                                <option value="Completed">Completed</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-success btn-sm">Submit</button>
                                                <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Cancel</button>

                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>

                            <!-- Image Section -->
                            <div>
                                <img src="assets/images/5911565_2953998.jpg" alt="Task illustration" class="task-image">
                            </div>
                        </div>
                    </div>
                </div>

                <div class="container-fluid bg-primary">
                    <div class="d-flex justify-content-between align-items-center p-1">
                        <!-- Tabs -->
                        <ul class="nav nav-tabs border-0">
                            <li class="nav-item">
                                <a class="nav-link text-white active" href="#">All Task (06)</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link text-white" href="#">Completed (06)</a>
                            </li>
                        </ul>
                        <!-- Filter By Priority Button -->
                        <div class="filter-priority">
                            <a href="#" class="btn  d-flex align-items-center filter-btn fw-medium">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 512 512">
                                    <path fill="white"
                                        d="M472 168H40a24 24 0 0 1 0-48h432a24 24 0 0 1 0 48m-80 112H120a24 24 0 0 1 0-48h272a24 24 0 0 1 0 48m-96 112h-80a24 24 0 0 1 0-48h80a24 24 0 0 1 0 48" />
                                </svg>
                                Filter By Priority
                            </a>

                        </div>
                    </div>
                </div>
                <div class="container">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="card">
                                <div class="card-body">
                                    <h5 class="card-title">5 Client follow up for tomorrow</h5>
                                    <p class="card-text">Details: 5 Client follow up needs to be done.</p>
                                    <p class="card-text"><small class="text-muted">Tuesday, 24 Jan 2024</small></p>
                                    <p class="card-text"><small class="text-muted">By admin</small></p>
                                    <div class="d-flex justify-content-between align-items-center">
                                        <span class="badge bg-danger">Priority High</span>
                                        <div>
                                            <button class="btn btn-light btn-sm me-2 text-secondary">Edit</button>
                                            <button class="btn btn-light btn-sm text-secondary">Delete</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="card">
                                <div class="card-body">
                                    <h5 class="card-title">5 Client follow up for tomorrow</h5>
                                    <p class="card-text">Details: 5 Client follow up needs to be done.</p>
                                    <p class="card-text"><small class="text-muted">Tuesday, 24 Jan 2024</small></p>
                                    <p class="card-text"><small class="text-muted">By admin</small></p>
                                    <div class="d-flex justify-content-between align-items-center">
                                        <span class="badge bg-warning">Priority High</span>
                                        <div>
                                            <button class="btn btn-light btn-sm me-2 text-secondary">Edit</button>
                                            <button class="btn btn-light btn-sm text-secondary">Delete</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="card">
                                <div class="card-body">
                                    <h5 class="card-title">5 Client follow up for tomorrow</h5>
                                    <p class="card-text">Details: 5 Client follow up needs to be done.</p>
                                    <p class="card-text"><small class="text-muted">Tuesday, 24 Jan 2024</small></p>
                                    <p class="card-text"><small class="text-muted">By admin</small></p>
                                    <div class="d-flex justify-content-between align-items-center">
                                        <span class="badge bg-success">Priority High</span>
                                        <div>
                                            <button class="btn btn-light btn-sm me-2 text-secondary">Edit</button>
                                            <button class="btn btn-light btn-sm text-secondary">Delete</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="card">
                                <div class="card-body">
                                    <h5 class="card-title">5 Client follow up for tomorrow</h5>
                                    <p class="card-text">Details: 5 Client follow up needs to be done.</p>
                                    <p class="card-text"><small class="text-muted">Tuesday, 24 Jan 2024</small></p>
                                    <p class="card-text"><small class="text-muted">By admin</small></p>
                                    <div class="d-flex justify-content-between align-items-center">
                                        <span class="badge bg-danger">Priority High</span>
                                        <div>
                                            <button class="btn btn-light btn-sm me-2 text-secondary">Edit</button>
                                            <button class="btn btn-light btn-sm text-secondary">Delete</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="card">
                                <div class="card-body">
                                    <h5 class="card-title">5 Client follow up for tomorrow</h5>
                                    <p class="card-text">Details: 5 Client follow up needs to be done.</p>
                                    <p class="card-text"><small class="text-muted">Tuesday, 24 Jan 2024</small></p>
                                    <p class="card-text"><small class="text-muted">By admin</small></p>
                                    <div class="d-flex justify-content-between align-items-center">
                                        <span class="badge bg-warning">Priority High</span>
                                        <div>
                                            <button class="btn btn-light btn-sm me-2 text-secondary">Edit</button>
                                            <button class="btn btn-light btn-sm text-secondary">Delete</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="card">
                                <div class="card-body">
                                    <h5 class="card-title">5 Client follow up for tomorrow</h5>
                                    <p class="card-text">Details: 5 Client follow up needs to be done.</p>
                                    <p class="card-text"><small class="text-muted">Tuesday, 24 Jan 2024</small></p>
                                    <p class="card-text"><small class="text-muted">By admin</small></p>
                                    <div class="d-flex justify-content-between align-items-center">
                                        <span class="badge bg-success">Priority High</span>
                                        <div>
                                            <button class="btn btn-light btn-sm me-2 text-secondary">Edit</button>
                                            <button class="btn btn-light btn-sm text-secondary">Delete</button>
                                        </div>
                                    </div>
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
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.10.2/font/bootstrap-icons.min.js"></script>
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
    <script>
        ClassicEditor
            .create(document.querySelector('#taskDetail'))
            .catch(error => {
                console.error(error);
            });
    </script>



</body>

</html>