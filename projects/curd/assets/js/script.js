document.addEventListener("DOMContentLoaded", () => {
  let links = document.querySelectorAll('.delete');

  links.forEach(link => {
    link.addEventListener('click', (e) => {
      if (!confirm("Are you sure!")) {
        e.preventDefault();
      }
    })
  })
})