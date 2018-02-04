@extends('layouts.app')

@section('content')

	
@include('layouts.partials.profile-nav')

<section id="manage-request" class="manage-requests pt-30">
	<div class="container">

		<div class="row justify-content-between">
			<div class="col-md-12">
				<h2>Proposal for  "{{ $job->title }}"</h2>
			</div>
			
		</div>

		<div class="row mt-10">
			<div class="col-md-12">

				<ul class="nav nav-tabs" id="requetsTab" role="tab-list">
					<li class="nav-item">
						<a class="nav-link active" href="#active">Active <span class="badge badge-primary">{{ $proposal->count() }}</span></a>
					</li>
				</ul>

				<div class="tab-content" id="requestsTabContent">
					<div class="tab-pane fade show active" id="active" role="tabpanel" aria-labelledby="active-request-tab">
						@if($proposal->count() > 0)
						<table class="table table-bordered table-hover table-striped table-responsive mt-10">
							<thead class="thead-inverse">
								<tr>
									<th>Id</th>
									<th>Name</th>
									<th>Description</th>
									<th>Offer</th>
									<th>Days</th>
									<th>Action</th>
								</tr>
							</thead>
							<tbody>
								@foreach($proposal as $prop)
								<tr>
									<td scope="row">{{ $loop->iteration }}</td>
									<td>{{ $prop->user()->first()->name }}</td>
									<td>{{ str_limit($prop->body, 1000) }}</td>
									<td>{{ $prop->offer }}</td>
									<td>{{ $prop->days}}</td>
									<td>
										<div class="btn-group btn-group-sm" role="group" aria-label="">
											<a name="" id="" class="btn btn-primary" href="/" role="button">Accept</a>
											<a name="" id="" class="btn btn-danger" href="#" role="button">Decline</a>
										</div>
									</td>
								</tr>
								@endforeach
							</tbody>
						</table>
						@else
							<h3>No active Proposal</h3>
						@endif
					</div>
				</div>
				
			</div>
		</div>    
	</div>
</section>
   
 
@endsection
