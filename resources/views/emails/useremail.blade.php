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
          
          {{-- @component('mail::message')
          Hello **{{$name}}**,  --}}

           {{-- use double space for line break --}}
          {{-- Thank you for choosing Mailtrap!
          Click below to start working right now
          @component('mail::button', ['url' => $link])
          Go to your inbox
          @endcomponent
          Sincerely,
          Mailtrap team.
          @endcomponent --}}

          <div class="row">
            <!-- Basic Form-->
            <div class="col-lg-6">
              <div class="card">
                <div class="card-header border-bottom">
                  <h2 class="h4 mb-0" style="text-align: center">Send Email</h2>
                </div>
                <div class="card-body">
                  {{-- <form  method="POST" action="{{ route('post_course') }}">
                        @csrf
                        <div class="mb-p3">
                          <label class="form-label" for="naem">Name</label>
                          <input class="form-control" name="name" type="text">
                          @error('name')
                          <div class="alert alert-danger" role="alert">
                              {{$message}}
                          </div>
                          @enderror
                        </div>
                        <div class="mb-3">
                          <label class="form-label" for="exampleInputEmail1">Email address</label>
                          <input class="form-control" name="email" type="email" aria-describedby="emailHelp">
                          <div class="form-text" id="emailHelp">We'll never share your email with anyone else.</div>
                          @error('email')
                            <div class="alert alert-danger" role="alert">
                                {{$message}}
                            </div>
                          @enderror
                        </div>
                        <div class="mb-p3">
                          <label class="form-label" for="phone">Phone</label>
                          <input class="form-control" name="phone" type="phone" >
                          @error('phone')
                            <div class="alert alert-danger" role="alert">
                                {{$message}}
                            </div>
                           @enderror
                        </div>
                        <div class="mb-p3">
                          <label class="form-label" for="exampleInputPassword1">Password</label>
                          <input class="form-control" name="password" type="password" >
                          @error('password')
                            <div class="alert alert-danger" role="alert">
                                {{$message}}
                            </div>
                          @enderror
                        </div><br>
                        <button class="btn btn-primary" type="submit">Submit</button>
                  </form> --}}
                  
                  <h1>{{ $details['title'] }}</h1>
                  <p>{{ $details['body'] }}</p> 

                  <p>Thank you</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
    </div>
@endsection







