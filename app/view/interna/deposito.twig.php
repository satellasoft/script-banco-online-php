{% extends 'interna/partials/partial.twig.php' %}

{% block title %}Deposito{% endblock %}

{% block body %}
<div>
    <div class="grid-50">
        <form action="{{BASE}}?url=run-deposito" method="post" id="frmDeposito">
            <label for="txtValor">Valor para deposito</label>
            <input type="text" id="txtValor" name="txtValor">
            <div id="alert">
                <div class="alert alert-info">Preencha corretamente o campo de deposito.</div>
            </div>
            <div class="ar">
                <input type="submit" value="Depositar">
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
{% endblock %}