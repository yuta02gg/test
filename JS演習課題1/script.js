for(var star = 1; star <= 5; star++){
    document.write("★");
}

document.write("<br><br>");

for(var star1 =1; star1 <=2; star1++){
    for(var star2=1; star2<=3;star2++){
        document.write("★");
    }
    document.write("<br>");
}

document.write("<br>");

for(var star1 =1; star1 <=2; star1++){
    for(var star2=1; star2<=5;star2++){
        document.write("☆");
    }
    document.write("<br>");
}

document.write("<br>");

for(var star1 =1; star1 <=4; star1++){
    for(var star2=1; star2<=5;star2++){
        document.write("★");
    }
    document.write("<br>");
}

document.write("<br>");

for(var star1 =1; star1 <=4; star1++){
    for(var star2=1; star2<=3;star2++){
        document.write("★");
    }
    document.write("<br>");
}

document.write("<br>");

for(var no1 =0; no1< 3; no1++){
    for(var no2 =0; no2<=2; no2++){
        
        if(no2% 2==0){
            document.write("★");
        }else{
            document.write("☆");
        }
    }
    document.write("<br>");
}

document.write("<br>");

for(var no1 =0; no1<= 3; no1++){
    for(var no2 =0; no2<=4; no2++){
        if(no2% 2==0){
            document.write("★");
        }else{
            document.write("☆");
        }
    }
    document.write("<br>");
}

document.write("<br>");

for(var i=1; i<=5; i++){
    for(var a=1; a<=i; a++){
        document.write("★");
    }
    document.write("<br>");
}