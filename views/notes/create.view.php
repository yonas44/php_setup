<?php require base_path('views/partials/header.php') ?>

<?php require base_path('views/partials/nav.php') ?>

<?php require base_path('views/partials/banner.php') ?>

<main>
  <div class="mx-auto max-w-7xl py-6 sm:px-6 lg:px-8">
    <form method="POST">
      <div class="col-span-full">
        <label for="body" class="block text-sm font-medium leading-6 text-gray-900">Body</label>
        <div class="mt-2">
          <textarea id="body" name="body" rows="3"
            class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6 p-3"
            placeholder="Place your notes here"><?= $_POST['body'] ?? '' ?></textarea>
        </div>
      </div>
      <?php if (!empty($errors)): ?>
        <p class="text-xs text-red-500 mt-3">
          <?= $errors['body'] ?>
        </p>
      <?php endif ?>
      <button class="block w-max mt-6 text-blue-500 underline">Create</button>
    </form>
  </div>
</main>
</div>


</body>

</html>