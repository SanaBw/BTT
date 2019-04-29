jQuery.noConflict();

document.getElementById("defaultOpen").click();
document.getElementById("infoBtn").disabled =true;
document.getElementById("priceBtn").disabled =true;
document.getElementById("extrasBtn").disabled =true;
document.getElementById("offersBtn").disabled =true;


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
    var stars = document.querySelector('input[name="hotelStars"]:checked').value;

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
    var hotelAddress = document.getElementById("address").value;
    var city = document.getElementById("city").value; 
    var zip = document.getElementById("zipCode").value;
    var country = document.getElementById("country").value;

    if (hotelAddress=="" || city=="" || zip=="" || country==""){
        document.getElementById("hotelInfoP").style.backgroundColor="#bb0000";
        document.getElementById("hotelInfoP").style.color="white";
        document.getElementById("hotelInfoP").innerHTML = "Please make sure you have filled out each field.";
    }else{        
        document.getElementById("priceBtn").disabled=false;
        document.getElementById("priceBtn").click();
    }

});



jQuery("#hotelPriceNext").click(function (){
    var mainBedType = document.getElementById("mainBedType").value;
    var secBedType = document.getElementById("secBedType").value;
    var numberOfMainBeds = document.getElementById("numberOfMainBeds").value;
    var numberOfSecBeds = document.getElementById("numberOfSecBeds").value;
    var numberOfPeople = document.getElementById("numberOfPeople").value;
    var typeOfRoom = document.getElementById("typeOfRoom").value;
    var smoking = document.querySelector('input[name="smoking"]:checked').value;
    var numberOfRooms = document.getElementById("numberOfRooms").value;
    var sizeOfRoom = document.getElementById("sizeOfRoom").value;
    var hotelPrice = document.getElementById("hotelPrice").value;
    var discount = document.querySelector('input[name="discount"]:checked').value;
    var discountValue = document.getElementById("discountValue").value;
    var discountUnit = document.getElementById("discountUnit").value;


    if (numberOfMainBeds=="0" || numberOfPeople=="0"  || numberOfRooms=="0" ||hotelPrice=="0" ||numberOfMainBeds=="" || numberOfPeople=="" || numberOfRooms=="" || hotelPrice==""){
        document.getElementById("hotelPriceP").style.backgroundColor="#bb0000";
        document.getElementById("hotelPriceP").style.color="white";
        document.getElementById("hotelPriceP").innerHTML = "Check if all fields are filled!";
    }else{        
        document.getElementById("extrasBtn").disabled=false;
        document.getElementById("extrasBtn").click();
    }

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

});

jQuery("#hotelExtrasNext").click(function (){

    document.getElementById("offersBtn").disabled=false;
    document.getElementById("offersBtn").click();
});

jQuery(function() {
    jQuery('input[name="discount"]').on('click', function() {
        if (jQuery(this).val() == 'Yes') {
            jQuery('#disc').show();
        }
        else{
            jQuery('#disc').hide();
        }
    });
});

jQuery(document).ready(function () {
    jQuery('#internetPrice').hide();
    jQuery('#l3').hide();
    jQuery('#internet').change(function () {
        if (jQuery('#internet').val() == 'No') {
            jQuery('#internetType').hide();
            jQuery('#internetAvailable').hide();
            jQuery('#internetPrice').hide();
            jQuery('#l1').hide();
            jQuery('#l2').hide();
            jQuery('#l3').hide();
        }
        else if (jQuery('#internet').val() == 'Yes, it is free'){
            jQuery('#internetType').show();
            jQuery('#internetAvailable').show();
            jQuery('#l1').show();
            jQuery('#l2').show();
            jQuery('#internetPrice').hide();
            jQuery('#l3').hide();
        } else {
            jQuery('#internetType').show();
            jQuery('#internetAvailable').show();
            jQuery('#internetPrice').show();
            jQuery('#l1').show();
            jQuery('#l2').show();
            jQuery('#l3').show();
        }
    });
});


jQuery(document).ready(function () {
    jQuery('#parkingPrice').hide();
    jQuery('#l6').hide();
    jQuery('#parking').change(function () {
        if (jQuery('#parking').val() == 'No') {
            jQuery('#parkingType').hide();
            jQuery('#reservationNeeded').hide();
            jQuery('#parkingPrice').hide();
            jQuery('#l4').hide();
            jQuery('#l5').hide();
            jQuery('#l6').hide();
        }
        else if (jQuery('#parking').val() == 'Yes, it is free'){
            jQuery('#parkingType').show();
            jQuery('#reservationNeeded').show();
            jQuery('#l4').show();
            jQuery('#l5').show();
            jQuery('#parkingPrice').hide();
            jQuery('#l6').hide();
        } else {
            jQuery('#parkingType').show();
            jQuery('#reservationNeeded').show();
            jQuery('#parkingPrice').show();
            jQuery('#l4').show();
            jQuery('#l5').show();
            jQuery('#l6').show();
        }
    });
});

jQuery(document).ready(function () {
    jQuery("#languagesOther").hide();
    jQuery('#breakfastPrice').hide();
    jQuery('#l8').hide();
    jQuery('#breakfast').change(function () {
        if (jQuery('#breakfast').val() == 'No') {
            jQuery('#breakfastType').hide();
            jQuery('#breakfastPrice').hide();
            jQuery('#l7').hide();
            jQuery('#l8').hide();
        }
        else if (jQuery('#breakfast').val() == 'Yes, it is free'){
            jQuery('#breakfastType').show();
            jQuery('#l7').show();
            jQuery('#breakfastPrice').hide();
            jQuery('#l8').hide();
        } else {
            jQuery('#breakfastType').show();
            jQuery('#breakfastPrice').show();
            jQuery('#l7').show();
            jQuery('#l8').show();
        }
    });
});


function check(){
    if (document.getElementById("other").checked){
        jQuery("#languagesOther").show();
    } else {
        jQuery("#languagesOther").hide();
    }
}


function showContent(id){
    jqid = "#"+id;
    if (document.getElementById(id).hidden){
        jQuery(jqid).show();
        document.getElementById(id).hidden=false;
    } else {
        jQuery(jqid).hide();
        document.getElementById(id).hidden=true;
    }
}



jQuery("#hotelOffersNext").click(function (){

    var hotelTitle = document.getElementById("hotelTitle").value;    
    var stars = document.querySelector('input[name="hotelStars"]:checked').value;

    var hotelAddress = document.getElementById("address").value;
    var city = document.getElementById("city").value; 
    var zip = document.getElementById("zipCode").value;
    var country = document.getElementById("country").value;
    var mainBedType = document.getElementById("mainBedType").value;
    var secBedType = document.getElementById("secBedType").value;
    var numberOfMainBeds = document.getElementById("numberOfMainBeds").value;
    var numberOfSecBeds = document.getElementById("numberOfSecBeds").value;
    var numberOfPeople = document.getElementById("numberOfPeople").value;
    var typeOfRoom = document.getElementById("typeOfRoom").value;
    var smoking = document.querySelector('input[name="smoking"]:checked').value;
    var numberOfRooms = document.getElementById("numberOfRooms").value;
    var sizeOfRoom = document.getElementById("sizeOfRoom").value;
    var hotelPrice = document.getElementById("hotelPrice").value;
    var discount = document.querySelector('input[name="discount"]:checked').value;
    var discountValue = document.getElementById("discountValue").value;
    var discountUnit = document.getElementById("discountUnit").value;
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
    var internet = document.getElementById("internet").value;
    var internetAvailable = document.getElementById("internetAvailable").value; 
    var internetType = document.getElementById("internetType").value;    
    if(document.getElementById("internetPrice").value==""){
        var internetPrice = 0;
    } else {
        var internetPrice = document.getElementById("internetPrice").value;
    }

    var parking = document.getElementById("parking").value;
    var parkingType = document.getElementById("parkingType").value; 
    var reservationNeeded = document.getElementById("reservationNeeded").value;    
    if(document.getElementById("parkingPrice").value==""){
        var parkingPrice = 0;
    } else {
        var parkingPrice = document.getElementById("parkingPrice").value;
    }

    var breakfast = document.getElementById("breakfast").value;
    var breakfastType = document.getElementById("breakfastType").value;   
    if(document.getElementById("breakfastPrice").value==""){
        var breakfastPrice = 0;
    } else {
        var breakfastPrice = document.getElementById("breakfastPrice").value;
    }

    if (document.getElementById('bhs').checked) {var bhs=1;} else {var bhs=0;}
    if (document.getElementById('english').checked) {var english=1;} else {var english=0;}
    if (document.getElementById('german').checked) {var german=1;} else {var german=0;}
    if (document.getElementById('turkish').checked) {var turkish=1;} else {var turkish=0;}
    if (document.getElementById('arabian').checked) {var arabian=1;} else {var arabian=0;}
    if (document.getElementById('swedish').checked) {var swedish=1;} else {var swedish=0;}
    if (document.getElementById('other').checked) {var other=1;} else {var other=0;}
    if(other==1){
        var languagesOther=document.getElementById('languagesOther').value;
    } else {
        var languagesOther=0;
    }

    if (document.getElementsByName('restaurant')[0].checked) {var restaurant=1;} else {var restaurant=0;}
    if (document.getElementsByName('roomService')[0].checked) {var roomService=1;} else {var roomService=0;}
    if (document.getElementsByName('bar')[0].checked) {var bar=1;} else {var bar=0;}
    if (document.getElementsByName('247Reception')[0].checked) {var reception247=1;} else {var reception247=0;}
    if (document.getElementsByName('sauna')[0].checked) {var sauna=1;} else {var sauna=0;}
    if (document.getElementsByName('fitnessCenter')[0].checked) {var fitnessCenter=1;} else {var fitnessCenter=0;}
    if (document.getElementsByName('yard')[0].checked) {var yard=1;} else {var yard=0;}
    if (document.getElementsByName('terrace')[0].checked) {var terrace=1;} else {var terrace=0;}
    if (document.getElementsByName('nonsmokingRooms')[0].checked) {var nonsmokingRooms=1;} else {var nonsmokingRooms=0;}
    if (document.getElementsByName('airportRide')[0].checked) {var airportRide=1;} else {var airportRide=0;}
    if (document.getElementsByName('skiing')[0].checked) {var skiing=1;} else {var skiing=0;}
    if (document.getElementsByName('familyRooms')[0].checked) {var familyRooms=1;} else {var familyRooms=0;}
    if (document.getElementsByName('spaCenter')[0].checked) {var spaCenter=1;} else {var spaCenter=0;}
    if (document.getElementsByName('jacuzzi')[0].checked) {var jacuzzi=1;} else {var jacuzzi=0;}
    if (document.getElementsByName('ac')[0].checked) {var ac=1;} else {var ac=0;}
    if (document.getElementsByName('waterPark')[0].checked) {var waterPark=1;} else {var waterPark=0;}
    if (document.getElementsByName('pool')[0].checked) {var pool=1;} else {var pool=0;}
    if (document.getElementsByName('beach')[0].checked) {var beach=1;} else {var beach=0;}

    if (document.getElementsByName('clothesHanger')[0].checked) {var clothesHanger=1;} else {var clothesHanger=0;}
    if (document.getElementsByName('clothesDryer')[0].checked) {var clothesDryer=1;} else {var clothesDryer=0;}
    if (document.getElementsByName('sofa')[0].checked) {var sofa=1;} else {var sofa=0;}
    if (document.getElementsByName('closet')[0].checked) {var closet=1;} else {var closet=0;}
    if (document.getElementsByName('carpet')[0].checked) {var carpet=1;} else {var carpet=0;}
    if (document.getElementsByName('longBed')[0].checked) {var longBed=1;} else {var longBed=0;}
    if (document.getElementsByName('roomFan')[0].checked) {var roomFan=1;} else {var roomFan=0;}
    if (document.getElementsByName('fireplace')[0].checked) {var fireplace=1;} else {var fireplace=0;}
    if (document.getElementsByName('mergedRooms')[0].checked) {var mergedRooms=1;} else {var mergedRooms=0;}
    if (document.getElementsByName('iron')[0].checked) {var iron=1;} else {var iron=0;}
    if (document.getElementsByName('bugNet')[0].checked) {var bugNet=1;} else {var bugNet=0;}
    if (document.getElementsByName('privateEntrance')[0].checked) {var privateEntrance=1;} else {var privateEntrance=0;}
    if (document.getElementsByName('safe')[0].checked) {var safe=1;} else {var safe=0;}
    if (document.getElementsByName('soundIsolation')[0].checked) {var soundIsolation=1;} else {var soundIsolation=0;}
    if (document.getElementsByName('sittingRoom')[0].checked) {var sittingRoom=1;} else {var sittingRoom=0;}
    if (document.getElementsByName('pavedMarbleFloor')[0].checked) {var pavedMarbleFloor=1;} else {var pavedMarbleFloor=0;}
    if (document.getElementsByName('woodenFloor')[0].checked) {var woodenFloor=1;} else {var woodenFloor=0;}
    if (document.getElementsByName('workingDesk')[0].checked) {var workingDesk=1;} else {var workingDesk=0;}
    if (document.getElementsByName('toiletPaper')[0].checked) {var toiletPaper=1;} else {var toiletPaper=0;}
    if (document.getElementsByName('bath')[0].checked) {var bath=1;} else {var bath=0;}
    if (document.getElementsByName('bidet')[0].checked) {var bidet=1;} else {var bidet=0;}
    if (document.getElementsByName('showerCabin')[0].checked) {var showerCabin=1;} else {var showerCabin=0;}
    if (document.getElementsByName('bathrobe')[0].checked) {var bathrobe=1;} else {var bathrobe=0;}
    if (document.getElementsByName('privateBathroom')[0].checked) {var privateBathroom=1;} else {var privateBathroom=0;}
    if (document.getElementsByName('freeBathroomSupplies')[0].checked) {var freeBathroomSupplies=1;} else {var freeBathroomSupplies=0;}
    if (document.getElementsByName('fan')[0].checked) {var fan=1;} else {var fan=0;}
    if (document.getElementsByName('hydromassagingBath')[0].checked) {var hydromassagingBath=1;} else {var hydromassagingBath=0;}
    if (document.getElementsByName('sharedBathroom')[0].checked) {var sharedBathroom=1;} else {var sharedBathroom=0;}
    if (document.getElementsByName('slippers')[0].checked) {var slippers=1;} else {var slippers=0;}
    if (document.getElementsByName('wc')[0].checked) {var wc=1;} else {var wc=0;}
    if (document.getElementsByName('computer')[0].checked) {var computer=1;} else {var computer=0;}
    if (document.getElementsByName('nitendoWii')[0].checked) {var nitendoWii=1;} else {var nitendoWii=0;}
    if (document.getElementsByName('ps2')[0].checked) {var ps2=1;} else {var ps2=0;}
    if (document.getElementsByName('ps3')[0].checked) {var ps3=1;} else {var ps3=0;}
    if (document.getElementsByName('xbox360')[0].checked) {var xbox360=1;} else {var xbox360=0;}
    if (document.getElementsByName('laptop')[0].checked) {var laptop=1;} else {var laptop=0;}
    if (document.getElementsByName('ipad')[0].checked) {var ipad=1;} else {var ipad=0;}
    if (document.getElementsByName('cableTv')[0].checked) {var cableTv=1;} else {var cableTv=0;}
    if (document.getElementsByName('cdDvdReader')[0].checked) {var cdDvdReader=1;} else {var cdDvdReader=0;}
    if (document.getElementsByName('faxMachine')[0].checked) {var faxMachine=1;} else {var faxMachine=0;}
    if (document.getElementsByName('flatScreenTv')[0].checked) {var flatScreenTv=1;} else {var flatScreenTv=0;}
    if (document.getElementsByName('payPerViewChannels')[0].checked) {var payPerViewChannels=1;} else {var payPerViewChannels=0;}
    if (document.getElementsByName('radio')[0].checked) {var radio=1;} else {var radio=0;}
    if (document.getElementsByName('satelliteTv')[0].checked) {var satelliteTv=1;} else {var satelliteTv=0;}
    if (document.getElementsByName('phone')[0].checked) {var phone=1;} else {var phone=0;}
    if (document.getElementsByName('tv')[0].checked) {var tv=1;} else {var tv=0;}
    if (document.getElementsByName('bluRayReader')[0].checked) {var bluRayReader=1;} else {var bluRayReader=0;}
    if (document.getElementsByName('diningRoom')[0].checked) {var diningRoom=1;} else {var diningRoom=0;}
    if (document.getElementsByName('barbecue')[0].checked) {var barbecue=1;} else {var barbecue=0;}
    if (document.getElementsByName('cookingPlates')[0].checked) {var cookingPlates=1;} else {var cookingPlates=0;}
    if (document.getElementsByName('toaster')[0].checked) {var toaster=1;} else {var toaster=0;}
    if (document.getElementsByName('kettle')[0].checked) {var kettle=1;} else {var kettle=0;}
    if (document.getElementsByName('outsideDinningSpace')[0].checked) {var outsideDinningSpace=1;} else {var outsideDinningSpace=0;}
    if (document.getElementsByName('minibar')[0].checked) {var minibar=1;} else {var minibar=0;}
    if (document.getElementsByName('kitchenware')[0].checked) {var kitchenware=1;} else {var kitchenware=0;}
    if (document.getElementsByName('microwave')[0].checked) {var microwave=1;} else {var microwave=0;}
    if (document.getElementsByName('fridge')[0].checked) {var fridge=1;} else {var fridge=0;}
    if (document.getElementsByName('coffeeMachine')[0].checked) {var coffeeMachine=1;} else {var coffeeMachine=0;}
    if (document.getElementsByName('childrenSeats')[0].checked) {var childrenSeats=1;} else {var childrenSeats=0;}
    if (document.getElementsByName('alarm')[0].checked) {var alarm=1;} else {var alarm=0;}
    if (document.getElementsByName('roomWakeUpService')[0].checked) {var roomWakeUpService=1;} else {var roomWakeUpService=0;}
    if (document.getElementsByName('bedclothes')[0].checked) {var bedclothes=1;} else {var bedclothes=0;}
    if (document.getElementsByName('towels')[0].checked) {var towels=1;} else {var towels=0;}
    if (document.getElementsByName('balcony')[0].checked) {var balcony=1;} else {var balcony=0;}
    if (document.getElementsByName('pavedYard')[0].checked) {var pavedYard=1;} else {var pavedYard=0;}
    if (document.getElementsByName('cityView')[0].checked) {var cityView=1;} else {var cityView=0;}
    if (document.getElementsByName('gardenView')[0].checked) {var gardenView=1;} else {var gardenView=0;}
    if (document.getElementsByName('lakeView')[0].checked) {var lakeView=1;} else {var lakeView=0;}
    if (document.getElementsByName('mountainView')[0].checked) {var mountainView=1;} else {var mountainView=0;}
    if (document.getElementsByName('poolView')[0].checked) {var poolView=1;} else {var poolView=0;}
    if (document.getElementsByName('riverView')[0].checked) {var riverView=1;} else {var riverView=0;}
    if (document.getElementsByName('seaView')[0].checked) {var seaView=1;} else {var seaView=0;}
    if (document.getElementsByName('roomIsOnTheGroundFloor')[0].checked) {var roomIsOnTheGroundFloor=1;} else {var roomIsOnTheGroundFloor=0;}
    if (document.getElementsByName('accessibleToPeopleInWheelchairs')[0].checked) {var accessibleToPeopleInWheelchairs=1;} else {var accessibleToPeopleInWheelchairs=0;}
    if (document.getElementsByName('upperFloorsAccessibleWithElevators')[0].checked) {var upperFloorsAccessibleWithElevators=1;} else {var upperFloorsAccessibleWithElevators=0;}
    if (document.getElementsByName('toiletWithHandles')[0].checked) {var toiletWithHandles=1;} else {var toiletWithHandles=0;}
    if (document.getElementsByName('safeForBabies')[0].checked) {var safeForBabies=1;} else {var safeForBabies=0;}
    if (document.getElementsByName('games')[0].checked) {var games=1;} else {var games=0;}
    if (document.getElementsByName('booksDvdsOrMusic')[0].checked) {var booksDvdsOrMusic=1;} else {var booksDvdsOrMusic=0;}
    if (document.getElementsByName('socketProtection')[0].checked) {var socketProtection=1;} else {var socketProtection=0;}
    if (document.getElementsByName('pets')[0].checked) {var pets=1;} else {var pets=0;}
    var cancel = document.getElementsByName('cancel')[0].value;
    var cancelFee = document.getElementsByName('cancelFee')[0].value;



    if (hotelTitle=="" || hotelTitle.length<5){
        document.getElementById("defaultOpen").click();
    } else if (hotelAddress=="" || city=="" || zip=="" || country==""){
        document.getElementById("infoBtn").click();
    } else if (numberOfMainBeds=="0" || numberOfPeople=="0"  || numberOfRooms=="0" ||hotelPrice=="0" ||numberOfMainBeds=="" || numberOfPeople=="" || numberOfRooms=="" || hotelPrice==""){
        document.getElementById("priceBtn").click();
    } else {

        jQuery.ajax({
            type:"POST",
            url:"../php/addHotel.php",
            dataType : "text",
            data:'hotelTitle=' + hotelTitle + '&stars='+stars+'&hotelAddress='+hotelAddress+'&city='+city+'&zip='+zip+'&country='+country+'&mainBedType='+mainBedType+'&secBedType='+secBedType+'&numberOfMainBeds='+numberOfMainBeds+'&numberOfSecBeds='+numberOfSecBeds+'&numberOfPeople='+numberOfPeople+'&typeOfRoom='+typeOfRoom+'&smoking='+smoking+'&numberOfRooms='+numberOfRooms+'&sizeOfRoom='+sizeOfRoom+'&hotelPrice='+hotelPrice+'&discount='+discount+'&discountValue='+discountValue+'&discountUnit='+discountUnit+'&internet='+internet+'&internetAvailable='+internetAvailable+'&internetType='+internetType+'&internetPrice='+internetPrice+'&parking='+parking+'&parkingType='+parkingType+'&reservationNeeded='+reservationNeeded+'&parkingPrice='+parkingPrice+'&breakfast='+breakfast+'&breakfastType='+breakfastType+'&breakfastPrice='+breakfastPrice+'&bhs='+bhs+'&english='+english+'&german='+german+'&turkish='+turkish+'&arabian='+arabian+'&swedish='+swedish+'&other='+other+'&languagesOther='+languagesOther+'&restaurant='+restaurant+'&roomService='+roomService+'&bar='+bar+'&reception247='+reception247+'&sauna='+sauna+'&fitnessCenter='+fitnessCenter+'&yard='+yard+'&terrace='+terrace+'&nonsmokingRooms='+nonsmokingRooms+'&airportRide='+airportRide+'&skiing='+skiing+'&familyRooms='+familyRooms+'&spaCenter='+spaCenter+'&jacuzzi='+jacuzzi+'&ac='+ac+'&waterPark='+waterPark+'&pool='+pool+'&beach='+beach+'&clothesHanger='+clothesHanger+'&clothesDryer='+clothesDryer+'&sofa='+sofa+'&closet='+closet+'&carpet='+carpet+'&longBed='+longBed+'&roomFan='+roomFan+'&fireplace='+fireplace+'&mergedRooms='+mergedRooms+'&iron='+iron+'&bugNet='+bugNet+'&privateEntrance='+privateEntrance+'&safe='+safe+'&soundIsolation='+soundIsolation+'&sittingRoom='+sittingRoom+'&pavedMarbleFloor='+pavedMarbleFloor+'&woodenFloor='+woodenFloor+'&workingDesk='+workingDesk+'&toiletPaper='+toiletPaper+'&bath='+bath+'&bidet='+bidet+'&showerCabin='+showerCabin+'&bathrobe='+bathrobe+'&privateBathroom='+privateBathroom+'&freeBathroomSupplies='+freeBathroomSupplies+'&fan='+fan+'&hydromassagingBath='+hydromassagingBath+'&sharedBathroom='+sharedBathroom+'&slippers='+slippers+'&wc='+wc+'&computer='+computer+'&nitendoWii='+nitendoWii+'&ps2='+ps2+'&ps3='+ps3+'&xbox360='+xbox360+'&laptop='+laptop+'&ipad='+ipad+'&cableTv='+cableTv+'&cdDvdReader='+cdDvdReader+'&faxMachine='+faxMachine+'&flatScreenTv='+flatScreenTv+'&payPerViewChannels='+payPerViewChannels+'&radio='+radio+'&satelliteTv='+satelliteTv+'&phone='+phone+'&tv='+tv+'&bluRayReader='+bluRayReader+'&diningRoom='+diningRoom+'&barbecue='+barbecue+'&cookingPlates='+cookingPlates+'&toaster='+toaster+'&kettle='+kettle+'&outsideDinningSpace='+outsideDinningSpace+'&minibar='+minibar+'&kitchenware='+kitchenware+'&microwave='+microwave+'&fridge='+fridge+'&coffeeMachine='+coffeeMachine+'&childrenSeats='+childrenSeats+'&alarm='+alarm+'&roomWakeUpService='+roomWakeUpService+'&bedclothes='+bedclothes+'&towels='+towels+
            '&balcony='+balcony+'&pavedYard='+pavedYard+'&cityView='+cityView+'&gardenView='+gardenView+'&lakeView='+lakeView+'&mountainView='+mountainView+'&poolView='+poolView+'&riverView='+riverView+'&seaView='+seaView+'&roomIsOnTheGroundFloor='+roomIsOnTheGroundFloor+'&accessibleToPeopleInWheelchairs='+accessibleToPeopleInWheelchairs+'&upperFloorsAccessibleWithElevators='+upperFloorsAccessibleWithElevators+'&toiletWithHandles='+toiletWithHandles+'&safeForBabies='+safeForBabies+'&games='+games+'&booksDvdsOrMusic='+booksDvdsOrMusic+'&socketProtection='+socketProtection+'&pets='+pets,    
            contentType: "application/x-www-form-urlencoded"
        }).done(function(response, textStatus){
            if (response.trim()=="success"){
                document.getElementById("hotelOffersP").innerHTML="Successifully added! Redirecting...";
                window.location.replace("/tourist/profile.php");
            } else if (response.trim()=="error"){
                document.getElementById("hotelOffersP").style.backgroundColor="#bb0000";
                document.getElementById("hotelOffersP").style.color="white";
                document.getElementById("hotelOffersP").innerHTML="Something went wrong.";
            }
        }).fail(function(jqXHR, textStatus, errorThrown){
            document.getElementById("hotelOffersP").style.backgroundColor="#bb0000";
            document.getElementById("hotelOffersP").style.color="white";
            document.getElementById("hotelOffersP").innerHTML="There was an error. Try again or contact us.";
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




