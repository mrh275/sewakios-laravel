@extends('layouts.template')

@section('content')
    <div class="box">
        <div class="container">
            <div class="top-header">
                <span>Have an account?</span>
                <header>Login</header>
            </div>
            <form action="{{ url('admin') }}">

                <div class="input-field">
                    <input type="text" class="input" placeholder="Username" required>
                    <i class="bx bx-user"></i>
                </div>
                <div class="input-field">
                    <input type="password" class="input" placeholder="Password" required>
                    <i class="bx bx-lock-alt"></i>
                </div>
                <div class="input-field">
                    <button type="submit" class="submit">Login</button>
                </div>
            </form>
            <div class="bottom">
                <div class="left">
                    <input type="checkbox" id="check">
                    <label for="check">Remember Me</label>
                </div>
                <div class="right">
                    <label><a href="#">Forgot password?</a></label>
                </div>
            </div>
        </div>
    </div>
@endsection
