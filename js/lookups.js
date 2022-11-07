let _token = $('meta[name="csrf-token"]').attr('content');
let _root = "http://ticketfare.ng";

var locationEl = $('#location_landing_input');
locationEl.keyup(function() {
  let input = locationEl.val();
  $.ajax({
    url: _root + "/lookup/find/places",
    type: "POST",
    data: {
      location: input,
      _token: _token
    },
    success: function(response) {
      let places = response;
      let result = "<ul>";
      places.forEach(place => {
        result += "<li placeid="+place.place_id+" description='"+place.description+"' onclick='selectLocationItem(this)'>";
        result += "    <h5>" + place.main + "</h5>";
        result += "    <p>" + place.secondary + "</p>";
        result += "</li>";
      });
      result += "</ul>";
      $('#location-result').html(result);
    },
    error: function() {
      console.log("Error occurred while searching for places.");
    }
  })
});

$("body").click(function(e){
  if( $(e.target).closest("#location-result").length > 0 ){
    return false;
  }
  $("#location-result").html("");
});

function selectLocationItem(e) {
  $("#location_landing_input").val(e.getAttribute('description'));
  $("#location-result").html("");
}

$(document).ready(function() {
  $(".step-link").hover(function(){
    $(this).find(".step-arrow").removeClass("text-white");
    $(this).find(".step-arrow").addClass("text-black");
  }, function(){
    $(this).find(".step-arrow").removeClass("text-black");
    $(this).find(".step-arrow").addClass("text-white");
  });

  $('.stp-clicker').find('a').first().removeClass('hidden').addClass('flex');
  $('.stp-clicker').find('.open-arrow').first().removeClass("hidden").addClass("block");
  $('.stp-clicker').find('.close-arrow').first().removeClass("block").addClass("hidden");

  $('.stp-clicker').click(function(e) {
    e.stopPropagation();
    if($(this).find('a').hasClass('hidden')) {
      $(this).find('a').removeClass("hidden").addClass('flex');
      $(this).find('.open-arrow').removeClass("hidden").addClass("block");
      $(this).find('.close-arrow').removeClass("block").addClass("hidden");
      return;
    } else {
      $(this).find('a').removeClass("flex")
        .addClass('hidden');
        $(this).find('.open-arrow').removeClass("block").addClass("hidden");
        $(this).find('.close-arrow').removeClass("hidden").addClass("block");
    }
  });


  $("#online_address_info").removeClass('block').addClass('hidden');
  $("#undisclosed_address_info").removeClass('block').addClass('hidden');
  $('#venue_address').click(function() {
    $("#event_location").val("venue");
    let isActive = $(this).hasClass("border-2 border-blue-600 bg-blue-100 text-blue-600");
    if(!isActive) {
      $(this).addClass("border-2 border-blue-600 bg-blue-100 text-blue-600");
    }
    $("#online_address")
      .removeClass("border-2 border-blue-600 bg-blue-100 text-blue-600")
      .addClass("border border-gray-300");
    $("#undisclosed_address")
      .removeClass("border-2 border-blue-600 bg-blue-100 text-blue-600")
      .addClass("border border-gray-300");


    $("#venue_address_info").css({"display": "flex"});
    $("#online_address_info").removeClass('block').addClass('hidden');
    $("#undisclosed_address_info").removeClass('block').addClass('hidden');
  });

  $('#online_address').click(function() {
    $("#event_location").val("online");
    let isActive = $(this).hasClass("border-2 border-blue-600 bg-blue-100 text-blue-600");
    if(!isActive) {
      $(this).addClass("border-2 border-blue-600 bg-blue-100 text-blue-600");
    }
    $("#venue_address")
      .removeClass("border-2 border-blue-600 bg-blue-100 text-blue-600")
      .addClass("border border-gray-300");
    $("#undisclosed_address")
      .removeClass("border-2 border-blue-600 bg-blue-100 text-blue-600")
      .addClass("border border-gray-300");


    $("#online_address_info").removeClass('hidden').addClass('block');
    $("#venue_address_info").css({"display": "none"});
    $("#undisclosed_address_info").removeClass('block').addClass('hidden');
  });

  $('#undisclosed_address').click(function() {
    $("#event_location").val("undisclosed");

    let isActive = $(this).hasClass("border-2 border-blue-600 bg-blue-100 text-blue-600");
    if(!isActive) {
      $(this).addClass("border-2 border-blue-600 bg-blue-100 text-blue-600");
    }
    $("#venue_address")
      .removeClass("border-2 border-blue-600 bg-blue-100 text-blue-600")
      .addClass("border border-gray-300");
    $("#online_address")
      .removeClass("border-2 border-blue-600 bg-blue-100 text-blue-600")
      .addClass("border border-gray-300");

    $("#undisclosed_address_info").removeClass('hidden').addClass('block');
    $("#online_address_info").removeClass('block').addClass('hidden');
    $("#venue_address_info").css({"display": "none"});
  });

  // event occurence

  $("#recurring_event_info").removeClass('block').addClass('hidden');

  $('#single_event').click(function() {
    $("#event_occurrence_pattern").val("single");
    let isActive = $(this).hasClass("border-2 border-blue-600 bg-blue-100 text-blue-600");
    if(!isActive) {
      $(this).addClass("border-2 border-blue-600 bg-blue-100 text-blue-600");
    }
    $("#recurring_event")
      .removeClass("border-2 border-blue-600 bg-blue-100 text-blue-600")
      .addClass("border border-gray-300");


    $(".single_event_info").css({"display": "flex"});
    $("#recurring_event_info").css({"display": "none"});
  });

  $('#recurring_event').click(function() {
    $("#event_occurrence_pattern").val("recurring");
    let isActive = $(this).hasClass("border-2 border-blue-600 bg-blue-100 text-blue-600");
    if(!isActive) {
      $(this).addClass("border-2 border-blue-600 bg-blue-100 text-blue-600");
    }
    $("#single_event")
      .removeClass("border-2 border-blue-600 bg-blue-100 text-blue-600")
      .addClass("border border-gray-300");


    $("#recurring_event_info").css({"display": "flex"});
    $(".single_event_info").css({"display": "none"});
  });
});
