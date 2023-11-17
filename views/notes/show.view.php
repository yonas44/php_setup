<?php require base_path('views/partials/header.php') ?>

<?php require base_path('views/partials/nav.php') ?>

<?php require base_path('views/partials/banner.php') ?>

<main>
  <div class="mx-auto max-w-7xl py-6 sm:px-6 lg:px-8">
    <p>
      <?= htmlspecialchars($note['body']) ?>
    </p>

    <form method="POST">
      <input type="hidden" name="id" value="<?= $note['id'] ?>">
      <button class="text-sm text-red-500 mt-5">Delete</button>
    </form>
  </div>
</main>
</div>


</body>

</html>