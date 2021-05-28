<?php
require '../php/functions.php';
$items = cari($_GET['keyword']);
?>
<table class="highlight responsive-table white centered">
  <thead>
    <tr>
      <th>No.</th>
      <th>Image</th>
      <th>Name</th>
      <th>Category</th>
    </tr>
  </thead>
  <?php if (empty($items)) : ?>
    <tr>
      <td colspan="4">
        <p style="color: red; font-style: italic;">Item tidak ditemukan!</p>
      </td>
    </tr>
  <?php endif; ?>
  <tbody>
    <?php foreach ($items as $item) : ?>
      <tr>
        <td><?= $item["id"]; ?></td>
        <td><img src="assets/img/<?= $item["img"]; ?>"></td>
        <td><b><?= $item["name"]; ?></td>
        <td><?= $item["category"]; ?></td>
        <td>
          <a href="php/detail.php?id=<?= $item['id'] ?>" <?= $item["name"] ?>>View Product</a>
        </td>
      </tr>
    <?php endforeach; ?>
  </tbody>
</table>