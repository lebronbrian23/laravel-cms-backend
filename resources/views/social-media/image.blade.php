@extends ('layout.console')

@section ('content')

<section>
    <!--Banner-->
    <div class="w3-center w3-padding-24 page-banner">
        <h3>Project Image</h3>
    </div>
    <!--Content-->
    <div class="w3-container w3-padding-32">
    <div class="w3-margin-bottom">
        @if($social_media->image)
            <img src="{{$social_media->image}}" width="200">
        @endif
    </div>

    <form method="post" action="/console/social-media/image/{{$social_media->id}}" novalidate class="w3-margin-bottom" enctype="multipart/form-data">

        @csrf

        <div class="w3-row-padding w3-margin-bottom">
            <div class="w3-col m5 w3-right-align">
            <label for="image">Image:</label>
            </div><div class="w3-col m5">
            <input type="file" name="image" id="image" value="{{old('image')}}" required>

            @if ($errors->first('image'))
                <br>
                <span class="w3-text-red">{{$errors->first('image')}}</span>
            @endif
        </div>        </div>


        <button type="submit" class="w3-button button">Add Image</button>

    </form>

    <a href="/console/social-media/list">Back to List</a>
    </div>
</section>

@endsection
