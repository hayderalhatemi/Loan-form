<?php
function upload_image() {
    ob_start();
	?>
    
    <div class="container">

        <div class="log">
            <h1 class="log">NET<span class="span_1">KREDIT</span> 24</h1>
        </div>

        <h2 class="h2">WEITERE INFORMATIONEN</h2>
        <p class="p">Wir benötigen ein wenig mehr informationen, um fur sie die besten kreditoptionen zu finden</p>
        <p class="p_1">WEITERE INFORMATIONEN</p>
        <p class="p_2">TEST MOSE SET ON: 1</p>

        <div class="selects">

            <div class="select_1">
                <label for="Kreditbetrag">Kreditbetrag</label>
                <select name="amount" id="amount">
                    <option value="30000">30000€</option>
                    <option value="20000">20000€</option>
                    <option value="10000">10000€</option>
                </select>
            </div>

            <div class="select_2">
                <label for="Laufzeit">Laufzeit</label>
                <select name="period" id="period">
                    <option value="7 Jahre">7 years</option>
                    <option value="5 Jahre">5 Jahre</option>
                    <option value="3 Jahre">3 Jahre</option>
                </select>
            </div>

        </div>
        
            <p>Persönliche Daten</p>

            <h3 class="h3_1">Varum fragen wir das?</h3>

        <div class="selects_2">

            <div class="select_3">
                <label for="Verwendungszweck">Verwendungszweck</label>
                <select name="choose" id="input_1">
                    <option value=""></option>
                </select>
            </div>

        <div class="select_4">
                <label for="Vorname(n)">Vorname(n)</label>
                <input id="input_2" type="text">
        </div>

            <div class="radio">

                <p>Anrede</p>

                <div class="radioChild">

                    <div class="radio_1">
                        <input type="radio">
                        <label for="herr">herr</label>
                    </div>

                    <div class="radio_2">
                        <input type="radio">
                        <label for="frau">frau</label>
                    </div>

                </div>

            </div>

        </div>

        <div class="inputs_3">
            <label for="Nackname">Nackname</label>
            <input type="text">
            <label for="Geburtsdatum">Geburtsdatum</label>
            <input type="text" placeholder="Tag">
            <input type="text" placeholder="monat">
            <input type="text" placeholder="jahr">
            <label for="Wohnstiz">Wohnstiz</label>
            <select name="Wohnstiz" id=""></select>
        </div>

        <div class="inputs_4">
            <label for="StarBe">StarBe</label>
            <input type="text">
            <label for="hausnummer">hausnummer</label>
            <input type="text">
            <label for="PLZ">PLZ</label>
            <input type="text">
        </div>

        <div class="ort">
            <label for="Ort">Ort</label>
            <input type="text">
        </div>

        <p>Finanzen und Einkommen</p>
        <h3 class="h3_1">Varum fragen wir das?</h3>

        <div class="inputs_5">
            <label for="Einkommensarten">Einkommensarten</label>
            <select name="" id=""></select>
            <label for="Nettoeinkommen pro Monat">Nettoeinkommen pro Monat</label>
            <input type="text">
            <label for="Sonstiges Einkommen pro Monat">Sonstiges Einkommen pro Monat</label>
            <input type="text">
        </div>

        <div class="inputs_6">
            <label for="Sonstiges Kreditkosten pro Monat">Sonstiges Kreditkosten pro Monat?</label>
            <input type="text">
            <label for="Varmmiete pro Monat">Varmmiete pro Monat?</label>
            <input type="text">
        </div>

        <p>Antrag absenden</p>

        <div class="radio_1">
            <p>Bewerben Sie sich gemeinsam mit einem mitantragsteller</p>
            <input type="radio">
            <label for="Ja">Ja</label>
            <input type="radio">
            <label for="Nein">Nein</label>
        </div>

        <div class="radio_2">

            <p>Besitzen Sie eine Immobilie?</p>

            <input type="radio">
            <label for="Ja">Ja</label>
            <input type="radio">
            <label for="Nein">Nein</label>
        </div>

        <div class="radio_3">
            <p>Haben Sie einen negativen SCHUFA-Eintrag?</p>

            <input type="radio">
            <label for="Ja">Ja</label>
            <input type="radio">
            <label for="Nein">Nein</label>
            <br>
            <input type="radio">
            <label for="Ich bin mir nicht sicher">Ich bin mir nicht sicher</label>
        </div>

        <div class="radio_4">
            <p>Hätten Sie Interesse an einer gebuhrenfreien kreditkarte mit bis zu 4.000€ Verfrugungstrahmen?</p>
            <input type="radio">
            <label for="Ja bitte">Ja bitte</label>
            <input type="radio">
            <label for="Nein">Nein</label>
        </div>

    </div>

    <?php
    return ob_get_clean();
}
?>