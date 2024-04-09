function initMap() {
    // Coordonnées de la localisation
    var myLatLng = {lat: -34.397, lng: 150.644};

    // Création de la carte
    var map = new google.maps.Map(document.getElementById('map'), {
      zoom: 8,           // Niveau de zoom
      center: myLatLng   // Centre de la carte
    });

    // Ajout d'un marqueur sur la carte
    var marker = new google.maps.Marker({
      position: myLatLng,
      map: map,
      title: 'Ma localisation'
    });
}
