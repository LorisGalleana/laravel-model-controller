
---

# LARAVEL-MODEL-CONTROLLER

## Descrizione

**LARAVEL-MODEL-CONTROLLER** è un progetto in Laravel che esplora la gestione del database tramite l'ORM di Laravel. In questo progetto, interagiremo con un database MySQL, creeremo modelli e controller, e visualizzeremo i dati in una pagina web.

### Funzionalità

1. **Creazione del Progetto Laravel**:
   - Creazione di un nuovo progetto Laravel 10 utilizzando un template base.

2. **Creazione del Database**:
   - Creazione di un database chiamato `laravel_model_controller` tramite phpMyAdmin.
   - Importazione della tabella `movies` nel database.

3. **Connessione al Database**:
   - Configurazione delle credenziali di connessione al database nel file `.env` del progetto Laravel.

4. **Creazione del Model Movie**:
   - Creazione di un model **Movie** utilizzando il comando `php artisan make:model Movie`, che rappresenta la tabella `movies` nel database.

5. **Creazione del Controller PageController**:
   - Creazione di un controller **PageController** con il comando `php artisan make:controller PageController`.
   - Implementazione della funzione `index()` all'interno del controller, che recupera tutti i film dalla tabella `movies` e li passa alla view per la visualizzazione.

6. **Visualizzazione dei Dati**:
   - All'interno della view, i dati dei film vengono visualizzati in un formato card per ogni film.

### Bonus

1. **Rotte con Filtri**:
   - Creazione di ulteriori rotte e relative view per visualizzare i film con filtri personalizzati, come per esempio per genere, anno, etc.

2. **Dettaglio di un Singolo Film**:
   - Creazione di una rotta che permetta di visualizzare il dettaglio di un singolo film, con tutte le informazioni relative al film selezionato.

### Struttura del Progetto

1. **app/Models/Movie.php**: Il model **Movie** che rappresenta la tabella `movies` nel database.
2. **app/Http/Controllers/PageController.php**: Il controller che gestisce la logica per la visualizzazione dei film.
3. **resources/views/index.blade.php**: La view principale che visualizza i film tramite delle card.
4. **database/migrations/XXXX_XX_XX_create_movies_table.php**: La migrazione per la creazione della tabella `movies`.
5. **routes/web.php**: Le rotte del progetto, incluse quelle per la visualizzazione della lista dei film e il dettaglio di un singolo film.

### Tecnologie utilizzate

- **Laravel 10**: Framework PHP per lo sviluppo del progetto.
- **Eloquent ORM**: Il sistema di ORM di Laravel utilizzato per interagire con il database.
- **Blade**: Motore di templating di Laravel per la gestione delle views.
- **MySQL**: Sistema di gestione del database per memorizzare i dati dei film.

---
