<?php include 'includes/navBarHead.php';?>
<?php include 'includes/headers.php';?>
<?php include 'includes/modalDetails.php';?>

  <!-- MAIN -->
  <main id="posts" class="my-auto">
<!-- HEADERMAIN -->
        <header class="container my-5 d-flex justify-content-center">
            <div class="card">
                <div class="card-header bg-secondary text-white text-center">
                    <h4>Selected Period</h4>
                </div>
                <div class="d-flex flex-column p-2">
                    <span class="display-6 my-2 text-center">From <?php echo $firstDateToDisplay; ?> To <?php echo $lastDateToDisplay; ?></span>
                </div>
            </header>

        <section class="container">
            <div class="row">


                <!-- INCOME TABLE -->
                <div class="col-md-6 mt-5">
                    <div class="card">
                        <div class="card-header bg-success text-white">
                            <h4>Incomes</h4>
                        </div>
                        <div class="table-responsive">
                            <table class="table table-striped mb-0 table-hover" id="incomesTable">
                                <thead class="table-dark">
                                    <tr>
                                        <th>#</th>
                                        <th id="incomesDate">Date</th>
                                        <th id="incomesCategory">Category</th>
                                        <th id="incomesAmount">Amount</th>
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                <?php $i = 1; foreach($Records as $record ) : ?> 
                                    <?php if ($record->type =="Income"): ?>        
                                    <tr>
                                        <td><?php echo $i++;?></td>
                                        <td><?php echo $record->date?></td>
                                        <td><?php echo $record->category?></td>
                                        <td><?php echo $record->amount?></td>
                                        <td>
                                        <a class="btn btn-secondary" data-bs-toggle="modal" data-bs-target="#modalDetails<?php echo $record->uniqueID ?>">
                                                <i class="fas fa-angle-double-right"></i> Details
                                            </a>
                                        </td>
                                    </tr>
                                    <?php endif; ?>
                                    <?php endforeach;?> 
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <!-- EXPENSE TABLE -->
                <div class="col-md-6 mt-5">
                    <div class="card">
                        <div class="card-header bg-danger text-white">
                            <h4>Expenses</h4>
                        </div>
                        <div class="table-responsive">
                            <table class="table table-striped mb-0 table-hover" id="expensesTable">
                                <thead class="table-dark">
                                    <tr>
                                        <th>#</th>
                                        <th id="expensesDate">Date</th>
                                        <th id="expensesCategory">Category</th>
                                        <th id="expensesAmount">Amount</th>
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                <?php $i = 1; foreach($Records as $record ) : ?>
                                    <?php if ($record->type =="Expense"): ?> 
                                    <tr>
                                        <td><?php echo $i++;?></td>
                                        <td><?php echo $record->date?></td>
                                        <td><?php echo $record->category?></td>
                                        <td><?php echo $record->amount?></td>
                                        <td>
                                        <a class="btn btn-secondary" data-bs-toggle="modal" data-bs-target="#modalDetails<?php echo $record->uniqueID ?>">
                                                <i class="fas fa-angle-double-right"></i> Details
                                            </a>
                                        </td>
                                    </tr>
                                    <?php endif; ?>
                                    <?php endforeach;?> 
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- INCOME SUMMARY TABLE -->
        <section class="container my-5">
            <div class="col-12 row">
                <div class="col-12 col-md-4 my-auto">
                    <div class="card">
                        <div class="card-header bg-success text-white">
                            <h4>Income Summary</h4>
                        </div>
                        <div class="table-responsive">
                            <table class="table table-striped mb-0 table-hover" id="summaryIncomes">
                                <thead class="table-dark">
                                    <tr>
                                        <th>#</th>
                                        <th id="summaryIncomeCategory">Category</th>
                                        <th id="summaryIncomeAmount">Amount</th>
                                    </tr>
                                </thead>
                                <tbody>
                                </tbody>
                            </table>
                        </div>

                        <div class="card-footer text-center">
                            <h5>Total Incomes:<span id="totalIncomes" class="text-success ms-2"></span></h5>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-8 text-center mt-5">
                    <h5>Incomes Structure</h5>
                    <canvas id="chartIncomes"></canvas>
                </div>
            </div>
        </section>
<!-- EXPENSE SUMMARY TABLE -->
        <section class="container my-5">
            <div class="col-12 row">
                <div class="col-12 col-md-4 my-auto">
                    <div class="card">
                        <div class="card-header bg-danger text-white">
                            <h4>Expense Summary</h4>
                        </div>
                        <div class="table-responsive">
                            <table class="table table-striped mb-0 table-hover" id="summaryExpenses">
                                <thead class="table-dark">
                                    <tr>
                                        <th>#</th>
                                        <th id="summaryExpenseCategory">Category</th>
                                        <th id="summaryExpenseAmount">Amount</th>
                                    </tr>
                                </thead>
                                <tbody>
                                </tbody>
                            </table>
                        </div>
                        <div class="card-footer text-center">
                            <h5>Total Expenses:<span id="totalExpenses" class="text-danger ms-2"></span></h5>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-8 text-center mt-5">
                    <h5>Expenses Structure</h5>
                    <canvas id="chartExpenses"></canvas>
                </div>
            </div>
        </section>

        <section class="container my-5 d-flex justify-content-center">
            <div class="card">
                <div class="card-header bg-secondary text-white">
                    <h4>Total Balance</h4>
                </div>
                <div class="d-flex flex-column p-2">
                    <span class="h3 my-2 text-center" id="totalBalance"></span>
                    <span class="h5 my-2" id="comment"></span>
                </div>
        </section>



    </main>



    <script src="<?php echo BASE_URI;?>templates/js/Chart.bundle.js"></script>
    <script src="<?php echo BASE_URI;?>templates/js/balance.js"></script>
<?php include 'includes/footer.php';?>