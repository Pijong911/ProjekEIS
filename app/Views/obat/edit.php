<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Edit Obat</title>
    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <h1>Edit Obat</h1>
        <form action="/obat/update/<?= esc($obat['id']) ?>" method="post">
    <?= csrf_field() ?>
    <div class="form-group">
        <label for="nama_obat">Nama Obat</label>
        <input type="text" name="nama_obat" id="nama_obat" class="form-control" value="<?= esc($obat['nama_obat']) ?>" required>
    </div>
    <div class="form-group">
        <label for="stock">Stock</label>
        <input type="number" name="stock" id="stock" class="form-control" value="<?= esc($obat['stock']) ?>">
    </div>
    <div class="form-group">
        <label for="Gambar">Gambar</label>
        <input type="text" name="Gambar" id="Gambar" class="form-control" value="<?= esc($obat['Gambar']) ?>">
    </div>
    <button type="submit" class="btn btn-primary">Update</button>
    <a href="/obat" class="btn btn-secondary">Cancel</a>
</form>

    </div>
    <!-- Bootstrap JS and dependencies -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
