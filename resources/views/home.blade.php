<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Crud_xls_pdf</title>
  
  @include('xlspdf.layouts.links')
  
</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

  
    @include('xlspdf.layouts.header')
  
    @include('xlspdf.layouts.sidebar')
  
    @yield('conteudo')
  
    @include('xlspdf.layouts.footer')
  

</div>

    @include('xlspdf.layouts.scripts')

</body>
</html>
