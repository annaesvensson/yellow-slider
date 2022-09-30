<p align="right"><a href="README-de.md">Deutsch</a> &nbsp; <a href="README.md">English</a> &nbsp; <a href="README-sv.md">Svenska</a></p>

# Slider 0.8.17

Image gallery with slider.

<p align="center"><img src="slider-screenshot.png?raw=true" alt="Screenshot"></p>

## How to add an image gallery

Create a `[slider]` shortcut.

The following arguments are available, all but the first argument are optional:

`Pattern` = file name as regular expression  
`Sorting` = gallery sorting, e.g. `name`, `modified`, `size`  
`Style` = gallery style, e.g. `loop`, `fade`, `slide`  
`Size` = image size, pixel or percent  
`Autoplay` = play images automatically, delay time in milliseconds  

The image formats GIF, JPG, PNG and SVG are supported. All media files are located in the `media` folder. The `media/images` folder is the place to store your images. The `media/thumbnails` folder contains image thumbnails. You can also create additional folders and organise files as you like.

## Examples

Adding an image gallery, different sortings:

    [slider photo.*jpg name]
    [slider photo.*jpg modified]
    [slider photo.*jpg size]

Adding an image gallery, different sizes:

    [slider photo.*jpg name loop 25%]
    [slider photo.*jpg name loop 50%]
    [slider photo.*jpg name loop 100%]

Adding an image gallery from a subfolder, different sizes:

    [slider photo-album/ name loop 25%]
    [slider photo-album/ name loop 50%]
    [slider photo-album/ name loop 100%]

Adding an image gallery, play with different delays:

    [slider photo.*jpg name loop 100% 1000]
    [slider photo.*jpg name loop 100% 2000]
    [slider photo.*jpg name loop 100% 5000]

## Settings

The following settings can be configured in file `system/extensions/yellow-system.ini`:

`SliderSorting` = gallery sorting, e.g. `name`, `modified`, `size`  
`SliderStyle` = gallery style, e.g. `loop`, `fade`, `slide`  
`SliderAutoplay` = play images automatically, delay time in milliseconds  

## Installation

[Download extension](https://github.com/annaesvensson/yellow-slider/archive/main.zip) and copy zip file into your `system/extensions` folder. Right click if you use Safari.

This extension uses [Splide 2.4.21](https://github.com/Splidejs/splide) by Naotoshi Fujita.

## Developer

Datenstrom. [Get help](https://datenstrom.se/yellow/help/).
