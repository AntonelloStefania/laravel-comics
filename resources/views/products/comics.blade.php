@extends('layouts.app')

@section('content')
<div class="col-12 blue-line-comics"></div>
<div class="d-flex justify-content-around position-relative">
    <div class="col-3 ms-5 film-card d-flex position-absolute card-show " style="background-image:url({{ $comic['thumb'] }})"
        alt="poster">
        <div class="w-100 d-flex align-self-end h-25 bg-h4">
            <h6 class="text-white text-center align-self-center p-1 ">{{ $comic['title'] }}</h6>
        </div>
    </div>
    <div  class="text-white ps-5">
        <div class="d-flex justify-content-around pt-5">
            <div class="col">
                <h4>{{$comic['title']}}</h4>
                <h6>{{$comic['series']}}</h6>
                <div class="d-flex flex-column">
                    <span><strong>Release Date:</strong> {{$comic['sale_date']}}</span>
                    <span><strong>Price:</strong>{{$comic['price']}}</span>
                    <div class="col-6 pe-4 mt-5">
                        <p class=" text-white">{{$comic['description']}}</p>
                    </div>
                    <div>
                        <ul>
                           <li> </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="me-5 position-relative">
                <span class="label bg-warning fw-bold position-absolute p-2 m-2">ADVERTISEMENT</span>
                <img src="{{ Vite::asset('/public/adv.jpg') }}" alt="">
            </div>
        </div>
        
        
    </div>
</div>
@endsection