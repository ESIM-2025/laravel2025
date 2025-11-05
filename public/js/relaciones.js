// Efecto de aparición suave al hacer scroll
document.addEventListener("scroll", () => {
    const elementos = document.querySelectorAll(".animado");
    const trigger = window.innerHeight * 0.85;

    elementos.forEach(el => {
        const top = el.getBoundingClientRect().top;
        if (top < trigger) el.classList.add("visible");
    });
});
