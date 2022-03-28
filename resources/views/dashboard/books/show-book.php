<?php

$book      = $data['book'];
$category  = $data['category'];
$author    = $data['author'];
$publisher = $data['publisher'];

?>

<div class="row">
    <div class="col-lg-8 col-12">
        <div class="card h-100">
            <div class="card-body position-relative">
                <h5 class="card-title"><?= $book[0]['title'] ?></h5>
                <h6 class="card-subtitle text-muted mb-5"><?= $book[0]['created_at'] ?></h6>
                <a href="/dashboard-books-active?id=<?= $book[0]['id'] ?>" class="position-absolute badge <?php if($book[0]['is_active'] === 1) echo 'bg-label-primary'; else echo 'bg-label-warning'?> me-1" style="top: 4%; right: 4%">
                    <?php if($book[0]['is_active'] === 1) echo 'Active'; else echo 'NotActive'?>
                </a>
                <img class="img-fluid d-flex mx-auto my-4" src="/uploads/<?= $book[0]['image'] ?>" alt="Card image cap">
                <p class="card-text"><?= $book[0]['description'] ?></p>
                <a href="/dashboard-books-edit?id=<?= $book[0]['id'] ?>" class="card-link">Edit</a>
                <a href="/dashboard-books-delete?id=<?= $book[0]['id'] ?>" class="card-link">Delete</a>
            </div>
        </div>
    </div>
    <div class="col-lg-4 col-12">
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">Book Details</h5><hr>
                <ul class="p-0 m-0">
                    <li class="d-flex mb-4 pb-1">
                        <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
                            <div class="me-2">
                                <h6 class="mb-0">Category</h6>
                                <small class="text-muted"> <?= $category[0]['name'] ?></small>
                            </div>
                        </div>
                    </li>
                    <li class="d-flex mb-4 pb-1">
                        <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
                            <div class="me-2">
                                <h6 class="mb-0">Author</h6>
                                <small class="text-muted"> <?= $author[0]['name'] ?></small>
                            </div>
                        </div>
                    </li>
                    <li class="d-flex mb-4 pb-1">
                        <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
                            <div class="me-2">
                                <h6 class="mb-0">Publisher </h6>
                                <small class="text-muted"> <?= $publisher[0]['name'] ?></small>
                            </div>
                        </div>
                    </li>
                    <li class="d-flex mb-4 pb-1">
                        <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
                            <div class="me-2">
                                <h6 class="mb-0">Pages Number</h6>
                                <small class="text-muted"> <?= $book[0]['pages_number'] ?></small>
                            </div>
                        </div>
                    </li>
                    <li class="d-flex mb-4 pb-1">
                        <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
                            <div class="me-2">
                                <h6 class="mb-0">Quantity</h6>
                                <small class="text-muted"> <?= $book[0]['quantity'] ?></small>
                            </div>
                        </div>
                    </li>
                    <li class="d-flex mb-4 pb-1">
                        <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
                            <div class="me-2">
                                <h6 class="mb-0">Format</h6>
                                <small class="text-muted"> <?= $book[0]['format'] ?></small>
                            </div>
                        </div>
                    </li>
                    <li class="d-flex mb-4 pb-1">
                        <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
                            <div class="me-2">
                                <h6 class="mb-0">Price</h6>
                                <small class="text-muted">$ <?= $book[0]['price'] ?></small>
                            </div>
                        </div>
                    </li>
                    <li class="d-flex mb-4 pb-1">
                        <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
                            <div class="me-2">
                                <h6 class="mb-0">Created By</h6>
                                <small class="text-muted"> <?= $book[0]['quantity'] ?></small>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </div>

</div>