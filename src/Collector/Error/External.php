<?php

namespace Collector\Error;

/**
 * Class External
 * @package Collector\Error
 */
abstract class External
{
    static public $DENIED_TO_PURCHASE = '';
    static public $CREDIT_CHECK_DENIED = '';
    static public $ADDRESS_NOT_FOUND = '';
    static public $RESERVATION_NOT_APPROVED = '';
    static public $PURCHASE_AMOUNT_GREATER_THAN_MAX_CREDIT_AMOUNT = '';
    static public $INVALID_REGISTRATION_NUMBER = '';
    static public $AGREEMENT_RULES_VALIDATION_FAILED = '';
    static public $UNHANDLED_EXCEPTION = '';
    static public $HOUSE_NUMBER_IS_OUT_OF_RANGE = '';
    static public $CREDITVALIDATION_HOUSE_NUMBER_IS_REQUIRED = '';
    static public $INVALID_HOUSE_NUMBER = '';

    static public $SE = [
        'DENIED_TO_PURCHASE' => 'Tyvärr blev du inte godkänd att handla på faktura, var god välj ett annat betalningsalternativ.',
        'CREDIT_CHECK_DENIED' => 'Tyvärr blev du inte godkänd att handla på faktura, var god välj ett annat betalningsalternativ.',
        'ADDRESS_NOT_FOUND' => 'Tyvärr blev du inte godkänd att handla på faktura, var god välj ett annat betalningsalternativ.',
        'RESERVATION_NOT_APPROVED' => 'Tyvärr blev du inte godkänd att handla på faktura, var god välj ett annat betalningsalternativ.',
        'PURCHASE_AMOUNT_GREATER_THAN_MAX_CREDIT_AMOUNT' => 'Köpesumman är för stor för fakturaköp, var god minska värdet för varukorgen eller välj ett annat betalningsalternativ.',
        'INVALID_REGISTRATION_NUMBER' => 'Det personnummer du har slagit in är felaktigt, var god kontrollera detta och försök igen.',
        'AGREEMENT_RULES_VALIDATION_FAILED' => 'De personuppgifter du har angivit stämmer inte överens med dina folkbokföringsuppgifter, var god kontrollera detta och försök igen.',
        'UNHANDLED_EXCEPTION' => 'Tekniskt fel, var god försök senare eller välj ett annat betalningsalternativ.',
    ];
    static public $FI = [
        'DENIED_TO_PURCHASE' => 'Valitettavasti emme hyväksy sinua laskuasiakkaaksi. Ole hyvä ja valitse toinen maksutapa.',
        'CREDIT_CHECK_DENIED' => 'Valitettavasti emme hyväksy sinua laskuasiakkaaksi. Ole hyvä ja valitse toinen maksutapa.',
        'RESERVATION_NOT_APPROVED' => 'Valitettavasti emme hyväksy sinua laskuasiakkaaksi. Ole hyvä ja valitse toinen maksutapa.',
        'PURCHASE_AMOUNT_GREATER_THAN_MAX_CREDIT_AMOUNT' => 'Ostosten yhteissumma on liian suuri voidaksesi maksaa laskulla. Poista tuotteita tai valitse toinen maksutapa.',
        'INVALID_REGISTRATION_NUMBER' => 'Henkilötunnuksesi on virheellinen. Tarkista henkilötunnus ja yritä uudelleen.',
        'AGREEMENT_RULES_VALIDATION_FAILED' => 'Antamasi henkilötiedot eivät vastaa väestörekisterin henkilötietoja. Tarkista ja yritä uudelleen.',
        'UNHANDLED_EXCEPTION' => 'Tekninen vika. Ole hyvä ja yritä myöhemmin uudelleen tai valitse toinen maksutapa.',
    ];
    static public $NO = [
        'DENIED_TO_PURCHASE' => 'Dessverre ble du ikke godkjent for å handle på faktura, vær vennlig å velge et annet betalingsalternativ',
        'CREDIT_CHECK_DENIED' => 'Dessverre ble du ikke godkjent for å handle på faktura, vær vennlig å velge et annet betalingsalternativ',
        'RESERVATION_NOT_APPROVED' => 'Dessverre ble du ikke godkjent for å handle på faktura, vær vennlig å velge et annet betalingsalternativ',
        'PURCHASE_AMOUNT_GREATER_THAN_MAX_CREDIT_AMOUNT' => 'Verdien på din handlevogn er for stor for fakturabetaling, vennligst ta bort artikler eller velg et annet betalingsalternativ',
        'INVALID_REGISTRATION_NUMBER' => 'Personnummeret som du har tastet inn er ikke korrekt, vennligst kontroller tallene og forsøk igjen',
        'AGREEMENT_RULES_VALIDATION_FAILED' => 'Personopplysningene som du har lagt inn stemmer ikke overens med opplysningene i folkeregisteret, vennligst kontroller dette og forsøk igjen',
        'UNHANDLED_EXCEPTION' => 'Teknisk feil. Vennligst prøv igjen senere eller velg et annet betalingsalternativ',
    ];
    static public $DK = [
        'DENIED_TO_PURCHASE' => 'Desværre blev du ikke godkendt for at handle på faktura, var venlig og vælg et andet betalingsalternativ',
        'CREDIT_CHECK_DENIED' => 'Desværre blev du ikke godkendt for at handle på faktura, var venlig og vælg et andet betalingsalternativ',
        'RESERVATION_NOT_APPROVED' => 'Desværre blev du ikke godkendt for at handle på faktura, var venlig og vælg et andet betalingsalternativ',
        'PURCHASE_AMOUNT_GREATER_THAN_MAX_CREDIT_AMOUNT' => 'Værdien på din indkøbskurv er for stor for at betale mod faktura. Venligst fjern artikler eller vælg et andet betalingsalternativ',
        'INVALID_REGISTRATION_NUMBER' => 'Det indtastede personnummer er forkert. Kontrollér venligst, og prøv igen.',
        'AGREEMENT_RULES_VALIDATION_FAILED' => 'De angivne kontaktoplysninger stemmer ikke overens med dine oplysninger i folkeregisteret. Kontrollér venligst, og prøv igen.',
        'UNHANDLED_EXCEPTION' => 'Teknisk fejl, venligst forsøg senere eller vælg et andet betalingsalternativ',
    ];
    static public $DE = [
        'DENIED_TO_PURCHASE' => 'Leider wurden die Voraussetzungen für einen Kauf per Rechnung nicht erfüllt. Bitte wählen Sie eine andere Zahlungsalternative',
        'CREDIT_CHECK_DENIED' => 'Leider wurden die Voraussetzungen für einen Kauf per Rechnung nicht erfüllt. Bitte wählen Sie eine andere Zahlungsalternative',
        'RESERVATION_NOT_APPROVED' => 'Leider wurden die Voraussetzungen für einen Kauf per Rechnung nicht erfüllt. Bitte wählen Sie eine andere Zahlungsalternative',
        'PURCHASE_AMOUNT_GREATER_THAN_MAX_CREDIT_AMOUNT' => 'Der Wert Ihres Warenkorbes übersteigt den zulässigen Kaufwert per Rechnung. Bitte reduzieren Sie die Anzahl der Waren oder wählen Sie eine andere Zahlungsalternative.',
        'UNHANDLED_EXCEPTION' => 'Technischer Fehler. Bitte versuchen Sie es zu einem späteren Zeitpunkt erneut oder wählen Sie eine andere Zahlungsalternative.',
    ];
    static public $AT = [
        'DENIED_TO_PURCHASE' => 'Leider wurden die Voraussetzungen für einen Kauf per Rechnung nicht erfüllt. Bitte wählen Sie eine andere Zahlungsalternative',
        'CREDIT_CHECK_DENIED' => 'Leider wurden die Voraussetzungen für einen Kauf per Rechnung nicht erfüllt. Bitte wählen Sie eine andere Zahlungsalternative',
        'RESERVATION_NOT_APPROVED' => 'Leider wurden die Voraussetzungen für einen Kauf per Rechnung nicht erfüllt. Bitte wählen Sie eine andere Zahlungsalternative',
        'PURCHASE_AMOUNT_GREATER_THAN_MAX_CREDIT_AMOUNT' => 'Der Wert Ihres Warenkorbes übersteigt den zulässigen Kaufwert per Rechnung. Bitte reduzieren Sie die Anzahl der Waren oder wählen Sie eine andere Zahlungsalternative.',
        'UNHANDLED_EXCEPTION' => 'Technischer Fehler. Bitte versuchen Sie es zu einem späteren Zeitpunkt erneut oder wählen Sie eine andere Zahlungsalternative.',
    ];
    static public $NL = [
        'DENIED_TO_PURCHASE' => 'Helaas kom je niet in aanmerking voor betaling met een factuur. Kies een andere betaalmethode.',
        'CREDIT_CHECK_DENIED' => 'Helaas kom je niet in aanmerking voor betaling met een factuur. Kies een andere betaalmethode.',
        'RESERVATION_NOT_APPROVED' => 'Helaas kom je niet in aanmerking voor betaling met een factuur. Kies een andere betaalmethode.',
        'PURCHASE_AMOUNT_GREATER_THAN_MAX_CREDIT_AMOUNT' => 'Het aankoopbedrag is te hoog voor betaling met een factuur. Verlaag het bedrag of kies een andere betaalmethode.',
        'HOUSE_NUMBER_IS_OUT_OF_RANGE' => 'Huisnummer heeft een ongeldige waarde.',
        'CREDITVALIDATION_HOUSE_NUMBER_IS_REQUIRED' => 'Huisnummer is verplicht.',
        'INVALID_HOUSE_NUMBER' => 'Ongeldig huisnummer.',
        'UNHANDLED_EXCEPTION' => 'Technisch probleem. Probeer het later opnieuw of kies een andere betaalmethode.',
    ];
}
