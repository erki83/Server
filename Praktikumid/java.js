function startTime() {
    var today=new Date(),
        h=today.getHours(),
        m=today.getMinutes(),
        s=today.getSeconds();

    // add a zero in front of numbers<10
    m=checkTime(m);
    s=checkTime(s);
    document.getElementById('kell').innerHTML=h+":"+m+":"+s;
}

function checkTime(i) {
    if (i<10) {
        i="0" + i;
    }
    return i;
}
