<?php

?>

<!DOCTYPE html>
<html lang="sv">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>EdgeLedger</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link rel="stylesheet" href="./css//utilities.css">
    <link rel="stylesheet" href="./css/style.css">
</head>
<body id="home">
    <header class="hero">
        <div id="navbar" class="navbar">
            <h1 class="logo">
                <span class="text-primary"><i class="fas fa-book-open"></i> Edge</span>Ledger
            </h1>
            <nav>
                <ul>
                    <li><a href="#home">Home</a></li>
                    <li><a href="#about">About</a></li>
                    <li><a href="#cases">Cases</a></li>
                    <li><a href="#blog">Blog</a></li>
                    <li><a href="#contact">Contact</a></li>
                </ul> 
            </nav>
        </div>

        <div class="content">
            <h1>The Sky Is The Limit</h1>
            <p>We provide world class financial assistance</p> 
            <a href="#about" class="btn"><i class="fas fa-chevron-right"></i> Read more</a>
        </div>
    </header>

    <main>
        <!-- About: Ikoner -->
        <section id="about" class="icons bg-light">
            <div class="flex-items">
                <div>
                    <i class="fas fa-university fa-2x"></i>
                    <div>
                        <h3>Investment Banking</h3>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Et, id.</p>
                    </div>
                </div>
                <div>
                    <i class="fas fa-book-reader fa-2x"></i>
                    <div>
                        <h3>Portfolio Manager</h3>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Et, id.</p>
                    </div>
                </div>
                <div>
                    <i class="fas fa-pencil-alt fa-2x"></i>
                    <div>
                        <h3>Tax & Custodial</h3>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Et, id.</p>
                    </div>
                </div>
            </div>
        </section>

        <!-- About: Solutions -->
        <section class="solutions flex-columns">
            <div class="row">
                <div class="column">
                    <div class="column-1">
                        <img src="./bilder/home/people.jpg" alt="">
                    </div>
                </div>
                <div class="column">
                    <div class="column-2 bg-primary">
                        <h4>What you are looking for</h4>
                        <h2>We provide bespoke solutions</h2>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Enim dicta, a reiciendis neque repudiandae eum et nesciunt perferendis voluptatibus asperiores?</p>
                        <a href="#" class="btn btn-outline">
                            <i class="fas fa-chevron"></i> 
                            Read More
                        </a>
                    </div>
                </div>
            </div>
        </section>

        <!-- Cases -->
        <section id="cases" class="cases flex-grid section-padding">
            <header class="section-header">
                <h4>This is what we do</h4>
                <h2>Business Cases</h2>
                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Aperiam, aliquid.</p>
            </header>
            <div class="row">
                <div class="column">
                    <img src="bilder/cases/cases1.jpg" alt="">
                    <img src="bilder/cases/cases2.jpg" alt="">
                </div>
                <div class="column">
                    <img src="bilder/cases/cases3.jpg" alt="">
                    <img src="bilder/cases/cases4.jpg" alt="">
                </div>
                <div class="column">
                    <img src="bilder/cases/cases5.jpg" alt="">
                    <img src="bilder/cases/cases6.jpg" alt="">
                </div>
                <div class="column">
                    <img src="bilder/cases/cases7.jpg" alt="">
                    <img src="bilder/cases/cases8.jpg" alt="">
                </div>
            </div>
        </section>

        <!-- Blog -->
        <section id="blog" class="blog flex-columns flex-reverse">
            <div class="row">
                <div class="column">
                    <div class="column-1">
                        <img src="./bilder/home/blog.jpg" alt="">
                    </div>
                </div>
                <div class="column">
                    <div class="column-2 bg-secondary">
                        <h4>May 17 2021</h4>
                        <h2>Blog Post One</h2>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Enim dicta, a reiciendis neque repudiandae eum et nesciunt perferendis voluptatibus asperiores?</p>
                        <a href="#" class="btn btn-outline">
                            <i class="fas fa-chevron"></i> 
                            Read Our Blog
                        </a>
                    </div>
                </div>
            </div>
        </section>

        <!-- Team -->
        <section id="team" class="team section-padding">
            <header class="section-header">
                <h4>Who we are</h4>
                <h2>Our Professional Team</h2>
                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Aperiam, aliquid.</p>
            </header>
            <div class="flex-items">
                <div>
                    <img src="./bilder/team/person1.jpg" alt="">
                    <h4>John doe</h4>
                    <p>President</p>
                </div>
                <div>
                    <img src="./bilder/team/person2.jpg" alt="">
                    <h4>Jane Doe</h4>
                    <p>Vice President</p>
                </div>
                <div>
                    <img src="./bilder/team/person3.jpg" alt="">
                    <h4>Steve Smith</h4>
                    <p>Marketing Head</p>
                </div>
            </div>
        </section>

        <!-- Contact -->
        <section id="contact" class="contact flex-columns">
            <div class="row">
                <div class="column">
                    <div class="column-1">
                        <img src="./bilder/home/contact" alt="">
                    </div>
                </div>
                <div class="column">
                    <div class="column-2 bg-light">
                        <h2>Request Callback</h2>
                        <form action="" class="callback-form">
                            <div class="form-control">
                                <label for="name"></label>
                                <input type="text" name="name" id="name" placeholder="Enter name">
                            </div>
                            <div class="form-control">
                                <label for="email"></label>
                                <input type="email" name="email" id="email" placeholder="Enter email">
                            </div>
                            <div class="form-control">
                                <label for="phone"></label>
                                <input type="text" name="phone" id="phone" placeholder="Enter phone">
                            </div>
                            <input type="submit" value="Send" id="submit" class="btn">
                        </form>
                    </div>
                </div>
            </div>
        </section>
    </main>

    <footer class="footer bg-dark">
        <div class="social">
            <a href="#"><i class="fab fa-facebook fa-2x"></i></a>
            <a href="#"><i class="fab fa-instagram fa-2x"></i></a>
            <a href="#"><i class="fab fa-youtube fa-2x"></i></a>
            <a href="#"><i class="fab fa-linkedin fa-2x"></i></a>
        </div>
        <p>Copyright &copy; 2021 - EdgeLedger</p>
    </footer>
</body>
</html>