import L from 'leaflet';

// 座標とズームレベルを指定 
//ここのsetViewが緯度経度なので !!$user.locationから持ってきたい
const map = L.map('map').setView([33.5903, 130.4017], 14);
L.tileLayer('https://tile.openstreetmap.org/{z}/{x}/{y}.png', {
    // 右下にクレジットを表示
    attribution: '&copy; <a href="http://www.openstreetmap.org/copyright">OpenStreetMap</a>'
}).addTo(map);

// マーカーの追加 例：東京駅
// ここでマーカーを作っているので !!$shop.locationから追加したい
var marker = L.marker([33.590188, 130.420685]).addTo(map);
marker.bindPopup('博多駅').openPopup(); // ポップアップを表示 !!ここで値段を入れる

// 円の追加 例：東京駅
// ここで縁を追加しているので !!user.locationから緯度経度を代入してif文で半径を決める
var circle = L.circle([33.590188, 130.420685], {
    color: 'blue',
    fillColor: '#4169e1',
    fillOpacity: 0.4,
    radius: 1000 //ここが半径
}).addTo(map);