<?php $city = $data['city']; ?>

<div class="col-md">
    <div class="card">
        <h5 class="card-header">Update City</h5>
        <div class="card-body">
            <form action="dashboard-cities-update" method="post" class="needs-validation" novalidate>
                <input hidden name="id" value="<?= $city[0]['id'] ?>">
                <div class="mb-3">
                    <label class="form-label" for="bs-validation-name">Name</label>
                    <input name="name" value="<?= $city[0]['name'] ?>" type="text" class="form-control" id="bs-validation-name" placeholder="city name" required />
                    <div class="invalid-feedback"> Please enter your name. </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <button type="submit" class="btn btn-primary">Update</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>