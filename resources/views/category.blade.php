@extends('templates.main')

@section('content')
    <section class="visual">
        @foreach($listCategory as $item)
            <figure class="visual-block">
                <div class="visual-block__photo">
                    <img
                        class="visual-block__photo_image"
                        src="https://picsum.photos/250/300"
                        alt="photo"
                    />
                </div>
                <figcaption class="visual-block__text">
                    <a href="/{{$item['nameCategory']}}">
                        <h2 class="visual-block__text-title">{{$item['nameCategory']}}</h2>
                    </a>
                    @if(is_array($item['news']))
                        @foreach($item['news'] as $news)
                            <p> {{$news}}</p>
                        @endforeach
                    @else
                        <p>{{$item['news']}}</p>
                    @endif

                </figcaption>
            </figure>
        @endforeach

    </section>
@endsection
