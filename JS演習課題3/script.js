function menseki(radius){
    return radius*radius*3.14+"㎠";
}

document.write(menseki(5));
document.write("<br>");
document.write(menseki(7));
document.write("<br>");
document.write(menseki(10));
document.write("<br><br>");



function price(adult,child){
    return adult*500+child*200+"円です。";
}

document.write("Aグループの合計金額"+"<br>"+price(2,4)+"<br>");
document.write("Bグループの合計金額"+"<br>"+price(1,5)+"<br>");
document.write("Cグループの合計金額"+"<br>"+price(3,7)+"<br>");