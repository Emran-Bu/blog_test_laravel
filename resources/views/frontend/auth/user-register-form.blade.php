@extends('frontend.include.layouts')
@section('title')
    User | Registration
@endsection

@section('content')
    <div class="card">
        <div class="card-header">User Registraion</div>
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
                <div class="text-center alert alert-{{ session('type') }}">{{ session('message') }}</div>
            @endif
            <form action="{{ route('user-registration') }}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="form-group mb-2">
                    <label for="name">Name : </label>
                </div>
                <div class="form-group">
                    <input class="form-control @error('name') is-invalid @enderror" value="{{ old('name') }}" type="text" placeholder="Name..." name="name"/>
                    @error('name')
                    <span class="text-danger fst-italic">
                        {{ $message }}
                    </span>
                    @enderror
                </div>
                <div class="input-group mb-2">
                    <label for="email">Email : </label>
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
                <div class="input-group mb-2">
                    <label for="confirm_password">Confirm password : </label>
                </div>
                <div class="form-group">
                    <input class="form-control @error('password_confirmation') is-invalid @enderror" value="{{ old('password_confirmation') }}" type="password" placeholder="password_confirmation..." name="password_confirmation"/>
                    @error('password_confirmation')
                    <span class="text-danger fst-italic">
                        {{ $message }}
                    </span>
                    @enderror
                </div>
                <div class="form-group mt-2">
                    <input class="form-control @error('photo') is-invalid @enderror" value="{{ old('photo') }}" type="file" name="photo"/>
                    @error('photo')
                    <span class="text-danger fst-italic">
                        {{ $message }}
                    </span>
                    @enderror
                </div>
                <button class="btn btn-primary mt-3 float-end" id="signUpBtn" type="submit" name="signUpBtn">Sign Up</button>
            </form>
        </div>
    </div>
@endsection
