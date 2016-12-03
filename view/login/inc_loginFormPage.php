
<form class="container" action="<?php echo SITE_URL; ?>auth/authenticate" method="post">
  <div class="form-group">
    <label for="inputUserName">User Name</label>
    <input type="text" class="form-control" id="inputUserName" name="userName" placeholder="User Name">
  </div>
  <div class="form-group">
    <label for="inputPassword">Password</label>
    <input type="password" class="form-control" id="inputPassword" name="password" placeholder="Password">
  </div>
  <input type="hidden" name="redirect" value="<?php echo $_SERVER['REQUEST_URI'] ?>" />
  <button type="submit" class="btn btn-default">Fuck you, log me in</button>
</form>
