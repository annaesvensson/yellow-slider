// Slider extension, https://github.com/annaesvensson/yellow-slider

var initSliderFromDOM = function() {

    // Parse options from DOM
    var parseOptions = function(element, namesUpperCase) {
        var options = {};
        for (var i=0; i<element.attributes.length; i++) {
            var attribute = element.attributes[i], key, value;
            if (attribute.nodeName.substr(0, 5)=="data-") {
                key = attribute.nodeName.substr(5);
                for (var j=0; j<namesUpperCase.length; j++) {
                    if (key==namesUpperCase[j].toLowerCase()) {
                        key = namesUpperCase[j];
                        break;
                    }
                }
                switch (attribute.nodeValue) {
                    case "true":    value = true; break;
                    case "false":   value = false; break;
                    default: value = attribute.nodeValue;
                }
                options[key] = value;
            }
        }
        return options;
    };
    
    // Initialise slider and bind events
    var elements = document.querySelectorAll(".splide");
    for (var i=0, l=elements.length; i<l; i++) {
        var options = parseOptions(elements[i], ["lazyLoad", "fixedWidth", "fixedHeight"]);
        var splide = new Splide(elements[i], options).mount();
        if (options.clickable) splide.on("click", (function(splide) { splide.go("+", false); }).bind(this, splide));
    }
};

window.addEventListener("DOMContentLoaded", initSliderFromDOM, false);
