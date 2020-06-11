

    @extends("templates.homeTemplate")

    @section("content")

        <div class="container">

            @if(Session::get("error"))
            <div class="row justify-content-center" style="margin-top: 20px">
                <div class="alert alert-danger" role="alert">
                    {{Session::get("error")}}
                </div>
            </div>
            @elseif(Session::get("success"))
                <div class="row justify-content-center" style="margin-top: 20px">
                    <div class="alert alert-success" role="alert">
                        {{Session::get("success")}}
                    </div>
                </div>
            @endif
            <div class="row justify-content-center">
                <form method="post" action="{{route("login")}}" class="bg-light" style="width: 50%; padding: 25px 25px 25px 25px; margin-top: 30px">
                    <h1>Login</h1>
                    <br>
                    <div class="form-group">
                        <label for="Email">Email address</label>
                        <input type="email" name="email" class="form-control" id="Email" aria-describedby="emailHelp">
                    </div>
                    <div class="form-group">
                        <label for="Password">Password</label>
                        <input type="password" name="password" class="form-control" id="Password">
                    </div>
                    {{csrf_field()}}
                    <button type="submit" class="btn btn-success">Log in</button>
                    <br>
                    <br>
                    <div class="form-group">
                        <span>Not a member? <a href="{{route('register')}}">Register Here</a></span>
                    </div>
                </form>
            </div>
        </div>

    @endsection


