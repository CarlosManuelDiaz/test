const rgb = {
    red: "#FF0000",
    green: "#00FF00",
    blue: "#0000FF"
};

const wb = {
    white: "#FFFFFF",
    black: "#000000"
};

const colors = {};
var key;

for (key in rgb) {
    if (rgb.hasOwnProperty(key)) {
        colors[key] = rgb[key];
    }
}

for (key in wb) {
    if (wb.hasOwnProperty(key)) {
        colors[key] = wb[key];
    }
}
