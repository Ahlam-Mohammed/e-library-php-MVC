<div class="col-md">
    <div class="card">
        <h5 class="card-header">Add New Publisher</h5>
        <div class="card-body">
            <form action="dashboard-publishers-store" method="post" class="needs-validation" enctype="multipart/form-data" novalidate>
                <input hidden name="created_by" value="<?= \App\Config\Auth::id() ?>">
                <div class="mb-3">
                    <label class="form-label" for="bs-validation-name">Name</label>
                    <input name="name" type="text" class="form-control" id="bs-validation-name" placeholder="name publisher" required />
                    <div class="valid-feedback"> Looks good! </div>
                    <div class="invalid-feedback"> Please enter your name. </div>
                </div>
                <div class="row">
                    <div class="col-6 mb-3">
                        <label class="form-label" for="bs-validation-name">Phone</label>
                        <input name="phone" type="text" class="form-control" id="bs-validation-name" placeholder="phone publisher" required />
                        <div class="valid-feedback"> Looks good! </div>
                        <div class="invalid-feedback"> Please enter your name. </div>
                    </div>
                    <div class="col-6 mb-3">
                        <label class="form-label">Another Phone</label>
                        <input name="alt_phone" type="text" class="form-control" placeholder="alt_phone publisher"  />
                    </div>
                </div>
                <div class="row">
                    <div class="col-6 mb-3">
                        <label class="form-label" for="bs-validation-name">Email</label>
                        <input name="email" type="email" class="form-control" placeholder="email publisher"  />
                    </div>
                    <div class="col-6 mb-3">
                        <label class="form-label">Fax</label>
                        <input name="fax" type="text" class="form-control" placeholder="fax publisher"  />
                    </div>
                </div>
                <div class="row">
                    <div class="col-6 mb-3">
                        <label class="form-label" for="bs-validation-name">Country</label>
                        <input name="country" type="text" class="form-control" placeholder="country publisher" required />
                        <div class="valid-feedback"> Looks good! </div>
                        <div class="invalid-feedback"> Please enter your name. </div>
                    </div>
                    <div class="col-6 mb-3">
                        <label class="form-label">Publisher Image</label>
                        <input name="image" type="file" class="form-control" />
                    </div>
                </div>
                <div class="mb-3">
                    <label class="form-label">Address</label>
                    <textarea class="form-control" name="address" rows="3"></textarea>
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