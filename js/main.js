// btn animations in gsap
function createBtnAnimation(btn) {
    const btnWidth = btn.offsetWidth
    btn.addEventListener('mouseover', () => gsap.to('.js-navBtn', {duration: .3, width: 222 + 20 }))
    btn.addEventListener('mouseout', () => gsap.to('.js-navBtn', {duration: .3, width: btnWidth}))

}

const navBtn = document.querySelector('.js-navBtn')
    createBtnAnimation(navBtn)

function hamburger() {
    const body = document.querySelector('body')
    const navWrapper = document.querySelector('.nav__wrapper')
    const navContainer = navWrapper.querySelector('.nav__container')
    const mobileNavContainer = body.querySelector('.hamburger__container')
    const navIcon = mobileNavContainer.querySelector('.hamburger__btn')
    const links = navWrapper.querySelectorAll('.nav__link')

    function hide() {
        if (window.innerWidth < 1024) {
        body.classList.toggle('overflow--hidden')
        navContainer.classList.toggle('mobile--hidden')
        navWrapper.classList.toggle('nav__wrapper--show')
        }
    }

    navIcon.addEventListener('click', () => {
        hide()
        if (navWrapper.classList.contains('nav__wrapper--show')) {
            Array.from(links).forEach(el => {
                el.addEventListener('click', hide)
            })
        }

    })


}

hamburger()
