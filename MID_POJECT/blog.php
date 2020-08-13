<?php

    if(isset($_COOKIE['status'] )|| isset($_COOKIE['remstatus']))
    {
        ?> 
        <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="all_designs/blog_design.css"> 
    <title>Blog Post</title>
</head>
<body>
    <header>
         <nav>
             
             <ul class="navigation">
                 <li class="searchBox"><input type="text" name="search" placeholder="Search.."></li>
                 <li class="logo"><a href="dashboard.php">MNP Academy</a></li>
             </ul>
         </nav>
    </header>

        <div class="verticleLine"></div>

    <main>
    
            <section>
                <h2 class="welcomeheading">All Blogs</h2>
                
            </section>

            <section>
            <div class="all_blogs">
                <div class="blog1">
                    <a href="#">
                        <h3>Programming Language</h3>
                    </a>
                    <p>a formal symbolic system used for human communication with a digital computer. The programming language is designed to describe data (information) and algorithms (programs) for data processing by a computer. 
                       Examples of programming languages are ALGOL, COBOL, and FORTRAN; machine languages are also programming languages.
                       Programming languages occupy an intermediate position between natural languages and formal, or formalized, languages.
                       They are similar to the former in grammatical structure (use of words from natural languages, presence of a phrase structure, and so on); they resemble formal languages in the use of mathematical symbols and concepts, but most importantly because they have strict, precisely described rules for constructing texts in the programming language and expressing the meaning of such texts. The principal use of programming languages is as a means of programming, that is, for writing programs and running them on digital computers.
                    </p>
                    <a href="#" class="btn-readmore">Read More</a>
                </div>
            </div>

                <div class="blog2">
                    <a href="#">
                        <h3>Mars:The Read Planet</h3>
                    </a>
                    <p>THE RED PLANET Mars, named for the Roman god of war, has long been an omen in the night sky. 
                        And in its own way, the planet’s rusty red surface tells a story of destruction. Billions of years ago, 
                        the fourth planet from the sun could have been mistaken for Earth’s smaller twin, with liquid water on its
                         surface—and maybe even life.Now, the world is a cold, barren desert with few signs of liquid water. But after decades 
                         of study using orbiters, landers, and rovers, scientists have revealed Mars as a dynamic, windblown landscape that 
                         could—just maybe—harbor microbial life beneath its rusty surface even today.
                    </p>
                    <a href="#" class="btn-readmore">Read More</a>
                </div>
            </div>
        </section>

            
            
    </main> 
    <footer>
    </footer>
    </body>
</html>

<?php
    }
    else
    {
        header("location:login.php");
    }

?>
