
<?php require APPROOT.'/views/inc/header.php'; ?>
<h1> Create An Account</h1>

<form action="<?=URLROOT?>/users/register" method="post">
  <p>Name <input type="text" name="name" ></p>
  <p>Email <input type="text" name="email" ></p>
  <p>Password <input type="password" name="password" ></p>
  <p>Confirm password <input type="password" name="confirm_password" ></p>
  <p><input type="submit" name="submit" ></p>
</form>
<?php require APPROOT.'/views/inc/footer.php'; ?>