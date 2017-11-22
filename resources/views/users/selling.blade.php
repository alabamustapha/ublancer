@extends('layouts.app')

@section('content')

	
@include('layouts.partials.profile-nav')

<section id="user-selling" class="selling pt-30">
	<div class="container">
		<div class="row">
			<div class="col-12">
				<div class="card">
				  <div class="card-body">
				    	<div class="row">
				    			<div class="col-md-3 text-left">
				    				<h4>Selling</h4>
				    				<span>Summary</span>
				    			</div>
				    			

				    			<div class="col-md-2 text-center">
				    				<h4>1</h4>
				    				<span>Open</span>
				    			</div>

				    			<div class="col-md-2 text-center">
				    				<h4>10</h4>
				    				<span>Ongoing</span>
				    			</div>

				    			<div class="col-md-2 text-center">
				    				<h4>10</h4>
				    				<span>Closed</span>
				    			</div>

				    			<div class="col-md-3 text-center">
				    				<h4>100$</h4>
				    				<span>Amount spent</span>
				    			</div>
				    	</div>
				  </div>
				</div>
			</div>
		</div>	

	    <div class="row mt-10">
	     	<div class="col-md-3">
	          
	          <div class="card">
	            
	            <img class="card-img-top" src="/img/cat.jpeg" alt="Card image cap">
				
				<img class="rounded-circle profile-img" src="/img/avatar-3.jpg" alt="Card image cap" width="75">
	              
	              <h4 class="card-title text-center">{{ $user->name }}</h4>
	              
	              <p class="text-center">
	              	<i class="fa fa-star"></i> 
	              	<i class="fa fa-star"></i> 
	              	<i class="fa fa-star"></i> 
	              	<i class="fa fa-star"></i> 
	              	<i class="fa fa-star"></i>
	              </p>

	            <div class="card-body text-center">
	              <a href="#" class="card-link"><span class="fa fa-facebook"></span>&nbsp;</a>
	              <a href="#" class="card-link"><span class="fa fa-twitter"></span>&nbsp;</a>
	              <a href="#" class="card-link"><span class="fa fa-linkedin"></span>&nbsp;</a>
	              <a href="#" class="card-link"><span class="fa fa-google-plus"></span>&nbsp;</a>
	            </div>
	          </div>
	        </div>

	        <div class="col-md-9">
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
