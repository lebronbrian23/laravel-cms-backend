@extends ('layout.console')

@section ('content')

<section class="w3-padding">

    <h2>Add Social Media.</h2>

    <form method="post" action="/console/social-media/add" novalidate class="w3-margin-bottom">

        @csrf

        <div class="w3-margin-bottom">
            <label for="name">Name:</label>
            <input type="name" name="name" id="title" value="{{old('name')}}" required>

            @if ($errors->first('name'))
                <br>
                <span class="w3-text-red">{{$errors->first('name')}}</span>
            @endif
        </div>

        <div class="w3-margin-bottom">
            <label for="url">url:</label>
            <input type="text" name="url" id="title" value="{{old('url')}}" required>

            @if ($errors->first('url'))
                <br>
                <span class="w3-text-red">{{$errors->first('url')}}</span>
            @endif
        </div>


        <div class="w3-margin-bottom">
            <label for="type">Type:</label>
            <input type="text" name="type" id="type" value="{{old('type')}}" required>

            @if ($errors->first('type'))
                <br>
                <span class="w3-text-red">{{$errors->first('type')}}</span>
            @endif
        </div>
        <button type="submit" class="w3-button w3-green">Add Social Media.</button>

    </form>

    <a href="/console/social-media/list">Back to Social Media. List</a>

</section>

@endsection
