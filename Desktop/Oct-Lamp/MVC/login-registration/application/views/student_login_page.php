<!DOCTYPE html>
<html>
<head>
  <title>Login</title>
</head>
<body>

  <?=$errors?>
  <?=$this->session->flashdata('register_message')?>
  <form action="/Students/login" method="post">
    <h3>email</h3>
    <input type="text" name="email" />
    <h3>password</h3>
    <input type="password" name="password" />
    <input type="submit" value="Login" />
  </form>

   <form action="/Students/register" method="post">
    <h3>First Name</h3>
    <input type="text" name="first_name" />
    <h3>Last Name</h3>
    <input type="text" name="last_name" />
    <h3>Email Address</h3>
    <input type="text" name="email" />
    <h3>Password</h3>
    <input type="password" name="password" />
    <h3>Confirm Password</h3>
    <input type="password" name="confirm_password" />
    <input type="submit" value="register" />
  </form>
</body>
</html>