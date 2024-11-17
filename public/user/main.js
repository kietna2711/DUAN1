var hinh = ['./img/baner1.webp', './img/home_slider_item_image_desktop_2.webp'];
var index = 0;
function next(){
    index++;
    if (index == hinh.length) index = 0
    document.getElementById('img').src = hinh[index];
}
function prev(){
    index--;
    if(index < 0) index = hinh.length - 1;
    document.getElementById('img').src  = hinh[index];
}
setInterval("next()",7000);




const searchBar = document.getElementById('search-bar');
const phrases = ["Bạn cần tìm mỹ phẩm ...?", "Tìm kiếm sản phẩm dưỡng da....?", "Bạn cần tìm gì ...?"];
let phraseIndex = 0;
let letterIndex = 0;

function typePhrase() {
    const currentPhrase = phrases[phraseIndex];
    if (letterIndex < currentPhrase.length) {
        searchBar.placeholder += currentPhrase.charAt(letterIndex);
        letterIndex++;
        setTimeout(typePhrase, 100); // tốc độ gõ chữ
    } else {
        setTimeout(deletePhrase, 2000); // thời gian giữ chữ trước khi xóa
    }
}

function deletePhrase() {
    if (letterIndex > 0) {
        searchBar.placeholder = searchBar.placeholder.slice(0, letterIndex - 1);
        letterIndex--;
        setTimeout(deletePhrase, 50); // tốc độ xóa chữ
    } else {
        phraseIndex = (phraseIndex + 1) % phrases.length;
        setTimeout(typePhrase, 500); // thời gian trước khi gõ cụm từ tiếp theo
    }
}

// Khởi động hiệu ứng
typePhrase();




// Hiển thị loading screen trong 1 giây (3000 ms)
setTimeout(function() {
    var loadingScreen = document.getElementById('loading-screen');
    loadingScreen.style.display = 'none';
}, 1000);






