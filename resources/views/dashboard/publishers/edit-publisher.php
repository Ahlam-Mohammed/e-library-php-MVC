<?php $publisher = $data['publisher']; ?>

<div class="col-md">
    <div class="card">
        <h5 class="card-header">Update Publisher</h5>
        <div class="card-body">
            <form action="dashboard-publishers-update" method="post" class="needs-validation" enctype="multipart/form-data" novalidate>
                <input hidden name="id" value="<?= $publisher[0]['id'] ?>">
                <div class="mb-3">
                    <label class="form-label" for="bs-validation-name">Name</label>
                    <input value="<?= $publisher[0]['name'] ?>" name="name" type="text" class="form-control" id="bs-validation-name" placeholder="name publisher" required />
                    <div class="valid-feedback"> Looks good! </div>
                    <div class="invalid-feedback"> Please enter your name. </div>
                </div>
                <div class="row">
                    <div class="col-6 mb-3">
                        <label class="form-label" for="bs-validation-name">Phone</label>
                        <input value="<?= $publisher[0]['phone'] ?>" name="phone" type="text" class="form-control" id="bs-validation-name" placeholder="phone publisher" required />
                        <div class="valid-feedback"> Looks good! </div>
                        <div class="invalid-feedback"> Please enter your name. </div>
                    </div>
                    <div class="col-6 mb-3">
                        <label class="form-label">Another Phone</label>
                        <input value="<?= $publisher[0]['alt_phone'] ?>" name="alt_phone" type="text" class="form-control" placeholder="alt_phone publisher"  />
                    </div>
                </div>
                <div class="row">
                    <div class="col-6 mb-3">
                        <label class="form-label" for="bs-validation-name">Email</label>
                        <input value="<?= $publisher[0]['email'] ?>" name="email" type="email" class="form-control" placeholder="email publisher"  />
                    </div>
                    <div class="col-6 mb-3">
                        <label class="form-label">Fax</label>
                        <input value="<?= $publisher[0]['fax'] ?>" name="fax" type="text" class="form-control" placeholder="fax publisher"  />
                    </div>
                </div>
                <div class="row">
                    <div class="col-6 mb-3">
                        <label class="form-label" for="bs-validation-name">Country</label>
                        <input value="<?= $publisher[0]['country'] ?>" name="country" type="text" class="form-control" placeholder="country publisher" required />
                        <div class="valid-feedback"> Looks good! </div>
                        <div class="invalid-feedback"> Please enter your name. </div>
                    </div>
                    <div class="col-6 mb-3">
                        <label class="form-label">Publisher Image</label>
                        <input name="image" value="<?= $publisher[0]['image'] ?>" type="file" class="form-control" />
                        <input hidden name="oldImage" value="<?= $publisher[0]['image'] ?>">
                    </div>
                </div>
                <div class="mb-3">
                    <label class="form-label">Address</label>
                    <textarea class="form-control" name="address" rows="3">
                        <?= $publisher[0]['address'] ?>
                    </textarea>
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