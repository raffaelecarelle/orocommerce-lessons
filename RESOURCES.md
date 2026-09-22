# OroCommerce 7.0 — Risorse

Fonti verificate il 2026-09-22. La documentazione Oro senza numero di versione nell'URL
punta sempre alla versione corrente (oggi la 7.0); gli URL con numero (`/6.1/`, `/3.1/`)
sono versioni congelate — utili quando una pagina non esiste più, ma da leggere con sospetto.

## Knowledge — Oro

- [Backend Developer Guide](https://doc.oroinc.com/backend/)
  Il riferimento principale per lo sviluppo Oro: setup, architettura, entità, API, integrazioni.
  Usare per: qualsiasi domanda "come si fa X in Oro".
- [Oro Application Architecture](https://doc.oroinc.com/backend/architecture/)
  Struttura applicativa, tech stack, bundle, entità, ACL, datagrid, workflow, message queue, integrazioni.
  Usare per: capire *dove* vive un concetto prima di cercarne la sintassi.
- [Application Structure](https://doc.oroinc.com/backend/architecture/structure/)
  Cosa contengono `config/`, `src/`, `var/`, `public/`, `templates/`, `vendor/`.
  Usare per: orientarsi in un checkout Oro.
- [System Requirements](https://doc.oroinc.com/backend/setup/system-requirements/)
  Versioni esatte richieste da Oro 7.0 (PHP, PostgreSQL, Node, Elasticsearch, RabbitMQ).
  Usare per: verificare che l'ambiente sia conforme prima di aprire un bug.
- [Application Setup and Configuration](https://doc.oroinc.com/backend/setup/)
  Installazione, ambienti di sviluppo, upgrade.
  Usare per: installare a mano quando `orobox` non basta o non è disponibile.
- [API Developer Guide](https://doc.oroinc.com/backend/api/)
  REST API amministrativa e [Storefront REST API](https://doc.oroinc.com/backend/api/storefront/), basate su JSON:API.
  Usare per: integrazioni ERP/PIM, endpoint custom via `api.yml`.
- [Upgrade Source Code to OroCommerce v7.0](https://doc.oroinc.com/backend/setup/upgrade-source-code/)
  Elenca i cambi rilevanti della 7.0 (riscrittura del layer di sicurezza Symfony, datagrid spostati a livello di tema)
  e il pacchetto `oro/upgrade-toolkit` per le migrazioni automatiche del codice.
  Usare per: capire perché un esempio trovato online per la 5.x/6.x non funziona.
- [Backward Compatibility Promise](https://doc.oroinc.com/community/backward-compatibility-promise/)
  Cosa Oro garantisce stabile tra minor version e cosa no.
  Usare per: decidere se è sicuro estendere una classe di `vendor/oro`.
- Codice sorgente: [oroinc/platform](https://github.com/oroinc/platform),
  [oroinc/orocommerce](https://github.com/oroinc/orocommerce),
  [oroinc/orocommerce-application](https://github.com/oroinc/orocommerce-application)
  Usare per: leggere l'implementazione reale. In Oro il codice è la documentazione più affidabile.

## Knowledge — Symfony e Doctrine (la base su cui Oro è costruito)

- [Symfony Documentation](https://symfony.com/doc/current/index.html) — Oro 7.0 gira su Symfony 7.4.
  Usare per: service container, dependency injection, eventi, routing, console, Twig.
- [Symfony: Service Container](https://symfony.com/doc/current/service_container.html)
  Usare per: capire `services.yml`, autowiring, alias, decorazione dei servizi.
- [Symfony: Events and Event Listeners](https://symfony.com/doc/current/event_dispatcher.html)
  Usare per: il meccanismo con cui si "aggancia" comportamento in Oro (l'equivalente concettuale dei plugin Magento).
- [Doctrine ORM Documentation](https://www.doctrine-project.org/projects/doctrine-orm/en/current/index.html)
  Usare per: entità, associazioni, repository, query builder, DQL.
- [SymfonyCasts](https://symfonycasts.com/) (a pagamento, primi corsi gratuiti)
  Video corsi di qualità alta, taglio pratico. Usare per: colmare le basi Symfony più in fretta della documentazione.

## Knowledge — Strumenti interni

- [algoritma-dev/orobox](https://github.com/algoritma-dev/orobox)
  CLI Go per l'ambiente di sviluppo Oro su Docker: scaffolding, install, QA (PHPStan, Rector, PHP-CS-Fixer),
  Xdebug, test, CI e deploy. Usare per: qualunque operazione di ambiente in questo percorso.

## Wisdom (Community)

- [Stack Overflow — tag `oroplatform`](https://stackoverflow.com/questions/tagged/oroplatform)
  (più `orocommerce` e `orocrm`). Canale ufficiale per le domande di sviluppo da marzo 2020.
  Usare per: problemi riproducibili con codice. Leggere prima le risposte degli ingegneri Oro.
- [Oro Community Slack](https://bitly.com/oro-slack)
  Chat della community, linkata dalla [Community Guide](https://doc.oroinc.com/community/) ufficiale.
  Usare per: domande veloci, sanity check di approccio, capire cosa fanno gli altri integratori.
- GitHub Issues su [oroinc/platform](https://github.com/oroinc/platform/issues) e
  [oroinc/orocommerce](https://github.com/oroinc/orocommerce/issues)
  Usare per: verificare se un comportamento strano è un bug noto.
- Colleghi Algoritma che già lavorano su Oro.
  La fonte di saggezza più veloce disponibile: usare per le scelte di architettura di progetto,
  dove la documentazione non si esprime.

## Gaps

- Manca una fonte autorevole e aggiornata sul passaggio **Magento -> Oro** per sviluppatori.
  Le mappe concettuali di questo workspace (`reference/magento-oro.html`) sono costruite da noi: vanno
  verificate contro il codice, non citate come verità esterna.
- La documentazione 7.0 in alcune pagine rimanda ancora a testi scritti per versioni precedenti.
  Quando una pagina non ha numero di versione ma l'esempio non funziona, confrontare con `vendor/oro`.
