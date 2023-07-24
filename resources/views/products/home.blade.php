@extends('layouts.app')

    @section('content')
        <div class="jumbotron">
            <img src="{{ Vite::asset('/resources/images/jumbotron.jpg') }}" alt="">
        </div>

        <div class="main-bkg position-relative py-4">
            <div class="container">
                <div class="row">
                    <div class="col-12 d-flex flex-wrap justify-content-center">
                        @foreach ($comics as $comic)
                        
                            <div class="col-3 m-2 film-card d-flex" style="background-image:url({{ $comic['thumb'] }})"
                                    alt="ciao">
                                    <div class="w-100 d-flex align-self-end h-25 bg-h4">

                                        <h4 class="text-white align-self-center ps-3 ">{{ $comic['title'] }}</h4>
                                    </div>
                                </div>
                       
                        @endforeach

                    </div>
                </div>
            </div>
        </div>

    @endsection
 