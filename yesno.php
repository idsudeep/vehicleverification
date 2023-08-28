<div class="modal fade" id="payConfirmationModal" tabindex="-1" role="dialog" aria-labelledby="payConfirmationModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
     
        <h5 class="modal-title" id="payConfirmationModalLabel">Confirm Payment</h5>
        
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form>
        <div class="form-group">
                <input type="number" name="voucher_no" class="form-control" id="voucher_no" placeholder="Enter Bank Voucher's no:">
            </div>
      </form>
      <div class="modal-body">
        Are you sure you want to proceed with the payment?
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">No</button>
        <button type="button" class="btn btn-primary" id="confirmPaymentButton">Yes</button>
      </div>
    </div>
  </div>
</div>