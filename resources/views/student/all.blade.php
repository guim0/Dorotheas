@extends('layouts.main')

@section('content')
    <div class="mysite_students container-fluid d-flex justify-content-center flex-wrap">
        @for($i = 0; $i < 5; $i++)
            <div class="mysite_students-card d-flex mr-5 mt-5">
                <div class="mysite_students-image d-flex align-items-center justify-content-center ">
                    <img src="{!! asset('images/StudentsPage/student.png') !!}" alt="">
                </div>
                <div class="mysite_students-content m-3">
                    <div class="mysite_students-name">
                        <h1>My name</h1>
                    </div>
                    <div class="mysite_students-info">
                        <h2>Idade</h2>
                        <p>. 15 anos</p>
                        <h2>Responsável</h2>
                        <p>. João Pedro</p>
                        <h2>Observação</h2>
                        <p>. Tem alergia a dipirona</p>
                    </div>
                </div>
            </div>
        @endfor
    </div>
@endsection
