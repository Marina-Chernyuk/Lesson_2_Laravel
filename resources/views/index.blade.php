@extends('templates.main')

@section('content')

    <div class="deal container">
        <div class="deal-items">
            @foreach($listCategory as $item)
                <div class="deal-items__item deal-item">
                    <img
                        class="deal-item__photo"
                        src="https://picsum.photos/250/250"
                        alt="photo"
                    />
                    <a class="deal-item__layer" href="#">
                        <p class="deal-item__layer_text">{{$item['nameCategory']}}</p>
                        <h2 class="deal-item__layer_title">{{$item['partition']}}</h2>
                    </a>
                </div>
            @endforeach

        </div>

        <div class="deal-items__bottom deal-bottom">
            <img
                class="deal-bottom__photo"
                src="https://picsum.photos/250/250"
                alt="photo"
            />
            <a class="deal-item__layer" href="#">
                <p class="deal-item__layer_text">{{$oneCategory['nameCategory']}}</p>
                <h2 class="deal-item__layer_title">{{$oneCategory['partition']}}</h2>
            </a>
        </div>
    </div>
    <div class="transition">
        <a href="/category" class="transition-button">
            <span class="transition-button__text">Перейти к категориям</span>
        </a>
    </div>
@endsection
