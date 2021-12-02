<?php include 'includes/header.php'; ?>

<section class="py-5 bg-light">
<div class="container">
    <div class="row justify-content-center">
        <div class="col-lg-10">
            <div class="card shadow border-dark">
                <div class="card-header bg-dark">
                    <h3 class="text-center text-warning font-weight-bold">Add Products Here</h3>
                </div>
                <div class="card-body bg-light">

                    <?php if(isset($message)){?>
                        <h4 class="text-center text-success font-weight-bolder mb-4"><?php echo $message; ?></h4>
                    <?php } ?>

                    <form action="action.php" method="POST" enctype="multipart/form-data">
                        <div class="form-group">
                            <div class="row">
                                <div class="col-lg-4">
                                    <label for="p-name" class="text-dark font-weight-bold h5">Product Name</label>
                                </div>
                                <div class="col-lg-8">
                                    <input type="text" name="name" id="p-name" class="bg-light form-control border-dark">
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="row">
                                <div class="col-lg-4">
                                    <label for="p-price" class="text-dark font-weight-bold h5">Product Price</label>
                                </div>
                                <div class="col-lg-8">
                                    <input type="number" name="price" id="p-price" class="bg-light form-control border-dark">
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="row">
                                <div class="col-lg-4">
                                    <label for="p-quantity" class="text-dark font-weight-bold h5">Product Quantity</label>
                                </div>
                                <div class="col-lg-8">
                                    <input type="number" name="quantity" id="p-quantity" class="bg-light form-control border-dark">
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="row">
                                <div class="col-lg-4">
                                    <label for="p-category" class="text-dark font-weight-bold h5">Category Name</label>
                                </div>
                                <div class="col-lg-8">
                                    <input type="text" name="category" id="p-category" class="bg-light form-control border-dark">
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="row">
                                <div class="col-lg-4">
                                    <label for="b-name" class="text-dark font-weight-bold h5">Brand Name</label>
                                </div>
                                <div class="col-lg-8">
                                    <input type="text" name="brand" id="b-name" class="bg-light form-control border-dark">
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="row">
                                <div class="col-lg-4">
                                    <label for="p-image" class="text-dark font-weight-bold h5">Product Image</label>
                                </div>
                                <div class="col-lg-8">
                                    <input type="file" name="image" id="p-image" class="form-control-file">
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="row justify-content-end">
                                <div class="col-lg-8">
                                    <input type="submit" name="btn" class="btn font-weight-bold text-uppercase h6 btn-block btn-dark">
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
</section>

<?php include 'includes/footer.php'; ?>