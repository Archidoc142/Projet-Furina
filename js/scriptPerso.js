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