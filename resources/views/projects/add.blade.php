@extends ('layout.console')

@section ('content')

<section>
    <!--Banner-->
    <div class="w3-center w3-padding-24 page-banner">
        <h3>Add Project</h3>
    </div>
    <!--Content-->
    <div class="w3-container w3-padding-32">
    <form method="post" action="/console/projects/add" novalidate class="w3-margin-bottom">

        @csrf

        <div class="w3-row-padding w3-margin-bottom">
            <div class="w3-col m4 w3-right-align">
            <label for="title">Title:</label>
            </div><div class="w3-col m4">
            <input type="title" name="title" id="title" value="{{old('title')}}" required>
            
            @if ($errors->first('title'))
                <br>
                <span class="w3-text-red">{{$errors->first('title')}}</span>
            @endif
        </div></div>

        <div class="w3-row-padding w3-margin-bottom">
            <div class="w3-col m4 w3-right-align">
            <label for="url">URL:</label>
            </div><div class="w3-col m4">
            <input type="url" name="url" id="url" value="{{old('url')}}">

            @if ($errors->first('url'))
                <br>
                <span class="w3-text-red">{{$errors->first('url')}}</span>
            @endif
        </div></div>

        <div class="w3-row-padding w3-margin-bottom">
            <div class="w3-col m4 w3-right-align">
            <label for="slug">Slug:</label>
            </div><div class="w3-col m4">
            <input type="text" name="slug" id="slug" value="{{old('slug')}}" required>

            @if ($errors->first('slug'))
                <br>
                <span class="w3-text-red">{{$errors->first('slug')}}</span>
            @endif
        </div></div>

        <div class="w3-row-padding w3-margin-bottom">
            <div class="w3-col m4 w3-right-align">
            <label for="content">Content:</label>
            </div><div class="w3-col m4">
            <textarea name="content" id="content" required>{{old('content')}}</textarea>

            @if ($errors->first('content'))
                <br>
                <span class="w3-text-red">{{$errors->first('content')}}</span>
            @endif
        </div></div>

        <div class="w3-row-padding w3-margin-bottom">
            <div class="w3-col m4 w3-right-align">
            <label for="type_id">Type:</label>
            </div><div class="w3-col m4">
            <select name="type_id" id="type_id">
                <option></option>
                @foreach ($types as $type)
                    <option value="{{$type->id}}"
                        {{$type->id == old('type_id') ? 'selected' : ''}}>
                        {{$type->title}}
                    </option>
                @endforeach
            </select>
            @if ($errors->first('type_id'))
                <br>
                <span class="w3-text-red">{{$errors->first('type_id')}}</span>
            @endif
        </div></div>

        <button type="submit" class="w3-button button">Add Project</button>

    </form>
    <a href="/console/projects/list">Back to List</a>
</section>

@endsection