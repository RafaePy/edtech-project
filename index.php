<!DOCTYPE html>
<?php
session_start();
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="styles/style.css">
    <link rel="icon" type="image/x-icon" href="img/logo.png.webp">
    <title>WebUni</title>
</head>
<body style="background-image: url('img/photo.jpg');
    background-repeat: no-repeat;
    background-attachment: fixed;
    background-size: 100% 100%;">

<!-------------------------------------HEADER----------------------------------------->
<!----------------------------------HEADER PART 1--------------------------------------->
<div class="toppart">
    <div class="part1">
        <table>
            <tr>
                <th>
                <img src="img/logo.png.webp" alt="logo.png"></th>
                <th>
                <a href="#default">Home</a></th>
                <th>
                <a href="#default">About US</a></th>
                <th>
                <a href="#default">Courses</a></th>
                <th>
                <a href="#default">News</a></th>
                <th>
                <a href="#default">Contact</a></th>
                <th>
                <?php
                if (!isset($_SESSION['logged'])) {
                    echo '<button type="button" onclick="location.href=\'login.html\'" title="google" style="cursor: pointer;">Login</button>';
                } else {
                    echo '<img src="img/account_icon.svg" alt="account" id="acc-icon">';
                }
                ?>
                </th>
            </tr>
        </table>
    </div>
</div>
<!----------------------------------HEADER PART 2---------------------------------------->
<div class="text">
    <div class="part2">
        <p id="p1">Get The Best Free Online Courses</p>
        <center><p id="p2">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. <br>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p></center>
    </div>
</div>
<!----------------------------------HEADER PART 3---------------------------------------->
<div class="bottompart">
    <form class="part3" id="nws-form" onsubmit="">
        <input type="text" id="t1" placeholder="Name" name="name" pattern="[a-zA-Z ]{3,}" required>
        <span>
            <input type="email" id="e1" name="email" placeholder="E-mail" pattern="[^\s]+@[^\s]+\.[^\s]+" required><br>
            <span style="color:white;" id="resTxt"></span>
        </span>
        <button type="submit" style="display:block;margin: 0 auto;">Subscribe</button>
    </form>
</div>
<!---------------------------------------MIDDLE---------------------------------------->
<div class="TOPPART">
    <div class="PART1">
        <center><h1 style="color: aliceblue;">Our Course Categories</h1></center><hr style="width: 60%;">
        <br>
        <center><p style="color: aliceblue;">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec malesuada lorem maximus mauris scelerisque, at rutrum nulla dictum.<br> Ut ac ligula sapien. Suspendisse cursus faucibus finibus.</p></center>
    </div>
</div>  
<br>
<!------------------------------------MIDDLE PART 1----------------------------------->
<!-----------------------------------COURSES CATEGORY--------------------------------->
<div class="MIDDLEPART">
    <div class="PART2">
        <img src="img/image1.webp" alt="image1" height="170" width="340">
            <div class="box1">
                <p id="p3">IT Development<br><br>Lorem ipsum dolor sit amet, consectetur<br><br>120 Courses</p>
            </div>
        </div>    
    <div class="PART3">
        <img src="img/image2.png" alt="image1" height="170" width="340">
            <div class="box2">
                <p id="p3">Web Design<br><br>Lorem ipsum dolor sit amet, consectetur<br><br>70 Courses</p>
            </div>
    </div>  
    <div class="PART4">
        <img src="img/image3.jpg" alt="image1" height="170" width="340">
            <div class="box3">
                <p id="p3">Illustration & Drawing<br><br>Lorem ipsum dolor sit amet, consectetur<br><br>55 Courses</p>
            </div>
    </div>  
    <div class="PART5">
        <img src="img/image4.png" alt="image1" height="170" width="340">
            <div class="box4">
                <p id="p3">Social Media<br><br>Lorem ipsum dolor sit amet, consectetur<br><br>40 Courses</p>
            </div>
    </div>  
    <div class="PART6">
        <img src="img/image5.jpg" alt="image1" height="170" width="340">
            <div class="box5">
                <p id="p3">PhotoShop<br><br>Lorem ipsum dolor sit amet, consectetur<br><br>220 Courses</p>
            </div>
    </div>  
    <div class="PART7">
        <img src="img/image6.jpg" alt="image1" height="170" width="340">
            <div class="box6">
                <p id="p3">Cryptocurrencies<br><br>Lorem ipsum dolor sit amet, consectetur<br><br>25 Courses</p>
            </div>
    </div> 
</div>
<br>
<br>
<br>
<br>
<br>
<br>
<!----------------------------------MIDDLE PART 2----------------------------------->
<!---------------------------------SEARCH COURSE------------------------------------>
<div class="course">
    <center><h2 style="color: aliceblue;">Search your Course</h2></center>
    <div class="BOX">
        <input type="text" placeholder="Course" id="c1">
        <input type="text" placeholder="Category" id="c2">
        <button type="button" onclick="redirect()" title="google" style="cursor: pointer;">Search Course</button>
    </div>
</div>
<!---------------------------------MIDDLE PART 3------------------------------------->
<!-------------------------------FEATURED COURSES------------------------------------>
<div class="TEXT">
    <center><h2>Featured Courses</h2></center><hr style="width: 60%;">
    <center><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec malesuada lorem maximus mauris scelerisque, at rutrum nulla dictum. Ut ac ligula sapien.<br>Suspendisse cursus faucibus finibus.</p></center>
</div>
<br>
<br>
<br>
<div class="type">
    <a href="#default">All</a>
    <a href="#default">Finance</a>
    <a href="#default">Design</a>
    <a href="#default">Web Development</a>
    <a href="#default">Photography</a>  
</div>
<div class="PART8">
    <img src="img/image6.jpg" alt="image1" height="170" width="340">
        <div class="box7">
            <p id="p4">Art & Crafts<br><br>Lorem ipsum dolor sit amet, consectetur<br><br>120 Students</p>
        </div>
</div> 
<div class="PART9">
    <img src="img/image6.jpg" alt="image1" height="170" width="340">
        <div class="box8">
            <p id="p4">IT Development<br><br>Lorem ipsum dolor sit amet, consectetur<br><br>120 Students</p>
        </div>
</div> 
<div class="PART10">
    <img src="img/image6.jpg" alt="image1" height="170" width="340">
        <div class="box9">
            <p id="p4">Graphic Design<br><br>Lorem ipsum dolor sit amet, consectetur<br><br>120 Students</p>
        </div>
</div> 
<div class="PART11">
    <img src="img/image6.jpg" alt="image1" height="170" width="340">
        <div class="box10">
            <p id="p4">Python Developer<br><br>Lorem ipsum dolor sit amet, consectetur<br><br>120 Students</p>
        </div>
</div> 
<div class="PART12">
    <img src="img/image6.jpg" alt="image1" height="170" width="340">
        <div class="box11">
            <p id="p4">Java Developer<br><br>Lorem ipsum dolor sit amet, consectetur<br><br>120 Students</p>
        </div>
</div> 
<div class="PART13">
    <img src="img/image6.jpg" alt="image1" height="170" width="340">
        <div class="box12">
            <p id="p4">Cyber Security<br><br>Lorem ipsum dolor sit amet, consectetur<br><br>120 Students</p>
        </div>
</div> 
<div class="PART14">
    <img src="img/image6.jpg" alt="image1" height="170" width="340">
        <div class="box13">
            <p id="p4">Ethical Hacking<br><br>Lorem ipsum dolor sit amet, consectetur<br><br>120 Students</p>
        </div>
</div> 
<div class="PART15">
    <img src="img/image6.jpg" alt="image1" height="170" width="340">
        <div class="box14">
            <p id="p4">Artifical Intelligence<br><br>Lorem ipsum dolor sit amet, consectetur<br><br>120 Students</p>
        </div>
</div> 
<!------------------------------------MIDDLE PART4--------------------------------->
<div class="community">
    <center><h2>Join Our Community Now!</h2></center><hr style="width: 80%">
    <center><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec malesuada lorem maximus mauris scelerisque, at rutrum nulla dictum.<br>Ut ac ligula sapien. Suspendisse cursus faucibus finibus.</p></center>
    <br>
    <br>
    <center><button type="button" onclick="redirect()" title="google" style="cursor: pointer;">Register Now</button></center>
<br>
<br>
<br>
<hr style="color: white; width: 170%;">
</div>
<br>
<br>
<br>
<br>
<!--------------------------------------FOOTER--------------------------------------->
<div class="footer">
    <div>Contact Info</div>
    <p id="p5">1481 Creekside Lane
        Avila Beach, CA 931</p>
    <p id="p6">+1 23 456 7890</p>
    <p id="p7">mymail@gmail.com</p>

    <div>Engineering</div>
    <p id="p8">Applied Studies</p>
    <p id="p9">Computer Engeneering</p>
    <p id="p10">Software Engeneering</p>
    <p id="p11">Informational Engeneering</p>
    <p id="p12">System Engeneering</p>

   <div>Graphic Design</div>
    <p id="p13">Applied Studies</p>
    <p id="p14">Computer Engeneering</p>
    <p id="p15">Software Engeneering</p>
    <p id="p16">Informational Engeneering</p>
    <p id="p17">System Engeneering</p>

 <div>Development</div>
    <p id="p18">Applied Studies</p>
    <p id="p19">Computer Engeneering</p>
    <p id="p20">Software Engeneering</p>
    <p id="p21">Informational Engeneering</p>
    <p id="p22">System Engeneering</p>

<div>News Letter</div>
    <div class="news">
        <input type="text" placeholder="E-mail" id="e2">
        <br>
        <br>
        <button type="button" onclick="redirect()" title="google" style="cursor: pointer;">Subscribe</button>
    </div>
</div>
<p id="last">Terms & Conditions Register Privacy<br>Copyright ©2023 All rights reserved</p>

<script>
    function register(form) {
        var data = new FormData(form)
        // Create a query string to send using POST
        var query = ""
        for (var record of data.entries()) {
            query += `${record[0]}=${record[1]}&`
        }
        var query = query.substr(0, query.length - 1)   // Remove the last &

        // AJAX
        var xhttp = new XMLHttpRequest()
        xhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                document.getElementById('resTxt').innerHTML = this.responseText
                form.reset()
            }
        }
        xhttp.open('POST', 'scripts/newsletter.php', true)
        xhttp.setRequestHeader('Content-type', 'application/x-www-form-urlencoded')
        xhttp.send(query)
    }

    document.getElementById('nws-form').addEventListener('submit', function (event) {
            event.preventDefault()
            register(event.target)
        })
</script>
</body>
</html>