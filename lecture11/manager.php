<?php
session_start();
require_once("settings.php");

$conn = mysqli_connect($host, $username, $password, $database);
if (!$conn) { die("DB connect failed: " . mysqli_connect_error()); }

// Save change (simple)
if (
    isset($_SESSION['username']) &&
    $_SESSION['username'] === 'sirdoki' &&
    $_SERVER['REQUEST_METHOD'] === 'POST'
) {
    $id = isset($_POST['id']) ? (int)$_POST['id'] : 0;
    $status = $_POST['friendship_status'] ?? '';
    if ($id > 0 && in_array($status, ['Friend','Unfriend'], true)) {
        $stmt = mysqli_prepare($conn, "UPDATE friends SET friendship_status=? WHERE id=?");
        mysqli_stmt_bind_param($stmt, "si", $status, $id);
        mysqli_stmt_execute($stmt);
        mysqli_stmt_close($stmt);
    }
    header("Location: " . $_SERVER['PHP_SELF']); // avoid re-submit on refresh
    exit;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>A Day in the Life of Doki</title>
<link rel="stylesheet" href="styles/style.css">
<style>
  table { border-collapse: collapse; width: 100%; max-width: 900px; }
  th, td { border: 1px solid #ccc; padding: 8px; }
  form { margin: 0; }
</style>
</head>
<body>
<?php include 'header.inc'; ?>

<section id="main">
<?php if (isset($_SESSION['username']) && $_SESSION['username'] === 'sirdoki'): ?>
  <h1>Hi Doki the Manager</h1>
  <p>Here is the list of all your friends:</p>

  <?php
    $res = mysqli_query($conn, "SELECT id, name, description, friendship_status FROM friends ORDER BY id ASC");
    if ($res && mysqli_num_rows($res) > 0):
  ?>
    <table>
      <tr>
        <th>ID</th><th>Name</th><th>Description</th><th>Friendship</th><th>Save</th>
      </tr>
      <?php while ($row = mysqli_fetch_assoc($res)): ?>
        <tr>
          <td><?= (int)$row['id'] ?></td>
          <td><?= htmlspecialchars($row['name']) ?></td>
          <td><?= htmlspecialchars($row['description']) ?></td>
          <td>
            <form method="post" action="<?= htmlspecialchars($_SERVER['PHP_SELF']) ?>">
              <input type="hidden" name="id" value="<?= (int)$row['id'] ?>">
              <select name="friendship_status">
                <option value="Friend"   <?= $row['friendship_status']=='Friend'   ? 'selected' : '' ?>>Friend</option>
                <option value="Unfriend" <?= $row['friendship_status']=='Unfriend' ? 'selected' : '' ?>>Unfriend</option>
              </select>
          </td>
          <td>
              <input type="submit" value="Save">
            </form>
          </td>
        </tr>
      <?php endwhile; ?>
    </table>
  <?php else: ?>
    <p>No friends found! Poor Doki!</p>
  <?php endif; ?>

<?php else: ?>
  <h1>Hi, you are not Doki the manager</h1>
  <p>This page is for authorised users only.</p>
<?php endif; ?>
</section>

<?php include 'footer.inc'; ?>
</body>
</html>
