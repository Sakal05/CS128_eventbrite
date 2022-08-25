<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="sakal.css" />
    <link rel="icon" href="https://cdn.evbstatic.com/s3-build/548393-rc2022-06-29_16.04-ea1b0bd/django/images/favicons/android-chrome-192x192.png">
    <title>Likes Page</title>
    <script src="https://kit.fontawesome.com/0e1ed34929.js" crossorigin="anonymous"></script>
</head>

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

    //Build quert SQL statement
    $sql = "SELECT * from EVENT";

    //execute SQL
    $result = $conn->query($sql);


    ?>

    <!-- event container -->
    <div id="root">
        <?php include 'likepage_header.php' ?>
    </div>
    <div class="body_container">
        <div class="body_layout">
            <header class="user-page-header">
                <h1 class="header_text">
                    Likes
                </h1>
            </header>

            <div class="events_container_widght">
                <?php
                while ($row = mysqli_fetch_row($result)) {
                ?>
                    <article class="event_card_list" href="event-detail-1.htm">
                        <div class="event_card_content remove_style">
                            <a href="event-detail-1.htm">
                                <h3>
                                    <!-- Tech Career Fair: Exclusive Tech Hiring Event -->
                                    <?php echo $row[1] ?>
                                </h3>
                            </a>
                            <div class="event_card_sub_title">
                                <a>
                                    <?php echo date("D \, M j H:i", strtotime($row[4])); ?>
                                    <!-- Fri, Jul 22, 9:00 AM -->
                                </a>

                            </div>
                            <div class="event_card_location_text">
                                <a>
                                    <?php echo $row[7] ?>
                                    <!-- Moved to Virtual Event, San Francisco -->
                                </a>
                            </div>
                            <div class="event_card_price_text">
                                <a>
                                    <?php echo json_encode($row[8]); ?>
                                </a>
                            </div>
                        </div>
                        <div class="image_container_set">
                            <div class="event_image">
                                <img src="data:image/jpg;charset=utf8;base64,<?php echo base64_encode($row[2]); ?>" style="width: 220px;">
                            </div>
                            <div class="card_event_icon">
                                <span class="share_icon">
                                    <button class="share_icon_button">
                                        <svg x="0" y="0" viewBox="0 0 24 24" xml:space="preserve">
                                            <path id="share-ios-chunky_svg__eds-icon--share-ios-chunky_base" fill-rule="evenodd" clip-rule="evenodd" d="M18 16v2H6v-2H4v4h16v-4z"></path>
                                            <path id="share-ios-chunky_svg__eds-icon--share-ios-chunky_arrow" fill-rule="evenodd" clip-rule="evenodd" d="M12 4L7 9l1.4 1.4L11 7.8V16h2V7.8l2.6 2.6L17 9l-5-5z"></path>
                                        </svg>
                                    </button>
                                </span>
                                <div class="heart">
                                    <button type="button" onclick="toggleLike(0)" style="border:none; background: none">
                                        <div class="heart-empty" id="heart-empty-0">
                                            <svg id="heart-chunky_svg__eds-icon--user-chunky_svg" x="0" y="0" style="margin-top: 6px;" viewBox="0 0 24 24" xml:space="preserve">
                                                <path id="heart-chunky_svg__eds-icon--heart-chunky_base" fill="rgb(75, 77, 99)" clip-rule="evenodd" d="M18.8 6.2C18.1 5.4 17 5 16 5c-1 0-2 .4-2.8 1.2L12 7.4l-1.2-1.2C10 5.4 9 5 8 5c-1 0-2 .4-2.8 1.2-1.5 1.6-1.5 4.2 0 5.8l6.8 7 6.8-7c1.6-1.6 1.6-4.2 0-5.8zm-1.4 4.4L12 16.1l-5.4-5.5c-.8-.8-.8-2.2 0-3C7 7.2 7.5 7 8 7c.5 0 1 .2 1.4.6l2.6 2.7 2.7-2.7c.3-.4.8-.6 1.3-.6s1 .2 1.4.6c.8.8.8 2.2 0 3z">
                                                </path>
                                            </svg>
                                        </div>
                                        <div class="heart-full" id="heart-full-0">
                                            <svg id="heart-fill-svg" x="0" y="0" viewBox="0 0 24 24" xml:space="preserve">
                                                <path id="heart-align-svg" fill-rule="evenodd" clip-rule="evenodd" fill="red" d="M16 5c-1 0-2 .4-2.8 1.2L12 7.4l-1.2-1.2C10 5.4 9 5 8 5c-1 0-2 .4-2.8 1.2-1.5 1.6-1.5 4.2 0 5.8l6.8 7 6.8-7c1.5-1.6 1.5-4.2 0-5.8C18.1 5.4 17 5 16 5">
                                                </path>
                                            </svg>
                                        </div>
                                    </button>
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

    <footer class="footer_layout">
        <?php include 'likepage_footer.php' ?>
    </footer>
</body>

</html>

<?php
$conn->close();
?>