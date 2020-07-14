@extends('layouts.main')

@section('content')
    <div class="content d-flex flex-row justify-content-center align-items-center">
        <div class="main-card d-flex justify-content-between">
            <div class="card-left d-flex flex-column align-items-center justify-content-center">
                <h1>Dorotheas</h1>
                <p>Lorem Ipsum is simply dummy text of the printing</p>
            </div>
            <div class="card-right d-flex flex-column align-items-center justify-content-center">
                <div class="card-login d-flex flex-column justify-content-end">
                    <h1>Login</h1>

                    <div class="form-login">
                        <form>
                            <label for="email">email</label> <br>
                            <input type="email" id="email" name="email"><br>
                            <label for="password">password</label><br>
                            <input type="password" id="password" name="password"><br>
                            <input type="submit" value="entrar">
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
