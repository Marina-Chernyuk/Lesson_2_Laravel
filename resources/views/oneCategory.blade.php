@extends('templates.main')

@section('content')
    <section class="visual">
        @foreach($listNews as $key => $news)
            <figure class="visual-block">
                <div class="visual-block__photo">
                    <img
                        class="visual-block__photo_image"
                        src="https://picsum.photos/250/300"
                        alt="photo"
                    />
                </div>
                <figcaption class="visual-block__text">
                    <a href="/{{$title}}/{{$key}}">
                        <h2 class="visual-block__text-title">{{$news['titleNews']}}</h2>
                    </a>
                    <p> {{$news['descriptionNews']}}</p>
                </figcaption>
            </figure>
        @endforeach

    </section>
@endsection
