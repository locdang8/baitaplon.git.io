const activeSideBar__btn = document.querySelector('.activeSideBar__btn');

const sidebar__open = document.querySelector('.sidebar__open');

activeSideBar__btn.addEventListener("click", ()=> {

	document.querySelector('.sidebar').style.display = "flex";

	document.querySelector('.activeSideBar').style.display = "none";
})


sidebar__open.addEventListener("click", ()=> {

	document.querySelector('.sidebar').style.display = "none";

	document.querySelector('.activeSideBar').style.display = "block";

});

// function openSideBar() {
// 	document.querySelector('.sidebar').style.display = "flex";

// 	document.querySelector('.activeSideBar').style.display = "none";
// }

function closeSideBar() {

	document.querySelector('.sidebar').style.display = "none";

	document.querySelector('.activeSideBar').style.display = "block";
}

const sanpham = document.querySelector('#sanpham');

const theloai = document.querySelector('#theloai');

// const nhanvien = document.querySelector('#nhanvien');

const user = document.querySelector('#user');

const hoadon = document.querySelector("#hoadon");

const giohang = document.querySelector('#giohang');

const hienthi = document.querySelector(".hienthi");



var vungHienThi = document.createElement("iframe");



// mở page ngay tại trang web

sanpham.addEventListener('click', ()=>{

	vungHienThi.setAttribute("src","../html/crud_sach/danhsachsach.php");

	vungHienThi.setAttribute("class","vunghienthi");

	hienthi.appendChild(vungHienThi);

	closeSideBar();
});

theloai.addEventListener('click', ()=>{

	vungHienThi.setAttribute("src","../html/crud_theloai/danhsachtheloai.php");

	vungHienThi.setAttribute("class","vunghienthi");

	hienthi.appendChild(vungHienThi);

	closeSideBar();
});


user.addEventListener('click', ()=>{

	vungHienThi.setAttribute("src","../html/crud_user/danhsachuser.php");

	vungHienThi.setAttribute("class","vunghienthi");

	hienthi.appendChild(vungHienThi);

	closeSideBar();
});

hoadon.addEventListener('click', ()=>{

	vungHienThi.setAttribute("src","../html/crud_hoadon/danhsachhoadon.php");

	vungHienThi.setAttribute("class","vunghienthi");

	hienthi.appendChild(vungHienThi);

	closeSideBar();
});

giohang.addEventListener('click', ()=>{

	vungHienThi.setAttribute("src","../html/crud_giohang/danhsachgiohang.php");

	vungHienThi.setAttribute("class","vunghienthi");

	hienthi.appendChild(vungHienThi);

	closeSideBar();
});