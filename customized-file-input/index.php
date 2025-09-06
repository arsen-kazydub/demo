<?php

$page = [
  'title'      => 'Customized File Input',
  'body_class' => 'centered-content',
  'styles'     => ['css/customized-file-input.css', 'css/demo.css'],
  'scripts'    => ['js/customized-file-input.js', 'js/demo.js'],
];

require_once __DIR__ . '/../_shared/header.php';

?>

<main class="boxed">
  <h1><?= $page['title'] ?></h1>

  <div class="customized-file-input-demo">
    <div class="d-flex flex-column gap-3">

      <div class="row">
        <div class="col">
          <label class="form-label" for="file-input-1">File input 1</label>
          <input type="file" class="form-control" id="file-input-1">
        </div>
      </div>

      <div class="row">
        <div class="col">
          <label class="form-label" for="file-input-2">File input 2</label>
          <input type="file" class="form-control" id="file-input-2">
        </div>
      </div>

    </div>
  </div><!-- / .customized-file-input-demo -->
</main>

<?php require_once __DIR__ . '/../_shared/footer.php';