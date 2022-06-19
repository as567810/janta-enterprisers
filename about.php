<!DOCTYPE html>
<html lang="en">
<?php include('include/head.php')?>
<body>
<?php include('include/header.php')?>

    <section class="banner-sec">
        <img class="desk" src="images/about-us.jpg" alt="" />
        <img class="mob" src="images/about-us-mob.jpg" alt="" />
        <div class="banner-content">
            <!-- <h2>PROVIDE QUALITY<br />REPAIR SERVICE</h2> -->
            <h2>ABOUT US</h2>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsam ad eum doloribus earum tempore.</p>
           
        </div>
    </section>

    <section class="about-sec">
        <div class="container">
            <div class="about-main">
                <h2>Welcome To <span>Janta Enterprices</span></h2>
                <h4>8+ Years Of Working Experience In Quality Repair Services</h4>
                <p>We believe everyone deserves a great service at a reasonable price. We won't waste your time nor let you be cheated by the market. Home appliances are an essential part of our lives. In this hectic world, we can't imagine life without them. They reduce a lot of our work and help us save energy.</p>
            </div>
        </div>
    </section>

    <section class="static-sec">
        <div class="container">
            <h2 class="head">Statistics</h2>
            <ul class="main">
                <li>
                    <i class="fa-solid fa-users"></i>
                    <h2><span class="counter">8 </span><b>+</b></h2>
                    <p>YEARS EXPERIENCE</p>
                </li>
                <li>
                    <i class="fa-solid fa-face-smile"></i>
                    <h2><span class="counter">800 </span><b>+</b></h2>
                    <p>HAPPY CUSTOMERS</p>
                </li>
                <li>
                    <i class="fa-solid fa-fan"></i>
                    <h2><span class="counter">99 </span><b>+</b></h2>
                    <p>DEVICES FIXED</p>
                </li>
                <li>
                    <i class="fa-solid fa-box"></i>
                    <h2><span class="counter">1500 </span><b>+</b></h2>
                    <p>CURRENT FIXINGS</p>
                </li>
            </ul>
        </div>
    </section>

    <section class="lower-sec">
        <div class="container">
              <div class="main-d">
                <div class="left">
                    <figure>
                        <img src="images/low.jpg" alt="">
                    </figure>
                </div>
                <div class="right">
                    <h2>Vision & Mission</h2>
                    <p>It was important to take care of home appliances daily. They needed to be serviced and used properly. The fraudsters then use your appliance as a money-making machine, charging you high bills. Even the parts they used to fix it were not original company parts. To increase their profit and create demand, they will delay your service.</p>
                    <p>We created this portal to solve this problem. It allows you to book all of your appliances repairs at one location and provides transparent pricing.</p>
                    <p>In Janta Enterprises, Our goal to give you peace of mind is to solve your home appliances problems that you encounter every day as quickly and cheaply as possible, so you can focus on the important things in your life.</p>
                    <p>We are experts in Home Appliance Repair.</p>
                </div>
              </div>  
        </div>
    </section>

    <?php include('include/footer.php')?>
    <script>
        $(document).ready(function(){
            $('.counter').counterUp({
                delay: 10,
                time: 1000
            });
        });
    </script>
</body>
</html>