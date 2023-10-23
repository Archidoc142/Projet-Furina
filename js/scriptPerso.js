const catButtons = document.querySelectorAll('.cat');
const contenu = document.querySelectorAll('.contenu');
let background = document.querySelector('.image-background');

catButtons.forEach(button => {
     button.addEventListener('click', () => {
        if (!button.classList.contains('active')) {
            catButtons.forEach(otherButton => {
                otherButton.classList.remove('active');
            });

            button.classList.add('active');
            
            for(i = 0; i < catButtons.length; i++){
                if(catButtons[i] != button){
                    contenu[i].classList.add('hidden');
                } else {
                    contenu[i].classList.remove('hidden');
                }
            }
        }

        if (button != catButtons[0]){
            background.style.opacity = 0.1;
        } else {
            background.style.opacity = 1;
        }
    });
});

const btnPeso = document.querySelectorAll('.iconPerso');
const descTenue = document.querySelectorAll('.descTenue');

btnPeso.forEach(button => {
     button.addEventListener('click', () => {
        if (!button.classList.contains('active')) {
            btnPeso.forEach(otherButton => {
                otherButton.classList.remove('active');
            });

            button.classList.add('active');
            
            for(i = 0; i < btnPeso.length; i++){
                if(btnPeso[i] != button){
                    descTenue[i].classList.add('hidden');
                } else {
                    descTenue[i].classList.remove('hidden');
                }
            }
        }
    });
});

const tdd = document.querySelectorAll('.tdd');
const tdv = document.querySelectorAll('.tdv');
const range = document.querySelector('.rangeLv');

range.addEventListener("input", () => {
    const tdElements = tdd[range.value].querySelectorAll('td');

    for(i = 0; i < 5; i++){
        if (i === 0){
            tdv[i].innerHTML = 'Lv. ' + tdElements[i].textContent;
        } else {
            tdv[i].innerHTML = tdElements[i].textContent;
        }
    }
});