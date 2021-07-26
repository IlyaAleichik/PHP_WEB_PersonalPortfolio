const locoScroll = new LocomotiveScroll({
    el: document.querySelector('[data-scroll-container]'),
    smooth: true,
    smoothMobile: false,
    direction: 'horizontal',
    inertia: 0.8,
    repeat: true,
  })

  const bttBtn = document.getElementById('back-to-top-btn')
  bttBtn.addEventListener(
    'click',
    function () {
      locoScroll.scrollTo(0)
    },
    false
  )

  const tl = gsap.timeline()
  const maskSec1 = document.querySelector('.mask-sec-1')
  tl.from(maskSec1, {
    opacity: 0,
    x: '-100px',
    duration: 1.5,
    ease: 'power3.out',
  }).from(
    '.lines > h1',
    {
      opacity: 0,
      x: '100px',
      stagger: 0.15,
      duration: 1.2,
      ease: 'power3.inOut',
    },
    'start-=1.45'
  )