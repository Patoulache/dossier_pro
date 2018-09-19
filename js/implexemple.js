AJOUT = {
    z : 2,
    
    ciblage : function() {
        var cible = document.querySelector("#ajout");
        cible.addEventListener("click", AJOUT.exemple);
    },

    exemple : function() {
        var div = document.querySelector(".activtype");
        var cop1 = div.children[1].cloneNode(true);
        var cop2 = div.children[2].cloneNode(true);
        cop1.childNodes[0].innerText = cop1.childNodes[0].innerText.replace("1", AJOUT.z);
        console.log(div);
        console.log(cop1);
        div.appendChild(cop1);
        div.appendChild(cop2);
        AJOUT.z++;
    }
    
};

AJOUT.ciblage();