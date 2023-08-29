@extends('layouts.dashboard')

@section('dashboard')
<main>
    <form class="form-container" method="POST" action="/menu">
        @csrf

        <h1>Add Menu</h1>

        <div class="input-group">
            <label for="dish_name">Dish name</label>
            <input class="@error('dish_name') error @enderror" value="{{old('dish_name')}}" id="dish_name" name="dish_name" />
            @error('dish_name')
                <div class="input-error">{{ $message }}</div>
            @enderror
        </div>

        <div class="input-group">
            <label for="price">Price</label>
            <input class="@error('price') error @enderror" value="{{old('price')}}" id="price" name="price" />
            @error('price')
                <div class="input-error">{{ $message }}</div>
            @enderror
        </div>

        <div class="input-line">
            <a class="button-secondary" href="/menu">Cancel</a>
            <button class="button">Save</button>
        </div>
    </form>
</main>
@endsection
