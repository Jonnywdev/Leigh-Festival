$(document).ready(function(){
    $(".hidden-map-txt").hide();
    // Seating Marker
    $(".seating-marker").click(function(){
        $(".hidden-map-txt").hide();
        $(".seating-txt").toggle();
    });
    // Rugby Pitch 2
    $(".pitch-two-marker").click(function(){
        $(".hidden-map-txt").hide();
        $(".rugby-txt-two").toggle();
    });
    // Rugby Pitch 3
    $(".pitch-three-marker").click(function(){
        $(".hidden-map-txt").hide();
        $(".rugby-txt-three").toggle();
    });
    // Rugby Pitch 1
    $(".pitch-one-marker").click(function(){
        $(".hidden-map-txt").hide();
        $(".rugby-txt-one").toggle();
    });
    // Token Stand first aid
    $(".token-fa-marker").click(function(){
        $(".hidden-map-txt").hide();
        $(".first-aid-txt-token").toggle();
    });
    // Pitch 3 First Aid
    $(".pitch-fa-marker").click(function(){
        $(".hidden-map-txt").hide();
        $(".first-aid-txt-field").toggle();
    });
    // Club First Aid
    $(".club-fa-marker").click(function(){
        $(".hidden-map-txt").hide();
        $(".first-aid-txt-bar").toggle();
    });
    // Beer tent
    $(".beer-tent-marker").click(function(){
        $(".hidden-map-txt").hide();
        $(".bar-txt-outside").toggle();
    });
    // Beer at the club
    $(".club-beer-marker").click(function(){
        $(".hidden-map-txt").hide();
        $(".bar-txt").toggle();
    });
    // Beer on the field
    $(".beer-field-marker").click(function(){
        $(".hidden-map-txt").hide();
        $(".bar-txt-field").toggle();
    });
    // Music
    $(".music-marker").click(function(){
        $(".hidden-map-txt").hide();
        $(".music-txt").toggle();
    });
    // Food at the festival
    $(".food-fest-marker").click(function(){
        $(".hidden-map-txt").hide();
        $(".food-txt").toggle();
    });
    // Food on the Field
    $(".food-pitch-marker").click(function(){
        $(".hidden-map-txt").hide();
        $(".food-txt-field").toggle();
    });
    // Token Stand
    $(".tokenstand-marker").click(function(){
        $(".hidden-map-txt").hide();
        $(".tokens-txt").toggle();
    });
    // cocktails
    $(".cocktails-marker").click(function(){
        $(".hidden-map-txt").hide();
        $(".cocktails-txt").toggle();
    });
    // Hot drinks
    $(".hotdrinks-marker").click(function(){
        $(".hidden-map-txt").hide();
        $(".hot-drinks-txt").toggle();
    });
    // Toilets at the Festival
    $(".outside-toilets-marker").click(function(){
        $(".hidden-map-txt").hide();
        $(".toilet-txt-outside").toggle();
    });
    // Toilets at the club
    $(".club-toilets-marker").click(function(){
        $(".hidden-map-txt").hide();
        $(".toilet-txt").toggle();
    });
});