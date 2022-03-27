<!DOCTYPE html>
<html lang="en" class="light-style layout-navbar-fixed layout-menu-fixed " dir="ltr" data-theme="theme-semi-dark" data-assets-path="assets/" data-template="vertical-menu-template-semi-dark">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0" />

    <title>Dashboard</title>

    <meta name="description" content="Most Powerful &amp; Comprehensive Bootstrap 5 HTML Admin Dashboard Template built for developers!" />
    <meta name="keywords" content="dashboard, bootstrap 5 dashboard, bootstrap 5 design, bootstrap 5">

    <!-- Style File -->
    <?php include 'style.php'?>

</head>

<body>

<!-- Layout wrapper -->
<div class="layout-wrapper layout-content-navbar  ">
    <div class="layout-container">

        <!-- Menu -->
        <?php include 'sidebar.php'?>
        <!-- / Menu -->


        <!-- Layout container -->
        <div class="layout-page">

            <!-- Navbar -->
            <?php include 'navbar.php'?>
            <!-- / Navbar -->


            <!-- Content wrapper -->
            <div class="content-wrapper">

                <!-- Content -->
                <div class="container-xxl flex-grow-1 container-p-y">

                </div>
                <!-- / Content -->

                <!-- Add Permission Modal -->
                <div class="modal fade" id="addPermissionModal" tabindex="-1" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered modal-simple">
                        <div class="modal-content p-3 p-md-5">
                            <div class="modal-body">
                                <button type="button" class="btn-close btn-pinned" data-bs-dismiss="modal" aria-label="Close"></button>
                                <div class="text-center mb-4">
                                    <h3>Add New Permission</h3>
                                    <p>Permissions you may use and assign to your users.</p>
                                </div>
                                <form class="needs-validation" novalidate>
                                    <div class="mb-3">
                                        <label class="form-label" for="bs-validation-name">Title</label>
                                        <input name="title" type="text" class="form-control" id="bs-validation-name" placeholder="title book" required />
                                        <div class="valid-feedback"> Looks good! </div>
                                        <div class="invalid-feedback"> Please enter your name. </div>
                                    </div>
                                    <div class="mb-3">
                                        <div class="row">
                                            <div class="col-6">
                                                <label class="form-label" for="bs-validation-email">Price</label>
                                                <input name="price" type="number" id="bs-validation-email" class="form-control" placeholder="" aria-label="john.doe" required />
                                                <div class="valid-feedback"> Looks good! </div>
                                                <div class="invalid-feedback"> Please enter a valid email </div>
                                            </div>
                                            <div class="col-6">
                                                <label class="form-label" for="bs-validation-email">Pages Number</label>
                                                <input name="pages_number" type="number" id="bs-validation-email" class="form-control" placeholder="" aria-label="john.doe" required />
                                                <div class="valid-feedback"> Looks good! </div>
                                                <div class="invalid-feedback"> Please enter a valid email </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="mb-3">
                                        <div class="row">
                                            <div class="col-6">
                                                <label class="form-label" for="bs-validation-country">Category</label>
                                                <select name="category_id" class="form-select" id="bs-validation-country" required>
                                                    <option value="">Select Country</option>
                                                    <option value="usa">USA</option>
                                                    <option value="uk">UK</option>
                                                    <option value="france">France</option>
                                                    <option value="australia">Australia</option>
                                                    <option value="spain">Spain</option>
                                                </select>
                                                <div class="valid-feedback"> Looks good! </div>
                                                <div class="invalid-feedback"> Please select your country </div>
                                            </div>
                                            <div class="col-6">
                                                <label class="form-label" for="bs-validation-country">Author</label>
                                                <select name="author_id" class="form-select" id="bs-validation-country" required>
                                                    <option value="">Select Country</option>
                                                    <option value="usa">USA</option>
                                                    <option value="uk">UK</option>
                                                    <option value="france">France</option>
                                                    <option value="australia">Australia</option>
                                                    <option value="spain">Spain</option>
                                                </select>
                                                <div class="valid-feedback"> Looks good! </div>
                                                <div class="invalid-feedback"> Please select your country </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="mb-3">
                                        <div class="row">
                                            <div class="col-6">
                                                <label class="form-label" for="bs-validation-email">Quantity</label>
                                                <input name="quantity" type="number" id="bs-validation-email" class="form-control" placeholder="" aria-label="john.doe" required />
                                                <div class="valid-feedback"> Looks good! </div>
                                                <div class="invalid-feedback"> Please enter a valid email </div>
                                            </div>
                                            <div class="col-6">
                                                <label class="form-label" for="bs-validation-country">Publisher</label>
                                                <select name="publisher_id" class="form-select" id="bs-validation-country" required>
                                                    <option value="">Select Country</option>
                                                    <option value="usa">USA</option>
                                                    <option value="uk">UK</option>
                                                    <option value="france">France</option>
                                                    <option value="australia">Australia</option>
                                                    <option value="spain">Spain</option>
                                                </select>
                                                <div class="valid-feedback"> Looks good! </div>
                                                <div class="invalid-feedback"> Please select your country </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="mb-3">
                                        <label class="form-label" for="bs-validation-dob">format</label>
                                        <input name="format" type="text" class="form-control flatpickr-validation" id="bs-validation-dob" required />
                                        <div class="valid-feedback"> Looks good! </div>
                                        <div class="invalid-feedback"> Please Enter Your DOB </div>
                                    </div>
                                    <div class="mb-3">
                                        <label class="form-label" for="bs-validation-upload-file">Book Image</label>
                                        <input name="image" type="file" class="form-control" id="bs-validation-upload-file" required />
                                    </div>
                                    <div class="mb-3">
                                        <label class="form-label" for="bs-validation-bio">Description</label>
                                        <textarea class="form-control" id="bs-validation-bio" name="description" rows="3" required></textarea>
                                    </div>
                                    <div class="row">
                                        <div class="col-12">
                                            <button type="submit" name="submit" class="btn btn-primary">Save</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <!--/ Add Permission Modal -->

                <!-- Edit Permission Modal -->
                <div class="modal fade" id="editPermissionModal" tabindex="-1" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered modal-simple">
                        <div class="modal-content p-3 p-md-5">
                            <div class="modal-body">
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                <div class="text-center mb-4">
                                    <h3>Edit Permission</h3>
                                    <p>Edit permission as per your requirements.</p>
                                </div>
                                <div class="alert alert-warning" role="alert">
                                    <h6 class="alert-heading fw-bold mb-2">Warning</h6>
                                    <p class="mb-0">By editing the permission name, you might break the system permissions functionality. Please ensure you're absolutely certain before proceeding.</p>
                                </div>
                                <form id="editPermissionForm" class="row" onsubmit="return false">
                                    <div class="col-sm-9">
                                        <label class="form-label" for="editPermissionName">Permission Name</label>
                                        <input type="text" id="editPermissionName" name="editPermissionName" class="form-control" placeholder="Permission Name" tabindex="-1" />
                                    </div>
                                    <div class="col-sm-3 mb-3">
                                        <label class="form-label invisible d-none d-sm-inline-block">Button</label>
                                        <button type="submit" class="btn btn-primary mt-1 mt-sm-0">Update</button>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" id="editCorePermission" />
                                            <label class="form-check-label" for="editCorePermission">
                                                Set as core permission
                                            </label>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <!--/ Edit Permission Modal -->


                <!-- Footer -->
                <?php include "footer.php"; ?>
                <!-- / Footer -->


                <div class="content-backdrop fade"></div>
            </div>
            <!-- Content wrapper -->
        </div>
        <!-- / Layout page -->
    </div>



    <!-- Overlay -->
    <div class="layout-overlay layout-menu-toggle"></div>


    <!-- Drag Target Area To SlideIn Menu On Small Screens -->
    <div class="drag-target"></div>

</div>
<!-- / Layout wrapper -->


<!-- Script File -->
<?php include 'script.php'; ?>

</body>
</html>
