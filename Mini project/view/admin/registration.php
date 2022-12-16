<?php
   
?>

<html>

<head>
  <title>Admin Registration</title>
  <link rel="stylesheet" href="../../assets/style.css">
  <script src="../../script/admin/registration.js"></script>
</head>

<body>
  <table class="container-table">
    <!-- <tr class="top-menu-bar">
      <td class="w-20">
        <img class="logo" src="../../assets/common/logo.png" alt="Logo" /
      </td>
    </tr> -->
    <tr class="top-menu-bar">
      <td class="w-20"></td>
      <td class="w-15"></td>
      <td class="w-30">
        <form id="registration_form" method="post" action="../../controller/admin/registration_controller.php">
          <fieldset>
            <legend>ADMIN REGISTRATION</legend>
            <table>
            <tr>
                <td>Id </td>
                <td>:</td>
                <td>
                  <input type="text" id="id" name="id" value="" onblur="validateId()" required></td>
              </tr>
              <tr>
                <td>Name </td>
                <td>:</td>
                <td>
                  <input type="text" id="name" name="name" value="" onblur="validateName()" required></td>
              </tr>
              <tr>
                <td>Email </td>
                <td>:</td>
                <td><input type="email" id="email" name="email" value="" onblur="validateEmail()" required></td>
              </tr>
              <tr>
                <td>Password </td>
                <td>:</td>
                <td><input type="password" id="password" name="password" value="" onblur="validatePassword()" required></td>
              </tr>
              <tr>
                <td>Confirm Password </td>
                <td>:</td>
                <td><input type="password" id="confirmPassword" name="confirmPassword" onblur="validateConfirmPassword()" required></td>
              </tr>
            </table>
            <input type="submit" id="submit" name="submit" value="Register">
            <input type="button" id="reset" name="reset" value="Reset" onclick="resetRegistration()">
            <a href = "../../index.php">
                <span> Log in </span>
            </a>
          </fieldset>
        </form>
      </td>
      <td class="w-15"></td>
      <td class="w-20"></td>
    </tr>
  </table>
</body>
</html>