# OroCommerce 7.0 — Risorse per il percorso funzionale

Fonti verificate il 2026-09-22. Riguardano l'uso e la configurazione del prodotto, non lo sviluppo:
per quelle vedi [RESOURCES.md](RESOURCES.md). Gli URL senza numero di versione puntano alla versione
corrente della documentazione; quelli con `/6.1/` o `/master/` sono rami diversi, da leggere con
attenzione alla versione.

## Knowledge — documentazione utente Oro

- [User Documentation](https://doc.oroinc.com/user/)
  Radice della documentazione utente: architettura di soluzione, guide concettuali, back-office,
  storefront, integrazioni, glossario.
  Usare per: partire da zero su qualunque argomento funzionale.
- [OroCommerce Concepts (Solution Architecture)](https://doc.oroinc.com/master/user/solution-architect/concepts/)
  Il modello concettuale in una pagina: back-office contro storefront, gerarchia
  utente → business unit → organizzazione, siti web, clienti e utenti cliente, catalogo, prezzi,
  inventario, flusso vendita, livelli di configurazione.
  Usare per: capire *come si incastrano* le entità prima di aprire una schermata.
- [Concept Guides](https://doc.oroinc.com/user/concept-guides/)
  Spiegazioni per caso d'uso: modelli di business, catalogo e promozioni, contenuti, clienti e
  vendite, amministrazione (localizzazione, permessi, pagamenti, spedizioni, tasse, checkout,
  consensi, import dati), AI e automazione.
  Usare per: preparare una demo o un'analisi funzionale su un tema specifico.
- [Back-Office User Documentation](https://doc.oroinc.com/user/back-office/)
  Procedure passo-passo, organizzate come i menu dell'applicazione: Customers, Sales, Products,
  Marketing, Taxes, Inventory, Activities, Reports and Segments, System.
  Usare per: «dove si fa X» e per scrivere materiale operativo per i key user.
- [Commerce Storefront Documentation](https://doc.oroinc.com/user/storefront/)
  Il lato compratore: registrazione e login, My Account, shopping list, RFQ, preventivi, quick order
  form, checkout (multi-page, single-page, guest), conversazioni, ordini ricorrenti.
  Usare per: costruire lo script di una demo e sapere cosa il cliente vede davvero.
- [Glossary](https://doc.oroinc.com/user/glossary/)
  Le definizioni ufficiali dei termini Oro.
  Usare per: risolvere gli equivoci di vocabolario, il primo ostacolo per chi viene da Magento.
- [Integrations](https://doc.oroinc.com/user/integrations/)
  Integrazioni pronte e punti di estensione, dal punto di vista funzionale.
  Usare per: capire cosa esiste già prima di stimare un'integrazione su misura.

## Knowledge — prodotto ed edizioni

- [OroCommerce Features](https://oroinc.com/b2b-ecommerce/features/) e
  [Editions](https://oroinc.com/b2b-ecommerce/editions/)
  Materiale del vendor: utile per il confine Community / Enterprise e per il linguaggio commerciale.
  Da leggere sapendo che è marketing: ogni affermazione va verificata sulla documentazione o
  sull'installazione.
- [OroCommerce Release Notes](https://doc.oroinc.com/releases/)
  Cosa è entrato in quale versione.
  Usare per: non promettere a un cliente una funzione che nella sua versione non c'è.

## Wisdom — comunità

- [Oro Community Guide](https://doc.oroinc.com/community/)
  Il punto ufficiale da cui partono i canali della comunità (GitHub, Slack, Stack Overflow).
  Usare per: trovare il canale giusto prima di fare la domanda.
- [Stack Overflow, tag `orocommerce`](https://stackoverflow.com/questions/tagged/orocommerce)
  Domande e risposte pubbliche; copertura funzionale limitata ma reale.
  Usare per: casi concreti di configurazione già incontrati da altri.
- [GitHub oroinc/orocommerce — Issues](https://github.com/oroinc/orocommerce/issues)
  Comportamenti segnalati come difetti, spesso con la risposta «è così per disegno».
  Usare per: capire se un comportamento strano è un bug o una scelta di prodotto.
- Interna: chi in Algoritma ha già consegnato progetti Oro.
  Usare per: sapere cosa in pratica si configura e cosa si finisce sempre per sviluppare.

## Gaps

- Manca una fonte pubblica di qualità sui **processi B2B reali** (approvazioni d'acquisto, gestione
  conto cliente, rapporti con l'ERP lato business): la documentazione Oro descrive le funzioni, non
  come le usano davvero le aziende. Colmare con l'esperienza interna sui progetti.
- Manca materiale in italiano: tutte le fonti sono in inglese. Il glossario italiano lo produciamo
  qui, in [reference-business/glossario.html](reference-business/glossario.html).
- Da cercare più avanti: video demo ufficiali aggiornati alla 7.0 e casi d'uso di clienti reali.
