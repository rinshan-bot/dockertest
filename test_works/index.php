<!DOCTYPE html>
<html>

<head>
    <title>Navigation Bar with Attractive Dropdowns</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

    <link rel="stylesheet" href="theme.css">


    <style>
        /* The glassy effect to the navbar */
        #custom-navbar::before {
            content: "";
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: linear-gradient(to right, rgba(255, 255, 255, 0.2), rgba(255, 255, 255, 0));
            /* Glassy background gradient */
            z-index: -1;
            /* Push the pseudo-element behind the navbar content */
        }

        /* The random orange shades */
        #custom-navbar::after {
            content: "";
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            pointer-events: none;
            /* Avoid interference with navbar elements */
            z-index: -1;
            /* Push the pseudo-element behind the navbar content */
        }



        .dropdown-menu {
            border: none;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        .navbar::before {
            content: "";
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(255, 255, 255, 0.2);
            /* Set the background color with alpha value to create the glassy effect */
            z-index: -1;
            /* Push the pseudo-element behind the navbar content */
        }

        /* Optional: Add a subtle shadow effect */
        .navbar::after {
            content: "";
            position: absolute;
            top: -4px;
            left: 0;
            width: 100%;
            height: 8px;
            background: rgba(255, 255, 255, 0.1);
            /* Adjust the alpha value for the shadow effect */
            z-index: -1;
            /* Push the pseudo-element behind the navbar content */
        }

        /* Optional: Remove the background color for the navbar to make it transparent */


        .dropdown-menu a {
            color: #333;
        }

        .dropdown-menu a:hover {
            background-color: #f8f9fa;
        }

        /* Styling for the random shades */
        .random-shade {
            position: absolute;
            background: radial-gradient(circle, rgba(255, 165, 0, 0.8) 10%, rgba(255, 165, 0, 0) 70%);
            /* Use radial gradient for a softer edge */
            border-radius: 50%;
            /* Create circular shapes */
            transform: translate(-50%, -50%);
            /* Center the shape around the position */
            animation: floating 5s infinite alternate;
            /* Add a floating animation effect */
        }

        @keyframes floating {
            0% {
                transform: translate(-50%, -50%) scale(1);
            }

            100% {
                transform: translate(-50%, -50%) scale(1.2);
            }
        }
    </style>
</head>

<body>
    <!--  -->
    <main class="page-wrapper" style="background-image: url(image2.jpg);background-size:cover;background-repeat:no-repeat;width:100%;height:90%">
        <nav class="navbar navbar-expand-lg navbar-light bg-light shadow-xsm fixed-top" id="custom-navbar">
            <div class="container">
                <!-- Logo on the left -->
                <a class="navbar-brand" href="#">
                    <img src="your_logo.png" alt="Logo" height="20" width="50">
                </a>


                <div class="collapse navbar-collapse">
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item">
                            <a class="nav-link" href="#">Home</a>
                        </li>

                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="menu1" role="button" data-bs-toggle="dropdown" aria-expanded="false">Menu 1</a>
                            <div class="dropdown-menu overflow-hidden p-1">
                                <div class="d-lg-flex">
                                    <div class="mega-dropdown-column pt-1 pt-lg-3 pb-lg-4">
                                        <ul class="list-unstyled mb-0">
                                            <li><a class="dropdown-item" href="#service1" onmouseover="displayImage('image1.jpg')">Service 1</a></li>
                                            <li><a class="dropdown-item" href="#service2" onmouseover="displayImage('bg.png')">Service 2</a></li>
                                            <li><a class="dropdown-item" href="#service1" onmouseover="displayImage('image1.jpg')">Service 1</a></li>
                                            <li><a class="dropdown-item" href="#service2" onmouseover="displayImage('bg.png')">Service 2</a></li>

                                        </ul>
                                    </div>
                                    <hr>
                                    <br>
                                    <div class="mega-dropdown-column image_dropdown position-relative border-start zindex-3" id="imageContainer"></div>
                                </div>
                            </div>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="menu2" role="button" data-bs-toggle="dropdown" aria-expanded="false">Menu 2</a>
                            <ul class="dropdown-menu" aria-labelledby="menu2">
                                <li><a class="dropdown-item" href="#">Submenu A</a></li>
                                <li><a class="dropdown-item" href="#">Submenu B</a></li>
                                <li><a class="dropdown-item" href="#">Submenu C</a></li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <button class="nav-link" href="#"><i class="fas fa-search" id="search-button" style="cursor: pointer;"></i></button> 
                        </li>
                    </ul>
                    <style>
                        /* Hide the search input initially */
                        #search-form {
                            display: none;
                        }
                    </style>



                </div>

                <!-- Search bar on top -->





            </div>
        </nav>

        <div class="container">
            <div class="row mt-5 pt-4">
                <div>
                    <form id="search-form" class="form-inline form-inline-sm bg-white p-3 shadow-sm">
                        <!-- <div class="input-group"> -->
                        <input type="text" class="form-control form-control-sm" id="search-input" placeholder="Search" aria-label="Search" aria-describedby="search-autocomplete" id="search-input">
                        <button class="btn btn-sm btn-primary" type="submit"><i class="fas fa-search"></i></button>
                        <button class="btn btn-sm btn-secondary" type="submit" id="cancel_search"><i class="fas fa-times"></i></button>
                        <!-- </div> -->

                        <ul class="autocomplete-list"></ul>
                    </form>
                </div>
            </div>
        </div>
        <!-- Add the search input with autocomplete -->
        <style>
            /* Additional CSS for positioning and styling the autocomplete list */
            .autocomplete-list {
                list-style: none;
                margin: 0px;
                padding: 0;
                position: absolute;
                background-color: #f9f9f9;
                border: 1px solid #ddd;
                border-top: none;
                width: 100%;
                max-height: 200px;
                overflow-y: auto;
                z-index: 9999;
            }

            .autocomplete-list li {
                padding: 8px;
                cursor: pointer;
            }

            .autocomplete-list li:hover {
                background-color: #f1f1f1;
            }
        </style>

    </main>


    <style>
        /* Custom styling for the card */
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

        .custom-card:before {
            content: "";
            position: absolute;
            bottom: 0;
            left: 0;
            right: 0;
            top: 100%;
            /* background: linear-gradient(to right,#448c74, #448c74); */
            background: #448c74;
            z-index: -1;
            transition: top .6s;
        }

        .custom-card:hover {
            /* box-shadow: 0 10px 20px rgba(0, 0, 0, 0.1); */
            /* Enhanced shadow effect on hover */
            cursor: pointer;
            transform: scale(1.03);
            /* Slightly increase scale on hover */

        }


        .custom-card:hover::before {
            top: -20px;
            left: 85%;
        }

        .custom-card:hover::after {
            top: -20px;
            left: 50%;
        }

        .custom-card:hover .card-heading,
        .custom-card:hover .card-description,
        .custom-card:hover .transparent-btn {
            /* color: white !important; */
            opacity: 1 !important;
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
    </style>
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-4">
                <div class="card mt-5 pt-3 custom-card">
                    <!-- <img src="path_to_your_image.jpg" class="card-img-top card-img" alt="Card Image"> -->
                    <img src="bg.png" class="card-img-top card-icon" alt="Card Icon">
                    <div class="card-content">
                        <h4 class="card-heading">Card Heading</h4>
                        <p class="card-description">Card content goes here...</p>
                        <a href="#" class="transparent-btn">
                            <i class="fas fa-arrow-right"></i> <!-- Right arrow icon from Font Awesome -->
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card mt-5 pt-3 custom-card">
                    <!-- <img src="path_to_your_image.jpg" class="card-img-top card-img" alt="Card Image"> -->
                    <img src="bg.png" class="card-img-top card-icon" alt="Card Icon">
                    <div class="card-content">
                        <h4 class="card-heading">Card Heading</h4>
                        <p class="card-description">Card content goes here...</p>
                        <a href="#" class="transparent-btn">
                            <i class="fas fa-arrow-right"></i> <!-- Right arrow icon from Font Awesome -->
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card mt-5 pt-3 custom-card">
                    <!-- <img src="path_to_your_image.jpg" class="card-img-top card-img" alt="Card Image"> -->
                    <img src="bg.png" class="card-img-top card-icon" alt="Card Icon">
                    <div class="card-content">
                        <h4 class="card-heading">Card Heading</h4>
                        <p class="card-description">Card content goes here...</p>
                        <a href="#" class="transparent-btn">
                            <i class="fas fa-arrow-right"></i> <!-- Right arrow icon from Font Awesome -->
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    

    <!-- Add Bootstrap 5 JS and Popper.js -->
    <link rel="stylesheet" href="//code.jquery.com/ui/1.13.2/themes/base/jquery-ui.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://code.jquery.com/ui/1.13.2/jquery-ui.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js"></script>
    <script src="script.js"></script>
    <script>
        document.getElementById('cancel_search').addEventListener('click', function() {
            document.getElementById('search-form').style.display = 'none';
        });

        // Custom jQuery autocomplete functionality
    </script>

    <script>
        $(document).ready(function() {

            $('#search-button').click(function(e) {
                e.preventDefault();
                setTimeout(function() {
                    $('#search-form').fadeIn().css('display', 'flex');
                    $('#search-input').focus();
                }, 100);
            });
            const data = [
                "Apple",
                "Banana",
                "Cherry",
                "Grapes",
                "Kiwi",
                "Orange",
                "Pineapple",
                "Strawberry",
                "Watermelon"
                // Add more data here as needed
            ];

            $("#search-input").on("input", function() {
                const searchText = $(this).val().toLowerCase();
                const autocompleteList = $(".autocomplete-list");
                autocompleteList.empty();

                if (!searchText) {
                    autocompleteList.hide();
                    return;
                }

                // Filter the data based on the search text
                const filteredData = data.filter(item => item.toLowerCase().includes(searchText));

                if (filteredData.length > 0) {
                    // Show the autocomplete list below the input field
                    const inputPosition = $(this).offset();
                    const inputHeight = $(this).outerHeight();
                    autocompleteList.css({
                        display: "block",
                        top: inputPosition.top + inputHeight,
                        left: inputPosition.left,
                        width: $(this).outerWidth()
                    });

                    // Show the filtered results in the autocomplete list
                    filteredData.forEach(item => {
                        const listItem = $("<li>").text(item);
                        listItem.on("click", function() {
                            $("#search-input").val($(this).text());
                            autocompleteList.hide();
                        });
                        autocompleteList.append(listItem);
                    });
                } else {
                    autocompleteList.hide();
                }
            });

            // Close the autocomplete list if the user clicks outside of it
            $(document).on("click", function(e) {
                const autocompleteContainer = $(".autocomplete-container");
                if (!autocompleteContainer.is(e.target) && autocompleteContainer.has(e.target).length === 0) {
                    $(".autocomplete-list").hide();
                }
            });
        });
    </script>
</body>

</html>