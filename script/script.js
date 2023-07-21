const imgList = document.getElementById('imgList');
const singleImg = imgList.querySelectorAll('img');
const docs = document.getElementById('docs');
const menuItem = document.getElementsByClassName('menuItem');
let num = 0;
let sec = 5000;
let docsHtml = '';
const menu = document.getElementById('menu');
const menuBtn = document.getElementById('menuBtn');
let isOpenMenu = false;
const menuIcon = document.querySelector(".menu-icon");
const lines = document.querySelectorAll(".no-animation");
const header = document.getElementById('header');
const project = document.getElementsByClassName('project');
const workModal = document.getElementById('workModal');
const closeWorkModalBtn = document.getElementById('closeWorkModalBtn');
const workMainImg = document.getElementById('workMainImg');
const smallImgList  = document.getElementById('smallImgList');
const smallworkImg = document.getElementsByClassName('smallworkImg');
const messageForm = document.getElementById('messageForm');
const messageName = document.getElementById('messageName');
const messageEmail = document.getElementById('messageEmail');
const messageTitle = document.getElementById('messageTitle');
const messageContent = document.getElementById('messageContent');
const messageSubmit = document.getElementById('messageSubmit');

const loading = document.getElementById('loading')
const bar = document.getElementById('bar');
let barNum = 0
let timerBar = null
let onloadTimeBar = null
timerBar = setInterval(()=>{
    barNum++
    if(barNum >=30){
        clearInterval(timerBar)
    }
    bar.style.width = `${barNum}%`
    
}, 20)
window.onload = ()=>{
    clearInterval(timerBar)
    barNum = 30
    onloadTimeBar = setInterval(()=>{
        barNum++
        if(barNum >=100){
            clearInterval(timerBar)
            loading.classList.add('onload')
            setTimeout(()=> {
                loading.style.display = "none"
            }, 200)
        }
        bar.style.width = `${barNum}%`
    }, 20)
}
let workArr = ['合遠', '君天下', '幸福樂', '明築向陽4F', '明築向陽B1-3F', '莉朵', '晴灣', '愛慕', '極光', '權視界'];
let workObj = {'合遠':9, '君天下':9, '幸福樂':9, '明築向陽4F':9, '明築向陽B1-3F':9, '莉朵':9, '晴灣':7, '愛慕':8, '極光':9, '權視界':6};
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

menuBtn.addEventListener('click', clickMenu);
function clickMenu(){
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
}
window.addEventListener('scroll', ()=>{
    if(this.scrollY > 0){
        header.classList.add('active')
    }else{
        header.classList.remove('active')
    }
})

// for(let i=0;i<project.length;i++){
//     project[i].addEventListener('click', openWorkFn, false);
// }
function openWorkFn(n){
    workModal.style.display = "flex";
    console.log(n);
    workMainImg.src = `./images/${workArr[n]}/1.jpg`;
    let smallImgHtml = '';
    console.log(workObj[`${workArr[n]}`]);
    for(let i=1;i<=workObj[`${workArr[n]}`];i++){
        smallImgHtml += `<img src='./images/${workArr[n]}/${i}.jpg' class='smallworkImg'>`;
    }
    smallImgList.innerHTML = smallImgHtml;
    for(let i=0;i<smallworkImg.length;i++){
        smallworkImg[i].addEventListener('click', toggleMainImgFn);
    }
}
closeWorkModalBtn.addEventListener('click', ()=>{
    workModal.style.display = "none";
})

function toggleMainImgFn(e){
    workMainImg.src = e.target.src;
}
for(let i=0;i<menuItem.length;i++){
    menuItem[i].addEventListener('click', clickMenu)
}

sendMessage.addEventListener('click',()=>{
    if(messageName.value == ""){
        alert('請輸入姓名！');
        return;
    }
    if(messageEmail.value == ""){
        alert('請輸入Email！');
        return;
    }
    if(messageTitle.value == ""){
        alert('請輸入主旨！');
        return;
    }
    if(messageContent.value == ""){
        alert('請輸入內容！');
        return;
    }
    messageSubmit.click();
})