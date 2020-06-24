{% extends 'interna/partials/partial.twig.php' %}

{% block title %}Saque{% endblock %}

{% block body %}

<div>
    <div>
        <div class="grid-50">
            <form action="{{BASE}}?url=run-saque" method="post" id="frmSaque">
                <label for="txtValor">Valor para saque</label>
                <input type="text" id="txtValor" name="txtValor">
                <input type="hidden" id="txtSaldo" name="txtSaldo" value="{{saldo | number_format(2, ',', '.')}}">
                <div id="alert">
                    <div class="alert alert-info">Preencha corretamente o campo de saque.</div>
                </div>
                <div class="ar">
                    <input type="submit" value="Sacar">
                </div>
            </form>
        </div>

        <div class="grid-50">
            <p class="saldo-medium">Saldo Atual R$ {{saldo | number_format(2, ',', '.')}}</p>
        </div>

        <div class="clear"></div>
    </div>
    <script type="text/javascript" src="http://code.jquery.com/jquery-latest.min.js"></script>
    <script type="text/javascript" src="{{BASE}}assets/js/jquery.mask.min.js"></script>
    <script>
        $('#txtValor').mask('000.000.000.000.000,00', {
            reverse: true
        });
    </script>
</div>

{% endblock %}