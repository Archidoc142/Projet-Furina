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
        changeOrder(false);
    } else {
        filterObjectList.innerHTML = '<a class="whitneyBold">▼</a>';
        changeOrder(true);
    }
});

function changeOrder(order){
    if (order){
        for (let i = 0; i < items.length; i++) {
            items[i].style.order = items.length - 1 - i;
        }    
    } else {
        for (let i = 0; i < items.length; i++) {
            items[i].style.order = i;
        }  
    }
};

const searchBar = document.getElementById('searchBar');
const items = document.querySelectorAll('.objectList-item');

searchBar.addEventListener('input', () => {
    const recherche = searchBar.value.toLowerCase();

    items.forEach(function(item){
        let nom = item.getAttribute('data-nom').toLowerCase();
        if (nom.includes(recherche)){
            item.style.display = 'block';
            item.setAttribute('data-filtered', 'false');
        }
        else {
            item.style.display = 'none';
            item.setAttribute('data-filtered', 'true');
        }
    })
    passFilter();
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

const filterButtons = document.querySelectorAll('.filter-button');

filterButtons.forEach(button => {
    button.addEventListener('click', () => {
        if (button.innerText == 'All') {
            const btnParent = button.parentNode.parentNode.querySelectorAll('.filter-button');
            const isActive = button.classList.contains('active');

            if (isActive) {
                btnParent.forEach(btn => {
                    btn.classList.remove('active');
                });
            } else {
                btnParent.forEach(btn => {
                    btn.classList.add('active');
                });
            }
        } else {
            button.classList.toggle('active');
        }
        passFilter();
    });
});

function passFilter() {
    const filterRarity = document.querySelector('.filter-rarity-con');
    const filterArme = document.querySelector('.filter-arme-con');
    const filterElement = document.querySelector('.filter-element-con');

    const rarityButtons = filterRarity.querySelectorAll('.filter-button');
    const ArmeButtons = filterArme.querySelectorAll('.filter-button');
    const elementButtons = filterElement.querySelectorAll('.filter-button');

    items.forEach(item => {
        const itemRarity = item.getAttribute('data-rarity');
        const itemArme = item.getAttribute('data-arme');
        const itemElement = item.getAttribute('data-element');
        const isFiltered = item.getAttribute('data-filtered') === 'true';

        let shouldDisplay = !isFiltered;

        rarityButtons.forEach(button => {
            const btn = button.getAttribute('data-val');
            if (!button.classList.contains('active') && btn === itemRarity) {
                shouldDisplay = false;
            }
        });
        ArmeButtons.forEach(button => {
            const btn = button.getAttribute('data-val');
            if (!button.classList.contains('active') && btn === itemArme) {
                shouldDisplay = false;
            }
        });
        elementButtons.forEach(button => {
            const btn = button.getAttribute('data-val');
            if (!button.classList.contains('active') && btn === itemElement) {
                shouldDisplay = false;
            }
        });

        if (!shouldDisplay) {
            item.style.display = 'none';
        } else {
            item.style.display = 'block';
        }
    });
};

function selectObject() {
    const chosenType = document.getElementById('selectionType');
    if (chosenType.value === '0'){
        items.forEach((item) => {
          const isFiltered = item.getAttribute('data-filtered') === 'true';
          let shouldDisplay = !isFiltered;     
          if (!shouldDisplay) {
            item.style.display = 'none';
          } else {
            item.style.display = 'block';
          }
          });
        return;
    }

    items.forEach((item) => {
       const itemType = item.getAttribute('data-type');
       const isFiltered = item.getAttribute('data-filtered') === 'true';
       let shouldDisplay = !isFiltered;

       if(chosenType.value !== itemType){
          shouldDisplay = false;
       }

       if (!shouldDisplay) {
          item.style.display = 'none';
       } else {
          item.style.display = 'block';
       }
    });
 };