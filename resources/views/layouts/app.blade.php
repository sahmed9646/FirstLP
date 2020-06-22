<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>First Laravel Project</title>
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
   <link rel="stylesheet" href="/css/app.css">
</head>
<body>
   @include('inc.navbar')
   <div class="container">
      @if(Request::is('/'))
         @include('inc.showcase')
      @endif
   @include('inc.messages')
      <div class="row">
         <div class="col-md-8 col-lg-8">
           @yield('content')
         </div>
         <div class="col-md-4 col-lg-4">
            @include('inc.sidebar')
         </div>
      </div>
   </div>
   
  


   <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
   @include('inc.footer')
</body>
</html>