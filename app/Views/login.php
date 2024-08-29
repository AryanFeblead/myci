<div class="container">
<form action="<?= site_url('verifylogin') ?>" method="post">
  <div class="form-group mt-5">
    <label for="exampleInputEmail1">Email address</label>
    <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email" value="<?= esc(session()->getFlashdata('email')) ?>">
    <?php if(session()->has('errors')): ?>
                            <div id="val_name" style="color:red;">
                            <?= session()->getFlashdata('errors')['email'] ?? '' ?>
                            </div>
                            <?php endif; ?>
  </div>
  <div class="form-group mt-3">
    <label for="exampleInputPassword1">Password</label>
    <input type="password" name="pass" class="form-control" id="exampleInputPassword1" placeholder="Password">
    <?php if(session()->has('errors')): ?>
          <div id="val_name" style="color:red;">
            <?= session()->getFlashdata('errors')['pass'] ?? '' ?>
          </div>
    <?php endif; ?>
  </div>
  <button type="submit" class="btn btn-primary mt-4">Submit</button>
</form>
</div>