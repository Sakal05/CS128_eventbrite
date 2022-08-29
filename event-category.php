<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="../style/event-category.css">
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
    $cid = $_GET['cid'];
    $cat = $_GET['cat'];
    //Build quert SQL statement
    $sql = "SELECT
	*
FROM
	Event_category
	INNER JOIN
	`event`
	ON 
		Event_category.Event_ID = `event`.Event_ID WHERE CAT_ID = $cid";
   
    
    //execute SQL
    $result = $conn->query($sql);
   
?>
    <nav>
        <?php include '../php/header1.php' ?>
    </nav>
    <div class="container">
        <div class="category">
            <div>
                <h2>Other categories</h2>
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
                    <a href="event-category.php?cid=1&cat=Music">Music</a>
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
                    <a href="event-category.php?cid=2&cat=Workshop">Workshop</a>
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
                    <a href="event-category.php?cid=3&cat=Technology">Technology</a>
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
                    <a href="event-category.php?cid=4&cat=Business">Business</a>
                </div>
            </div>
        </div>
    </div>
    <section class="events">
        <div class="container">
            <center>
                <p class="category2"><?php echo $cat ?></p>
            </center>
            <div class="events-collection" id="events-collection">
            <?php
                $i = 1;
                while ($row = mysqli_fetch_assoc($result)) {
            ?>
                <div class="item">
                    <div class="pic">
                    <img src="<?php echo ($row['Event_image']) ?>">
                        <div class="popUp">
                            <button onclick="toggleLike(<?php echo $i ?>)">
                                <div class="h-empty" id="h-empty-<?php echo $i ?>" style="display:<?php if ($row['Like_status']==0){echo "block;";} else { echo "none;";}?>">
                                    <svg id="heart-chunky_svg__eds-icon--user-chunky_svg" x="0" y="0" viewBox="0 0 24 24" xml:space="preserve"><path id="heart-chunky_svg__eds-icon--heart-chunky_base" fill-rule="evenodd" clip-rule="evenodd" d="M18.8 6.2C18.1 5.4 17 5 16 5c-1 0-2 .4-2.8 1.2L12 7.4l-1.2-1.2C10 5.4 9 5 8 5c-1 0-2 .4-2.8 1.2-1.5 1.6-1.5 4.2 0 5.8l6.8 7 6.8-7c1.6-1.6 1.6-4.2 0-5.8zm-1.4 4.4L12 16.1l-5.4-5.5c-.8-.8-.8-2.2 0-3C7 7.2 7.5 7 8 7c.5 0 1 .2 1.4.6l2.6 2.7 2.7-2.7c.3-.4.8-.6 1.3-.6s1 .2 1.4.6c.8.8.8 2.2 0 3z"></path></svg>
                                </div>
                                <div class="h-full" id="h-full-<?php echo $i ?>" style="display:<?php if ($row['Like_status']==1){echo "block;";} else { echo "none;";}?>">
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
    <?php include '../php/footer1.php' ?>
    </footer>
    <script src="./script/heart.js"></script>
</body>

</html>

<?php
$conn->close();
?>