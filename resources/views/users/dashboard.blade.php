@extends('layouts.app')

@section('content')

	
@include('layouts.partials.profile-nav')

<section id="user-dashboard" class="dashboard pt-30">
	<div class="container">
		<div class="row">
			<div class="col-12">
				<div class="card">
				  <div class="card-body">
				    	<div class="row">
				    			<div class="col-md-3 text-left">
				    				<h4>Good morning</h4>
				    				<span>{{ $user->name }}</span>
				    			</div>
				    			

				    			<div class="col-md-2 text-center">
				    				<h4>1</h4>
				    				<span>Open Purchases</span>
				    			</div>

				    			<div class="col-md-2 text-center">
				    				<h4>10</h4>
				    				<span>Sales in queue</span>
				    			</div>

				    			<div class="col-md-2 text-center">
				    				<h4>10$</h4>
				    				<span>Balance</span>
				    			</div>

				    			<div class="col-md-3 text-center">
				    				<h4>10</h4>
				    				<span>Proposal credits left</span>
				    			</div>
				    	</div>
				  </div>
				</div>
			</div>
		</div>	

	    <div class="row mt-10">

	     	<div class="col-md-4">
	          
	          <div class="card" style="width: 20rem;">
	            
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

	        <div class="col-md-8">

					<ul class="nav nav-tabs" id="myTab" role="tablist">
					  <li class="nav-item">
					    <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Notifications</a>
					  </li>
					  <li class="nav-item">
					    <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Todo</a>
					  </li>
					  <li class="nav-item">
					    <a class="nav-link" id="contact-tab" data-toggle="tab" href="#contact" role="tab" aria-controls="contact" aria-selected="false">Recommended Job</a>
					  </li>
					</ul>
					<div class="tab-content pt-30" id="myTabContent">
					  <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
					  	<ul class="list-group">
						  <li class="list-group-item">Update account</li>
						  <li class="list-group-item">Payments</li>
						</ul>
					  </div>
					  <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
					  	<ul class="list-group">
					  		<li class="list-group-item">
					  			You got a new message		
					  		</li>
					  		<li class="list-group-item">
					  			New task assigned
					  		</li>
					  	</ul>
					  </div>
					  <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">
					  	<ul class="list-group">
					  		<li class="list-group-item">
					  			Design a website in HTML and PHP
					  		</li>
					  		<li class="list-group-item">
					  			Fix errors on page
					  		</li>
					  	</ul>
					  </div>
					</div>
				

    	</div>
	</div>
</section>
   
 
@endsection
