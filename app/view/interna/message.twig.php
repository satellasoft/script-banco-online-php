{% extends "interna/partials/partial.twig.php" %}

{% block title %}Mensagem{% endblock %}

{% block body %}
<div class="main-container">
    <div class="max-width vertical-center">
        {{mensagem}}
    </div>
</div>
{% endblock %}