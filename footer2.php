<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="path/to/bootstrap.css">
    <title>Responsive Footer</title>
    <style>
        /* Add custom styles here */
        body {
            margin: 0;
            padding: 0;
            min-height: 100vh;
            display: flex;
            flex-direction: column;
        }

        main {
            flex: 1;
        }

        footer {
            background-color: #f8f9fa;
            padding: 20px 0;
        }
    </style>
</head>
<body>
    <main>
        <!-- Your page content goes here -->
    </main>

    <footer class="text-center" style="background-color: #87CEEB;">
        <div class="container-fluid" >
            <div class="row mt-5">
                <div class="col-md-4">
                    <h5>Contact Us</h5>
                    <p>Email: info@example.com</p>
                    <p>Phone: (123) 456-7890</p>
                </div>
                <div class="col-md-4">
                    <h5>Follow Us</h5>
                    <a href="#" class="btn btn-outline-primary">Facebook</a>
                    <a href="#" class="btn btn-outline-info">Twitter</a>
                    <a href="#" class="btn btn-outline-danger">Instagram</a>
                </div>
                <div class="col-md-4">
                    <h5>Quick Links</h5>
                    <ul class="list-unstyled">
                        <li><a href="#">Home</a></li>
                        <li><a href="#">About Us</a></li>
                        <li><a href="#">Services</a></li>
                        <li><a href="#">Contact</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- <script src="path/to/bootstrap.bundle.min.js"></script> -->
</body>
</html>
