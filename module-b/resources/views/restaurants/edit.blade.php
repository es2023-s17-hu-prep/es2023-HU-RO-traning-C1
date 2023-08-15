@extends("layouts.dashboard")
@section("dashboard-content")
    <h2>Edit Restaurant Details</h2>
    <form 
        method="POST" 
        action="{{ route("restaurants.update", ["restaurant" => $restaurant]) }}"
        class="container"
    >
        @csrf
        @method("PUT")
        
        <div class="col">
            <label for="name" class="col">Restaurant name</label>
            <input type="text" class="col" value="{{ $restaurant->name }}" name="name" required>
            @error("name")
                <strong class="text-red">{{ $message }}</strong> 
            @enderror
        </div>

        <div class="col">
            <label for="cusine" class="col">Cusine:</label>
            <input type="text" class="col" value="{{ $restaurant->cusine }}" name="cusine" required>
            @error("cusine")
                <strong class="text-red">{{ $message }}</strong> 
            @enderror
        </div>

        <div class="col">
            <label for="location" class="row">Location</label>
            <input type="text" class="row" value="{{ $restaurant->location }}" name="location" required>
            @error("location")
                <strong class="text-red">{{ $message }}</strong> 
            @enderror
        </div>

        <a href="{{ route("restaurants.show", ["restaurant" => $restaurant]) }}" class="btn btn-secondary">Cancel</a>
        <button type="submit" class="btn btn-danger">Submit</button>
    </form>
@endsection