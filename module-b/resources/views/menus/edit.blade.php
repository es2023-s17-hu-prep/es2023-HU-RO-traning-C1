@extends("layouts.dashboard")
@section("dashboard-content")
    <h2>Edit Menu Item</h2>
    <form 
        method="POST" 
        action="{{ route("restaurants.menus.update", ["restaurant" => $menu->restaurant_id, "menu" => $menu]) }}"
        class="container"
    >
        @csrf
        @method("PUT")
        
        <div class="col">
            <label for="name" class="col">Name</label>
            <input type="text" class="col" value="{{ $menu->dish_name }}" name="name" required>
            @error("name")
                <strong class="text-red">{{ $message }}</strong> 
            @enderror
        </div>

        <div class="col">
            <label for="price" class="col">Price</label>
            <input type="number" class="col" value="{{ $menu->price }}" name="price" id="price" required>
            @error("price")
                <strong class="text-red">{{ $message }}</strong> 
            @enderror
        </div>

        <a href="{{ route("restaurants.menus.index", ["restaurant" => $menu->restaurant_id]) }}" class="btn btn-secondary">Cancel</a>
        <button type="submit" class="btn btn-danger">Submit</button>
    </form>
@endsection