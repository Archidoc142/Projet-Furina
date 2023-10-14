const indexBar = document.querySelector('.index-bar');
const paragraphs = indexBar.querySelectorAll('p');

indexBar.addEventListener('mouseover', () => {
    paragraphs.forEach(paragraph => {
        paragraph.style.display = 'block';
    });
});

indexBar.addEventListener('mouseout', () => {
    paragraphs.forEach(paragraph => {
        paragraph.style.display = 'none';
    });
});