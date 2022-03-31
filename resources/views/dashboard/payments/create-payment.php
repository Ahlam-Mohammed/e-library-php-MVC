<div class="col-md">
    <div class="card">
        <h5 class="card-header">Add New Payment</h5>
        <div class="card-body">
            <form action="dashboard-payments-store" method="post" class="needs-validation" enctype="multipart/form-data" novalidate>
                <div class="mb-3">
                    <label class="form-label" for="bs-validation-name">Nmae</label>
                    <input name="name" type="text" class="form-control" id="bs-validation-name" placeholder="name payment" required />
                    <div class="valid-feedback"> Looks good! </div>
                    <div class="invalid-feedback"> Please enter your name. </div>
                </div>
                <div class="mb-3">
                    <label class="form-label" for="bs-validation-upload-file">image</label>
                    <input name="image" type="file" class="form-control" id="bs-validation-upload-file" required />
                    <div class="valid-feedback"> Looks good! </div>
                    <div class="invalid-feedback"> Please Enter Your DOB </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <button type="submit" class="btn btn-primary">save</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>