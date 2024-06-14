@extends('layouts.app')
@section('module', 'Add categories')
@section('content')

    <main class="main">
        <div class="container-fluid">
            <div class="row">
                <!-- main title -->
                <div class="col-12">
                    <div class="main__title">
                        <h2>Thêm Danh Mục</h2>
                    </div>
                </div>
                <!-- end main title -->
                <!-- Box báo lổi khi trong form không có data
                                        => vô trong Request đã tạo riêng cho từng kiểu Request
                                            viết 1 hàm message() {} -> ghi nôi dung tiếng việt
                                            keyword => "laravel form vaalidation message" -->
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                <!-- Box thông báo đà thêm data từ form thành công vào database
                                    keyword => "laravel flash message"
                                    trong controller ->whit('success', 'Bạn đã thêm data thành công vào database') -->
                <!-- form -->
                @if (Session::has('success'))
                    <div class="alert alert-info">{{ Session::get('success') }}</div>
                @endif


                <div class="col-12">
                    <form action="{{ route('AddCategory') }}" id="add-category" class="form" method="POST">
                        @csrf

                        <div class="col-12 col-md-7 form__content">
                            <div class="row row--form">
                                <div class="col-12">
                                    <input type="text" id="title" class="form__input" name="title"
                                        value="{{ old('title') }}" onkeyup="ChangeToSlug()" onblur="checkInput()"
                                        placeholder="Title">
                                </div>

                                {{-- Báo lỗi khi không nhập data --}}
                                <div class="col-12"id="error"></div>
                                {{-- End Báo lỗi khi không nhập data --}}

                                <div class="col-12">
                                    <input type="text" id="slug" class="form__input" name="slug"
                                        value="{{ old('slug') }}">
                                </div>
                                <div class="col-12">
                                    <ul class="form__radio">
                                        <li>
                                            <span>Status:</span>
                                        </li>
                                        <li>
                                            <input id="type1" type="radio" name="status" value="0">
                                            <label for="type1">Không hiển thị</label>
                                        </li>
                                        <li>
                                            <input id="type2" type="radio" name="status" checked=""
                                                value="1">
                                            <label for="type2">Hiển thị</label>
                                        </li>
                                    </ul>
                                </div>

                                <div class="col-12">
                                    <button type="submit" class="form__btn">publish</button>
                                </div>
                            </div>
                        </div>

                    </form>
                </div>
                <!-- end form -->
            </div>
        </div>
        <div class="row">
            <!-- main title -->
            <div class="col-12">
                <div class="main__title">
                    <h2>Catalog</h2>

                    <span class="main__title-stat">14,452 Total</span>

                    <div class="main__title-wrap">
                        <!-- filter sort -->
                        <div class="filter" id="filter__sort">
                            <span class="filter__item-label">Sort by:</span>

                            <div class="filter__item-btn dropdown-toggle" role="navigation" id="filter-sort"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <input type="button" value="Date created">
                                <span></span>
                            </div>

                            <ul class="filter__item-menu dropdown-menu scrollbar-dropdown" aria-labelledby="filter-sort">
                                <li>Date created</li>
                                <li>Rating</li>
                                <li>Views</li>
                            </ul>
                        </div>
                        <!-- end filter sort -->

                        <!-- search -->
                        <form action="#" class="main__title-form">
                            <input type="text" placeholder="Find movie / tv series.." name="search">
                            <button type="button">
                                <i class="icon ion-ios-search"></i>
                            </button>
                        </form>
                        <!-- end search -->
                    </div>
                </div>
            </div>
            <!-- end main title -->

            <!-- view table category -->
            <div class="col-12">
                <div class="main__table-wrap">
                    <table class="main__table">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>TITLE</th>
                                <th>RATING</th>
                                <th>CATEGORY</th>
                                <th>VIEWS</th>
                                <th>STATUS</th>
                                <th>CRAETED DATE</th>
                                <th>ACTIONS</th>
                            </tr>
                        </thead>

                        <tbody>
                            <tr>
                                <td>
                                    <div class="main__table-text">23</div>
                                </td>
                                <td>
                                    <div class="main__table-text"><a href="#">I Dream in Another Language</a></div>
                                </td>
                                <td>
                                    <div class="main__table-text main__table-text--rate"><i class="icon ion-ios-star"></i>
                                        7.9</div>
                                </td>
                                <td>
                                    <div class="main__table-text">Movie</div>
                                </td>
                                <td>
                                    <div class="main__table-text">1392</div>
                                </td>
                                <td>
                                    <div class="main__table-text main__table-text--green">Visible</div>
                                </td>
                                <td>
                                    <div class="main__table-text">24 Oct 2021</div>
                                </td>
                                <td>
                                    <div class="main__table-btns">
                                        <a href="#modal-status" class="main__table-btn main__table-btn--banned open-modal">
                                            <i class="icon ion-ios-lock"></i>
                                        </a>
                                        <a href="#" class="main__table-btn main__table-btn--view">
                                            <i class="icon ion-ios-eye"></i>
                                        </a>
                                        <a href="#" class="main__table-btn main__table-btn--edit">
                                            <i class="icon ion-ios-create"></i>
                                        </a>
                                        <a href="#modal-delete" class="main__table-btn main__table-btn--delete open-modal">
                                            <i class="icon ion-ios-trash"></i>
                                        </a>
                                    </div>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <!-- end view table category -->

            <!-- paginator -->
            <div class="col-12">
                <div class="paginator-wrap">
                    <span>10 from 14 452</span>

                    <ul class="paginator">
                        <li class="paginator__item paginator__item--prev">
                            <a href="#"><i class="icon ion-ios-arrow-back"></i></a>
                        </li>
                        <li class="paginator__item"><a href="#">1</a></li>
                        <li class="paginator__item paginator__item--active"><a href="#">2</a></li>
                        <li class="paginator__item"><a href="#">3</a></li>
                        <li class="paginator__item"><a href="#">4</a></li>
                        <li class="paginator__item paginator__item--next">
                            <a href="#"><i class="icon ion-ios-arrow-forward"></i></a>
                        </li>
                    </ul>
                </div>
            </div>
            <!-- end paginator -->
        </div>
    </main>
    <!-- end main content -->

    <!-- modal status -->
    <div id="modal-status" class="zoom-anim-dialog mfp-hide modal d-block position-relative">
        <h6 class="modal__title">Status change</h6>

        <p class="modal__text">Are you sure about immediately change status?</p>

        <div class="modal__btns">
            <button class="modal__btn modal__btn--apply" type="button">Apply</button>
            <button class="modal__btn modal__btn--dismiss" type="button">Dismiss</button>
        </div>
    </div>
    <!-- end modal status -->

    <!-- modal delete -->
    <div id="modal-delete" class="zoom-anim-dialog mfp-hide modal d-block position-relative">
        <h6 class="modal__title">Item delete</h6>

        <p class="modal__text">Are you sure to permanently delete this item?</p>

        <div class="modal__btns">
            <button class="modal__btn modal__btn--apply" type="button">Delete</button>
            <button class="modal__btn modal__btn--dismiss" type="button">Dismiss</button>
        </div>
    </div>
    <!-- end modal delete -->




@endsection
