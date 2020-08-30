<?php

    if(isset($_COOKIE['status'])|| isset($_COOKIE['remstatus']))
    {
?> 

<!DOCTYPE html>
<html lang="en"> 
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="all_designs/students.css"> 
    <title>Students</title>
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
                 <li class="logo"><a href="../view/dashboard.php">MNP Academy</a></li>
             </ul>
         </nav>
    </header>

        <div class="verticleLine"></div>

    <main>
       
        <h4 class="section-heading"><a href="../view/dashboard.php"><?php echo $_COOKIE['name'];?></a></h4>
            <div class="accountStuff">
                <ul class="stuff">
                    <li><a href="../view/profile.php">Profile</a></li>
                    <li><a href="../view/mycourse.php">Courses</a></li>
                    <li><a href="../view/blog.php">Blogs</a></li>
                    <li><a href="./php_and_js/php/logout.php">Logout</a></li>
                </ul>
            </div>
            <section>
                <h2 class="welcomeheading">Welcome <?php echo $_COOKIE['name'];?></h2>  
            </section>

            <div class="wel">  
                  
                <ul class="wlist">
                    <li><a href="../view/dashboard.php">Classes</a></li>
                    <li><a href="../view/allstudent.php">Students</a></li>
                    <li><a href="#">Tips</a></li>
                </ul> 
                <hr>
           </div>

           <div class="students-list">
            <form>
                <fieldset>
                    <legend class="title">Students List</legend>
                   <table class="student_table">
                    <tr >
                        <th calss="sHeading">Student Name</th>
                        <th calss="sHeading">Email</th>
                        <th calss="sHeading">Class</th>
                    </tr>
                    <tr>
                        <td colspan="3"><hr></td>
                    </tr>
                    <tr>
                        <td>Kakashi Hatake</td>
                        <td>hatake12@gmail.com</td>
                        <td>Science</td>
                    </tr>
                    <tr>
                        <td colspan="3"><hr></td>
                    </tr>
                    <tr>
                        <td>Tanjiro Kamado</td>
                        <td>tanjiro@gmail.com</td>
                        <td>Programming Language</td>
                    </tr>
                    
                    <tr>
                        <td colspan="3"><hr></td>
                    </tr>
                    <tr>
                        <td>Nezuko Kamado</td>
                        <td>nezuko5@gmail.com</td>
                        <td>Programming Language</td>
                    </tr>
                    <tr>
                        <td colspan="3"><hr></td>
                    </tr>
                   </table>
            
    </main> 
    <footer>
    </footer>

    </body>
</html>

<?php
    }
    else
    {
        header("location:../view/login.php");
    }

?>

