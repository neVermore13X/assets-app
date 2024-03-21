@extends('../layouts.master')

@section('title', 'Login')

@section('content')
<h2 class="text-center mb-3">SELAMAT DATANG DI APP ASSETS PT. IBB</h2>
<div class="d-flex justify-content-center align-item-center">
    <div class="card bg-dark" style="width: 20rem">
        <div class="card-body text-white">
            <form action="" method="post">
                @csrf
                <h2 class="text-center mb-5">AYO LOGIN!</h2>
                <p class=""></p>
                <div class="form-group mb-3">
                    <label for="" class="mb-2">Username</label>
                    <input type="text" name="username" id="" class="form-control">
                </div>
                <div class="form-group">
                    <label for="" class="mb-2">Password</label>
                    <input type="password" name="pasword" id="" class="form-control">
                </div>
                <div class="d-flex justify-content-center align-item-center">
                    <button type="submit" class="btn btn-primary mt-5 mb-4">LOGIN</button>
                </div>
            </form>
        </div>
    </div>
</div>
@stop
