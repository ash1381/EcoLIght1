<?php if(basename(__file__) == 'config.php') exit; ?>
<?xml version="1.0" encoding="utf-8"?>
<xml>
    <Addresses>
        <!-- put your email here -->
        <address>ventas@ecolightmexico.com.mx</address>
        <address on="subject" value="Instalación"></address>
        <address on="subject" value="Soporte"></address>
        <address on="subject" value="Ventas"></address>
        <address on="subject" value="Otros"></address>
    </Addresses>
    <Config>
        <smtp>
        <!-- smtp gmail config -->
            <use>no</use>
            <auth>yes</auth>
            <secure>tls</secure>
            <host>smtp.ecolightmexico.com.mx/</host>
            <username>ecoli795</username>
            <password>Qamcosbin3!</password>
            <port>25</port>
        </smtp>
        <charset>utf-8</charset> 
    </Config>
</xml>
