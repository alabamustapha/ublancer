@extends('layouts.admin')

@section('admin-content')
    <h1>Package Edit</h1>

    <form class="form" method="POST" action="{{ route('update_package',['id'=>$package->id]) }}">
    {{ csrf_field() }}
    
    <input type="hidden" name="id" value="{{ $package->id }}">
    <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
        <label for="name" class="control-label sr-only">Name</label>

        <input id="name" type="text" class="form-control" name="name" value="{{ $package->name }}" placeholder="Name" required autofocus>

        @if ($errors->has('name'))
            <span class="help-block">
                <strong>{{ $errors->first('name') }}</strong>
            </span>
        @endif
    </div>

    <div class="form-group{{ $errors->has('bids') ? ' has-error' : '' }}">
        <label for="bids" class="control-label sr-only">Max Bids</label>

        <input id="bids" type="text" class="form-control" name="bids" value="{{ $package->bids }}" placeholder="Max Bids" required autofocus>

        @if ($errors->has('bids'))
            <span class="help-block">
                <strong>{{ $errors->first('bids') }}</strong>
            </span>
        @endif
    </div>

    <div class="form-group{{ $errors->has('commission') ? ' has-error' : '' }}">
        <label for="commission" class="control-label sr-only">Commission</label>

        <input id="commission" type="text" class="form-control" name="commission" value="{{ $package->commission }}" placeholder="commission %" required autofocus>

        @if ($errors->has('commission'))
            <span class="help-block">
                <strong>{{ $errors->first('commission') }}</strong>
            </span>
        @endif
    </div>

   <div class="form-group">
        <button type="submit" class="btn btn-primary">
            Update packages
        </button>
    </div>

</form>
@endsection    