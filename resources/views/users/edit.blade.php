@extends ('layout.console')

@section ('content')

<section>
    <!--Banner-->
    <div class="w3-center w3-padding-24 page-banner">
        <h3>Edit User</h3>
    </div>
    <!--Content-->
    <div class="w3-container w3-padding-32">
    <form method="post" action="/console/users/edit/{{$user->id}}" novalidate class="w3-margin-bottom">

        @csrf

        <div class="w3-row-padding w3-margin-bottom">
            <div class="w3-col m4 w3-right-align">
            <label for="first">First Name:</label>
            </div><div class="w3-col m4">
            <input type="text" name="first" id="first" value="{{old('first', $user->first)}}" required>
            
            @if ($errors->first('first'))
                <br>
                <span class="w3-text-red">{{$errors->first('first')}}</span>
            @endif
        </div></div>

        <div class="w3-row-padding w3-margin-bottom">
            <div class="w3-col m4 w3-right-align">
            <label for="last">Last Name:</label>
            </div><div class="w3-col m4">
            <input type="text" name="last" id="last" value="{{old('last', $user->last)}}" required>
            
            @if ($errors->first('last'))
                <br>
                <span class="w3-text-red">{{$errors->first('last')}}</span>
            @endif
        </div></div>

        <div class="w3-row-padding w3-margin-bottom">
            <div class="w3-col m4 w3-right-align">
            <label for="email">Email:</label>
            </div><div class="w3-col m4">
            <input type="email" name="email" id="email" value="{{old('email', $user->email)}}">

            @if ($errors->first('email'))
                <br>
                <span class="w3-text-red">{{$errors->first('email')}}</span>
            @endif
        </div></div>

        <div class="w3-row-padding w3-margin-bottom">
            <div class="w3-col m4 w3-right-align">
            <label for="password">Password:</label>
            </div><div class="w3-col m4">
            <input type="password" name="password" id="password">

            @if ($errors->first('password'))
                <br>
                <span class="w3-text-red">{{$errors->first('password')}}</span>
            @endif
        </div></div>

        <button type="submit" class="w3-button button">Edit User</button>

    </form>

    <a href="/console/users/list">Back to List</a>

</section>

@endsection
