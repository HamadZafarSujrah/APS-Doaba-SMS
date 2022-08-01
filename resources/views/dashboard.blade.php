@include('index')
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title> | Dashboard</title>


</head>


@include('index')
@include('header')
@include('MainSidebar')

<div class="content-wrapper" style="min-height: 640px;">
  

  <!-- Main content -->
  <section class="content">
    @yield('contant')
  </section>
  <!-- /.content -->
</div>




@include('footer')

{{-- <section class="contant">
  @yield('contant')
</section> --}}
 

  



</html>
