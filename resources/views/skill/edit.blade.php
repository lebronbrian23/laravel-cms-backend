@extends ('layout.console')

@section ('content')

<section>
    <!--Banner-->
    <div class="w3-center w3-padding-24 page-banner">
        <h3>Edit Skill</h3>
    </div>
    <!--Content-->
    <div class="w3-container w3-padding-32">
    <form method="post" action="/console/skill/edit/{{$skills->id}}" novalidate class="w3-margin-bottom">

        @csrf

        <div class="w3-row-padding w3-margin-bottom">
            <div class="w3-col m4 w3-right-align">
            <label for="name">Name:</label>
            </div><div class="w3-col m4">
            <input type="text" name="name" id="name" value="{{old('name', $skills->name)}}" required>

            @if ($errors->first('name'))
                <br>
                <span class="w3-text-red">{{$errors->first('name')}}</span>
            @endif
        </div></div>

        <button type="submit" class="w3-button button">Edit Skill</button>

    </form>

    <a href="/console/skill/list">Back to List</a>

</section>

@endsection
