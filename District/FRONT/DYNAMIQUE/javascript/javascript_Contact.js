var filtre=new RegExp('^[a-zA-Z]+$');
var filtretel=new RegExp('^[0-9]{10}$');
var filtremail=new RegExp('^[a-zA-Z0-9.-]+@[a-zA-Z0-9.-]{2,}.[a-zA-Z]{2,4}$')
var form=document.getElementById('form1');
var nom=document.getElementById('nom-error');
var prenom=document.getElementById('prenom-error');
var telephone=document.getElementById('telephone-error');
var mail=document.getElementById('mail-error');
var commentaire=document.getElementById('question-error');

form.querySelector("#button1").onclick  = function(e) {

    window.alert('ok');
    nom.innerHTML="";
    prenom.innerHTML="";
    telephone.innerHTML="";
    mail.innerHTML="";
    telephone.innerHTML="";
    commentaire.innerHTML="";

    if (form.elements['nom'].value=='')
    {
        nom.innerHTML="Ce champ est obligatoire";
        e.preventDefault();
        
    }else if(filtre.test(form.elements['nom'].value)==false)
    {
        nom.innerHTML="le champ n'a pas été rempli correctement";
        e.preventDefault();
        
    }
    if (form.elements['prenom'].value=='')
    {
        prenom.innerHTML="Ce champ est obligatoire";
        e.preventDefault();
        
    }else if(filtre.test(form.elements['prenom'].value)==false)
    {
        prenom.innerHTML="le champ n'a pas été rempli correctement";
        e.preventDefault();
        
    }
    if (form.elements['telephone'].value=='')
    {
        telephone.innerHTML="Ce champ est obligatoire";
        e.preventDefault();
        
    }else if(filtretel.test(form.elements['telephone'].value)==false)
    {
        telephone.innerHTML="Le champ n'a pas ete rempli correctement";
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
    if (form.elements['commentaire'].value=='')
    {
        commentaire.innerHTML='Ce champ est obligatoire';
        e.preventDefault();
    }

}