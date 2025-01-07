<?php
// Database connection
include("dp.php");

// Fetch existing data
$id = 1; // Example ID, change this as needed
$sql = "SELECT * FROM mybanner WHERE id = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("i", $id);
$stmt->execute();
$result = $stmt->get_result();

if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    $fname = $row['fname'];
    $lname = $row['lname'];
    $mtext = $row['maintext'];
    $mimg = $row['mainimg'];
    $vwork = $row['viewwork'];
    $fcontactme = $row['contactme'];
    $cgtexts = $row['cgtext'];
    $newcgtexts = $row['newcgtext'];
} else {
    echo "No record found!";
}

?>
 <?php
 // Fetch existing data
$id = 1; // Example ID, change this as needed
$sql = "SELECT * FROM sidenav WHERE id = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("i", $id);
$stmt->execute();
$result = $stmt->get_result();

if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    $simg = $row['sideimg'];
    $sfname = $row['sidefname'];
    $slname = $row['sidelname'];
    $sidechangename = $row['sidechangename'];
    $slinkedin = $row['linkedin'];
    $sgithub = $row['github'];
    $sbehance = $row['behance'];
    $swhatsup = $row['whatsup'];
    $sidenavmail = $row['sidenavmail'];
    $scvbtn = $row['cvbtn'];
    
  //  $reyimage = $_FILES["mainimg"]["name"];
} else {
    echo "No record found!";
}
?>

<!-- about me -->
 <?php
$id = 1; // Example ID, change this as needed
$sql = "SELECT * FROM aboutme WHERE id = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("i", $id);
$stmt->execute();
$result = $stmt->get_result();

if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    $abouttitle = $row['title'];
    $abouttext = $row['abouttext'];
    $aboutname = $row['aboutname'];
    $aboutage = $row['age'];
    $aboutphone = $row['phone'];
    $aboutemail = $row['email'];
    $aboutexperience = $row['experience'];
    $aboutnationality = $row['nationality'];
  
} else {
    echo "No record found!";
}
?>

<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from up2client.com/envato/biogi/resume/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 24 Jul 2024 06:57:22 GMT -->

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SK.Wep</title>
    <link rel="icon" type="image/x-icon" href="./logo.webp">
    <link rel="stylesheet" href="assets/css/swap.css">
    <link rel="stylesheet" href="assets/css/fancybox.min.css">
    <link rel="stylesheet" href="assets/css/magnific-popup.min.css">
    <link rel="stylesheet" href="assets/css/slick.css">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/media_query.css">
</head>

<body>
    <div class="site_contain">
        <!-- ====================================== Preloader ===================================== -->
        <div class="page-loader"><img src="./ns88t5pstnb61-unscreen.gif" alt="loader"></div>
        <!-- ====================================== Preloader End ===================================== -->
        <div class="fix-bg">
            <div class="Ellipse1"></div>
            <div class="Ellipse2"></div>
            <button id="menu-toggle" class="menu-toggle-button">
                <span class="hamburger" id="hamburger-1">
                    <span class="line"></span>
                    <span class="line"></span>
                    <span class="line"></span>
                </span>
            </button>
            <div class="container">
                <!-- ====================================== Side Menu ===================================== -->
                <div class="side-menu">
                    <div class="profile-img-main">
                        <img class="zoom_in" src="\mysite/myadmin\pages\examples\<?php echo htmlspecialchars($simg); ?>" alt="profile-img">
                        <h1 class="fade_up name_sk"><?php echo htmlspecialchars($sfname); ?> <span><?php echo htmlspecialchars($slname); ?></span></h1>
                        <h2 class="designer2 fade_up"></h2>
                        <div class="profile-media-icons-main fade_up">

                            <a href="<?php echo htmlspecialchars($sbehance); ?>" class="profile-media-icons" target="_blank">
                                <img src="assets/images/svg/behance-svg.svg" alt="behance-svg">
                            </a>

                            <a href="<?php echo htmlspecialchars($sgithub); ?>" class="profile-media-icons" target="_blank">
                                <img src="assets/images/github.png" alt="medium-svg" width="22px">
                            </a>
                            <a href="<?php echo htmlspecialchars($slinkedin); ?>" class="profile-media-icons" target="_blank">
                                <img src="assets/images/linkedin.png" alt="medium-svg" width="22px">
                            </a>
                            <!-- <a href="<?php echo htmlspecialchars($swhatsup); ?>" class="profile-media-icons" target="_blank">
                                <img src="assets/images/whatsapp.png" alt="drribale-svg" width="22px">
                            </a> -->
                            <a href="mailto:<?php echo htmlspecialchars($sidenavmail); ?>" class="profile-media-icons" target="_blank">
                                <img src="assets/images/svg/email-svg.svg" alt="email-svg">
                            </a>
                        </div>
                    </div>
                    <div class="menu-list-main">
                        <ul>
                            <li class="active-menu-action">
                                <a class="fade_right" href="#home">
                                    <img src="assets/images/svg/home-svg.svg" alt="home-svg">Home
                                </a>
                            </li>
                            <li class="active-menu-action">
                                <a class="fade_right" href="#about">
                                    <img src="assets/images/svg/about-svg.svg" alt="home-svg">About
                                </a>
                            </li>
                            <!-- <li class="active-menu-action">
                                <a class="fade_right" href="#resume">
                                    <img src="assets/images/svg/resume-svg.svg" alt="home-svg">Resume
                                </a>
                            </li> -->
                            <li class="active-menu-action">
                                <a class="fade_right" href="#services">
                                    <img src="assets/images/svg/services-svg.svg" alt="home-svg">Skills
                                </a>
                            </li>
                            <li class="active-menu-action">
                                <a class="fade_right" href="#portfolio">
                                    <img src="assets/images/svg/portfolio-svg.svg" alt="home-svg">Portfolio
                                </a>
                            </li>
                            <!-- <li class="active-menu-action">
                                <a class="fade_right" href="#pricing">
                                    <img src="assets/images/svg/pricing-svg.svg" alt="home-svg">Pricing
                                </a>
                            </li> -->
                           
                            <li class="active-menu-action" id="contact-line">
                                <a class="fade_right" href="#contact">
                                    <img src="assets/images/svg/contact-svg.svg" alt="home-svg">Contact
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div>
                    <div id="wrap">
    <a href="/mysite/assets/pdf/Suresh.wdev.pdf" class="btn-slide" target="_blank">
        <span class="circle">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                <path class="download-svg"
                    d="M13 12H16L12 16L8 12H11V8H13V12ZM15 4H5V20H19V8H15V4ZM3 2.9918C3 2.44405 3.44749 2 3.9985 2H16L20.9997 7L21 20.9925C21 21.5489 20.5551 22 20.0066 22H3.9934C3.44476 22 3 21.5447 3 21.0082V2.9918Z"
                    fill="white" />
            </svg>
        </span>
        <span class="title">Download CV</span>
        <span class="title-hover">Click Here</span>
    </a>
</div>

                    </div>
                </div>
                <!-- ====================================== Side Menu End ===================================== -->
                <div class="main-containe" data-bs-spy="scroll">
                    <!-- ====================================== Section One ===================================== -->
                    <section class="section-one overflow-hidden" id="home">
                        <div class="row">
                            <div class="col-xxl-6 col-lg-6">
                                <h2 class="jessica-main-text zoom_in"><?php echo htmlspecialchars($fname); ?><br><span> <?php echo htmlspecialchars($lname); ?></span></h2>
                                <h3 class="back-End-dev designer"></h3>
                                <p class="best fade_down"><?php echo htmlspecialchars($mtext); ?>
                                </p>
                                <div class="section-one-btns-main fade_down">
                                    <div class="wrapper">
                                        <a class="btn-hover" href="#portfolio"><?php echo htmlspecialchars($vwork); ?></a>
                                    </div>
                                    <div class="wrapper">
                                        <a class="btn-hover btn-hover2" href="#"><?php echo htmlspecialchars($fcontactme); ?></a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xxl-6 col-lg-6 position-relative">
                                <img class="flower" src="assets/images/flower.png" alt="flower">
                                <img class="circular-img" src="assets/images/circular-img.png" alt="circular-img">
                                <img class="jessica-main-img zoom_in" src="\mysite/myadmin\pages\examples\<?php echo htmlspecialchars($mimg); ?>" alt="jessica-main-img">
                                <!-- <div class="worked-box">
                                    <p class="worked-more">Worked with more than 100 people</p>
                                    <div class="client-img-main position-relative">
                                        <img class="client-img client-img1" src="assets/images/clients-img1.jpg" alt="clients-img1">
                                        <img class="client-img client-img2" src="assets/images/clients-img2.jpg" alt="clients-img2">
                                        <img class="client-img client-img3" src="assets/images/clients-img3.jpg" alt="clients-img3">
                                        <img class="client-img client-img4" src="assets/images/clients-img4.jpg" alt="clients-img4">
                                        <p class="worked-more worked-more2"> 100+ Clients</p>
                                    </div>
                                </div> -->
                            </div>
                        </div>
                    </section>
                    <!-- ====================================== Section one End ===================================== -->
                    <!-- ====================================== Section Marquee ===================================== -->
                    <section class="Marquee-main overflow-hidden mt-4">
                        <h3 class="fade_up">Certificates</h3>
                        <div class="logos logos2">
                            <div class="logos-slide">
                                <div class="marquee__content">
                                    <div class="marquee-img-main">
                                        <img class="brand-logos" src="assets/images/lp-1.png" alt="brand-logo1" width="170px">
                                    </div>
                                    <div class="marquee-img-main">
                                        <img class="brand-logos" src="assets/images/lp-2.png" alt="brand-logo2" width="180px">
                                    </div>
                                    <div class="marquee-img-main">
                                        <img class="brand-logos" src="assets/images/lp-3.png" alt="brand-logo3" width="180px">
                                    </div>
                                    <!-- <div class="marquee-img-main">
                                        <img class="brand-logos" src="assets/images/brand-logo4.png" alt="brand-logo4">
                                    </div>
                                    <div class="marquee-img-main">
                                        <img class="brand-logos" src="assets/images/brand-logo5.png" alt="brand-logo5">
                                    </div>
                                    <div class="marquee-img-main">
                                        <img class="brand-logos" src="assets/images/brand-logo6.png" alt="brand-logo6">
                                    </div>
                                    <div class="marquee-img-main">
                                        <img class="brand-logos" src="assets/images/brand-logo7.png" alt="brand-logo7">
                                    </div>
                                    <div class="marquee-img-main">
                                        <img class="brand-logos" src="assets/images/brand-logo8.png" alt="brand-logo8">
                                    </div>
                                    <div class="marquee-img-main">
                                        <img class="brand-logos" src="assets/images/brand-logo7.png" alt="brand-logo9">
                                    </div> -->
                                </div>
                            </div>
                        </div>
                    </section>
                    <!-- ====================================== Section Marquee End ===================================== -->
                    <!-- ====================================== Section About ===================================== -->
                    <section class="About-section jos" id="about">
                        <div class="heading-container">
                            <h2 class="section-heading-text about-me fade_up"><?php echo htmlspecialchars($abouttitle); ?></h2>
                            <div class="line"></div>
                        </div>
                        <p class="section-sub-text about-sub-text zoom_in"><?php echo htmlspecialchars($abouttext); ?>
                        </p>
                        <div class="about-detail-main">
                            <p class="about-detail">Name</p>
                            <p class="about-detail-info"><?php echo htmlspecialchars($aboutname); ?></p>
                        </div>
                        <div class="about-detail-main">
                            <p class="about-detail">Age</p>
                            <!-- <p class="about-detail-info"> <span id="age"></span></p> -->
                            <p class="about-detail-info"> <?php echo htmlspecialchars($aboutage); ?></p>
                        </div>
                        <script>
                            // Your birthdate: March 20, 2001
                            const birthDate = new Date(2001, 2, 20); // Month is 0-indexed, so 2 is March

                            function calculateAge(birthDate) {
                                const today = new Date();
                                let age = today.getFullYear() - birthDate.getFullYear();

                                // Check if the birthday has occurred yet this year
                                const monthDiff = today.getMonth() - birthDate.getMonth();
                                const dayDiff = today.getDate() - birthDate.getDate();

                                if (monthDiff < 0 || (monthDiff === 0 && dayDiff < 0)) {
                                    age--;
                                }
                                return age;
                            }

                            document.getElementById('age').textContent = calculateAge(birthDate);
                        </script>
                        <div class="about-detail-main">
                            <p class="about-detail">Phone No</p>
                            <p class="about-detail-info email" onclick="location.href='tel:(+91)6383347402'"><?php echo htmlspecialchars($aboutphone); ?>
                            </p>
                        </div>
                        <div class="about-detail-main">
                            <p class="about-detail">Email</p>
                            <p class="about-detail-info email" onclick="location.href='mailto:suresh.webdevlab@gmail.com'"><?php echo htmlspecialchars($aboutemail); ?></p>
                        </div>
                        <div class="about-detail-main">
                            <p class="about-detail">Experience</p>
                            <p class="about-detail-info">
                            <?php echo htmlspecialchars($aboutexperience); ?>
                            </p>
                            <!-- <p class="about-detail-info">
                                <span id="experience"></span>
                            </p> -->
                        </div>
                        <script>
                            const experienceDiv = document.getElementById('experience');

                            // Get the current year
                            const currentYear = new Date().getFullYear();
                            const nextYear = currentYear + 1;

                            // Your experience in years (1.2 years)
                            const currentExperienceYears = 1;

                            // Create a message
                            const experienceMessage = ` ${currentExperienceYears} year `;

                            // Display the message
                            experienceDiv.textContent = experienceMessage;
                        </script>
                        <div class="about-detail-main">
                            <p class="about-detail">Nationality</p>
                            <p class="about-detail-info"><?php echo htmlspecialchars($aboutnationality); ?></p>
                        </div>
                        <div class="about-detail-main">
                            <p class="about-detail">Languages </p>
                            <p class="about-detail-info">Tamil, English</p>
                        </div>
                        <!-- <div class="about-detail-main">
                            <p class="about-detail">Freelance</p>
                            <p class="about-detail-info">Available</p>
                        </div>
                        <div class="about-detail-main">
                            <p class="about-detail">Skype</p>
                            <p class="about-detail-info">hello.biogi</p>
                        </div>
                        <div class="about-detail-main">
                            <p class="about-detail">Language</p>
                            <p class="about-detail-info">English</p>
                        </div> -->
                    </section>
                    <!-- ====================================== Section About End ===================================== -->
                    <!-- ====================================== Section Education Experience ===================================== -->
                    <section class="education-experience" id="resume">
                        <div class="row">
                            <div class="col-xxl-6 col-lg-6">
                                <div class="heading-container">
                                    <h2 class="section-heading-text about-me fade_up">Education.</h2>
                                    <div class="line"></div>
                                </div>
                                <div class="education position-relative fade_up">
                                    <div class="side_circle_ring">
                                        <div class="small_yellow_border">
                                            <div class="small_yellow_circle"></div>
                                        </div>
                                    </div>
                                    <div class="small_yellow_border_main">
                                        <p class="bachelor">Bachelor of Business Administration</p>
                                        <p class="cursus university">Ayya Nadar Janaki Ammal College,sivakasi / 2018 - 2021</p>
                                      
                                    </div>
                                </div>
                                <div class="education position-relative fade_up">
                                    <div class="side_circle_ring">
                                        <div class="small_yellow_border">
                                            <div class="small_yellow_circle"></div>
                                        </div>
                                    </div>
                                    <div class="small_yellow_border_main">
                                        <p class="bachelor">Frontend Developer</p>
                                        <p class="cursus university">Great learning,youtube</p>
                                        
                                    </div>
                                </div>
                                <div class="education position-relative fade_up">
                                    <div class="side_circle_ring">
                                        <div class="small_yellow_border">
                                            <div class="small_yellow_circle"></div>
                                        </div>
                                    </div>
                                    <div class="small_yellow_border_main">
                                        <p class="bachelor">UI & UX Design</p>
                                        <p class="cursus university">Great Learning , Internshala training,youtube</p>
                                        
                                    </div>
                                </div>
                                <div class="education position-relative fade_up">
                                    <div class="side_circle_ring">
                                        <div class="small_yellow_border">
                                            <div class="small_yellow_circle"></div>
                                        </div>
                                    </div>
                                    <div class="small_yellow_border_main">
                                        <p class="bachelor">Digital Marketing</p>
                                        <p class="cursus university">Google</p>
                                       
                                    </div>
                                </div>
                            </div>
                            <div class="col-xxl-6 col-lg-6">
                                <div class="heading-container">
                                    <h2 class="section-heading-text about-me fade_up">Experience.</h2>
                                    <div class="line"></div>
                                </div>
                                <div class="education position-relative fade_up">
                                    <div class="side_circle_ring">
                                        <div class="small_yellow_border">
                                            <div class="small_yellow_circle"></div>
                                        </div>
                                    </div>
                                    <div class="small_yellow_border_main">
                                        <p class="bachelor">Ui and ux Designer, Frontend Developer</p>
                                        <p class="cursus university">currently Work At rey del mercado online services</p>
                                        <p class="cursus">Designing and developing user interfaces for web applications, ensuring responsive and visually appealing layouts. Collaborating with cross-functional teams to deliver seamless digital experiences tailored to client needs.
                                        </p>
                                    </div>
                                </div>
                                <div class="education position-relative fade_up">
                                    <div class="side_circle_ring">
                                        <div class="small_yellow_border">
                                            <div class="small_yellow_circle"></div>
                                        </div>
                                    </div>
                                    <div class="small_yellow_border_main">
                                        <p class="bachelor">Beleaf Technologies Pvt. Ltd
                                        </p>
                                        <p class="cursus university">Ui & Ux Designer and Developer Trainee</p>
                                        <p class="cursus">8 Month Work as beleaf technologies Pvt. Ltd. <br>
                                        Developed prototypes and wireframes for web and mobile applications, contributing to user-friendly design solutions. Assisted senior developers in creating front-end components and maintaining project documentation.
                                        </p>
                                    </div>
                                </div>
                                <div class="education position-relative fade_up">
                                    <div class="side_circle_ring">
                                        <div class="small_yellow_border">
                                            <div class="small_yellow_circle"></div>
                                        </div>
                                    </div>
                                    <div class="small_yellow_border_main">
                                        <p class="bachelor">GRAPHIC DESIGN - Intern</p>
                                        <p class="cursus university">3 Months Internship as in Inmakes Infotech Pvt. Ltd. and 1 Months Internship as in Job Territory</p>
                                        <p class="cursus">Created branding materials, including logos, brochures, and social media graphics. Collaborated with clients to ensure design solutions aligned with their brand vision.
                                        </p>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </section>
                    <!-- ====================================== Section Education Experience End ===================================== -->
                    <!-- ====================================== Section Coding Skill ===================================== -->
                    <section class="coding-skill-section" id="services">
                        <div class="heading-container">
                            <h2 class="section-heading-text coding-skill-text fade_up">Coding Skills.</h2>
                            <div class="line"></div>
                        </div>
                        <div id="progress">
                            <div data-num="95" data-value="HTML & CSS" class="progress-item fade_up">sd</div>
                            <div data-num="80" data-value="SASS" class="progress-item fade_up">sd</div>
                            <div data-num="90" data-value="Bootstrap" class="progress-item fade_up">sd</div>
                            <div data-num="80" data-value="Tailwind CSS" class="progress-item fade_up">sd</div>
                            <div data-num="80" data-value="javascript" class="progress-item fade_up">sd</div>
                            <div data-num="80" data-value="React Js" class="progress-item fade_up">ds</div>


                        </div>
                        <div id="progress">
                            <div data-num="90" data-value="jquery" class="progress-item fade_up">ds</div>
                         
                            <div data-num="90" data-value="Ajax" class="progress-item fade_up">sd</div>
                            <div data-num="50" data-value="PHP" class="progress-item fade_up">sd</div>
                            <div data-num="70" data-value="Mysql" class="progress-item fade_up">sd</div>
                            
                        </div>
                    </section>
                    <!-- ====================================== Section Coding Skill End ===================================== -->
                    <!-- ====================================== Section Design Skill ===================================== -->
                    <section class="design-skill-section">
                        <div class="heading-container">
                            <h2 class="section-heading-text design-skill-text fade_up">Web Design Skills.</h2>
                            <div class="line"></div>
                        </div>
                        <div class="design-skill-sub-section">
                            <div class="design-skills-img-main flip_up">
                                <img src="assets/images/figma-img.png" alt="figma-img">
                                <div class="skill-counter-main">
                                    <p>95%</p>
                                    <p>Figma</p>
                                </div>
                            </div>
                            <div class="design-skills-img-main photoshop flip_up">
                                <img src="assets/images/photoshop-img.png" alt="photoshop-img">
                                <div class="skill-counter-main photoshop-text">
                                    <p>75%</p>
                                    <p>PHOTOSHOP</p>
                                </div>
                            </div>
                            <div class="design-skills-img-main adobe-xd flip_up">
                                <img src="assets/images/adobe-xd-img.png" alt="adobe-xd-img">
                                <div class="skill-counter-main adobe-xd-text">
                                    <p>90%</p>
                                    <p>ADOBE XD</p>
                                </div>
                            </div>

                            <div class="design-skills-img-main sketch flip_up">
                                <img src="assets/images/illustrator.png" alt="sktech-img" width="40px">
                                <div class="skill-counter-main sketch-text">
                                    <p>70%</p>
                                    <p>ILLUSTRATOR</p>
                                </div>
                            </div>
                            <!-- <div class="design-skills-img-main invision flip_up">
                                <img src="assets/images/invision-img.png" alt="invision-img">
                                <div class="skill-counter-main invision-text">
                                    <p>89%</p>
                                    <p>INVISION</p>
                                </div>
                            </div> -->
                        </div>
                    </section>
                    <!-- ====================================== Section Coding Skill End ===================================== -->
                    <!-- ====================================== Section Award ===================================== -->
                    <section class="awards-section overflow-hidden">
                        <div class="heading-container">
                            <h2 class="section-heading-text coding-skill-text fade_up">Other Skills.</h2>
                            <div class="line"></div>
                        </div>
                        <div class="row awards-row">
                            <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6">
                                <div class="box-item flip_up">
                                    <div class="flip-box">
                                        <div class="flip-box-front">
                                            <div class="inner ">
                                                <div class="years-award-img">
                                                    <img class="winner-award" src="assets/images/wordpress-logo.png" alt="winner-award4" width="50px">
                                                    <!-- <p class="award-yer">2025</p> -->
                                                </div>
                                                <!-- <p class="award-interior">Wordpress</p> -->
                                                <p class="award-winner-text">Wordpress</p>
                                            </div>
                                        </div>
                                        <div class="flip-box-back">
                                            <div class="inner">
                                                <p class="flip-back-text">Expert in building and customizing WordPress websites, including themes, plugins, and SEO-friendly designs.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6">
                                <div class="box-item flip_up">
                                    <div class="flip-box">
                                        <div class="flip-box-front">
                                            <div class="inner ">
                                                <div class="years-award-img">
                                                    <img class="winner-award" src="assets/images/github.png" alt="winner-award4" width="50px">
                                                    <!-- <p class="award-yer">2025</p> -->
                                                </div>
                                                <!-- <p class="award-interior">Wordpress</p> -->
                                                <p class="award-winner-text">Git</p>
                                            </div>
                                        </div>
                                        <div class="flip-box-back">
                                            <div class="inner">
                                                <p class="flip-back-text">Expertise in version control and collaborative coding through Git.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6">
                                <div class="box-item flip_up">
                                    <div class="flip-box">
                                        <div class="flip-box-front">
                                            <div class="inner">
                                                <div class="years-award-img">
                                                    <img class="winner-award pb-2" src="assets/images/seo-search-symbol.png" alt="winner-award2" width="60px">
                                                    <!-- <p class="award-yer">2024</p> -->
                                                </div>
                                                <!-- <p class="award-interior">The Webby Awards</p> -->
                                                <p class="award-winner-text">SEO & SMO</p>
                                            </div>
                                        </div>
                                        <div class="flip-box-back">
                                            <div class="inner">
                                                <p class="flip-back-text">Skilled in optimizing websites for search engines using on-page and off-page SEO techniques, and driving social media engagement to boost brand presence.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                       
                            <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6">
                                <div class="box-item flip_up">
                                    <div class="flip-box">
                                        <div class="flip-box-front">
                                            <div class="inner">
                                                <div class="years-award-img">
                                                    <img class="winner-award pb-2" src="assets/images/design-tools.png" alt="winner-award4" width="70px">
                                                    <!-- <p class="award-yer">2022</p> -->
                                                </div>
                                                <!-- <p class="award-interior">BEST Star</p> -->
                                                <p class="award-winner-text">Graphic Designer</p>
                                            </div>
                                        </div>
                                        <div class="flip-box-back">
                                            <div class="inner">
                                                <p class="flip-back-text">Experienced in creating visual content using Adobe Photoshop, Illustrator, and Canva for branding, marketing, and website graphics.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                    <!-- ====================================== Section Award End ===================================== -->
                    <!-- ====================================== Section Services ===================================== -->
                    <section class="Services-section">
                        <div class="heading-container">
                            <h2 class="section-heading-text coding-skill-text fade_up">Area Of Interest.</h2>
                            <div class="line"></div>
                        </div>
                        <h3 class="services-product-text fade_up">Crafting Exceptional Digital Experiences</h3>
                        <p class="visoion-text fade_up">We aim to redefine the standards of web design and development by delivering innovative solutions that combine creativity, functionality, and integrity. Our commitment to excellence ensures customer satisfaction at every step.We aim to redefine the standards of web design and development by delivering innovative solutions that combine creativity, functionality, and integrity. Our commitment to excellence ensures customer satisfaction at every step.
                        </p>
                        <div class="row services-row">
                            <div class="col-xxl-3 col-xl-3 col-lg-6 col-md-6 col-sm-6 services-column fade_up">
                                <a href="#services-popup">
                                    <div class="services-img">
                                        <img src="assets/images/svg/ui-ux.svg" alt="ui-ux">
                                    </div>
                                    <p class="services-text">UI/UX DESIGN & DEVELOPMENT</p>
                                    <p class="molestie">Transforming concepts into visually appealing and user-friendly interfaces, ensuring seamless interaction and enhanced user satisfaction.</p>
                                    <!-- <img class="down-arrow-svg" src="assets/images/svg/down-arrow.svg" alt="down-arrow"> -->
                                </a>
                            </div>
                            <div class="col-xxl-3 col-xl-3 col-lg-6 col-md-6 col-sm-6 services-column fade_up">
                                <a href="#services-popup">
                                    <div class="services-img services-img2">
                                        <img src="assets/images/svg/visual-branding.svg" alt="visual-branding">
                                    </div>
                                    <p class="services-text services-text2">FRONTEND DEVELOPMENT</p>
                                    <p class="molestie">Building responsive and dynamic front-end applications using modern technologies like HTML, CSS, JavaScript, and React.</p>
                                    <!-- <img class="down-arrow-svg" src="assets/images/svg/down-arrow.svg" alt="down-arrow"> -->
                                </a>
                            </div>
                            <div class="col-xxl-3 col-xl-3 col-lg-6 col-md-6 col-sm-6 services-column fade_up">
                                <a href="#services-popup">
                                    <div class="services-img services-img3">
                                        <img src="assets/images/svg/web-development.svg" alt="web-development">
                                    </div>
                                    <p class="services-text services-text3">WEB & WORDPRESS DEVELOPMENT</p>
                                    <p class="molestie">Specializing in WordPress customization, plugin integration, and web development to deliver robust and scalable solutions tailored to client needs.</p>
                                    <!-- <img class="down-arrow-svg" src="assets/images/svg/down-arrow.svg" alt="down-arrow"> -->
                                </a>
                            </div>
                            <div class="col-xxl-3 col-xl-3 col-lg-6 col-md-6 col-sm-6 services-column fade_up">
                                <a href="#services-popup">
                                    <div class="services-img services-img4">
                                        <img src="assets/images/svg/app-development.svg" alt="app-development">
                                    </div>
                                    <p class="services-text services-text4">APP DESIGN</p>
                                    <p class="molestie">Designing intuitive and visually stunning mobile and web app interfaces to enhance user experience and engagement.</p>
                                    <!-- <img class="down-arrow-svg" src="assets/images/svg/down-arrow.svg" alt="down-arrow"> -->
                                </a>
                            </div>
                        </div>
                    </section>
                    <!-- ====================================== Section Services End ===================================== -->
                    <!-- ====================================== Section Services Pop Up ===================================== -->
                    <div id="services-popup" class="popup-container">
                        <div class="popup-content popup-content2">
                            <a href="#" class="close">&times;</a>
                            <h2 class="simple-steps">UI/UX DESIGN</h2>
                            <img class="blog-popup-img1" src="assets/images/gallery/gallery-img2.jpg" alt="gallery-img8">
                            <p class="blog-sit-text">Just because we cant get out and about like we normally would, doesn’t mean we have to taking pictures. There’s still plenty you can do, provided you are prepared to use some imagination. Here are a few ideas to keep you shooting
                                until normal life resumes.
                            </p>
                            <p class="blog-sit-text">Most photographers love to shoot the unusual, and you don’t get much more unusual than These Unprecedented Times. Right now everything counts as out of the ordinary. There are a number of remarkable things about these lockdown
                                days that are worth photographing now we can remember them when it is all over.
                            </p>
                            <p class="blog-sit-text">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Fuga consequatur delectus porro sapiente molestias, magni quasi sed, enim corporis omnis doloremque soluta inventore dolorum consequuntur quo obcaecati rerum sit non.
                            </p>
                            <h2 class="simple-steps services-popup-text">What Is Ui/Ux?</h2>
                            <p class="blog-sit-text">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Fuga consequatur delectus porro sapiente molestias, magni quasi sed, enim corporis omnis doloremque soluta inventore dolorum consequuntur quo obcaecati rerum sit non.
                            </p>
                            <p class="blog-sit-text">treets empty that are usually busy are remarkable and can evoke the sense of historical pictures from before the invention of the motorcar. Other things that are different at the moment will be queues to get into stores and
                                the lines marked out on the floor to show how far apart we should be.
                            </p>
                        </div>
                    </div>
                    <!-- ====================================== Services PopUp End ===================================== -->
                    <!-- ====================================== Section Portfolio ===================================== -->
                    <section class="portfolio-section" id="portfolio">
                        <div class="heading-container">
                            <h2 class="section-heading-text coding-skill-text fade_up">Portfolio.</h2>
                            <div class="line"></div>
                        </div>
                        <div class="portfolios-group-main">
                            <div>
                                <div class="image-container  zoom_in">
                                <a href="https://blocksentinels.com/blockchain-game-development-company" target="_blank" style="text-decoration: none;">
   
                                <img src="assets/images/content-img.png" alt="content-img" width="350px" style="border: 2px solid #000; border-radius: 8px; display: block;">      </a>

                                    
                                </div>
                                <p class="Corporate zoom_in">Blockchain Game Development</p>
                                <a href="https://blocksentinels.com/blockchain-game-development-company" target="_blank" style="color: white; background-color: black; padding: 10px 20px; text-decoration: none; font-size: 16px; border-radius: 5px; display: inline-block;">View Live</a>
                            </div>
                            <div>
                                <div class="image-container  zoom_in">
                                <a href="https://blocksentinels.com/decentralized-exchange-development-company" target="_blank" style="text-decoration: none;">
   
                                <img src="assets/images/3d-rendering-blockchain-technology.jpg" alt="content-img" width="350px" style="border: 2px solid #000; border-radius: 8px; display: block;">      </a>

                                    
                                </div>
                                <p class="Corporate zoom_in">Decentralized-exchange Development</p>
                                <a href="https://blocksentinels.com/decentralized-exchange-development-company" target="_blank" style="color: white; background-color: black; padding: 10px 20px; text-decoration: none; font-size: 16px; border-radius: 5px; display: inline-block;">View Live</a>
                            </div>
                            <div>
                                <div class="image-container  zoom_in">
                                <a href="https://blocksentinels.com/crypto-smart-order-routing-development" target="_blank" style="text-decoration: none;">
   
                                <img src="assets/images/2151480182.jpg" alt="content-img" width="350px" style="border: 2px solid #000; border-radius: 8px; display: block;">      </a>

                                    
                                </div>
                                <p class="Corporate zoom_in">Smart order routing Development</p>
                                <a href="https://blocksentinels.com/crypto-smart-order-routing-development" target="_blank" style="color: white; background-color: black; padding: 10px 20px; text-decoration: none; font-size: 16px; border-radius: 5px; display: inline-block;">View Live</a>
                            </div>
                           
                        </div>
                        <div class="portfolios-group-main">
                            <div>
                                <div class="image-container  zoom_in">
                                <a href="https://blocksentinels.com/web3-development-company" target="_blank" style="text-decoration: none;">
   
                                <img src="assets/images/2151572176.jpg" alt="content-img" width="350px" style="border: 2px solid #000; border-radius: 8px; display: block;">      </a>

                                    
                                </div>
                                <p class="Corporate zoom_in">Web3 Development</p>
                                <a href="https://blocksentinels.com/web3-development-company" target="_blank" style="color: white; background-color: black; padding: 10px 20px; text-decoration: none; font-size: 16px; border-radius: 5px; display: inline-block;">View Live</a>
                            </div>
                            <div>
                                <div class="image-container  zoom_in">
                                <a href="./pesco/index.html" target="_blank" style="text-decoration: none;">
   
                                <img src="assets/images/e-commerce.jpg" alt="content-img" width="350px" style="border: 2px solid #000; border-radius: 8px; display: block;">      </a>

                                    
                                </div>
                                <p class="Corporate zoom_in">E-commerce Site </p>
                                <a href="./pesco/index.html" target="_blank" style="color: white; background-color: black; padding: 10px 20px; text-decoration: none; font-size: 16px; border-radius: 5px; display: inline-block;">View Live</a>
                            </div>
                           
                        </div>
                        <!-- <div class="wrapper view-all-btn zoom_in">
                            <a class="btn-hover" href="#">View All</a>
                        </div> -->
                    </section>
                    <!-- ====================================== Section Portfolio End ===================================== -->
                    <!-- ====================================== Content Pop up ===================================== -->
                    <!-- <div class="popup-wrap">
                        <div class="popup-box">
                            <img class="pop-up-img1" src="assets/images/pop-up-img1.jpg" alt="pop-up-img1">
                            <a class="close-btn popup-close" href="#">
                                <svg width="40px" height="40px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <g stroke-width="0"></g>
                                    <g stroke-linecap="round" stroke-linejoin="round"></g>
                                    <g>
                                        <path
                                            d="M12 22C17.5 22 22 17.5 22 12C22 6.5 17.5 2 12 2C6.5 2 2 6.5 2 12C2 17.5 6.5 22 12 22Z"
                                            stroke="#FFF" stroke-width="1.5" stroke-linecap="round"
                                            stroke-linejoin="round"></path>
                                        <path d="M9.16998 14.83L14.83 9.17004" stroke="#FFF" stroke-width="1.5"
                                            stroke-linecap="round" stroke-linejoin="round"></path>
                                        <path d="M14.83 14.83L9.16998 9.17004" stroke="#FFF" stroke-width="1.5"
                                            stroke-linecap="round" stroke-linejoin="round"></path>
                                    </g>
                                </svg>
                            </a>
                            <p class="corpo">Corporate Branding</p>
                            <p class="corpo-sub">CONTENT</p>
                            <div class="corporate_main">
                                <div class="cuberto_main">
                                    <p class="created_by">Created By:</p>
                                    <p class="cuberto">Cuberto</p>
                                </div>
                                <div class="cuberto_main">
                                    <p class="created_by">Date:</p>
                                    <p class="cuberto">20/12/2024</p>
                                </div>
                                <div class="cuberto_main">
                                    <p class="created_by">Client:</p>
                                    <p class="cuberto">Rayan Patrick</p>
                                </div>
                                <div class="cuberto_main">
                                    <p class="created_by">Categories:</p>
                                    <p class="cuberto">Content</p>
                                </div>
                            </div>
                            <p class="Ornare">
                                Ornare sagittis blandit imperdiet cursus risus. Amet proin cras mattis arcu pellentesque lorem sagittis. Mauris facilisis id est duis eget sed cras curabitur faucibus. Lectus eu eu quis amet. Ultrices morbi bibendum risus nisi sapien id ut egestas. Et
                                fermentum fermentum faucibus sed quis in eget. Quis cursus eu in sit cras sit elementum nibh sit.
                            </p>
                            <div class="pop-up-img-section2">
                                <img src="assets/images/pop-up-img2.jpg" alt="pop-up-img2">
                            </div>
                            <p class="Ornare p-0">
                                Non vel eget pharetra vestibulum orci amet feugiat mi cras. Neque ac duis sed viverra volutpat. Natoque habitasse sit in interdum ut in pharetra proin amet. Non id egestas tellus enim nisi proin. Vel neque gravida sed nunc. Scelerisque vulputate sit tellus
                                dui. Sollicitudin id nec amet porttitor id. In condimentum id id phasellus eu lobortis quis porta nisi.
                            </p>
                        </div>
                    </div> -->
                    <!-- ====================================== Content Pop up End ===================================== -->
                    <!-- ======================================= gallery ================================== -->
                    <!-- <div id="popup2" class="popup-container popup-style">
                        <div class="popup-content popup-content-gallery">
                            <a href="#pop" class="close">&times;</a>
                            <main class="main">
                                <h2 class="mobile_app">Gallery</h2>
                                <div class="container">
                                    <div class="card">
                                        <div class="card-image">
                                            <a href="assets/images/gallery/gallery-img1.jpg" data-fancybox="gallery" data-caption="Caption Images 1">
                                                <img src="assets/images/gallery/gallery-img1.jpg" alt="gallery-img1">
                                            </a>
                                        </div>
                                    </div>
                                    <div class="card">
                                        <div class="card-image">
                                            <a href="assets/images/gallery/gallery-img2.jpg" data-fancybox="gallery" data-caption="Caption Images 1">
                                                <img src="assets/images/gallery/gallery-img2.jpg" alt="gallery-img2">
                                            </a>
                                        </div>
                                    </div>
                                    <div class="card">
                                        <div class="card-image">
                                            <a href="assets/images/gallery/gallery-img3.jpg" data-fancybox="gallery" data-caption="Caption Images 1">
                                                <img src="assets/images/gallery/gallery-img3.jpg" alt="gallery-img3">
                                            </a>
                                        </div>
                                    </div>
                                    <div class="card">
                                        <div class="card-image">
                                            <a href="assets/images/gallery/gallery-img4.jpg" data-fancybox="gallery" data-caption="Caption Images 1">
                                                <img src="assets/images/gallery/gallery-img4.jpg" alt="gallery-img4">
                                            </a>
                                        </div>
                                    </div>
                                    <div class="card">
                                        <div class="card-image">
                                            <a href="assets/images/gallery/gallery-img5.jpg" data-fancybox="gallery" data-caption="Caption Images 1">
                                                <img src="assets/images/gallery/gallery-img5.jpg" alt="gallery-img5">
                                            </a>
                                        </div>
                                    </div>
                                    <div class="card">
                                        <div class="card-image">
                                            <a href="assets/images/gallery/gallery-img6.jpg" data-fancybox="gallery" data-caption="Caption Images 1">
                                                <img src="assets/images/gallery/gallery-img6.jpg" alt="gallery-img6">
                                            </a>
                                        </div>
                                    </div>
                                    <div class="card">
                                        <div class="card-image">
                                            <a href="assets/images/gallery/gallery-img7.jpg" data-fancybox="gallery" data-caption="Caption Images 1">
                                                <img src="assets/images/gallery/gallery-img7.jpg" alt="gallery-img7">
                                            </a>
                                        </div>
                                    </div>
                                    <div class="card">
                                        <div class="card-image">
                                            <a href="assets/images/gallery/gallery-img8.jpg" data-fancybox="gallery" data-caption="Caption Images 1">
                                                <img src="assets/images/gallery/gallery-img8.jpg" alt="gallery-img8">
                                            </a>
                                        </div>
                                    </div>
                                    <div class="card">
                                        <div class="card-image">
                                            <a href="assets/images/gallery/gallery-img3.jpg" data-fancybox="gallery" data-caption="Caption Images 1">
                                                <img src="assets/images/gallery/gallery-img3.jpg" alt="gallery-img3">
                                            </a>
                                        </div>
                                    </div>
                                    <div class="card">
                                        <div class="card-image">
                                            <a href="assets/images/gallery/gallery-img1.jpg" data-fancybox="gallery" data-caption="Caption Images 1">
                                                <img src="assets/images/gallery/gallery-img1.jpg" alt="gallery-img1">
                                            </a>
                                        </div>
                                    </div>
                                    <div class="card">
                                        <div class="card-image">
                                            <a href="assets/images/gallery/gallery-img2.jpg" data-fancybox="gallery" data-caption="Caption Images 1">
                                                <img src="assets/images/gallery/gallery-img2.jpg" alt="gallery-img2">
                                            </a>
                                        </div>
                                    </div>
                                    <div class="card">
                                        <div class="card-image">
                                            <a href="assets/images/gallery/gallery-img3.jpg" data-fancybox="gallery" data-caption="Caption Images 1">
                                                <img src="assets/images/gallery/gallery-img3.jpg" alt="gallery-img3">
                                            </a>
                                        </div>
                                    </div>
                                    <div class="card">
                                        <div class="card-image">
                                            <a href="assets/images/gallery/gallery-img4.jpg" data-fancybox="gallery" data-caption="Caption Images 1">
                                                <img src="assets/images/gallery/gallery-img4.jpg" alt="gallery-img4">
                                            </a>
                                        </div>
                                    </div>
                                    <div class="card">
                                        <div class="card-image">
                                            <a href="assets/images/gallery/gallery-img5.jpg" data-fancybox="gallery" data-caption="Caption Images 1">
                                                <img src="assets/images/gallery/gallery-img5.jpg" alt="gallery-img5">
                                            </a>
                                        </div>
                                    </div>
                                    <div class="card">
                                        <div class="card-image">
                                            <a href="assets/images/gallery/gallery-img1.jpg" data-fancybox="gallery" data-caption="Caption Images 1">
                                                <img src="assets/images/gallery/gallery-img1.jpg" alt="gallery-img1">
                                            </a>
                                        </div>
                                    </div>
                                    <div class="card">
                                        <div class="card-image">
                                            <a href="assets/images/gallery/gallery-img2.jpg" data-fancybox="gallery" data-caption="Caption Images 1">
                                                <img src="assets/images/gallery/gallery-img2.jpg" alt="gallery-img2">
                                            </a>
                                        </div>
                                    </div>
                                    <div class="card">
                                        <div class="card-image">
                                            <a href="assets/images/gallery/gallery-img3.jpg" data-fancybox="gallery" data-caption="Caption Images 1">
                                                <img src="assets/images/gallery/gallery-img3.jpg" alt="gallery-img3">
                                            </a>
                                        </div>
                                    </div>
                                    <div class="card">
                                        <div class="card-image">
                                            <a href="assets/images/gallery/gallery-img4.jpg" data-fancybox="gallery" data-caption="Caption Images 1">
                                                <img src="assets/images/gallery/gallery-img4.jpg" alt="gallery-img4">
                                            </a>
                                        </div>
                                    </div>
                                    <div class="card">
                                        <div class="card-image">
                                            <a href="assets/images/gallery/gallery-img5.jpg" data-fancybox="gallery" data-caption="Caption Images 1">
                                                <img src="assets/images/gallery/gallery-img5.jpg" alt="gallery-img5">
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </main>
                        </div>
                    </div> -->
                    <!-- ======================================= Gallery End================================== -->
                    <!-- ====================================== Section Pricing ===================================== -->
                    <!-- <section class="Pricing-section" id="pricing">
                        <div class="heading-container">
                            <h2 class="section-heading-text coding-skill-text fade_up">Pricing.</h2>
                            <div class="line"></div>
                        </div>
                        <div class="pricing-section-main zoom_in">
                            <div class="basic-plain-box-main">
                                <div class="basic-plain-box">
                                    <img src="assets/images/content-img.png" alt="basic-plain">
                                    <p class="basic-plain-text">Basic Plan</p>
                                </div>
                                <div class="basic-plain-box-sub">
                                    <p class="mon">25<sup>$</sup><span>/mon</span></p>
                                </div>
                            </div>
                            <div class="development-box">
                                <div>
                                    <h3 class="pricing-plaines-name">Web Development</h3>
                                    <h3 class="pricing-plaines-name">Mobile Development</h3>
                                    <h3 class="pricing-plaines-name">Advertising</h3>
                                    <h3 class="pricing-plaines-name">Graphic Design</h3>
                                    <h3 class="pricing-plaines-name">Project Management</h3>
                                </div>
                                <div class="choose-plain-btn-main">
                                    <div class="wrapper">
                                        <a class="btn-hover" href="#">Choose Plan</a>
                                    </div>
                                    <p class="taxes">10% taxes will include after make price</p>
                                </div>
                            </div>
                        </div>
                        <div class="pricing-section-main zoom_in">
                            <div class="basic-plain-box-main">
                                <div class="basic-plain-box basic-plain-box2">
                                    <img src="assets/images/svg/strandard-plan.svg" alt="strandard-plan">
                                    <p class="basic-plain-text">Standard Plan</p>
                                </div>
                                <div class="basic-plain-box-sub">
                                    <p class="mon">75<sup>$</sup><span>/mon</span></p>
                                </div>
                            </div>
                            <div class="development-box">
                                <div>
                                    <h3 class="pricing-plaines-name">Web Development</h3>
                                    <h3 class="pricing-plaines-name">Mobile Development</h3>
                                    <h3 class="pricing-plaines-name">Advertising</h3>
                                    <h3 class="pricing-plaines-name">Graphic Design</h3>
                                    <h3 class="pricing-plaines-name">Project Management</h3>
                                </div>
                                <div class="choose-plain-btn-main">
                                    <div class="wrapper">
                                        <a class="btn-hover" href="#">Choose Plan</a>
                                    </div>
                                    <p class="taxes">10% taxes will include after make price</p>
                                </div>
                            </div>
                        </div>
                        <div class="pricing-section-main mb-0 zoom_in">
                            <div class="basic-plain-box-main">
                                <div class="basic-plain-box basic-plain-box3">
                                    <img src="assets/images/svg/gold-plan.svg" alt="gold-plan">
                                    <p class="basic-plain-text">Gold Plan</p>
                                </div>
                                <div class="basic-plain-box-sub">
                                    <p class="mon">125<sup>$</sup><span>/mon</span></p>
                                </div>
                            </div>
                            <div class="development-box">
                                <div>
                                    <h3 class="pricing-plaines-name">Web Development</h3>
                                    <h3 class="pricing-plaines-name">Mobile Development</h3>
                                    <h3 class="pricing-plaines-name">Advertising</h3>
                                    <h3 class="pricing-plaines-name">Graphic Design</h3>
                                    <h3 class="pricing-plaines-name">Project Management</h3>
                                </div>
                                <div class="choose-plain-btn-main">
                                    <div class="wrapper">
                                        <a class="btn-hover" href="#">Choose Plan</a>
                                    </div>
                                    <p class="taxes">10% taxes will include after make price</p>
                                </div>
                            </div>
                        </div>
                    </section> -->
                    <!-- ====================================== Section Pricing End ===================================== -->
                    <!-- ====================================== Section Testimonials ===================================== -->
                    <!-- <section class="testimonials-section">
                        <div class="heading-container">
                            <h2 class="section-heading-text coding-skill-text fade_up">Testimonials.</h2>
                            <div class="line"></div>
                        </div>
                        <p class="testament fade_up">Their words are a testament to our commitment to excellence and our ability to bring their visions to life. Read on to see how we've made a lasting impact on their brands and projects.
                        </p>
                        <div class="Testimonials">
                            <div>
                                <div class="colan-icon-img-main">
                                    <img src="assets/images/svg/colan-icon.svg" alt="colan-icon">
                                </div>
                                <p class="avix">Thanks to Avix's game-changing website design and development, our online presence has reached new heights. Our website has never looked better. Avix presence with their outstanding. development team took our and turned.
                                </p>
                                <p class="client-name">Olivia Segio</p>
                                <p class="kello">Oria Studio</p>
                            </div>
                            <div>
                                <div class="colan-icon-img-main">
                                    <img src="assets/images/svg/colan-icon.svg" alt="colan-icon">
                                </div>
                                <p class="avix">Auxa has been a game-changer for our online presence. Their website design and development team took our vision and turned it into a stunning reality. The results speak for themselves - our website has never looked better.
                                </p>
                                <p class="client-name">Marilina Harless</p>
                                <p class="kello">Kello Auxa</p>
                            </div>
                            <div>
                                <div class="colan-icon-img-main">
                                    <img src="assets/images/svg/colan-icon.svg" alt="colan-icon">
                                </div>
                                <p class="avix">Thanks to Avix's game-changing website design and development, our online presence has reached new heights. Our website has never looked better. Avix presence with their outstanding. development team took our and turned.
                                </p>
                                <p class="client-name">Olivia Segio</p>
                                <p class="kello">Oria Studio</p>
                            </div>
                            <div>
                                <div class="colan-icon-img-main">
                                    <img src="assets/images/svg/colan-icon.svg" alt="colan-icon">
                                </div>
                                <p class="avix">Auxa has been a game-changer for our online presence. Their website design and development team took our vision and turned it into a stunning reality. The results speak for themselves - our website has never looked better.
                                </p>
                                <p class="client-name">Marilina Harless</p>
                                <p class="kello">Kello Auxa</p>
                            </div>
                        </div>
                    </section> -->
                    <!-- ====================================== Section Testimonials ===================================== -->
                    <!-- ====================================== Section Blogs ===================================== -->
                    <!-- <section class="blog-section" id="blog">
                        <div class="heading-container">
                            <h2 class="section-heading-text coding-skill-text fade_up">Blogs.</h2>
                            <div class="line"></div>
                        </div>
                        <div class="blog-main zoom_in">
                            <div class="blog-img-section">
                                <p class="blog-date">20<span>APR</span></p>
                            </div>
                            <div>
                                <h3 class="post-date">20 April 2025 | web development</h3>
                                <h4 class="steps">Become a Frontend Developer in 5 Simple Steps</h4>
                                <h5 class="est">Est a quis ipsum et arcu. Sit eros leo enim sed vivamus. Nulla et eget commodo mus suspendisse imperdiet. Rhoncus commodo duis nulla habitasse viverra turpis metus in. Tellus nam vivamus et in commodo bibendum.
                                </h5>
                                <div class="wrapper blog-btn">
                                    <a class="btn-hover" href="#blog-popup">Read More
                                        <svg class="btn-arrow-right" xmlns="http://www.w3.org/2000/svg" width="32"
                                            height="32" viewBox="0 0 32 32" fill="none">
                                            <path
                                                d="M21.5621 14.6665L14.4101 7.51452L16.2957 5.62891L26.6666 15.9999L16.2957 26.3707L14.4101 24.4851L21.5621 17.3332H5.33331V14.6665H21.5621Z"
                                                fill="#0F141C" />
                                        </svg>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="blog-main zoom_in">
                            <div class="blog-img-section blog-img-section2">
                                <p class="blog-date">15<span>APR</span></p>
                            </div>
                            <div>
                                <h3 class="post-date">15 April 2025 | GRAPHIC DESIGN</h3>
                                <h4 class="steps">11 Best Logo Design Online & Offline Courses</h4>
                                <h5 class="est">Lectus neque aliquet faucibus diam neque sapien rhoncus morbi viverra. Sed lorem a eget nisi porttitor augue. Aenean consectetur tristique quisque risus. Aliquet posuere quis pellentesque id eget nisi Ornare.
                                </h5>
                                <div class="wrapper blog-btn">
                                    <a class="btn-hover" href="#blog-popup">Read More
                                        <svg class="btn-arrow-right" xmlns="http://www.w3.org/2000/svg" width="32"
                                            height="32" viewBox="0 0 32 32" fill="none">
                                            <path
                                                d="M21.5621 14.6665L14.4101 7.51452L16.2957 5.62891L26.6666 15.9999L16.2957 26.3707L14.4101 24.4851L21.5621 17.3332H5.33331V14.6665H21.5621Z"
                                                fill="#0F141C" />
                                        </svg>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="blog-main mb-0 zoom_in">
                            <div class="blog-img-section blog-img-section3">
                                <p class="blog-date">10<span>APR</span></p>
                            </div>
                            <div>
                                <h3 class="post-date">10 April 2025 | SEO</h3>
                                <h4 class="steps">10 Content Proofreading Tips to Catch More</h4>
                                <h5 class="est">Habitasse gravida vestibulum egestas dis quis mauris ut nulla quam. Ultrices ac tincidunt mattis odio. Est morbi non posuere elementum luctus massa duis consectetur duis. Convallis sit hac suspendisse mattis sit.
                                </h5>
                                <div class="wrapper blog-btn">
                                    <a class="btn-hover" href="#blog-popup">Read More
                                        <svg class="btn-arrow-right" xmlns="http://www.w3.org/2000/svg" width="32"
                                            height="32" viewBox="0 0 32 32" fill="none">
                                            <path
                                                d="M21.5621 14.6665L14.4101 7.51452L16.2957 5.62891L26.6666 15.9999L16.2957 26.3707L14.4101 24.4851L21.5621 17.3332H5.33331V14.6665H21.5621Z"
                                                fill="#0F141C" />
                                        </svg>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </section> -->
                    <!-- ====================================== Section Blogs End ===================================== -->
                    <!-- ====================================== Blogs PopUp ===================================== -->
                    <div id="blog-popup" class="popup-container">
                        <div class="popup-content popup-content2">
                            <a href="#" class="close">&times;</a>
                            <div class="date-onner-coment-main">
                                <div class="date-onner-coment-sub-text">
                                    <svg class="Icon-Set" width="24px" height="24px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <g>
                                            <path
                                                d="M5 21C5 17.134 8.13401 14 12 14C15.866 14 19 17.134 19 21M16 7C16 9.20914 14.2091 11 12 11C9.79086 11 8 9.20914 8 7C8 4.79086 9.79086 3 12 3C14.2091 3 16 4.79086 16 7Z"
                                                stroke="#FFFF" stroke-width="2" stroke-linecap="round"
                                                stroke-linejoin="round"></path>
                                        </g>
                                    </svg>Marina Willums
                                </div>
                                <div class="date-onner-coment-sub-text">
                                    <svg class="Icon-Set" width="24px" height="24px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <g>
                                            <path
                                                d="M3 9H21M7 3V5M17 3V5M6 13H8M6 17H8M11 13H13M11 17H13M16 13H18M16 17H18M6.2 21H17.8C18.9201 21 19.4802 21 19.908 20.782C20.2843 20.5903 20.5903 20.2843 20.782 19.908C21 19.4802 21 18.9201 21 17.8V8.2C21 7.07989 21 6.51984 20.782 6.09202C20.5903 5.71569 20.2843 5.40973 19.908 5.21799C19.4802 5 18.9201 5 17.8 5H6.2C5.0799 5 4.51984 5 4.09202 5.21799C3.71569 5.40973 3.40973 5.71569 3.21799 6.09202C3 6.51984 3 7.07989 3 8.2V17.8C3 18.9201 3 19.4802 3.21799 19.908C3.40973 20.2843 3.71569 20.5903 4.09202 20.782C4.51984 21 5.07989 21 6.2 21Z"
                                                stroke="#FFF" stroke-width="2" stroke-linecap="round"
                                                stroke-linejoin="round">
                                            </path>
                                        </g>
                                    </svg>20 APRIL 2025
                                </div>
                                <div class="date-onner-coment-sub-text">
                                    <svg class="Icon-Set" width="24px" height="24px" viewBox="-0.5 0 32 32" version="1.1" fill="#ffffff">
                                        <g transform="translate(-257.000000, -255.000000)" fill="#FFF">
                                            <path
                                                d="M259,266.5 C259,261.254 263.753,257 270,257 C274.973,257 280,261.254 280,266.5 C280,271.747 276.075,276 270,276 C269.107,276 267.244,275.898 266.413,275.725 L263,278 L263,274.456 C260.561,272.477 259,269.834 259,266.5 L259,266.5 Z M266.637,277.736 C267.414,277.863 269.181,278 270,278 C277.18,278 282,272.657 282,266.375 C282,260.093 275.977,255 270,255 C262.811,255 257,260.093 257,266.375 C257,270.015 258.387,273.104 261,275.329 L261,281 L266.637,277.736 L266.637,277.736 Z M283.949,264.139 C283.968,264.425 284,264.709 284,265 C284,265.636 283.938,266.259 283.849,266.874 C285.195,268.45 286,270.392 286,272.5 C286,275.834 284.008,278.761 281,280.456 L281,284 L277.587,281.725 C276.756,281.898 275.893,282 275,282 C272.41,282 271.034,281.222 269.154,279.929 C268.609,279.973 268.059,280 267.5,280 C267.102,280 266.712,279.972 266.32,279.949 C268.701,282.276 271.149,283.75 275,283.75 C275.819,283.75 276.618,283.676 277.395,283.549 L283,287 L283,281.329 C286.04,279.246 288,276.015 288,272.375 C288,269.131 286.439,266.211 283.949,264.139 L283.949,264.139 Z M275.5,268 C276.329,268 277,267.329 277,266.5 C277,265.672 276.329,265 275.5,265 C274.671,265 274,265.672 274,266.5 C274,267.329 274.671,268 275.5,268 L275.5,268 Z M263.5,268 C264.329,268 265,267.329 265,266.5 C265,265.672 264.329,265 263.5,265 C262.671,265 262,265.672 262,266.5 C262,267.329 262.671,268 263.5,268 L263.5,268 Z M269.5,268 C270.329,268 271,267.329 271,266.5 C271,265.672 270.329,265 269.5,265 C268.671,265 268,265.672 268,266.5 C268,267.329 268.671,268 269.5,268 L269.5,268 Z"
                                                id="comments">
                                            </path>
                                        </g>
                                    </svg>1.2k
                                </div>
                            </div>
                            <h2 class="simple-steps">Become a Frontend Developer in 5 Simple Steps</h2>
                            <img class="blog-popup-img1" src="assets/images/gallery/gallery-img8.jpg" alt="gallery-img8">
                            <p class="blog-sit-text">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Fuga consequatur delectus porro sapiente molestias, magni quasi sed, enim corporis omnis doloremque soluta inventore dolorum conseqr quo obcaecati rerum sit non. Lorem
                                ipsum dolor, sit amet consectetur adipisicing elit. Fuga consequatur delectus porro sapiente molestias, magni quasi sed, enim corporis omnis doloremque soluta inventore dolorum consequuntur quo obcaecati rerum sit non.
                            </p>
                            <p class="blog-sit-text">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Fuga consequatur delectus porro sapiente molestias, magni quasi sed, enim corporis omnis doloremque soluta inventore dolorum consetur quo obcaecati rerum sit non. Lorem
                                ipsum dolor, sit amet consectetur adipisicing elit. Fuga consequatur delectus porro sapiente molestias, magni quasi sed, sit amet consectetur adipisicing elit. Fuga consequatur delectus porro sapiente molestias, magni quasi
                                sed, enim corporis omnis doloremque soluta inventore dolorum consequuntur.
                            </p>
                            <p class="blog-sit-text">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Fuga consequatur delectus porro sapiente molestias, magni quasi sed, enim corporis omnis doloremque soluta inventore dolorum consequuntur quo obcaecati rerum sit non.
                            </p>
                            <div class="blog-media-main">
                                <p>Share :</p>
                                <a href="#">
                                    <svg fill="#ffffff" width="28px" height="28px" viewBox="0 0 32 32" xmlns="http://www.w3.org/2000/svg">
                                        <g stroke-width="0"></g>
                                        <g stroke-linecap="round" stroke-linejoin="round"></g>
                                        <g>
                                            <path
                                                d="M21.95 5.005l-3.306-.004c-3.206 0-5.277 2.124-5.277 5.415v2.495H10.05v4.515h3.317l-.004 9.575h4.641l.004-9.575h3.806l-.003-4.514h-3.803v-2.117c0-1.018.241-1.533 1.566-1.533l2.366-.001.01-4.256z">
                                            </path>
                                        </g>
                                    </svg>
                                </a>
                                <a href="#">
                                    <svg width="28px" height="28px" viewBox="0 -0.5 25 25" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <g stroke-width="0"></g>
                                        <g stroke-linecap="round" stroke-linejoin="round"></g>
                                        <g>
                                            <path fill-rule="evenodd" clip-rule="evenodd"
                                                d="M15.5 5H9.5C7.29086 5 5.5 6.79086 5.5 9V15C5.5 17.2091 7.29086 19 9.5 19H15.5C17.7091 19 19.5 17.2091 19.5 15V9C19.5 6.79086 17.7091 5 15.5 5Z"
                                                stroke="#FFF" stroke-width="1.5" stroke-linecap="round"
                                                stroke-linejoin="round"></path>
                                            <path fill-rule="evenodd" clip-rule="evenodd"
                                                d="M12.5 15C10.8431 15 9.5 13.6569 9.5 12C9.5 10.3431 10.8431 9 12.5 9C14.1569 9 15.5 10.3431 15.5 12C15.5 12.7956 15.1839 13.5587 14.6213 14.1213C14.0587 14.6839 13.2956 15 12.5 15Z"
                                                stroke="#FFF" stroke-width="1.5" stroke-linecap="round"
                                                stroke-linejoin="round"></path>
                                            <rect x="15.5" y="9" width="2" height="2" rx="1"
                                                transform="rotate(-90 15.5 9)" fill="#FFF"></rect>
                                            <rect x="16" y="8.5" width="1" height="1" rx="0.5"
                                                transform="rotate(-90 16 8.5)" stroke="#FFF" stroke-linecap="round">
                                            </rect>
                                        </g>
                                    </svg>
                                </a>
                                <a href="#">
                                    <svg width="28px" height="28px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <g stroke-width="0"></g>
                                        <g stroke-linecap="round" stroke-linejoin="round"></g>
                                        <g>
                                            <path
                                                d="M17.6 6.31999C16.8669 5.58141 15.9943 4.99596 15.033 4.59767C14.0716 4.19938 13.0406 3.99622 12 3.99999C10.6089 4.00135 9.24248 4.36819 8.03771 5.06377C6.83294 5.75935 5.83208 6.75926 5.13534 7.96335C4.4386 9.16745 4.07046 10.5335 4.06776 11.9246C4.06507 13.3158 4.42793 14.6832 5.12 15.89L4 20L8.2 18.9C9.35975 19.5452 10.6629 19.8891 11.99 19.9C14.0997 19.9001 16.124 19.0668 17.6222 17.5816C19.1205 16.0965 19.9715 14.0796 19.99 11.97C19.983 10.9173 19.7682 9.87634 19.3581 8.9068C18.948 7.93725 18.3505 7.05819 17.6 6.31999ZM12 18.53C10.8177 18.5308 9.65701 18.213 8.64 17.61L8.4 17.46L5.91 18.12L6.57 15.69L6.41 15.44C5.55925 14.0667 5.24174 12.429 5.51762 10.8372C5.7935 9.24545 6.64361 7.81015 7.9069 6.80322C9.1702 5.79628 10.7589 5.28765 12.3721 5.37368C13.9853 5.4597 15.511 6.13441 16.66 7.26999C17.916 8.49818 18.635 10.1735 18.66 11.93C18.6442 13.6859 17.9355 15.3645 16.6882 16.6006C15.441 17.8366 13.756 18.5301 12 18.53ZM15.61 13.59C15.41 13.49 14.44 13.01 14.26 12.95C14.08 12.89 13.94 12.85 13.81 13.05C13.6144 13.3181 13.404 13.5751 13.18 13.82C13.07 13.96 12.95 13.97 12.75 13.82C11.6097 13.3694 10.6597 12.5394 10.06 11.47C9.85 11.12 10.26 11.14 10.64 10.39C10.6681 10.3359 10.6827 10.2759 10.6827 10.215C10.6827 10.1541 10.6681 10.0941 10.64 10.04C10.64 9.93999 10.19 8.95999 10.03 8.56999C9.87 8.17999 9.71 8.23999 9.58 8.22999H9.19C9.08895 8.23154 8.9894 8.25465 8.898 8.29776C8.8066 8.34087 8.72546 8.403 8.66 8.47999C8.43562 8.69817 8.26061 8.96191 8.14676 9.25343C8.03291 9.54495 7.98287 9.85749 8 10.17C8.0627 10.9181 8.34443 11.6311 8.81 12.22C9.6622 13.4958 10.8301 14.5293 12.2 15.22C12.9185 15.6394 13.7535 15.8148 14.58 15.72C14.8552 15.6654 15.1159 15.5535 15.345 15.3915C15.5742 15.2296 15.7667 15.0212 15.91 14.78C16.0428 14.4856 16.0846 14.1583 16.03 13.84C15.94 13.74 15.81 13.69 15.61 13.59Z"
                                                fill="#FFF"></path>
                                        </g>
                                    </svg>
                                </a>
                                <a href="#">
                                    <svg fill="#ffffff" width="30px" height="30px" viewBox="-3.5 0 19 19" xmlns="http://www.w3.org/2000/svg" class="cf-icon-svg">
                                        <g stroke-width="0"></g>
                                        <g stroke-linecap="round" stroke-linejoin="round"></g>
                                        <g>
                                            <path
                                                d="M3.335 6.498a1.152 1.152 0 0 1-1.248 1.148h-.015a1.15 1.15 0 1 1 .03-2.295 1.147 1.147 0 0 1 1.233 1.147zM.982 8.553h2.206v6.637H.982zm10.165 2.83v3.807H8.941v-3.55c0-.893-.319-1.502-1.12-1.502a1.21 1.21 0 0 0-1.13.807 1.516 1.516 0 0 0-.073.538v3.708H4.41s.03-6.017 0-6.639h2.21v.94l-.016.023h.015V9.49a2.19 2.19 0 0 1 1.989-1.095c1.451 0 2.54.949 2.54 2.988z">
                                            </path>
                                        </g>
                                    </svg>
                                </a>
                            </div>
                        </div>
                    </div>
                    
       
                    <!-- ====================================== Blogs PopUp End ===================================== -->
                    <!-- ====================================== Section Contact ===================================== -->
                    <section class="contact-section mb-4" id="contact">
    <div class="heading-container">
        <h2 class="section-heading-text coding-skill-text fade_up">Get In Touch.</h2>
        <div class="line"></div>
    </div>
    <p class="services-product-text fade_up">TAKE A COFFEE & CHAT WITH ME</p>
    <div class="main-box-contact">
        <div class="contact-box-main zoom_in">
            <div class="mobile-icon-main">
                <svg xmlns="http://www.w3.org/2000/svg" width="48" height="48" viewBox="0 0 48 48" fill="none">
                    <path
                        d="M6 6H42C43.1046 6 44 6.89544 44 8V40C44 41.1046 43.1046 42 42 42H6C4.89544 42 4 41.1046 4 40V8C4 6.89544 4.89544 6 6 6ZM24.1212 23.3658L11.2944 12.4754L8.70556 15.5246L24.1462 28.6342L39.3088 15.5123L36.6912 12.4877L24.1212 23.3658Z"
                        fill="white" />
                </svg>
            </div>
            <div>
                <p class="contact-email-text">EMAIL</p>
                <p class="contact-email"><a href="mailto:suresh.webdevlab@gmail.com">suresh.webdevlab@gmail.com</a></p>
            </div>
        </div>
        <div class="contact-box-main zoom_in">
            <div class="mobile-icon-main">
                <svg xmlns="http://www.w3.org/2000/svg" width="48" height="48" viewBox="0 0 48 48" fill="none">
                    <path
                        d="M14 4H36C37.1046 4 38 4.89544 38 6V42C38 43.1046 37.1046 44 36 44H12C10.8954 44 10 43.1046 10 42V0H14V4ZM14 8V18H34V8H14Z"
                        fill="white" />
                </svg>
            </div>
            <div>
                <p class="contact-email-text">PHONE</p>
                <p class="contact-email"><a href="tel:(+91)6383347402">(+91) 63833 47402</a></p>
            </div>
        </div>
    </div>
    <div class="form-container">
        <div class="form">
            <label for="name" class="form__label">NAME</label>
            <input type="text" class="form__input" placeholder="Your name" id="name" required autocomplete="off">
        </div>
        <div class="form">
            <label for="email" class="form__label">EMAIL</label>
            <input type="email" class="form__input" placeholder="Your email" id="email" required autocomplete="off">
        </div>
    </div>
    <div class="form subject-input-main">
        <label for="subject" class="form__label">SUBJECT</label>
        <input type="text" class="form__input" placeholder="Your subject" id="subject" required autocomplete="off">
    </div>
    <div class="form">
        <label for="message" class="form__label">MESSAGE</label>
        <input type="text" class="form__input" placeholder="Write your text..." id="message" required autocomplete="off">
    </div>
    <div class="wrapper blog-btn">
        <button class="btn-hover" onclick="sendToWhatsApp()">Submit Now</button>
    </div>
</section>

<script>
    function sendToWhatsApp() {
        const name = document.getElementById('name').value;
        const email = document.getElementById('email').value;
        const subject = document.getElementById('subject').value;
        const message = document.getElementById('message').value;

        if (name && email && subject && message) {
            const whatsappNumber = '+916383347402'; // Replace with your WhatsApp number (e.g., +91XXXXXXXXXX)
            const whatsappMessage = `Name: ${name}%0AEmail: ${email}%0ASubject: ${subject}%0AMessage: ${message}`;
            const whatsappURL = `https://wa.me/${whatsappNumber}?text=${whatsappMessage}`;
            window.open(whatsappURL, '_blank');
        } else {
            alert('Please fill in all fields before submitting!');
        }
    }
</script>

                    <!-- ====================================== Section Contact End ===================================== -->
                </div>
            </div>
        </div>
    </div>
    <script src="assets/javascript/jquery.min.js"></script>
    <script src="assets/javascript/fancybox.min.js"></script>
    <script src="assets/javascript/magnific-popup.min.js"></script>
    <script src="assets/javascript/slick.min.js"></script>
    <script src="assets/javascript/bootstrap.bundle.min.js"></script>
    <script src="assets/javascript/script.js"></script>
    <?php
    
    $array = explode(" | ", $cgtexts);
    $array2 = explode(" | ", $sidechangename);
$countall=count($array);
// $countall2=count($array2);
    // Access individual elements
  
    ?>
 
<script>
    firstText = "<?php echo $array[0];?>";
secondText = "<?php echo $array[1];?>";
thridText ="<?php echo $array[2];?>";
fourthText = "<?php echo $array2[0];?>";
fifthText = "<?php echo $array2[1];?>";
sixthText = "<?php echo $array2[2];?>";
intervalTime = 600;
window.load = displayText();
window.load = displayText2();
/*firstText =  "UI & UX Designer";
secondText = "Web/Wordpress Developer";
thridText = "SEO & Google Ads"
fourthText = "";
fifthText = "Web Developer & Designer";
sixthText = "Frontend Developer"
intervalTime = 600;
window.load = displayText();
window.load = displayText2();*/

function displayText2() {
    document.querySelector('.designer').innerText = firstText;
    firstText.innerText
    setTimeout(() => {
        document.querySelector('.designer').innerText = secondText;
    }, intervalTime * 3);
    setTimeout(() => {
        document.querySelector('.designer').innerText = thridText;
    }, intervalTime * 5);
}

function displayText() {
    document.querySelector('.designer2').innerText = fourthText;
    firstText.innerText
    setTimeout(() => {
        document.querySelector('.designer2').innerText = fifthText;
    }, intervalTime * 3);
    setTimeout(() => {
        document.querySelector('.designer2').innerText = sixthText;
    }, intervalTime * 5);
}
setInterval(() => {
    displayText2();
    displayText();
}, intervalTime * 7);
</script>
</body>

<!-- Mirrored from up2client.com/envato/biogi/resume/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 24 Jul 2024 06:57:42 GMT -->

</html>