<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="UTF-8">
    <link rel="icon" href="https://cdn.evbstatic.com/s3-build/548393-rc2022-06-29_16.04-ea1b0bd/django/images/favicons/android-chrome-192x192.png">
    <title>Why Eventbrite</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style/sakal.css"/>
    <link rel="stylesheet" href="../style/style.css"/>
    <script src="https://kit.fontawesome.com/0e1ed34929.js" crossorigin="anonymous"></script>

    <?php $e = $_GET['email']; ?>
</head>

<body>
    <nav>
        <?php include '../php/header1.php' ?>
    </nav>
    <section>
        <section class="why_eventbrite_layout">
            <div class="bg_layout">
                <div class="img_container">
                    <img src="../img/event.jpeg">
                </div>
                <div class="big_title">
                    <h1 class="overview_h1_title">
                        Powering your events
                        <br></br>
                        so you grow
                    </h1>
                </div>
                <p class="para_style">Eventbrite is the leading events management and growth platform
                    helping creators and entrepreneurs thrive</p>
                <div class="buttom_alignment_getstarted">
                    <a class="get_started_button" href="../homepage?email=<?php echo $e ?>">
                       <div class="align_button_getstarted"> Get Started Free </div>
                    </a>
                </div>
            </div>

            <div class="why_content">
                <div class="why_content_layout">
                    <div class="why_content_padding">
                        <div class="why-content-col1">
                            <h4 class="why_heading_h4">
                                <span style="margin-bottom: 20px;">
                                    Grow your attendance
                                </span>
                            </h4>
                            <div class="small_text_why">
                                Tap into the world’s largest events marketplace where millions discover things to do and
                                expand
                                your reach with marketing tools using our exclusive data
                            </div>
                            <div class="learn_more_text">
                                <a class="justify_content_why_footer" href="#learn" style="text-decoration: none;">
                                    Learn more
                                </a>
                                <div>
                                    <i style="padding-left: 15px; padding-top: 4px;"
                                        class="fa-solid fa-angles-down"></i>
                                </div>
                            </div>
                        </div>
                        <div class="why-content-col2">
                            <h4 class="why_heading_h4">
                                <span style="margin-bottom: 20px;">
                                    Engage your community
                                </span>
                            </h4>
                            <div class="small_text_why">
                                Stay connected to your attendees and keep them engaged with email marketing tools,
                                notifications, and real-time insights that get results
                            </div>
                            <div class="learn_more_text">
                                <a class="justify_content_why_footer" href="#learn" style="text-decoration: none;">
                                    Learn more
                                </a>
                                <div>
                                    <i style="padding-left: 15px; padding-top: 4px;"
                                        class="fa-solid fa-angles-down"></i>
                                </div>
                            </div>
                        </div>
                        <div class="why-content-col3">
                            <h4 class="why_heading_h4">
                                <span style="margin-bottom: 20px;">
                                    Create with confidence
                                </span>
                            </h4>
                            <div class="small_text_why">
                                Easily post and manage your online or in-person events on a trusted platform and build a
                                seamless attendee experience that elevates your brand
                            </div>
                            <div class="learn_more_text">
                                <a class="justify_content_why_footer" href="#learn" style="text-decoration: none;">
                                    Learn more
                                </a>
                                <div>
                                    <i style="padding-left: 15px; padding-top: 4px;"
                                        class="fa-solid fa-angles-down"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="why_eventbrite">
                <h2 class="why_event_title_style" id="learn">
                    Why Eventbrite?
                </h2>
                <p class="subhead_para">
                    Like you— the unstoppable entrepreneurs and passionate social ringleaders—we thrive at the
                    intersection
                    of
                    culture, community, and commerce. Over 15 years ago, we took on the complex world of
                    ticketing—making it
                    fast and easy for anyone to sell tickets and share their passion. Everything we build empowers
                    creators,
                    founders, and trendsetters to build thriving brands and communities through live experiences. Do
                    more of
                    what you love and grow eventfully
                </p>
                <div class="embebed_alignment">
                    <div class="youtube_embebed">

                        <iframe width="770" height="400" src="https://www.youtube.com/embed/xFLpMgXfw-Q"
                            title="YouTube video player" frameborder="0"
                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                            allowfullscreen=""></iframe>
                    </div>
                </div>
            </div>
        </section>
    </section>
    <footer class="footer">
        <?php
            include '../php/footer1.php';
        ?>
    </footer>
</body>

</html>

<?php
$conn->close();
?>