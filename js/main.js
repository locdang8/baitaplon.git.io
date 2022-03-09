// -------------------Slide-----------------------------------------
const imgposition=document.querySelectorAll('.aspect-ratio-169 img')
    const imgcontain =  document.querySelector('.aspect-ratio-169')
    const dotitem = document.querySelectorAll('.dot')
    let imgnumber = imgposition.length
    let index=0
    imgposition.forEach(function(image,index){
        image.style.left = index*100 +"%"
        dotitem[index].addEventListener('click',function(){
            slide(index)
        })
    })
    function imgslide(){
        index++
        if(index>=imgnumber) {index=0}
        slide(index)
    }
    function slide(index){
        imgcontain.style.left= "-" +index*100+ "%"
        const dotactive = document.querySelector('.active')
        dotactive.classList.remove('active')
        dotitem[index].classList.add('active')
    }
    setInterval(imgslide,5000)
// -----------------------------Chọn mở rộng item trong menu danh mục--------------------
const itemsclick = document.querySelectorAll(".category-menu__list-item")
itemsclick.forEach(function(menu,index){
    menu.addEventListener("click",function(){
        menu.classList.toggle("block")
    })
})
//-----------lọc sản phẩm-----------------------------------------
const locsp = document.querySelector(".category-grid__head-btn")
if(locsp){
    locsp.addEventListener("click",function(){
        document.querySelector(".category-grid__head-filter-extend").classList.toggle("open")
    })
}

// ---------------------------Chi tiet san pham-----------------
        // ----------Lựa chọn ảnh------------------
const bigimg = document.querySelector(".product__content-left-big-img")
const smallimg = document.querySelectorAll(".product__content-left-small-img")
smallimg.forEach(function(imgitem,x){
    imgitem.addEventListener("click",function(){
        bigimg.src = imgitem.src
    })
})

        // ----------chọn xem thông tin sản phẩm-------
const infor = document.querySelector(".infor")
const detail = document.querySelector(".detail")
const down= document.querySelector(".down")
if(infor){
    infor.addEventListener("click",function(){
        document.querySelector(".product__content-right-bottom-content-data-detail").style.display = "none"
        document.querySelector(".product__content-right-bottom-content-data-infor").style.display = "block"
    })
}
if(detail){
    detail.addEventListener("click",function(){
        document.querySelector(".product__content-right-bottom-content-data-infor").style.display = "none"
        document.querySelector(".product__content-right-bottom-content-data-detail").style.display = "block"
    })
}
if(down){
    down.addEventListener("click",function(){
        document.querySelector(".product__content-right-bottom-content").classList.toggle("active2")
    })
}

//mo menu mobile
const menu=document.querySelector(".menu-mobile__btn")
const time=document.querySelector(".menu-check")
const search= document.querySelector(".others__item-mobile-icon")
if(menu){
    menu.addEventListener("click",function(){
        document.querySelector(".menu-mobile").style.transform="translateX(0%)"
        document.querySelector(".menu__overlay").style.display="block"
    })
}

if(time){
    time.addEventListener("click",function(){
        document.querySelector(".menu-mobile").style.transform="translateX(-100%)"
        document.querySelector(".menu__overlay").style.display="none"
    })
}
if(search){
    search.addEventListener("click",function(){
        document.querySelector(".others__item-mobile-input").style.display="none"
    })
}

//tim kiem tren mobile
const timkiem = document.querySelector(".mobile-search-icon")
if(timkiem){
    timkiem.addEventListener("click",function(){
        document.querySelector(".mobile__search").style.display="block"
    })
}
const closetimkiem = document.querySelector(".search__up")
if(closetimkiem){
    closetimkiem.addEventListener("click",function(){
        document.querySelector(".mobile__search").style.display="none"
    })
}

const spclick = document.querySelector(".sp_mobile")
if(spclick){
    spclick.addEventListener("click",function(){
        document.querySelector(".category-mobile-menu").classList.toggle("active3")
    })
}