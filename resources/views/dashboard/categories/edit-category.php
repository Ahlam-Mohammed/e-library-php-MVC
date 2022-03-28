<?php $category = $data['category']; ?>

<div class="col-md">
    <div class="card">
        <h5 class="card-header">Update Category</h5>
        <div class="card-body">
            <form action="dashboard-categories-update" method="post" enctype="multipart/form-data" class="needs-validation" novalidate>
                <input hidden name="id" value="<?= $category[0]['id'] ?>">
                <div class="mb-3">
                    <label class="form-label" for="bs-validation-name">Name</label>
                    <input name="name" value="<?= $category[0]['name'] ?>" type="text" class="form-control" id="bs-validation-name" placeholder="title book" required />
                    <div class="invalid-feedback"> Please enter your name. </div>
                </div>
                <div class="mb-3">
                    <label class="form-label">Category Image</label>
                    <input name="image" value="<?= $category[0]['image'] ?>" type="file" class="form-control" />
                    <input hidden name="oldImage" value="<?= $category[0]['image'] ?>">
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