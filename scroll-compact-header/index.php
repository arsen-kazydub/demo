<?php

$page = [
  'title'   => 'Scroll Compact Header',
  'styles'  => ['css/scroll-compact-header.css'],
  'scripts' => ['js/scroll-compact-header.js'],
];

require_once __DIR__ . '/../_shared/header.php';

?>

<header id="header">Header Content</header>

<main class="boxed">
  <h1><?= $page['title'] ?></h1>
  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec scelerisque, sem a pharetra
    efficitur, odio ipsum pharetra turpis, sit amet porttitor leo diam at lacus. Duis dolor
    ante, lacinia non eleifend vitae, facilisis in mauris. Ut a velit at urna consequat cursus
    eget vitae odio. Pellentesque sem risus, porta eget rhoncus sit amet, congue nec erat. In
    hac habitasse platea dictumst. Nulla semper neque purus, a iaculis nec lorem molestie ac.
    Vestibulum est velit, leo aliquet vulputate ligula vel, malesuada elementum enim. Quisque
    rhoncus dui orci, vitae porta. Etiam at augue lacinia sapien interdum ornare non dui.</p>

  <p>Nulla leo orci, gravida quis dignissim ac, malesuada eu est. Donec condimentum mi eu nisl
    pellentesque rutrum. Morbi scelerisque sapien tincidunt nisi, id dapibus quam mollis et.
    Vestibulum fringilla tellus ornare, tincidunt odio vitae, pulvinar ex. Cras mattis turpis
    porttitor auctor. Vestibulum egestas posuere urna eu congue. Donec odio, aliquam vel neque,
    elementum finibus. Nulla imperdiet placerat tincidunt. Aenean vitae sagittis dui, non erat
    euismod. Morbi sodales cursus tellus, et lobortis tellus ornare eu. Suspendisse in turpis.
    Nam congue mi ut leo lacinia, non risus imperdiet metus pretium. Nunc et volutpat mi. Duis
    condimentum, urna nec finibus commodo, elit massa sagittis risus, nec scelerisque turpis
    velit non enim. Cras fringilla urna id bibendum ultricies. Nunc at mauris mollis, interdum
    ante vehicula, convallis magna.</p>

  <p>Nam at ante sit amet nunc ullamcorper placerat. Etiam accumsan porttitor eros, nec nisl
    imperdiet ligula eleifend sit amet. Ut in nisl sed magna pulvinar rhoncus sit amet sit
    amet mi. In elementum feugiat odio, non mattis lacus dictum sit amet. Phasellus congue
    dapibus magna ut finibus. Mauris ac erat. Etiam eleifend urna nec tortor lacinia tristique.
    Morbi accumsan blandit luctus. Curabitur eget quam id mauris ornare hendrerit. Sed eu nulla
    mauris. Curabitur varius non ipsum sed semper. Aenean elementum ultrices eros vel sodales.
    Duis posuere, ex eget posuere laoreet, elit purus porttitor erat, sed consequat felis ex
    ligula. Pellentesque dignissim varius leo, sed hendrerit dolor.</p>

  <p>Suspendisse tincidunt lorem nisi, at efficitur leo faucibus porta. Vestibulum interdum
    vitae est, non commodo leo. Morbi sit amet lacus aliquam, fringilla felis ac, vehicula dui.
    Donec volutpat dolor risus, a rhoncus erat ultrices vel. In in egestas mauris, sagittis
    tempus nisl. Fusce suscipit justo at dapibus vehicula. Curabitur id ultrices nunc. Aenean
    ullamcorper id ante a cursus. Duis molestie leo lectus, quis porta magna sagittis non.
    Vestibulum ac pretium mi. Nam eget turpis nec elit fringilla facilisis. Quisque quis
    euismod magna. Mauris vitae ligula pharetra, rhoncus quam eu, lacinia nibh.</p>

  <p>Sed mi turpis, dictum ac tempus eget, tempus eget odio. Sed quis vehicula purus. Cras suscipit
    lorem nisl, quis accumsan leo molestie eu. Sed quis justo sed elit congue hendrerit. Aenean eu
    cursus diam. Vivamus malesuada augue ut orci dictum scelerisque. Nam tincidunt, id laoreet
    metus lobortis, erat augue tincidunt ligula, in dignissim turpis ex nec magna. Proin maximus
    massa facilisis ultricies ullamcorper. Aenean porta vehicula massa sodales eleifend. Cras
    pellentesque malesuada urna, in condimentum lacus sagittis ut. Cras dignissim nunc in nibh
    rutrum tristique. Curabitur lacinia ante at lacus euismod laoreet. Pellentesque elementum in
    lorem eget feugiat. In nec dolor velit.</p>

  <p>Nulla augue ex, blandit ac est vitae, volutpat feugiat sem. Vivamus faucibus risus eget
    semper vehicula. Aenean risus mi, interdum et mauris vitae, pretium aliquet sapien. Etiam
    maximus enim id tortor pharetra, eget vehicula urna mattis. Phasellus in arcu faucibus,
    rutrum lectus at, egestas lorem. Aenean quam iaculis tortor, lobortis a eros ac, aliquet
    pellentesque augue. Mauris dapibus risus ante, rutrum lobortis enim interdum eget.
    Suspendisse  orci sem, in tincidunt diam faucibus consectetur.</p>

  <p>Maecenas tellus nisi, aliquet a orci nec, maximus maximus nibh. Nulla sit amet sapien et nulla
    vulputate sollicitudin. Nullam a enim nec sapien pretium elementum. Duis varius id augue non
    tristique. Quisque sagittis libero eu nunc accumsan, ullamcorper lobortis tortor porttitor.
    Nunc tincidunt dignissim nunc, sit amet accumsan arcu imperdiet et. Ut sed lorem et nisi tempor
    auctor. Suspendisse eu augue ut urna suscipit fringilla.</p>

  <p>Risus lacinia fringilla risus, sed pellentesque enim finibus et. Aliquam ac nisl mi. Sed nisi
    magna, porta porta rhoncus id, aliquet ultricies mauris. Vivamus sed massa dictum, pharetra
    nunc nec, feugiat metus. Ut lobortis nisl purus, at porttitor ultrices mauris scelerisque nec.
    Vestibulum ante ipsum primis in faucibus orci luctus et posuere cubilia curae; Vivamus ornare
    lectus at eros venenatis, tincidunt placerat nunc tempor.</p>
</main>

<?php require_once __DIR__ . '/../_shared/footer.php';