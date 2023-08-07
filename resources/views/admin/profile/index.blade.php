@extends('admin.layout.master')
@section('content')
<section class="section">
    <div class="section-header">
      <h1>Profile</h1>
      <div class="section-header-breadcrumb">
        <div class="breadcrumb-item active"><a href="#">Dashboard</a></div>
        <div class="breadcrumb-item">Profile</div>
      </div>
    </div>
    <div class="section-body">
      <h2 class="section-title">Hi, {{Auth::user()->name}}!</h2>
      <p class="section-lead">
        Change information about yourself on this page.
      </p>

      <div class="row mt-sm-4">

        <div class="col-12 col-md-12 col-lg-7">
          <div class="card">
            <form method="post" class="needs-validation" novalidate="" action="{{route('admin.profile.update')}}" enctype="multipart/form-data">
                @csrf
              <div class="card-header">
                <h4>Update Profile</h4>
              </div>
              <div class="card-body">
                <div class="mb-3">
                    <img src="{{asset(Auth::user()->image)}}" alt="" width="150">
                </div>
                  <div class="row">

                    <div class="form-group  col-12">
                      <label> Image</label>
                      <input name="image" type="file" class="form-control @error('image') is-invalid   @enderror" >
                      @error('image')
                      <div class="text-red text-small">
                       {{$message}}
                      </div>
                      @enderror
                    </div>
                    <div class="form-group col-md-6 col-12">
                      <label> Name</label>
                      <input name="name" type="text" class="form-control @error('name') is-invalid   @enderror"   value="{{old('name',Auth::user()->name)}}">
                      @error('name')
                      <div class="text-red text-small">
                       {{$message}}
                      </div>
                      @enderror
                    </div>
                    <div class="form-group col-md-6 col-12">
                      <label>Email</label>
                      <input name="email" type="email" class="form-control  @error('email') is-invalid   @enderror" value="{{old('email',Auth::user()->email)}}" >
                      @error('email')
                      <div class="text-red text-small">
                       {{$message}}
                      </div>
                      @enderror
                    </div>
                  </div>

              </div>
              <div class="card-footer text-right">
                <button class="btn btn-primary">Save Changes</button>
              </div>
            </form>
          </div>
        </div>
        <div class="col-12 col-md-12 col-lg-7">
          <div class="card">
            <form method="POST" class="needs-validation" novalidate=""
            action="{{route('admin.profile.changePassword')}}"
             >
                @csrf
              <div class="card-header">
                <h4>Change Password</h4>
              </div>
              <div class="card-body">

                  <div class="row">

                    <div class="form-group  col-12">
                      <label> Current Password</label>
                      <input name="current_password" type="password" class="form-control   @error('current_password') is-invalid   @enderror"   >
                      @if($errors->has('current_password'))
                      <div class=" invalid-feedback">
                          {{ $errors->first('current_password') }}
                      </div>
                  @endif
                    </div>
                    <div class="form-group  col-12">
                      <label> New Password</label>
                      <input name="password" type="password" class="form-control         @error('password') is-invalid   @enderror"   >
                      @if($errors->has('password'))
                      <div class=" invalid-feedback">
                          {{ $errors->first('password') }}
                      </div>
                  @endif
                    </div>
                    <div class="form-group  col-12">
                      <label> Confirm Password</label>
                      <input name="password_confirmation" type="password" class="form-control  @error('password_confirmation') is-invalid   @enderror"   >
                      @if($errors->has('password_confirmation'))
                      <div class=" invalid-feedback">
                          {{ $errors->first('password_confirmation') }}
                      </div>
                  @endif
                    </div>

                  </div>

              </div>
              <div class="card-footer text-right">
                <button class="btn btn-primary">Update</button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </section>
@endsection
