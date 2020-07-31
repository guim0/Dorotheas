@extends('layouts.main')

@section('content')
    <div class="mysite_students container-fluid d-flex justify-content-center flex-wrap">
        <nav class="mysite_students-menu d-flex flex-column justify-content-center align-items-center">
            <h1>Welcome to Dorotheas</h1>
            <div class="mysite_students-menu-btn d-flex justify-content-around">
                <button>
                    <img src="{!! asset('images/StudentsPage/adicionar.png') !!}" alt="">
                </button>
                <button>
                    <img src="{!! asset('images/StudentsPage/menu-aberto.png') !!}" alt="">
                </button>
            </div>
        </nav>
        <div class="spacing container-fluid d-flex justify-content-start flex-wrap">
            @for($i = 0; $i < 5; $i++)
                <div class="mysite_students-card m-5 d-flex flex-column align-items-center justify-content-center">
                    <h1>Course</h1>
                    <img src="{!! asset('images/StudentsPage/student.png') !!}" alt="">
                    <h3 class="d-flex align-self-start mt-3 ml-5">Hello,</h3>
                    <p class="d-flex align-self-start ml-5">i'am name name name name name</p>
                    <button>About</button>
                </div>
            @endfor
        </div>
    </div>
@endsection
