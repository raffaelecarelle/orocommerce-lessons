# Ambiente Oro 7.0 di riferimento: installato e verificato

Il 2026-09-22 la procedura della Lezione 1 è stata portata a termine su un'installazione
OroCommerce 7.0 Community Edition (`oro/commerce: 7.0.*`, PHP `~8.5.0`, Symfony 7.4.15) con
`vendor/` completo, installer eseguito e ambiente Docker raggiungibile dal browser.

**Evidence:** `var/cache/dev` e `var/logs/dev.log` popolati, chiavi OAuth generate, `orobox up`
che stampa gli URL di back-office e storefront, `orobox console cache:clear` e
`orobox console debug:container` che rispondono.

**Scoperte che hanno corretto la Lezione 1:**

- Il back-office risponde sulla porta stampata da `orobox up` (con la configurazione di default
  `8443`), non sulla 443. Le lezioni ora scrivono gli URL come `https://<dominio>:<porta>`.
- La collocazione dell'applicazione rispetto ai materiali di formazione è una scelta libera:
  la lezione non presuppone più una sottocartella fissa e usa `<progetto>` come segnaposto.

**Implicazioni:** con l'ambiente in piedi esiste il ciclo di feedback, quindi ogni lezione può
chiudersi con codice eseguito davvero. Da qui si passa al codice: bundle, servizi, container
([[lessons/0002-primo-bundle.html]]). Resta valido il criterio: l'ambiente funzionante è evidenza
di setup, non di comprensione.
