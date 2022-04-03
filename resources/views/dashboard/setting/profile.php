<div class="row w-75 m-auto">
    <div class="col-md-12">
        <div class="card mb-4">
            <h5 class="card-header">Profile Details</h5>
            <hr class="my-0">
            <div class="card-body">
                <form action="/profile-update" id="formAccountSettings" method="POST">
                    <div class="row">
                        <div class="mb-3 col-md-12">
                            <label for="firstName" class="form-label"> Name</label>
                            <input class="form-control" type="text" id="firstName" name="name" value="<?= \App\Config\Auth::name() ?>" autofocus />
                        </div>
                        <div class="mb-3 col-md-12">
                            <label for="email" class="form-label">E-mail</label>
                            <input class="form-control" type="text" id="email" name="email" value="<?= \App\Config\Auth::email() ?>" placeholder="john.doe@example.com" />
                        </div>
                    <div class="mt-2">
                        <button type="submit" class="btn btn-primary me-2">Save changes</button>
                        <button type="reset" class="btn btn-label-secondary">Cancel</button>
                    </div>
                </form>
            </div>
            <!-- /Account -->
        </div>

    </div>
</div>

<div class="row">
    <div class="col-md-12">
        <!-- Change Password -->
        <div class="card mb-4">
            <h5 class="card-header">Change Password</h5>
            <div class="card-body">
                <form action="/resetPassword" id="formAccountSettings" method="POST">
                    <div class="row">
                        <div class="mb-3 col-md-12 form-password-toggle">
                            <label class="form-label" for="newPassword">New Password</label>
                            <div class="input-group input-group-merge">
                                <input class="form-control" type="password" id="newPassword" name="password" placeholder="&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;" />
                                <span class="input-group-text cursor-pointer"><i class="bx bx-hide"></i></span>
                            </div>
                        </div>

                        <div class="col-12 mt-1">
                            <button type="submit" class="btn btn-primary me-2">Save changes</button>
                            <button type="reset" class="btn btn-label-secondary">Cancel</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <!--/ Change Password -->


    </div>
</div>