<?php $category = $data['category']; ?>

<div class="row">
    <div class="col-lg-8 m-auto col-12">
        <div class="card h-100">
            <div class="card-body position-relative">
                <h5 class="card-title"><?= $category[0]['name'] ?></h5>
                <h6 class="card-subtitle text-muted mb-5"><?= $category[0]['created_at'] ?></h6>
                <a href="/dashboard-categories-active?id=<?= $category[0]['id'] ?>" class="position-absolute badge <?php if($category[0]['is_active'] === 1) echo 'bg-label-primary'; else echo 'bg-label-warning'?> me-1" style="top: 4%; right: 4%">
                    <?php if($category[0]['is_active'] === 1) echo 'Active'; else echo 'NotActive'?>
                </a>
                <img class="img-fluid d-flex mx-auto my-4" src="/uploads/<?= $category[0]['image'] ?>" alt="Card image cap">
                <a href="/dashboard-categories-edit?id=<?= $category[0]['id'] ?>" class="card-link">Edit</a>
                <a href="/dashboard-categories-delete?id=<?= $category[0]['id'] ?>" class="card-link">Delete</a>
            </div>
        </div>
    </div>
</div>