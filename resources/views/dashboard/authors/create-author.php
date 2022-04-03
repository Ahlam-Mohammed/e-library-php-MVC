<div class="col-md">
    <div class="card">
        <h5 class="card-header">Add New Author</h5>
        <div class="card-body">
            <form action="dashboard-authors-store" method="post" class="needs-validation"  novalidate>
                <div class="mb-3">
                    <input hidden name="created_by" value="<?= \App\Config\Auth::id() ?>">
                    <label class="form-label" for="bs-validation-name">Name</label>
                    <input name="name" type="text" class="form-control" id="bs-validation-name" placeholder="Name Author" required />
                    <div class="valid-feedback"> Looks good! </div>
                    <div class="invalid-feedback"> Please enter your name. </div>
                </div>
                <div class="mb-3">
                    <label class="form-label" for="bs-validation-name">Email</label>
                    <input name="email" type="email" class="form-control" id="bs-validation-name" placeholder="Email Author" required />
                    <div class="valid-feedback"> Looks good! </div>
                    <div class="invalid-feedback"> Please enter your name. </div>
                </div>
                <div class="mb-3">
                    <label class="form-label" for="bs-validation-name">Phone</label>
                    <input name="phone" type="text" class="form-control" id="bs-validation-name" placeholder="Phone Author" required />
                    <div class="valid-feedback"> Looks good! </div>
                    <div class="invalid-feedback"> Please enter your name. </div>
                </div>
                <div class="mb-3">
                    <label class="form-label" for="bs-validation-bio">Bio</label>
                    <textarea class="form-control" id="bs-validation-bio" name="bio" rows="3" required></textarea>
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