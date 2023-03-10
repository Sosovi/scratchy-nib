<x-home-layout title="Scratchy Nib | Categories">

    <x-home.title-section>
        Categories
    </x-home.title-section>

        <div class="container">
            <div class="row mb-4">
                <div class="col d-flex justify-content-center">
                    <form action="" class="d-flex w-50 field-cate">
                       <label class="label-cate" for="calligraphyName">Search</label>
                        <input type="hidden" name="cateID" value="{{ request()->cateID }}">
                        <input type="hidden" name="styleID" value="{{ request()->styleID }}">
                        <input class="input-text rounded-start rounded-0" value="{{ request()->calligraphyName }}"
                               id="calligraphyName" name="calligraphyName" type="text" aria-label="search" placeholder="Name of calligraphy..">
                        <button class="btn btn-primary-color rounded-end rounded-0 " type="submit"><i class="fas fa-search"></i></button>
                    </form>
                </div>
            </div>
            <div class="row mb-4">
                <div class="col d-xxl-flex justify-content-xxl-center">
                    <a href="{{ route('home.category') }}" class="btn btn-primary-color mx-1 mb-2 ">All Calligraphy</a>
                    @foreach($categories as $category)
                        <a href="{{ route('home.category', ['cateID' => $category -> category_id ]) }}" class="btn btn-primary-color mx-1 mb-2 ">{{ $category -> category_name }}</a>
                    @endforeach
                </div>
            </div>
        </div>

        <section class="container">
            @if(request()->cateID)
                <article class="postcard light red">
                    <a class="postcard__img_link" href="https://picsum.photos/501/500" data-lightbox="thumb">
                        <img class="postcard__img" src="https://picsum.photos/501/500" alt="Image Title" />
                    </a>
                    <div class="postcard__text t-dark">
                        <h1 class="postcard__title red">{{ $currentCategory->category_name }}</h1>
                        <div class="postcard__subtitle small">
                            <i class="fas fa-calendar-alt mr-2"></i> {{ $currentCategory->created_at }}
                        </div>
                        <div class="postcard__bar"></div>
                        <div class="postcard__preview-txt">
                            {{ $currentCategory->category_description }}
                        </div>

                        <span class="mt-3 fw-semibold">Styles list of this category</span>
                        <ul class="postcard__tagbox">
                            @foreach($styles as $style)
                                <li class="tag__item">
                                    <a href="{{'?cateID='.request()->get('cateID').'&styleID='.$style->style_id }}">{{ $style -> style_name }}</a>
                                </li>
                            @endforeach
                        </ul>
                    </div>
                </article>
            @else
                {{-- All Category--}}
                <article class="postcard light red">
                    <a class="postcard__img_link" href="https://picsum.photos/501/500" data-lightbox="thumb">
                        <img class="postcard__img" src="https://picsum.photos/501/500" alt="Image Title" />
                    </a>
                    <div class="postcard__text t-dark">
                        <h1 class="postcard__title red"><a href="#">All Calligraphy</a></h1>
                        <div class="postcard__subtitle small">
                            <i class="fas fa-calendar-alt mr-2"></i> 2023-03-09 18:59:15
                        </div>
                        <div class="postcard__bar"></div>
                        <div class="postcard__preview-txt">
                            Calligraphy is the art of creating beautiful, decorative handwriting or lettering with a pen,
                            brush, or other writing instrument. It is an ancient art form that has been practiced for thousands
                            of years, originating in various cultures around the world such as Chinese, Islamic,
                            and Western calligraphy. Calligraphy is not just about writing words, but also about creating
                            a visually appealing design with the strokes, curves, and spacing of the letters.
                            It is often used in artistic expression, invitations, certificates, and other decorative forms
                            of writing. Calligraphy requires patience, skill, and practice to achieve mastery, and is a
                            beautiful way to express creativity and communicate a message.
                        </div>
                        <ul class="postcard__tagbox">
                            @foreach($styles as $style)
                                <li class="tag__item {{request()->styleID == $style->style_id ? 'bg-primary text-white' : ''}}">
                                    <a href="{{'?cateID='.request()->get('cateID').'&styleID='.$style->style_id }}">{{ $style -> style_name }}</a>
                                </li>
                            @endforeach
                        </ul>
                    </div>
                </article>
            @endif

            @if(request()->styleID)
                    <article class="postcard light red">
                        <a class="postcard__img_link" href="https://picsum.photos/501/500" data-lightbox="thumb">
                            <img class="postcard__img" src="https://picsum.photos/501/500" alt="Image Title" />
                        </a>
                        <div class="postcard__text t-dark">
                            <h1 class="postcard__title red">{{ $currentStyle->style_name }}</h1>
                            <div class="postcard__subtitle small">
                                <span>Is the style of <b>{{$currentStyle->calligraphyCategory->category_name}}</b> | </span>
                                <i class="fas fa-calendar-alt mr-2"></i> {{ $currentStyle->created_at }}
                            </div>
                            <div class="postcard__bar"></div>
                            <div class="postcard__preview-txt">
                                {{ $currentStyle->style_description }}
                            </div>

                        </div>
                    </article>
            @endif


            <div class="row row-cols-1 row-cols-md-4 g-4 mb-3">
                @foreach($calligraphies as $calligraphy)
                    <div class="col">
                        <a href="{{ route('home.detail',$calligraphy->calligraphy_id) }}" class="card category__card text-decoration-none h-100">
                            <img class="card-img-top img-fit" src=" {{ asset('storage/'. $calligraphy->galleryImage->first()->image_name) }}"  alt="{{ $calligraphy->galleryImage->first()->image_name }}"/>
                            <div class="card-body text-primary-color">
                                <h6 class="card-title">{{ $calligraphy->calligraphy_name }}</h6>
                                <p class="category__card-text">Style: {{ $calligraphy->calligraphyStyle->style_name }}</p>
                            </div>
                        </a>
                    </div>
                @endforeach
            </div>

            {{ $calligraphies->links() }}
            @if($calligraphies->count() == 0)
                <div style="min-height: 200px">
                    <hr>
                    <h4 class="text-primary-color">There seem to be no search results matching "{{request()->calligraphyName}}"</h4>
                    <a class="btn btn-primary-color mt-3" href="{{ route('home.category') }}">Reset all filter and search</a>
                </div>
            @endif
        </section>

        <x-home.overlay-top color="bg-secondary-color"/>

</x-home-layout>
