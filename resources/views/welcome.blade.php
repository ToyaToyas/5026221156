<!DOCTYPE html>
<!--Muhammad Ali Husain Ridwan_5026221156
https://startbootstrap.com/previews/agency -->
<!--Background
https://www.uhdpaper.com/2024/05/faker-hall-of-legends-4k-5490j.html?m=0 -->

<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Agency - Start Bootstrap Theme</title>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
        <!-- Font Awesome icons (free version)-->
        <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css" />
        <link href="https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700" rel="stylesheet" type="text/css" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="css/styles.css" rel="stylesheet" />
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
        <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
        <!-- * *                               SB Forms JS                               * *-->
        <!-- * * Activate your form at https://startbootstrap.com/solution/contact-forms * *-->
        <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
        <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>
        <script>
            function validateForm(){
                var name = document.getElementById("name").value;
                var email = document.getElementById("email").value;
                var phone = document.getElementById("phone").value;
                const specialChars = /[!@#$%^&*(),.?":{}|<>]/g;
                if (specialChars.test(name)) {
                    alert("Input contains special characters!");
                    return false;
                }
            }           
        </script>
    </head>
    <body id="page-top">
        <!-- Navigation-->
        <nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav">
            <div class="container">
                <a class="navbar-brand" href="#page-top"><img src="assets/img/navbar-logo.svg" alt="..." /></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                    Menu
                    <i class="fas fa-bars ms-1"></i>
                </button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav text-uppercase ms-auto py-4 py-lg-0">
                        <li class="nav-item"><a class="nav-link" href="#trophies">Trophies</a></li>
                        <li class="nav-item"><a class="nav-link" href="#portfolio">Best Plays</a></li>
                        <li class="nav-item"><a class="nav-link" href="#journey">Journey</a></li>
                        <li class="nav-item"><a class="nav-link" href="#team">Team</a></li>
                        <li class="nav-item"><a class="nav-link" href="#contact">Contact</a></li>
                    </ul>
                </div>
            </div>
        </nav>
        <!-- Masthead-->
        <header class="masthead">
            <div class="container">
                <div class="masthead-subheading">Welcome To Our Studio!</div>
                <div class="masthead-heading text-uppercase">It's Nice To Meet You</div>
                <a class="btn btn-primary btn-xl text-uppercase" href="#trophies">Tell Me More</a>
            </div>
        </header>
        <!-- Services-->
        <section class="page-section" id="trophies">
            <div class="container">
                <div class="text-center">
                    <h2 class="section-heading text-uppercase">Trophies</h2>
                    <h3 class="section-subheading text-muted">Lorem ipsum dolor sit amet consectetur.</h3>
                </div>
                <div class="row text-center">
                    <div class="col-md-3">
                        <span class="fa-stack fa-4x" style="height: 160px;">
                            <img class="img-fluid" src="https://upload.wikimedia.org/wikipedia/en/thumb/5/5f/LOL_Worlds_logo.svg/330px-LOL_Worlds_logo.svg.png" alt="..." />
                        </span>
                        <h4 class="my-3">Worlds</h4>
                        <p class="text-muted">
                            <strong>5 Times World Champion</strong> (2013, 2015, 2016, 2023, 2024).<br>
                            -Worlds MVP (2016)<br>
                            -Worlds MVP (2024)
                        </p>
                    </div>
                    <div class="col-md-3">
                        <span class="fa-stack fa-4x" style="height: 160px;">
                            <img class="img-fluid" src="https://upload.wikimedia.org/wikipedia/commons/thumb/1/13/League_of_Legends_Champions_Korea_logo.svg/330px-League_of_Legends_Champions_Korea_logo.svg.png" alt="..." />
                        </span>
                        <h4 class="my-3">LCK</h4>
                        <p class="text-muted">
                            <strong>10 Times LCK Champion</strong><br>
                            -2× LCK Season MVP<br>
                            -LCK Finals MVP<br>
                            -LCK Player of the Year (2023)<br>
                            -LCK Mid Laner of the Year (2023)<br>
                            -2× LCK First All-Pro Team<br>
                            -2× LCK Second All-Pro Team<br>
                            -LCK Third All-Pro Team
                        </p>
                    </div>
                    <div class="col-md-3">
                        <span class="fa-stack fa-4x" style="height: 160px;">
                            <img class="img-fluid" src="https://upload.wikimedia.org/wikipedia/en/thumb/e/e7/LOL_MSI_logo.svg/225px-LOL_MSI_logo.svg.png" alt="..."/>
                        </span>
                        <h4 class="my-3">MSI</h4>
                        <p class="text-muted">
                            <strong>2 Times MSI Champion</strong> (2016, 2017)<br>
                            -MSI MVP (2016)
                        </p>
                    </div>
                    <div class="col-md-3">
                        <span class="fa-stack fa-4x" style="height: 160px;">
                            <img class="img-fluid" src="https://upload.wikimedia.org/wikipedia/commons/b/b4/Esports_World_Cup_logo.svg" alt="..." />
                        </span>
                        <h4 class="my-3">EWC</h4>
                        <p class="text-muted">
                            <strong>Esports World Cup Champion</strong> (2024).<br>
                            -Esports World Cup MVP (2024)
                        </p>
                    </div>
                </div>
            </div>
        </section>
        <!-- Portfolio Grid-->
        <section class="page-section bg-light" id="portfolio">
            <div class="container">
                <div class="text-center">
                    <h2 class="section-heading text-uppercase">Best Plays</h2>
                    <h3 class="section-subheading text-muted">Lorem ipsum dolor sit amet consectetur.</h3>
                </div>
                <div class="row">
                    <div class="col-lg-4 col-sm-6 mb-4">
                        <!-- Portfolio item 1-->
                        <div class="portfolio-item">
                            <a class="portfolio-link" data-bs-toggle="modal" href="#portfolioModal1">
                                <div class="portfolio-hover">
                                    <div class="portfolio-hover-content"><i class="fa-solid fa-play fa-2x"></i></div>
                                </div>
                                <img class="img-fluid plays" src="assets/img/portfolio/1.jpg" alt="..." />
                            </a>
                            <div class="portfolio-caption">
                                <div class="portfolio-caption-heading">Zed Mirror Outplay</div>
                                <div class="portfolio-caption-subheading text-muted">"Faker What Was That"</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6 mb-4">
                        <!-- Portfolio item 2-->
                        <div class="portfolio-item">
                            <a class="portfolio-link" data-bs-toggle="modal" href="#portfolioModal2">
                                <div class="portfolio-hover">
                                    <div class="portfolio-hover-content"><i class="fa-solid fa-play fa-2x"></i></div>
                                </div>
                                <img class="img-fluid plays" src="assets/img/portfolio/2.jpg" alt="..." />
                            </a>
                            <div class="portfolio-caption">
                                <div class="portfolio-caption-heading">Lissandra 5 Man Ult</div>
                                <div class="portfolio-caption-subheading text-muted">"Form is Temporary, Faker Is Forever"</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6 mb-4">
                        <!-- Portfolio item 3-->
                        <div class="portfolio-item">
                            <a class="portfolio-link" data-bs-toggle="modal" href="#portfolioModal3">
                                <div class="portfolio-hover">
                                    <div class="portfolio-hover-content"><i class="fa-solid fa-play fa-2x"></i></div>
                                </div>
                                <img class="img-fluid plays" src="assets/img/portfolio/3.jpg" alt="..." />
                            </a>
                            <div class="portfolio-caption">
                                <div class="portfolio-caption-heading">Azir 2017 Revenge</div>
                                <div class="portfolio-caption-subheading text-muted">"All Roads Leads To Me"</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6 mb-4 mb-lg-0">
                        <!-- Portfolio item 4-->
                        <div class="portfolio-item">
                            <a class="portfolio-link" data-bs-toggle="modal" href="#portfolioModal4">
                                <div class="portfolio-hover">
                                    <div class="portfolio-hover-content"><i class="fa-solid fa-play fa-2x"></i></div>
                                </div>
                                <img class="img-fluid plays" src="assets/img/portfolio/4.jpg" alt="..." />
                            </a>
                            <div class="portfolio-caption">
                                <div class="portfolio-caption-heading">Oriana Escape</div>
                                <div class="portfolio-caption-subheading text-muted">"With Just a Ghost"</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6 mb-4 mb-sm-0">
                        <!-- Portfolio item 5-->
                        <div class="portfolio-item">
                            <a class="portfolio-link" data-bs-toggle="modal" href="#portfolioModal5">
                                <div class="portfolio-hover">
                                    <div class="portfolio-hover-content"><i class="fa-solid fa-play fa-2x"></i></div>
                                </div>
                                <img class="img-fluid plays" src="assets/img/portfolio/5.jpg" alt="..." />
                            </a>
                            <div class="portfolio-caption">
                                <div class="portfolio-caption-heading">Azir Quadra Kill</div>
                                <div class="portfolio-caption-subheading text-muted">Website Design</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6">
                        <!-- Portfolio item 6-->
                        <div class="portfolio-item">
                            <a class="portfolio-link" data-bs-toggle="modal" href="#portfolioModal6">
                                <div class="portfolio-hover">
                                    <div class="portfolio-hover-content"><i class="fa-solid fa-play fa-2x"></i></div>
                                </div>
                                <img class="img-fluid plays" src="assets/img/portfolio/6.jpg" alt="..." />
                            </a>
                            <div class="portfolio-caption">
                                <div class="portfolio-caption-heading">Azir Ult</div>
                                <div class="portfolio-caption-subheading text-muted">Photography</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Journey -->
        <section class="page-section" id="journey">
            <div class="container">
                <div class="text-center">
                    <h2 class="section-heading text-uppercase">Journey</h2>
                    <h3 class="section-subheading text-muted">Lorem ipsum dolor sit amet consectetur.</h3>
                </div>
                <ul class="timeline">
                    <li>
                        <div class="timeline-image"><img class="rounded-circle img-fluid" src="assets/img/about/1.jpg" alt="..." /></div>
                        <div class="timeline-panel">
                            <div class="timeline-heading">
                                <h4>2013</h4>
                                <h4 class="subheading">Rookie Season Success</h4>
                            </div>
                            <div class="timeline-body"><p class="text-muted">Faker began his professional career in 2013 when he caught the attention of SK Telecom T1. Originally competing under the alias GoJeonPa, Faker joined the team as their mid laner, adopting the name Faker as his official gaming handle. In Fall 2013, SKT T1 2 represented South Korea and the SK Telecom T1 organization at the Season 3 World Championship. They had a record of 15 wins and 3 losses. SKT T1 2 faced off against China's Royal Club in the finals and won in what was one of the most lopsided finals in League of Legends history.</p></div>
                        </div>
                    </li>
                    <li class="timeline-inverted">
                        <div class="timeline-image"><img class="rounded-circle img-fluid" src="assets/img/about/2.jpg" alt="..." /></div>
                        <div class="timeline-panel">
                            <div class="timeline-heading">
                                <h4>2014-2017</h4>
                                <h4 class="subheading">Five More International Titles</h4>
                            </div>
                            <div class="timeline-body"><p class="text-muted">Faker won his second domestic title in 2014 with SK Telecom T1 after an undefeated season in the OGN Champions Winter 2013–2014. However, they faced setbacks later that year, losing in the quarterfinals of Champions Spring and Summer, and failing to qualify for the 2014 World Championship after a loss to Samsung Galaxy White. Riot Games’ new regulations led to the merger of SKT T1 K and T1 S, forming SK Telecom T1. In 2015, Faker re-signed with SKT, rejecting large offers from Chinese teams. He shared the mid-lane role with Easyhoon but reasserted his dominance by leading SKT to multiple victories, including the LCK Summer Finals and their second Worlds title, where he cemented his legacy as one of the best players in the world. Over the next few years, Faker continued to secure titles, including the 2015 Mid-Season Invitational and the 2016 World Championship, where he became the first player to win three Worlds titles. By 2017, Faker had become one of the most celebrated esports players globally, often compared to Michael Jordan. Although he suffered his first World Championship finals defeat in 2017, his achievements had already made him a legend in competitive gaming.</p></div>
                        </div>
                    </li>
                    <li>
                        <div class="timeline-image"><img class="rounded-circle img-fluid" src="assets/img/about/3.jpg" alt="..." /></div>
                        <div class="timeline-panel">
                            <div class="timeline-heading">
                                <h4>2018-2021</h4>
                                <h4 class="subheading">International Shortcomings</h4>
                            </div>
                            <div class="timeline-body"><p class="text-muted">Following a challenging 2018 season, where SKT struggled and failed to qualify for the World Championship, Faker returned in 2019 as the team rebuilt around him. SKT won the 2019 LCK Spring and Summer Splits, earning Faker his seventh and eighth domestic titles, but they were eliminated in the semifinals at both the Mid-Season Invitational and Worlds by G2 Esports. In 2020, SKT rebranded as T1, and Faker signed a three-year deal, becoming a co-owner of the organization. That year, he became the first player to secure 2,000 LCK kills and won his ninth LCK title in the Spring Split, but T1 failed to qualify for Worlds. In 2021, Faker briefly benched himself to improve his performance but later led T1 to second place in the Summer Split and helped them qualify for Worlds, where they reached the semifinals before being eliminated by DWG KIA. Throughout these seasons, Faker's legacy as one of the greatest players in esports continued to grow, solidifying his place as a legend in competitive League of Legends.</p></div>
                        </div>
                    </li>
                    <li class="timeline-inverted">
                        <div class="timeline-image"><img class="rounded-circle img-fluid" src="assets/img/about/4.jpg" alt="..." /></div>
                        <div class="timeline-panel">
                            <div class="timeline-heading">
                                <h4>2022-present</h4>
                                <h4 class="subheading">Fourth Worlds Title</h4>
                            </div>
                            <div class="timeline-body"><p class="text-muted">In the 2022 offseason, Faker turned down a $20 million offer from a Chinese team to stay with T1. In his 10th year, he achieved milestones like 2,500 kills, 700 games, and 1,000 professional matches. T1 went undefeated in the Spring Split and won their 10th LCK title, though they lost in the MSI finals. Faker set records for 500 LCK wins and most kills at Worlds but lost the 2022 Worlds final to DRX. In 2023, despite an arm injury sidelining him, he returned to lead T1 to the LCK Summer finals and won his record-breaking fourth Worlds title. By 2024, he became the first player to reach 600 LCK wins, 3,000 kills, and 5,000 assists.</p></div>
                        </div>
                    </li>
                    <li class="timeline-image">
                        <div class="timeline-image">
                            <h4>
                                Be Part
                                <br />
                                Of Our
                                <br />
                                Story!
                            </h4>
                        </div>
                        <div class="timeline-panel">
                            <div class="timeline-heading">
                                <h4>Present-Future</h4>
                                <h4 class="subheading">5th Worlds???</h4>
                            </div>
                            <div class="timeline-body"><p class="text-muted">Yes Sir 5th worlds achieved!</p></div>
                        </div>
                    </li>
                </ul>
            </div>
        </section>
        <!-- Team-->
        <section class="page-section bg-light" id="team">
            <div class="container">
                <div class="text-center">
                    <h2 class="section-heading text-uppercase">Our Amazing Team</h2>
                    <h3 class="section-subheading text-muted">Lorem ipsum dolor sit amet consectetur.</h3>
                </div>
                <div class="row">
                    <div class="col-lg-4">
                        <div class="team-member">
                            <img class="mx-auto rounded-circle" src="https://lolshop.net/cdn/shop/files/Seraphine-Illustration-Icon-Lol-Shop-99523657.jpg?v=1723813801&width=713" alt="..." />
                            <h4>Seraphine</h4>
                            <p class="text-muted">Lead Designer</p>
                            <a class="btn btn-dark btn-social mx-2" href="https://x.com/seradotwav" target="_blank" aria-label="Seraphine Twitter Profile"><i class="fab fa-twitter"></i></a>
                            <a class="btn btn-dark btn-social mx-2" href="https://www.instagram.com/seradotwav/" target="_blank" aria-label="Seraphine Facebook Profile"><i class="fab fa-instagram"></i></a>
                            <a class="btn btn-dark btn-social mx-2" href="https://open.spotify.com/artist/4TqlcgMFDryY96KWcvrhTv?si=-kA3C14vSHaCjlJYKW7-kQ&nd=1&dlsi=0954a5e77cf24571" target="_blank" aria-label="Seraphine Spotify Profile"><i class="fa-brands fa-spotify"></i></a>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="team-member">
                            <img class="mx-auto rounded-circle" src="https://hololive.hololivepro.com/wp-content/uploads/2024/05/Gawr-Gura_list_thumb.png" alt="..." />
                            <h4>Gawr Gura</h4>
                            <p class="text-muted">Lead Marketer</p>
                            <a class="btn btn-dark btn-social mx-2" href="https://x.com/gawrgura" target="_blank" aria-label="Gawr Gura Twitter Profile">
                                <i class="fab fa-twitter"></i>
                            </a>
                            <a class="btn btn-dark btn-social mx-2" href="https://www.youtube.com/channel/UCoSrY_IQQVpmIRZ9Xf-y93g" target="_blank" aria-label="Gawr Gura Youtube Profile">
                                <i class="fa-brands fa-youtube"></i>
                            </a>
                            <a class="btn btn-dark btn-social mx-2" href="https://www.tiktok.com/@gawrgura_holoen?lang=en" target="_blank" aria-label="Gawr Gura Tiktok Profile">
                                <i class="fa-brands fa-tiktok"></i>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="team-member">
                            <img class="mx-auto rounded-circle" src="assets\img\team\me.jpg" alt="..." />
                            <h4>Ali Husain</h4>
                            <p class="text-muted">Lead Developer</p>
                            <a class="btn btn-dark btn-social mx-2" href="https://x.com/Toya_Toyas" target="_blank" aria-label="Ali Twitter Profile"><i class="fab fa-twitter"></i></a>
                            <a class="btn btn-dark btn-social mx-2" href="https://www.instagram.com/mhusain_ali/" target="_blank" aria-label="Ali Instagram Profile"><i class="fab fa-instagram"></i></a>
                            <a class="btn btn-dark btn-social mx-2" href="#!" aria-label="Ali LinkedIn Profile"><i class="fab fa-linkedin-in"></i></a>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-8 mx-auto text-center"><p class="large text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aut eaque, laboriosam veritatis, quos non quis ad perspiciatis, totam corporis ea, alias ut unde.</p></div>
                </div>
            </div>
        </section>
        <!-- Contact-->
        <section class="page-section" id="contact">
            <div class="container">
                <div class="text-center">
                    <h2 class="section-heading text-uppercase">Contact Us</h2>
                    <h3 class="section-subheading text-muted">Lorem ipsum dolor sit amet consectetur.</h3>
                </div>
                <form id="contactForm" method="get" onsubmit="return validateForm()">
                    <div class="row align-items-stretch mb-5">
                        <div class="col-md-6">
                            <div class="form-group">
                                <!-- Name input-->
                                <input class="form-control" id="name" type="text" placeholder="Your Name *"/>
                            </div>
                            <div class="form-group">
                                <!-- Email address input-->
                                <input class="form-control" id="email" type="email" placeholder="Your Email *" data-sb-validations="required,email" />
                                <div class="invalid-feedback" data-sb-feedback="email:required">An email is required.</div>
                                <div class="invalid-feedback" data-sb-feedback="email:email">Email is not valid.</div>
                            </div>
                            <div class="form-group mb-md-0">
                                <!-- Phone number input-->
                                <input class="form-control" id="phone" type="tel" placeholder="Your Phone *" data-sb-validations="required" />
                                <div class="invalid-feedback" data-sb-feedback="phone:required">A phone number is required.</div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group form-group-textarea mb-md-0">
                                <!-- Message input-->
                                <textarea class="form-control" id="message" placeholder="Your Message *" data-sb-validations="required"></textarea>
                                <div class="invalid-feedback" data-sb-feedback="message:required">A message is required.</div>
                            </div>
                        </div>
                    </div>
                    <!-- Submit success message-->
                    <!---->
                    <!-- This is what your users will see when the form-->
                    <!-- has successfully submitted-->
                    <div class="d-none" id="submitSuccessMessage">
                        <div class="text-center text-white mb-3">
                            <div class="fw-bolder">Form submission successful!</div>
                            To activate this form, sign up at
                            <br />
                            <a href="https://startbootstrap.com/solution/contact-forms">https://startbootstrap.com/solution/contact-forms</a>
                        </div>
                    </div>
                    <!-- Submit error message-->
                    <!---->
                    <!-- This is what your users will see when there is-->
                    <!-- an error submitting the form-->
                    <div class="d-none" id="submitErrorMessage">
                        <div class="text-center text-danger mb-3">Error sending message!</div>
                    </div>
                    <!-- Submit Button-->
                    <div class="text-center">
                        <input class="btn btn-primary btn-xl text-uppercase" id="submitButton" type="submit" value="Send Message">
                    </div>
                    
                </form>
            </div>
        </section>
        <!-- Footer-->
        <footer class="footer py-4">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-4 text-lg-start">Copyright &copy; Your Website 2023</div>
                    <div class="col-lg-4 my-3 my-lg-0">
                        <a class="btn btn-dark btn-social mx-2" href="#!" aria-label="Twitter"><i class="fab fa-twitter"></i></a>
                        <a class="btn btn-dark btn-social mx-2" href="#!" aria-label="Facebook"><i class="fab fa-instagram"></i></a>
                        <a class="btn btn-dark btn-social mx-2" href="#!" aria-label="LinkedIn"><i class="fab fa-linkedin-in"></i></a>
                    </div>
                    <div class="col-lg-4 text-lg-end">
                        <a class="link-dark text-decoration-none me-3" href="#!">Privacy Policy</a>
                        <a class="link-dark text-decoration-none" href="#!">Terms of Use</a>
                    </div>
                </div>
            </div>
        </footer>
        <!-- Portfolio Modals-->
        <!-- Portfolio item 1 modal popup-->
        <div class="portfolio-modal modal fade" id="portfolioModal1" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="close-modal" data-bs-dismiss="modal"><img src="assets/img/close-icon.svg" alt="Close modal" /></div>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-8">
                                <div class="modal-body">
                                    <!-- Project details-->
                                    <h2 class="text-uppercase">Project Name</h2>
                                    <p class="item-intro text-muted">Lorem ipsum dolor sit amet consectetur.</p>
                                    <video id="portfolioVideo1" class="img-fluid d-block mx-auto" controls autoplay>
                                        <source src="assets\Video\SKT T1 Faker's INSANE Zed play vs KT Ryu's Zed.mp4" type="video/mp4">
                                        Your browser does not support the video tag.
                                    </video>
                                    <p>Use this area to describe your project. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Est blanditiis dolorem culpa incidunt minus dignissimos deserunt repellat aperiam quasi sunt officia expedita beatae cupiditate, maiores repudiandae, nostrum, reiciendis facere nemo!</p>
                                    <ul class="list-inline">
                                        <li>
                                            <strong>Client:</strong>
                                            Threads
                                        </li>
                                        <li>
                                            <strong>Category:</strong>
                                            Illustration
                                        </li>
                                    </ul>
                                    <button class="btn btn-primary btn-xl text-uppercase" data-bs-dismiss="modal" type="button">
                                        <i class="fas fa-xmark me-1"></i>
                                        Close Project
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Portfolio item 2 modal popup-->
        <div class="portfolio-modal modal fade" id="portfolioModal2" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="close-modal" data-bs-dismiss="modal"><img src="assets/img/close-icon.svg" alt="Close modal" /></div>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-8">
                                <div class="modal-body">
                                    <!-- Project details-->
                                    <h2 class="text-uppercase">Project Name</h2>
                                    <p class="item-intro text-muted">Lorem ipsum dolor sit amet consectetur.</p>
                                    <video id="portfolioVideo2" class="img-fluid d-block mx-auto" controls autoplay>
                                        <source src="assets\Video\Form is temporary, FAKER is forever.mp4" type="video/mp4">
                                        Your browser does not support the video tag.
                                    </video>
                                    <p>Use this area to describe your project. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Est blanditiis dolorem culpa incidunt minus dignissimos deserunt repellat aperiam quasi sunt officia expedita beatae cupiditate, maiores repudiandae, nostrum, reiciendis facere nemo!</p>
                                    <ul class="list-inline">
                                        <li>
                                            <strong>Client:</strong>
                                            Explore
                                        </li>
                                        <li>
                                            <strong>Category:</strong>
                                            Graphic Design
                                        </li>
                                    </ul>
                                    <button class="btn btn-primary btn-xl text-uppercase" data-bs-dismiss="modal" type="button">
                                        <i class="fas fa-xmark me-1"></i>
                                        Close Project
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Portfolio item 3 modal popup-->
        <div class="portfolio-modal modal fade" id="portfolioModal3" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="close-modal" data-bs-dismiss="modal"><img src="assets/img/close-icon.svg" alt="Close modal" /></div>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-8">
                                <div class="modal-body">
                                    <!-- Project details-->
                                    <h2 class="text-uppercase">Project Name</h2>
                                    <p class="item-intro text-muted">Lorem ipsum dolor sit amet consectetur.</p>
                                    <video id="portfolioVideo3" class="img-fluid d-block mx-auto" controls autoplay>
                                        <source src="assets\Video\faker predicts ruler AZIR PLAY and wins game !!!!! WORLDS GAME 3 _ 2-1  T1 VS JDG.mp4" type="video/mp4">
                                        Your browser does not support the video tag.
                                    </video>
                                    <p>Use this area to describe your project. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Est blanditiis dolorem culpa incidunt minus dignissimos deserunt repellat aperiam quasi sunt officia expedita beatae cupiditate, maiores repudiandae, nostrum, reiciendis facere nemo!</p>
                                    <ul class="list-inline">
                                        <li>
                                            <strong>Client:</strong>
                                            Finish
                                        </li>
                                        <li>
                                            <strong>Category:</strong>
                                            Identity
                                        </li>
                                    </ul>
                                    <button class="btn btn-primary btn-xl text-uppercase" data-bs-dismiss="modal" type="button">
                                        <i class="fas fa-xmark me-1"></i>
                                        Close Project
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Portfolio item 4 modal popup-->
        <div class="portfolio-modal modal fade" id="portfolioModal4" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="close-modal" data-bs-dismiss="modal"><img src="assets/img/close-icon.svg" alt="Close modal" /></div>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-8">
                                <div class="modal-body">
                                    <!-- Project details-->
                                    <h2 class="text-uppercase">Project Name</h2>
                                    <p class="item-intro text-muted">Lorem ipsum dolor sit amet consectetur.</p>
                                    <video id="portfolioVideo3" class="img-fluid d-block mx-auto" controls autoplay>
                                        <source src="assets/Video/SKT vs Rox - Faker escape.mp4" type="video/mp4">
                                        Your browser does not support the video tag.
                                    </video>
                                    <p>Use this area to describe your project. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Est blanditiis dolorem culpa incidunt minus dignissimos deserunt repellat aperiam quasi sunt officia expedita beatae cupiditate, maiores repudiandae, nostrum, reiciendis facere nemo!</p>
                                    <ul class="list-inline">
                                        <li>
                                            <strong>Client:</strong>
                                            Lines
                                        </li>
                                        <li>
                                            <strong>Category:</strong>
                                            Branding
                                        </li>
                                    </ul>
                                    <button class="btn btn-primary btn-xl text-uppercase" data-bs-dismiss="modal" type="button">
                                        <i class="fas fa-xmark me-1"></i>
                                        Close Project
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Portfolio item 5 modal popup-->
        <div class="portfolio-modal modal fade" id="portfolioModal5" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="close-modal" data-bs-dismiss="modal"><img src="assets/img/close-icon.svg" alt="Close modal" /></div>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-8">
                                <div class="modal-body">
                                    <!-- Project details-->
                                    <h2 class="text-uppercase">Project Name</h2>
                                    <p class="item-intro text-muted">Lorem ipsum dolor sit amet consectetur.</p>
                                    <video id="portfolioVideo3" class="img-fluid d-block mx-auto" controls autoplay>
                                        <source src="assets\Video\T1 Faker Akali Outstanding Triple Kill Play Against WBG Worlds 2023 Final.mp4" type="video/mp4">
                                        Your browser does not support the video tag.
                                    </video>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Est blanditiis dolorem culpa incidunt minus dignissimos deserunt repellat aperiam quasi sunt officia expedita beatae cupiditate, maiores repudiandae, nostrum, reiciendis facere nemo!</p>
                                    <ul class="list-inline">
                                        <li>
                                            <strong>Client:</strong>
                                            Southwest
                                        </li>
                                        <li>
                                            <strong>Category:</strong>
                                            Website Design
                                        </li>
                                    </ul>
                                    <button class="btn btn-primary btn-xl text-uppercase" data-bs-dismiss="modal" type="button">
                                        <i class="fas fa-xmark me-1"></i>
                                        Close Project
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Portfolio item 6 modal popup-->
        <div class="portfolio-modal modal fade" id="portfolioModal6" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="close-modal" data-bs-dismiss="modal"><img src="assets/img/close-icon.svg" alt="Close modal" /></div>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-8">
                                <div class="modal-body">
                                    <!-- Project details-->
                                    <h2 class="text-uppercase">Project Name</h2>
                                    <p class="item-intro text-muted">Lorem ipsum dolor sit amet consectetur.</p>
                                    <video id="portfolioVideo3" class="img-fluid d-block mx-auto" controls autoplay>
                                        <source src="assets\Video\Faker is pumped up for his Massive Azir Ult.mp4" type="video/mp4">
                                        Your browser does not support the video tag.
                                    </video>
                                    <p>Use this area to describe your project. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Est blanditiis dolorem culpa incidunt minus dignissimos deserunt repellat aperiam quasi sunt officia expedita beatae cupiditate, maiores repudiandae, nostrum, reiciendis facere nemo!</p>
                                    <ul class="list-inline">
                                        <li>
                                            <strong>Client:</strong>
                                            Window
                                        </li>
                                        <li>
                                            <strong>Category:</strong>
                                            Photography
                                        </li>
                                    </ul>
                                    <button class="btn btn-primary btn-xl text-uppercase" data-bs-dismiss="modal" type="button">
                                        <i class="fas fa-xmark me-1"></i>
                                        Close Project
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <section>
        <p>Berikut adalah beberapa tautan menuju halaman lain:</p>
        <ul>
            <li><a href="{{ route('5026221156') }}">Halaman 5026221156</a></li>
            <li><a href="{{ route('style') }}">Halaman Style</a></li>
            <li><a href="{{ route('style2') }}">Halaman Style 2</a></li>
            <li><a href="{{ route('form') }}">Form</a></li>
            <li><a href="{{ route('hello') }}">Hello Page</a></li>
            <li><a href="{{ route('tugasLinktree') }}">Linktree Riot Games</a></li>
            <li><a href="{{ route('responsive1') }}">Responsive1</a></li>
        </ul>
    </section>
    </body>
</html>