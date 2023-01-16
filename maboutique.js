function defile(idContenu, idConteneur, temps) {
    function go() {
        --position;
        if ((position && hContenu) < min) {
            position = max;

        }
        leContenu.style.top = position + "px";
        setTimeout(go, temps);



    }
    var leContenu = document.getElementById(idContenu);
    var leConteneur = document.getElementById(idConteneur);
    var hContenu = leContenu.offsetHeight;
    var min = leContenu.offsetTop;
    var max = leConteneur.offsetHeight;
    var position = max;
    go();
}







window.onload = function() {
    document.getElementById("divPrincipal").style.visibility = "visible";
    document.getElementById("cmdOk").onclick = function() {
        if (document.getElementById("nom-login").value == "" || document.getElementById("password-login").value == "") {
            alert("les 2 champs doivent être remplis");
            return false;
        } else {
            document.getElementById("divTextIdent").style.visibility = "hidden";
            document.getElementById("divTextBienvenu").style.visibility = "visible";
            return true;
        }
    }
    document.getElementById("aDeconnecter").onclick = function() {
        document.getElementById("divTextIdent").style.visibility = 'visible';
        document.getElementById("divTextBienvenu").style.visibility = "hidden";
    }
    defile("divTextNews", "divNews", 10);
}

   
