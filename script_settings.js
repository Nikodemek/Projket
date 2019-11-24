const passwordBtn = document.querySelector("#passChange");
const miniWrap = document.querySelector(".mini_wrap")
passwordBtn.addEventListener("click", (e) => {
    e.preventDefault();
    miniWrap.classList.toggle("flex");
    miniWrap.classList.toggle("none")
})