var mymap = L.map('mapid').setView([43.676031, 4.133520], 17);

L.tileLayer('https://api.tiles.mapbox.com/v4/{id}/{z}/{x}/{y}.png?access_token={accessToken}', {
    attribution: 'by Bewebers with talent',
    maxZoom: 18,
    id: 'mapbox.streets',
    accessToken: 'pk.eyJ1IjoidGhpZXJyeWhhbG90IiwiYSI6ImNqaXB5Zzh3YjB3bzUzdnFzMW9sOGgwazUifQ.qWGRPEsHnD6gyVTRZll4PQ'
}).addTo(mymap);







var pizzaIcon = L.icon({
    iconUrl: '/public/img/iconeMap.png',

    iconSize:     [45, 70], // size of the icon

    popupAnchor:  [20,-20] // point from which the popup should open relative to the iconAnchor
});

var marker = L.marker([43.676031, 4.133520],{icon: pizzaIcon}).addTo(mymap);

marker.bindPopup("<div class='test'><h1>Pizz'aioli</h1><p>Venez decouvrir nos pizza !!!</p></div>").openPopup();

