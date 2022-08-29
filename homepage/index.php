<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="../style/homepage2.css">
    <link rel="icon"
        href="https://cdn.evbstatic.com/s3-build/548393-rc2022-06-29_16.04-ea1b0bd/django/images/favicons/android-chrome-192x192.png">
    <title>Online Event Registration Service - Eventbrite - This event is not available</title>
    <script src="https://kit.fontawesome.com/0e1ed34929.js" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="../style/style.css">
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
    $sql = "SELECT * FROM event";

    //execute SQL
    $result = $conn->query($sql);

?>
    <nav>
        <?php include '../php/header1.php' ?>
    </nav>
    <section class="hero">
        <div class="container">
            <div class="info">
                <div class="hero-text">
                    <svg id="home-header-text_svg__Layer_1" xmlns="http://www.w3.org/2000/svg" x="0" y="0" viewBox="0 0 295.76 164.65" xml:space="preserve"><style>
                        .home-header-text_svg__st0{fill:#fff}
                    </style><path class="home-header-text_svg__st0" d="M156.86 93.95h-11.03V84.4h32.51v9.55h-11.03v70.7h-10.46v-70.7zM183.46 84.4h10.46v80.25h-10.46V84.4zM203.01 84.4h13.75l13.3 58.88 13.75-58.88h13.41v80.25h-9.89v-60.36l-13.75 60.36h-6.82l-13.87-60.36v60.36H203V84.4zM266.32 84.4h29.44v9.55h-18.98v23.3h18.64v9.66h-18.64v28.19h18.98v9.55h-29.44V84.4zM200.25 47.59h7.12v29.04h-7.12V47.59zM218.68 75.95c-2.58-1.06-4.36-2.68-5.35-4.87-.49-1.21-.74-2.5-.74-3.87h7.36c.05.71.19 1.34.41 1.89.52 1.12 1.46 1.95 2.82 2.47 1.36.52 3.05.78 5.08.78 1.78 0 3.33-.2 4.63-.6 1.3-.4 2.15-1.01 2.53-1.83.14-.3.21-.67.21-1.11 0-.44-.07-.79-.21-1.07-.27-.63-.84-1.14-1.69-1.54-.85-.4-1.82-.71-2.92-.95-1.1-.23-2.5-.47-4.2-.72-.44-.08-1.25-.22-2.43-.41-2.8-.52-5.05-1.21-6.77-2.06-1.71-.85-2.91-2.02-3.6-3.5-.36-.82-.53-1.8-.53-2.92 0-1.04.19-2.03.58-2.96.58-1.32 1.54-2.42 2.9-3.31 1.36-.89 2.98-1.56 4.87-2.02 1.89-.45 3.93-.68 6.13-.68 3.43 0 6.39.53 8.89 1.6 2.5 1.07 4.21 2.65 5.14 4.73.44 1.01.69 2.19.74 3.54h-7.4a4.78 4.78 0 00-.45-1.81c-.88-2-3.18-3-6.91-3-1.62 0-3.04.19-4.28.58-1.23.38-2.03.97-2.39 1.77-.11.22-.16.49-.16.82 0 .36.05.66.16.9.25.55.75 1.01 1.5 1.38.75.37 1.63.67 2.63.9 1 .23 2.32.49 3.97.76l2.1.37c1.95.36 3.65.76 5.12 1.21 1.47.45 2.76 1.06 3.89 1.83 1.12.77 1.95 1.73 2.47 2.88.41.96.62 1.99.62 3.09 0 1.21-.23 2.32-.7 3.33-.9 2-2.64 3.5-5.2 4.48-2.56.99-5.67 1.48-9.32 1.48-3.75.03-6.92-.5-9.5-1.56zM200.27 30.16h43.6v9.67h-43.6zM.57 121.03h142.05v9.67H.57z"></path><g><path class="home-header-text_svg__st0" d="M42.28 1.18h10.6l19.37 53.63V1.18h9.42v75.57H71.29L51.7 21.73v55.02h-9.42V1.18zM93.66 70.01c-1.07-1.64-1.89-3.57-2.46-5.78-.57-2.21-1-5.28-1.28-9.21-.29-3.92-.43-9.28-.43-16.06 0-6.49.07-11.49.21-14.99.14-3.5.39-6.21.75-8.14.36-1.93.89-3.67 1.61-5.25 1.5-3.43 3.75-6.05 6.74-7.87S105.55 0 110.04 0c4.42 0 8.14.91 11.13 2.73 3 1.82 5.25 4.44 6.74 7.87.71 1.57 1.25 3.34 1.61 5.3.36 1.96.62 4.69.8 8.19.18 3.5.27 8.46.27 14.88s-.09 11.38-.27 14.88c-.18 3.5-.45 6.23-.8 8.19-.36 1.96-.89 3.73-1.61 5.3-1.5 3.43-3.75 6.05-6.74 7.87-3 1.82-6.71 2.73-11.13 2.73-7.64-.01-13.09-2.65-16.38-7.93zm25.37-6.85c.43-1 .75-2.19.96-3.59.21-1.39.36-3.84.43-7.33.07-3.5.11-7.92.11-13.27s-.04-9.78-.11-13.27c-.07-3.5-.21-5.94-.43-7.33-.21-1.39-.54-2.59-.96-3.59-1.64-3.64-4.64-5.46-8.99-5.46-4.35 0-7.35 1.82-8.99 5.46-.43 1-.75 2.19-.96 3.59-.21 1.39-.37 3.64-.48 6.74-.11 3.1-.16 7.73-.16 13.86 0 6.14.05 10.76.16 13.86.11 3.1.27 5.35.48 6.74.21 1.39.54 2.59.96 3.59 1.64 3.64 4.64 5.46 8.99 5.46 4.35 0 7.35-1.82 8.99-5.46zM196.96 1.18l-12.74 75.57h-10.81l-8.35-56.95-8.46 56.95h-10.7L133.16 1.18h9.53l8.88 59.41 8.35-59.41h10.28l8.35 58.34 8.88-58.34h9.53z"></path></g><g><path class="home-header-text_svg__st0" d="M13.37 100.72L0 84.43h8.43l8.43 10.32 8.51-10.32h8.43l-13.37 16.29v12.75h-7.08v-12.75zM40.05 112.09c-3.03-1.52-5.19-3.72-6.48-6.6-.88-1.92-1.32-4.1-1.32-6.54 0-2.3.42-4.43 1.28-6.38.85-1.92 2.1-3.56 3.76-4.92 1.66-1.36 3.67-2.39 6.03-3.09 2.36-.7 5-1.05 7.94-1.05 2.91 0 5.53.34 7.88 1.03 2.34.69 4.34 1.69 5.99 3.02 1.65 1.33 2.89 2.93 3.74 4.79.93 2.08 1.4 4.28 1.4 6.58 0 2.47-.49 4.73-1.48 6.79-1.32 2.8-3.48 4.94-6.5 6.42-3.02 1.48-6.71 2.22-11.07 2.22-4.42.01-8.14-.75-11.17-2.27zm17.83-5.02c1.81-.92 3.1-2.24 3.87-3.97.52-1.32.78-2.7.78-4.15 0-1.56-.27-2.98-.82-4.24-.8-1.73-2.09-3.04-3.89-3.93-1.8-.89-4-1.34-6.6-1.34-2.58 0-4.77.45-6.56 1.34-1.8.89-3.09 2.2-3.89 3.93-.55 1.26-.82 2.67-.82 4.24 0 1.45.27 2.84.82 4.15.79 1.73 2.1 3.05 3.91 3.97 1.81.92 4 1.38 6.58 1.38 2.6 0 4.81-.46 6.62-1.38zM78.53 110.92c-2.58-2.3-3.87-5.76-3.87-10.37V84.43h7.12v15.63c0 1.97.3 3.57.9 4.79a5.68 5.68 0 002.78 2.71c1.25.59 2.87.88 4.87.88s3.63-.29 4.87-.88c1.25-.59 2.17-1.49 2.78-2.71.6-1.22.9-2.82.9-4.79V84.43H106v16.12c0 4.61-1.29 8.06-3.87 10.37-2.58 2.3-6.51 3.46-11.81 3.46-5.28-.01-9.22-1.16-11.79-3.46zM122.17 102.82h-3.04v10.65h-7.12V84.43h17.07c2.63 0 4.86.44 6.68 1.32 1.82.88 3.11 2.15 3.85 3.83.49 1.1.74 2.4.74 3.91 0 1.67-.27 3.13-.82 4.36-.66 1.48-1.71 2.64-3.15 3.48-1.44.84-3.23 1.32-5.37 1.46l11.6 10.7h-9.26l-11.18-10.67zm-3.04-4.86h8.14c1.54 0 2.76-.16 3.66-.47.91-.31 1.55-.88 1.93-1.71.22-.47.33-1.14.33-2.02 0-.74-.11-1.33-.33-1.77-.36-.82-1.01-1.41-1.95-1.77-.95-.36-2.16-.53-3.64-.53h-8.14v8.27z"></path></g></svg>
                </div>
                <button class="find">
                    Find your next event
                </button>
            </div>
        </div>
    </section>
    <br><br>
    <div class="container">
        <div class="header-text">
            <h4>Re-open confidently with Eventbrite’s COVID-19 Safety Playbook</h4>
            <p>We partnered with risk management and health experts to empower event creators to thoughtfully consider
                potential safety and security risks at your event. <a href="#">See the playbook.</a></p>
        </div>
        <br>
        <div class="popular">
            <b>Popular in</b>
            <a href="#"><b style="color:blue"> Phnom Penh</b></a>
        </div>
        <div class="menu">
            <a href="#" class="top-menu">All</a>
            <a href="#" class="top-menu">For You</a>
            <a href="#" class="top-menu">Online</a>
            <a href="#" class="top-menu">Today</a>
            <a href="#" class="top-menu">This weekend</a>
            <a href="#" class="top-menu">4th of July</a>
            <a href="#" class="top-menu">Free</a>
            <a href="#" class="top-menu">Music</a>
            <a href="#" class="top-menu">Food & Drink</a>
            <a href="#" class="top-menu">Charity & Causes</a>
        </div>
        <div class="category">
            <div>
                <h2>Check out trending categories</h2>
                <br>
                <div class="five">
                    <svg id="music-note_svg__eds-icon--music-note_svg" x="0" y="0" viewBox="0 0 24 24"
                        xml:space="preserve">
                        <path id="music-note_svg__eds-icon--music-note_base" fill="orangered" fill-rule="evenodd"
                            clip-rule="evenodd"
                            d="M21 2L8 5.5v11.3c-.5-.5-1.2-.8-2-.8-1.7 0-3 1.3-3 3s1.3 3 3 3 3-1.3 3-3V9.5l11-3v7.2c-.5-.5-1.2-.8-2-.8-1.7 0-3 1.3-3 3s1.3 3 3 3 3-1.3 3-3V2zM6 21c-1.1 0-2-.9-2-2s.9-2 2-2 2 .9 2 2-.9 2-2 2zM9 8.5V6.2l11-3v2.3l-11 3zm9 9.5c-1.1 0-2-.9-2-2s.9-2 2-2 2 .9 2 2-.9 2-2 2z">
                        </path>
                    </svg>
                </div>
                <div class="twenty">
                    <a href="../event-category.php?cid=1&cat=Music">Music</a>
                </div>
                <div class="five">
                    <i class="eds-vector-image1 eds-icon--small eds-vector-image1--ui-orange" data-spec="icon"
                        data-testid="icon" aria-hidden="true"><svg id="travel_svg__eds-icon--travel_svg" x="0" y="0"
                            viewBox="0 0 24 24" xml:space="preserve">
                            <path id="travel_svg__eds-icon--travel_base" fill-rule="evenodd" clip-rule="evenodd"
                                fill="orangered"
                                d="M12.5 10.4l1-1 1 1V13h-2v-2.6zM4 21h2V6H4v15zm11.5-7v-4L14 8.5V6h3v15H7V6h6v2.4L11.5 10v4h4zm2.5 7h2V6h-2v15zM9 5h6V3H9v2zM8 2v3H3v17h18V5h-5V2H8z">
                            </path>
                        </svg></i>
                </div>
                <div class="twenty">
                    <a href="../event-category.php?cid=1&cat=Workshop">Workshop</a>
                </div>
                <div class="five">
                    <svg id="game_svg__eds-icon--game_svg" x="0" y="0" viewBox="0 0 24 24" xml:space="preserve">
                        <path id="game_svg__eds-icon--game_base" fill="orangered" fill-rule="evenodd"
                            clip-rule="evenodd"
                            d="M11 8h2V7h-2v1zm10 11H3V9h18v10zM14 8V6h-1.5V4h-1v2H10v2H2v12h20V8h-8z"></path>
                        <path id="game_svg__eds-icon--game_button" fill="orangered" fill-rule="evenodd"
                            clip-rule="evenodd"
                            d="M16 12c-1.1 0-2 .9-2 2s.9 2 2 2 2-.9 2-2-.9-2-2-2zm0 3c-.6 0-1-.4-1-1s.4-1 1-1 1 .4 1 1-.4 1-1 1z">
                        </path>
                        <path id="game_svg__eds-icon--game_pad" fill="orangered" fill-rule="evenodd" clip-rule="evenodd"
                            d="M8 12H7v1.5H5.5v1H7V16h1v-1.5h1.5v-1H8z"></path>
                    </svg>
                </div>
                <div class="twenty">
                    <a href="../event-category.php?cid=1&cat=Technology">Technology</a>
                </div>
                <div class="five">
                    <svg class="briefcase_svg__eds-icon--briefcase_svg" viewBox="0 0 24 24">
                        <path class="briefcase_svg__eds-icon--briefcase_base" fill="orangered" fill-rule="evenodd"
                            clip-rule="evenodd"
                            d="M17 14v-2h2v7H5v-7h2v2h1v-2h8v2h1zM4 7h16v4h-3v-1h-1v1H8v-1H7v1H4V7zm5-1h6V5H9v1zM8 4v2H3v6h1v8h16v-8h1V6h-5V4H8z">
                        </path>
                    </svg>
                </div>
                <div class="twenty">
                    <a href="../event-category.php?cid=1&cat=Business">Business</a>
                </div>
            </div>
        </div>
    </div>
    <section class="events">
        <div class="container">
            <br><br><br>
            <h1>Events in Phnom Penh</h1>
            <div class="events-collection" id="events-collection">
            <?php
                $i = 1;
                while ($row = mysqli_fetch_assoc($result)) {
            ?>
                <div class="item">
                    <div class="pic">

                    <img src="<?php echo ($row['Event_image']) ?>" style="height: 150px;">

                        <div class="popUp">
                            <button onclick="toggleLike(<?php echo $row['Event_ID']; ?>)">
                                <div class="h-empty" id="h-empty-<?php echo $row['Event_ID']; ?>" style="display:<?php if ($row['Like_status']==0){echo "block;";} else { echo "none;";}?>">
                                    <svg id="heart-chunky_svg__eds-icon--user-chunky_svg" x="0" y="0" viewBox="0 0 24 24" xml:space="preserve"><path id="heart-chunky_svg__eds-icon--heart-chunky_base" fill-rule="evenodd" clip-rule="evenodd" d="M18.8 6.2C18.1 5.4 17 5 16 5c-1 0-2 .4-2.8 1.2L12 7.4l-1.2-1.2C10 5.4 9 5 8 5c-1 0-2 .4-2.8 1.2-1.5 1.6-1.5 4.2 0 5.8l6.8 7 6.8-7c1.6-1.6 1.6-4.2 0-5.8zm-1.4 4.4L12 16.1l-5.4-5.5c-.8-.8-.8-2.2 0-3C7 7.2 7.5 7 8 7c.5 0 1 .2 1.4.6l2.6 2.7 2.7-2.7c.3-.4.8-.6 1.3-.6s1 .2 1.4.6c.8.8.8 2.2 0 3z"></path></svg>
                                </div>
                                <div class="h-full" id="h-full-<?php echo $row['Event_ID']; ?>" style="display:<?php if ($row['Like_status']==1){echo "block;";} else { echo "none;";}?>">
                                    <svg id="heart-fill-svg" x="0" y="0" viewBox="0 0 24 24" xml:space="preserve">
                                        <path id="heart-align-svg" fill-rule="evenodd" clip-rule="evenodd" fill="red"
                                        d="M16 5c-1 0-2 .4-2.8 1.2L12 7.4l-1.2-1.2C10 5.4 9 5 8 5c-1 0-2 .4-2.8 1.2-1.5 1.6-1.5 4.2 0 5.8l6.8 7 6.8-7c1.5-1.6 1.5-4.2 0-5.8C18.1 5.4 17 5 16 5">
                                        </path>
                                    </svg>
                                </div>
                            </button>
                        </div>
                    </div>
                    <a href="../detail/event-detail.php?id=<?php echo $row['Event_ID'] ?>">
                    <h2><?php echo $row['Event_title'] ?></h2></a>
                    <h3><span class="orangered"><?php echo date("D \, M j H:i", strtotime($row['Event_time'])); ?></span></h3>
                    <h3><span class="grey"><?php echo $row['Location'] ?></span></h3>
                    <h3><span class="grey"><?php echo $row['Price'] ?></span></h3>
                    <h3><?php echo $row['Organization'] ?></h3>
                </div>
                <?php
                $i++;
                }
                ?>
            </div>
        </div>
    </section>
    <footer>
    <?php include '../php/footer.php' ?>
    </footer>
    <script src="../script/homepage.js"></script>
</body>

</html>

<?php
$conn->close();
?>