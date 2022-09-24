<!DOCTYPE html>
<html lang="en">
<?php include('include/head.php') ;


head('Title'
    ,'description'
    ,'Keyword');
<body>
<?php include('include/header.php')?>

    <section class="banner-sec">
        <img class="desk" src="images/contact-us.jpg" alt="" />
        <img class="mob" src="images/contact-us-mob.jpg" alt="" />
        <div class="banner-content">
            <!-- <h2>PROVIDE QUALITY<br />REPAIR SERVICE</h2> -->
            <h2>CONTACT US</h2>
            <p>Leave us your details and we'll get back to you as soon as possible.</p>
           
        </div>
    </section>

    <section class="form-sec">
        <div class="container">
            <div class="main">
                <div class="lt">
                    <h2>Say Hello</h2>
                    <form action="">
                        <div class="inp">
                            <input type="text" class="name" val="" placeholder="Full Name" required />
                        </div>
                        <div class="inp">
                            <input type="text" class="phone" val="" placeholder="Phone" required />
                        </div>
                        <div class="inp">
                            <input type="email" class="email" val="" placeholder="Email" required />
                        </div>
                        <div class="inp">
                            <textarea name="" id="" cols="30" rows="10" placeholder="Enter your text"></textarea>
                        </div>
                        <button class="btn">Send</button>
                    </form>
                </div>
                <div class="rt">
                    <h2>Contact Us</h2>
                    <div class="detail">
                        <i class="fa-solid fa-house"></i>
                        <p> Main Road, Sector-32, Greater Noida, UP</p>
                    </div>
                    <div class="detail">
                        <i class="fa-solid fa-phone"></i>
                        <p><a href="tel:+919458474345 ">+91-9458474345 </a></p>
                    </div>
                    <div class="detail">
                        <i class="fa-solid fa-phone"></i>
                        <p><a href="tel:+918630964269  ">+91-8630964269  </a></p>
                    </div>
                    <div class="detail">
                        <i class="fa-solid fa-envelope"></i>
                        <p><a href="mailto:jantaairconditioner730@gmail.com">jantaairconditioner730@gmail.com</a></p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3503.3714517165586!2d77.35862551440613!3d28.58863139281874!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x390ce59e29faa0b9%3A0xa95ff842aa8ceba7!2sMain%20Rd%2C%20Block%20E%2C%20Sector%2053%2C%20Noida%2C%20Uttar%20Pradesh%20201301!5e0!3m2!1sen!2sin!4v1655044032829!5m2!1sen!2sin" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>

<?php include('include/footer.php')?>
</body>
</html>