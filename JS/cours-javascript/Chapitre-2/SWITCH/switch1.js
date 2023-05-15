var i=0;
var somme=0;
var moyenne=0;
var nb_notes=0;
nb_notes=prompt("Souhaitez-vous faire la moyenne de combien de notes ?","Nb de Notes");
nb_notes=parseInt(nb_notes);
notes = new Array(nb_notes);
for(i=1;i<=nb_notes;i++)
{
     
    note_i=prompt("Entrez la note");
    notes[i-1]=parseInt(note_i);
    somme+=notes[i-1]; 
    
    
    
    /* "[i-1]" sert à ne pas rajouter de colonnes*/
    /* "+="" opérateur d'affectations*/
}
moyenne=(somme/nb_notes);
alert("La moyenne des notes est : "+moyenne);