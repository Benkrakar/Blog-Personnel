const button = document.getElementById('button');
const loginbtn = document.getElementById('loginbtn');









const deletePersonBtns = document.querySelectorAll(".delete-person")
deletePersonBtns.forEach(btn=>{
    btn.addEventListener('click',(e)=>{
        e.preventDefault()
        const id = e.target.dataset.id
        Swal.fire({
            title: 'Supprimer lélément sélectionné?',
            text: "Voulez-vous vraiment supprimer cet article de votre blog ?",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Supprimer'
          }).then((result) => {
            if (result.isConfirmed) {
              document.location.href = "delete.php?delete_id="+id
            }
          })
    })

})