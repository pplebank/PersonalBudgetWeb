  <!-- MODALBALANCE -->
  <div class="modal fade" id="modalBalance" tabindex="-1" aria-labelledby="modalBalanceLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="modalBalanceLabel">Select An Option</h5>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body" id="modalBalanceContent">
                <div class="list-group" id="chooseOption">
             
  <a href="showBalance.php?type=lastMonth" class="list-group-item list-group-item-action">
Last Month
  </a>
  <a href="showBalance.php?type=thisMonth" class="list-group-item list-group-item-action">This Month</a>
  <a href="showBalance.php?type=thisYear" class="list-group-item list-group-item-action">This Year</a>
  <a href="showBalance.php?type=lastYear" class="list-group-item list-group-item-action">Last Year</a>
  <a href="<?php echo BASE_URI; ?>templates/includes/chooseDate.php" class="list-group-item list-group-item-action" id="selectDates">Selected Period</a>

                  </div>
            </div>
            <div class="modal-footer" id="buttonsSection">
              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
              <button type="submit" form="balanceDates" name="balance_period" class="btn btn-primary d-none" id="balanceSelect">Next</button>
            </div>
          </div>
        </div>
      </div>
