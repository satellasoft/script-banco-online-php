<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{% block title %}{% endblock %}</title>
    <link rel="stylesheet" href="{{BASE}}assets/css/conta.css">
    <link rel="stylesheet" href="{{BASE}}assets/css/unsemantic-grid-responsive.css">
</head>

<body>

    {% include 'interna/partials/menu.twig.php' %}

    <section>
        <div class="box max-width">
            <div class="box-header">
                <p>olá, <span class="bold">{{USER_NAME}}</span></p>
            </div>

            <div class="box-body">
                <h1>{% block title %}{% endblock %}</h1>
                {% block body %}{% endblock %}
            </div>
        </div>
    </section>

</body>

</html>