

    @extends("templates.homeTemplate")

    @section("content")

        <div class="container">

            <div class="row justify-content-center">
                <form class="bg-light" style="width: 50%; padding: 25px 25px 25px 25px; margin-top: 100px">
                    <h1>Login</h1>
                    <br>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Email address</label>
                        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Password</label>
                        <input type="password" class="form-control" id="exampleInputPassword1">
                    </div>
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


