<!-- sidebar -->
<div class="sidebar">
    <!-- sidebar logo -->
    <a href="{{ route('dashboard') }}" class="sidebar__logo">
        <img src="{{ asset('admin') }}/img/logo.svg" alt="">
    </a>
    <!-- end sidebar logo -->

    <!-- sidebar user -->
    <div class="sidebar__user">
        <div class="sidebar__user-img">
            <img src="{{ asset('admin') }}/img/user.svg" alt="">
        </div>

        <div class="sidebar__user-title">
            <span>Admin</span>
            <p>John Doe</p>
        </div>
        <form action="{{ route('logout') }}" method="get" class="sidebar__user-btn">
            @csrf
            <button class="sidebar__user-btn" type="submit">
                <i class="icon ion-ios-log-out"></i>
            </button>
        </form>


    </div>
    <!-- end sidebar user -->

    <!-- sidebar nav -->
    <div class="sidebar__nav-wrap">
        <ul class="sidebar__nav">
            <li class="sidebar__nav-item">
                <a href="index.html" class="sidebar__nav-link sidebar__nav-link--active"><i
                        class="icon ion-ios-keypad"></i> <span>Dashboard</span></a>
            </li>

            <li class="sidebar__nav-item">
                <a href="catalog.html" class="sidebar__nav-link"><i class="icon ion-ios-film"></i>
                    <span>Catalog</span></a>
            </li>

            <!-- collapse -->
            <li class="sidebar__nav-item">
                <a class="sidebar__nav-link" data-toggle="collapse" href="#collapseMenu" role="button"
                    aria-expanded="false" aria-controls="collapseMenu"><i class="icon ion-ios-copy"></i>
                    <span>Pages</span> <i class="icon ion-md-arrow-dropdown"></i></a>

                <ul class="collapse sidebar__menu" id="collapseMenu">
                    <li><a href="add-item.html">Add item</a></li>
                    <li><a href="{{ route('viewAddCategory') }}">Add categories</a></li>
                    <li><a href="add-item.html">Add countries</a></li>
                    <li><a href="add-item.html">Add genre</a></li>
                    <li><a href="edit-user.html">Edit user</a></li>
                    <li><a href="signin.html">Sign in</a></li>
                    <li><a href="signup.html">Sign up</a></li>
                    <li><a href="forgot.html">Forgot password</a></li>
                    <li><a href="404.html">404 page</a></li>
                </ul>
            </li>
            <!-- end collapse -->

            <li class="sidebar__nav-item">
                <a href="users.html" class="sidebar__nav-link"><i class="icon ion-ios-contacts"></i>
                    <span>Users</span></a>
            </li>

            <li class="sidebar__nav-item">
                <a href="comments.html" class="sidebar__nav-link"><i class="icon ion-ios-chatbubbles"></i>
                    <span>Comments</span></a>
            </li>

            <li class="sidebar__nav-item">
                <a href="reviews.html" class="sidebar__nav-link"><i class="icon ion-ios-star-half"></i>
                    <span>Reviews</span></a>
            </li>

            <li class="sidebar__nav-item">
                <a href="http://hotflix.volkovdesign.com/main/index.html" class="sidebar__nav-link"><i
                        class="icon ion-ios-arrow-round-back"></i> <span>Back to HotFlix</span></a>
            </li>
        </ul>
    </div>
    <!-- end sidebar nav -->

    <!-- sidebar copyright -->
    <div class="sidebar__copyright">© HOTFLIX, 2019—2021. <br>Create by <a
            href="https://themeforest.net/user/dmitryvolkov/portfolio" target="_blank">Dmitry Volkov</a></div>
    <!-- end sidebar copyright -->
</div>
<!-- end sidebar -->
