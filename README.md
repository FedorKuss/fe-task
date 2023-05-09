## Setup ##
1. `composer install` # https://getcomposer.org/doc/00-intro.md
2. `npm install` # https://docs.npmjs.com/downloading-and-installing-node-js-and-npm
3. `symfony serve` - # instalace symfony cli https://symfony.com/download. Nebo lze použít jiný nástroj pro lokální server dle  vlastního výběru.

## Postup ##
Umístění souborů potřebných pro splnění zadání:

- HTML `templates/default/index.html.twig`

- CSS `assets/styles/app.scss`

- JS `assets/app.js`


Hotové řešení nahrajte do vlastního repozitáře dle vlastího výběru(Bitbucket, Github,...)

Pro splnění zadání nepoužívejte žádné externí knihovny. 

## Zadání ##

Vytvořte jednoduchou galerii pro tapety která se dá filtrovat pomocí kategorií.

- Při první návštěve stránky budou zobrazeny všechny obrázky. (Obrázky jsou již dostupné v šabloně. viz fce dump v šabloně `templates/default/index.html.twig`)

- uživatel si může vyfiltrovat výsledky podle kategorií nebo si zpětně zobrazit všechny obrázky. Filtrování se provede pomocí ajax requestu na url `/filter-wallpapers` zvolená kategorie se předává přes query parametr `category`. Odpověď ze serveru je ve formátu `JSON`. Dostupené kategorie jsou: 
    1. abstract
    2. cars
    3. nature
    4. all

- Vzhled galerie je na vás. Musí být ale přehledný, responzivní a uživatelsky přívětivý. 