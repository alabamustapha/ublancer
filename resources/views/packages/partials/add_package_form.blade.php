<!-- Modal -->
      <div class="modal fade" id="createpackageModal" tabindex="-1" role="dialog" aria-labelledby="createpackagesLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="packagesModalLabel">Add packages</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
                <form class="form" method="POST" action="{{ route('add_package') }}">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                            <label for="name" class="control-label sr-only">Name</label>

                            <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" placeholder="Name" required autofocus>

                            @if ($errors->has('name'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('name') }}</strong>
                                </span>
                            @endif
                        </div>

                        <div class="form-group{{ $errors->has('bids') ? ' has-error' : '' }}">
                            <label for="bids" class="control-label sr-only">Max Bids</label>

                            <input id="bids" type="text" class="form-control" name="bids" value="{{ old('bids') }}" placeholder="Max Bids" required autofocus>

                            @if ($errors->has('bids'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('bids') }}</strong>
                                </span>
                            @endif
                        </div>

                        <div class="form-group{{ $errors->has('commission') ? ' has-error' : '' }}">
                            <label for="commission" class="control-label sr-only">Commission</label>

                            <input id="commission" type="text" class="form-control" name="commission" value="{{ old('commission') }}" placeholder="commission %" required autofocus>

                            @if ($errors->has('commission'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('commission') }}</strong>
                                </span>
                            @endif
                        </div>

                       <div class="form-group">
                            <button type="submit" class="btn btn-primary">
                                Add packages
                            </button>
                        </div>

                    </form>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
          </div>
        </div>
      </div>