@extends('layouts.visible')

@section('content')
    @include('visible.particles.breadcrumbs')

    <div class="promotion">
        <div class="wrapper">
            <div class="promotion__top">
                <div class="promotion__title title bottom">{{ $page->data['title'] ?? '' }}</div>
                <div class="promotion__subtitle bottom">{{ $page->data['sub_title'] }}</div>
            </div>
            <div class="promotion__row flex-center">
                @foreach($listings as $listing)
                    <a href="#" class="promotion__coll bottom">
                        <div class="promotion__coll-top">
                            <div class="promotion__icon img-contain">
                                <img src="/img/promotion/star.svg" alt="">
                            </div>
                            <div class="promotion__name">{{ $listing->name }}</div>
                            <div class="promotion__price">@formatAmount($listing->amount)</div>
                        </div>
                        <div class="promotion__list">
                            {!! $listing->content !!}
                        </div>
                        <div class="promotion__bottom">
                            <div class="promotion__btn btn">order now</div>
                        </div>
                    </a>
                @endforeach
            </div>
            <div class="promotion__order">
                <div class="promotion__order-title title bottom">Place Order</div>
                <form method="post" action="{{ route('visible.json.submit.order') }}" class="promotion__form form" name="listing-create" data-form>
                    <div class="promotion__form-body">
                        <label class="form__label bottom error">
                            <input type="text" name="name" class="form__field field  validate--js" placeholder="Project name">
                        </label>
                        <label class="form__label bottom success">
                            <input type="text" name="email" class="form__field field validate--js  validate-email--js" placeholder="Your e-mail">
                        </label>
                        <label class="form__label form__label_older bottom">
                            <div class="form__promotion">
                                <div class="form__promotion-title">
                                    <div class="form__promotion-caption">{{ $listings->first()->name ?? '' }}</div>
                                    <div class="form__promotion-arrow">
                                        <svg width="8" height="8" viewBox="0 0 8 8" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M3.7261 6.52333C3.75668 6.56774 3.7976 6.60405 3.84533 6.62914C3.89306 6.65423 3.94618 6.66734 4.0001 6.66734C4.05402 6.66734 4.10714 6.65423 4.15487 6.62914C4.2026 6.60405 4.24352 6.56774 4.2741 6.52333L7.2741 2.18999C7.30883 2.14001 7.32919 2.08147 7.33298 2.02073C7.33677 1.95999 7.32384 1.89937 7.2956 1.84546C7.26735 1.79155 7.22488 1.74641 7.17278 1.71494C7.12068 1.68348 7.06096 1.6669 7.0001 1.66699H1.0001C0.939382 1.66724 0.87988 1.68404 0.827995 1.71558C0.776109 1.74712 0.733802 1.79221 0.705624 1.84599C0.677446 1.89978 0.664463 1.96022 0.668071 2.02084C0.671679 2.08145 0.691741 2.13993 0.726101 2.18999L3.7261 6.52333Z"
                                                fill="#2F3E46" />
                                        </svg>
                                    </div>
                                </div>
                                <div class="form__promotion-options">
                                    @foreach($listings as $listing)
                                        <div class="form__promotion-options__item" data-value="{{ $listing->id }}">
                                            <div class="form__promotion-options__caption">{{ $listing->name }}</div>
                                        </div>
                                    @endforeach
                                </div>
                                <input type="hidden" name="listing_id" value="{{ $listings->first()->id ?? '' }}">
                            </div>
                        </label>
                        <label class="form__label bottom ">
                            <textarea class="form__field field validate--js" placeholder="Describe your order in as much detail as possible" name="message"></textarea>
                        </label>
                    </div>
                    <div class="promotion__form-bottom bottom">
                        <button class="form__btn btn btn_blue bottom" type="submit">
                            <div class="btn__caption">place order</div>
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection

@push('footer')
    <script src="https://www.google.com/recaptcha/api.js?render=6Lc2WxwbAAAAADIR95hjCOZt4cUsH14Q27rqAsyu"></script>
@endpush
