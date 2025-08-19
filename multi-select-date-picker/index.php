<?php

$page = [
  'title'      => 'Multi-Select Date Picker',
  'body_class' => 'centered-content',
  'scripts'    => ['js/multi-select-date-picker.js', 'js/demo.js'],
];

require_once __DIR__ . '/../_shared/header.php';

?>

<main class="boxed">
  <h1><?= $page['title'] ?></h1>

  <div class="container-fluid" id="date-picker">
    <div class="row gy-3">
      <div class="col-sm-4">
        <label class="visually-hidden" for="date-year">Year</label>
        <select class="form-select" id="date-year">
          <option value="">Year</option>
        </select>
      </div>

      <div class="col-sm-4">
        <label class="visually-hidden" for="date-month">Month</label>
        <select class="form-select" id="date-month">
          <option value="">Month</option>
        </select>
      </div>

      <div class="col-sm-4">
        <label class="visually-hidden" for="date-day">Month</label>
        <select class="form-select" id="date-day">
          <option value="">Day</option>
        </select>
      </div>
    </div>
  </div>

</main>

<?php require_once __DIR__ . '/../_shared/footer.php';