@extends('layouts.dashboard')

@section('dashboard')
<main>
    <form class="form-container" method="POST" action="/restaurant">
        @csrf
        @method('put')

        <h1>Edit restaurant</h1>

        <div class="input-group">
            <label for="name">Restaurant name</label>
            <input class="@error('name') error @enderror" value="{{old('name') ?? auth()->user()->restaurant->name}}" id="name" name="name" />
            @error('name')
                <div class="input-error">{{ $message }}</div>
            @enderror
        </div>

        <div class="input-group">
            <label for="cuisine">Cuisine</label>
            <input class="@error('cuisine') error @enderror" value="{{old('cuisine') ?? auth()->user()->restaurant->cuisine}}" id="cuisine" name="cuisine" />
            @error('cuisine')
                <div class="input-error">{{ $message }}</div>
            @enderror
        </div>

        <div class="input-group">
            <label for="location">Location</label>
            <input class="@error('location') error @enderror" value="{{old('location') ?? auth()->user()->restaurant->location}}" id="location" name="location" />
            @error('location')
                <div class="input-error">{{ $message }}</div>
            @enderror
        </div>

        <div class="input-line">
            <a class="button-secondary" href="/">Cancel</a>
            <button class="button">Save</button>
        </div>
    </form>
</main>
@endsection
