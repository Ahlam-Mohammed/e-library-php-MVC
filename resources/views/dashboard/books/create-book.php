<div class="col-md">
    <div class="card">
        <h5 class="card-header">Add New Book</h5>
        <div class="card-body">
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