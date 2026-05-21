<?php if (!empty($dependencies['scripts'])): ?>
  <?php foreach ($dependencies['scripts'] as $script): ?>
    <?= $script . "\n" ?>
  <?php endforeach; ?>
<?php endif; ?>

<?php if (!empty($page['scripts'])): ?>
  <?php foreach ($page['scripts'] as $script): ?>
    <?php if (gettype($script) === 'string'): ?>
      <script src="<?= $script ?>"></script>
    <?php elseif (gettype($script) === 'array'): ?>
      <?php
      $src  = $script['src'] ?? '';
      $type = isset($script['module']) && $script['module'] ? 'module' : 'text/javascript';
      ?>
      <script src="<?= $src ?>" type="<?= $type ?>"></script>
    <?php endif; ?>
  <?php endforeach; ?>
<?php endif; ?>

</body>
</html>