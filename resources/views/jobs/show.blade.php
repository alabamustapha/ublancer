@extends('layouts.app')

@section('content')

  @if(!($proposal) && auth()->user()->id != $job->client->id)  
  <!-- Modal -->
  <div class="modal fade" id="proposalModal" tabindex="-1" role="dialog" aria-labelledby="proposalModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="proposalModalLabel">Proposal for {{ $job->title }}</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
      <form action="{{ route('send_proposal', ['job' => $job->id]) }}" method="POST">
        {{ csrf_field() }}
          <input type="hidden" name="user_id" value="{{ auth()->user()->id}}">
          <input type="hidden" name="job_id" value="{{ $job->id}}">
        <div class="form-group">
          <label for="proposalBody" class="control-lable sr-only">Descriptio</label>
          <textarea class="form-control" id="proposalBody" placeholder="convince the client you are perfect for the job" name="body"></textarea>
        </div>
        
        <div class="form-row">
          <div class="form-group col-md-6">
            <label for="totalOffer">Total offer</label>
            <input type="number" name="offer" class="form-control" id="totalOffer" placeholder="total offer $" required>
          </div>
          <div class="form-group col-md-6">
            <label for="duration">Duration</label>
            <input type="number" class="form-control" id="duration" placeholder="duration" name="days">
          </div>
        </div>
        <label class="custom-control custom-checkbox">
          <input type="checkbox" name="terms" id="accept" value="1" class="custom-control-input">
          <span class="custom-control-indicator"></span>
          <span class="custom-control-description">I accept all terms and Conditions</span>
        </label>
        
        <div class="form-group text-center    ">  
            <button type="submit" class="btn btn-primary">Submit proposal</button>
        </div>  
    </form>   
        </div>
        
      </div>
    </div>
  </div>
  @endif
    <section id="job-list" class="jobs">
      <div class="container">
          <header class="text-center no-margin-bottom">   
          <h2>Job - Proposals</h2>
          @if ($errors->any())
              <div class="alert alert-danger">
                  <ul>
                      @foreach ($errors->all() as $error)
                          <li>{{ $error }}</li>
                      @endforeach
                  </ul>
              </div>
          @endif
          <p class="lead">find jobs related to your skills, be nice with buyers</p>
          </header>
         
          <div class="row">
            
            <div class="col-md-8">
              <div class="card">  
                <div class="card-body">
                  <h6 class="card-title">{{ $job->title }}</h6>
                  <p class="card-text">{{ $job->description }}</p>
                  
                  <strong>
                  Created: <span class="badge badge-light">{{ $job->created_at->diffForHumans() }}</span>
                  <span class="sr-only">Created</span>
                  </strong>  
                  <strong>
                  Budget: <span class="badge badge-light">{{ '$' . $job->budget }}</span>
                  <span class="sr-only">Budget</span>
                  </strong>  
                  <strong>
                  Duration: <span class="badge badge-light">{{ $job->days }}</span>
                  <span class="sr-only">Duration</span>
                  </strong>  
                  <strong>
                  Type: <span class="badge badge-light">{{ $job->type }}</span>
                  <span class="sr-only">Type</span>
                  </strong>
                  <strong>
                  Skills:
                  @foreach($job->skills as $skill)
                    <span class="badge badge-primary">{{ $skill }}</span>
                  @endforeach
                  </strong> 
                  @if(!($proposal) && auth()->user()->id != $job->client->id)
                  <hr>
                  <button class="btn btn-primary" data-toggle="modal" data-target="#proposalModal">Send proposal</button>
                  @endif

                  @if($job->proposals->count() > 0)
                    <span class="badge badge-primary">Offers sent: {{ $job->proposals->count() }}</span>
                  @else
                  <h3>No offers yet</h3> 
                  @endif
              </div>
            </div>

              @if($proposal)
              <div class="card">
                  
                  <div class="card-body">
                    <h4 class="card-title">My proposal</h4>
                    <p class="card-text">{{ $proposal->body }}</p>
                    <strong>
                    Created: <span class="badge badge-light">{{ $proposal->created_at->diffForHumans() }}</span>
                    <span class="sr-only">Created</span>
                    </strong>  

                  <strong>
                    Budget: <span class="badge badge-light">{{ '$' . $proposal->offer }}</span>
                    <span class="sr-only">Budget</span>
                  </strong>  
                  <strong>
                    Duration: <span class="badge badge-light">{{ $proposal->days }}</span>
                    <span class="sr-only">Duration</span>
                  </strong>  
                  <hr>
                  <button class="btn btn-primary" data-toggle="modal" data-target="#proposalModal">Edit</button>
                  <button class="btn btn-primary" data-toggle="modal" data-target="#proposalModal">Widthdraw</button>
                  
                </div>
              </div> 
              @endif


              

          </div>
            
            <div class="col-md-4">
              <div class="card" style="width: 20rem;">
                <img class="card-img-top" src="/img/cat.jpeg" alt="Card image cap">
                <div class="card-body">
                  <img class="rounded-circle profile-img" src="/img/avatar-3.jpg" alt="Card image cap" width="75px">
                  <h4 class="card-title text-center">{{ $job->client->name }}</h4>
                  <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                </div>
                <ul class="list-group list-group-flush">
                  <li class="list-group-item">Job Posted<span class="badge float-right">{{ $job->client->jobs->count() }}</span></li>
                  <li class="list-group-item">Jobs Completed<span class="badge float-right">{{ $job->client->jobs_completed() }}</span></li>
                  <li class="list-group-item">Jobs Payments<span class="badge float-right">{{ '$' . $job->client->jobs_payments() }}</span></li>
                  <li class="list-group-item">Rating<span class="float-right"><i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i></span></li>
                </ul>
                <div class="card-body text-center">
                  <a href="#" class="card-link"><span class="fa fa-facebook"></span>&nbsp;</a>
                  <a href="#" class="card-link"><span class="fa fa-twitter"></span>&nbsp;</a>
                  <a href="#" class="card-link"><span class="fa fa-linkedin"></span>&nbsp;</a>
                  <a href="#" class="card-link"><span class="fa fa-google-plus"></span>&nbsp;</a>
                </div>
              </div>
            </div>

          </div>       

      </div>
    </section>
   
  
    <!-- <div id="scrollTop">
      <div class="d-flex align-items-center justify-content-end"><i class="fa fa-long-arrow-up"></i>To Top</div>
    </div> -->
@endsection
