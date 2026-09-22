# Note di lavoro

Note per chi tiene e aggiorna questo percorso. Non sono materiale didattico: le lezioni stanno in
`lessons/`, le schede in `reference/`.

## Profilo dei destinatari
- Sviluppatori PHP con esperienza Magento 2.
- Symfony: da zero. Va introdotto in dosi, sempre agganciato a un problema Oro reale.
- Lingua: italiano. Termini tecnici, nomi di classi, comandi e messaggi di errore restano in inglese.
- Ritmo previsto: 3-5 ore a settimana.

## Decisioni didattiche
- Ponte Magento → Oro usato come acceleratore, ma con avvertenza esplicita quando l'analogia si
  rompe (es. i plugin/interceptor di Magento NON hanno un equivalente diretto: in Symfony si usano
  decorazione dei servizi ed eventi).
- Symfony insegnato "just in time": service container e YAML alla prima definizione di servizio,
  eventi al primo hook, Doctrine alla prima entità.
- Ogni lezione finisce con qualcosa che gira nell'ambiente di chi studia, non solo con concetti.
- Ogni lezione contiene un richiamo attivo sulla precedente (ripasso spaziato) e quiz a risposte
  di lunghezza uniforme, per non suggerire la risposta con la formattazione.

## Convenzioni dei materiali
- Gli URL negli esempi sono scritti `https://<dominio>:<porta>`: il valore vero lo stampa
  `orobox up`. Con la configurazione di default esce `https://oro.demo:8443` (porta 8443, non 443).
- Il namespace di esempio del bundle di training è `Algoritma\Bundle\TrainingBundle`.
- Nessun percorso assoluto e nessun riferimento a installazioni specifiche dentro le lezioni.

## Ambiente di riferimento (verificato 2026-09-22)
- OroCommerce 7.0 Community Edition: `oro/commerce: 7.0.*`, PHP `~8.5.0`, Symfony **7.4.15**
  (`vendor/symfony/http-kernel/Kernel.php`), PostgreSQL.
- Container attivi dopo `orobox up` con la configurazione di default: db, mail (Mailpit),
  gotenberg. In CE niente RabbitMQ né Elasticsearch.
- `var/logs/dev.log` cresce molto in fretta in ambiente dev (oltre 100 MB dopo la sola
  installazione): leggerlo con `tail`, mai aprirlo tutto.

## Verifiche fatte sul codice reale (da non rifare a memoria)
- Scoperta dei bundle: `vendor/oro/platform/src/Oro/Bundle/DistributionBundle/OroKernel.php`
  — `collectBundles()` scandisce `src/` e `vendor/`, `compareBundles()` ordina per `priority`
  **crescente**, poi alfabetico. `OroUIBundle` ha `priority: -120`; `orobox` scaffolda `30`;
  la doc ufficiale usa `255`.
- `orobox create bundle` genera 5 file; `services.yml` parte con
  `autowire: false`, `autoconfigure: false`, `public: false`.
- Comandi di console nel core: attributo `#[AsCommand]` **più** tag `console.command` esplicito
  (es. `CronBundle/Command/CronCommand.php` + `Resources/config/commands.yml`).
- Datagrid: back-office in `Resources/config/oro/datagrids.yml`, storefront a livello di tema in
  `Resources/views/layouts/<tema>/config/datagrids.yml`.
- Il codice delle lezioni 2, 3, 8, 10 e 11 è stato eseguito su un'installazione 7.0 CE con un
  bundle usa-e-getta (bundle + servizio + comando + entità + installer + repository + topic +
  processor + `api.yml` + `importexport.yml`), poi rimosso. Funziona; tre scoperte hanno corretto
  le lezioni:
  1. **Alias API non prevedibile**: la classe `…\CheckBundle\Entity\SandboxMapping` ha ricevuto
     entity type `checksandboxmappings` (entra anche il nome del bundle). Nei progetti va
     dichiarato a mano in `entity_aliases`.
  2. **`oro:import:file`**: `--email` obbligatorio; job di validazione
     `entity_import_validation_from_csv` diverso da `entity_import_from_csv`; il file deve stare
     dentro la cartella del progetto (il comando gira nel container, `/tmp` dell'host non esiste);
     il comando **schedula** e basta, serve `oro:message-queue:consume`.
  3. **Pulizia**: cancellare un bundle con un'entità `#[Config]` rompe `cache:clear`
     (`Class ... does not exist`). Vanno ripulite a mano, in ordine,
     `oro_entity_config_index_value`, `oro_entity_config_field`, `oro_entity_config`.
- Import idempotente verificato: con `importexport.identity` sul campo chiave, un secondo import
  aggiorna la riga invece di duplicarla.

## Stato del percorso
- Lezioni 1-12 scritte, più sei schede di riferimento e l'indice in `lessons/index.html`.
- Le lezioni 3-12 sono state scritte in anticipo rispetto alle sessioni: vedi
  `learning-records/0003-curriculum-scritto-in-anticipo.md`. Sono revisionabili quando la pratica
  mostra dove si inciampa davvero.
- Copertura non è apprendimento: prima di dare per acquisita una lezione servono pratica eseguita
  e richiami a memoria, non lettura.

## Traccia individuale
Il progresso di ciascuna persona (quiz svolti, esercizi, dubbi ricorrenti) non sta qui: va tenuto
in un file personale non condiviso, per esempio `progress-<nome>.md`, così i materiali restano
riutilizzabili da chiunque.

## Percorso funzionale (traccia parallela)
- Aperto il 2026-09-22. Mission in `MISSION-BUSINESS.md`, fonti in `RESOURCES-BUSINESS.md`, lezioni
  in `lessons-business/`, schede in `reference-business/`. Asset grafici condivisi con il percorso
  tecnico (`assets/`): stesso foglio di stile, stesso componente quiz.
- Destinatari doppi: sviluppatori del percorso tecnico e consulenti/analisti. Niente codice nelle
  lezioni; quando una richiesta esce dal configurabile, va dichiarato il confine e rimandato al
  percorso tecnico.
- Le lezioni funzionali 1-12 sono state scritte tutte il 2026-09-22, su richiesta esplicita, dopo
  aver deciso il contrario poche ore prima: vedi `learning-records/0005-percorso-funzionale-completato-in-blocco.md`.
  Sono revisionabili: la pratica ha la precedenza sul testo.
- **Da verificare alla prima esecuzione**: i percorsi di menu citati nelle lezioni e nella scheda
  `reference-business/percorsi-back-office.html` sono presi dalla documentazione ufficiale, non
  eseguiti uno per uno sull'installazione. Dove l'interfaccia 7.0 li colloca altrove, correggere la
  scheda per prima: le lezioni la citano.
- Schede funzionali disponibili: glossario, percorsi di back-office, flusso di vendita, griglia di
  analisi, script di demo. `assets/glossary.css` serve a tutte e cinque.
- Vocabolario: il glossario in `reference-business/glossario.html` è la fonte unica. Nelle lezioni
  i nomi di menu ed entità restano in inglese, come si leggono nell'interfaccia.
- Trappola ricorrente da ripetere spesso: in Oro `Customer` è l'azienda, `Customer User` è la
  persona. È l'inversione che rovina i documenti di analisi di chi viene da Magento.
- Segnalare sempre cosa è solo Enterprise (multi-sito, magazzini multipli, Elasticsearch): in demo
  si finisce per promettere funzioni che in Community non ci sono.
- Componente nuovo aggiunto per il glossario: `assets/glossary.css` (tabella a tre colonne + indice
  di sezione), riusabile per le prossime schede.
