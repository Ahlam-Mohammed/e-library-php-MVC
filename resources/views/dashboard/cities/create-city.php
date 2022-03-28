<div class="col-md">
    <div class="card">
        <h5 class="card-header">Add New City</h5>
        <div class="card-body">
            <form action="dashboard-cities-store" method="post" class="needs-validation" novalidate>
                <div class="mb-3">
                    <label class="form-label" for="bs-validation-name">Name</label>
                    <input name="name" type="text" class="form-control" id="bs-validation-name" placeholder="name city" required />
                    <div class="valid-feedback"> Looks good! </div>
                    <div class="invalid-feedback"> Please enter your name. </div>
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