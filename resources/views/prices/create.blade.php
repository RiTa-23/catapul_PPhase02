<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Leaflet Map</title>
    @vite('resources/css/app.css')
    <style>
        html, body {
            height: 100%;
            margin: 0;
            padding: 0;
        }
        header {
            height: 8%;
            position: relative;
            z-index: 1000;
        }
        #map {
            height: 92%;
            width: 100%;
            position: relative;
            z-index: 10;
        }
    </style>
</head>
<body>
    @include('layouts.navigation')

    <!-- @foreach ($stores as $store)
    <p>{{ $store->name }}: {{ $store->locationx }}, {{ $store->locationy }}</p>
@endforeach -->

    <!-- Bladeの条件分岐を使ってデータがない場合の処理 -->
    @if ($stores->isEmpty())
        <p>ヒットしませんでした。</>
    @else
        <!-- データがある場合は地図を表示 -->
        <div id="map"></div>
    @endif

    @if (!$stores->isEmpty())
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.4/dist/leaflet.css" integrity="sha256-p4NxAoJBhIIN+hmNHrzRCf9tD/miZyoHS5obTRR9BMY=" crossorigin="" />
    <script src="https://unpkg.com/leaflet@1.9.4/dist/leaflet.js" integrity="sha256-20nQCchB9co0qIjJZRGuk2/Z9VM+kNiyxNV1lvTlZBo=" crossorigin=""></script>
    <script>
        // 位置情報の取得
        navigator.geolocation.getCurrentPosition(successCallback, errorCallback);
        successCallback(1);

        let DefaultIcon = L.icon({
            iconUrl: icon,
            iconRetinaUrl: iconRetina,
            shadowUrl: iconShadow,
            iconSize: [25, 41],
            iconAnchor: [12, 41],
            popupAnchor: [1, -34],
            tooltipAnchor: [16, -28],
            shadowSize: [0, 0]
        });
        
        const redIcon = L.icon({
            iconUrl: "https://esm.sh/leaflet@1.9.2/dist/images/marker-icon.png",
            iconRetinaUrl: "https://esm.sh/leaflet@1.9.2/dist/images/marker-icon-2x.png",
            shadowUrl: "https://esm.sh/leaflet@1.9.2/dist/images/marker-shadow.png",
            iconSize: [25, 41],
            iconAnchor: [12, 41],
            popupAnchor: [1, -34],
            tooltipAnchor: [16, -28],
            shadowSize: [41, 41],
            className: "icon-red", // <= ここでクラス名を指定
        });

        L.Marker.prototype.options.icon = DefaultIcon;

        function successCallback(position) {
            var latitude = position.coords.latitude;
            var longitude = position.coords.longitude;

            const map = L.map('map').setView([latitude, longitude], 14);

            //現在地のマーカーの追加
            L.marker([latitude, longitude], { icon: redIcon }).addTo(map)
                .bindPopup('現在地', { autoClose: false }).openPopup();
                
            // OpenStreetMapレイヤーを追加
            L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
                attribution: '© OpenStreetMap contributors'
            }).addTo(map);

            // データベースから取得した店舗のマーカーを追加
            // データベースから取得した店舗のマーカーを追加
            let stores = @json($stores); // BladeからJavaScriptにデータを渡す
            let item =  @json($item);    // BladeからJavaScriptにデータを渡す

            stores.forEach(store => {

                // マーカーを地図上に追加
                L.marker([store.locationx, store.locationy])
                    .addTo(map) // マーカーを地図に追加
                    .bindPopup('<a href="/prices/show/' + store.id + '/' + item.id + '">' + store.name + '</a>', { autoClose: false }).openPopup();

            });

        };

        function errorCallback(error) {
            alert("位置情報が取得できませんでした");
        }
    </script>
    @endif
</body>
</html>
