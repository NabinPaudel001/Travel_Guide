<!DOCTYPE html>
<html lang="en">

<head>
   
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Allura&family=Josefin+Sans&family=Lato:ital,wght@1,300&family=Ysabeau+SC&display=swap');
    </style>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="style.css">
    <meta charset="UTF-8">w
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Document</title>
</head>

<body>
    <div class="bdy">
        <nav class="navi">
            <ul>
                <span id="logo"><img src="graass.png" alt=""></span>
                <li><a href="home.php" target="_self"><i class="fa-solid fa-house"></i><span>Home</span></a></li>
                <li><a href="aboutus.html" target="_blank"><i class="fa-solid fa-users"></i>About us</a></li>
                <li><a href="booking.html" target="_blank"><i class="fa-solid fa-solid fa-sailboat"></i>Bookings</a></li>
                <li><a href="epay.html" target="_blank"><i class="fa-solid fa-money-check-dollar"></i>E-payment</a></li>
                <li><a href="contactus.html" target="_blank"><i class="fa-solid fa-address-book"></i>Contact us</a></li>
                <li><button id="login">Register</button></li>
            </ul>
        </nav>


        <span class="menu"><i class="fa-solid fa-bars"></i></span>
        <div class="below_nav">

            <i class="fa-sharp fa-solid fa-backward"></i>
            <div class="image">
                <div class="log_page">
                    <div class="contain_in">
                        <div1 class="sign_up">
                            <form action="signup.php" method="post">
                                <i class="fa-sharp fa-solid fa-circle-xmark "></i>
                                <h2>Sign Up</h2>
                                <div class="inp">
                                    <i class="fa-solid fa-user"></i>
                                    <input type="text " placeholder="Username" style="font-size: 20px;" name="username" required>
                                </div>
                                <div class="inp mail">
                                    <i class="fa-solid fa-envelope"></i>
                                    <input type="email" style="font-size: 20px;"placeholder="Email" name="Email" required>
                                </div>
                                <div class="inp">
                                    <i class="fa-solid fa-lock"></i>
                                    <input type="password " placeholder="Password" style="font-size: 20px;" name="password" required>
                                </div>
                                <div class="check">
                                    <input type="checkbox" required>
                                    <label for="">I agree to the terms & condition</label>
                                </div>
                                <button type="submit" id="btn">Sign Up</button>
                                <div class="sign_up_link">
                                    <p>Already have an account?
                                        <span class="in_link" onclick="loginshow()">Sign In</span>
                                    </p>
                                </div>
                            </form>
                        </div1>
                        <div1 class="sign_in">
                            <form action="login.php" method="POST">
                                <i class="fa-sharp fa-solid fa-circle-xmark b"></i>
                                <h2>Login</h2>
                                <div class="inp">
                                    <i class="fa-solid fa-user"></i>
                                    <input type="text " placeholder="Username" name="NAME" style="font-size: 20px;" required>
                                </div>
                                <div class="inp">
                                    <i class="fa-solid fa-lock"></i>
                                    <input type="password " placeholder="Password" name="PASS" style="font-size: 20px;" required>
                                </div>
                                <div class="check">
                                    <input type="checkbox" >
                                    <label for="">Remember me</label>
                                </div>
                                <button type="submit" id="btn" name="submit">Login</button>
                                <div class="sign_up_link">
                                    <p>Don't have an account?
                                        <span class="up_link" onclick="showsignup()">Sign Up</span>
                                    </p>
                                </div>
                            </form>
                        </div1>
                    </div>
                </div>
                <div class="search">
                    <input type="text" placeholder="Search...">
                    <a href="#"><i class="fa-solid fa-magnifying-glass"></i></a>
                </div>
            </div>
            <i class="fa-sharp fa-solid fa-forward"></i>
        </div>



        <br><br>
        <h1 style="text-align: center; font-size:5rem;font-family: 'Times New Roman', Times, serif; ">Popular Tours
            to
            discover</h1>
        <section class="flexbox1">
            <div class="flex_item">
                <div class="photo"><img src="kathmandu.webp" alt="kathmandu"></div>
                <h1 class="city">Kathmandu</h1>
                <h1 class="title">UNESCO World Heritage Site</h1>
                <p>Kathmandu, the capital and largest city in Nepal, is like no other city in the
                    world. The
                    decaying buildings in the heart of the city are a stark contrast to the lively atmosphere that
                    permeates the streets.For several hundred years, Kathmandu was one of three rival royal cities,
                    along
                    with Bhaktapur and Patan.The highlight of Kathmandu has long been Durbar Square, the largest of
                    the palace squares in the three royal cities.Kathmandu is particularly famous for its religious
                    monuments.
                </p>
                <button class="btm">Visit <span>&rarr;</span></button>
            </div>
            <div class="flex_item">
                <div class="photo"><img src="BHAKTAPUR.jpg" alt="kathmandu"></div>
                <h1 class="city">Bhaktapur</h1>
                <h1 class="title">Royal Cities</h1>
                <p>Bhaktapur, the third of the "Royal Cities," lies on the old trade route to Tibet,
                    just outside of Kathmandu. For Bhaktapur, the trade route was both an arterial link and major
                    source of wealth.n contrast to Patan and Kathmandu, the population of Bhaktapur is primarily
                    Hindu. The best place from which to begin a tour of the city is Durbar Square, where in addition
                    to the royal palace, several temples are also situated.Bhaktapur's potters.
                </p>
                <button class="btm">Visit <span>&rarr;</span></button>
            </div>
            <div class="flex_item">
                <div class="photo"><img src="pokhara.jpg" alt="kathmandu"></div>
                <h1 class="city">Pokhara</h1>
                <h1 class="title">Himalayan range and lakes</h1>
                <p>Set at the base of the foothills and surrounded by some of the highest mountains in
                    the world – Dhaulagiri, Manaslu, and Annapurna I – Pokhara is one of Nepal's most scenic cities.
                    For trekkers, Pokhara is the gateway to the Himalayas and the starting point for treks to Jomsom
                    and the Annapurna region. It's also a wonderful spot to relax for a bit.The Pokhara is best
                    known
                    for
                    the stunning view of the Annapurna range.t is perhaps one of the few places on earth from where
                    mountains above 6,000 m
                </p>
                <button class="btm">Visit <span>&rarr;</span></button>
            </div>
        </section>
        <section class="flexbox1">
            <div class="flex_item">
                <div class="photo"><img src="annapurna.jpg" alt="kathmandu"></div>
                <h1 class="city">Annapurna</h1>
                <h1 class="title">Trekking in the Annapurna Region</h1>
                <p>The Annapurna Region is one of the most popular trekking regions in Nepal, with
                    options that range from a few days to a few weeks. Three main routes in the Annapurna Region
                    intersect and combine in places, and you can opt to do a portion or a variation on the routes.
                </p>
                <button class="btm">Visit <span>&rarr;</span></button>
            </div>
            <div class="flex_item">
                <div class="photo"><img src="chitwan.jpg" alt="kathmandu"></div>
                <h1 class="city">Chitwan</h1>
                <h1 class="title">Chitwan National Park</h1>
                <p>Chitwan National Park is the place to come to experience a different side of Nepal.
                    This is a wonderful place for wildlife viewing and it has a safari-type atmosphere. At an
                    altitude of only 100 meters in some areas.The park
                    is home to rhinos, Bengal tigers, leopards, sloth bears, gaur (buffalo), deer, and many other
                    critters.
                </p>
                <button class="btm">Visit <span>&rarr;</span></button>
            </div>
            <div class="flex_item">
                <div class="photo"><img src="everest.jpg" alt="kathmandu"></div>
                <h1 class="city">Solukhumbu</h1>
                <h1 class="title">Everest & the Trek to Base Camp</h1>
                <p>The summit of Mount Everest, reaches 8,848 meters
                    (29,028 feet) high. Trekking in the Mount Everest area became popular following the now
                    legendary first ascent of the peak. There are various routes to access base camp and
                    several options for organizing a trip.Mount Everest is the highest peak in the world which
                    stands at
                    8848 m high altitude from sea level.
                </p>
                <button class="btm">Visit <span>&rarr;</span></button>
            </div>
        </section>
    </div>
    <div class="whole">
        <h1>Our team</h1>
        <div class="team">
            <div class="member">
                <div class="mem_image">
                    <img src="me-modified.png" alt="sanjib">
                </div>
                <h3>Sanjib shah</h3>
                <p class="discription">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Molestias maxime
                    vero
                    voluptatibus libero totam, veritatis necessitatibus modi, architecto, numquam laborum nemo
                    deleniti
                    quidem cum impedit neque explicabo culpa. Repudiandae aliquid praesentium enim quas voluptate
                    blanditiis distinctio, beatae corporis, ipsa dolore, consectetur accusantium ab molestias qui
                    rerum
                    pariatur officia molestiae! Sint!</p>
            </div>
            <div class="member">
                <div class="mem_image">
                    <img src="nabinhency.png" alt="nabin">
                </div>
                <h3>Nabin paudel</h3>
                <p class="discription">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Molestias maxime
                    vero
                    voluptatibus libero totam, veritatis necessitatibus modi, architecto, numquam laborum nemo
                    deleniti
                    quidem cum impedit neque explicabo culpa. Repudiandae aliquid praesentium enim quas voluptate
                    blanditiis distinctio, beatae corporis, ipsa dolore, consectetur accusantium ab molestias qui
                    rerum
                    pariatur officia molestiae! Sint!</p>
            </div>
            <div class="member">
                <div class="mem_image">
                    <img src="shikshya-modified.png" alt="shikshya">
                </div>
                <h3>Shikshya KC</h3>
                <p class="discription">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Molestias maxime
                    vero
                    voluptatibus libero totam, veritatis necessitatibus modi, architecto, numquam laborum nemo
                    deleniti
                    quidem cum impedit neque explicabo culpa. Repudiandae aliquid praesentium enim quas voluptate
                    blanditiis distinctio, beatae corporis, ipsa dolore, consectetur accusantium ab molestias qui
                    rerum
                    pariatur officia molestiae! Sint!</p>
            </div>
        </div>
    </div>
    <div class="footer">
        <div class="footer_a">
            <i class="fa-solid fa-location-dot"></i> <b>32 street Koteshwor<br> </b><b
                id="just_me">Kathmandu,Nepal</b><br><br>
            <i class="fa-solid fa-phone"></i><b>+977-9765565872</b> <br><br>
            <i class="fa-solid fa-envelope"></i><b id="mail"><a
                    href="mailto:sanjibshah007@gmail.com" style="text-decoration: none;">support@travelnepal.com</a></b>
        </div>
        <div class="footer_b">
            <h3>About the company</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ducimus nulla molestias placeat dolore, ex
                ipsum
                atque
                minus natus rem Lorem ipsum dolor sit amet consectetur adipisicing elit. Obcaecati hic dolor tempore
                eos
                earum. Velit vitae doloremque ducimus impedit sit! 
            </p>
            <div class="icon"><i class="fa-brands fa-facebook"></i><i class="fa-brands fa-twitter"></i>
                <i class="fa-brands fa-linkedin-in"></i><i class="fa-brands fa-github"></i>
            </div>
        </div>
    </div>
    <script src="scripting.js"></script>
</body>

</html>