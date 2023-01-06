@extends('bootstrap.layouts.default')
@section('content')
    <section class="vh" style="background-color: #68c9cc;">
        @include('bootstrap.includes.header')
        <div class="container py-5 h-100">
          <div class="row d-flex justify-content-center align-items-center h-100">
            <div class="col col-xl-10">
      
              <div class="card" style="border-radius: 15px;">
                <div class="card-body p-5">
      
                  <h6 class="mb-3"><a href="/home" class="text-decoration-none">STUFF TO DO</a></h6>
                  
                  <form action="{{route('home.store')}}" class="d-flex justify-content-center align-items-center mb-4" method="POST">
                    @csrf
                    <div class="form-outline flex-fill">
                      <input type="text" id="form3" class="form-control form-control-lg" name="todo"/>
                    </div>
                    <button type="submit" class="btn btn-primary btn-lg ms-2">Add</button>
                  </form>
      
                  <ul class="list-group mb-0">
                    @foreach ($todos as $todo)
                        <li
                            class="list-group-item d-flex d-flex justify-content-between align-items-center border-start-0 border-top-0 border-end-0 border-bottom rounded-0 mb-2">
                            <div class="d-flex align-items-center">
                                <form action="{{route('home.update',$todo->id)}}" method="POST">
                                  @csrf
                                  {{method_field('PUT')}}
                                    @if ($todo->done == 1)
                                        <input class="form-check-input me-2" type="checkbox" name="input_check" aria-label="..." checked onchange="this.closest('form').submit();return false;"/>
                                        <s>{{$todo->to_do}}</s>    
                                    @else
                                        <input class="form-check-input me-2" type="checkbox" name="input_check" aria-label="..." onchange="this.closest('form').submit();return false;"/>
                                        {{$todo->to_do}}
                                    @endif
                                </form>
                            
                            </div>
                            <form action="{{route('home.destroy',$todo->id)}}" method="POST">
                                @csrf
                                @method('DELETE')
                                <a href="" data-mdb-toggle="tooltip" title="Remove item" onclick="this.closest('form').submit();return false;">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-x" viewBox="0 0 16 16">
                                        <path d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708z"/>
                                    </svg>
                                </a>
                            </form>
                        </li>
                    @endforeach
                  </ul>
                    <div class="d-flex m-2">
                        {{-- {!!$todos->links('pagination::bootstrap-4')!!} --}}
                    </div>
                </div>
              </div>
      
            </div>
          </div>
        </div>
    </section>
@endsection
