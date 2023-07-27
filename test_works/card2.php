<!DOCTYPE html>
<html>

<head>
    <!-- Add Bootstrap CSS link here -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <!-- Add GSAP library -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.9.1/gsap.min.js"></script>
    <style>
        .custom-card {
            border: none;
            border-radius: 10px;
            background-color: rgba(255, 255, 255, 0.9);
            backdrop-filter: blur(10px);
            /* Glassy effect */
            border: 1px solid rgba(255, 255, 255, 0.2);
            box-shadow: 0 8px 16px rgba(0, 0, 0, 0.1);
            overflow: hidden;
            transition: box-shadow 0.3s, transform 0.3s;
            position: relative;
            z-index: 1;
        }


        .card-icon {
            max-width: 100px;
            margin: 10px;
            display: block;
        }

        .card-img {
            max-height: 200px;
            object-fit: cover;
            border-top-left-radius: 10px;
            border-top-right-radius: 10px;
        }

        .card-content {
            padding: 20px;
            position: relative;
            z-index: 2;
            /* Set higher z-index for the card content */
        }

        .card-heading {
            font-size: 24px;
            font-weight: bold;
            color: #333;
            margin-bottom: 10px;
        }

        .card-description {
            font-size: 16px;
            color: #666;
            margin-bottom: 20px;
        }

        .transparent-btn {
            background-color: transparent;
            border: 1px solid #2e2e2e;
            /* Lighter orange border color */
            border-radius: 50%;
            color: black;
            /* Lighter orange text color */
            padding: 10px;
            text-align: center;
            text-decoration: none;
            display: block;
            font-size: 16px;
            transition: background-color 0.3s, color 0.3s;
            position: absolute;
            bottom: 10px;
            right: 10px;
            display: flex;
            align-items: center;
            justify-content: center;
            width: 40px;
            height: 40px;
            z-index: 3;
            /* Set higher z-index for the button */
        }

        .transparent-btn:hover {
            background-color: #FFD6AA;
            /* Lighter orange hover background color */
            color: black;
            /* Text color on hover */
            text-decoration: none;
        }

        .custom-card .icon {
            position: absolute;
            font-size: 30px;
            opacity: 0;
        }
    </style>
</head>
<!-- ... Rest of your HTML ... -->

<body>
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-4">
                <div class="card mt-5 pt-3 custom-card">
                    <img src="bg.png" class="card-img-top card-icon" alt="Card Icon">
                    <div class="card-content">
                        <h4 class="card-heading">Card Heading</h4>
                        <p class="card-description">Card content goes here...</p>
                        <a href="#" class="transparent-btn">
                            <i class="fas fa-arrow-right"></i>
                        </a>
                        <!-- Add icon elements inside the card -->
                        <i class="icon fas fa-heart" style="top: -30px; left: 50%; color: #FF5E3A;"></i>
                        <i class="icon fas fa-star" style="top: -40px; left: 30%; color: #48C774;"></i>
                    </div>
                </div>
            </div>
            <!-- Add more card elements if needed -->
        </div>
    </div>

    <!-- Add Bootstrap JS and jQuery links here -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/js/bootstrap.min.js"></script>
    <script>
        // GSAP animation for falling icons
        gsap.registerPlugin(TweenLite);

        // Function to create the falling animation
        function animateIcons() {
            const icons = document.querySelectorAll('.custom-card .icon');
            if (icons.length === 0) return; // Return if no icons found

            icons.forEach((icon) => {
                TweenLite.to(icon, {
                    duration: 2,
                    y: '300px',
                    rotation: 720,
                    scale: 1.5,
                    opacity: 0,
                    ease: 'power1.in',
                    repeat: -1,
                    delay: Math.random() * 1, // Add a random delay for more randomness
                });
            });
        }

        // Initiate the animation when the document is ready
        document.addEventListener('DOMContentLoaded', animateIcons);
    </script>
</body>

</html>