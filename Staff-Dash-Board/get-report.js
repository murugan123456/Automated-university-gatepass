$('#reporttype').change(function() {
    if ($('select option:selected').text() === "Date") {
        document.getElementById("detail-1").innerHTML="From Date";
        document.getElementById("date2").style.visibility = 'visible';
        document.getElementById('report-detail').type = 'date';
    }
    else if($('select option:selected').text() === "Register Number") {
        document.getElementById("detail-1").innerHTML="Register Number";
        document.getElementById('report-detail').type = 'number';
        document.getElementById("date2").style.visibility = 'hidden';
    }
    else if($('select option:selected').text() === "Year") {
        document.getElementById("detail-1").innerHTML="Year";
        document.getElementById('report-detail').type = 'text';
        document.getElementById("date2").style.visibility = 'hidden';
    }
    else if($('$select option:selected').text() === "department"){
        document.getElementById("detail-1").innerHTML="Department";
        document.getElementById('report-detail').type = 'text';
        document.getElementById("date2").style.visibility = 'hidden';
    }
    else{
        document.getElementById("date2").style.visibility = 'hidden';
    }
});