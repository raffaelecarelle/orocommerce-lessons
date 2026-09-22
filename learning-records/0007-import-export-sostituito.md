# Import/export tolto dal percorso tecnico, sostituito da workflow e Integration bundle

Il 2026-09-22 il modulo su import ed export è stato rimosso dal percorso tecnico, su richiesta. Al
suo posto sono entrate due lezioni nuove, e il percorso è passato da tredici a quattordici lezioni.

**Cosa è cambiato nella numerazione.**

| Prima | Dopo | Lezione |
| --- | --- | --- |
| — | 8 | Workflow e process (nuova) |
| 8 | 9 | REST API amministrativa |
| 9 | 10 | Storefront API |
| 10 | — | Import ed export (rimossa) |
| — | 11 | Integration bundle: canali, trasporti, connettori (nuova) |
| 11 | 12 | Message queue |
| 12 | 13 | L'integrazione ERP, messa insieme |
| 13 | 14 | Il layout dello storefront |

**Perché due lezioni al posto di una.** Il buco lasciato da import/export non è uno solo. Sul fronte
delle integrazioni mancava il meccanismo con cui Oro va a prendere i dati da un sistema esterno: è
l'Integration bundle, che prima era citato di sfuggita nella lezione finale e non insegnato. Sul
fronte dell'applicazione mancavano i workflow, che il percorso dichiarava «fuori scope» mentre ogni
progetto B2B reale li richiede entro il primo mese. La lezione 8 chiude la Parte seconda con
l'ultimo strumento di estensione; la lezione 11 apre il tema delle integrazioni in uscita.

**Cosa è stato tolto, e dove.** La rimozione è stata completa: sezione della scheda
`reference/integrazioni.html`, riga della tabella dei canali, comandi `oro:import:file`, tag
`oro_importexport.processor` nella scheda dei bundle, attributi `importexport` nella scheda
Doctrine, quiz e richiami spaziati nelle lezioni 12, 13 e 14, note di verifica in `NOTES.md`, voci
in `MISSION.md` e `RESOURCES.md`. La scheda di riferimento si chiama ora «API, code, integrazioni».

**Un residuo inevitabile, dichiarato.** `ConnectorInterface::getImportJobName()` esiste ancora:
l'Integration bundle esegue le sincronizzazioni sopra l'infrastruttura di batch della piattaforma.
La lezione 11 lo dice in due righe — il connettore dichiara il nome di un job, non lo scrive — senza
insegnare il caricamento di file CSV. Fingere che quel metodo non esista avrebbe prodotto una
lezione che non funziona alla prima prova.

**Verifica fatta, e verifica mancante.** Sintassi YAML, nomi dei tag, firme delle interfacce e nomi
dei comandi delle due lezioni nuove sono stati letti sul sorgente di `vendor/oro` di questa
installazione 7.0 CE — non presi dalla documentazione. Gli esempi citati sono file reali:
`order_processing_flow` dell'OrderBundle, i processi dell'EmailBundle, i tag di `crm-dotmailer`,
`TypesPass.php` dell'IntegrationBundle. **La pratica delle due lezioni non è però stata eseguita**
su un'installazione, a differenza delle lezioni 2, 3, 9 e 12. È il primo debito da chiudere prima
di condurle in aula.

**Nota di processo.** Questa modifica si è incrociata con l'aggiunta della lezione sul layout
(vedi [[0006-capitolo-layout-aggiunto]]), scritta in parallelo in un'altra sessione. Le due
numerazioni sono state riconciliate a mano. Meglio non tenere aperte due sessioni che riscrivono lo
stesso indice.

Vedi [[0003-curriculum-scritto-in-anticipo]].
