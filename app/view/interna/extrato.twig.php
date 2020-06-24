{% extends 'interna/partials/partial.twig.php' %}

{% block title %}Extrato{% endblock %}

{% block body %}

<div>
    {{extrato | raw}}
</div>

{% endblock %}