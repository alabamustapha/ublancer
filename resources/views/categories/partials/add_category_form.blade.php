<!-- Modal -->
      <div class="modal fade" id="createCategoryModal" tabindex="-1" role="dialog" aria-labelledby="createCategoryLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="CategoryModalLabel">Add category</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
                <form class="form" method="POST" action="{{ route('add_category') }}" enctype="multipart/form-data">
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

                        <div class="form-group{{ $errors->has('category_id') ? ' has-error' : '' }}">
                            <label for="username" class="control-label sr-only">Main category</label>

                            <select name="category_id" class="form-control">
                                <option value="">Not a sub category</option>
                                @foreach($categories as $category)
                                    <option value="{{ $category->id }}">{{ $category->name }}</option>
                                @endforeach
                             </select>

                          @if ($errors->has('category_id'))
                              <span class="help-block">
                                  <strong>{{ $errors->first('category_id') }}</strong>
                              </span>
                          @endif

                        </div>

                        <div class="form-group">
                          <label class="custom-file">
                            <input type="file" id="file2" class="custom-file-input">
                            <span class="custom-file-control"></span>
                          </label>
                        </div>

                        <div class="form-group">
                            <div class="checkbox">
                                <label>
                                    <input type="checkbox" name="featured" value="1"> Featured
                                </label>
                            </div>
                        </div>


                        <div class="form-group">
                            <button type="submit" class="btn btn-primary">
                                Add category
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