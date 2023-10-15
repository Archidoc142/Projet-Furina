const indexBar = document.querySelector('.index-bar');
const paragraphe_index_bar = indexBar.querySelectorAll('p');

indexBar.addEventListener('mouseover', () => {
    paragraphe_index_bar.forEach(paragraph => {
        paragraph.style.display = 'block';
    });
});

indexBar.addEventListener('mouseout', () => {
    paragraphe_index_bar.forEach(paragraph => {
        paragraph.style.display = 'none';
    });
});

// Filtres

const filterObjectList = document.querySelector('.ordre');

filterObjectList.addEventListener('click', () => {
    if (filterObjectList.textContent.includes('▼')) {
        filterObjectList.innerHTML = '<a class="whitneyBold">▲</a>';
    } else {
        filterObjectList.innerHTML = '<a class="whitneyBold">▼</a>';
    }
});