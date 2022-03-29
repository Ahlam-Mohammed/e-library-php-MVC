<?php use App\Models\Role; ?>
<div class="card">
    <div class="d-flex justify-content-between align-items-center p-3">
        <h5 class="card-header">Users</h5>
        <a href="/dashboard-users-create" class="dt-button inline create-new btn btn-primary" type="button">
            <span>
                <i class="bx bx-plus me-sm-2"></i>
                <span class="d-none d-sm-inline-block">Add New User</span>
            </span>
        </a>
    </div>
    <div class="table-responsive text-nowrap">
        <table class="table">
            <thead>
            <tr>
                <th>Name</th>
                <th>Email</th>
                <th>Role</th>
                <th>Active</th>
                <th>Actions</th>
            </tr>
            </thead>
            <tbody class="table-border-bottom-0">

            <?php foreach ($data['users'] as $user) { ?>
                <tr>
                    <td><strong><a href="/dashboard-users-show?id=<?= $user['id'] ?>"><?= $user['name'] ?></a></strong></td>
                    <td><?= $user['email'] ?></td>
                    <td><?php $role = Role::find($user['role_id']); echo $role[0]['name'] ?></td>
                    <td>
                        <a href="/dashboard-users-active?id=<?= $user['id'] ?>" class="badge <?php if($user['is_active'] === 1) echo 'bg-label-primary'; else echo 'bg-label-warning'?> me-1">
                            <?php if($user['is_active'] === 1) echo 'Active'; else echo 'NotActive'?>
                        </a>
                    </td>
                    <td>
                        <div class="dropdown">
                            <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown"><i class="bx bx-dots-vertical-rounded"></i></button>
                            <div class="dropdown-menu">
                                <a class="dropdown-item" href="/dashboard-users-edit?id=<?= $user['id'] ?>"><i class="bx bx-edit-alt me-1"></i> Edit</a>
                                <a class="dropdown-item" href="/dashboard-users-delete?id=<?= $user['id'] ?>"><i class="bx bx-trash me-1"></i> Delete</a>
                            </div>
                        </div>
                    </td>
                </tr>
            <?php } ?>

            </tbody>
        </table>
    </div>
</div>