{% extends 'interna/partials/partial.twig.php' %}

{% block title %}Home{% endblock %}

{% block body %}

<div>
    <p><span class="bold">Nome:</span> {{dados.nome}}</p>
    <p><span class="bold">CPF:</span> {{dados.cpf}}</p>
    <p><span class="bold">E-mail:</span> {{dados.email}}</p>
    <p><span class="bold">Data de nascimento:</span> {{dados.nascimento}}</p>
    <p><span class="bold">Data de cadastro:</span> {{dados.dataCadastro}}</p>
</div>

{% endblock %}