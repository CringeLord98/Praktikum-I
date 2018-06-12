# Praktikum-I


### Naslov projekta:
 Moj Obrtnik

### Avtorji:
* Tomaž Zajc,
* Marko Zmazek,
* Jure Turk,
* Dimitar Micevski,
* Luka Gričar

### Kazalo:

[Besedilo naloge](#besedilo-naloge)

[Zahteve in namestitev v sistem](#zahteve-in-namestitev)

[Spletna stran](https://github.com/Jure4321/Praktikum-I/tree/master/spletna%20stran)

[Podatkovna baza](https://github.com/Jure4321/Praktikum-I/tree/master/podatkovna%20baza)

[Podatkovna baza](#podatkovna-baza)

### Besedilo naloge:

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


### Mentor: Mitja Gradišnik 


## Zahteve in namestitev:
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
![Slika](https://github.com/Jure4321/Praktikum-I/tree/master/XAMPP.png)

Dostopajte do spletne strani preko URL naslova: obrtnik.test

## Podatkovna baza 



### Shema (osnutek)
---
![1. Shema](https://github.com/Jure4321/Praktikum-I/blob/master/podatkovna%20baza/Osnutek.jpg)

### ER diagram 
---
![1. Shema](https://github.com/Jure4321/Praktikum-I/blob/master/podatkovna%20baza/35156807_1997118590311821_7525599961853984768_n.png)
## Spletna stran


## Implementacija

## Uporaba

