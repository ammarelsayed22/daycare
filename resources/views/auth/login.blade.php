@include('backend.inc.header')
<body>

    <a href="index.html" class='navbar-brand'>
        <div class='photo'><img src={{ asset('/assets/imgs/logo.jpg') }} alt="logo" /></div>

      </a>
      <a href="/daycare" class="form-btn up log" style="width: 100%; font-weight: 500;">Add Nursery</a>


    <div class='login-sec py-5'>
        <div class='container'>
            <div class='row gy-4'>
                <div class='col-md-6'>
                    <form method="POST" class='login-form' action="{{ route('login') }}">
                        @csrf

                        <div class='login-img-con'>
                            <img class='login-img' src='./assets/imgs/Icons/boss.png' alt='boss' />
                        </div>
                        <h3 class='login-title'>Owner Login</h3>

                        <div class='input-g'>
                            <label for="email">Email</label>
                            <input type="email" name="email" id="email" />
                        </div>
                        <div class='input-g'>
                            <label for="password">Password</label>
                            <input type="password" name="password" id="password" />
                        </div>
                        <div class='input-g'>
                            <a href='{{ route('register') }}'>Create Account</a>
                        </div>

                        <button type='submit' class='form-btn up'>Login</button>
                    </form>
                </div>


                <div class='col-md-6'>
                    <div class='login-form mb-4'>
                        <div class='login-img-con'>
                            <img class='login-img sm' src='./assets/imgs/Icons/family.png' alt='boss' />
                        </div>
                        <h3 class='login-title'>Parent Or Child Login</h3>

                        <div class='text-center'>
                            <a href='{{ route('dad.login') }}' class='form-btn up log'>Login In Here</a>
                        </div>
                    </div>

                    <div class='login-form'>
                        <div class='login-img-con'>
                            <img class='login-img sm' src='./assets/imgs/Icons/teacher (2).png' alt='boss' />
                        </div>
                        <h3 class='login-title'>Staff Login</h3>

                        <div class='text-center'>
                            <a href='{{ route('teacher.login') }}' class='form-btn up log'>Login In Here</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

   @include('backend.inc.footer')
