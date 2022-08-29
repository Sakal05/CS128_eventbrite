<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="../style/style.css">
    <link rel="stylesheet" href="../style/find_your_tickets.css">
    <link rel="icon"
        href="https://cdn.evbstatic.com/s3-build/548393-rc2022-06-29_16.04-ea1b0bd/django/images/favicons/android-chrome-192x192.png">
    <title>Find ticket</title>
    <script src="https://kit.fontawesome.com/eae7901619.js" crossorigin="anonymous"></script>
</head>

<body>
    <nav>
        <?php include '../php/header1.php' ?>
    </nav>
    <div class="content1">
        <div class="heading">
            <div class="content">
                <h1>Find your tickets</h1>
                <div class="e-logo">
                    <img src="../img/e-logo.jpg">
                </div>
                <p style="float:left; padding-left:20px;">Updated by Antwonna D</p>
                <p style="float:left; padding-left:120px;"> Category: Attending an event</p>
            </div>
        </div>
        <div class="container">
            <div class="twenty">
                <p>Here's how you do it:</p>
                <a
                    href="https://www.eventbrite.com/support/articles/en_US/Troubleshooting/where-are-my-tickets?lg=en_US#01">Where
                    to find your tickets</a>
                <br><br>
                <a
                    href="https://www.eventbrite.com/support/articles/en_US/Troubleshooting/where-are-my-tickets?lg=en_US#02">What
                    information is included on your tickets</a>
                <br><br>
                <a
                    href="https://www.eventbrite.com/support/articles/en_US/Troubleshooting/where-are-my-tickets?lg=en_US#03">Why
                    tickets might be missing</a>
                <br><br>
                <a
                    href="https://www.eventbrite.com/support/articles/en_US/Troubleshooting/where-are-my-tickets?lg=en_US#04">What
                    to do if your tickets are missing</a>
            </div>
            <div class="eighty">
                <br>
                <p>When you order tickets on Eventbrite, a confirmation is sent to the email address you entered for the
                    order. This article will explain what information Eventbrite provides on your tickets, where to find
                    your tickets, and what to do if you can’t find them.</p>
                <h2 class="h2">Where to find your tickets</h2>
                <p><strong>Your email inbox:</strong>Search your inbox for an email from noreply@order.eventbrite.com</p>
                <p><strong>Your Eventbrite account:</strong>When you register for an event, Eventbrite automatically creates
                    an account associated with your email address. Log in using the same email address and select “Tickets”
                    from the dropdown in your Eventbrite account. </p>
                <p><strong>The Eventbrite app:</strong></p>
                <ul>
                    <li>iPhone: Log in and tap the ‘Tickets’ icon.</li>
                    <li>Android: Log in and tap the ‘Profile’ icon. Then find your order and tap the ‘Tickets’ icon.</li>
                </ul>
                <h2 class="h2">What information is included on your tickets</h2>
                <p>Eventbrite tickets include: </p>
                <ul>
                    <li>Event name, date, and location </li>
                    <li>Your name, ticket type, and order number. </li>
                </ul>
                <p>Eventbrite tickets do <b>not</b> include: </p>
                <ul>
                    <li>Specific event details</li>
                    <li>Links needed to view/attend online events. </li>
                </ul>
                <p>If you need information about an event or a link to join an online event, <b>contact the event
                        organizer.</b></p>
                <h2 class="h2">
                    Why tickets might be missing</h2>
                <ul>
                    <li><b>Incorrect email address:</b>You’re logged into Eventbrite using a different email address than
                        what you used to place the order or there’s a typo in the email address. </li>
                    <li><b>Email deliverability:</b> The confirmation was sent to your junk/spam folder or was unable to be
                        delivered.</li>
                    <li><b>The organizer disabled PDF tickets: </b>The order appears in your account, but you get an error
                        when you try to print tickets.</li>
                </ul>
                <h2 class="h2">What to do if your tickets are missing</h2>
                <p><a href="https://www.eventbrite.com/support/articleredirect?anum=3275" style="color:blue">Contact the
                        event organizer</a> to have them look up your order and resend your confirmation email.</p>
                <div class="review">
                    <div class="text">
                        <p>Did this article answer your question?</p>
                    </div>
                    <br>
                    <div class="smile">
                        <img src="../img/smile.png">
                    </div>
                    <div class="sad">
                        <img src="../img/sad-face-in-rounded-square.png">
                    </div>

                </div>
            </div>
        </div>
        <div class="question">
            <p>Still have questions? <a href="https://www.eventbrite.com/support/contact-us" style="color: blue;">Contact
                    us.</a></p>
        </div>
    </div>
    <footer class="footer">
        <?php
            include '../php/footer1.php';
        ?>
    </footer>
</body>

</html>