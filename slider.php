<?php
// Slider extension, https://github.com/annaesvensson/yellow-slider

class YellowSlider {
    const VERSION = "0.8.18";
    public $yellow;         // access to API
    
    // Handle initialisation
    public function onLoad($yellow) {
        $this->yellow = $yellow;
        $this->yellow->system->setDefault("sliderSorting", "name");
        $this->yellow->system->setDefault("sliderStyle", "loop");
        $this->yellow->system->setDefault("sliderAutoplay", "0");
    }
    
    // Handle page content of shortcut
    public function onParseContentShortcut($page, $name, $text, $type) {
        $output = null;
        if ($name=="slider" && ($type=="block" || $type=="inline")) {
            list($pattern, $sorting, $style, $size, $autoplay) = $this->yellow->toolbox->getTextArguments($text);
            if (is_string_empty($sorting)) $sorting = $this->yellow->system->get("sliderSorting");
            if (is_string_empty($style)) $style = $this->yellow->system->get("sliderStyle");
            if (is_string_empty($size)) $size = "100%";
            if (is_string_empty($autoplay)) $autoplay = $this->yellow->system->get("sliderAutoplay");
            if (is_string_empty($pattern)) {
                $pattern = "unknown";
                $files = $this->yellow->media->clean();
            } else {
                $images = $this->yellow->system->get("coreImageLocation");
                $files = $this->yellow->media->index()->match("#$images$pattern#");
                if ($sorting=="modified") $files->sort("modified", false);
                elseif ($sorting=="size") $files->sort("size", false);
            }
            if ($this->yellow->extension->isExisting("image")) {
                if (!is_array_empty($files)) {
                    $page->setLastModified($files->getModified());
                    $output = "<div class=\"splide\" data-arrows=\"false\" data-rewind=\"true\" data-clickable=\"true\" data-type=\"".htmlspecialchars($style)."\"";
                    if ($autoplay!=0) $output .= " data-autoplay=\"true\" data-interval=\"".htmlspecialchars($autoplay)."\"";
                    $output .= ">\n";
                    $output .= "<div class=\"splide__track\"><div class=\"splide__list\">";
                    foreach ($files as $file) {
                        list($src, $width, $height) = $this->yellow->extension->get("image")->getImageInformation($file->fileName, $size, $size);
                        $caption = $this->yellow->language->isText($file->fileName) ? $this->yellow->language->getText($file->fileName) : "";
                        $alt = is_string_empty($caption) ? basename($file->getLocation(true)) : $caption;
                        $output .= "<div class=\"splide__slide\"><img src=\"".htmlspecialchars($src)."\"";
                        if ($width && $height) $output .= " width=\"".htmlspecialchars($width)."\" height=\"".htmlspecialchars($height)."\"";
                        $output .= " alt=\"".htmlspecialchars($alt)."\" title=\"".htmlspecialchars($alt)."\"";
                        $output .= " /></div>\n";
                    }
                    $output .= "</div></div></div>";
                } else {
                    $page->error(500, "Slider '$pattern' does not exist!");
                }
            } else {
                $page->error(500, "Slider requires 'image' extension!");
            }
        }
        return $output;
    }
    
    // Handle page extra data
    public function onParsePageExtra($page, $name) {
        $output = null;
        if ($name=="header") {
            $extensionLocation = $this->yellow->system->get("coreServerBase").$this->yellow->system->get("coreExtensionLocation");
            $output = "<link rel=\"stylesheet\" type=\"text/css\" media=\"all\" href=\"{$extensionLocation}slider.css\" />\n";
            $output .= "<script type=\"text/javascript\" defer=\"defer\" src=\"{$extensionLocation}slider-splide.min.js\"></script>\n";
            $output .= "<script type=\"text/javascript\" defer=\"defer\" src=\"{$extensionLocation}slider.js\"></script>\n";
        }
        return $output;
    }
}
