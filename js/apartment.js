jQuery.noConflict();

document.getElementById("defaultOpen").click();
document.getElementById("infoBtn").disabled =true;
document.getElementById("priceBtn").disabled =true;
document.getElementById("extrasBtn").disabled =true;


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

jQuery("#apartmentTitleNext").click(function (){
    var apartmentTitle = document.getElementById("apartmentTitle").value;

    if (apartmentTitle=="" || apartmentTitle.length<5){
        document.getElementById("apartmentTitleP").style.backgroundColor="#bb0000";
        document.getElementById("apartmentTitleP").style.color="white";
        document.getElementById("apartmentTitleP").innerHTML = "Please enter the title of Your object. Make sure it's longer than 5 characters.";
    } else {
        document.getElementById("infoBtn").disabled=false;
        document.getElementById("infoBtn").click();
    }

});

jQuery("#apartmentInfoNext").click(function (){
    var address = document.getElementById("address").value;
    var city = document.getElementById("city").value;
    var size = document.getElementById("size").value;
    var size2 = document.getElementById("size2").value;
    var rooms = document.getElementById("rooms").value;
    var floors = document.getElementById("floors").value;
    var heatingSelect = document.getElementById("heating");
    var heating = heatingSelect.options[heatingSelect.selectedIndex].value;
    var floorTypeSelect = document.getElementById("floorType");
    var floorType = floorTypeSelect.options[floorTypeSelect.selectedIndex].value;


    if (address=="" || city=="" || size=="" || size2=="" || rooms=="" || floors=="" || heating=="" || floorType==""){
        document.getElementById("apartmentInfoP").style.backgroundColor="#bb0000";
        document.getElementById("apartmentInfoP").style.color="white";
        document.getElementById("apartmentInfoP").innerHTML = "Make sure You've entered all information.";
    } else {
        document.getElementById("priceBtn").disabled=false;
        document.getElementById("priceBtn").click();
    }

});

jQuery("#apartmentPriceNext").click(function (){
    var price = document.getElementById("priceE").value;
    var price2 = document.getElementById("priceE2").value;
    var pictures = jQuery('#pictures').prop('files')[0];   

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
        document.getElementById("apartmentPriceP").style.backgroundColor="#bb0000";
        document.getElementById("apartmentPriceP").style.color="white";
        document.getElementById("apartmentPriceP").innerHTML = "Enter the price per day.";
    } else {
        document.getElementById("extrasBtn").disabled=false;
        document.getElementById("extrasBtn").click();
    }

});

jQuery("#apartmentExtrasNext").click(function (){   

    var washingMachine = document.getElementById("washingMachine").checked;    
    var dryer = document.getElementById("dryer").checked;    
    var toiletPaper = document.getElementById("toiletPaper").checked;    
    var towels = document.getElementById("towels").checked;    
    var bathub = document.getElementById("bathub").checked;    
    var wc = document.getElementById("wc").checked;    
    var wardrobeOrCloset = document.getElementById("wardrobeOrCloset").checked;    
    var wardrobe = document.getElementById("wardrobe").checked;    
    var bidet = document.getElementById("bidet").checked;

    var kitchenTable = document.getElementById("kitchenTable").checked;
    var detergents = document.getElementById("detergents").checked;
    var cookingPlate = document.getElementById("cookingPlate").checked;
    var oven = document.getElementById("oven").checked;
    var kitchenAccessories = document.getElementById("kitchenAccessories").checked;
    var microwaveOven = document.getElementById("microwaveOven").checked;
    var refrigerator = document.getElementById("refrigerator").checked;


    var sofaBed = document.getElementById("sofaBed").checked;
    var soundInsulation = document.getElementById("soundInsulation").checked;
    var privateEntrance = document.getElementById("privateEntrance").checked;
    var safe = document.getElementById("safe").checked;
    var iron = document.getElementById("iron").checked;
    var ironingBoard = document.getElementById("ironingBoard").checked;


    var riverView = document.getElementById("riverView").checked;
    var cityView = document.getElementById("cityView").checked;
    var mountainView = document.getElementById("mountainView").checked;
    var gardenView = document.getElementById("gardenView").checked;


    var pets = document.getElementById("yes").checked;

    var diningRoom = document.getElementById("diningRoom").checked;
    var couch = document.getElementById("couch").checked;
    var seatingArea = document.getElementById("seatingArea").checked;

    var tv = document.getElementById("tv").checked;
    var flatScreen = document.getElementById("flatScreen").checked;
    var satellite = document.getElementById("satellite").checked;
    var cable = document.getElementById("cable").checked;


    var internet = document.getElementById("internetYes").checked;


    var loweredWashbasin = document.getElementById("loweredWashbasin").checked;
    var objectAdapted = document.getElementById("objectAdapted").checked;
    var elevator = document.getElementById("elevator").checked;

    var parkingYes = document.getElementById("parkingYes").checked;
    var garage = document.getElementById("garage").checked;

    var childrenProgram = document.getElementById("elevator").checked;
    var safetyForBabies = document.getElementById("elevator").checked;

    var airConditioning = document.getElementById("airConditioning").checked;
    var heating = document.getElementById("heating").checked;
    var familyRoom = document.getElementById("familyRoom").checked;
    var nonsmokingRoom = document.getElementById("nonsmokingRoom").checked;
    
    if (washingMachine==true){
        washingMachine.value='1';
    } else {
        washingMachine.value='0'
    }

    if (apartmentTitle=="" || apartmentTitle.length<5){
        document.getElementById("defaultOpen").click();
        return false;
    } else if (address=="" || city=="" || size=="" || size2=="" || rooms=="" || floors=="" || heating=="" || floorType==""){
        document.getElementById("infoBtn").click(); 
        return false;
    } else if(price=="" || price==0 || price<0){
        document.getElementById("priceBtn").click();
        return false;
    } else {    
        var data = jQuery("#apartmentForm").serialize();
        jQuery("#apartmentForm").find('input').each(function(){
            data[jQuery(this).attr('name')]=jQuery(this).val();
        });
        
        jQuery.ajax({
            type:"POST",
            url:"php/addApartment.php",
            dataType : "text",
            data: data,    
            contentType: "application/x-www-form-urlencoded"
        }).done(function(response, textStatus){
            if (response.trim()=="success"){
                document.getElementById("apartmentExtrasP").innerHTML="Successifully added! Redirecting...";
                window.location.replace("/tourist/profile.php");
            } else if (response.trim()=="error"){
                  document.getElementById("apartmentExtrasP").innerHTML="Something went wrong.";
            }
        }).fail(function(jqXHR, textStatus, errorThrown){
                document.getElementById("apartmentExtrasP").innerHTML="There was an error. Try again or contact us.";
        });
        return false;

    }


});


