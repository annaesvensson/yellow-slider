<p align="right"><a href="README-de.md">Deutsch</a> &nbsp; <a href="README.md">English</a> &nbsp; <a href="README-sv.md">Svenska</a></p>

# Slider 0.9.2

Bildgalleri med reglaget.

<p align="center"><img src="SCREENSHOT.png" alt="Skärmdump"></p>

## Hur man installerar ett tillägg

[Ladda ner ZIP-filen](https://github.com/annaesvensson/yellow-slider/archive/refs/heads/main.zip) och kopiera den till din `system/extensions` mapp. [Läs mer om tillägg](https://github.com/annaesvensson/yellow-update/tree/main/README-sv.md).

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

## Hur man visar bildtexter

Bildtexter kan konfigureras i språkinställningarna. Öppna filen `system/extensions/yellow-language.ini` och lägg till en ny rad för varje bild. En rad består av filnamn och beskrivning. Bildtexten visas när du håller muspekaren över en bild eller använder en skärmläsare.

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

Konfigurera bildtexter i språkinställningarna:

    Language: sv
    media/images/photo.jpg: Detta är en exempelbild
    media/images/photo-2387365-fika-time.jpg: Fika är en viktig del av vardagen i Sverige. Bild: Taylor Franz
    media/images/photo-2493837-lake-and-forest.jpg: Sjö och skog på sommaren. Bild: Anatoliy Gromov
    media/images/photo-album/screenshot-2020-01.png: En liten webbplats av Adam Engel från Sverige.

## Inställningar

Följande inställningar kan konfigureras i filen `system/extensions/yellow-system.ini`:

`SliderSorting` = gallerisortering, t.ex. `name`, `modified`, `size`  
`SliderStyle` = galleristil, t.ex. `loop`, `fade`, `slide`  
`SliderAutoplay` = spela upp bilder automatiskt, fördröjningstid i millisekunder  

## Tack

Detta tillägg innehåller [Splide 2.4.21](https://github.com/Splidejs/splide) av Naotoshi Fujita. Tack för ett bra jobb.

## Utvecklare

Anna Svensson. [Få hjälp](https://datenstrom.se/sv/yellow/help/).
