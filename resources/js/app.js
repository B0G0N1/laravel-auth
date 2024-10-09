import './bootstrap';
import '~resources/scss/app.scss';
import '~icons/bootstrap-icons.scss';
import * as bootstrap from 'bootstrap';
import.meta.glob([
    '../img/**'
])

// recupero tutti i pulsanti di cancellazione presenti nella tabella
const buttons = document.querySelectorAll('.delete-post');

// ciclo i pulsanti
buttons.forEach((button) => {
    // ad ogni pulsante, gli dico di rimanere in attesa dell'evento click
    button.addEventListener('click', function(e) {
        // al click avvenuto, la form non deve inviare ancora nulla, quindi utilizzo il preventDefault
        e.preventDefault();

        // recupero l'html della modale attraverso il suo id
        const modal = document.getElementById('deletePostModal');

        // lo passo al costruttore della classe Modal per crearne una nuova istanza
        const bootstrap_modal = new bootstrap.Modal(modal);

        // mostro la modale a video
        bootstrap_modal.show();

        // recupero il pulsante con la classe confirm-delete e gli dico di rimanere in ascolto dell'evento click
        document.querySelector('.confirm-delete').addEventListener('click', function() {
            // se cliccato, sottomette la form
            button.parentElement.submit();
        });
    });
});
