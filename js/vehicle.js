jQuery.noConflict();

document.getElementById("defaultOpen").click();
document.getElementById("infoBtn").disabled =true;
document.getElementById("priceBtn").disabled =true;


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

jQuery(document).ready(function () {
    var checkboxs = jQuery('input[type=checkbox]');

    checkboxs.each(function(){
        jQuery(this).wrap('<div class="customCheckbox"></div>');
        jQuery(this).before('<span>&#10004;</span>');
    });

    checkboxs.change(function(){
        if(jQuery(this).is(':checked')){
            jQuery(this).parent().addClass('customCheckboxChecked');
        } else {
            jQuery(this).parent().removeClass('customCheckboxChecked');
        }
    });
});

jQuery(document).ready(function () {
    jQuery('#infoDriver').show();
    jQuery('#l1').hide();
    jQuery('#l2').hide();
    jQuery('#address').hide();
    jQuery('#priceDriver').hide();
    jQuery('#driver').change(function () {
        if (jQuery('#driver').val() == 'Yes, driver is available') {
            jQuery('#infoDriver').show(); 
            jQuery('#l1').hide();
            jQuery('#l2').hide();
            jQuery('#address').hide();
            jQuery('#priceDriver').hide();
        }
        else if (jQuery('#driver').val() == 'Yes, but it is charged additionally'){
            jQuery('#infoDriver').show(); 
            jQuery('#l1').hide();
            jQuery('#l2').show();
            jQuery('#address').hide();
            jQuery('#priceDriver').show();
        } else if (jQuery('#driver').val() == 'No'){
            jQuery('#infoDriver').hide();
            jQuery('#l2').hide();
            jQuery('#l1').show();
            jQuery('#address').show();
            jQuery('#priceDriver').hide();
        }
    });
});

jQuery("#vehicleTitleNext").click(function (){
    var vehicleBrand = document.getElementById("vehicleBrand").value; 
    var vehicleModel = document.getElementById("vehicleModel").value; 
    var vehicleYear = document.getElementById("vehicleYear").value;   

    if (vehicleBrand=="" || vehicleModel=="" || vehicleYear==""){
        document.getElementById("vehicleTitleP").style.backgroundColor="#bb0000";
        document.getElementById("vehicleTitleP").style.color="white";
        document.getElementById("vehicleTitleP").innerHTML = "Please enter all information needed.";
    } else {        
        document.getElementById("infoBtn").disabled=false;
        document.getElementById("infoBtn").click();
    }

});

jQuery("#vehicleInfoNext").click(function (){

    var seats = document.getElementById("seats").value; 
    var maxPeople = document.getElementById("maxPeople").value; 
    var maxBags = document.getElementById("maxBags").value;  
    if (document.getElementById('ac').checked) {var ac=1;} else {var ac=0;}
    if (document.getElementById('babySeat').checked) {var babySeat=1;} else {var babySeat=0;} 
    var insurance = document.getElementById("insurance").value;  
    var theftProtection = document.getElementById("theftProtection").value;  
    var driver = document.getElementById("driver").value; 
    var address = document.getElementById("address").value; 
    var priceDriver = document.getElementById("priceDriver").value; 

    if (seats=="" || maxPeople=="" || maxBags==""){
        document.getElementById("vehicleInfoP").style.backgroundColor="#bb0000";
        document.getElementById("vehicleInfoP").style.color="white";
        document.getElementById("vehicleInfoP").innerHTML = "Please enter all information needed.";
    } else {        
        document.getElementById("priceBtn").disabled=false;
        document.getElementById("priceBtn").click();
    }

});

jQuery("#vehiclePriceNext").click(function (){
    var vehicleBrand = document.getElementById("vehicleBrand").value; 
    var vehicleModel = document.getElementById("vehicleModel").value; 
    var vehicleYear = document.getElementById("vehicleYear").value;  
    var seats = document.getElementById("seats").value; 
    var maxPeople = document.getElementById("maxPeople").value; 
    var maxBags = document.getElementById("maxBags").value;  
    if (document.getElementById('ac').checked) {var ac=1;} else {var ac=0;}
    if (document.getElementById('babySeat').checked) {var babySeat=1;} else {var babySeat=0;} 
    var insurance = document.getElementById("insurance").value;  
    var theftProtection = document.getElementById("theftProtection").value;  
    var driver = document.getElementById("driver").value; 
    var address = document.getElementById("address").value; 
    var priceDriver = document.getElementById("priceDriver").value; 
    var price = document.getElementById("priceE").value;
    var price2 = document.getElementById("priceE2").value;
    var pictures = jQuery('#pictures').prop('files')[0];   

    //PICTURES
    /*var form_data = new FormData();                  
    form_data.append('file', pictures);
    alert(form_data);                             
    $.ajax({
        url: 'upload.php', // point to server-side PHP script 
        dataType: 'text',  // what to expect back from the PHP script, if anything
        cache: false,
        contentType: false,
        processData: false,
        data: form_data,                         
        type: 'post',
        success: function(php_script_response){
            alert(php_script_response); // display response from the PHP script, if any
        }
     });*/

    if (price=="" || price==0 || price<0){
        document.getElementById("vehiclePriceP").style.backgroundColor="#bb0000";
        document.getElementById("vehiclePriceP").style.color="white";
        document.getElementById("vehiclePriceP").innerHTML = "Enter prices per day.";
        return false;
    } else if (vehicleBrand=="" || vehicleModel=="" || vehicleYear==""){
        document.getElementById("defaultOpen").click();
        document.getElementById("vehicleTitleP").style.backgroundColor="#bb0000";
        document.getElementById("vehicleTitleP").style.color="white";
        document.getElementById("vehicleTitleP").innerHTML = "Please enter all information needed.";
        return false;
    } else if (seats=="" || maxPeople=="" || maxBags==""){
        document.getElementById("priceBtn").click();
        document.getElementById("vehicleInfoP").style.backgroundColor="#bb0000";
        document.getElementById("vehicleInfoP").style.color="white";
        document.getElementById("vehicleInfoP").innerHTML = "Please enter all information needed.";
        return false;
    } else {

        jQuery.ajax({
            type:"POST",
            url:"../php/addVehicle.php",
            dataType : "text",
            data:'vehicleBrand=' + vehicleBrand +
            '&vehicleModel=' + vehicleModel+
            '&vehicleYear=' + vehicleYear+
            '&seats=' + seats+
            '&maxPeople=' + maxPeople+
            '&maxBags=' + maxBags+
            '&ac=' + ac+
            '&babySeat=' + babySeat+
            '&insurance=' + insurance+
            '&theftProtection=' + theftProtection+
            '&driver=' + driver+
            '&address=' + address+
            '&priceDriver=' + priceDriver+
            '&price=' + price+
            '&price2='+price,
            contentType: "application/x-www-form-urlencoded"
        }).done(function(response, textStatus){
            if (response.trim()=="success"){
                document.getElementById("vehiclePriceP").style.backgroundColor="#18BC9C";
                document.getElementById("vehiclePriceP").innerHTML="Successifully added! Redirecting...";
                window.location.replace("/tourist/profile.php");
            } else if (response.trim()=="error"){
                document.getElementById("vehiclePriceP").style.backgroundColor="#bb0000";
                document.getElementById("vehiclePriceP").style.color="white";
                document.getElementById("vehiclePriceP").innerHTML="Something went wrong.";
            }
        }).fail(function(jqXHR, textStatus, errorThrown){
            document.getElementById("vehiclePriceP").style.backgroundColor="#bb0000";
            document.getElementById("vehiclePriceP").style.color="white";
            document.getElementById("vehiclePriceP").innerHTML="There was an error. Try again or contact us.";
        });
        return false;
    }


});