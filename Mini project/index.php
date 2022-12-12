<?php
if (isset($_GET['err'])) {
  if ($_GET['err'] == 'invalid_request') {
    echo "invalid request error..";
  }

  if ($_GET['err'] == 'null') {
    echo "null username/password";
  }
}
?>

<html>

<head>
  <title>Index</title>
  <link rel="stylesheet" href="assets/style.css">
  <script src="script/login.js"></script>
</head>

<body>
  <table class="container-table">
    <tr class="top-menu-bar">
      <td class="w-20">
        <!-- <img class="logo" src="assets/common/logo.png" alt="Logo" /> -->
      </td>
      <td colspan="4" align="right">

      </td>
    </tr>
    <tr>
      <td class="w-20"></td>
      <td class="w-15"></td>
      <td class="w-30">
        <form id="login_form" method="post" action="controller/login_controller.php">
          <fieldset>
            <legend>LOGIN</legend>
            <table>
              <tr>
                <td>Id </td>
                <td>:</td>
                <td><input type="id" id="id" name="id" value="" onblur="validateId()" required></td>
              </tr>
              <tr>
                <td>Password </td>
                <td>:</td>
                <td><input type="password" id="password" name="password" value="" onblur="validatePassword()" required></td>
              </tr>
            </table>
            <hr>
            <input type="submit" id="submit" name="submit" value="Login">
            Register As 
            <a href="view/admin/registration.php" align="center">
              || Admin ||
            </a>
            <a href="view/user/registration.php" align="center">
              User ||
            </a>
          </fieldset>
          
          </div>
        </form>
      </td>
      <td class="w-15"></td>
      <td class="w-20"></td>
    </tr>
  </table>
</body>
</html>