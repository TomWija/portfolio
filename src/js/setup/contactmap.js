let setup = function() {
    window.initMap = function() {
        let home = {lat: 50.842129, lng: -0.092745},
            map = new google.maps.Map(document.getElementById("map"), {
                zoom: 14,
                center: home
            }),
            marker = new google.maps.Marker({
                position: home,
                map: map
            });
    };
};

module.exports = setup;
