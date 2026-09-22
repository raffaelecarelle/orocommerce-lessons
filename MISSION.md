# Mission: OroCommerce 7.0 (sviluppo backend)

## Why
Passare da Magento a OroCommerce e, entro 2-3 mesi, essere in grado di avviare un nuovo progetto
B2B da zero su Oro 7.0 e di collegarlo ai sistemi del cliente (ERP/PIM) tramite API, integrazioni
schedulate e code asincrone. Il risultato concreto: consegnare un progetto Oro senza dipendere da altri sulle
scelte di architettura.

Destinatari: sviluppatori PHP con esperienza Magento 2 e poca o nessuna esperienza Symfony.

## Success looks like
- Installare e far ripartire da zero un progetto Oro 7.0 con `orobox`, e sapere dove mettere il proprio codice.
- Creare un bundle proprio, con entità, migration, ACL e datagrid, senza copiare a caso da un altro progetto.
- Esporre e consumare la REST API di Oro (admin e storefront) e aggiungere un endpoint proprio via `api.yml`.
- Scrivere un'integrazione (canale, trasporto, connettore) e un processore di coda (message queue)
  per sincronizzare dati con un ERP.
- Modellare gli stati di un record con un workflow dichiarativo, invece di un campo `status` e una
  serie di `if`.
- Leggere il codice di `vendor/oro` e capire dove intervenire senza modificarlo (decorazione, eventi, override).
- Conoscere abbastanza Symfony (DI, eventi, Doctrine, Twig) da non subirlo: è la base su cui Oro è costruito.
- Aggiungere, spostare e togliere blocchi in una pagina dello storefront con il sistema di layout,
  senza modificare i file del core.

## Constraints
- 3-5 ore a settimana. Lezioni corte, con esercizi pratici tra una sessione e l'altra.
- Partenza da zero su Symfony. Ogni concetto Symfony va introdotto quando serve, non prima.
- Background Magento 2 (DI, plugin, module, layout XML) usato come ponte, non come modello.
- Ambiente di lavoro: `orobox` (tool interno Algoritma) su Docker.
- Edizione Community per l'apprendimento; l'Enterprise può cambiare search engine e message queue.

## Out of scope (per ora)
- Temi Oro nella parte grafica: SCSS, componenti JS, build degli asset. Il sistema di layout
  (albero dei blocchi, layout update, data provider) è invece dentro il percorso: lezione 13.
- Upgrade e migrazione dati da versioni precedenti di Oro.
- DevOps: deploy, CI, scaling. `orobox deploy` e `ci-init` esistono, si vedono a fine percorso.
- Magento: non serve tradurre tutto. Il parallelo si usa solo quando accorcia la strada.
