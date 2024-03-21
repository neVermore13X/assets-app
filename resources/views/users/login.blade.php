@extends('../layouts.master')

@section('title', 'Login')

@section('content')
<div class="d-flex justify-content-center align-item-center">
    <div class="card w-25">
        <div class="card-body">
            <form action="" method="post">
                @csrf
                <h1 class="text-center ">AYO LOGIN</h1>
                <div class="form-group mb-3">
                    <label for="" class="mb-2">Username</label>
                    <input type="text" name="username" id="" class="form-control">
                </div>
                <div class="form-group">
                    <label for="" class="mb-2">Password</label>
                    <input type="text" name="pasword" id="" class="form-control">
                </div>
                <div class="d-flex justify-content-center align-item-center">
                    <button type="submit" class="btn btn-primary mt-3">LOGIN</button>
                </div>
            </form>
        </div>
    </div>
</div>
@stop
