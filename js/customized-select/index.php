<?php

$shared = __DIR__ . '/../../_shared';

$page = [
  'title'      => 'Customized Select',
  'body_class' => 'centered-content',
  'styles'     => ['css/customized-select.css'],
  'scripts'    => ['js/customized-select.js', 'js/demo.js'],
];

require_once $shared . '/header.php';

?>

<main class="boxed">
  <h1><?= $page['title'] ?></h1>

  <div class="container-fluid">
    <div class="row g-4">

      <div class="col-sm-4">
        <label class="form-label" for="user-gender">Gender</label>
        <select class="form-select" id="user-gender">
          <option>Please select</option>
          <option>Male</option>
          <option>Female</option>
        </select>
      </div>

      <div class="col-sm-4">
        <label class="form-label" for="user-country">Country</label>
        <select class="form-select" id="user-country">
          <option>Please select</option>
        </select>
      </div>

      <div class="col-sm-4">
        <label class="form-label" for="user-age">Age</label>
        <select class="form-select" id="user-age">
          <option>Please select</option>
        </select>
      </div>

    </div>
  </div>
</main>

<?php require_once $shared . '/footer.php';