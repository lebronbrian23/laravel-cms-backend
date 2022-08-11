@extends ('layout.console')

@section ('content')

<section>
    <!--Banner-->
    <div class="w3-center w3-padding-24 page-banner">
        <h3>Edit Project Types</h3>
    </div>
    <!--Content-->
    <div class="w3-container w3-padding-32">
    <form method="post" action="/console/types/edit/{{$type->id}}" novalidate class="w3-margin-bottom">

        @csrf

        <div class="w3-row-padding w3-margin-bottom">
            <div class="w3-col m4 w3-right-align">
            <label for="title">Title:</label>
            </div><div class="w3-col m4">
            <input type="text" name="title" id="title" value="{{old('title', $type->title)}}" required>

            @if ($errors->first('title'))
                <br>
                <span class="w3-text-red">{{$errors->first('title')}}</span>
            @endif
        </div></div>

        <button type="submit" class="w3-button button">Edit Type</button>

    </form>

    <a href="/console/types/list">Back to List</a>
    </div>
</section>

@endsection
