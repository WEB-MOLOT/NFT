@extends('layouts.front')

@section('title') Contact us @endsection

@section('content')

    <div class="main-page">

        <div class="page-top bottom">
            <div class="wrapper">
                <div class="breadcrumbs">
                    <ul>
                        <li><a href="#">Home</a></li>
                        <li>Contact us</li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="contacts">
            <div class="wrapper wrapper_big">
                <div class="contacts__body flex">
                    <div class="contacts__left">
                        <div class="contacts__title title bottom">Contact us</div>
                        <div class="contacts__subtitle bottom">The ICOmarks team will always be glad to respond to your comments, questions or suggestions. To submit new ICO, use this page.</div>
                        <div class="contacts__social bottom">
                            <div class="contacts__social-items">
                                <div class="contacts__social-item">
                                    <a href="#" class="contacts__link flex">
                                        <div class="contacts__link-icon flex-center">
                                            <svg width="15" height="11" viewBox="0 0 15 11" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M0.213966 5.12217C1.66326 4.38508 3.28106 3.76986 4.79265 3.15152C7.39317 2.13872 10.004 1.14348 12.6412 0.216917C13.1543 0.0590495 14.0763 -0.0953169 14.1667 0.606754C14.1171 1.60057 13.9135 2.58856 13.7739 3.57656C13.4194 5.74925 13.0096 7.9145 12.61 10.08C12.4723 10.8014 11.4937 11.1748 10.8675 10.7132C9.36264 9.77462 7.8462 8.84516 6.36054 7.88483C5.87387 7.42824 6.32516 6.77253 6.75979 6.44648C7.99926 5.31863 9.31372 4.3604 10.4884 3.17427C10.8053 2.46778 9.86903 3.06319 9.56021 3.24564C7.86338 4.32531 6.20808 5.4709 4.41909 6.41978C3.50527 6.88424 2.4402 6.48733 1.5268 6.22816C0.707839 5.91507 -0.49227 5.59963 0.213883 5.12226L0.213966 5.12217Z"
                                                    fill="#20C4F3" />
                                            </svg>
                                        </div>
                                        <div class="contacts__link-caption">@nftsale_support</div>
                                    </a>
                                </div>
                                <div class="contacts__social-item">
                                    <a href="#" class="contacts__link flex">
                                        <div class="contacts__link-icon flex-center">
                                            <svg width="14" height="15" viewBox="0 0 14 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M6.99998 0.5C3.14016 0.5 0 3.64017 0 7.49996C0 11.3598 3.14016 14.5 6.99998 14.5C8.41408 14.5 9.77756 14.079 10.9429 13.2825L10.9632 13.2686L10.0201 12.1723L10.0041 12.1826C9.1069 12.7598 8.06809 13.0648 6.99998 13.0648C3.93151 13.0648 1.43517 10.5684 1.43517 7.49996C1.43517 4.43148 3.93151 1.93513 6.99998 1.93513C10.0684 1.93513 12.5648 4.43148 12.5648 7.49996C12.5648 7.89759 12.5207 8.30018 12.4338 8.69623C12.2577 9.4184 11.7522 9.63966 11.3723 9.61035C10.9905 9.57955 10.5436 9.30731 10.5407 8.64134V7.49996C10.5407 5.5476 8.95233 3.95926 6.99998 3.95926C5.04763 3.95926 3.45925 5.5476 3.45925 7.49996C3.45925 9.45236 5.04763 11.0407 6.99998 11.0407C7.94827 11.0407 8.83795 10.6698 9.50852 9.99552C9.89839 10.6023 10.5342 10.9828 11.2573 11.0409C11.3194 11.0459 11.3827 11.0484 11.4457 11.0484C11.9549 11.0484 12.4594 10.8782 12.8664 10.5693C13.286 10.2507 13.5993 9.78988 13.7722 9.23659C13.8002 9.14721 13.8508 8.94241 13.851 8.94109L13.8525 8.93372C13.9545 8.48941 14 8.04676 14 7.49996C14 3.64017 10.8598 0.5 6.99998 0.5Z"
                                                    fill="#20C4F3" />
                                                <path class="white" d="M9 7.49996C9 8.60279 8.10279 9.5 7 9.5C5.89717 9.5 5 8.60279 5 7.49996C5 6.39717 5.89717 5.5 7 5.5C8.10279 5.5 9 6.39717 9 7.49996Z" fill="white" />
                                            </svg>
                                        </div>
                                        <div class="contacts__link-caption">info@nftsale.io</div>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="contacts__right">
                        <contact-form></contact-form>
                    </div>
                </div>
            </div>
        </div>

    </div>

@endsection
