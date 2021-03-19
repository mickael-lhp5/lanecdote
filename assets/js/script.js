AOS.init({
    duration: 1200,
})


// on définit la constante regroupant tous nos boutons 
const deleteButtons = document.querySelectorAll('.deleteButtons');
console.log(deleteButtons);
const deleteButtonModal = document.getElementById('deleteButtonModal');

// nous ajoutons un écouteur d'événement sur chaque bouton à l'aide du foreach
deleteButtons.forEach(element => {
    element.addEventListener('click', function () {
        // Nous allons recupérer les valeurs via les datas inclus dans chaque bouton
      
        // Nous attribuons la valeur de l'id du plat ou de la boisson pour le supprimer
        deleteButtonModal.value = element.dataset.id;

    })
});
