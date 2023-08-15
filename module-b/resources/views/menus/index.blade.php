@extends("layouts.dashboard")
@section("dashboard-content")
    <h1>Edit Menu</h1>
    <div class="container">
        <div class="row">
            <p class="col">Name</p>
            <p class="col">Price</p>
            <p class="col"></p>
        </div>
        @foreach ($menus as $menu)
            <div class="row">
                <p class="col">{{ $menu->dish_name }}</p>
                <p class="col">{{ $menu->price }}</p>
                <span class="col d-flex gap-3">
                    <a href="{{ route("restaurants.menus.edit", ["restaurant" => $menu->restaurant_id, "menu" => $menu->id]) }}" class="btn btn-secondary">
                        <img src="/images/edit-icon@3x.png" alt="edit" style="width: 30px">
                    </a>
                    <a href="{{ route("restaurants.menus.destroy", ["restaurant" => $menu->restaurant_id, "menu" => $menu->id]) }}" class="btn btn-danger">
                        <img src="/images/trash-icon@3x.png" alt="edit" style="width: 30px">
                    </a>
                </span>
            </div>
        @endforeach
        <a href="{{ route("restaurants.menus.create", ["restaurant" => $menu->restaurant_id]) }}" class="btn btn-primary">Create item</a>
    </div>
@endsection