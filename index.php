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
      <!-- Example Todo Item (to be rendered dynamically with PHP later) -->
      <li class="todo-item">
        <form method="POST" action="index.php" class="update-form">
          <input type="hidden" name="id" value="1">
          <input type="text" name="task" value="Learn PHP" class="todo-text">
          <div class="actions">
            <button type="submit" name="update" class="btn edit-btn">Update</button>
            <button type="submit" name="delete" class="btn delete-btn">Delete</button>
          </div>
        </form>
      </li>
      <li class="todo-item">
        <form method="POST" action="index.php" class="update-form">
          <input type="hidden" name="id" value="2">
          <input type="text" name="task" value="Practice SQL" class="todo-text">
          <div class="actions">
            <button type="submit" name="update" class="btn edit-btn">Update</button>
            <button type="submit" name="delete" class="btn delete-btn">Delete</button>
          </div>
        </form>
      </li>
    </ul>
  </div>

  <script src="logic/app.js"></script>
</body>
</html>
