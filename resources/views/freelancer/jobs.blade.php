@extends('layouts.app')

@section('content')

    <section id="job-list" class="jobs">
      <div class="container">
        <header class="text-center no-margin-bottom">   
          <h2>Available Jobs</h2>
          <p class="lead">find jobs related to your skills, be nice with buyers</p>
        </header>
         
         <div class="row">
            @foreach($jobs as $job)

              <div class="col-sm-6 col-md-4">
                <div class="card">
                  <div class="card-body">
                    <h6 class="card-title">{{ $job->title }}</h6>
                    <p class="card-text">{{ str_limit($job->description, 145, '...') }}</p>
                    
                    
                    <a href="{{ route('job', ['id' => $job->id]) }}" class="btn btn-primary">View job</a>
                  </div>
                  <div class="card-footer text-muted">
                    @foreach($job->skills as $skill)
                      <span class="badge badge-light">{{ $skill }}</span>
                    @endforeach
                    
                  </div>
                </div>
              </div>

            @endforeach
           
          </div>       

      </div>
    </section>
   
  
    <div id="scrollTop">
      <div class="d-flex align-items-center justify-content-end"><i class="fa fa-long-arrow-up"></i>To Top</div>
    </div>
@endsection
