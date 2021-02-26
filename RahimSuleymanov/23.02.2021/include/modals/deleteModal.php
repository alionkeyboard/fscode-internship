<!-- Button trigger modal -->
<button  type="button" style="display: none;" id="showDeleteModal" class="btn btn-primary" data-toggle="modal" data-target="#deleteImageModal">
  Delete image
</button>

<!-- Modal -->
<div class="modal fade" id="deleteImageModal" tabindex="-1" role="dialog" aria-labelledby="deleteImageModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="deleteImageModalLabel">Are you sure?</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <input type="hidden" id="imageId">
      </div>
      <div class="modal-footer" style="border:none">
        <button type="button" class="btn btn-secondary" data-dismiss="modal" id="closeDeleteImage">Close</button>
        <button type="button" class="btn btn-danger" id="deleteImage">Delete</button>
      </div>
    </div>
  </div>
</div>