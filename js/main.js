// btn animations in gsap
function createBtnAnimation(btn) {
    const btnWidth = btn.offsetWidth
    btn.addEventListener('mouseover', () => gsap.to('.js-navBtn', {duration: .3, width: btnWidth + 20}))
    btn.addEventListener('mouseout', () => gsap.to('.js-navBtn', {duration: .3, width: btnWidth}))

}

const navBtn = document.querySelector('.js-navBtn')
createBtnAnimation(navBtn)

function hamburger() {
    const navWrapper = document.querySelector('.nav__wrapper')
    const navContainer = navWrapper.querySelector('.nav__container')
    const navIcon = document.querySelector('.hamburger__btn')

    navIcon.addEventListener('click', () => {
        navContainer.classList.toggle('mobile--hidden')
        navWrapper.classList.toggle('nav__wrapper--show')
    })

}

hamburger()
