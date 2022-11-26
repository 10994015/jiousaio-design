const imgList = document.getElementById('imgList');
const singleImg = imgList.querySelectorAll('img');
const docs = document.getElementById('docs');
let num = 0;
let sec = 5000;
let docsHtml = '';
const menu = document.getElementById('menu');
const menuBtn = document.getElementById('menuBtn');
let isOpenMenu = false;
const menuIcon = document.querySelector(".menu-icon");
const lines = document.querySelectorAll(".no-animation");
const header = document.getElementById('header');
function generateDocs(){
    for(let i=0;i<singleImg.length - 1;i++){
        docsHtml += `<div class="doc doc-${i}"></div>`;
    }
    docs.innerHTML = docsHtml;
    document.getElementsByClassName('doc')[0].classList.add('focus');
}
generateDocs();
const doc = document.getElementsByClassName('doc');
for(let d=0;d<doc.length;d++){
    doc[d].addEventListener('click', clickDocFn);
}
function clickDocFn(e){
    let docNum = Number(e.target.classList[1].split('-')[1]);
    num = docNum;
    initDocs();
    e.target.classList.add('focus');
    for(let i=0;i<singleImg.length;i++){
        singleImg[i].style.transform = `translateX(-${num*100}%)`
        singleImg[i].style.transition = '.3s';
    }
}
function initDocs(){
    for(let i=0;i<doc.length;i++){
        doc[i].classList.remove('focus');
    }
}
function timer(){
    initDocs();
    num++;
    if(num >= singleImg.length){
        for(let i=0;i<singleImg.length;i++){
            singleImg[i].style.transform = `translateX(0)`
            singleImg[i].style.transition = 'none';
        }
        doc[0].classList.add('focus');
        num = 0;
    }else{
        for(let i=0;i<singleImg.length;i++){
            singleImg[i].style.transform = `translateX(-${num*100}%)`
            singleImg[i].style.transition = '.3s';
        }
        if(num == doc.length){
            doc[0].classList.add('focus');
        }else{
            doc[num].classList.add('focus');
        }
    }
    
}
setInterval(timer, sec);

menuBtn.addEventListener('click', ()=>{
    isOpenMenu = !isOpenMenu;
    lines.forEach((line) => {
        line.classList.remove("no-animation");
      });
    menuIcon.classList.toggle("active");
    if(isOpenMenu){
        menu.style.display = 'flex';
        header.classList.add('transparent');
    }else{
        menu.style.display = 'none';
        header.classList.remove('transparent');
    }
})

window.addEventListener('scroll', ()=>{
    if(this.scrollY > 0){
        header.classList.add('active')
    }else{
        header.classList.remove('active')
    }
})
