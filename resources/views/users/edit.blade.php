@extends('layouts.master')

@section('content')
<form method="PUT" action="/users/{user}">
  {{ csrf_field() }}
  <!-- image -->
  <div class="form-group">
   <label for="image">Upload Your Selfie</label>
   <input type="file" name="image" class="form-control-file" id="exampleFormControlFile1">
 </div>
  <!-- email -->
  <div class="form-group">
    <label for="email">Email:</label>
    <input type="email" name="email" class="form-control" id="email" aria-describedby="emailHelp" placeholder="Enter email...">
  </div>
  <!-- password -->
  <div class="form-group">
    <label for="exampleInputPassword1">Password:</label>
    <input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
  </div>
  <!-- password confirm -->
  <div class="form-group">
    <label for="password_confirmation">Confirm Password:</label>
    <input type="password" name="password_confirmation" class="form-control" id="exampleInputPassword1" placeholder="Re-Enter password">
  </div>
  <!-- bio -->
  <div class="form-group">
    <label for="bio">Bio:</label>
    <input type="text" name="bio" class="form-control" id="exampleInputPassword1" placeholder="500 characters max...">
  </div>
  <div class="form-group">
    <label for="rate">Rate: $</label>
    <input type="text" name="rate" class="form-control" id="exampleInputPassword1" placeholder="xx.xx">
  </div>
  <!-- radio buttons -->
  <div class="form-check">
    <label class="form-check-label">
      <input class="form-check-input" type="radio" name="type_t" id="exampleRadios1" value="tutor" checked>
      Tutor
    </label>
  </div>
  <div class="form-check">
    <label class="form-check-label">
      <input class="form-check-input" type="radio" name="type_s" id="exampleRadios2" value="student">
      Student
    </label>
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>


@endsection
