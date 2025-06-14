<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Dashboard</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
     <!-- Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="style_home.css">
</head>
<body>

<div class="container-fluid">
    <div class="row">
        <!-- Sidebar -->
        <nav class="col-md-2 sidebar d-flex flex-column justify-content-between">
            <div>
                <!-- Adição dos icones da sidebar e os textos -->
                <h4 class="px-3">Dashboard <small class="text-muted">v1.0</small></h4>
                <a href="#" class="active"><i class="bi bi-house-door action-icon"></i>Home</a>
                <a href="#"><i class="bi bi-speedometer2 action-icon"></i>Dashboard</a>
                <a href="#"><i class="bi bi-person-plus action-icon"></i>Cadastro</a>
                <a href="#"><i class="bi bi-cart action-icon"></i>Vendas</a>
                <a href="#"><i class="bi bi-pencil-square action-icon"></i>Editar</a>
                <a href="#"><i class="bi bi-question-circle action-icon"></i>Ajuda</a>
            </div>

            <!-- Adição do perfil do usuário -->
            <div class="text-center mb-4">
                <img src="http://localhost/Zen_Estoques/Imagens/bluesky.svg" class="rounded-circle mt-5" alt="User">
                <p class="mt-2 mb-0">Marival</p>
                <small class="text-muted">Administrador</small>
            </div>
        </nav>

        <!-- Main Content -->
        <main class="col-md-10 d-flex flex-column align-items-center justify-content-center" style="height: 100vh;">
            <button class="action-btn">
                <i class="bi bi-person-plus action-icon"></i> Cadastro
            </button>
            <button class="action-btn">
                <i class="bi bi-bookmark action-icon"></i> Consultar
            </button>
            <button class="action-btn">
                <i class="bi bi-pencil-square action-icon"></i> Editar
            </button>
            <button class="action-btn">
                <i class="bi bi-download action-icon"></i> Remover
            </button>
        </main>
    </div>
</div>

<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>