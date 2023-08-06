
// tampil di modal
// $("#profil").on("click", ".tbl", function () {
//   $.ajax({
//     url: "data/mhs.json",
//     type: "GET",
//     dataType: "json",
//     success: function (data) {
//       if (data.Response === "True") {
//         $(".modal-body").html(`
//           <div class="container-fluid">
//             <div class="row">
//               <div class="col-md-4">
//                 <img src="../uas/gambar/${data.Foto}">
//               </div>
//               <div class="col-md-8">
//                 <ul class="list-group">
//                   <li class="list-group-item"><h2>${data.Prodi}</h2></li>
//                   <li class="list-group-item">${data.Nama}</li>
//                   <li class="list-group-item">${data.Nim}</li>
//                   <li class="list-group-item">${data.Asal}</li>
//                   <li class="list-group-item">${data.Tempat}</li>
//                   <li class="list-group-item">${data.Sosmed}</li>
//                   <li class="list-group-item"></li>
//                 </ul>
//               </div>
//             </div>
//           </div>`);
//       }
//     },
//     error: function (jqXHR, textStatus, errorThrown) {
//       console.error("Error:", textStatus, errorThrown);
//     },
//   });
// });

function loadDataToModal(){
  fetch('mhs.json')
  .then(response => response.json())
  .then(data => {
    let modalBody = document.querySelector('.modal-body');
    modalBody.innerHTML = '';

    data.forEach(item => {
      let itemDiv = document.createElement('div');
      itemDiv.innerHTML = '<div class="container-fluid"><div class="row"><div class="col-md-4"><img src="../uas/gambar/${data.Foto}"></div><div class="col-md-8"><ul class="list-group"><li class="list-group-item"><h2>${data.Prodi}</h2></li><li class="list-group-item">${data.Nama}</li><li class="list-group-item">${data.Nim}</li><li class="list-group-item">${data.Asal}</li><li class="list-group-item">${data.Tempat}</li><li class="list-group-item">${data.Sosmed}</li><li class="list-group-item"></li></ul></div></div></div>';
      modalBody.appendChild(itemDiv);
    });
  })
  .catch(error => console.error('Error data tidak dapat dimuat:', error));
}
const myModal = new bootstrap.Modal(document.getElementById('myModal'));
  myModal._element.addEventListener('show.bs.modal', loadDataToModal);