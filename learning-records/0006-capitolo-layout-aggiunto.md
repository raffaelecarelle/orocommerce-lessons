# Aggiunta la lezione 13: il layout dello storefront

Il 2026-09-22 il percorso tecnico è passato da dodici a tredici lezioni. La tredicesima copre il
sistema di layout dello storefront: albero dei blocchi, layout update, data provider, block theme,
temi.

**Perché è stata aggiunta.** Il layout era dichiarato fuori scope in `MISSION.md` e in
[[0003-curriculum-scritto-in-anticipo]], ma il percorso lo toccava senza spiegarlo: le lezioni 5 e 6
fanno scrivere dentro `Resources/views/layouts/<tema>/config/`, e nessuna lezione diceva cosa fosse
quella cartella. Un termine usato e mai definito è un buco, non una scelta di scope.

**Cosa è cambiato nello scope.** Fuori scope resta la parte grafica dei temi (SCSS, componenti JS,
build degli asset). Il sistema di layout — la composizione delle pagine — è ora dentro. La
distinzione è quella utile: comporre una pagina serve a un backend, vestirla no.

**Verifica fatta eseguendo.** Layout update e block theme sono stati aggiunti al bundle di training
su un'installazione 7.0 CE, la pagina prodotto storefront è stata scaricata e il blocco compariva
come primo figlio di `page_content`. Poi i file sono stati rimossi. Due risultati sono finiti nella
lezione:

1. Senza `@setBlockTheme` il blocco **esiste comunque** e rende il contenuto predefinito del suo
   tipo, solo senza il markup dichiarato. Il block theme dà il vestito, non l'esistenza.
2. Il layout è solo file: rimuoverlo non lascia nulla in banca dati, a differenza delle entità con
   `#[Config]` (vedi [[0003-curriculum-scritto-in-anticipo]] e le note su `oro_entity_config`).

**Conseguenza per chi conduce il percorso.** La lezione 13 chiude il percorso, quindi il richiamo
spaziato al suo interno guarda alla lezione 12. Le lezioni 5 e 6 ora rimandano avanti alla 13: è un
rimando in avanti voluto, serve a segnalare il debito nel momento in cui lo si contrae.

Vedi [[0001-punto-di-partenza]].
