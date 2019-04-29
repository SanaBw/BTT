jQuery.noConflict();

document.getElementById("vehicles").click();

var name = document.getElementById("name");
var email = document.getElementById("email");


function openTab(evt, tabName) {  
    var i, tabcontent, tablinks;
    tabcontent = document.getElementsByClassName("tabcontent");
    for (i = 0; i < tabcontent.length; i++) {
        tabcontent[i].style.display = "none";
    }
    tablinks = document.getElementsByClassName("tablinks");
    for (i = 0; i < tablinks.length; i++) {
        tablinks[i].className = tablinks[i].className.replace(" active", "");
    }
    document.getElementById(tabName).style.display = "block";
    evt.currentTarget.className += " active";
}


function deleteApt(id) {
    event.preventDefault();

    jQuery
        .ajax({
        type:"POST",
        url:"php/deleteApt.php",
        dataType : "text",
        data:"id=" + id , 
        contentType: "application/x-www-form-urlencoded"
    })
        .done(function(response, textStatus){
        if (response.trim()=='success'){
            jQuery("div[id="+id+"]").remove();

        } else {
            console.log("There was an error");
        }
    })
        .fail(function(jqXHR, textStatus, errorThrown) {
        console.log(response + " " + errorThrown);
    });  


    return false;
}

function changeDate(id){
    event.preventDefault();


    var startDate =document.getElementById("startDate").value;
    var endDate = document.getElementById("endDate").value;


    jQuery
        .ajax({
        type:"POST",
        url:"php/updateDateApt.php",
        dataType : "text",
        data:"startDate="+ startDate + "&endDate=" + endDate + "&id=" + id , 
        contentType: "application/x-www-form-urlencoded"
    })
        .done(function(response, textStatus){
        if (response.trim()=='success'){
            jQuery('#dateModal').modal('hide');
            document.location.reload();

        } else {
            console.log("There was an error");
        }
    })
        .fail(function(jqXHR, textStatus, errorThrown) {
        console.log(response + " " + errorThrown);
    });  


    return false;
}


function deleteHotel(id) {
    event.preventDefault();

    jQuery
        .ajax({
        type:"POST",
        url:"php/deleteHotel.php",
        dataType : "text",
        data:"id=" + id , 
        contentType: "application/x-www-form-urlencoded"
    })
        .done(function(response, textStatus){
        if (response.trim()=='success'){
            jQuery("div[id="+id+"]").remove();

        } else {
            console.log("There was an error");
        }
    })
        .fail(function(jqXHR, textStatus, errorThrown) {
        console.log(response + " " + errorThrown);
    });  


    return false;
}

function changeDateHotel(id){
    event.preventDefault();


    var startDateHotel =document.getElementById("startDateHotel").value;
    var endDateHotel = document.getElementById("endDateHotel").value;


    jQuery
        .ajax({
        type:"POST",
        url:"php/updateDateHotel.php",
        dataType : "text",
        data:"startDate="+ startDateHotel + "&endDate=" + endDateHotel + "&id=" + id , 
        contentType: "application/x-www-form-urlencoded"
    })
        .done(function(response, textStatus){
        if (response.trim()=='success'){
            jQuery('#dateModal').modal('hide');
            document.location.reload();

        } else {
            console.log("There was an error");
        }
    })
        .fail(function(jqXHR, textStatus, errorThrown) {
        console.log(response + " " + errorThrown);
    });  


    return false;
}

function changeDateVehicle(id){
    event.preventDefault();    

    var startDateVehicle =document.getElementById("startDateVehicle").value;
    var endDateVehicle = document.getElementById("endDateVehicle").value;


    jQuery
        .ajax({
        type:"POST",
        url:"php/updateDateVehicle.php",
        dataType : "text",
        data:"startDate="+ startDateVehicle + "&endDate=" + endDateVehicle + "&id=" + id , 
        contentType: "application/x-www-form-urlencoded"
    })
        .done(function(response, textStatus){
        if (response.trim()=='success'){
            jQuery('#dateModal').modal('hide');
            document.location.reload();

        } else {
            console.log("There was an error");
        }
    })
        .fail(function(jqXHR, textStatus, errorThrown) {
        console.log(errorThrown);
    });  


    return false;
}

function deleteVehicle(id) {
    event.preventDefault();

    jQuery
        .ajax({
        type:"POST",
        url:"php/deleteVehicle.php",
        dataType : "text",
        data:"id=" + id , 
        contentType: "application/x-www-form-urlencoded"
    })
        .done(function(response, textStatus){
        if (response.trim()=='success'){
            jQuery("div[id="+id+"]").remove();

        } else {
            console.log("There was an error");
        }
    })
        .fail(function(jqXHR, textStatus, errorThrown) {
        console.log(response + " " + errorThrown);
    });  


    return false;
}
