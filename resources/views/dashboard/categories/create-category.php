<div class="col-md">
    <div class="card">
        <h5 class="card-header">Add New Category</h5>
        <div class="card-body">
            <form action="dashboard-categories-store" method="post" class="needs-validation" enctype="multipart/form-data" novalidate>
                <input hidden name="created_by" value="<?= \App\Config\Auth::id() ?>">
                <div class="mb-3">
                    <label class="form-label" for="bs-validation-name">Name</label>
                    <input name="name" type="text" class="form-control" id="bs-validation-name" placeholder="title book" required />
                    <div class="valid-feedback"> Looks good! </div>
                    <div class="invalid-feedback"> Please enter your name. </div>
                </div>
                <div class="mb-3">
                    <label class="form-label" for="bs-validation-upload-file">Category Image</label>
                    <input name="image" type="file" class="form-control" id="bs-validation-upload-file" required />
                    <div class="valid-feedback"> Looks good! </div>
                    <div class="invalid-feedback"> Please Enter Your DOB </div>
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