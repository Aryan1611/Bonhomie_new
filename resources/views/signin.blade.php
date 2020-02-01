@extends('students.layouts.base')

@section('content')
    <nav class="navbar navbar-expand-lg sticky-top navbar-light bg-light">
        <a class="navbar-brand ml-sm-5" href="/bonhomie">Bonhomie</a>
       
    </nav>
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-3"></div>
            <div class="col-sm-6">
                <div class="userform">
                    <h3 class="text-center" style="font-size:33px;">Login</h3>

                    @if ($error = $errors->first('password'))
                        <div class="alert alert-danger">
                            {{ $error }}
                        </div>
                    @endif

                    <form action="/signin" method="POST">
                        @csrf
                        <div class="form-group row">
                            <label for="email" class="col-sm-1"><i class="fas fa-email-alt"></i></label>
                            <div class="col-sm-11">
                                <input type="email" class="form-control @error('email') is-invalid @enderror" value="{{ old('email') }}" name="email" id="email" placeholder="Email" required>
                            
                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                    
                        <div class="form-group row">
                            <label for="password" class="col-sm-1"><i class="fas fa-unlock-alt"></i></label>
                            <div class="col-sm-11">
                                <input type="password" class="form-control @error('password') is-invalid @enderror" name="password" id="password" placeholder="Password" required>
                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-button">
                            <input type="submit" value="Login" class="btn btn-warning btn-lg">
                        </div>

                       
                    </form>
                </div>
                <p id="account"><a href="/registration">Create an account</a></p>
            </div>
            <div class="col-sm-3"></div>
        </div>
    </div>

@endsection