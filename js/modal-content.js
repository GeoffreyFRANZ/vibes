// VIDEO  MODAL CONTENT

let video1 = document.querySelector('.video1'),
srcVideo1 = "https://www.dailymotion.com/embed/video/x5hop3z?autoplay=1",
video2 = document.querySelector('.video2'),
srcVideo2 = "https://www.dailymotion.com/embed/video/x5msbh6?autoplay=1" 


//  creation de la video  dans  le modal 
function videoModal(video, source, selection) {
  var video = document.createElement("iframe")
  selection.addEventListener('click', () => {
    video.setAttribute('src' , source)
    document.querySelector('.modal').appendChild(video)
    document.querySelector('.modal').classList.remove('none')
    document.querySelector('.modal').classList.add('dflex')
  })
  document.querySelector('.close').addEventListener('click', () => {
    document.querySelector('.modal').classList.add('none')
    document.querySelector('.modal').classList.remove('dflex')
    document.querySelector('.modal').removeChild(video)
  })
}

video1.addEventListener('click', videoModal(video1, srcVideo1, video1))
video2.addEventListener('click', videoModal(video2, srcVideo2, video2))


var img1 = document.querySelector('.image1'),
  src1 = img1.getAttribute('src'),

  img2 = document.querySelector('.image2'),
  src2 = img2.getAttribute('src'),

  img3 = document.querySelector('.image3'),
  src3 = img3.getAttribute('src'),

  img4 = document.querySelector('.image4'),
  src4 = img4.getAttribute('src'),

  img5 = document.querySelector('.image5'),
  src5 = img5.getAttribute('src'),

  img6 = document.querySelector('.image6'),
  src6 = img6.getAttribute('src'),

  img7 = document.querySelector('.image7'),
  src7 = img7.getAttribute('src'),

  img8 = document.querySelector('.image8'),
  src8 = img8.getAttribute('src'),

  img9 = document.querySelector('.image9'),
  src9 = img9.getAttribute('src'),
  
  img10 = document.querySelector('.image10'),
  src10 = img10.getAttribute('src')


//  creation de l'image dans le modal 
function imageModal(img, src , selection) {
  var img = document.createElement("IMG")
  selection.addEventListener('click', () => {
    img.setAttribute("src", src)
    img.setAttribute("width", "auto")
    img.setAttribute("height", "auto")
    img.setAttribute('object-fit', 'none')
    document.querySelector('.modal').appendChild(img)
    document.querySelector('.modal').classList.remove('none')
    document.querySelector('.modal').classList.add('dflex')
  })
  document.querySelector('.close').addEventListener('click', () => {
    document.querySelector('.modal').classList.add('none')
    document.querySelector('.modal').classList.remove('dflex')
    document.querySelector('.modal').removeChild(img)
  })
}
img1.addEventListener('click' , imageModal(img1, src1 , img1))
img2.addEventListener('click' , imageModal(img2, src2 , img2))
img3.addEventListener('click' , imageModal(img3, src3 , img3))
img4.addEventListener('click' , imageModal(img4, src4 , img4))
img5.addEventListener('click' , imageModal(img5, src5 , img5))
img6.addEventListener('click' , imageModal(img6, src6 , img6))
img7.addEventListener('click' , imageModal(img7, src7 , img7))
img8.addEventListener('click' , imageModal(img8, src8 , img8))
img9.addEventListener('click' , imageModal(img9, src9 , img9))
img10.addEventListener('click' , imageModal(img10, src10 , img10))




