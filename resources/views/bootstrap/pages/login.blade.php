@extends('bootstrap.layouts.default')
@section('content')
    <section class="vh" style="background-color: #5daff3;">
        @include('bootstrap.includes.header')
        <div class="container py-5 h-100">
          <div class="row d-flex justify-content-center align-items-center h-100">
            <div class="col col-xl-10">
      
              <div class="card" style="border-radius: 15px;">
                <div class="card-body p-5">
                  @if ($message = Session::get('success'))    
                    <div class="alert alert-success" role="alert" x-data="{show: true}" x-init="setTimeout(() => show = false, 3500)" x-show="show">
                      <h5 class="alert-heading">{{$message}}</h5>
                    </div>
                  @endif
                  
                  <form action="/action_page.php">
                    <div class="mb-3 mt-3">
                      <label for="email" class="form-label">Email:</label>
                      <input type="email" class="form-control" id="email" placeholder="Enter email" name="email" autocomplete="off">
                    </div>
                    <div class="mb-3">
                      <label for="pwd" class="form-label">Password:</label>
                      <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="pswd" autocomplete="off">
                    </div>
                    <div class="form-check mb-3">
                      <label class="form-check-label">
                        <input class="form-check-input" type="checkbox" name="remember"> Remember me
                      </label>
                    </div>
                    <button type="submit" class="btn btn-primary">Login</button>
                  </form>
              </div>
            </div>
          </div>
        </div>
    </section>
@endsection
