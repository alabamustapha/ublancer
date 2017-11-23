@extends('layouts.app')

@section('content')

	
@include('layouts.partials.profile-nav')

<section id="manage-request" class="manage-requests pt-30">
	<div class="container">

		<div class="row justify-content-between">
			<div class="col-md-4">
				<h2>Manage Jobs</h2>
			</div>
			
			<div class="col-md-4 text-right">
				<a name="" id="" class="btn btn-primary" href="#" role="button">Post Job</a>	
			</div>
		</div>

		<div class="row mt-20">
	        <div class="col-md-12">
                <table class="table table-bordered table-hover table-striped table-responsive">
                    <thead class="thead-inverse">
                        <tr>
                            <th>S/N</th>
                            <th>Job description</th>
                            <th>Status</th>
                            <th>Proposals</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>
                            @foreach($user->jobs as $job)
                            <tr>
                                <td scope="row">{{ $loop->iteration }}</td>
                                <td>{{ str_limit($job->description, 100) }}</td>
                                <td>{{ $job->status }}</td>
                                <td>{{ $job->proposals->count() }}</td>
                                <td>
                                    <div class="btn-group btn-group-sm" role="group" aria-label="">
                                        <a name="" id="" class="btn btn-primary" href="#" role="button">View</a>
                                        <a name="" id="" class="btn btn-danger" href="#" role="button">Delete</a>
                                    </div>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                </table>
        	</div>
        </div>    
	</div>
</section>
   
 
@endsection
