# Scripts Banco Online com PHP

Esse projeto faz parte do Bootcamp de desenvolvimento WEB ministrado pelo Academy SatellaSoft <https://academy.satellasoft.com/course/v/bootcamp-desenvolvimento-web>.

# Clonando o projeto

Dentro da root do seu servidor (como a htdocs), crie uma pasta chamada **banco-online.php**, acesse essa pasta, e rode clone esse projeto dentro dela.

Não esqueça de incluir o **.** no final da instrução, assim, todos os arquivos vão ser criados dentro da pasta atual, caso contrário, o Git vai criar uma nova pasta.

```c
git clone https://github.com/satellasoft/script-banco-online-php.git .
```

# Rodando o Composer

Para executar esse projeto, é extremamente necessário ter o Composer instalado, já que usamos seu autoload e também, fazemos a instalação do Twig através dele.
Site oficial: https://getcomposer.org

Após clonar a pasta e ter o composer instalado, rode o comando abaixo para baixar e atualizar as dependências

```c
composer update
```

# Configurações

O único arquivo que deve ser alterado, é o **config.php**, ele fica dentro da pasta **app/config**.

> Constante **BASE** - Nela devemos informar em qual pasta nosso projeto se encontrada. Não esquecer a barra no final, mesmo se estiver na root.

> Constante **DATA_PATH** - Nela devemos informar o nome da pasta que os registros devem ser armazenados.

> Variável **router** - Array associativo contendo o nome da URL e em seu valor, qual controladora e método deve ser executada quando a URL for solicitada.

```php
$router = [
          'home' => 'ContaController@home'
          ];
```
