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
                  <h2 class="h4 mb-0" style="text-align: center">Users_Courses List data</h2>
                </div>
                <div class="card-body">
                  {{-- <p class="text-sm">Lorem ipsum dolor sit amet consectetur.</p> --}}
                  {{-- action="{{ route('welcome.login') }}" --}}
                  <form  method="POST" action="{{ route('post_course') }}">
                    @csrf
                    <div class="mb-p3">
                  
                    </div><br>
                    <div class="card">
                        <div class="card-header"><h2 style="text-align:center;">Your Teams</h2></div>
                      
                        @foreach ($users as $user)
                          @foreach($user->courses as $course)
                            {{$course-> name}}
                            @endforeach
                        @endforeach
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