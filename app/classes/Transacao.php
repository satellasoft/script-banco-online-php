<?php

namespace app\classes;

use app\classes\Extrato;
use Decimal\Decimal;

class Transacao
{
    private $path;
    private $saldo;

    public function __construct()
    {
        $cpf = $_SESSION['cpf'] ?? null;

        $this->path = DATA_PATH . '/' . trataCPF($cpf) . '/saldo.txt';

        if (file_exists($this->path))
            $this->saldo = ler($this->path);
        else
            gravar($this->path, '0', 'w+');
    }

    public function depositar($valor)
    {
        $valor = validarDinheiro($valor);

        $valor = number_format($valor, 2, '.', '');

        $soma = ($valor + $this->saldo);

        gravar($this->path, $soma);

        //Texto para o extrato
        $mensagemExtrato = 'Deposito de: <span style="color: rgb(0, 183, 255); font-weight: bold;">R$' . $valor . '</span>@';
        (new Extrato())->setExtrato($mensagemExtrato);

        header('Location: ' . BASE . '?url=saldo');
    }

    public function sacar($valor)
    {
        $valor = validarDinheiro($valor);

        $valor = number_format($valor, 2, '.', '');
        $saldo = number_format($this->saldo, 2, '.', '');

        $subtracao = ($saldo - $valor);

        if ($subtracao < 0) {
            return -10;
        }

        gravar($this->path, $subtracao);

        //Texto para o extrato
        $mensagemExtrato = 'Saque de: <span style="color: rgb(218, 5, 5); font-weight: bold;">R$' . $valor . '</span>@';
        (new Extrato())->setExtrato($mensagemExtrato);

        header('Location: ' . BASE . '?url=saldo');
    }

    public function getSaldo()
    {
        return $this->saldo;
    }
}
