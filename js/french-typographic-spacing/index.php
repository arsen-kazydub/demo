<?php

$shared = __DIR__ . '/../../_shared';

$page = [
  'title'      => 'French Typographic Spacing',
  'body_class' => 'centered-content',
  'styles'     => ['css/demo.css'],
  'scripts'    => ['js/french-typographic-spacing.js', 'js/demo.js'],
];

require_once $shared . '/header.php';

?>

<main class="boxed text-center">
  <h1><?= $page['title'] ?></h1>

  <div class="fts-demo d-inline-flex flex-column gap-4 justify-content-center align-items-center
  text-start border rounded bg-light">
    <div class="form">
      <label for="nbsp-type" class="form-label">Non-breaking space type:</label>
      <select id="nbsp-type" class="form-select">
        <option value="none">None</option>
        <option value="narrow">Narrow</option>
        <option value="regular">Regular</option>
      </select>
    </div>

    <div class="poem">
      <p>Lorem ipsum dolor fremet,
        Consectetur blandit elit?
        Sed at velit — non regret —
        Vestibulum rhoncus velit.</p>

      <p>Massa tellus: nunc remissus,
        Dui faucibus — sagittis!
        Scelerisque vitae submissus —
        Nullam vel magna cavis...</p>

      <p>Sed eget finibus trinis,
        Donec nec tempus balis;
        Nulla maximus 100% finis,
        Vitae orci dapibus malis.</p>
    </div>
  </div>
</main>

<?php require_once $shared . '/footer.php';