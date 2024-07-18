/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
var restaurants = [];
var bounds;
var grpCity = {
    "Atlanta" : "(404) 769.6624",
    "Austin" : "(512) 472.0220",
    "Baltimore" : "(443) 326.8802",
    "Beverly Hills" : "(310) 289.7755",
    "Boston" : "(617) 480.0233",
    "Chicago" : "(312) 841.8700",
    "Dallas" : "(214) 714.6404",
    "Denver" : "(303) 763.0668",
    "Houston" : "(713) 413.7333",
    "Indianapolis" : "(317) 999.5396",
    "Kansas City" : "(816) 931.7700",
    "Las Vegas" : "(702) 525.2323",
    "Los Angeles" : "(310) 925.3495",
    "Miami" : "(305) 979.1144",
    "Minneapolis" : "(612) 338.1344",
    "New York" : "(347) 574.2111",
    "Orlando" : "(407) 242.5941",
    "Philadelphia" : "(215) 485.8627",
    "Portland" : "(503) 704.2020",
    "Rosemont" : "(312) 810.5890",
    "San Antonio" : "(210) 241.7730",
    "San Diego" : "(619) 208.8125",
    "San Jose" : "(408) 799.9422",
    "San Juan" : "(787) 224.5563",
    "Scottsdale" : "(480) 235.5963",
    "Washington DC" : "(202) 294.1499"
};

var ltlng =0;
$(document).ready(function() {
    
    if(localStorage && localStorage.fogoGeo1) {
			ltlng=1;
			
        restaurants.push(JSON.parse(localStorage.fogoGeo1));
        
        if(restaurants.length > 0) {
            //console.log(restaurants[0]);
            // Front Page Directive
            if($("select.loc-sel").length > 0) {
                //alert($("select.loc-sel").val())
                $("select.loc-sel option[value=" + restaurants[0].restaurantID + "]").attr('selected','selected');
                $(".loc-sel").selectOrDie("update");
                // Update Guest Select
                var options = "";
                for(var i = 1; i <= restaurants[0].max; i++) {
                    var selected = "";
                    if(i == $('select.guest-sel').val()) {
                        selected = " selected";
                    }
                    options += '<option value="' + i + '"' + selected + '>' + i + '</option>' + "\r\n";
                }
                $('select.guest-sel').html(options);
                $("select.guest-sel").selectOrDie("update");
            }
            // Group Dining Accomodations
            if($('.sectionWrapper.group-accomodations').length > 0) {
                $('a.phone-grp-center').attr("href", "tel:" + grpCity[restaurants[0].city].replace(/\D/g,''));
                $('a.phone-grp-center').html(grpCity[restaurants[0].city]);
                //$('span.group-max').html(restaurants[0].max);
            }
            // Group Dining Update
            if($("select.loc-sel-group").length > 0) {
                //console.log(restaurants[0].city)
                $("select.loc-sel-group option[value=" + restaurants[0].city + "]").attr('selected','selected');
                $("select.loc-sel-group").selectOrDie("update");
                $('a.phone').attr("href", "tel:" + restaurants[0].phone.replace(/\D/g,''));
                $('a.phone').html(restaurants[0].phone);

            }
            if($("select.location").length > 0) {
                //console.log($('#select_local select.location')[0].selectedIndex)
                if($('#select_local select.location')[0].selectedIndex == 0) {
                    $("select.location option[value=" + restaurants[0].restaurantID + "]").attr('selected','selected');
                    $('.address').html(restaurants[0].short_address);
                    $('.state_zip').html(restaurants[0].short_city + ", " + restaurants[0].state_zip);
                    $('#phone').html(restaurants[0].phone);
                }
            }
            if($('.location-info-landing').length > 0) {
                $('.location-info-landing .address').html(restaurants[0].short_address + " <span class=\"phone\">| <a href='tel:" + restaurants[0].phone.replace(/\D/g,'') + "'>" + restaurants[0].phone + "</a></span>");
            }
            if($('.phone').length > 0) {
                //$('.phone').html("| <a href='tel:" + restaurants[0].phone.replace(/\D/g,'') + "'>" + restaurants[0].phone + "</a>");
            }
            if($('.top-nav-location').length > 0) {
                $('.top-nav-location').html(restaurants[0].city);
                $('.top-nav-location').attr("href", "/location/" + restaurants[0].city.toLowerCase());
            }
            if($('.top-nav-location-phone').length > 0) {
                $('.top-nav-location-phone').html(restaurants[0].phone);
                $('.top-nav-location-phone').attr("href", "tel:" + restaurants[0].phone.replace(/\D/g,''));
            }
            if($('.btn-group.desktop .more-details').length > 0) {
                $('.btn-group.desktop .more-details').attr("href", "/location/" + restaurants[0].city.toLowerCase());
            }
            if($('.locations-page-header.mobile .locations-mobile .direction_icon').length > 0) {
                $('.locations-page-header.mobile .locations-mobile .direction_icon').attr("href", "http://maps.google.com?daddr=" + restaurants[0].lat + "," + restaurants[0].lng + "&amp;ll=");
            }
            if($('.locations-mobile .address_wrap .city_title').length > 0) {
                $('.address_wrap .city_title').html("<span>" + restaurants[0].city + ", " + restaurants[0].state + "</span>");
                $('.address_wrap .address').html("<span>" + restaurants[0].short_address + ", " + restaurants[0].state + "</span>");
            }
            // Locations Page
            if($('.locations-header.desktop .city').length > 0) {
                $('.locations-header.desktop .city').html(restaurants[0].city + ", " + restaurants[0].state);
                $('.address_wrap .city_title').html("<span>" + restaurants[0].city + ", " + restaurants[0].state + "</span>");
                $('.address_wrap .address').html("<span>" + restaurants[0].short_address + "</span>");
                $('.n-mobile-call-button').attr("href", "tel:" + restaurants[0].phone.replace(/\D/g,''));
                $('.n-mobile-view-details').attr("href", "/location/" + restaurants[0].city.toLowerCase());
                var header = $('header#location-header');
                header.attr('style', 'background: #20272C url("/sites/all/themes/fogodechao/img/backgrounds/Fogo-dallas.jpg") no-repeat top center;');
                //console.log(restaurants[0].city.replace(" ", "").toLowerCase());
            }
            if($('.menu-page-target-href').length > 0) {
                $('.menu-page-target-href').attr("href", "/location/" + restaurants[0].city.toLowerCase() + "/#pricing");
            }
            if($('.locations-map-directions').length > 0) {
                $('.locations-map-directions').attr("href", "http://maps.google.com?daddr=" + restaurants[0].lat + "," + restaurants[0].lng + "&amp;ll=");
            }
        }
			
    } else {
        if(navigator.geolocation) {
					ltlng=1;
            //console.log(1);
			
            navigator.geolocation.getCurrentPosition(function(position) {
								restaurants.pop();
                bounds = getBounds(position.coords.latitude, position.coords.longitude);

                RES_LOCATIONS.forEach(function(obj) {
										console.log(bounds.latmin + " : " + bounds.latmax + " (" + obj.lat + ") " + " >> " + bounds.lngmin + " : " + bounds.lngmax + " (" + obj.lng + ") ");
                    //console.log(obj.lat + " : " + obj.lng)
                    if((obj.lat > bounds.latmin && obj.lat < bounds.latmax) && (obj.lng > bounds.lngmin && obj.lng < bounds.lngmax)) {
                        restaurants.push(obj);
                        localStorage.setItem('fogoGeo1', JSON.stringify(obj));
                    }
                });
								if(restaurants.length ==0)
								{
	                restaurants.push(RES_LOCATIONS[15]);
								}
                if(restaurants.length > 0) {
                    //console.log(restaurants[0]);
                    // Front Page Directive
                    if($("select.loc-sel").length > 0) {
                        //alert($("select.loc-sel").val())
                        $("select.loc-sel option[value=" + restaurants[0].restaurantID + "]").attr('selected','selected');
                        $(".loc-sel").selectOrDie("update");
                        // Update Guest Select
                        var options = "";
                        for(var i = 1; i <= restaurants[0].max; i++) {
                            var selected = "";
                            if(i == $('select.guest-sel').val()) {
                                selected = " selected";
                            }
                            options += '<option value="' + i + '"' + selected + '>' + i + '</option>' + "\r\n";
                        }
                        $('select.guest-sel').html(options);
                        $("select.guest-sel").selectOrDie("update");
                    }
                    // Group Dining Accomodations
                    if($('.sectionWrapper.group-accomodations').length > 0) {
                        $('a.phone-grp-center').attr("href", "tel:" + grpCity[restaurants[0].city].replace(/\D/g,''));
                        $('a.phone-grp-center').html(grpCity[restaurants[0].city]);
                        //$('span.group-max').html(restaurants[0].max);
                    }
                    // Group Dining Update
                    if($("select.loc-sel-group").length > 0) {
                        //console.log(restaurants[0].city)
                        $("select.loc-sel-group option[value=" + restaurants[0].city + "]").attr('selected','selected');
                        $("select.loc-sel-group").selectOrDie("update");
                        $('a.phone').attr("href", "tel:" + restaurants[0].phone.replace(/\D/g,''));
                        $('a.phone').html(restaurants[0].phone);

                    }
                    if($("select.location").length > 0) {
                        //console.log($('#select_local select.location')[0].selectedIndex)
                        if($('#select_local select.location')[0].selectedIndex == 0) {
                            $("select.location option[value=" + restaurants[0].restaurantID + "]").attr('selected','selected');
                            $('.address').html(restaurants[0].short_address);
                            $('.state_zip').html(restaurants[0].short_city + ", " + restaurants[0].state_zip);
                            $('#phone').html(restaurants[0].phone);
                        }
                    }
                    if($('.location-info-landing').length > 0) {
                        $('.location-info-landing .address').html(restaurants[0].short_address + " <span class=\"phone\">| <a href='tel:" + restaurants[0].phone.replace(/\D/g,'') + "'>" + restaurants[0].phone + "</a></span>");
                    }
                    if($('.phone').length > 0) {
                        //$('.phone').html("| <a href='tel:" + restaurants[0].phone.replace(/\D/g,'') + "'>" + restaurants[0].phone + "</a>");
                    }
                    if($('.top-nav-location').length > 0) {
                        $('.top-nav-location').html(restaurants[0].city);
                        $('.top-nav-location').attr("href", "/location/" + restaurants[0].city.toLowerCase());
                    }
                    if($('.top-nav-location-phone').length > 0) {
                        $('.top-nav-location-phone').html(restaurants[0].phone);
                        $('.top-nav-location-phone').attr("href", "tel:" + restaurants[0].phone.replace(/\D/g,''));
                    }
                    if($('.btn-group.desktop .more-details').length > 0) {
                        $('.btn-group.desktop .more-details').attr("href", "/location/" + restaurants[0].city.toLowerCase());
                    }
                    if($('.locations-page-header.mobile .locations-mobile .direction_icon').length > 0) {
                        $('.locations-page-header.mobile .locations-mobile .direction_icon').attr("href", "http://maps.google.com?daddr=" + restaurants[0].lat + "," + restaurants[0].lng + "&amp;ll=");
                    }
                    if($('.locations-mobile .address_wrap .city_title').length > 0) {
                        $('.address_wrap .city_title').html("<span>" + restaurants[0].city + ", " + restaurants[0].state + "</span>");
                        $('.address_wrap .address').html("<span>" + restaurants[0].short_address + ", " + restaurants[0].state + "</span>");
                    }
                    // Locations Page
                    if($('.locations-header.desktop .city').length > 0) {
                        $('.locations-header.desktop .city').html(restaurants[0].city + ", " + restaurants[0].state);
                        $('.address_wrap .city_title').html("<span>" + restaurants[0].city + ", " + restaurants[0].state + "</span>");
                        $('.address_wrap .address').html("<span>" + restaurants[0].short_address + "</span>");
                        $('.n-mobile-call-button').attr("href", "tel:" + restaurants[0].phone.replace(/\D/g,''));
                        $('.n-mobile-view-details').attr("href", "/location/" + restaurants[0].city.toLowerCase());
                        var header = $('header#location-header');
                        header.attr('style', 'background: #20272C url("/sites/all/themes/fogodechao/img/backgrounds/Fogo-dallas.jpg") no-repeat top center;');
                        //console.log(restaurants[0].city.replace(" ", "").toLowerCase());
                    }
                    if($('.menu-page-target-href').length > 0) {
                        $('.menu-page-target-href').attr("href", "/location/" + restaurants[0].city.toLowerCase() + "/#pricing");
                    }
                    if($('.locations-map-directions').length > 0) {
                        $('.locations-map-directions').attr("href", "http://maps.google.com?daddr=" + restaurants[0].lat + "," + restaurants[0].lng + "&amp;ll=");
                    }
                }//console.log(restaurants)
				 
            }, function(error) {
								restaurants.pop();
							//console.log("user not sharing");
                handleNoGeolocation(true);
                //console.log(RES_LOCATIONS[15]);
                restaurants.push(RES_LOCATIONS[15]);
				
                
                if($("select.loc-sel").length > 0) {
                        //alert($("select.loc-sel").val())
                        $("select.loc-sel option[value=" + restaurants[0].restaurantID + "]").attr('selected','selected');
                        $(".loc-sel").selectOrDie("update");
                        // Update Guest Select
                        var options = "";
                        for(var i = 1; i <= restaurants[0].max; i++) {
                            var selected = "";
                            if(i == $('select.guest-sel').val()) {
                                selected = " selected";
                            }
                            options += '<option value="' + i + '"' + selected + '>' + i + '</option>' + "\r\n";
                        }
                        $('select.guest-sel').html(options);
                        $("select.guest-sel").selectOrDie("update");
                    }
                    // Group Dining Accomodations
                    if($('.sectionWrapper.group-accomodations').length > 0) {
                        $('a.phone-grp-center').attr("href", "tel:" + grpCity[restaurants[0].city].replace(/\D/g,''));
                        $('a.phone-grp-center').html(grpCity[restaurants[0].city]);
                        //$('span.group-max').html(restaurants[0].max);
                    }
                    // Group Dining Update
                    if($("select.loc-sel-group").length > 0) {
                        //console.log(restaurants[0].city)
                        $("select.loc-sel-group option[value=" + restaurants[0].city + "]").attr('selected','selected');
                        $("select.loc-sel-group").selectOrDie("update");
                        $('a.phone').attr("href", "tel:" + restaurants[0].phone.replace(/\D/g,''));
                        $('a.phone').html(restaurants[0].phone);

                    }
                    if($("select.location").length > 0) {
                        //console.log($('#select_local select.location')[0].selectedIndex)
                        if($('#select_local select.location')[0].selectedIndex == 0) {
                            $("select.location option[value=" + restaurants[0].restaurantID + "]").attr('selected','selected');
                            $('.address').html(restaurants[0].short_address);
                            $('.state_zip').html(restaurants[0].short_city + ", " + restaurants[0].state_zip);
                            $('#phone').html(restaurants[0].phone);
                        }
                    }
                    if($('.location-info-landing').length > 0) {
                        $('.location-info-landing .address').html(restaurants[0].short_address + " <span class=\"phone\">| <a href='tel:" + restaurants[0].phone.replace(/\D/g,'') + "'>" + restaurants[0].phone + "</a></span>");
                    }
                    if($('.phone').length > 0) {
                        //$('.phone').html("| <a href='tel:" + restaurants[0].phone.replace(/\D/g,'') + "'>" + restaurants[0].phone + "</a>");
                    }
                    if($('.top-nav-location').length > 0) {
                        $('.top-nav-location').html(restaurants[0].city);
                        $('.top-nav-location').attr("href", "/location/" + restaurants[0].city.toLowerCase());
                    }
                    if($('.top-nav-location-phone').length > 0) {
                        $('.top-nav-location-phone').html(restaurants[0].phone);
                        $('.top-nav-location-phone').attr("href", "tel:" + restaurants[0].phone.replace(/\D/g,''));
                    }
                    if($('.btn-group.desktop .more-details').length > 0) {
                        $('.btn-group.desktop .more-details').attr("href", "/location/" + restaurants[0].city.toLowerCase());
                    }
                    if($('.locations-page-header.mobile .locations-mobile .direction_icon').length > 0) {
                        $('.locations-page-header.mobile .locations-mobile .direction_icon').attr("href", "http://maps.google.com?daddr=" + restaurants[0].lat + "," + restaurants[0].lng + "&amp;ll=");
                    }
                    if($('.locations-mobile .address_wrap .city_title').length > 0) {
                        $('.address_wrap .city_title').html("<span>" + restaurants[0].city + ", " + restaurants[0].state + "</span>");
                        $('.address_wrap .address').html("<span>" + restaurants[0].short_address + ", " + restaurants[0].state + "</span>");
                    }
                    // Locations Page
                    if($('.locations-header.desktop .city').length > 0) {
                        $('.locations-header.desktop .city').html(restaurants[0].city + ", " + restaurants[0].state);
                        $('.address_wrap .city_title').html("<span>" + restaurants[0].city + ", " + restaurants[0].state + "</span>");
                        $('.address_wrap .address').html("<span>" + restaurants[0].short_address + "</span>");
                        $('.n-mobile-call-button').attr("href", "tel:" + restaurants[0].phone.replace(/\D/g,''));
                        $('.n-mobile-view-details').attr("href", "/location/" + restaurants[0].city.toLowerCase());
                        var header = $('header#location-header');
                        header.attr('style', 'background: #20272C url("/sites/all/themes/fogodechao/img/backgrounds/Fogo-dallas.jpg") no-repeat top center;');
                        //console.log(restaurants[0].city.replace(" ", "").toLowerCase());
                    }
                    if($('.menu-page-target-href').length > 0) {
                        $('.menu-page-target-href').attr("href", "/location/" + restaurants[0].city.toLowerCase() + "/#pricing");
                    }
                    if($('.locations-map-directions').length > 0) {
                        $('.locations-map-directions').attr("href", "http://maps.google.com?daddr=" + restaurants[0].lat + "," + restaurants[0].lng + "&amp;ll=");
                    }
            },
            {
                maximumAge:Infinity,
                timeout:10000
            });
        } else {
            // Browser doesn't support Geolocation
            handleNoGeolocation(false);
        }
    }
    
});

setTimeout(function () {
    if(ltlng ==0){
							//console.log("user not sharing");
                //handleNoGeolocation(true);
                //console.log(RES_LOCATIONS[15]);
                restaurants.push(RES_LOCATIONS[14]);
				
                
                if($("select.loc-sel").length > 0) {
                        //alert($("select.loc-sel").val())
                        $("select.loc-sel option[value=" + restaurants[0].restaurantID + "]").attr('selected','selected');
                        $(".loc-sel").selectOrDie("update");
                        // Update Guest Select
                        var options = "";
                        for(var i = 1; i <= restaurants[0].max; i++) {
                            var selected = "";
                            if(i == $('select.guest-sel').val()) {
                                selected = " selected";
                            }
                            options += '<option value="' + i + '"' + selected + '>' + i + '</option>' + "\r\n";
                        }
                        $('select.guest-sel').html(options);
                        $("select.guest-sel").selectOrDie("update");
                    }
                    // Group Dining Accomodations
                    if($('.sectionWrapper.group-accomodations').length > 0) {
                        $('a.phone-grp-center').attr("href", "tel:" + grpCity[restaurants[0].city].replace(/\D/g,''));
                        $('a.phone-grp-center').html(grpCity[restaurants[0].city]);
                        //$('span.group-max').html(restaurants[0].max);
                    }
                    // Group Dining Update
                    if($("select.loc-sel-group").length > 0) {
                        //console.log(restaurants[0].city)
                        $("select.loc-sel-group option[value=" + restaurants[0].city + "]").attr('selected','selected');
                        $("select.loc-sel-group").selectOrDie("update");
                        $('a.phone').attr("href", "tel:" + restaurants[0].phone.replace(/\D/g,''));
                        $('a.phone').html(restaurants[0].phone);

                    }
                    if($("select.location").length > 0) {
                        //console.log($('#select_local select.location')[0].selectedIndex)
                        if($('#select_local select.location')[0].selectedIndex == 0) {
                            $("select.location option[value=" + restaurants[0].restaurantID + "]").attr('selected','selected');
                            $('.address').html(restaurants[0].short_address);
                            $('.state_zip').html(restaurants[0].short_city + ", " + restaurants[0].state_zip);
                            $('#phone').html(restaurants[0].phone);
                        }
                    }
                    if($('.location-info-landing').length > 0) {
                        $('.location-info-landing .address').html(restaurants[0].short_address + " <span class=\"phone\">| <a href='tel:" + restaurants[0].phone.replace(/\D/g,'') + "'>" + restaurants[0].phone + "</a></span>");
                    }
                    if($('.phone').length > 0) {
                        //$('.phone').html("| <a href='tel:" + restaurants[0].phone.replace(/\D/g,'') + "'>" + restaurants[0].phone + "</a>");
                    }
                    if($('.top-nav-location').length > 0) {
                        $('.top-nav-location').html(restaurants[0].city);
                        $('.top-nav-location').attr("href", "/location/" + restaurants[0].city.toLowerCase());
                    }
                    if($('.top-nav-location-phone').length > 0) {
                        $('.top-nav-location-phone').html(restaurants[0].phone);
                        $('.top-nav-location-phone').attr("href", "tel:" + restaurants[0].phone.replace(/\D/g,''));
                    }
                    if($('.btn-group.desktop .more-details').length > 0) {
                        $('.btn-group.desktop .more-details').attr("href", "/location/" + restaurants[0].city.toLowerCase());
                    }
                    if($('.locations-page-header.mobile .locations-mobile .direction_icon').length > 0) {
                        $('.locations-page-header.mobile .locations-mobile .direction_icon').attr("href", "http://maps.google.com?daddr=" + restaurants[0].lat + "," + restaurants[0].lng + "&amp;ll=");
                    }
                    if($('.locations-mobile .address_wrap .city_title').length > 0) {
                        $('.address_wrap .city_title').html("<span>" + restaurants[0].city + ", " + restaurants[0].state + "</span>");
                        $('.address_wrap .address').html("<span>" + restaurants[0].short_address + ", " + restaurants[0].state + "</span>");
                    }
                    // Locations Page
                    if($('.locations-header.desktop .city').length > 0) {
                        $('.locations-header.desktop .city').html(restaurants[0].city + ", " + restaurants[0].state);
                        $('.address_wrap .city_title').html("<span>" + restaurants[0].city + ", " + restaurants[0].state + "</span>");
                        $('.address_wrap .address').html("<span>" + restaurants[0].short_address + "</span>");
                        $('.n-mobile-call-button').attr("href", "tel:" + restaurants[0].phone.replace(/\D/g,''));
                        $('.n-mobile-view-details').attr("href", "/location/" + restaurants[0].city.toLowerCase());
                        var header = $('header#location-header');
                        header.attr('style', 'background: #20272C url("/sites/all/themes/fogodechao/img/backgrounds/Fogo-dallas.jpg") no-repeat top center;');
                        //console.log(restaurants[0].city.replace(" ", "").toLowerCase());
                    }
                    if($('.menu-page-target-href').length > 0) {
                        $('.menu-page-target-href').attr("href", "/location/" + restaurants[0].city.toLowerCase() + "/#pricing");
                    }
                    if($('.locations-map-directions').length > 0) {
                        $('.locations-map-directions').attr("href", "http://maps.google.com?daddr=" + restaurants[0].lat + "," + restaurants[0].lng + "&amp;ll=");
                    }
            
    }
		handleNoGeolocation();
}, 5000); 

function handleNoGeolocation(errorFlag) {
  if (errorFlag) {
    var content = 'Error: The Geolocation service failed.';
  } else {
    var content = 'Error: Your browser doesn\'t support geolocation.';
  }
  
  //console.log(content);
}

function getBounds( lat, lng, miles ) {
    var factor = miles * 0.009;
    var lat_min = lat - 1.008;
    var lat_max = lat + 1.008;
    var long_min = lng - (1.008 / Math.cos(lat*Math.PI/180));
    var long_max = lng + (1.008 / Math.cos(lat*Math.PI/180));
    
    var data = {
        "latmin": lat_min,
        "latmax": lat_max,
        "lngmin": long_min,
        "lngmax": long_max
    };
    
    return data;
}

