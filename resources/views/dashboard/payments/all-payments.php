<div class="card">
    <div class="d-flex justify-content-between align-items-center p-3">
        <h5 class="card-header">Payments</h5>
        <a href="/dashboard-payments-create" class="dt-button inline create-new btn btn-primary" type="button">
            <span>
                <i class="bx bx-plus me-sm-2"></i>
                <span class="d-none d-sm-inline-block">Add New Payment</span>
            </span>
        </a>
    </div>
    <div class="table-responsive text-nowrap">
        <table class="table">
            <thead>
            <tr>
                <th>Name</th>
                <th>Image</th>
                <th>Created At</th>
                <th>Is Active</th>
                <th>Action</th>
            </tr>
            </thead>
            <tbody class="table-border-bottom-0">

            <?php foreach ($data['payments'] as $payment) { ?>
                <tr>
                    <td><strong><a href="/dashboard-payments-show?id=<?= $payment['id'] ?>"><?= $payment['name'] ?></a></strong></td>
                    <td>
                        <ul class="list-unstyled users-list m-0 d-flex align-items-center">
                            <li data-bs-toggle="tooltip" data-popup="tooltip-custom" data-bs-placement="top" class="avatar" title="" data-bs-original-title="<?= $payment['name'] ?>" style="width: 3.375rem; height: inherit;">
                                <img src="/uploads/<?= $payment['image'] ?>" alt="Avatar">
                            </li>
                        </ul>
                    </td>
                    <td><?= $payment['created_at'] ?></td>
                    <td>
                        <a href="/dashboard-payments-active?id=<?= $payment['id'] ?>" class="badge <?php if($payment['is_active'] === 1) echo 'bg-label-primary'; else echo 'bg-label-warning'?> me-1">
                            <?php if($payment['is_active'] === 1) echo 'Active'; else echo 'Inactive'?>
                        </a>
                    </td>
                    <td>
                        <div class="dropdown">
                            <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown"><i class="bx bx-dots-vertical-rounded"></i></button>
                            <div class="dropdown-menu">
                                <a class="dropdown-item" href="/dashboard-payments-edit?id=<?= $payment['id'] ?>"><i class="bx bx-edit-alt me-1"></i> Edit</a>
                                <a class="dropdown-item" href="/dashboard-payments-delete?id=<?= $payment['id'] ?>"><i class="bx bx-trash me-1"></i> Delete</a>
                            </div>
                        </div>
                    </td>
                </tr>
            <?php } ?>

            </tbody>
        </table>
    </div>
</div>