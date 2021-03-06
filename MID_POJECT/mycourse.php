<?php

    if(isset($_COOKIE['status'])|| isset($_COOKIE['remstatus']))
    {
        ?>
        <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="all_designs/cources_design.css"> <link rel>
    <title>My Course</title>
</head>
<body>
    <header>
         <nav>
             <select class="comboBox">
                 <option value="Course" selected disabled hidden>Cources</option>
                 <optgroup label="Science">
                        <option value="Physics">Physics</option>
                        <option value="Chemistry">Chemistry</option>
                        <option value="Biology">Biology</option>
                        <option value="Mathematics">Mathematics</option>
                    
                 </optgroup>
                 <optgroup label="Computer Science">
                     <option value="Algorithm">Algorithm</option>
                     <option value="Data Structure">Data Structure</option>
                     <option value="Computer Fundamentals">Computer Fundamentals</option>
                     <option value="Introdouction to Programing Language">Introdouction to Programing Language</option>
                     <option value="Introduction to Database">Introduction to Database</option>

                 </optgroup>
                 <optgroup label="Programming Language">
                     <option value="C/C++">C/C++</option>
                     <option value="JAVA">JAVA</option>
                     <option value="PHYTHON">PHYTHON</option>
                     <option value="C#">C#</option>
                     <option value="PHP">PHP</option>

                 </optgroup>
             </select>
             <ul class="navigation">
                 <li class="searchBox"><input type="text" name="search" placeholder="Search.."></li>
                 <li class="logo"><a href="dashboard.php">MNP Academy</a></li>
             </ul>
         </nav>
    </header>

    <div class="verticleLine"></div>

    <main>
        <h4 class="section-heading"><a href="dashboard.php">Sirajum Munira</a></h4>
            <div class="accountStuff">
                <ul class="stuff">
                    <li><a href="profile.php">Profile</a></li>
                    <li><a href="mycourse.php">Courses</a></li>
                    
                    <li><a href="blog.php">Blogs</a></li>
                    <li><a href="logout.php">Logout</a></li>
                </ul>
            </div>

           

            <div class="editcourse">
                <button type="button" name="courcse">Edit Course</button>
            </div>
            <section>
                <h3 class="heading">My Cources</h3>
            </section>
            <div class="myCources">
                <ul class="science">
                    <h5>Science</h5>
                    <li>Physics</li>
                    <li>Mathematics</li>
                    <li>Chemistry</li>
                </ul>
                <ul class="programming language">
                    <h5>Programming Language</h5>
                    <li>C/C++</li>
                    <li>Python</li>
                </ul>
                <ul class="computer science">
                    <h5>Computer Science</h5>
                    <li>Introduction to Database</li>
                    <li>Introdouction to Programming Language</li>
                </ul>
            </div>
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
