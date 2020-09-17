<?php
$faq = [
    [
        'domanda' => 'Come state implementando la recente decisione della Corte di giustizia dell&#8217;Unione europea (CGUE) relativa al diritto all&#8217;oblio?',
        'risposta' => 'La recente decisione della Corte di giustizia dell&#8217;Unione europea ha profonde conseguenze per i motori di ricerca in Europa. La Corte ha stabilito che alcuni utenti hanno il diritto di chiedere ai motori di ricerca come Google di rimuovere risultati relativi a chiavi di ricerca che includono il proprio nome. Per poter essere rimossi, i risultati visualizzati devono essere inadeguati, irrilevanti o non più rilevanti, o eccessivi. <br><br>
                        Da quando questa decisione è stata pubblicata il 13 maggio 2014, abbiamo lavorato incessantemente per uniformarci a essa. Si tratta di una procedura complessa perché dobbiamo valutare ogni singola richiesta e effettuare un bilanciamento tra il diritto dell&#8217;individuo a controllare i suoi dati personali ed il diritto di tutti di conoscere e distribuire le informazioni.<br><br>
                        Per presentare una richiesta di rimozione, compila questo modulo web. Riceverai una risposta automatica che conferma la ricezione della tua richiesta. Dopodiché valuteremo il tuo caso (tieni presente che potrebbe occorrere un po&#8217; di tempo perché abbiamo già ricevuto tante richieste simili). Nel valutare la richiesta, considereremo se i risultati includono informazioni obsolete relative alla tua vita privata. Considereremo inoltre se vi è un interesse pubblico a che le informazioni rimangano nei nostri risultati delle ricerche, ad esempio se riguardano frodi finanziarie, negligenza professionale, condanne penali o la tua condotta pubblica in relazione a un pubblico ufficio (eletto o non eletto). Queste valutazioni sono complesse e, in quanto organizzazione privata, potremmo non essere nella posizione giusta per prendere decisioni in merito al tuo caso. Se non sei d&#8217;accordo con la nostra valutazione, puoi rivolgerti all&#8217;Autorità garante per la protezione dei dati personali nel tuo paese.<br><br>
                        Nei prossimi mesi lavoreremo a stretto contatto con le autorità per la protezione dei dati e con altre autorità per perfezionare il nostro approccio. La decisione della CGUE rappresenta un cambiamento significativo per i motori di ricerca. Siamo preoccupati per le sue conseguenze, ma riteniamo anche che sia importante rispettare la decisione della Corte e ci stiamo adoperando per predisporre una procedura conforme alla legge.<br><br>
                        Quando cerchi un nome, potresti trovare una notifica in cui viene spiegato che i risultati potrebbero essere stati modificati nel rispetto delle leggi europee per la protezione dei dati. Mostriamo questa notifica agli utenti europei quando cercano la maggior parte dei nomi, non soltanto le pagine che sono state soggette a una rimozione.'
    ],
    [
        'domanda' => 'Come fa Google a proteggere la mia privacy e a tenere le mie informazioni al sicuro?',
        'risposta' => 'Sappiamo che la sicurezza e la privacy sono importanti per te e lo sono anche per noi. Per noi è imperativo offrire un&#8217;elevata sicurezza e assicurarti che le tue informazioni sono al sicuro e accessibili quando ne hai bisogno.<br><br>
                        Siamo costantemente al lavoro per garantire un&#8217;elevata sicurezza, proteggere la tua privacy e rendere Google ancora più efficace ed efficiente per te. Spendiamo centinaia di milioni di dollari ogni anno per la sicurezza e ci avvaliamo di esperti di fama mondiale in materia di sicurezza dei dati per mantenere le tue informazioni al sicuro. Abbiamo inoltre sviluppato strumenti per la sicurezza e la privacy di facile utilizzo come Google Dashboard, la verifica in due passaggi e Impostazioni annunci. Così, per quanto riguarda le informazioni che condividi con Google, hai il massimo controllo.<br><br>
                        Puoi leggere ulteriori informazioni sulla sicurezza online, incluso come proteggere te e la tua famiglia online, nel Centro Google per la sicurezza online.<br><br>
                        Scopri quali misure adottiamo per garantire protezione e sicurezza alle tue informazioni personali, lasciando a te il controllo.'
    ],
    [
        'domanda' => 'Come faccio a rimuovere informazioni su di me dai risultati di ricerca di Google?',
        'risposta' => 'I risultati di ricerca di Google rispecchiano i contenuti pubblicamente disponibili sul Web. I motori di ricerca non possono rimuovere i contenuti direttamente dai siti web, quindi rimuovere risultati di ricerca da Google non consente di rimuovere i contenuti dal Web. Se desideri rimuovere qualcosa dal Web, devi contattare il webmaster del sito su cui sono pubblicati i contenuti e chiedergli di apportare una modifica. Inoltre, se, ai sensi delle leggi europee per la       protezione dei dati, desideri richiedere la rimozione di determinate informazioni su di te visualizzate nei risultati di ricerca di Google, fai clic qui. Una volta che i contenuti saranno stati rimossi e che Google avrà rilevato l&#8217;aggiornamento, le informazioni non verranno più visualizzate nei risultati di ricerca di Google. In caso di una richiesta di rimozione urgente, è inoltre possibile visitare la nostra pagina di assistenza per avere ulteriori informazioni.'
    ],
    [
        'domanda' => 'Quando faccio clic sui risultati della Ricerca Google, le mie chiavi di ricerca vengono inviate ai siti web?',
        'risposta' => 'In alcuni casi sì. Quando fai clic su un risultato della Ricerca Google, il tuo browser web potrebbe reindirizzare alla pagina web di destinazione anche l&#8217;indirizzo Internet, o URL, della pagina dei risultati di ricerca sotto forma di URL referrer. Talvolta, l&#8217;URL della pagina dei risultati di ricerca potrebbe contenere la query di ricerca che hai inserito. Se utilizzi la ricerca SSL (la funzione di ricerca criptata di Google), nella maggior parte dei casi i termini di ricerca non vengono inviati come parte dell&#8217;URL negli URL referrer. Questo comportamento può fare eccezione, ad esempio se utilizzi alcuni browser meno diffusi. Ulteriori informazioni sulla ricerca SSL sono disponibili qui. Le query di ricerca o le informazioni contenute nell&#8217;URL referrer potrebbero essere disponibili mediante Google Analytics o un&#8217;API (Application Programming Interface). Inoltre, gli inserzionisti potrebbero ricevere informazioni relative all&#8217;esatte parole chiave che hanno determinato il clic su un annuncio.'
    ]
]

// foreach ($faq as $value) {
//     echo $value['domanda'];
//     echo $value['risposta'];
// }
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@400;600&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="css/style.css">
        <title>php-google-faq</title>
    </head>
    <body>
        <header>
            <div class="logo-bar clearfix">
                <div class="logo">
                    <img src="https://www.google.com/images/branding/googlelogo/1x/googlelogo_color_74x24dp.png" alt="Logo">
                </div>
                <div class="pagina">
                    <h2>Privacy e termini</h2>
                </div>
            </div>
            <nav class="clearfix;">
                <div class="menu-voice">
                    <p><a href="#">Introduzione</a></p>
                </div>
                <div class="menu-voice">
                    <p><a href="#">Norme sulla privacy</a></p>
                </div>
                <div class="menu-voice">
                    <p><a href="#">Termini di servizio</a></p>
                </div>
                <div class="menu-voice">
                    <p><a href="#">Tecnologie</a></p>
                </div>
                <div id="border" class="menu-voice blu">
                    <p><a href="#">Domande frequenti</a></p>
                </div>
            </nav>
        </header>
        <main>
            <div class="question container">
                <?php foreach ($faq as $value) { ?>
                    <h2><?php echo $value['domanda']; ?></h2>
                    <p><?php echo $value['risposta']; ?></p>
                <?php } ?>
            </div>
        </main>
        <footer class="clearfix">
            <div class="container">
                <div>
                    <p><a href="#"></a>Google</p>
                    <p><a href="#"></a>Tutto su Google</p>
                    <p><a href="#"></a>Privacy</p>
                    <p><a href="#"></a>Termini</p>
                </div>
                <div class="language">
                    <select class="select">
                        <option value="Italiano">Italiano</option>
                        <option value="English">English</option>
                        <option value="French">French</option>
                        <option value="Spanish">Spanish</option>
                    </select>
                </div>
            </div>
        </footer>
    </body>
</html>
