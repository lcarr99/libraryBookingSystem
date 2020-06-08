@extends('templates.homeTemplate')

@section('content')

    <div class="container">

        <div class="row justify-content-center">
            <form method="post" action="" class="bg-light" style="width: 50%; padding: 20px 25px 5px 25px; margin-top: 15px">
                <div class="form-group">
                    <label for="email">First Name</label>
                    <input type="text" name="first_name" class="form-control" id="first_name">
                </div>
                <div class="form-group">
                    <label for="email">Last Name</label>
                    <input type="text" name="last_name" class="form-control" id="last_name">
                </div>
                <div class="form-group">
                    <label for="email">Email address</label>
                    <input type="email" name="email" class="form-control" id="email">
                </div>
                <div class="form-group">
                    <label for="dob">Date Of Birth</label>
                    <input type="date" name="date_of_birth" class="form-control" id="dob">
                </div>
                <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" name="password" class="form-control" id="password">
                </div>
                <div class="form-group">
                    <label for="password">Confirm Password</label>
                    <input type="password" name="confirm_password" class="form-control" id="confirm_password">
                </div>
                {{csrf_field()}}
                <button type="submit" class="btn btn-success">Register</button>
                <br>
                <br>
                <div class="form-group">
                    <span>Already a member? <a href="{{route('homepage')}}">Log in Here</a></span>
                </div>
            </form>
        </div>
    </div>

@endsection
