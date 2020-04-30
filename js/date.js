function formatDate(){
    if (dd < 10) {
        dd = '0' + dd;
        } 
    if (mm < 10) {
        mm = '0' + mm;
        } 
}

var date_a = new Date();
date_a.setDate(date_a.getDate() - 2);
var dd = date_a.getDate();
var mm = date_a.getMonth() + 1;
var yyyy = date_a.getFullYear();
    formatDate();
var date_a = dd + '.' + mm + '.' + yyyy;
document.getElementById("date_a").innerHTML = date_a;


var date_b = new Date();
date_b.setDate(date_b.getDate() - 1);
var dd = date_b.getDate();
var mm = date_b.getMonth() + 1;
var yyyy = date_b.getFullYear();
    formatDate();
var date_b = dd + '.' + mm + '.' + yyyy;
document.getElementById("date_b").innerHTML = date_b;

var date_c = new Date();
var dd = date_c.getDate();
var mm = date_c.getMonth() + 1;
var yyyy = date_c.getFullYear();
    formatDate();
var date_c = dd + '.' + mm + '.' + yyyy; 
document.getElementById("date_c").innerHTML = date_c; 

var date_d = new Date();
date_d.setDate(date_d.getDate() + 1);
var dd = date_d.getDate();
var mm = date_d.getMonth() + 1;
var yyyy = date_d.getFullYear();
    formatDate();
var date_d = dd + '.' + mm + '.' + yyyy;
document.getElementById("date_d").innerHTML = date_d;

var date_d = new Date();
date_d.setDate(date_d.getDate() + 1);
var dd = date_d.getDate();
var mm = date_d.getMonth() + 1;
var yyyy = date_d.getFullYear();
    formatDate();
var date_d = dd + '.' + mm + '.' + yyyy;
document.getElementById("date_e").innerHTML = date_d;

var date_e = new Date();
date_e.setDate(date_e.getDate() + 2);
var dd = date_e.getDate();
var mm = date_e.getMonth() + 1;
var yyyy = date_e.getFullYear();
    formatDate();
var date_e = dd + '.' + mm + '.' + yyyy;
document.getElementById("date_e").innerHTML = date_e;

var date_f = new Date();
date_f.setDate(date_f.getDate() + 3);
var dd = date_f.getDate();
var mm = date_f.getMonth() + 1;
var yyyy = date_f.getFullYear();
    formatDate();
var date_f = dd + '.' + mm + '.' + yyyy;
document.getElementById("date_f").innerHTML = date_f;

var date_g = new Date();
date_g.setDate(date_g.getDate() + 4);
var dd = date_g.getDate();
var mm = date_g.getMonth() + 1;
var yyyy = date_g.getFullYear();
    formatDate();
var date_g = dd + '.' + mm + '.' + yyyy;
document.getElementById("date_g").innerHTML = date_g;

var date_h = new Date();
date_h.setDate(date_h.getDate() + 5);
var dd = date_h.getDate();
var mm = date_h.getMonth() + 1;
var yyyy = date_h.getFullYear();
    formatDate();
var date_h = dd + '.' + mm + '.' + yyyy;
document.getElementById("date_h").innerHTML = date_h;

var date_i = new Date();
date_i.setDate(date_i.getDate() + 6);
var dd = date_i.getDate();
var mm = date_i.getMonth() + 1;
var yyyy = date_i.getFullYear();
    formatDate();
var date_i = dd + '.' + mm + '.' + yyyy;
document.getElementById("date_i").innerHTML = date_i;

var date_j = new Date();
date_j.setDate(date_j.getDate() + 7);
var dd = date_j.getDate();
var mm = date_j.getMonth() + 1;
var yyyy = date_j.getFullYear();
    formatDate();
var date_j = dd + '.' + mm + '.' + yyyy;
document.getElementById("date_j").innerHTML = date_j;

var date_k = new Date();
date_k.setDate(date_k.getDate() + 8);
var dd = date_k.getDate();
var mm = date_k.getMonth() + 1;
var yyyy = date_k.getFullYear();
    formatDate();
var date_k = dd + '.' + mm + '.' + yyyy;
document.getElementById("date_k").innerHTML = date_k;

var date_l = new Date();
date_l.setDate(date_l.getDate() + 9);
var dd = date_l.getDate();
var mm = date_l.getMonth() + 1;
var yyyy = date_l.getFullYear();
    formatDate();
var date_l = dd + '.' + mm + '.' + yyyy;
document.getElementById("date_l").innerHTML = date_l;

var date_m = new Date();
date_m.setDate(date_m.getDate() + 10);
var dd = date_m.getDate();
var mm = date_m.getMonth() + 1;
var yyyy = date_m.getFullYear();
    formatDate();
var date_m = dd + '.' + mm + '.' + yyyy;
document.getElementById("date_m").innerHTML = date_m;