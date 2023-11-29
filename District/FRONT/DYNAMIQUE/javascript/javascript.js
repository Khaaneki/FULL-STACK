var filtre=new RegExp('^[a-zA-Z]+$');
var filtretel=new RegExp('^[0-9]{10}$');
var filtremail=new RegExp('^[a-zA-Z0-9.-]+@[a-zA-Z0-9.-]{2,}.[a-zA-Z]{2,4}$')
var form=document.getElementById('form1');
var nom_prenom=document.getElementById('nom_prenom-error');
var tel=document.getElementById('tel-error');
var mail=document.getElementById('mail-error');
var adresse=document.getElementById('adresse-error');
form.querySelector("#button1").onclick  = function(e) {
    nom_prenom.innerHTML="";
    mail.innerHTML="";
    tel.innerHTML="";
    adresse.innerHTML="";
    adresse.innerHTML="";
    if (form.elements['nom_prenom'].value=='')
    {
        nom_prenom.innerHTML="Ce champ est obligatoire";
        e.preventDefault();
        
    }else if(filtre.test(form.elements['nom_prenom'].value)==false)
    {
        nom_prenom.innerHTML="le champ n'a pas été rempli correctement";
        e.preventDefault();
        
    }
    if (form.elements['tel'].value=='')
    {
        tel.innerHTML="Ce champ est obligatoire";
        e.preventDefault();
        
    }else if(filtretel.test(form.elements['tel'].value)==false)
    {
        tel.innerHTML="Le champ n'a pas ete rempli correctement";
        e.preventDefault();
       
    }
    if (form.elements['mail'].value=='')
    {
        mail.innerHTML="Ce champ est obligatoire";
        e.preventDefault();
        
    }else if(filtremail.test(form.elements['mail'].value)==false)
    {
        mail.innerHTML="Le champ n'a pas ete rempli correctement";
        e.preventDefault();
        
    }
    if (form.elements['adresse'].value=='')
    {
        adresse.innerHTML='Ce champ est obligatoire';
        e.preventDefault();
    }

}