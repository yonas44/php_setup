<?php require base_path('views/partials/header.php') ?>

<?php require base_path('views/partials/nav.php') ?>

<?php require base_path('views/partials/banner.php') ?>

<main>
  <div class="mx-auto max-w-7xl py-6 sm:px-6 lg:px-8">
    <ul>
      <?php foreach ($notes as $note): ?>
        <li>
          <a href="/note?id=<?= $note['id'] ?>" class="text-blue-500 hover:underline">
            <?= htmlspecialchars($note['body']) ?>
          </a>
        </li>
      <?php endforeach; ?>
    </ul>

    <p class="mt-6"><a href="/notes/create" class="text-white hover:shadow-md bg-blue-500 px-2 py-1 rounded-md">Create a
        note</a></p>
  </div>
</main>
</div>


</body>

</html>