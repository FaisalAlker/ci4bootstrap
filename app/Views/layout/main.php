<!-- app/Views/layout/main.php -->
<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <title><?= $title ?? 'No title' ?></title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-LN+7fdVzj6u52u30Kp6M/trliBMCMKTyK833zpbD+pXdCLuTusPj697FH4R/5mcr" crossorigin="anonymous">
  <link href="https://cdn.datatables.net/2.3.2/css/dataTables.dataTables.min.css" rel="stylesheet" >
</head>
<body>
  <header></header>
  <?= view('partials/header') ?>
  <main>
    <?= $this->renderSection('content') ?>
    <?= $this->renderSection('sub-content') ?>
  </main>



<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js" integrity="sha384-ndDqU0Gzau9qJ1lfW4pNLlhNTkCfHzAVBReH9diLvGRem5+R9g2FzA8ZGN954O5Q" crossorigin="anonymous"></script>
<script src="https://cdn.datatables.net/2.3.2/js/dataTables.min.js"></script>

</body>
</html>
