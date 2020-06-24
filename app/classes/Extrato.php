<?php

namespace app\classes;

class Extrato
{
    private $path;
    private $extrato;

    public function __construct()
    {
        $this->extrato = '';

        $cpf = $_SESSION['cpf'] ?? null;

        $this->path = DATA_PATH . '/' . trataCPF($cpf) . '/extrato.txt';

        if (file_exists($this->path))
            $this->extrato = ler($this->path);
        else
            gravar($this->path, '', 'w+');
    }

    public function getExtrato()
    {
        return $this->extrato;
    }

    public function setExtrato(string $mensagem)
    {
        $mensagem = date('d/m/Y H:i:s') . ' - ' . $mensagem;
        gravar($this->path, $mensagem, 'a');
    }
}
