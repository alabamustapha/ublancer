@extends('layouts.admin')

@section('admin-content')
  
  <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#createpackageModal">
    Add package
  </button>
  
  <h2>{{ $packages->count() }} Available packages </h2>
  
  
  @include('packages.partials.package_table')  
  
  @include('packages.partials.add_package_form')  

  
@endsection    


@section('scripts')
    <script type="text/javascript">

      $(document).ready(function(){

          $('button.delete-package').click(function(event){
            
            event.preventDefault();

            var form = $(this).attr('id');
            swal({
              title: "Are you sure?",
              text: "package will be deleted",
              type: "warning",
              showCancelButton: true,
              confirmButtonColor: "#DD6B55",
              confirmButtonText: "Yes, delete it!",
              closeOnConfirm: false
            },
            function(){
              document.getElementById('delete-package-' + form).submit();
            });
      
          });
          
      });
      
      
    </script>
@endsection