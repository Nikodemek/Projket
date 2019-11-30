const radio1 = document.querySelector("#ruczen");
const radio2 = document.querySelector("#rnaucz");
const radio3 = document.querySelector("#radmin")
const hidden = document.querySelector(".hidden");
radio1.addEventListener('click', () => {
    hidden.classList.remove("hidden");
});
radio2.addEventListener('click', () => {
    hidden.classList.add("hidden");
})

radio3.addEventListener('click', () => {
    hidden.classList.add("hidden");
})