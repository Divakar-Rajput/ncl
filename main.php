<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>Cricket Website </title>
  <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Indian Cricket League</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&display=swap">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/remixicon/4.2.0/remixicon.min.css">
    <link rel="stylesheet" href="style.css">
</head><link rel="stylesheet" href="./style.css">

</head>
<body>
     <?php include 'header.php'; ?>
    <main>
        <section id="page1">
            <h1>Welcome to the Indian Cricket League</h1>
            <h2>Join Us for a Thrilling Cricket Experience</h2>
            <p>We offer a friendly yet competitive environment where players can enhance their skills and enjoy the game.</p>
            <div id="arrow">
                <i class="ri-arrow-down-line"></i>
                <div id="cursor"></div>
                <div id="cursor-blur"></div>
            </div>
        </section>

        <section id="page2">
            <div id="details">
                <div class="detail-item" id="about">
                    <h3>About the League</h3>
                    <p>The Indian Cricket League (NCL) is dedicated to fostering a love for cricket among players of all ages and skill levels in New York. Our league provides a welcoming and inclusive environment, offering opportunities for players to develop their skills, participate in exciting matches, and connect with fellow cricket enthusiasts. Whether you’re a seasoned player or a newcomer to the sport, NYRCL is the place to be!</p>
                </div>
                <div class="detail-item" id="join">
                    <h3>How to Join</h3>
                    <p>To join our league, simply fill out the registration form available on our website or contact us at <a href="mailto:join@nyrcl.com">join@nyrcl.com</a>. We welcome players of all skill levels and are excited to have you on board!</p>
                </div>
                <div class="detail-item" id="fees">
                    <h3>League Fees</h3>
                    <p>The registration fee for the league is $150 per player, covering the entire season, including uniforms, equipment rental, and insurance.</p>
                </div>
                <div class="detail-item" id="location">
                    <h3>Location of Games</h3>
                    <p>Our games are played at Central Park Cricket Fields, conveniently located at the north end of Central Park. Public transportation options are available for easy access.</p>
                </div>
                <div class="detail-item" id="schedule">
                    <h3>Season Schedule</h3>
                    <ul>
                        <li>Opening Day: April 15th</li>
                        <li>Mid-Season Tournament: July 8th-9th</li>
                        <li>Season Finals: September 20th</li>
                        <li>Closing Ceremony: September 30th</li>
                    </ul>
                </div>
            </div>
        </section>
    </main>
    <?php include 'footer.php'; ?>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/gsap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/ScrollTrigger.min.js"></script>
    <script src="script.js"></script>
<!-- partial -->
  <script  src="./script.js"></script>

</body>
</html>
