const myCarouselElement = document.querySelector('#carouselExampleControlsNoTouching')

const carousel = new bootstrap.Carousel(myCarouselElement, {
  interval: 1500,
  touch: false
})