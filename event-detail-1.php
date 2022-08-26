<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="UTF-8">
    <link rel="icon"
        href="https://cdn.evbstatic.com/s3-build/548393-rc2022-06-29_16.04-ea1b0bd/django/images/favicons/android-chrome-192x192.png">
    <title>Event Detail-01</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="sakal.css" />
    <script src="https://kit.fontawesome.com/0e1ed34929.js" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
</head>

<body>
    <!-- testing -->
    <div id="root">
    <?php
        include '/Applications/MAMP/htdocs/evenbrite 2/php/event-detail.php';
     ?>
        <div>
            <div class="bg_event_detail_img">
                <img
                    src="https://img.evbuc.com/https%3A%2F%2Fcdn.evbuc.com%2Fimages%2F132627109%2F197361445633%2F1%2Foriginal.jpg?w=600&auto=format%2Ccompress&q=75&sharp=10&rect=0%2C0%2C2160%2C1080&s=bb7a77861e0f0513eb9676c947ce6e84">
            </div>
        </div>

        <div class="event_detail_layout">
            <div class="event_detail_content">
                <div class="title_container_group">
                    <div class="event_detail_img">

                        <img class="listing-image--main" width="600" height="300"
                            src="https://img.evbuc.com/https%3A%2F%2Fcdn.evbuc.com%2Fimages%2F132627109%2F197361445633%2F1%2Foriginal.jpg?w=600&auto=format%2Ccompress&q=75&sharp=10&rect=0%2C0%2C2160%2C1080&s=bb7a77861e0f0513eb9676c947ce6e84">

                    </div>
                    <div class="event_detail_main_title" style="background-color: rgb(240, 240, 240);">
                        <div class="event_detail_content">
                            <div class="event_detail_date">
                                <p>Jul</p>
                                <p>22</p>
                            </div>
                            <div class="event_detail_title_text">
                                <h1 class="event_detail_title_h1">Tech Career Fair: Exclusive Tech Hiring Event</h1>
                                <div class="event_detail_organization_title">
                                    <div class="event_detail_organization_style">

                                        <div>by</div>
                                        <div>
                                            <a class="organization_link"> Tech Career Fair</a>
                                        </div>

                                    </div>
                                    <span class="follower_text">
                                        <div class="follower_organizer_count">16944 follwers</div>
                                        <button class="follow_organizer_button" type="button">

                                            Follow

                                        </button>
                                    </span>
                                    <div class="price_status_text">
                                        <div>Free</div>
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
                                    <button class="share_icon_button" style="padding-top: 6px; padding-bottom:6px">
                                        <svg x="0" y="0" viewBox="0 0 24 24" xml:space="preserve">
                                            <path id="share-ios-chunky_svg__eds-icon--share-ios-chunky_base"
                                                fill-rule="evenodd" clip-rule="evenodd" d="M18 16v2H6v-2H4v4h16v-4z">
                                            </path>
                                            <path id="share-ios-chunky_svg__eds-icon--share-ios-chunky_arrow"
                                                fill-rule="evenodd" clip-rule="evenodd"
                                                d="M12 4L7 9l1.4 1.4L11 7.8V16h2V7.8l2.6 2.6L17 9l-5-5z"></path>
                                        </svg>
                                    </button>
                                </span>
                                <div class="heart">
                                    <div onclick="toggleLike(0)">
                                        <div class="heart-empty" id="heart-empty-0">
                                            <svg  id="heart-chunky_svg__eds-icon--user-chunky_svg" x="0" y="0" style="margin-top: 6px;"
                                                viewBox="0 0 24 24" xml:space="preserve">
                                                <path id="heart-chunky_svg__eds-icon--heart-chunky_base"
                                                    fill="rgb(75, 77, 99)"  clip-rule="evenodd"
                                                    d="M18.8 6.2C18.1 5.4 17 5 16 5c-1 0-2 .4-2.8 1.2L12 7.4l-1.2-1.2C10 5.4 9 5 8 5c-1 0-2 .4-2.8 1.2-1.5 1.6-1.5 4.2 0 5.8l6.8 7 6.8-7c1.6-1.6 1.6-4.2 0-5.8zm-1.4 4.4L12 16.1l-5.4-5.5c-.8-.8-.8-2.2 0-3C7 7.2 7.5 7 8 7c.5 0 1 .2 1.4.6l2.6 2.7 2.7-2.7c.3-.4.8-.6 1.3-.6s1 .2 1.4.6c.8.8.8 2.2 0 3z">
                                                </path>
                                            </svg>
                                        </div>
                                        <div class="heart-full" id="heart-full-0">
                                            <svg id="heart-fill-svg" x="0" y="0" viewBox="0 0 24 24" xml:space="preserve">
                                                <path id="heart-align-svg" fill-rule="evenodd" clip-rule="evenodd" fill="red"
                                                d="M16 5c-1 0-2 .4-2.8 1.2L12 7.4l-1.2-1.2C10 5.4 9 5 8 5c-1 0-2 .4-2.8 1.2-1.5 1.6-1.5 4.2 0 5.8l6.8 7 6.8-7c1.5-1.6 1.5-4.2 0-5.8C18.1 5.4 17 5 16 5">
                                                </path>
                                            </svg>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="middle_side_bar">


                            </div>

                            <div class="right_side_bar">
                                <button class="register_button" id="button-register">
                                    Register
                                </button>
                            </div>
                        </div>
                    </div>
                </div>

                <section class="event_info_wrapper">
                    <div class="event_info">
                        <div class="event_info_details">
                            <div class="organization_loy">
                                <p style="font-size: .875rem; line-height: 1.25rem;">
                                    <strong>Tech Career Fair focus on helping companies achieve their diversity and
                                        inclusivity initiative with more diverse non-traditional candidates</strong>
                                </p>
                            </div>
                            <div class="About_event_detail">
                                <h2>About this event</h2>
                                <div class="event_detail_text">
                                    <div class="event_detail_text_left event_content  event_content_a">
                                        <h2>Tech Career Fair</h2>
                                        <p>[IMPORTANT UPDATE!] :</p>
                                        <p>"With COVID-19 now a global pandemic, the first thing on our minds is your
                                            safety! We are hosting ALL of our career fairs virtually until the public
                                            health officials and our own executive team determines it's safe enough to
                                            resume them in person. Here is a quick rundown:</p>
                                        <ul style="display: block; line-height: 1.5rem; padding-left: 2em; color: #6f7287;">
                                            <li>Career fair will be tentatively moved virtually/ to a later date, please
                                                check the event description for updates or the following steps below to
                                                get notified.</li>
                                            <li>If you have not already created your account, do so with the&nbsp;<a
                                                    style="text-decoration: none;"
                                                    href="https://careerscrossroad.com/signup?code=SFTechCareerFair2022"
                                                    target="_self" rel="nofollow noopener noreferrer">normal
                                                    process</a>&nbsp;as below and you will be notified on the updates of
                                                it.</li>
                                        </ul>
                                        <p>[END OF UPDATE]</p>
                                        <p></p>
                                        <p>We will be hosting a Tech Career Fair with our hiring partners from fast
                                            growing startups and Fortune 500 companies in technology. &nbsp;There will
                                            be a focus on helping companies achieve their diversity and inclusivity
                                            initiative with more diverse candidates&nbsp;to their talent pool. Available
                                            roles that our hiring companies are looking to fill are of the following:
                                        </p>
                                        <ul style="display: block; line-height: 0.8rem; padding-left: 2em; color: #6f7287;">
                                            <li>
                                                <p>Software Engineering</p>
                                            </li>
                                            <li>
                                                <p>Product Management</p>
                                            </li>
                                            <li>
                                                <p>Data Scientist</p>
                                            </li>
                                            <li>
                                                <p>AI/Machine Learning Engineer</p>
                                            </li>
                                            <li>
                                                <p>Data Analyst</p>
                                            </li>
                                            <li>
                                                <p>UI/UX Design</p>
                                            </li>
                                            <li>
                                                <p>Marketing</p>
                                            </li>
                                            <li>
                                                <p>Sales</p>
                                            </li>
                                        </ul>
                                        <p>To make sure your profile is visible and accessible to hiring partners and
                                            companies in their system please make sure you complete your profile and
                                            upload your resume to the platform.</p>
                                        <p></p>
                                        <h3>Steps:</h3>
                                        <ol>
                                            <li>
                                                <p>Complete the Sign-up form&nbsp;<a
                                                        href="https://careerscrossroad.com/signup?code=SFTechCareerFair2022"
                                                        target="_self"
                                                        rel="nofollow noopener noreferrer">here&nbsp;</a>or the link
                                                    below&nbsp;and upload your resume to the system to get your QR
                                                    code/candidate profile link:&nbsp;<a
                                                        href="https://careerscrossroad.com/signup?code=SFTechCareerFair2022"
                                                        target="_self"
                                                        rel="nofollow noopener noreferrer">https://careerscrossroad.com/signup?code=SFTechCareerFair2022</a>
                                                </p>
                                            </li>
                                            <li>
                                                <p>Once your profile is completed and approved, await for outreach by
                                                    hiring companies for pre-screening interview</p>
                                            </li>
                                            <li>
                                                <p>Attend the career fair and check-in with your QR code/digital profile
                                                    link at the hiring companies that you have been assigned with </p>
                                            </li>
                                        </ol>
                                        <p><em>*Note: This is an invite only event due to limited space and high demand.
                                                To increase your chance to be selected by our hiring companies and
                                                partners to this event please make sure to follow the instructions and
                                                submit a complete profile.&nbsp;Shortlisted candidates will be notified
                                                for next steps </em></p>
                                        <p></p>
                                        <h3>Employers:</h3>
                                        <p>To reserve your spot <a
                                                href="https://www.eventbrite.com/e/tech-career-fair-exclusive-tech-hiring-event-new-slots-available-tickets-146564621729">signup
                                            </a>here to get your company or&nbsp;get your company on the
                                            waitlist&nbsp;<a href="https://fastservicecom.typeform.com/to/akPkGu2k"
                                                target="_self" rel="nofollow noopener noreferrer">here&nbsp;</a>for the
                                            next event and we will reach out to you with more info if we can slot you
                                            in.</p>
                                        <p></p>
                                    </div>
                                    <section>
                                        <div class="tag_heading_style">
                                            <h3 class="tag_share_h3_text">Tags</h3>
                                            <ul style="margin: 0; padding: 0">
                                                <li class="tag_each_element">
                                                    <a class="tag_link">
                                                        United States Events
                                                    </a>
                                                </li>
                                                <li class="tag_each_element">
                                                    <a class="tag_link">
                                                        Cambodia Events
                                                    </a>
                                                </li>
                                                <li class="tag_each_element">
                                                    <a class="tag_link">
                                                        Things to do in Phnom Penh
                                                    </a>
                                                </li>
                                                <li class="tag_each_element">
                                                    <a class="tag_link">
                                                        Chill in Phnom Penh
                                                    </a>
                                                </li>
                                                <li class="tag_each_element">
                                                    <a class="tag_link">
                                                        Business
                                                    </a>
                                                </li>
                                                <li class="tag_each_element">
                                                    <a class="tag_link">
                                                        Anouncement
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
                                                        <a target="_blank" style="text-decoration: none; color: #6f7287;"
                                                            href="https://www.facebook.com/Paragon-Secret-Confession-107113467533280/">
                                                            <i style="padding-right: 20px;"
                                                                class="fab fa-facebook-f"></i>
                                                        </a>
                                                    </span>
                                                    <span>
                                                        <a target="_blank" style="text-decoration: none; color: #6f7287;"
                                                            href="https://www.facebook.com/Paragon-Secret-Confession-107113467533280/">
                                                            <i style="padding-right: 20px;"
                                                                class="fa-brands fa-facebook-messenger"></i>
                                                        </a>
                                                    </span>
                                                    <span>
                                                        <a  target="_blank" style="text-decoration: none; color: #6f7287;"
                                                            href="https://www.facebook.com/Paragon-Secret-Confession-107113467533280/">
                                                            <i style="padding-right: 20px;"
                                                                class="fa-brands fa-linkedin-in"></i>
                                                        </a>
                                                    </span>
                                                    <span>
                                                        <a target="_blank" style="text-decoration: none; color: #6f7287;"
                                                            href="https://www.facebook.com/Paragon-Secret-Confession-107113467533280/">
                                                            <i style="padding-right: 20px;"
                                                                class="fa-brands fa-twitter"></i>
                                                        </a>
                                                    </span>

                                                    <span>
                                                        <a target="_blank" style="text-decoration: none; color: #6f7287;"
                                                            href="https://www.facebook.com/Paragon-Secret-Confession-107113467533280/">
                                                            <i style="padding-right: 20px;"
                                                                class="fa-solid fa-envelope"></i>
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
                                        <time style="line-height: 5px;">
                                            <p>Fri, July 22, 2022</p>
                                            <p>9:00 AM – 12:00 PM PDT</p>
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
                                        <div style="line-height: 5px;">
                                            <p>Moved to Virtual Event</p>
                                            <p>Online</p>
                                            <p>San Francisco, CA 94013</p>
                                            <p>United States</p>
                                            <a target="_blank"
                                                href="https://g.page/phnom-penh-international-air-469?share"
                                                style="text-decoration: none;">View map</a>
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
                                        <div class="mapouter">
                                            <div class="gmap_canvas"><iframe class="gmap_iframe" height="100%"
                                                    width="100%" frameborder="0" scrolling="no" marginheight="0"
                                                    marginwidth="0"
                                                    src="https://maps.google.com/maps?width=600&amp;height=400&amp;hl=en&amp;q=Phnom Penh International Airport&amp;t=&amp;z=14&amp;ie=UTF8&amp;iwloc=B&amp;output=embed"></iframe><a
                                                    href="https://www.kokagames.com/fnf-friday-night-funkin-mods/">Friday
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
                                    <h2 style="margin: 0;" class="event_map_detail_text_h2">Tech Career Fair: Exclusive
                                        Tech Hiring Event
                                        <div style="color: #39364f; " class="small_text_at">at</div>
                                        <span>Moved to Virtual Event</span>
                                    </h2>
                                    <p
                                        style="margin: 0; padding-top: 4px; font-size: .875rem; line-height: 1.25rem; font-weight: 400;">
                                        Online, San Francisco, CA 94013
                                    </p>
                                </div>

                                <div class="icon_alignment_div">

                                    <ul class="transportation_icon_group">
                                        <li>
                                            <a target="_blank" href="https://g.page/phnom-penh-international-air-469?share" class="transportation_icon">
                                                <i class="fa-solid fa-car"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a target="_blank" href="https://g.page/phnom-penh-international-air-469?share" class="transportation_icon">
                                                <i class="fa-solid fa-person-walking"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a target="_blank" href="https://g.page/phnom-penh-international-air-469?share" class="transportation_icon">
                                                <i class="fa-solid fa-bus"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a target="_blank" href="https://g.page/phnom-penh-international-air-469?share" class="transportation_icon">
                                                <i class="fa-solid fa-bicycle"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>

                            </div>
                        </section>
                    </div>

                </div>

            </div>

        </div>

        <footer class="footer_detail_page">
        <?php
        include '/Applications/MAMP/htdocs/evenbrite 2/php/event-detail-footer.php';
     ?>

        </footer>

    </div>
    <div id="form">
        <div class="popUp">
            <div class="block">
                <div class="head">
                    <p>Free Career Success & Meditation Class - Phnom Penh</p>
                    <small>Tue, Jul 5, 2022 8:00 AM - 9:00 AM +07</small>
                    <select id="amount" size="1">
                        <option>1</option>
                        <option>2</option>
                    </select>
                    <h3 class="left">RSVP</h3>
                    <h4 class="left">Free</h4>
                    <h4 class="left">Sales end on Jul 5, 2022</h4>
                </div>
                <div class="img">
                    <img src="image1/1.png">
                </div>
                <div class="cross">
                    <svg id="cross-chunky_svg__eds-icon--cross-chunky_svg" x="0" y="0" viewBox="0 0 24 24" xml:space="preserve"
                        aria-hidden="true">
                        <path fill="grey" id="cross-chunky_svg__eds-icon--cross-chunky_base"
                            d="M13.4 12l3.5-3.5-1.4-1.4-3.5 3.5-3.5-3.5-1.4 1.4 3.5 3.5-3.5 3.5 1.4 1.4 3.5-3.5 3.5 3.5 1.4-1.4z">
                        </path>
                    </svg>
                </div>
                <div class="sale">
                    <hr size="1" color="lightgrey"><br><br>
                    <select id="country">
                        <option>Deutsch</option>
                        <option>Deutsch(CH)</option>
                        <option>English(CA)</option>
                        <option>English(DK)</option>
                        <option>English(FI)</option>
                        <option>English(UK)</option>
                        <option>English(US)</option>
                        <option>Espanol(AR)</option>
                        <option>Espanol(ES)</option>
                        <option>Espanol(MX)</option>
                        <option>Francais</option>
                        <option>Francais(CA)</option>
                        <option>Francais(CH)</option>
                        <option>Italiano</option>
                        <option>nederlands</option>
                        <option>Portugues</option>
                        <option>Portugues(BR)</option>
                        <option>Svenska</option>
                    </select>
                    <p class="left">Powered by eventbrite</p>
                </div>
                <div class="order-summary">
                    <div>
                        <h3 class="left">Order summary</h3>
                        <p class="left">1 x RSVP</p>
                        <h3 class="left">Total</h3>
                    </div>
                    <div>
                        <p class="left">0.00$</p>
                        <h3 class="left">0.00$</h3>
                    </div>
                </div>
                <!-- <a href="homepage2.html"> -->
                    <center>
                        <input type="submit" id="submit" value="Register">
                    </center>
                <!-- </a> -->
            </div>
        </div>
    </div>
    <script src="./script/homepage.js"></script>
    <script>
        $(Document).ready(function(){
            $("#form").hide();
            $("#button-register").click(function(){
                $("#form").show();
            })
            $(".cross").click(function(){
                $("#form").hide();
            })
        })
    </script>
</body>

</html>