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
                  <h2 class="h4 mb-0" style="text-align: center">Users_Courses</h2>
                </div>
                <div class="card-body">
                  {{-- <p class="text-sm">Lorem ipsum dolor sit amet consectetur.</p> --}}
                  {{-- action="{{ route('welcome.login') }}" --}}
                  <form  method="POST" action="{{ route('post_course') }}">
                    @csrf
                    <div class="mb-p3">
                        <label class="form-label" for="id">Users</label>
                        <select class="form-select control form-label" name="user"  aria-label="Default select example">
                            <option  selected >Select user</option>
                            @foreach($users as $user)
                              <option value="{{$user->id}}">{{$user->name}}</option>
                            @endforeach
                          </select>
                        @error('users')
                        <div class="alert alert-danger" role="alert">
                            {{$message}}
                        </div>
                        @enderror
                    </div><br>
                    <div class="mb-p3">
                        <label class="form-label" for="id">Courses</label>
                        <select class="form-select control form-label" name="course_name"  aria-label="Default select example">
                          <option  selected >Select course</option>
                       @foreach($items as $item) 
                          <option value="{{$item->id}}">{{$item->course_name}}</option>
                        @endforeach
                      </select>
                        @error('course_name')
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