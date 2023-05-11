const mainView = document.querySelector(".main img");
const view = document.querySelectorAll(".view1 img");
let start = 0
view[start].classList.add('imgBorder');
for(let i=0;i<view.length;i++){
    view[i].addEventListener('click',()=>{
      mainView.src = view[i].src;
      view[start].classList.remove('imgBorder');
      start = i;
      view[start].classList.add('imgBorder');
    })
}
//dropdown menu

const navList =  document.querySelector('.navList2');

document.querySelector('.dropDown i').addEventListener('click',()=>{
  navList.classList.toggle('hidden2');
  navList.classList.toggle('navListAnimation');
  
})