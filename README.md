# Praktikum-I


### Naslov projekta:
 Moj Obrtnik
 
### Mentor: Mitja Gradišnik 

### Kazalo:

[Besedilo naloge](#besedilo-naloge)

[Verzije in funkcionalnosti](#verzije-in-funkcionalnosti)

[Zahteve in namestitev v sistem za razvijalce](#zahteve-in-namestitev-za-razvijalce)

[Zahteve in namestitev v sistem za končne uporabnike](#zahteve-in-namestitev-za-končne-uporabnike)

[Podatkovna baza](#podatkovna-baza)

[Poročilo](#poročilo)

### Besedilo naloge

Načrtujte in izdelajte sistem, ki bo uporabnikov v pomoč pri iskanju obrtnikov ter pošiljanja poizvedb
za želena obrtniška dela.
V okviru sistema vzpostavite spletno stran, ki bo obiskovalcem omogočala pregled obrtnikov izbrane
gospodarske kategorije ter storitev, ki jih ti obrtniki ponujajo. Vsakemu izmed obrtnikov, ki
sodelujejo v spletni skupnosti omogočite, da na portalu strukturirano predstavijo sebe ter storitev, ki
jih ponujajo (podprite samo obrtnike, ki so storitveno usmerjeni).
Ker je vtis predhodnih odjemalcev storitev obrtnika ključen za proces odločanja o najemu obrtnika,
odjemalcem portala omogočite komentiranje storitev obrtnikov.
Da bi lahko uporabniki portala lažje našli ustreznega obrtnika, implementirajte tudi napredno iskanje
po razpoložljivih obrtnikih.
Uporabnik naj ima možnost povpraševanja pri izbranem obrtniku.

### Specifikacije
-	Iskanje obrtnikov
-	Pošiljanje poizvedb (naročil)
-	Pregled storitev glede na izbrane kriterije
-	Predstavitev Obrtnika 
-	Komentiranje storitev 
-	Napredno iskanje 
-	Možnost povpraševanja pri izbranem obrtniku

 

## Verzije in funkcionalnosti

| Verzija           | Funkcionalnosti|
| ----------------- |------------------------------|
| `1.0`             | `- Povezave med posameznimi stranmi, dodelana podatkovna baza`                     |
| `2.0`             | `- Implementacija registracije in vpisa`                                           |
| `3.0`             | `- Implementacija objavljanja storitev in naročanja`                               |
| `4.0`             | `- Implementacija iskalnika in urejanje profila in storitve`                       |
| `5.0`             | `- Implementacija komentarjev in ocen`                                             |
| `6.0`             | `- Zadnji popravki in testirana delujoča finalna verzija z vsemi funkcionalnostmi` |

## Zahteve in namestitev za razvijalce
Za namestitev potrebujete:
- XAMPP ali drugo podobno orodje
- Laravel

V direktoriju XAMPP poiščite mapo "htdocs" (default path:C:\xampp\htdocs) in vanj položite celoten projekt [Obrtnik](https://github.com/Jure4321/Praktikum-I/tree/master/Obrtnik%20-%20finalna%20verzija/Obrtnik). V istem direktoriju XAMPP-a poiščite mapo "apache", nato odprite mapo "conf" in nazadnje odprite mapo "extra" (default path:C:\xampp\apache\conf\extra). Odprite datoteko "httpd-vhosts.conf" in dodajte: 

```
<VirtualHost *:80>
    DocumentRoot "C:/xampp/htdocs/Obrtnik/public"
    ServerName obrtnik.test
</VirtualHost>

<VirtualHost *:80>
    DocumentRoot "C:/xampp/htdocs"
    ServerName localhost
</VirtualHost> 
```
Nato kot administrator odprite datoteko "hosts" ki se nahaja na direktoriju: (C:\Windows\System32\drivers\etc) ter dodajte:
```
127.0.0.1 localhost
127.0.0.1 obrtnik.test
```

Zaženite program XAMPP in poženite Apache in mySQL procesa z klikom na gumb "Start".

<img alt="[Slika]" src="https://github.com/Jure4321/Praktikum-I/blob/master/XAMPP.png" width="500">

Dostopajte do podatkovne baze na spletnem naslovu (http://localhost/phpmyadmin) in naredite novo podatkovno bazo poimenovano "mojobrtnik".

<img alt="[SlikaBaza]" src="https://github.com/Jure4321/Praktikum-I/blob/master/kreiranje_baze.png" width="500">

Iz github repositorija v mapi "podatkovna baza" prenesite datoteko ["mojobrtnik.sql"](https://github.com/Jure4321/Praktikum-I/blob/master/podatkovna%20baza/mojobrtnik.sql) in jo shranite na željeno mesto.

V levem stolpcu izberite kreirano bazo ("mojobrtnik") in izberite "Uvozi" v zgornjem navigacijskem meniju. Datoteko "mojobrtnik.sql", ki ste jo prenesli v prejšnem koraku izberite z pomočjo gumba "Izberite datoteko". Nazadnje še poženete skripto z pomočjo gumba "Izvedi" v spodnjem delu strani.

<img alt="[SlikaBazaVnos]" src="https://github.com/Jure4321/Praktikum-I/blob/master/skripta.png" width="800">


Dostopajte do spletne strani preko URL naslova: obrtnik.test


## Zahteve in namestitev za končne uporabnike
Za namestitev potrebujete:
- FTP dostop (izberite enega od ponudnikov)
- klient ["WinSCP"](https://winscp.net/eng/download.php) (ali ekvivalenten program)
- zadosten prostor na disku
- zadostno hitrost interneta

V nadzorni plošči ustvarite novo podatkovno bazo in jo poimenujte"mojobrtnik". Ustvarite nov račun z poljubnim uporabniškim imenom in geslom ter mu omogočite dostop do kreirane baze "mojobrtnik". Iz github repositorija prenesite datoteko ["mojobrtnik.sql"](https://github.com/Jure4321/Praktikum-I/blob/master/podatkovna%20baza/mojobrtnik.sql) in jo shranite na poljubno mesto na vašem računalniku. Na nadzorni plošči izberite dostop do konfiguracije vaše podatkovne baze "mojobrtnik" (v večini primerov je link poimenovan "phpMyAdmin"). Odprla se vam bo stran, na kateri lahko urejate podatkovno bazo. V zgornjem navigacijskem meniju izberite "Uvozi" (angl. "Import") in pritisnite na gumb "Izberite datoteko" (angl. "Choose file"). Izberite datoteko ["mojobrtnik.sql"](https://github.com/Jure4321/Praktikum-I/blob/master/podatkovna%20baza/mojobrtnik.sql), katero ste prenesli na svoj računalnik. Po končanem izboru, spremembe še potrdite z pritiskom na gumb "Izvedi" (angl. "Go").  Baza je ustvarjena.

<img alt="[SlikaBazaVnos]" src="https://github.com/Jure4321/Praktikum-I/blob/master/skripta.png" width="800">

Odprite klient "WinSCP" in vnesite vaše podatke za vpis v vaš račun ponudnika storitev FTP. Po uspešnem vpisu se vam bodo naložile vaše datoteke. 

<img alt="[SlikaWInSCP]" src="https://github.com/Jure4321/Praktikum-I/blob/master/WinSCP.png" width="600">

Prenesite celoten projekt ["Obrtnik 6.0 - final"](https://github.com/Jure4321/Praktikum-I/tree/master/Obrtnik%206.0%20-%20final/Obrtnik) in ga shranite na vaš računalnik. V klientu "WinSCP" ustvarite novo mapo z imenom "Obrtnik" in vanj prenesite vso vsebino iz projekta, ki ste ga shranili na vaš računalnik, razen mape "public".

<img alt="[SlikaIzborDatotek]" src="https://github.com/Jure4321/Praktikum-I/blob/master/Izbor_datotek.png" width="600">

V WinSCP poiščite mapo "public_html" in vanj prenesite vso vsebino iz mape "public", ki se nahaja v prenešenem projektu.

<img alt="[SlikaPublic]" src="https://github.com/Jure4321/Praktikum-I/blob/master/public.png" width="700">

Po uspešnem prenosu vsebine projekta, v klientu "WinSCP" odprite mapo "public_html", in odprite datoteko index.php. V tej datoteki boste spremenili dve vrstici kode:

```
23 |
24 | require __DIR__.'/../vendor/autoload.php'; ---> require __DIR__.'/../Obrtnik/vendor/autoload.php';
25 |
```
in
```
37 |
38 | $app = require_once __DIR__.'/../bootstrap/app.php'; ---> $app = require_once __DIR__.'/../Obrtnik/bootstrap/app.php';
39 |
```

Nato v klientu "WinSCP" odprite mapo "Obrtnik" in v njen poiščite datoteko ".env", ki jo odprete. V njej poiščite odsek za podatkovno bazo in jo uredite:

```
8  |
9  |   DB_CONNECTION=mysql
10 |   DB_HOST=127.0.0.1
11 |   DB_PORT=3306
12 |   DB_DATABASE= ---> Ime vaše baze, ki ste ga nastavili ob kreiranju <---
13 |   DB_USERNAME= ---> Uporabniško ime, ki ima dostop do vaše baze <---
14 |   DB_PASSWORD= ---> Geslo za dostop do vaše baze <---
15 |
```

V mapi "public_html" ustvarite novo datoteko po imenu "Symlink-create.php" in jo odprite. Noter vstavite spodaj prikazano vrstico in shranite.

```
<?php
symlink('/home/---> ime vaše mape pri ponudniku <---/Obrtnik/storage/app/public', home/---> ime vaše mape pri ponudniku <---/public_html/storage);
```

V brskalniku v url vrstico napišite: www.--> vaš url <---.com/Symlink-create.php, kar bo pognalo kodo v datoteki, ki smo jo ustvarili prej in nam omogočilo nalaganje in ogled slik na vaši spletni strani.

Vaša spletna stran je na voljo za uporabo.

## Podatkovna baza 

### ER diagram 
---
![1. Shema](https://github.com/Jure4321/Praktikum-I/blob/master/podatkovna%20baza/35156807_1997118590311821_7525599961853984768_n.png)

## Poročilo

Tu imate na voljo celotno [poročilo](https://github.com/Jure4321/Praktikum-I/blob/master/porocilo/Praktikum%20I.pdf) v katerem so opisani projekt, specifikacije, uporabljena orodja, podatkovna baza, uporabniški vmesnik, komponente, varnost in testiranje.

## Avtorji

[<img alt="Tomaž Zajc" src="https://avatars3.githubusercontent.com/u/39370620?s=400&v=4" width="117">](https://github.com/Muziiix) |[<img alt="Marko Zmazek" src="https://avatars0.githubusercontent.com/u/39406652?s=400&v=4" width="117">](https://github.com/zmazk123) |[<img alt="Jure Turk" src="https://avatars3.githubusercontent.com/u/39335691?s=400&v=4" width="117">](https://github.com/Jure4321) |[<img alt="Dimitar Micevski" src="https://avatars1.githubusercontent.com/u/39406660?s=400&v=4" width="117">](https://github.com/DimitarMicevski) |[<img alt="Luka Gričar" src="https://avatars2.githubusercontent.com/u/33715913?s=400&v=4" width="117">](https://github.com/luks104) |
:---: |:---: |:---: |:---: |:---: |
[Tomaž Zajc](https://github.com/Muziiix) |[Marko Zmazek](https://github.com/zmazk123) |[Jure Turk](https://github.com/Jure4321) |[Dimitar Micevski](https://github.com/DimitarMicevski) |[Luka Gričar](https://github.com/luks104)

