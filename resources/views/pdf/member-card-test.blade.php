<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>SB Admin 2 - Dashboard</title>
</head>
<body>

<style>
    body{
        font-size: 0.5em;
    }
    ul{
        list-style-type: none;
    }
    table {
        font-family: arial, sans-serif;
        border-collapse: collapse;
        width: 100%;
    }

    td, th {
        border: 1px solid #dddddd;
        text-align: left;
        padding: 8px;
    }

    tr:nth-child(even) {
        background-color: #dddddd;
    }
    .item3 { grid-area: main; }
    .item4 { grid-area: right; }

    .grid-container {
        display: grid;
        grid-template-areas:
    'main main main right right right'
    'menu footer footer footer footer footer';
        gap: 10px;
        padding: 10px;
    }

    .grid-container > div {
        text-align: center;
        padding: 20px 0;
    }
</style>
    <div style="">
        <div style="display:inline-block;margin-top:40px">
            <img src="data:image/png;base64,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"/>
        </div>
        <div style="border-left: solid 1px black;text-align:right;display:inline-block;margin-left: 10px;">
            <p style="padding-left: 10px;text-align: center">Via Pisa, 21</p>
            <p style="padding-left: 10px;text-align: center">00162 Roma</p>
        </div>
        <div style="border-left: solid 1px black;text-align:right;display:inline-block; margin-left: 10%">
            <p style="padding-left: 10px;text-align: center">Tel +39 06.44240967</p>
            <p style="padding-left: 10px;text-align: center">Fax +39 06.44.29.2060</p>
        </div>
        <div style="border-left: solid 1px black;text-align:right;display:inline-block;margin-left: 10%">
            <p style="padding-left: 10px;text-align: center">www.siditalia.it</p>
            <p>-</p>
        </div>
    </div>
    <div class="row">
        <div class="grid-container">
            <div class="item3"><h3 class="text-left">Dott.ssa COGNOME NOME</h3></div>
            <div class="item4">Cod.Scheda: <b>FFFFFFFF</b></div>
        </div>
        <h1 style="text-align: center; margin-top: 0px">Scheda Socio</h1>

        <div class="grid-container">
            <div class="item3">
                <h3 style="text-align: left">Dott.ssa COGNOME NOME</h3>
                <p class="text-left">Nato/a il: <b>FRFGWEGRWG</b></p>
                <p class="text-left">Luogo nascita: <b>FFFF</b></p>
                <p class="text-left">C.fiscale: <b>EGEGFEWGEWG</b></p>
                <p style="margin-top: 7px" class="text-left">Professione: <b>WEGERGEGEG</b></p>
                <p class="text-left">Specializzazione: <b>WEVEWFGERGFEWG</b></p>
                <p class="text-left">E-mail: <b>ERGEWGWEGERWG</b></p>
                <p style="margin-top: 7px" class="text-left">Abitazione: <b>FRTGTGRW</b></p>
                <p class="text-left">Città: <b>ERGEWGTWG</b></p>
                <p class="text-left">Cellulare: <b>GEGWGW</b> </p>
                <p style="margin-top: 7px" class="text-left">Ufficio: <b>RGTRGWT</b></p>
                <p class="text-left">Indirizzo <b>G%H%YHE%Y</b></p>
                <p style="margin-top: 7px" class="text-left">Carica C.D. S.I.D: <b></b></p>
                <p class="text-left">Carica C.D. regionale: <b></b> </p>
            </div>
            <div class="item4">
                <p>Cod.Scheda: <b>FVWEGERWGFWE</b></p>
                <p>______________________________________________</p>
                <p>______________________________________________</p>
                <p>______________________________________________</p>
                <p>______________________________________________</p>
                <p>______________________________________________</p>
                <p>______________________________________________</p>
                <p>______________________________________________</p>
                <p>______________________________________________</p>
                <p>______________________________________________</p>
                <p>______________________________________________</p>
                <p>______________________________________________</p>
                <p>______________________________________________</p>
                <p>______________________________________________</p>
            </div>
        </div>

        <h4>Iscritto a YoSid <input type="checkbox"> <span style="padding-left: 450px">Hai 40 anni non compiuti? Iscriviti a YoSid <input type="checkbox"></span></h4>
        <div style="display: inline-flex">
            <p class="text-left">Appartenenza a Gruppi di studio</p>
            <p style="padding-left: 450px">Elenco Gruppi di studio</p>
        </div>
        <ul style="padding-left: 660px">
                <li>EFDCDFC</li>

        </ul>
        <div style="display: inline-flex">
            <p class="text-left">Appartenenza a Comitati</p>
            <p style="padding-left: 500px">Elenco Comitati</p>
        </div>
        <ul style="padding-left: 660px">
                <li>DCDDVDV</li>

        </ul>
        <br>
        <div style="border-bottom: 1px solid black;width: 500px;padding-left: 50px">
        <p class="text-left">Il saldo delle quote sociali è pari a €  QUOTE APPESE</p>
        </div>
        <p class="text-left">Il rinnovo della iscrizione è mediante:</p>

        <div style="display: inline-flex">
        <input type="checkbox"><p class="text-left">Bollettino di conto corrente postale n. 88043005(allegato)</p>
        </div>
<br>
        <div style="display: inline-flex">
        <input type="checkbox"><p class="text-left">Carte di credito</p>  <input type="checkbox"><p class="text-left">CartaSì</p> <input type="checkbox"><p class="text-left">Visa</p> <input type="checkbox"><p class="text-left">Mastercard</p><input type="checkbox"><p class="text-left">Eurocard</p>
        </div>
        <br>
        <p class="text-left">Carta di credito n.ro: _________________________ Data di scadenza:___________________ Cod controllo: ________________</p>
        <div style="display: inline-flex">
            <input type="checkbox"><p class="text-left">Bonifico bancario su c/c intestato SID <b>IBAN IT 51 H 03069 09606 1000000722289</b></p>
        </div>
        <p><b>Firma: __________________________________________</b></p>

        <div style="border-bottom: solid 1px black">
            <p style="text-align: center;padding-top: 10px"><b>Annotazioni: Controllare i dati ed apportare le eventuali variazioni negli appositi spazi sulla destra del modulo</b></p>
        </div>
        <p style="text-align: right;color: red">P.IVA 04394411005</p>
    </div>

</body>
</html>
