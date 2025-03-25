<?= $this->extend('layout') ?>

<?= $this->section('content') ?>
    <h1 class="mb-4">Madatech CRUD CodeIgniter 4!</h1>

    <a href="<?= base_url('/tasks/create') ?>" class="btn btn-primary mb-3"> Nova Tarefa </a>

    <table class="table table-striped table-bordered">
        <thead class="table-dark">
            <tr>
                <th>Título</th>
                <th>Descrição</th>
                <th>Status</th>
                <th>Editar/Excluir</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($tasks as $task) : ?>
            <tr>
                <td><?= esc($task['title']) ?></td>
                <td><?= esc($task['description']) ?></td>
                <td><?= esc($task['status']) ?></td>
                <td>
                    <a href="<?= base_url('/tasks/edit/' . $task['id']) ?>" class="btn btn-warning btn-sm">Editar</a>
                    <a href="<?= base_url('/tasks/delete/' . $task['id']) ?>" class="btn btn-danger btn-sm">Deletar</a>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
<?= $this->endSection() ?>
