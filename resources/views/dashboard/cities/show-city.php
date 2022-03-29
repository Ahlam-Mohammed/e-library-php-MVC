<?php $city = $data['city']; ?>

<div class="row">
    <div class="col-lg-8 m-auto col-12">
        <div class="card h-100">
            <div class="card-body position-relative">
                <a href="/dashboard-cities-active?id=<?= $city[0]['id'] ?>" class="position-absolute badge <?php if($city[0]['is_active'] === 1) echo 'bg-label-primary'; else echo 'bg-label-warning'?> me-1" style="top: 4%; right: 4%">
                    <?php if($city[0]['is_active'] === 1) echo 'Active'; else echo 'NotActive'?>
                </a>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item"><strong>Name: </strong><?= $city[0]['name'] ?></li>
                    <li class="list-group-item"><strong>Created By: </strong><?= $city[0]['created_by'] ?></li>
                    <li class="list-group-item"><strong>Created At: </strong><?= $city[0]['created_at'] ?></li>
                    <li class="list-group-item">
                        <a href="/dashboard-cities-edit?id=<?= $city[0]['id'] ?>" class="card-link">Edit</a>
                        <a href="/dashboard-cities-delete?id=<?= $city[0]['id'] ?>" class="card-link">Delete</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>