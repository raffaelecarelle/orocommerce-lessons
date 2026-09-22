Formazione OroCommerce 7.0
==========================

Questo repository contiene due percorsi di formazione su OroCommerce 7.0, costruiti sopra una
installazione reale di OroCommerce Community Edition:

- il **percorso tecnico**, per sviluppatori backend, dove si scrive codice dentro questa stessa
  installazione ([MISSION.md](MISSION.md), `lessons/`);
- il **percorso funzionale**, per chi configura, vende e analizza, dove si lavora solo da back-office
  ([MISSION-BUSINESS.md](MISSION-BUSINESS.md), `lessons-business/`).

I due percorsi sono indipendenti: si possono seguire separatamente o in parallelo.

A chi si rivolge
----------------

Sviluppatori PHP con esperienza Magento 2 e poca o nessuna esperienza Symfony, che devono diventare
autonomi su Oro 7.0: avviare un progetto B2B da zero e collegarlo ai sistemi del cliente (ERP, PIM)
tramite API, import/export e code asincrone.

Obiettivi, vincoli e confini del percorso sono descritti in [MISSION.md](MISSION.md).

Struttura del repository
------------------------

| Percorso | Contenuto |
| --- | --- |
| `lessons/` | Le dodici lezioni tecniche in HTML, con pratica, esercizi e quiz. Punto di ingresso: [`lessons/index.html`](lessons/index.html). |
| `reference/` | Schede di riferimento tecniche (comandi, mappature, sintassi). |
| `lessons-business/` | Le lezioni del percorso funzionale. Punto di ingresso: [`lessons-business/index.html`](lessons-business/index.html). |
| `reference-business/` | Schede di riferimento funzionali: [glossario](reference-business/glossario.html), [percorsi di back-office](reference-business/percorsi-back-office.html), [flusso di vendita](reference-business/flusso-vendita.html), [griglia di analisi](reference-business/griglia-analisi.html), [script di demo](reference-business/demo-storefront.html). |
| `assets/` | Fogli di stile e script usati dalle pagine delle lezioni. |
| `learning-records/` | Registro delle decisioni prese sul percorso e dello stato di avanzamento. |
| `src/Algoritma/Bundle/TrainingBundle/` | Il bundle di training che si costruisce lezione dopo lezione. |
| `RESOURCES.md` | Fonti ufficiali Oro per il percorso tecnico, con l'indicazione di quando usarle. |
| `RESOURCES-BUSINESS.md` | Fonti ufficiali Oro per il percorso funzionale. |
| `NOTES.md` | Note per chi mantiene e aggiorna i materiali. |

Il resto del repository (`config/`, `src/AppKernel.php`, `vendor/`, `public/`, `templates/`, …) è
l'applicazione OroCommerce standard.

Il programma tecnico
--------------------

**Parte prima — Le fondamenta**

1. Un Oro 7.0 che gira
2. Il tuo primo bundle
3. Entità e migration

**Parte seconda — L'applicazione**

4. Pagine di back-office: rotte, controller, form
5. Datagrid
6. ACL e permessi
7. Estendere il core senza toccarlo

**Parte terza — Le integrazioni**

8. REST API amministrativa
9. Storefront API
10. Import ed export
11. Message queue
12. L'integrazione ERP, messa insieme

**Schede di riferimento:** comandi `orobox`, da Magento 2 a OroCommerce, bundle e service container,
Doctrine e migration, estendere il core, API/code/import-export.

Il programma funzionale
-----------------------

Nessun codice: tutto si fa da back-office, sull'installazione con i dati demo.

**Parte prima — La mappa**

1. I due mondi e i quattro perni
2. Il giro del compratore
3. Chi vede che cosa

**Parte seconda — Configurare**

4. Catalogo · 5. Prezzi B2B · 6. Clienti e permessi · 7. Contenuti e navigazione · 8. Checkout

**Parte terza — Vendere e governare**

9. Dal preventivo all'ordine · 10. Inventario e disponibilità · 11. Configurazione a livelli ·
12. Nativo, configurabile, custom

**Schede di riferimento funzionali:** glossario, dove si configura che cosa, flusso di vendita,
griglia di analisi (nativo / configurabile / custom), script di demo.

Come usare il percorso
----------------------

- Una lezione per sessione, con la pratica eseguita davvero nell'ambiente. Leggere senza eseguire
  non produce competenza durevole.
- I quiz si fanno a memoria, chiudendo la pagina della pratica.
- Gli esercizi fra una sessione e l'altra contano più della lezione successiva: sono distribuiti nel
  tempo apposta.
- Ritmo previsto: 3-5 ore a settimana.

Per aprire le lezioni basta un browser: sono pagine HTML statiche, senza build.

```bash
xdg-open lessons/index.html
```

```bash
xdg-open lessons-business/index.html
```

Il progresso individuale (quiz svolti, esercizi, dubbi ricorrenti) non va tenuto qui, ma in un file
personale non condiviso (per esempio `progress-<nome>.md`), così i materiali restano riutilizzabili.

Ambiente
--------

- OroCommerce 7.0 Community Edition (`oro/commerce: 7.0.*`), PHP 8.5, Symfony 7.4, PostgreSQL.
- Ambiente di sviluppo gestito con `orobox` (tool interno Algoritma) su Docker. Il dominio e la
  porta effettivi li stampa `orobox up`; nelle lezioni sono scritti come `https://<dominio>:<porta>`.
- Il namespace di esempio del bundle di training è `Algoritma\Bundle\TrainingBundle`.

Gli esempi di codice e i comandi sono stati verificati sul sorgente di `vendor/oro` di una
installazione 7.0 CE, e le parti eseguibili sono state eseguite prima di finire nelle pagine. Se un
passaggio non corrisponde a quello che vedi sul tuo ambiente, segnalalo: la differenza è quasi
sempre informativa.

Su OroCommerce
--------------

OroCommerce è un'applicazione B2B commerce open source, pensata per essere estesa e personalizzata.
Maggiori informazioni su [www.orocommerce.com](https://www.orocommerce.com/) e sulla
[documentazione ufficiale](https://doc.oroinc.com). Per l'installazione manuale, si veda la
[guida di installazione della Community Edition](https://doc.oroinc.com/backend/setup/dev-environment/manual-installation/commerce-ce/)
e i [requisiti di sistema](https://doc.oroinc.com/backend/setup/system-requirements/).

Licenza
-------

[OSL-3.0](LICENSE) Copyright (c) 2024 Oro Inc.
