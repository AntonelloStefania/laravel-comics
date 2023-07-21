<header>
    <div class="container-fluid">

        <div class="row">
            <div class="col-12  text-end upper-header">
                <a href="/" class="text-decoration-none mx-2"><span>DC POWER VISA</span></a><span></span>
                <a href="/" class="text-decoration-none mx-2"><span>ADDITIONAL DC SITES</span></a><span></span>
            </div>
            <div class="col-12 d-flex justify-content-between py-3">
                <div class="ps-5">
                    <img src="{{Vite::asset('./resources/images/dc-logo.png')}}" alt="logo">
                </div>
                <div class="d-flex align-items-center">
                    <ul class="list-unstyled d-flex ms-5">
                        <a href="/" class="text-decoration-none align-self-end {{Route::currentRouteName() === 'homepage' ? 'active': ''}}"><li class="mx-2">CHARACTERS</li></a>
                        <a href="/" class="text-decoration-none align-self-end"><li class="mx-2">COMICS</li></a>
                        <a href="/" class="text-decoration-none align-self-end"><li class="mx-2">MOVIES</li></a>
                        <a href="/" class="text-decoration-none align-self-end"><li class="mx-2">TV</li></a>
                        <a href="/" class="text-decoration-none align-self-end"><li class="mx-2">GAMES</li></a>
                        <a href="/" class="text-decoration-none align-self-end"><li class="mx-2">COLLECTIBLES</li></a>
                        <a href="/" class="text-decoration-none align-self-end"><li class="mx-2">VIDEOS</li></a>
                        <a href="/" class="text-decoration-none align-self-end"><li class="mx-2">FANS</li></a>
                        <a href="/" class="text-decoration-none align-self-end"><li class="mx-2">NEWS</li></a>
                        <a href="/" class="text-decoration-none align-self-end"><li class="mx-2">SHOP</li></a>
                        <div class="row height d-flex justify-content-center align-items-center">
                            <div class="col-md-8">
                                <div class="search d-flex s-control">
                                    <input type="text" class="form-control s-bar" placeholder="Search">
                                    <i class="fa fa-search align-self-center"></i>
                                </div>
                            </div>
                        </div>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    </header>