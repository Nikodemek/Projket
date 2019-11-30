const zestawy = {
    angileski: {
        zestaw_1: ['cat', 'dog', 'elephant', 'lion', 'bear', 'lizard'],
        tlumaczenie_1: ['kot', 'pies', 'słoń', 'lew', 'miś', 'jaszczurka']
    },
    niemiecki: {

    },
    francuski: {

    }
}
let i = 0;
const right = document.querySelector(".zestawy .nauka .fas:nth-child(2)");
const left = document.querySelector(".zestawy .nauka .fas:nth-child(3)");
const upper = document.querySelector(".zestawy .nauka #first_nauka");
const lower = document.querySelector(".zestawy .nauka #second_nauka");

upper.textContent = zestawy.angileski.zestaw_1[0];
lower.textContent = zestawy.angileski.tlumaczenie_1[0];

right.addEventListener('click', () => {
    i++;
    if (i >= zestawy.angileski.zestaw_1.length) {
        i = 0;
        upper.textContent = zestawy.angileski.zestaw_1[0];
        lower.textContent = zestawy.angileski.tlumaczenie_1[0];
    } else {
        upper.textContent = zestawy.angileski.zestaw_1[i];
        lower.textContent = zestawy.angileski.tlumaczenie_1[i];
    }
    right.classList.add("swietlik");
    if (left.className == 'fas fa-chevron-left swietlik') {
        left.classList.remove("swietlik");
    }
});

left.addEventListener('click', () => {
    i--;
    if (i < 0) {
        i = zestawy.angileski.zestaw_1.length;
        upper.textContent = zestawy.angileski.zestaw_1[zestawy.angileski.zestaw_1.length - 1];
        lower.textContent = zestawy.angileski.tlumaczenie_1[zestawy.angileski.zestaw_1.length - 1];
    } else {
        upper.textContent = zestawy.angileski.zestaw_1[i];
        lower.textContent = zestawy.angileski.tlumaczenie_1[i];
    }
    left.classList.add("swietlik");
    if (right.className == 'fas fa-chevron-right swietlik') {
        right.classList.remove("swietlik");
    }
});