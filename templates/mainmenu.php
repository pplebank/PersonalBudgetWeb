<?php include 'includes/head.php';?>
<?php include 'includes/modalsMain.php';?>
<?php include 'includes/navBar.php';?>

<!-- HEADER -->
  <header id="main-header" class="py-2 bg-primary text-white">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <h1>
                        <i class="fas fa-cog"></i> Main Menu</h1>
                </div>
            </div>
        </div>
    </header>
    <?php displayMessage();?>

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
    <?php include 'includes/footer.php';?>