<div class="row">
      <div class="col-12">
        <div class="table-responsive">
          <table class="table table-striped">
            <thead>
              <tr>
                <th>#</th>
                <th>Name</th>
              </tr>
            </thead>
            <tbody>
              @foreach($skills as $skill)
              <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $skill->name }}</td>
                <td><button class="btn btn-danger delete-skill" id="form{{ $skill->id }}">Delete</button>

                            <form id="delete-skill-form{{ $skill->id }}" action="{{ route('delete_skill', ['skill' => $skill->id]) }}" method="POST" style="display: none;">
                                {{ csrf_field() }}
                                {{ method_field('DELETE') }}
                            </form>
                            <a class="btn btn-primary" href="{{ route('edit_skill', ['skill' => $skill->id]) }}" }}">Edit</a>
                </td>
              </tr>
              @endforeach
            </tbody>
          </table>
        </div>

      </div>
    </div>
