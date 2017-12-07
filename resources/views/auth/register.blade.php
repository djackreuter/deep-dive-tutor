@extends('layouts.master')

@section('content')
<div class="container">
    <div class="row justify-content-md-center mt-5">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Register</div>
                <div class="card-body">
                    <form role="form" method="POST" action="{{ url('/register') }}">
                        {!! csrf_field() !!}

                        <div class="form-group row">
                            <label class="col-lg-4 col-form-label text-lg-right">Name</label>

                            <div class="col-lg-6">
                                <input
                                        type="text"
                                        class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}"
                                        name="name"
                                        value="{{ old('name') }}"
                                        required
                                >
                                @if ($errors->has('name'))
                                    <div class="invalid-feedback">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </div>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-lg-4 col-form-label text-lg-right">E-Mail Address</label>

                            <div class="col-lg-6">
                                <input
                                        type="email"
                                        class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}"
                                        name="email"
                                        value="{{ old('email') }}"
                                        required
                                >

                                @if ($errors->has('email'))
                                    <div class="invalid-feedback">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </div>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-lg-4 col-form-label text-lg-right">Password</label>

                            <div class="col-lg-6">
                                <input
                                        type="password"
                                        class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}"
                                        name="password"
                                        required
                                >
                                @if ($errors->has('password'))
                                    <div class="invalid-feedback">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </div>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-lg-4 col-form-label text-lg-right">Confirm Password</label>

                            <div class="col-lg-6">
                                <input
                                        type="password"
                                        class="form-control{{ $errors->has('password_confirmation') ? ' is-invalid' : '' }}"
                                        name="password_confirmation"
                                        required
                                >
                                @if ($errors->has('password_confirmation'))
                                    <div class="invalid-feedback">
                                        <strong>{{ $errors->first('password_confirmation') }}</strong>
                                    </div>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                          <label class="col-lg-4 col-form-label text-lg-right">Bio</label>
                          <div class="col-lg-6">
                            <textarea type="text" name="bio" class="form-control" id="" placeholder="500 characters max..."></textarea>
                          </div>
                        </div>

                        <div class="form-group row">
                          <label class="col-lg-4 col-form-label text-lg-right">Rate</label>
                          <div class="col-lg-6">
                            <input type="text" name="rate" class="form-control" id="" placeholder="xx.xx">
                            <small class="form-text text-muted">If signing up as a tutor.</small>
                          </div>
                        </div>

                        <div class="form-group row">
                          <label class="col-lg-4 col-form-label text-lg-right">Profile Type</label>
                          <div class="col-lg-6">
                            <div class="form-check">
                              <label class="form-check-label">
                                <input class="form-check-input" type="radio" name="type" id="exampleRadios1" value="1" checked>
                                Tutor
                              </label>
                            </div>
                            <div class="form-check">
                              <label class="form-check-label">
                                <input class="form-check-input" type="radio" name="type" id="exampleRadios2" value="0">
                                Student
                              </label>
                            </div>
                          </div>
                        </div>

                        <div class="form-group row">
                          <label class="col-lg-4 col-form-label text-lg-right">Upload a photo</label>
                          <div class="col-lg-6">
                            <input type="file" name="image" class="form-control-file" id="exampleFormControlFile1">
                          </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-lg-6 offset-lg-4">
                                <button type="submit" class="btn btn-primary">
                                    Register
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
