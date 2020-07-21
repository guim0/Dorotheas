@extends('layouts.home')

@section('content')
    <div class="mysite_home d-flex justify-content-around">
        <div class="d-flex flex-column align-items-center justify-content-center" style="width: 60vw">
            <div class="mysite_home-scroll d-flex flex-column align-items-center">
                <img src="{!! asset('images/HomePage/ballet.jpg') !!}" alt="">
                <img src="{!! asset('images/HomePage/english.png') !!}" alt="">
                <img src="{!! asset('images/HomePage/taekwondo.webp') !!}" alt="">
                <img src="{!! asset('images/HomePage/ballet.jpg') !!}" alt="">
                <img src="{!! asset('images/HomePage/english.png') !!}" alt="">
                <img src="{!! asset('images/HomePage/taekwondo.webp') !!}" alt="">
                <img src="{!! asset('images/HomePage/ballet.jpg') !!}" alt="">
                <img src="{!! asset('images/HomePage/english.png') !!}" alt="">
                <img src="{!! asset('images/HomePage/taekwondo.webp') !!}" alt="">
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
                <a href="#">
                    <div class="mysite_home-img d-flex align-items-center justify-content-center">
                        <img src="{!! asset('images/HomePage/teacher.svg') !!}" alt="">
                    </div>
                </a>
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
                <a href="">
                    <div class="mysite_home-img d-flex align-items-center justify-content-center">
                        <img src="{!! asset('images/HomePage/student.png') !!}" alt="">
                    </div>
                </a>
                <div class="mysite_home-content-card ml-2">
                    <h2>Alunos</h2>
                    <div class="mysite_home-content-teacher d-flex ml-3">
                        <img src="{!! asset('images/HomePage/quote.png') !!}" alt="Quote">
                        <p>
                            A vida é uma grande universidade, mas pouco ensina a quem não sabe ser um aluno...
                            <br>
                            - Augusto Cury
                        </p>
                    </div>
                </div>
            </div>

            <div class="mysite_home-card-teachers d-flex">
                <a href="">
                    <div class="mysite_home-img d-flex align-items-center justify-content-center">
                        <img src="{!! asset('images/HomePage/book.png') !!}" alt="">
                    </div>
                </a>
                <div class="mysite_home-content-card ml-2">
                    <h2>Matérias</h2>
                    <div class="mysite_home-content-teacher d-flex ml-3">
                        <img src="{!! asset('images/HomePage/quote.png') !!}" alt="Quote">
                        <p>
                            A alegria que se tem em pensar e aprender faz-nos pensar e aprender ainda mais.
                            <br>
                            - Aristóteles
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
