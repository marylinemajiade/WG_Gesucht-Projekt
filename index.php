<?php
    include_once "header.php"
?>

      <main>
        <?php
            if(isset($_SESSION["useruid"])){
              echo "<p>Hello there" . $_SESSION["useruid"] . "</p>";
            }
        ?>
        <div id="content">
          <div id="abs_content">
            <h2>Europaweit mehr als 3,1 Millionen Anzeigen</h2>
            <ul>
              <li>eins</li>
              <li>zwei</li>
              <li>drei</li>
              <li>vier</li>
            </ul>
          </div>
        </div>
      </main>

      <div id="main2">
        <div id="main2left">
          <div><h2>Anzeigesuche</h2></div>
          <div><img src="./bilder/ntv_siegel.png"/></div>
          <div><img src="./bilder/follow_us_on_facebook.jpg"/></div>
          <div>Test</div>
          <div>Test</div>
          <div>Test</div>
        </div>
        <div id="main2right">
          <div id="m2right">
            <div id="m21">
              <p>
                <h2>So nutzen Sie uns erfolgreich</h2><br> Auf WG-Gesucht.de inserieren Sie
                schnell und einfach Ihre Anzeige für ein WG-Zimmer, eine Wohnung
                oder ein Haus zur Zwischenmiete oder Miete.
              </p>
            </div>
            <div id="m22">
              <p>
                <h2>Angebote inserieren</h2><br> Wenn Sie einen Mitbewohner, Mieter oder
                Nachmieter suchen, geben Sie bitte hier Ihr Angebot auf.
              </p>
            </div>
            <div id="m23">
              <p>
                <h2>Gesuche inserieren</h2><br> Sind Sie auf der Suche nach einem neuen
                Zuhause, inserieren Sie hier Ihr Gesuch.
              </p>
            </div>
          </div>
          <hr noshade style="margin-left: 5%; margin-right: 5%; opacity: 0.3; ">
          <div id="under_right1">
            <div id="um1">
              <p><h2>WG-Gesucht.de - Deutschlands Nr. 1 für WGs und Wohnungen zur Miete</h2><br>
                <ol>
                <li> Wir sind Europas größtes Portal für WG-Zimmer, Co-Living und Wohnungen.</li>
                <li>Mehr als 12,2 Millionen Besucher finden jeden Monat attraktive Wohnungen und passende Bewerber.</li>
                <li>Bei uns gibt es Zimmer in Wohngemeinschaften, 1-Zimmer-Wohnungen, 2-Zimmer-Wohnungen, 3-Zimmer-Wohnungen,
                4-Zimmer-Wohnungen und Häuser zur langfristigen und kurzfristigen Miete.</li>
                <li>Als privater Vermieter, Mieter auf Nachmietersuche und Suchender nutzen Sie WG-Gesucht.de für 0,- €.</li>
                <li>Für professionelle bzw. gewerbliche Nutzung setzen Sie sich bitte mit uns in Verbindung.</li>
              </ol>
              </p>
            </div>
          </div>
        </div>
      </div>

<?php
    include_once "footer.php"
?>