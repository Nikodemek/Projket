const plus = document.querySelector(".adding");
const holder = document.querySelector(".holder form");
let i = 3;
plus.addEventListener("click", () => {
    i++;
    const input = document.createElement("input");
    const tlumaczenie = document.createElement("input");
    const minus = document.createElement("i");
    const p = document.createElement("p");
    const p2 = document.createElement("p");
    input.setAttribute('name', `ezestaw2${i}`);
    tlumaczenie.setAttribute('name', `etzestaw${i}`)
    minus.classList.add("far");
    minus.classList.add("fa-minus-square");
    minus.classList.add("remove");
    input.classList.add("wielki");
    tlumaczenie.classList.add("wielki");
    p.textContent = `Fiszka ${i}`;
    p2.textContent = `Tłumaczenie ${i}`
    holder.appendChild(p);
    holder.appendChild(input);
    holder.appendChild(p2);
    holder.appendChild(tlumaczenie);
    holder.appendChild(minus);
})