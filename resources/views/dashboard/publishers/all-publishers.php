<div class="card">
    <div class="d-flex justify-content-between align-items-center p-3">
        <h5 class="card-header">Publishers</h5>
        <a href="/dashboard-publishers-create" class="dt-button inline create-new btn btn-primary" type="button">
            <span>
                <i class="bx bx-plus me-sm-2"></i>
                <span class="d-none d-sm-inline-block">Add New Publisher</span>
            </span>
        </a>
    </div>
    <div class="table-responsive text-nowrap">
        <table class="table">
            <thead>
            <tr>
                <th>Name</th>
                <th>Email</th>
                <th>Phone</th>
                <th>Country</th>
                <th>Created at</th>
                <th>Active</th>
                <th>Actions</th>
            </tr>
            </thead>
            <tbody class="table-border-bottom-0">

            <?php foreach ($data['publishers'] as $publisher) { ?>
                <tr>
                    <td><strong><a href="/dashboard-publishers-show?id=<?= $publisher['id'] ?>"><?= $publisher['name'] ?></a></strong></td>
                    <td><?= $publisher['email'] ?></td>
                    <td><?= $publisher['phone'] ?></td>
                    <td><?= $publisher['country'] ?></td>
                    <td><?= $publisher['created_at'] ?></td>
                    <td>
                        <a href="/dashboard-publishers-active?id=<?= $publisher['id'] ?>" class="badge <?php if($publisher['is_active'] === 1) echo 'bg-label-primary'; else echo 'bg-label-warning'?> me-1">
                            <?php if($publisher['is_active'] === 1) echo 'Active'; else echo 'NotActive'?>
                        </a>
                    </td>
                    <td>
                        <div class="dropdown">
                            <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown"><i class="bx bx-dots-vertical-rounded"></i></button>
                            <div class="dropdown-menu">
                                <a class="dropdown-item" href="/dashboard-publishers-edit?id=<?= $publisher['id'] ?>"><i class="bx bx-edit-alt me-1"></i> Edit</a>
                                <a class="dropdown-item" href="/dashboard-publishers-delete?id=<?= $publisher['id'] ?>"><i class="bx bx-trash me-1"></i> Delete</a>
                            </div>
                        </div>
                    </td>
                </tr>
            <?php } ?>

            </tbody>
        </table>
    </div>
</div>