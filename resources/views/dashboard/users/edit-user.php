<?php $user = $data['user']; ?>
<div class="col-md">
    <div class="card">
        <h5 class="card-header">Update User</h5>
        <div class="card-body">
            <form action="dashboard-users-update" method="post" class="needs-validation"  novalidate>
                <input hidden name="id" value="<?= $user[0]['id'] ?>">
                <div class="mb-3">
                    <div class="row">
                        <div class="col-6">
                            <label class="form-label" for="bs-validation-name">Name</label>
                            <input value="<?= $user[0]['name'] ?>" name="name" type="text" class="form-control" id="bs-validation-name" placeholder="Name Author" required />
                            <div class="valid-feedback"> Looks good! </div>
                            <div class="invalid-feedback"> Please enter your name. </div>
                        </div>
                        <div class="col-6">
                            <label class="form-label" for="bs-validation-name">Email</label>
                            <input value="<?= $user[0]['email'] ?>" name="email" type="email" class="form-control" id="bs-validation-name" placeholder="Email User" required />
                            <div class="valid-feedback"> Looks good! </div>
                            <div class="invalid-feedback"> Please enter your name. </div>
                        </div>
                    </div>
                </div>
                <div class="mb-3">
                    <div class="row">
                        <div class="col-6">
                            <label class="form-label" for="bs-validation-country">Role</label>
                            <select name="role_id" class="form-select" id="bs-validation-country" required>
                                <option disabled selected>Select Role</option>
                                <?php foreach ($data['roles'] as $role){ ?>
                                    <option <?php if ($user[0]['role_id'] === $role['id']) echo "selected"?> value="<?= $role['id'] ?>">
                                        <?= $role['name'] ?>
                                    </option>
                                <?php } ?>
                            </select>
                            <div class="valid-feedback"> Looks good! </div>
                            <div class="invalid-feedback"> Please select your country </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <button type="submit" class="btn btn-primary">Save</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>