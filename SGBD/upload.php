<?php
// Conectar ao banco de dados (substitua os valores conforme necessário)
include_once('../SGBD/config.php');

// Verificar a conexão
if ($conexao->connect_error) {
    die("Erro de conexão: " . $conexao->connect_error);
}

// Verificar se o formulário foi enviado
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Verificar se o arquivo foi enviado sem erros
    if (isset($_FILES["pdfFile"]) && $_FILES["pdfFile"]["error"] == 0) {
        

        // Obter o nome do arquivo a partir do input do formulário
        $pdfFileName = $_POST["nome_arquivo"];

        // Ler o conteúdo do arquivo
        $pdfContent = base64_encode(file_get_contents($_FILES["pdfFile"]["tmp_name"]));

        // Preparar a instrução SQL para inserir no banco de dados
        $sql = "INSERT INTO pcct_pdf (nome_arquivo, conteudo_pdf) VALUES (?, ?)";

        // Preparar a declaração SQL
        $stmt = $conexao->prepare($sql);

        // Vincular os parâmetros
        $stmt->bind_param("ss", $pdfFileName, $pdfContent);

        // Executar a declaração
        if ($stmt->execute()) {
            echo "PDF enviado com sucesso!";
        } else {
            echo "Erro ao enviar o PDF: " . $stmt->error;
        }

        // Fechar a declaração
        $stmt->close();
    } else {
        echo "Erro no upload do arquivo.";
    }
}

// Fechar a conexão
$conexao->close();
?>
