# Punto di partenza: sviluppatore Magento, Symfony da zero

Il percorso è tarato su sviluppatori PHP con diversi anni di Magento 2 che passano a OroCommerce 7.0
per ragioni organizzative, con conoscenza di Symfony prossima allo zero (mai scritto un controller
o un servizio Symfony), 3-5 ore a settimana e nessun ambiente Oro funzionante all'inizio.

**Implicazioni per la costruzione delle lezioni:**

- Ogni concetto Symfony va introdotto *just in time*, agganciato a un problema Oro concreto,
  mai come capitolo teorico a sé. Il primo che serve davvero è il service container.
- L'esperienza Magento è una risorsa per la velocità (DI, moduli, ACL, griglie, code sono concetti
  già noti) ma un rischio per l'accuratezza: i plugin/interceptor non hanno equivalente diretto in
  Symfony, e il modello Model/ResourceModel/Collection è diverso da Doctrine. Vedi
  [[reference/magento-oro.html]].
- L'obiettivo (nuovo progetto da zero + integrazioni ERP) impone di arrivare presto a bundle
  proprio, entità con migration, REST API e message queue. Il frontend Oro (layout, theming) resta
  fuori scope.

**Nota di versione:** il percorso è impostato su Oro 7.0 (PHP 8.5, Symfony 7.4, PostgreSQL 17.6).
Un checkout che dichiara 7.0 in `.orobox.yaml` può contenere codice di una minor precedente: la
verifica della versione reale è il primo passo della lezione 1.
