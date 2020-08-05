<!DOCTYPE html>
<html>
<head>
	<title>change_password</title>
</head>
<body>
     <form action="chekChangePass.php" method="POST"> 
            <fieldset>
                <legend><b>CHANGE PASSWORD</b></legend>
                <form>
                    <table>
                        <tr>
                            <td><font size="3">Current Password</font></td>
                            <td>:</td>
                            <td><input type="password" name ="curPass" /></td>
                            <td></td>
                        </tr>
                        <tr>
                            <td><font size="3" color="green">New Password</font></td>
                            <td>:</td>
                            <td><input type="password" name="newPass" /></td>
                            <td></td>
                        </tr>
                        <tr>
                            <td><font size="3" color="red">Retype New Password</font></td>
                            <td>:</td>
                            <td><input type="password" name="confPass" /></td>
                            <td></td>
                        </tr>
                    </table>
                    <hr />
                    <input type="submit" name="submit" value="Change"/>
                </form>
            </fieldset>		
    </form>		
</body>
</html>



