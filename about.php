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
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. A magni laboriosam, excepturi voluptates aliquid deserunt perferendis ratione explicabo repudiandae id. Laboriosam unde saepe ut recusandae ex libero doloribus provident voluptatum.</p>
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
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusantium necessitatibus labore ea provident natus excepturi. Quas deserunt exercitationem iste est? Commodi ex optio reiciendis exercitationem doloremque dolor dolorem nisi! Quo! Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusantium necessitatibus labore ea provident natus excepturi. Quas deserunt exercitationem iste est? Commodi ex optio reiciendis exercitationem doloremque dolor dolorem nisi! Quo!<br></br>Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusantium necessitatibus labore ea provident natus excepturi. Quas deserunt exercitationem iste est? Commodi ex optio reiciendis exercitationem doloremque dolor dolorem nisi! Quo!Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusantium necessitatibus labore ea provident natus excepturi. Quas deserunt exercitationem iste est? Commodi ex optio reiciendis exercitationem doloremque dolor dolorem nisi! Quo! Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusantium necessitatibus labore ea provident natus excepturi. Quas deserunt exercitationem iste est? Commodi ex optio reiciendis exercitationem doloremque dolor dolorem nisi! Quo!</p>
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