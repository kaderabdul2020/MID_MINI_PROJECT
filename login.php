<!DOCTYPE html>
<html>
<head>
  <title>Login Page</title>
</head>
<body>
<form action="logcheck.php" method="post">
  <fieldset width="500px">
    <legend>LOGIN</legend>
    <table>
      <tr>
        <td>User Name</td>
        <td>: <input type="text" name="userName"></td>
      </tr>
      <tr>
        <td>Password</td>
        <td>: <input type="Password" name="pass"></td>
      </tr>
    </table>
    <hr>
    <input type="submit" name="submit">
    <a href="registration.php">Register</a>
  </fieldset>
</form>
</body>
</html>