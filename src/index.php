<?php
require('DBconnection.php')
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MiraAtelier - Photography Studio</title>
    
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/about.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">

</head>
<body>
    
<!-- header section starts  -->

<header class="header">

    <section class="flex">

        <a href="index.php" class="logo"> <i class="fas fa-camera"></i> Mira Atelier </a>

        <nav class="navbar">
            <a href="#home">home</a>
            <a href="#services">services</a>
            <a href="#about">about</a>
            <a href="#photos">photos</a>
            <a href="#book">book</a>
        </nav>

        <a href="login.php" class="btn">Login</a>


    </section>

</header>

<!-- header section ends -->

<!-- home section starts  -->

<div class="even-container">

    <section class="home" id="home">

        <div class="image">
            <img src="image/home-img.gif" alt="Mira Atelier">
        </div>
    
        <div class="content">
            <h3>Capture your moments with MiraAtelier</h3>
            <p>Welcome to MiraAtelier<br/>Our professional photographers bring your memories to life with artistic and high-quality photos.</p> 
            <a href="contact.php" class="btn"> contact us <span class="fas fa-chevron-right"></span> </a>
        </div>
    
    </section>

</div>

<!-- home section ends -->

<!-- icons section starts  -->

<section class="icons-container">

    <div class="icons">
        <i class="fas fa-camera-retro"></i>
        <h3>500+</h3>
        <p>Photoshoots Completed</p>
    </div>

    <div class="icons">
        <i class="fas fa-users"></i>
        <h3>1050+</h3>
        <p>Happy Clients</p>
    </div>

    <div class="icons">
        <i class="fas fa-image"></i>
        <h3>400+</h3>
        <p>Edited Photos</p>
    </div>

    <div class="icons">
        <i class="fas fa-award"></i>
        <h3>15+</h3>
        <p>Awards Won</p>
    </div>

</section>

<!-- icons section ends -->

<!-- services section starts  -->

<div class="even-container">

    <section class="services" id="services">

        <h1 class="heading"> our services</h1>
    
        <div class="box-container">
    
        <div class="box">
            <i class="fas fa-paint-brush"></i>
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
            <i class="fas fa-walking"></i>
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
            <img src="image/about-img.gif" alt="Mira Atelier is down :(">
        </div>

        <div class="content">
            <h3>MiraAtelier brings your memories to life</h3>
            <p>At MiraAtelier, we believe every moment is worth capturing. From portraits to events, we turn your memories into timeless works of art with creativity and passion.</p>
            <p>Our experienced team is dedicated to making your photography session comfortable, fun, and unforgettable. Let us help you tell your story through our lens.</p>
            <a href="html/about.html" class="btn"> learn more <span class="fas fa-chevron-right"></span> </a>

        </div>

    </div>

</section>

<!-- about section ends -->

<!-- stuff section starts  -->

<div class="even-container">

    <section class="stuff" id="team">

        <h1 class="heading">Mira Atelier Stuff</h1>
    
        <div class="box-container">
    
            <div class="box">
                <img src="image/manager1.jpg" alt="">
                <h3>Mitra Rezaei</h3>
                <span>Manager</span>
                <div class="share">
                    <a href="https://www.facebook.com/" class="fab fa-facebook-f" target="_blank"aria-label="Facebook"></a>
                    <a href="https://twitter.com/" class="fab fa-twitter" target="_blank" aria-label="Twitter"></a>
                    <a href="https://www.instagram.com/" class="fab fa-instagram" target="_blank" aria-label="Instagram"></a>
                    <a href="https://www.linkedin.com/" class="fab fa-linkedin" target="_blank" aria-label="LinkedIn"></a>
                </div>
            </div>
    
            <div class="box">
                <img src="image/photographer1.jpg" alt="">
                <h3>Mobina Mirbozorg</h3>
                <span>Photographer</span>
                <div class="share">
                    <a href="https://www.facebook.com/" class="fab fa-facebook-f" target="_blank" aria-label="Facebook"></a>
                    <a href="https://twitter.com/" class="fab fa-twitter" target="_blank" aria-label="Twitter"></a>
                    <a href="https://www.instagram.com/" class="fab fa-instagram" target="_blank" aria-label="Instagram"></a>
                    <a href="https://www.linkedin.com/" class="fab fa-linkedin" target="_blank" aria-label="LinkedIn"></a>
                </div>
            </div>
    
            <div class="box">
                <img src="image/hairstylist1.jpg" alt="">
                <h3>Shayan Akbari</h3>
                <span>Hair stylist</span>
                <div class="share">
                    <a href="https://www.facebook.com/" class="fab fa-facebook-f" target="_blank" aria-label="Facebook"></a>
                    <a href="https://twitter.com/" class="fab fa-twitter" target="_blank" aria-label="Twitter"></a>
                    <a href="https://www.instagram.com/" class="fab fa-instagram" target="_blank" aria-label="Instagram"></a>
                    <a href="https://www.linkedin.com/" class="fab fa-linkedin" target="_blank" aria-label="LinkedIn"></a>
                </div>
            </div>
    
            <div class="box">
                <img src="image/makeupartist1.jpg" alt="">
                <h3>Luna Rezaei</h3>
                <span>Makeup Artist</span>
                <div class="share">
                    <a href="https://www.facebook.com/" class="fab fa-facebook-f" target="_blank" aria-label="Facebook"></a>
                    <a href="https://twitter.com/" class="fab fa-twitter" target="_blank" aria-label="Twitter"></a>
                    <a href="https://www.instagram.com/" class="fab fa-instagram" target="_blank" aria-label="Instagram"></a>
                    <a href="https://www.linkedin.com/" class="fab fa-linkedin" target="_blank" aria-label="LinkedIn"></a>
                </div>
            </div>
    
            <div class="box">
                <img src="image/director1.jpg" alt="">
                <h3>Kati Vosough</h3>
                <span>Executive Director</span>
                <div class="share">
                    <a href="https://www.facebook.com/" class="fab fa-facebook-f" target="_blank" aria-label="Facebook"></a>
                    <a href="https://twitter.com/" class="fab fa-twitter" target="_blank" aria-label="Twitter"></a>
                    <a href="https://www.instagram.com/" class="fab fa-instagram" target="_blank" aria-label="Instagram"></a>
                    <a href="https://www.linkedin.com/" class="fab fa-linkedin" target="_blank" aria-label="LinkedIn"></a>
                </div>
            </div>
    
            <div class="box">
                <img src="image/secretary1.jpg" alt="">
                <h3>Kim Johns</h3>
                <span>Secretary</span>
                <div class="share">
                    <a href="https://www.facebook.com/" class="fab fa-facebook-f" target="_blank" maria-label="Facebook"></a>
                    <a href="https://twitter.com/" class="fab fa-twitter" target="_blank" aria-label="Twitter"></a>
                    <a href="https://www.instagram.com/" class="fab fa-instagram" target="_blank"aria-label="Instagram"></a>
                    <a href="https://www.linkedin.com/" class="fab fa-linkedin" target="_blank" aria-label="LinkedIn"></a>
                </div>
            </div>
    
        </div>
    
    </section>

</div>

<!-- stuff section ends -->


<!-- booking section starts   -->

<section class="book" id="book">

    <h1 class="heading"> book now </h1>    

    <div class="row">

        <div class="image">
            <img src="image/book-img.gif" alt="">
        </div>

        <form action="login.php" method="GET">
            <h3>Book Appointment</h3>
            <input type="text" name="name" placeholder="Your Name" class="box" required>
            <input type="number" name="phone" placeholder="Your Number" class="box" required>
            <input type="email" name="email" placeholder="Your Email" class="box" required>
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
                <a href="#photographers"> <i class="fas fa-chevron-right"></i>stuff</a>
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
                 <a href="https://www.facebook.com/mitra.rezaei" target="_blank"> <i class="fab fa-facebook-f"></i> facebook </a>
                 <a href="https://twitter.com" target="_blank"> <i class="fab fa-twitter"></i> twitter </a>
                 <a href="https://www.instagram.com/darlamiira/" target="_blank"> <i class="fab fa-instagram"></i> instagram </a>
                 <a href="https://www.linkedin.com/in/mitra.rezaei" target="_blank"> <i class="fab fa-linkedin"></i> linkedin </a>
            </div>

        </div>
    
        <div class="credit"> created by <span>Mitra Rezaei</span> | student of the University of Messina </div>
    
    </section>

</div>

<!-- footer section ends -->

<script src="js/script.js"></script>

</body>
</html>