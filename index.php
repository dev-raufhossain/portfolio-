<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rauf Portfolio</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="media.css">
    <link rel="stylesheet" href=" ">
</head>
<body>
                            <!-- HEDER START -->
    <div class="header">
        <nav>

            <?php
            include_once 'db_conection.php';
            $sql="SELECT * FROM tbl_logo_text ORDER BY id DESC";
            $query=mysqli_query($conn, $sql);
            if(!$query){
                echo "Query Not working:" .mysqli_error($conn); die;
            }
                $data=mysqli_fetch_array($query);
            ?>

            <h3><?php echo $data['logo_text']; ?></h3>
            <div class="nav-menu" id="navmenu">
                <span onclick="hideMenu()">X</span>
                <ul>
                    <li><a href="#">HOME</a></li>
                    <li><a href="#">ABOUT</a></li>
                    <li><a href="#">SERVICE</a></li>
                    <li><a href="#">WORKS</a></li>
                    <li><a href="#">CLENTS</a></li>
                    <li><a href="#">CONTACT</a></li>
                    <li><input type="text" name="seacrh" id=""><input type="submit" name="submit" value="Seacrh"  value=""></li>
                </ul>
            </div>
            <span class="spanm"  onclick="openMenu()">MENU</span>
        </nav>
       <!--  <img src="images/1.png" alt="" class="profile"> -->

        <div class="titeldiscription">

        <?php
            $sql="SELECT * FROM tbl_title ORDER BY id DESC";
            $query=mysqli_query($conn, $sql);
            if(!$query){
                echo "Query Not working:" .mysqli_error($conn); die;
            }
                $data=mysqli_fetch_array($query);
            ?>
            <h1><?php echo $data['title']; ?></h1>
            <p><?php echo $data['discription']; ?></p>
            <a href="<?php echo $data['link1']; ?>"><?php echo $data['link1_text']; ?></a>&nbsp;
            <a href="<?php echo $data['limk2']; ?>"><?php echo $data['link2_text']; ?></a>
        </div>
        <img class="profile" src="../images/<?php echo $data['images']; ?>">
    </div>
                              <!-- HEDER END -->

                             <!-- ABOUT START -->

    <div class="about-me">
        <h1>About Me</h1>
        <div class="row">
            <div class="col">
                <img src="images/3.jpg" alt="">
            </div>
            <div class="col">
                <h2>Hello, This is Rauf</h2>
                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Exercitationem, consequatur. Voluptates vel repellendus velit perspiciatis quaerat, officia exercitationem est molestias reprehenderit et dicta hic fuga nulla saepe eveniet sapiente id corrupti harum beatae quos, debitis fugit! Quos quidem voluptatem nulla deserunt commodi voluptatum architecto, molestiae velit labore veniam accusamus magnam!</p>
            </div>
        </div>
    </div>

    <!-- ABOUT END -->
    <!-- SKILL START -->

    <div class="skill">
        <h1>My Skill</h1>
        <div class="row">
            <div class="skill-col">
                <h2>Hello, This is Rauf</h2>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quidem itaque maiores voluptas saepe sunt nulla quia sint quod sed optio nemo accusantium doloribus, nesciunt quas!</p>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Vel, distinctio!</p>
            </div>
            <div class="skill-col">
                <h2>Hello, This is Rauf</h2>
                <ul>
                    <li>
                        <h3>HTML</h3><span class="bar"><span class="html"></span></span>
                    </li>
                    <li>
                        <h3>CSS</h3><span class="bar"><span class="css"></span></span>
                    </li>
                    <li>
                        <h3>JS</h3><span class="bar"><span class="js"></span></span>
                    </li>
                    <li>
                        <h3>PHP</h3><span class="bar"><span class="php"></span></span>
                    </li>
                </ul>
            </div>
        </div>

    </div>
       <!-- SKILL END -->
       <!-- SERVICE START -->
       <div class="service">
           <h1>My Service</h1>
           <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. </p>
           <div class="row">
               <div class="service-col">
                <h2>Hardware</h2>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quidem itaque maiores voluptas saepe sunt nulla</p>
            </div>
               <div class="service-col"> 
                <h2>Software</h2>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quidem itaque maiores voluptas saepe sunt nulla</p>
               </div>
               <div class="service-col"> 
                <h2>Programming</h2>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quidem itaque maiores voluptas saepe sunt nulla</p>
               </div>
           </div>
       </div>

    <!-- SERVICE END -->
    <!-- PROTFOLIO START -->
    <div class="protfolio">
        <h1>My Service</h1>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. </p>
        <div class="row">
            <div class="protfolio-col">
                <img src="images/4.jpg" alt="">
                <div class="overly">
                    <h3>html & css</h3>
                </div>
         </div>
            <div class="protfolio-col"> 
                <img src="images/5.png" alt="">
                <div class="overly">
                    <h3>html & css</h3>
                </div>

            </div>
            <div class="protfolio-col"> 
                <img src="images/6.png" alt="">
                <div class="overly">
                    <h3>html & css</h3>
                </div>
            </div>
        </div>
    </div>
    <!-- PROTFOLIO END-->
    <!-- TESTIMONIALS START-->

    <div class="testimonials">
        <h1>What people say</h1>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. </p>
        <div class="row">
            <div class="test-col">
                <img src="images/10.jpg" alt="">
                <div class="">
                    <p>rem ipsum dolor sit amet consectetur adipisicing elit. Quo, laborum temporibus officia esse illum reiciendis.</p>
                    <h3>Rauf</h3>
                </div>
                    
            </div>
            <div class="test-col"> 
                <img src="images/10.jpg" alt="">
                <div class="">
                    <p>rem ipsum dolor sit amet consectetur adipisicing elit. Quo, laborum temporibus officia esse illum reiciendis.</p>
                    <h3>Rauf</h3>
                </div>
            </div>
        </div>
    </div>
    <!-- TESTIMONIALS END-->
    <!-- call to action Start -->
    <div class="call-to-action">
        <h2>Lorem ipsum dolor sit amet consectetur adipisicing elit. Rem, </h2>
        <a href="#">Follow Me</a>
    </div>
    <!-- call to action END -->

    <!-- futer start -->
    <div class="footer">
        <div class="row">
            <div class="footer-col">
                <h2>Company</h2>
                <ul>
                    <li><a href="#">About Me</a></li>
                    <li><a href="#">My Service</a></li>
                    <li><a href="#">Privacy Policy</a></li>
                    <li><a href="#"> My Program</a></li>
                </ul>

            </div>
            <div class="footer-col">
                <h2>Get help</h2>
                <ul>
                    <li><a href="#">FAQ</a></li>
                    <li><a href="#">Contract</a></li>
                    <li><a href="#">Status</a></li>
                    <li><a href="#">Order</a></li>
                    <li><a href="#">Payment Options</a></li>
                </ul>
            </div>
            <div class="footer-col">
                <h2>Follow Us</h2>

                <div class="icon">
                <a href=""> <i class="fa-brands fa-facebook"></i></a>
                <a href=""> <i class="fa-brands fa-twitter"></i></a>
                <a href=""> <i class="fa-brands fa-instagram"></i></a>
                <a href=""> <i class="fa-brands fa-linkedin"></i></a>
            </div>
            </div>
        </div>
    </div>
    <div class="copy">
        <form action="">
            <p> Copyright &#169; 2022 by  <a href="https://www.facebook.com/RaufHossain.dev/">Rauf Hossain</a></p>

        </form>
        </div>
    <!-- futer end -->

                 

    <script src="main.js"></script>
</body>
</html>