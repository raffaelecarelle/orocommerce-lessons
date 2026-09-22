# Mission: OroCommerce 7.0 (percorso funzionale / business)

Percorso parallelo e indipendente da [MISSION.md](MISSION.md), che copre lo sviluppo backend.
Stessa installazione, stessi asset grafici, obiettivi diversi.

## Why
Capire OroCommerce dal punto di vista di chi lo usa e di chi lo vende: cosa fa il prodotto nativo,
cosa si ottiene configurando e cosa richiede sviluppo. Serve a tre cose concrete:

1. **Configurare un B2B da zero** — partire da un'installazione Oro e arrivare a uno storefront che
   vende: organizzazione, sito web, catalogo, listini, clienti, checkout, flusso d'ordine, tutto da
   back-office e senza scrivere codice.
2. **Fare demo credibili** — mostrare il flusso B2B completo (login, catalogo, shopping list, quick
   order, RFQ, preventivo, checkout, ordine) e commentarlo in termini di valore per il cliente.
3. **Scrivere analisi funzionali** — distinguere nativo / configurabile / custom, delimitare lo
   sviluppo e non promettere ciò che Oro già fa in modo diverso.

Destinatari: gli sviluppatori del percorso tecnico, che devono conoscere il prodotto che estendono,
e i consulenti/analisti che raccolgono requisiti e configurano senza scrivere codice.

## Success looks like
- Dato un record qualsiasi (prodotto, prezzo, ordine, utente), dire in quale contenitore vive
  (organizzazione, sito web, cliente, gruppo) e chi lo vede nello storefront.
- Costruire da back-office un catalogo navigabile: master catalog, prodotti, famiglie e attributi,
  unità di misura, immagini.
- Impostare i prezzi B2B: listini, listino per cliente e per gruppo, prezzi a scaglioni, promozioni.
- Configurare i clienti B2B: customer, gruppi, utenti cliente, ruoli storefront e permessi.
- Portare un ordine dall'inizio alla fine passando per shopping list, RFQ e preventivo, sapendo
  quale stato del flusso genera quale documento.
- Condurre una demo dello storefront senza esitazioni, sapendo dove ogni cosa mostrata è stata
  configurata in back-office.
- Compilare una griglia «nativo / configurazione / custom» su un capitolato reale.

## Constraints
- 2-3 ore a settimana. Lezioni corte, ognuna con pratica sull'installazione reale.
- Nessun codice: tutto si fa da back-office. Se serve codice, la lezione lo dichiara come confine
  e rimanda al percorso tecnico.
- Edizione Community con dati demo installati. Le funzioni solo Enterprise vanno segnalate ogni
  volta che compaiono.
- Lingua: italiano. Nomi delle voci di menu, entità e termini Oro restano in inglese, come si
  leggono nell'interfaccia.

## Out of scope (per ora)
- Sviluppo, API, import/export, code: sono il percorso tecnico.
- Theming e layout grafico dello storefront.
- Funzioni marketplace e multi-vendor.
- CRM avanzato (lead, opportunità, campagne) oltre al minimo per capire dove vivono i dati.
