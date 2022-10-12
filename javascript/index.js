date = document.getElementById("date");
setInterval(function() {
    date.innerHTML = new Date().toLocaleString();
    }
    , 1000);
    