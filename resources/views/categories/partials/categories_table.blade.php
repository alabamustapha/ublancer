<div class="row">
      <div class="col-12">
        <div class="table-responsive">
          <table class="table table-striped">
            <thead>
              <tr>
                <th>#</th>
                <th>Name</th>
                <th>Featured</th>
                <th>Main Category</th>
              </tr>
            </thead>
            <tbody>
              @foreach($categories as $category)
              <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $category->name }}</td>
                <td>{{ $category->featured}}</td>
                <td>{{ $category->main_category->name }}</td>
                <td><button class="btn btn-danger delete-category" id="form{{ $category->id }}">Delete</button>

                            <form id="delete-category-form{{ $category->id }}" action="{{ route('delete_category', ['category' => $category->id]) }}" method="POST" style="display: none;">
                                {{ csrf_field() }}
                                {{ method_field('DELETE') }}
                            </form>
                            <a class="btn btn-primary" href="{{ route('edit_category', $category->id) }}">Edit</a>
                </td>
              </tr>
              @endforeach
            </tbody>
          </table>
        </div>

      </div>
    </div>
