<?php
error_reporting(0);
//open database
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "eventbrite_db";

// open connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
// else {

//     echo "Connected successfully";
// }

//All the parameters after ? can be accessed using $_GET array
$id = $_GET['id'];
$e = $_GET['email'];
//Build quert SQL statement
$description = "SELECT * from Event_des WHERE Event_ID = $id";  //sql to get description 
$sql = "SELECT * from event WHERE Event_ID = $id"; //sqp to get event 
$category = "SELECT * FROM Event_category WHERE Event_ID = $id";

//execute SQL
$result = $conn->query($sql);
$des = $conn->query($description);
$cat = $conn->query($category);

$c = mysqli_fetch_assoc($cat);
$c_name = "";
switch ($c['Cat_ID']) {
    case 1:
        $c_name = "Technology";
        break;
    case 2:
        $c_name = "Business";
        break;
    case 3:
        $c_name = "Music";
        break;
    case 4:
        $c_name = "Workshop";
        break;
}

$d = mysqli_fetch_assoc($des);
$row = mysqli_fetch_assoc($result);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="UTF-8">
    <link rel="icon" href="https://cdn.evbstatic.com/s3-build/548393-rc2022-06-29_16.04-ea1b0bd/django/images/favicons/android-chrome-192x192.png">
    <title>Event Detail</title>
    <link rel="stylesheet" href="../style/sakal.css" />
    <link rel="stylesheet" href="../style/style.css" />
    <script src="https://kit.fontawesome.com/0e1ed34929.js" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script src="../script/detail.js"></script>

</head>

<body>
    <nav>
        <?php include '../php/header1.php' ?>
    </nav>
    <div id="root">

        <div>
            <div class="bg_event_detail_img">
                <img src="<?php echo $row['Event_image']; ?>">
            </div>
        </div>

        <div class="event_detail_layout">
            <div class="event_detail_content">
                <div class="title_container_group">
                    <div class="event_detail_img">
                        <img class="listing-image--main" width="600" height="300" src="<?php echo $row['Event_image']; ?>">
                    </div>
                    <div class="event_detail_main_title" style="background-color: rgb(240, 240, 240);">
                        <div class="event_detail_content">
                            <div class="event_detail_date">
                                <p><?php echo date("M", strtotime($row['Event_date'])); ?></p>
                                <p><?php echo date("d", strtotime($row['Event_date'])); ?></p>
                            </div>
                            <div class="event_detail_title_text">
                                <h1 style="font-size: 20px;" class="event_detail_title_h1"><?php echo $row['Event_title'] ?></h1>
                                <div class="event_detail_organization_title">
                                    <div class="event_detail_organization_style">
                                        <div>by</div>
                                        <div>
                                            <a class="organization_link"> <?php echo $row['Org_name'] ?></a>
                                        </div>
                                    </div>
                                    <span class="follower_text">
                                        <div class="follower_organizer_count"><?php echo $row['Location_status'] ?></div>
                                    </span>
                                    <div class="price_status_text">
                                        <div><?php echo $row['Price'] ?></div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="register_bar">
                    <div class="register_panel">
                        <div class="register_panel_alignment">
                            <div class="left_side_bar">

                                <span class="share_icon">
                                    <div class="share_icon_button">
                                        <svg x="0" y="0" viewBox="0 0 24 24" xml:space="preserve">
                                            <path id="share-ios-chunky_svg__eds-icon--share-ios-chunky_base" fill-rule="evenodd" clip-rule="evenodd" d="M18 16v2H6v-2H4v4h16v-4z"></path>
                                            <path id="share-ios-chunky_svg__eds-icon--share-ios-chunky_arrow" fill-rule="evenodd" clip-rule="evenodd" d="M12 4L7 9l1.4 1.4L11 7.8V16h2V7.8l2.6 2.6L17 9l-5-5z"></path>
                                        </svg>
                                    </div>
                                </span>

                                <div class="">
                                    <span onclick="toggleLike(<?php echo $id ?>)">
                                        <div class="heart-empty" id="h-empty-<?php echo $id ?>" style="display:<?php if ($row['Like_status'] == 0) {
                                                                                                                    echo "block;";
                                                                                                                } else {
                                                                                                                    echo "none;";
                                                                                                                } ?>">
                                            <svg id="heart-chunky_svg__eds-icon--user-chunky_svg" x="0" y="0" style="margin-top: -2px;" viewBox="0 0 24 24" xml:space="preserve">
                                                <path id="heart-chunky_svg__eds-icon--heart-chunky_base" fill="rgb(75, 77, 99)" clip-rule="evenodd" d="M18.8 6.2C18.1 5.4 17 5 16 5c-1 0-2 .4-2.8 1.2L12 7.4l-1.2-1.2C10 5.4 9 5 8 5c-1 0-2 .4-2.8 1.2-1.5 1.6-1.5 4.2 0 5.8l6.8 7 6.8-7c1.6-1.6 1.6-4.2 0-5.8zm-1.4 4.4L12 16.1l-5.4-5.5c-.8-.8-.8-2.2 0-3C7 7.2 7.5 7 8 7c.5 0 1 .2 1.4.6l2.6 2.7 2.7-2.7c.3-.4.8-.6 1.3-.6s1 .2 1.4.6c.8.8.8 2.2 0 3z">
                                                </path>
                                            </svg>
                                        </div>
                                        <div class="heart-full" id="h-full-<?php echo $id ?>" style="display:<?php if ($row['Like_status'] == 1) {
                                                                                                                    echo "block;";
                                                                                                                } else {
                                                                                                                    echo "none;";
                                                                                                                } ?>">
                                            <svg id="heart-fill-svg" x="0" y="0" viewBox="0 0 24 24" xml:space="preserve">
                                                <path id="heart-align-svg" fill-rule="evenodd" clip-rule="evenodd" fill="red" d="M16 5c-1 0-2 .4-2.8 1.2L12 7.4l-1.2-1.2C10 5.4 9 5 8 5c-1 0-2 .4-2.8 1.2-1.5 1.6-1.5 4.2 0 5.8l6.8 7 6.8-7c1.5-1.6 1.5-4.2 0-5.8C18.1 5.4 17 5 16 5">
                                                </path>
                                            </svg>
                                        </div>
                                    </span>
                                </div>
                            </div>

                            <div class="middle_side_bar">


                            </div>

                            <div class="right_side_bar">
                                <a href="../online_registration/?email=<?php echo $e?>&id=<?php echo $id?>">
                                    <button class="register_button">
                                        Register
                                    </button>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                <section class="event_info_wrapper">
                    <div class="event_info">
                        <div class="event_info_details">


                            <div class="About_event_detail">
                                <h2>About this event</h2>
                                <div class="event_detail_text">
                                    <div class="event_detail_text_left event_content" style="padding-bottom: 15px;">
                                        <h3><?php echo $row['Event_title'] ?></h3>

                                        <p><?php echo $d['About'] ?></p>

                                        <h2 style="padding: 15px 0;">Benefit</h2>

                                        <p><?php echo $d['Benefit'] ?></p>

                                    </div>
                                    <section>
                                        <div class="tag_heading_style">
                                            <h3 class="tag_share_h3_text">Tags</h3>
                                            <ul style="margin: 0; padding: 0">
                                                <li class="tag_each_element">
                                                    <a class="tag_link">
                                                        <?php echo $c_name ?>
                                                    </a>
                                                </li>

                                            </ul>
                                        </div>
                                    </section>
                                    <section>
                                        <div class="tag_heading_style">
                                            <h3 class="tag_share_h3_text">Share with friends</h3>
                                            <div class="listing_social_media_icon">
                                                <div class="listing_SC_icon_margin">
                                                    <span style="padding-left: 20px;">
                                                        <a target="_blank" style="text-decoration: none; color: #6f7287;" href="<?php echo $row['Org_link']; ?>">
                                                            <i style="padding-right: 20px;" class="fab fa-facebook-f"></i>
                                                        </a>
                                                    </span>
                                                    <span>
                                                        <a target="_blank" style="text-decoration: none; color: #6f7287;" href="<?php echo $row['Org_link']; ?>">
                                                            <i style="padding-right: 20px;" class="fa-brands fa-facebook-messenger"></i>
                                                        </a>
                                                    </span>
                                                    <span>
                                                        <a target="_blank" style="text-decoration: none; color: #6f7287;" href="<?php echo $row['Org_link']; ?>">
                                                            <i style="padding-right: 20px;" class="fa-brands fa-linkedin-in"></i>
                                                        </a>
                                                    </span>
                                                    <span>
                                                        <a target="_blank" style="text-decoration: none; color: #6f7287;" href="<?php echo $row['Org_link']; ?>">
                                                            <i style="padding-right: 20px;" class="fa-brands fa-twitter"></i>
                                                        </a>
                                                    </span>

                                                    <span>
                                                        <a target="_blank" style="text-decoration: none; color: #6f7287;" href="<?php echo $row['Org_link']; ?>">
                                                            <i style="padding-right: 20px;" class="fa-solid fa-envelope"></i>
                                                        </a>
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                    </section>
                                </div>
                            </div>

                        </div>
                        <div class="event_info_date_time_location">
                            <section class="event_date_time_heading">
                                <div class="date_time_icon">
                                    <i class="fa-solid fa-calendar-days"></i>
                                </div>
                                <div class="event_date_time_content">
                                    <div class="date_time_title">
                                        <h3 style="font-size:inherit; font-weight:inherit">Date and Time</h3>
                                    </div>
                                    <div>
                                        <time>
                                            <p><?php echo date("D, F d, Y", strtotime($row['Event_date'])); ?> </p>
                                            <p><?php echo date("H:i A e", strtotime($row['Event_time'])); ?> </p>

                                        </time>
                                    </div>
                                </div>

                            </section>
                            <section class="event_date_time_heading">
                                <div class="date_time_icon">
                                    <i class="fa-solid fa-location-dot"></i>
                                </div>
                                <div class="event_date_time_content">
                                    <div class="date_time_title">
                                        <h3 style="font-size:inherit; font-weight:inherit">Location</h3>
                                    </div>
                                    <div>
                                        <div>
                                            <p> <?php echo $row['Location'] ?></p>
                                            <p><?php echo $row['Location_status'] ?></p>
                                            <a href="#map" style="text-decoration: none; scroll-behavior: smooth;">View map</a>
                                        </div>
                                    </div>
                                </div>
                            </section>
                        </div>
                    </div>

                </section>
                <div class="event_detail_footer_padding">
                    <div>
                        <section class="event_map_element">
                            <div class="event_map_placeholder">
                                <div class="map">
                                    <div>
                                        <div class="mapouter" id="map">

                                            <div class="gmap_canvas"><iframe class="gmap_iframe" height="100%" width="100%" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?width=600&amp;height=400&amp;hl=en&amp;q=<?php echo $row['Location'] ?> &amp;t=&amp;z=14&amp;ie=UTF8&amp;iwloc=B&amp;output=embed"></iframe><a href="https://www.kokagames.com/fnf-friday-night-funkin-mods/">Friday
                                                    Night Funkin Mods</a></div>
                                            <style>
                                                .mapouter {
                                                    position: relative;
                                                    text-align: right;
                                                    width: 100%;
                                                    height: 400px;
                                                }

                                                .gmap_canvas {
                                                    overflow: hidden;
                                                    background: none !important;
                                                    width: 100%;
                                                    height: 400px;
                                                }

                                                .gmap_iframe {
                                                    height: 400px !important;
                                                }
                                            </style>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="event_map_detail">
                                <div class="event_map_detail_text">
                                    <h2 style="margin: 0;" class="event_map_detail_text_h2"><?php echo $row['Event_title'] ?>
                                        <div style="color: #39364f; " class="small_text_at">at</div>
                                        <span><?php echo $row['Location'] ?></span>
                                    </h2>
                                    <p style="margin: 0; padding-top: 4px; font-size: .875rem; line-height: 1.25rem; font-weight: 400;">
                                        <?php echo $row['Location_status'] . ', ' . $row['Location'] ?>
                                    </p>
                                </div>


                            </div>
                        </section>
                    </div>

                </div>

            </div>

        </div>

        <footer class="footer">
            <?php include '../php/footer1.php' ?>
        </footer>

    </div>


    </div>

</body>

</html>