<?php

use Symfony\Component\Translation\MessageCatalogue;

$catalogue = new MessageCatalogue('bs', array (
  'validators' => 
  array (
    'This value should be false.' => 'Ova vrijednost bi trebalo da bude "netačno" (false).',
    'This value should be true.' => 'Ova vrijednost bi trebalo da bude "tačno" (true).',
    'This value should be of type {{ type }}.' => 'Ova vrijednost bi trebalo da bude tipa {{ type }}.',
    'This value should be blank.' => 'Ova vrijednost bi trebalo da bude prazna.',
    'The value you selected is not a valid choice.' => 'Odabrana vrijednost nije validan izbor.',
    'You must select at least {{ limit }} choice.|You must select at least {{ limit }} choices.' => 'Morate odabrati barem {{ limit }} mogućnost.|Morate odabrati barem {{ limit }} mogućnosti.|Morate odabrati barem {{ limit }} mogućnosti.  ',
    'You must select at most {{ limit }} choice.|You must select at most {{ limit }} choices.' => 'Morate odabrati najviše {{ limit }} mogućnost.|Morate odabrati najviše {{ limit }} mogućnosti.|Morate odabrati najviše {{ limit }} mogućnosti.',
    'One or more of the given values is invalid.' => 'Jedna ili više datih vrijednosti nisu validne.',
    'This field was not expected.' => 'Ovo polje nije očekivano.',
    'This field is missing.' => 'Ovo polje nedostaje.',
    'This value is not a valid date.' => 'Ova vrijednost nije ispravan datum.',
    'This value is not a valid datetime.' => 'Ova vrijednost nije ispravnog datum-vrijeme (datetime) formata.',
    'This value is not a valid email address.' => 'Ova vrijednost nije ispravna e-mail adresa.',
    'The file could not be found.' => 'Ova datoteka ne može biti pronađena.',
    'The file is not readable.' => 'Ova datoteka nije čitljiva.',
    'The file is too large ({{ size }} {{ suffix }}). Allowed maximum size is {{ limit }} {{ suffix }}.' => 'Ova datoteka je prevelika ({{ size }} {{ suffix }}). Najveća dozvoljena veličina je {{ limit }} {{ suffix }}.',
    'The mime type of the file is invalid ({{ type }}). Allowed mime types are {{ types }}.' => 'Mime tip datoteke nije ispravan ({{ type }}). Dozvoljeni mime tipovi su {{ types }}.',
    'This value should be {{ limit }} or less.' => 'Ova vrijednost bi trebalo da bude {{ limit }} ili manje.',
    'This value is too long. It should have {{ limit }} character or less.|This value is too long. It should have {{ limit }} characters or less.' => 'Ova vrijednost je predugačka. Trebalo bi da ima {{ limit }} karakter ili manje.|Ova vrijednost je predugačka. Trebalo bi da ima {{ limit }} karaktera ili manje.|Ova vrijednost je predugačka. Trebalo bi da ima {{ limit }} karaktera ili manje.',
    'This value should be {{ limit }} or more.' => 'Ova vrijednost bi trebalo da bude {{ limit }} ili više.',
    'This value is too short. It should have {{ limit }} character or more.|This value is too short. It should have {{ limit }} characters or more.' => 'Ova vrijednost je prekratka. Trebalo bi da ima {{ limit }} karakter ili više.|Ova vrijednost je prekratka. Trebalo bi da ima {{ limit }} karaktera ili više.|Ova vrijednost je prekratka. Trebalo bi da ima {{ limit }} karaktera ili više.',
    'This value should not be blank.' => 'Ova vrijednost ne bi trebalo da bude prazna.',
    'This value should not be null.' => 'Ova vrijednost ne bi trebalo da bude null.',
    'This value should be null.' => 'Ova vrijednost bi trebalo da bude null.',
    'This value is not valid.' => 'Ova vrijednost nije ispravna.',
    'This value is not a valid time.' => 'Ova vrijednost nije ispravno vrijeme.',
    'This value is not a valid URL.' => 'Ova vrijednost nije ispravan URL.',
    'The two values should be equal.' => 'Obje vrijednosti bi trebalo da budu jednake.',
    'The file is too large. Allowed maximum size is {{ limit }} {{ suffix }}.' => 'Ova datoteka je prevelika. Najveća dozvoljena veličina je {{ limit }} {{ suffix }}.',
    'The file is too large.' => 'Ova datoteka je prevelika.',
    'The file could not be uploaded.' => 'Ova datoteka ne može biti prenijeta (uploaded).',
    'This value should be a valid number.' => 'Ova vrijednost bi trebalo da bude ispravan broj.',
    'This file is not a valid image.' => 'Ova datoteka nije validna slika.',
    'This is not a valid IP address.' => 'Ovo nije ispravna IP adresa.',
    'This value is not a valid language.' => 'Ova vrijednost nije validan jezik.',
    'This value is not a valid locale.' => 'Ova vrijednost nije validna regionalna oznaka.',
    'This value is not a valid country.' => 'Ova vrijednost nije validna država.',
    'This value is already used.' => 'Ova vrijednost je već upotrebljena.',
    'The size of the image could not be detected.' => 'Nije moguće otkriti veličinu ove slike.',
    'The image width is too big ({{ width }}px). Allowed maximum width is {{ max_width }}px.' => 'Širina slike je prevelika ({{ width }}px). Najveća dozvoljena širina je {{ max_width }}px.',
    'The image width is too small ({{ width }}px). Minimum width expected is {{ min_width }}px.' => 'Širina slike je premala ({{ width }}px). Najmanja dozvoljena širina je {{ min_width }}px.',
    'The image height is too big ({{ height }}px). Allowed maximum height is {{ max_height }}px.' => 'Dužina slike je prevelika ({{ height }}px). Najveća dozvoljena dužina je {{ max_height }}px.',
    'The image height is too small ({{ height }}px). Minimum height expected is {{ min_height }}px.' => 'Dužina slike je premala ({{ height }}px). Najmanja dozvoljena dužina je {{ min_height }}px.',
    'This value should be the user\'s current password.' => 'Ova vrijednost bi trebalo da bude trenutna korisnička lozinka.',
    'This value should have exactly {{ limit }} character.|This value should have exactly {{ limit }} characters.' => 'Ova vrijednost bi trebalo da ima tačno {{ limit }} karakter.|Ova vrijednost bi trebalo da ima tačno {{ limit }} karaktera.',
    'The file was only partially uploaded.' => 'Datoteka je samo djelimično prenijeta (uploaded).',
    'No file was uploaded.' => 'Nijedna datoteka nije prenijeta (uploaded).',
    'No temporary folder was configured in php.ini.' => 'Privremeni direktorijum nije konfigurisan u datoteci php.ini.',
    'Cannot write temporary file to disk.' => 'Privremenu datoteku nije moguće upisati na disk.',
    'A PHP extension caused the upload to fail.' => 'Prenos datoteke nije uspio zbog PHP ekstenzije.',
    'This collection should contain {{ limit }} element or more.|This collection should contain {{ limit }} elements or more.' => 'Ova kolekcija bi trebalo da sadrži {{ limit }} ili više elemenata.|Ova kolekcija bi trebalo da sadrži {{ limit }} ili više elemenata.|Ova kolekcija bi trebalo da sadrži {{ limit }} ili više elemenata.',
    'This collection should contain {{ limit }} element or less.|This collection should contain {{ limit }} elements or less.' => 'Ova kolekcija bi trebalo da sadrži {{ limit }} ili manje elemenata.|Ova kolekcija bi trebalo da sadrži {{ limit }} ili manje elemenata.|Ova kolekcija bi trebalo da sadrži {{ limit }} ili manje elemenata.',
    'This collection should contain exactly {{ limit }} element.|This collection should contain exactly {{ limit }} elements.' => 'Ova kolekcija bi trebalo da sadrži tačno {{ limit }} element.|Ova kolekcija bi trebalo da sadrži tačno {{ limit }} elementa.|Ova kolekcija bi trebalo da sadrži tačno {{ limit }} elemenata.',
    'Invalid card number.' => 'Broj kartice je neispravan.',
    'Unsupported card type or invalid card number.' => 'Tip kartice nije podržan ili je broj kartice neispravan.',
    'This is not a valid International Bank Account Number (IBAN).' => 'Ova vrijednost nije ispravan međunarodni broj bankovnog računa (IBAN).',
    'This value is not a valid ISBN-10.' => 'Ova vrijednost nije ispravan ISBN-10.',
    'This value is not a valid ISBN-13.' => 'Ova vrijednost nije ispravan ISBN-13.',
    'This value is neither a valid ISBN-10 nor a valid ISBN-13.' => 'Ova vrijednost nije ispravan ISBN-10 niti ISBN-13.',
    'This value is not a valid ISSN.' => 'Ova vrijednost nije ispravan ISSN.',
    'This value is not a valid currency.' => 'Ova vrijednost nije ispravna valuta.',
    'This value should be equal to {{ compared_value }}.' => 'Ova vrijednost bi trebalo da bude jednaka {{ compared_value }}.',
    'This value should be greater than {{ compared_value }}.' => 'Ova vrijednost bi trebalo da bude veća od {{ compared_value }}.',
    'This value should be greater than or equal to {{ compared_value }}.' => 'Ova vrijednost bi trebalo da bude jednaka ili veća od {{ compared_value }}.',
    'This value should be identical to {{ compared_value_type }} {{ compared_value }}.' => 'Ova vrijednost bi trebalo da bude identična {{ compared_value_type }} {{ compared_value }}.',
    'This value should be less than {{ compared_value }}.' => 'Ova vrijednost bi trebalo da bude manja od {{ compared_value }}.',
    'This value should be less than or equal to {{ compared_value }}.' => 'Ova vrijednost bi trebalo da bude jednaka ili manja od {{ compared_value }}.',
    'This value should not be equal to {{ compared_value }}.' => 'Ova vrijednost bi trebalo da bude različita od {{ compared_value }}.',
    'This value should not be identical to {{ compared_value_type }} {{ compared_value }}.' => 'Ova vrijednost bi trebalo da bude identična sa {{ compared_value_type }} {{ compared_value }}.',
    'The image ratio is too big ({{ ratio }}). Allowed maximum ratio is {{ max_ratio }}.' => 'Razmjera ove slike je prevelika ({{ ratio }}). Maksimalna dozvoljena razmjera je {{ max_ratio }}.',
    'The image ratio is too small ({{ ratio }}). Minimum ratio expected is {{ min_ratio }}.' => 'Razmjera ove slike je premala ({{ ratio }}). Minimalna očekivana razmjera je {{ min_ratio }}.',
    'The image is square ({{ width }}x{{ height }}px). Square images are not allowed.' => 'Ova slika je kvadratnog oblika ({{ width }}x{{ height }}px). Kvadratne slike nisu dozvoljene.',
    'The image is landscape oriented ({{ width }}x{{ height }}px). Landscape oriented images are not allowed.' => 'Ova slika je orijentisana horizontalno (landscape) ({{ width }}x{{ height }}px). Horizontalno orijentisane slike nisu dozvoljene.',
    'The image is portrait oriented ({{ width }}x{{ height }}px). Portrait oriented images are not allowed.' => 'Ova slika je orijentisana vertikalno (portrait) ({{ width }}x{{ height }}px). Vertikalno orijentisane slike nisu dozvoljene.',
    'An empty file is not allowed.' => 'Prazna datoteka nije dozvoljena.',
    'The host could not be resolved.' => 'Nije moguće odrediti poslužitelja (host).',
    'This value does not match the expected {{ charset }} charset.' => 'Ova vrijednost ne odgovara očekivanom {{ charset }} setu karaktera (charset).',
    'This is not a valid Business Identifier Code (BIC).' => 'Ovo nije validan poslovni identifikacioni kod (BIC).',
    'Error' => 'Greška',
    'This is not a valid UUID.' => 'Ovo nije validan UUID.',
    'This value should be a multiple of {{ compared_value }}.' => 'Ova vrijednost bi trebalo da bude djeljiva sa {{ compared_value }}.',
    'This Business Identifier Code (BIC) is not associated with IBAN {{ iban }}.' => 'Ovaj poslovni identifikacioni kod (BIC) nije povezan sa IBAN-om {{ iban }}.',
    'This value should be valid JSON.' => 'Ova vrijednost bi trebalo da bude validan JSON.',
    'This collection should contain only unique elements.' => 'Ova kolekcija bi trebala da sadrži samo jedinstvene elemente.',
    'This value should be positive.' => 'Ova vrijednost bi trebalo da bude pozitivna.',
    'This value should be either positive or zero.' => 'Ova vrijednost bi trebalo da bude pozitivna ili jednaka nuli.',
    'This value should be negative.' => 'Ova vrijednost bi trebalo da bude negativna.',
    'This value should be either negative or zero.' => 'Ova vrijednost bi trebalo da bude negativna ili jednaka nuli.',
    'This value is not a valid timezone.' => 'Ova vrijednost nije validna vremenska zona.',
    'This password has been leaked in a data breach, it must not be used. Please use another password.' => 'Ova lozinka je procurila u nekom od slučajeva kompromitovanja podataka, nemojte je koristiti. Koristite drugu lozinku.',
    'This value should be between {{ min }} and {{ max }}.' => 'Ova vrijednosti bi trebala biti između {{ min }} i {{ max }}.',
    'This value is not a valid hostname.' => 'Ova vrijednost nije ispravno ime poslužitelja (hostname).',
    'The number of elements in this collection should be a multiple of {{ compared_value }}.' => 'Broj elemenata u ovoj kolekciji bi trebalo da bude djeljiv sa {{ compared_value }}.',
    'This value should satisfy at least one of the following constraints:' => 'Ova vrijednost bi trebalo da zadovoljava namjanje jedno od narednih ograničenja:',
    'Each element of this collection should satisfy its own set of constraints.' => 'Svaki element ove kolekcije bi trebalo da zadovolji sopstveni skup ograničenja.',
    'This value is not a valid International Securities Identification Number (ISIN).' => 'Ova vrijednost nije ispravna međunarodna identifikaciona oznaka hartija od vrijednosti (ISIN).',
    'This form should not contain extra fields.' => 'Ovaj obrazac ne bi trebalo da sadrži dodatna polja.',
    'The uploaded file was too large. Please try to upload a smaller file.' => 'Prenijeta (uploaded) datoteka je prevelika. Molim pokušajte prenijeti manju datoteku.',
    'The CSRF token is invalid. Please try to resubmit the form.' => 'CSRF vrijednost nije ispravna. Molim pokušajte ponovo da pošaljete obrazac.',
    'This value is not a valid HTML5 color.' => 'Ova vrijednost nije ispravna HTML5 boja.',
    'Please enter a valid birthdate.' => 'Molim upišite ispravan datum rođenja.',
    'The selected choice is invalid.' => 'Odabrani izbor nije ispravan.',
    'The collection is invalid.' => 'Ova kolekcija nije ispravna.',
    'Please select a valid color.' => 'Molim izaberite ispravnu boju.',
    'Please select a valid country.' => 'Molim izaberite ispravnu državu.',
    'Please select a valid currency.' => 'Molim izaberite ispravnu valutu.',
    'Please choose a valid date interval.' => 'Molim izaberite ispravan datumski interval.',
    'Please enter a valid date and time.' => 'Molim upišite ispravan datum i vrijeme.',
    'Please enter a valid date.' => 'Molim upišite ispravan datum.',
    'Please select a valid file.' => 'Molim izaberite ispravnu datoteku.',
    'The hidden field is invalid.' => 'Skriveno polje nije ispravno.',
    'Please enter an integer.' => 'Molim upišite cijeli broj (integer).',
    'Please select a valid language.' => 'Molim izaberite ispravan jezik.',
    'Please select a valid locale.' => 'Molim izaberite ispravnu lokalizaciju.',
    'Please enter a valid money amount.' => 'Molim upišite ispravnu količinu novca.',
    'Please enter a number.' => 'Molim upišite broj.',
    'The password is invalid.' => 'Ova lozinka nije ispravna.',
    'Please enter a percentage value.' => 'Molim upišite procentualnu vrijednost.',
    'The values do not match.' => 'Date vrijednosti se ne poklapaju.',
    'Please enter a valid time.' => 'Molim upišite ispravno vrijeme.',
    'Please select a valid timezone.' => 'Molim izaberite ispravnu vremensku zonu.',
    'Please enter a valid URL.' => 'Molim upišite ispravan URL.',
    'Please enter a valid search term.' => 'Molim upišite ispravan termin za pretragu.',
    'Please provide a valid phone number.' => 'Molim navedite ispravan broj telefona.',
    'The checkbox has an invalid value.' => 'Polje za potvrdu sadrži neispravnu vrijednost.',
    'Please enter a valid email address.' => 'Molim upišite ispravnu email adresu.',
    'Please select a valid option.' => 'Molim izaberite ispravnu opciju.',
    'Please select a valid range.' => 'Molim izaberite ispravan opseg.',
    'Please enter a valid week.' => 'Molim upišite ispravnu sedmicu.',
  ),
  'security' => 
  array (
    'An authentication exception occurred.' => 'Došlo je do autentifikacijskog izuzetka (exception).',
    'Authentication credentials could not be found.' => 'Autentifikacijski podaci nisu pronađeni.',
    'Authentication request could not be processed due to a system problem.' => 'Autentifikacijski zahtjev ne može biti obrađen zbog sistemskog problema.',
    'Invalid credentials.' => 'Autentifikacijski podaci su neispravni.',
    'Cookie has already been used by someone else.' => 'Neko drugi je već iskoristio ovaj kolačić (cookie).',
    'Not privileged to request the resource.' => 'Nemate privilegije potrebne za pristup ovom resursu.',
    'Invalid CSRF token.' => 'CSRF žeton (token) je neispravan.',
    'No authentication provider found to support the authentication token.' => 'Nije pronađen autentifikacijski provajder koji bi podržao dati autentifikacijski žeton (token).',
    'No session available, it either timed out or cookies are not enabled.' => 'Nema dostupnih sesija; ili je istekla ili su kolačići (cookies) iksljučeni.',
    'No token could be found.' => 'Nije pronađen nijedan žeton (token).',
    'Username could not be found.' => 'Korisničko ime nije pronađeno.',
    'Account has expired.' => 'Nalog je istekao.',
    'Credentials have expired.' => 'Autentifikacijski podaci su istekli.',
    'Account is disabled.' => 'Nalog je onemogućen.',
    'Account is locked.' => 'Nalog je zaključan.',
    'Too many failed login attempts, please try again later.' => 'Previše neuspješnih pokušaja prijavljivanja, molim pokušajte ponovo kasnije.',
    'Invalid or expired login link.' => 'Link za prijavljivanje je istekao ili je neispravan.',
  ),
));

$catalogueFr_FR = new MessageCatalogue('fr_FR', array (
));
$catalogue->addFallbackCatalogue($catalogueFr_FR);

return $catalogue;