@extends('templates.main')

@section('content')

    <section class="news">
        <div class="block-news">
            <figure class="block-news__title">
                <div class="block-news__photo">
                    <img
                        class="block-news__photo_image"
                        src="https://picsum.photos/500/300"
                        alt="photo"
                    />
                </div>
                <figcaption>
                    <h2>{{$news['headingNews']}}</h2>
                    <p> {{$news['description']}}</p>
                </figcaption>
            </figure>
            <p class="block-news__text">{{$news['bodyNews']}}</p>
        </div>

    </section>
@endsection
