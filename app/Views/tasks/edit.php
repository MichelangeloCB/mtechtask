<?= $this->extend('layout') ?>

<?= $this->section('content') ?>
    <h1 class="mb-4">Edit Task</h1>
    <form action="<?= base_url('/tasks/update/') ?><?= $task['id'] ?>" method="post">
        <?= csrf_field() ?> <!-- CSRF Token para segurança -->

        <div class="mb-3">
            <label for="title" class="form-label">Título</label>
            <input type="text" class="form-control" id="title" name="title" value="<?= esc($task['title']) ?>" required>
        </div>

        <div class="mb-3">
            <label for="description" class="form-label">Descrição</label>
            <textarea class="form-control" id="description" name="description" rows="3" required><?= esc($task['description']) ?></textarea>
        </div>

        <div class="mb-3">
            <label for="status" class="form-label">Status</label>
            <select class="form-select" id="status" name="status" required>
                <option value="pendente" <?= $task['status'] == 'pendente' ? 'selected' : '' ?>>Pendente</option>
                <option value="em andamento" <?= $task['status'] == 'em andamento' ? 'selected' : '' ?>>Em progresso</option>
                <option value="concluída" <?= $task['status'] == 'concluída' ? 'selected' : '' ?>>Concluída</option>
            </select>
        </div>

        <button type="submit" class="btn btn-primary">Update Task</button>
    </form>
<?= $this->endSection() ?>
