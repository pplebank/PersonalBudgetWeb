<!-- MODALiNCOME -->
<div class="modal fade" id="modalIncome" tabindex="-1" aria-labelledby="modalIncomeLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="modalIncomeLabel">New Income</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="card-body">
                        <form action="addTransaction.php" id="addIncomeForm" method="post">

                            <div class="form-group">
                                <label for="dateInput" class="col-form-label">Date of Transaction</label>
                                <input class="form-control" type="date" name ="date" id="dateInput">
                            </div>

                            <div class="form-group">
                                <label for="incomeAmountInput" class=" col-form-label">Amount</label>
                                <input class="form-control" type="number" placeholder="e.g. 40.45" name ="amount"
                                    id="incomeAmountInput">
                            </div>

                            <div class="form-group">
                                <label for="categoryIncomeInput" class=" col-form-label">Category</label>
                                <select class="form-select" id="categoryIncomeInput" name ="category">
                                    <option>Salary</option>
                                    <option>Interests</option>
                                    <option>Sale</option>
                                    <option>Others</option>
                                </select>
                            </div>

                            <div class="form-group">
                                <label for="noteIncomeInput" class=" col-form-label">Note(optional)</label>
                                <textarea class="form-control" aria-label="With textarea" id="noteIncomeInput" name ="note"
                                    placeholder="e.g. Money from selling a car "></textarea>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" form="addIncomeForm" name="income_add" class="btn btn-primary">Add Income</button>
                </div>
            </div>
        </div>
    </div>

<!-- MODALEXPENSE -->
    <div class="modal fade" id="modalExpense" tabindex="-1" aria-labelledby="modalExpenseLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="modalExpenseLabel">New Expense</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="card-body">
                        <form action="addTransaction.php" id="addExpenseForm" method="post">

                            <div class="form-group">
                                <label for="dateExpense" class="col-form-label">Date of Transaction</label>
                                <input class="form-control" type="date" name="date" id="dateExpense">
                            </div>

                            <div class="form-group">
                                <label for="incomeAmountExpense" class=" col-form-label">Amount</label>
                                <input class="form-control" step="0.01" type="number" placeholder="e.g. 40.45" name="amount"
                                    id="incomeAmountExpense">
                            </div>

                            <div class="form-group">
                                <label for="paymentMethodExpense" class=" col-form-label">Payment method</label>
                                <select class="form-select" name="payment" id="paymentMethodExpense">
                                    <option>Credit card</option>
                                    <option>Debit card</option>
                                    <option>Transfer</option>
                                    <option selected>Cash</option>
                                </select>
                            </div>

                            <div class="form-group">
                                <label for="categoryExpenseInput" class=" col-form-label">Category</label>
                                <select class="form-select" name="category" id="categoryExpenseInput">
                                    <option>Food</option>
                                    <option>Accommodation</option>
                                    <option>Transport</option>
                                    <option>Telecommunication</option>
                                    <option>Healthcare</option>
                                    <option>Clothes</option>
                                    <option>Hygiene</option>
                                    <option>Children</option>
                                    <option>Entertainment</option>
                                    <option>Travel</option>
                                    <option>Education</option>
                                    <option>Books</option>
                                    <option>Savings</option>
                                    <option>Rent</option>
                                    <option>Debts payment</option>
                                    <option>Others</option>
                                </select>
                            </div>

                            <div class="form-group">
                                <label for="noteExpenseInput" class=" col-form-label">Note(optional)</label>
                                <textarea class="form-control" aria-label="With textarea" id="noteExpenseInput" name="note"
                                    placeholder="e.g. Unexpected payment"></textarea>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" form="addExpenseForm" name="expense_add" class="btn btn-primary">Add Expense</button>
                </div>
            </div>
        </div>
    </div>

 
