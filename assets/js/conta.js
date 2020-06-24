var frmDeposito = document.getElementById('frmDeposito');
if (frmDeposito != null && typeof frmDeposito != 'undefined') {
    frmDeposito.addEventListener('submit', (event) => {

        let valor = getById('txtValor');

        if (!validaDinheiro(valor)) {
            setAlert('warning', 'Informe o valor corretamente para deposito.', 'alert');
            event.preventDefault();
        }
    });
}

var frmSaque = document.getElementById('frmSaque');
if (frmSaque != null && typeof frmSaque != 'undefined') {
    frmSaque.addEventListener('submit', (event) => {

        let valor = getById('txtValor');
        let saldo = getById('txtSaldo');
        let tempValor = valor.replace(/[.,]/g, '');
        let tempSaldo = saldo.replace(/[.,]/g, '');

        if (!validaDinheiro(valor) || parseInt(tempValor) <= 0) {
            setAlert('warning', 'Informe o valor para o saque.', 'alert');
            event.preventDefault();
        }

        if (!validaDinheiro(saldo) || parseInt(tempSaldo) <= 0) {
            setAlert('warning', 'Saldo inválido.', 'alert');
            event.preventDefault();
        }

        if (parseInt(tempValor) > parseInt(tempSaldo)) {
            setAlert('warning', 'O valor informado é superior ao saldo disponível.', 'alert');
            event.preventDefault();
        }
    });
}
