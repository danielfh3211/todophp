<?php
include 'todo.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Todo App</title>
  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <!-- Custom CSS -->
  <link rel="stylesheet" href="styles.css">
</head>
<body>

<div class="container todo-container">
  <h1 class="text-center mb-4">Todo App - Catat Ide Kreatifmu!</h1>
  
  <!-- Form untuk menambahkan todo baru -->
  <form method="POST" class="input-group mb-4">
    <input type="text" class="form-control" placeholder="Apa yang ingin kamu lakukan?" name="todo" required>
    <button type="submit" class="btn btn-primary">Tambah Ide</button>
  </form>

  <!-- Daftar todo -->
  <ul class="list-group">
    <?php foreach ($todos as $key => $value) : ?>
    <li class="list-group-item d-flex justify-content-between align-items-center <?php echo ($value['status'] == 1) ? 'checked-item' : ''; ?>">
      <!-- Checkbox untuk mengubah status todo -->
      <div class="form-check">
        <input class="form-check-input" type="checkbox" 
          onclick="window.location.href = 'todo.php?status=<?php echo ($value['status'] == 1) ? '0' : '1'; ?>&key=<?php echo $key; ?>'"
          <?php if ($value['status'] == 1) echo 'checked'; ?>>
        <label class="form-check-label">
          <?php 
            if ($value['status'] == 1) {
              echo '<del>' . htmlspecialchars($value['todo']) . '</del>';
            } else {
              echo htmlspecialchars($value['todo']);
            }
          ?>
        </label>
      </div>
      <!-- Tombol untuk menghapus todo dengan SweetAlert -->
      <button class="btn btn-danger btn-sm" 
              onclick="confirmDelete(<?php echo $key; ?>)">Hapus</button>
    </li>
    <?php endforeach; ?>
  </ul>
</div>

<!-- SweetAlert2 JavaScript -->
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<!-- Custom JS -->
<script src="script.js"></script>
<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>




