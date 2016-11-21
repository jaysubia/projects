<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>
    </title>



</head>
<body>
        
       <h1>Welcome <?=$user['student_first_name']?></h1>

       <form action="/Students/logout" method="post">
       <fieldset><legend>Current Logged in User</legend>

       <h1>First Name:<?=$user['student_first_name']?></h1>
       <h1>Last Name:<?=$user['student_last_name']?></h1>
       <h1>Email Address:<?=$user['student_email']?></h1>
      
       </fieldset>

        <input type="submit" value="Log Out"/>

       </form>
</body>
</html>