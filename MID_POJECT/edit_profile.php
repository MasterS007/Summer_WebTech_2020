<?php

    if(isset($_COOKIE['status'])|| isset($_COOKIE['remstatus']))
    {
        ?>
        <!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
       <link rel="stylesheet" href="all_designs/editprofile.css"><link rel>  
        <title>Edit Profile</title>
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
            
        <main>
                <h4 class="section-heading"><a href="dashboard.php">Sirajum Munira</a></h4>
                <div class="verticleLine"></div>
                <div class="accountStuff">
                    <ul class="stuff">
                        <li><a href="profile.php">Profile</a></li>
                        <li><a href="mycourse.php">Courses</a></li>
                        <li><a href="progress.html">Progress</a></li>
                        <li><a href="blog.html">Blogs</a></li>
                        <li><a href="logout.php">Logout</a></li>
                    </ul>
                </div>
                <div>
                    <form action="editprofile_check.php" method="POST">
                        <fieldset class="editfield">
                        <legend class="mainLegend"><b>EDIT PROFILE</b></legend>
                            <table class="table1">
                                <tr>
                                    <td>Name</td>
                                    <td>:</td>
                                    <td><input type="text" name="name" ></td>
                                </tr>		
                                <tr><td colspan="3"><hr/></td></tr>
                                <tr>
                                    <td>Email</td>
                                    <td>:</td>
                                    <td>
                                        <input type="text" name="email" >
                                        <abbr title="hint: sample@example.com"><b>i</b></abbr>
                                    </td>
                                </tr>		
                                <tr><td colspan="3"><hr/></td></tr>			
                                <tr>
                                    <td>Gender</td>
                                    <td>:</td>
                                    <td>	 
                                        <input name="gender" type="radio" value="Male">Male
                                        <input name="gender" type="radio" value="Female">Female
                                        <input name="gender" type="radio" value="Other">Other
                                    </td>
                                </tr>
                                <tr><td colspan="3"><hr/></td></tr>
                                <tr>
                                    <td>Date of Birth</td>
                                    <td>:</td>
                                    <td>	   
                                        <input type="text" size="2" name="date" />/
                                        <input type="text" size="2" name ="month" />/
                                        <input type="text" size="4" name = "year"/>
                                        <font size="2"><i>(dd/mm/yyyy)</i></font>
                                    </td>
                                </tr>
                            </table>	
                            <hr/>
                            <input type="submit" name= "submit" value="Submit">
                            </fieldset>
                    </form>
                       
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

