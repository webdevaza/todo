@extends('layouts.default')
@section('content')
<div class="flex items-center justify-center h-screen">
    <div class="w-full px-4 py-8 mx-auto shadow lg:w-1/3">
        <div class="flex items-center mb-6">
        <h1 class="mr-6 text-4xl font-bold text-green-600"> MY AGENDA</h1>
        </div>
        <div class="relative">
        <input type="text" placeholder="What needs to be done today?"
            class="w-full px-2 py-3 border rounded outline-none border-grey-600" />
        </div>
        <ul class="list-reset">
            @foreach ($todos as $todo)
                <li class="relative flex items-center justify-between px-2 py-6 border-b">
                    <div>
                    <input type="checkbox" class="" />
                    <p class="inline-block mt-1 text-gray-600">{{$todo->to_do}}</p>
                    </div>
                    <button type="button" class="absolute right-0 flex items-center">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 text-red-700" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                    </button>
                </li>
            @endforeach
        </ul>
        {{ $todos->onEachSide(5)->links() }}
    </div>
</div>
@endsection