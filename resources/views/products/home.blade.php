@extends('layouts.app')

    @section('content')
       
            <div class="container">
                <div class="row">
                    <div class="col-12 d-flex flex-wrap justify-content-center pt-4">
                        @foreach ($comics as $id => $comic)
                        <a href="{{ route('comic', $id) }}">
                            <div class="col-3 m-2 film-card d-flex" style="background-image:url({{ $comic['thumb'] }})"
                                    alt="ciao">
                                <div class="w-100 d-flex align-self-end h-25 bg-h4">

                                    <h5 class="text-white text-center align-self-center p-1 ">{{ $comic['title'] }}</h5>
                                </div>
                            </div>
                        </a>
                        @endforeach

                    </div>
                </div>
            </div>

    @endsection
 