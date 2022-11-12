@extends('frontend.layout')
@if(session()->has('success'))
<div class="alert alert-success">
    {{ session()->get('success') }}
</div>
@endif
@if(session()->has('error'))
<div class="alert alert-danger">
    {{ session()->get('error') }}
</div>
@endif
@section('content')
<div class="page">
<section class="pb-5">
    <div class="container-fluid">
      <div class="row">
        <!-- Basic Form-->
        <div class="col-lg-6">
          <div class="card">
            <div class="card-header border-bottom">
              <h2 class="h4 mb-0" style="text-align: center">Course Form</h2> 
            </div>
            <div class="card-body">
              {{-- <p class="text-sm">Lorem ipsum dolor sit amet consectetur.</p> --}}
              <form data_action="" method="POST"  class="course_from" >
                @csrf
                <div class="mb-p3">
                  <label class="form-label" for="Course name"> Course Name</label>
                  <input class="form-control" name="course_name" type="text">
                  @error('course_name')
                  <div class="alert alert-danger" role="alert">
                      {{$message}}
                  </div>
                  @enderror
                </div><br>
                <div class="mb-p3">
                    <label class="form-label" for="id">ID</label>
                    <input class="form-control" name="course_id" type="text">
                    @error('course_id')
                    <div class="alert alert-danger" role="alert">
                        {{$message}}
                    </div>
                    @enderror
                </div><br>
                <div class="mb-p3">
                    <label class="form-label" for="id">Credit_Hours</label>
                  
                    <select class="form-select control form-label" name="credit_hours"  aria-label="Default select example">
                        <option  selected >Select your Credit Hours</option>
                        <option value="1">One</option>
                        <option value="2">Two</option>
                        <option value="3">Three</option>
                        <option value="4">Four</option>
                      </select>

                    @error('credit_hours')
                    <div class="alert alert-danger" role="alert">
                        {{$message}}
                    </div>
                    @enderror
                </div><br>
                <div class="mb-p3">
                    <label class="form-label" for="description">Description</label>
                    <textarea  class="form-control" id="w3review" name="description" rows="" cols="50"></textarea>
                    @error('description')
                    <div class="alert alert-danger" role="alert">
                        {{$message}}
                    </div>
                    @enderror
                </div><br>
                <button class="btn btn-primary" type="submit">Submit</button>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
</div>
@endsection
<script>
$(document).on('submit',".course_from",function(e){
  e.preventDefault();
  var form = $(this);
  $.ajax({
    type:form.attr('method'),
    url:from.attr('data_action'),
    data:from.serialize(),
    success:function(data){
      if(data.code==200){
        toaster.success(data.message)
        form.trigger('reset');
      }
    }
  })
})
</script>