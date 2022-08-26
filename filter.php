<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="filter.css">
    <!-- <link rel="stylesheet" href="sakal.css"> -->
    <link rel="icon" href="https://cdn.evbstatic.com/s3-build/548393-rc2022-06-29_16.04-ea1b0bd/django/images/favicons/android-chrome-192x192.png">
    <title>Discover-filter-event</title>
    <script src="https://kit.fontawesome.com/0e1ed34929.js" crossorigin="anonymous"></script>
    <script src="./script/homepage.js"></script>
</head>
<!--Sambo Testing 2-->

<body>
    <?php
    error_reporting(0);
    //open database
    $servername = "localhost";
    $username = "root";
    $password = "root";
    $dbname = "eventbrite";

    // open connection
    $conn = new mysqli($servername, $username, $password, $dbname);

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    // else {

    //     echo "Connected successfully";
    // }
    $search = $_POST["search"];
    //Build quert SQL statement
    $sql = "SELECT * from EVENT WHERE Event_title like '%$search%' ";

    //execute SQL
    $result = $conn->query($sql);
    ?>
    <nav style="box-shadow: 2px 3px rgba(170, 170, 170, 0.363); z-index: 1000;">
        <div class="logo">
            <a href="homepage2.html">
                <svg width="110px" viewBox="0 0 200 36">
                    <g fill="orangered" fill-rule="evenodd">
                        <g>
                            <g transform="translate(.347)">
                                <path d="M185.945 17.513c2.693-.61 5.381.495 6.878 2.584l-11.905 2.693c.411-2.52 2.333-4.668 5.027-5.277zm6.944 9.91a6.57 6.57 0 01-3.979 2.679c-2.711.614-5.417-.51-6.908-2.626l11.942-2.702 1.945-.44 3.719-.841a11.782 11.782 0 00-.31-2.372c-1.513-6.426-8.055-10.432-14.611-8.949-6.556 1.484-10.644 7.896-9.13 14.321 1.513 6.426 8.055 10.433 14.61 8.95 3.864-.875 6.869-3.46 8.377-6.751l-5.655-1.269z">
                                </path>
                                <path id="logo-wordmark-brand_svg__Fill-10" d="M164.788 35.118V18.082h-3.677v-5.804h3.677V4.289h6.244v7.989h4.69v5.804h-4.69v17.036z">
                                </path>
                                <path d="M152.86 35.118h6.03v-22.84h-6.03v22.84zm-.785-30.853c0-2.114 1.667-3.7 3.825-3.7 2.157 0 3.775 1.586 3.775 3.7 0 2.115-1.618 3.748-3.775 3.748-2.158 0-3.825-1.633-3.825-3.748zM150.76 12.342c-3.082.16-4.9.633-6.75 1.973v-2.037h-6.026v22.84h6.026v-11.2c0-3.524.86-5.529 6.75-5.726v-5.85zM117.16 24.057c.15 3.333 3.051 6.128 6.602 6.128 3.601 0 6.552-2.942 6.552-6.422 0-3.432-2.95-6.373-6.552-6.373-3.551 0-6.452 2.843-6.602 6.128v.539zm-5.88 11.061V1.38l6.03-1.364v13.962c1.863-1.49 4.07-2.115 6.472-2.115 6.864 0 12.355 5.286 12.355 11.918 0 6.583-5.491 11.965-12.355 11.965-2.403 0-4.609-.624-6.472-2.114v1.487h-6.03z">
                                </path>
                                <path id="logo-wordmark-brand_svg__Fill-1" d="M98.445 35.118V17.965h-3.677v-5.687h3.677V4.283l6.244-1.413v9.408h4.69v5.687h-4.69v17.153z">
                                </path>
                                <path d="M87.394 35.118V22.915c0-4.421-2.402-5.382-4.805-5.382-2.402 0-4.805.913-4.805 5.286v12.299h-6.03v-22.84h6.03v1.699c1.324-.961 2.942-2.115 6.13-2.115 5.098 0 9.51 2.932 9.51 10.092v13.164h-6.03zM56.484 17.513c2.694-.61 5.382.495 6.878 2.584L51.458 22.79c.41-2.52 2.332-4.668 5.026-5.277zm6.945 9.91a6.57 6.57 0 01-3.98 2.679c-2.711.614-5.416-.51-6.907-2.626l11.942-2.702 1.944-.44 3.72-.841a11.782 11.782 0 00-.31-2.372c-1.514-6.426-8.056-10.432-14.612-8.949-6.556 1.484-10.644 7.896-9.13 14.321 1.513 6.426 8.055 10.433 14.611 8.95 3.863-.875 6.868-3.46 8.376-6.751l-5.654-1.269z">
                                </path>
                                <path id="logo-wordmark-brand_svg__Fill-2" d="M31.89 35.118l-9.364-22.84h6.57l5.932 15.49 5.982-15.49h6.57l-9.365 22.84z">
                                </path>
                                <path d="M10.703 17.507c2.694-.61 5.382.495 6.878 2.584L5.677 22.785c.41-2.52 2.332-4.668 5.026-5.278zm6.945 9.91a6.57 6.57 0 01-3.98 2.68c-2.71.613-5.416-.51-6.907-2.626l11.942-2.702 1.945-.44 3.718-.842a11.782 11.782 0 00-.31-2.371c-1.513-6.426-8.055-10.433-14.61-8.95C2.888 13.65-1.2 20.063.314 26.489c1.514 6.426 8.055 10.432 14.611 8.949 3.864-.874 6.869-3.46 8.376-6.75l-5.654-1.27z">
                                </path>
                            </g>
                        </g>
                    </g>
                </svg>
            </a>
        </div>
        <div class="search">
            <svg width="24px" id="magnifying-glass-chunky_svg__eds-icon--magnifying-glass-chunky_svg" x="0" y="0" viewBox="0 0 24 24" xml:space="preserve">
                <path id="magnifying-glass-chunky_svg__eds-icon--magnifying-glass-chunky_base" fill=#39364f fill-rule="evenodd" clip-rule="evenodd" d="M10 14c2.2 0 4-1.8 4-4s-1.8-4-4-4-4 1.8-4 4 1.8 4 4 4zm3.5.9c-1 .7-2.2 1.1-3.5 1.1-3.3 0-6-2.7-6-6s2.7-6 6-6 6 2.7 6 6c0 1.3-.4 2.5-1.1 3.4l5.1 5.1-1.5 1.5-5-5.1z">
                </path>
            </svg>
        </div>
        <div class="search_events">
            <a href="Search.html">Search Events</a>
        </div>
        <div class="help">
            <span class="nav-dropdown nav_text_padding">
                <a>Help</a>
                <i class="fa-solid fa-chevron-down"></i>
                <div class="dropdown-content">
                    <a rel="noopener" target="self" href="find_your_tikets.html">Find
                        your ticket</a>
                </div>
            </span>
        </div>
        <div class="log-in">
            <a href="login.html">Log In</a>
        </div>
        <div class="sign-up">
            <a href="signup.html">Sign Up</a>
        </div>

    </nav>
    <div class="container">
        <div class="left part-style">
            <div class="block">
                <h1>Filters</h1>
            </div>
            <div class="block">
                <div class="part">
                    <div>
                        <p>Only show events from organizers I follow</p>
                    </div>
                    <div>
                        <p style="padding-bottom:15px">Off</p>
                    </div>
                </div>
                <div class="part">
                    <div>
                        <p>Search for online events</p>
                    </div>
                    <div>
                        <p style="padding-bottom:15px">Off</p>
                    </div>
                </div>
            </div>
            <div class="block">
                <div class="part1">
                    <div>
                        <h3>Date</h3>
                    </div>
                    <div>
                        <svg id="chevron-right-chunky_svg__eds-icon--chevron-right-chunky_svg" x="0" y="0" viewBox="0 0 24 24" xml:space="preserve">
                            <path id="chevron-right-chunky_svg__eds-icon--chevron-right-chunky_base" fill-rule="evenodd" clip-rule="evenodd" d="M10.2 17l5-5-5-5-1.4 1.4 3.6 3.6-3.6 3.6z"></path>
                        </svg>
                    </div>
                </div>
                <div class="part1">
                    <div>
                        <h3>Price</h3>
                    </div>
                    <div>
                        <svg id="chevron-right-chunky_svg__eds-icon--chevron-right-chunky_svg" x="0" y="0" viewBox="0 0 24 24" xml:space="preserve">
                            <path id="chevron-right-chunky_svg__eds-icon--chevron-right-chunky_base" fill-rule="evenodd" clip-rule="evenodd" d="M10.2 17l5-5-5-5-1.4 1.4 3.6 3.6-3.6 3.6z"></path>
                        </svg>
                    </div>
                </div>
            </div>
            <div class="block">
                <div class="part1">
                    <div>
                        <h3>Category</h3>
                    </div>
                    <div>
                        <svg id="chevron-right-chunky_svg__eds-icon--chevron-right-chunky_svg" x="0" y="0" viewBox="0 0 24 24" xml:space="preserve">
                            <path id="chevron-right-chunky_svg__eds-icon--chevron-right-chunky_base" fill-rule="evenodd" clip-rule="evenodd" d="M10.2 17l5-5-5-5-1.4 1.4 3.6 3.6-3.6 3.6z"></path>
                        </svg>
                    </div>
                </div>
                <div class="part1">
                    <div>
                        <h3>Format</h3>
                    </div>
                    <div>
                        <svg id="chevron-right-chunky_svg__eds-icon--chevron-right-chunky_svg" x="0" y="0" viewBox="0 0 24 24" xml:space="preserve">
                            <path id="chevron-right-chunky_svg__eds-icon--chevron-right-chunky_base" fill-rule="evenodd" clip-rule="evenodd" d="M10.2 17l5-5-5-5-1.4 1.4 3.6 3.6-3.6 3.6z"></path>
                        </svg>
                    </div>
                </div>
            </div>
            <div class="block">
                <div class="part1">
                    <div>
                        <h3>Language</h3>
                    </div>
                    <div>
                        <svg id="chevron-right-chunky_svg__eds-icon--chevron-right-chunky_svg" x="0" y="0" viewBox="0 0 24 24" xml:space="preserve">
                            <path id="chevron-right-chunky_svg__eds-icon--chevron-right-chunky_base" fill-rule="evenodd" clip-rule="evenodd" d="M10.2 17l5-5-5-5-1.4 1.4 3.6 3.6-3.6 3.6z"></path>
                        </svg>
                    </div>
                </div>
                <div class="part1">
                    <div>
                        <h3>Currency</h3>
                    </div>
                    <div>
                        <svg id="chevron-right-chunky_svg__eds-icon--chevron-right-chunky_svg" x="0" y="0" viewBox="0 0 24 24" xml:space="preserve">
                            <path id="chevron-right-chunky_svg__eds-icon--chevron-right-chunky_base" fill-rule="evenodd" clip-rule="evenodd" d="M10.2 17l5-5-5-5-1.4 1.4 3.6 3.6-3.6 3.6z"></path>
                        </svg>
                    </div>
                </div>
            </div>
        </div>
        <div class="center">
            <form action="filter.php" method="post">
                <div class="search-bar ">
                    <div class="search_bar_left h3_search_bar" style="display:flex;">
                        <i style="margin: 0; padding-left: 10px;" class="fa-solid fa-magnifying-glass"></i>
                        
                        <input style="padding-left: 10px; border: none; font-weight: 500" type="text" name="search" placeholder=" <?php echo $search ?>"  >
                        
                    </div>
                    <div>
                        <button class="search_buttom" value="btn">
                            Search
                        </button>
                    </div>

                </div>
            </form>
            <div class="events_container_widght">
                <?php
                $i = 0;
                while ($row = mysqli_fetch_row($result)) {
                ?>
                    <article class="event_card_list" href="event-detail-1.htm">
                        <div class="event_card_content remove_style">
                            <a href="event-detail-1.htm">
                                <h3>

                                    <?php echo $row[1] ?>

                                </h3>
                            </a>
                            <div style="padding-bottom: 10px" class="event_card_sub_title">
                                <a>
                                    <?php echo date("D \, M j H:i", strtotime($row[4])); ?>
                                </a>

                            </div>
                            <div class="event_card_location_text">
                                <a>
                                    <?php echo $row[7] ?>
                                </a>
                            </div>

                        </div>
                        <div class="image_container_set">
                            <div class="event_image">
                                <img src="data:image/jpg;charset=utf8;base64,<?php echo base64_encode($row[2]); ?>" style="width: 220px;">
                            </div>
                            <div class="card_event_icon">
                                <span class="share_icon">
                                    <div class="share_icon_button">
                                        <svg x="0" y="0" viewBox="0 0 24 24" xml:space="preserve">
                                            <path id="share-ios-chunky_svg__eds-icon--share-ios-chunky_base" fill-rule="evenodd" clip-rule="evenodd" d="M18 16v2H6v-2H4v4h16v-4z"></path>
                                            <path id="share-ios-chunky_svg__eds-icon--share-ios-chunky_arrow" fill-rule="evenodd" clip-rule="evenodd" d="M12 4L7 9l1.4 1.4L11 7.8V16h2V7.8l2.6 2.6L17 9l-5-5z"></path>
                                        </svg>
                                    </div>
                                </span>
                                <div class="heart">
                                    <span onclick="toggleLike(<?php echo $i ?>)">

                                        <div class="heart-empty" id="heart-empty-<?php echo $i ?>">
                                            <svg id="heart-chunky_svg__eds-icon--user-chunky_svg" x="0" y="0" style="margin-top: -2px;" viewBox="0 0 24 24" xml:space="preserve">
                                                <path id="heart-chunky_svg__eds-icon--heart-chunky_base" fill="rgb(75, 77, 99)" clip-rule="evenodd" d="M18.8 6.2C18.1 5.4 17 5 16 5c-1 0-2 .4-2.8 1.2L12 7.4l-1.2-1.2C10 5.4 9 5 8 5c-1 0-2 .4-2.8 1.2-1.5 1.6-1.5 4.2 0 5.8l6.8 7 6.8-7c1.6-1.6 1.6-4.2 0-5.8zm-1.4 4.4L12 16.1l-5.4-5.5c-.8-.8-.8-2.2 0-3C7 7.2 7.5 7 8 7c.5 0 1 .2 1.4.6l2.6 2.7 2.7-2.7c.3-.4.8-.6 1.3-.6s1 .2 1.4.6c.8.8.8 2.2 0 3z">
                                                </path>
                                            </svg>
                                        </div>
                                        <div class="heart-full" id="heart-full-<?php echo $i ?>">
                                            <svg id="heart-fill-svg" x="0" y="0" viewBox="0 0 24 24" xml:space="preserve">
                                                <path id="heart-align-svg" fill-rule="evenodd" clip-rule="evenodd" fill="red" d="M16 5c-1 0-2 .4-2.8 1.2L12 7.4l-1.2-1.2C10 5.4 9 5 8 5c-1 0-2 .4-2.8 1.2-1.5 1.6-1.5 4.2 0 5.8l6.8 7 6.8-7c1.5-1.6 1.5-4.2 0-5.8C18.1 5.4 17 5 16 5">
                                                </path>
                                            </svg>
                                        </div>
                                    </span>
                                </div>

                            </div>
                        </div>
                    </article>
                <?php
                    $i++;
                }
                ?>
            </div>

        </div>
        <div class="right">

        </div>
    </div>
    <!-- add footer -->
</body>

</html>

<?php
$conn->close();
?>