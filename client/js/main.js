
(function ($) {
    "use strict";
})(jQuery);

let url = "http://localhost/weather/api/?";
let items = null;

$('document').ready(function() {
    document.getElementById('status').style.display = "none";
    $.get(url + "allcity",function(data){
        items = data;
        Options();
    });
});

function Options() {
    let i = 1;
    var ele = document.getElementById('city');
    for (const jsonObj of items) {
        var tag = document.createElement("option");
        tag.value = jsonObj['city'];
        tag.innerText = jsonObj['city'];
        tag.className = "opt";
        ele.appendChild(tag);
    }
}

$('#form_api').submit(function(e) {
   e.preventDefault();

   var city = document.getElementById('city').value;
   var token = document.getElementById('api').value;

   if (city.length > 0 && token.length===100) {
        $.get(url + "api=" + token + "&city=" + city, function(data){
            if (data['Message']) {
                document.getElementById('goesWrong').innerHTML = data['Message'];
                document.getElementById('status').style.display = "none";
                document.getElementById("tableContainer").innerHTML = "";
            } else {
                document.getElementById('goesWrong').innerHTML = "";
                document.getElementById("tableContainer").innerHTML = "";
                for(let i=0; i<data.length; i++) {
                    var tag = document.createElement("table");
                    var thread = document.createElement("thead");
                    var tr = document.createElement("tr");
                    tr.className = "table100-head";
                    var th1 = document.createElement("th");
                    th1.className = "column1";
                    th1.innerText = "Parameter";
                    var th2 = document.createElement("th");
                    th2.className = "column2";
                    th2.innerText = "Details";
                    tr.appendChild(th1);
                    tr.appendChild(th2);
                    thread.appendChild(tr);
                    tag.appendChild(thread);

                    var tbody = document.createElement("tbody");
                    var tr = document.createElement("tr");
                    var th1 = document.createElement("td");
                    th1.className = "column1";
                    th1.innerText = "City";
                    var th2 = document.createElement("td");
                    th2.className = "column2";
                    th2.innerText = data[i]['city'];
                    tr.appendChild(th1);
                    tr.appendChild(th2);
                    tbody.appendChild(tr);

                    var tr = document.createElement("tr");
                    var th1 = document.createElement("td");
                    th1.className = "column1";
                    th1.innerText = "Temperature (in Celsius)";
                    var th2 = document.createElement("td");
                    th2.className = "column2";
                    th2.innerText = data[i]['temperature'];
                    tr.appendChild(th1);
                    tr.appendChild(th2);
                    tbody.appendChild(tr);

                    var tr = document.createElement("tr");
                    var th1 = document.createElement("td");
                    th1.className = "column1";
                    th1.innerText = "Humidity";
                    var th2 = document.createElement("td");
                    th2.className = "column2";
                    th2.innerText = data[i]['humidity'];
                    tr.appendChild(th1);
                    tr.appendChild(th2);
                    tbody.appendChild(tr);

                    var tr = document.createElement("tr");
                    var th1 = document.createElement("td");
                    th1.className = "column1";
                    th1.innerText = "Pressure";
                    var th2 = document.createElement("td");
                    th2.className = "column2";
                    th2.innerText = data[i]['pressure'];
                    tr.appendChild(th1);
                    tr.appendChild(th2);
                    tbody.appendChild(tr);

                    var tr = document.createElement("tr");
                    var th1 = document.createElement("td");
                    th1.className = "column1";
                    th1.innerText = "precipation";
                    var th2 = document.createElement("td");
                    th2.className = "column2";
                    th2.innerText = data[i]['precipation'];
                    tr.appendChild(th1);
                    tr.appendChild(th2);
                    tbody.appendChild(tr);

                    tag.appendChild(tbody);
                    document.getElementById("tableContainer").appendChild(tag);
                    var br1 = document.createElement("br");
                    var br2 = document.createElement("br");
                    var br3 = document.createElement("br");
                    document.getElementById("tableContainer").appendChild(br1);
                    document.getElementById("tableContainer").appendChild(br2);
                    document.getElementById("tableContainer").appendChild(br3);
                }
                document.getElementById('status').style.display = "block";
            }
        });
   } else {
       document.getElementById("tableContainer").innerHTML = "";
       document.getElementById('goesWrong').innerHTML = "Fill the Data Properly!!!";
       document.getElementById('status').style.display = "none";
   }
});