// btn animations in gsap
function createBtnAnimation(btn) {
    const btnWidth = btn.offsetWidth
    btn.addEventListener('mouseover', () => gsap.to('.js-navBtn', {duration: .3, width: btnWidth + 20}))
    btn.addEventListener('mouseout', () => gsap.to('.js-navBtn', {duration: .3, width: btnWidth}))

}
const navBtn = document.querySelector('.js-navBtn')
createBtnAnimation(navBtn)
