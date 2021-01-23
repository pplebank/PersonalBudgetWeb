<?php include 'includes/navBarHead.php';?>
<?php include 'includes/modalsMain.php';?>
<?php include 'includes/modalDetails.php';?>
<?php include 'includes/modalBalance.php';?>
<?php include 'includes/headers.php';?>

    <!-- ACTIONS -->
    <section id="actions" class="py-4 mb-4 bg-light">
        <div class="container">
            <div class="row col-12 col-lg-8 justify-content-start">
                <div class="col-6 col-md-4">
                    <a href="#" class="btn btn-success col-12" data-bs-toggle="modal" data-bs-target="#modalIncome">
                        <i class="fas fa-plus"></i> Add Income
                    </a>
                </div>
                <div class="col-6 col-md-4">
                    <a href="#" class="btn btn-danger col-12" data-bs-toggle="modal" data-bs-target="#modalExpense">
                        <i class="fas fa-plus"></i> Add Expense
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- MAIN -->
    <section id="posts" class="mb-auto">
        <div class="container">
            <div class="row">
                <div class="col-md-9">
                    <div class="card">
                        <div class="card-header">
                            <h4>Last Transfers</h4>
                        </div>
                        <div class="table-responsive">
                            <table class="table table-striped mb-0">
                                <thead class="table-dark">
                                    <tr>
                                        <th>#</th>
                                        <th>Type</th>
                                        <th>Date</th>
                                        <th>Category</th>
                                        <th>Amount</th>
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
<?php foreach ($Records as $record): ?>
                                    <tr>
                                        <td><?php echo $record->uniqueID ?></td>
                                        <td><?php echo $record->type ?></td>
                                        <td><?php echo $record->date ?></td>
                                        <td><?php echo $record->category ?></td>
                                        <td><?php echo $record->amount ?></td>
                                        <td>
                                            <a class="btn btn-secondary" data-bs-toggle="modal" data-bs-target="#modalDetails<?php echo $record->uniqueID ?>">
                                                <i class="fas fa-angle-double-right"></i> Details
                                            </a>
                                        </td>
                                    </tr>
<?php endforeach;?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card text-center bg-success text-white mb-3">
                        <div class="card-body">
                            <h3>Incomes</h3>
                            <h4 class="display-4">
                                <i class="fas fa-coins"></i>
                            </h4>
                            <a href="incomes.html" class="btn btn-outline-light col-6">View</a>
                        </div>
                    </div>


                    <div class="card text-center bg-danger text-white mb-3">
                        <div class="card-body">
                            <h3>Expenses</h3>
                            <h4 class="display-4">
                                <i class="fas fa-receipt"></i>
                            </h4>
                            <a href="expenses.html" class="btn btn-outline-light col-6">View</a>
                        </div>
                    </div>

                    <div class="card text-center bg-secondary text-white mb-3">
                        <div class="card-body">
                            <h3>Balance</h3>
                            <h4 class="display-4">
                                <i class="fas fa-balance-scale"></i>
                            </h4>
                            <a href="#" data-bs-toggle="modal" data-bs-target="#modalBalance" class="btn btn-outline-light col-6">View</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <script src="<?php echo BASE_URI; ?>templates/js/jquery.js"></script>
    <script src="<?php echo BASE_URI; ?>templates/js/reloadModal.js"></script>
    <?php include 'includes/footer.php';?>