function change_color() {
    document.getElementById('customers').style.display = "none";
    document.getby
}

function change_department() {
    var tags = document.getElementsByName('departments');
    
    for(var i=0; i < tags.length; i++) {
        var tag = tags[i];
        alert(tag.value);
    }
}

function upper() {
   
    var startDate = new Date();

    alert(startDate);
}


function showCities(country_id) {
    if (country_id == "") {
        document.getElementById("city").innerHTML = "";
        return;
    } else {
        if (window.XMLHttpRequest) {
            // code for IE7+, Firefox, Chrome, Opera, Safari
            xmlhttp = new XMLHttpRequest();
        } else {
            // code for IE6, IE5
            xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
        }
        xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                document.getElementById("city").innerHTML = "<label for='city'>Pays</label><select name='city'><option value='0'>Sélectionner un pays</option><option value='1'>Maroc</option><option value='2'>France</option></select>";
            }
        };
        xmlhttp.open("GET","getuser.php?q="+str,true);
        xmlhttp.send();
    }
}