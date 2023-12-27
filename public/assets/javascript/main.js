const navMenu = document.getElementById('nav-menu'),
      navBeralih = document.getElementById('nav-beralih'),
      navClose = document.getElementById('nav-close')

// =========Menampilkan Menu==========
// Penerapan Kondisi If
if(navBeralih){
    navBeralih.addEventListener('click', () =>{
        navMenu.classList.add('show-menu')
    })
}

// =========Menghilangkan Menu==========
if(navClose){
    navClose.addEventListener('click', () =>{
        navMenu.classList.remove('show-menu')
    })
}

// =========Menghilangkan Menu di HP==========
const navLink = document.querySelectorAll('.nav__link')

function linkAction(){
    const navMenu = document.getElementById('nav-menu')
    // Ketika Kita Click Setiap Kelas nav__link, 
    // Maka Kita Menghilangkan Kelas show-menu
    navMenu.classList.remove('show-menu')
}
navLink.forEach(x => x.addEventListener('click', linkAction))

// =========Mengganti Background Header==========
function scrollHeader(){
    const header = document.getElementById('header')
    // Ketika scroll lebih dari 80 tinggi visualViewport,
    // tambahkan kelas scroll-header ke tag header.
    if(this.scrollY >= 80) header.classList.add('scroll-header'); else header.classList.remove('scroll-header')
}
window.addEventListener('scroll', scrollHeader)

// =========Link Aktif Bagian Gulir==========
const sections = document.querySelectorAll('section[id')

function scrollActive(){
    const scrollY = window.pageYOffset

    sections.forEach(current =>{
        const sectionHeight = current.offsetHeight,
              sectionTop = current.offsetTop,
              sectionId = current.getAttribute('id')
        
        if(scrollY > sectionTop && scrollY <= sectionTop + sectionHeight){
            document.querySelector('.nav__menu a[href*=' + sectionId + ']').classList.add('active-link')
        }else{
            document.querySelector('.nav__menu a[href*=' + sectionId + ']').classList.remove('active-link')
        }
    })
}
window.addEventListener('scroll', scrollActive)