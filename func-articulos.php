<?php
$articles = [
    ['title' => 'Plata y Bronce en el Salón del Queso 2024', 'slug' => 'plata-y-bronce-en-el-salon-del-queso-2024.php'],
    ['title' => 'Laboratorio Digital para Emprendedores en el Paujil', 'slug' => 'laboratorio-digital-para-emprendedores-en-el-paujil.php'],
    ['title' => 'Día Mundial de la Leche', 'slug' => 'dia-mundial-de-la-leche.php'],
    ['title' => 'Unión Europea visita La Maporita', 'slug' => 'union-europea-visita-la-maporita.php'],
    ['title' => 'Premio Nacional del Queso 2023', 'slug' => 'premio-nacional-del-queso-2023.php'],
    ['title' => 'Lácteos La Maporita en Alimentarte Food Festival 2023', 'slug' => 'lacteos-la-maporita-en-alimentarte-food-festival-2023.php'],
    ['title' => 'Nueva imagen de empaques', 'slug' => 'nueva-imagen-de-empaques.php'],
    ['title' => 'Preferencias frente al consumo de Queso en Cali y ciudades cercanas', 'slug' => 'preferencias-frente-al-consumo-de-queso-en-cali-y-ciudades-cercanas.php'],
    ['title' => 'Visita Davivienda Regional Centro Sur', 'slug' => 'visita-davivienda-regional-centro-sur.php'],
    ['title' => 'Reanudamos Labores', 'slug' => 'reanudamos-labores.php'],
    ['title' => 'Pizza Master 2018', 'slug' => 'pizza-master-2018.php'],
    ['title' => 'Asistencia Técnica, un gran valor agregado', 'slug' => 'asistencia-tecnica-un-gran-valor-agregado.php'],
    ['title' => 'Lácteos La Maporita, Conquistando los mercados nacionales', 'slug' => 'lacteos-la-maporita-conquistando-los-mercados-nacionales.php'],
    ['title' => 'La Familia Maporita', 'slug' => 'la-familia-maporita.php']
];

$current_slug = basename($_SERVER['PHP_SELF']);
$current_index = array_search($current_slug, array_column($articles, 'slug'));
$prev_index = ($current_index - 1 + count($articles)) % count($articles);
$next_index = ($current_index + 1) % count($articles);
$prev_article = $articles[$prev_index];
$next_article = $articles[$next_index];
?>