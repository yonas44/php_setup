<?php require 'views/partials/header.php' ?>

<?php require 'views/partials/nav.php' ?>

<?php require 'views/partials/banner.php' ?>

<main>
  <div class="mx-auto max-w-7xl py-6 sm:px-6 lg:px-8">
    <form method="POST">
      <textarea name="body" placeholder="Place your notes here..."><?= $_POST['body'] ?? '' ?></textarea>
      <?php if (!empty($errors)): ?>
        <p class="text-xs text-red-500">
          <?= $errors['body'] ?>
        </p>
      <?php endif ?>
      <button class="block w-max mt-6">Create</button>
    </form>
  </div>
</main>
</div>


</body>

</html>