@extends ('layout.console')

@section ('content')

<section class="w3-padding">

    <h2>Add Content Block</h2>

    <form method="post" action="/console/content-blocks/add" novalidate class="w3-margin-bottom">

        @csrf

        <div class="w3-margin-bottom">
            <label for="name">Name:</label>
            <input type="text" name="name" id="title" value="{{old('name')}}" required>

            @if ($errors->first('name'))
                <br>
                <span class="w3-text-red">{{$errors->first('name')}}</span>
            @endif
        </div>

        <div class="w3-margin-bottom">
            <label for="description">Description:</label>
            <textarea name="description" id="description" required>{{old('description')}}</textarea>

            @if ($errors->first('content'))
                <br>
                <span class="w3-text-red">{{$errors->first('description')}}</span>
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
        <button type="submit" class="w3-button w3-green">Add Content Block</button>

    </form>

    <a href="/console/content-blocks/list">Back to Content Block List</a>

</section>

@endsection
