import './bootstrap';
import 'leaflet/dist/leaflet.css';  // لاستيراد CSS الخاص بـ Leaflet
import L from 'leaflet';             // لاستيراد مكتبة Leaflet

// الكود الخاص بالخريطة
const location = [50.6325571, 3.0654388];

if (document.getElementById('map')) {
    const map = L.map('map').setView(location, 15);

    L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
        maxZoom: 19,
        attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
    }).addTo(map);

    L.marker(location).addTo(map)
        .bindPopup("5 Bd Louis XIV, 59800 Lille")
        .openPopup();
}
console.log('Hello Laravel')