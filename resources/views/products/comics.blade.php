@extends('layouts.app')

@section('content')
<div class="d-flex justify-content-around">
    <div class="col-3 ms-5 film-card d-flex" style="background-image:url({{ $comic['thumb'] }})"
        alt="poster">
        <div class="w-100 d-flex align-self-end h-25 bg-h4">
            <h6 class="text-white text-center align-self-center p-1 ">{{ $comic['title'] }}</h6>
        </div>
    </div>
    <div  class="text-white ps-5">
        <h4>{{$comic['title']}}</h4>
        <h6>{{$comic['series']}}</h6>
        <div class="d-flex flex-column">
            <span><strong>Release Date:</strong> {{$comic['sale_date']}}</span>
            <span><strong>Price:</strong>{{$comic['price']}}</span>
        </div>
        <div class="pe-4 mt-5">
            <p class=" text-white">{{$comic['description']}}</p>
        </div>
    </div>
</div>
@endsection