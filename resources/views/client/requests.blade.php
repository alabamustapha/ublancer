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

		<div class="row mt-10">
			<div class="col-md-12">

				<ul class="nav nav-tabs" id="requetsTab" role="tab-list">
					<li class="nav-item">
						<a class="nav-link active" href="#active">Active <span class="badge badge-primary">{{ $user->jobs->count() }}</span></a>
					</li>
				</ul>

				<div class="tab-content" id="requestsTabContent">
					<div class="tab-pane fade show active" id="active" role="tabpanel" aria-labelledby="active-request-tab">
						@if($user->jobs->count() > 0)
						<table class="table table-bordered table-hover table-striped table-responsive mt-10">
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
						@else
							<h3>No active requests</h3>
						@endif
					</div>
				</div>
				
			</div>
		</div>    
	</div>
</section>
   
 
@endsection
