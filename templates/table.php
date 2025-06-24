<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8" />
    <title>Lista de Usuarios</title>
    <link rel="stylesheet" href="style.php" />
</head>
<body>
    <h1>Usuarios Registrados</h1>
    <div class="user-container">
        <?php if (!empty($users) && is_array($users)): ?>
        
            <?php foreach ($users as $user): ?>
                <div class="user-card">
                    <img src="<?= htmlspecialchars($user->foto) ?>" alt="Foto de <?= htmlspecialchars($user->nombre) ?>" class="user-photo" />
                    <h2><?= htmlspecialchars($user->nombre) ?></h2>
                    <p><strong>Email:</strong> <?= htmlspecialchars($user->email) ?></p>
                    <p><strong>ID:</strong> <?= htmlspecialchars($user->id) ?></p>
                </div>
            <?php endforeach; ?>
        <?php else: ?>
            <p>No hay usuarios para mostrar.</p>
        <?php endif; ?>
    </div>
</body>
</html>


