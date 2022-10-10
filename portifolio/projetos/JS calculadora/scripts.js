function calcret() {
    let area, perim;
    let ladoA = document.getElementById('entrada-lado-a').value;
    let ladoB = document.getElementById('entrada-lado-b').value;

    area = ladoA*ladoB;
    perim = 2*ladoA+2*ladoB;

    document.getElementById('result-area').value = area;
    document.getElementById('result-perim').value = perim;

    console.log(area);
    console.log(perim);
    
}