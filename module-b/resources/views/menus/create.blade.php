@extends("layouts.dashboard")
@section("dashboard-content")
    <h2>Create Menu Item</h2>
    <form 
        method="POST" 
        action="{{ route("restaurants.menus.store", ["restaurant" => $restaurant]) }}"
        class="container"
    >
        @csrf
        
        <div class="col">
            <label for="name" class="col">Name</label>
            <input type="text" class="col" name="name" required value="{{ old("name") }}">
            @error("name")
                <strong class="text-red">{{ $message }}</strong> 
            @enderror
        </div>

        <div class="col">
            <label for="price" class="col">Price</label>
            <input type="number" class="col" name="price" id="price" value={{ old("price") }} required>
            @error("price")
                <strong class="text-red">{{ $message }}</strong> 
            @enderror
        </div>

        <a href="{{ route("restaurants.menus.index", ["restaurant" => $restaurant]) }}" class="btn btn-secondary">Cancel</a>
        <button type="submit" class="btn btn-danger">Submit</button>
    </form>
@endsection