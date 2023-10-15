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