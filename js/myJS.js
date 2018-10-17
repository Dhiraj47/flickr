function like(photo_id, btn) {

    var xmlhttp = new XMLHttpRequest();

    xmlhttp.onreadystatechange = function () {
        if (xmlhttp.readyState === 4 && xmlhttp.status === 200) {
            document.getElementById(photo_id.toString()).innerHTML = xmlhttp.responseText + " Faves";
            btn.disabled = true;
            btn.style.backgroundColor = '#9f9f9f';
        }
    }

    xmlhttp.open("GET", "php_functions.php?like=" + photo_id);
    xmlhttp.send();

}
