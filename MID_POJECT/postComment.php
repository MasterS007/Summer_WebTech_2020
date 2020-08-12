<?php
    if(isset($_COOKIE['status'])|| isset($_COOKIE['remstatus']))
    {
       ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="all_designs/comment.css">
    <title>Class Materials</title>
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
        <div>
            <h4 class="class_headeing">Class:Programming Language</h4>
        </div>

        <div class="class_materials">
            <ul>
                <li><a href="insideClass.php">Students</a></li>
                <li><a href="postComment.php">Post</a></li>
                <li><a href="#">Files</a></li>
                <li><a href="#">Assignments</a></li>
                <li><a href="#">Grades</a></li>
                <li><a href="#">Settings</a></li>
            </ul>
        </div>

        <div class="comments">
            <form action="comment_check.php" method="POST">
            <fieldset class="commentField">
                <?php echo "All Comments";?><hr><br>
                <?php
                     
                   $readcom =fopen("comments.txt","r+t");
                    if(filesize('comments.txt')!=0)
                    {
                        while(!feof($readcom))
                        {    
                        $showcom =fgets($readcom, filesize('comments.txt'));
                        $data = explode("/r/n",trim($showcom,"/r/n") );
                            
                            foreach($data as $value)
                            {
                                echo $value; ?><hr><br>
                                <?php
                            }
                            
                        
                                   
                        }
                    }
                    else
                    {
                        echo "no comments";
                    }
                   
                    fclose($readcom);
                ?>
            </fieldset>
            <textarea name="comment" placeholder="Write comment here"></textarea>
            <input  type="submit" name="submit" value="comment" class="btncomment">
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
