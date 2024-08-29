<div class="container">
<form id="create_user_form" class="mt-3" method="post" action="<?= site_url('store') ?>">
                        <div class="mb-3">
                            <label for="" class="form-label">Username</label>
                            <input type="text" name="username" class="form-control" id="emp_name" value="<?php echo isset(session()->getFlashdata('data')['username']) ? esc(session()->getFlashdata('data')['username']) : ''; ?>">
                            <?php if(session()->has('errors')): ?>
                            <div id="val_name" style="color:red;">
                                <?= session()->getFlashdata('errors')['username'] ?? '' ?>
                            </div>
                            <?php endif; ?>
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Email address</label>
                            <input type="email" name="email" class="form-control" id="emp_email" aria-describedby="emailHelp" value="<?php echo isset(session()->getFlashdata('data')['email']) ? esc(session()->getFlashdata('data')['email']) : ''; ?>">
                            <?php if(session()->has('errors')): ?>
                            <div id="val_name" style="color:red;">
                            <?= session()->getFlashdata('errors')['email'] ?? '' ?>
                            </div>
                            <?php endif; ?>
                        </div>
                        <div class="mb-3">
                            <label for="" class="form-label">Phone no.</label>
                            <input type="number" name="phone" class="form-control" id="emp_phone" value="<?php echo isset(session()->getFlashdata('data')['phone']) ? esc(session()->getFlashdata('data')['phone']) : ''; ?>">
                            <?php if(session()->has('errors')): ?>
                            <div id="val_name" style="color:red;">
                            <?= session()->getFlashdata('errors')['phone'] ?? '' ?>
                            </div>
                            <?php endif; ?>
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label">Password</label>
                            <input type="password" name="pass" class="form-control" id="emp_password">
                            <?php if(session()->has('errors')): ?>
                            <div id="val_name" style="color:red;">
                            <?= session()->getFlashdata('errors')['pass'] ?? '' ?>
                            </div>
                            <?php endif; ?>
                        </div>
                        <div class="mb-3">
                            <label for="" class="form-label">Gender -:</label>
                            <label for="" class="form-label">Male</label>
                            <input type="radio" class="emp_role" name="gender" id="gen" value="male" <?php echo (isset(session()->getFlashdata('data')['gender']) && session()->getFlashdata('data')['gender'] === 'male') ? 'checked' : ''; ?>>
                            <label for="" class="form-label">Female</label>
                            <input type="radio" class="emp_role" name="gender" id="gen1" value="female" <?php echo (isset(session()->getFlashdata('data')['gender']) && session()->getFlashdata('data')['gender'] === 'female') ? 'checked' : ''; ?>>
                            <?php if(session()->has('errors')): ?>
                            <div id="val_name" style="color:red;">
                            <?= session()->getFlashdata('errors')['gender'] ?? '' ?>
                            </div>
                            <?php endif; ?>
                        </div>
                        <div class="mb-3">
                            <label for="" class="form-label">Hobbie -:</label>
                            <label for="" class="form-label">Cricket</label>
                            <input type="checkbox" class="emp_role" name="hobbies[]" id="hob" value="cricket">
                            <label for="" class="form-label">Football</label>
                            <input type="checkbox" class="emp_role" name="hobbies[]" id="hob1" value="football">
                            <?php if(session()->has('errors')): ?>
                            <div id="val_name" style="color:red;">
                            <?= session()->getFlashdata('errors')['hobbies'] ?? '' ?>
                            </div>
                            <?php endif; ?>
                        </div>
                        <button id="add_user" class="btn btn-primary">Add User</button>
                    </form>
</div>