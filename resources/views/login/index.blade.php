@extends('layouts.main')

@section('content')
    <div class="mysite_main d-flex flex-row justify-content-center align-items-center">
        <div class="mysite_main-card-main d-flex justify-content-between">
            <div class="mysite_main-card-left d-flex flex-column align-items-center justify-content-center">
                <h1>Dorotheas</h1>
                <hr/>
                <p>Lorem Ipsum is simply dummy text of the printing</p>
            </div>
            <div class="mysite_main-card-right d-flex flex-column align-items-center justify-content-center">
                <div class="mysite_main-card-login d-flex flex-column justify-content-end">
                    <h1>Login</h1>

                    <div class="mysite_main-form-login d-flex flex-column align-items-center justify-content-center">
                        <form class="d-flex flex-column align-items-center justify-content-center ">
                            <input type="email" placeholder="email" id="email" name="email" autocomplete="off">
                            <input type="password" placeholder="password" id="password" name="password">
                            <button class="mysite_main-btn" type="submit">Entrar</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
