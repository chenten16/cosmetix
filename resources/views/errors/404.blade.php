@extends('base')

@section('content')

<section class="error__area pt-60 pb-100">
    <div class="container">
        <div class="col-xl-8 offset-xl-2 col-lg-8 offset-lg-2">
            <div class="error__content text-center">
                <div class="error__number">
                    <h1>404</h1>
                </div>
                <span>component not found</span>
                <h2>Nothing To See Here!</h2>
                <p>The page are looking for has been moved or doesn’t exist anymore, if you like you can return to our homepage. If the problem persists, please send us an email to <span class="highlight comment">basictheme@gmail.com</span></p>

                <div class="error__search">
                    <input type="text" placeholder="Enter Your Text...">
                    <button type="submit" class="os-btn os-btn-3 os-btn-black">Search</button>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection