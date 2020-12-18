@extends('layout/base')
@section('title','LOGIN')
    

@section('pages')
<div class="login">
    <h1 class="text-login">Login</h1>
    <form action="" method="post">
        <div class="form-login">
            <div class="form-group">
                <label for="email">E-Mail</label>
                <input type="email" class="form-control" aria-describedby="emailHelp" id="email" required>
            </div>
            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" id="password" class="form-control" required>
            </div>
        </div>
        <button type="submit" class="btn button-login">Login</button>
    </form>
</div>
@endsection