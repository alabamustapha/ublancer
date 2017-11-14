@extends('layouts.app')

@section('content')

	<div class="container">
		<nav class="nav" style="border-bottom: 2px solid #5989e5;">
		  <a class="nav-link active" href="#">Dashboard</a>
		  <a class="nav-link active" href="#">Selling</a>
		  <a class="nav-link active" href="#">Buying</a>
		  <a class="nav-link active" href="#">Messages</a>
		  <a class="nav-link active" href="#">Billing</a>
		</nav>
	</div>	


<section id="user-profile" class="profile pt-30">
	<div class="container">
	    <div class="row">

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

		    <ul class="list-group list-group-flush" id="profile-tab" role="tablist" aria-orientation="vertical">
		              
		  	 	<li class="list-group-item">
		  	 		<a class="profile-link" id="profile-home-tab" data-toggle="pill" href="#profile-home" role="tab" aria-controls="profile-home" aria-selected="true">
		  	 		<span class="fa fa-user-md"></span> Profile
		  	 		</a>
		  	 	</li>
					
		  	 	<li class="list-group-item">
					<a class="profile-link" id="profile-social-tab" data-toggle="pill" href="#profile-social" role="tab" aria-controls="profile-social" aria-selected="true">
		  	 		<span class="fa fa-chain"></span> Link Account
		  	 		</a>
		  	 	</li>
			
		  	 	<li class="list-group-item">
		  	 		<a class="profile-link" id="profile-security-tab" data-toggle="pill" href="#profile-security" role="tab" aria-controls="profile-security" aria-selected="true">
		  	 		<span class="fa fa-lock"></span> Security
		  	 		</a>
		  	 	</li>

		    </ul> 

	            <div class="card-body text-center">
	              <a href="#" class="card-link"><span class="fa fa-facebook"></span>&nbsp;</a>
	              <a href="#" class="card-link"><span class="fa fa-twitter"></span>&nbsp;</a>
	              <a href="#" class="card-link"><span class="fa fa-linkedin"></span>&nbsp;</a>
	              <a href="#" class="card-link"><span class="fa fa-google-plus"></span>&nbsp;</a>
	            </div>
	          </div>
	        </div>

	        <div class="col-md-8">
	          
	          <div class="card">
	            <div class="card-body">
					<div class="tab-content" id="profile-tabContent">
					  <div class="tab-pane fade show active" id="profile-home" role="tabpanel" aria-labelledby="v-profile-home-tab">
					  	<h4 class="card-title">Update Profile</h4>
							  <form class="form" method="POST" action="{{ route('update_profile', ['user' => $user->username]) }}">
		                        {{ csrf_field() }}
		                        {{ method_field("PUT") }}

		                        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
		                            <label for="name" class="control-label"> Full name</label>

		                            <input id="name" type="text" class="form-control" name="name" value="{{ $user->name }}" placeholder="Name" required autofocus>

		                            @if ($errors->has('name'))
		                                <span class="help-block">
		                                    <strong>{{ $errors->first('name') }}</strong>
		                                </span>
		                            @endif
		                        </div>

		                        <div class="form-group{{ $errors->has('username') ? ' has-error' : '' }}">
		                            <label for="username" class="control-label">Username</label>

		                            <input id="username" type="text" class="form-control" name="username" value="{{ $user->username }}" placeholder="Username" disabled>
		                        </div>

		                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
		                            <label for="email" class="control-label">E-Mail Address</label>

		                            <input id="email" type="email" class="form-control" name="email" value="{{ $user->email }}" placeholder="Email" required>

		                            @if ($errors->has('email'))
		                                <span class="help-block">
		                                    <strong>{{ $errors->first('email') }}</strong>
		                                </span>
		                            @endif
		                        </div>

		                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
		                            <label for="email" class="control-label">Status</label>

		                            <select class="form-control">
		                            	<option>Available</option>
		                            	<option>Not Available</option>
		                            </select>

		                            @if ($errors->has('email'))
		                                <span class="help-block">
		                                    <strong>{{ $errors->first('email') }}</strong>
		                                </span>
		                            @endif
		                        </div>
		                        <div class="form-group">
			                        <label class="custom-file">
									  <input type="file" id="profile-img" class="custom-file-input" name="image">
									  <span class="custom-file-control">profile image</span>
									</label> 
									<label class="custom-file">
									  <input type="file" id="background-img" class="custom-file-input" name="bg_image">
									  <span class="custom-file-control">background image</span>
									</label>
								</div>

		                        <div class="form-group">
		                            <button type="submit" class="btn btn-primary">
		                                Save changes
		                            </button>
		                        </div>
		                    </form>
						</div>
						<div class="tab-pane fade show" id="profile-security" role="tabpanel" aria-labelledby="v-profile-security-tab">
					  	<h4 class="card-title">Update Profile</h4>
							  <form class="form" method="POST" action="{{ route('update_profile', ['user' => $user->username]) }}">
		                        {{ csrf_field() }}
		                        {{ method_field("PUT") }}

		                        
		                        <div class="form-group{{ $errors->has('current_password') ? ' has-error' : '' }}">
		                            <label for="current_password" class="control-label sr-only">Current Password</label>

		                        
		                            <input id="current_password" type="password" class="form-control" name="current_password" placeholder="current password" required>

		                            @if ($errors->has('password'))
		                                <span class="help-block">
		                                    <strong>{{ $errors->first('password') }}</strong>
		                                </span>
		                            @endif
		                            
		                        </div>
								<div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
		                            <label for="password" class="control-label sr-only">Password</label>

		                        
		                            <input id="password" type="password" class="form-control" name="password" placeholder="Password" required>

		                            @if ($errors->has('password'))
		                                <span class="help-block">
		                                    <strong>{{ $errors->first('password') }}</strong>
		                                </span>
		                            @endif
		                            
		                        </div>

		                        <div class="form-group">
		                            <label for="password-confirm" class="control-label sr-only">Confirm Password</label>

		                            <input id="password-confirm" type="password" class="form-control" name="password_confirmation" placeholder="Password confirmation" required>
		                        </div>

		                        
		                        <div class="form-group">
		                            <button type="submit" class="btn btn-primary">
		                                Update password
		                            </button>
		                        </div>
		                    </form>
						</div>
	            	</div>
				</div>
	        </div>

    	</div>
	</div>
</section>
   
 
@endsection
