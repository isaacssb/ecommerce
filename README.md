# Projeto E-commerce

Projeto desenvolvido do zero no [Curso de PHP 7](https://www.udemy.com/curso-completo-de-php-7/) disponÃ­vel na plataforma da Udemy e no site do [HTML5dev.com.br](https://www.html5dev.com.br/curso/curso-completo-de-php-7).

Template usado no projeto [Almsaeed Studio](https://almsaeedstudio.com)

# Configuração do ambiente (Vitual host)

1. No seguinte caminho *C:\Windows\System32\drivers\etc\hosts*, adicione o código abaixo pare redirecionar a url digitada no navegaor para localhost:
```
127.0.0.1		www.hcodecommerce.com.br
```

2. Estou utilizando o Xampp. <br />
No seguintes caminho *C:\Xampp\apache\conf\extra\httpd-vhosts.conf* adicione o código abaixo de configuração ():
```
<VirtualHost *:80>
    ServerAdmin webmaster@hcode.com.br
    DocumentRoot "C:/estudos/xampp/htdocs/ecommerce"
    ServerName www.hcodecommerce.com.br
    ErrorLog "logs/dummy-host2.example.com-error.log"
    CustomLog "logs/dummy-host2.example.com-access.log" common
	<Directory "C:/estudos/xampp/htdocs/ecommerce">
        Require all granted
        RewriteEngine On
        RewriteCond %{REQUEST_FILENAME} !-d
        RewriteCond %{REQUEST_FILENAME} !-f
        RewriteRule ^ index.php [QSA,L]
	</Directory>
</VirtualHost>
```