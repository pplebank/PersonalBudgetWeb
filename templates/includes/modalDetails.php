

<!-- MODALDETAILS -->

<?php foreach ($Records as $record): ?>

<div class="modal fade" id="modalDetails<?php echo $record->uniqueID ?>" tabindex="-1" aria-labelledby="modalDetailLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="modalDetailLabel">Details</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
         <table class="table table-striped table-hover">
            <tbody>
                <tr>
                    <td>Type of transaction:</td>
                    <td><?php echo $record->type ?></td>
                </tr>
                <tr>
                    <td>Date of transaction:</td>
                    <td><?php echo $record->date ?></td>
                </tr>
                <tr>
                    <td>Amount:</td>
                    <td><?php echo $record->amount ?></td>
                </tr>
                <?php if (isset($record->payment)): ?>
                <tr>
                    <td>Payment method:</td>
                    <td><?php echo $record->payment ?></td>
                </tr>
                <?php endif;?>
                <tr>
                    <td>Category:</td>
                    <td><?php echo $record->category ?></td>
                </tr>
                <tr>
                    <td>Note:</td>
                    <td><?php echo $record->note ?></td>
                </tr>
            </tbody>
         </table>
        <div class="modal-footer border-top-0">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>
<?php endforeach;?>