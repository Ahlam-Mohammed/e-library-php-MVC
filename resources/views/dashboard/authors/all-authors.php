<div class="card">
    <div class="d-flex justify-content-between align-items-center p-3">
        <h5 class="card-header">Authors</h5>
        <a href="/dashboard-authors-create" class="dt-button inline create-new btn btn-primary" type="button">
            <span>
                <i class="bx bx-plus me-sm-2"></i>
                <span class="d-none d-sm-inline-block">Add New Author</span>
            </span>
        </a>
    </div>
    <div class="table-responsive text-nowrap">
        <table class="table">
            <thead>
            <tr>
                <th>Name</th>
                <th>email</th>
                <th>phone</th>
                <th>Created at</th>
                <th>Active</th>
                <th>Actions</th>
            </tr>
            </thead>
            <tbody class="table-border-bottom-0">

            <?php foreach ($data['authors'] as $author) { ?>
                <tr>
                    <td><strong><a href="/dashboard-authors-show?id=<?= $author['id'] ?>"><?= $author['name'] ?></a></strong></td>
                    <td><?= $author['email'] ?></td>
                    <td><?= $author['phone'] ?></td>
                    <td><?= $author['created_at'] ?></td>
                    <td>
                        <a href="/dashboard-authors-active?id=<?= $author['id'] ?>" class="badge <?php if($author['is_active'] === 1) echo 'bg-label-primary'; else echo 'bg-label-warning'?> me-1">
                            <?php if($author['is_active'] === 1) echo 'Active'; else echo 'NotActive'?>
                        </a>
                    </td>
                    <td>
                        <div class="dropdown">
                            <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown"><i class="bx bx-dots-vertical-rounded"></i></button>
                            <div class="dropdown-menu">
                                <a class="dropdown-item" href="/dashboard-authors-edit?id=<?= $author['id'] ?>"><i class="bx bx-edit-alt me-1"></i> Edit</a>
                                <a class="dropdown-item" href="/dashboard-authors-delete?id=<?= $author['id'] ?>"><i class="bx bx-trash me-1"></i> Delete</a>
                            </div>
                        </div>
                    </td>
                </tr>
            <?php } ?>

            </tbody>
        </table>
    </div>
</div>