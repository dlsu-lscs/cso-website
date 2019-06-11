
function deleteofficer(elem){
    elem.parentNode.parentNode.removeChild(elem.parentNode);
}

var cntt = 1;
function addofficer(){
    var elem = document.getElementsByClassName("officer-containerpart")[0];
    elem.innerHTML+= `
    <div class = "officerformgroup --group--1/"`+cntt+`>
        <div class = "left minuscontainer" onclick = "deleteofficer(this)"><div class = "remove-officer"><i class = "fa fa-minus"></i></div></div>
        <div class = "form-group left --colorgroup --officergroup">
            Name<br>
        <input type = "text" name = "officer-name--none`+cntt+`" placeholder = 'Name' class = "colortext officertext" value = "">
        </div>

        <div class = "form-group left --colorgroup --officergroup">
            Position<br>
            <input type = "text" name = "officer-position--none`+cntt+`" placeholder = 'Position' class = "colortext officertext" value = "">
        </div>
    </div>
    `;
    cntt++;
}