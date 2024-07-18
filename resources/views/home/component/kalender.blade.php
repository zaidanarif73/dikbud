<div class="modal fade edit-form" id="form" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header border-bottom-0">
                <h5 class="modal-title" id="modal-title">Add Event</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form id="myForm">
                <div class="modal-body">
                    <div class="alert alert-danger " role="alert" id="danger-alert" style="display: none;">
                        End date should be greater than start date.
                      </div>
                    <div class="form-group">
                        <label for="event-title">Event name <span class="text-danger">*</span></label>
                        <input type="text" class="form-control" id="event-title" placeholder="Enter event name" required>
                    </div>
                    <div class="form-group">
                        <label for="start-date">Start date <span class="text-danger">*</span></label>
                        <input type="date" class="form-control" id="start-date" placeholder="start-date" required>
                    </div>
                    <div class="form-group">
                        <label for="end-date">End date - <small class="text-muted">Optional</small></label>
                        <input type="date" class="form-control" id="end-date" placeholder="end-date">
                    </div>
                    <div class="form-group">
                        <label for="event-color">Color</label>
                        <input type="color" class="form-control" id="event-color" value="#3788d8">
                      </div>
                </div>
                <div class="modal-footer border-top-0 d-flex justify-content-center">
                    <button type="submit" class="btn btn-success" id="submit-button">Submit</button>
                  </div>
            </form>
        </div>
    </div>
</div>

<!-- Delete Modal -->
<div class="modal fade" id="delete-modal" tabindex="-1" role="dialog" aria-labelledby="delete-modal-title" aria-hidden="true">
    <div class="modal-dialog modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="delete-modal-title">Confirm Deletion</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body text-center" id="delete-modal-body">
          Are you sure you want to delete the event?
        </div>
        <div class="modal-footer border-0">
            <button type="button" class="btn btn-secondary rounded-sm" data-dismiss="modal" id="cancel-button">Cancel</button>
          <button type="button" class="btn btn-danger rounded-lg" id="delete-button">Delete</button>
        </div>
      </div>
    </div>
  </div>
