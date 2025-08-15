<?php

$page = [
  'title' => 'French Typographic Spacing',
  'body_class' => 'centered-content',
  'styles' => ['css/french-typographic-spacing.css'],
  'scripts' => ['js/french-typographic-spacing.js'],
];

require_once __DIR__ . '/../_shared/header.php';

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


<script>
  // Initialization
  document.addEventListener('DOMContentLoaded', () => {
    // example of a French page detection
    // if (document.documentElement.lang === 'fr-FR' || location.pathname.includes('/fr/')) {}

    const select = document.getElementById('nbsp-type');
    if (!select) return;

    // we can process the whole page or specific elements like in this demo
    const frenchText = document.querySelectorAll('.poem');
    if (!frenchText.length) return;

    select.addEventListener('change', () => {
      frenchText.forEach(container => {
        new FrenchTypographicSpacing(container, {
          nbspType: select.value
        });
      });
    });
  });
</script>

<?php require_once __DIR__ . '/../_shared/footer.php';