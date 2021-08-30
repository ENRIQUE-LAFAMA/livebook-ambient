<?php
require_once "vistas/arriba.php";
require_once "../php/addLibro.php";

$search_remember = '';
if (isset($_GET['search'])) {
  $search_remember = $_GET['search'];
}
?>

<div class="container-fluid contenLibro">
  <nav class="navbar">
    <div class="container-fluid">
      <a class="navbar-brand">Libros</a>
      <form class="d-flex" action="" method="get">
        <input class="form-control me-2" type="text" placeholder="Buscar libro" aria-label="Buscar" name="search" class="search" value="<?php echo $search_remember ?>">
        <button class="btn btn-outline-success" type="submit" class="search-btn">Buscar</button>
      </form>
    </div>
  </nav>
  <h1 class="tituloM">Mostrando archivos</h1>
  <div class="container-fluid contenMostrar">
    <?php
    $search = null;
    if (isset($_GET['search'])) {
      $search = $_GET['search'];
    }
    $lib->mostrar($search);
    ?>

  </div>
</div>

<?php require_once "vistas/bajo.php"; ?>