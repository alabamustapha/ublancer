@extends('layouts.app')

@section('styles')
<link href="/vendor/select2/select2.min.css" rel="stylesheet" />
@endsection

@section('content')

    <section id="post-job" class="pt-50">
      <div class="container">
        <header class="text-center no-margin-bottom">   
          <h2>Post job requests</h2>
          <p class="lead">Find &amp; Hire talented freelancers.You need top quality freelancers who can make your business thrive.</p>
        </header>
         
         <div class="row">
            <div class="col">
              <div class="card">
                <div class="card-body">
                  <h6 class="card-title">Special title treatment</h6>
                  <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                  <form action="{{ route('add_job') }}" method="POST">
                    {{ csrf_field() }}
                    
                    <div class="form-row">
                      
                      <div class="form-group col-md-6">
                        <label for="jobTitle">Title</label>
                        <input type="text" class="form-control" id="jobTitle" placeholder="title" name="title" autofocus required>
                      </div>
                      <div class="form-group col-md-6">
                        <label for="jobCategory">Category</label>
                        
                        <select name="category_id" class="form-control">
                            <option value="">Not a sub category</option>
                            @foreach($categories as $category)
                                <option value="{{ $category->id }}">{{ $category->name }}</option>
                            @endforeach
                         </select>

                        @if ($errors->has('category_id'))
                            <span class="help-block">
                                <strong>{{ $errors->first('category_id') }}</strong>
                            </span>
                        @endif
                      </div>

                    </div>
                    
                    <div class="form-group">
                      <label for="jobDescription">Description</label>
                      <textarea class="form-control" placeholder="Description, be detailed as much as possible" name="description"></textarea>
                    </div>

                    <div class="form-row">
                      
                      <div class="form-group col-md-3">
                        <label for="jobBudget">Budget</label>
                        <input type="number" class="form-control" id="jobBudget" min="5" placeholder="budget" name="budget">
                      </div>
                      
                      <div class="form-group col-md-3">
                        <label for="jobDays">Duration</label>
                        <input type="number" class="form-control" id="jobDays" min="1" placeholder="duration" name="days">
                      </div>
                      
                      <div class="form-group col-md-3">
                        <label for="jobType">Type</label>
                        <select name="type" class="form-control">
                            <option value="fixed">Fixed</option>
                            <option value="hourly">Hourly</option>
                         </select>
                      </div>

                      <div class="form-group col-md-3">
                        <label>Description</label>
                        <label class="custom-file">
                          <input type="file" id="jobFile" class="custom-file-input" name="file">
                          <span class="custom-file-control"></span>
                        </label>
                      </div>
                    
                    </div>
                    
                    <div class="form-group">
                      <label for="jobSkills">Skills</label>
                      <select multiple id="jobSkills" class="form-control" style="width: 100%" name="skills[]">
                        @foreach($skills as $skill)
                            <option value="{{ $skill->id }}">{{ $skill->name }}</option>
                        @endforeach
                      </select>
                    </div>  

                    <button type="submit" class="btn btn-primary">Post</button>
                  </form>
                </div>
              </div>
            </div>
          </div>       

      </div>
    </section>
   
  
    <div id="scrollTop">
      <div class="d-flex align-items-center justify-content-end"><i class="fa fa-long-arrow-up"></i>To Top</div>
    </div>
@endsection

@section('scripts')
<script src="/vendor/select2/select2.min.js"></script>

<script>
  $("select#jobSkills").select2({
    placeholder: 'Select requested skills',
    allowClear: true,
    maximumSelectionLength: 6,
    width: 'style'

  });
</script>
@endsection