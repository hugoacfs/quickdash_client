if (typeof dash_referrer === 'undefined') {
    var dash_referrer = '';
} else {
    dash_referrer = 'referrer='+dash_referrer;
}
if (typeof dash_tags === 'undefined') {
    var dash_tags = '';
} else {
    dash_tags = 'tags=' + dash_tags;
}

var dash_params = [dash_referrer, dash_tags].filter(Boolean).join("&");

if (dash_params.length !== 0) {
    dash_params = '?'+dash_params;
}

var link = document.createElement("link");
link.href = "https://{YOUR-URL}/css/dash.css";
link.type = "text/css";
link.rel = "stylesheet";
link.media = "screen,print";

document.getElementsByTagName("head")[0].appendChild(link);

var xhr = new XMLHttpRequest();
xhr.onreadystatechange = function () {
    if (xhr.readyState === 4) {
        document.getElementsByClassName('quickdash-outter')[0].innerHTML = xhr.responseText;
    }
};
xhr.open('GET', 'https://{YOUR-URL}/dash.php' + dash_params);
xhr.send();
