<div class="modal fade" id="tutorial-modal" tabindex="-1" role="dialog" aria-labelledby="tutorial-modal-label" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Video Tutorial</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
        </button>
      </div>
      <div class="modal-body">
        {{ $slot }}
      </div>
      <div class="modal-footer">				        
      </div>
    </div>
  </div>
</div>

<div class="row">
	<button data-toggle="modal" data-target="#tutorial-modal" class="btn btn-lg btn-success pull-right" style="margin-right: 50px">Tutorial</button>
</div>