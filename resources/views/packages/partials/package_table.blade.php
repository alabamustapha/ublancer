<div class="row">
      <div class="col-12">
        <div class="table-responsive">
          <table class="table table-striped">
            <thead>
              <tr>
                <th>#</th>
                <th>Name</th>
                <th>Bids</th>
                <th>Commission</th>
              </tr>
            </thead>
            <tbody>
              @foreach($packages as $package)
              <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $package->name }}</td>
                <td>{{ $package->bids }}</td>
                <td>{{ $package->commission }}</td>
                <td><button class="btn btn-danger delete-package" id="form{{ $package->id }}">Delete</button>

                            <form id="delete-package-form{{ $package->id }}" action="{{ route('delete_package', ['package' => $package->id]) }}" method="POST" style="display: none;">
                                {{ csrf_field() }}
                                {{ method_field('DELETE') }}
                            </form>
                            <a class="btn btn-primary" href="{{ route('edit_package', ['package' => $package->id]) }}" }}">Edit</a>
                </td>
              </tr>
              @endforeach
            </tbody>
          </table>
        </div>

      </div>
    </div>
