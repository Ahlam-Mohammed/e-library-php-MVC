<?php $book = $data['book']; ?>

<div class="col-md">
    <div class="card">
        <h5 class="card-header">Update Book</h5>
        <div class="card-body">
            <form action="dashboard-books-update" method="post" enctype="multipart/form-data" class="needs-validation" novalidate>
                <input hidden name="id" value="<?= $book[0]['id'] ?>">
                <div class="mb-3">
                    <label class="form-label" for="bs-validation-name">Title</label>
                    <input name="title" value="<?= $book[0]['title'] ?>" type="text" class="form-control" id="bs-validation-name" placeholder="title book" required />
                    <div class="invalid-feedback"> Please enter your name. </div>
                </div>
                <div class="mb-3">
                    <div class="row">
                        <div class="col-6">
                            <label class="form-label" for="bs-validation-email">Price</label>
                            <input name="price" value="<?= $book[0]['price'] ?>"  type="number" id="bs-validation-email" class="form-control" placeholder="" aria-label="john.doe" required />
                            <div class="invalid-feedback"> Please enter a valid email </div>
                        </div>
                        <div class="col-6">
                            <label class="form-label" for="bs-validation-email">Pages Number</label>
                            <input name="pages_number" value="<?= $book[0]['pages_number'] ?>" type="number" id="bs-validation-email" class="form-control" placeholder="" aria-label="john.doe" required />
                            <div class="invalid-feedback"> Please enter a valid email </div>
                        </div>
                    </div>
                </div>
                <div class="mb-3">
                    <div class="row">
                        <div class="col-6">
                            <label class="form-label" for="bs-validation-country">Category</label>
                            <a href="/dashboard-categories-create">
                                <i class="bx bx-plus me-sm-2 text-primary"></i>
                            </a>
                            <select name="category_id" class="form-select" id="bs-validation-country" required>
                                <?php foreach ($data['categories'] as $category){ ?>
                                    <option <?php if ($book[0]['category_id'] === $category['id']) echo "selected"?> value="<?= $category['id'] ?>">
                                        <?= $category['name'] ?>
                                    </option>
                                <?php } ?>
                            </select>
                            <div class="invalid-feedback"> Please select your country </div>
                        </div>
                        <div class="col-6">
                            <label class="form-label" for="bs-validation-country">Author</label>
                            <a href="/dashboard-authors-create">
                                <i class="bx bx-plus me-sm-2 text-primary"></i>
                            </a>
                            <select name="author_id" class="form-select" id="bs-validation-country" required>
                                <?php foreach ($data['authors'] as $author){ ?>
                                    <option <?php if ($book[0]['author_id'] === $author['id']) echo "selected"?> value="<?= $author['id'] ?>">
                                        <?= $author['name'] ?>
                                    </option>
                                <?php } ?>
                            </select>
                            <div class="invalid-feedback"> Please select your country </div>
                        </div>
                    </div>
                </div>
                <div class="mb-3">
                    <div class="row">
                        <div class="col-6">
                            <label class="form-label" for="bs-validation-email">Quantity</label>
                            <input name="quantity" value="<?= $book[0]['quantity'] ?>" type="number" id="bs-validation-email" class="form-control" placeholder="" aria-label="john.doe" required />
                            <div class="valid-feedback"> Looks good! </div>
                            <div class="invalid-feedback"> Please enter a valid email </div>
                        </div>
                        <div class="col-6">
                            <label class="form-label" for="bs-validation-country">Publisher</label>
                            <a href="/dashboard-publishers-create">
                                <i class="bx bx-plus me-sm-2 text-primary"></i>
                            </a>
                            <select name="publisher_id" class="form-select" id="bs-validation-country" required>
                                <option selected>Select Publisher</option>
                                <?php foreach ($data['publishers'] as $publisher){ ?>
                                    <option <?php if ($book[0]['publisher_id'] === $publisher['id']) echo "selected"?> value="<?= $publisher['id'] ?>">
                                        <?= $publisher['name'] ?>
                                    </option>
                                <?php } ?>
                            </select>
                            <div class="invalid-feedback"> Please select your country </div>
                        </div>
                    </div>
                </div>
                <div class="mb-3">
                    <label class="form-label" for="bs-validation-dob">format</label>
                    <input name="format" value="<?= $book[0]['format'] ?>" type="text" class="form-control" id="bs-validation-dob" required />
                    <div class="invalid-feedback"> Please Enter Your DOB </div>
                </div>
                <div class="mb-3">
                    <label class="form-label">Book Image</label>
                    <input name="image" value="<?= $book[0]['image'] ?>" type="file" class="form-control" />
                    <input hidden name="oldImage" value="<?= $book[0]['image'] ?>">
                </div>
                <div class="mb-3">
                    <label class="form-label" for="bs-validation-bio">Description</label>
                    <textarea class="form-control" id="bs-validation-bio" name="description" rows="3" required>
                        <?= $book[0]['description'] ?>
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