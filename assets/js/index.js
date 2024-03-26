document.addEventListener('DOMContentLoaded',function () {
  const dropdownLinks = document.querySelectorAll('.dropdown-link');
  dropdownLinks.forEach(function (link) {
    link.addEventListener('click',function (e) {
      e.preventDefault();
      const dropdown = link.nextElementSibling;
      const isActive = dropdown.classList.contains('active');

      dropdownLinks.forEach(function (otherLink) {
        const otherdropdown = otherLink.nextElementSibling;
        otherdropdown.style.height = '0';
        otherdropdown.classList.remove('active');
      });

      if (!isActive) {
        const height = dropdown.scrollHeight + 'px';
        dropdown.style.height = height;
        dropdown.classList.add('active');
      }
    });
  });
  function handleResize() {
    dropdownLinks.forEach(function (link) {
      const dropdown = link.nextElementSibling;
      if (!dropdown.classList.contains('active')) {
        dropdown.style.height = window.innerWidth > 1300 ? 'auto' : '0';
      }
    });
  }
  handleResize();
  window.addEventListener('resize',handleResize);


  const headerlist = document.querySelector(".topmenu");
  const burgerButton = document.querySelector(".menu-burger");
  burgerButton.addEventListener("click",function () {
    burgerButton.classList.toggle("active");
    headerlist.classList.toggle("active");
    document.body.classList.toggle("disable-scroll");
  });
});
const goBackButton = document.getElementById('goBackButton');
goBackButton.addEventListener('click', function() {
  window.history.back();
});