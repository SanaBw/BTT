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

jQuery("#hotelTitleNext").click(function (){
    var hotelTitle = document.getElementById("hotelTitle").value;

    if (hotelTitle=="" || hotelTitle.length<5){
        document.getElementById("hotelTitleP").style.backgroundColor="#bb0000";
        document.getElementById("hotelTitleP").style.color="white";
        document.getElementById("hotelTitleP").innerHTML = "Please enter the title of Your object. Make sure it's longer than 5 characters.";
    } else {
        document.getElementById("infoBtn").disabled=false;
        document.getElementById("infoBtn").click();
    }

});

jQuery("#hotelInfoNext").click(function (){
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
        document.getElementById("hotelInfoP").style.backgroundColor="#bb0000";
        document.getElementById("hotelInfoP").style.color="white";
        document.getElementById("hotelInfoP").innerHTML = "Make sure You've entered all information.";
    } else {
        document.getElementById("priceBtn").disabled=false;
        document.getElementById("priceBtn").click();
    }

});

jQuery("#hotelPriceNext").click(function (){
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
        document.getElementById("hotelPriceP").style.backgroundColor="#bb0000";
        document.getElementById("hotelPriceP").style.color="white";
        document.getElementById("hotelPriceP").innerHTML = "Enter the price per day.";
    } else {
        document.getElementById("extrasBtn").disabled=false;
        document.getElementById("extrasBtn").click();
    }

});

jQuery("#hotelExtrasNext").click(function (){   

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

    if (hotelTitle=="" || hotelTitle.length<5){
        document.getElementById("defaultOpen").click();
        return false;
    } else if (address=="" || city=="" || size=="" || size2=="" || rooms=="" || floors=="" || heating=="" || floorType==""){
        document.getElementById("infoBtn").click(); 
        return false;
    } else if(price=="" || price==0 || price<0){
        document.getElementById("priceBtn").click();
        return false;
    } else {    
        var data = jQuery("#hotelForm").serialize();
        jQuery("#hotelForm").find('input').each(function(){
            data[jQuery(this).attr('name')]=jQuery(this).val();
        });
        
        jQuery.ajax({
            type:"POST",
            url:"php/addHotel.php",
            dataType : "text",
            data: data,    
            contentType: "application/x-www-form-urlencoded"
        }).done(function(response, textStatus){

        }).fail(function(jqXHR, textStatus, errorThrown){

        });
        return false;

    }


});


