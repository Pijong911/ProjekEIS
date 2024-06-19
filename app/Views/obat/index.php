<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Obat List</title>
    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <h1 class="mb-4">Obat List</h1>
        <a href="/obat/create" class="btn btn-primary mb-3">Create New Obat</a>
        <table class="table table-bordered table-striped">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nama Obat</th>
                    <th>Stock</th>
                    <th>Gambar</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($obat as $item): ?>
                <tr>
                    <td><?= esc($item['id']) ?></td>
                    <td><?= esc($item['nama_obat']) ?></td>
                    <td><?= esc($item['stock']) ?></td>
                    <td>
                        <?php if (!empty($item['Gambar'])): ?>
                            <img src="<?= esc($item['Gambar']) ?>" alt="<?= esc($item['nama_obat']) ?>" class="img-thumbnail" style="width: 100px; height: auto;">
                        <?php else: ?>
                            No Image
                        <?php endif; ?>
                    </td>
                    <td>
                        <!-- <a href="/obat/show/<?= esc($item['id']) ?>" class="btn btn-info btn-sm">View</a> -->
                        <a href="/obat/edit/<?= esc($item['id']) ?>" class="btn btn-warning btn-sm">Edit</a>
                        <form action="/obat/delete/<?= esc($item['id']) ?>" method="post" style="display:inline;">
                            <input type="hidden" name="_method" value="DELETE">
                            <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                        </form>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
    <!-- Bootstrap JS and dependencies -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
