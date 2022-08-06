@extends ('layout.console')

@section ('content')

<section class="w3-padding">
    <div class="w3-center w3-padding-24 page-banner">
        <h3>Login</h3>
    </div>
    <!--Content-->
    <div class="w3-container w3-padding-32">
    <form method="post" action="/console/login" novalidate>

        @csrf

        <div class="w3-row-padding w3-margin-bottom">
            <div class="w3-col m4 w3-right-align">
                <label for="email">Email Address:</label>
            </div><div class="w3-col m4">
                <input type="email" name="email" id="email" value="{{old('email')}}" required>
            
            @if ($errors->first('email'))
                <br>
                <span class="w3-text-red">{{$errors->first('email')}}</span>
            @endif
            </div>
        </div>

        <div class="w3-row-padding w3-margin-bottom">
            <div class="w3-col m4 w3-right-align">
                <label for="password">Password:</label>
            </div><div class="w3-col m4">
                <input type="password" name="password" id="password" required>

            @if ($errors->first('password'))
                <br>
                <span class="w3-text-red">{{$errors->first('password')}}</span>
            @endif
            </div>  
        </div>

        <button type="submit" class="w3-button button">Log In</button>

    </form>

</section>

@endsection