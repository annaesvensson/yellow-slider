<p align="right"><a href="README-de.md">Deutsch</a> &nbsp; <a href="README.md">English</a> &nbsp; <a href="README-sv.md">Svenska</a></p>

# Slider 0.8.18

Bildergalerie mit Schieber.

<p align="center"><img src="SCREENSHOT.png?raw=true" alt="Bildschirmfoto"></p>

## Wie man eine Erweiterung installiert

[ZIP-Datei herunterladen](https://github.com/annaesvensson/yellow-slider/archive/refs/heads/main.zip) und in dein `system/extensions`-Verzeichnis kopieren. [Weitere Informationen zu Erweiterungen](https://github.com/annaesvensson/yellow-update/tree/main/README-de.md).

## Wie man eine Bildergalerie hinzufügt

Erstelle eine `[slider]`-Abkürzung.

Die folgenden Argumente sind verfügbar, alle bis auf das erste Argument sind optional:

`Pattern` = Dateiname als regulärer Ausdruck  
`Sorting` = Galeriesortierung, z.B. `name`, `modified`, `size`  
`Style` = Galeriestil, z.B. `loop`, `fade`, `slide`  
`Size` = Bildgröße, Pixel oder Prozent    
`Autoplay` = Bilder automatisch abspielen, Verzögerungszeit in Millisekunden  

Die Bildformate GIF, JPG, PNG und SVG werden unterstützt. Alle Mediendateien befinden sich im `media`-Verzeichnis. Das `media/images`-Verzeichnis ist zum Speichern von Bildern gedacht. Das `media/thumbnails`-Verzeichnis enthält Miniaturbilder. Man kann auch weitere Verzeichnisse hinzufügen und Dateien so organisieren wie man will.

## Wie man Bildunterschriften anzeigt

Bildunterschriften können in den Spracheinstellungen festgelegt werden. Öffne die Datei `system/extensions/yellow-language.ini` und füge für jedes Bild eine neue Zeile hinzu. Eine Zeile besteht aus Dateinamen und Beschreibung. Die Bildunterschrift wird angezeigt wenn man den Mauszeiger über ein Bild bewegt oder einen Bildschirmvorleser verwendet.

## Beispiele

Bildergalerie hinzufügen, unterschiedliche Sortierungen:

    [slider photo.*jpg name]
    [slider photo.*jpg modified]
    [slider photo.*jpg size]

Bildergalerie hinzufügen, unterschiedliche Größen:

    [slider photo.*jpg name loop 25%]
    [slider photo.*jpg name loop 50%]
    [slider photo.*jpg name loop 100%]

Bildergalerie aus einem Unterverzeichnis hinzufügen, unterschiedliche Größen:

    [slider photo-album/ name loop 25%]
    [slider photo-album/ name loop 50%]
    [slider photo-album/ name loop 100%]

Bildergalerie hinzufügen, mit unterschiedlichen Verzögerungszeiten abspielen:

    [slider photo.*jpg name loop 100% 1000]
    [slider photo.*jpg name loop 100% 2000]
    [slider photo.*jpg name loop 100% 5000]

Bildunterschriften in den Spracheinstellungen festlegen:

    Language: de
    media/images/photo.jpg: Das ist ein Beispielbild
    media/images/photo-2387365-fika-time.jpg: Fika ist ein wichtiger Teil des Lebens in Schweden. Bild: Taylor Franz
    media/images/photo-2493837-lake-and-forest.jpg: See und Wald im Sommer. Bild: Anatoliy Gromov
    media/images/photo-album/screenshot-2020-01.png: Eine kleine Webseite von Adam Engel aus Schweden.

## Einstellungen

Die folgenden Einstellungen können in der Datei `system/extensions/yellow-system.ini` vorgenommen werden:

`SliderSorting` = Galeriesortierung, z.B. `name`, `modified`, `size`  
`SliderStyle` = Galeriestil, z.B. `loop`, `fade`, `slide`  
`SliderAutoplay` = Bilder automatisch abspielen, Verzögerungszeit in Millisekunden  

## Danksagung

Diese Erweiterung enthält [Splide 2.4.21](https://github.com/Splidejs/splide) von Naotoshi Fujita. Danke für die gute Arbeit.

## Entwickler

Anna Svensson. [Hilfe finden](https://datenstrom.se/de/yellow/help/).
