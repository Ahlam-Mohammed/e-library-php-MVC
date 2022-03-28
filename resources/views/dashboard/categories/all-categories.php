<div class="card">
    <div class="d-flex justify-content-between align-items-center p-3">
        <h5 class="card-header">Table Basic</h5>
        <a href="/dashboard-books-create" class="btn btn-primary inline w-25">Create</a>
    </div>
    <div class="table-responsive text-nowrap">
        <table class="table">
            <thead>
            <tr>
                <th>Title</th>
                <th>Description</th>
                <th>Active</th>
                <th>Actions</th>
            </tr>
            </thead>
            <tbody class="table-border-bottom-0">

            <?php foreach ($data['books'] as $book) { ?>
                <tr>
                    <td><strong><?= $book['title'] ?></strong></td>
                    <td><?= $book['description'] ?></td>
                    <td>
                        <span class="badge <?php if($book['is_active'] === 1) echo 'bg-label-primary'; else echo 'bg-label-warning'?> me-1">
                            <?php if($book['is_active'] === 1) echo 'Active'; else echo 'NotActive'?>
                        </span>
                    </td>
                    <td>
                        <div class="dropdown">
                            <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown"><i class="bx bx-dots-vertical-rounded"></i></button>
                            <div class="dropdown-menu">
                                <a class="dropdown-item" href="/dashboard-books-edit?id=<?= $book['id'] ?>"><i class="bx bx-edit-alt me-1"></i> Edit</a>
                                <a class="dropdown-item" href="javascript:void(0);"><i class="bx bx-trash me-1"></i> Delete</a>
                            </div>
                        </div>
                    </td>
                </tr>
            <?php } ?>

            </tbody>
        </table>
    </div>
</div>




<!--<div class="card">-->
<!--    <div class="card-datatable table-responsive">-->
<!--        <table class="datatables-permissions table border-top">-->
<!--            <thead>-->
<!--            <tr>-->
<!--                <th></th>-->
<!--                <th></th>-->
<!--                <th>Title</th>-->
<!--                <th>Description</th>-->
<!--                <th>Created Date</th>-->
<!--                <th>Actions</th>-->
<!--            </tr>-->
<!--            </thead>-->
<!--            <tbody>-->

<!--            </tbody>-->
<!--        </table>-->
<!--    </div>-->
<!--</div>-->