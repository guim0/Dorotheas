@extends('layouts.home')

@section('content')
    <div class="mysite_home d-flex justify-content-around">
        <div class="d-flex flex-column align-items-center justify-content-center" style="width: 60vw">
            <div class="mysite_home-scroll d-flex flex-column align-items-center">
                <img src="{!! asset('images/HomePage/ballet.jpg') !!}" alt="">
                <img src="{!! asset('images/HomePage/english.png') !!}" alt="">
                <img src="{!! asset('images/HomePage/taekwondo.webp') !!}" alt="">
            </div>
        </div>
        <div class="mysite_home-menu d-flex flex-column align-items-center justify-content-around">
            <div class="d-flex flex-column align-items-center">
                <h1>Dorotheas</h1>
                <hr>
            </div>
            <div class="mysite_home-card-teachers d-flex">
                <div class="mysite_home-img d-flex align-items-center justify-content-center">
                    <img src="{!! asset('images/HomePage/teacher.svg') !!}" alt="">
                </div>
                <div class="mysite_home-content-card ml-2">
                    <h2>Professores</h2>
                    <div class="mysite_home-content-teacher d-flex ml-3">
                        <img src="{!! asset('images/HomePage/quote.png') !!}" alt="Quote">
                        <p>
                            Educar é impregnar de sentido o que fazemos a cada instante!
                            <br>
                            - Paulo Freire
                        </p>
                    </div>
                </div>
            </div>

            <div class="mysite_home-card-teachers d-flex">
                <div class="mysite_home-img d-flex align-items-center justify-content-center">
                    <img src="{!! asset('images/HomePage/teacher.svg') !!}" alt="">
                </div>
                <div class="mysite_home-content-card ml-2">
                    <h2>Professores</h2>
                    <div class="mysite_home-content-teacher d-flex ml-3">
                        <img src="{!! asset('images/HomePage/quote.png') !!}" alt="Quote">
                        <p>
                            Educar é impregnar de sentido o que fazemos a cada instante!
                            <br>
                            - Paulo Freire
                        </p>
                    </div>
                </div>
            </div>

            <div class="mysite_home-card-teachers d-flex">
                <div class="mysite_home-img d-flex align-items-center justify-content-center">
                    <img src="{!! asset('images/HomePage/teacher.svg') !!}" alt="">
                </div>
                <div class="mysite_home-content-card ml-2">
                    <h2>Professores</h2>
                    <div class="mysite_home-content-teacher d-flex ml-3">
                        <img src="{!! asset('images/HomePage/quote.png') !!}" alt="Quote">
                        <p>
                            Educar é impregnar de sentido o que fazemos a cada instante!
                            <br>
                            - Paulo Freire
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
