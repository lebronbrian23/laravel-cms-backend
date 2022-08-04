@extends ('layout.console')

@section ('content')

<section class="w3-padding">

    <h2>Add Skill</h2>

    <form method="post" action="/console/skill/add" novalidate class="w3-margin-bottom">

        @csrf

        <div class="w3-margin-bottom">
            <label for="name">Name:</label>
            <input type="name" name="name" id="title" value="{{old('name')}}" required>

            @if ($errors->first('name'))
                <br>
                <span class="w3-text-red">{{$errors->first('name')}}</span>
            @endif
        </div>

        <button type="submit" class="w3-button w3-green">Add Skill</button>

    </form>

    <a href="/console/skill/list">Back to Skills List</a>

</section>

@endsection
