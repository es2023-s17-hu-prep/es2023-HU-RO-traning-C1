@if ($errors->any())
    <div class="bg-red-600 text-white rounded-md p-3 text-left">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
