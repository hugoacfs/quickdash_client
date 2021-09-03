var link = document.createElement("link");
link.href = "https://www.quickdash.client/css/dash.css";
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
xhr.open('GET', 'https://www.quickdash.client/dash.php');
xhr.send();
