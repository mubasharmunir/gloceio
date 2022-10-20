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
              <h2 class="h4 mb-0" style="text-align: center">User Form</h2>
              
            </div>
            <div class="card-body">
              {{-- <p class="text-sm">Lorem ipsum dolor sit amet consectetur.</p> --}}
              <form action="" method="POST"  >
                @csrf
                <div class="mb-p3">
                  <label class="form-label" for="naem">Name</label>
                  <input class="form-control" name="name" type="text">
                  @error('Name')
                  <div class="alert alert-danger" role="alert">
                      {{$message}}
                  </div>
                  @enderror
                </div>
                
                <div class="mb-3">
                  <label class="form-label" for="exampleInputEmail1">Email address</label>
                  <input class="form-control" name="email" type="email" aria-describedby="emailHelp">
                  <div class="form-text" id="emailHelp">We'll never share your email with anyone else.</div>
                  @error('Email')
                    <div class="alert alert-danger" role="alert">
                        {{$message}}
                    </div>
                  @enderror
                </div>
                <div class="mb-p3">
                  <label class="form-label" for="phone">Phone</label>
                  <input class="form-control" name="phone" type="phone" >
                  @error('Phone')
                    <div class="alert alert-danger" role="alert">
                        {{$message}}
                    </div>
                   @enderror
                </div>

                <div class="mb-p3">
                  <label class="form-label" for="exampleInputPassword1">Password</label>
                  <input class="form-control" name="password" type="password" required>
                  @error('Password')
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