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
              <h2 class="h4 mb-0" style="text-align: center">Product Form</h2> 
            </div>
            <div class="card-body">
              {{-- <p class="text-sm">Lorem ipsum dolor sit amet consectetur.</p> --}}
              <form data_action="{{ route('products') }}" method="POST"  class="product_form" >
                @csrf
                <div class="mb-p3">
                  <label class="form-label" for="product_name"> Product Name</label>
                  <input class="form-control" name="product_name" type="text">
                  @error('product_name')
                  <div class="alert alert-danger" role="alert">
                      {{$message}}
                  </div>
                  @enderror
                </div><br>
                <div class="mb-p3">
                    <label class="form-label" for="color">color</label>
                    <input class="form-control" name="color" type="text">
                    @error('color')
                    <div class="alert alert-danger" role="alert">
                        {{$message}}
                    </div>
                    @enderror
                </div><br>

                <div class="mb-p3">
                    <label class="form-label" for="">type</label>
                  
                    <select class="form-select control form-label" name="type"  aria-label="Default select example">
                        <option  selected >Select your product type</option>
                        <option value="1">mobile</option>
                        <option value="2">tablet</option>
                        <option value="3">laptop</option>
                        
                      </select>

                    @error('type')
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