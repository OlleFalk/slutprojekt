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
    </main>
</body>
</html>