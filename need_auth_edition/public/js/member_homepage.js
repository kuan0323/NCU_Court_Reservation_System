let basketballs_section = document.querySelector("#basketballs");
let basketball_button = document.querySelector("#basketball");
let badmintons_section = document.querySelector("#badmintons");
let badminton_button = document.querySelector("#badminton");
let tennises_section = document.querySelector("#tennises");
let tennis_button = document.querySelector("#tennis");
let volleyballs_section = document.querySelector("#volleyballs");
let volleyball_button = document.querySelector("#volleyball");

let basketball_open = false;
basketball_button.addEventListener("click", (e) => {
  if (basketball_open == false) {
    let courts = document.createElement("div");
    courts.classList.add("courts");
    courts.appendChild(createCourt("籃球場A"));
    courts.appendChild(createCourt("籃球場B"));
    courts.appendChild(createCourt("籃球場C"));
    basketballs_section.appendChild(courts);
    basketball_open = true;
  } else {
    removeAllChildNodes(basketballs_section);
    basketball_open = false;
  }
});

let badminton_open = false;
badminton_button.addEventListener("click", (e) => {
  if (badminton_open == false) {
    let courts = document.createElement("div");
    courts.classList.add("courts");
    courts.appendChild(createCourt("羽球場A"));
    courts.appendChild(createCourt("羽球場B"));
    courts.appendChild(createCourt("羽球場C"));
    badmintons_section.appendChild(courts);
    badminton_open = true;
  } else {
    removeAllChildNodes(badmintons_section);
    badminton_open = false;
  }
});

let tennis_open = false;
tennis_button.addEventListener("click", (e) => {
  if (tennis_open == false) {
    let courts = document.createElement("div");
    courts.classList.add("courts");
    courts.appendChild(createCourt("網球場A"));
    courts.appendChild(createCourt("網球場B"));
    courts.appendChild(createCourt("網球場C"));
    tennises_section.appendChild(courts);
    tennis_open = true;
  } else {
    removeAllChildNodes(tennises_section);
    tennis_open = false;
  }
});

let volleyball_open = false;
volleyball_button.addEventListener("click", (e) => {
  if (volleyball_open == false) {
    let courts = document.createElement("div");
    courts.classList.add("courts");
    courts.appendChild(createCourt("排球場A"));
    courts.appendChild(createCourt("排球場B"));
    courts.appendChild(createCourt("排球場C"));
    volleyballs_section.appendChild(courts);
    volleyball_open = true;
  } else {
    removeAllChildNodes(volleyballs_section);
    volleyball_open = false;
  }
});

function removeAllChildNodes(parent) {
  while (parent.firstChild) {
    parent.removeChild(parent.firstChild);
  }
}

function createCourt(name) {
  let court = document.createElement("a");
  court.classList.add("court");
  court.innerText = name;
  court.setAttribute("href", "#");
  return court;
}
