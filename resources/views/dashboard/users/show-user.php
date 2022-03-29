<?php

$user      = $data['user'];
$role  = $data['role'];

?>


<div class="row">
    <div class="col-lg-7 m-auto col-12">
        <div class="card mb-4">
            <div class="card-body position-relative">
                <a href="/dashboard-users-active?id=<?= $user[0]['id'] ?>" class="position-absolute badge <?php if($user[0]['is_active'] === 1) echo 'bg-label-primary'; else echo 'bg-label-warning'?> me-1" style="top: 4%; right: 4%">
                    <?php if($user[0]['is_active'] === 1) echo 'Active'; else echo 'NotActive'?>
                </a>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item"><strong>Name: </strong> <?= $user[0]['name'] ?></li>
                    <li class="list-group-item"><strong>Email: </strong> <?= $user[0]['email'] ?></li>
                    <li class="list-group-item"><strong>Role: </strong> <?= $role[0]['name'] ?></li>
                    <li class="list-group-item"><strong>Created At: </strong> <?= $user[0]['created_at'] ?></li>
                    <li class="list-group-item">
                        <a href="/dashboard-users-edit?id=<?= $user[0]['id'] ?>" class="card-link">Edit</a>
                        <a href="/dashboard-users-delete?id=<?= $user[0]['id'] ?>" class="card-link">Delete</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>