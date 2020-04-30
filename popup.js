export function setup() {
    document.querySelector("button").addEventListener('click', togglePopup)
}


async function togglePopup() {
    const overlay = document.querySelector(".overlay");
    const popup = document.querySelector(".popup");
    
    if(overlay.classList.contains('show')) {
        overlay.classList.remove('show');
    } else {
        const data = await fetchPopupData();
        
        popup.innerHTML = data.data;
        overlay.classList.add('show');
    }
}

async function fetchPopupData() {
    const response = await fetch('popup-data')
    return response.json();
}
