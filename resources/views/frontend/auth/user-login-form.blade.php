@extends('frontend.include.layouts')
@section('title')
    User | Login
@endsection

@section('content')
    <div class="card">
    <div class="card-header">User Login</div>
    <div class="card-body">
        {{-- @if($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach($errors->all() as $error)

                        <li>{{ $error }}</li>

                    @endforeach
                </ul>
            </div>
        @endif --}}
        @if(session('message'))
            <div class="text-center alert alert-danger">{{ session('message') }}</div>
        @endif
        <form action="{{ route('user-login') }}" method="post">
            @csrf
            <div class="input-group mb-2">
                <label for="email">Email Address : </label>
            </div>
            <div class="form-group">
                <input class="form-control @error('email') is-invalid @enderror" value="{{ old('email') }}" type="email" placeholder="email..." name="email"/>
                @error('email')
                <span class="text-danger fst-italic">
                    {{ $message }}
                </span>
                @enderror
            </div>
            <div class="input-group mb-2">
                <label for="password">Password : </label>
            </div>
            <div class="form-group">
                <input class="form-control @error('password') is-invalid @enderror" value="{{ old('password') }}" type="password" placeholder="password..." name="password"/>
                @error('password')
                <span class="text-danger fst-italic">
                    {{ $message }}
                </span>
                @enderror
            </div>
            <button class="btn btn-primary mt-3 float-end" id="loginBtn" type="submit" name="loginBtn">Login</button>
        </form>
    </div>
    </div>
@endsection