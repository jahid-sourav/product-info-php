<?php include 'includes/header.php'; ?>

    <section class="py-5 bg-light">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card shadow border-dark">
                        <div class="card-header bg-dark">
                            <h3 class="text-center text-warning font-weight-bold">Product's Information</h3>
                        </div>
                        <div class="card-body bg-light">
                            <table class="table table-bordered shadow">
                                <thead>
                                    <tr class="text-center">
                                        <th>Name</th>
                                        <th>Price</th>
                                        <th>Quantity</th>
                                        <th>Category</th>
                                        <th>Brand</th>
                                        <th>Image</th>
                                    </tr>
                                </thead>
                                <tbody>
                                <?php foreach ($productInfo as $product) { ?>
                                    <tr class="text-center">
                                        <td><?php echo $product['name']; ?></td>
                                        <td><?php echo $product['price']; ?></td>
                                        <td><?php echo $product['quantity']; ?></td>
                                        <td><?php echo $product['category']; ?></td>
                                        <td><?php echo $product['brand']; ?></td>
                                        <td>
                                            <img src="<?php echo $product['image']?>" alt="" class="img-fluid">
                                        </td>
                                    </tr>
                                <?php } ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

<?php include 'includes/footer.php'; ?>