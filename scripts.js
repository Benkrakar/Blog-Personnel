const button = document.getElementById('button');
const loginbtn = document.getElementById('loginbtn');
const userInput = document.getElementById('username');
const passInput = document.getElementById('password');



loginbtn.addEventListener('click',(e)=>{
 user = userInput.value
 pass = passInput.value
 

  if (user=="" & pass=="") {
    e.preventDefault()
    Swal.fire('Veuillez entrer votre nom d\'utilisateur et votre mot de passe')
    userInput.style.border="1px solid red"
    passInput.style.border="1px solid red"

   
  }else if (user=="") {
    e.preventDefault()
    Swal.fire('Veuillez entrer votre nom d\'utilisateur ')
    userInput.style.border="1px solid red"
   
  }else if (pass=="") {
    e.preventDefault()
    Swal.fire('Veuillez entrer votre mot de passe')
    passInput.style.border="1px solid red"
   
  }
})



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