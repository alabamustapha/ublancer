@extends('layouts.admin')

@section('admin-content')
  
  <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#createSkillModal">
    Add Skill
  </button>
  
  <h2>{{ $skills->count() }} Available skills </h2>
  
  
  @include('skills.partials.skills_table')  
  
  @include('skills.partials.add_skill_form')  

  
@endsection    


@section('scripts')
    <script type="text/javascript">

      $(document).ready(function(){

          $('button.delete-skill').click(function(event){
            
            event.preventDefault();

            var form = $(this).attr('id');
            swal({
              title: "Are you sure?",
              text: "Skill will be deleted",
              type: "warning",
              showCancelButton: true,
              confirmButtonColor: "#DD6B55",
              confirmButtonText: "Yes, delete it!",
              closeOnConfirm: false
            },
            function(){
              document.getElementById('delete-skill-' + form).submit();
            });
      
          });
          
      });
      
      
    </script>
@endsection