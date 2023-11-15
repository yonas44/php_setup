<!DOCTYPE html>
<html lang="en" class="h-full bg-gray-100">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>PHP demo page</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="h-full">
  <div class="min-h-ful-l">
    <?php require 'partials/nav.php' ?>

    <?php require 'partials/banner.php' ?>
    
    <main>
      <div class="mx-auto max-w-7xl py-6 sm:px-6 lg:px-8">
        <p>This is the about page</p>
      </div>
    </main>
  </div>


</body>

</html>