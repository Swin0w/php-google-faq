<!DOCTYPE html>
<html lang="it" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>GOOGLE FAQ</title>
    <!-- CSS -->
    <link rel="stylesheet" href="style.css">
    <!-- GOOGLE FONTS -> NOTO SANS SC -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+SC&display=swap" rel="stylesheet">
  </head>
  <body>
    <header>
      <div class="container-h">
        <div id="row-h">
          <div id="logo">
            <h1 class="height blue">G</h1>
            <h1 class="height red">o</h1>
            <h1 class="height" id="yellow">o</h1>
            <h1 class="height blue">g</h1>
            <h1 class="height" id="green">l</h1>
            <h1 class="height red">e</h1>
            <h1>Privacy e termini</h1>
          </div>
          <div id="info">
            <img src="img/dots-menu.svg" id="menu" alt="">
            <img src="img/man.svg" id="user" alt="">
          </div>
        </div>
        <ul id="policy-nav">
          <li>
            <a href="#">
              <span>Introduzione</span>
            </a>
          </li>
          <li>
            <a href="#">
              <span>Norme sulla Privacy</span>
            </a>
          </li>
          <li>
            <a href="#">
              <span>Termini di servizio</span>
            </a>
          </li>
          <li>
            <a href="#">
              <span>Tecnologie</span>
            </a>
          </li>
          <li>
            <a href="#" id="active">
              <span>Domande frequenti</span>
              <div id="border">
              </div>
            </a>
          </li>
        </ul>
      </div>
    </header>
    <main>
      <section id="qa">
        <div class="container-m">
          <div>
            <?php
              $db = [
                [
                  'q' => 'Come state implementando la recente decisione della
                          Corte di giustizia dell Unione europea (CJUE) relativa al
                          diritto all oblio?',
                  'a' => "La recente decisione della Corte di giustizia dell Unione
                          europea ha profonde conseguenze per i motori di ricerca in Europa.
                          La Corte ha stabilito che alcuni utenti hanno il diritto di
                          chiedere ai motori di ricerca come Google di rimuovere risultati
                          relativi a chiavi di ricerca che includono il proprio nome.
                          Per poter essere rimossi, i risultati visualizzati devono
                          essere inadeguati, irrilevanti o non più rilevanti, o eccessivi.
                          Da quando questa decisione è stata pubblicata il 13 maggio 2014,
                          abbiamo lavorato incessantemente per uniformarci a essa.
                          Si tratta di una procedura complessa perché dobbiamo valutare
                          ogni singola richiesta e effettuare un bilanciamento tra il
                          diritto dell individuo a controllare i suoi dati personali
                          ed il diritto di tutti di conoscere e distribuire le informazioni.
                          Per presentare una richiesta di rimozione, compila questo modulo web.
                          Riceverai una risposta automatica che conferma la ricezione della tua richiesta.
                          Dopodiché valuteremo il tuo caso (tieni presente che potrebbe
                          occorrere un po di tempo perché abbiamo già ricevuto tante richieste simili).
                          Nel valutare la richiesta, considereremo se i risultati
                          includono informazioni obsolete relative alla tua vita privata.
                          Considereremo inoltre se vi è un interesse pubblico a che le
                          informazioni rimangano nei nostri risultati delle ricerche,
                          ad esempio se riguardano frodi finanziarie, negligenza professionale,
                          condanne penali o la tua condotta pubblica in relazione a un
                          pubblico ufficio (eletto o non eletto). Queste valutazioni
                          sono complesse e, in quanto organizzazione privata, potremmo
                          non essere nella posizione giusta per prendere decisioni
                          in merito al tuo caso. Se non sei d accordo con la nostra valutazione,
                          puoi rivolgerti all Autorità garante per la protezione dei dati personali nel tuo paese.
                          Nei prossimi mesi lavoreremo a stretto contatto con le autorità
                          per la protezione dei dati e con altre autorità per perfezionare
                          il nostro approccio. La decisione della CGUE rappresenta un
                          cambiamento significativo per i motori di ricerca.
                          Siamo preoccupati per le sue conseguenze, ma riteniamo anche
                          che sia importante rispettare la decisione della Corte e ci
                          stiamo adoperando per predisporre una procedura conforme alla legge.
                          Quando cerchi un nome, potresti trovare una notifica in cui
                          viene spiegato che i risultati potrebbero essere stati modificati
                          nel rispetto delle leggi europee per la protezione dei dati.
                          Mostriamo questa notifica agli utenti europei quando cercano
                          la maggior parte dei nomi, non soltanto le pagine che sono
                          state soggette a una rimozione."
                ],
                [
                    'q' => 'How does Google protect my privacy and keep my information secure?',
                    'a' => "We know security and privacy are important to you – and they are important to us, too. We make it a priority to provide strong security and give you confidence that your information is safe and accessible when you need it.
                          We're constantly working to ensure strong security, protect your privacy, and make Google even more effective and efficient for you. We spend hundreds of millions of dollars every year on security, and employ world-renowned experts in data security to keep your information safe. We also built easy-to-use privacy and security tools like Google Dashboard, 2-step verification and Ads Settings. So when it comes to the information you share with Google, you're in control.
                          You can learn more about safety and security online, including how to protect yourself and your family online, at the Google Safety Center.
                          Learn more about how we keep your personal information private and safe — and put you in control."
                ],
                [
                  'q' => "Why is my account associated with a country?",
                  'a' => "Your account is associated with a country (or territory) in the Terms of Service so that we can determine two things:
                        The Google affiliate that provides the services, that processes your information, and that is responsible for complying with applicable privacy laws. Generally, Google offers its consumer services through either of two companies:
                        Google Ireland Limited, if you're located in the European Economic Area (EU countries plus Iceland, Liechtenstein, and Norway) or Switzerland
                        Google LLC, based in the United States, for the rest of the world
                        The version of the terms that govern our relationship, which can vary depending on local laws
                        Keep in mind that Google services are essentially the same regardless of the affiliate that provides the services or your country association."
                ],
                [
                  'q' => "Determining the country associated with your account",
                  'a' => "When you create a new account, we associate your account with a country based on where you created your Google Account. For accounts at least a year old, we use the country from which you usually access Google services — typically where you've spent the most time in the last year.
                        Frequent travel doesn't generally affect the country associated with your account. If you move to a new country, it can take about a year for your country association to update.
                        If the country associated with your account doesn't correspond to your country of residence, it could be because of a difference between your country of work and residence, because you've installed a Virtual Private Network (VPN) to mask your IP address, or because you live close to a territorial border. Contact us if you think your country association is wrong."
                ],
                [
                  'q' => "How can I remove information about myself from Google's search results?",
                  'a' => "Google search results are a reflection of the content publicly available on the web. Search engines can't remove content directly from websites, so removing search results from Google wouldn't remove the content from the web. If you want to remove something from the web, you should contact the webmaster of the site the content is posted on and ask him or her to make a change. Additionally, if under European data protection law, you would like to request removal of certain   information about you that appears in Google's search results, please click here. Once the content has been removed and Google has noted the update, the information will no longer appear in Google's search results. If you have an urgent removal request, you can also visit our help page for more information."
                ],
                [
                  'q' => "Are my search queries sent to websites when I click on Google Search results?",
                  'a' => "In some cases, yes. When you click on a search result in Google Search, your web browser also may send the Internet address, or URL, of the search results page to the destination webpage as the Referrer URL. The URL of the search results page may sometimes contain the search query you entered. If you are using SSL Search (Google's encrypted search functionality), under most circumstances, your search terms will not be sent as part of the URL in the Referrer URL. There are some exceptions to this behavior, such as if you are using some less popular browsers. More information on SSL Search can be found here. Search queries or information contained in the Referrer URL may be available via Google Analytics or an application programming interface (API). In addition, advertisers may receive information relating to the exact keywords that triggered an ad click."
                ]
              ];

              foreach ($db as $qa) {
                $q = $qa['q'];
                $a = $qa['a'];

                echo "<h1>" . $q . "</h1><p>" . $a . "</p>";
              }
             ?>
          </div>
        </div>
      </section>
    </main>
    <footer>
      <div class="container-m">
        <div id="row-f">
          <ul id="footer-nav">
            <li>
              <a href="#">
                <span>Google</span>
              </a>
            </li>
            <li>
              <a href="#">
                <span>Tutto su Google</span>
              </a>
            </li>
            <li>
              <a href="#">
                <span>Privacy</span>
              </a>
            </li>
            <li>
              <a href="#">
                <span>Termini</span>
              </a>
            </li>
          </ul>
          <div id="lang">
            <img src="img/translate.svg"id="language" alt="">
            <select>
              <option value="it">Italiano</option>
              <option value="en">Inglese</option>
            </select>
          </div>
        </div>
      </div>
    </footer>
  </body>
</html>
