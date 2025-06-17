<div class="container">
    <h1 class="heading-centre mb15">SignUp</h1>

<form method="post" action="./server/requests.php">
  <div class="col-6 offset-sm-3 mb15">
    <label for="username" class="form-label">User Name</label>
    <input type="text" name="username" class="form-control" id="username" placeholder="Enter user name">
  </div>
    <div class="col-6 offset-sm-3 mb15">
    <label for="useremail" class="form-label">User Email</label>
    <input type="email" name="email" class="form-control" id="useremail" placeholder="Enter user email">
  </div>
      <div class="col-6 offset-sm-3 mb15">
    <label for="password" class="form-label">Password</label>
    <input type="password" name="password" class="form-control" id="password" placeholder="Enter password">
  </div>
  <div class="col-6 offset-sm-3 mb15">
    <label for="address" class="form-label">Address</label>
    <input type="address" name="address" class="form-control" id="address" placeholder="Enter user address">
  </div>
  <div class="col-6 offset-sm-3 mb15">
  <button type="submit" name="signup" class="btn btn-primary">Sign Up</button>
  </div>
</form>
</div>