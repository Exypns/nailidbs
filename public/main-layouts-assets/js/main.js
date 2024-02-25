// SHOW MENU
const showMenu = (toggleId, navId) => {
    const toggle = document.getElementById(toggleId);
    const nav = document.getElementById(navId);
  
    toggle.addEventListener("click", () => {
      nav.classList.toggle("show-menu");
      toggle.classList.toggle("show-icon");
    });
  };
  
  showMenu("nav-toggle", "nav-menu");
  
  const showDropdownMenu = (a, b, c) => {
    const menu = document.getElementById(a);
    const dropdownMenu = document.getElementById(b);
    const arrow = document.getElementById(c);
  
    menu.addEventListener("click", () => {
      dropdownMenu.classList.toggle("active");
      arrow.classList.toggle("active__dropdown__arrow");
    });
  };
  
  showDropdownMenu("fasilitas-item", "fasilitas-menu", "fasilitas-arrow");
  showDropdownMenu("artikel-item", "artikel-menu", "artikel-arrow");
  showDropdownMenu("informasi-item", "informasi-menu", "informasi-arrow");