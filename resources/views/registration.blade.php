@extends('students.layouts.base')

@section('content')
    <nav class="navbar navbar-expand-lg sticky-top navbar-light bg-light">
        <a class="navbar-brand ml-sm-5" href="/bonhomie">Bonhomie</a>   
    </nav>
    <div class="container-fluid">
        <div class="row">
            <!-- <div class="col-sm-5">
                <img class="form-img" src="img/register.jpg" alt="Register...">
                <h3 class="text-center">What type of user are you?</h3>                
                <h3 class="text-center">Get enrolled for free</h3>

            </div> -->
            <div class="col-sm-3"></div>

            <div class="col-sm-6">
                <div class="userform">
                <h3 class="text-center" style="font-size:33px;">Register</h3>
                @if($errors->any())
                    <p class="alert alert-danger">{{$errors->first()}}</p>
                @endif
                
                <form action="/registration" method="POST">
                    @csrf   
                    <div class="form-group row">
                        <label for="name" class="col-sm-1"><i class="fas fa-user"></i></label>
                        <div class="col-sm-11">
                            <input type="text" class="form-control @error('name') is-invalid @enderror" name="name" id="name" placeholder="Name" value="{{ old('name') }}" required>
                            @error('name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="phone" class="col-sm-1"><i class="fas fa-phone-alt"></i></label>
                        <div class="col-sm-11">
                            <input type="text" class="form-control @error('phone') is-invalid @enderror" name="phone" id="phone" placeholder="Phone No." value="{{ old('phone') }}" required>
                            @error('phone')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="rollno" class="col-sm-1"><i class="fas fa-rollno-alt"></i></label>
                        <div class="col-sm-11">
                            <input type="text" class="form-control @error('rollno') is-invalid @enderror" name="rollno" id="rollno" placeholder="Rollno" value="{{ old('rollno') }}" required>
                            @error('rollno')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="dept" class="col-sm-1"><i class="fas fa-users-cog"></i></label>
                        <div class="col-sm-11">
                            <select class="form-control" name="dept" id="dept" required>
                                <option value="">Select any one</option>
                                <option value="CO">CO</option>
                                <option value="ME">ME</option>
                                <option value="CE">CE</option>
                                <option value="EE">EE</option>
                                <option value="EXTC">EXTC</option>
                                <option value="PHARM">PHARM</option>
                                <option value="ARCH">ARCH</option>
                            </select>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="year" class="col-sm-1"><i class="fas fa-users-cog"></i></label>
                        <div class="col-sm-11">
                            <select class="form-control" name="year" id="year" required>
                                <option value="">Select any one</option>
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                            </select>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="email" class="col-sm-1"><i class="fas fa-envelope"></i></label>
                        <div class="col-sm-11">
                            <input type="email" class="form-control @error('email') is-invalid @enderror" name="email" id="email" placeholder="Email Id" value="{{ old('email') }}" required>
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
                        <input type="submit" value="Register" class="btn btn-warning btn-lg">
                    </div>
                </form>
                
                </div>
            </div>
            <div class="col-sm-3"></div>

        </div>
    </div>

@endsection