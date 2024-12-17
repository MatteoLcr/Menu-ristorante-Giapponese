<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Giappo Menu</title>

  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+TC:wght@100..900&display=swap" rel="stylesheet">

  <link href="https://fonts.cdnfonts.com/css/swiss-721" rel="stylesheet">
  <link href="https://fonts.cdnfonts.com/css/base-neue" rel="stylesheet">
                

  <!-- material icon -->
  <link href="https://fonts.googleapis.com/css2?family=Material+Icons"
    rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined"
    rel="stylesheet">

  @vite (['resources/css/app.css', 'resources/js/app.js'])
</head>

<body>
  <x-navbar></x-navbar>
  {{ $slot}}
</body>

</html>