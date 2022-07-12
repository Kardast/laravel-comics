<div class="bluepart">

    <div class="container">

        @foreach ($arrShop as $item)
        <li>
            <div class="small-container">

                <img src="{{ $item['img'] }}" alt="{{ $item['alt'] }}">
                <p>{{ $item['text'] }}</p>
            </div>
        </li>
        @endforeach
    </div>
</div>

