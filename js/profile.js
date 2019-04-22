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



/*jQuery("#vehicles").click(function (){
    jQuery
        .ajax({
        type:"POST",
        url:"php/profile.php",
        dataType : "text",
        data:"name="+ name + "&email=" + email, 
        contentType: "application/x-www-form-urlencoded"
    })
        .done(function(response, textStatus){
        if (response.trim()=='success'){
            document.getElementById("vehicles").innerHTML = response;

        } else {
            document.getElementById("vehicles").innerHTML = "There was an error. Try again or contact us.";
            document.getElementById("vehicles").style.color="#bb0000";
        }
    })
        .fail(function(jqXHR, textStatus, errorThrown) {
        document.getElementById("vehicles").innerHTML = response + " " + errorThrown;
    });               

    return false;
});

jQuery("#apartments").click(function (){
    jQuery
        .ajax({
        type:"POST",
        url:"php/apartments.php",
        dataType : "text",
        data:"name="+ name + "&email=" + email, 
        contentType: "application/x-www-form-urlencoded"
    })
        .done(function(response, textStatus){
        if (response.trim()=='success'){
            document.getElementById("vehicles").innerHTML = response;

        } else {
            document.getElementById("vehicles").innerHTML = "There was an error. Try again or contact us.";
            document.getElementById("vehicles").style.color="#bb0000";
        }
    })
        .fail(function(jqXHR, textStatus, errorThrown) {
        document.getElementById("vehicles").innerHTML = response + " " + errorThrown;
    });               

    return false;
});

jQuery("#hotels").click(function (){
    jQuery
        .ajax({
        type:"POST",
        url:"php/hotels.php",
        dataType : "text",
        data:"name="+ name + "&email=" + email, 
        contentType: "application/x-www-form-urlencoded"
    })
        .done(function(response, textStatus){
        if (response.trim()=='success'){
            document.getElementById("vehicles").innerHTML = response;

        } else {
            document.getElementById("vehicles").innerHTML = "There was an error. Try again or contact us.";
            document.getElementById("vehicles").style.color="#bb0000";
        }
    })
        .fail(function(jqXHR, textStatus, errorThrown) {
        document.getElementById("vehicles").innerHTML = response + " " + errorThrown;
    });               

    return false;
});*/


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


