<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">

    <ul class="navbar-nav me-auto">
      <li class="nav-item"><a class="nav-link" href="?view=list">Records</a></li>
      <li class="nav-item"><a class="nav-link" href="?view=create">Add Record</a></li>
    </ul>

    <ul class="navbar-nav ms-auto">
      <?php if (!empty($_SESSION['user_id'])): ?>
        <li class="nav-item">
          <span class="navbar-text me-3">Welcome, <?= htmlspecialchars($_SESSION['full_name']) ?></span>
        </li>
        <li class="nav-item"><a class="nav-link" href="?view=cart">Cart</a></li>
        <li class="nav-item">
          <form method="post">
            <input type="hidden" name="action" value="logout">
            <button class="btn btn-sm btn-outline-secondary">Logout</button>
          </form>
        </li>
      <?php else: ?>
        <li class="nav-item"><a class="nav-link" href="?view=login">Login</a></li>
        <li class="nav-item"><a class="nav-link" href="?view=register">Register</a></li>
      <?php endif; ?>
    </ul>

  </div>
</nav>

<!-- <a class="navbar-brand ms-4">Record Store</a>
    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
            <a href="?view=list" class="nav-link">Show All</a>
        </li>
        <li class="nav-item">
            <a href="?view=create" class="nav-link">Create</a>
        </li>
    </ul> -->