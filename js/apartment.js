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
var apartmentTitle,address,city,size,size2,rooms,floors,heating, floorType, price,price2,pictures;
jQuery("#apartmentTitleNext").click(function (){
    apartmentTitle=document.getElementById("apartmentTitle").value;

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
    address = document.getElementById("address").value;
    city = document.getElementById("city").value;
    size = document.getElementById("size").value;
    size2 = document.getElementById("size2").value;
    rooms = document.getElementById("rooms").value;
    floors = document.getElementById("floors").value;
    var heatingSelect = document.getElementById("heatingSelect");
    heating = heatingSelect.options[heatingSelect.selectedIndex].value;
    var floorTypeSelect = document.getElementById("floorType");
    floorType = floorTypeSelect.options[floorTypeSelect.selectedIndex].value;


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
    price = document.getElementById("priceE").value;
    price2 = document.getElementById("priceE2").value;
    pictures = jQuery('#pictures').prop('files')[0];   

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
        document.getElementById("apartmentPriceP").style.backgroundColor="#bb0000";
        document.getElementById("apartmentPriceP").style.color="white";
        document.getElementById("apartmentPriceP").innerHTML = "Enter the price per day.";
    } else {
        document.getElementById("extrasBtn").disabled=false;
        document.getElementById("extrasBtn").click();
    }
        

});

jQuery("#apartmentExtrasNext").click(function (){  
    
    var heatingSelect = document.getElementById("heatingSelect");
    var floorTypeSelect = document.getElementById("floorType");
    var apartmentTitle=document.getElementById('apartmentTitle').value;
    var address = document.getElementById("address").value;
    var city = document.getElementById("city").value;
    var size = document.getElementById("size").value;
    var size2 = document.getElementById("size2").value;
    var rooms = document.getElementById("rooms").value;
    var floors = document.getElementById("floors").value;
    var heating = heatingSelect.options[heatingSelect.selectedIndex].value;
    var floorType = floorTypeSelect.options[floorTypeSelect.selectedIndex].value;
    var price = document.getElementById("priceE").value;
    var price2 = document.getElementById("priceE2").value;
    

    if (document.getElementById('washingMachine').checked) {var washingMachine=1;} else {var washingMachine=0;}
    if (document.getElementById('dryer').checked) {var dryer=1;} else {var dryer=0;}
    if (document.getElementById('toiletPaper').checked) {var toiletPaper=1;} else {var toiletPaper=0;}
    if (document.getElementById('towels').checked) {var towels=1;} else {var towels=0;}
    if (document.getElementById('bathtub').checked) {var bathtub=1;} else {var bathtub=0;}
    if (document.getElementById('cabin').checked) {var cabin=1;} else {var cabin=0;}
    if (document.getElementById('wc').checked) {var wc=1;} else {var wc=0;}
    if (document.getElementById('wardrobeOrCloset').checked) {var wardrobeOrCloset=1;} else {var wardrobeOrCloset=0;}
    if (document.getElementById('wardrobe').checked) {var wardrobe=1;} else {var wardrobe=0;}
    if (document.getElementById('bidet').checked) {var bidet=1;} else {var bidet=0;}
    if (document.getElementById('kitchenTable').checked) {var kitchenTable=1;} else {var kitchenTable=0;}
    if (document.getElementById('detergents').checked) {var detergents=1;} else {var detergents=0;}
    if (document.getElementById('cookingPlate').checked) {var cookingPlate=1;} else {var cookingPlate=0;}
    if (document.getElementById('oven').checked) {var oven=1;} else {var oven=0;}
    if (document.getElementById('kitchenAccessories').checked) {var kitchenAccessories=1;} else {var kitchenAccessories=0;}
    if (document.getElementById('microwaveOven').checked) {var microwaveOven=1;} else {var microwaveOven=0;}
    if (document.getElementById('refrigerator').checked) {var refrigerator=1;} else {var refrigerator=0;}
    if (document.getElementById('sofaBed').checked) {var sofaBed=1;} else {var sofaBed=0;}
    if (document.getElementById('soundInsulation').checked) {var soundInsulation=1;} else {var soundInsulation=0;}
    if (document.getElementById('privateEntrance').checked) {var privateEntrance=1;} else {var privateEntrance=0;}
    if (document.getElementById('safe').checked) {var safe=1;} else {var safe=0;}
    if (document.getElementById('iron').checked) {var iron=1;} else {var iron=0;}
    if (document.getElementById('ironingBoard').checked) {var ironingBoard=1;} else {var ironingBoard=0;}
    if (document.getElementById('riverView').checked) {var riverView=1;} else {var riverView=0;}
    if (document.getElementById('cityView').checked) {var cityView=1;} else {var cityView=0;}
    if (document.getElementById('mountainView').checked) {var mountainView=1;} else {var mountainView=0;}
    if (document.getElementById('gardenView').checked) {var gardenView=1;} else {var gardenView=0;}
    if (document.getElementById('pets').checked) {var pets=1;} else {var pets=0;}
    if (document.getElementById('diningRoom').checked) {var diningRoom=1;} else {var diningRoom=0;}
    if (document.getElementById('couch').checked) {var couch=1;} else {var couch=0;}
    if (document.getElementById('seatingArea').checked) {var seatingArea=1;} else {var seatingArea=0;}
    if (document.getElementById('tv').checked) {var tv=1;} else {var tv=0;}
    if (document.getElementById('flatScreen').checked) {var flatScreen=1;} else {var flatScreen=0;}
    if (document.getElementById('satellite').checked) {var satellite=1;} else {var satellite=0;}
    if (document.getElementById('cable').checked) {var cable=1;} else {var cable=0;}
    if (document.getElementById('internet').checked) {var internet=1;} else {var internet=0;}
    if (document.getElementById('loweredWashbasin').checked) {var loweredWashbasin=1;} else {var loweredWashbasin=0;}
    if (document.getElementById('objectAdapted').checked) {var objectAdapted=1;} else {var objectAdapted=0;}
    if (document.getElementById('elevator').checked) {var elevator=1;} else {var elevator=0;}
    if (document.getElementById('parking').checked) {var parking=1;} else {var parking=0;}
    if (document.getElementById('garage').checked) {var garage=1;} else {var garage=0;}
    if (document.getElementById('childrenProgram').checked) {var childrenProgram=1;} else {var childrenProgram=0;}
    if (document.getElementById('safetyForBabies').checked) {var safetyForBabies=1;} else {var safetyForBabies=0;}
    if (document.getElementById('airConditioning').checked) {var airConditioning=1;} else {var airConditioning=0;}
    if (document.getElementById('heatingCheck').checked) {var heatingCheck=1;} else {var heatingCheck=0;}
    if (document.getElementById('familyRoom').checked) {var familyRoom=1;} else {var familyRoom=0;}
    if (document.getElementById('nonsmokingRoom').checked) {var nonsmokingRoom=1;} else {var nonsmokingRoom=0;}


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

        jQuery.ajax({
            type:"POST",
            url:"../php/addApartment.php",
            dataType : "text",
            data:'apartmentTitle=' + apartmentTitle + '&address=' + address + '&city=' + city + '&size=' + size + '&size2=' + size2 + '&rooms=' + rooms + '&floors=' + floors + '&heating=' + heating + '&floorType=' + floorType + '&priceE=' + price + '&priceE2=' + price2 + '&washingMachine=' + washingMachine+ '&dryer=' + dryer+ '&toiletPaper=' + toiletPaper+ '&towels=' + towels+ '&bathtub=' + bathtub+ '&cabin=' + cabin+ '&wc=' + wc+ '&wardrobeOrCloset=' + wardrobeOrCloset+ '&wardrobe=' + wardrobe+ '&cabin=' + cabin+ '&bidet=' + bidet+ '&kitchenTable=' + kitchenTable+ '&detergents=' + detergents+ '&cookingPlate=' + cookingPlate+ '&oven=' + oven+ '&kitchenAccessories=' + kitchenAccessories+ '&microwaveOven=' + microwaveOven+ '&refrigerator=' + refrigerator+ '&sofaBed=' + sofaBed+ '&soundInsulation=' + soundInsulation+ '&privateEntrance=' + privateEntrance+ '&safe=' + safe+ '&iron=' + iron+ '&ironingBoard=' + ironingBoard+ '&riverView=' + riverView+ '&cityView=' + cityView+ '&mountainView=' + mountainView+ '&gardenView=' + gardenView+ '&pets=' + pets+ '&diningRoom=' + diningRoom+ '&couch=' + couch+ '&seatingArea=' + seatingArea+ '&tv=' + tv+ '&flatScreen=' + flatScreen+ '&satellite=' + satellite+ '&cable=' + cable+ '&internet=' + internet+ '&loweredWashbasin=' + loweredWashbasin+ '&objectAdapted=' + objectAdapted+ '&elevator=' + elevator+ '&parking=' + parking+ '&garage=' + garage+ '&childrenProgram=' + childrenProgram+ '&safetyForBabies=' + safetyForBabies+ '&airConditioning=' + airConditioning+ '&heatingCheck=' + heatingCheck+ '&familyRoom=' + familyRoom+ '&nonsmokingRoom=' + nonsmokingRoom,    
            contentType: "application/x-www-form-urlencoded"
        }).done(function(response, textStatus){
            if (response.trim()=="success"){
                document.getElementById("apartmentExtrasP").innerHTML="Successifully added! Redirecting...";
                window.location.replace("/tourist/profile.php");
            } else if (response.trim()=="error"){
                document.getElementById("apartmentExtrasP").style.backgroundColor="#bb0000";
                document.getElementById("apartmentExtrasP").style.color="white";
                document.getElementById("apartmentExtrasP").innerHTML="Something went wrong.";
            }
        }).fail(function(jqXHR, textStatus, errorThrown){
            document.getElementById("apartmentExtrasP").style.backgroundColor="#bb0000";
            document.getElementById("apartmentExtrasP").style.color="white";
            document.getElementById("apartmentExtrasP").innerHTML="There was an error. Try again or contact us.";
        });
        return false;

    }


});

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




