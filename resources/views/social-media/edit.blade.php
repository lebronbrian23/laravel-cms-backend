@extends ('layout.console')

@section ('content')

<section>
    <!--Banner-->
    <div class="w3-center w3-padding-24 page-banner">
        <h3>Edit Content Block</h3>
    </div>
    <!--Content-->
    <div class="w3-container w3-padding-32">
        <form method="post" action="/console/social-media/edit/{{$social_media->id}}" novalidate class="w3-margin-bottom">

            @csrf

            <div class="w3-row-padding w3-margin-bottom">
                <div class="w3-col m4 w3-right-align">
                <label for="name">Name:</label>
                </div><div class="w3-col m4">
                <input type="text" name="name" id="name" value="{{old('name', $social_media->name)}}" required>

                @if ($errors->first('name'))
                    <br>
                    <span class="w3-text-red">{{$errors->first('name')}}</span>
                @endif
            </div></div>

            <div class="w3-row-padding w3-margin-bottom">
                <div class="w3-col m4 w3-right-align">
                <label for="url">URL:</label>
                </div><div class="w3-col m4">
                <input type="text" name="url" id="url" value="{{old('url', $social_media->url)}}" required>

                @if ($errors->first('description'))
                    <br>
                    <span class="w3-text-red">{{$errors->first('description')}}</span>
                @endif
            </div></div>

            <div class="w3-row-padding w3-margin-bottom">
                <div class="w3-col m4 w3-right-align">
                <label for="type">Type:</label>
                </div><div class="w3-col m4">
                <input type="text" name="type" id="type" value="{{old('type', $social_media->type)}}" required>

                @if ($errors->first('type'))
                    <br>
                    <span class="w3-text-red">{{$errors->first('type')}}</span>
                @endif
            </div></div>
            <button type="submit" class="w3-button button">Edit Social Media</button>

        </form>

        <a href="/console/social-media/list">Back to List</a>
    </div>
</section>

@endsection
