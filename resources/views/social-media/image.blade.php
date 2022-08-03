@extends ('layout.console')

@section ('content')

<section class="w3-padding">

    <h2>Social Media Image</h2>

    <div class="w3-margin-bottom">
        @if($social_media->image)
            <img src="{{asset('storage/'.$social_media->image)}}" width="200">
        @endif
    </div>

    <form method="post" action="/console/social-media/image/{{$social_media->id}}" novalidate class="w3-margin-bottom" enctype="multipart/form-data">

        @csrf

        <div class="w3-margin-bottom">
            <label for="image">Image:</label>
            <input type="file" name="image" id="image" value="{{old('image')}}" required>

            @if ($errors->first('image'))
                <br>
                <span class="w3-text-red">{{$errors->first('image')}}</span>
            @endif
        </div>

        <button type="submit" class="w3-button w3-green">Add Image</button>

    </form>

    <a href="/console/social-media/list">Back to Social Media List</a>

</section>

@endsection
