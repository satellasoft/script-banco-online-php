<?php

function dd($param = [])
{
    echo '<pre>';
    print_r($param);
    echo '</pre>';
}

function trataCPF($cpf = '')
{
    if (trim($cpf) == '')
        return null;

    return str_replace([
        '.',
        '-'
    ], '', $cpf);
}

function gravar(string $path, string $data, string $mode = 'w')
{
    $fp = fopen($path, $mode);
    fwrite($fp, $data);
    fclose($fp);
}

function ler(string $path, string $mode = 'r')
{
    $fp = fopen($path, $mode);
    $content = fread($fp, filesize($path));
    fclose($fp);

    return $content;
}

function criarDiretorio(string $path)
{
    if (!is_dir($path))
        mkdir($path);
}

function security()
{
    if (!isset($_SESSION['logado']) || !$_SESSION['logado']) {
        header('Location: ' . BASE);
    }

    if (!isset($_SESSION['ip']) || $_SESSION['ip'] != $_SERVER['REMOTE_ADDR']) {
        header('Location: ' . BASE);
    }
}
