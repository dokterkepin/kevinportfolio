<?php
$conn = mysqli_connect("localhost", "root", "", "phpdasar");

if(isset($_POST["send"])){
    $name = mysqli_real_escape_string($conn, $_POST["name"]);
    $email = mysqli_real_escape_string($conn, $_POST["email"]);
    $number = mysqli_real_escape_string($conn, $_POST["number"]);
    $msg = mysqli_real_escape_string($conn, $_POST["message"]);

    $select_message = mysqli_query($conn, "SELECT * FROM contact_form WHERE name = '$name' AND email = '$email' AND number = '$number' AND message = '$msg'") or die("query failed");

    if(mysqli_num_rows($select_message) > 0 ){
        $message[] = "message sent already";
    }else{
        mysqli_query($conn, "INSERT INTO contact_form (name, email, number, message) VALUES ('$name', '$email', '$number', '$msg')") or die("query failed");
        $message[] = "message sent success";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kevin Chang</title>

    <!-- Style -->
    <link rel="icon" href="icon.png" sizes="any">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css">
</head>
<body>
    <?php
    if(isset($message)){
        foreach($message as $message){
            echo '    
            <div class="message" data-aos="zoom-out">
                <span>'. $message .'</span>
                <i class="fas fa-times" onclick="this.parentElement.remove();"></i>
            </div>';
        };
    };
    ?>
    <!-- Header Start -->
    <header class="header">
        <div id="menu" class="fa fa-bars"></div>
        <a href="#home" class="logo">Portfolio</a>

        <nav class="navbar">
            <a href="#home" class="active">Home</a>
            <a href="#about" class="">About</a>
            <a href="#service" class="">Service</a>
            <a href="#portfolio" class="">Portfolio</a>
            <a href="#contact" class="">Contact</a>
        </nav>

        <div class="media">
            <a href="" class="fab fa-facebook"></a>
            <a href="" class="fab fa-twitter"></a>
            <a href="" class="fab fa-instagram"></a>
            <a href="" class="fab fa-github"></a>
        </div>
    </header>
    <!-- Header End -->

    <!-- Home Start -->
        <section id="home" class="home">
            <div class="image" data-aos="fade-right">
                <img src="kevin.jpg" alt="">
            </div>

            <div class="content">
                <h3 data-aos="fade-up">Hi, I am Kevin</h3>
                <span data-aos="fade-up">Web Designer & Web Developer</span>
                <p data-aos="fade-up">You have ideas, I have the creativity to realize it. Together we will create the art that will express our heart, soul and mind, so that everyone can enjoy it</p>
                <a href="" class="button" data-aos="fade-up">About Me</a>
            </div>
        </section>
    <!-- Home End -->

    <!-- About Start -->
    <section class="about" id="about">
        <h1 class="heading">Biography</h1>
        <div class="biography">
            <p data-aos="fade-up">I'am the person who love's a lot with computer stuffs especially programming. in my daily activity i do practice on my computer skill about 4 hours in everyday day. I become a very excited when discussing programming topics</p>
            <div class="bio">
                <h3 data-aos="zoom-in"><span>name :</span> Kevin</h3>
                <h3 data-aos="zoom-in"><span>Age :</span> 20</h3>
                <h3 data-aos="zoom-in"><span>Major :</span> Artificial Intelligence</h3>
                <h3 data-aos="zoom-in"><span>Hobby :</span>Music, Study, Reading</h3>
                <h3 data-aos="zoom-in"><span>Nationality :</span> Indonesia</h3>
                <h3 data-aos="zoom-in"><span>Experience :</span> 4+ years Web Designer</h3>
            </div>

            <a href="https://drive.google.com/file/d/1uPItSlmTNr8n5SRP75sa7A44S5X1-V_3/view?usp=sharing" target="_blank" class="button" data-aos="fade-up">Download CV</a>
        </div>
        
        <div class="skills" data-aos="fade-up">
            <h1 class="heading">Studied</h1>  

            <div class="progress">
                <div class="studied" data-aos="fade-left"><h3><span>HTML</span> <span>HTML 5</span></h3></div>
                <div class="studied" data-aos="fade-right"><h3><span>CSS</span> <span>CSS3</span></h3></div>
                <div class="studied" data-aos="fade-left"><h3><span>Javascript</span> <span>OOP</span></h3></div>
                <div class="studied" data-aos="fade-right"><h3><span>PHP</span> <span>OOP</span></h3></div>
                
            </div>
        </div>

        <div class="edu-exp">
            <h1 class="heading" data-aos="fade-up">Education & Experience</h1>

            <div class="row">
                <div class="box-countainer">
                    <h3 class="title" data-aos="fade-right">Education</h3>
                    <div class="box" data-aos="fade-right">
                        <span>(2019 - 2022)</span>
                        <h3>SMK Kristen Immanuel II</h3>
                        <p>i study on vocational high school at my city, and majoring in financial accounting</p>
                    </div>

                    <div class="box" data-aos="fade-right">
                        <span>(2022 - Now)</span>
                        <h3>I-SHOU University</h3>
                        <p>right now im study abroad to improve my skill on artificial intelligence major and also want to learn new language</p>
                    </div>
                </div>

                <div class="box-countainer">
                    <h3 class="title">Experience</h3>
                    <div class="box" data-aos="fade-left">
                        <span>(2020 - Now)</span>
                        <h3>Full Stack Web Developer</h3>
                        <p>I do full stack website development in HTML Javascript and PHP for personal use, school and work</p>
                    </div>

                    <div class="box" data-aos="fade-left">
                        <span>(2020 - Now)</span>
                        <h3>Video Editing & Poster Designer</h3>
                        <p>I do video editing and illustrated poster design, for event, social media and school work </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- About End -->

    <!-- Service Start -->
    <section class="service" id="service">
        <h1 class="heading" data-aos="fade-up">Service</h1>

        <div class="box-countainer">
            <div class="box" data-aos="zoom-in">
                <i class="fas fa-code"></i>
                <h3>Web Development</h3>
                <p>i will develop a perfect website in front-end & back-end</p>
            </div>

            <div class="box" data-aos="zoom-in">
                <i class="fas fa-paint-brush"></i>
                <h3>UI & UX Design</h3>
                <p>i will design innovative photoshop UI & UX for website mockup</p>
            </div>

            <div class="box" data-aos="zoom-in">
                <i class="fas fa-bezier-curve"></i>
                <h3>Video & Poster Editing</h3>
                <p>i will do professional video and poster editing</p>
            </div>
        </div>
    </section>
    <!-- Service End -->

    <!-- Portfolio Start -->
    <section class="portfolio" id="portfolio">
        <h1 class="heading" data-aos="fade-up">Portfolio</h1>

        <div class="box-countainer">
            <div class="box" data-aos="zoom-in">
                <img src="calculator.png" alt="">
                <h3>Calculator</h3>
                <span>(2019)</span>
                <a href="https://berkalkulator.github.io/" class="button" target="_blank">Visit</a>
            </div>

            <div class="box" data-aos="zoom-in">
                <img src="imagegalleryv2.png" alt="">
                <h3>Image Gallery V2</h3>
                <span>(2019)</span>
                <a href="https://anakimmanuel2.github.io/" class="button" target="_blank">Visit</a>
            </div>
            
            <div class="box" data-aos="zoom-in">
                <img src="todolist.png" alt="">
                <h3>Todolist</h3>
                <span>(2020)</span>
                <a href="https://listkita.github.io/" class="button" target="_blank">Visit</a>
            </div>

            <div class="box" data-aos="zoom-in">
                <img src="coffeshop.png" alt="">
                <h3>Coffe Shop</h3>
                <span>(2021)</span>
                <a href="https://vilavincoffee.github.io/" class="button" target="_blank">Visit</a>
            </div>

            <div class="box" data-aos="zoom-in">
                <img src="imagegallery.png" alt="">
                <h3>Image Gallery</h3>
                <span>(2022)</span>
                <a href="http://immanuel2.site/" class="button" target="_blank">Visit</a>
            </div>
            
        </div>
    </section>
    <!-- Portfolio End -->

    <!-- Contact Start -->
    <section class="contact" id="contact">
        <h1 class="heading" data-aos="fade-up">Contact</h1>

        <form action="" method="post">
            <div class="flex">
                <input data-aos="fade-right" type="text" name="name"  class="box" placeholder="Enter your name" require>
                <input data-aos="fade-left" type="email" name="email"  class="box" placeholder="Enter your email" require>
            </div>
            <input data-aos="fade-up" type="number" name="number"  class="box" placeholder="Enter your number" require>
            <textarea data-aos="fade-up" name="message" cols="30" rows="10" class="box" require placeholder="Enter your message"></textarea>
            <input data-aos="zoom-in" type="submit" name="send" value="send message" class="submit">
        </form>

        <div class="box-container">
            <div class="box" data-aos="zoom-in">
                <i class="fas fa-phone"></i>
                <h3>Phone</h3>
                <p>082150241445</p>
            </div>

            <div class="box" data-aos="zoom-in">
                <i class="fas fa-envelope"></i>
                <h3>Email</h3>
                <p>kevinchang@gmail.com</p>
            </div>

            <div class="box" data-aos="zoom-in">
                <i class="fas fa-map"></i>
                <h3>Address</h3>
                <p>Kaohsiung City, Taiwan</p>
            </div>
        </div>
    </section>
    <!-- Contact End -->

    <div class="credit">copyright @ <?php echo date("Y");?> by <span>Kevin</span></div>

    <!-- Script -->
    <script src="script.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>

    <script>
        AOS.init({
            duration: 800,
            delay: 300
        })
    </script>
</body>
</html>