# Praktikum-I


### Naslov projekta:
 Moj Obrtnik
 
 
### Mentor: Mitja Gradišnik 

### Kazalo:

[Besedilo naloge](#besedilo-naloge)

[Verzije in funkcionalnosti](#verzije-in-funkcionalnosti)

[Zahteve in namestitev v sistem](#zahteve-in-namestitev)

[Podatkovna baza](#podatkovna-baza)

[Spletna stran](#spletna-stran)

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

## Zahteve in namestitev
Za namestitev potrebujete:
- XAMPP ali drugo podobno orodje
- Laravel

V direktoriju XAMPP poiščite mapo "htdocs" (default path:C:\xampp\htdocs) in vanj položite celoten direktorij MojObrtnik. V istem direktoriju XAMPP-a poiščite mapo "apache", nato odprite mapo "conf" in nazadnje odprite mapo "extra" (default path:C:\xampp\apache\conf\extra). Odprite datoteko "httpd-vhosts.conf" in dodajte: 

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

![Slika](https://github.com/Jure4321/Praktikum-I/blob/master/XAMPP.png)


Dostopajte do podatkovne baze na spletnem naslovu (http://localhost/phpmyadmin) in naredite novo podatkovno bazo poimenovano "mojobrtnik".

![SlikaBaza](https://github.com/Jure4321/Praktikum-I/blob/master/kreiranje_baze.png)

Iz repositorija v mapi "podatkovna baza" prenesite datoteko ["mojobrtnik.sql"](https://github.com/Jure4321/Praktikum-I/blob/master/podatkovna%20baza/mojobrtnik.sql) in jo shranite na željeno mesto.

V levem stolpcu izberite kreirano bazo ("mojobrtnik") in izberite "Uvozi" v zgornjem navigacijskem meniju. Datoteko "mojobrtnik.sql", ki ste jo prenesli v prejšnem koraku izberite z pomočjo gumba "Izberite datoteko". Nazadnje še poženete skripto z pomočjo gumba "Izvedi" v spodnjem delu strani.

![SlikaBazaVnos](https://github.com/Jure4321/Praktikum-I/blob/master/skripta.png)


Dostopajte do spletne strani preko URL naslova: obrtnik.test

## Podatkovna baza 

### ER diagram 
---
![1. Shema](https://github.com/Jure4321/Praktikum-I/blob/master/podatkovna%20baza/35156807_1997118590311821_7525599961853984768_n.png)

## Spletna stran




### Uporaba

## Avtorji

[<img alt="Tomaž Zajc" src="https://avatars3.githubusercontent.com/u/39370620?s=400&v=4" width="117">](https://github.com/Muziiix) |[<img alt="Marko Zmazek" src="https://avatars0.githubusercontent.com/u/39406652?s=400&v=4" width="117">](https://github.com/zmazk123) |[<img alt="Jure Turk" src="https://avatars3.githubusercontent.com/u/39335691?s=400&v=4" width="117">](https://github.com/Jure4321) |[<img alt="Dimitar Micevski" src="https://avatars1.githubusercontent.com/u/39406660?s=400&v=4" width="117">](https://github.com/DimitarMicevski) |[<img alt="Luka Gričar" src="https://avatars2.githubusercontent.com/u/33715913?s=400&v=4" width="117">](https://github.com/luks104) |
:---: |:---: |:---: |:---: |:---: |
[Tomaž Zajc](https://github.com/Muziiix) |[Marko Zmazek](https://github.com/zmazk123) |[Jure Turk](https://github.com/Jure4321) |[Dimitar Micevski](https://github.com/DimitarMicevski) |[Luka Gričar](https://github.com/luks104)

