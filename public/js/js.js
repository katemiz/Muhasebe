
// CKEDITOR
// ***********************

let ck_toolbar,cktype
let IsCkUploadAdapterDefined = false


// BULMA MOBILE MENU TRIGGER
// ***********************

document.addEventListener('DOMContentLoaded', () => {
  // Get all "navbar-burger" elements
  const $navbarBurgers = Array.prototype.slice.call(
    document.querySelectorAll('.navbar-burger'),
    0,
  )

  // Add a click event on each of them
  $navbarBurgers.forEach((el) => {
    el.addEventListener('click', () => {
      // Get the target from the "data-target" attribute
      const target = el.dataset.target
      const $target = document.getElementById(target)

      // Toggle the "is-active" class on both the "navbar-burger" and the "navbar-menu"
      el.classList.toggle('is-active')
      $target.classList.toggle('is-active')
    })
  })
})



function toggleDropdown() {

  let dd = document.getElementById('dmenu')

  if (dd.classList.contains('is-active')) {
      dd.classList.remove('is-active')
  } else {
      dd.classList.add('is-active')
  }

  //console.log(event.target)
}





