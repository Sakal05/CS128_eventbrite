<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style/sakal.css" />
    <link rel="stylesheet" href="../style/style.css" />
    <link rel="icon" href="https://cdn.evbstatic.com/s3-build/548393-rc2022-06-29_16.04-ea1b0bd/django/images/favicons/android-chrome-192x192.png">
    <title>Likes Page</title>
    <script src="https://kit.fontawesome.com/0e1ed34929.js" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script src="../script/main.js"></script>
</head>

<body>

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

    //Build quert SQL statement
    $sql = "SELECT * from EVENT WHERE Like_status = 1";

    //execute SQL
    $result = $conn->query($sql);
    ?>
    <div style="min-height: 90.5vh;">
        <!-- header nav -->
        <nav>
            <?php include '../php/header1.php' ?>
        </nav>
        <!-- body event_container  -->
        <div class="body_container">
            <div class="body_layout">
                <header class="user-page-header">
                    <h1 class="header_text">
                        Likes
                    </h1>
                </header>

                <div class="events_container_widght">
                    <?php
                    while ($row = mysqli_fetch_assoc($result)) {
                    ?>
                        <article class="event_card_list" href="event-detail-1.htm">
                            <div class="event_card_content remove_style">
                                <a href="../detail/event-detail.php?id=<?php echo $row[0] ?>">
                                    <h3>
                                        <!-- Tech Career Fair: Exclusive Tech Hiring Event -->
                                        <?php echo $row['Event_title'] ?>
                                    </h3>
                                </a>
                                <div class="event_card_sub_title">
                                    <a>
                                        <?php echo date("D \, M j H:i", strtotime($row['Event_time'])); ?>
                                        <!-- Fri, Jul 22, 9:00 AM -->
                                    </a>
                                </div>
                                <div class="event_card_location_text">
                                    <a>
                                        <?php echo $row['Location'] ?>
                                        <!-- Moved to Virtual Event, San Francisco -->
                                    </a>
                                </div>
                                <div class="event_card_price_text">
                                    <a>
                                        <?php echo $row['Price']; ?>
                                    </a>
                                </div>
                            </div>
                            <div class="image_container_set">
                                <div class="event_image">
                                    <img src="<?php echo $row['Event_image']; ?>" style="width: 220px;">
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
                                        <span onclick="toggleLike(<?php echo $row['Event_ID'] ?>)">

                                            <div class="heart-empty" id="h-empty-<?php echo $row['Event_ID'] ?>" style="display:<?php if ($row['Like_status']==0){echo "block;";} else { echo "none;";}?>">
                                                <svg id="heart-chunky_svg__eds-icon--user-chunky_svg" x="0" y="0" style="margin-top: -2px;" viewBox="0 0 24 24" xml:space="preserve">
                                                    <path id="heart-chunky_svg__eds-icon--heart-chunky_base" fill="rgb(75, 77, 99)" clip-rule="evenodd" d="M18.8 6.2C18.1 5.4 17 5 16 5c-1 0-2 .4-2.8 1.2L12 7.4l-1.2-1.2C10 5.4 9 5 8 5c-1 0-2 .4-2.8 1.2-1.5 1.6-1.5 4.2 0 5.8l6.8 7 6.8-7c1.6-1.6 1.6-4.2 0-5.8zm-1.4 4.4L12 16.1l-5.4-5.5c-.8-.8-.8-2.2 0-3C7 7.2 7.5 7 8 7c.5 0 1 .2 1.4.6l2.6 2.7 2.7-2.7c.3-.4.8-.6 1.3-.6s1 .2 1.4.6c.8.8.8 2.2 0 3z">
                                                    </path>
                                                </svg>
                                            </div>
                                            <div class="heart-full" id="h-full-<?php echo $row['Event_ID'] ?>" style="display:<?php if ($row['Like_status']==1){echo "block;";} else { echo "none;";}?>">
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
                    }
                    ?>
                </div>
            </div>

        </div>
    </div>
    <!-- footer -->

    <footer class="footer">
        <?php include '../php/footer1.php' ?>
    </footer>
</body>


</html>

<?php
$conn->close();
?>