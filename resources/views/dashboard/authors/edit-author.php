<?php $author = $data['author']; ?>

<div class="col-md">
    <div class="card">
        <h5 class="card-header">Update Author</h5>
        <div class="card-body">
            <form action="dashboard-authors-update" method="post" class="needs-validation" novalidate>
                <input hidden name="id" value="<?= $author[0]['id'] ?>">
                <div class="mb-3">
                    <label class="form-label" for="bs-validation-name">Name</label>
                    <input name="name" value="<?= $author[0]['name'] ?>" type="text" class="form-control" id="bs-validation-name" placeholder="Name Author" required />
                    <div class="invalid-feedback"> Please enter your name. </div>
                </div>
                <div class="mb-3">
                    <label class="form-label" for="bs-validation-name">Email</label>
                    <input name="email" value="<?= $author[0]['email'] ?>" type="email" class="form-control" id="bs-validation-name" placeholder="Email Author" required />
                    <div class="invalid-feedback"> Please enter your name. </div>
                </div>
                <div class="mb-3">
                    <label class="form-label" for="bs-validation-name">Phone</label>
                    <input name="phone" value="<?= $author[0]['phone'] ?>" type="text" class="form-control" id="bs-validation-name" placeholder="Phone Author" required />
                    <div class="invalid-feedback"> Please enter your name. </div>
                </div>
                <div class="mb-3">
                    <label class="form-label" for="bs-validation-bio">Bio</label>
                    <textarea class="form-control" id="bs-validation-bio" name="bio" rows="3" required>
                        <?= $author[0]['bio'] ?>
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