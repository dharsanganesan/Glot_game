        const mainToggle = document.querySelector(".main-toggle");
const nav = document.querySelector(".nav");
mainToggle.onclick = () => {
  nav.classList.toggle("open");
};

const listIcon = document.querySelectorAll(".list-icon");
listIcon.forEach((icon) => {
  icon.onclick = () => {
    listIcon.forEach((icon) => icon.classList.remove("active"));
    icon.classList.add("active");
  };
});

const stages = document.querySelectorAll(".stage");

window.addEventListener("scroll", () => {
  stages.forEach(stage => {
    const rect = stage.getBoundingClientRect();
    if (rect.top < window.innerHeight - 100) {
      stage.classList.add("active");
    } else {
      stage.classList.remove("active");
    }
  });
});