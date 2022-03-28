<?php $author = $data['author']; ?>

<div class="row">
    <div class="col-lg-7 m-auto col-12">
        <div class="card mb-4">
            <div class="card-body position-relative">
                <a href="/dashboard-authors-active?id=<?= $author[0]['id'] ?>" class="position-absolute badge <?php if($author[0]['is_active'] === 1) echo 'bg-label-primary'; else echo 'bg-label-warning'?> me-1" style="top: 4%; right: 4%">
                    <?php if($author[0]['is_active'] === 1) echo 'Active'; else echo 'NotActive'?>
                </a>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item"><strong>Name: </strong> <?= $author[0]['name'] ?></li>
                    <li class="list-group-item"><strong>Bio: </strong> <?= $author[0]['bio'] ?></li>
                    <li class="list-group-item"><strong>Email: </strong> <?= $author[0]['email'] ?></li>
                    <li class="list-group-item"><strong>Phone: </strong> <?= $author[0]['phone'] ?></li>
                    <li class="list-group-item">
                        <a href="/dashboard-authors-edit?id=<?= $author[0]['id'] ?>" class="card-link">Edit</a>
                        <a href="/dashboard-authors-delete?id=<?= $author[0]['id'] ?>" class="card-link">Delete</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>