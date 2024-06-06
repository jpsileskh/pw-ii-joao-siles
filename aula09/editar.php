<?php
// Conectar ao banco de dados
$db = new mysqli('localhost', 'root', '', 'crud');

// Verificar se o ID foi recebido
if(isset($_GET['id'])){
    $id = intval($_GET['id']);
} else {
    echo "Erro: ID não recebido.";
    exit();
}

// Inicializar variáveis para o nome atual e o novo nome
$nomeAtual = '';
$novoNome = '';

// Verificar se o nome atual e o novo nome foram recebidos
if(isset($_POST['nome']) && isset($_POST['id'])){
    $novoNome = $_POST['novo_nome']; // Ajuste aqui
    $id = intval($_POST['id']);
    
    // Atualizar o nome no banco de dados
    $sql = "UPDATE nomes SET nome = '$novoNome' WHERE id = $id";
    $result = $db->query($sql);
    
    // Redirecionar de volta para a página crud.php
    header('Location: crud.php');
    exit();
} else {
    // Se os dados não foram recebidos corretamente, buscar o nome atual no banco de dados
    $sql = "SELECT nome FROM nomes WHERE id = $id";
    $result = $db->query($sql);
    
    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        $nomeAtual = $row['nome'];
    } else {
        echo "Erro: Nome não encontrado no banco de dados.";
        exit();
    }
}
?>

<!-- Formulário para editar o nome -->
<h1>Editar Nome</h1>
<form method="post">
    <label for="nome">Nome Atual:</label>
    <input type="text" id="nome" name="nome" value="<?php echo $nomeAtual; ?>" required="required"><br>
    <label for="novo_nome">Novo Nome:</label>
    <input type="text" id="novo_nome" name="novo_nome" required="required"><br>
    <input type="hidden" name="id" value="<?php echo $id; ?>"> <!-- Incluir o ID como um campo oculto -->
    <input type="submit" value="Atualizar">
</form>

<?php $db->close(); ?>
