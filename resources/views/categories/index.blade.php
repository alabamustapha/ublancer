@extends('layouts.admin')

@section('admin-content')
  
  <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#createCategoryModal">
    Add category
  </button>
  
  <h2>{{ $categories->count() }} Available Categories </h2>
  
  
  @include('categories.partials.categories_table')  
  
  @include('categories.partials.add_category_form')  

  
@endsection    


@section('scripts')
    <script type="text/javascript">

      $(document).ready(function(){

          $('button.delete-category').click(function(event){
            
            event.preventDefault();

            var form = $(this).attr('id');
            swal({
              title: "Are you sure?",
              text: "Category will be deleted",
              type: "warning",
              showCancelButton: true,
              confirmButtonColor: "#DD6B55",
              confirmButtonText: "Yes, delete it!",
              closeOnConfirm: false
            },
            function(){
              document.getElementById('delete-category-' + form).submit();
            });
      
          });
          
      });
      
      
    </script>
@endsection