<?= $this->extend('layout') ?>

<?= $this->section('content') ?>
    <h1 class="mb-4">Criando Nova Tarefa</h1>
    <form action="<?= base_url('/tasks') ?>" method="post">
        <?= csrf_field() ?> <!-- CSRF Token para segurança -->

        <div class="mb-3">
            <label for="title" class="form-label">Título</label>
            <input type="text" class="form-control" id="title" name="title" required>
        </div>

        <div class="mb-3">
            <label for="description" class="form-label">Descrição</label>
            <textarea class="form-control" id="description" name="description" rows="4" required></textarea>
        </div>

        <div class="mb-3">
            <label for="status" class="form-label">Status</label>
            <select class="form-select" id="status" name="status" required>
                <option value="pendente">Pendente</option>
                <option value="em andamento">Em progresso</option>
                <option value="concluída">Concluída</option>
            </select>
        </div>
 
        <button type="submit" class="btn btn-success">Criar Tarefa</button>
    </form>
<?= $this->endSection() ?>
