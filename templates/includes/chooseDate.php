


    <div class="list-group" id="chooseDate">
    <form action="showBalance.php" id="balanceDates" method="post">
    <div class="form-group">
                                <label for="dateInput" class="col-form-label">Beginning of the period</label>
                                <input class="form-control" type="date" name ="firstDate" id="dateInput">
                            </div>
                            <div class="form-group">
                                <label for="dateInput" class="col-form-label">End of the period</label>
                                <input class="form-control" type="date" name ="lastDate" id="dateInput">
                            </div>

    </form>
      </div>


      <div class="list-group" id="chooseOption">         
    <a href="showBalance.php?type='lastMonth'" class="list-group-item list-group-item-action">Last Month </a>
     <a href="showBalance.php?type='thisMonth'" class="list-group-item list-group-item-action">This Month</a>
     <a href="showBalance.php?type='thisYear'" class="list-group-item list-group-item-action">This Year</a>
     <a href="showBalance.php?type='lastYear'" class="list-group-item list-group-item-action">Last Year</a>
    <a href="<?php echo BASE_URI; ?>templates/includes/chooseDate.php" class="list-group-item list-group-item-action" id="selectDates">Selected Period</a>      
</div>