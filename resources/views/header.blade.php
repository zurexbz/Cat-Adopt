<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Adopt Cat</title>
    <link rel="stylesheet"href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">
	  <link rel="stylesheet"href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
    <link rel="stylesheet" href="/library/bootstrap/css/bootstrap.css">
    <link href="https://fonts.googleapis.com/css2?family=Assistant:wght@200;300;400;500;600;700;800&family=Playfair+Display:ital,wght@0,400;0,500;0,600;0,700;0,800;0,900;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="/style/home.css">
    <link rel="stylesheet" href="/style/report.css">
    <link rel="stylesheet" href="/style/testimonial.css">
    <style>
        /* width */
        ::-webkit-scrollbar {
          width: 7px;
        }
        
        /* Track */
        ::-webkit-scrollbar-track {
          background: #f1f1f1; 
        }
         
        /* Handle */
        ::-webkit-scrollbar-thumb {
          background: #888; 
        }
        
        /* Handle on hover */
        ::-webkit-scrollbar-thumb:hover {
          background: #555; 
        }
        </style>
</head>
<body>
    @include('partials.nav')
    @yield('container')
    @include('partials.footer')
</body>
</html>