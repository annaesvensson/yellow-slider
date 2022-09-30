<p align="right"><a href="README-de.md">Deutsch</a> &nbsp; <a href="README.md">English</a> &nbsp; <a href="README-sv.md">Svenska</a></p>

# Slider 0.8.17

Bildgalleri med reglaget.

<p align="center"><img src="slider-screenshot.png?raw=true" alt="Skärmdump"></p>

## Hur man lägger till ett bildgalleri

Skapa en `[slider]` förkortning.

Följande argument är tillgängliga, alla utom det första argumentet är valfria:

`Pattern` = filnamn som reguljära uttryck  
`Sorting` = gallerisortering, t.ex. `name`, `modified`, `size`  
`Style` = galleristil, t.ex. `loop`, `fade`, `slide`  
`Size` = bildstorlek, pixel eller procent  
`Autoplay` = spela upp bilder automatiskt, fördröjningstid i millisekunder  

Bildformaten GIF, JPG, PNG och SVG stöds. Alla mediefiler finns i `media` mappen.
Mappen `media/images` är platsen för att lagra dina bilder. Mappen `media/thumbnails` innehåller miniatyrbilder. Du kan också skapa ytterligare mappar och organisera filer som du vill.

## Exempel

Lägga till ett bildgalleri, olika sorteringar:

    [slider photo.*jpg name]
    [slider photo.*jpg modified]
    [slider photo.*jpg size]

Lägga till ett bildgalleri, olika storlekar:

    [slider photo.*jpg name loop 25%]
    [slider photo.*jpg name loop 50%]
    [slider photo.*jpg name loop 100%]

Lägga till ett bildgalleri från en undermapp, olika storlekar:

    [slider photo-album/ name loop 25%]
    [slider photo-album/ name loop 50%]
    [slider photo-album/ name loop 100%]

Lägga till ett bildgalleri, spela upp med olika fördröjningstider:

    [slider photo.*jpg name loop 100% 1000]
    [slider photo.*jpg name loop 100% 2000]
    [slider photo.*jpg name loop 100% 5000]

## Inställningar

Följande inställningar kan konfigureras i filen `system/extensions/yellow-system.ini`:

`SliderSorting` = gallerisortering, t.ex. `name`, `modified`, `size`  
`SliderStyle` = galleristil, t.ex. `loop`, `fade`, `slide`  
`SliderAutoplay` = spela upp bilder automatiskt, fördröjningstid i millisekunder  

## Installation

[Ladda ner tillägg](https://github.com/annaesvensson/yellow-slider/archive/main.zip) och kopiera zip-fil till din `system/extensions` mapp. Högerklicka om du använder Safari.

Detta tilläg använder [Splide 2.4.21](https://github.com/Splidejs/splide) av Naotoshi Fujita.

## Utvecklare

Datenstrom. [Få hjälp](https://datenstrom.se/sv/yellow/help/).
