<?php
include_once 'logic/function.php';

if (isset($_POST['update'])) {
    updateItem();
} elseif (isset($_POST['delete'])) {
    deleteItem();
} elseif (isset($_POST['add'])) {
    $message = insertData();
}

$todos = fetchAllData();
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>PHP Todo List</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>

  <div class="todo-container">
    <h2>My Todo List</h2>

    <!-- Add Todo Form -->
    <form action="index.php" method="POST" class="add-form">
      <input type="text" name="task" placeholder="Enter a new task..." required class="input-txt">
      <button type="submit" name="add" class="btn add-btn">Add</button>
    </form>

    

    <!-- Todo List Display -->
    <ul class="todo-list">
      <?php foreach ($todos as $todo): ?>
        <li class="todo-item">
          <form method="POST" action="index.php" class="update-form">
            <input type="hidden" name="id" value="<?= $todo['id'] ?>">
            <input type="text" name="task" value="<?= htmlspecialchars($todo['list']) ?>" class="todo-text">
            <div class="actions">
              <button type="submit" name="update" class="btn edit-btn">Update</button>
              <button type="submit" name="delete" class="btn delete-btn">Delete</button>
            </div>
          </form>
        </li>
      <?php endforeach; ?>
    </ul>
  </div>

</body>
</html>
