<section class="header">
    <nav class="navbar navbar-dark navbar-default navbar-expand-xl" style="background-color: #051c63;">
        <a href="{{ route('website.home') }}" class="navbar-brand"><img src="{{ asset('website/images/logo.png') }}"
                alt="logo">Laptop Point bd</a>
        {{-- mobile icon --}}
        <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>
        <!-- mobile shopping cart -->
        <div class="mobile_shopping">
            @if (auth()->user())
                <a href="{{ route('user.profile', auth()->user()->id) }}">
                    <span
                        class="badge badge-danger ml-4">{{ session()->has('cart') ? count(session()->get('cart')) : 0 }}</span>
                    <i class="fa fa-shopping-basket fa-lg"></i>
                </a>
            @else
                <a href="{{ route('users.login.form') }}">
                    <i class="fa fa-shopping-basket fa-lg"></i>
                </a>
            @endif

        </div>
        <div id="navbarCollapse" class="collapse navbar-collapse justify-content-start">
            <!-- search -->
            <form action="{{ route('website.search') }}" method="POST" class="navbar-form form-inline">
                @csrf
                <div class="input-group search-box w-100">
                    @if (!empty($search))
                        <input type="text" name="search" value="{{ $search }}" class="form-control"
                            placeholder="Search here...">
                    @else
                        <input type="text" name="search" value="" class="form-control"
                            placeholder="Search here...">
                    @endif
                    <span class="input-group-addon"><i class="material-icons">&#xE8B6;</i></span>
                </div>
            </form>
            {{-- menu --}}
            <div class="nav-2">
                <ul>
                    <li style="--clr:#00ade1;">
                        <a href="{{ route('website.home') }}" data-text="home">home</a>
                    </li>
                    <li style="--clr:#b48734;">
                        <a href="{{ route('website.offers') }}">Special offers</a>
                    </li>
                    <li style="--clr:#fd79a8;">
                        <a href="{{ route('website.laptop.deals') }}" data-text="deals">deals</a>
                    </li>
                    <li style="--clr:#81da0e;">
                        <a  data-text="contacts" href="#companyDescripton">contacts</a>
                    </li>
                    @if (auth()->user())
                        <li style="--clr:#fab1a0;">
                            <a href="{{ route('user.profile', auth()->user()->id) }}" data-text="profile">profile <span
                                    class="badge badge-danger">
                                    {{ session()->has('cart') ? count(session()->get('cart')) : 0 }}
                                </span></a>
                        </li>
                    @else
                        <li style="--clr:#f1c40f;">
                            <a href="{{ route('users.login.form') }}" data-text="Login">Login</a>
                        </li>
                    @endif
                </ul>
            </div>
        </div>
    </nav>
    <div>
        <!--  message -->
        @if (session()->has('error'))
            <p class="alert alert-danger">{{ session()->get('error') }}</p>
        @endif
        @if (session()->has('message'))
            <p class="alert alert-success">{{ session()->get('message') }}</p>
        @endif
        <!-- end -->
    </div>
</section>
