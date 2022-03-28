<?php $publisher = $data['publisher']; ?>

<div class="row">
    <div class="col-lg-8 col-12">
        <div class="card h-100">
            <div class="card-body position-relative">
                <h5 class="card-title"><?= $publisher[0]['name'] ?></h5>
                <h6 class="card-subtitle text-muted mb-5"><?= $publisher[0]['created_at'] ?></h6>
                <a href="/dashboard-publishers-active?id=<?= $publisher[0]['id'] ?>" class="position-absolute badge <?php if($book[0]['is_active'] === 1) echo 'bg-label-primary'; else echo 'bg-label-warning'?> me-1" style="top: 4%; right: 4%">
                    <?php if($publisher[0]['is_active'] === 1) echo 'Active'; else echo 'NotActive'?>
                </a>
                <img class="img-fluid d-flex mx-auto my-4" src="/uploads/<?= $publisher[0]['image'] ?>" alt="Card image cap">
                <a href="/dashboard-publishers-edit?id=<?= $publisher[0]['id'] ?>" class="card-link">Edit</a>
                <a href="/dashboard-publishers-delete?id=<?= $publisher[0]['id'] ?>" class="card-link">Delete</a>
            </div>
        </div>
    </div>
    <div class="col-lg-4 col-12">
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">Publisher Details</h5><hr>
                <ul class="p-0 m-0">
                    <li class="d-flex mb-4 pb-1">
                        <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
                            <div class="me-2">
                                <h6 class="mb-0">Publisher Phone</h6>
                                <small class="text-muted"> <?= $publisher[0]['phone'] ?></small>
                            </div>
                        </div>
                    </li>
                    <li class="d-flex mb-4 pb-1">
                        <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
                            <div class="me-2">
                                <h6 class="mb-0">Publisher Alt-Phone</h6>
                                <small class="text-muted"> <?= $publisher[0]['alt_phone'] ?></small>
                            </div>
                        </div>
                    </li>
                    <li class="d-flex mb-4 pb-1">
                        <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
                            <div class="me-2">
                                <h6 class="mb-0">Publisher Email</h6>
                                <small class="text-muted"> <?= $publisher[0]['email'] ?></small>
                            </div>
                        </div>
                    </li>
                    <li class="d-flex mb-4 pb-1">
                        <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
                            <div class="me-2">
                                <h6 class="mb-0">Publisher Fax</h6>
                                <small class="text-muted"> <?= $publisher[0]['fax'] ?></small>
                            </div>
                        </div>
                    </li>
                    <li class="d-flex mb-4 pb-1">
                        <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
                            <div class="me-2">
                                <h6 class="mb-0">Publisher Country</h6>
                                <small class="text-muted"> <?= $publisher[0]['country'] ?></small>
                            </div>
                        </div>
                    </li>
                    <li class="d-flex mb-4 pb-1">
                        <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
                            <div class="me-2">
                                <h6 class="mb-0">Publisher Address</h6>
                                <small class="text-muted"> <?= $publisher[0]['address'] ?></small>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </div>

</div>