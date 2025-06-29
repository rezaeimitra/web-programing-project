<?php

session_start();

if (!isset($_SESSION['user_id'])) {
    header("Location: login.php");
    exit();
}

require('DBconnection.php');

// Fetch user-specific data if needed
$user_id = $_SESSION['user_id'];
$email = $_SESSION['email'];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>complete responsive atelier website design </title>

    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

    <!-- custom css file link  -->
    <link rel="stylesheet" href="css/style.css">

</head>
<body>
    
<!-- header section starts  -->

<header class="header">

    <section class="flex">

        <a href="index.php" class="logo"> <i class="fas fa-Camera-retro"></i> MiraAtelier </a>


        <nav class="navbar">
            <a href="profile.php">profile</a>
            <a href="#home">home</a>
            <a href="#services">services</a>
            <a href="#about">about</a>
            <a href="#doctors">Gallery</a>
            <a href="#book">book</a>
        </nav>

        <a href="logout.php" class="btn">logout</a>

        <div id="menu-btn" class="fas fa-bars"></div>


    </section>

</header>

<!-- header section ends -->

<!-- home section starts  -->

<div class="even-container">

    <section class="home" id="home">

        <div class="image">
            <img src="image/home-img.gif" alt="Atelier Home Image">
        </div>
    
        <div class="content">
        <h3>Capture Your Moments with MiraAtelier</h3>
            <p>Welcome to MiraAtelier<br/>We specialize in professional photography, cinematic videography, and creative editing. 
            Let us turn your special moments into timeless memories</p>
            <a href="contact.php" class="btn"> contact us <span class="fas fa-chevron-right"></span> </a>
        </div>
    
    </section>

</div>

<!-- home section ends -->

<!-- icons section starts  -->

<section class="icons-container">

    <div class="icons">
        <i class="fas fa-camera-retro"></i>
        <h3>120+</h3>
        <p>photoshoot sessions/p>
    </div>

    <div class="icons">
        <i class="fas fa-users"></i>
        <h3>1050+</h3>
        <p>happy clients</p>
    </div>

    <div class="icons">
        <i class="fas fa-film"></i>
        <h3>400+</h3>
        <p>video projects</p>
    </div>

    <div class="icons">
        <i class="fas fa-magazine"></i>
        <h3>20+</h3>
        <p>personal fashion magazine</p>
    </div>

</section>

<!-- icons section ends -->


<!-- services section starts  -->

<div class="even-container">

    <section class="services" id="services">

        <h1 class="heading"> our services</h1>
    
        <div class="box-container">
    
        <div class="box">
            <i class="fas fa-pint-brush"></i>
            <h3>Makeup Artist</h3>
            <p>Professional makeup for photo shoots by expert artists</p>
            <a href="html/services.html?service=makeup" class="btn"> learn more <span class="fas fa-chevron-right"></span> </a>
        </div>

        <div class="box">
             <i class="fas fa-cut"></i>
             <h3>Hair Styling</h3>
             <p>Desired hair styling for your shooting sassions by top hair stylists.</p>
             <a href="html/services.html?service=styling" class="btn"> learn more <span class="fas fa-chevron-right"></span> </a>
       </div>
       <div class="box">
       <i class="fas fa-user-tag"></i>
            <h3>Fashion Styling</h3>
            <p>Exclusive outfit design for themed photography concepts, from vintage to modern looks.</p>
            <a href="html/services.html?service=styling" class="btn"> learn more <span class="fas fa-chevron-right"></span> </a>
        </div>

        <div class="box">
            <i class="fas fa-camera-retro"></i>
            <h3>Photography Services</h3>
            <p>Wide range of photography options including portrait, event, product, and editorial.</p>
            <a href="html/services.html?service=photography" class="btn"> learn more <span class="fas fa-chevron-right"></span> </a>
        </div>

        <div class="box">
            <i class="fas fa-High-heels"></i>
            <h3>Modeling Courses</h3>
            <p>Step-by-step training in posing, runway, and camera confidence for aspiring models.</p>
            <a href="html/services.html?service=modeling" class="btn"> learn more <span class="fas fa-chevron-right"></span> </a>
        </div>

        <div class="box">
            <i class="fas fa-film"></i>
            <h3>Product Promo Videos</h3>
            <p>Creative and professional promotional videos tailored to boost your brand presence.</p>
            <a href="html/services.html?service=promovideo" class="btn"> learn more <span class="fas fa-chevron-right"></span> </a>
        </div>
        
        </div>
    
    </section>

</div>

<!-- services section ends -->

<!-- about section starts  -->

<section class="about" id="about">

    <h1 class="heading"> about us </h1>

    <div class="row">

        <div class="image">
            <img src="image/about-img.gif" alt="Creative Studio">
        </div>

        <div class="content">
            <h3>Unleash Your Beauty & Vision with Mira atalier</h3>
            <p>At Mira atalier, we believe every person is a canvas of beauty and creativity. From professional makeup and hairstyling to fashion styling and photography, we turn your vision into stunning reality.</p>
            <p>Whether you're preparing for a photo shoot, a branding campaign, or personal transformation, our expert team is here to guide and empower you every step of the way.</p>
            <a href="html/about.html?service=studio" class="btn"> learn more <span class="fas fa-chevron-right"></span> </a>

        </div>

    </div>

</section>

<!-- about section ends -->

<!-- stuff section starts  -->

<div class="even-container">

    <section class="stuff" id="team">

        <h1 class="heading">Meet Our Team</h1>
    
        <div class="box-container">
    
            <div class="box">
                <img src="image/manager1.jpg" alt="">
                <h3>Mitra Rezaei</h3>
                <span>Manager</span>
                <div class="share">
                    <a href="https://www.facebook.com/" class="fab fa-facebook-f" target="_blank" mira-label="Facebook"></a>
                    <a href="https://twitter.com/" class="fab fa-twitter" target="_blank" mira-label="Twitter"></a>
                    <a href="https://www.instagram.com/" class="fab fa-instagram" target="_blank" mira-label="Instagram"></a>
                    <a href="https://www.linkedin.com/" class="fab fa-linkedin" target="_blank" mira-label="LinkedIn"></a>
                </div>
            </div>
    
            <div class="box">
                <img src="image/photographer1.jpg" alt="">
                <h3>Mobina Mirbozorg</h3>
                <span>Photographer</span>
                <div class="share">
                    <a href="https://www.facebook.com/" class="fab fa-facebook-f" target="_blank" mira-label="Facebook"></a>
                    <a href="https://twitter.com/" class="fab fa-twitter" target="_blank" mira-label="Twitter"></a>
                    <a href="https://www.instagram.com/" class="fab fa-instagram" target="_blank" mira-label="Instagram"></a>
                    <a href="https://www.linkedin.com/" class="fab fa-linkedin" target="_blank" mira-label="LinkedIn"></a>
                </div>
            </div>
    
            <div class="box">
                <img src="image/hairstylist1.jpg" alt="">
                <h3>Shayan Akbari</h3>
                <span>Hair stylist</span>
                <div class="share">
                    <a href="https://www.facebook.com/" class="fab fa-facebook-f" target="_blank" mira-label="Facebook"></a>
                    <a href="https://twitter.com/" class="fab fa-twitter" target="_blank" mira-label="Twitter"></a>
                    <a href="https://www.instagram.com/" class="fab fa-instagram" target="_blank" mira-label="Instagram"></a>
                    <a href="https://www.linkedin.com/" class="fab fa-linkedin" target="_blank" mira-label="LinkedIn"></a>
                </div>
            </div>
    
            <div class="box">
                <img src="image/makeupartist1.jpg" alt="">
                <h3>Luna Rezaei</h3>
                <span>Makeup Artist</span>
                <div class="share">
                    <a href="https://www.facebook.com/" class="fab fa-facebook-f" target="_blank" mira-label="Facebook"></a>
                    <a href="https://twitter.com/" class="fab fa-twitter" target="_blank" mira-label="Twitter"></a>
                    <a href="https://www.instagram.com/" class="fab fa-instagram" target="_blank" mira-label="Instagram"></a>
                    <a href="https://www.linkedin.com/" class="fab fa-linkedin" target="_blank" mira-label="LinkedIn"></a>
                </div>
            </div>
    
            <div class="box">
                <img src="image/director1.jpg" alt="">
                <h3>Kati Vosough</h3>
                <span>Executive Director</span>
                <div class="share">
                    <a href="https://www.facebook.com/" class="fab fa-facebook-f" target="_blank" mira-label="Facebook"></a>
                    <a href="https://twitter.com/" class="fab fa-twitter" target="_blank" mira-label="Twitter"></a>
                    <a href="https://www.instagram.com/" class="fab fa-instagram" target="_blank" mira-label="Instagram"></a>
                    <a href="https://www.linkedin.com/" class="fab fa-linkedin" target="_blank" mira-label="LinkedIn"></a>
                </div>
            </div>
    
            <div class="box">
                <img src="image/secretary1.jpg" alt="">
                <h3>Kim Johns</h3>
                <span>Secretary</span>
                <div class="share">
                    <a href="https://www.facebook.com/" class="fab fa-facebook-f" target="_blank" mira-label="Facebook"></a>
                    <a href="https://twitter.com/" class="fab fa-twitter" target="_blank" mira-label="Twitter"></a>
                    <a href="https://www.instagram.com/" class="fab fa-instagram" target="_blank" mira-label="Instagram"></a>
                    <a href="https://www.linkedin.com/" class="fab fa-linkedin" target="_blank" mira-label="LinkedIn"></a>
                </div>
            </div>
    
        </div>
    
    </section>

</div>

<!-- stuff section ends -->


<!-- booking section starts   -->

<section class="book" id="book">
    <h1 class="heading"> <span>book</span> now </h1>

    <div class="row">

        <div class="image">
            <img src="image/book-img.gif" alt="">
        </div>

        <form action="book_appointment.php" method="POST">
            <h3>Book Appointment</h3>
            <input type="text" name="name" placeholder="Your Name" class="box" required>
            <input type="number" name="phone" placeholder="Your Number" class="box" required>
            <input type="email" name="email" value="<?php echo $_SESSION['email']; ?>" class="box" readonly>
            <input type="date" name="appointment_date" class="box" required>
            <input type="time" name="appointment_time" class="box">
            <textarea name="message" placeholder="Message (Optional)" class="box"></textarea>
            <input type="submit" value="Book Now" class="btn">
        </form>

    </div>
</section>


<!-- booking section ends -->


<!-- footer section starts  -->

<div class="even-container">

    <section class="footer">

        <div class="box-container">
    
            <div class="box">
                <h3>quick links</h3>
                <a href="#home"> <i class="fas fa-chevron-right"></i> home </a>
                <a href="#services"> <i class="fas fa-chevron-right"></i> services </a>
                <a href="#about"> <i class="fas fa-chevron-right"></i> about </a>
                <a href="#stuff"> <i class="fas fa-chevron-right"></i>stuff</a>
                <a href="#book"> <i class="fas fa-chevron-right"></i> book </a>
            </div>
    
            <div class="box">
                 <h3>our services</h3>
                 <a href="html/services.html?service=makeup"> <i class="fas fa-chevron-right"></i>Professional makeup</a>
                 <a href="html/services.html?service=styling"> <i class="fas fa-chevron-right"></i> Hair Styling </a>
                 <a href="html/services.html?service=fashion"> <i class="fas fa-chevron-right"></i> Fashion Styling </a>
                 <a href="html/services.html?service=photography"> <i class="fas fa-chevron-right"></i> Photography Services </a>
                 <a href="html/services.html?service=runway"> <i class="fas fa-chevron-right"></i>Modeling Courses</a>
                 <a href="html/services.html?service=promovideo"> <i class="fas fa-chevron-right"></i>Product Promo Videos</a>
           </div>

    
           <div class="box">
                <h3>contact info</h3>
                <a href="tel:+393277417479"> <i class="fas fa-phone"></i> +39 327 741 7479 </a>
                <a href="mailto:rzemtr01r51z224l@studenti.unime.it"> <i class="fas fa-envelope"></i> rzemtr01r51z224l@studenti.unime.it </a>
                <a href="mailto:mitra.rezaei0808@gmail.com"> <i class="fas fa-envelope"></i> mitra.rezaei0808@gmail.com </a>
                <a href="https://www.google.com/maps/search/?api=1&query=Messina,+Italy+98122" target="_blank"> 
                    <i class="fas fa-map-marker-alt"></i> Messina, Italy - 98122 
                </a>
            </div>

    
            <div class="box">
                 <h3>follow us</h3>
                 <a href="https://www.facebook.com/arya.khosravi.3158" target="_blank"> <i class="fab fa-facebook-f"></i> facebook </a>
                 <a href="https://twitter.com" target="_blank"> <i class="fab fa-twitter"></i> twitter </a>
                 <a href="https://www.instagram.com/__itsarya/" target="_blank"> <i class="fab fa-instagram"></i> instagram </a>
                 <a href="https://www.linkedin.com/in/arya-khosravi" target="_blank"> <i class="fab fa-linkedin"></i> linkedin </a>
            </div>

        </div>
    
        <div class="credit"> created by <span>Mitra Rezaei</span> | student of the University of Messina </div>
    
    </section>

</div>

<!-- footer section ends -->

<!-- custom js file link  -->
<script src="js/script.js"></script>

</body>
</html>