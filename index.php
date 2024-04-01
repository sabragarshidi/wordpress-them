<!DOCTYPE html>
<html  lang="<?php language_attributes() ?>">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/x-icon" href="./images/favicon.svg?">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css"/>
    <script defer src="app.js"></script>
    <title>Appvilla - App For Everyone</title>
</head>
<body>
    <div class="preloader">
        <span class="preloader__circle"></span>
        <span class="preloader__circle preloader__circle--two"></span>
    </div>

    <a href="#" class="go-top" aria-label="Go back to top"><i class="fa-solid fa-chevron-up"></i></a>
    
 <?php get_header() ?>

    <div class="testimonial">
        <img src="./images/testi-patern.svg" alt="" class="testimonial__pattern testimonial__pattern--top">
        <img src="./images/testi-patern.svg" alt="" class="testimonial__pattern testimonial__pattern--bottom">
        <div class="swiper1">
            <div class="swiper-wrapper">
                <div class="slide swiper-slide">
                    <img src="./images/brand1.svg" alt="">
                    <q>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has</q>
                    <div class="slide__profile">
                        <img src="./images/testi1.jpg" alt="">
                        <h4>Musharof Chowdhury</h4>
                        <span>CEO - Graygrids</span>
                    </div>
                </div>
                <div class="slide swiper-slide">
                    <img src="./images/brand2.svg" alt="">
                    <q>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has</q>
                    <div class="slide__profile">
                        <img src="./images/comment1.jpg" alt="">
                        <h4>Musharof Chowdhury</h4>
                        <span>CEO - Ayro UI</span>
                    </div>
                </div>
                <div class="slide swiper-slide">
                    <img src="./images/brand3.svg" alt="">
                    <q>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has</q>
                    <div class="slide__profile">
                        <img src="./images/testi3.jpg" alt="">
                        <h4>Naimur Rahman</h4>
                        <span>CEO - WpthemesGrid</span>
                    </div>
                </div>
            </div>
            <div class="swiper-pagination"></div>
        </div>
    </div>

    <section class="install">
        <h2 class="fadeFromTop">Install Appvilla and Start Using</h2>
        <p class="fadeFromTop">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable.</p>
        <div class="install__link fadeFromTop">
            <a href="#"><i class="fa-brands fa-apple"></i><span>App Store</span></a>
                <a href="#"><i class="fa-brands fa-google-play"></i><span>Google Play</span></a>
        </div>
    </section>

    <div class="faq">
        <section class="faq__text">
            <h3 class="fadeFromTop">FAQ</h3>
            <h2 class="fadeFromTop">Frequently Asked Questions</h2>
            <p class="fadeFromTop">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form.</p>
        </section>
        <div class="faq__accordion">
            <details>
                <summary>
                    <div class="question">
                        <div class="question__count">01</div>
                        <p>How do I contact customer services?</p>
                    </div>
                    <i class="fa-solid fa-plus"></i>
                    <i class="fa-solid fa-minus"></i>
                </summary>
                <p class="answer">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam consectetur sit amet ante nec vulputate.Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute.<br><br> non cupidatat skateboard dolor brunch. Foosd truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt alqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim ke ffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident.</p>
            </details>
            <details>
                <summary>
                    <div class="question">
                        <div class="question__count">02</div>
                        <p>Material types can you work with?</p>
                    </div>
                    <i class="fa-solid fa-plus"></i>
                    <i class="fa-solid fa-minus"></i>
                </summary>
                <p class="answer">Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute. non cupidatat skateboard dolor brunch. Foosd truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt alqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim ke ffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident.<br><br>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam consectetur sit amet ante nec vulputate. Nulla aliquam, justo auctor consequat tincidunt, arcu erat mattis lorem, lacinia lacinia dui enim at eros. Pellentesque ut gravida augue. Duis ac dictum tellus</p>
            </details>
            <details>
                <summary>
                    <div class="question">
                        <div class="question__count">03</div>
                        <p>Can I have multiple activities in a single feature?</p>
                    </div>
                    <i class="fa-solid fa-plus"></i>
                    <i class="fa-solid fa-minus"></i>
                </summary>
                <p class="answer">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptas expedita, repellendus est nemo cum quibusdam optio, voluptate hic a tempora facere, nihil non itaque alias similique quas quam odit consequatur.</p>
            </details>
            <details>
                <summary>
                    <div class="question">
                        <div class="question__count">04</div>
                        <p>How clients can consult through online?</p>
                    </div>
                    <i class="fa-solid fa-plus"></i>
                    <i class="fa-solid fa-minus"></i>
                </summary>
                <p class="answer">Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute. non cupidatat skateboard dolor brunch. Foosd truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt alqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et.<br><br>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Provident iure ab nisi, magnam vitae. Laboriosam laborum suscipit recusandae officia laudantium, consectetur adipisci voluptates doloremque quisquam. Id rerum iusto reprehenderit assumenda!</p>
            </details>
            <details>
                <summary>
                    <div class="question">
                        <div class="question__count">05</div>
                        <p>Can I share resources between features?</p>
                    </div>
                    <i class="fa-solid fa-plus"></i>
                    <i class="fa-solid fa-minus"></i>
                </summary>
                <p class="answer">Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute. non cupidatat skateboard dolor brunch. Foosd truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt alqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et.</p>
            </details>
        </div>
    </div>

    <div class="blogs nav-section" id="blog">
        <section class="blogs__text">
            <h3 class="fadeFromTop">Blogs</h3>
            <h2 class="fadeFromTop">Our Latest News</h2>
            <p class="fadeFromTop">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form.</p>
        </section>
        <div class="blogs__grid">
            <a href="blog.html" class="blog fadeFromTop" aria-label="blog | Appvilla">
                <div class="blog__img">
                    <img src="./images/blog-1.jpg" alt="blog">
                </div>
                <div class="blog__text">
                    <h5>Blog</h5>
                    <h4>Boost your conversion rate</h4>
                    <p>Lorem ipsum dolor sit amet, adipscing elitr, sed diam nonumy eirmod tempor ividunt dolore magna.</p>
                    <div class="blog__text-profile">
                        <img src="./images/comment1.jpg" alt="Roel Aufderhar">
                        <div>
                            <h5>Roel Aufderhar</h5>
                            <p>Mar 15,2023<span>*   </span>5 min read</p>
                        </div>
                    </div>
                </div>
            </a>
            <a href="blog.html" class="blog fadeFromTop" aria-label="blog | Appvilla">
                <div class="blog__img">
                    <img src="./images/blog-2.jpg" alt="blog">
                </div>
                <div class="blog__text">
                    <h5>Video</h5>
                    <h4>How to use search engine</h4>
                    <p>Lorem ipsum dolor sit amet, adipscing elitr, sed diam nonumy eirmod tempor ividunt dolore magna.</p>
                    <div class="blog__text-profile">
                        <img src="./images/comment2.jpg" alt="Jenifer Zuliya">
                        <div>
                            <h5>Jenifer Zuliya</h5>
                            <p>Feb 10,2023<span>*   </span>7 min read</p>
                        </div>
                    </div>
                </div>
            </a>
            <a href="blog.html" class="blog fadeFromTop" aria-label="blog | Appvilla">
                <div class="blog__img">
                    <img src="./images/blog-3.jpg" alt="blog">
                </div>
                <div class="blog__text">
                    <h5>Marketing</h5>
                    <h4>Awesome ways to boost sales</h4>
                    <p>Lorem ipsum dolor sit amet, adipscing elitr, sed diam nonumy eirmod tempor ividunt dolore magna.</p>
                    <div class="blog__text-profile">
                        <img src="./images/comment3.jpg" alt="Roel Aufderhar">
                        <div>
                            <h5>Roel Aufderhar</h5>
                            <p>Jan 20,2023<span>*   </span>6 min read</p>
                        </div>
                    </div>
                </div>
            </a>
        </div>
    </div>

    <div class="clients">
        <div class="swiper">
            <div class="swiper-wrapper">
                <div class="swiper-slide"><img src="./images/graygrids-logo.svg" alt="Graygrids"></div>
                <div class="swiper-slide"><img src="./images/lineicons-logo.svg" alt="Lineicons"></div>
                <div class="swiper-slide"><img src="./images/pagebulb-logo.svg" alt="Pagebulb"></div>
                <div class="swiper-slide"><img src="./images/graygrids-logo.svg" alt="Graygrids"></div>
                <div class="swiper-slide"><img src="./images/lineicons-logo.svg" alt="Lineicons"></div>
            </div>
        </div>
    </div>
    
    <footer>
        <div class="footer__top">
            <div class="footer__intro">
                <a href="#"><img src="./images/white-logo.svg" alt="Home | Appvilla" class="footer__intro--logo"></a>
                <p>Making the world a better place through constructing elegant hierarchies.</p>
                <ul class="footer__intro--media-links">
                    <li><a href="#" aria-label="Facebook"><i class="fa-brands fa-facebook-f"></i></a></li>
                    <li><a href="#" aria-label="Twitter"><i class="fa-brands fa-twitter"></i></a></li>
                    <li><a href="#" aria-label="Instagram"><i class="fa-brands fa-instagram"></i></a></li>
                    <li><a href="#" aria-label="Linkedin"><i class="fa-brands fa-linkedin"></i></a></li>
                    <li><a href="#" aria-label="Youtube"><i class="fa-brands fa-youtube"></i></a></li>
                    <li><a href="#" aria-label="Pinterest"><i class="fa-brands fa-pinterest"></i></a></li>
                </ul>
                <p class="footer__intro--copyright">A <a href="#">Uideck</a> design. Coded by <a href="#">Biplob Barua Rocky</a>.</p>
            </div>
            <div class="footer__grids">
                <section class="footer__grid">
                    <h3>Solutions</h3>
                    <ul class="footer__grid--list">
                        <li><a href="#">Marketing</a></li>
                        <li><a href="#">Analytics</a></li>
                        <li><a href="#">Commerce</a></li>
                        <li><a href="#">Insights</a></li>
                        <li><a href="#">Promotion</a></li>
                    </ul>
                </section>
                <section class="footer__grid">
                    <h3>Support</h3>
                    <ul class="footer__grid--list">
                        <li><a href="#">Pricing</a></li>
                        <li><a href="#">Documentation</a></li>
                        <li><a href="#">Guides</a></li>
                        <li><a href="#">API Status</a></li>
                        <li><a href="#">Live Support</a></li>
                    </ul>
                </section>
                <section class="footer__grid">
                    <h3>Company</h3>
                    <ul class="footer__grid--list">
                        <li><a href="#">About Us</a></li>
                        <li><a href="#">Our Blog</a></li>
                        <li><a href="#">Jobs</a></li>
                        <li><a href="#">Press</a></li>
                        <li><a href="#">Contact Us</a></li>
                    </ul>
                </section>
                <section class="footer__grid">
                    <h3>Legal</h3>
                    <ul class="footer__grid--list">
                        <li><a href="#">Terms & Conditions</a></li>
                        <li><a href="#">Privacy Policy</a></li>
                        <li><a href="#">Catering Services</a></li>
                        <li><a href="#">Customer Relations</a></li>
                        <li><a href="#">Innovation</a></li>
                    </ul>
                </section>
            </div>
        </div>
        <div class="newsletter">
            <div class="newsletter__text">
                <h3>Subscribe To Our Newsletter</h3>
                <p>The latest news, articles, and resources, sent to your inbox weekly.</p>
            </div>
            <form action="#" class="newsletter__form">
                <input type="email" placeholder="Your email address">
                <button type="submit">Subscribe</button>
            </form>
        </div>
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js"></script>
</body>
</html>