const plus = document.querySelector(".adding");
const holder = document.querySelector(".holder");
let i = 0;
plus.addEventListener("click", () => {
    i++;
    const input = document.createElement("input");
    const tlumaczenie = document.createElement("input");
    const p = document.createElement("p");
    const p2 = document.createElement("p");
    input.setAttribute('name', `odzestawu${i}`);
    tlumaczenie.setAttribute('name', `tdzestawu${i}`)
    input.classList.add("wielki");
    tlumaczenie.classList.add("wielki");
    p.textContent = `Fiszka ${i}`;
    p2.textContent = `Tłumaczenie ${i}`
    holder.appendChild(p);
    holder.appendChild(input);
    holder.appendChild(p2);
    holder.appendChild(tlumaczenie);
})