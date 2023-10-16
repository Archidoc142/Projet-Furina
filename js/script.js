// Nav

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


const searchBar = document.getElementById('searchBar');
const items = document.querySelectorAll('.objectList-item');

searchBar.addEventListener('input', function(){
    const recherche = searchBar.value.toLowerCase();

    items.forEach(function(item){
        let nom = item.getAttribute('data-nom').toLowerCase();
        if (nom.includes(recherche)){
            item.style.display = 'block';
        }
        else {
            item.style.display = 'none';
        }
    })
});


const openFilterButtons = document.querySelectorAll('[data-filter-target]');
const closeFilterButtons = document.querySelectorAll('[data-close-button]');
const overlay = document.getElementById('overlay');

openFilterButtons.forEach(button => {
    button.addEventListener('click', () => {
        const filter = document.querySelector(button.dataset.filterTarget);
        openFilter(filter);
    });
});

overlay.addEventListener('click', () => {
    const filters = document.querySelectorAll('.filter.active');
    filters.forEach(filter => {
        closeFilter(filter);
    });
});

closeFilterButtons.forEach(button => {
    button.addEventListener('click', () => {
        const filter = button.closest('.filter');
        closeFilter(filter);
    });
});

closeFilterButtons.forEach(button => {
    button.addEventListener('mousedown', () => {
        button.style.transition = 'background-color 0.3s, color 0.3s, border-color 0.3s';
        button.style.backgroundColor = '#706884';
        button.style.color = '#9a91a0';
        button.style.borderColor = '#706884';
    });
});

closeFilterButtons.forEach(button => {
    button.addEventListener('mouseup', () => {
        button.style.transition = 'background-color 0.3s, color 0.3s, border-color 0.3s';
        button.style.backgroundColor = '#ECE4D9';
        button.style.color = 'rgba(23,20,33)';
        button.style.borderColor = '(75,85,99,0.5)';
    });
});

function openFilter(filter) {
    if (filter == null) return;
    filter.classList.add('active');
    overlay.classList.add('active');
};

function closeFilter(filter) {
    if (filter == null) return;
    filter.classList.remove('active');
    overlay.classList.remove('active');
};