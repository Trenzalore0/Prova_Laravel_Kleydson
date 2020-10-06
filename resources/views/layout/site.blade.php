@include('layout.includes.head')

@include('layout.includes.navbar')

<div class="container">
  <div class="row">
    <div class="col-12">
      @yield('content')
    </div>
  </div>
</div>


@include('layout.includes.footer')