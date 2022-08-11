@extends ('layout.console')

@section ('content')

<section>
    <!--Banner-->
    <div class="w3-center w3-padding-24 page-banner">
        <h3>Edit Content Block</h3>
    </div>
    <!--Content-->
    <div class="w3-container w3-padding-32">
        <form method="post" action="/console/content-blocks/edit/{{$content_block->id}}" novalidate class="w3-margin-bottom">

            @csrf

            <div class="w3-row-padding w3-margin-bottom">
                <div class="w3-col m4 w3-right-align">
                <label for="name">Name:</label>
                </div><div class="w3-col m4">
                <input type="text" name="name" id="name" value="{{old('name', $content_block->name)}}" required>

                @if ($errors->first('name'))
                    <br>
                    <span class="w3-text-red">{{$errors->first('name')}}</span>
                @endif
            </div>
            </div>
            <div class="w3-row-padding w3-margin-bottom">
                <div class="w3-col m4 w3-right-align">
                <label for="description">Description:</label>
                </div><div class="w3-col m8">
                <textarea name="description" id="description" required>{{old('description', $content_block->description)}}</textarea>

                @if ($errors->first('description'))
                    <br>
                    <span class="w3-text-red">{{$errors->first('description')}}</span>
                @endif
            </div></div>

            <div class="w3-row-padding w3-margin-bottom">
                <div class="w3-col m4 w3-right-align">
                <label for="type">Type:</label>
                </div><div class="w3-col m4">
                <input type="text" name="type" id="type" value="{{old('type', $content_block->type)}}" required>

                @if ($errors->first('type'))
                    <br>
                    <span class="w3-text-red">{{$errors->first('type')}}</span>
                @endif
            </div></div>
            <button type="submit" class="w3-button button">Edit Content Block</button>

        </form>

        <a href="/console/content-blocks/list">Back to List</a>
    </div>

</section>

@endsection
