<?php

$page = [
  'title' => 'Toggle Text',
  'styles' => ['css/toggle-text.css'],
  'scripts' => ['js/toggle-text.js'],
];

require_once __DIR__ . '/../_shared/header.php';

?>

<main class="boxed">
  <h1><?= $page['title'] ?></h1>

  <div class="toggle-text">
    <div class="toggle-text__content">
      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed at velit quis enim congue
        vestibulum. Praesent laoreet massa tellus, non cursus dui faucibus eu. Nullam sagittis
        scelerisque tristique. Nullam vel velit in orci convallis rhoncus. Sed eget dui vel elit
        maximus gravida. Nulla finibus nisi vitae orci venenatis dapibus. Donec nec tempus odio,
        eu euismod felis. Phasellus nec nisi est. Fusce iaculis non elit non laoreet.</p>

      <p>Morbi magna felis, auctor vel pulvinar in, posuere id orci. Sed interdum nisi ut dapibus
        euismod. Donec finibus nulla ac malesuada consequat. Praesent nisi nisl, fermentum nec
        gravida sit amet, mattis vel urna. Donec vitae mi arcu. Sed sollicitudin mattis malesuada.
        Sed nec iaculis sem, volutpat elementum nunc.</p>

      <p>Curabitur sit amet dignissim elit, et volutpat ante. Duis enim augue. Suspendisse potenti.
        Suspendisse non felis mi. Ut sed dui est. Ut blandit felis at diam eleifend, quis fermentum
        dui aliquet. Nulla id augue id quam mollis lobortis. Phasellus id ultrices lectus,
        ut dignissim massa. Vivamus vel vestibulum ex. Maecenas mattis bibendum purus in malesuada.
        Aliquam nunc. Etiam a feugiat ante. Mauris tincidunt dolor a ante eleifend ullamcorper.
        Morbi et laoreet tellus, in consequat nisi. Nulla dapibus eleifend nunc ut mollis. Interdum
        et malesuada fames ac ante ipsum primis in faucibus.</p>
    </div>
    <button type="button" class="btn btn-primary toggle-text__btn">Read More</button>
  </div><!-- / .toggle-text -->
</main>


<script>
  // Initialization
  document.addEventListener('DOMContentLoaded', () => {
    const toggleTextSections = document.querySelectorAll('.toggle-text');
    if (!toggleTextSections.length) return;

    // Example of dynamic French translation
    // (we still need to update the initial state of the button in HTML)
    const isFrench = location.pathname.includes('/fr/');
    const btnTextTranslations = isFrench
      ? {
        btnTextExpand: 'Lire plus',
        btnTextCollapse: 'Lire moins',
      }
      : {};

    toggleTextSections.forEach(section => {
      new ToggleText(section, {
        // merge the translations and other options into one object
        ...btnTextTranslations,
        breakPointSelector: 'p:nth-child(2)',
      });
    });
  });
</script>

<?php require_once __DIR__ . '/../_shared/footer.php';