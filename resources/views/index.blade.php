<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css">
    <script src="js/app.js" defer></script>
    <link rel="stylesheet" type="text/css" href="{{url('css/style.css')}}" />
    <title>Laravel Brothers</title>
</head>
<body>
<section id="header">
    <a href="#"><img src="./img/nav-logo.png" class="logo" alt=""></a>
    <div>
        <ul id="navbar">
            <li><a href="#">Home</a></li>
            <li><a href="#aboutus">About us</a></li>
            <li><a href="#crft">Certificates</a></li>
            <li><a href="#about-head">Previous Projects</a></li>
            <li><a href="#form">Contact us</a></li>
            <li><a href="#learn">Learn</a></li>
            <li><a href="/auth"><i class="fas fa-user-plus"></i></a></li>
            <a href="#" id="close"><i class="far fa-times"></i></a>
        </ul>
    </div>
    <div id="mobile">
        <i id="bar" class="fas fa-outdent"></i>
    </div>
</section>
<!---------------------------------About us---------------------------------------------->
<section id="aboutus" class="section-p1">
    <h2>About us</h2><br>
    <p>We are Give you best service</p>
    <div class="pro-container">
        <div class="pro abuot-img">
            <img src="img/man.jpg" alt="">
        </div>
        <div class="pro">
            <div class="des" id="text-transfer">
                <h4>Anuj Srivastava</h4>
                <h5>Laravel developer</h5>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus imperdiet, nulla et dictum interdum, nisi lorem egestas vitae scel<span id="dots">...</span><span id="more">erisque enim ligula venenatis dolor. Maecenas nisl est, ultrices nec congue eget, auctor vitae massa. Fusce luctus vestibulum augue ut aliquet. Nunc sagittis dictum nisi, sed ullamcorper ipsum dignissim ac. In at libero sed nunc venenatis imperdiet sed ornare turpis. Donec vitae dui eget tellus gravida venenatis. Integer fringilla congue eros non fermentum. Sed dapibus pulvinar nibh tempor porta.</span></p>
                <button onclick="readMore()" id="myBtn" class="normal readme">Read more</button>
            </div>
        </div>
        <div class="pro abuot-img">
            <img src="img/man.jpg" alt="">
        </div>
        <div class="pro">
            <div class="des">
                <h4>Aakash Srivastava</h4>
                <h5>Laravel developer</h5>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus imperdiet, nulla et dictum interdum, nisi lorem egestas vitae scel<span id="dots-1">...</span><span id="more-1">erisque enim ligula venenatis dolor. Maecenas nisl est, ultrices nec congue eget, auctor vitae massa. Fusce luctus vestibulum augue ut aliquet. Nunc sagittis dictum nisi, sed ullamcorper ipsum dignissim ac. In at libero sed nunc venenatis imperdiet sed ornare turpis. Donec vitae dui eget tellus gravida venenatis. Integer fringilla congue eros non fermentum. Sed dapibus pulvinar nibh tempor porta.</span></p>
                <button onclick="readMore1()" id="myBtn-1" class="normal readme">Read more</button>
            </div>
        </div>
    </div>
</section>

<!------------------------------------------------------Certificate--------------------------------------------------->
    <section id="crft">
    <h1>Certificates</h1>
        <div class="crft-box">
            <div class="crft-img">
                <img src="img/crf.jpg" alt="">
            </div>
            <div class="crft-detail">
                <h4>There are some Certificates</h4>
                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Provident et necessitatibus expedita aut veritatis eligendi!</p>
                <a href="#">continue reading</a>
            </div>
        </div>
        <div class="crft-box">
            <div class="crft-img">
                <img src="img/crf.jpg" alt="">
            </div>
            <div class="crft-detail">
                <h4>There are some Certificates</h4>
                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Provident et necessitatibus expedita aut veritatis eligendi!</p>
                <a href="#">continue reading</a>
            </div>
        </div>
            <div class="crft-box">
            <div class="crft-img">
                <img src="img/crf.jpg" alt="">
            </div>
            <div class="crft-detail">
                <h4>most-huve skater sirl itema</h4>
                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Provident et necessitatibus expedita aut veritatis eligendi!</p>
                <a href="#">continue reading</a>
            </div>
        </div>
        <div class="crft-box">
            <div class="crft-img">
                <img src="img/crf.jpg" alt="">
            </div>
            <div class="crft-detail">
                <h4>how to style a quiff</h4>
                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Provident et necessitatibus expedita aut veritatis eligendi!</p>
                <a href="#">continue reading</a>
            </div>
        </div>
    </section>
<!---------------------------------------What we do------------------------------------------------------>
    <h2 class="head-about">What we do?</h2>
    <section id="about-head" class="section-p1">
        <img src="img/a6.jpg" alt="">
        <div>
            <h2>what we do?</h2>
            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Praesentium eius facere atque accusamus laboriosam, officiis possimus ut id aut ipsam sequi deserunt voluptatum aliquid culpa a maiores eveniet laudantium animi dolorem molestias et voluptatem iure? Voluptatem possimus ducimus rerum animi optio harum recusandae, nesciunt veniam, necessitatibus asperiores accusantium sapiente eveniet, ex labore! Officiis inventore repudiandae itaque! Asperiores ullam modi repellendus!</p>
            <abbr title="">Lorem ipsum dolor sit amet consectetur adipisicing elit. Eaque voluptatum nobis sapiente necessitatibus praesentium, aperiam sit quidem repellendus veritatis!</abbr>
            <br><br>
            <marquee bgcolor="#ccc" loop="-1" scrollamount="5" width="100%">Lorem ipsum dolor sit amet consectetur adipisicing elit.sequi earum modi tenetur a aliquam iure. Cumque obcaecati nostrum quibusdam?</marquee>
            <a href="#">Know more</a>
        </div>
    </section>
<!-----------------------------------------------Contact-------------------------------------------------->
    <section id="form" class="section-p1">
        <form class="input-form">
            <p>LEAVE A MASSAGE</p>
            <h3>We love to hear from you</h3>
            <input type="text" name="" placeholder="Your name" id="">
            <input type="email" name="" placeholder="E-mail" id="">
            <input type="text" name="" placeholder="Subject" id="">
            <textarea name="" id="" cols="30" rows="10" placeholder="your massage"></textarea>
            <button class="normal">Submit</button>
        </form>
    </section>
<!--------------------------------------------Learn with us---------------------------------------------------->
    <section id="learn" class="section-p1">
        <h1>learn with us :</h1>
        <div class="learn">
        <div class="cource">
            <div class="cource-img">
                <img src="img/learn/html_img.png" alt="HTML Photo">
            </div>
            <div class="cource-text">
                <h2>Learn HTML</h2>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Aut, iure? Lorem, ipsum dolor.<a href="#">...read more</a></p>
            </div>
        </div>
        <div class="cource">
            <div class="cource-img">
                <img src="img/learn/css_img.png" alt="CSS Photo">
            </div>
            <div class="text">
                <h2>Learn CSS</h2>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Aut, iure? Lorem, ipsum dolor.<a href="#">...read more</a></p>
            </div>
        </div>
        <div class="cource">
            <div class="cource-img">
                <img src="img/learn/js_img.png" alt="JAVASCRIPT Photo">
            </div>
            <div class="text">
                <h2>Learn JAVA SCRIPT</h2>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Aut, iure? Lorem, ipsum dolor.<a href="#">...read more</a></p>
            </div>
        </div>
        </div>
    </section>
<!----------------------------------------------news ----------------------------------------------------->
    <section id="newsletter" class="section-p1 section-m1">
        <div class="news-text">
            <h4>sign up for new learner</h4>
            <p>Enter your email we well Touch and <span>Give best offer</span></p>
        </div>
        <div class="form">
            <input type="email" placeholder="your email address">
            <button class="normal">sign up</button>
        </div>
    </section>
<!-----------------------------------------------footer-------------------------------------->
    <footer class="">
        <div class="footer">
            <div class="col">
                <img class="logo" src="/img/laravelbrother.png" alt="logo">
                <h4>contact</h4>
                <p><strong>address : </strong>582 wellington road, streat 32, an francisco</p>
                <p><strong>phone : </strong>+91 0987654321 / (+91)55662438</p>
                <p><strong>hours : </strong>10:00 - 20:00, Monday - Saturday</p>
                <div class="follow">
                    <h4>follow us</h4>
                    <div class="icon">
                        <i class="fab fa-facebook-f"></i>
                        <i class="fab fa-twitter"></i>
                        <i class="fab fa-instagram"></i>
                        <i class="fab fa-pinterest-p"></i>
                        <i class="fab fa-youtube"></i>
                    </div>
                </div>
            </div>
            <div class="col">
                <h4>about</h4>
                <a href="#aboutus">about us</a>
                <a href="#">delivery information</a>
                <a href="#">privacy police</a>
                <a href="#">terms & conditions</a>
                <a href="#form">countact us</a>
            </div>
            <div class="col">
                <h4>my account</h4>
                <a href="#">sign in</a>
                <a href="#">view cart</a>
                <a href="#">my wishlist</a>
                <a href="#">track my order</a>
                <a href="#">help</a>
            </div>
            <div class="col install">
                <h4>install app</h4>
                <p>from app store or google play</p>
                <div class="col">
                    <img src="img/pay/app.jpg" alt="">
                    <img src="img/pay/play.jpg" alt="">
                </div>
                <p>secured payment gateways</p>
                <img src="img/pay/pay.png" alt="">
            </div>
        </div>
    </footer>
    <div class="copyright">
        <p>&copy; 2022. Laravel Brothers- teams</p>
    </div>
</body>
</html>