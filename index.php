<!DOCTYPE html>
<html>
<head>
  <title>PHP App on Azure</title>
</head>
<body>
  <h1>Hello Azure!</h1>
  <?php
    $student_id = getenv("STUDENT_ID");
    echo "<h2>Numer indeksu: $student_id</h2>";
  ?>
</body>
</html>
